<?php

$fullName = explode(" ",$_POST['fullName']);

$fname = $first-name[0];
$lName = $fullName[1];

 $reason= $_POST['reason'] ;

$age= $_POST['age'] ;

$state= $_POST['state'] ;

$comment= $_POST['comment'] ;
  

header("Location: /form.php?fName=$fName&lName=$lName&reason=$reason&age=$age&state=$state&comment=$comment");
?>