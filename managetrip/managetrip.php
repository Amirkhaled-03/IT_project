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
    echo "Welcome, ". $_SESSION["first_name"]. $_SESSION['last_name']; ?></h1>
    <h2>Manage Trips</h2>
    <form action="add_trips.php">
        <label for="image">Destination Photo</label>
        <input type="text" id="image" name="image" required /><br/>
        <!-- <img src="" alt="tour image" name="image" id="image" required /><br/> -->
        <label for="destination">Destination Name</label>
        <h2><input type="text" name="destination" id="destination" required /><br/></h2>
        <label for="hotel">Hotel Details</label>
        <textarea name="hotel" id="hotel" required></textarea><br/>
        <label for="from_date">From Date/Time</label>
        <input type="datetime-local" name="from_date" id="from_date" required /><br/>
        <label for="to_date">To Date/Time</label>
        <input type="datetime-local" name="to_date" id="to_date" required /><br/>
        <label for="excursions">List of Excursions</label>
        <textarea name="excursions" id="excursions" required></textarea><br/>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required /><br/>
        <label for="services">Services</label>
        <textarea name="services" id="services" required></textarea><br/>
        <input type="submit" value="Add Trip" name="add" />
      </form>
    <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Destination</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
       foreach ($trips as $trip):?>
        <tr>
          <td><?php echo $trip['id'];?></td>
          <td><?php echo $trip['destination'];?></td>
          <td>
          <form action="remove_trip.php" method="post">
              <input type="hidden" name="id" value="<?php echo $trip['id'];?>">
              <button type="submit">Remove</button>
          </form>
          </td>
        </tr>
      <?php 
     endforeach;?>
    </tbody>
  </table>
  <!-- <h2>Search for Trips</h2>
  <form action="search_trip.php" method="get">
    <label for="destination">Destination Name</label>
    <input type="text" name="destination"required /><br/>
    <input type="search" value="Search" name="search" />
  </form> -->
</body>
</html>