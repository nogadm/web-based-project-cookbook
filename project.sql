-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingredientID` int(11) NOT NULL,
  `ingredientName` text NOT NULL,
  `recpieID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `recpieID`) VALUES
(8, '3⁄4 כוס שמן', 2),
(9, '½1 כוסות קמח תופח', 2),
(10, '¼1 כוסות סוכר', 2),
(11, '3 כפות מים', 2),
(12, '2 ביצים', 2),
(13, '5 תפוחים ירוקים, קלופים וחתוכים', 2),
(14, '5 כפות סוכר', 2),
(15, '2 כוסות קמח לבן', 3),
(16, '2 1/2 כפיות אבקת אפייה', 3),
(17, '1 קורט מלח דק', 3),
(18, '1 ביצה L', 3),
(19, '2/3 כוס חלב 3%', 3),
(20, '60 גרם חמאה', 3),
(21, '1/4 כוס סוכר לבן', 3),
(23, '¼ כפית מלח', 1),
(28, '¾ כוס סוכר', 1),
(29, '¾ כוס מיץ לימון סחוט', 1),
(30, '1 כף גרידת לימון (בערך מ-2 לימונים)', 1),
(31, '½ 1 כוסות קמח תירס', 4),
(32, '¾ כוס קמח רגיל', 4),
(33, '2 כפיות אבקת אפייה', 4),
(34, '2 כפות סוכר', 4),
(35, '2 ביצים', 4),
(36, '1 כוס חלב או לבן בחוש (רוויון)', 4),
(37, '1 כוס שיבולת שועל מהירה - קוואקר (מומלץ להשתמש בשיבולת שועל עבה)', 5),
(38, '2 כפות שומשום', 5),
(39, 'כפית אבקת אפייה', 5),
(40, '3 כפות קמח', 5),
(41, '3 כפות אגוזי מלך טחונים', 5),
(42, 'קורט קינמון', 5),
(43, '2 כפות גדושות סוכר', 5),
(44, '1 ביצה', 5),
(45, '1 כפית דבש', 5),
(46, '2 כפות טחינה גולמית', 5),
(47, '1/3 כוס שמן', 5),
(48, 'חופן צימוקים', 5),
(49, '5 קוביות שוקולד מריר קצוצות עם סכין', 5),
(61, '1 כף קורנפלור', 1),
(62, '100 גרם חמאה חתוכה לקוביות', 1),
(63, '1 כוס קמח', 1),
(64, '1 כף אבקת סוכר', 1),
(65, '3 ביצים', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `instruction` int(11) NOT NULL,
  `instructionText` text NOT NULL,
  `recpieID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`instruction`, `instructionText`, `recpieID`) VALUES
(1, 'בצק פריך: במעבד מזון עם להב פלדה מעבדים יחד חמאה, קמח, אבקת סוכר, וניל ומלח לתערובת פירורית.', 1),
(1, 'בקערה גדולה מערבבים שמן, קמח, ¼1 כוסות סוכר, מים וביצים, עד לקבלת תערובת נוזלית ואחידה.', 2),
(1, 'מחממים תנור ל-220 מעלות.\r\nלקערה מנפים קמח, אבקת אפייה ומלח.', 3),
(1, 'מחממים את התנור לחום בינוני-נמוך (170 מעלות). משמנים תבנית רבועה (25X25 ס\"מ) או מוארכת (כמו של עוגה אנגלית) או תבנית מאפינס בעלת 12 שקעים.', 4),
(1, 'בקערה גדולה טורפים (עם מטרפה ידנית) ביצים, דבש, טחינה ושמן.', 5),
(2, 'מוסיפים חלמון וממשיכים לעבד רק עד שנוצרים גושי בצק. אם הבצק לא מתאחד, מוסיפים עוד 1-2 כפות חלב וממשיכים לעבד.', 1),
(2, 'בקערה נפרדת, מערבבים את פלחי התפוחים, סוכר וקינמון.', 2),
(2, 'פותחים ביצה למד ליטר ומוסיפים חלב עד שמגיעים ל-200 מ”ל כולל הביצה (כ-2/3 כוס חלב).\r\nלקערת הקמח מוסיפים קוביות חמאה ומפוררים בידיים עד לקבלת תערובת פירורית.', 3),
(2, 'בקערה גדולה מערבבים את קמח התירס עם הקמח, אבקת האפייה, הסוכר והמלח.', 4),
(2, 'מוסיפים לקערה את החומרים היבשים - קוואקר עם שומשום, אבקת אפייה, קמח, סוכר, אגוזי מלך וקינמון.', 5),
(3, 'מעבירים את גושי הבצק למשטח העבודה, מאחדים בידיים, משטחים לדיסקית ועוטפים בניילון נצמד. מצננים כ-1/2 שעה במקרר.', 1),
(3, 'משמנים תבנית פיירקס, שופכים שני שליש מהבצק, תוחבים את התפוחים לעיסת הבצק (המשקיענים יסדרו בצורת רעפים, אבל גם סידור פחות אלגנטי הולך) ואת הבצק הנותר שופכים מלמעלה.', 2),
(3, 'מערבבים פנימה את הסוכר. יוצרים גומה במרכז ומוסיפים מתערובת החלב כמעט הכל - משאירים בערך 20-30 מ”ל. מערבבים בידיים כמה שפחות, רק עד קבלת בצק רך ומעט רטוב. מעבירים את הבצק למשטח מקומח ולשים טיפה עד לקבלת כדור בצק חלק ללא סדקים.', 3),
(3, 'קערה אחרת טורפים את הביצים עם השמן והחלב או הלבן. יוצקים את תערובת הנוזלים לתערובת הקמח ומערבבים היטב.', 4),
(3, 'אם רוצים להוסיף צימוקים או שוקולד צ\'יפס זה הזמן להוסיף לבלילה.', 5),
(4, 'על משטח מקומח מרדדים את הבצק לעלה בעובי של כ-3 מ\"מ ומרפדים תבנית או רינג משומן קלות. דוקרים את בסיס הקלתית בעזרת מזלג ומצננים כ-1/2 שעה במקפיא.', 1),
(4, 'אופים ב-180 מעלות כ-50 דקות, עד להשחמה.', 2),
(4, 'בידיים מקומחות משטחים את הבצק לעיגול בעובי 2 ס”מ. קורצים לעיגולים בקוטר 5 ס”מ (הכי יפה בחותכן עם שוליים מסולסלים). את השאריות משטחים וקורצים שוב עד שנשאר מספיק לכדור אחד אחרון שמגלגלים בידיים.', 3),
(4, 'מעבירים את התערובת לתבנית ואופים כ-30 דקות (20 דקות למאפינס) או עד שמזהיב וקיסם הננעץ במרכז יוצא יבש. מגישים פושר או קר.', 4),
(4, 'מערבבים היטב את החומרים יחדיו ומעבירים למקרר ל-10 דקות. אם הבלילה נראית רטובה מידי, מוסיפים עוד כף קמח.', 5),
(5, 'מומלץ להגיש עם קצפת מתובלת בקינמון והל.', 2),
(5, 'מניחים באופן צפוף מעט על תבנית מרופדת בנייר אפייה (הלחמניות מתחברות וכך לא מתייבשות מכל הכיוונים בתנור).\r\nמברישים בשארית תערובת הביצה והחלב ואופים 8-10 דקות, עד להזהבה.', 3),
(5, 'מרפדים תבנית תנור בנייר אפייה, בידיים רטובות יוצרים מבלילת העוגיות כדורים ומניחים על התבנית, עם רווחים בין עוגייה לעוגייה, משטחים מעט עם מזלג.', 5),
(6, 'מצננים 5 דקות ומגישים בתוך מפית בד לשמירה על החום, בליווי חמאה וריבה.', 3),
(6, 'אופים את העוגיות בתנור חם על 180 מעלות כ-15 דקות או יותר, עד שהן משנות צבען לזהוב.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `recpie`
--

CREATE TABLE `recpie` (
  `recpieID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `userWrote` varchar(20) NOT NULL,
  `picLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recpie`
--

INSERT INTO `recpie` (`recpieID`, `name`, `date`, `description`, `userWrote`, `picLink`) VALUES
(1, 'פאי לימון', '2022-02-04', 'יש דברים שפשוט שווים את המאמץ: פאי לימון עם בצק פריך שטוב להכיר באופן כללי, קרם לימון קטיפתי ונהדר ומרנג אוורירי, קליל ושחום בקצוות. מקציפים, מערבבים, אופים ומצננים, ואז מזמינים את מי שמגיע לו', 'stephh577', 'images/recpies/1.jpg'),
(2, 'עוגת תפוחים', '2021-10-24', 'היא פשוטה לאללה להכנה, אבל היא טעימה באופן שערורייתי. אם מגישים את עוגת התפוחים הבחושה הזו חמה עם קצפת מתובלת בקינמון והל היא בכלל הופכת לקינוח מושחת', 'meshel', 'images/recpies/2.jpg'),
(3, 'סקונס', '2018-06-04', 'צא לכם כבר לטעום סקונס? אין לכם מושג מה זה? סקונס זה לחמניות חמאה מפורסמות מאנגליה, פשוטות ומהירות הכנה, שהכי טעים להגיש עם תוספת חמאה וריבה', 'rob', 'images/recpies/3.jpg'),
(4, 'לחם תירס', '2021-03-30', 'לחם תירס הוא אחד המאפים הקלים ביותר להכנה ויש לו בהתאם המון מתכונים. הנה המתכון של מארק ביטמן, מחבר הספר \"איך לבשל הכל צמחוני\"', 'bethany_weathersby', 'images/recpies/4.jpg'),
(5, 'עוגיות שיבולת שועל', '2019-04-01', 'מתכון לעוגיות שיבולת שועל קריספיות, בריאות ופרווה. עוגיות דיאטטיות עם טחינה, ללא קמח שניתן לשדרג עם שוקולד צ\'יפס וצימוקים', 'happygolucky', 'images/recpies/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `mail` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `activationKey` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`mail`, `username`, `password`, `activationKey`, `isActive`) VALUES
('bethany_weathersby@test.com', 'bethany_weathersby', '432452', 0, 0),
('happygolucky@test.com', 'happygolucky', '4r34525', 0, 0),
('meshel@test.com', 'meshel', '12345', 0, 0),
('rob@test.com', 'rob', '1234555', 0, 0),
('test@test.com', 'stephh577', '1234', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingredientID`,`recpieID`),
  ADD KEY `ingredient_ibfk_1` (`recpieID`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`instruction`,`recpieID`),
  ADD KEY `instruction_ibfk_1` (`recpieID`);

--
-- Indexes for table `recpie`
--
ALTER TABLE `recpie`
  ADD PRIMARY KEY (`recpieID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `userWrote` (`userWrote`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingredientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `recpie`
--
ALTER TABLE `recpie`
  MODIFY `recpieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`recpieID`) REFERENCES `recpie` (`recpieID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instruction`
--
ALTER TABLE `instruction`
  ADD CONSTRAINT `instruction_ibfk_1` FOREIGN KEY (`recpieID`) REFERENCES `recpie` (`recpieID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recpie`
--
ALTER TABLE `recpie`
  ADD CONSTRAINT `recpie_ibfk_1` FOREIGN KEY (`userWrote`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
