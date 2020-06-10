<?php
error_reporting(-1);
session_start();
if(isset($_POST['register'])){
if($_POST['email'] == $_POST['email-again'])
{
  include('src/class/init.php');
  $user->register($_POST['email']);
}
else
{
    $_SESSION['error'] = "Złe dane rejestracji";
     header('Location: index.php');
}
}
else
{
  $_SESSION['error'] = "Złe dane rejestracji";
   header('Location: index.php');
}