<?php

require_once("SMS/vendor/autoload.php");
$numDemande=$_GET["numDemande"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="UPDATE demandeactedenaissance SET etat_retour=4 where numDemande=$numDemande";
			$result=$connect->exec($req);
			header("location:MesLivraisons.php");
			/*$req="select * from livraison where numDemande=$numDemande";
			$result=$connect->query($req);
			$ligne=$result->fetch();
			$prenom=$ligne["prenom"];
			$nom=$ligne["nom"];
			$adresse=$ligne["adresse"];
			$numTel=$ligne["numTel"];*/
		}


$MessageBird=new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221$numTel");
$Message->body="Bonjour $prenom $nom! Il a été signalé que vous avez reçu votre demande d'acte.Sinon Contacter l'agent sur en lui donnant le numéro de votre demande qui est $numDemande";
//print_r(json_encode($MessageBird->messages->create($Message)));
$MessageBird=new \MessageBird\Client('GogvVLUsBWWyaZlmUsTJ7znCD');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221784269070");
$Message->body="Bonjour! cher livreur vos avez le document numero $numDemande en attente .Pour plus d'info veuillez vous connecter sur la plateforme";
			/*$MessageBird = new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
			$Message=new \MessageBird\Objects\Message();
			$Message->originator="Ecivil";
			$Message->recipients =array("+221$numTel");
			$Message->body="Bonjour $prenom $nom! votre demande d'acte est en cours de livraison vers $adresse .Vous pourrez joindre le livreur Samba Fall sur 784269070";
			print_r(json_encode($MessageBird->messages->create($Message)));
			header("location:MesLivraisons.php");*/

?>