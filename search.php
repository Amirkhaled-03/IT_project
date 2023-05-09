<?php
    $trips = json_decode(file_get_contents('trips.json'),true);

    $users = json_decode(file_get_contents('data.json'), true);
    $search = $_GET['search'];
 
    $results =  array();
    foreach($trips as $trip) {
        if(strpos($trip['destination'], $search) !== false)  {
            $results[] = $trip;
        }
    }
 
    include('./tour.php');
    exit;
?>