<?php 
session_start();
$idConnected=$_SESSION['idConnected'];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="select nom,prenom from users where idUser=$idConnected ";
			$res=$connect->query($req);
			$ligne=$res->fetch();
			$prenom=$ligne["prenom"];
			$nom=$ligne["nom"];
		}

?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Liste des demandes d'actes</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<style type="text/css">
body {
    background-color: #eff1f2;
}
</style>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/materialize.min.js"></script>

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
	<body id="debut" >
		<!--Dropdown structure demande d'acte -->
<ul id="demande_acte" class="dropdown-content">
  <li> <a href="l_demande_acte.php"> Naissance</a></li>
  <li><a href="l_demande_acte_confirme.php">Mariage</a></li>
    <li><a href="l_demande_acte_confirme.php">Déces</a></li>
</ul>
<ul id="declaration" class="dropdown-content">
  <li> <a href=""> Naissance</a></li>
  <li><a href="l_demande_acte_confirme.php">Mariage</a></li>
    <li><a href="l_demande_acte_confirme.php">Déces</a></li>
</ul>

<!--Dropdown structure impression -->
<ul id="impression" class="dropdown-content">
</ul>
<!--Dropdown déconnexion -->
<ul id="deconnexion" class="dropdown-content">
  <li> <a  href="deconnexion.php">Déconnexion</a></li>
  
</ul>

<!--Dropdown autres documents -->
<ul id="autres_documents" class="dropdown-content">
  <li> <a  href="#">Certificat</a></li>
  <li> <a  href="#">Attestation</a></li>
  <li> <a  href="#">Demandes</a></li>
  <li> <a  href="#">Fiche</a></li>
</ul>

<div class="white center entete_img row center" style="margin-bottom: 0px">
  <img style="" src=""  alt="logo" class="col s2 offset-s2" >
  <h4 class="col s6" style="font:'times new roman';">Système d'Enregistrement<br>d'Etat Civil Automatisé</h4>
</div>

<nav>
    <div class="nav-wrapper">
      <a href="accueil.php" class="brand-logo">&nbsp&nbsp&nbsp Registre+</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="ab"   href="#"></a></li>
        <li>
          <a href="l_pre_declaration_att.php">
            Rendez-vous</a>
        </li>
      <li>
          <a href="l_demande_acte.php" class="dropdown-trigger" data-beloworigin="true" data-target="demande_acte">
            Demandes d'actes
                      </a>
        </li>
		 <li>
          <a href="DemandeDecNaiss.php" class="dropdown-trigger" data-beloworigin="true" data-target="declaration">
            Demandes de déclaration
            </a>
        </li>
        
        <li>
          <a class="dropdown-trigger ab"  href="deconnexion.php" data-beloworigin="true"  data-target="deconnexion"><?php echo" $prenom $nom";?><img id="fa" src="fa.png" alt="se connecter"></a>
        </li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href=""></a></li>
  </ul>

<style type="text/css">

#fa
{
	width:30px;
	height:30px;
}
nav {
  background-color: #00695c   ; 
}
ul.dropdown-content>li>a{/*Sélection des liens qui sont dans les listes déroulentes de la barre de navigation que l'on met en bleu*/
background-color : white   ;
color: #00695c    ;
}
ul.dropdown-content>li>a:hover{
background-color : #00695c       ;
color: white;
}
.dropdown-trigger{
padding-left: 50px;
}
/*Code nécessaire pour la barre de navigation */
.dropdown-content {
overflow-y: visible;
}
/* Permet de décaler la liste déroulante vers la droite*/
.dropdown-content .dropdown-content {
margin-left: 100%;
}
body{
font: 14pt 'times new roman';
background-color: #eff1f2;
}
</style>
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
</script>	
	
		
</style>
<body>
</body>
	<style type="text/css">

		body
		{
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			background:white;

		}
		table{
			font-family: "times new roman";
			font-size: 20px;
		}
	</style>
	<script type="text/javascript">
		function demandes() {
				var mois = $('select:eq(0)').val();
			    var annee = $('select:eq(1)').val();
				$.ajax({
					type:'POST',
					url:'l_demande_acte_confirme_ajax.php',
					data:'a=a',
					success:function (html) {
						$('tbody').html(html);
					}
				});
			}
			demandes();
			$('select').change(function () {
				demandes();
			});
	$('.tooltipped').tooltip();
	 $('.fixed-action-btn').floatingActionButton();
</script>
</html>
       
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