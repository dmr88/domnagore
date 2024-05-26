<?php
  function delcookie(){
    if (isset($_SERVER['HTTP_COOKIE'])) {
      $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
      foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
      }
    }
  }

  function query($request, $dbh){
    $sth = $dbh->prepare($request);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  }

  function user_menu(){
    echo $uid =  $_COOKIE['uid'];
    // $orders = query("SELECT * FROM `users` WHERE id='".$uid."'", $dbh);
		// foreach ($orders as $key => $value) { 
    //   if($value['role_id'] == 3){
    //     echo "Добро пожаловать, ". $value['username'];
    //   }
    // }    
  }
  
?>