<?php
$year = date("Y");
$month = date("m");
$day = date("d");

$lines = array();
$filename = exec("ls -t /var/www/html/battleship/image30/$year/$month/$day/*.jpg", $lines);

$filename = $lines[0];
if(imagecreatefromjpeg($filename) == false){
  $filename = $lines[1];
}

$filename = basename($filename);

echo "/battleship/image30/$year/$month/$day/$filename";
?>
