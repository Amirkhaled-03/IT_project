<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = file_get_contents('data.json');
        $users = json_decode($data, true);


        $email = $_POST['email'];
        $password = $_POST['password'];


        foreach ($users as $user){
            if ($user !== null && $user['email'] === $email) {
                if (password_verify($password, $user['password'])){
                    if ($user['access'] == "admin"){
                        session_start();
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['password'] = $user['password'];
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['first_name'] = $user['first_name'];
                        $_SESSION['last_name'] = $user['last_name'];
                        $_SESSION['phone'] = $user['phone'];
                        $_SESSION['gender'] = $user['gender'];
                        $_SESSION['country'] = $user['country'];
                        header('Location: admin.php');
                        exit();
                    } else {
                        session_start();    
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['password'] = $user['password'];
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['first_name'] = $user['first_name'];
                        $_SESSION['last_name'] = $user['last_name'];
                        $_SESSION['phone'] = $user['phone'];
                        $_SESSION['gender'] = $user['gender'];
                        $_SESSION['country'] = $user['country'];
                        header('Location: tour.php');
                        exit();
                    }
                } else {
                    $password_invalid = true;
                    // include('log.php');
                    // exit();
                }
            }else{
                $emailNot_exist = true;
                // include('log.php');
                // exit();
            }
        }
    }