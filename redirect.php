<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$_SESSION["Form"]["first-name"] = $_POST['first-name'];
$_SESSION["Form"]["last-name"] = $_POST['last-name'];
$_SESSION["Form"]["email"] = $_POST['email'];
$_SESSION["Form"]["reason"] = $_POST['reason'];
$_SESSION["Form"]["message"] = $_POST['message'];

$newFormData = array(
                  "date"=>date("m/d/Y"),
                  "fName"=> $_SESSION['Form']['first-name'], 
                  "lName"=> $_SESSION['Form']['last-name'],
                  "email"=> $_SESSION['Form']['email'],
                  "phone-number"=> $_SESSION['Form']['phone-number'],
                  "relationship-status"=> $_SESSION['Form']['relationship-statusjsonData ']
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