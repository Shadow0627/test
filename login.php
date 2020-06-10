<?php 
include('src/class/init.php');
session_start();
if(isset($_POST['login']))
{
 if(isset($_POST['email']))
 {
     if(isset($_POST['password']))
     {
        $user->login($_POST['email'], $_POST['password']);
     }
     else
     {
        $_SESSION['error'] = "Nie podano wszystkich danych logowania!";
        header('Location: index.php');
     }
 }
 else
 {
    $_SESSION['error'] = "Nie podano wszystkich danych logowania!";
    header('Location: index.php');
 }
}
else
{
    $_SESSION['error'] = "Nie podano wszystkich danych logowania!";
    header('Location: index.php');
}

?>