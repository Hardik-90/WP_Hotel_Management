
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
$First_Name = $_POST['Fname'];
$Last_Name = $_POST['Lname'];
$Phone_No = $_POST['Phone_no'];
$Email = $_POST['Email'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$guests = $_POST['guests'];
$roomId = $_POST['roomId'];

 //$sql = "INSERT INTO `sign up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('username', 'email', 'phone', 'password', current_timestamp());";
 //$sql = "INSERT INTO `sign_up` (`Username`, `Email Address`, `Phone Number`, `Password`, `Date`) VALUES ('$user_name', '$email', '$phone', '$password', current_timestamp())";
 //$sql = "INSERT INTO `login_table` (`Username`, `Password`, `Date`) VALUES ('$user_name', '$password', current_timestamp())";
 //$sql = "INSERT INTO `add_room` (`room_name`, `description`, `price`, `date`) VALUES ('$Room_name', '$Description', '$Price', current_timestamp())";

$sql = "INSERT INTO `room_booking` (`First_Name`, `Last_Name`, `Phone_No`, `email`, `arrival_date`, `departure_date`, `no_of_guests`, `room_id`, `date`) VALUES ('$First_Name', '$Last_Name', '$Phone_No', '$Email', '$arrival', '$departure','$guests', '$roomId', current_timestamp())";
$result = mysqli_query($con, $sql);

 if($result){
     header("Location: /Hotel Management/room_book-success.html");
 }
}

// $con->close();
// echo "Hello";

?>

