<?php
$file = 'trips.json';
$data = json_decode(file_get_contents($file), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Add a new tour to the JSON file
  $id = count($data['tours']) + 1;
  $name = $_POST['name'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $details = $_POST['details'];
  $price = $_POST['price'];
  $facilities = explode(',', $_POST['facilities']);
  $image = $_POST['image'];
  $tour = array(
    'id' => $id,
    'name' => $name,
    'location' => $location,
    'date' => $date,
    'details' => $details,
    'price' => $price,
    'facilities' => $facilities,
    'image' => $image
  );
  array_push($data['tours'], $tour);
  file_put_contents($file, json_encode($data));
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  // Remove a tour from the JSON file
  parse_str(file_get_contents("php://input"), $params);
  $id = $params['id'];
  foreach ($data['tours'] as $key => $tour) {
    if ($tour['id'] == $id) {
      unset($data['tours'][$key]);
      break;
    }
  }
  $data['tours'] = array_values($data['tours']);
  file_put_contents($file, json_encode($data));
}
?>
