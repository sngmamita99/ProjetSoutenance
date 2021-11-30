<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AXYP2c87havtj-HZFXtHBIbiBs15uGvRIceuX0lpQVPtoKEFjJJm7g09DJ-Hyrf8lWWtOCuqoIv3GkCh');
define('CLIENT_SECRET', 'EAyYcDdZ56oucuXc-B14F2WA2P1Qb1K0XzeQJ_nMWrn1wJ_g2EUWKxFwHz5Mmy1LhF9fkm9kIOlF46eo');
 
define('PAYPAL_RETURN_URL', 'http://localhost/TP/ProjetSoutenanceLB/paypal/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/TP/ProjetSoutenanceLB/paypal/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'ecivil'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live