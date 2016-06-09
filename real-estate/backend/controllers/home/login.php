<?php
//load model
require_once('backend/models/users.php');

//xá»­ lÃ½
if (!empty($_POST)) {
    $email = escape($_POST['email']);
    $password = md5($_POST['password']);
    user_login($email, $password);
}
if (isset($_SESSION['user'])) {
    header('location:admin.php');
} else if(!empty($_POST)){
	$error_message= "Thông tin đăng nhập không đúng. Vui lòng nhập lại.";
}

//data
$title = 'Đăng nhập';

//load view
require('backend/views/home/login.php');