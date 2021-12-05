<?php 
require_once("headerCitoyen.php")
?>
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://kit.fontawesome.com/89205a59df.js" crossorigin="anonymous"></script>
<style type="text/css">

body {
    background-color: #eff1f2;
	overflow:hidden;
}
.brand-logo
{
	font-weight:bold;
	
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
	<body id="debut" >

<!--<ul id="deconnexion" class="dropdown-content">

 <li> <a  href="Connexion.php">Connecter</a></li> 
   <li> <a  href="paypal/formulaire.html">Connecter</a></li>
  <li> 
		<a  href="acceuil_demande.php">
			Demande d'acte <i class="fa fa-graduation-cap ml-2"></i>
		</a>
	</li>-->
  
</ul>

<!--<nav>
    <div class="nav-wrapper">
      <a href="accueil.php" class="brand-logo">&nbsp&nbsp&nbsp Registre+</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
		<li>
			<a class="dropdown-trigger ab"  href="Connexion.php" data-beloworigin="true"  data-target="deconnexion">
			<i class="material-icons " style="font-size: 40px">person_pin</i><a>
        </li>
      </ul>
    </div>
  </nav>-->

<style type="text/css">


ul.dropdown-content>li>a{/*Sélection des liens qui sont dans les listes déroulentes de la barre de navigation que l'on met en bleu*/
background-color : white   ;
color: black    ;
}
ul.dropdown-content>li>a:hover{
background-color :  #00695c  ; 
color: white;
font-weight:bold;
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
background-color: white;
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
    <div class="row">
        <div class="slider ">
		
            <ul class="slides">
                <li>
				<img src="https://cdn.pixabay.com/photo/2020/08/06/22/29/fathers-day-5469310_1280.jpg"> 
				 
                   <!-- random image -->
                    <div class="caption left-align ">
                      <!--  <h3 style="color:white" class="">Persistance des données</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" >
						Introduction et sauvegarde des données d'un acte d'état civil 
						(Naissance), anciens ou en cours de constitution</h5>-->
                    </div>
                </li>
                <li>
                    <!-- random image -->
					<img src="https://cdn.pixabay.com/photo/2016/11/21/15/58/wedding-1846114_1280.jpg">
					 
                    <div class="caption left-align">
                       <!--  <h3 >Utilisation ergonomique</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" >Faciliter le travail de saisie des données en saisissant automatiquement les informations du
                centre d’état civil</h5>-->
                    </div>
                </li>
                <li>
                     <img src="https://cdn.pixabay.com/photo/2016/04/09/10/08/person-1317770_1280.jpg">
                    <div class="caption left-align">
                        <!-- <h3>Gain de temps</h3>
                        <h5 class="light grey-text text-lighten-3">
						Rendre efficace le processus de demande d'un acte d'état civil</h5>
						-->
                    </div>
                </li>
                <li>
                   
					  <img src="https://cdn.pixabay.com/photo/2016/11/23/17/56/flowers-1854075_1280.jpg"><!-- random image -->
                    <div class="caption center-align">
                       <!--  <h3>Vue d'ensemble des données</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" >
						Visualiser sélectivement les données en fonction de leur statut
						(en cours, terminé)</h5>-->
                    </div>
			
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <h5 class="col s6"></h5>
	
    </div>
	
</body>
<style type="text/css">
h3,h5
{
	font-weight:bold;
}
nav {
  background-color: #00695c  ; 
}
body {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #999;
}

#preloader {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fefefe;
    z-index: 99;
    height: 100%;
}

#status {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    top: 50%;
    background-image: url(css/images/Spinner.gif);
    background-repeat: no-repeat;
    background-position: center;
    margin: -100px 0 0 -100px;
}
#fa
{
	
	width:30px;
	height:30px;
}

</style>
<script type="text/javascript">
$(document).ready(function() {
    $('.slider').slider({
        indicators: false,
        height: 500
    });

    // will first fade out the loading animation
    //jQuery("#status").fadeOut();
    jQuery("#status").delay(400).fadeOut("slow");
    // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(400).fadeOut("slow");

    function etat_demande() {
        var r = $('input').val();
        $.ajax({
            type: 'POST',
            url: 'etat_demande_ajax.php',
            data: 'r=' + r,
            success: function(html) {
                $('.recherche').html(html);
            }
        });
    }
    $('.btn_recherche').click(function() {
        etat_demande();
    });
})
</script>

</html>