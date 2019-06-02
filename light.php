
<?php ob_start(); error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
<?php

$con=mysqli_connect("localhost","root","");
if(!$con)
{
  echo'not connected to server';
}
if(mysqli_select_db($con,'test'))
{
  // echo ' connected to database';
}
$peaktime='true';
$sql="SELECT mtime_from,mtime_to,etime_from,etime_to,ntime_from,ntime_to from daily_schedule";  
$check1_res = mysqli_query($con, $sql);
$row=mysqli_fetch_array($check1_res) or die( mysqli_error($con));

$mtime_from=$row['mtime_from'];
$mtime_to=$row['mtime_to'];
$etime_from=$row['etime_from'];
$etime_to=$row['etime_to'];
$ntime_from=$row['ntime_from'];
$ntime_to=$row['ntime_to'];

echo $ntime_from;
$str_time = $ntime_from;


$str_time2 =time();

$time= $str_time2;


echo $time."\r\n";

function peaktime(){

if ($time>=$mtime_from && $time<=$mtime_to) {
echo $mtime_from;
return 1 ;


}elseif ($time>=$etime_from && $time<=$etime_to) {
  echo $etime_from;
  return 1;

}
elseif ($time>=$ntime_from && $time<=$ntime_to) {
  echo $ntime_from;
  return 1;
}else
  return 0;

}
$p=peaktime();
echo $p;
// echo peaktime();
// echo time();
// echo $mtime_from;
if ($p==1){

	echo "The power has reached the peak time, we are sorry for the inconvenience.";
}

else
{
  echo"hello  ,Use efficiently ";
}


?>

