-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 12 2020 г., 06:30
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_id_2` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `user_id_2`, `photo`, `message`, `time`) VALUES
(1, 1, 22, 'img/user.png', 'Як справи, хлопче?', '2020-08-05 07:51:36'),
(2, 22, 1, 'img/user.png', 'Hi! Good, very good!', '2020-08-05 08:56:58'),
(3, 1, 22, 'img/user.png', 'І в мене не погано))', '2020-08-05 09:00:00'),
(4, 22, 1, 'img/user.png', 'Do you speak english?', '2020-08-05 09:55:18'),
(76, 1, 2, 'img/user.png', 'Привет. Как жизнь молодая?\r\n', '2020-08-11 18:16:29'),
(77, 3, 2, 'img/user.png', 'Привет Крис, сегодня встреча, ты не забыл?', '2020-08-11 18:16:56'),
(78, 4, 2, 'img/user.png', 'Максимушка, родненький, как ты там без нас?', '2020-08-11 18:17:09'),
(79, 22, 2, 'img/user.png', 'Завтра я подъеду.', '2020-08-11 18:17:21'),
(80, 2, 3, 'img/user.png', 'Я помню, ты не забудь заехать за мной)', '2020-08-11 18:18:12'),
(81, 1, 3, 'img/user.png', 'Как дела Пит? Как на новой квартире?', '2020-08-11 18:18:28'),
(82, 4, 3, 'img/user.png', 'Макс, я надеюсь наш договор в силе?', '2020-08-11 18:18:42'),
(83, 22, 3, 'img/user.png', 'Скоро скоро вже, ми побачимо Христа)', '2020-08-11 18:18:55'),
(84, 1, 4, 'img/user.png', 'Привет дружище, я в твоём городе)', '2020-08-11 18:19:26'),
(85, 2, 4, 'img/user.png', 'Без вас лучше))', '2020-08-11 18:19:58'),
(86, 3, 4, 'img/user.png', 'Да, конечно, скоро обменяю ресурс и тебе скину по почте.', '2020-08-11 18:20:15'),
(87, 22, 4, 'img/user.png', 'Привет.', '2020-08-11 18:20:20'),
(88, 2, 22, 'img/user.png', 'Буду ждать.', '2020-08-11 18:20:51'),
(89, 3, 22, 'img/user.png', 'Мы ждём этого момента) ', '2020-08-11 18:21:05'),
(90, 4, 22, 'img/user.png', 'Привет Максим.', '2020-08-11 18:21:15'),
(91, 2, 1, 'img/user.png', 'Лучше никогда небыло) ', '2020-08-11 18:21:41'),
(92, 3, 1, 'img/user.png', 'Дела отлично) Обживаемся)', '2020-08-11 18:21:52'),
(93, 4, 1, 'img/user.png', 'Заходи, адрес на электронку кину)', '2020-08-11 18:22:06');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `message`, `email`, `phone`, `password`) VALUES
(1, 'Peter', 'img/user.png', 'Hi! Good, very good!', 'peter@gmail.com', '213', 'qwe'),
(2, 'Joseph', 'img/user.png', 'Ок!', 'joseph@gmail.com', '565656', 'qwe'),
(3, 'Kris', 'img/userW.png', 'Как дела?', 'kris@gmail.com', '9868', 'qwe'),
(4, 'Max', 'img/user.png', 'Отлично!', 'max@gmail.com', '888', 'qwe'),
(22, 'QWE', 'img/user.png', 'Привет!', 'qwe@com', '', 'qwe'),
(23, 'Tug', '', '', 'tugrick@mail.com', '', 'qwe'),
(24, 'wer', 'img/user.png', '', 'wer', '', 'wer');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
