<?php
$user = 'lintang';
$pass = md5('admin');


session_start();


if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == $user) {
        $_SESSION['login'] = TRUE;
        header('Location: ./home.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Remember Me</title>
</head>

<body>
    <form action="aksi.php" method="post">
        <p><label for="username">Username:</label> <input type="text" name="username" /></p>
        <p><label for="password">Password:</label> <input type="password" name="password" /></p>
        <p><label for="remember"><input type="checkbox" name="remember" value="true" /> Remember Me</label></p>
        <p>
            <button type="submit" name="login">Login</button>
            <button type="reset" name="reset">Reset</button>
        </p>
    </form>
</body>

</html>