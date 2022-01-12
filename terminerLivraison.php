<?php
$date=date('Y-m-d H:i:sP');
require_once("SMS/vendor/autoload.php");
$numDemande=$_GET["numDemande"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)

		{
			$req4="UPDATE demandeactedenaissance SET etat_terminer=1 where numDemande=$numDemande";
			$result4=$connect->exec($req4);
			$req3="UPDATE livraison SET dateLivraison='$date' where numDemande=$numDemande";
			$result3=$connect->exec($req3);
			$req1="UPDATE livraison SET etat=2 where numDemande=$numDemande";
			$result1=$connect->exec($req1);
			$req="UPDATE demandeactedenaissance SET etat_retour=4 where numDemande=$numDemande";
			$result=$connect->exec($req);
		
			$req="select * from livraison where numDemande=$numDemande";
			$result=$connect->query($req);
			$ligne=$result->fetch();
			$prenom=$ligne["prenom"];
			$nom=$ligne["nom"];
			$adresse=$ligne["adresse"];
			$numTel=$ligne["numTel"];
		}


$MessageBird=new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221$numTel");
$Message->body="Bonjour $prenom $nom!.votre demande d'acte a été livré .Sinon Contacter l'agent sur en lui donnant le numéro de votre demande qui est $numDemande";
//print_r(json_encode($MessageBird->messages->create($Message)));
header("location:MesLivraisons.php");

?>