<?php

$fich = file_get_contents('./release.txt', true);
$fichero = rtrim($fich);
$hostname = gethostname();
$fecha = new DateTime();
$fecha->setTimestamp($fichero);

#Main Print
echo "<style type='text/css'>
table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
h1 {font-size: 150%;}\n";

echo "<h1><center>The Server Name: " . $_SERVER['SERVER_NAME'] ." </center></h1>";
echo "<center><table border='1'>
<tr><td>El timestamp es</td><td>". $fichero ."</td></tr>
<tr><td>El hostname es</td><td>". $hostname . "</td></tr>
<tr><td>La fecha es</td><td>" . $fecha->format('Y-m-d H:i:s') . "</td></tr>
</table></center>\n";
phpinfo();
?>
