<?php
//load model
require_once('backend/models/model.php');
$page = 'support';
$page_title = 'Thông tin hỗ trợ';
//if form submit 
if (!empty($_POST)) {

	// Nick chat 1
	$nickchat1 = array(
		'id' => 'nickchat1',
		'title' => escape($_POST['nickchat1']),
		'description' => escape($_POST['thongtin1'])
	);
	save_info('main_information', $nickchat1);
	
	// Nick chat 2
	$nickchat2 = array(
			'id' => 'nickchat2',
			'title' => escape($_POST['nickchat2']),
			'description' => escape($_POST['thongtin2'])
	);
	save_info('main_information', $nickchat2);
	
	// Hotline 1
	$hotline1 = array(
			'id' => 'hotline1',
			'title' => escape($_POST['hotline1']),
			'description' => escape($_POST['ten1'])
	);
	save_info('main_information', $hotline1);
	
	// Hotline 2
	$hotline2 = array(
			'id' => 'hotline2',
			'title' => escape($_POST['hotline2']),
			'description' => escape($_POST['ten2'])
	);
	save_info('main_information', $hotline2);
	
	// Advertisement 1
	$advertisement1 = array(
			'id' => 'advertisement1',
			'title' => escape($_POST['title1']),
			'description' => escape($_POST['link1'])
	);
	save_info('main_information', $advertisement1);

	//upload áº£nh	
	$date = date('Y-m-d-H-i-s');
	$image_name = 'advertisement1-'.$date;
    $config = array(
    	'name' => $image_name,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image1', $config);
    
    // cap nhat anh moi
    if($image){
    	$info = array(
    		'id' => 'advertisement1',
    		'picture' => $image
    	);
    	save_info('main_information', $info);
    }
	
    // Advertisement 2
    $advertisement2 = array(
    		'id' => 'advertisement2',
    		'title' => escape($_POST['title2']),
    		'description' => escape($_POST['link2'])
    );
    save_info('main_information', $advertisement2);
    
    //upload áº£nh
    $date = date('Y-m-d-H-i-s');
    $image_name = 'advertisement2-'.$date;
    $config = array(
    		'name' => $image_name,
    		'upload_path'  => 'public/upload/product/',
    		'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image2', $config);
    
    // cap nhat anh moi
    if($image){
    	$info = array(
    			'id' => 'advertisement2',
    			'picture' => $image
    	);
    	save_info('main_information', $info);
    }
    
    // Advertisement 3
    $advertisement3 = array(
    		'id' => 'advertisement3',
    		'title' => escape($_POST['title3']),
    		'description' => escape($_POST['link3'])
    );
    save_info('main_information', $advertisement3);
    
    //upload áº£nh
    $date = date('Y-m-d-H-i-s');
    $image_name = 'advertisement3-'.$date;
    $config = array(
    		'name' => $image_name,
    		'upload_path'  => 'public/upload/product/',
    		'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image3', $config);
    
    // cap nhat anh moi
    if($image){
    	$info = array(
    			'id' => 'advertisement3',
    			'picture' => $image
    	);
    	save_info('main_information', $info);
    }
    
	// chuyen trang
	header('location:admin.php');
}

//data
$title = 'Hỗ trợ';
$user = $_SESSION['user'];

$nickchat1 = get_main_info_record('main_information', 'nickchat1');
$nickchat2 = get_main_info_record('main_information', 'nickchat2');
$advertisement1 = get_main_info_record('main_information', 'advertisement1');
$advertisement2 = get_main_info_record('main_information', 'advertisement2');
$advertisement3 = get_main_info_record('main_information', 'advertisement3');
$hotline1 = get_main_info_record('main_information', 'hotline1');
$hotline2 = get_main_info_record('main_information', 'hotline2');
	
// if (!$information) {
// 	show_404();
// }

$categories = get_all('categories', array(
	'select'=>'id,name',
	'order_by' => 'position ASC'
));

//load view
require('backend/views/main/support.php');