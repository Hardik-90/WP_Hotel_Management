
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
$Room_name = $_POST['room_name'];
$Description = $_POST['desc'];
$Price = $_POST['price'];

 //$sql = "INSERT INTO `sign up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('username', 'email', 'phone', 'password', current_timestamp());";
 //$sql = "INSERT INTO `sign_up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('$user_name', '$email', '$phone', '$password', current_timestamp())";
 //$sql = "INSERT INTO `login_table` (`Username`, `Password`, `Date`) VALUES ('$user_name', '$password', current_timestamp())";
 
 $sql = "INSERT INTO `add_room` (`room_name`, `description`, `price`, `date`) VALUES ('$Room_name', '$Description', '$Price', current_timestamp())";
 $result = mysqli_query($con, $sql);

 if($result){
     $message="Room added!!";
     header("Location: /Hotel%20Management/admin_room_update.php?success=true&message=$message");
 }
}

// $con->close();
// echo "Hello";

?>

