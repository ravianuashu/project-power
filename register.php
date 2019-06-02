<?php



?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration to MOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  
</head>
<body>


    
 <div class="container">
  <div class="login-box"> 
 <div class = "login-right">
  <h2> REGISTER HERE</h2>
             <P> Please fill in the details</P>
              <form action="registration.php" method="post">
                <div class="form-group">
              	  <label> Username</label>
              	   <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
              	  <label> Password</label>
              	   <input type="Password" name="password" class="form-control" required>
                </div><div></div>
                <button type="submit" class="btn btn-primary">REGISTER</button>
              </form>    
            </div>          
        </div>
</div>

<div class="button2">
  <ul>
 <li><a href="index.php" class="btn"> Home</a></li>
</ul>
</div>


</body>
</html>

        