<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$_SESSION['username'] = $username;
$_SESSION['role'] = $role;


header("Location: dashboard.php");
exit();
