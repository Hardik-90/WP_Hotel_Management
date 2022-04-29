
<?php

$insert = false;
$server = "localhost";

$username = "root";

$password = "";
$database = "wp_hotel_management";

$con = mysqli_connect($server, $username, $password, $database);
// //echo $con;
// if(!$con){
//      die("connection to this database failed due to" . mysqli_connect_error());
//  }
 //echo "Success connecting to the db";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$User_name = $_POST['name'];
$Password = $_POST['pass'];

 //$sql = "INSERT INTO `sign up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('username', 'email', 'phone', 'password', current_timestamp());";
 //$sql = "INSERT INTO `sign_up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('$user_name', '$email', '$phone', '$password', current_timestamp())";
 //$sql = "INSERT INTO `login_table` (`Username`, `Password`, `Date`) VALUES ('$user_name', '$password', current_timestamp())";
 
$sql = "INSERT INTO `admin_login` (`Username`, `Password`, `Date`) VALUES ('$User_name', '$Password', current_timestamp())";

$result = mysqli_query($con, $sql);

 if($result){
     echo "Signup done";
 }
}

// $con->close();
// echo "Hello";

?>

