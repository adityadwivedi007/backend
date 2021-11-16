<?php
session_start();
include "connection.php";


if($_SESSION['email']=='')
{
header('Location:login.php');

}
else
{
   $email= $_SESSION['email'];
    //echo "hello ".$email;
   $query1=mysqli_query($con,"Select admin_name from admin where admin_email='$email'") or die("Error in Query1");
   //echo $query;

    $row1=mysqli_fetch_array($query1);

echo "hello ".$row1['name'];


$query=mysqli_query($con,"Select * from accessories") or die("Error in Query");

echo "<table border=3><tr><td>ID</td><td>p_name</td><td>p_price</td><td>p_img</td><td>p_colour</td><td>p_catagory</td><td>p_details</td><td>Edit</td><td>Delete</td></tr>";
while($row=mysqli_fetch_array($query))
{
    $sid=$row['p_id'];
    echo "<tr>";
    echo "<td>".$sid."</td>";
    echo "<td>".$row['p_name']."</td>";
    echo "<td>".$row['p_price']."</td>";
    echo "<td> <img src =".$row['p_img']." width=auto height=150 </td>";
    echo "<td>".$row['p_color']."</td>";
    echo "<td>".$row['p_category']."</td>";
    echo "<td>".$row['p_details']."</td>";
    echo "<td><a href=update.php?sid=$sid>Edit</a></td>";
    echo "<td><a href=Delete.php?sid=$sid>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
}
?>