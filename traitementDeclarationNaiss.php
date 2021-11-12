<?php
 require_once("SessionError.php");
session_start();
$SESSION=new Session();
$idConnected=$_SESSION['idConnected'];
	// $date_declaration= date('dmYHis');
	$date_declaration = date("Y-m-d");
	
	// $pD=$_POST['prenom'];
	// $nD=$_POST['nom'];
	$lP=$_POST['LienParente'];
	// $libelle=$_POST['libelle'];
	
	$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
	if($bdd)
	{
		
		$req="insert into declarationnaissance (numCompte,lienDeParente,date_declaration) values (?,?,?)";
		$stmt=$bdd->prepare($req);
		$stmt->bindParam(1, $idConnected);
		// $stmt->bindParam(2, $nD);
		// $stmt->bindParam(3,$pD);
		$stmt->bindParam(2, $lP);
		$stmt->bindParam(3,$date_declaration);
		$stmt->execute();
		$numDecla=$bdd->lastInsertId();//lastInsertId si je veux savoir l'identifiant de la derniere ligne dans la base de donne   
				if(!empty($_FILES['monFichier']))
					{
						$photos = array();
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier'];
						$nb = count($photos['name']);
						for($i=0;$i<$nb;$i++)
						{
								// $extension =  pathinfo($photos['name'][$i])['extension'];
								// $chemin ='photos/'.basename($_POST['nomProduit'].($i+1).'.'.$extension);
								$dest=$h.'_'.$photos['name'][$i];
								 $chemin ='photos/'.$dest;
								$images=move_uploaded_file($photos['tmp_name'][$i],$chemin);
								if($images)
								{
									$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
									$res1 = $req2->execute(array($numDecla,$chemin));
								}
								else
								{
									echo"transfert non reussi";
								}
						}
			
					}	
					$SESSION->setFlash("Votre demande 	a été envoyée avec succés ! Vous allez recevoir la date de votre RV pour la declaration",'success');
							header("Location:acceuilCitoyen.php");
		
	
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}

?>