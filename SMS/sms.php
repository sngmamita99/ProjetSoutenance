<?php
require_once("vendor/autoload.php");
$MessageBird=new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221772267403");
$Message->body="Salut fatou ";
print_r(json_encode($MessageBird->messages->create($Message)));
?>