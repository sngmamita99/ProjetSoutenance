<?php

	// session_start();
	// $date=$_SESSION['date'];
	// $numCompte=$_SESSION['numCompte'];
	// $nom=$_SESSION['nom'];
	// $prenom=$_SESSION['prenom'];?>
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Etat Civil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
#IconeEye
{
	width:20px;
	height:20px;
	margin-left:15px;
}
</style>
  <!-- =======================================================
  * Template Name: iPortfolio - v3.5.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">


      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Tableau de bord</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Declarations naissances</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Declarations mariages</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Declarations décés</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Demandes actes naissance</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Demandes actes mariage</span></a></li>
		  <li><a href="#D-acte-deces" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Demandes actes décés</span></a></li>
		 
		<li><a href="#rdv" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span> Rendez-vous</span></a></li>
		 
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
   <div class="container">
	 <div class="section-title">
      <!-- <h2>Tableau de bord</h2> -->
	 
	  </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Declarations de naissance</h2>

         
 <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM declarationnaissance  where etat =0 ORDER by date_declaration";
			$res=$connect->query($req);
			if($res->rowCount()>=1)
			{
				echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>N°Demande </th>";
                    echo"<th>Lien de Parenté</th><th>Détails</th><th>Date de Soumission</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{
						$numDe=$row['numDeclaration'];	
						// $nD=$row['nomDeclarant'];	
						// $pD=$row['prenomDeclarant'];	
                        $lien=$row['lienDeParente'];
						$date=$row['date_declaration'];
						$x=$row['numCompte'];
						 echo "<tbody>";
						 // echo"$x";
                        echo "<tr>";
                            echo "<td>$numDe</td><td>$lien</td><td><a href='justificatif.php?code=$x'><img id='IconeEye' src='images/eye.png' alt='Icone details'/></a></td><td class='dateSoumission'>$date</td>";
								echo "<td>";
								    echo "<a href='rdv.php?code=$x'><button class='btn btn-success'>Valider</button></a>";
									echo '<a href="annulerDemande.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
			}
			else
			{
				echo"Il n'ya pas encore de declaration de naissance";
			}
				
			
		}
				
    ?>
               
      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Declarations de mariage</h2>
           <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td><a href='justificatif.php'>justificatifs.jpg</a></td>";
								echo "<td>";
								    echo '<a href="activer.php"><button class="btn btn-success">Valider</button></a>';
									echo '<a href="desactiver.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Declarations de décés</h2>
		   <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td><a href='justificatif.php'>justificatifs.jpg</a></td>";
								echo "<td>";
								    echo '<a href="activer.php"><button class="btn btn-success">Valider</button></a>';
									echo '<a href="desactiver.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
         </div>
		</div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Demandes actes de naissance</h2>

           <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td><a href='justificatif.php'>justificatifs.jpg</a></td>";
								echo "<td>";
								    echo '<a href="activer.php"><button class="btn btn-success">Valider</button></a>';
									echo '<a href="desactiver.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Demandes actes mariage</h2>
           <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td><a href='justificatif.php'>justificatifs.jpg</a></td>";
								echo "<td>";
								    echo '<a href="activer.php"><button class="btn btn-success">Valider</button></a>';
									echo '<a href="desactiver.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
        </div>

      </div>
    </section>
	 <section id="D-acte-deces" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Demandes actes décés</h2>
           <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td><a href='justificatif.php'>justificatifs.jpg</a></td>";
								echo "<td>";
								    echo '<a href="activer.php"><button class="btn btn-success">Valider</button></a>';
									echo '<a href="desactiver.php"><button class="btn btn-danger">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
        </div>

      </div>
    </section>
	 <section id="rdv" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Rendez-vous</h2>
  <?php require_once("calendrier.php");?>
        </div>

      </div>
    </section>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
// var dd=document.getElementById('dateSoumission');
// dd.addEventListener("click",function(e)
// {
	// alert(this.innerText);
	// if(this.innerText==dd.getDate())
		// {
			// alert("bonjour");
		// }
// });
// getElementsByTagName()
// getElementsByName() 
// var today=querySelectorAll("td,.dateSoumission") 
// var n=today.length;
// var i=0;
// for(i=0;i<n;i++)
// {
	// today[i].addEventListener("click",function(e){
		// alert("ok");
		// if(this.innerText<d.getDate())
		// {
			// this.setAttribute('href','#');
			
		// }
	// },false);
// }
</script>

</body>

</html>