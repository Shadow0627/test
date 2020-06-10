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
    			echo $Email." został dodany do bazy.<br />";
				$to = $Email;
				$istnieje="Nie";
$subject = "Witamy";

$message = "
<html>
<head>
<title>Czy to ty?</title>
</head>
<body>
<p style=\"text-width: bold; \">Oto Twoje hasło do logowania $haslo <br> Loginem jest oczywiście Twój e-mail!</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= "\r\n";

    mail($to,$subject,$message,$headers);
			} else {
    			echo "Error: " . $sql . "<br />" . mysqli_error($conn);
			}
		}


	?>
		
<?

/*funkcja - pobieranie parametrów z URLa*/
function pobierz_parametr($id){
   if(isset($_GET["$id"])){
      $id=$_GET["$id"];
   }else{
      $id=false;
   }
   return $id;
}
/*koniec funkcji*/
$id4= pobierz_parametr('id4');
$id3= pobierz_parametr('id3');
$id2= pobierz_parametr('id2');
$id1= pobierz_parametr('id1');
echo $id1."<br>";
if (is_numeric($id1)) { $partner==$id1;
$id1="index";
}else{
if ($id1=="") {$id1="index"; $partner="001";}
}
// echo $id1."<br>".$partner."<br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							
							</div>
							
							<div class="btn-group">
								
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="join.html"><i class="fa fa-user"></i>Weź Spróbuj</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
<? include "home_header_bottom.inc"; ?>
	</header><!--/header-->
	
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
						<form action="login.php" method="POST">
							<input type="email" placeholder="Email Address" />
							<input type="password" placeholder="Hasło"/>
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
	
	
<? include "fotter.inc;" ?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>		