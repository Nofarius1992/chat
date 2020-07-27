<?php 
	// массив сообщений
	$message = [
		[
			// номер мообщения
			"id" => 1,
			// номер пользователя
			"user_id" => 1,
			// номер пользователя которому адресовано сообщение
			"user_id_2" => 2,
			// иконка пользователя
			"photo" => "img/user.png",
			// сообщение пользователя
			"message" => "Як справи, хлопче?",
			// время отправки сообщения
			"time" => "09:00",
		],

		[
			"id" => 2,
			"user_id" => 2,
			"user_id_2" => 1,
			"photo" => "img/user.png",
			"message" => "Hi! Good, very good!",
			"time" => "09:00",
		],

		[
			"id" => 3,
			"user_id" => 1,
			"user_id_2" => 2,
			"photo" => "img/user.png",
			"message" => "І в мене не погано))",
			"time" => "09:00",
		],

		[
			"id" => 4,
			"user_id" => 2,
			"user_id_2" => 1,
			"photo" => "img/user.png",
			"message" => "Do you speak english?",
			"time" => "09:00",
		],

		[
			"id" => 5,
			"user_id" => 1,
			"user_id_2" => 2,
			"photo" => "img/user.png",
			"message" => "Та нееее, я сельской парубок, куда же мне, давеча, инглиш спик делать?))",
			"time" => "09:00",
		],

		[
			"id" => 6,
			"user_id" => 3,
			"user_id_2" => 4,
			"photo" => "img/user.png",
			"message" => "І в мене не погано))",
			"time" => "09:00",
		],

		[
			"id" => 7,
			"user_id" => 4,
			"user_id_2" => 3,
			"photo" => "img/user.png",
			"message" => "Do you speak english?",
			"time" => "09:00",
		],

		[
			"id" => 8,
			"user_id" => 3,
			"user_id_2" => 4,
			"photo" => "img/user.png",
			"message" => "Та нееее, я сельской парубок, куда же мне, давеча, инглиш спик делать?))",
			"time" => "09:00",
		],
	];
?>

<?php 
	$i = 0;
	// цыкл вывода сообщений
	

		if(isset($_GET["user"])) {
			while ($i < count($message)) {
				if($message[$i]["user_id"] == $_GET["user"]) {
					// сообщение пользователя
					echo "<li>";
					// ссылка для информации о пользователе
					echo "<a href='/index.php?user=" . $message[$i]["user_id"] . "'>";

					// иконка пользователя
					echo "<div class=\"icon_user\">
						<img src=\"". $message[$i]["photo"] . "\" alt=\"user\">
						</div>";
					echo "</a>";	
					?>

					<?php 
						$user = getUser($message[$i]["user_id"], $users);
					 ?>
					
					<h2 class="user_name"><?php echo $user["name"]; ?></h2>

					<p class="user_text"><?php echo $message[$i]["message"] ?></p>

					<div class="time"><?php echo $message[$i]["time"] ?></div>
					<?php  
					echo "</li>";


					// ответное сообщение
					echo "<li>";
					// ссылка для информации о пользователе
					echo "<a href='/index.php?user=" . $message[$i]["user_id_2"] . "'>";

					// иконка пользователя
					echo "<div class=\"icon_user\">
						<img src=\"". $message[$i]["photo"] . "\" alt=\"user\">
						</div>";
					echo "</a>";	
					?>

					<?php 
						$user = getUser($message[$i]["user_id_2"], $users);
					 ?>
					
					<h2 class="user_name"><?php echo $user["name"]; ?></h2>

					<p class="user_text"><?php echo $message[$i]["message"] ?></p>

					<div class="time"><?php echo $message[$i]["time"] ?></div>
					<?php  
					echo "</li>";
					?>






					<?php
				}


		
		$i = $i + 1;
	}			
	} else {
			echo "<h2>Пользователь не выбран</h2>";
		}			
 ?>