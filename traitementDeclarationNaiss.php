<?php

session_start();
$idConnected=$_SESSION['idConnected'];
	$date_declaration= date('Y-m-d');
	$pD=$_POST['prenom'];
	$nD=$_POST['nom'];
	$lP=$_POST['parente'];
	$libelle=$_POST['libelle'];
	
	$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
	if($bdd)
	{
		$req="insert into declarationnaissance (numCompte,nomDeclarant,prenomDeclarant,lienDeParente,date_declaration) values (?,?,?,?,?)";
		$stmt=$bdd->prepare($req);
		$stmt->bindParam(1, $idConnected);
		$stmt->bindParam(2, $nD);
		$stmt->bindParam(3,$pD);
		$stmt->bindParam(4, $lP);
		$stmt->bindParam(5,$date_declaration);
		
		$stmt->execute();
		$numDecla=$bdd->lastInsertId();//lastInsertId si je veux savoir l'identifiant de la derniere ligne dans la base de donne                    
                        if(isset($_FILES['photo'])){  
					
				
                        $extensions_ok = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
                        $extension_fichier = strtolower( substr(strrchr($_FILES['photo']['name'], '.'),1));
                        if ( in_array($extension_fichier, $extensions_ok) ){
                            // echo "<p>Extension correcte du fichier</p>"; 
                        }
                        $dhc=date("dmy_his",time());
                        $fic="photos/".$dhc."_".$_FILES['photo']['name'];
                        $result=move_uploaded_file($_FILES['photo']['tmp_name'],$fic);
                        if($result){
                            // echo "<p>transfert du fichier reussi</p>";
                        }
                        $url="photos/".$dhc."_".$_FILES['photo']['name'];       
						 $req2 = $bdd->prepare("INSERT into justification(numDeclaration,url,libelle) values (?,?,?)");
						 $res1 = $req2->execute(array($numDecla,$url,$libelle));
				       
                    }	
		echo"Votre demande 	a été envoyée avec succés Vous allez recevoir la date de votre RV pour la declaration";
	
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}

?>