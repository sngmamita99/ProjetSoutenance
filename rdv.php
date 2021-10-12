<!DOCTYPE html>
<html>
<head>
	<title>picker</title>
	<meta charset="UTF-8"/>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link rel="stylesheet" href="calendrier.css"/>
</head>
<body>
<nav class="navvar-dark bg-primary nb-3>
<a href="rdv.php" class="navbar-brand">Mon calendrier</a>
</nav>
<?php
require_once('descripRdv.php');
$events=new Rdv();
require_once('Month.php');
	$month= new Month($_GET['month'] ?? null,$_GET['year'] ?? null);
	$start=$month->getStartDay();
	$start=$start->format('N') == '1' ? $start: $month->getStartDay()->modify('last monday');
	$weeks=$month->getWeeks();
	$end=(clone $start)->modify("+".(6+7 * ($weeks -1))."days");
	// var_dump($end);
	$events=$events->getEventBetweenByDay($start,$end);
	echo"<pre>";
	var_dump($events);
	echo"</pre>";
 ?> 
<div class="d-flex flex-row align-items-center justify-content-between  mx-sm-3">
	<h1><?=$month->toString();?></h1>
	<div>
	<a href="rdv.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class= "btn btn-primary">&lt;</a>
	<a href="rdv.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class= "btn btn-primary">&gt;</a>
	
		
	</div>
</div>



<table class="calendar_table calendar_table--<?=$weeks;?> weeks">
	<?php for($i=0;$i<$weeks;$i++): ?>
	<tr>
		<?php foreach($month->days as $k=>$day):
		$date=(clone $start)->modify("+".($k+$i*7)."days");
		$eventsForDay=$events[$date->format('Y-m-d')] ?? [];
		
		// echo"<pre>";
	// var_dump($eventsForDay);
	// echo"</pre>";
		?>
			<td class="<?=$month->withInMonth($date) ? '' : 'calendar_otherMonth'; ?>">
		<?php if($i==0):?>	
			<div class="calendar_weekday">
				<?=$day; ?>
			</div>
		<?php endif; ?>
		<div class="calendar_day">
			<?= $date->format('d'); ?>
		</div>
			<?php foreach($eventsForDay as $events): ?>
					<div class="calendar_event">
					<?php
					echo $events['description']; 
					?>
					</div>
			<?php endforeach; ?>
			</td>
		<?php endforeach; ?>
	</tr>
	<?php endfor ?>  
</table>
</body>
</html>
<?php
// <form method="POST" action="">
   // <input type="date" name="dateDemande"/>
   // <input type="submit" name="envoyer"/>
// </form>
	// $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");   
	 // if(isset($POST['envoyer']))
	 // {
		 // if($connect)
		 // {
			// $rdv=$POST['dateDemande'];
			// $req="INSERT INTO declarationnaissance (rdv) VALUES ('$rdv')";
			// $res=$connect->exec($req);
		 // }
		 // else
		 // {
			// echo"Erreur dans la base de donnée";
		 // }
	 // }
	  

// ?>