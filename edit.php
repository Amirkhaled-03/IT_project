<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
  $data = file_get_contents('data.json');
  $data = json_decode($data,true);
     $index = $_GET['index'];

      if(isset($_POST['save'])){
      
            foreach($data as $row){
                $password = $row['password'];
                $id = $row['id'];
                $username = $row['username'];
                $gender = $row['gender'];
                $places = $row['places'];
            }
                $input = [
                    'access' => $_POST['access'],
                    'id' => $id,
                    'username' => $username,
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'password' => $password,
                    'gender' => $gender,
                    'country' => $_POST['country'],
                    'places' => $places             
                ];
                $data[$index] = $input;
                $data = json_encode($data , JSON_PRETTY_PRINT);
                file_put_contents('data.json',$data);
               
                header('location:admin.php');
                exit();

            }


    foreach($data as $row)

?>
<a href="admin.php">Back</a>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <div>
            <label>ID</label>
        </div>
        <div>
            <input type="text" id="id" name="id" value="<?php echo $row['id'] ?>">
        </div>
        <div>
            <label>username</label>
        </div>
        <div>
            <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>">
        </div>
        <div>
            <label>Firstname</label>
        </div>
        <div>
            <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name'] ?>">
        </div>
        <div>
            <label>Last name</label>
        </div>
        <div>
            <input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name'] ?>">
        </div>
        <div>
            <label>Phone Number</label>
        </div>
        <div>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone']?>">
        </div>
        <div>
            <label>Country</label>
        </div>
        <div>
            <input type="text" id="country" name="country" value="<?php echo $row['country']?>">
        </div>
        <div>
            <label>Email</label>
        </div>
        <div>
            <input type="text" id="email" name="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <label>access</label>
        </div>
        <div>
            <input type="text" id="access" name="access" value="<?php echo $row['access']?>">
        </div>
        <div>
            <input type="submit" name="save" value="Save">
        </div>
    </form>
    
</body>

</html>



