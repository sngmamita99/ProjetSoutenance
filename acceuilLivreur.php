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

</body>
<style type="text/css">
body 
{
    background-image: url("images/livreur.jpg");
}

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