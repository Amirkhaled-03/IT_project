<?php include('login.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/all.min.css">
        <!-- google  font sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <title>login</title>
    </head>
    <body>
    <div class="container"> 
        <div class="box">
            <h1>Login</h1>
            <form method="post">
                <label for="email">Email</label>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <input type="email" placeholder="Enter Your Email" name="email" id="email" required />
                    <?php
                        if(isset($emailNot_exist)) echo "<script>alert('Email Not Exist Please Check Your email');</script>";
                    ?>
                </div>
                
                <label for="password">Password</label>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Enter Your Password" name="password" id="password" required />
                    <?php
                        if(isset($password_invalid)) echo "<script>alert('Wrong password Try agian');</script>";
                    ?>
                </div>

                <a href="#" class="forget">Forget password?</a>
                <input type="submit" name="login" value="Login" class="submit" />
               
                <p>Don't have an account<a href="registration.php" class="registration">sign up</a></p>
            </form>
        </div>
      </div>
</body>
</html>