<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3 style="text-align:center">Contact Us</h3>

<div class="container">
  <form ="/#">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">City</label>
    <select id="country" name="country">
      <option value="caloocan">Caloocan</option>
      <option value="laspinas">Las Pinas</option>
      <option value="makati">Makati</option>
      <option value="malabon">Malabon</option>
      <option value="mandaluyong">Mandaluyong</option>
      <option value="marikina">Marikina</option>
      <option value="muntinlupa">Muntinlupa</option>
      <option value="navotas">Navotas</option>
      <option value="paranaque">Paranaque</option>
      <option value="pasay">Pasay</option>
      <option value="pateros">Pateros</option>
      <option value="quezoncity">Quezon City</option>
      <option value="sanjuan">San Juan</option>
      <option value="taguig">Taguig</option>
      <option value="valenzuela">Valenzuela</option>


    </select

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" a href="index.php" value="Submit">
  </form>
</div>

<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Van</a></li>
						<li><a href="#">L300</a></li>
						<li><a href="#">5 Seater</a></li>
						<li><a href="#">Others</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Our company rents cars and other vehicles to clients at lower costs.</p>
					<ul>
						<li><a href="#" class="facebook" target="_blank"></a></li>
						<li><a href="#" class="twitter" target="_blank"></a></li>
						<li><a href="#" class="google" target="_blank"></a></li>
						
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
		Est <?php echo date("Y")?> 
	</footer><!--  end footer  -->
