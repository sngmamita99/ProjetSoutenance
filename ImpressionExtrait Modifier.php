
<!DOCTYPE html>
<html>
	<head>
		<title>Extrait de naissance</title>
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
		<div class="contai white" style="padding:  10px">
			<div class="row premier">
				<div class="col s7 " style="border: 1px solid; height: 47mm">
					<p class="center"><b>REGION DE LOUGA<br>
						DEPARTEMENT DE KEBEMER<br>
						COMMUNE DE NDANDE</b><br>
											</p>
				</div>
				<div class="col s5" style="border: 1px solid; height: 47mm">
					<p class="center"><b>REPUBLIQUE DU SENEGAL<br>
					UN PEUPLE - UN BUT -UNE FOI<br>
					____________________</b></p>
					<h5 class="center"><b>ETAT - CIVIL</b></h5>
					<p class="center"><b>COMMUNE DE NDANDE</b></p>
				</div>
			</div>
			<div class="row" style="border: 1px solid;  margin-top: -21px;">
				<div class="col s9" style="border-right: 1px solid; height: 50mm ">
					<h6 style="font : 16pt 'times new roman'"><b>EXTRAIT DU REGISTRE DES ACTES DE NAISSANCE</b></h6>
					<h6><span class="truncate">Pour l'année (2) <b> deux mille vingt-et-un</b>.........................................</span> </h6>
					<h6><span class='truncate'>N° dans le registre <b> un</b>.....................................................</span> </h6>
					<i class="mini center col s6">En lettres</i><br>
				</div>
				<div class="col s3 center" style="">
					<h5>Année <br> <b>2021					</b>
					<br>
					<br>
					<b>N° 001</b>
					</h5>
					<p class="mini">(N° dans le registre en chiffres)</p>
				</div>
			</div>
			<div class="row" style="border: 1px solid; margin-top: -21px;">
				<div class="col s12">
					<p><span class="truncate" >Le <b> un novembre deux mille vingt-et-un</b>.............................................................................................</span>
						<span class="truncate">
						à <b>seize heures(s) quarante-neuf minute(s)</b> est né(e) à <b> NDANDE....................................................</b></span>
						<span class="truncate" >Un enfant de sexe <b>FEMININ.....................................................................</b>
						</span>
						<h6><b>&nbsp &nbsp &nbspSOW &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  FATOU</b></h6>
						<p style="margin-top: -10px"><i>&nbsp &nbsp &nbsp&nbsp &nbspPrénom(s) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp   Nom</i></p>
						<p>De &nbsp &nbsp &nbsp <b>SOW</b><br>
							&nbsp &nbsp &nbsp<i>Prénom(s) du père</i><br><br>
							et de&nbsp&nbsp <b>SOW&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp  FATOU</b><br>
						&nbsp &nbsp&nbsp <i>Prénom(s) de la mère&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp  Nom de la mère</i></p>
					</div>
				</div>
				<div class="row" style="border: 1px solid; margin-top: -21px; ">
					<div class="col s2" style="border: 1px solid; height: 50mm">
						<p>Jugement<br>
							d'autorisation<br>
							d'inscription tardive<br>
						de naissance</p>
					</div>
					<div class="col s8" style="border: 1px solid; height: 50mm">
						<p><i>Délivré par le juge d'instance de GUINGUINEO</i></p>
						<p>Le <b>
						 
					</b>
						</p>
						<p>Sous le numéro N° <b>
													</b> </p>
						<span class="truncate">Transcrit-le <b></b>
						</span>
						<p>Sur le registre des actes de naissances</p>
					</div>
					<div class="col s2 center" style="border: 1px solid; height: 50mm">
						<div class="row" style="border: 1px solid; width: 33mm;" >
							<h6>Année</h6>
							<b ></b><br>
						</div>
						<div class="row"  >
							<i class="mini">N° du jugement en chiffre</i>
							<b ></b><br>
							<h6>Année</h6>
							<b ></b><br>
						</div>
					</div>
				</div>
				<div class="row " style="border: 1px solid; margin-top: -21px;	">
					<p class="col s12">Extrait délivré par&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp  POUR EXTRAIT CERTIFIE CONFORME
						<br><b>la Mairie de NGATHIE NAOUDE</b>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp  <b>A NGATHIE NAOUDE &nbsp &nbsp &nbsp&nbsp &nbsp Le 10 / 11 / 2021</b><br>
						&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp  L'officier d'etat-civil soussigné<br><br>
						&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp  PRENOM ET NOM
					</p>
					<p style="font-size: 12px">(1) (2) (3) Notes et mentions marginales au verso</p>
				</div>
				<div class="row " style="border: 1px solid; margin-top: -21px;	">
					<div class="col s12">
						<br>
						<p><b>RESERVE</b> &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp|__|__| &nbsp&nbsp|__|__|__|&nbsp&nbsp|__|__|&nbsp&nbsp|__|__||__|__||__|__|&nbsp&nbsp|__|__||__|&nbsp&nbsp|__|__|&nbsp&nbsp|__|__||__|<br>
							<span style="font-size: 10px">&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbspDEP &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp CL &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp CEC &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  DN &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  S &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp PN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbspIDP
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="contai1 white" >
				<div class="row" style="border: 1px solid; padding-bottom: 25px;">
					<h5 class="center col s12">MENTIONS MARGINALES</h5>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
					<span class="truncate col s12">
						.......................................................................................................................................................................................
					</span>
				</div>
				<br>
				<br>
				<div class="row" style="border: 1px solid; padding-bottom: 25px;">
					<h5 class="center col s12">NOTES</h5>
					<p class=" col s12">
						(1)	Le centre d’état civil est dans tous les cas le centre de création de l’acte, qui tient ou a tenu le registre des actes de naissance dont l’extrait et tiré.<br><br>  
						En particulier quand un centre principal délivre un extrait tiré d’un registre d’un centre secondaire, il doit porter  la désignation de ce centre secondaire et non le sienne propre.<br><br>
						Toutes les mentions de la certification de conformité de et le sceau sont ceux de l’officier d’état civil du centre principal qui établit l’extrait.  
					</p>
					<br>
					<br>
					<span class="col s12">
						(2)	Quant un acte de naissance résulte de la transcription d’un jugement d’autorisation d’inscription (tardive de naissance), l’année à porter est l’année de l’inscription, c’est-à-dire l’année du registre, et non celle de la naissance.
					</span>
					<span class="col s12">
						<br>
						<br>
						(3)	La mention du pays de naissance pour les naissances à l’étranger n’intéresse que le centre principal de la 1ère circonscription urbaine du Cap-Vert et les postes diplomatiques et consulaires (Art.44 du code la famille).
					</span>
					<span class="col s12">
						<br>
						<br>
						(4)	Conserver la case utile
					</span>
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
				margin: 0px;
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
				.contai{
					margin: 0px;
				}
				.contai1{
					margin: 0px;
				}
				
			}
			.contai{
				margin: 10px;
			}
			.contai1{
				margin: 40px;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function () {
			
			window.print();
		});
		</script>
	</html>