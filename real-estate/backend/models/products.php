<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function products_delete($id) {
    $id = intval($id);
    $product = get_a_record('products', $id);
    $image = 'public/upload/product/'.$product['image'];
    if (is_file($image)) {
    	unlink($image);
    }
    $sql = "DELETE FROM products WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}