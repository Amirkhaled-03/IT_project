<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $places = isset($_POST['places']) ? $_POST['places'] : array();
    $hometown = $_POST['hometown'];
    $phone = $_POST['phone'];

    if(true){
        $user_data = [
            'id' => uniqid(),
            'access' => 'user',
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'gender' => $gender,
            'hometown' => $hometown,
            'places' => $places
        ];

        $users_data = file_get_contents('./data.json');
        $users = json_decode($users_data, true);
        if($users === null){
            $users = array();
        }

        foreach ($users as $user) {
            if ($user !== null && $user['email'] == $email) {
                $emailExist = true;
                include('registration.php');
                exit;
            }
        }

        $users[] = $user_data;
        $users_data = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents('./data.json', $users_data);

        header('Location: registration.php');
        exit;
    }
}
    // $errors = array();
    // if(empty($username)){
    //     $errors[] = 'Username is required.';
    // }
    // if(empty($email)){
    //     $errors[] = 'Email is required.';
    // } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $errors[] = 'Email is invalid.';
    // }
    // if(empty($password)){
    //     $errors[] = 'Password is required.';
    // } elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password))
    // if($password !== $confirm_password){
    //     $errors[] = 'Password do not match.';
    // }

    // $errors = array();
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = "Invalid email format";
    //   }
    //   if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
    //     $errors[] = "Password must contain at least one lowercase letter, one uppercase letter, one number, one special character, and be at least 8 characters long";
    //   }
    //   if ($password !== $confirm_password) {
    //     $errors[] = "Passwords do not match";
    //   }
?>

