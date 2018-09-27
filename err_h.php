<?php
if (mysqli_errno($con)){
		$error1= mysqli_errno($con) . ":".mysqli_error($con);
		$response=$error1."<br>".$err_query;
		exit();
		}
?>