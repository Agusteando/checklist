<?php
  $text = $_POST['postdata'];
  
$var_str = var_export($text, true);
$var = $var_str;
file_put_contents('value.txt', $text);

$run = shell_exec('powershell.exe -executionPolicy Unrestricted C:\Apache24\htdocs\Checklist\disableWifi.ps1');

echo $run;
?>