<?
session_start();


if(empty($_SESSION["zalogowany"])) {$_SESSION["zalogowany"]="Nie";}
 $adres=$_SERVER['HTTP_HOST'];
 $adress=$_SERVER['REDIRECT_URL'];
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
// echo $id1."<br>";
if (is_numeric($id1)) { $partner==$id1;
$id1="index";
}else{
if ($id1=="") {$id1="index"; $partner="001";}
}
// echo $id1."<br>".$partner."<br>";
 echo "Zalogowany:". $_SESSION["zalogowany"]."<br>";
if ($_SESSION["zalogowany"]=="Tak") {echo "Zalogowany<br>";} else {echo "Nie Zalogowany<br>";}
if ($id3=="xsk") {
// echo "<br>adress = ".$adress;
$wynikpl = str_replace("xsk", "xpl", $adress);
// echo "<br>wynikpl = ".$wynikpl;
$wyniken = str_replace("xsk", "xen", $adress);
// echo "<br>wyniken = ".$wyniken;
$wyniksk = str_replace("xsk", "xsk", $adress);
// echo "<br>wyniksk = ".$wyniksk;
}

if ($id3=="xpl") {
// echo "<br>adress = ".$adress;
$wynikpl = str_replace("xpl", "xpl", $adress);
// echo "<br>wynikpl = ".$wynikpl;
$wyniken = str_replace("xpl", "xen", $adress);
// echo "<br>wyniken = ".$wyniken;
$wyniksk = str_replace("xpl", "xsk", $adress);
// echo "<br>wyniksk = ".$wyniksk;
}

if ($id3=="xen") {
// echo "<br>adress = ".$adress;
$wynikpl = str_replace("xen", "xpl", $adress);
// echo "<br>wynikpl = ".$wynikpl;
$wyniken = str_replace("xen", "xen", $adress);
// echo "<br>wyniken = ".$wyniken;
$wyniksk = str_replace("xen", "xsk", $adress);
// echo "<br>wyniksk = ".$wyniksk;
}

 echo "----<br>id1 = ".$id1;
 echo "<br>id2 = ".$id2;
 echo "<br>id3 = ".$id3;
 echo "<br>id4 = ".$id4;
?>

<?PHP
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
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
<? if ($_SESSION["zalogowany"]=="0") { ?>
				<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="join.html"><i class="fa fa-user"></i>Weź Spróbuj</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div> <? } else { ?> 
<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="wyloguj.html"><i class="fa fa-user"></i>Wyloguj</a></li>
								
							</ul>
						</div>
					</div>
				</div> <? } ?>


			</div>
		</div><!--/header-middle-->


	
<? include "home_header_bottom.inc"; ?>
	</header><!--/header-->
	<? if ($_SESSION["zalogowany"]==0){ 
 if ($id1=="index"){ include "slider_main.inc"; include "home_form.inc"; } else {
if(file_exists($id1.".inc")){
  include $id1.".inc"; 
//  echo $id1.".inc";
} else {echo "nie wiem"; 
// echo $id1;
}
}
	}
?>	
<? if ($_SESSION["zalogowany"]==1){ 
 if ($id1=="index"){ include "blog.inc";  } else {
if(file_exists($id1.".inc")){
  include $id1.".inc"; 
//  echo $id1.".inc";
} else {echo "nie wiem"; 
// echo $id1;
}
}
	}
?>
<? include "fotter.inc"; ?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>