<html>
<head>
   <title> SEND SMS</title>
   <link rel ="stylesheet" type="text/css" href="style1.css">

</head>

<body background="images/fountain.jpg">
<center><h1><font color="red">Alert!</font></h1></center>
  <div class="container" style="border:1px solid black;">
      <div class="row">
          <div class ="col-sm-12">
             <form ation ="send_sms.php" method="POST">
               <div class ="form-group">
                  <lable1> <b>Mobile No</b>:</lable1> &nbsp
                  <input type="text" name="mno" class="form-control" placeholder="Mobile No">
                  </div><br>
                  <div class="form-group">
                     <lable1><b>Message</b> :</lable1>
                     <textarea class="form-control" name="msg" placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                  </div><br>
                  <div class="form-group" >
                     <input type ="submit" name="ok" class="button" value="send" >
                  </div>
               </form>
             </div>
            </form>
          </div>
         </div>	
        </div>
</body>

<?php
if(isset($_POST['ok']))
{
$mobile=$_POST['mno'];
$message=$_POST['msg'];
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9871379109&Password=qwerty123456&Message=".urlencode($message)."&To=".$mobile."&Key=creatIz87U1mBAnqtTv09F5baJPyH") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
}
?>
                            

                            

                            



</html>
