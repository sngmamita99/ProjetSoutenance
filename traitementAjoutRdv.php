<?php
 require_once("SessionError.php");
session_start();
$SESSION=new Session();
	$date=$_SESSION['date'];
	$numCompte=$_SESSION['numCompte'];
	$numDe=$_SESSION['numDe'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 	$req1="UPDATE declarationnaissance SET etat=1 WHERE numCompte = $numCompte AND numDeclaration=$numDe";
			$result=$connect->exec($req1);
		if(isset($_POST['hDebut']) && isset($_POST['hFin']) && isset($_POST['tdate']) && isset($_POST['typeDemande']))
		{
			$numCompte=$_SESSION['numCompte'];
			$date=$_POST['tdate'];
			$type=$_POST['typeDemande'];
			$hdeb=$_POST['hDebut'];
			$hfin=$_POST['hFin'];
			// echo"$date $hdeb $hfin $type";
			$req="insert into rdv (DateRdv,numCompte,type,heureDebut,heureFin) values ('$date',$numCompte,'$type','$hdeb','$hfin')";
			$result=$connect->exec($req);
			 $SESSION->setFlash("Rendez-vous ajouté avec succes Retournez à la page pour voir la nouvelle rendez-vous",'success');
							header("Location:ajouterRdv/ajoutRdv.php?numCompte=$numCompte");
			
		}
		else
		{
			echo"Veuillez remplir toutes les données";
		}
			
				
		}
		else
		{
			echo"connexion not reussi";
		}
	?>