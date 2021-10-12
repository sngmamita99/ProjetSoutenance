<?php
class Rdv
{
	public function getEventBetween(\DateTime $start,\DateTime $end):array
	{
		// Prmet de recuperer les evenrments du mois
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","",[ \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC
		]);
		$sql="select * from rdv WHERE DateRdv BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
		$statement=$connect->query($sql);
		$result=$statement->fetchAll();
		return $result;
	}
	//Cette methode recupere les rdv du mis indexe par jour
	public function getEventBetweenByDay(\DateTime $start,\DateTime $end):array
	{
		$events=$this->getEventBetween($start,$end);
		$days=[];
		foreach($events as $event)
		{
		
			$date=explode(' ',$event['DateRdv'])[0];
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
}