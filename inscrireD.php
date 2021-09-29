<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<meta charset="utf-8"/>
	 <!-- Made with love by Mutiullah Samim -->
   
	<!-- Bootsrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Fontawesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
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
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;

}

.card{
height: 450px;
margin-top: auto;
margin-bottom: auto;
width: 550px;
background-color:  rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}
#FFC312
.input-group-prepend span{
width: 50px;
background-color:#8093FF ;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: white;
background-color: green ;
width: 120px;
margin-right:35%;
font-weight:bold;
}

.login_btn:hover{
color: black;
background-color:white;

}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
a
{
font-weight:bold;
color:white;

}
a:hover
{
text-decoration:none;
color:green;
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
	background: #8093FF;
}

	</style>
 
</head>
<body>
<div class="bloc">
	<video autoplay ="autoplay" muted=""  loop="infinite" src="drapeauSN.mp4"></video>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
			
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
			
		</div>
	</div>
</div>
</div>

</body>
</html>