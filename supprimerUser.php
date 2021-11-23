<?php
$x=$_GET["code"];
// echo $x;
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{  
		$req="DELETE from rdv where numCompte=$x";
		$result=$connect->exec($req);
		$req1="DELETE from users where idUser=$x";
		$result=$connect->exec($req1);
		// echo'ok';
		header("Location:citoyen.php");
	}
	else
	{
		echo"Base de donnée non connecté";
	}
?>