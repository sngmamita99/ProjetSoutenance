<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Sweet Alert</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<style type="text/css">
			#container{margin-top: 75px;}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#">Sweet Alert</a>
		</nav>

		<div class="container" id="container">
			<div class="starter-template">

			<form action="" method="GET" id="form" class="form-inline">
			  <div class="form-group">
			    <input type="text" name="task" class="form-control" placeholder="Ajouter une tâche" autofocus>
			  </div>
			  &nbsp;
			  <button type="submit" class="btn btn-primary">Ajouter</button>
			</form>
				</div>
			
		</div>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	
	</body>
</html>
<?php
if(isset($_GET["task"]))
{
	$task=$_GET["task"];
	if($task=="manger")
	{
		echo"
		<script>
swal.fire({
								title: 'Paiement reussi!',
								text: 'oui',
								icon: 'success',
								button: 'ok'   

			}).then(function() 
							{
   									 window.location = 'produit.php';
   							})
   							

	</script>";

	}

}
?>