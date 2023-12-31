<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appetite-Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>Login Here</h3>

        <label for="username">E-mail</label>
        <input type="email" placeholder="Email" id="username" name="email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <input type="submit" name="submit" class="login_btn" value="Login" />
        <a href="signup.php" id="singup_link" >create new account</a>
    </form>
</body>

</html>

<?php

include "../server/login.php";

?>