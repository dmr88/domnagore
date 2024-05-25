<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Проверка введенных данных пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	// Проверка пользователя в базе данных
	// Замените эту часть кода на вашу аутентификацию пользователя

	$dbh = new PDO('mysql:host=localhost;dbname=p-340998_beauty_salon_db;charset=utf8','root','root');
	// Set the PDO error mode to exception
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare("Select * from users WHERE `username`='$username' and `password`='$password';");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	if(count($result)>0){
		$result = $result[0];
		if ($result['isAdmin']==1) {
			setcookie('admin',"21232f297a57a5a743894a0e4a801fc3", time()+172800);
		}
		setcookie('uid',$result['id'], time()+172800);
		setcookie('uhsh',md5($result['username'].$result['email']), time()+172800);
		
		header("Location: profile.php");
	}else{
		header("Location: login.php");
	}

	// Если аутентификация успешна, установите сессию и перенаправьте пользователя на главную страницу
	$_SESSION['username'] = $username;
	exit();
}
?>