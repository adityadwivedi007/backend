<?php
    include "connection.php";
    session_start();
    $email = $_SESSION['email'];
    if($_SESSION['email']==''){
        header('location:login.php');
    }
    else{
    $sql = "SELECT * FROM admin WHERE admin_email='$email'";
    $query = mysqli_query($con,$sql) or die("Error in query");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>








<!-- old one -->
    <div class="container">
        <?php
            echo "<h3> Hello, ",$row['admin_name'],"</h3>";
        ?>
        <form method="post"  style ="margin-left: 1273px">
        <input type="submit" name="logout" value="logout">
        </form>
        <?php
        if(isset($_POST['logout'])){
            header('Location:logout.php');
        }
        ?>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Color</th>
            <th scope="col">Catagry</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
        $query=mysqli_query($con,"Select * from product_detalis") or die("Error in Query");        
        while($row=mysqli_fetch_array($query))
        {
            $uid=$row['p_id'];

            // echo "";
            echo "<tr>";
            echo "<th scope=row>".$uid."</th>";
            echo "<td>".$row['p_name']."</td>";
            echo "<td>".$row['p_price']."</td>"; 
            echo "<td>".$row['p_color']."</td>"; 
            echo "<td>".$row['p_subcatagious']."</td>";
            echo "<td><a href=update.php?id=$admin_id>Edit</a></td>";
            echo "<td><a href=delete.php?id=$admin_id>Delete</a></td>";
            echo "</tr>";
            // echo "";
        }
        ?>
        </tbody>
        </table>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

<?php
mysqli_close($con);
}
?>