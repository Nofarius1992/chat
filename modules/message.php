
<?php 

	$i = 0;
	// цыкл вывода сообщений
		if(isset($_GET["user"]) && isset($polzovatel_id)) {
			// Получить все сообщения, которые были отправлены пользователю
			$sql = "SELECT * FROM messages " . // выбираем все сообщения
						" WHERE (user_id =" . $_GET["user"] .  // где id отрпавляемому пользователю = $_GET["user"]
							" AND user_id_2 = " . $polzovatel_id . ") " . // и отправлено от пользователя с id = 2
							" OR (user_id_2 = " . $_GET["user"] . " AND user_id =" . $polzovatel_id .")"; // ИЛИ отправлено пользователю с id = 2 И от пользователя с id = $_GET["user"]
			
			$result = mysqli_query($connect, $sql); // результат sql запроса

			$col_messages = mysqli_num_rows($result); // количество всех сообщений
			// перебераем сообщения
			while ($i < $col_messages) {
				$message = mysqli_fetch_assoc($result); //выводит массив сообщений с интересующими нас данными
		?>
				
				<li>
					 
					<a href="/index.php?user=" <?php echo  $message["user_id"]; ?>>

				
					<div class="icon_user">
						<img src="img/user.png">
						</div>
					</a>	
				
					<?php 
						// вывести имя конкретного пользователя 
						$sql = "SELECT name FROM `users` WHERE `id` = " . $message["user_id_2"] . "";
						// выполняем запрос
						$polzovatel = mysqli_query($connect, $sql);
						// записываем в переменную массив с данными пользователя
						$polzovatel = mysqli_fetch_assoc($polzovatel);
					 ?>
					
					<h2 class="user_name"><?php echo $polzovatel["name"]; ?> </h2>

					<p class="user_text"><?php echo $message["message"] ?> </p>

					<div class="time"><?php echo $message["time"] ?> </div>
					 
				</li>
				<?php

				$i = $i + 1;
			
			}			
		} 

	?>
