<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	echo'not connected to server';
}
if(!mysqli_select_db($con,'schedule_manager'))
{
	echo' connected to database';
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mnumber=$_POST['mnumber'];
$locality=$_POST['locality'];

$sql="INSERT INTO login_page(fname,lname,mnumber,locality)VALUES('$fname','$lname','$mnumber','$locality')";

if(!mysqli_query($con,$sql))
{
	echo'not inserted';
}
else
{
	echo'inserted';
}



?>