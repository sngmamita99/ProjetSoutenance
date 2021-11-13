<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>demande d'acte de naissance</title>
	</head>
	<body>
	<form method="POST" action="">
		<p>
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom">
		</p>
		<p>
			<label for="prenom">Prenom</label>
			<input type="text" name="prenom" id="prenom">
		</p>
		<p>
			<label for="numDeRegistre">Numero De Registre</label>
			<input type="int" name="numDeRegistre" id="numDeRegistre">
		</p>
		<p>
			<label for="annee_registre">Annee de Registre</label>
			<input type="text" name="annee_registre" id="annee_registre">
		</p>
		<p>
			<label >Methode de paiement</label>
			<select name="methode_paiement">
				<option value="En ligne">En ligne</option>
				<option value="Sur place">Sur place</option>
			<select>
			
		</p>
		<p>
		<input type="submit" Value="Envoyer"/>
		</P>
	</form>
	</body>
</html>
<?php
?>
