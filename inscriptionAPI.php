<?php
    $response=array();
	
	//connexion à la base de données
    $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
	
	//vérifacation de la connexion
	if($connect){
	    
		if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['adresse']) AND isset($_POST['email'])
			AND isset($_POST['numtel']) AND isset($_POST['profil']) AND isset($_POST['lg'])){
			
			$nom=$_POST['nom'];
			$pnom=$_POST['prenom'];
			$adresse=$_POST['adresse'];	
			$email=$_POST['email'];
			$lg=$_POST['lg'];
			$numtel=$_POST['numtel'];
			$profil=$_POST['profil'];
			
			$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&";
            $mdp = substr (str_shuffle($string),0,8);
	
			
			$req1 = "SELECT * FROM users WHERE login='$lg' LIMIT 1";
		    $result=$connect->query($req1);
		    if($result->fetchAll()){
				
			    echo "Ce compte existe deja";
		    }   
		    else{
						
				$req2="INSERT INTO users (nom,prenom,adresse,email,login,password,numTel,profil,etat)VALUES('$nom','$pnom','$adresse','$email','$lg','$mdp','$numtel','$profil',0)";
				$result2=$connect->exec($req2);
				if($result2){	
					$response["message"]="Inscription Reussie! Vos parametres de connexion vous seront envoyer par mail";
					echo json_encode($response);
                }
				else{
					
					$response["success"]=0; 
					$response["message"]="Inscription Non Reussie";
					echo json_encode($response); 
				}	
			}	
				
		}
		else{
		
		    $response["success"]=0; 
		    $response["message"]="Tous les champs sont obligatoires";
		    echo json_encode($response); 
        }
	}
	else{
		
		$response["success"]=0; 
		$response["message"]="Erreur de connexion";
		echo json_encode($response); 
	}
?>
			