<?php
require_once('ConnectionBdd.php');
// require_once('headerCalendrier.php');
require_once('descripRdv.php');
$pdo=getPdo();
$events=new Rdv($pdo);
require_once('Month.php');
	$month= new Month($_GET['month'] ?? null,$_GET['year'] ?? null);
	$start=$month->getStartDay();
	$start=$start->format('N') == '1' ? $start: $month->getStartDay()->modify('last monday');
	$weeks=$month->getWeeks();
	$end=(clone $start)->modify("+".(6+7 * ($weeks -1))."days");
	// var_dump($end);
	$event=$events->getEventBetweenByDay($start,$end);
	// echo"<pre>";
	// var_dump($event);
	// echo"</pre>";
	?>
<table class="calendar_table calendar_table--<?=$weeks;?> weeks">
	<?php for($i=0;$i<$weeks;$i++): ?>
	<tr>
		<?php
		foreach($month->days as $k=>$day):
		$date=(clone $start)->modify("+".($k+$i*7)."days");
		
		$eventsForDay=$event[$date->format('Y-m-d')] ?? [];
;
		?>
			
			<?php foreach($eventsForDay as $events): ?>
					<div class="calendar_event">
					<?php
					
					$x=$events['idRdv'];
					echo"<a href='detailRdv.php?id=$x'>".$events['description']."</a>" ; 
					// echo"<a href='detailRdv.php'>voir</a>" ;
					?>
					</div>
			<?php endforeach; ?>
			</td>
		<?php endforeach; ?>
	</tr>
	<?php endfor ?>  
</table>

