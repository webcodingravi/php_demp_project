<?php
session_start();

$root = __DIR__;

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
        include $root . "/views/auth/login.php";

    }
      // LOGIN PROCESS (AUTH REQUEST)
    elseif ($url === 'admin/auth') {

        include $root . "/views/auth/authRequest.php";

    }
    
    elseif ($url === 'admin/dashboard') {
       
        include $root . "/views/admin/layout/header.php";
        include $root . "/views/admin/layout/sidebar.php";

        include $root . "/views/admin/pages/dashboard.php";
        include $root . "/views/admin/layout/footer.php";


    }elseif($url === "admin/logout") {
        session_unset();
        session_destroy();
        header("Location:$base_url/admin/login");
        exit;
    }
    
    else {
        include $root . "/views/NotFound.php";
    }

/* ================= FRONT ROUTES ================= */
} else {

    include $root . "/views/front/layout/header.php";

    switch ($url) {

        case '':
            include $root . "/views/front/pages/home.php";
            break;

        case 'about':
            include $root . "/views/front/pages/about.php";
            break;

        case 'services':
            include $root . "/views/front/pages/services.php";
            break;

        case 'portfolio':
            include $root . "/views/front/pages/portfolio.php";
            break;

        case 'contact':
            include $root . "/views/front/pages/contact.php";
            break;

        default:
            include $root . "/views/NotFound.php";
            break;
    }

    include $root . "/views/front/layout/footer.php";
}
?>