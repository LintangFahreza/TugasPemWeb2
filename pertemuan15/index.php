<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Login Page</h2>
    <form action="proseslogin.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>