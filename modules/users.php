<?php 
	// массив с пользователями
	$users = [
		[
			// номер пользователя
			"id" => 1,
			// имя пользователя
			"name" => "Peter",
			// иконка пользователя
			"photo" => "img/user.png",
			// сообщение пользователя
			"message" => "Привет!",
			// массив контактов пользователя
			"contacts" => [
				// почта пользователя
				"email" => "peter@gmail.com",
				// телефон пользователя
				"phone" => "213",
			]
		],

		[
			"id" => 2,
			"name" => "Joseph",
			"photo" => "img/user.png",
			"message" => "Ок!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "565656",
			]
		],

		[
			"id" => 3,
			"name" => "Kris",
			"photo" => "img/userW.png",
			"message" => "Как дела?",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "9868",
			]
		],

		[
			"id" => 4,
			"name" => "Max",
			"photo" => "img/user.png",
			"message" => "Отлично!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "888",
			]
		],

		[
			"id" => 5,
			"name" => "Jo",
			"photo" => "img/user.png",
			"message" => "Скоро увидимся!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "45212",
			]
		],

		[
			"id" => 6,
			"name" => "Jack",
			"photo" => "img/user.png",
			"message" => "Наверное завтра!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "3589",
			]
		],

		[
			"id" => 7,
			"name" => "Sim",
			"photo" => "img/user.png",
			"message" => "Возможно!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "58",
			]
		],

		[
			"id" => 8,
			"name" => "Li",
			"photo" => "img/user.png",
			"message" => "Полёт нормальный!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "427",
			]
		],

		[
			"id" => 9,
			"name" => "Martin",
			"photo" => "img/user.png",
			"message" => "Сколько можно то?",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "6753",
			]
		],

		[
			"id" => 10,
			"name" => "Angella",
			"photo" => "img/userW.png",
			"message" => "Классно тебе!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "78",
			]
		],

		[
			"id" => 11,
			"name" => "Milya",
			"photo" => "img/userW.png",
			"message" => "Привет!",
			"contacts" => [
				"email" => "peter@gmail.com",
				"phone" => "452",
			]
		],
	]; // конец массива с пользователями

	// функция получения пользователя
	function getUser($id, $users) {
		$i = 0;
		while ($i < count($users)) {
			if($users[$i]["id"] == $id) {
				return $users[$i];
			}
			$i += 1;
		}
	} //конец функции получения пользователя
 ?>


