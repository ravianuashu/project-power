
<?php 
?>
 <head>
  <a class="nav-brand" href="home1.php"><img src="logo.png" alt="MOP LOGO"></a>
   <link rel="stylesheet" href="style.css">
   
  </head>
  <body>
    <div class="s01">
      <form action="" method="POST">
        <div>
        <fieldset>
          <center><legend style="font-size:30px;" value="page">Search Details By Meter Number</legend></center>
        </fieldset>
        </div>
        <div class="inner-form">
          
          <div class="input-field first-wrap">
           <center> <input id="meter_number" type="text" placeholder="Meter Number" name="meter_number" /></center>
          </div>
          <div class="input-field second-wrap">
         <center>   <button class="btn-search" type="submit" name="button" >Search</button></center> 
          </div>
          <div class="classynav1">
            
            <ul id="nav">
         <li><a href="home1.php">Back To Home</a></li>
          <li><a href="updatemanager.html">Power Consuption(LOCALITY WISE)</a></li>
          </ul>
          </div>
        </div>
          

        </div>
      </form>
  </div>
  </body>
<?php ob_start(); error_reporting(E_ALL^ (E_NOTICE|E_WARNING));?>
<?php

$conn=mysqli_connect("localhost","root","","test");

if(isset($_POST['button']))
{
		 $meter_number=$_POST['meter_number'];
          $query="SELECT meter_number,farmer_name,address,location,city,district,state,pincode,mobileno FROM farmer_data where meter_number=$meter_number";
          $query_run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($query_run))
          {
            ?>
<table cellpadding="10" cellspacing="5">
    <tr> <form action="" method="POST" >
        <tr><th><h3>Meter Number</th><td><input type="text" name="meter_number" value="<?php echo $row['meter_number'] ?>" readonly />  <br></td></tr></h3>
        <tr><th><h3>Farmer Name</th><td><input type="text" name="farmer_name" value="<?php echo $row['farmer_name'] ?>" readonly/><br></td></tr></h3>
        <tr><th><h3>Address</th><td><input type="text" name="address" value="<?php echo $row['address'] ?>" readonly/><br></td></tr></h3>
        <tr><th><h3>Location</th> <td><input type="text" name="location" value="<?php echo $row['location'] ?>" readonly/></td></h3>
        
        <tr><th><h3>City</th><td><input type="text" name="city" value="<?php echo $row['city'] ?>" readonly/><br></td></tr></h3>
        <tr><th><h3>State</th><td><input type="text" name="state" value="<?php echo $row['state'] ?>" readonly/><br></td></tr></h3>
        <tr><th><h3>PinCode</th> <td><input type="text" name="PinCode" value="<?php echo $row['pincode'] ?>" readonly/><br></td></tr></h3>
                <tr><th><h3>Mobile Number</th> <td><input type="text" name="mobileno" value="<?php echo $row['mobileno'] ?>" readonly/><br></td></tr></h3>
    </tr>
  </tr>
</table>
<!...Graph code..>
<div>
  <script>
                window.onload = function () {
                    var random=Math.floor(Math.random() * 100) + 1;
                    var r1 = Math.random( );
                    var r2 = Math.random( );
                    var r3 = Math.random( );
                    var r4 = Math.random( );
                    var r5 = Math.random( );
                    var r6 = Math.random( );
                    var r7 = Math.random( );
                    var r8 = Math.random( );
                    var r9 = Math.random( );
                    var r10 = Math.random( );
                    var r11 = Math.random( );
                    var r12 = Math.random( );
                    var r13 = Math.random( );
                    var r14 = Math.random( );
                    var r15 = Math.random( );
                    var r16 = Math.random( );
                    var r17 = Math.random( );
                    var r18 = Math.random( );
                    var r19 = Math.random( );
                    var r20 = Math.random( );
                    var r21 = Math.random( );
                    var r22 = Math.random( );
                    var r23 = Math.random( );
                    var r24 = Math.random( );
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                        text: "DAY"+random
                    },
                    axisY:{
                        includeZero: false
                    },
                    data: [{        
                        type: "line",     
                        dataPoints: [
                            { y: r1*500, label:"1"},
                            { y: r2*500, label:"2"},
                            { y: r3*500, label:"3"},
                            { y: r4*500, label:"4"},
                            { y: r5*500, label:"5"},
                            { y: r6*500, label:"6"},
                            { y: r7*500, label:"7"},
                            { y: r8*500, label:"8"},
                            { y: r9*500, label:"9"},
                            { y: r10*500, label:"10"},
                            { y: r11*500, label:"11"},
                            { y: r12*500, label:"12"},
                            { y: r13*500, label:"13"},
                            { y: r14*500, label:"14"},
                            { y: r15*500, label:"15"},
                            { y: r16*500, label:"16"},
                            { y: r17*500, label:"17"},
                            { y: r18*500, label:"18"},
                            { y: r19*500, label:"19"},
                            { y: r20*500, label:"20"},
                            { y: r21*500, label:"21"},
                            { y: r22*500, label:"22"},
                            { y: r23*500, label:"23"},
                            { y: r24*500, label:"24"},
                        ]
                    }]
                });
                chart.render();
                
                }
                </script>
    </head>
    <body>
           
           
            <div id="chartContainer" style="width: 50%; height: 300px;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
  </div>


<?php
} }
else {
		echo '<script type="text/JavaScript">alert("Click To Continue")</script>';
	   }
      ?>

