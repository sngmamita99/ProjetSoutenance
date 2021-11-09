<?php

	session_start();
	$date=$_SESSION['date'];
	$numCompte=$_SESSION['numCompte'];
	
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ $req1="DELETE from declarationnaissance WHERE numCompte = $numCompte";
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
			// header("Location:RvDuJour.php");
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