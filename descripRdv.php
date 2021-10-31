 <?php
class Rdv
{
	private $pdo;
	public function __construct($pdo)
	{
		$this->pdo=$pdo;
	}
	public function getEventBetween(\DateTime $start,\DateTime $end):array
	{
		// Prmet de recuperer les evenrments du mois
		
		$sql="select * from rdv WHERE DateRdv BETWEEN '{$start->format('Y-m-d 08:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
		$statement=$this->pdo->query($sql);
		$result=$statement->fetchAll();
		return $result;
	}
	//Cette methode recupere les rdv du mis indexe par jour
	public function getEventBetweenByDay(\DateTime $start,\DateTime $end):array
	{
		$events=$this->getEventBetween($start,$end);
		$days=[];
		$i=0;
		
		foreach($events as $event)
		{ 
		
			{
				$date=explode(' ',$event['DateRdv'])[0];
			}
			if(!isset($days[$date]))
			{
				$days[$date]=[$event];
			}
			else
			{
					$days[$date][]=[$event];
			}
			
		}
		return $days;
	}
	// cette methode recupere une declaration  en connaissant lid
	public function find(  $id)
	{
		return $this->pdo->query("select * from rdv WHERE idRdv = $id ");
		
	}
}