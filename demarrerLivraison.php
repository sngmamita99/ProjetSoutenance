<?php

require_once("SMS/vendor/autoload.php");
$numDemande=$_GET["numDemande"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="UPDATE livraison SET etat=1 where numDemande=$numDemande";
			$result=$connect->exec($req);
			$req="select * from livraison where numDemande=$numDemande";
			$result=$connect->query($req);
			$ligne=$result->fetch();
			$prenom=$ligne["prenom"];
			$nom=$ligne["nom"];
			$adresse=$ligne["adresse"];
			$numTel=$ligne["numTel"];
		}

			$MessageBird = new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
			$Message=new \MessageBird\Objects\Message();
			$Message->originator="Ecivil";
			$Message->recipients =array("+221$numTel");
			$Message->body="Bonjour $prenom $nom! votre demande d'acte est en cours de livraison vers $adresse .Vous pourrez joindre le livreur Samba Fall sur 784269070";
			//print_r(json_encode($MessageBird->messages->create($Message)));
			header("location:MesLivraisons.php");

?>