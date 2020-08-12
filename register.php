<!-- 
1. Дизайн/мокап готов
2. Сделать отправку формы
3. Проверить есть ли пользователь с таким email адресом
4. Проверить заполнил ли пользователь поля формы (email, password)
5. Если все предыдущие шаги прошли (3, 4 пункты)

 -->



<?php 

	include "configs/db.php";
	if( 
		// проверяем ввод почты, пароля и логина 
		isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["login"])
		&& $_POST["email"] != "" && $_POST["password"] != "" && $_POST["login"] != ""
	) {
		// вставить в таблицу "user" нового пользователя с данными (почта, пароль, имя, фотография)
		$sql = "INSERT INTO users (email, password, name, photo) VALUES ('" . $_POST["email"] ."' , '" . $_POST["password"] ."' , '" . $_POST["login"] . "', 'img/user.png')";
		// если пользователь добавлен то
		if(mysqli_query($connect, $sql)) {
			// выводим "Пользователь добавлен"
			echo "<h2>Пользователь добавлен</h2>";
		} else {
			// если не добавлен, то выводим "Произошла ошибка"
			echo "<h2>Произошла ошибка</h2>" . mysqli_error($connect);
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style/style.css">
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	
	<!-- шапка чата -->
	<?php 
		include("parts_site/header.php") 
	?>

	<!-- Блок с контактами и сообщениями -->
	<div class="content">
		<form action="register.php" method="POST">
			<p>
				Введите свой email: <br/>
				<input type="text" name="email">
			</p>

			<p>
				Введите свой пароль: <br/>
				<input type="password" name="password">
			</p>

			<p>
				Введите свой Имя: <br/>
				<input type="text" name="login">
			</p>
			<p>
				<button type="submit">Зарегестрироваться</button>
			</p>
		</form>
		<a href="login.php">Авторизация</a>
	</div>

	
	

</body>
</html>