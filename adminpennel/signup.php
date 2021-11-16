<html>
<body>
<form method="get">

Name: <input type="text" name="name"><br/>

email<input type="text" name="email"><br/>
password<input type="password" name="password"><br/>


<input type="submit" value="signup" name="signup">

</form>
</body>
</html>

<?php

 include "connection.php";
if(isset($_GET['signup']))
{
  
    $sname=$_GET['name'];
    $semail=$_GET['email'];
    $spassword=$_GET['password'];
   
$sql="Insert into product(name,email,password) values('$sname','$semail','$spassword')";
//echo $sql;

$query=mysqli_query($con,$sql) or die("Error in query");
 
if($query)
{
    echo "data Inserted";
    header('location:login.php');
}
else
{
    echo "data not Inserted";
}

mysqli_close($con);
}
?>