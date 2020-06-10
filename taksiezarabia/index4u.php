<?
error_reporting(E_ALL); // poziom raportowania, http://pl.php.net/manual/pl/function.error-reporting.php
ini_set('display_errors', 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip2 = "Twój adres IP to: " . $ip . ", a HOST to: " . gethostbyaddr( $ip );
$ip = $_SERVER['REMOTE_ADDR'];
$adres=$_SERVER['HTTP_HOST'];

$domena=str_replace('fm4you.pl','',$adres);
$domena=str_replace('www.','',$domena);
$domena=str_replace('.','',$domena);
if(isset($_COOKIE['referer'])) {} else {		$ref="223124";
		setcookie("referer", $ref, 2147483647, '/', '.fm4you.pl');}
if ($domena!="") {
	$ref=$domena;
if ($ref=="forum" or $ref=="strona" or $ref=="240714" or $ref=="010914" or $ref=="010914" or $ref=="1220011"  or $ref=="229736" or $ref=="140714" or $ref=="141114" or $ref=="240714"or $ref=="240714"or $ref=="240714"or $ref=="240714"or $ref=="240714" or $ref=="gliwice" or $ref=="wroclaw" or $ref=="lodz" or $ref=="krakow" or $ref=="warszawa") {$ref = 223124;}
	setcookie("referer", $ref, 2147483647, '/', '.fm4you.pl');
} else{
	if($_COOKIE['referer']==""){
//		$ref="223124";
//		setcookie("referer", $ref, 2147483647, '/', '.fm4you.pl');
	} else{
		$ref = $_COOKIE['referer'];
	}
}

// echo $ref."<br>";
$a = $_SERVER["HTTP_HOST"];
$b = $_SERVER["SCRIPT_NAME"];
$c = "http://".$a."".$b;
$dx = "http://".$a."/";
// echo "<br>a = ".$a; 
// echo "<br>b = ".$b; 
// echo "<br>c = ".$c;
// echo "<br>dx = ".$dx;


$myid="222222";
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


// echo "----<br>id1 = ".$id1;
// echo "<br>id2 = ".$id2;
// echo "<br>id3 = ".$id3;
// echo "<br>id4 = ".$id4;
// echo "<br>ref = ".$id1;
if (is_numeric($id1)) {
$id1="index";
}else{
if ($id1=="") {$id1="index";}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!-- <center><a href="witajwdomu.html"><img src="images/welcomehome.jpg" border=0></a></center> -->
<? 

include "head.inc";
// include $id1.".dsc";
?>
<Files ~ "\.(png|jpe?g|gif)$">
</Files>
<meta name="google-site-verification" content="UX21_OkGzSc6gMafMjcL2uZhfz4o5qaMd_3gIb_qh0c" />
	<link href="css/tabacc/tabacc.css" rel="stylesheet" />
	<link href="css/tabacc/themes/detached.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Arimo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noticia+Text&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
.style1 {
	border-width: 0px;
}
</style>
</head>
<body>

<div id="wrapper">
	<div id="header-wrapper">

		<div id="header">
			<div id="logo">
				<img src="logo_20161_pl.svg">
			</div>
<? include "menu.inc"; ?>
		</div>
	</div>
	<!-- end #header -->

	<div id="page"><center>
<? 

if(file_exists($id1.".inc")){
  include $id1.".inc"; 
} else {include "index.inc";}
include "sidebar.inc";
?>
		<div style="clear: both;"></div>
		
	</div>
	<!-- end #page -->
</div>
<!---- footer-links ---->

<div id="pageup"></div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/jquery.pageup.js"></script>
<script type="text/javascript">
	$("#pageup").pageup();
</script>
<!---- footer-links ---->
<div id="footer">
	<p>Copyright (c) 2008 www.<? echo $a; ?> All rights reserved.<br>Strona <a href="http://www.<? echo $a; ?>/<? echo $myid; ?>/index.html" ><? echo $a; ?></a> należy do niezależnego Dystrybutora FM Group.</p>
</div>
<!-- end #footer -->
<!-- start gg-widget-html - Copyright GG Network S.A. -->

</html>
