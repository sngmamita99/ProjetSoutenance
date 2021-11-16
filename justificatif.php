
<!DOCTYPE html>
<html>
	<head>
		<title>date</title>
		<meta charset="utf-8">
		<style>
		#tof
		{
			width:10%;
			height:10%;
			
		}

		</style>
	</head>
	<body >
      

		<style>
		#tof
		{
			width:30%;
			height:30%;
		}
		</style>
	</head>
	<body>
<?php
$numCompte=$_GET['code'];
 $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
	if($connect)
	{
	   $req="SELECT url FROM declarationnaissance NATURAL JOIN justification WHERE numCompte=$numCompte";
		$result=$connect->query($req);
		while($row=$result->fetch())
		{
			$img=$row['url'];
			echo "<img id='tof' src='$img' alt=''/><br/>";
		}
		
	}
    ?>
</body>
</html>