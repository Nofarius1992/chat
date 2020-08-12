<?php 
	include "configs/db.php"; 
	include "configs/setings.php";

	// проверяем авторизован ли пользователь, если нет, то
	if($polzovatel_id == null) {
		// переходим на страницу авторизации
			header("Location: /login.php");
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<title>My chat</title>
</head>
<body>

	<!-- шапка чата -->
	<?php 
		include("parts_site/header.php") 
	?>
	<!-- Блок с контактами и сообщениями -->
	<div class="content">
		<!-- Левый блок с поиском и списком пользователей -->
		<div class="users">
			<!-- Поиск -->
			<div class="search">
				<form action="index.php" method="GET">	
					<input type="text" name="search-user">
					<button>
						<img src="img/icon-search.png" alt="search">
					</button>
				</form>
			</div>

			<!-- подключаем список контактов через php  -->
			<?php 
				// include подключить файл
				include "modules/list.php";
			 ?>
		</div>

		<!-- Правый блок с перепиской пользователей -->
		<div class="message">
				<div class="message_list">
					<ul>
						<!-- Вывод сообщений с помощью ПХП -->
						<?php
							include "modules/message.php";
						?>
					</ul>
				</div>
				<!-- форма отправки сообщения -->
				<form class="message_form" action="index.php" method="POST">
					<!-- $_GET["user"] - id пользователя которому отправили сообщение (беру эту переменную из файла list.php 33 string) -->
					<input type="hidden" name="user_id" value="<?php echo $_GET["user"]; ?>">
					<input type="hidden" name="user_id_2" value="<?php echo $_COOKIE["user_id"]; ?>">
					<!-- поле ввода сообщения -->
					<textarea name="text" id="" cols="30" rows="2"></textarea>
					<!-- кнопка смайлов -->
				<!-- 	<button type="submit"><img class="btn_smile" src="img/icon-smile.png" alt="Smile"></button> -->
					<!-- кнопка прикрепления файла -->
					<!-- <button type="submit"><img class="btn_attach" src="img/icon-attach.png" alt="Attach"></button> -->
					<!-- кнопка отправки сообщения -->
					<button type="submit"><img class="btn_send" src="img/icon_send.png" alt="Send"></button>
				</form>
			</div>
	</div>

	<?php 
		/*============================
		Отправка сообщений от авторизованного пользователя
		===============================*/
		if(isset($_POST["text"]) && $_POST["text"] != ""
			&& isset($_POST["user_id"]) 
			&& isset($_POST["user_id_2"])
		) {
			$sql = "INSERT INTO messages (user_id, user_id_2, message, photo) VALUES ('" . $_POST["user_id"] . "', '" . $_POST["user_id_2"] . "', '". $_POST["text"] ."' , '" . $user["photo"] . "')";
			if(mysqli_query($connect, $sql)) {
				echo "<h2>Сообщение отправлено</h2>";
			} else {
				echo "<h2>Произошла ошибка</h2>" . mysqli_error($connect);
			}
		}
	 ?>


<!-- Модальное окно контактов -->
	<div class="modal" id="contacts_modal">
		<!-- кнопка закрытия модального окна -->
		<div class="close close--contacts">X</div>
		<!-- контент модального окна -->
		<div class="modal_content">
			<ul>
				<li>
					<!-- иконка пользователя -->
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<!-- имя пользователя -->
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
				<li>
					<div class="icon_user">
						<img src="img/user.png" alt="user">
					</div>
					<h2 class="user_name modal_user">Michael</h2>
				</li>
			</ul>
		</div>
		

	</div>

<!-- Модальное окно авторизации -->
	<div class="modal" id="in_out">
		<!-- кнопка закрытия модального окна -->
		<div class="close close--in">X</div>
		<!-- контент модального окна авторизации -->
		<div class="modal_content" id="in">
			<!-- заголовок модального окна авторизации -->
			<h2>Авторизация</h2>
			<!-- поле ввода почты -->
			<input type="text" placeholder="email">
			<!-- поле ввода пароля -->
			<input type="text" placeholder="password">
			<!-- кнопка вход -->
			<button>Вход</button>
		</div>
	</div>

	<!-- подключение скриптов-->
	<script src="js/variables.js"></script>
	<script src="js/script.js"></script>
</body>
</html>