<?
if(!isset($_COOKIE['uid'])){
    header("Location: /");
}
?>
<?php
print_r($_POST);

include_once('connect.php');

$rn = $_POST["service"];
$t = $_POST["datetime"];
$id = $_COOKIE['uid'];
$sth = $dbh->prepare("INSERT INTO `registrations`(`uid`, `time`, `regName`) VALUES ($id,'$t','$rn')");
$sth->execute();


$sth = $dbh->prepare("Select email from users WHERE `id`=$id;");
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
if(count($result)>0){
	$result = $result[0];
	
	$to = $result['email'];
	$subject = "Уведомление о записи на $rn";

	$headers  = "From: noreply@domnagore.kz\r\n";
	$headers .= "Reply-To: noreply@domnagore.kz\r\n";
	$headers .= "CC: noreply@domnagore.kz\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$message = "<h1>Уведомление</h1><p>Поздравляем с успешной записью на <strong>$rn</strong> на <i>$t</i>.</p><br><i>Не забывайте, что при опоздании более чем на 10 минут вас не примут</i>";
	mail($to, $subject, $message, $headers);
}

header("Location: /profile.php");
?>