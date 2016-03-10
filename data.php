<?php

$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Não foi possivel conectar!: ' . mysql_error());
}

mysql_select_db("esolar", $con);


$sth = mysql_query("SELECT voltagem , data FROM voltagem");

$rows = array();
$rows['name'] = 'voltagem';


while($r = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $r['voltagem'];

}

$result = array();
array_push($result,$rows);



print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
