<?php

$fich = file_get_contents('./release.txt', true);
$fichero = rtrim($fich);
$hostname = gethostname();
$fecha = new DateTime();
$fecha->setTimestamp($fichero);
#Main Print
echo "<h1><center>The Server Name: " . $_SERVER['SERVER_NAME'] ." </center></h1>\n";
echo "
<table border="1">
<tr>
<td>El timestamp es</td><td>". $fichero ."</td></tr>
<tr><td>El hostname es</td><td>". $hostname . "</td></tr>
<tr><td>La fecha es</td><td>" . $fecha->format('Y-m-d H:i:s') . "</td></tr>
</table>";
phpinfo();
?>
