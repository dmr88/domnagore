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

  function mainNav($uid){
    ?>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/">
          <svg class="bi"><use xlink:href="#house-fill"></use></svg>На главную</a>
      </li>
      <?php if($uid != 1 || $uid != 3){?>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="profile.php">
          <svg class="bi"><use xlink:href="#calendar3"></use></svg>Записи</a>
      </li>
      <? } ?>
      <?php if($uid == 3){?>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="myentire.php">
          <svg class="bi"><use xlink:href="#list"></use></svg>Мои заказы</a>
      </li>
      <? } ?>
      <?php if($uid == 1){?>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="person.php">
          <svg class="bi"><use xlink:href="#list"></use></svg>По специалистам</a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="services.php">
          <svg class="bi"><use xlink:href="#people"></use></svg>Услуги</a>
      </li>
      <?php } ?>
      
     
    </ul>
    <?php
  }
?>