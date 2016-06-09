<?php
function checkEmail($email) {
	if($email == '') return 0;
	$sql = "SELECT * FROM users WHERE email='$email'";
	$query = mysql_query($sql) or die(mysql_error());

	$data = NULL;
	if (mysql_num_rows($query) > 0) {
		return 1;
	}
	return 0;
}

echo checkEmail($_POST['email']);