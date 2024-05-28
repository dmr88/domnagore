<?php
require_once('connect.php');
require_once('function.php');

$dTime = $_POST['datetime'];
$orders = query("SELECT * FROM `registrations` WHERE `time` = '". $dTime ."'", $dbh);

if($orders){
  echo 'Данное время занято, пожалуйста выберите другое время';
}

// foreach ($orders as $key => $value) {
//  echo $user_id = $value['user_id'];
// }
?>