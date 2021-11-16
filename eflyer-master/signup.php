<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<form method ="post"   style=" width: 50%;margin-left: 491px;margin-top: 186px;">
<div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" name ="name" id="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name ="email" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberme">
            <label class="form-check-label" name="rememberme" for="exampleCheck1">Remember Me</label>
        </div>
       
        <button type="submit" name="signup" class="btn btn-primary">Signup</button>
    </form>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php

 include "connection.php";
if(isset($_POST['signup']))
{
    $admin_name = $_POST['name'];
    $admin_email = $_POST['email'];
    $admin_password = $_POST['password'];
   
$sql = "INSERT INTO admin (admin_name, admin_email, admin_password) VALUES ('$admin_name', '$admin_email', '$admin_password');";
echo $sql;

$query=mysqli_query($con,$sql);
 
if($query)
{
    echo "data Inserted";
    header('location:login.php');
}
else
{
    echo "data not Inserted";
}
}
mysqli_close($con);
?>