<?php
if(!isset($_SESSION['admincms']))
{
header('Location: /index.php');
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administraotra</title>
    <link rel="stylesheet" href="./scr/style/adminpanel.css">
</head>
<body>
    <header>
        <h3>Zalogowany jako: <?php echo $_SESSION['name']?> </h3>
        <form method="POST"><input type="submit" name="logout" value='Wyloguj'></form>
    </header>
    <main>
        <section>
            <h3>Wyślij e-mail do wszystkic użytkowników</h3>
            <form action="" method="post">
                <label for="all">Treść emaila: </label>
                <textarea name="content-all" id="all" cols="30" rows="10"></textarea>
                <input type="submit" name="all_email" value="Wyślij!">
            </form>
        </section>
    </main>
</body>
</html>






<?php 
if(isset($_POST['logout']))
{
    $user->logout();
}

if(isset($_POST['all_email']))
{
    $cms_f->mailtoall($_POST['all_email']);
}

?>