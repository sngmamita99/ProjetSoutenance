<?php

	$cd=$_GET['code'];
	$date=$_GET['date'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{ 
		$req="UPDATE rdv SET etatRdv='1' WHERE numCompte='$cd'";
	    $res=$connect->query($req);
		$reqR="SELECT * FROM users WHERE iduser='$cd'";
	    $resR=$connect->query($reqR);
		header("Location:AllRdv.php?date=$date");
	}
	else
	{
		echo"Base de donnée non connecté";
	}
?>