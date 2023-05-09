<?php

    $trips = json_decode(file_get_contents('trips.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tours</title>
     <!-- the tours stylesheet -->
     <link rel="stylesheet" href="css/tours.css">
     <!-- render all the elememts -->
     <link rel="stylesheet" href="css/normalize.css">
     <!-- font awesome libirary -->
     <link rel="stylesheet" href="css/all.min.css">
     <!-- google  font cairo -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
       <div class="container">
            <a href="index.html">
                <img src="sewar/bb.png" alt="home page" >
            </a>
            <div class="links">
                <i class="fa-solid fa-bars icon"></i>
               <ul>
                     <li> <a href="profile.php" >Profile</a></li>
                     <li><a href=""> Book Nowed tours</a></li>
                     <li><a href="logout.php">log out</a></li>
               </ul>    
             </div>
       </div>
    </header>

    <div class="kol_haga_gowa_hena">
        <div class="aside">
        
            <div class="info">
                <form action="">
                    <div class="search"> <input type="search" placeholder="search for a tour"></div>
                    <p> choose places to customize search</p>
                    <div><label for=""> <input type="checkbox" name="" id=""> Sharm el sheikh</label></div>
                    <div> <label for=""> <input type="checkbox" name="" id=""> hurghada</label></div>
                    <div><label for=""> <input type="checkbox" name="" id=""> el shokhna</label></div>
                    <div><label for=""> <input type="checkbox" name="" id=""> dahab</label></div>
                    <div> <label for=""> <input type="checkbox" name="" id=""> luxor</label></div>
                    <div><label for=""> <input type="checkbox" name="" id=""> aswan</label></div>
                    <div> <label for=""> <input type="checkbox" name="" id=""> siwa</label></div>
                    <p>choose date of tour:</p>
                    <div class="date"> <input type="date" name="" id=""></div>
                </form>
            </div>
        </div>

        <div class="all_tours">
            <?php 
            if (isset($results)){
                $trips = $results;
            }
                foreach ($trips as $trip) { 
            ?>
            <div class="container">
                <div class="tours">
                    <div class="inf">
                            <img src="<?php echo $trip['image'];?>" alt="tour image">
                        <div class="details">
                            <h2 class="name"><?php echo $trip['destination'];?></h2>
                            <p>Trip ID : <?php echo $trip['id'];?></p>
                            <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?php echo $trip['hotel'];?></p>
                            <p class="date">Date: <?php echo date('d-m-Y H:i', strtotime($trip['from_date']));?> To <?php echo date('d-m-Y H:i', strtotime($trip['to_date']));?></p>
                            <p class="moreDetails"><?php echo $trip['excursions'];?></p>
                            <p class="price">Price: <?php echo $trip['price'];?> LE</p>
                            <p>Most popular facilities in hotel :</p>
                            <div class="srv">
                                <div> <i class="fa-solid fa-person-swimming"></i> Swimming pools</div>
                                <div><i class="fa-solid fa-wifi"></i> Free wifi</div>
                                <div> <i class="fa-solid fa-umbrella-beach"></i> Beach area</div>
                                <div> <i class="fa-solid fa-utensils"></i> Full board </div>
                            </div>
                            <div class="sub"><button type="submit" name="submit">Book Now</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    </body>
</html>

