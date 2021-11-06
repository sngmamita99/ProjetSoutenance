<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
require_once("SessionError.php");
 $SESSION = new Session();
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
*
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
<?php $SESSION->flash();?>
<div class="bloc">
	<video autoplay ="autoplay" muted=""  loop="infinite" src="../drapeauSN.mp4"></video>
    <div id="login-overlay" class="modal-dialog">
            <div class="modal-body">
                <form id="registerForm" method="POST" action="inscriptionAPI.php">
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
                  
                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>
</div>
<script src="alert.js"></script>
</body>
</html>