<?php

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
        <!-- the main stylesheet -->
        <link rel="stylesheet" href="css/admin2.css">
    <!-- render all the elememts -->
    <link rel="stylesheet" href="normalize.css">
    <!-- font awesome libirary -->
    <link rel="stylesheet" href="all.min.css">
    <!-- google  font sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body onload="Fhide()">
  <div class="container">
    <h2>Manage Trips</h2>
    <div class="add">
      <form action="add_trips.php" method="POST" enctype="multipart/form-data" class="addtrip">
        <div id="hide">
          <div class="divflex">
            <div>
              <label for="image">Photo : </label>
              <input type="file" id="image" name="image" required />
            </div>
            <div>
              <label for="destination">Name : </label>
              <input type="text" name="destination" id="destination" placeholder="Destination name" required />
            </div>
          </div>
          <div class="divflex">
            <div>
              <label for="hotel">Hotel : </label>
              <input type="text" name="hotel" id="hotel" placeholder="Hotel name" required />
            </div>
            <div>
              <label for="price">Price : </label>
              <input type="number" name="price" id="price" placeholder="price" required />
            </div>
          </div>
          <div class="divflex">
            <div>
              <label for="from_date">From : </label>
              <input type="datetime-local" name="from_date" id="from_date" required />
            </div>
            <div>
              <label for="to_date">To : </label>
              <input type="datetime-local" name="to_date" id="to_date" required />
            </div>
          </div>
          <div class="divflex">
            <div>
              <label for="excursions">Excursions : </label>
             <textarea name="excursions" id="excursions" rows="1.9" cols="30" placeholder="list of excursions" required></textarea>
            </div>
            <div>
              <label for="services">Services : </label>
              <input type="text" name="services" id="services" placeholder="Services" required />
            </div>
          </div>
          <div class="divflex">
            <div>
              <input type="submit" value="Add Trip" name="added" class="remove" />
            </div>
          </div>
        </div>
        <script>
        function myFunc(){
        document.getElementById("hide").style.display = "block";
        }
        function Fhide(){
          document.getElementById("hide").style.display = "none";
        }
        </script>
      </form>
      <button type="submit" value="Add Trip" name="add" onclick="myFunc()" class="meshbut">Show</button> 
      <button type="submit" value="Remove Trip" name="add" class="but" ><a href="admintrip.php">Hide</a></button> 
    </div>
  <div class="info2">
  <table class="table2">
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
              <button type="submit" class="remove">Remove</button>
          </form>
          </td>
        </tr>
      <?php 
     endforeach;?>
    </tbody>
  </table>
    </div>
  </div>
  <div class="search">
  <form action="search.php" method="Get">
    <input type="search" name="search" placeholder="Destination name" />
    <input type="submit" value="Search" class="remove" />
  </form>
  </div>
</body>
</html>