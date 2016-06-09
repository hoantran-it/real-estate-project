<?php
//load model
require_once('backend/models/categories.php');

if (isset($_POST['cid'])) {
	foreach ($_POST['cid'] as $cid) {
		$cid = intval($cid);
		categories_delete($cid);
	}
}

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'position ASC'
);

$url = 'admin.php?controller=category';
$total_rows = get_total('categories', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Danh mục sản phẩm';
$user = $_SESSION['user'];
$categories = get_all('categories', $options);
$pagination = pagination($url, $page, $total);

//load view
require('backend/views/category/index.php');