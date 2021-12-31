<?php
require_once("headerCitoyen.php")
?>
<!doctype html>
<html>
<head>
	<meta charset=uft-8"/>
	<title>paiement</title>
    <style type="text/css">
        h6
        {
            padding-top: 19px;
            font-size: 25px;
            color: #00695c ;
            font-style: italic;
            font-family: Gill Sans Extrabold, sans-serif;
        }
        form
        {
           
            width: 50%;
            margin: auto;
            margin-top: 40px;
            background-color: white;
            border-radius: 10px 80px ;
            
        }
        #payer
        {
            background-color: #00695c ;
            color: white;
            margin-left: 40%;
            margin-top: 40px;
            border:0px hidden ;
            font-size: 25px;
            border-radius: 15px 15px;
            margin-bottom: 20px;
        }
        body
{
    background-image: url("https://cdn.pixabay.com/photo/2014/02/01/18/01/money-256319_1280.jpg");


}
    </style>

</head>
<body>
    
<form action="paypal/charge.php" method="post">
   <h6>Montant à payer:</h6>
  <input type="text" name="amount" placeholder="montant à payer" value="500" readonly="readonly" >
  <input  type="submit" name="submit" value="Payer Maintenant" id="payer">

</form>
</body>
</html>
<!--<form action="charge.php" method="post">
    <input type="text" name="amount" value="300" />
    <input type="submit" name="submit" value="Payer Maintenant">
</form>-->
