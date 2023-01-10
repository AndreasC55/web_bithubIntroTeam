<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/form.php');

  $data = json_decode($data, TRUE);



  $uid = 001;
    foreach ($data as &$item) {
      $item['uid'] = $uid;
      $uid++;
    };

$data = json_encode($data, TRUE);

$fileName = $_SERVER['DOCUMENT_ROOT'].'/data.json';

file_put_contents($fileName, $data);

echo '<pre>';

var_dump($data)

echo '</pre>';




?>