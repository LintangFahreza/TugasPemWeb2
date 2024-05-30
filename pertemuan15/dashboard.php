<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Role kamu adalah : <?php echo $_SESSION['role']; ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>