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
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Thanks for choosing us!</h2>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Reservation Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Car Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

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
	
</body>
</html>