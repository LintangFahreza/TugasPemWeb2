<?php
session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE usn = '$username' AND psw = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">Login Gagal, Username atau Password Salah.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            color: #007bff;
        }

        .container form {
            margin-top: 20px;
        }

        .container form label {
            color: #6c757d;
        }

        .container form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .container form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">PT Lintang Fahreza Jaya Abadi</h1>
        <hr style="border-top: 1px solid #007bff;">
        <h2 class="text-center mb-4">Login</h2>
        <form method="post" autocomplete="off">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary d-block w-100">Login</button>
        </form>
    </div>
</body>

</html>