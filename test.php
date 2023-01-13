<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/form.php');
  $data = json_decode($data, TRUE);
?>