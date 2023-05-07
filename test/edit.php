<?php

    $trips = json_decode(file_get_contents('./trips.json'), true);
    if(isset($_GET['index'])){
        $index = $_GET['index'];
    } 
    
    if(isset($_POST['save'])){
          

        $input = [
            'image' => $_POST['image'],
            'id' => $_POST['id'],
            'destination' => $_POST['destination'],
            'hotel' => $_POST['hotel'],
            'from_date' => $_POST['from_date'],
            'to_date' => $_POST['to_date'],
            'excursions' => $_POST['excursions'],
            'price' => $_POST['price'],
            'services' => $_POST['services']
        ];

        $trips[$index] = $input;
        $trips = json_encode($trips , JSON_PRETTY_PRINT);
        file_put_contents('trips.json',$trips);
                   
        header('location:admin.php');
        exit();
    
    }
    foreach($trips as $trip)

?>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
    <a href="admin.php">Back</a>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <div>
            <label>image</label>
        </div>
        <div>
            <input type="text" id="image" name="image" value="<?php echo $trip['image'] ?>">
        </div>
        <div>
        <div>
            <label>ID</label>
        </div>
        <div>
            <input type="text" id="id" name="id" value="<?php echo $trip['id'] ?>">
        </div>
        <div>
            <label>destination</label>
        </div>
        <div>
            <input type="text" id="destination" name="destination" value="<?php echo $trip['destination'] ?>">
        </div>
        <div>
            <label>hotel</label>
        </div>
        <div>
            <textarea name="hotel" id="hotel" value="<?php echo $trip['hotel'] ?>" ></textarea>
        </div>
        <div>
            <label>from_date</label>
        </div>
        <div>
            <input type="datetime-local" id="from_date" name="from_date" value="<?php echo $trip['from_date'] ?>">
        </div>
        <div>
            <label for="to_date">to_date</label>
        </div>
        <div>
            <input type="datetime-local" id="to_date" name="to_date" value="<?php echo $trip['to_date']?>">
        </div>
        <div>
            <label>excursions</label>
        </div>
        <div>
            <textarea name="excursions" id="excursions" value="<?php echo $trip['excursions']?>"></textarea>
        </div>
        <div>
            <label>price</label>
        </div>
        <div>
            <input type="number" id="price" name="price" value="<?php echo $trip['price']?>">
        </div>
        <div>
            <label>services</label>
        </div>
        <div>
            <textarea name="services" id="services" value="<?php echo $trip['services']?>"></textarea>
        </div>
        <div>
            <input type="submit" name="save" value="Save">
        </div>
    </form>
    

</body>

</html>