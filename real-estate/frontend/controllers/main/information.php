<?php
//data
$information = get_main_info_record('main_information', 'information');

if (!$information) {
	show_404();
}

$title = 'Giới thiệu';
$categories = get_all('categories', array(
	'select' => 'id, name',
	'order_by' => 'position ASC'
));

//load view
require('frontend/views/main/information.php');