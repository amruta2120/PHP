<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobail=$_POST['mobail'];
    $password=$_POST['password'];
    $sql = "insert into curd(name,email,mobail,password)values('$name','$email','$mobail','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curd Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
  <label>Name : </label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" >
  </div>

  <div class="mb-3">
  <label>Email : </label>
    <input type="text" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" >
  </div>

  <div class="mb-3">
  <label>Mobail : </label>
    <input type="text" class="form-control" placeholder="Enter phone number" name="mobail" autocomplete="off">
  </div>

  <div class="mb-3">
  <label>Password : </label>
    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>    
  </body>
</html>