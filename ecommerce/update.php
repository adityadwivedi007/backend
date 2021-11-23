<?php
 include "connetion.php";

 $uid=$_GET['sid'];
 //echo $uid;

$sql="select * from catagory where cat_id=$uid";
$query = mysqli_query($con ,$sql) or die("Error in Query");
$arr= mysqli_fetch_array($query);
$oname=$arr['cat_name'];
$otable=$arr['cat_table'];
$oimg=$arr['cat_img'];
?>

<html>
<body>
    

<form method="post">

 <input type="text" name="name" value = <?php echo $oname;?>><br/>
<input type="text" name="table"  value = <?php echo $otable;?>><br/>
<input type="text" name="img"  value = <?php echo $oimg;?>><br/>



<input type="submit" value="update" name="update" />
<input type="Reset">
</form>
</body>
</html>

<?php
 include "connetion.php";

if(isset($_POST['update']))
{
$nname=$_POST['name'];
$naddress=$_POST['address'];
$nphone=$_POST['phone_no'];
$nemail=$_POST['email'];
$npassword=$_POST['password'];



$sql3="update catagory set name ='$cat_name',table ='$cat_table',img=$cat_img, where id='$uid'";
echo $sql3;

$query3= mysqli_query($con,$sql3) or die("error in query");


if($query3)
{
    echo "connected query";
}
else
{
    echo " not connected";
}
mysqli_close($con);
}

?>