<?php
$conn=mysqli_connect("localhost","root","","test");
  
          $query="SELECT i_date,location,supply_rate,mtime_from,mtime_to,etime_from,etime_to,ntime_from,ntime_to FROM daily_schedule,power_house_table where daily_schedule.location=power_house_table.Local_area";
          $query_run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($query_run))
          {
            ?>
<table border="10">
    <tr>
        <th>Date</th>
        <th>Location</th>
        <th>Supply_Rate</th>
        <th>Morning From</th>
        <th>Morning To</th>
        <th>Evening From</th>
        <th>Evening To</th>
        <th>Night From</th>
        <th>Night To</th>
    </tr>
           <tr > <form action="" method="POST" >
            <td><input type="text" name="i_date" value="<?php echo $row['i_date'] ?>" readonly />  <br></td>
            <td><input type="text" name="location" value="<?php echo $row['location'] ?>" readonly/><br></td>
            <td><input type="text" name="supply_Rate" value="<?php echo $row['supply_rate'] ?>" readonly/><br></td>
          <td><input type="text" name="mtime_from" value="<?php echo $row['mtime_from'] ?>" readonly/>
            <td><input type="text" name="mtime_to" value="<?php echo $row['mtime_to'] ?>" readonly/><br></td>
            <td><input type="text" name="etime_from" value="<?php echo $row['etime_from'] ?>" readonly/><br></td>
            <td><input type="text" name="etime_to" value="<?php echo $row['etime_to'] ?>" readonly/><br></td>
            <td><input type="text" name="ntime_from" value="<?php echo $row['ntime_from'] ?>" readonly/><br></td>
            <td><input type="text" name="ntime_to" value="<?php echo $row['ntime_to'] ?>" readonly/><br></td>
</form></tr>
</table>
<?php
          }
      ?>

