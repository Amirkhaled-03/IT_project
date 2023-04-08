<?php
    $Username = "Abdelrahman elkot";
    $Password = "123456";
    session_start();
    if(isset($_SESSION['User']) && isset($_SESSION['Password']) && isset($_SESSION['Login'])){
        if($Username === $_SESSION['User'] && $Password === $_SESSION['Password']){
        echo "Wlcome $Username";
        echo '<form method="Post"> <button name="Logout" type="Submit"> Logout </button> </form>';
        }
    }
    else{
        echo "<script> location.replace('index.php'); </script>";
    }
    if(isset($_POST['Logout'])){
        echo "<script> location.replace('index.php'); </script>";
        session_unset();
    }
?>