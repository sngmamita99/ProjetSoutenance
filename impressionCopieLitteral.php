<?php

$date=date("d/m/Y");

$idRegistre=$_GET["idRegistre"];

$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
	
	$req="select * from registrenaissance where num_registre = $idRegistre";
	$result=$connect->query($req);
			if($result->rowCount())
			{
				while($ligne=$result->fetch())
				{
					$num_registre=$ligne["num_registre"];
					$annee_registre=$ligne["annee_registre"];
					$prenom_enfant=$ligne["prenom_enfant"];
					$nom_enfant=$ligne["nom_enfant"];
					$prenom_pere=$ligne["prenom_pere"];
					$prenom_mere=$ligne["prenom_mere"];
					$nom_mere=$ligne["nom_mere"];
					$sexe_enfant=$ligne["sexe_enfant"];
					$annee_registre=$ligne["annee_registre"];
					$num_registre=$ligne["num_registre"];
					$lieu_naissance_pere=$ligne["lieu_naissance_pere"];
					$lieu_naissance_enfant=$ligne["lieu_naissance_enfant"];
					$req2="select  * from conversion where annee_en_chiffre ='$annee_registre'";
					$res=$connect->query($req2);
					$row=$res->fetch();
					$ann=$row["annee_en_lettre"];
					$req3="select * from  conversion_jour where jour_chiffre=$num_registre";
					$result3=$connect->query($req3);
					$res3=$result3->fetch();
					$jour_lettre=$res3["jour_lettre"];
					$date_naissance_pere=$ligne["date_naissance_pere"];
					$domicile_pere=$ligne["domicile_pere"];
					$profession_pere=$ligne["profession_pere"];
					$domicile_mere=$ligne["domicile_mere"];
					$profession_mere=$ligne["profession_mere"];
					$lieu_naissance_mere=$ligne["lieu_naissance_pere"];
					$date_naissance_enfant=$ligne["date_naissance_enfant"];
					$date_naissance_mere=$ligne["date_naissance_mere"];
					 $jour=date('d', strtotime("$date_naissance_enfant"));
					 $mois=date('m', strtotime("$date_naissance_enfant"));
					 $year=date('Y', strtotime("$date_naissance_enfant"));
					 $req_jour="select * from  conversion_jour where jour_chiffre=$jour";
					 $res_jour=$connect->query($req_jour);
					 $rowJour=$res_jour->fetch();
					 $jn=$rowJour["jour_lettre"];
					 $req_mois="select * from conversionmois where mois_chiffre=$mois";
					 $res_mois=$connect->query($req_mois);
					 $row_mois=$res_mois->fetch();
					 $mn=$row_mois["mois_lettre"];
					 $req_annee="select * from conversion where annee_en_chiffre=$year";
					 $res_annee=$connect->query($req_annee);
					 $row_annee=$res_annee->fetch();
					 $an=$row_annee["annee_en_lettre"];
					 $jourp=date('d', strtotime("$date_naissance_pere"));
					 $moisp=date('m', strtotime("$date_naissance_pere"));
					 $yearp=date('Y', strtotime("$date_naissance_pere"));
					 $req_moisp="select * from conversionmois where mois_chiffre=$moisp";
					 $res_moisp=$connect->query($req_moisp);
					 $row_moisp=$res_moisp->fetch();
					 $mnp=$row_moisp["mois_lettre"];
					 $jourm=date('d', strtotime("$date_naissance_mere"));
					 $moism=date('m', strtotime("$date_naissance_mere"));
					 $yearm=date('Y', strtotime("$date_naissance_mere"));
					 $req_moism="select * from conversionmois where mois_chiffre=$moism";
					 $res_moism=$connect->query($req_moism);
					 $row_moism=$res_moism->fetch();
					 $mnm=$row_moism["mois_lettre"];
				}
				
			}
			else
			{
				
			}

		}
		else
		{
			echo"not connect";
		}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Impression</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<style type="text/css">
body {
    background-color: #eff1f2;
}
.btn
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
				<a href="" class="btn" onclick="window.print();">Imprimer</a>
		<a href="RegistreDesNaissances.php" class="btn" onclick="window.close();">Fermer</a>
			<div class="container white">
				<div class="row ">
					<div class="col s5 ">
						<p class="center"><b>REPUBLIQUE DU SENEGAL <br>
							<i>UN PEUPLE - UN BUT -UNE FOI</i><br><br>
						</b>
						<b>REGION DE DAKAR<br>
							DEPARTEMENT DE PIKINE<br>
							COMMUNE DE TIVAOUNE DIACKSAO</b><br>
							<br>
							CENTRE  ETAT CIVIL DE TIVAOUNE DIACKSAO						</p>
					</div>
					<h6 class="col s10 offset-s4">
						<i>ANNEE</i>&nbsp&nbsp&nbsp .....<b><?php echo $annee_registre;?></b>.....<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>N°</i>&nbsp&nbsp&nbsp .....<b><?php echo $num_registre;?></b>.....
					</h6>
				</div>
				<div class="row " style="margin-top: 0px;">
					<h5 class="col s12 center" style="margin-top: -15px;font : 26pt 'times new roman'">
						<b>COPIE LITTERALE D’ACTE DE NAISSANCE</b>
					<p class="tete" style="margin-top: -3px">
						Délivrée aux personnes désignées par le 5éme alinéa<br>
						De l’article 30 de la 61-55 du 23 juin 1961
					</p>
					</h5>
					<h5 class="col s12" style="margin-top: -8px ;font : 18pt 'times new roman'">
						Est né(e) le ......<b> <?php echo" $jn $mn $an";?></b>.........<b>................</b>.....<br>
						<span class='truncate'>A ......................<b><?php echo $lieu_naissance_enfant;?></b>..............................................................................................................</span>
						<span class='truncate'>De l'année ......................<b><?php echo $annee_registre;?></b>........................................................................................</span>
						<span class='truncate'>L'enfant de sexe ......................<b><?php echo $sexe_enfant;?></b>........................................................................................</span>
						<span class="truncate"><i>(1)Prénommé(e)</i> ............<b><?php echo "$nom_enfant $prenom_enfant";?></b>.........................................................................................................................</span>
						<span class="truncate"><i>(2)Fils / Fille de ..................</i> <b><?php echo $prenom_pere;?> </b>..........................................................................................................................................................</span>
						<span class="truncate">Né le .......... <b><?php echo " $jourp $mnp $yearp";?></b>.... à ....<b><?php echo"$lieu_naissance_pere";?></b>..................................................................</span>
						&nbsp&nbsp&nbsp&nbsp Domicile ...<b><?php echo $domicile_pere;?></b>... Profession ....<b><?php echo $profession_pere;?></b>...<br>
						<span class="truncate"><i>(3)Et de </i>........<b><?php echo "$nom_mere $prenom_mere";?></b>.................................................................................................................................................................</span>
						Né le ...................... <b><?php echo " $jourm $mnm $yearm";?>...........</b> à <b><?php echo "$lieu_naissance_mere";?>....</b><br>
						&nbsp&nbsp&nbsp&nbsp Domicile ...<b><?php echo "$domicile_mere";?></b>... Profession ....<b><?php echo "$profession_mere";?></b><br>
						<span class="truncate">Dressé le .............<b><?php echo "$date";?></b>................................................................................................</span>
					</h5>
					<h4 class="col s12 center" style="margin-top: 0px;">
						<b >Officier de l’état civil    </b>					
					</h4>
					<h6 class="col s12" style="margin-top: -20px; font: 18pt 'times new roman'">
						<span class="truncate">Sur la déclaration de ....................................................................................................................................................................................................</span>
						&nbsp&nbsp&nbsp&nbsp Ou Par le jugement d’autorisation d’inscription tardive de naissance <br>
						N°....<b>016</b>..... &nbsp&nbsp DU ......<b>  </b>... Du tribunal d’instance de <b>TIVAOUNE DIACKSAO</b><br>
						Oui, lecture faite, a signé avec nous .................................................................<br>
						Mentions Marginales....................................................................................<br>
						............................................................................................................................<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbspPOUR COPIE CONFORME <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbspFait à TIVAOUNE DIACKSAO le <b><?php echo "$date";?></b><br><br>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp L’officier d’état civil
					</h6>
					<div class="col s12">
						(1) Prénom et Nom de l’enfant<br>	
						(2)Prénom, nom, âge profession et domicile du père et de la mère<br>
						(3) Prénom, nom, âge, profession et domicile du déclarant <br>  
					</div>

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
			margin: 0;
			margin-top: 25px;
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
			.tete{
				font: 12pt "Baskerville Old Face";	
			}
		}
	</style>

</html>