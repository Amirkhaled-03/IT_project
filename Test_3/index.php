<form method="Post">
    Username = <input type="text" name="Username" required />
    <br>
    Password = <input type="Password" name="Password" required />
    <br>
    <button name="Login" type="Submit">Login</button>
</form>


<?php
    $Username = "Abdelrahman elkot";
    $Password = "123456";

    if(isset($_POST['Login'])){
        $GetUsername = $_POST['Username'];
        $GetPassword = $_POST['Password'];
        
        if($Username === $GetUsername && $Password === $GetPassword){
            session_start();
            $_SESSION['User'] = $GetUsername;
            $_SESSION['Password'] = $GetPassword;
            $_SESSION['Login'] = True;
            echo "<script> location.replace('index2.php') </script>";
        }
        else{
            echo "اسم مستخدم و كلمة مرور غير صحيحه";
        }
    }
?>