<?php
class User
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "crud";
    $username = "root";
    $password = "";

     // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

      }else{
        $this->conn=$conn;
        }

    }


     public function create_user($name,$email_address,$pswd,$cpswd){
         
       $pswds=md5($pswd);
       $sql="INSERT INTO SignUptbl (Name, Email, Password,C_Password) VALUES ('$name', '$email_address', '$pswds','$cpswd')";
        

		require_once('SignUp/connect.php');
        $result=mysqli_query($con,$sql);
        
        if($result){
          return 'Succefully Created Student Info ' . $name . $email_address . $pswd . $cpswd;     
        }else{
           return 'An error occurred while inserting data ' . $name;     
        }

     }
    
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>
