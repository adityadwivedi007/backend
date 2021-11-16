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
<form method ="post">

        <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="id" class="form-control" name ="id" id=" " aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="name" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="input text" class="form-control" name ="email" id="price" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="img" class="form-label"><img></label>
            <input type="file" class="form-control" name="img" id="img">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">color</label>
            <input type="color" class="form-control" name ="color" id="color" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="subctagiour" class="form-label">subctagiour</label>
            <input type="subctagiour" class="form-control" name="subctagiour" id="subctagiour">
        </div> <div class="mb-3">
            <label for="details" class="form-label">details</label>
            <input type="details" class="form-control" name ="details"id="details" aria-describedby="emailHelp">
        </div>

        <button type="submit" name="insert" class="btn btn-primary">insert</button>
</div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
 error_reporting(0);
 include "connection.php";
if(isset($_GET['Insert']))
{
    $p_id=$_GET['id'];
    $p_name=$_GET['name'];
    $p_price=$_GET['price'];
    $p_img=$_GET['img'];
    $p_color=$_GET['color'];
    $p_subcatagiour=$_GET['subcatagiour'];
    $p_details=$_GET['details'];

 
    // $p_email=$_GET['email'];
    // $p_password=$_GET['password'];
   

// echo $id;

$sql = "INSERT INTO Handbages (p_id, p_name, p_price, p_img, p_color, p_subcatagious, p_catagioes, p_details) VALUES (, '$p_id', '$p_name', '$p_price', '$p_img', ' $p_color', ' $p_subcatagiour', '$p_details')";
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