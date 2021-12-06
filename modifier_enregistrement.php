<?php
							// $idRegistre=$_GET["idRegistre"];
							// $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
							// if($connect)
							// { 	
								// $req2="Select * FROM  justificatif where idRegistre=$idRegistre ";
								// $result2=$connect->query($req2);
								// while($ligne=$result2->fetch())
								// {
									// $jus=$ligne["libelle"];
									// if($jus=='Carte National d’identité du pére')
									// {
										// echo '$ligne["libelle"]';
									// }
									// else if($jus=='Carte National d’identité de la mére')
									// {
										// echo '$ligne["libelle"]';
									// }
									// else 
									// {
										// echo '$ligne["libelle"]';
									// }
								// }
							// }
							?>
<?php
require_once("heederOfficier.php");
$idRegistre=$_GET['idRegistre'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
    if($connect)
	{ 
		$req="select * from registrenaissance where idRegistre=$idRegistre ";
		$result=$connect->query($req);
		$ligne=$result->fetch();
		$idRegistre=$ligne["idRegistre"];
		$num_registre=$ligne["num_registre"];
		$annee_registre=$ligne['annee_registre'];
$type_declaration=$ligne["type_declaration"];
$date_declaration=$ligne["date_declaration"];
$num_jugement=$ligne["num_jugement"];
$date_jugement=$ligne["date_jugement"];
$prenom_enfant=$ligne["prenom_enfant"];
$nom_enfant=$ligne["nom_enfant"];
$sexe_enfant=$ligne["sexe_enfant"];
$lieu_naissance_enfant=$ligne["lieu_naissance_enfant"];
$date_naissance_enfant=$ligne["date_naissance_enfant"];
$heure_naissance_enfant=$ligne["heure_naissance_enfant"];
$nbr_naissance=$ligne["nbr_naissance"];
$cni_pere=$ligne["cni_pere"];
$prenom_pere=$ligne["prenom_pere"];
$nom_pere=$ligne["nom_pere"];
$date_naissance_pere=$ligne["date_naissance_pere"];
$lieu_naissance_pere=$ligne["lieu_naissance_pere"];
$domicile_pere=$ligne["domicile_pere"];
$profession_pere=$ligne["profession_pere"];
$cni_mere=$ligne["cni_mere"];
$prenom_mere=$ligne["prenom_mere"];
$nom_mere=$ligne["nom_mere"];
$date_naissance_mere=$ligne["date_naissance_mere"];
$lieu_naissance_mere=$ligne["lieu_naissance_mere"];
$domicile_mere=$ligne["domicile_mere"];
$profession_mere=$ligne["profession_mere"];
$parent=$ligne["parent"];
$pere_mere=$ligne["pere_mere"];
$cni_declarant=$ligne["cni_declarant"];
$prenom_declarant=$ligne["prenom_declarant"];
$nom_declarant=$ligne["nom_declarant"];
$date_naissance_declarant=$ligne["date_naissance_declarant"];
$lieu_naissance_declarant=$ligne["lieu_naissance_declarant"];
$domicile_declarant=$ligne["domicile_declarant"];
$profession_declarant=$ligne["profession_declarant"];
$degre_parente=$ligne["degre_parente"];
	}
	else
	{
		echo"Base de donnée non connecté";
	}

?>
<body>
	<div class="container z-depth-5 white">
			<form class="col s12" method="POST" action="Enregistrement_modification.php" id="form" enctype="multipart/form-data">
				<h2 class="center">Modification d'une déclaration</h2>
				<br>
				<div class="row">
					<h5 class="col s9 offset-s3">Année registre : <b><?php echo "$annee_registre";?></b> &nbsp&nbsp Registre :
					<b><?php echo "$num_registre";?></b> </h5>
				</div>
				<div class="row hide">
					<div class="col s2 input-field offset-s1">
						<span>Année registre</span>
						<select class="browser-default" name="annee_registre" id="annee_registre">
							<option value='1941'selected>1941</option><option value='1942'selected>1942</option><option value='1943'selected>1943</option><option value='1944'selected>1944</option><option value='1945'selected>1945</option><option value='1946'selected>1946</option><option value='1947'selected>1947</option><option value='1948'selected>1948</option><option value='1949'selected>1949</option><option value='1950'selected>1950</option><option value='1951'selected>1951</option><option value='1952'selected>1952</option><option value='1953'selected>1953</option><option value='1954'selected>1954</option><option value='1955'selected>1955</option><option value='1956'selected>1956</option><option value='1957'selected>1957</option><option value='1958'selected>1958</option><option value='1959'selected>1959</option><option value='1960'selected>1960</option><option value='1961'selected>1961</option><option value='1962'selected>1962</option><option value='1963'selected>1963</option><option value='1964'selected>1964</option><option value='1965'selected>1965</option><option value='1966'selected>1966</option><option value='1967'selected>1967</option><option value='1968'selected>1968</option><option value='1969'selected>1969</option><option value='1970'selected>1970</option><option value='1971'selected>1971</option><option value='1972'selected>1972</option><option value='1973'selected>1973</option><option value='1974'selected>1974</option><option value='1975'selected>1975</option><option value='1976'selected>1976</option><option value='1977'selected>1977</option><option value='1978'selected>1978</option><option value='1979'selected>1979</option><option value='1980'selected>1980</option><option value='1981'selected>1981</option><option value='1982'selected>1982</option><option value='1983'selected>1983</option><option value='1984'selected>1984</option><option value='1985'selected>1985</option><option value='1986'selected>1986</option><option value='1987'selected>1987</option><option value='1988'selected>1988</option><option value='1989'selected>1989</option><option value='1990'selected>1990</option><option value='1991'selected>1991</option><option value='1992'selected>1992</option><option value='1993'selected>1993</option><option value='1994'selected>1994</option><option value='1995'selected>1995</option><option value='1996'selected>1996</option><option value='1997'selected>1997</option><option value='1998'selected>1998</option><option value='1999'selected>1999</option><option value='2000'selected>2000</option><option value='2001'selected>2001</option><option value='2002'selected>2002</option><option value='2003'selected>2003</option><option value='2004'selected>2004</option><option value='2005'selected>2005</option><option value='2006'selected>2006</option><option value='2007'selected>2007</option><option value='2008'selected>2008</option><option value='2009'selected>2009</option><option value='2010'selected>2010</option><option value='2011'selected>2011</option><option value='2012'selected>2012</option><option value='2013'selected>2013</option><option value='2014'selected>2014</option><option value='2015'selected>2015</option><option value='2016'selected>2016</option><option value='2017'selected>2017</option><option value='2018'selected>2018</option><option value='2019'selected>2019</option><option value='2020'selected>2020</option><option value='2021' selected>2021</option>						</select>
					</div>
					<div class="col s2 input-field offset-s1 num_registre">
						<input type="number" value="1" required name="num_registre" placeholder="Numéro registre" id="num_registre" >
					</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l11" style="margin-left: 5%;">
						<ul class="collapsible ">
							<!-- Renseignement sur l'enfant' -->
					    	<li>
					    		<div class="collapsible-header"><b>Renseignements sur l'enfant</b></div>
					      		<div class="collapsible-body">

									<div class="row " >
										<div class="input-field col s3">
											<select name="type_declaration" id="type_declaration">
												<option selected value="" disabled="" >-Type de déclaration-</option>
												<option value="normale" selected>Nomale</option>
												<option value="tardive" >Tardive</option>
												<option value="jugement" >Jugement</option>
											</select>
											<label>Type de déclaration</label>
										</div>
										<div class="input-field col s3">
											<input type="text" name="date_declaration" value="<?php echo "$date_declaration";?>" class="date_input" required id="date_declaration" >
											<label for="date_declaration">Date déclaration</label>
										</div>
									</div>
									<div class="row hide" id="jugement" >
										<div class="input-field col s2">
											<input  type="number" value="<?php echo "$num_jugement";?>" name="num_jugement" id="num_jugement">
											<label for="num_jugement">N° Jugement</label>
										</div>
										
										<div class="input-field col s3">
											<input  type="date" name="date_jugement" value="<?php echo "$date_jugement";?>" class="date_input" id="date_jugement">
											<label  for="date_jugement">Date jugement</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s5">
											<input type="text" value="<?php echo "$prenom_enfant";?>" name="prenom_enfant" id="prenom" required>
											<label for="prenom">Prénom</label>
										</div>
										<div class="input-field col s4">
											<input type="text" value="<?php echo "$nom_enfant";?>" name="nom_enfant" id="nom_enfant" required>
											<label for="nom">Nom</label>
										</div>
										<div class="input-field col s3">
											<select name="sexe_enfant" required id="sexe_enfant" class="browser-default">
												<option value="" selected disabled >--Sexe--</option>
												<option value="FEMININ"  selected>Féminin</option>
												<option value="MASCULIN" >Masculin</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s3">
											<input type="text" value="<?php echo "$date_naissance_enfant";?>" name="date_naissance_enfant" class="date_input" required id="date_naissance_enfant" >
											<label for="date_naissance_enfant">Date de naissance</label>
										</div>
										<div class="input-field col s3">
											<input type="time" value="<?php echo "$heure_naissance_enfant";?>" name="heure_naissance_enfant" class="" required id="heure_naissance_enfant" >
											<label for="heure_naissance_enfant">Heure de naissance</label>
										</div>
									</div>
									<div class="row">
										<span class="col s12 center">Lieu de naissance</span>
										<div class="col s5 offset-s2">
											<p>
												<label>
													<input class="with-gap" id="structure_naissance" name="structure_naissance" value="Structure sanitaire publique" type="radio" checked />
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
											<input type="text" value="<?php echo "$lieu_naissance_enfant";?>" name="lieu_naissance_enfant" required id="lieu_naissance_enfant" >
											<label for="lieu_naissance">Lieu de naissance</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s4">
											<input type="number" class="col s5" value="<?php echo "$nbr_naissance";?>" name="nbr_naissance" required id="nbr_naissance" >
											<label for="nbr_naissance">Nombre à ma naissance (Jumeaux ou pas)</label>
										</div>
									</div>
					      		</div>
					      	</li>
					      	<!-- Renseignement sur le père -->
						    <li>
						      <div class="collapsible-header"><b>Renseignements sur le père</b></div>
						      <div class="collapsible-body">
						      	<div class="row">
									<div class="input-field col s5">
										<input type="text" value="<?php echo "$cni_pere";?>" name="cni_pere" id="cni_pere" >
										<label for="cni_pere">N° d'idenfication</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$prenom_pere";?>" name="prenom_pere" id="prenom_pere" >
										<label for="prenom_pere">Prénom(s)</label>
									</div>
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$nom_pere";?>" name="nom_pere" id="nom_pere">
										<label for="nom_pere">Nom</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input class="date_input" value="<?php echo "$date_naissance_pere";?>" type="text" name="date_naissance_pere" id="date_naissance_pere">
										<label for="date_naissance_pere">Date de naissance</label>
									</div>
									<div class="col s5 input-field">
										<input  type="text" value="<?php echo "$lieu_naissance_pere";?>" name="lieu_naissance_pere" id="lieu_naissance_pere">
										<label for="lieu_naissance_pere">Lieu de naissance</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$domicile_pere";?>" name="domicile_pere" id="domicile_pere">
										<label for="domicile_pere">Domicile</label>
									</div>
									<div class="col s4 input-field">
										<input type="text" value="<?php echo "$profession_pere";?>" name="profession_pere" id="profession_pere">
										<label for="profession_pere">Profession</label>
									</div>
								</div>
						      </div>
						    </li>
							<!-- Renseignement sur la mère -->
							<li>
							  <div class="collapsible-header"><b>Renseignements sur la mère</b></div>
							  <div class="collapsible-body">
							  	<div class="row">
									<div class="input-field col s5">
										<input type="text" value="<?php echo "$cni_mere";?>" name="cni_mere" id="cni_mere" >
										<label for="cni_mere">N° d'idenfication</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$prenom_mere";?>" name="prenom_mere" id="prenom_mere" >
										<label for="prenom_mere">Prénom(s)</label>
									</div>
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$nom_pere";?>" name="nom_mere" id="nom_mere" >
										<label for="nom_mere">Nom</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field ">
										<input class="date_input" value="<?php echo "$date_naissance_mere";?>" type="text" name="date_naissance_mere" id="date_naissance_mere" >
										<label for="date_naissance_mere">Date de naissance</label>
									</div>
									<div class="col s5 input-field">
										<input  type="text" value="<?php echo "$lieu_naissance_mere";?>" name="lieu_naissance_mere" id="lieu_naissance_mere">
										<label for="lieu_naissance_mere">Lieu de naissance</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$domicile_mere";?>" name="domicile_mere" id="domicile_mere">
										<label for="domicile_mere">Domicile</label>
									</div>
									<div class="col s4 input-field">
										<input type="text" value="<?php echo "$profession_mere";?>" name="profession_mere" id="profession_mere">
										<label for="profession_mere">Profession</label>
									</div>
								</div>
							  </div>
							</li>
							<!-- Renseignement sur le déclarant -->
							<li>
							  <div class="collapsible-header"><b>Renseignements sur le déclarant</b></div>
							  <div class="collapsible-body">
							  	<div class="row">
									<div class="input-field col s5">
										<input type="text" value="<?php echo "$cni_declarant";?>" name="cni_declarant" id="cni_declarant" required >
										<label for="cni_declarant">N° d'idenfication</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$prenom_declarant";?>" name="prenom_declarant" id="prenom_declarant" required >
										<label for="prenom_declarant">Prénom(s)</label>
									</div>
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$nom_declarant";?>" name="nom_declarant" id="nom_declarant" required >
										<label for="nom_declarant">Nom</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input class="date_input" value="<?php echo "$date_naissance_declarant";?>" type="text" name="date_naissance_declarant" id="date_naissance_declarant" >
										<label for="date_naissance_declarant">Date de naissance</label>
									</div>
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$lieu_naissance_declarant";?>" name="lieu_naissance_declarant" id="lieu_naissance_declarant" required >
										<label for="lieu_naissance_declarant">Lieu de naissance</label>
									</div>
								</div>
								<div class="row">
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$domicile_declarant";?>" name="domicile_declarant" id="domicile_declarant" required>
										<label for="domicile_declarant">Domicile</label>
									</div>
									<div class="col s5 input-field">
										<input type="text" value="<?php echo "$profession_declarant";?>" name="profession_declarant" id="profession_declarant" required >
										<label for="profession_declarant">Profession</label>
									</div>
								</div>
								<div class="row">
									<div class="col s6 input-field">
										<input type="text" value="<?php echo "$degre_parente";?>" name="degre_parente" id="degre_parente" required >
										<label for="degre_parente">Degré de parenté</label>
									</div>
								</div>
							  </div>
							</li>
							<!-- Pièces justificatives -->
							
							<li>
							<div class="collapsible-header"><b>Pièces Justificatives</b></div>
					      <div class="collapsible-body">
					      	<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span>Pièce d’identité</span>
										<input type="file" accept="images/*" name="cniP" class=" pi">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate pi" placeholder="Carte National d’identité du pére "  type="text" value="<?php echo '$cniP';?>" >
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span>Pièce d’identité</span>
										<input type="file" accept="images/*" name="cniM" class="domicle">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate domicle" placeholder="Carte National d’identité de la mére"  type="text" value="<?php echo '$cniM';?>">
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn blue darken-4">
										<span >Sélectionner</span>
										<input type="file" accept="images/*" name="cert_accouch" 
										class=" fichier_naissance" value="<?php echo "$cer" ;?>" >
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate fichier_naissance" placeholder="Certificat d'accouchement"  type="text" >
									</div>
								</div>
							</div>
					      </div>
							 <!-- <div class="collapsible-header"><b>Pièces Justificatives</b></div>
							  <div class="collapsible-body">
							  									<div class="row" id="doc">
									<div class="file-field input-field col s12">
										<div class="btn blue darken-4">
											<span >Sélectionner</span>
											<input type="file" accept="application/pdf" name="fichier[]" class=" fichier" multiple>
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate fichier" placeholder="Sélectionner le document"  type="text" >
										</div>
									</div>
								</div>
							  </div>-->
							</li>
						</ul>
							
				<div class="row">
					<div class="col s1 offset-s8 input-field">
						<a class="waves-effect waves-light btn modal-trigger red accent-4" onclick="window.history.go(-1)">Annuler</a>
					</div>
					
				</div>
				<div class="row">
					<div class="col s1 offset-s8 input-field">
						<a class="waves-effect waves-light btn modal-trigger yellow accent-4" href="#verification">Verification</a>
					</div>
					<div class="col s1 offset-s1 input-field">
						<input class="btn valider" type="submit" name="enregsitrer" value="Enregistrer">
					</div>
					<div class="col s4 offset-s8 center ">
						<span class="erreur red-text" ></span>
					</div>
				</div>
			</form>
			<div id="verification" class="modal">
		<div class="modal-content">
			
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat green">Fermer</a>
		</div>
	</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
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
	$('.collapsible').collapsible();
	$('#form').submit(function () {
		if (!confirm('Voulez-vous confirmer l\'enregistrement ?')) {
			return false;
		}
	});
	$('ul.tabs').tabs();
	$('select').formSelect();
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

	$('.tooltipped').tooltip();
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
	function comptage_num_registre() {
		var annee_registre = $("#annee_registre").val();
		$.ajax({
			type:'POST',
			url:'comptage_num_registre.php',
			data:'annee_registre='+annee_registre +'&p=n',
			success:function (html) {
				$('.num_registre').html(html);
			}
		});
	}
	comptage_num_registre();
	$('#annee_registre').change(function(){
		comptage_num_registre();
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
<html>