<?php
set_error_handler("anyError", E_ALL);
$error="Tallennus onnistui, lets goooooooooooooo";

$nimi=$_POST["nimi"];
$pnumero=$_POST["pnumero"];
$ppaikka=$_POST["ppaikka"];

if (!isset($pnumero) || !isset($ppaikka) || empty($pnumero) || empty($ppaikka)){
    $error="Ei sopivaa dataa";
    print $error;
    return;
}