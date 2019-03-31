<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Form</title>
</head>
<body>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="form-group">
			<form method="post" action="academy.php">
				<br>
				<label for="exampleInputName2">Введите ФИО</label>
				<input type="text" class="form-control" name="username" 
					placeholder="Иванов Иван Иванович" required>
				<br>
				<label for="exampleInputName2">Номер мобильного телефона</label>
				<input type="text" class="form-control" name="mobile" 
					placeholder="9997991234" required>
				<br>
				<label for="exampleInputName2">Введите E-mail</label>
				<input type="text" class="form-control" name="email" 
					placeholder="primer@mail.ru" required>
				<br>
				<label for="exampleInputName2">Дата рождения</label>
				<input type="date" class="form-control" name="date" 
					required>
				<br>
				<label for="exampleInputName2">Комментарий</label>
				<textarea name="comment" class="form-control" 
					rows="5" cols="30"></textarea><br>

				<div class="g-recaptcha" 
					data-sitekey="6LezF5sUAAAAAEHvTmN2mTXQfmZ45PeTmcUiGgoj"></div><br>

				<input type="submit" class="btn btn-default" 
					name="send" value="Отправить">
			</form>
		</div>
	</div>
	<div class="col-md-4"></div>
	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>