<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
      .cen{
        text-align:center;
      }
    </style>
  </head>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid  text-white">
    <a class="navbar-brand text-white"><h1>My store</h1></a>
   <span>
   <i class="fas fa-user-shield"></i>
      hello,|
   <i class="fas fa-sign-out-alt"></i>
   <a href="" class ="text-decoration-none text-white">logout</a> |
   <a href="" class ="text-decoration-none text-white">userpanel</a>
</span>
</div>
</nav>


<table class="table cen">
  <thead>
    <tr>
      
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">img</th>
      <th scope="col">price</th>
      <th scope="col">Description</th>
      <th scope="col">catagory</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
<?php
include 'connection.php';
$query=mysqli_query($con,"Select * from accessories") or die("Error in Query");
while($row=mysqli_fetch_array($query))
{
  $id= $row['p_id'];
  $name= $row['p_name'];
  $img = $row['p_img'];
  $price = $row['p_price'];
  $color = $row['p_color'];
  ?>
    <tr>

      
      <td><?php echo $id?></td>
      <td><?php echo $name ?></td>
      <td><img src ="<?php echo $img ?>" width=auto height="100"></td>
      <td><?php echo $price ?></td>
      <td><?php echo $color ?></td>
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
    </tr> -->
    <?php
}
   ?>
  </tbody>
</table>
                     
  </thead>
  <tbody>
 
  </tbody>
</table>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>