<?php
class Month 
{
public $days =['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
	public $months=['Janvier','Février','Mars','Avril','Mai','Juin','Juilet','Aout','Septembre','Octobre','Novembre','Décembre'];	
	public $month;
	public $year;
	public function __construct(int $month=null, int $year=null)
	
	{
		if($month==null)
		{
			$month =intval(date('m')); 
		}
		if($year==null)
		{
			$year =intval(date('Y')); 
		}
		if($month <1 || $month>12 )
		{
			throw new Exception("Le mois $month n'est pas valide");
		}
		if($year<1970)
		{
			throw new Exception("L'année est inferier à 1970");
		}
		// Retourne le moi en tourne lettre ec Mars:2018
		$this->month=$month;
		$this->year=$year;
	}
	public function getStartDay():\DateTime
		{
			//Cette founction renvoie le jour du mois
			return new \DateTime ("{$this->year}-{$this->month}-01");
		}
		public function toString():string
		{
			return $this->months[$this->month -1 ].' '.$this->year;
		}
		public function getWeeks(): int
		{
				$start=$this->getStartDay();
				$end=(clone $start)->modify('+1 month -1 day'); 
				$weeks = intval($end->format('W'))-intval($start->format('W')) + 1; 
				return $weeks;
				
		}
		public function withInMonth(\DateTime $date):bool
		
		{
			//Cette methode permet de savoir si le jour est dans le mois precedent
			return  $this->getStartDay()->format('Y-m')==$date->format('Y-m');	
		}
		public function nextMonth():Month
		{
			$month=$this->month + 1;
			$year=$this->year;
			if($month>12)
			{
				$month=1;
				$year+=1;
			}
			return new Month($month,$year);
		}
		public function previousMonth():Month
		{
			$month=$this->month - 1;
			$year=$this->year;
			if($month<1)
			{
				$month=12;
				$year-=1;
			}
			return new Month($month,$year);
		}
		
}
?>