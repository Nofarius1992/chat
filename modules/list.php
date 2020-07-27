
<!-- Список пользователей -->
<div class="list">
	<ul>
		<?php
			$i = 0;
			// цыкл вывода пользователей
			while($i < count($users)) {
			echo "<li>";
				// ссылка на инофрмацию о пользователе
				echo "<a href='/index.php?user=" . $users[$i]["id"] . "'>";
					// иконка пользователя
					echo "<div class=\"icon_user\">
						      <img src=\"" . $users[$i]["photo"] . "\" alt=\"user\">
						  </div>";
						  // имя пользователя
					echo "<h2 class=\"user_name\">" . $users[$i]["name"] . "</h2>";
					// последнее сообщение пользователя
					echo "<p class=\"user_text\">" . $users[$i]["message"] . "</p>";
					// вермя последнего сообщения
					echo "<div class=\"time\">09:00</div>";
				echo "</a>";
			echo "</li>";
			// добавляем +1 к переменной подсчета колчества цыклов
			$i = $i + 1;
			}
		?>
	</ul>
</div>