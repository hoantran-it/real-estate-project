<?php

$pid = intval($_GET['pid']);
cart_add($pid);

header('location:index.php?controller=cart');
