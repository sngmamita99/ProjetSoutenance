<?php
require_once("headerAgent.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Prise de rdv</title>
	<!--	<link rel="stylesheet" href="calendrierP.css"/>-->
		<style>
nav ul li a
{
	text-decoration:none;
}
nav ul li a:hover
{
	text-decoration:none;
	color:white;
}
.brand-logo
{
	text-decoration:none;
}
		</style>
	</head>
	</body>
<?php
require_once('ConnectionBdd.php');
require_once('headerCalendrier.php');
require_once('descripRdv.php');
$pdo=getPdo();
$events=new Rdv($pdo);
require_once('Month.php');
$numCompte=$_GET['code'];
$k=$_GET["numDe"];
$_SESSION["numDe"]=$k;
$numDe=$_SESSION["numDe"];
	$month= new Month($_GET['month'] ?? null,$_GET['year'] ?? null);
	$start=$month->getStartDay();
	$start=$start->format('N') == '1' ? $start: $month->getStartDay()->modify('last monday');
	$weeks=$month->getWeeks();
	
	$end=(clone $start)->modify("+".(6+7 * ($weeks -1))."days");
	
	$event=$events->getEventBetweenByDay($start,$end);
	
 ?> 
<div class="calendar">
<div class="d-flex flex-row align-items-center justify-content-between  mx-sm-3">
	<h1><?=$month->toString();?></h1>
	<div>
	<a href="rdv.php?month=<?= $month->previousMonth()->month; ?>
	&year=<?= $month->previousMonth()->year; ?>" class= "btn btn-primary ya">&lt;</a>
	<a href="rdv.php?month=<?= $month->nextMonth()->month; ?>
	&year=<?= $month->nextMonth()->year; ?>" class= "btn btn-primary">&gt;</a>
	
		
	</div>
</div>

<table class="calendar_table calendar_table--<?=$weeks;?> weeks">
	<?php for($i=0;$i<$weeks;$i++): ?>
	<tr>
		<?php
		foreach($month->days as $k=>$day):
		$date=(clone $start)->modify("+".($k+$i*7)."days");
		
		$eventsForDay=$event[$date->format('Y-m-d')] ?? [];
		
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
		     
				 <a  id="jour" 
				 href="RvDuJour.php
						 ?date=<?=$date->format('Y-m-d');?>
						 &numCompte=<?=$numCompte?>&numDe=<?=$numDe?> ">
						 <?=$date->format('d');?>
				 </a>
				  <?php 
			  ?>
	
				
		</div>
			<!--<?php foreach($eventsForDay as $events): ?>
					<div class="calendar_event">
					<?php
					
					$x=$events['idRdv'];
					echo"<a href='detailRdv.php?id=$x'>".$events['description']."</a>" ; 
					// echo"<a href='detailRdv.php'>voir</a>" ;
					?>
					</div>
			<?php endforeach; ?>-->
			</td>
		<?php endforeach; ?>
	</tr>
	<?php endfor ?>  
</table>

</div>
<?php require_once('footerCalendrier.php');?>
<script src="rdv.js">
</script>
</body>
</html>