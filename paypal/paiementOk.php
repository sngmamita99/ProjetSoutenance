<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>  
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


<?php
 $numDem=$_GET["numDem"];
  $idConnected=$_GET["idConnected"];
   echo $numDem $idConnected;
      $numDemande=$db->query("UPDATE demandeactedenaissance SET etat_paiement =1 where numDemande = '".$num_dem."'");
        }
       
        echo"
    <script>
swal.fire({
                title: 'Paiement effectué avec succés!',
                text: '',
                icon: 'success',
                button: 'ok'   

      }).then(function() 
              {
                     window.location = '../suivi_demande_Acte_OnLine.php';
                })
                

  </script>";

        
    } 
    else 

?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  