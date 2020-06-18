<?php 
include('../src/class/init.php');
session_start();
if(isset($_SESSION['admin']))
{
    if($_SESSION['admin'] == 15)
    {
        include('../src/include/adminpanel.php');
    }
}
else
    {
        include('../src/include/logintocms.php');
    }

?>