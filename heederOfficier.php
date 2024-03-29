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
		<title>Accueil</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
body {
    background-color: #eff1f2;
}
nav ul li a
{
	font-size:20px;
}
</style>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/materialize.min.js"></script>

<script type="text/javascript">
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
<body id="debut">
<!--Dropdown structure impression -->
<ul id="impression" class="dropdown-content">
  <li><a href="valider_dem_acte_livraison.php">Par Livraison</a></li>
  <li class="divider"></li>
   <li> <a href="traitementDemNaissSurPlace.php" >Sur Place</a></li>
</ul>
<!--Dropdown structure déclarations -->
<ul id="declaration" class="dropdown-content">
  <li><a href="formDeclNaiss.php">Déclarer Naissance</a></li>
  <li class="divider"></li>
  <li><a href="e_deces.php">Déclarer déces</a></li>
  <li><a href="e_mariage.php">Déclarer mariage</a></li>
  <li class="divider"></li>
</ul>
<!--Dropdown structure registres -->
<ul id="registre" class="dropdown-content">
  <li><a href="RegistreDesNaissances.php">Registre Naissances</a></li>
  <li class="divider"></li>
  <li><a href="l_deces.php">Registre déces</a></li>
  <li><a href="l_mariage.php">Registre mariages</a></li>
  <li class="divider"></li>
</ul>
<!--Dropdown déconnexion -->
<ul id="deconnexion" class="dropdown-content">
  <li> <a  href="deconnexion.php">Déconnexion</a></li>
  <li> <a href="modificationPasswordOff.php">Changer Mot de Passe</a></li>
</ul>

<!--Dropdown autres documents -->
<ul id="autres_documents" class="dropdown-content">
  <li> <a  href="#">Certificat</a></li>
  <li> <a  href="#">Attestation</a></li>
  <li> <a  href="#">Demandes</a></li>
  <li> <a  href="#">Fiche</a></li>
</ul>


<div class="white center entete_img row center" style="margin-bottom: 0px">
   <img  id="logo" style="" src="images/lo.jpeg"  alt="logo" class="col s2 offset-s2" >
  <h4 class="col s6" style="font:'times new roman';">Commune de TIVAOUNE DIACKSAO<br>Centre d'Etat Civil de  TIVAOUNE DIACKSAO</h4>
  
  
</div>

<nav>
    <div class="nav-wrapper">
      <a href="acceuilOfficier.php" class="brand-logo">&nbsp&nbsp&nbsp </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="ab"   href="#"></a></li>
        <li><a href="" class="dropdown-trigger" data-beloworigin="true" data-target="declaration" >Déclaration</a></li>
        <li><a href="" class="dropdown-trigger" data-beloworigin="true" data-target="registre" >Registre</a></li>
        <li><a href="" class="dropdown-trigger" data-beloworigin="true" data-target="impression" >Demandes d'actes</a></li>
        <li><a href="calendrierOff.php" data-beloworigin="true" data-target="autres_documents" >Rendez-vous</a></li>
        <li>
          <a class="dropdown-trigger ab"  
		  href="" data-beloworigin="true" 
		  data-target="deconnexion">
		 
		   <i class="material-icons right" style="font-size: 40px">
		   person_pin</i>L'officier<?php echo" $prenom $nom";?></a>
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
  .btn
  {
    background-color: #1a237e;
  }
  .btn:hover
  {
    background-color: white;
    color: #1a237e;
  }
nav {
  background-color:  #00695c; 
}
ul.dropdown-content>li>a{/*Sélection des liens qui sont dans les listes déroulentes de la barre de navigation que l'on met en bleu*/
background-color : white   ;
color: #00695c     ;
}
ul.dropdown-content>li>a:hover{
background-color :  #00695c ;
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
</body>
