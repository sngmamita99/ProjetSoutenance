 <?php
class Session
{
	public function __construct()
	{
		session_start();
	}
	//Cette classe nous permet de définir un message de notification qui prend en parametre le message
	// On a ajoutéle type de message pour savon en fonction du type la couleur fdu mess à afficher avec un type par défaut
	public function setFlash($message,$type='danger')
	{
		$_SESSION['flash']=array(
		'message' => $message,
		'type' => $type
		);
	}
	// cette founction permet d'afficher le message si il est déja défini dans la variable session
	public function flash()
	{
		if(isset($_SESSION['flash']))
		{
		?>
	<div id="alert" class="alert-<?php echo $_SESSION['flash']['type']?>">
			
			<?php echo  $_SESSION['flash']['message'];?>
	</div>
			
			 <?php
			//supprime la variable aprés l'avoir utilisée
			unset($_SESSION['flash']);
		}
	}
}
?>
