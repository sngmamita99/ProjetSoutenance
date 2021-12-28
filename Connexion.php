 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	 <!-- Made with love by Mutiullah Samim -->
   
	<!-- Bootsrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Fontawesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;

}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
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
#auth
{
	color:white;
	text-align:center;
}
.card
{
	margin-left:60%;
	margin-top:-25%;
}
#just
{
	color:white;
	margin-left:30%;
	font-size:130%;
	font-weight:bold;
	
}
#ok
{
	background-color:  rgba(0,0,0,0.5) !important;
	margin-top:7%;
	opacity:0.7;
}
h1
{
	color:white;
}
#cons
{
	color:white;
	font-size:130%;
}
#fleche
{
	margin-left:50%;
	width:3px
	height:3px;
}

</style>
 
</head>
<body>

<?php $SESSION->flash();
?>
<div class="bloc">
	<video autoplay ="autoplay" muted=""  loop="infinite" src="../drapeauSN.mp4"></video>
	   
       <div class="col-md-6 mb-4  text-center text-md-left"  id="ok" >
            <h1 class="display-4 font-weight-bold">Ecivil</h1>

            <hr class="hr-light">

            <p>
              <strong id="cons">La conservation numérique de l'état civil</strong>
            </p>
			<img id="fleche" src="images/c.png" alt="fleche"/>
            <p class="mb-4 d-none d-md-block">
              <p id="just">
				démocratisation de l'accés à l'information
				<br>
                 Pour des villes  écologiques
              </p>
            </p>
            
          
          </div>
	<div class="container">
	
	<!--<div class="d-flex    h-100">-->
<!--	justify-content-center   etait dans le div nomme dflex-->
		<div class="card">
		
			<div class="card-header">
				  <h3 class="dark-white-text text-center">
                    <strong>Authentification :</strong>
                  </h3>
                
			</div>
			<div class="card-body">
			
				<form method="post" action="traiterConnexion.php">
					<div class="input-group form-group">
                       
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="userName" class="form-control" placeholder="Nom d'utlisateur">
						
					</div>
					<br/>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="mdpAut" class="form-control" placeholder="Mot de passe">
					</div>
					<br/>
					<br/>
					<div class="form-group">
						<input type="submit" value="Se connecter" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Vous n'avez pas de compte?<a href="inscrireD.php">S'inscrire</a>
				</div>
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script src="alert.js"></script>
</body>
</html>