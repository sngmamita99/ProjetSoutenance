 <?php
 require_once("SessionError.php");

session_start();
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
								$_SESSION['idConnected']=$lign['idUser'];
							    header("Location:administrateur.php");
							    break;
						    }
							else if ($lign['profil']=="agent"){
								$_SESSION['idConnected']=$lign['idUser'];
							    header("Location:acceuilAgent.php");
							    break;
						    }
							else if ($lign['profil']=="officier"){
								$_SESSION['idConnected']=$lign['idUser'];
							    header("Location:acceuilOfficier.php");
							    break;
						    }
							else if ($lign['profil']=="citoyen"){
								$_SESSION['idConnected']=$lign['idUser'];
							    header("Location:acceuilCitoyen.php");
							    break;
						    }
							else{
								$_SESSION['idConnected']=$lign['idUser'];
							    header("Location:acceuilLivreur.php");
							    break;
						    }
							
						}
						else
			 			{
						
							 $SESSION=new Session();
							  $SESSION->setFlash("Veuillez vérifier vos paramétres de connexion",'danger');
							header("Location:Connexion.php");
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
		

