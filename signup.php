<?php

$data = json_decode(file_get_contents("php://input"));
$name = mysql_real_escape_string($data->name);
$email = mysql_real_escape_string($data->email);
$pswd = mysql_real_escape_string($data->pswd);
$cpswd = mysql_real_escape_string($data->cpswd);

mysql_connect("localhost","root","");
mysql_select_db("mydb");
mysql_query("INSERT INTO signuptb(`Name`, `Email`, `Password`, `confirm_password`)VALUES('".$name."','".$email."','".$pswd."','".$cpswd."')")


?>