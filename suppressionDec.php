<?php
$idRegistre=$_GET["idRegistre"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="DELETE FROM  registrenaissance where idRegistre=$idRegistre ";
			$result=$connect->exec($req);
			header("Location:RegistreDesNaissances.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>