<?php

$fich = file_get_contents('./release.txt', true);
$fichero = rtrim($fich);
$hostname = gethostname();
$fecha = new DateTime();
$fecha->setTimestamp($fichero);

#Main Print
echo "<html xmlns='http://www.w3.org/1999/xhtml'><head>
<style type='text/css'>
body {background-color: #000; color: #222; font-family: sans-serif;}
pre {margin: 0; font-family: monospace;}
a:link {color: #009; text-decoration: none; background-color: #fff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px green; color: green;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid green; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
h1 {font-size: 150%; color: green}
.p {text-align: left;}
.e {background-color: #ccf; width: 300px; font-weight: bold;}
.h {background-color: #99c; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto;}
.v i {color: #999;}
img {float: right; border: 0;}
hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>
<title>Deploy Testing</title><meta name='ROBOTS' content='NOINDEX,NOFOLLOW,NOARCHIVE' /></head><body>\n";

echo "<h1><center>The Server Name: " . $_SERVER['SERVER_NAME'] . " </center></h1>\n";
echo "<center><table>
<tr><td>El timestamp es</td><td>". $fichero ."</td></tr>
<tr><td>El hostname es</td><td>". $hostname . "</td></tr>
<tr><td>La fecha es</td><td>" . $fecha->format('Y-m-d H:i:s') . "</td></tr>
</table></center>\n";
echo "</body></html>";
?>
