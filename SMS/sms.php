<?php
require_once("vendor/autoload.php");
$MessageBird=new \MessageBird\Client('Mg3D9i2of1UHD2LyIPREVHvCT');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221772267403");
$Message->body="hi";
print_r(json_encode($MessageBird->messages->create($Message)));
$MessageBird=new \MessageBird\Client('GogvVLUsBWWyaZlmUsTJ7znCD');
$Message=new \MessageBird\Objects\Message();
$Message->originator="Ecivil";
$Message->recipients =array("+221784269070");
$Message->body="Salut ";
print_r(json_encode($MessageBird->messages->create($Message)));
?>