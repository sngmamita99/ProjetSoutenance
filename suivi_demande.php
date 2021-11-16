<?php
require_once("headerCitoyen.php");
?>
<?php

$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="select * from demandeactedenaissance  ";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Prenom</th>
						<th>Nom</th>	
						<th>Année de Declaration</td>
						<th>Numéro de Registre </td>
						<th>Nombre de Copies</td>
						<th>Demande de:</td>
						<th>Methode de Paiement</td>
						
						<th></th>
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
					$nom=$ligne["nom"];
					$prenom=$ligne["prenom"];
					$annee_registre=$ligne["annee_registre"];
					$numeroDeRegistre=$ligne["numeroDeRegistre"];
					$nbre_copie=$ligne["nbre_copie"];
					$typePapier=$ligne["typePapier"];
					$methode_paiement=$ligne["methode_paiement"];
					
					echo"<tr>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$annee_registre</td>
					<td>$numeroDeRegistre</td>
					<td>$nbre_copie</td>
					<td>$typePapier</td>
					<td>$methode_paiement</td>";
				
					// /$ </td><td><img id='impression' src='https://previews.123rf.com/images/sulikns/sulikns1706/sulikns170600418/80878621-dessiner-modifier-stylo-crayon-%C3%A9crire-ic%C3%B4ne-vector-illustration-.jpg' alt='imprimerie'/><a href='impressionExtrait.php?idRegistre=$idRegistre'>Extrait de Naissance</a><br/><img id='impression' src='images/impression.png' alt='imprimerie'/><a href='impressionCopieLitteral.php'>Copie littérale</a>*/
					echo "</td>
					</tr>";
					
				}
					echo"</table>";
			}
			else
			{
				echo"Il n'a aucune decaration de Naissance";
			}
		}
		else
		{
			echo "Base de donnée non connecté";
		}
?>