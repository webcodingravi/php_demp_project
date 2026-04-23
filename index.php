<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Work</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1e40af',
                    secondary: '#64748b',
                    accent: '#f59e0b',
                }
            }
        }
    }
    </script>

</head>

<body>
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

    if ($url === 'admin' || $url === 'admin/login') {
        include $root . "/views/auth/login.php";

    }
      // LOGIN PROCESS (AUTH REQUEST)
    elseif ($url === 'admin/auth') {

        include $root . "/views/auth/authRequest.php";

    }
    
    elseif ($url === 'admin/dashboard') {
        include $root . "/views/admin/dashboard.php";

    } else {
        include $root . "/views/NotFound.php";
    }

/* ================= FRONT ROUTES ================= */
} else {

    include $root . "/views/front/common/header.php";

    switch ($url) {

        case '':
            include $root . "/views/front/home.php";
            break;

        case 'about':
            include $root . "/views/front/about.php";
            break;

        case 'services':
            include $root . "/views/front/services.php";
            break;

        case 'portfolio':
            include $root . "/views/front/portfolio.php";
            break;

        case 'contact':
            include $root . "/views/front/contact.php";
            break;

        default:
            include $root . "/views/NotFound.php";
            break;
    }

    include $root . "/views/front/common/footer.php";
}
?>

</body>

</html>