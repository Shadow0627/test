<?
error_reporting(E_ALL);
ini_set('display_errors',1);





   $Email = $_POST['email'];
   $password = $_POST['password'];
      
// echo $Email."<br>";
// echo $password."<br>";
$bazamail=""; 
$bazapassword=""; 
$zalogowany="";
$komunikat2="<br>";

if ($Email!="" && $password!="" ) {
// łaczenie z bazą danych
	include_once "connectMysql.php";

$select = mysqli_query($mysqli, "SELECT `Email` FROM `Users` WHERE `Email` = '".$Email."'") or exit(mysqli_error($mysqli));
 		while (($produkt = $select -> fetch_assoc()) !== null) {
			 
//			 			 echo '<p>Baza: ' . $produkt['Email'] . '</p>';
$bazamail=$produkt['Email'];
}

	if ($bazamail==$Email) {$komunikat="Użytkownik o podanym loginie istnieje.";
	
$select = mysqli_query($mysqli, "SELECT `haslo` FROM `Users` WHERE `Email` = '".$Email."'") or exit(mysqli_error($mysqli));
 		while (($produkt = $select -> fetch_assoc()) !== null) {
			 
//			 			 echo '<p>Baza: ' . $produkt['haslo'] . '</p>';
$bazapassword=$produkt['haslo'];
// echo $bazapassword."<br>";
}

	if ($bazapassword==$password) {$komunikat2="Podałeś prawidłowe hasło."; $_SESSION["zalogowany"]="Tak"; $zalogowany="Tak";} else {$komunikat2="Podałeś niepoprawne hasło.";}
	
	} else {$komunikat="Użytkownik o podanym loginie NIE istnieje.";}

} else {$zalogowany="Nie"; $komunikat="Nie podałeś danych potrzebnych do zalogowania!";}

		
// echo "Baza : <br>".$bazamail."<br>";
// echo $bazapassword."<br>";	


if ($zalogowany=="Tak") { include "language/$id3/menu_left.inc"; include "language/$id3/$id2.inc"; } else { 
?>
		<section id="form"><!--form-->
		<div class="container" id="sprobuj">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->

					<h2><? echo $komunikat; ?><? echo $komunikat2; ?></h2>

					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">LUB</h2>
				</div>
				<div class="col-sm-4">
					
					<div class="login-form"><!--login form-->
						<h2>Zaloguj się</h2>
						<form action="login.html" method="POST">
							<input name="email" type="email" placeholder="Email Address" />
							<input name="password" type="password" placeholder="Hasło"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Zapamiętaj mnie
							</span>
							<button type="submit" class="btn btn-default">Zaloguj</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>

<? } ?>


	
	
