<?php
require_once('connect.php');
require_once('function.php');

$dTime = $_POST['datetime'];
$service_id = $_POST['service'];
$orders = query("SELECT * FROM `registrations` WHERE `time` = '". $dTime ."' AND service_id = '".$service_id."'", $dbh);

if($orders){
  echo '<div class="info">Данное время занято, пожалуйста выберите другое время</div>';
} else {
  $orders = query("SELECT * FROM `service_person` WHERE service_id = '". $service_id ."'", $dbh);
  
  foreach ($orders as $key => $value) {
   $user_id = $value['user_id'];
  }
  
  echo '<select id="user_id" name="user_id" required>';
  $orders = query("SELECT * FROM `users` WHERE id = '".$user_id."'", $dbh);
  foreach ($orders as $key => $value) { 
    echo '<option value="'.$value['id'].'">'.$value['username'].'</option>';
  }
  echo '</select>';
}


?>