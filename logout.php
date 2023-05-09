<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log out</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="logout" value="logout" />
    </form>
</body>
</html>

<?php
    // session_start();

    if (isset($_POST['logout'])){
        header('Location: index.html');
        session_unset();
        exit();
    }
?>