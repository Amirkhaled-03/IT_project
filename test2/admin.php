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
    <header>
        <div class="logo">
            <img src="bb.png" alt="">
        </div>
        <div class="links">
            <ul>
                <li><a href="">log out</a></li>
                <li><a href="">Trip managments</a></li>
            </ul>
        </div>
    </header>
    
   
  

   <div class="container">
     <div class="info">
        
        <?php
         $data = file_get_contents('data.json');
         $data = json_decode($data, true);
        ?>
          <div class="access_info ">
          <div class="all_acounts all">
                <?php
                $count =0;
                foreach($data as $num){
                    if (isset($num['username'])){
                        $count++;
                    }
                    else{
                        break;
                    }
                }
                echo 'All accounts' ;
                
                ?>
               
               <div><?php echo $count;?></div> 
                
                 
            </div>

            <div class="user all">
                <?php
                $userscount= 0;
                foreach($data as $num){
                    if (isset($num['access']) && $num['access'] == 'user'){
                        $userscount++;
                    }
                    else{
                        break;
                    }
                }
                echo 'Users' ;
                ?>
                <div><?php echo $userscount;?></div> 
            </div>
           
           <div class="admins all">
            <?php
                    $adminscount= 0; 
                    foreach($data as $num){
                    if (isset($num['access']) && $num['access'] == 'admin' ){
                        $adminscount++;
                    }
                    else{
                        break;
                    }
                }
                echo 'Admins';
                ?>
                <div><?php echo $adminscount;?></div> 

           </div>
          </div>


     <table>
        <thead>
         <tr>
            <th>ID</th>
            <th >Username</th>
            <!-- <th>Name</th> -->
            <th class="a">phone Num</th>
            <!-- <th>Country</th> -->
            <th>Email</th>
            <th>Booked trips</th>
            <th>access</th>
            <th>Action</th>
        </tr>  
        </thead>
        <tbody>
            <?php   
            $data = file_get_contents('data.json');
            $data = json_decode($data, true);
            
            $index = 0;
            foreach($data as $row){
                echo '<tr>';
                    echo '<td>' . $row['id']        .'</td>';
                    echo '<td>' . $row['username']        .'</td>';
                    // echo '<td>' . $row['first_name'] .' ' . $row['last_name']         .'</td>';
                    echo '<td>' . $row['phone']        .'</td>';
                   // echo '<td>' . $row['country']        .'</td>';
                    echo '<td>' . $row['email']        .'</td>';
                    echo '<td class="ramir">','to be continue' ,'</td>';
                    echo '<td>' . $row['access']        .'</td>';
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

    </div>
    <a href="add.php" class="btn btn-primary add">Add</a>


   <!-- </div> -->
    
</body>
</html>


