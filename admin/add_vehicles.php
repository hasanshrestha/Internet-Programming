<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>
						<div class="right">
							<label>Search vehicles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>Car Company</th>
								<th>Car Name/Model</th>
								<th>Hire Price</th>
								<th>Action</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><h3><?php echo $row['car_name'] ?></h3></td>
								<td><?php echo $row['car_type'] ?></td>
								<td><?php echo $row['hire_cost'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
</div>
</div>
						

						<div class="box-content">
							<a href="add_cars.php" class="add-button"><span>Add New Vehicles</span></a>
							<div class="cl">&nbsp;</div>

					</div>

				</div>
				<!-- End Box -->
			</div>
			<!-- End Content -->
			<!-- End Container --></div></div></div></div></body>
		
			



<!-- Footer -->

<div class="cl">&nbsp;</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?></span>
		<span class="right">
			Design by <a href="#">Hasan, Binaya and Sanjiv</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	

</html>