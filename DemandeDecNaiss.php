<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
<?php 
require_once("headerCitoyen.php");
$date_declaration = date("Y-m-d");
	if(isset($_POST['LienParente']))
	{
		$lP=$_POST['LienParente'];
		$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
		{
		$k=0;
		$req="insert into declarationnaissance (numCompte,lienDeParente,etat,date_declaration) values (?,?,?,?)";
		$stmt=$bdd->prepare($req);
		$stmt->bindParam(1, $idConnected);
		$stmt->bindParam(2, $lP);
		$stmt->bindParam(3,$k);
		$stmt->bindParam(4,$date_declaration);
		$stmt->execute();
		$numDecla=$bdd->lastInsertId();
				if(!empty($_FILES['monFichier1']))
					{
						
						
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier1'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
					if(!empty($_FILES['monFichier2']))
					{
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier2'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
			
			if(!empty($_FILES['monFichier3']))
					{
						
						
						$h=date('dmYHis',time());
						$photos=$_FILES['monFichier3'];
						$dest=$h.'_'.$photos['name'];
						$chemin ='photos/'.$dest;
						$images=move_uploaded_file($photos['tmp_name'],$chemin);
						if($images)
						{
							$req2 = $bdd->prepare("INSERT into justification(numDeclaration,url) values (?,?)");
							$res1 = $req2->execute(array($numDecla,$chemin));
						}
						else
						{
							echo"transfert non ok";
						}
					}
					echo'<script>';
							echo'swal({
								title: "Envoie de demande de déclaration réussi!",
								text: " Vous pouvez désormais suivre vos demandes",
								icon: "success",
								button: "ok"
							});';
					echo'</script>';
	}
	else
	{
		echo"Erreur de connexion à la base de donnée";
	}
	}
?>

<script type="text/javascript">
$(document).ready(function(){
$('.sidenav').sidenav();
$(".dropdown-trigger").dropdown({
hover: true, //déroulement de la liste au survol de l'élément
inDuration : 400,
outDuration : 300,
coverTrigger:false,//la liste déroulante apparaîtra sous le déclencheur.

belowOrigin: false,
alignment: 'right'
});
});
</script>	
	
		
</style>
<body>
	 <!-- Pièces Justificatives traitementDeclarationNaiss.php -->
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
					  <div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn white darken-4">
										<span>Lien de Parenté</span>
										
									</div>
									<div class="file-path-wrapper">
										<select name="LienParente" required id="sexe_enfant" class="browser-default">
											<option value="" selected disabled >--parente--</option>
											<option value="pere"  >pere</option>
											<option value="mere" >mere</option>
											<option value="proche" >proche</option>
										</select>
									</div>
								</div>
							</div>
					  
					      	<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn white darken-4">
										<span >Pièce d’identités</span>
										<input type="file" accept="image/*" name="monFichier1" class=" pi" >
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate pi" placeholder="Carte National d’identité du pére"  type="text" >
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn white darken-4">
										<span >Pièce d’identité </span>
										<input type="file" accept="image/*" name="monFichier2" class=" domicle" >
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate domicle" placeholder="Carte National d’identité du pére"  type="text" >
									</div>
								</div>
							</div>
							<div class="row" id="doc">
								<div class="file-field input-field col s12">
									<div class="btn white darken-4">
										<span >Sélectionner</span>
										<input type="file" accept="image/*" name="monFichier3" class=" fichier_naissance">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate fichier_naissance" placeholder="Attestation de naissance de l’hôpital / Clinique / Sanitaire"  type="text" >
									</div>
								</div>
							</div>
					      </div>
						  <div class="col s3 m1 offset-m1 offset-s6 input-field">
						<input class="btn valider"  id='btn' type="submit" style="background-color:#00695c" name="enregsitrer" value="Envoyer">
					</div>
					    </form>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
</body>
	<style type="text/css">
	footer {
    background-color: #00695c !important;
}
	span{
		color:black;
		font-weight:bold
		
	}
	form
	{
		background:white;
		width:50%;
		margin-left:25%;
		
		
	}

		body
		{
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			background-image:url("images/nai.jpg");

		}
		table{
			font-family: "times new roman";
			font-size: 20px;
		}
		#btn:hover
		{
			color:white;
		}
	</style>

	<script type="text/javascript">
	
		function demandes() {
				var mois = $('select:eq(0)').val();
			    var annee = $('select:eq(1)').val();
				$.ajax({
					type:'POST',
					url:'l_demande_acte_confirme_ajax.php',
					data:'a=a',
					success:function (html) {
						$('tbody').html(html);
					}
				});
			};
			demandes();
			$('select').change(function () {
				demandes();
			});
	$('.tooltipped').tooltip();
	 $('.fixed-action-btn').floatingActionButton();
</script>
<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> 
</script > 
</html>