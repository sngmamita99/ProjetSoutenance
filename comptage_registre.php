<?php
if(isset($_GET["msg"]))
{
	$msg=$_GET["msg"];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select num_registre from registrenaissance where annee_registre='$msg' DESC LIMIT 1";
			$result=$connect->query($req);
			if($result)
			{
				 if($ligne=$result->fetch())
				 {
					 $num=$ligne["num_registre"]+1;
					 echo $num;
				 }
			}
			
		}
}
?>