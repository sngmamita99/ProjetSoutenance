<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
<?php
require_once("headerCitoyen.php");
$numDem=$_GET["numDem"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>acceuil dem</title>
<!--Import materialize.min.css-->

<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 

<style type="text/css">
body 
{
    background-image: url("images/livreur.jpg");
}

	
</style>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/materialize.min.js"></script>
<script src="https://kit.fontawesome.com/89205a59df.js" crossorigin="anonymous"></script>

 <!--<div class="row">
        <div class="col s12 m6">
            <div class="card indigo darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Demande d'actes</span>
                    <h5>Bienvenue sur la page de commande d'acte. Cette dernière vous permet de faire la commande d'un
                        acte d'Etat civil et de le recupérer un fois celui terminer.</h5>
                </div>
                <div class="card-action">
                    <a href="demandeActeNaiss.php" class="btn white  purple-text darken-3">Nouvelle demande</a>
                </div>
            </div>
        </div>
    </div>-->
    <div class="row">
        <div class="col s12 m6 offset-m6">
            <div class="card   darken-4" id='carre'>
                <div class="card-content black-text">
                    <span class="card-title">Consultation de l'etat d'avancement</span>
                    <h5>Ici, il vous est possible de suivre l'état d'avancement de votre demande d'acte d'Etat civil
                        pour le recupérer. Pour cela, insérer juste le numéro de la demande
						
                        puis cliquez sur le bouton recherche.</h5>
                    <div class="input-field col s6 m6 offset-s6 white">
                    <!-- <form method="POST" action="rechercherDem.php"> -->
					 <form method="POST" action="">
                        <input id="icon_prefix" placeholder="Code de recherche" type="search" class="validate" 
						name="Code_de_recherche" value='<?php echo "$numDem" ?>'>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <span class="recherche white-text"></span>
                <div class="card-action">
				 <input class="btn white purple-text darken-3 btn_recherche" id = "btRech" type ="submit" value = "Rechercher" />
                </form>
                </div>
            </div>
        </div>	
    </div>
 
			 <?php
if(isset($_POST["Code_de_recherche"]))
{
	$rech=$_POST["Code_de_recherche"];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
		if($connect)
		{
			$req="select * from demandeactedenaissance where numDemande=$rech LIMIT 1" ;
			$result=$connect->query($req);
			if($result->rowCount())
			{
			$ligne=$result->fetch();
			$etat_demande=$ligne["etat_demande"];
			$etat_paiement=$ligne["etat_paiement"];
			$etat_transmission=$ligne["etat_transmission"];
			// echo" $etat_demande $etat_paiement $etat_transmission";
			if($etat_demande==1 AND $etat_paiement==1 AND $etat_transmission==1)
			{
				
				echo'<script>';
							echo'swal({
								title="ok"
								text: "Le traitement de votre demande est terminé!
								la date de livraison vous sera communiqué ulterieurement",
								icon: "success",
								button: "ok"
							});';
					echo'</script>';
					
				
				// echo"Le traitement de votre demande est terminé 
				// la 
				// date de livraison vous sera communiqué ulterieurement ";
			}
			else 
			{
				echo'<script>';
							echo'swal({
								
								text: "Votre demande est en cours de traitement",
								icon: "",
								button: "ok"
							});';
					echo'</script>';
			}
		}
		else
		{
				echo'<script>';
							echo'swal({
								
								text: "Ce numéro de demande n\'existe pas",
								icon: "error",
								button: "ok"
							});';
					echo'</script>';
					
				// echo"";
		}
					
	}
}

 ?>	
 <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 