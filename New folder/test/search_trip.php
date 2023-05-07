<?php
    $trips = json_decode(file_get_contents('trips.json'), true);

    if(isset($_GET['search'])) {
        $search = $_GET['search'];
        $filteredTrips = array_filter($trips, function($trip) use ($search) {
            return stristr($trip['destination'], $search);
        });
    }
?>