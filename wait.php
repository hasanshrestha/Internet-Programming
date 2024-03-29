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

	
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
					<h2 class="caption" style="text-align: center">Find Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Hyundai - Toyota - Mahindra</h3>
			</section>
	</section><!--  end hero section  -->



	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Thank you for sending a request for hiring a car. 
				We will get back to you once we verify your payment.<br>
				You can login to view the processing status of your request using your email.
				You can also know the status of your request through your Email.
			</h2>
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
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>


				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mahindra</a></li>
						<li><a href="#">Toyota</a></li>
						<li><a href="#">Mitshubishi</a></li>
					</ul>
				</li>

<?php include_once "includes/footer.php" ?>