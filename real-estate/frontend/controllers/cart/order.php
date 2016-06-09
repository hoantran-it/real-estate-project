<?php
//load model

//data
$title = 'Đơn hàng';
$cart = cart_list();

if (empty($cart)) {
	header('location:.');
}

//load view
require('frontend/views/cart/order.php');