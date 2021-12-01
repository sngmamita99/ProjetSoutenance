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
<link type="text/css" rel="stylesheet" href="../css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="../css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="../css1/formulaire.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style type="text/css">
body {
    background-color: white;
}
nav ul li a
{
	font-size:20px;
}
</style>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js1/jquery.min.js"></script>
<script type="text/javascript" src="../js1/materialize.min.js"></script>

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
  <li> <a href="../demandeActeNaiss.php"> Naissance</a></li>
  <li><a href="../l_demande_acte_confirme.php">Mariage</a></li>
    <li><a href="../l_demande_acte_confirme.php">Déces</a></li>
	<li><a href="../suivi_demande_Acte.php">Suivi de nos demandes sur place</a></li>
	<li><a href="../suivi_demande_Acte_OnLine.php">Suivi de nos demandes Par Livraison</a></li>
</ul>
<ul id="declaration" class="dropdown-content">
   <li> <a href="../DemandeDecNaiss.php"> Naissance</a></li>
  <li><a href="../l_demande_acte_confirme.php">Mariage</a></li>
    <li><a href="../l_demande_acte_confirme.php">Déces</a></li>
	<li><a href="../suivi_demandeDec.php">Suivi de nos demandes</a></li>
</ul>

<!--Dropdown structure impression -->
<ul id="impression" class="dropdown-content">
</ul>
<!--Dropdown déconnexion -->
<ul id="deconnexion" class="dropdown-content">
  <li> <a  href="../deconnexion.php">Déconnexion</a></li> 
   <li> <a  href="../modificationPassword.php">Changer Mot de passe</a></li> 
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
           <a href="rdv_citoyen.php">
            Rendez-vous</a>
        </li>
      <li>
          <a href="" class="dropdown-trigger" data-beloworigin="true" data-target="demande_acte">
            Demandes d'actes
                      </a>
        </li>
		 <li>
          <a href="DemandeDecNaiss.php" class="dropdown-trigger" data-beloworigin="true" data-target="declaration">
            Demandes de déclaration
            </a>
        </li>
		 <li>
          <a class="dropdown-trigger ab"  href="deconnexion.php" data-beloworigin="true"  data-target="deconnexion">
		  <i class="material-icons right" style="font-size: 40px">person_pin</i><?php echo" $prenom $nom";?></a>
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
  background-color: #00695c    ; 
}
ul.dropdown-content>li>a{/*Sélection des liens qui sont dans les listes déroulentes de la barre de navigation que l'on met en bleu*/
background-color : white   ;
color: #00695c     ;
}
ul.dropdown-content>li>a:hover{
background-color : #00695c        ;
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

	<style type="text/css">

		body
		{
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;

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
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 


<?php

require_once 'config.php';
 $num_dem=$_SESSION["numDemande"];
// Once the transaction has been approved, we need to complete it.
if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
    $transaction = $gateway->completePurchase(array(
        'payer_id'             => $_GET['PayerID'],
        'transactionReference' => $_GET['paymentId'],
    ));
    $response = $transaction->send();
 
    if ($response->isSuccessful()) {
        // The customer has successfully paid.
        $arr_body = $response->getData();
 
        $payment_id = $arr_body['id'];
        $payer_id = $arr_body['payer']['payer_info']['payer_id'];
        $payer_email = $arr_body['payer']['payer_info']['email'];
        $amount = $arr_body['transactions'][0]['amount']['total'];
        $currency = PAYPAL_CURRENCY;
        $payment_status = $arr_body['state'];
 
        // Insert transaction data into the database
        $isPaymentExist = $db->query("SELECT * FROM payments WHERE payment_id = '".$payment_id."'");
 
        if($isPaymentExist->num_rows == 0) {
            $insert = $db->query("INSERT INTO payments(payment_id, payer_id, payer_email, amount, currency, payment_status,num_demande)
			VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."','". $num_dem ."')");
			$numDemande=$db->query("UPDATE demandeactedenaissance SET etat_paiement =1 where numDemande = '".$num_dem."'");
        }
 
        echo "Le paiement est réussi. Votre identifiant de transaction est : ". $payment_id;
    } else {
        echo $response->getMessage();
    }
} else {
    echo 'La transaction a échoué';
}
?>