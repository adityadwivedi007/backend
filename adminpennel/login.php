<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method ="post">
    email:  <input type="text" name ="email"> <br> <br>
    password: <input type="password" name="password"> <br><br>   
    <input type="submit" name="Login" value="Login">
    <input type="submit" name="signup" value="Signup">
</form>
</body>
</html>

<?php
include  'connection.php';
if(isset($_POST['Login']))
{
    $semail = $_POST['email'];
    $spassword=$_POST['password'];

    $sql = "SELECT * FROM  product  WHERE email ='$semail' AND password ='$spassword';";
    echo $sql;
    
    $query=mysqli_query($con,$sql) or die("Error in query");

    $rows=mysqli_num_rows($query);
    if($rows>0)
    {
        session_start();
        $_SESSION['email']=$semail;
        
        header('Location:daskboard.php');
        
    }
    else
    {
        echo "Incorrect Username or password";
    }
}
            else if(isset($_POST['signup']))
            {
            header('Location:signup.php');
            }
            mysqli_close($con);       
?>

