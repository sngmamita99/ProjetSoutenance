<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
<!------ Include the above in your HEAD tag ---------->
<?php
// require_once("SessionError.php");
 // $SESSION = new Session();
 ?>

<!DOCTYPE html>
<html>
<head>
	<script src="JqueryCode.js"> </script>
	<title>Login </title>
	<meta charset="utf-8"/>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
#alert
	{
		position:fixed;
		top:5;
		left:0;
		right:0;
		z-index:1060;
		display:none;
		height:49px;
		width:50%;
		text-align:center;
		margin-left:25%;
		
	}

	{
		margin:0;
	}
		.bloc
		{
			position:relative;
			height:100vh;
			width:100%;
			overflow:hidden;
		
			
			
		}
		.bloc video
		{
			position:absolute;
			min-width:100%;
			min-height:100%;
			top:50%;
			left:50%;
			z-index:-100;
			transform:translate(-40%,-40%);
		}
html,body{

background-size: cover;
/* background-repeat: no-repeat; */
height: 100%;
font-family: 'Numans', sans-serif;
}
#login-overlay
{
	height: 100%;
align-content: center;

}
label
{
	color:white;
}
#soumettre
{
	background:green;
	margin-right:250px;
}
#quitter
{
	color:white;
	
	background:green;
	margin-right:250px;
	border:0px hidden green;
	
}
input:focus
		{    
		outline: 0;  
		outline-style:none; 
		outline-width:0; 
		}  
		input
		{
			border-top: hidden;
			border-left: hidden;
			border-right: hidden; 
		}
		form
		{
			
			height: 480px;
			margin-top: auto;
			margin-bottom: auto;
			width: 100%;
			background-color:  rgba(0,0,0,0.5) !important;
		}
			
</style>
</head>
<body>
<?php 
// $SESSION->flash();
?>
<div class="bloc">
	<video autoplay ="autoplay" muted=""  loop="infinite" src="../drapeauSN.mp4"></video>
	
    <div id="login-overlay" class="modal-dialog">
            <div class="modal-body">
			<div class="card-header">
				  <h3 class="dark-white-text text-center">
                    <strong>Inscription:</strong>
                  </h3>
                
			</div>
              <!--  <form id="registerForm" method="POST" action="inscriptionAPI.php">--> 
			  <form id="registerForm" method="POST" action="">
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">Prénom</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
                       
                        </div>
                        <br>
                        <label for="InputName">Nom d'utilisateur</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span  class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="lg" placeholder="Saisissez votre nom d'utilisateur" required>
                       
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Nom de famille</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de famille" required>
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        </div>
                    
                        <br>
			
						
                        <label for="profil">Profil</label>
						
							<select class="form-control" name="profil">
									<option value="officier">officier</option>
									<option value="agent">agent</option>
									<option  value="livreur">livreur</option>
									<option  value="citoyen">citoyen</option>
							</select>
	
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                     
                </div> 
			
		
                    <div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Enter Email</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span  class="fa fa-envelope"></span></span>
                        <input type="email" class="form-control" name="email" placeholder="Entrez l'e-mail" required>
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Adresse</label>
                        <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        <input type="text" class="form-control" name="adresse" placeholder="Entrer votre adresse" required>
                        
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Numéro de telephone</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                        <input type="text" class="form-control" name="numtel" placeholder="vore numéro de téléphone" required>
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>                     
                 
                </div>
                  <input type="submit" name="soumettre" id="soumettre" value="soumettre" class="btn btn-success pull-right">
				 <!-- <a href='index.php'><button  id="quitter">Quitter</button></a>-->

                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>
</div>
<script src="alert.js"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
</body>
</html>
 <?php
 // require_once("SessionError.php");
// session_start();
// $SESSION=new Session();
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
		    if($result->fetchAll())
			{
				echo'<script>';
							echo'swal({
								title: "Error!",
								text: " Votre nom d\'utilisateur est déja utilisée",
								icon: "info",
								button: "ok"
							});';
					echo'</script>';
				
							 // $SESSION->setFlash("Cette adresse email est déja utilisée",'info');
							// header("Location:inscrireD.php");
		    }   
		    else{
				
						// echo"<script>";
	
						// echo"</script>";
			
				$req2="INSERT INTO users (nom,prenom,adresse,email,login,password,numTel,profil,etat) values ('$nom','$pnom','$adresse','$email','$lg','$mdp','$numtel','$profil',0)";
				$result2=$connect->exec($req2);
				if($result2){
					// header("Location:index.php");
					
							echo'<script>';
							echo'swal({
								title: "Inscription Reussie!",
								text: " Vos parametres de connexion vous seront envoyer par mail",
								icon: "success",
								button: "ok"
							});';
							// window.location.href='index.php';
					echo'</script>';
					
							  // $SESSION->setFlash("Inscription Reussie! Vos parametres de connexion vous seront envoyer par mail",'success');
							// header("Location:inscrireD.php");
					
                }
				else{
					echo'<script>';
							echo'swal({
								title: "Inscription non Reussie!",
								text: " Veuillez réessayer une nouvelle inscription",
								icon: "error",
								button: "ok"
							});';
					echo'</script>';
					// $response["success"]=0; 
					// $response["message"]="Inscription Non Reussie";
					// echo json_encode($response); 
				}	
			}	
				
		}
		// else{
		
		    // $response["success"]=0; 
		    // $response["message"]="Tous les champs sont obligatoires";
		    // echo json_encode($response); 
        // }
	}
	else{
		
		$response["success"]=0; 
		$response["message"]="Erreur de connexion";
		echo json_encode($response); 
	}
?>
