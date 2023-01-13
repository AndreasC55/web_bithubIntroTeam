<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
 $data = json_decode($data, TRUE);  //makes an array

$UID = '63c07191dddc7'; //note: i used a random UID generation funcion to get this

foreach ($data as $key => $item) {
  if ($item['UID'] == $UID){
    echo $item['firstName'];
  $data[$key]['UID'] = "im tired";
  }
}
echo '<pre>';
var_dump($data);
echo '</pre>';


  
//echo ($data[0]['UID']);
?>