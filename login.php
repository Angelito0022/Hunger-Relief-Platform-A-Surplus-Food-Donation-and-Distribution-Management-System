<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login` (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data inserted successfully...";
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
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 80px;
        }
        .login-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }
    </style>
</head>
<body>

    <h1 class="text-center mt-5 text-primary">Welcome to the Login Page</h1>
    <div class="container">
        <div class="login-container">
            <h2 class="login-title text-center mb-4">Please Sign In</h2>
            <form action="login.php" method="post"> 
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>
