
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>acceuil dem</title>
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js" > </script > 
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
            <div class="card   indigo darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Consultation de l'etat d'avancement</span>
                    <h5>Ici, il vous est possible de suivre l'état d'avancement de votre demande d'acte d'Etat civils
                        pour le recupérer. Pour cela, insérer juste le code qui vous a été fournis lors de la demande
                        puis cliquez sur le bouton recherche.</h5>
                    <div class="input-field col s6 m6 offset-s6 white">
                     <form method="POST" action="rechercher.php">
                        <input id="icon_prefix" placeholder="Code de recherche" type="search" class="validate" name="Code_de_recherche">
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
 
				