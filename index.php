<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<title>My chat</title>
</head>
<body>

	<!-- Массив имён пользователей -->
	<?php
		// подключаем список пользователей
		include "modules/users.php";
		// делаем проверку на метод GET
		if (isset($_GET["user"])) {
			$user_id = $_GET["user"] - 1; // заносим число выбранного пользователя
			$user = $users[$user_id];
	?>

	<!-- модальное окно с информацией о пользователе -->
	<div class="modal" style="display: block;">
		<div class="close">
			<a href="index.php">X</a>
		</div>
		<!-- контект в модальном окне с информацией о пользователе -->
		<div class="modal_content">
			<h2>Пользователь: <?php echo $user["name"] ?></h2>
			<h3>Номер: <?php echo $user["id"] ?></h3>
			<h3>Почта: <?php echo $user["contacts"]["email"] ?></h3>
			<h3>Телефон: <?php echo $user["contacts"]["phone"] ?></h3>
		</div>
	</div>	
	
	<?php
		}
		// подключаем файл с массивом сообщений
		include "modules/message.php";
	?>
	
	<!-- шапка чата -->
	<header class="header">
		<!-- логотип -->
		<div class="logo">
			<img class="logo_img" src="img/logo.png" alt="Logo">
			<h1 class="logo_text">Telegram Web</h1>
		</div>
		<!-- меню чата -->
		<div class="menu"> 
			<!-- кнопка контакты -->
			<div class="contacts">
				<a href="#">Contacts</a>
			</div>
			<!-- кнопка настройки -->
			<div class="settings">
				<a href="#">Setings</a>
			</div>
			<!-- кнопка авторизации -->
			<div class="log_out">
				<a href="#">Log Out</a>
			</div>
		</div>
	</header>

	<!-- Блок с контактами и сообщениями -->
	<div class="content">
		<!-- Левый блок с поиском и списком пользователей -->
		<div class="users">
			<!-- Поиск -->
			<div class="search">
				<input type="text" name="text">
				<button>
					<img src="img/icon-search.png" alt="search">
				</button>
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
							include "modules/message_list.php";
						?>
					</ul>
				</div>
				<!-- форма отправки сообщения -->
				<div class="message_form">
					<!-- поле ввода сообщения -->
					<textarea name="" id="" cols="30" rows="2"></textarea>
					<!-- кнопка смайлов -->
					<button><img class="btn_smile" src="img/icon-smile.png" alt="Smile"></button>
					<!-- кнопка прикрепления файла -->
					<button><img class="btn_attach" src="img/icon-attach.png" alt="Attach"></button>
					<!-- кнопка отправки сообщения -->
					<button><img class="btn_send" src="img/icon_send.png" alt="Send"></button>
				</div>
			</div>
	</div>


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