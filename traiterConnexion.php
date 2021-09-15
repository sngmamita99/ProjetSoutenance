<?php

	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
	if($connect){
		
		$id=null;
		if(isset($_POST['userName']) AND isset($_POST['mdpAut'])){
			
				$userName=$_POST['userName'];
				$mdpAut=$_POST['mdpAut'];
		        $req="SELECT * FROM users";
		        $res=$connect->query($req);
     		    if($res)
				{
					
				    while($lign=$res->fetch()){

						if($lign['login']==$userName AND $lign['password']==$mdpAut AND $lign['etat']==1){
							
							if ($lign['profil']=="admin"){
							    header("Location:administrateur.php");
							    break;
						    }
							else if ($lign['profil']=="Agent"){
							    header("Location:acceuilAgent.php");
							    break;
						    }
							else if ($lign['profil']=="Officier"){
							    header("Location:acceuilOfficier.php");
							    break;
						    }
							else if ($lign['profil']=="Citoyen"){
							    header("Location:acceuilCitoyen.php");
							    break;
						    }
							else{
							    header("Location:accuilLivreur.php");
							    break;
						    }
							
						}
						else{
							header("Location:Connexion.html");
						}
					}					
				}					
				
			}			
		}
		else
			echo 'connexion à la BD non établie';
?>
	<script  ></script>
</html>
		

