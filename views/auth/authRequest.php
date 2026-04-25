<?php
include_once $root. "/config/db.php";

$errors = [];
$old = [];
if(isset($_POST['login'])) {
    $email = trim($_POST['email'] ?? '');
    $old['email'] = $email;
    if(empty($email)) {
       $errors['email'] = "Email is Required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid Email Format";
    }
    $password = trim($_POST['password'] ?? '');

    if(empty($password)) {
        $errors['password'] = "Password is Required";
    }

    if(!empty($errors)) {
      $_SESSION['errors'] = $errors;
      $_SESSION['old'] = $old;
      header("Location:$base_url/admin/login");
      exit;
    }

    $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $sql->execute([$email]);
    $user = $sql->fetch(PDO::FETCH_ASSOC);
     
    if($user && password_verify($password,$user['password'])) {
        $_SESSION['admin'] = true;
        $_SESSION['user'] = ['user_id' => $user['id'],'name' => $user['name'],'email' => $user['email']];
        header("Location:$base_url/admin/dashboard");
        exit;
    }else{
        $_SESSION['error-message'] = "Invalid Login Details";
        header("Location:$base_url/admin/login");
        exit;
    }
    
}




?>