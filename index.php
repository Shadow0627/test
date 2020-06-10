<?php
session_start();
include('src/class/init.php');
if(empty($_SESSION["zalogowany"])) 
{
    $_SESSION["zalogowany"]='Nie';
}
 echo $_SESSION["zalogowany"]."<br>";

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

//ustawianie bazowego adresu
$root_dir="";
//pobieranie parametrów
$id4= pobierz_parametr('id4');
$id3= pobierz_parametr('id3');
$id2= pobierz_parametr('id2');
$id1= pobierz_parametr('id1');

 echo "----<br>id1 = ".$id1;
 echo "<br>id2 = ".$id2;
 echo "<br>id3 = ".$id3;
 echo "<br>id4 = ".$id4;
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

<!--header NIE zalogowany-->
<?php if ($_SESSION["zalogowany"]=="Nie") { ?>
<h4> NIE zalogowany<h4>
	<header id="header">
<?php include "header_top.inc"; ?>
<?php include "header_middle.inc"; ?>
<?php include "header_bottom.inc"; ?>
	</header><!--/header-->
	
<?php include "slider.inc"; ?>


<?php
if(isset($_SESSION['chpwd']))
{
if($_SESSION['chpwd'] == 0)
{
    include "src/chpwd.php";
}
else
{
include "home_form.php";
}
}
else
{
    include "home_form.php";
}
?>
	

<?php }  ?>

  <?if ($_SESSION["zalogowany"]=="Tak") { ?>
<!--header zalogowany-->
<h4>zalogowany<h4>
	<header id="header">
<?php include "header_top.inc"; ?>
<?php include "header_middlez.inc"; ?>
<?php include "header_bottom.inc"; ?>
	</header><!--/header-->
	

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php include "menu_left.inc";?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php include "features_items.inc"; ?>
					
					<?php include "category_tab.inc"; ?>
					
					<?php include "recommended_items.inc"; ?>
					
				</div>
			</div>
		</div>
	</section>
	

<? } 
 include "fotter.inc"; ?>
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>