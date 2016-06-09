<?php
/**
 * Chi tiết đơn hàng
 */
function order_detail($oid) {
	$sql = "SELECT products.id, name, image, price, number 
			FROM order_detail
			INNER JOIN products ON products.id=order_detail.product_id
			WHERE order_detail.order_id=$oid";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;

        }
        mysql_free_result($query);
    }
    return $data;
}