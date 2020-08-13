<div class="list">
	<ul>
		<?php 
			// формула для поиска в базе данных пользователей ($_GET["search-user"] - переменная взята из поля поиска index.php string 48)
			$sql = "SELECT * FROM `users` WHERE `name` LIKE '%" . $_GET["search-user"] . "%'";
			// делаем запрос в базу данных для поиска пользователей
			$result = mysqli_query($connect, $sql);
			// количество найденных пользователей по завпросу поиска
			$col__search_user = mysqli_num_rows($result);
			
			// цыкл для вывода пользователей 
			$i = 0;
			while($i < $col__search_user) {
				$search_user = mysqli_fetch_assoc($result);
				?>

				<li>
					<!-- ссылка на инофрмацию о пользователе
					создаётся переменная $_GET["user"]
					 -->
					<a href="/index.php?user= <?php echo $search_user["id"]; ?>"> 
						<!-- иконка пользователя -->
						<div class="icon_user">
							<img src='<?php echo $search_user["photo"]; ?>'  alt="user">
						</div>
						<!-- имя пользователя -->
						<h2 class="user_name"> <?php echo $search_user["name"]; ?></h2>
						<!-- последнее сообщение пользователя -->
						<p class="user_text"> <?php echo $search_user["message"]; ?></p>
						<!-- вермя последнего сообщения -->
						<div class="time">09:00</div>
					</a>
				</li>

				<?php

				$i = $i + 1;
			}
		 ?>
 	</ul>
 </div>