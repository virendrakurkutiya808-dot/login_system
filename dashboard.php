<?php
include "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="form-box dashboard">

        <h2>Welcome!</h2>

        <p>
            Hello,
            <strong>
                <?php echo htmlspecialchars($_SESSION["user_name"]); ?>
            </strong>
        </p>

        <p>
            Email:
            <?php echo htmlspecialchars($_SESSION["user_email"]); ?>
        </p>

        <a class="logout" href="logout.php">
            Logout
        </a>

    </div>

</div>

</body>
</html>
