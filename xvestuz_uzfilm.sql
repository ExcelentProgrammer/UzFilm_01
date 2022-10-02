-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 02 2022 г., 09:42
-- Версия сервера: 10.3.36-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `xvestuz_uzfilm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `FilmName` text NOT NULL,
  `FilmUrl` text NOT NULL,
  `FilmImg` text NOT NULL,
  `FilmCaption` text NOT NULL,
  `FilmHeight` text NOT NULL,
  `FilmSize` text NOT NULL,
  `FilmYear` text NOT NULL DEFAULT '\'2022\'',
  `FilmJanr` text NOT NULL DEFAULT 'Fantastik',
  `FilmState` text NOT NULL DEFAULT 'Amerika',
  `FilmYoung` text NOT NULL DEFAULT '\'\\\'16\\\'\'',
  `FilmRating` text NOT NULL DEFAULT '0',
  `FilmLanguage` text NOT NULL DEFAULT 'O\'zbek Tilida',
  `FilmDate` int(11) NOT NULL,
  `FilmWatch` int(11) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`FilmName`, `FilmUrl`, `FilmImg`, `FilmCaption`, `FilmHeight`, `FilmSize`, `FilmYear`, `FilmJanr`, `FilmState`, `FilmYoung`, `FilmRating`, `FilmLanguage`, `FilmDate`, `FilmWatch`, `ID`) VALUES
('Tungi Bo''rilar / Yosh bo''rilar AQSH seriali Barcha qismlar O''zbek tilida 2011-2017 Uzbekcha tarjima', 'http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q01%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', 'ecKg0ssom18qhII7puPoSZdzkos4h4QQgmc1LCfG7PoFLOFOdO.jpg', 'Serial Scott McCall ismli yosh lakroschi atrofida aylanadi. Bir kuni kechasi u o''rmon bo''ylab murdani qidirib yurdi va bo''ri hujum qildi. U bir oz tishlash bilan qutulishga muvaffaq bo''ldi. Ammo birozdan keyin u o''zida qandaydir o''zgarishlarni seza boshladi.', '720p', '419.56 MiB', '2022', 'Fantastik', 'Amerika', '18+', '3', 'O''zbek Tilida', 43, 10, 36),
('Flesh / Flash DC seriali Barcha qismlar O''zbek tilida 2014 Uzbekcha tarjima', 'http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%201-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', 'q4vxBR3dJm5CCsUq2OBJzIhPrtyNd0yYBCym80zJ60zzZe9eGp.jpg', 'Barri Allen yoshligida hamma narsadan ko''ra superqahramon bo''lishni xohlardi - inson tanasining chegarasidan oshib ketadigan va unga berilgan kuchdan yaxshilik uchun foydalanadi. Barri o''n bir yoshga to''lganda, u o''z tajribasidan g''ayrioddiy qobiliyatga ega odamlar borligini bilib oldi: onasi shu odamlardan biri tomonidan o''ldirilgan. O''sib ulg''aygan va sud-tibbiyot olimi bo''lgan Barri g''ayritabiiy odamlar haqidagi fikrlardan voz kechmadi va ularning mavjudligiga dalil qidirishda davom etdi, bu uning obro''siga va hamkasblari bilan muloqotiga eng yaxshi ta''sir ko''rsatmadi. Biroq, uning sa''y-harakatlari mukofotlanganidan keyin ...', '720p', '404.93 MiB', '2022', 'Fantastik', 'Amerika', '16+', '3', 'O''zbek Tilida', 43, 44, 37),
('Yuruvchi Murdalar Ujas va Zombi serial Barcha qismlar Uzbek tilida 2013-2021 O''zbekcha tarjima', 'http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%201-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '4OJmzTwtMB91cS6f7dJphAECN7ybJxt77vmsGfKKpQ4wvm3W1S.jpg', 'Seriya sherif oilasining "zombi" dan keyingi hayoti haqida hikoya qiladi - butun dunyoni apokaliptik nisbatlar epidemiyasi qamrab oldi. Sherif Rik Grimes oilasi va tirik qolganlarning kichik guruhi bilan xavfsiz yashash joyini izlab sayohat qiladi. Ammo doimiy o''lim qo''rquvi har kuni katta yo''qotishlarga olib keladi va qahramonlarga insoniyatning shafqatsizligining tubini his qiladi. Rik o''z oilasini qutqarishga harakat qiladi va tirik qolganlarning qo''rquvi er yuzida yurgan aqlsiz o''liklardan ko''ra xavfliroq ekanligini biladi', '720p', '881.41 MiB', '2022', 'Qo''rqinchli', 'Amerika', '18+', '3', 'O''zbek Tilida', 43, 39, 40),
('Olovli nigoh Uzbek tilida 2022 O''zbekcha tarjima kino HD', 'http://fayllar1.ru/18/kinolar/Olovli%20Nigoh%20720p%20O''zbek%20tilida%20(asilmedia.net).mp4', 'iknHakJ7QTp6VI8uUrOC23rkxqBIcoki9LENAAArnxytrF1aHR.jpg', 'O''n yil davomida Charli va uning oilasi qochib ketishdi. Qizning hukumat uchun katta qiziqish uyg''otadigan g''ayritabiiy kuchlari borligi sababli ular yashirinishga to''g''ri keladi. Ammo yong‘inni nazorat qilish tobora qiyinlashib bormoqda.', '720p', '470.76 MiB', '2022', 'Fantastik', 'Amerika', '16+', '3', 'O''zbek Tilida', 95, 2, 41),
('Jipers Kripers 2 ujas film Uzbek tilida 2002 O''zbekcha tarjima film Full HD skachat', 'http://fayllar1.ru/21/kinolar/Jippers%20Krippers%202%20720p%20O''zbek%20tilida%20(asilmedia.net).mp4', 'CqEeQxeGd6Gy7RgnpD7JErLIARW9bAylQVm24s9QrNBCJm9XtV.jpg', 'Har 23 yilda bir marta qanotli va tirnoqli yirtqich yirtqich hayvon 23 kun davomida inson go''shti va uning qurbonlari qo''rquvi bilan oziqlanish uchun uzoq uyqudan uyg''onadi. Uning dahshatli ziyofatining so''nggi kuni o''z nihoyasiga yetmoqda va bugun qadimgi noma''lum yovuzlikni boy yutuq - sport jamoasi va g''alabali o''yindan qaytadigan maftunkor muxlislar kutmoqda.\r\n\r\nUlar uyali telefonlari ishlamaydigan, yordam kutadigan odam yo‘q, kimsasiz katta yo‘lda buzilgan avtobusda yolg‘iz o‘zi. Quyosh botganda, ochko''z shayton o''zining qonli bakchanaliyasini boshlaydi. Uning o‘ljasi tonggacha omon qola oladimi yoki bu daxlsiz jonzot dahshatga tushgan o‘smirlarni birin-ketin o‘ldiradimi?', '720p', '819.66 MiB', '2022', 'Qo''rqinchli', 'Amerika', '18+', '2', 'O''zbek Tilida', 104, 4, 42),
('Oydagi Ritsar / Oy ritsari Marvel seriali Barcha qismlar O''zbek tilida 2021 Uzbekcha ', 'http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%201-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', 's81PLE6TWiB6DeVfST1wPWOulPOaX9REH2FrUdl4uUZ3q5xhsQ.jpg', 'Dissotsiativ kasallikka chalingan sobiq dengizchiga to''satdan Misr Oy Xudosining kuchi va kuchlari beriladi.', '720p', '417.09 MiB', '2021', 'Fantastik', 'Amerika', '16+', '3', 'O''zbek Tilida', 46, 20, 43);

-- --------------------------------------------------------

--
-- Структура таблицы `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `ID` int(11) NOT NULL,
  `UserAgent` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `guest`
--

INSERT INTO `guest` (`ID`, `UserAgent`) VALUES
(1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37'),
(2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37'),
(3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37'),
(4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37'),
(5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37'),
(6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37');

-- --------------------------------------------------------

--
-- Структура таблицы `multfilm`
--

CREATE TABLE IF NOT EXISTS `multfilm` (
  `FilmName` text NOT NULL,
  `FilmUrl` text NOT NULL,
  `FilmImg` text NOT NULL,
  `FilmCaption` text NOT NULL,
  `FilmHeight` text NOT NULL,
  `FilmSize` text NOT NULL,
  `FilmYear` text NOT NULL DEFAULT '\'2022\'',
  `FilmJanr` text NOT NULL DEFAULT 'Fantastik',
  `FilmState` text NOT NULL DEFAULT 'Amerika',
  `FilmYoung` text NOT NULL DEFAULT '\'\\\'16\\\'\'',
  `FilmRating` text NOT NULL DEFAULT '0',
  `FilmLanguage` text NOT NULL DEFAULT 'O\'zbek Tilida',
  `FilmDate` int(11) NOT NULL,
  `FilmWatch` int(11) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `multfilm`
--

INSERT INTO `multfilm` (`FilmName`, `FilmUrl`, `FilmImg`, `FilmCaption`, `FilmHeight`, `FilmSize`, `FilmYear`, `FilmJanr`, `FilmState`, `FilmYoung`, `FilmRating`, `FilmLanguage`, `FilmDate`, `FilmWatch`, `ID`) VALUES
('Kelajak avlod Multfilm Uzbek tilida 2018 O''zbekcha tarjima HD', 'http://fayllar1.ru/21/kinolar/Yangi%20avlod%20720p%20O''zbek%20tilida%20(asilmedia.net).mp4', 'kHti4msVaMxfKVgbGbQETErePGTma11vMOflahs8YsDtFIiGJa.jpg', 'Yaqin kelajak. Mey ismli o‘smir qiz yolg‘izlikda o‘sishi kerak: otasi oilani tark etgan, onasi esa o‘z qizidan ko‘ra ko‘proq yangi texnologiyalarga qiziqadi. Bir kuni u Meyni ilm-fan va texnologiyaning so''nggi yutuqlari ko''rgazmasiga olib boradi va u erda tasodifan yangi avlod robotining laboratoriyadan qochishiga yordam beradi. Va nihoyat, o''smirning haqiqiy do''sti bor.', '720p', '805.79 MiB', '2021', 'Nomalum', 'Amerika', '7+', '1', 'O''zbek Tilida', 106, 9, 1),
('Dengiz ahli Multfilm Uzbek tilida 2004 O''zbekcha tarjima HD', 'http://fayllar1.ru/21/kinolar/Dengiz%20ahli%20720p%20O''zbek%20tilida%20(asilmedia.net).mp4', '11i2TtsDh1WaXf9zMm92GkJoUkQBWgEANcZl8sHE7PfsTm2YOb.jpg', 'Akulalarning asosiy jinoiy to''dasi boshlig''ining o''g''lining o''ldirilishi butun suv osti dunyosini xavotirga solmoqda va voy, jinoyat sodir bo''lgan joyda shubhasiz Oskar qovurg''asi topildi! Oskar butun umri davomida kuchli va mashhur bo''lishni orzu qilgan va endi u boshqa birovning shon-shuhratidan foydalanish uchun ajoyib imkoniyatga ega edi. Ammo tez orada Oskar "Shark Storm" unvonini olib, nima qilganini tushunadi ...', '720p', '1.2 GiB', '2004', 'Nomalum', 'Amerika', '7+', '1', 'O''zbek Tilida', 90, 7, 2),
('Ella va sehrli tosh / Zolushka va sehrli toshning siri Multfilm Uzbek tilida 2021 O''zbekcha tarjima HD', 'http://fayllar1.ru/20/kinolar/Ella%20va%20sehrli%20tosh%202021%20720p%20O''zbek%20tilida%20(asilmedia.net).mp4', 'ml29kros2lpmC8WZtSO1qugMXfPD3PXafUDrgVAc19kUSOgQgt.jpg', 'Har bir malika himoyachiga muhtoj emas: ularning ba''zilari o''zlari uchun turishga qodir va bundan tashqari, o''z yaqinlariga muammodan yordam berishadi. Shahzoda Aleks uni sichqonga aylantirish uchun la''natlangan. Zolushka uni yovuz afsunlardan xalos qilishi va maftunkor do''stlari bilan unutilmas sayohatga chiqishi kerak.', '720p', '871.69 MiB', '2021', 'Nomalum', 'Amerika', '7+', '1', 'O''zbek Tilida', 81, 5, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `VideoID` int(11) NOT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Film'
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `playlist`
--

INSERT INTO `playlist` (`ID`, `UserID`, `VideoID`, `Type`) VALUES
(96, 29, 42, 'Film'),
(97, 29, 36, 'Film'),
(99, 29, 37, 'Film');

-- --------------------------------------------------------

--
-- Структура таблицы `serial`
--

CREATE TABLE IF NOT EXISTS `serial` (
  `FilmUrl` text NOT NULL,
  `FilmSize` text NOT NULL,
  `FilmSection` int(11) NOT NULL,
  `FilmID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `serial`
--

INSERT INTO `serial` (`FilmUrl`, `FilmSize`, `FilmSection`, `FilmID`, `ID`) VALUES
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%201-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '404.93 MiB', 1, 37, 67),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%202-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '333.53 MiB', 2, 37, 68),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%203-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '308.03 MiB', 3, 37, 69),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%204-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '389.98 MiB', 4, 37, 70),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%205-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '307.86 MiB', 5, 37, 71),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%206-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '306.82 MiB', 6, 37, 72),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%207-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '305.86 MiB', 7, 37, 73),
('http://fayllar1.ru/15/Seriallar/Flesh/Flesh%20DC%20Seriali%208-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '371.77 MiB', 8, 37, 74),
('http://fayllar1.ru/16/Seriallar/Flesh/Flesh%20DC%20Seriali%209-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '316 MiB', 9, 37, 75),
('http://fayllar1.ru/16/Seriallar/Flesh/Flesh%20DC%20Seriali%2010-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '345.18 MiB', 10, 37, 76),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q01%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '419.56 MiB', 1, 36, 77),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q02%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '464.95 MiB', 2, 36, 78),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q03%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '398.24 MiB', 3, 36, 79),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q04%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '354.98 MiB', 4, 36, 80),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q05%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '374.16 MiB', 5, 36, 81),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q06%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '370.1 MiB', 6, 36, 82),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q07%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '250.12 MiB', 7, 36, 83),
('http://fayllar1.ru/20/Seriallar/Tungi%20Bo''rilar/Tungi%20bo''rilar%20f01q08%20AQSH%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '405.02 MiB', 8, 36, 84),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%201-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '881.41 MiB', 1, 40, 85),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%202-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '559.2 MiB', 2, 40, 86),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%203-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '688.89 MiB', 3, 40, 87),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%204-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '552.25 MiB', 4, 40, 88),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%205-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '605.29 MiB', 5, 40, 89),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%206-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '452.97 MiB', 6, 40, 90),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%207-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '918.04 MiB', 7, 40, 91),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%208-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '372.99 MiB', 8, 40, 92),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%209-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '260.12 MiB', 9, 40, 93),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2010-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '423.55 MiB', 10, 40, 94),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2011-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '519.87 MiB', 11, 40, 95),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2012-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '424.61 MiB', 12, 40, 96),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2013-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '414.91 MiB', 13, 40, 97),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2014-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '384.77 MiB', 14, 40, 98),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2015-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '250.06 MiB', 15, 40, 99),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2016-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '476.43 MiB', 16, 40, 100),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2017-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '362.07 MiB', 17, 40, 101),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2018-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '419.66 MiB', 18, 40, 102),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2019-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '418.28 MiB', 19, 40, 103),
('http://fayllar1.ru/15/Seriallar/Yuruvchi%20Murdalar/Yuruvchi%20murdalar%20AQSH%20seriali%2020-qism%20O''zbek%20tilida%20(asilmedia.net).mp4', '452.25 MiB', 20, 40, 104),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%201-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '417.09 MiB', 1, 43, 105),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%202-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '361.33 MiB', 2, 43, 106),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%203-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '431.18 MiB', 3, 43, 107),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%204-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '336.01 MiB', 4, 43, 108),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%205-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '311.39 MiB', 5, 43, 109),
('http://fayllar1.ru/16/Seriallar/Oy%20ritsari/Oy%20ritsari%206-qism%20720p%20Marvel%20seriali%20O''zbek%20tilida%20(asilmedia.net).mp4', '304.37 MiB', 6, 43, 110),
('https://uzbeklar.biz/film4/tean-wolf/2-1qism.mp4', '381.11 MiB', 13, 36, 111);

-- --------------------------------------------------------

--
-- Структура таблицы `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `ID` int(11) NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAgent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `token`
--

INSERT INTO `token` (`ID`, `Token`, `UserAgent`, `Date`, `UserID`) VALUES
(18, '6bbb0216b8f8ee9a549ad8eac4c813a3b44d3d86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '2022-06-27 18:34:58', 29),
(19, '4edbdad402a5eb78a740c4a3738f1a67b06e630f', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '2022-06-27 18:56:43', 32),
(20, '52eab791c052ed8c5386ce176f09d808b11807b3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '2022-06-29 18:06:18', 29);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `UserRole` text NOT NULL DEFAULT 'User'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `UserRole`) VALUES
(29, 'samandar', 'azamov', 'admin', 'azamov.samandar@gmail.com', '04f9bd76314e771d973ea98613195f02413a5e5a', 'Admin'),
(32, '1', '1', 'admin1', 'azamov.samandar.programmer@gmail.com', '04f9bd76314e771d973ea98613195f02413a5e5a', 'User'),
(33, '1', '1', 'admin2', 'azamov.samandar.programmer2@gmail.com', '04f9bd76314e771d973ea98613195f02413a5e5a', 'User');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `FilmName` text NOT NULL,
  `FilmUrl` text NOT NULL,
  `FilmImg` text NOT NULL,
  `FilmCaption` text NOT NULL,
  `FilmHeight` text NOT NULL,
  `FilmSize` text NOT NULL,
  `FilmYear` text NOT NULL DEFAULT '\'2022\'',
  `FilmJanr` text NOT NULL DEFAULT 'Fantastik',
  `FilmState` text NOT NULL DEFAULT 'Amerika',
  `FilmYoung` text NOT NULL DEFAULT '\'\\\'16\\\'\'',
  `FilmRating` text NOT NULL DEFAULT '0',
  `FilmLanguage` text NOT NULL DEFAULT 'O\'zbek Tilida',
  `FilmDate` int(11) NOT NULL,
  `FilmWatch` int(11) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`FilmName`, `FilmUrl`, `FilmImg`, `FilmCaption`, `FilmHeight`, `FilmSize`, `FilmYear`, `FilmJanr`, `FilmState`, `FilmYoung`, `FilmRating`, `FilmLanguage`, `FilmDate`, `FilmWatch`, `ID`) VALUES
('Million jamoasi 2021 / Davron Kabulov Millionavirus / Millionvirus konserti Fevral oyi 2021 Xalqlar do''stligi saroyi Yuqori tiniqlikda', 'http://fayllar1.ru/15/kinolar/Million%20Jamoasi%202021%20720p%20(asilmedia.net).mp4', '2jMAZorUFrTJXzfeC62qjZwgE3dAny11WcBbFa8B5nWvonU9fu.jpg', 'Million Jamoasi Konsert dasturi 2020-2021-2022-2023-2024-2025\r\n\r\nmillion 2021 Fevral aprel mart konsert dasturi million konsert 2021 апрель скачать million 2021 konsert dasturi to''liq skachat million jamoasi 2021 konsert dasturi to''liq million 2021 konsert skachat million 2021 aprel konsert dasturi to''liq миллион 2021 концерт дастури скачать бесплатно миллион 2021 апрель концерт million jamoasi oktabr oyidagi konsert dasturi 2021 yil, million jamoasi konsert dasturi 2018 kuz, million jamoasi 2013 konsert dasturi toliq, million jamoasi 2021 MILLION JAMOASI KONSERT DASTURI 2021 (To''liq hd mp4 3gp) million konsert 2021 апрель скачать million 2021 konsert dasturi to''liq skachat million jamoasi 2021 konsert dasturi to''liq million 2021 aprel konsert dasturi to''liq skachat million 2021 konsert skachat million 2021 апрель скачать миллион 2021 скачать миллион 2021 концерт скачат\r\nmillion jamoasi, million jamoasi 2019, million konsert 2018, bravo jamoasi, million 2018, jamoa, janob rasul, daxshat prikol, prikollar, zamonaviy, yangi uzbek kliplari, klip, prikol, million2018, million2019, uzbek film, yangi video, xayotiy kulgu, yangi uzbek kino, valijon shamshiyev 2018, nike, o''zbekcha kilnolar, shavkat mirziyoyev, yangiliklar, lola yuldasheva 2015, mirzo teatri 2018prikol 2018, uz klip, iphone, qizlar, novinki, samsung, shukurullo isroilov 2018million jamoasi, million jamoasi 2019, million konsert 2018, bravo jamoasi, million 2018, jamoa, janob rasul, daxshat prikol, prikollar, zamonaviy, yangi uzbek kliplari, klip, prikol, million2018, million2019, uzbek film, yangi video, xayotiy kulgu, yangi uzbek kino, valijon shamshiyev 2018, nike, o''zbekcha kilnolar, shavkat mirziyoyev, yangiliklar, lola yuldasheva 2015, mirzo teatri 2018prikol 2018, uz klip, iphone, qizlar, novinki, samsung, shukurullo isroilov 2018', '720p', '1.65 GiB', '2021', 'Kamedia', 'O''zbekiston', '16+', '3', 'O''zbek Tilida', 130, 14, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `multfilm`
--
ALTER TABLE `multfilm`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT для таблицы `guest`
--
ALTER TABLE `guest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `multfilm`
--
ALTER TABLE `multfilm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `playlist`
--
ALTER TABLE `playlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT для таблицы `serial`
--
ALTER TABLE `serial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT для таблицы `token`
--
ALTER TABLE `token`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
