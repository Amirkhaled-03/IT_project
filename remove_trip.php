<?php

    $trips = json_decode(file_get_contents('trips.json'), true);

    $Id = $_POST['id'];

    foreach ($trips as $id => $trip) {
        if ($trip['id'] == $Id) {
        unset($trips[$id]);
        break;
        }
    }

    $new_id = 1;
    foreach ($trips as &$trip) {
        $trip['id'] = $new_id++;
    }

    file_put_contents('trips.json', json_encode($trips, JSON_PRETTY_PRINT));

    header('Location: admintrip.php');
    exit();

?>