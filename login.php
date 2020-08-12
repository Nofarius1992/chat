<!-- 
1. Дизайн/мокап - готов
2. Отправка формы - готово
3. Сделать обработку данных формы, проверить заполнен ли email и password - готово
4. Сделать проверку есть ли такой пользователь в базе данных
5. Если нет, то вывести ошибку. Иначе пункт 6
6. Авторизовать пользователя
 -->
<?php 
	// подключаем базу файл 
	include "configs/db.php";

	// проверяем заполнены ли поля почты и пароля; если заполнены, то
	if(
		isset($_POST["email"]) && isset($_POST["password"])
		&& $_POST["email"] != "" && $_POST["password"] != ""
	) {
		// получаем всех пользователе из базы данных у которых почта и пароль соврадают с введёнными данными
		$sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] . "'";
		// выполняем запрос
		$result = mysqli_query($connect, $sql);
		// получаем количество пользователей с базы данных
		$col_users = mysqli_num_rows($result);

		// проверяем есть ли юсер, у которого почта и пароль совпали с введнными данными; если есть, то
		if($col_users == 1) {
			// записываем в переменную $user масив с данными этого пользователя
			$user = mysqli_fetch_assoc($result);

			// создаем куки для хранения данных пользователя
			setcookie("user_id", $user["id"], time() + 3600);		
			// переходим на главную страницу
			header("Location: /");

		} else {
			echo "<h2>Не правильный логин или пароль!</h2>";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style/style.css">
	<meta charset="UTF-8">
	<title>Авторизация</title>
</head>
<body>
	
	<!-- шапка чата -->
	<?php 
		include("parts_site/header.php") 
	?>

	<!-- Блок с контактами и сообщениями -->
	<div class="content">
		<h2>Авторизация</h2>
		<form action="login.php" method="POST">
			<p>
				Введите свой email: <br/>
				<input type="text" name="email">
			</p>

			<p>
				Введите свой пароль: <br/>
				<input type="password" name="password">
			</p>
			<p>
				<button type="submit">Войти</button>
			</p>
		</form>
		<a href="register.php">Регистрация</a>
	</div>

	
	

</body>
</html>