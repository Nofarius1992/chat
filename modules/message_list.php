<?php 
	$i = 0;
	// цыкл вывода сообщений
	while ($i < count($message)) {
		// сообщение
		echo "<li>";
			// ссылка для информации о пользователе
			echo "<a href='/index.php?user=" . $message[$i]["user_id"] . "'>";
				// иконка пользователя
				echo "<div class=\"icon_user\">
					<img src=\"". $message[$i]["photo"] . "\" alt=\"user\">
					</div>";
				echo "</a>";	
				// имя пользователя
				echo "<h2 class=\"user_name\">" . $message[$i]["name"] . "</h2>";
				// сообщение пользователя
				echo "<p class=\"user_text\">" . $message[$i]["message"] . "</p>";
				// время отправки сообщения
				echo "<div class=\"time\">09:00</div>";
			
		echo "</li>";
		// добавляем +1 к переменной подсчета количества цыклов
		$i = $i + 1;
	}						
 ?>