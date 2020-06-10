<?php
include('src/class/init.php');
session_start();
if(isset($_POST['gogogo']))
{
if($_POST['password1'] == $_POST['password2'])
{
$user->chpwd($_SESSION['user_id'], $_POST['password1']);
}
else
{
$_SESSION['error'] = "złe hasła !! Nie są takie same!";
}
}
?>