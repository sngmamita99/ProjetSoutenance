<?php

session_start();
$idConnected=$_SESSION['idConnected'];

	$pD=$_POST['prenom'];
	$nD=$_POST['nom'];
	// $sex=$_POST['sexe'];
	// $dN=$_POST['DateNaiss'];
	$lP=$_POST['parente'];
	$libelle=$_POST['libelle'];
	
	$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
	if($bdd)
	{
		$req="insert into declarationnaissance (numCompte,nomDeclarant,prenomDeclarant,lienDeParente) values (?,?,?,?)";
		$stmt=$bdd->prepare($req);
		$stmt->bindParam(1, $idConnected);
		$stmt->bindParam(2, $nD);
		$stmt->bindParam(3,$pD);
		$stmt->bindParam(4, $lP);
		
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
		
					// if(isset($_FILES['photo']))
					// {
		// echo "ok";
						// $photos = array();
						// $h=date('dmYHis');
						// $photos=$_FILES['photo'];
						// echo $photos;
						// $nb = count($photos['name']);
						// for($i=0;$i<$nb;$i++)
						// {
								// $extension =  pathinfo($photos['name'][$i])['extension'];
								// $chemin ='photos/'.basename($_POST['nomProduit'].($i+1).'.'.$extension);
								// $dest=$h.'_'.$photos['name'][$i];
								// $chemin ='photos/'.$dest;
								// $images=move_uploaded_file($photos['tmp_name'][$i],$chemin);
								// if($images)
								// {
									// $req2 = $bdd->prepare("INSERT into justification(numDeclaration,url,libelle) values (?,?,?)");
									// $res1 = $req2->execute(array($numDecla,$chemin,$libelle));
									// echo"ok";
								// }
								// else
								// {
									// echo"transfert non reussi";
								// }
						// }
			
					// }
		
	
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}

?>