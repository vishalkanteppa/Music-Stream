<?php include('server.php') ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Register Now!</title>
        <link rel="stylesheet" type="text/css" href="trial.css">
        <link rel="shortcut icon" href="c1.jfif" />
    </head>

    <body>

        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="login-box">
                <img src="regback.jpe" class="df">
                <h1 style="text-align: center">Sign Up </h1>
                <form>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
                    <p>Password </p>
                    <input type="Password" name="password1" placeholder="Enter Password">
                    <p>Confirm Password </p>
                    <input type="Password" name="password2" placeholder="Re-enter Password ">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">            
      
                    <input type="submit" name="reg_user" value="Sign Up">

                </form>
            </div>
    </body>

    </html>