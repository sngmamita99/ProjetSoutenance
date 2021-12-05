<?php
require_once("headerAgent.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>date</title>
		<meta charset="utf-8">
		<style>
		#tof
		{
			width:50%;
			height:45%;
			margin-left:300px;
			
		}
	body
	{
		background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
	}
		</style>
	</head>
	<body >
      

		<style>
		#tof
		{
			width:50%;
			height:50%;
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
			echo "<img id='tof' src='$img' alt='justification'/><br/><br/><br/>";
		}
		
	}
    ?>
</body>
</html>