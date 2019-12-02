<?php 
	require 'config.php'; 
	require 'routes/scripts/settings.php';

	variablesUpdate();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>
	<body class="container">
		<h1 class="m-4">Регистрация</h1>
		<div class="alert alert-success d-<?php echo $_SESSION['display_success'];?>" role="alert">
		  Вы успешно зарегистрированы!<a href="index.php"> Войдите</a> в аккаунт.
		</div>
		<div class="alert alert-danger d-<?php echo $_SESSION['display_err'];?>" role="alert">
		  Такой пользователь уже существует!
		</div>
		<form action="routes/scripts/reg.php" method="post" autocomplete="off">
			<div class="ml-3 form-group">
			  <label>Как вас зовут?</label>
			  <input type="text" class="form-control" name="personal_name" placeholder="Имя" id="personal_name" required>
			</div>

			<div class="ml-3 form-group">
			  <label>Введите ваш номер телефона</label>
			  <input type="tel" class="form-control" name="phone_number" placeholder="Номер телефона" id="phone_number" required>
			</div>

		  	<div class="ml-3 form-group">
		    	<label>Email адрес</label>
		    	<input type="email" class="form-control" name="email" placeholder="e-mail" id="email" required>
		  	</div>

		  	<div class="ml-3 form-group">
		    	<label>Придумайте пароль</label>
		    	<input type="password" name="password" placeholder="Пароль" class="form-control" id="password" required>
		  	</div>

		  	<input class="ml-3 btn btn-primary" type="submit" value="Регистрация">
		  	<p class="m-4">Нажимая на кнопку «Регистрация» Вы даете согласие на обработку своих персональных данных.</p>
		</form>
		<hr>
		<p class="m-3">У вас уже есть аккаунт? Тогда <a href="index.php">войдите</a>!</p>
	</body>
</html>