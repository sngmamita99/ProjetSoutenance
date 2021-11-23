<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['recpwd']))
{
	$bdd=new PDO("mysql:host=localhost;dbname=ecivil","root","");
if($bdd)
{
	$email = $_POST['emails'];
	$stmt = $bdd->prepare("SELECT * FROM users WHERE email=?");
	$stmt->execute([$email]); 
	$user = $stmt->fetch();
	if ($user) 
	{
		
    $_SESSION['e']=$email;
	if($envoie)
		
		{
			echo"Message bien envoyé";
		}
		else{
		echo"no envoie";}
} else {
   echo "email n'existe pas";
} 

}
else
{
	echo"Erreur de connexion à la BDD";
}
}
?>