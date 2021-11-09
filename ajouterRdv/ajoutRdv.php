<?php
	session_start();
	$date=$_SESSION['date'];
	$numCompte=$_SESSION['numCompte'];
	// $nom=$_SESSION['nom'];
	// $prenom=$_SESSION['prenom'];
	?>
	
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
							
									<form method="POST"  action="../traitementAjoutRdv.php" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="hDebut">Heure Début </label>
							<input type="time" class="form-control" name="hDebut" id="hDebut" min="09:00" max="14:00" required="required" />
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="hFin">Heure De Fin </label>
													<input type="time" class="form-control" name="hFin" id="hFin" min="09:00" max="14:00"  required="required"/>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Date </label>
													<input type="input" class="form-control" name="tdate" id="tsubject" placeholder="Subject"	value="<?=$date?>"/>
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
											
													<input type="submit" value="Ajouter Un RDV" class="btn btn-primary">
													
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

	
	<!--<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>-->

	</body>
</html>

