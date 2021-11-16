<?php
require_once("heederOfficier.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Déclaration naissance</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<style type="text/css">
body {
    background-color: white;
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
	
<style type="text/css">
nav {
  background-color:  #650065  ; 
}
ul.dropdown-content>li>a{/*Sélection des liens qui sont dans les listes déroulentes de la barre de navigation que l'on met en bleu*/
background-color : white   ;
color:  #650065    ;
}
ul.dropdown-content>li>a:hover{
background-color :  #650065     ;
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

</script>	
<body >
		
		<div class="container z-depth-5 white">
			<div class="row">
	
			<form class="col s12" method="POST" action="RegistreNaiss.php" id="form" enctype="multipart/form-data">
				<h2 class="center">Déclaration d'un enfant</h2>
				<br>
				<div class="row">
					<div class="col s4 m2  input-field offset-s1">
						<span>Année registre</span>
<select class="browser-default" name="annee_registre" id="annee_registre" ">
							<option value='1941'>1941</option>
							<option value='1942'>1942</option>
							<option value='1943'>1943</option>
							<option value='1944'>1944</option>
							<option value='1945'>1945</option><option value='1946'>1946</option><option value='1947'>1947</option><option value='1948'>1948</option><option value='1949'>1949</option><option value='1950'>1950</option><option value='1951'>1951</option><option value='1952'>1952</option><option value='1953'>1953</option><option value='1954'>1954</option><option value='1955'>1955</option><option value='1956'>1956</option><option value='1957'>1957</option><option value='1958'>1958</option><option value='1959'>1959</option><option value='1960'>1960</option><option value='1961'>1961</option><option value='1962'>1962</option><option value='1963'>1963</option><option value='1964'>1964</option><option value='1965'>1965</option><option value='1966'>1966</option><option value='1967'>1967</option><option value='1968'>1968</option><option value='1969'>1969</option><option value='1970'>1970</option><option value='1971'>1971</option><option value='1972'>1972</option><option value='1973'>1973</option><option value='1974'>1974</option><option value='1975'>1975</option><option value='1976'>1976</option><option value='1977'>1977</option><option value='1978'>1978</option><option value='1979'>1979</option><option value='1980'>1980</option><option value='1981'>1981</option><option value='1982'>1982</option><option value='1983'>1983</option><option value='1984'>1984</option><option value='1985'>1985</option><option value='1986'>1986</option><option value='1987'>1987</option><option value='1988'>1988</option><option value='1989'>1989</option><option value='1990'>1990</option><option value='1991'>1991</option><option value='1992'>1992</option><option value='1993'>1993</option><option value='1994'>1994</option><option value='1995'>1995</option><option value='1996'>1996</option><option value='1997'>1997</option><option value='1998'>1998</option><option value='1999'>1999</option><option value='2000'>2000</option><option value='2001'>2001</option><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option><option value='2008'>2008</option><option value='2009'>2009</option><option value='2010'>2010</option><option value='2011'>2011</option><option value='2012'>2012</option><option value='2013'>2013</option><option value='2014'>2014</option><option value='2015'>2015</option><option value='2016'>2016</option><option value='2017'>2017</option><option value='2018'>2018</option><option value='2019'>2019</option><option value='2020'>2020</option><option value='2021' selected>2021</option>						</select>
					</div>
					<div class="col s4 m2 input-field offset-s1 offset-m1 num_registre">
						<input type="number" required name="num_registre" placeholder="N° registre" id="num_registre" >
					</div>
				</div>
				<div class="row">
					<div class="col s10 m11 l11" style="margin-left: 5%;">
						<ul class="collapsible ">
						<!-- Renseignement sur l'enfant' -->
						<li>
							<div class="collapsible-header"><b>Renseignements sur l'enfant</b></div>
							<div class="collapsible-body">

								<div class="row " >
									<div class="input-field col s3">
										<select name="type_declaration" id="type_declaration">
											<option selected value="" disabled="" >Type de déclaration</option>
											<option value="normale" >Nomale</option>
											<option value="tardive" >Tardive</option>
											<option value="jugement">Jugement</option>
										</select>
										<label>Type de déclaration</label>
									</div>
									<div class="input-field col s3">
										<input type="date" placeholder="" name="date_declaration" value="" class="date_input" required id="date_declaration" >
										<label for="date_declaration">Date déclaration</label>
									</div>
								</div>
								<div class="row hide" id="jugement" >
									<div class="input-field col s2">
										<input  type="number" value="" name="num_jugement" id="num_jugement">
										<label for="num_jugement">N° Jugement</label>
									</div>
									
									<div class="input-field col s3">
										<input  type="date" name="date_jugement" value="" class="date_input" id="date_jugement">
										<label  for="date_jugement">Date jugement</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s5">
										<input type="text" value="" name="prenom_enfant" id="prenom" >
										<label for="prenom">Prénom</label>
									</div>
									<div class="input-field col s4">
										<input type="text" value="" name="nom_enfant" id="nom_enfant" required>
										<label for="nom">Nom</label>
									</div>
									<div class="input-field col s3">
										<select name="sexe_enfant" required id="sexe_enfant" class="browser-default">
											<option value="" selected disabled >--Sexe--</option>
											<option value="FEMININ"  >Féminin</option>
											<option value="MASCULIN" >Masculin</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s3">
										<input type="date" value="" name="date_naissance_enfant" class="date_input" required id="date_naissance_enfant" >
										<label for="date_naissance_enfant">Date de naissance</label>
									</div>
									<div class="input-field col s3">
										<input type="time" value="" name="heure_naissance_enfant" class="" required id="heure_naissance_enfant" >
										<label for="heure_naissance_enfant">Heure de naissance</label>
									</div>
								</div>
								<div class="row">
									<span class="col s12 center">Lieu de naissance</span>
									<div class="col s5 offset-s2">
										<p>
											<label>
<input class="with-gap" id="structure_naissance" name="structure_naissance" value="Structure sanitaire publique" type="radio"  />
	<span>Structure sanitaire publique</span>
											</label>
										</p>
										<p>
											<label>
<input class="with-gap"   id="structure_naissance" name="structure_naissance" value="Structure sanitaire privee" type="radio" />
												<span>Structure sanitaire privée</span>
											</label>
										</p>
										<p>
											<label>
												<input class="with-gap"  id="structure_naissance" value="Autre" name="structure_naissance" type="radio"  />
												<span>Autre</span>
											</label>
										</p>
									</div>
									<div class="input-field col s4">
										<input type="text" value="" name="lieu_naissance_enfant" required id="lieu_naissance_enfant" >
										<label for="lieu_naissance">Lieu de naissance</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="number" class="col s5" value="1" name="nbr_naissance" required id="nbr_naissance" >
										<label for="nbr_naissance">Nombre à ma naissance (Jumeaux ou pas)</label>
									</div>
								</div>
							</div>
						</li>
					    <!-- Renseignement sur le père -->
					    <li>
					      <div class="collapsible-header"><b>Père</b></div>
					      <div class="collapsible-body">
					      	<div class="row">
								<div class="input-field col s10 m5">
									<input type="text" value="" name="cni_pere" id="cni_pere" >
									<label for="cni_pere">N° d'idenfication</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="prenom_pere" id="prenom_pere" >
									<label for="prenom_pere">Prénom(s)</label>
								</div>
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="nom_pere" id="nom_pere">
									<label for="nom_pere">Nom</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field">
									<input class="date_input" value="" placeholder="Date de naissance père" type="date" name="date_naissance_pere" id="date_naissance_pere">
									<label for="date_naissance_pere">Date de naissance</label>
								</div>
								<div class="col s10 m5 input-field">
									<input  type="text" name="lieu_naissance_pere" value="" id="lieu_naissance_pere">
									<label for="lieu_naissance_pere">Lieu de naissance</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="domicile_pere" id="domicile_pere">
									<label for="domicile_pere">Domicile</label>
								</div>
								<div class="col s10 m4 input-field">
									<input type="text" name="profession_pere" value="" id="profession_pere">
									<label for="profession_pere">Profession</label>
								</div>
							</div>
					      </div>
					    </li>
					    <!-- Renseignement sur la mère -->
					    <li>
					      <div class="collapsible-header"><b>Mère</b></div>
					      <div class="collapsible-body ">
					      	<div class="row">
								<div class="input-field col s10 m5">
									<input type="text" value="" name="cni_mere" id="cni_mere" >
									<label for="cni_mere">N° d'idenfication</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="prenom_mere" id="prenom_mere" >
									<label for="prenom_mere">Prénom(s)</label>
								</div>
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="nom_mere" id="nom_mere" >
									<label for="nom_mere">Nom</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field ">
									<input class="date_input" value="" type="date" placeholder="Date" name="date_naissance_mere" id="date_naissance_mere" >
									<label for="date_naissance_mere">Date de naissance</label>
								</div>
								<div class="col s10 m5 input-field">
									<input  type="text" value="" name="lieu_naissance_mere" id="lieu_naissance_mere">
									<label for="lieu_naissance_mere">Lieu de naissance</label>
								</div>
							</div>
							<div class="row">
								<div class="col s10 m5 input-field">
									<input type="text" value="" name="domicile_mere" id="domicile_mere">
									<label for="domicile_mere">Domicile</label>
								</div>
								<div class="col s10 m4 input-field">
									<input type="text" value="" name="profession_mere" id="profession_mere">
									<label for="profession_mere">Profession</label>
								</div>
							</div>
					      </div>
					    </li>
					    <!-- Renseignement sur le déclarant -->
					    <li>
					      <div class="collapsible-header "><b>Déclarant</b></div>
					      <div class="collapsible-body ">
					      	<div class="row">
					      		<div class="col s12 m12
					      		0"></div>
					      	</div>
					      	<div class="row">
					      		<div class="col s12 m7 l7">Le déclarent est-il un des parents ? (Père ou Mère)
					      		</div>
					      		<div class="col s10 m3 l3">
					      			<label>
								      <input class="with-gap parent" value="oui" name="parent" type="radio"  />
								      <span>Oui</span>
								    </label>
								    <label>
								      <input class="with-gap parent" value="non" name="parent" type="radio" checked />
								      <span>Non</span>
								    </label>
					      		</div>
					      	</div>
					      	<div class="row couple_parent">
					      		<div class="col s10 m3 l3">
					      			<label>
								      <input class="with-gap pere_mere" value="pere" name="pere_mere" type="radio" checked />
								      <span>Père</span>
								    </label>
								    <label>
								      <input class="with-gap pere_mere" value="mere" name="pere_mere" type="radio"  />
								      <span>Mère</span>
								    </label>
					      		</div>
					      	</div>
					      	<div class="row declarant">
						      	<div class="row">
									<div class="input-field col s10 m5">
										<input type="text" name="cni_declarant" id="cni_declarant" required >
										<label for="cni_declarant">N° d'idenfication</label>
									</div>
								</div>
								<div class="row">
									<div class="col s10 m5 input-field">
										<input type="text" name="prenom_declarant" id="prenom_declarant" required >
										<label for="prenom_declarant">Prénom(s)</label>
									</div>
									<div class="col s10 m5 input-field">
										<input type="text" name="nom_declarant" id="nom_declarant" required >
										<label for="nom_declarant">Nom</label>
									</div>
								</div>
								<div class="row">
									<div class="col s10 m5 input-field">
										<input class="date_input" type="text" placeholder="Date" name="date_naissance_declarant" id="date_naissance_declarant" >
										<label for="date_naissance_declarant">Date de naissance</label>
									</div>
									<div class="col s10 m5 input-field">
										<input type="text" name="lieu_naissance_declarant" id="lieu_naissance_declarant" required >
										<label for="lieu_naissance_declarant">Lieu de naissance</label>
									</div>
								</div>
								<div class="row">
									<div class="col s10 m5 input-field">
										<input type="text" name="domicile_declarant" id="domicile_declarant" required>
										<label for="domicile_declarant">Domicile</label>
									</div>
									<div class="col s10 m5 input-field">
										<input type="text" name="profession_declarant" id="profession_declarant" required >
										<label for="profession_declarant">Profession</label>
									</div>
								</div>
								<div class="row">
									<div class="col s10 m6 input-field">
										<input type="text" name="degre_parente" id="degre_parente" required >
										<label for="degre_parente">Degré de parenté</label>
									</div>
								</div>					      	
						      </div>
					      </div>
					    </li>
					    <!-- Pièces Justificatives -->
					    <li>
					      <div class="collapsible-header"><b>Pièces Justificatives</b></div>
					      <div class="collapsible-body">
					      	<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span >Pièce d’identités</span>
										<input type="file" accept="application/pdf" name="pi[]" class=" pi" multiple>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate pi" placeholder="Carte National d’identité / Passeport / Permis de Conduire "  type="text" >
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span >Autres</span>
										<input type="file" accept="application/pdf" name="domicle[]" class=" domicle" multiple>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate domicle" placeholder="Autres justificatifs"  type="text" >
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span >Sélectionner</span>
										<input type="file" accept="application/pdf" name="fichier_naissance[]" class=" fichier_naissance" multiple>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate fichier_naissance" placeholder="Attestation de naissance de l’hôpital / Clinique / Sanitaire"  type="text" >
									</div>
								</div>
							</div>
					      </div>
					    </li>

					  </ul>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col s3 m1 offset-m6 offset-s6 input-field">
						<a class="waves-effect waves-light btn modal-trigger red lighten-2" onclick="window.history.go(-1)">Annuler</a>
					</div>	
					<div class="col s3 m1 offset-m1 offset-s6 input-field">
						<a class="waves-effect waves-light btn modal-trigger green lighten-2" href="#verification">Verification</a>
					</div>
					<div class="col s3 m1 offset-m1 offset-s6 input-field">
						<input class="btn valider" type="submit" style="background-color:#00695c" name="enregsitrer" value="Enregistrer">
					</div>
					<div class="col s4 offset-s8 center ">
						<span class="erreur red-text" ></span>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Modal Structure -->
	<div id="verification" class="modal">
		<div class="modal-content">
			
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat green">Fermer</a>
		</div>
	</div>
	<style type="text/css">
footer {
    background-color: #00695c !important;
}
</style>

</body>

<script type="text/javascript">
$(document).ready(function() {
	$('.collapsible').collapsible();
	$('ul.tabs').tabs();
	$('select').formSelect();
	$('.tooltipped').tooltip();
	//DatePicker
	$(function(){
	    $('.date_input').fdatepicker({
	      format: 'yyyy-mm-dd',
	      disableDblClickSelection: true,
	      leftArrow:'<',
	      rightArrow:'>',
	      closeIcon:'X',
	      language:'fr',
	      closeButton: true
	    });
	  });
	//Choix du déclarant comme parent ou pas
	function parent () 
	{ 
		var parent=$('.parent:checked').val();
		if (parent=="oui") 
		{
			$('.declarant').addClass('hide');
			$('.couple_parent').removeClass('hide');
			var pere_mere=$('.pere_mere:checked').val();
			if (pere_mere=="pere") 
			{
				$('#cni_declarant').val($('#cni_pere').val());
				$('#prenom_declarant').val($('#prenom_pere').val());
				$('#nom_declarant').val($('#nom_pere').val());
				$('#date_naissance_declarant').val($('#date_naissance_pere').val());
				$('#lieu_naissance_declarant').val($('#lieu_naissance_pere').val());
				$('#domicile_declarant').val($('#domicile_pere').val());
				$('#profession_declarant').val($('#profession_pere').val());
				$('#degre_parente').val("Pere");
			}
			else
			{
				$('#cni_declarant').val($('#cni_mere').val());
				$('#prenom_declarant').val($('#prenom_mere').val());
				$('#nom_declarant').val($('#nom_mere').val());
				$('#date_naissance_declarant').val($('#date_naissance_mere').val());
				$('#lieu_naissance_declarant').val($('#lieu_naissance_mere').val());
				$('#domicile_declarant').val($('#domicile_mere').val());
				$('#profession_declarant').val($('#profession_mere').val());
				$('#degre_parente').val("Mere");
			}
		}
		else if (parent=="non") 
		{
			$('#cni_declarant').val("");
				$('#prenom_declarant').val("");
				$('#nom_declarant').val("");
				$('#date_naissance_declarant').val("");
				$('#lieu_naissance_declarant').val("");
				$('#domicile_declarant').val("");
				$('#profession_declarant').val("");
				$('#degre_parente').val("");
			$('.couple_parent').addClass('hide');
			$('.declarant').removeClass('hide');
		}
	}
	$('.parent').change(function() {
		parent();
	});
	$('.pere_mere').change(function() {
		parent();
	});
	parent();
	
	$('#form').submit(function () {
		if (!confirm('Voulez-vous confirmer l\'enregistrement ?')) {
			return false;
		}
	});
	
	$('.modal').modal({
		onOpenStart: function() {
			$('.modal-content').html('<h4 class="center">Vérification et Validation</h4><h5>Année de registre : <b>'+$('#annee_registre').val()+'</b> &nbsp&nbsp&nbsp N° registre : <b>'+ $('#num_registre').val()+'</b></h5><h5 class="center">Renseignements sur l\'enfant</h5><p>Prenom et Nom :<b>'+$('#prenom').val()+' '+$('#nom_enfant').val()+'</b><br>Type déclaration :<b>'+$('#type_declaration').val()+'</b><br>Date déclaration :<b>'+$('#date_declaration').val()+'</b> Date naissance :<b>'+$('#date_naissance_enfant').val()+'</b><br> Date jugement :<b>'+$('#date_jugement').val()+'</b><br> Heure naissance :<b>'+$('#heure_naissance_enfant').val()+'</b><br> Sexe : <b>'+$('#sexe_enfant').val()+'</b><br> Lieu naissance : <b>'+$('#structure_naissance').val()+' : '+$('#lieu_naissance_enfant').val()+'</b><br> </p><h5 class="center">Renseignements sur le père </h5><p>N° d\'identification : <b>'+$('#cni_pere').val()+'</b><br>Prenom et Nom : <b>'+$('#prenom_pere').val()+' '+$('#nom_pere').val()+'</b><br>Date et lieu de naissance : <b>'+$('#date_naissance_pere').val()+' à '+$('#lieu_naissance_pere').val()+'</b><br> Profession : <b>'+$('#profession_pere').val()+'</b> <br> Domicile : <b>'+$('#domicile_pere').val()+'</b></p> <h5 class="center">Renseignements sur la mère </h5><p>N° d\'identification : <b>'+$('#cni_mere').val()+'</b><br>Prenom et Nom : <b>'+$('#prenom_mere').val()+' '+$('#nom_mere').val()+'</b><br> Date et lieu de naissance : <b>'+$('#date_naissance_mere').val()+' à '+$('#lieu_naissance_mere').val()+'</b><br>Profession : <b>'+$('#profession_mere').val()+'</b><br> Domicile : <b>'+$('#domicile_mere').val()+'</b></p> <h5 class="center">Renseignements sur le déclarant </h5><p>N° d\'identification : <b>'+$('#cni_declarant').val()+'</b><br>Prenom et Nom : <b>'+$('#prenom_declarant').val()+' '+$('#nom_declarant').val()+'</b><br> Date et lieu de naissance : <b>'+$('#date_naissance_declarant').val()+' à '+$('#lieu_naissance_declarant').val()+'</b><br>Profession : <b>'+$('#profession_declarant').val()+'</b><br> Domicile : <b>'+$('#domicile_declarant').val()+'</b><br>Degre parenté : <b>'+$('#degre_parente').val()+'</b></p>');
		}
	});
	//vérification du nombre à la naissance
	function nbr_naissance(){
		var nbr_naissance=$('#nbr_naissance').val();
		if (nbr_naissance<1)
		{
			alert('Erreur\nLe nombre à la naissance doit être supérieur ou égale à 1');
			$('#nbr_naissance').addClass('invalid');
			$('.btn').attr("disabled","");
		}
		else
		{
			$('#nbr_naissance').removeClass('invalid');
			$('.btn').removeAttr("disabled");
		}
	}
	$('#nbr_naissance').blur(function(){
		nbr_naissance();
	});
	$('#nbr_naissance').keyup(function(){
		nbr_naissance();
	});
 
	
	//Controlle des dates
	$('.date_input').blur(function () {
		var date_input=$(this).val();
		date_input= new Date(date_input);
		date_now= new Date();
		if (date_input>date_now)
		{
			alert('Erreur\nLa date ne peut être supérieur à la date actuelle');
			$(this).addClass('invalid');
			$('.valider').attr("disabled","");
			$('.erreur').text("Erreur\n Veillez vérifier les dates saisies");
		}
		else
		{
			$(this).removeClass('invalid');
			$('.valider').removeAttr("disabled");
			$('.erreur').text("");
		}
	});


	//fonction permettant d'afficher les input pour le jugement
	$('#type_declaration').change(function () {
		if ($(this).val()=="jugement")
			{
				$('#jugement').removeClass('hide');
				$('.num_registre').addClass('hide');
			}
		else{
			$('#jugement').addClass('hide');
			$('.num_registre').removeClass('hide');
		}
	});
	$('#prenom').focus(function () {
		if ($('#type_declaration').val()=='tardive') {
			if (true) {}
		}
	});

});
function comptage_numRegistre()
 {
	 var ann=document.getElementById("annee_registre");
	 var annValue=ann.value;
	 var url='comptage_registre.php?msg='+annValue;
	var xhr=new XMLHttpRequest();
	xhr.open('GET',url);
	xhr.send();
	if (xhr.readyState == 4 && xhr.status == 200)
	{
		document.getElementById("num_registre").value=xhr.responseText;
}
 }

	$('#annee_registre').change(function(){
		comptage_num_registre();
	});
</script>
<style type="text/css">
	.collapsible-header
	{
		color: #1a237e;
	}
	.collapsible-body
	{
		background-color: #fafafa ;
	}
	.active>.collapsible-header
	{
		background-color: #e8eaf6 ;
	}

	.error
	{
		border-bottom: 1px solid #000;
	box-shadow: 0 1px 0 0 #000;
	color: #000;
	}
	body
	{
		background-position: center center;
		background-repeat:  no-repeat;
		background-attachment: fixed;
		background-size:  cover;
	}
</style>

</html>