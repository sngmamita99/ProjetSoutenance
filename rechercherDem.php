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
				echo"Le traitement de votre demande est terminé la 
				date de livraison vous sera communiqué ulterieurement ";
			}
			}
			else
			{
				echo"Ce numéro de demande n'existe pas";
			}
					
		}
}

 ?>