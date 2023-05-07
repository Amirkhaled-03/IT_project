<?php

    if($_SERVER["REQUEST_METHOD"] == "POST" ){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $confirm_password = $_POST['confirm_password'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $places = isset($_POST['places']) ? $_POST['places'] : array();
        $access = $_POST['access'];

        $users = json_decode(file_get_contents('data.json'), true);

        if (empty($users)) {
            $users = array();
        }

        foreach ($users as $user) {
            if ($user['email'] == $email) {
                $emailExist = true;
                include('add.php');
                exit();
            }
        }

        $id = 1;

        foreach ($users as $user){
            $user['id'] = $id++;
        }

        $user_data = [
            'access' => $access,
            'id' => $id,
            'username' => $first_name.'_'.$last_name.'#'.$id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'gender' => $gender,
            'country' => $country,
            'places' => $places
        ];

        $users[] = $user_data;
        $users_data = json_encode($users, JSON_PRETTY_PRINT);

        if(file_put_contents('data.json', $users_data)){
            header('Location:admin.php');
            exit();
        } else {
            echo "Failed to save registration data.";
        }
    }
?>

