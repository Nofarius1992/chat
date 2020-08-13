<?php 
	// здесь будет id авторизированного пользователя
	$polzovatel_id = null;

	// проверяем авторизовался ли пользователь
	if(isset($_COOKIE["user_id"])) {
		// добавляем в переменную $polzovatel_id id авторизированного пользователя
		$polzovatel_id = $_COOKIE["user_id"];
	}
 ?>