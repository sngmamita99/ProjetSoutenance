<?php 
    $cd=$_GET['code'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect){                 
	    $req="UPDATE users SET etat='0' WHERE iduser='$cd'";
	    $res=$connect->query($req);
		$reqR="SELECT * FROM users WHERE iduser='$cd'";
	    $resR=$connect->query($reqR);
		$reqR="SELECT * FROM users WHERE iduser='$cd'";
	    $resR=$connect->query($reqR);
		
		while($row=$resR->fetch())
		{ 
		
		if($row['profil']=="Agent"){
			$k=0;
			
	    }
        else if($row['profil']=="Officier"){
			$k=1;
	    } 
 		else if($row['profil']=="Citoyen"){
			$k=2;	   
		   
	    }
		else if($row['profil']=="Livreur"){
			$k=3;		   
		}
		else
		{
			$k=4;
		}
	
	}
	if($k==0)
	{
		 header("Location:agent.php");
	}
	if($k==1)
	{
		 header("Location:officier.php");
	}
	 if($k==2)
	{
		header("Location:citoyen.php");
	}
	 if($k==3)
	{
	header("Location:livreur.php");	
	}
	}		
?>