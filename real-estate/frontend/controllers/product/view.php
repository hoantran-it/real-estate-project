<?php
//load model

//data
$pid = intval($_GET['pid']);
$product = get_a_record('products', $pid);

if (!$product) {
	show_404();
}

$title = $product['name'];
$categories = get_all('categories', array(
	'select' => 'id, name',
	'order_by' => 'position ASC'
));

// Seen item
$itemIdArr = array();
$itemArr = array();
if(isset($_COOKIE["id"])) {
	$itemIdArr = json_decode($_COOKIE["id"]);
	$arrlength=count($itemIdArr);
	for($x=$arrlength-1; $x>=0; $x--) {
		$item = get_a_record('products', $itemIdArr[$x]);
		array_push($itemArr,$item);
  	}
}

//load view
require('frontend/views/product/view.php');