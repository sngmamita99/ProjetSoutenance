<?php
require_once("headerLivreur.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
<!--Import materialize.min.css-->

<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://kit.fontawesome.com/89205a59df.js" crossorigin="anonymous"></script>
</head>
<body>
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