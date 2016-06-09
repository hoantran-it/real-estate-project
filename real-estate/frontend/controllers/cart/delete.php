<?php

$pid = intval($_GET['pid']);
cart_delete($pid);

header('location:index.php?controller=cart');
