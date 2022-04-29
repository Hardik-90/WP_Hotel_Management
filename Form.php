<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking</title>


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- Stylesheet -->
<link href="form.css" rel='stylesheet' type='text/css' />
<!-- //Stylesheet -->
<!-- fonts --> 
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">  

<!-- // fonts-->
</head>
<body>

	<?php 
	  $roomId = $_GET['room'];
	?>

	<header>
		<nav>
			<div class="row">
				<img src="images/Logo.png" class="logo">
				<ul class="main-nav" id="check-class">
					<li><a href="Main.html">Home</a></li>
					<li><a href="Aboutus.html">About Us</a></li>
					
					<li><a href="attraction.html">Attractions </a></li>
			</ul>
					
			</div>
		</nav>
	</header>
<!--background-->
<h1> Resort Booking Form</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Book Now</h2>
						<div class="book-form agileits-login">
							<form action="/Hotel Management/booking_form.php?room=" method="post">
								<div class="agileits_reservation_grid">
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Fname" placeholder="First name" required="" autocomplete="off">
									</div> 
								</div>

							    <?php echo '<input type="hidden" name="roomId" value="'. $roomId .'"/>'?>

								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Lname" placeholder="Last name" required="" autocomplete="off">
									</div>
								</div>
								
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="Phone_no" placeholder="Phone number" required="" autocomplete="off">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="Email" placeholder="Email" required="" autocomplete="off">
									</div>
								</div>
									
								
									<div class="span1_of_1 phone_email1">
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker" name="departure" type="text" value="" placeholder="Departure Date"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="span1_of_1 phone_email">
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker1" name="arrival" type="text" value="" placeholder="Arrival Date"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="span1_of_1">
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-users" aria-hidden="true"></i>
											<select id="country" onchange="change_country(this.value)" class="frm-field required" name="guests">
												<option value="">No.of guests</option>
												<option value="1">1</option>
												<option value="2">2 </option>         
												<option value="3">3</option>
												<option value="4">4 </option>
												<option value="5">5 </option>
												<option value="6">6 </option>
											</select>
										</div>	
									</div>
									
									<div class="clear"></div>
								</div> 
								<input type="submit" value="Book Now">
								<input type="reset" value="Reset">
								<div class="clear"></div>
							</form>
						</div>

		</div>
   </div>
  
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!--Calendar -->
				<link rel="stylesheet" href="jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker({ 
            dateFormat: 'yy/mm/dd' 
        });
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>