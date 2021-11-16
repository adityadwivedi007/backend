<html>
<body>
<form method="get">
Id: <input type="text" name="id"><br/>
Name: <input type="text" name="name"><br/>
email<input type="text" name="email"><br/>
password<input type="password" name="password"><br/>


<input type="submit" value="Insert" name="Insert"/>

</form>
</body>
</html>

<?php
 error_reporting(0);
 include "connection.php";
if(isset($_GET['Insert']))
{
    $p_id=$_GET['id'];
    $p_name=$_GET['name'];
 
    $p_email=$_GET['email'];
    $p_password=$_GET['password'];
   

echo $id;

$sql="Insert into product(id,names,email,password) values($p_id,'$p_name','$p_email','$p_password')";
echo $sql;

$query=mysqli_query($con,$sql) or die("Error in connection");
 
if($query)
{
    echo "data Inserted";
}
else
{
    echo "data not Inserted";
}

mysqli_close($con);
}
?>