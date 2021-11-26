<?php
require_once("headerCitoyen.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Demande d'acte d'état civils</title>
    <meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<style type="text/css">
body {
    background-color: white;
}
nav
{
	background:#00695c ;
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
   
    <div class="container white" >
        <div class="row">
            <form id="formu" class="col s12 m12 l12" method="POST" action="traitement_dem_acte_naiss.php">
                <input type="number" name="s" hidden="" onsubmit="return verification()">
                <h3 class="center">Formulaire de demande d'acte d'état civils</h3>
                <div class="row">
                   
                    <div class=" input-field col s6 m4 l4">
                        <select class="browser-default registre" required="" name="registre" id="registre">
                            <option value="" disabled selected>Choisissez le registre</option>
                            <option value="Registre des deces">Registre des deces</option>
                            <option value="Registre des mariages">Registre des mariages</option>
                            <option value="Registre des naissances">Registre des naissances</option>
                        </select>
                    </div>
                    <div class="naissances input-field col s6 m4 l4 " id="naissances">
                        <select class="browser-default acte" name="naissance" id="naissances">
 <option value="" disabled selected>Choisissez l'acte naissance</option>
   <option value="Extrait de naissance">Extrait de naissance</option>
  <option value="Copie littérale de naissance">Copie littérale de naissance</option>
                        </select>
                    </div>
                    <div class="deces input-field col s6 m4 l4 " id="deces">
                        <select class="browser-default acte" name="deces">
                            <option value="" disabled selected>Choisissez l'acte de deces</option>
                            <option value="Certificat de deces">Certificat de deces</option>
                            <option value="Copie littérale de deces">Copie littérale de deces</option>
                        </select>
                    </div>
                    <div class="mariages input-field col s6 m4 l4 " , id="mariages">
                        <select class="browser-default acte" name="mariages">
                            <option value="" disabled selected>Choisissez l'acte de mariage</option>
                            <option value="Certificat de mariage">Certificat de mariage</option>
                            <option value="Copie littérale de mariage">Copie littérale de mariage</option>
                            <option value="Attestation de changement d’option">Attestation de changement d’option
                            </option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s6 m2 l2">
                        <input type="number" required min="1980" max="2021" name="annee_registre"
                            id="annee_acte">
                        <label for="annee_acte">Année du registre</label>
                    </div>
                    <div class="input-field col s6 m2 l2">
                        <input type="number" required min="1" name="num_registre" id="num_acte">
                        <label for="num_acte">N° du registre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m5 l5">
                        <input type="text" required name="prenom" id="prenon">
                        <label for="preno">Prénom figurant sur l'acte</label>
                    </div>
                    <div class="input-field col s6 m5 l5">
                        <input type="text" required name="nom" id="nom">
                        <label for="nom">Nom figurant sur l'acte</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m3 l3">
                        <input type="number" required min="1" value="1" max="15" name="nbr_copies" id="nbr_copies">
                        <label for="nbr_copies">Nombre de copies de l'acte</label>
                    </div>
                   <!-- <div class="input-field col s6 m3 l4">
                        <select class="browser-default acte" name="methode_paiement" id="methode_paiement">
                            <option value="" disabled selected> Methode de Paiement</option>
                            <option value="Sur Place">Sur Place</option>
							<option value="Livraison">Livraison</option>
                        </select>
                    </div>-->
 </div>
                <div class="row">
                    <div class="col s2 offset-s8 input-field">
                        <input class="btn white-text blue darken-4" type="submit" name="enregistrer"
                            value="Enregistrer">
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#naissances').addClass('hide');
    $('#mariages').addClass('hide');
    $('#deces').addClass('hide');
    $('input').addClass('hide');
    $('label').addClass('hide');
	 $('#methode_paiement').addClass('hide');
	

    function select_acte() {
        var registre = $('.registre').val();
        if (registre == "Registre des deces") {
            $('#naissances').addClass('hide');
            $('#mariages').addClass('hide');
            $('#deces').removeClass('hide');
        } else if (registre == "Registre des naissances") {
            $('#deces').addClass('hide');
            $('#mariages').addClass('hide');
            $('#naissances').removeClass('hide');
        } else if (registre == "Registre des mariages") {
            $('#naissances').addClass('hide');
            $('#deces').addClass('hide');
            $('#mariages').removeClass('hide');
        }
        $('input').removeClass('hide');
        $('label').removeClass('hide');
		 $('#methode_paiement').removeClass('hide');

    }


    $('.registre').change(function() {
        select_acte();
    });
    $('form').submit(function() {
        if (!confirm('Voulez-vous confirmer l\'enregistrement de cette demande d\'acte ?')) {
            return false;
        }
    });
	
</script>
<style type="text/css">
body {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>

</html>