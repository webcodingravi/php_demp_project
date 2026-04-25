<?php
session_start();
$root = __DIR__;

include $root."/core/helpers.php";



$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
    ? "https://" 
    : "http://";
    

$base_url = $protocol . $_SERVER['HTTP_HOST'] 
          . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');


   
$url = trim($_GET['url'] ?? '', '/');
    

/* ================= ADMIN ROUTES ================= */
if (strpos($url, 'admin') === 0) {

    if(!in_array($url,['admin','admin/login','admin/auth'])) {
        if(!isset($_SESSION['admin'])) {
            header("Location:$base_url/admin/login");
            exit;
        }
    }
    
    if ($url === 'admin' || $url === 'admin/login') {
        if(isset($_SESSION['admin'])) {
            header("Location:$base_url/admin/dashboard");
        }
        include $root . "/views/auth/login.php";

    }
      // LOGIN PROCESS (AUTH REQUEST)
    elseif ($url === 'admin/auth') {

        include $root . "/views/auth/authRequest.php";

    }
    
    
    elseif($url === "admin/logout") {
        session_unset();
        session_destroy();
        header("Location:$base_url/admin/login");
        exit;
    }
    
 else{

     // 👉 Dynamic page load
        $page = str_replace('admin/', '', $url);

        $title = ucfirst($page) . " - Admin Panel";
        include $root . "/views/admin/layout/header.php";
        include $root . "/views/admin/layout/sidebar.php";


        $file = $root . "/views/admin/pages/$page.php";

        if (file_exists($file)) {
            include $file;
        } else {
            include $root . "/views/NotFound.php";
        }

        include $root . "/views/admin/layout/footer.php";
    }
    

/* ================= FRONT ROUTES ================= */
}else{ 
     $title = "My Website";

    switch ($url) {

        case '':
            $title = "Home";
            $page = "home.php";
            break;

        case 'about':
            $title = "About Us";
            $page = "about.php";
            break;

        case 'services':
            $title = "Services";
            $page = "services.php";
            break;

        case 'portfolio':
            $title = "Portfolio";
            $page = "portfolio.php";
            break;

        case 'contact':
            $title = "Contact";
            $page = "contact.php";
            break;

        default:
            $title = "Not Found";
            $page = "../NotFound.php";
            break;
    }

  
    include $root . "/views/front/layout/header.php";


    include $root . "/views/front/pages/$page";

    include $root . "/views/front/layout/footer.php";
}
?>