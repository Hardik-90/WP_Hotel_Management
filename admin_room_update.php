<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!--Bootstrap stylesheet-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!--Bootstrap icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!--Bootstrap JQuery-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>

    <!--External CSS-->
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/admin-page.css" />

    <nav>
      <div class="row">
        
          <ul class="main-nav" id="check-class">
              <li><a href="Main.html">Home</a></li>
              
             
           <li><a href="admin_login.html">Logout</a></li>
          </ul>
              <!-- <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i></a>	 -->
      </div>
  </nav>

  <script>
    function openWin2() {
      window.open("admin-event-info-form.html");
    }
    </script>

<script>
  function openWin() {
    window.open("admin-event-edit-form.html");
  }
  </script>

  </head>
  <body>
    <!-- header -->
    <section id="navigation">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 p-1">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">Admin Panel</a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto navigation">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="bi bi-person-circle profile-icon"></i>
                </a>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <?php

    if(isset($_GET['success']) && $_GET['success']==true && isset($_GET['message'])){

      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">

                <strong>Success!</strong> '. $_GET['message']. '

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

            </div>';

    }

    ?>

    <!--Table-->
    <section id="admin-table">
      <h3>Add New Room details</h3>
      <input type="button" value="Add New Room" onclick="openWin2()">
     
      <?php



echo'<table class="table table-hover">

<thead class="thead-dark">
<tr>
  <th scope="col">Room Id</th>
  <th scope="col">Type of Rooms</th>
  <th scope="col">Description</th>
  <th scope="col">Price</th>
  
</tr>
</thead>

  <tbody>';

  $servername = "localhost";

  $username = "root";

  $password = "";

  $database = "wp_hotel_management";



  $conn = mysqli_connect($servername, $username, $password, $database);



  $sql = "SELECT * FROM `add_room` ";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){

    echo '

    <tr>

      <td>'. $row['sr no']. '</td>

      <td>' . $row['room_name']. '</td>

      <td>' . $row['description']. '</td>
      <td>' . $row['price']. '</td>

    </tr>

    ';

  }



  echo '</tbody>

  </table>';

?>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"

        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">

    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"

        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">

    </script>
  </body>
</html>
