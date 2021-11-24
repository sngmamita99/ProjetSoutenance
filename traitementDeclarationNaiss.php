<?php
require_once("headerCitoyen.php");
?>

<?php
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
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}
?>
<body>
Votre demande a été envoyé avec succés
</body>
</html>