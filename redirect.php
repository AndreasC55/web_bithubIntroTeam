<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$_SESSION["form"]["firstName"] = $_POST['first-name'];
$_SESSION["form"]["lastName"] = $_POST['last-name'];
$_SESSION["form"]["email"] = $_POST['email'];
$_SESSION["form"]["phoneNumber"] = $_POST['phone-number'];
$_SESSION["form"]["relationshipStatus"] = $_POST['relationship-status'];

$newFormData = array(
                  "date"=>date("m/d/Y"),
                  "fName"=> $_POST['form']['first-name'], 
                  "lName"=> $_POST['form']['last-name'],
                  "email"=> $_POST['form']['email'],
                  "phone-number"=> $_POST['form']['phone-number'],
                  "relationship-status"=> $_POST['form']['relationship-status']
  );


  //import json data from files
  $jsonFormData = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json');
//convert json data to php array
  $pastFormData = json_decode($jsonFormData,TRUE);
 
array_push($pastFormData, $newFormData);
//new encode
$jsonData = json_encode($pastFormData);

file_put_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);
  

header('Location: /form.php');






?>