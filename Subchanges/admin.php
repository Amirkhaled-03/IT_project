<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>admin</title>

    <!-- the main stylesheet -->
    <link rel="stylesheet" href="css/admin.css">
    <!-- render all the elememts -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font awesome libirary -->
    <link rel="stylesheet" href="css/all.min.css">
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
            <th>Name</th>
            <th>phone Num</th>
            <th>access</th>
            <th>Email</th>
        </tr>  
        </thead>
        <tbody>
            <?php   
            $data = file_get_contents('data.json');
            $data = json_decode($data, true);
            $count =0;
            foreach($data as $num){
                if (isset($num['username'])){
                    $count++;
                }
                else{
                    break;
                }
            }
            echo 'Users counter','<br>' . $count;
            $index = 0;
            foreach($data as $row){
                echo '<tr>';
                    echo '<td>' . $row['id']        .'</td>';
                    echo '<td>' . $row['username']        .'</td>';
                    echo '<td>' . $row['phone']        .'</td>';
                    echo '<td>' . $row['access']        .'</td>';
                    echo '<td>' . $row['email']        .'</td>';
                    // echo '<td>' . $row['password']        .'</td>';
                echo '</tr>';    

            $index++;

            }

            ?>
        </tbody>

    </table>

    
</body>
</html>
