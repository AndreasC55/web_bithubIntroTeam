<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$_SESSION["form"]["fName"] = $_POST['fName'];


$newFormData = array(
                  "date"=>date("m/d/Y"),
                  "fName"=> $_POST['form']['fName'], 
  );


  //import json data from files

  $jsonFormData = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json');

//convert json data to php array

  $pastFormData = json_decode($jsonFormData,TRUE);
 
array_push($pastFormData, $newFormData);
//new encode
$jsonData = json_encode($pastFormData);

file_put_contents( $_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);
  

header('Location: /index.php');


?>