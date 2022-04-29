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

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
$user_name = $_POST['email'];
$email = $_POST['email_new'];
$phone = $_POST['phone'];
$password = $_POST['pwd1'];

 //$sql = "INSERT INTO `sign up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('username', 'email', 'phone', 'password', current_timestamp());";
 $sql = "INSERT INTO `sign_up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('$user_name', '$email', '$phone', '$password', current_timestamp())";
 $result = mysqli_query($con, $sql);

 if($result){
     echo "Signup done";
 }
}
*/
$sql = "SELECT SR No, Username, Email Address, Phone Number, Password FROM sign_up";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Sr No: " . $row["SR No"]. " - UserName: " . $row["Username"]. " - Email ID: " . $row["Email Address"]. " - Phone Number: " . $row["Phone Number"]. " - Password: " . $row["Password"]. "<br>";
    }
  } else {
    echo "0 results";
  }
// $con->close();
// echo "Hello";

?>

