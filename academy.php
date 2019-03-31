<?php
	const GOOGLE_RECAPTCHA_PRIVATE_KEY = '6LezF5sUAAAAAEVHsDdVR5LIDIjDZvjvmU74Oxxt';

	if (isset($_POST['g-recaptcha-response'])) {
   		$params = [
        	'secret' => GOOGLE_RECAPTCHA_PRIVATE_KEY,
        	'response' => $_POST['g-recaptcha-response'],
        	'remoteip' => $_SERVER['REMOTE_ADDR'] ];
	   	$curl = curl_init('https://www.google.com/recaptcha/api/siteverify?' . http_build_query($params));
	    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	   	$response = json_decode(curl_exec($curl));
	    	curl_close($curl);

	    if (isset($response->success) && $response->success == true) {
			include_once 'db.php';
			//Запись в переменные
			if (isset($_POST['send'])) {
				$username = strip_tags(trim($_POST['username']));
				$username = stripslashes($_POST['username']);
				$username = htmlspecialchars($_POST['username']);

				$mobile = strip_tags(trim($_POST['mobile']));
				$mobile = stripslashes($_POST['mobile']);
				$mobile = htmlspecialchars($_POST['mobile']);

				$email = strip_tags(trim($_POST['email']));
				$email = stripslashes($_POST['email']);
				$email = htmlspecialchars($_POST['email']);

				$date = $_POST['date'];
				$comment = $_POST['comment'];
				//Проверка введеных данных
				if (strlen($mobile) !== 10 || (!preg_match("/^[0-9-]+$/", $mobile))) {
					$err1 = '<br>Неверно введен номер'; 
				} 
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$err2 = '<br>Неверно введен E-mail';
				}
				//Запись в БД
				if ($err1 == null && $err2 == null) {
					$result = $mysqli->query(" INSERT INTO academy(username, mobile, email, date, comment ) VALUES ('$username', '$mobile', '$email', '$date', '$comment') ");
				$mysqli->close();
				echo "Ваше сообщение отправлено";
				} else {
						echo $err1.$err2;
				}
			}
	} else {
   		echo "Вы не прошли проверку reCaptcha";
		}
	}
?>
<br><br><a href="index.php">Назад</a>