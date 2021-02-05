<?php 
include "headerlol.html" ; ?>
<h2> OUTPUT </h2>
<?php

if(isset ($_POST [" + "])) {
$sumna=$_POST["num1"] + $_POST["num2"];
echo " Ulos laskimesta tulee :". $summa; }

if(isset ($_POST [" / "])) {
$divar=$_POST["num1"] / $_POST["num2"];
echo " Ulos laskimesta tulee :". $divar; }

if(isset ($_POST [" - "])) {
$miinus=$_POST["num1"] - $_POST["num2"];
echo " Ulos laskimesta tulee :". $miinus; }

if(isset ($_POST [" * "])) {
$multiply=$_POST["num1"] + $_POST["num2"];
echo " Ulos laskimesta tulee :". $multiply; }
?>
<?php 
include "footerlol.html" ; ?>