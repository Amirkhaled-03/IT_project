
<?php   
            $data = file_get_contents('data.json');
            $data = json_decode($data, true);
            $index = $_GET['index'];
          
             unset($data[$index]);
            
             $data = json_encode($data, JSON_PRETTY_PRINT);
             file_put_contents('data.json', $data);
             header('location:admin.php');
             exit();

            ?>