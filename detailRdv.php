<?php 
require_once('ConnectionBdd.php');
// require_once('headerCalendrier.php');
require_once('descripRdv.php');
$pdo=getPdo();
$events=new Rdv($pdo);
$event = $events->find($_GET['id']);
// Cette instruction permet de voir les rdv
while($ligne = $event->fetch())
{ 	echo"<ul>";
		echo"<li>".$ligne['idRdv']."</li>";
		echo"<li>". $ligne['description']."</li>";
		echo"<li>". $ligne['DateRdv']."</li>";
	echo"<ul>";
}
require_once('footerCalendrier.php');
?>
