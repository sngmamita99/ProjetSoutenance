<?php
//if(isset($_POST['mailform'])){

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />
			
		</div>
	</body>
</html>
';
ini_set('SMTP', "localhost");
ini_set('smtp_port', "587");
ini_set('sendmail_from', "mamilogiciels@gmail.com");

mail("mamilogiciels@gmail.com", "Salut tout le monde !", $message, $header);
//}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>