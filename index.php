<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css?t=<?php echo time();?>">	
    <title>Index</title>
	<style>
	
	a
	{
		text-decoration:none;
		color:white;
		font-weight:bold;
		font-size:15px;
		
	}
	button
	{
		margin-left:88%;
		background:green;
		height:30px;
		border-radius:5px 5px;
		border-color:green;
	}
		</style>
    </head>
    <body>
	<button><a href="Connexion.html">Se Connecter</a></button>
	<button><a href="pageVideo.php">SepageVido</a></button>
        <section id="part1">
		<p><span>La conservation numérique</span><br/> de l’état civil sénégalais,
un moyen <br/>d’une démocratisation de l’accès à
l’information<br/> dans une ville intelligente 
</p>
        </section>
    </body>
</html>