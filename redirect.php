<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$_SESSION["contactMeForm"]["fName"] = $_POST['fName'];
$_SESSION["contactMeForm"]["lName"] = $_POST['lName'];
$_SESSION["contactMeForm"]["email"] = $_POST['email'];
$_SESSION["contactMeForm"]["reason"] = $_POST['reason'];
$_SESSION["contactMeForm"]["message"] = $_POST['message'];

$newFormData = array(
                  "date"=>date("m/d/Y"),
                  "fName"=> $_SESSION['contactMeForm']['first-name'], 
                  "lName"=> $_SESSION['contactMeForm']['last-name'],
                  "email"=> $_SESSION['contactMeForm']['email'],
                  "phone-number"=> $_SESSION['contactMeForm']['phone-number'],
                  "relationship-status"=> $_SESSION['contactMeForm']['relationship-statusjsonDatat ']
  );


  //import json data from files
  $jsonFormData = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json');
//convert json data to php array
  $pastFormData = json_decode($jsonFormData,TRUE);
//add new form 
array_push($pastFormData, $newFormData);
//new encode
$jsonData = json_encode($pastFormData);

file_put_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);
  

header('Location: /form.php');






?>