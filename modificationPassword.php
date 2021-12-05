<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
<?php
require_once("headerCitoyen.php");
?>
<?php

$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{
		if(isset($_POST["ancien_password"]) && isset($_POST["new_password"]))
		{
		$ancien_password=$_POST["ancien_password"];
		$new_password=$_POST["new_password"];
		$req="select * from users where idUser=$idConnected AND password='$ancien_password'";
		$result=$connect->query($req);
		if($result->rowCount())
		{
			$reqU="UPDATE users SET password='$new_password' WHERE idUser='$idConnected'";
			 $resU=$connect->exec($reqU);
				echo'<script>';
							echo'swal({
								title: "Bravo!",
								text: "Modification Réussie avec Succés!",
								icon: "success",
								button: "ok"
							});';
					echo'</script>';
					
		}
		else
		{
			
			echo'<script>';
		
							echo'swal({';
								echo'title: "Echec!",';
								echo'text:  "Ancien Mot de Passe Incorrect!",';
								echo'icon: "error",';
								echo' button: "ok",';
								echo' timer: 30000';
									
							echo'});';
							// echo'document.location.replace("acceuil_demande.php")';
					echo'</script>';
					
					// echo"ok";
					// header('Location:acceuil_demande');
			
		}
		}
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>traitement</title>
	<style>
	body
	
	{
		background-image:url("https://cdn.pixabay.com/photo/2017/03/03/16/11/key-2114313_1280.jpg");
	}
	#btn
	
	{
		background:#00695c ;
	}
	#btn:hover
	{
		color:white;
	}
	</style>

</head>
<div class="modal modal" id="timeoutModal">
    <div class="modal-content">
        <h4 class="center">Timeout</h4>
        <h5>
            Vous session a été déconnecté.<br>
            Veillez vous reconnectez.
        </h5>
    </div>
    <div class="modal-footer">
        <a class="modal-close btn-flat waves-effect blue">Connexion</a>
    </div>
</div>

<script type="text/javascript">
// Set timeout variables.
var timoutNow = 900000;
var logoutUrl = 'deconnexion.php?session_expired=1';
var timeoutTimer;
// Start timers.
function StartTimers() {
    timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
}
// Reset timers.
function ResetTimers() {
    console.log('reset');
    clearTimeout(timeoutTimer);
    StartTimers();
    $('#idle_warning').hide();
}

// Show idle timeout warning dialog.
function IdleWarning() {
    $('#idle_warning').show();
}

// Logout the user.
function IdleTimeout() {

    $('#timeoutModal').modal('open');
    $('#idle_warning').show();
}

$(document).ready(function() {
    $('.modal').modal({
        dismissible: false,
        opacity: 0.6, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        preventScrolling: false,
        onCloseEnd: function() {
            window.location = "deconnexion.php";
        }
    });
    StartTimers();
    $(document).on('mousemove scroll keyup keypress mousedown mouseup mouseover', function() {
        ResetTimers();
    });
});

$(window).on('load', function() {

    $(window).on('mousemove scroll keyup keypress mousedown mouseup mouseover', function() {
        ResetTimers();
    });

});
</script>
	</head>
	<body >

<script type="text/javascript">
$(document).ready(function(){
$('.sidenav').sidenav();
$(".dropdown-trigger").dropdown({
hover: true, //déroulement de la liste au survol de l'élément
inDuration : 400,
outDuration : 300,
coverTrigger:false,//la liste déroulante apparaîtra sous le déclencheur.

belowOrigin: false,
alignment: 'right'
});
});
</script>		<div class="container white">
			<div class="row z-depth-5" style="padding: 10px;">
				<h3 class="center col s12 m12 l12">Modification du mot de passe</h3>
<form class="col s12" method="POST" id="form" action="<?php echo $_SERVER['PHP_SELF']?>" >
					<div class="row">
						<div class="col s10 m6 input-field">
							<input type="password" name="ancien_password" id="ancien_password" required="">
							<label for="ancien_password">Ancien mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="col s10 m6 input-field">
							<input type="password" name="new_password" id="new_password" required="">
							<label for="new_password">Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="col s10 m6 input-field">
							<input type="password" name="confirm_password" id="confirm_password" required="">
							<label for="password">Confirmer mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="col s3 m2 offset-m8 offset-s1 input-field">
							<input id="btn" class="btn" type="submit" name="enregistrer" value="Sauvegarder" >
						</div>
					</div>
				</form>
			</div>
		</div>
	
</style>

	</body>
	<script type="text/javascript">
		$(document).ready(function () {
			$('form').submit(function () {
				var pwd1=$('input[name=new_password]').val();
				var pwd2=$('input[name=confirm_password]').val();
				if (pwd1==pwd2) 
				{	
					if (!confirm('Voulez-vous confirmer l\'enregistrement du nouveau mot de passe ?')) 
					{
						return false;
					}
				}
				else 
				{
					alert('Erreur : Les mots de passe ne correspondent pas');
					return false;	
				}
			})
		});
	</script>
	 <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
</html>
