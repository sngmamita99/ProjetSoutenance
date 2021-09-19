<?php
session_start();
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
     
    http://localhost/site-kai/activation.php?cle=1111
     
     
    --------------- 
    Ceci est un mail automatique, Merci de ne pas y répondre.";
    $headers = "From: ssolobada23@gmail.com";
    // mail($to_email, $subject, $body, $headers);
    $_SESSION['e']=$email;
    header('location:Connexion.html');
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