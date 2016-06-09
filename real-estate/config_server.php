<?php
/** setting **/
define('BASEURL' , 'http://www.nhadatphuquoc.com/');
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'nhnha_admin', '@dm1n2014') or die('Could not connect to Server');
mysql_select_db('nhnhakvw_nhadatphuquoc') or die('Could not connect to Database');
mysql_set_charset('utf-8');