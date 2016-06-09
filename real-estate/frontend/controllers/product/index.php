<?php
//load model

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 9;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
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