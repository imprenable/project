<?php
$servername="localhost";
$username="root";
$password="";
include ("customer.php");
$obj=new Customer();


$data = json_decode(file_get_contents("php://input"));
@$email = $data->email;
@$name = $data->name;
@$cpswd = $data->cpswd;
@$pswd = $data->pswd;


/*$pname = $POST_["name"];
$pemail = $POST_["email"];
$ppswd = $POST_["pswd"];
$pcpswd = $POST_["cpswd"];
/*$file = fopen("test.txt","w");
echo fwrite($file,$data);
echo fwrite($file,$email."\n");
echo fwrite($file,$name."\n");
echo fwrite($file,$pswd."\n");
echo fwrite($file,$cpswd."\n");*/
/*echo fwrite($file,"hellow");
echo fwrite($file,$pname);
echo fwrite($file,$pemail);
echo fwrite($file,$ppswd);
echo fwrite($file,$pcpswd);*/
/*fclose($file);*/

$logg = new \stdClass();
$result=$obj->create_customer2($name,$email,$pswd,$cpswd);
      /*  $file = fopen("test-signup-result.txt","w");
        echo fwrite($file,$result);
        fclose($file);*/
$logg->stat1=$result;
$logg->stat2="trialstatus";
echo json_encode($logg);

//$name = mysqli_real_escape_string($data->name);
//$email = mysqli_real_escape_string($data->email);
//$email= mysqli_real_escape_string(con,trim($data->name));
//$pswd = mysqli_real_escape_string($data->pswd);
//$cpswd = mysqli_real_escape_string($data->cpswd);

//$con = new mysqli($servername, $username, $password, "mydb");

//$info->a="name";
//$info->status=$data;

//$insert_query="INSERT INTO signuptbl(`Name`, `Email`, `Password`, `C_Password`)VALUES('sanika','sanika@gmail.com"','"asd"','"asd"')";
//$err_query=$insert_query;

//if (mysqli_errno($con)){
//		$error1= mysqli_errno($con) . ":".mysqli_error($con);
//		$data=$error1."<br>".$err_query;
//		exit();
//	}
//else {
//		$info->name=$name;
//}

//echo json_encode($info);
?>