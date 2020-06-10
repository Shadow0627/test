<?php include('db.php');
include('user.php');
include('cms_f.php');

$user =new User($database);
$cms_f = new Cms_F($database);
?>