
<!-- 2222222222222 -->
<?php
    session_start();

    // if(!isset($_SESSION['email'])){
    //     header('Location: ./log.php');
    //     exit();
    // }

    $trips = json_decode(file_get_contents('trips.json'),true);

    $users = json_decode(file_get_contents('data.json'), true);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/admin2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body onload="Fhide()">
  <div class="container">
    
  
    <h2>Manage Trips</h2>
    <div class="add">
     <form action="add_trips.php" class="addtrip">
      <div id="hide">
       <div class="divflex">
        <div>
            <label for="image">Destination Photo</label>
            <input type="text" id="image" name="image" required/>
          </div>
          <!-- <img src="" alt="tour image" name="image" id="image" required /><br/> -->
          <div>
            <label for="destination">Destination Name</label>
            <input type="text" name="destination" id="destination" required />
          </div>
       </div>
        <div class="divflex">
          <div>
            <label for="hotel" class="oneline">Hotel Details</label>
            <textarea name="hotel" id="hotel" required></textarea>
          </div>
          <div>
            <label for="from_date">From Date/Time</label>
            <input type="datetime-local" name="from_date" id="from_date" required />
          </div>
        </div>
        <div class="divflex">
          <div>
            <label for="to_date">To Date/Time</label>
            <input type="datetime-local" name="to_date" id="to_date" required />
          </div>
          <div>
            <label for="excursions" class="oneline">List of Excursions</label>
            <textarea name="excursions" id="excursions" required></textarea>
          </div>
        </div>
       <div class="divflex">
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required />
          </div>
          <div>
            <label for="services" class="oneline">Services</label>
            <textarea name="services" id="services" required></textarea>
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
      <button type="submit" value="Add Trip" name="add" onclick="myFunc()" class="meshbut">Add Tour</button> 
      <button type="submit" value="Remove Trip" name="add" class="but" ><a href="admin.php">Remove</a></button> 
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
  <!-- <h2>Search for Trips</h2>
  <form action="search_trip.php" method="get">
    <label for="destination">Destination Name</label>
    <input type="text" name="destination"required /><br/>
    <input type="search" value="Search" name="search" />
  </form> -->
  </div>
  
</body>
</html>