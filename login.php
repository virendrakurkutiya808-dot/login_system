<?php
include "config.php";

$message = "";

if (isset($_POST["login"])) {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $message = "Please enter email and password.";
    } else {

        $stmt = $conn->prepare(
            "SELECT id, name, email, password FROM users WHERE email = ?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $user = $result->fetch_assoc();

            if (password_verify($password, $user["password"])) {

                $_SESSION["user_id"] = $user["id"];
                $_SESSION["user_name"] = $user["name"];
                $_SESSION["user_email"] = $user["email"];

                header("Location: index.php");
                exit();

            } else {
                $message = "Incorrect password.";
            }

        } else {
            $message = "No account found with this email.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <form class="form-box" method="POST">

        <h2>Welcome Back</h2>

        <?php if ($message != ""): ?>
            <div class="message">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit" name="login">
            Login
        </button>

        <p>
            Don't have an account?
            <a href="register.php">Sign Up</a>
        </p>

    </form>

</div>

</body>
</html>
