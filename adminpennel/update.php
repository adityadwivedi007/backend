<?php
 error_reporting(0);
 session_start();

 include "connection.php";

 $uid=$_GET['id'];
 //echo $uid;



    $sql="select * from product where id=$uid";
    echo $sql;
    $query = mysqli_query($con ,$sql) or die("Error in Query");
    $arr= mysqli_fetch_array($query);
    $oname=$arr['name'];
    $oemail=$arr['email'];
    $opassword=$arr['password'];
    ?>

<html>
<body>
    

<form method="post">

 <input type="text" name="name" value = <?php echo $oname;?>><br/>
<input type="text" name="email"  value = <?php echo $oemail;?>><br/>
<input type="text" name="password"  value = <?php echo $opassword;?>><br/>


<input type="submit" value="update" name="update" />
<input type="Reset">
</form>
</body>
</html>

<?php

   if(isset($_POST['update']))
   {
   $nname=$_POST['name'];
   $nemail=$_POST['email'];
   $npassword=$_POST['password'];
   
   
   // $sql3="update product set name='$nnmae' ,email=$nemail',password=$npassword' where id='$uid";
   $sql3="update product set name ='$nname',email='$nemail',password='$npassword' where id='$uid'";
   echo $sql3;
   
   $query3= mysqli_query($con,$sql3) or die("error in query");
   
   
   if($query3)
   {
       echo "connected query";
   }
   else
   {
       echo "not connected";
   }
   }
   
?>