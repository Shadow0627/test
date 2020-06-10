
<!DOCTYPE html>
<html lang='pl'>
    <head>
        <title>Logowanie do panelu administratora</title>
        <link rel='stylesheet' href='scr/style/index.css'>
        <meta charset='utf-8'>
    </head>
    <body>
        <div class='top'>
        <h2>Logowanie do panelu administratora</h2>
        </div>
        <form class='top-form' method='POST'>
        <lable for='name'>Nazwa Użytkownika: </lable>
        <input type="text" name='name' id='name'>
        <lable for='pass'>Hasło: </lable>
        <input type='password' name='pass' id='pass'>
        <input type='submit' name='go' value='Zaloguj!'>
    </body>
</html>


<?php
if(isset($_POST['go']))
{
$name = $_POST['name'];
$pass = $_POST['pass'];
$user->login($name, $pass);
}
?>