<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: ./log.php');
        exit();
    }

    $trips = json_decode(file_get_contents('trips.json'),true);

    $users = json_decode(file_get_contents('data.json'), true);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1><?php 
    echo "Welcome, " . $_SESSION["username"] . "!"; ?></h1>
    <h2>Manage Trips</h2>
    <form action="add_trips.php" method="post">
        <label for="destination">Destination Name</label>
        <input type="text" name="destination" id="destination" required /><br/>
        <label for="photo">Destination Photo</label>
        <input type="text" name="photo" id="photo" required /><br/>
        <label for="hotel">Hotel Details</label>
        <textarea name="hotel" id="hotel" required></textarea><br/>
        <label for="from_date">From Date/Time</label>
        <input type="datetime-local" name="from_date" id="from_date" required /><br/>
        <label for="to_date">To Date/Time</label>
        <input type="detetime-local" name="to_date" id="to_date" required /><br/>
        <label for="excursions">List of Excursions</label>
        <textarea name="excursions" id="excursions" required></textarea><br/>
        <input type="submit" value="Add Trip" name="add" />
      </form>
    <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Destination</th>
        <th>Hotel</th>
        <th>From Date/Time</th>
        <th>To Date/Time</th>
        <th>Excursions</th>
        <th>Actions</th>
      </tr>
    </thead>