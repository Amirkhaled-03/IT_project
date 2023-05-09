<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Site - Profile Page</title>
    <style>
      /* styling here */
    </style>
  </head>
  <body>
    
    <main>
    
    <section>
        <h1>Profile Page</h1>
    
        <h2>Welcome, <?php echo $_SESSION['first_name']; ?></h1>
      
        <div class="profile-info">

          <p>username: <?php echo $_SESSION['username']; ?> </h3>

          <p>id: <?php echo $_SESSION['id']; ?> </p>

          <p>Nationality: <?php echo $_SESSION['country']; ?>  </p>

          <p>Gender: <?php echo $_SESSION['gender']; ?>  </p>

        </div>
      
      </section>




    </main>
    <h2>Contact Information</h2>
    <ul>
      <li>email: <?php echo $_SESSION['email']; ?> </li>
      <li>password: <?php echo $_SESSION['password']; ?></li>
      <li>phone: <?php echo $_SESSION['phone']; ?> </li>
    </ul>

    <!-- <form method="post" action="logout.php">
        <input type="submit" value="Logout">
    </form> -->
    <?php 
    include('logout.php');
    ?>

  </body>
</html>
