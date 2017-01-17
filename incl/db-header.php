<?php

$connector = mysql_connect("localhost", "root", "root") or die("Unable to connect");
$results = mysql_select_db("dummybase1") or die("Unable to connect");
$data = mysql_query("SELECT id_number,first_name,last_name,sex,born_date,start_date FROM employees"); //  LIMIT 20

// take dummybase1 and turn it into JSON
$array = mysql_fetch_array($data); 
echo json_encode($array); // , JSON_PRETTY_PRINT

?>