<?php
//load model

//data
$cid = intval($_GET['cid']);
$category = get_a_record('categories', $cid);

if (!$category) {
	show_404();
}

$title = $category['name'];

$categories = get_all('categories', array(
	'select' => 'id, name',
	'order_by' => 'position ASC'
));

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'category_id='.$cid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'index.php?controller=product';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

$products = get_all('products', $options);
$pagination = pagination($url, $page, $total);

//load view
require('frontend/views/product/index.php');