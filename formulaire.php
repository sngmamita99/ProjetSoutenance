<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php
require_once("headerCitoyen.php")
?>
<!doctype html>
<html>
<head>
	<meta charset=uft-8"/>
	<title>paiement</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <style type="text/css">
        h6
        {
            padding-top: 19px;
            font-size: 25px;
            color: #00695c ;
            font-style: italic;
            font-family: Gill Sans Extrabold, sans-serif;
        }
        form
        {
           
            width: 50%;
            margin: auto;
            margin-top: 40px;
            background-color: white;
            border-radius: 10px 80px ;
            
        }
        #payer
        {
            background-color: #00695c ;
            color: white;
            margin-left: 40%;
            margin-top: 40px;
            border:0px hidden ;
            font-size: 25px;
            border-radius: 15px 15px;
            margin-bottom: 20px;
        }
        body
{
    background-image: url("https://cdn.pixabay.com/photo/2014/02/01/18/01/money-256319_1280.jpg");


}
    </style>

</head>
<body>
    
<form action="" method="post">
   <h6>Montant à payer:</h6>
  <input type="text" name="amount" placeholder="montant à payer" value="500" readonly="readonly" >
  <input type="number" name="amount" placeholder="Numéro de téléphone"  required >
  <input  type="submit" name="submit" value="Payer Maintenant" id="payer">

</form>
</body>
</html>
<?php
 $numDem=$_GET["numDem"];
  $idConnected=$_GET["idConnected"];
  $bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
        if($bdd)
        {
              $req="UPDATE demandeactedenaissance SET etat_paiement =1 where numDemande =$numDem";
              $result=$bdd->exec($req);
                echo"
    <script>
swal.fire({
                title: 'Paiement effectué avec succés!',
                text: '',
                icon: 'success',
                button: 'ok'   

      }).then(function() 
              {
                     window.location = 'suivi_demande_Acte_OnLine.php';
                })
                

  </script>";
        }
      
 ?>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>