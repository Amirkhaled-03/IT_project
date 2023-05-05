<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>admin</title>

    <!-- the main stylesheet -->
    <link rel="stylesheet" href="admin1.css">
    <!-- render all the elememts -->
    <link rel="stylesheet" href="normalize.css">
    <!-- font awesome libirary -->
    <link rel="stylesheet" href="all.min.css">
    <!-- google  font sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 
</head>


<body>
    <a href="add.php" class="btn btn-primary">Add</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>phone Num</th>
            <th>Country</th>
            <th>Email</th>
            <th>access</th>
            <th>Action</th>
        </tr>  
        </thead>
        <tbody>
            <?php   
            $data = file_get_contents('data.json');
            $data = json_decode($data, true);
            $count =0;
            $userscount= 0;
            $adminscount= 0;
            foreach($data as $num){
                if (isset($num['username'])){
                    $count++;
                }
                else{
                    break;
                }
            }
            echo 'All accounts',' ' . $count;
            foreach($data as $num){
                if (isset($num['access']) && $num['access'] == 'user'){
                    $userscount++;
                }
                else{
                    break;
                }
            }
            echo 'Users',' ' . $userscount;
            foreach($data as $num){
                if (isset($num['access']) && $num['access'] == 'admin' ){
                    $adminscount++;
                }
                else{
                    break;
                }
            }
            echo 'Admins',' ' . $adminscount;
            $index = 0;
            foreach($data as $row){
                echo '<tr>';
                    echo '<td>' . $row['id']        .'</td>';
                    echo '<td>' . $row['username']        .'</td>';
                    echo '<td>' . $row['first_name'] .' ' . $row['last_name']         .'</td>';
                    echo '<td>' . $row['phone']        .'</td>';
                    echo '<td>' . $row['country']        .'</td>';
                    echo '<td>' . $row['email']        .'</td>';
                    echo '<td>' . $row['access']        .'</td>';
                    // echo '<td>' . $row['password']        .'</td>';
                    echo "
                            <td>
                            <a href= 'edit.php?index=".$index."' class='btn btn-success btn-sm'>Edit</a>
                            <a href='Test.php?action=delete&index=".$index."'>Delete</a>
                            </td>                  
                    
                    
                    ";
                echo '</tr>';    

            $index++;

            }
            


            ?>
        </tbody> 

    </table>

    
</body>
</html>

<?php 


   
//     $data = file_get_contents('data.json');
//     $data = json_decode($data, true);
//     $userid = $_GET['userid'];
//     foreach($data as $row){
//     if ($row['id'] == $userid){
//         unset($data[$userid]);
//     }
// }
//              $data = json_encode($data, JSON_PRETTY_PRINT);
//              file_put_contents('data.json', $data);
            

//  if(isset($_GET['action']) && $_GET['action'] == 'delete'){
//     $data = file_get_contents('data.json');
//     $data = json_decode($data, true);
//     $userid = $_GET['userid'];

//    foreach($data as $row){
//         if ($row['id'] == $userid){
//             unset($data[$userid]);
//     }
// }
//     $data = json_encode($data, JSON_PRETTY_PRINT);
//     file_put_contents('data.json', $data);
//    header('location:admin.php');
//    exit();}
?> 
