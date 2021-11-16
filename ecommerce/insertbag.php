<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class ="container" style ="margin-top: 93px;">
<form method ="post"  enctype="multipart/form-data">
          


        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="name" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="input text" class="form-control" name ="price" id="price" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="file" id="img">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">color</label>
            <input type="text" class="form-control" name ="color" id="color" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="category" class="form-control" name="category" id="category">
        </div> <div class="mb-3">
            <label for="details" class="form-label">details</label>
            <input type="details" class="form-control" name ="details"id="details" aria-describedby="emailHelp">
        </div>

        <button type="insert" name="insert" class="btn btn-primary">Insert</button>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
 include "connection.php";
if(isset($_POST['insert']))
{
    $p_name=$_POST['name'];
    $p_price=$_POST['price'];
    $filepath= "images/".$_FILES['file']['name'];
    $p_color=$_POST['color'];
    $p_category=$_POST['category'];
    $p_details=$_POST['details'];

echo $id;

$sql = "INSERT INTO Handbag (p_name, p_price, p_img, p_color, p_category, p_details) VALUES ('$p_name','$p_price','$filepath','$p_color', '$p_category', '$p_details')";
 echo $sql;

// $query=mysqli_query($con,$sql) or die("Error in Query");
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
 
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