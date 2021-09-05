<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PSins</title>
        <link rel="stylesheet" href="authentification.css"/> 
	</head>
    <body>
	    <div id="div1">
		    <p id="par1">
            </p>			
	        <form id="form" method="post" action="" enctype='multipart/form-data'>
                <p id="aut">
     		        <label class="lab">Nom</label>
                    <input  id="inp1" type="text" id='rech' name="nom" required="required"/>
			    </p>
				<p id="aut">
     		        <label class="lab">Prénom</label>
                    <input  id="inp1" type="text" id='rech' name="prenom" required="required"/>
			    </p>
				<p id="aut">
     		        <label class="lab">Adresse</label>
                    <input  id="inp1" type="text" id='rech' name="adresse"/>
			    </p>
				<p id="aut">
     		        <label class="lab">Email</label>
                    <input  id="inp1" type="text" id='rech' name="email"/>
			    </p>
				<p>
			        <label class="lab">Numéro de téléphone</label>
                    <input id="inp2" type="text" name="numtel" value=""/>
                </p>
				<p>
			        <label class="lab">Login(non d'utilisateur)</label>
                    <input id="inp2" type="text" name="lg" required="required"/>
                </p>
				<p id="aut">
     		        <label class="lab">Mot de passe</label>
                    <input  id="inp1" type="text" id='rech' name="mdp" required="required"/>
			    </p>
				<p>
				    <label class="lab">Profil</label>
				    <select name="maliste" required="required">
                        
                        <option value=""></option>
                        <option value="officier">officier</option>
                        <option value="citoyen">citoyen</option>
                        <option value="agent">agent</option>
                        <option value="livreur">livreur</option>
                    </select>
                </p>
				<p>
                   <input id="sub" type="submit" value="Inscrire"/>
                </p>
            </form>
        </div>		
	</body>
	 <?php
    $connect=new PDO("mysql:host=localhost;port=3306;dbname=projetsoutenance","root","");
	if($connect){
			
	    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['adresse']) AND isset($_POST['email'])
			AND isset($_POST['numtel']) AND isset($_POST['maliste']) AND isset($_POST['lg']) AND isset($_POST['mdp'])){
	     	$nom=$_POST['nom'];
			$pnom=$_POST['prenom'];
			$lg=$_POST['lg'];
			$mdp=$_POST['mdp'];
			$numtel=$_POST['numtel'];
			$email=$_POST['email'];
			$maliste=$_POST['maliste'];
			$adresse=$_POST['adresse'];		
			$created = date('Y-m-d H:i:s');
            // $modified = date('Y-m-d H:i:s');	
			
			// if(isset($_FILES['photo'])){               
                // $extensions_ok = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
   
                // $extension_fichier = strtolower( substr(strrchr($_FILES['photo']['name'], '.'),1));
                // if ( in_array($extension_fichier, $extensions_ok) ){
                    // echo "<p>Extension correcte du fichier</p>"; 
                // }
                // $dhc=date("dmy_his",time());
                // $fic="mesphotos/".$dhc."_".$_FILES['photo']['name'];
                // $result=move_uploaded_file($_FILES['photo']['tmp_name'],$fic);
                // if($result){
                    // echo "<p>transfert du fichier reussi</p>";
                // }
                // $url="mesphotos/".$dhc."_".$_FILES['photo']['name'];               
		        $req="INSERT INTO users (nom,prenom,adresse,email,numTel,etat,login,password,profil,created)VALUES('$nom','$pnom','$adresse','$email','$numtel',0,'$lg','$mdp','$maliste','$created')";
			    $res=$connect->query($req);
			    // $_SESSION['idmbre']=$connect->lastInsertId();
			// }
			// else
				// echo 'insertion photo failed';
		 }
	}
	else
		echo 'connexion à la BD non établie';
?>
	<script  ></script>
</html>
		

