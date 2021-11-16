<?php 
require_once("headerCitoyen.php");
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
	 <!-- Pièces Justificatives -->
					    
					  <form method="POST" action="traitementDeclarationNaiss.php" enctype="multipart/form-data">
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
						<input class="btn valider" type="submit" style="background-color:#00695c" name="enregsitrer" value="Envoyer">
					</div>
					    </form>

</body>
	<style type="text/css">
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
			}
			demandes();
			$('select').change(function () {
				demandes();
			});
	$('.tooltipped').tooltip();
	 $('.fixed-action-btn').floatingActionButton();
</script>
</html>