<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PSaut</title>
        <link rel="stylesheet" href="authentification.css?t=<?php echo time();?>"/> 
	</head>
    <body>
	    <div id="div1">
		    <p id="par1">
            </p>			
	        <form id="form" method="post" action="">
                <p id="aut">
     		        <label class="lab">Nom d'utilisateur</label><br>
                    <input  id="inp1" type="text" id='rech' name="userName" required="required"/>
			    </p>
			    <p>
			        <label class="lab">Mot de passe</label><br>
                    <input id="inp2" type="text" name="mdpAut"required="required"/>
                </p>
				<p>
                    <input id="sub" type="submit" value="connexion"/>
                </p>
            </form>
		    <p id='par3'><span>Vous n'avez pas de compte?</span> <a href="inscriptionFormulaire.php">S'inscrire?</a></p> 
        </div>		
	</body>
	<?php
	    $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
		if($connect){
			$id=null;
		    if(isset($_POST['userName']) AND isset($_POST['mdpAut'])){
				$userName=$_POST['userName'];
				$mdpAut=$_POST['mdpAut'];
		        $req="SELECT idUser,email,password,etat FROM users";
				$res=$connect->query($req);
				if($res){
					while($lign=$res->fetch()){
						// $idc=$lign['idmb'];
						if($lign['email']==$userName AND $lign['password']==$mdpAut AND $lign['etat']==1){
							header("Location:accueil.php");
							break;
						}
						else{
							header("Location:authentification.php");
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
		

