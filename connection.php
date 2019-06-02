 <?php
 
  $con=mysqli_connect("localhost","root","","test");
        // $db=mysqli_connect_db($con,'address_database');
        if(isset($_POST['button']))
        {
          $location=$_POST['location'];
          $query="SELECT sno,organisation_name,Locality,Local_area,Distict,State,PinCode FROM power_house_table where Local_area='$location'";
          $query_run=mysqli_query($con,$query);
         while($row=mysqli_fetch_array($query_run))
          {
            ?>
<table cellpadding="10" cellspacing="5">
    <tr> <form action="" method="POST" >
        <tr><th>S.no</th><td><input type="text" name="S.no" value="<?php echo $row['sno'] ?>" readonly />  <br></td></tr>
        <tr><th>Organsiation</th><td><input type="text" name="Organisation_Name" value="<?php echo $row['organisation_name'] ?>" readonly/><br></td></tr>
        <tr><th>Post_office</th><td><input type="text" name="Locality" value="<?php echo $row['Locality'] ?>" readonly/><br></td></tr>
        <tr><th>Sub-Division</th> <td><input type="text" name="Sub_division" value="<?php echo $row['Local_area'] ?>" readonly/></td>
          <a href="check.php"><input type="button" name="button_for_sch" value="NEXT"><br></td></form></div></a></tr></form>
        <tr><th>District</th><td><input type="text" name="District" value="<?php echo $row['Distict'] ?>" readonly/><br></td></tr>
        <tr><th>State</th><td><input type="text" name="State" value="<?php echo $row['State'] ?>" readonly/><br></td></tr>
        <tr><th>PinCode</th> <td><input type="text" name="PinCode" value="<?php echo $row['PinCode'] ?>" readonly/><br></td></tr>
    </tr>
  </tr>
</table>
<?php
          }
          
      }?>