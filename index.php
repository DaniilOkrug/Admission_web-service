<?php 
	require 'config.php';
	if($_SESSION['loggedin']){
		header('Location: routes/index.php');
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Вход</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<body class="container">
		<div class="login">
			<h1 class="m-4">Вход</h1>
			<p class="m-4">Если вы уже зарегистрировались, войдите в личный кабинет, используя свой адрес электронной почты и пароль.</p>
			<div class="alert alert-danger d-<?php echo $_SESSION['login_display_err']; ?>" role="alert">
			  Неверный логин или пароль!
			</div>
			<form action="routes/scripts/login.php" method="post">
				<div class="form-group">
					<input type="text" class="m-3 form-control"	 name="username" placeholder="Логин или e-mail" id="username" required>
					<input type="password" class="m-3 form-control" name="password" placeholder="Пароль" id="password" required>
					<input class="m-3 btn btn-primary" type="submit" value="Войти">
				</div>
				<hr>
				<p class="m-3">У вас еще нет аккаунта? Тогда <a href="signup.php">зарегистрируйтесь</a>!</p>
			</form>
		</div>
	</body>
</html>