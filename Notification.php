<?php
require_once("SMS/vendor/autoload.php");
$numCompte=$_GET["numCompte"];
$numDemande=$_GET["numDemande"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="UPDATE demandeactedenaissance SET etat_retour=2 where numDemande=$numDemande";
			$result=$connect->exec($req);
			
			$req1="select users.nom ,users.prenom,adresse,numTel ,demandeactedenaissance.numDemande FROM users INNER JOIN demandeactedenaissance ON users.idUser=demandeactedenaissance.numCompte where numDemande=$numDemande";
				$result1=$connect->query($req1);
				$ligne=$result1->fetch();
				$nom=$ligne['nom'];
				$prenom=$ligne['prenom'];
				$numTel=$ligne['numTel'];
				
		}

/*$MessageBird=new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221$numTel");
$Message->body="Bonjour $prenom $nom! votre demande d'acte est prête.Vous recevrez un sms pour la livraison";
//print_r(json_encode($MessageBird->messages->create($Message)));
$MessageBird=new \MessageBird\Client('GogvVLUsBWWyaZlmUsTJ7znCD');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221784269070");
$Message->body="Bonjour! cher livreur vos avez le document numero $numDemande en attente .Pour plus d'info veuillez vous connecter sur la plateforme";
//print_r(json_encode($MessageBird->messages->create($Message)));
header("location:traitementDemNaissParLivraison.php");
*/
?>