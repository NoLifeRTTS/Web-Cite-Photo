-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 07:28
-- Версия сервера: 5.6.41
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbstore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `productname` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `unicid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `link` text NOT NULL,
  `likeid` text NOT NULL,
  `basketid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`id`, `productname`, `category`, `description`, `price`, `link`, `likeid`, `basketid`) VALUES
(1, 'Профессиональный микрофон для камеры Canon Nikon Sony DSLR DV Camcorder', 'accessories', 'VideoMic с системой подвески Rycote Lyre от Rode-это микрофон дробовика, который легко устанавливается на DSLR камеру. ', 9000, 'img/catalog/accessories1.png', 'l1', 'b1'),
(2, 'Штатив Falcon Eyes CinemaPRO VT-1695', 'accessories', 'Видеоштатив Falcon Eyes CinemaPRO VT-1695 универсальный 4-секционный с выдвижной центральной колонной и механизмом реверсивного складывания ножек', 5200, 'img/catalog/accessories2.png', 'l2', 'b2'),
(3, 'Вспышка Hahnel MODUS 600RT Wireless Kit for Canon', 'accessories', 'Вспышка Hahnel Modus 600RT MKII - это полнофункциональная вспышка, предназначенная для того, чтобы помочь вам максимально эффективно использовать камеру благодаря мощности искусственного освещения.', 25000, 'img/catalog/accessories3.jpg', 'l3', 'b3'),
(4, 'Fujifilm Once Imaging Camera Instax Mini9, мгновенный Polaroid', 'cameras', 'Instax mini 9 - новинка в линейке камер моментальной печати. Это стильное обновление самой популярной в мире камеры формата мини. ', 6400, 'img/catalog/camera1.jpg', 'l4', 'b4'),
(5, 'Фотоаппарат компактный Sony CyberShot HX400 Black', 'cameras', 'Мощный 50-кратный оптический зум и чувствительная матрица Exmor R CMOS 20,4 МП обеспечивают высокую четкость сюжетов как вблизи, так и на расстоянии.', 29900, 'img/catalog/camera2.png', 'l5', 'b5'),
(6, 'Фотоаппарат Zenit TTL 12', 'cameras', 'Советский зеркальный пленочный фотоаппарат Zenit TTL 12. Крепление – М42.\r\nОтличительной чертой данной модели стало введение механизма «прыгающей» нажимной диафрагмы и фокусировочного экрана.', 6000, 'img/catalog/camera3.jpg', 'l6', 'b6'),
(7, 'Объектив Canon EF50mm f/1.4 USM', 'objectives', 'Имея самую широкую диафрагму среди всех выпускаемых Canon объективов серии EF, новая модель обеспечивает точный контроль глубины резкости, а также отличную производительность в условиях низкой освещённости. ', 31900, 'img/catalog/objective1.jpg', 'l7', 'b7'),
(8, 'Объектив Sony FE 50mm F1.8 (SEL50F18F)', 'objectives', 'Продвинутая оптическая схема типа «планар» включает асферический оптический элемент, за счет которого минимизируется сферическая аберрация и кома и обеспечивается высокое качество изображения вплоть до самых краев кадра.', 22900, 'img/catalog/objective2.png', 'l8', 'b8'),
(9, 'Объектив Canon EF 24-70mm F4.0 L IS USM', 'objectives', 'Объектив Canon EF 24-70mm F4.0 L IS USM изготовлен в качестве универсальной модели. Устройство имеет широкий диапазон фокусировки от 24 до 70 мм. Это позволяет создавать как масштабные пейзажные полотна, так и детальные фотопортреты.', 67000, 'img/catalog/objective3.jpg', 'l9', 'b9');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin@mail.ru', '$2y$10$W.zsskW5PdnyVc4OJn4iKOMVZzT0wWu3f5JVNFFbzuK/kqLgrsw0a');

-- --------------------------------------------------------

--
-- Структура таблицы `wishes`
--

CREATE TABLE `wishes` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `username` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `unicid` text NOT NULL,
  `basketid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishes`
--

INSERT INTO `wishes` (`id`, `productname`, `username`, `link`, `description`, `price`, `unicid`, `basketid`) VALUES
(1, 'Fujifilm Once Imaging Camera Instax Mini9, мгновенный Polaroid', 'admin', 'img/catalog/camera1.jpg', 'Instax mini 9 - новинка в линейке камер моментальной печати. Это стильное обновление самой популярной в мире камеры формата мини. ', 6400, 'l4.admin', 'b4'),
(2, 'Фотоаппарат компактный Sony CyberShot HX400 Black', 'admin', 'img/catalog/camera2.png', 'Мощный 50-кратный оптический зум и чувствительная матрица Exmor R CMOS 20,4 МП обеспечивают высокую четкость сюжетов как вблизи, так и на расстоянии.', 29900, 'l5.admin', 'b5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
