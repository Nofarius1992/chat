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

		<?php 
			if(isset($_COOKIE["user_id"])) {
				$sql = "SELECT * FROM users WHERE id = " . $_COOKIE["user_id"] . ""; 
				$result = mysqli_query($connect, $sql);
				$polzovatel = mysqli_fetch_assoc($result);
				?>
				<div class="log_out">
					<a href="exit.php"><?php echo $polzovatel["name"] ?></a>
				</div>

				<?php 
			} else {
				?>
				<!-- кнопка авторизации -->
				<div class="log_out">
					<a href="login.php">Log In</a>
				</div>
				<?php
			}
		 ?>
		
	</div>
</header>