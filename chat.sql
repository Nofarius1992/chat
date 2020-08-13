-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 13 2020 г., 06:01
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
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `user_id_2`, `message`, `time`) VALUES
(1, 1, 22, 'Як справи, хлопче?', '2020-08-05 07:51:36'),
(2, 22, 1, 'Hi! Good, very good!', '2020-08-05 08:56:58'),
(3, 1, 22, 'І в мене не погано))', '2020-08-05 09:00:00'),
(4, 22, 1, 'Do you speak english?', '2020-08-05 09:55:18'),
(76, 1, 2, 'Привет. Как жизнь молодая?\r\n', '2020-08-11 18:16:29'),
(77, 3, 2, 'Привет Крис, сегодня встреча, ты не забыл?', '2020-08-11 18:16:56'),
(78, 4, 2, 'Максимушка, родненький, как ты там без нас?', '2020-08-11 18:17:09'),
(79, 22, 2, 'Завтра я подъеду.', '2020-08-11 18:17:21'),
(80, 2, 3, 'Я помню, ты не забудь заехать за мной)', '2020-08-11 18:18:12'),
(81, 1, 3, 'Как дела Пит? Как на новой квартире?', '2020-08-11 18:18:28'),
(82, 4, 3, 'Макс, я надеюсь наш договор в силе?', '2020-08-11 18:18:42'),
(83, 22, 3, 'Скоро скоро вже, ми побачимо Христа)', '2020-08-11 18:18:55'),
(84, 1, 4, 'Привет дружище, я в твоём городе)', '2020-08-11 18:19:26'),
(85, 2, 4, 'Без вас лучше))', '2020-08-11 18:19:58'),
(86, 3, 4, 'Да, конечно, скоро обменяю ресурс и тебе скину по почте.', '2020-08-11 18:20:15'),
(87, 22, 4, 'Привет.', '2020-08-11 18:20:20'),
(88, 2, 22, 'Буду ждать.', '2020-08-11 18:20:51'),
(89, 3, 22, 'Мы ждём этого момента) ', '2020-08-11 18:21:05'),
(90, 4, 22, 'Привет Максим.', '2020-08-11 18:21:15'),
(91, 2, 1, 'Лучше никогда небыло) ', '2020-08-11 18:21:41'),
(92, 3, 1, 'Дела отлично) Обживаемся)', '2020-08-11 18:21:52'),
(93, 4, 1, 'Заходи, адрес на электронку кину)', '2020-08-11 18:22:06'),
(94, 2, 4, 'Но))', '2020-08-13 05:29:26'),
(95, 1, 4, 'Адрес есть, скоро буду!', '2020-08-13 05:29:59'),
(96, 1, 4, 'Адрес есть, скоро буду!', '2020-08-13 05:30:42'),
(97, 22, 4, 'Как дела?', '2020-08-13 05:30:58'),
(98, 22, 4, 'Почему полчишь?', '2020-08-13 05:35:36'),
(100, 3, 4, 'Обменял.', '2020-08-13 06:08:00'),
(101, 3, 4, 'Обменял.', '2020-08-13 06:10:32'),
(102, 3, 4, 'Обменял.', '2020-08-13 06:10:54'),
(103, 4, 3, 'Забрал ресы. Спасибо за сотрудничество.', '2020-08-13 06:10:54');

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
(25, 'Petor', 'img/user.png', 'Я на месте.', 'petor@mail.com', '', 'qwe');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
