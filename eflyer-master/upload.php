<?php
include 'connection.php';
?>



<html>

<head>
<title>PHP File Upload example</title>
</head>
<body>

<form action="upload.php" enctype="multipart/form-data" method="post">
Id:
<input type-="text" name="id"/><br/>
 Name:
<input type-="text" name="id"/><br/>
 price: 
<input type-="text" name="id"/><br/>
 color:
<input type-="text" name="id"/><br/>
 image: 
<input type-="text" name="id"/><br/>
subcatagious:
<input type-="text" name="id"/><br/>
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name=""> <br/>

<a href="imgshow.php">Image</a>
</form>
<?php

if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
$filepath = "images/" . $_FILES["file"]["name"];

$sql = "insert into product_detalis (id,img_url) VALUES ($id,'$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>