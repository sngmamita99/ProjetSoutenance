<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 
<?php

if(isset($_GET['code']) AND isset($_GET["numDe"]))
{
	$numCompte=$_GET['code'];
$k=$_GET["numDe"];
}
//echo "$numCompte $k";

// require_once("headerAgent.php");
// require_once("../SessionError.php");
// $SESSION = new Session();
//$date=$_SESSION['date'];
//$numCompte=$_SESSION['numCompte'];
	
	?>
	
<!doctype html>
<html lang="en">
 <head>
  	<title>Contact Form 06</title>
    
	<link rel="stylesheet" href="css/style2.css">
	
	<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 
<style>
#alert
	{
		
		height:30px;
		width:50%;
		text-align:center;
		margin-left:25%;
		
	}

.contact-wrap
{

	margin-left:70%;
	margin-top:-30px;


	
}
body
{
	background-image:url("https://cdn.pixabay.com/photo/2017/06/09/19/02/time-2387976_1280.jpg");
	
	overflow: hidden;
}
</style>
	</head>
	<body>
	<?php
	// $SESSION->flash();
	?>
<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-5">
								<div class="contact-wrap w-100 p-md-5 p-4">

<form method="POST"  action="" 
id="contactForm" name="contactForm" class="contactForm">
				<div class="row">
			<div class="col-md-6">
				<div class="form-group">
<label class="label" for="hDebut">Heure Début </label>
	<input type="time" class="form-control" name="hDebut"   id="hDebut" min="09:00" max="14:00" required="required" />
												</div>
											</div>
			<div class="col-md-6"> 
				<div class="form-group">
			<label class="label" for="hFin">Heure De Fin </label>
<input type="time" id="hFin" class="form-control" name="hFin"  min="09:00" max="14:00"  required="required"/>
												</div>
											</div>
		<div class="col-md-12">
					<div class="form-group">
						<label class="label" for="subject">Date </label>
							<input style="background:white;" type="date" class="form-control"
							name="tdate" id="tsubject" placeholder="Subject" 
							/>
								</div>
									</div>
								<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Type de Papier</label>
													<select name="typeDemande" class="form-control">
														<option value="Declaration de Naissance" > Declaration de Naissance</option>
														<option value="Declaration de Déces" > Declaration de Déces</option>
														<option value="Declaration de Mariage" > Declaration de Mariage</option>
													</select>
												</div>
											</div>
					<input type="submit" id="ajout" value="Ajouter Un RDV" class="btn btn-primary">
													
												</div>
												<div class="col s4 offset-s8 center ">
						<span class="erreur red-text" ></span>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
				          </div>
			          </div>
					</div>
				</div>
			 </div>
	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script>

$('#hFin').blur(function (e) {

		var hFin=$(this).val();
		var hDebut=$('#hDebut').val();
		// document.prompt('hDebut');
		// document.write(hFin);
		// document.write(hDebut);
		// date_input= new Date(date_input);
		// date_now= new Date();
		if (hFin<hDebut)
		{ 
			var heure = hFin.getHours();
			alert(heure);
			// alert('Erreur\nL\'heure de Fin ne peut pas inferieur à l\'heure de Début');
			// $(this).addClass('invalid');
			// $('#ajout').attr("disabled","");
			// $('.erreur').text("Erreur\n Veuillez vérifier les heures saisies");
		}
		
		else
		{
			$(this).removeClass('invalid');
			$('#ajout').removeAttr("disabled");
			$('.erreur').text("");
		}
	});
</script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 
	</body>
</html>

<?php
$numCompte=$_GET['code'];
$numDe=$_GET["numDe"];
 // require_once("SessionError.php");
// session_start();
// $SESSION=new Session();
	//$date=$_SESSION['date'];
	//$numCompte=$_SESSION['numCompte'];
	//$numDe=$_SESSION['numDe'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 

		if(isset($_POST['hDebut']) && isset($_POST['hFin']) && isset($_POST['tdate']) && isset($_POST['typeDemande']))
		{
			$numCompte=$_GET['code'];
			$date=$_POST['tdate'];
			$type=$_POST['typeDemande'];
			$hdeb=$_POST['hDebut'];
			$hfin=$_POST['hFin'];
			echo"$date $hdeb $hfin $type";
			$req="insert into rdv (DateRdv,numCompte,type,heureDebut,heureFin) values ('$date',$numCompte,'$type','$hdeb','$hfin')";
			$result=$connect->exec($req);
			$req1="UPDATE declarationnaissance SET etat=1 WHERE numCompte = $numCompte AND numDeclaration=$numDe";
			$result=$connect->exec($req1);
			echo'<script>';
							echo'swal({
								title: "Succés!",
								text: " rendez-vous ajouté avec succés",
								icon: "success",
								button: "ok"
							});';
					echo'</script>';
			
		}
		// else
		// {
			// echo"Veuillez remplir toutes les données";
		// }
			
				
		}
		else
		{
			echo"connexion not reussi";
		}
	?>