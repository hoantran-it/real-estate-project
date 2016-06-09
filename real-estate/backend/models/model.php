<?php

/**
 * LÆ°u dá»¯ liá»‡u vÃ o CSDL
 * $data lÃ  máº£ng chá»©a dá»¯ liá»‡u.
 */
function save($table, $data = array()) {
    //xá»­ lÃ½ dá»¯ liá»‡u $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysql_real_escape_string($value);
        $values[] = "`$key`='$value'";
    }

    //lÆ°u dá»¯ liá»‡u: INSERT/UPDATE
    $id = intval($data['id']);
    if ($id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE id=$id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }

    mysql_query($sql) or die(mysql_error());

    $id = ($id>0) ? $id : mysql_insert_id();
    return $id;
}

/**
 * XÃ³a báº£n ghi cÃ³ khÃ³a chÃ­nh lÃ  $id
 */
function delete($table, $id) {
    $id = intval($id);
    $sql = "DELETE FROM `$table` WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}

/**
 * Tráº£ vá»� báº£n ghi cÃ³ khÃ³a chÃ­nh lÃ  $id
 */
function get_a_record($table, $id, $select = '*') {
    //truy váº¥n
    $id = intval($id);
    $sql = "SELECT $select FROM `$table` WHERE id=$id";
    $query = mysql_query($sql) or die(mysql_error());

    //dá»¯ liá»‡u tráº£ vá»�
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
    return $data;
}

/**
 * Tráº£ vá»� táº¥t cáº£ báº£n ghi thá»�a mÃ£n Ä‘iá»�u kiá»‡n trong $option. 
 */
function get_all($table, $options = array()) {
    //xá»­ lÃ½ $options
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    //truy váº¥n
    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysql_query($sql) or die(mysql_error());

    //dá»¯ liá»‡u tráº£ vá»�
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }

    return $data;
}

/**
 * Tráº£ vá»� tá»•ng sá»‘ báº£n ghi thá»�a mÃ£n Ä‘iá»�u kiá»‡n trong $option.
 */
function get_total($table, $options = array()) {
    //xá»­ lÃ½ $options
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';

    //truy váº¥n        
    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
    $query = mysql_query($sql) or die(mysql_error());

    //dá»¯ liá»‡u tráº£ vá»�
    $row = mysql_fetch_assoc($query);

    return $row['total'];
}

function get_main_info_record($table, $id, $select = '*') {
	$sql = "SELECT $select FROM `$table` WHERE id='$id'";
	$query = mysql_query($sql) or die(mysql_error());

	//dá»¯ liá»‡u tráº£ vá»�
	$data = NULL;
	if (mysql_num_rows($query) > 0) {
		$data = mysql_fetch_assoc($query);
		mysql_free_result($query);
	}
	return $data;
}

function save_info($table, $data = array()) {
	
	//xá»­ lÃ½ dá»¯ liá»‡u $data
	$values = array();
	foreach ($data as $key => $value) {
		$value = mysql_real_escape_string($value);
		$values[] = "`$key`='$value'";
	}

	//lÆ°u dá»¯ liá»‡u: INSERT/UPDATE
	$id = $data['id'];
	if ($id != '') {
		$sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE id='$id'";
	} else {
		$sql = "INSERT INTO `$table` SET " . implode(',', $values);
	}

	mysql_query($sql) or die(mysql_error());

	$id = ($id>0) ? $id : mysql_insert_id();
	return $id;
}