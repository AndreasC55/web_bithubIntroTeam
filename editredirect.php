<?php
header('Location: /edit.php');

// Create an array to hold the form data
$formData = [
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'phoneNumber' => $_POST['phoneNumber'],
    'relationshipStatus' => $_POST['relationshipStatus'],
    'UID' => $_POST['UID'],
];

// Encode the array as a JSON string
$formDataJson = json_encode($formData);

// Save the JSON string to a file
file_put_contents('data.json', $formDataJson);

// Retrieve data from the JSON file
$data = json_decode(file_get_contents('data.json'), true);

$UID = $_POST['UID'];

foreach ($data as $key => $item) {
  if ($item['UID'] == $UID){
    $data[$key]['firstName'] = $_POST['firstName'];
    $data[$key]['lastName'] = $_POST['lastName'];
    $data[$key]['email'] = $_POST['email'];
    $data[$key]['phoneNumber'] = $_POST['phoneNumber'];
    $data[$key]['relationshipStatus'] = $_POST['relationshipStatus'];
    $data[$key]['UID'] = $_POST['UID'];
    break;
  }
}


?>


