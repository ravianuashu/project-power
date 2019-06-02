
<html>
<head>
  <title>login to MOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  
</head>
<body>
  <div class="container">
  <div class="login-box"> 
     <div class="row"> 
         <div class = "col-md-6 login-left">
              <h2> LOGIN HERE</h2>
              <p> Please fill in the details</p>
              <form action="validation.php" method="post"> 
                <div class="form-group">
                  <label> Username</label>
                   <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label> Password</label>
                   <input type="Password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </form>    

          </div>
        </div>
      </div>
    </div>
 
  <div class="button">
    <ul><li><a href="register.php" class="btn"> Register</a></li></ul>
  </div>
   <div class="button1">
    <ul><li><a href="index.php" class="btn"> Home</a></li></ul>
    </div>
  
</div>



</body>
</html>

