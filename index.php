<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website - Home</title>

    <link rel="stylesheet" href="style1.css">
</head>

<body>

<div class="home">

    <nav class="navbar">
        <h2>My Website</h2>

        <div>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="register.php">Sign Up</a>
        </div>
    </nav>

    <div class="hero">

        <h1>Welcome to My Website</h1>

        <p>
            Create your account and get started today.
        </p>

        <div class="buttons">
            <a href="register.php" class="btn">Create Account</a>
            <a href="login.php" class="btn login-btn">Login</a>
        </div>

    </div>

</div>

</body>
</html>
