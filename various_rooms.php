<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hotel Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main_room.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        
    </head>
    <body>

<section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>Rooms</h2>
            </div>
            <div class = "rooms-container">

                <?php
                $server = "localhost";

                $username = "root";
                
                $password = "";
                $database = "wp_hotel_management";
                
                $con = mysqli_connect($server, $username, $password, $database);

                $sql = "SELECT * from `add_room`";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $room = $row["sr no"];
                    $roomBooed = false;
                    $roomBooed;
                    $sql2 = "SELECT * from `room_booking` where room_id=$room";
                    $result2 = mysqli_query($con, $sql2);
                    $numberOfRows = mysqli_num_rows($result2);
                    if($numberOfRows > 0){
                    $roomBooed = true;
                    $roomButton ="<button type='button' class='btn' disabled>Room Booked</button>";
                    }else {
                        $roomBooed = false;
                        
                    }

                    echo '
                    <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>'. $row['room_name'] .'</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                '. $row['description'] .'
                            </li>
                        </ul>
                        <p class = "rate">
                            <span>$'. $row['price'] .' /</span> Per Night
                        </p> ';

                        if($roomBooed){
                            echo "<button type='button' class='btn' disabled>Room Booked</button>";
                        }else {
                            echo "<button type='button' class='btn'><a  href='Form.php?room=". $room ."'>Book Now</a>";
                        }
			            
                    echo '</div>
                </article>
                    ';
                }
                ?>

            </div>
        </section>
</body>
</html>