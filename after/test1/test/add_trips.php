<?php

    $trips = json_decode(file_get_contents('trips.json'), true);

    $image =$_POST['image'];
    $name = $_POST['destination'];
    $hotel_details = $_POST['hotel'];
    $from_date_time = $_POST['from_date'];
    $to_date_time = $_POST['to_date'];
    $excursions = $_POST['excursions'];
    $price = $_POST['price'];
    $services = isset($_POST['services']) ? $_POST['services'] : array();

    $id = 1;

    foreach ($trips as $trip){
        $trip['id'] = $id++;
    }

    $newtrip = [
        'image' => $image,
        'id' => $id,
        'destination' => $name,
        'hotel' => $hotel_details,
        'from_date' => $from_date_time,
        'to_date' => $to_date_time,
        'excursions' => $excursions,
        'price' => $price,
        'services' => $services
    ];

    $trips[] = $newtrip;

    file_put_contents('trips.json', json_encode($trips, JSON_PRETTY_PRINT));

    header('Location: test1.php');
    exit();
?>