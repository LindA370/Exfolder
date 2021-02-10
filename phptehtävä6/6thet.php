<?php
$json=$_POST["fisu"];
$fisu=json_decode($json, false);

print $fisu -> laji."<br>";
print $fisu -> paino."<br>";
print $fisu -> pituus."<br>";

?>