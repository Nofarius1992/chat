<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<title>My chat</title>
</head>
<body>

<!-- 
	1. Сверстать шапку - готово
	  1.1 Сделать логотип - готово
	  1.2 Сделать меню - готово

	2. Сверстать левое меню
	  2.1 Сдалть поиск
	  2.2 Сделать список контактов

	3. Сверстать переписку с пользователями
	  3.1 Вывод сообщение
	  3.2 Форма для отправки сообщений

	4. Список контактов подальное окно
	  4.1 Поле поиска
	  4.2 Список контактов

	5. Окно авторизации и регистрации
 -->
	<!-- Header -->
	
	<header class="header">

		<div class="logo">
			<img class="logo_img" src="img/logo.png" alt="Logo">
			<h1 class="logo_text">Telegram Web</h1>
		</div>
			

		<div class="menu"> 

			<div class="contacts">
				<a href="#">Contacts</a>
			</div>

			<div class="settings">
				<a href="#">Setings</a>
			</div>

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
			
			<!-- Список пользователей -->
			<div class="list">
				<ul>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>

					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- Правый блок с перепиской пользователей -->
		<div class="message">
				
				<div class="message_list">
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
					<li>
						<div class="icon_user">
							<img src="img/user.png" alt="user">
						</div>
						<h2 class="user_name">Michael</h2>
						<p class="user_text">Привет!</p>
						<div class="time">09:00</div>
					</li>
				</div>

				<div class="message_form">
					<textarea name="" id="" cols="30" rows="2"></textarea>
					<button><img class="btn_smile" src="img/icon-smile.png" alt="Smile"></button>
					<button><img class="btn_attach" src="img/icon-attach.png" alt="Attach"></button>
					<button><img class="btn_send" src="img/icon_send.png" alt="Send"></button>
				</div>

			</div>
	</div>





</body>
</html>