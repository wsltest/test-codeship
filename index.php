<?php

$fichero = file_get_contents('./release.txt', true);
$hostname = gethostname();
#Main Print
echo "<h1><center>The Server Name: " . $_SERVER['SERVER_NAME'] ." </center></h1>\n";
echo "<h2>El timestamp es: ". $fichero ."</h2>\n";
echo "<h3>El hostname es: ". $hostname . "</h3>\n";

phpinfo();
?>
