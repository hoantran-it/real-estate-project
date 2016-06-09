<?php
//load model
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 9;
$offset = ($page - 1) * $limit;

$where_clause = '';
if($_POST['keyword'] != '' ){
	$keyword = $_POST['keyword'];
	$where_clause = "(name like '%$keyword%' OR summary like '%$keyword%')";
}

if($_POST['search_category_id'] != '0' ){
	$search_categoryid = $_POST['search_category_id'];
	if($where_clause != '')
		$where_clause = $where_clause." AND ";
	$where_clause = $where_clause."category_id ='$search_categoryid'";
}

if($_POST['from-price'] != '' ){
	$fromPrice = $_POST['from-price'];
	if($where_clause != '')
		$where_clause = $where_clause." AND ";
	$where_clause = $where_clause."price >= $fromPrice";
}

if($_POST['to-price'] != '' ){
	$toPrice = $_POST['to-price'];
	if($where_clause != '')
		$where_clause = $where_clause." AND ";
	$where_clause = $where_clause."price <= $toPrice";
}

$options = array(
		'limit' => $limit,
		'offset' => $offset,
		'order_by' => 'id DESC',
		'where' => $where_clause
);

$url = 'index.php?controller=product';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);
//data
$title = 'Mua bán nhà đất Phú Quốc';
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total);
$categories = get_all('categories', array(
	'select' => 'id, name',
	'order_by' => 'position ASC'
));

//load view
require('frontend/views/product/index.php');