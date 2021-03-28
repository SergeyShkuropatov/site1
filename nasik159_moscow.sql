-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 28 2021 г., 23:24
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nasik159_moscow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=654 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`ID`, `fio`, `email`, `text`, `date_create`) VALUES
(647, 'aaaaaaasssssssssss', 'axrro@mail.ru', 'i', '2021-03-19 04:39:12'),
(648, 'aaaaaaasssssssssss', 'axrro@mail.ru', 'i', '2021-03-19 04:39:14'),
(649, 's', 'axrro@mail.ru', 'k', '2021-03-19 04:40:01'),
(650, 's', 'axrro@mail.ru', 'k', '2021-03-19 04:40:06'),
(651, 's', 'axrro@mail.ru', 'rrrrrrrrrrr', '2021-03-20 03:42:03'),
(652, 'Дима', 'axrro@mail.ru', 'вввв', '2021-03-20 03:58:54');

-- --------------------------------------------------------

--
-- Структура таблицы `commentsi`
--

CREATE TABLE IF NOT EXISTS `commentsi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `text_comment` text NOT NULL,
  `date_create` char(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=879 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `commentsi`
--

INSERT INTO `commentsi` (`ID`, `avatar`, `email`, `fio`, `text_comment`, `date_create`) VALUES
(875, 'https://www.gravatar.com/avatar/0bfe1f52477742d6a42e3d74cc92c701?s=70&d=mp&r=g', 'axrro@mail.ru', 'Сергей', 'Выражаем благодарность компании за работу над улучшением нашего сайта finnair.com Я высоко оцениваю качество выполненных									работ по анализу потребностей пользователей и проектированию интерфейса новой системы личных сообщений. Считаю необходимым 							отдельно упомянуть ответственность по отношению к срокам выполнения поставленных задач и неукоснительное следование целям заказчика', '2021-03-20 01:36:15'),
(876, 'https://www.gravatar.com/avatar/d3ad1890aba310aa1de08ca3bc012b89?s=70&d=mp&r=g', 'aqrro@mail.ru', 'Оксана', 'С начала нашего сотрудничества чувствуется ответственное отношение менеджера к нашему проекту. В процессе своей деятельности \n									специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. \n									Нам отвечали своевременно на все возникающие вопросы, предоставляли консультации и рекомендации относительно нашего сайта. 						Чувствуется, что в данной компании работают настоящие профессионалы своего дела.', '2021-03-20 01:41:56'),
(877, 'https://www.gravatar.com/avatar/68c79863c0ec74d85d399ed569c99505?s=70&d=mp&r=g', 'agrro74@mail.ru', 'Иван', 'Был проведен комплексный анализ портала в плоскостях юзабилити и SEO, по результатам которого предоставлен \n									развернутый экспертный отчет с рекомендациями по оптимизации визуальной и текстовой составляющих. \n									Итоговые материалы были достойно оформлены и написаны доступным и понятным языком. Полученный документ лег в \nоснову измененной концепции работы над сайтом \"Viking Line\"', '2021-03-20 01:52:47');

-- --------------------------------------------------------

--
-- Структура таблицы `sliderheader`
--

CREATE TABLE IF NOT EXISTS `sliderheader` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `/` varchar(50) NOT NULL,
  `/tours` varchar(50) NOT NULL,
  `/contacts` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sliderheader`
--

INSERT INTO `sliderheader` (`ID`, `/`, `/tours`, `/contacts`) VALUES
(1, 'slider_index_1', 'slider_tours_1', 'slider_contacts_1'),
(2, 'slider_index_2', 'slider_tours_2', 'slider_contacts_2'),
(3, 'slider_index_3', 'slider_tours_3', 'slider_contacts_3');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text_comment` text NOT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=766 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscriber`
--

INSERT INTO `subscriber` (`ID`, `fio`, `email`, `text_comment`, `date_create`) VALUES
(750, 'лена', 'axrro@mail.ru', 'йййййййййййййй', '2021-03-20 02:13:06'),
(751, 'Ленуся2', 'aqrro@mail.ru', 'цццццццццц', '2021-03-20 02:13:25'),
(752, 'петя', 'axrro@mail.ru', 'вввввввввввв', '2021-03-20 02:13:44'),
(753, 'вася', 'axrro@mail.ru', 'мммммммммм', '2021-03-20 02:13:58'),
(754, 'ваня', 'aqrro@mail.ru', 'ччччччччччч', '2021-03-20 02:14:14'),
(755, 'оля', 'agrro74@mail.ru', 'ччччччччччччччччч', '2021-03-20 02:14:31'),
(756, 'Ленуся2', 'axrro@mail.ru', 'ааааааааааааааааааа', '2021-03-20 02:14:41'),
(757, 'Андрей', 'axrro@mail.ru', 'ввввввв', '2021-03-20 02:14:54'),
(758, 'Гена', 'axrro@mail.ru', 'аааааааааааааа', '2021-03-20 02:15:06'),
(759, 'Вася', 'axrro@mail.ru', '', '2021-03-20 03:22:10'),
(760, 'Петя', 'axrro@mail.ru', '', '2021-03-20 03:22:42'),
(761, 's', 'axrro@mail.ru', '', '2021-03-20 03:24:38'),
(762, 's', 'axrro@mail.ru', '', '2021-03-20 03:26:16'),
(763, 'Петя', 'axrro@mail.ru', 'пппппппп', '2021-03-20 03:27:09'),
(764, 'Гена', 'axrro@mail.ru', 'ффффф', '2021-03-20 03:59:50'),
(765, 'Петя2', 'axrro@mail.ru', 'йййййй', '2021-03-20 04:01:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
