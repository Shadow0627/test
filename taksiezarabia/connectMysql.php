<? 
$mysqli = new mysqli('localhost', 'badboy_stabil75', 'JR5^f12~1@}Db(3', 'badboy_prouve');
if ($mysqli->connect_error) {
    // w przypadku błędu (od wersji PHP 5.3), wyświetli się odpowiedni komunikat
    die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
    // w przypadku błędu (do wersji PHP 5.3), wyświetli się odpowiedni komunikat
    if (mysqli_connect_error()) {
       die('Connect Error (' . mysqli_connect_errno() . ') '
       . mysqli_connect_error());
    }
}
?>