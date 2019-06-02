<?php ob_start(); error_reporting (E_ALL^ ( E_NOTICE | E_WARNING ));?>
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
		$date=$_POST['date'];
		$location=$_POST['location'];
		$supply_rate=$_POST['supply_rate'];
		$frequency=$_POST['frequency'];
		$mtime_from=$_POST['mtime_from'];
		$mtime_to=$_POST['mtime_to'];
		$etime_from=$_POST['etime_from'];
		$etime_to=$_POST['etime_to'];
		$ntime_from=$_POST['ntime_from'];
		$ntime_to=$_POST['ntime_to'];
$sql="DELETE from daily_schedule";
if (!mysqli_query($con,$sql)) {
	
}
$sql="INSERT INTO daily_schedule(i_date,location,supply_rate,frequency,mtime_from,mtime_to,etime_from,etime_to,ntime_from,ntime_to) VALUES ('$date','$location','$supply_rate','$frequency','$mtime_from','$mtime_to','$etime_from','$etime_to','$ntime_from','$ntime_to')";

if(!mysqli_query($con,$sql))
{
	echo'not inserted';
}
else
{
	echo '<script type="text/javascript">alert("Data Inserted");</script>';
}
?>

<?php

	$message = array(
		"Date"  => $date,
		"Location"=> $location,
		"Supply"=>$supply_rate,
		"Morning_From"=>$mtime_from,
		"To"=>$mtime_to,
		"Evening_From"=>$etime_from,
		"To"=>$etime_to,
		"Night_From"=>$ntime_from,
		"To"=>$ntime_to,
	); 
	$string ='';
	$string .= " Todays Schedule: ";
	$string .= "   Date-".$message["Date"].',  ';
	$string .= "Location-".$message["Location"].",  ";
	$string .= "Supply-".$message["Supply"].',  ';
	$string .= "Morning From-".$message["Morning_From"]." ";
	$string .= "To-".$message["To"].',  ';
	$string .= "Evening From-".$message["Evening_From"]." ";
	$string .= "To-".$message["To"].',  ';
	$string .= "Night From-".$message["Night_From"]." ";
	$string .= "To-".$message["To"].'....';


$text=$string;
$text2=" There is going to be a power-cut off within 20 minutes, please prepare yourself for the same. The following schedule shows the schedule for power-cut. https://www.youtube.com/watch?v=_ULc_pkwMPA";

// $conn = new mysqli("localhost","root","","schedule_manager");
// $sql = "SELECT mobileno FROM farmer_data ";
// $result = $conn->query($sql);
// $len=mysqli_num_rows($result);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//     	for ($i=0; $i < $len; $i++) { 
    			
//     		  $mobileno .=$row["mobileno"]."\r\n";
//     		  $mn=$mobileno;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=TECHNO&route=4&mobiles=,8287617997,&authkey=264821ABLF2Qjz3OOV5c74d4cb&message=".$text2.$text,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

//  else {
//     echo "0 results";
// }
?>
                            

