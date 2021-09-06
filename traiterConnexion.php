<?php
	connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
	if($connect){
		
		$id=null;
		if(isset($_POST['userName']) AND isset($_POST['mdpAut'])){
			
				$userName=$_POST['userName'];
				$mdpAut=$_POST['mdpAut'];
				$profil=$_GET['profil'];
		        $req="SELECT idUser,email,password,profil,etat FROM users";
		        $res=$connect->query($req);
     		    if($res){
					
				    while($lign=$res->fetch()){

						if($lign['login']==$userName AND $lign['password']==$mdpAut AND $lign['etat']==1){
							
							if ($profil=="admin"){
							    header("Location:administrateur.php");
							    break;
						    }
							else if ($profil=="agent"){
							    header("Location:agent.php");
							    break;
						    }
							else if ($profil=="officier"){
							    header("Location:officier.php");
							    break;
						    }
							else if ($profil=="citoyen"){
							    header("Location:citoyen.php");
							    break;
						    }
							else{
							    header("Location:livreur.php");
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
		

