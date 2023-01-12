<?php 
header('Location: /index.php');

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone-number'];
$relationshipStatus = $_POST['relationship-status'];
$UID = $_POST['UID'];

// Create an array to hold the form data
$formData = [
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'phoneNumber' => $phoneNumber,
    'relationshipStatus' => $relationshipStatus,
  'UID' => $UID,
];

// Encode the array as a JSON string
$formDataJson = json_encode($formData);

// Save the JSON string to a file
file_put_contents('data.json', $formDataJson);

// Output a message to the user





?>

