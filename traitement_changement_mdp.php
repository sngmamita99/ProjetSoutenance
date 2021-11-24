<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>traitement</title>
	 <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
</head>
<body>
<?php
require_once("headerCitoyen.php");
$ancien_password=$_POST["ancien_password"];
$new_password=$_POST["new_password"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{
		$req="select * from users where idUser=$idConnected AND password='$ancien_password'";
		$result=$connect->query($req);
		if($result->rowCount())
		{
			$reqU="UPDATE users SET password='$new_password' WHERE idUser='$idConnected'";
			 $resU=$connect->exec($reqU);
			 
			  echo'<script>';
					echo'swal("success")';
					echo'</script>';
		}
		else
		{
			
			echo"l'ancien mdp est incorrect";
		}
		
	}
	
?>
</body>
 <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
</html>
