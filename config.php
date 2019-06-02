<?php ob_start();  error_reporting (E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
date_default_timezone_set('Asia/Calcutta');

$host = "localhost"; // Hostname
$port = "3306"; // MySQL Port : Default : 3306
$user = "root"; // Username Here
$pass = ""; //Password Here
$db   = "login"; // Database Name
$dbh  = new PDO('mysqli:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);


$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "login";
$prefix = "";
$bd = @mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Opps some thing went wrong");
mysqli_select_db($mysqli_database, $bd) or die("Opps some thing went wrong");

?>
