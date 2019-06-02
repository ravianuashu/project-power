
<!DOCTYPE html>
<html lang="en">
	<head>
		<style type="text/css" >
			.a option{
				height: 200px;
			}
		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form For Farmers</title>

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<h1>Form</h1>
		<form action="" method="POST" role="form">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Meter Number</label>
					<input type="text" class="form-control" name="mnumber" placeholder="Meter Number" required maxlength="8">
				</div>
			</div>
				<div class="col-lg-6">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="fname" placeholder="Enter Name" required>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name="address" placeholder="Address" required>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Locality</label>
					<input type="text" class="form-control" name="locality" placeholder="Locality" required>
				</div>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label for="">City</label>
					<input type="text" class="form-control" name="city" placeholder="City" required>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">District</label>
					<input type="text" class="form-control" name="district" placeholder="District" required>
				</div>
			</div>
				<div class="col-lg-6">
				<div class="form-group">
					<label for="">State</label>
					<input type="text" class="form-control" name="state" placeholder="State" required>
				
			</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Pincode</label>
					<input type="text" class="form-control" name="pincode" placeholder="Pincode" required maxlength="6">
				
			</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Mobile no.</label>
					<input type="text" class="form-control" name="mobileno" placeholder="Mobile No" required maxlength="10"><br><br>
				</div>
			</div>		
			<div class="container">
				<button type="submit" class="btn btn-primary" value="Uplaod">Upload</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	</div>
	<div>	
	<a href="./index.php">Back To Home</a>	
</div>
		</div>

		</div>
		</form>
	</div>
	</div>	
	</body>
</html>
<?php ob_start(); error_reporting(E_ALL^ (E_NOTICE|E_WARNING));?>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	echo'not connected to server';
}
if(!mysqli_select_db($con,'test'))
{
	echo' connected to database';
}
		$meterno=$_POST['mnumber'];
		$name=$_POST['fname'];
		$address=$_POST['address'];
		$locality=$_POST['locality'];
		$city=$_POST['city'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];
		$mno=$_POST['mobileno'];
		
$sql="INSERT INTO farmer_data(meter_number,farmer_name,address,location,city,district,state,pincode,mobileno) VALUES ('$meterno','$name','$address','$locality','$city','$district','$state','$pincode','$mno')";

if(!mysqli_query($con,$sql))
{
	echo '<script type="text/JavaScript">alert("Data Not Inserted")</script>';	
}
else {
	echo '<script type="text/JavaScript">alert("Data Inserted")</script>';	
}