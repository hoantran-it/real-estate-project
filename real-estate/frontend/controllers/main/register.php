<?php
//load model
// require_once('backend/models/model.php');
require_once('backend/models/users.php');

//if form submit 
if (!empty($_POST)) {
	$user = array(
		'id' => 0,
		'email' => escape($_POST['email']),
		'name' => escape($_POST['name']),
		'phone' => escape($_POST['phone']),
		'level' => 1
	);
	if (!empty($_POST['password'])) {
		$user['password'] = md5($_POST['password']);
	}
	save('users', $user);

	$_SESSION['user'] = $user;

	header('location:./admin.php');
}

//data
$title = 'Đăng ký thành viên';

$categories = get_all('categories', array(
		'select'=>'id,name',
		'order_by' => 'position ASC'
));

//load view
require('frontend/views/main/register.php');