<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$_SESSION["form"]["first-name"] = $_POST['first-name'];
$_SESSION["form"]["last-name"] = $_POST['last-name'];
$_SESSION["form"]["email"] = $_POST['email'];
$_SESSION["form"]["phone-number"] = $_POST['phone-number'];
$_SESSION["form"]["relationship-status"] = $_POST['relationship-status'];


$newFormData = array(
                  "date"=>date("m/d/Y"),
                  "fName"=> $_SESSION['form']['first-name'],
                  "lName"=> $_SESSION['form']['last-name'],
                  "email"=> $_SESSION['form']['email'],
                  "phone-number"=> $_SESSION['form']['phone-number'],
                  "relationship-status"=> $_SESSION['form']['relationship-status']
  );




  $jsonFormData = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json');

  $pastFormData = json_decode($jsonFormData,TRUE);
 
array_push($pastFormData, $newFormData);

$jsonData = json_encode($pastFormData);

file_put_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);
  

header('Location: /index.php');


?>