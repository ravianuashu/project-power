

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
		<title>Schedule Update Manager</title>

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>

	<div class="container">
		<h1>Schedule Manager</h1>
		<form action="conn.php" method="POST" role="form">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Date </label>
					<input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required>
				</div>
            
			</div>
			

						<div class="col-lg-6">
				<div class="form-group">
					<label for="">Location(Power House)</label>
					<input type="text" class="form-control" name="location" placeholder="Location" required>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Power Supply Rate</label>
					<input type="text" class="form-control" name="supply_rate" placeholder=" Mega Watt" required>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Frequency</label>

					<SELECT name="frequency" style="width:550px;" style="height: 200px;" class="form-group" required >
						<option value="0"> Select Frequency</option>
						<option value="50Hz"> 50Hz</option>
						<option value="60Hz"> 60Hz</option>
					</SELECT>
					
				</div>
			</div>
			<div class="container">
			<h4><label>Time Slot</label></h4>
	<div class="container">
				<h5><label>Morning</label></h6>	</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">From   </label>
					<input type="text" class="form-control" name="mtime_from" placeholder="HH:MM:SS" required>
				</div>
			</div>
				<div class="col-lg-6">
				<div class="form-group">
					<label for="">To  </label>
					<input type="text" class="form-control" name="mtime_to" placeholder="HH:MM:SS" required>
				</div>
			</div>
			</div>
				<div class="container">
				<h5><label>Evening</label></h6>	</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">From   </label>
					<input type="text" class="form-control" name="etime_from" placeholder="HH:MM:SS" required>
				</div>
			</div>
				<div class="col-lg-6">
				<div class="form-group">
					<label for="">To  </label>
					<input type="text" class="form-control" name="etime_to" placeholder="HH:MM:SS" required>
				</div>
			</div>
			</div>
				<div class="container">
				<h5><label>Night</label></h6>	</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">From   </label>
					<input type="text" class="form-control" name="ntime_from" placeholder="HH:MM:SS" required>
				</div>
			</div>
				<div class="col-lg-6">
				<div class="form-group">
					<label for="">To  </label>
					<input type="text" class="form-control" name="ntime_to" placeholder="HH:MM:SS" required>
				</div>
			</div>
			</div>
			
						
			<div class="container">
				<button type="submit" class="btn btn-primary" value="Uplaod">Upload</button>
			</div>

			<div class="button">
				<a href="index.php">Back To Home</a>
			</div>

		</div>
		</form>

		<hr>


	<footer>
		&copy; <?php echo date('Y'); ?> , <a href="https://ravivermapoetry.blogspot.com/">Technoworkers</a>
	</footer>
	</div>	
	</body>
</html>
