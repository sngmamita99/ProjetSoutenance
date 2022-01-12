   
<?php
require_once("headerCitoyen.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Traitement</title>

	<style type="text/css">
		#ss
		{
			
			text-align: center;
			background-color: white;
			height:250px;
			width: 50%;
			margin: auto;
			margin-top: 45px;
			border-radius: 80px 10px;
			
		}
		h6
		{
			padding-top: 19px;
			font-size: 25px;
			color: #00695c ;
			font-style: italic;
			font-family: Gill Sans Extrabold, sans-serif;
		}
body
{
	background-image: url("https://cdn.pixabay.com/photo/2014/02/01/18/01/money-256319_1280.jpg");


}
#img1
{
    width:70px;
    height:70px;
}


	</style>
</head>
 <body>
 	<?php
 	$numDem=$_GET["numDem"];
 	$idConnected=$_GET["idConnected"];

 	echo"<div id='ss'>
 		<h6>Selectionner votre mode de paiement:</h6>
 		<br><br><br><br>
 		<img src='paypal/paypal.png' alt='logo paypal' id='img1'>
 		<a href='formulaire.php?numDem=$numDem&idConnected=$idConnected'>
 			<img src='paypal/om.png' alt='logo Orange Money' id='img1'>
 		</a>
 		<img src='paypal/wave.png' alt='logo wave' id='img1'>
 	</span>
 </body>";
 ?>
 </html>

  