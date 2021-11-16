<?php
include 'connection.php';
?>

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

<div class="container mt-5">
  <div class="row">
    <div class="col">
    <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Sample image">
      </div>
    </div>
    <div class="col">
        <form method ="post">
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
        <button type="submit" name="login" class="btn btn-primary">Login</button>
        <button type="submit" name="signup" class="btn btn-primary">Signup</button>
    </form>
    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin` WHERE admin_email = '$email' AND admin_password = '$password';";
        echo $sql;
        
        $query = mysqli_query($con,$sql) or die("Error in query");
        $rows=mysqli_num_rows($query);

        if($rows>0){
            session_start();
            $_SESSION['email'] = $email;
            header('Location:Deskboad.php');
        }
        else{
            echo "Incorrect Username or password";
        }
    }
    else if(isset($_POST['signup'])){
        header('Location:signup.php');
    }       
    ?>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
mysqli_close($con);
?>