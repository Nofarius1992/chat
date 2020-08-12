<?php 

	// прописал строку текст для получения списка всех пользователей
	$sql = "SELECT * FROM users";

	// mysqli_query - выполнить sql запрос
	// 2 параметра: 1. Подключение к базе данных; 2. sql скрипт
	$result = mysqli_query($connect, $sql);

	// mysqli_num_rows - получить количество результатов
	$col_users = mysqli_num_rows($result);
 ?>

<!-- Список пользователей -->
<div class="list">
	<ul>
		<?php
			if(isset($_COOKIE["user_id"])) {
			$i = 0;
			// цыкл вывода пользователей
			while($i < $col_users) {
					
				// mysqli_fetch_assoc - преобразовать полученные данные пользователя в массив
				$user = mysqli_fetch_assoc($result);
				// проверяем есть ли авторизованный пользователь
				if ($_COOKIE["user_id"] != $user["id"]) {
				?>

				<li>
					<!-- ссылка на инофрмацию о пользователе
					создаётся переменная $_GET["user"]
					 -->
					<a href="/index.php?user= <?php echo $user["id"]; ?>"> 
						<!-- иконка пользователя -->
						<div class="icon_user">
							<img src='<?php echo $user["photo"]; ?>'  alt="user">
						</div>
						<!-- имя пользователя -->
						<h2 class="user_name"> <?php echo $user["name"]; ?></h2>
						<!-- последнее сообщение пользователя -->
						<p class="user_text"> <?php echo $user["message"]; ?></p>
						<!-- вермя последнего сообщения -->
						<div class="time">09:00</div>
					</a>
				</li>

				<?php
					}
									// добавляем +1 к переменной подсчета колчества цыклов
				$i = $i + 1;	
			} 
			}
		?>
	</ul>
</div>