<?php 
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone-number'];
$relationshipStatus = $_POST['relationship-status'];

header("Location: /form.php?fName=$fName&lName=$lName&reason=$reason&age=$age&state=$state&comment=$comment");
?>

