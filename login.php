<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login` (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo ", Data inserted successfully...";
    } else {
        die(mysqli_error($conn));
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
<title>Login page</title>
</head>
  <body>

    <h1 class="text-center mt-5">Login Page</h1>
    <div class="container mt-5">
    <form action="login.php" method="post"> 

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="name" class="form-control"   placeholder="Enter username" name="username">

  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Enter Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary w-100 mt-5">Submit</button>
</form>

    </div>
    
  </body>
</html>