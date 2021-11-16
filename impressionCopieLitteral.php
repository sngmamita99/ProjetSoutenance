
<!DOCTYPE html>
<html>
	<head>
		<title>Impression</title>
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
				<a href="" class="btn" onclick="window.print();">Imprimer</a>
		<a href="" class="btn" onclick="window.close();">Fermer</a>
			<div class="container white">
				<div class="row ">
					<div class="col s5 ">
						<p class="center"><b>REPUBLIQUE DE CENTRE AFRIQUE <br>
							<i>Unité - Dignité - Travail</i><br><br>
						</b>
						<b>REGION DE GUINGUINEO<br>
							DEPARTEMENT DE GUINGUINEO<br>
							COMMUNE DE NGATHIE NAOUDE</b><br>
							<img src="../eregister/logos/5.png" height="70px" ><br>
							CENTRE  ETAT CIVIL DE NGATHIE NAOUDE						</p>
					</div>
					<h6 class="col s10 offset-s4">
						<i>ANNEE</i>&nbsp&nbsp&nbsp .....<b>2021</b>.....<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>N°</i>&nbsp&nbsp&nbsp .....<b>003</b>.....
					</h6>
				</div>
				<div class="row " style="margin-top: 0px;">
					<h5 class="col s12 center" style="margin-top: -15px;font : 26pt 'times new roman'">
						<b>COPIE LITTERALE D’ACTE DE NAISSANCE</b>
					<p class="tete" style="margin-top: -3px">
						Délivrée aux personnes désignées par le 5éme alinéa<br>
						De l’article 30 de la 61-55 du 23 juin 1961
					</p>
					</h5>
					<h5 class="col s12" style="margin-top: -8px ;font : 18pt 'times new roman'">
						Est né(e) le ......<b> un novembre deux mille vingt-et-un</b>.... A .....<b>seize heures(s) quarante-neuf minute(s)</b>.....<br>
						<span class='truncate'>A ......................<b>NDANDE</b>..............................................................................................................</span>
						<span class='truncate'>De l'année ......................<b>2021</b>........................................................................................</span>
						<span class='truncate'>L'enfant de sexe ......................<b>FEMININ</b>........................................................................................</span>
						<span class="truncate"><i>(1)Prénommé(e)</i> ............<b>SOWE FATOU</b>.........................................................................................................................</span>
						<span class="truncate"><i>(2)Fils / Fille de ..................</i> <b>SOW </b>..........................................................................................................................................................</span>
						<span class="truncate">Né le .......... <b>10 mai 2014</b>.... à ....<b>Ndande</b>..................................................................</span>
						&nbsp&nbsp&nbsp&nbsp Domicile ...<b>MBOUR</b>... Profession ....<b>DENTISTE</b>...<br>
						<span class="truncate"><i>(3)Et de </i>........<b>SOW FATOU</b>.................................................................................................................................................................</span>
						Né le ...................... <b>2 novembre 2021...........</b> à <b>NDANDE....</b><br>
						&nbsp&nbsp&nbsp&nbsp Domicile ...<b>DIAMAGUENE</b>... Profession ....<b>DENTISTE</b><br>
						<span class="truncate">Dressé le .............<b>16 / 11 / 2021</b>................................................................................................</span>
					</h5>
					<h4 class="col s12 center" style="margin-top: 0px;">
						<b >Officier de l’état civil    </b>					
					</h4>
					<h6 class="col s12" style="margin-top: -20px; font: 18pt 'times new roman'">
						<span class="truncate">Sur la déclaration de ....................................................................................................................................................................................................</span>
						&nbsp&nbsp&nbsp&nbsp Ou Par le jugement d’autorisation d’inscription tardive de naissance <br>
						N°....<b>016</b>..... &nbsp&nbsp DU ......<b>  </b>... Du tribunal d’instance de <b>GUINGUINEO</b><br>
						Oui, lecture faite, a signé avec nous .................................................................<br>
						Mentions Marginales....................................................................................<br>
						............................................................................................................................<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPOUR COPIE CONFORME <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbspFait à NGATHIE NAOUDE le <b>16 / 11 / 2021</b><br><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp L’officier d’état civil
					</h6>
					<div class="col s12">
						(1) Prénom et Nom de l’enfant<br>	
						(2)Prénom, nom, âge profession et domicile du père et de la mère<br>
						(3) Prénom, nom, âge, profession et domicile du déclarant <br>  
					</div>

				</div>
			</div>				
	</body>
	<style type="text/css">

		/*import du css de materialize*/
		@import "css/materialize.min.css" print;
		/*CSS pour la page à imprimer */
		/*Dimension de la page*/
		@page
		{
			size: portrait;
			margin: 0;
			margin-top: 25px;
		}
		@media print
		{
			.btn{
				display: none;
			}
			div
			{
			font: 12pt "times new roman";
			}
			.mini{
				font: 8pt "times new roman";
			}
			.tete{
				font: 12pt "Baskerville Old Face";	
			}
		}
	</style>

</html>