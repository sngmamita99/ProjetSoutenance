<?php
 require_once("SessionError.php");
$SESSION=new Session();
$idConnected=$_SESSION['idConnected'];
$date_declaration = date("Y-m-d");
$lP=$_POST['LienParente'];
$k=0;
	$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
	if($bdd)
	{
		
		$req="insert into declarationnaissance (numCompte,lienDeParente,etat,date_declaration) values (?,?,?,?)";
		$stmt=$bdd->prepare($req);
		$stmt->bindParam(1, $idConnected);
		$stmt->bindParam(2, $lP);
		$stmt->bindParam(3,$k);
		$stmt->bindParam(4,$date_declaration);
		$stmt->execute();
		$numDecla=$bdd->lastInsertId();
				if(!empty($_FILES['monFichier1']))
					{
						
						
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier1'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
					if(!empty($_FILES['monFichier2']))
					{
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier2'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
			
			if(!empty($_FILES['monFichier3']))
					{
						
						
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier3'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
			
						
					
					// $SESSION->setFlash("Votre demande 	a été envoyée avec succés ! Vous allez recevoir la date de votre RV pour la declaration",'success');
							// header("Location:acceuilCitoyen.php");
		
	
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}

?>