<?
error_reporting(E_ALL);
ini_set('display_errors',1);


$Email=$_POST['email'];

      
// echo $Email."<br>";

// łaczenie z bazą danych
	include_once "connectMysql.php";
			$select = mysqli_query($mysqli, "SELECT `Email` FROM `Users` WHERE `Email` = '".$Email."'") or exit(mysqli_error($mysqli));
		if(mysqli_num_rows($select)) {
//    		echo $Email." już istnieje.<br />"; 
			$istnieje="Tak";
		}
		else{
			
			
    $dlugosc_UserID ="8";

      if($dlugosc_UserID < 3 || $dlugosc_UserID > 8) return "";
      $dozwolone_znaki2 = "1234567890";
      $UserID = "";
      $generowanie = strlen($dozwolone_znaki2) - 1;
      for($i = 0; $i < $dlugosc_UserID; $i++){
             $rand = rand(0, $generowanie);
             $UserID .= $dozwolone_znaki2[$rand];
      }
//		echo $UserID."<br>";		
			$select = mysqli_query($mysqli, "SELECT `UserID` FROM `Users` WHERE `UserID` = '".$UserID."'") or exit(mysqli_error($mysqli));
		if(mysqli_num_rows($select)) {
//    		echo $UserID." już istnieje.<br />"; 
		}
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
//	  echo $haslo."<br>";
			$sql = "INSERT INTO Users  VALUES (NULL,'$Email','$haslo','0','$UserID')";
			if (mysqli_query($mysqli, $sql)) {
//    			echo $Email." został dodany do bazy.<br />";
				$to = $Email;
				$istnieje="Nie";
$subject = "Witamy";

$message = "
<html>
<head>
<title>Czy to ty?</title>
</head>
<body>
<p><span style=\"font-family:verdana,geneva,sans-serif;\">Oto Twoje hasło do logowania</span> <span style=\"font-family:courier new,courier,monospace;\"><span style=\"color: rgb(128, 0, 0);\">$haslo</span></span><br />
<span style=\"font-family:verdana,geneva,sans-serif;\">Loginem jest oczywiście Tw&oacute;j e-mail!</span></p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: BOK <bok@hpgroup17.hcore.pl>" . "\r\n";
$headers .= "\r\n";

    mail($to,$subject,$message,$headers);
			} else {
    			echo "Error: " . $sql . "<br />" . mysqli_error($conn);
			}
		}


	?>
		


	
		<section id="form"><!--form-->
		<div class="container" id="sprobuj">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
					<? if ($istnieje == "Tak") {echo"<h2>Konto o podanym adresie e-mail już istnieje. Możesz się zalogować.</h2>";} else {
						echo"<h2>Twoje konto zostało utworzone.<br>Sprawdź swoj adrers e-mail gdyż wysłaliśmy na niego hasło do logowania.</h2>";
					}
					?>
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
	
