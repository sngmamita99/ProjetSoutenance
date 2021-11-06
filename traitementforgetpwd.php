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
		$to_email = $email;
		$subject = "Activer votre compte";
		$body = "Bienvenue sur VotreSite,

    Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
    ou copier/coller dans votre navigateur Internet.
    ou copier/coller dans votre navigateur Internet.
     
    http://localhost/site-kai/activation.php?cle=1111
     
     
    --------------- 
    Ceci est un mail automatique, Merci de ne pas y répondre.";
    $headers = "From: sowfatou022@gmail.com";
    $envoie= mail($to_email, $subject, $body, $headers);
    $_SESSION['e']=$email;
	if($envoie)
		
		{
			echo"Message bien envoyé";
			// var_dump($to_email);
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