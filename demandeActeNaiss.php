<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
<?php
require_once("headerCitoyen.php");
// traitement_dem_acte_naiss.php page destination
?>
<!DOCTYPE html>
<html>

<head>
    <title>Demande d'acte d'état civils</title>
    <meta charset="utf-8">
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
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 

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

<body >
    
    <div class="container white" >
        <div class="row">
            <form class="col s12 m12 l12" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <input type="number" name="s" hidden="">
                <h3 class="center">Formulaire de demande d'acte d'état civils</h3>
                <div class="row">
                   <!-- <div class=" input-field col s6 m4 l4 " , id="mairie">
                        <select class="browser-default acte" name="mairie">
                            <option value="" disabled selected>Choisissez la commune</option>
							<option value="1" >AKANDA</option><option value="2" >NZENG-AYONG</option><option value="3" >LIBREVILLE</option><option value="4" >ZIGUINCHOR</option><option value="5" >WAKANDA</option><option value="6" >NGATHIE NAOUDE</option><option value="7" >BIMBO</option><option value="8" >BEGOUA</option><option value="9" >GUITA</option><option value="10" >PETEVO</option><option value="11" >92LOGEMENT</option><option value="12" >ARD</option><option value="13" >BOUAR</option><option value="14" >COCO</option><option value="15" >AMBASSADE</option><option value="16" >YALOKé</option><option value="17" >MAIRIE DE BANGUI</option>                            <option value=""></option>

                        </select>
                    </div>-->
                    <div class=" input-field col s6 m4 l4">
                        <select class="browser-default registre" required="" name="registre" id="registre">
                            <option value="" disabled selected>Choisissez le registre</option>
                            <option value="Registre des deces">Registre des deces</option>
                            <option value="Registre des mariages">Registre des mariages</option>
                            <option value="Registre des naissances">Registre des naissances</option>
                        </select>
                    </div>
                    <div class="naissances input-field col s6 m4 l4 " id="naissances">
                        <select class="browser-default acte" name="naissances">
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
					<div class="input-field col s6 m3 l4">
                        <select class="browser-default acte" name="methode_paiement" id="methode_paiement" required="required">
                            <option value="" disabled selected> Methode de Paiement</option>
                            <option value="Sur Place">Sur Place</option>
							<option value="Livraison">Livraison</option>
                        </select>
                    </div>
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
    })

})
</script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
<style type="text/css">
body {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>

</html>

<?php
		
if(isset($_POST["registre"]) && isset($_POST["naissances"]) && isset($_POST["num_registre"]) && isset($_POST["annee_registre"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["nbr_copies"]))
{			$typeRegistre=$_POST["registre"];
			$naissances=$_POST["naissances"];
			$annee_registre=$_POST["annee_registre"];
			$num_registre=$_POST["num_registre"];
			$prenom=$_POST["prenom"];
			$nom=$_POST["nom"];
			$nbr_copies=$_POST["nbr_copies"];
			$methode_paiement=$_POST["methode_paiement"];
			// echo"$naissances $annee_registre $num_registre $prenom $nom $nbr_copies";
			$etat=0;
			$date_demande = date("Y-m-d");
			$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			if($typeRegistre=="Registre des naissances")
			{
				
				$req="select * from registrenaissance where num_registre=$num_registre AND annee_registre='$annee_registre' AND prenom_enfant='$prenom' AND nom_enfant='$nom' ";
				$result=$connect->query($req);
				if($result->rowCount()==1)
				{
					$req="insert into demandeactedenaissance(numCompte,nom,prenom,numeroDeRegistre,annee_registre,etat_demande,nbre_copie,typePapier,methode_paiement,date_demande) value (?,?,?,?,?,?,?,?,?,?);";
					$stmt = $connect->prepare($req);
					$stmt->bindParam(1, $idConnected);
					$stmt->bindParam(2, $nom);
					$stmt->bindParam(3, $prenom);
					$stmt->bindParam(4, $num_registre);
					$stmt->bindParam(5, $annee_registre);
					$stmt->bindParam(6, $etat);
					$stmt->bindParam(7, $nbr_copies);
					$stmt->bindParam(8, $naissances);
					$stmt->bindParam(9, $methode_paiement);
					$stmt->bindParam(10, $date_demande);
					$stmt->execute();
					$numDem=$connect->lastInsertId();
						echo'<script>';
							echo'swal({
								title: "Demande d\'Acte Réussi!",
								text: " Vous pouvez désormais suivre vos demandes",
								icon: "success",
								button: "ok"
							});';
					echo'</script>';
					
				}
				else
				{
					echo'<script>';
		
							echo'swal({';
								echo'title: "Echec!",';
								echo'text:  "Veuillez bien Vérifier vos Paramétres !",';
								echo'icon: "error",';
								echo' button: "ok",';
								echo' timer: 30000';
									
							echo'});';
							
					echo'</script>';
					
				}
			}
			else
			{
				echo"not ok";
			}
			
		}
		else
		{
			echo"Base de donnée non connnectée";
		}
}


?>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 