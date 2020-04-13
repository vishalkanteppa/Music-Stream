<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="trial1.css">
    <link rel="shortcut icon" href="c1.jfif" />
</head>

<body>
    <div class="login-box">
        <img src="regback.jpe" class="df">
        <h1 style="text-align: center;">Login</h1>
        <form method="post" action="signin.php">
            <?php include('errors.php'); ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password </p>
            <input type="Password" name="password" placeholder="Enter Password">
            <input type="submit" name="login_user" value="Login">
            
            <a href="register.php">Dont have an account? Sign up!</a>
        </form>
    </div>
</body>

</html>