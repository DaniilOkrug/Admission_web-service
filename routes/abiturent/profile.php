<?php
require 'data.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>
	<body class="loggedin">

		<?php require '../modules/header.php';?>

		<div class="content">
			<h2>Profile Page</h2>
			<div class="container">
				<form action="loader.php" method="post">
					<div class="form-row">
					    <div class="col">
					      	<input type="text" name="fname" id="fname" class="form-control" placeholder="Имя" value="<?php echo $_SESSION['first_name'];?>">
					    </div>
					    <div class="col">
					      	<input type="text" name="sname" id="sname" class="form-control" placeholder="Фамилия" value="<?php echo $_SESSION['second_name'];?>">
					    </div>
					    <div class="col">
					      	<input type="text" name="tname" id="tname" class="form-control" placeholder="Отчество" value="<?php echo $_SESSION['third_name'];?>">
					    </div>
					 </div>

				  	<div class="form-row row">
				  		<div class="col">
				  			<label for="staticEmail" class="col-form-label">Email: <?php echo $_SESSION['name'];?></label>
				  		</div>
				  		<div class="col">
				  			<label for="staticPhone" class="col-form-label">Номер телефона: <?php echo $_SESSION['phone_number'];?></label>
				  		</div>
				  	</div>
				  	<hr>
				  	<div class="form-group">
				  	    <label for="birthday">Дата рождения:</label>
				  	    <input type="date" name="birthday" class="form-control" id="birthday" placeholder="день.месяц.год" value="<?php echo $_SESSION['date'];?>">
				  	</div>

				  	<div class="form-group">
				  	    <label for="address">Адрес прописки:</label>
				  	    <input type="text" name="address" class="form-control" id="address" value="<?php echo $_SESSION['address'];?>">
				  	</div>

				  	<div class="form-group">
				  	    <label for="iin">ИИН:</label>
				  	    <input type="text" name="iin" class="form-control" id="iin" value="<?php echo $_SESSION['iin'];?>">
				  	</div>

				  	<div class="form-group">
				  	    <label for="id_number">Номер удостоверения личности:</label>
				  	    <input type="text" name="id_number" class="form-control" id="id_number" value="<?php echo $_SESSION['id_number'];?>">
				  	</div>

				  	<input type="submit" class="btn btn-primary" value="Сохранить">

					<hr class="mt-4 mb-4">

					<h2>Портфолио</h2>
					<div class="form-group">
					    <label>Достижения. Приложите свои грамоты.</label>
					    <input type="file" class="mt-2 form-control-file" id="file">
					    <input type="submit" formaction="" class="mt-3 btn btn-primary" value="Прикрепить">
					</div>
					<hr>
					<p>После отправки форма будет заблокирована</p>
					<input type="submit" formaction="apply.php" class="btn btn-primary" value="Подать заявку">
				</form>
			</div>
		</div>
	</body>
</html>