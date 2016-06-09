<?php
/**
 * Đăng nhập hệ thống
 * @param  string
 * @param  string
 * @return boolean
 */
function user_login($email, $password) {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysql_query($sql) or die(mysql_error());
    if (mysql_num_rows($query)>0) {
        $_SESSION['user'] = mysql_fetch_assoc($query);
        return true;
    }
    return false;
}