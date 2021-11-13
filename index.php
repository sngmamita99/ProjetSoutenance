
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
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

<body style="background-color: #eff1f2;">
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">&nbsp&nbsp&nbspRegistre+</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="Connexion.php"><img id="fa" src="fa.png" alt="se connecter"></a></li>
				
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="slider ">
            <ul class="slides">
                <li>
                    <img src="https://cdn.pixabay.com/photo/2016/11/23/14/37/blur-1853262_1280.jpg"> <!-- random image -->
                    <div class="caption left-align ">
                        <h3 style="color:white" class="">Persistance des données</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" > Introduction et sauvegarde des données d'un acte d'état civil (Naissance, Mariage, Décès), anciens ou en cours de constitution</h5>
                    </div>
                </li>
                <li>
                    <img src="https://cdn.pixabay.com/photo/2017/06/28/10/06/binary-2450153_1280.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3 >Utilisation ergonomique</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" >Faciliter le travail de saisie des données en saisissant automatiquement les informations du
                centre d’état civil</h5>
                    </div>
                </li>
                <li>
                    <img src="https://cdn.pixabay.com/photo/2015/06/25/17/21/smart-watch-821557_1280.jpg"> 
                    <div class="caption left-align">
                        <h3>Gain de temps</h3>
                        <h5 class="light grey-text text-lighten-3">	Rendre efficace le processus de déclaration de naissance</h5>
                    </div>
                </li>
                <li>
                    <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Vue d'ensemeble des données</h3>
                        <h5 class="light white-text text-lighten-3 blue-grey darken-1" >Visualiser sélectivement les données en fonction de leur statut (en attente de validation, validé, transféré, confirmé)</h5>
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