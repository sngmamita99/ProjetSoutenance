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