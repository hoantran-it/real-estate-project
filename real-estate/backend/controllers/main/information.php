<?php
//load model
require_once('backend/models/model.php');
$page = 'information';
$page_title = 'Giới thiệu';
//if form submit 
if (!empty($_POST)) {
	$info = array(
		'id' => $page,
		'title' => $_POST['title'],
		'description' => $_POST['description']
	);
	
	$infoId = save_info('main_information', $info);

	//upload áº£nh	
	$date = date('Y-m-d-H-i-s');
	$image_name = $page.'-'.$date;
    $config = array(
    	'name' => $image_name,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image', $config);
    
    //cáº­p nháº­t áº£nh má»›i
    if($image){
    	$info = array(
    		'id' => $page,
    		'picture' => $image
    	);
    	save_info('main_information', $info);
    }
	
	//chuyá»ƒn hÆ°á»›ng
	header('location:admin.php');
}

//data
$title = 'Liên hệ';
$user = $_SESSION['user'];

$information = get_main_info_record('main_information', $page);
if (!$information) {
	show_404();
}

$categories = get_all('categories', array(
	'select'=>'id,name',
	'order_by' => 'position ASC'
));

//load view
require('backend/views/main/edit.php');