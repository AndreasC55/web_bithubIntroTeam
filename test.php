<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/functions.php');
  $data = json_decode($data, TRUE);



  $uid = 001;
    foreach ($data as &$item) {
      $item['uid'] = $uid;
      $uid++;
    }











?>