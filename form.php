<?php
if(!isset($_COOKIE['uid'])){
    header("Location: /");
}

include_once('connect.php');
include_once('function.php');

if($_POST['add']){

	print_r($_POST);

	$id = $_COOKIE['uid'];
	$t = $_POST["datetime"];
	$service_id = $_POST["service"];
	$sth = $dbh->prepare("INSERT INTO `registrations`(`uid`, `time`, `regName`, `service_id`) VALUES ($id,'$t','$service_id','$service_id')");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	if(count($result)>0){
		$message = "<h1>Уведомление</h1><p>Поздравляем с успешной записью на <strong>$service_id</strong> на <i>$t</i>.</p><br>
		<i>Не забывайте, что при опоздании более чем на 10 минут вас не примут</i>";
	}


	$sth = $dbh->prepare("Select email from users WHERE `id`=$id;");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	if(count($result)>0){
		$result = $result[0];
		
		$to = $result['email'];
		$subject = "Уведомление о записи на $service_id";

		$headers  = "From: noreply@domnagore.kz\r\n";
		$headers .= "Reply-To: noreply@domnagore.kz\r\n";
		$headers .= "CC: noreply@domnagore.kz\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		$message = "<h1>Уведомление</h1><p>Поздравляем с успешной записью на <strong>$service_id</strong> на <i>$t</i>.</p><br><i>Не забывайте, что при опоздании более чем на 10 минут вас не примут</i>";
		mail($to, $subject, $message, $headers);
	}

	header("Location: /profile.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Запись на услугу</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h2><center>Запись на услугу</center></h2>
<form class="form" method="post">
    <label for="datetime">Дата и время:</label>
    <input type="datetime-local" id="datetime" name="datetime" required>

    <label for="service">Выберите услугу:</label>
    <select id="service" name="service" required>
        <option value="">Выберите услугу...</option>
				<?php
					$orders = query("SELECT * FROM `service`",$dbh);
					foreach ($orders as $key => $value) { 
				?>
        	<option value="<?php echo $value['id']?>"><?php echo $value['name'].' цена: '.$value['price'].' тг'?></option>
				<?php } ?>
    </select>

		<div id="show"></div>

    <input type="submit" value="Записаться">
		<input type="hidden" name="add" value="act">
</form>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>

<?php
}
?>