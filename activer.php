   <?php 
   global $k;
    $cd=$_GET['code'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{                 
	    $req="UPDATE users SET etat='1' WHERE iduser='$cd'";
	    $res=$connect->query($req);
		$reqR="SELECT * FROM users WHERE iduser='$cd'";
	    $resR=$connect->query($reqR);
		
		
		
		$row=$resR->fetch();
		$prenom=$row["prenom"];
		$nom=$row["nom"];
		$to_email=$row["email"];
		$login=$row["login"];
		$password=$row["password"];
		$subject = "Activation de  votre compte";
		$body = "Bonjour 
		$prenom $nom 
		Votre login est $login 
		Votre mot de passe est $password";
		$headers = "From: sowfatou022@gmail.com";
		$envoie= mail($to_email, $subject, $body, $headers);
	
	
	
		if($row['profil']=="agent"){
			 header("Location:agent.php");
			
	    }
        if($row['profil']=="officier"){
			 header("Location:officier.php");
	    } 
 		 if($row['profil']=="citoyen"){
			header("Location:citoyen.php");	   
		   
	    }
		 if($row['profil']=="livreur"){
			header("Location:livreur.php");			   
		}
		
	
	}

	
	
?>