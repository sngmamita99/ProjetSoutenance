
	<?php
			$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		// {
			// $numCompte=$_SESSION['numCompte'];
			// $date=$_SESSION['tdate'];
			// $type=$_POST['typeDemande'];
			// $req="insert into rdv (DateRdv,numCompte,type) values ($date,$numCompte,$type)";
			// $result=$connect->exec($req);
			echo"ok";
			
				
		}
		else
		{
			echo "Not ok";
		}
	?>