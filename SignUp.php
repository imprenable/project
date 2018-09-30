<?php
$servername="localhost";
$username="root";
$password="";
include ("SignUp/User.php");
$obj=new User();


$data = json_decode(file_get_contents("php://input"));
@$email = $data->email;
@$name = $data->name;
@$cpswd = $data->cpswd;
@$pswd = $data->pswd;

$logg = new \stdClass();
$result=$obj->create_user($name,$email,$pswd,$cpswd);

$logg->stat1=$result;
$logg->stat2="trialstatus";
echo json_encode($logg);

?>