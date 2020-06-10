<?
error_reporting(E_ALL);
ini_set('display_errors',1);
define ("OK", 0);
define ("SERVER_ERROR", 1);
define ("BAD_USER_NAME_LENGHT", 2);
define ("BAD_USER_PASS_LENGHT", 3);
define ("USER_NAME_ALREADY_EXISTS", 4);
define ("EMPTY_FIELDS", 5);

    $dlugosc_hasla ="10";

      if($dlugosc_hasla < 6 || $dlugosc_hasla > 11) return "";
      $dozwolone_znaki = "abcdefghijklmnoprstuwxyz";
      $dozwolone_znaki .= "ABCDEFGHIJKLMNOPRSTUWXYZ";
      $dozwolone_znaki .= "1234567890";
      $haslo = "";
      $generowanie = strlen($dozwolone_znaki) - 1;
      for($i = 0; $i < $dlugosc_hasla; $i++){
             $rand = rand(0, $generowanie);
             $haslo .= $dozwolone_znaki[$rand];
      }
      

	  
function rejestruj ($email, $haslo)
{
// sprawdzenie poprawnosci danych

$userNameLenght = strlen($email);
$userPassLenght = strlen($haslo);

if ($userNameLenght < 3) 
	return BAD_USER_NAME_LENGHT;
	
if ($userPassLenght < 6)
	return BAD_USER_PASS_LENGHT;
	
if ($email == "")
	return EMPTY_FIELDS;
}
// polaczenie z baza danych

if (!db_lnk = mysql_connect ("localhost","pv0DhLPNE","hpgrouph_flatron")){
	echo ('Wystąpił błąd podczas łączenia z serwerem MySql');
	return SERVER_ERROR;
}

if (!mysql_select_db('hpgrouph_prouve')){
	 echo ('Wystąpił błąd podczas łączenia z bazą');
	return SERVER_ERROR;
}


// sprawdzenie czy użytkownik o podanej nazwie istnieje w bazie

$query = "SELECT COUNT(*) FROM Users WHERE Email='$email'";

if (!$result = mysql_query($query, $db_lnk)){
 echo('Wystąpił błąd instrukcja SELECT... 43');
@mysql_close();
return SERVER_ERROR;
}

if (!$row = mysql_fetch_row($result)) {
 echo ('Wystąpił błąd nieprawidłowe wyniki zapytania...');
@mysql_close();
return SERVER_ERROR;
}

else {
	if($row[0] > 0 {
	@mysql_close();
	return USER_NAME_ALREADY_EXISTS;
	}
}

    $dlugosc_UserID ="8";

      if($dlugosc_UserID < 3 || $dlugosc_UserID > 8) return "";
      $dozwolone_znaki2 .= "1234567890";
      $UserID = "";
      $generowanie = strlen($dozwolone_znaki2) - 1;
      for($i = 0; $i < $dlugosc_UserID; $i++){
             $rand = rand(0, $generowanie);
             $UserID .= $dozwolone_znaki2[$rand];
      }
      $query = "SELECT COUNT(*) FROM Users WHERE UserID='$UserID'";

// dodanie nowego użytkownika

$query = "INSERT INTO Users VALUES(";
$query.= "NULL, '$email', '$haslo', '$logowanie', '$UserID'");

if (!$result = mysql_query($query, $db_lnk)) {
	 echo ('Wystąpił błąd instrukcja INSERT... 93"');
	@mysql_close();
	return SERVER_ERROR;
	}

	$count = @mysql_affected_rows();
if ($count <> 1) {
	@mysql_close();
	return SERVER_ERROR;
	}
	  else{
	  include "send_password.inc";
	  return OK;
	  }
}


		else if(!isSet($_POST["$email"] || !isSet($_POST["$haslo"] || !isSet($_POST["$logowanie"])) {
		 include "new_user.inc";
		}
echo "OK<br>".$haslo;
		?>
		
		