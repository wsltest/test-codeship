<?php

$fichero = file_get_contents('./release.txt', true);
$hostname = gethostname();
$fecha = new DateTime();
$fecha->setTimestamp($fichero);
#Main Print
echo "<h1><center>The Server Name: " . $_SERVER['SERVER_NAME'] ." </center></h1>\n";
echo "<h2>El timestamp es:\t". $fichero ."</h2>\n";
echo "<h3>El hostname es:\t". $hostname . "</h3>\n";
echo "<h3>La fecha es:\t" . $fecha->format('U = Y-m-d H:i:s') . "</h3>\n";
phpinfo();
?>
