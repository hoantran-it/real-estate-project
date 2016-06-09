<?php
//load model
require_once('backend/models/products.php');

//if form submit 
if (!empty($_POST)) {
	$name = escape($_POST['name']);

	$product = array(
		'id' => intval($_POST['id']),
		'category_id' => intval($_POST['category_id']),
		'name' => $name,
		'summary' => $_POST['summary'],
		'price' => intval(str_replace('.', '', $_POST['price'])),
		'created_date' => date('Y-m-d')
	);
	$pid = save('products', $product);

	//upload áº£nh	
	$date = date('Y-m-d-H-i-s');
	$image_name = $pid.'-'.$date;
    $config = array(
    	'name' => $image_name,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF',
    );
    $image = upload('image', $config);
    
    //cáº­p nháº­t áº£nh má»›i
    if($image){
    	$product = array(
    		'id' => $pid,
    		'image' => $image
    	);
    	save('products', $product);
    }
	
	//chuyá»ƒn hÆ°á»›ng
	header('location:admin.php?controller=product');
}

if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid=0;

//data
$title = ($pid==0) ? 'Thêm tin mới' : 'Sửa tin';
$user = $_SESSION['user'];
$product = get_a_record('products', $pid);

$categories = get_all('categories', array(
	'select'=>'id,name',
	'order_by' => 'position ASC'
));

//load view
require('backend/views/product/edit.php');