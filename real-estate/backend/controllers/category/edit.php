<?php
//load model
require_once('backend/models/categories.php');

//if form submit 
if (!empty($_POST)) {
	$category = array(
		'id' => intval($_POST['id']),
		'name' => escape($_POST['name']),
		'position' => intval($_POST['position'])
	);
	save('categories', $category);
	header('location:admin.php?controller=category');
} else {
	
}

if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid=0;

//data
$title = ($cid==0) ? 'Thêm danh mục' : 'Sửa danh mục';
$user = $_SESSION['user'];
$category = get_a_record('categories', $cid);

//load view
require('backend/views/category/edit.php');