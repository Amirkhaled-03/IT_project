<?php
    
    $trips = json_decode(file_get_contents('trips.json'), true);

if(isset($_POST['added'])) {
    $image_file = $_FILES['image'];
    $destination = $_POST['destination'];
    $hotel = $_POST['hotel'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $excursions = $_POST['excursions'];
    $price = $_POST['price'];
    $services = $_POST['services'];
    

    // Validate and process the uploaded file
    if($image_file['error'] !== UPLOAD_ERR_OK) {
        die('Error uploading file');
    }
    $image_name = $image_file['name'];
    $image_tmp = $image_file['tmp_name'];
    $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $allowed_exts = array('jpg', 'jpeg', 'png', 'gif');
    if(!in_array($image_ext, $allowed_exts)) {
        die('Invalid file type');
    }
    $image_path = 'sewar/' . uniqid() . '.' . $image_ext;
    if(!move_uploaded_file($image_tmp, $image_path)) {
        die('Error saving file');
    }

    // Add the trip data to the JSON file
    $trip = array(
        'id' => count($trips) + 1,
        'destination' => $destination,
        'image' => $image_path,
        'hotel' => $hotel,
        'from_date' => $from_date,
        'to_date' => $to_date,
        'excursions' => $excursions,
        'price' => $price,
        'services' => $services
    );
    $trips[] = $trip;
    file_put_contents('trips.json', json_encode($trips, JSON_PRETTY_PRINT));

    header('Location: tour.php');
    exit();
}
    // $trips = json_decode(file_get_contents('trips.json'), true);

    // if(isset($_POST['add'])){
    //     $destination = $_POST['destination'];
    //     $hotel = $_POST['hotel'];
    //     $from_date = $_POST['from_date'];
    //     $to_date = $_POST['to_date'];
    //     $excursions = $_POST['excursions'];
    //     $price = $_POST['price'];
    //     $services = $_POST['services'];
    // }

    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // $check = getimagesize($_FILES["image"]["tmp_name"]);
    // if ($check !== false) {
    //   $uploadOk = 1;
    // } else {
    //   $uploadOk = 0;
    // }
    // // Check file size
    // if ($_FILES["image"]["size"] > 5000000) {
    //   $uploadOk = 0;
    // }
    // // Allow certain file formats
    // if (
    //   $imageFileType != "jpg" &&
    //   $imageFileType != "png" &&
    //   $imageFileType != "jpeg" &&
    //   $imageFileType != "gif"
    // ) {
    //   $uploadOk = 0;
    // }
    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //   // if everything is ok, try to upload file
    // } else {
    //   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //     $image_path = $target_file;
    //   } else {
    //     $image_path = "";
    //   }
    // }

    // // Generate new ID for the trip
    // $new_id = count($trips) + 1;

    // // Create new trip object
    // $new_trip = [
    //   'id' => $new_id,
    //   'destination' => $destination,
    //   'hotel' => $hotel,
    //   'from_date' => $from_date,
    //   'to_date' => $to_date,
    //   'excursions' => $excursions,
    //   'price' => $price,
    //   'services' => $services,
    //   'image_path' => $image_path
    // ];

    // // Add new trip to the array of trips
    // $trips[] = $new_trip;

    // // Save updated trips data to file
    // file_put_contents('trips.json', json_encode($trips));

    // // Redirect to index page
    // header('Location: tour.php');
    // exit;


    // $image =$_POST['image'];
    // $name = $_POST['destination'];
    // $hotel_details = $_POST['hotel'];
    // $from_date_time = $_POST['from_date'];
    // $to_date_time = $_POST['to_date'];
    // $excursions = $_POST['excursions'];
    // $price = $_POST['price'];
    // $services = isset($_POST['services']) ? $_POST['services'] : array();

    // $id = 1;

    // foreach ($trips as $trip){
    //     $trip['id'] = $id++;
    // }

    // $newtrip = [
    //     'image' => $image,
    //     'id' => $id,
    //     'destination' => $name,
    //     'hotel' => $hotel_details,
    //     'from_date' => $from_date_time,
    //     'to_date' => $to_date_time,
    //     'excursions' => $excursions,
    //     'price' => $price,
    //     'services' => $services
    // ];

    // $trips[] = $newtrip;

    // file_put_contents('trips.json', json_encode($trips, JSON_PRETTY_PRINT));

    // header('Location: tour.php');
    // exit();
?>