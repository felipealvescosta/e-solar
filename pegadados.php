<?php

$connect = mysql_connect('localhost','root','felipe007');

$db = mysql_select_db('esolar');


$valor = $_GET['volt'];
//conversao para float
$volt = floatval($valor);


$query = "INSERT INTO voltagem (voltagem) VALUES ('$volt')";
$insert = mysql_query($query) or die(mysql_error());

mysql_close($connect);
?>