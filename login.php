<?php
$path ='/var/www/html';
$files=scandir($path);
$files=array_diff(scandir($path),array('.','..'));
foreach($files as $file){
echo "<a href='$file'>$file</a><br><br>";
}
?>
