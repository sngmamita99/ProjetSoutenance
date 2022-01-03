<?php
if(isset($_POST['jour_d']))

{
	$msg=$_POST['jour_d'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)

		{
			$req="select max(num_registre) from registrenaissance   where annee_registre = $msg ";
			$result=$connect->query($req);
			//echo $req;
			if($result->rowCount())
			{
					
				 	$ligne=$result->fetch();
					 $num=$ligne["0"]+1;
					 echo "<input name='num_registre' type='number' value='$num' readonly/>";
					
			}
				
			else
			{
				echo "<input name='num_registre' type='number' value='1' readonly/>";
			}
			
		}
}
?>

