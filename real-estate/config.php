<?php
/** setting **/
define('BASEURL' , 'http://shop.vn/');
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', '') or die('Could not connect to Server');
mysql_select_db('shop_db') or die('Could not connect to Database');
mysql_set_charset('utf-8');