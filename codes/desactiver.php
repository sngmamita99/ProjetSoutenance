<?php 
    $cd=$_GET['code'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=projetsoutenance","root","");
    if($connect){                 
	    $req="UPDATE users SET etat='0' WHERE iduser='$cd'";
	    $res=$connect->query($req);
		header("Location:administrateur.php");
	}		
?>