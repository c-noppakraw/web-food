-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 12:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass_admin` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `pass_admin`) VALUES
(1, 'Game', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cocktail`
--

CREATE TABLE `cocktail` (
  `id_cocktail` int(11) NOT NULL,
  `name_cocktail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material` text COLLATE utf8_unicode_ci NOT NULL,
  `method` text COLLATE utf8_unicode_ci NOT NULL,
  `name_cook` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cocktail_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cocktail`
--

INSERT INTO `cocktail` (`id_cocktail`, `name_cocktail`, `material`, `method`, `name_cook`, `cocktail_link`) VALUES
(1, 'น้ำเต้าหู้', 'สำหรับ 6-7 ที่<br>\r\nเวลา 1 ชั่วโมง<br><br>\r\n\r\n1. ถั่วเหลืองเลาะเปลือก 1 ถ้วย <br>\r\n2. น้ำสะอาด 7 ถ้วย <br>\r\n3. น้ำตาลทราย 3/4 ถ้วย<br>', '1.   ล้างทำความสะอาดถั่วให้สะอาดแล้วแช่น้ำไว้อย่างน้อย 6 ชั่วโมง <br>\r\n2.   โม่หรือบดถั่วให้ละเอียด กรองด้วยผ้าขาวบางแยกน้ำออก หากมีเครื่องแยกกากก็ใช้เครื่องแยกกากก็ได้ค่ะ <br>\r\n3.   นำขึ้นตั้งไฟ ตอนใกล้ๆ เดือดต้องคอยคนอยู่เสมอเพื่อไม่ให้ไหม้ <br>  \r\n4.   ใส่น้ำตาลทราย คนให้ละลายแล้วปิดไฟ พร้อมเสิร์ฟ <br>', 'FoodTravelTV', 'https://www.youtube.com/embed/UPZgzvYXNP4'),
(2, 'น้ำเต้าหู้งาดำ', 'สำหรับ 6-7 ที่<br>\r\nเวลา 30 นาที<br><br>\r\n\r\n1. ถั่วเหลือง 500 กรัม<br>\r\n2. งาดำ 1-2 ช้อนโต๊ะ<br>\r\n3. น้ำอุ่น<br>\r\n4. น้ำตาลทราย 3/4 ถ้วย<br>', '1.  ล้างถั่วเหลืองให้สะอาดตักขึ้นสะเด็ดน้ำ จากนั้นนำไปคั่วในกระทะจนแห้งและมีกลิ่นหอม แล้วนำไปแช่ในน้ำสะอาดทิ้งไว้ประมาณ 3 ชั่วโมง <br>\r\n2.   ล้างงาดำให้สะอาด ตักขึ้นสะเด็ดน้ำ จากนั้นนำไปคั่วจนมีกลิ่นหอม<br>\r\n3.   ใส่ถั่วเหลืองที่แช่น้ำจนนิ่มแล้วลงในเครื่องปั่น ตามด้วยงาดำคั่วและน้ำอุ่นจนท่วม ปั่นจนละเอียด ยกลงกรองด้วยผ้าขาวบาง เอาเฉพาะน้ำ<br>\r\n4.   เทน้ำเต้าหู้งาดำลงในหม้อ นำขึ้นตั้งไฟต้มจนเดือด หมั่นคนสม่ำเสมอเพื่อไม่ให้ก้นหม้อไหม้ เติมน้ำตาลทรายลงไป ชิมรสตามชอบ คนผสมให้เดือดอีกครั้ง ยกลงจากเตา ตักใส่แก้ว พร้อมดื่ม<br>', 'FoodTravelTV', 'https://www.youtube.com/embed/2-iQXQAJ-bA');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_emp` int(11) NOT NULL,
  `user_emp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass_emp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name_emp` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_emp`, `user_emp`, `pass_emp`, `name_emp`) VALUES
(1, 'TGame', '123456', 'นพเกล้า  จันทร์กลาง'),
(3, 'สัสปัก', '123456', 'นายปัก ปักปัก');

-- --------------------------------------------------------

--
-- Table structure for table `meat_food`
--

CREATE TABLE `meat_food` (
  `id_meat_food` int(11) NOT NULL,
  `name_meat_food` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material` text COLLATE utf8_unicode_ci NOT NULL,
  `method` text COLLATE utf8_unicode_ci NOT NULL,
  `name_cook` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meat_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meat_food`
--

INSERT INTO `meat_food` (`id_meat_food`, `name_meat_food`, `material`, `method`, `name_cook`, `meat_link`) VALUES
(1, 'หมูโสร่ง บุพเพสันนิวาส', '- หมูบดติดมัน 350 g <br>\r\n- ไข่ไก่ 1 ฟอง  <br>\r\n- น้ำปลา 1 ช้อนโต๊ะ  <br>\r\n- รากผักชี กระเทียม พริกไทย​โขลก 1 ช้อนโต๊ะ  <br>\r\n- เส้นหมี่ซั่ว แช่น้ำ 200 g  <br>\r\n- น้ำมันพืชสำหรับทอด  <br>\r\n <br>\r\nสูตรน้ำจิ้ม  <br>\r\n- น้ำตาลทราย 4 ช้อนโต๊ะ  <br>\r\n- น้ำส้มสายชู 3 ช้อนโต๊ะ  <br>\r\n- น้ำเปล่า 3 ช้อนโต๊ะ  <br>\r\n- พริกแดงซอย 2-3 เม็ด  <br>\r\n- หอมแดงซอย 2 ช้อนโต๊ะ  <br>\r\n- แครอท / แตงกวา 2 ช้อนโต๊ะ  <br>\r\n- ผักชี 1 ช้อนชา  <br>\r\n- เกลือ 1 ช้อนชา  <br>', '- เริ่มจากการเตรียมชาม ใส่หมูบด รากผักชี กระเทียม พริกไทยที่ตำไว้แล้ว ใส่น้ำปลา ไข่ไก่ นวดให้เข้ากันดี พักไว้ประมาณ 10 นาที  <br><br>\r\n- เตรียมเส้นหมี่ซั่วแช่น้ำให้นุ่ม พักไว้ให้สะเด็ดน้ำ ปั้นหมูหมักเป็นก้อนกลม ขนาดพอคำ หรือ เล็กใหญ่ตามชอบ หยิบเส้นหมี่ซั่วทีละเส้นจะพันง่ายค่ะ ถ้าชำนาญแล้ว จะหยิบ 2-3 เส้นก็ได้ค่ะ พันไปมาให้รอบก้อนหมูสับเลยค่ะ พันปิดเนื้อหมูให้มากที่สุด  จากนั้นใช้ปลายเสียบลูกชิ้นด้านที่ไม่แหลม กดลงไปให้เส้นจมลงในเนื้อหมู เวลาทอดจะได้ไม่หลุดค่ะ \r\n<br><br>\r\n- ตั้งกระทะใส่น้ำมันเยอะ ใช้ไฟอ่อนในการทอด พอน้ำมันร้อนก็ค่อยๆ คีบหมูโสร่งลงไปทอดทีละชิ้น คนเบาๆ จนหมูสุกกรอบดี ก็ตักพักไว้ให้สะเด็ดน้ำมัน จัดใส่จาน เสิร์ฟพร้อมน้ำจิ้มอาจาด อร่อยเข้ากันมาก หรือจะเปลี่ยนเป็นซอสพริก ซอสมะเขือเทศ น้ำจิ้มไก่ก็ได้ค่ะ ตามชอบเลย \r\n<br><br>', 'ครัวพิศพิไล', 'https://www.youtube.com/embed/8eG85GuhQPE'),
(2, 'ซี่โครงหมูอบโบราณ', 'สำหรับซี่โครงหมู 1/2 กิโลกรัม<br>\r\nเวลา 30 นาที (ตุ๋น 3 ชั่วโมง)\r\n<br><br>\r\n1. ซี่โครงหมู 1/2 กิโลกรัม<br>\r\n2. กระเทียมสับหยาบ 1 1/2 ช้อนโต๊ะ<br>\r\n3. รากผักชีสับหยาบ 1 1/2 ช้อนโต๊ะ<br>\r\n4. ผงยี่หร่า 2 ช้อนชา<br>\r\n5. ซอสมะเขือเทศ 2 ช้อนโต๊ะ<br>\r\n6. ซอสพื้นฐาน 6 ช้อนโต๊ะ<br>\r\n7. เนยจืด 2 ช้อนโต๊ะ<br>\r\n8. จิ๊กโฉ่ว 1 1/2 ช้อนโต๊ะ<br>\r\n9. ผักชี ตกแต่ง<br>', '1. ย่างซี่โครงหมูเพื่อให้เกิดสีสันสวยงาม พักไว้<br>\r\n2. ตั้งกระทะใบเดิมใส่กระเทียม รากผักชี พอได้ที่แล้วใส่ยี่หร่า น้ำเปล่า ซอสมะเขือเทศผัดให้เข้ากัน แล้วใส่ซอสพื้นฐาน เนย จิ๊กโฉ่วผัดคลุกเคล้าให้เข้ากัน ใส่ซี่โครงหมูแล้วเติมน้ำลงไปแล้วปิดฝาตุ๋น 2-3 ชั่วโมง<br>\r\n3. ตักใส่ภาชนะพร้อมเสิร์ฟโรยด้วยผักชี<br>', 'FoodTravelTV', 'https://www.youtube.com/embed/ycg_pR-57RI'),
(3, 'ปีกไก่ทอดรสต้มยำ', 'สำหรับ 1-2 ที่<br>\r\nเวลา 50 นาที<br><br>\r\n\r\n1. ปีกกลางไก่ 600 กรัม<br>\r\n2. ผงปรุงรสต้มยำ 3 ช้อนโต๊ะ<br>\r\n3. ตะไคร้ทุบฉีกเส้น 1/2 ถ้วยตวง<br>\r\n4. ใบมะกรูดฉีกก้านกลางออก 5 ใบ<br>\r\n5. พริกขี้หนูแห้ง 10 เม็ด<br>\r\n6. แป้งทอดกรอบ 1/2 ถ้วย<br>\r\n7. น้ำเย็นจัด<br>', '1.   ผสมปีกกลางไก่ ผงปรุงรสต้มยำ แป้งทอดกรอบและน้ำเย็นจัด คลุกเคล้าพอเข้ากัน หมักทิ้งไว้ประมาณ 15-20 นาที<br>\r\n2.   ตั้งกระทะใส่น้ำมันพอร้อน ใส่ตะไคร้ ใบมะกรูด พริกขี้หนูแห้งลงทอดตามลำดับพอเหลืองกรอบ ตักขึ้นพักไว้<br>\r\n3.   ใส่ปีกกลางไก่ลงทอดพอสุกเหลือง ตักขึ้นพักไว้ให้สะเด็ดน้ำมัน<br>\r\n4.   ใส่เครื่องที่ทอดและปีกไก่ทอดลงในภาชนะ จัดเสิร์ฟ<br>\r\n', 'FoodTravelTV', 'https://www.youtube.com/embed/VB2dp6FYzn8'),
(4, 'สเต็กปัก จิ้มแจ่ว', '1.เนื้อหมาปัก<br>\r\n2.หอม พริก', '1.ย่าง', 'อ.โค๊ด', 'https://www.youtube.com/embed/EPJ0P3ge5KQ');

-- --------------------------------------------------------

--
-- Table structure for table `sweets_food`
--

CREATE TABLE `sweets_food` (
  `id_sweets_food` int(11) NOT NULL,
  `name_sweets_food` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material` text COLLATE utf8_unicode_ci NOT NULL,
  `method` text COLLATE utf8_unicode_ci NOT NULL,
  `name_cook` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sweets_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sweets_food`
--

INSERT INTO `sweets_food` (`id_sweets_food`, `name_sweets_food`, `material`, `method`, `name_cook`, `sweets_link`) VALUES
(1, 'โมจิ Mochi (ขนมญี่ปุ่น)', 'สำหรับ  12-15 ชิ้น <br>\r\nเวลาในการทำ 1 ชั่วโมง<br>\r\n\r\n1. แป้งข้าวเจ้า 50 กรัม<br>\r\n2. แป้งข้าวเหนียว 150 กรัม<br>\r\n3. น้ำตาลทราย 50 กรัม<br>\r\n4. เกลือ 1/4 ช้อนชา<br>\r\n5. น้ำเปล่า 250 กรัม<br>\r\n6. สตรอเบอร์รี่สด 200 กรัม<br>\r\n7. งาคั่ว 15 กรัม<br>\r\n8. ชาเขียว 5 กรัม<br>\r\n9. แครอท 40 กรัม<br>\r\n10. ผิวเลม่อน 1/2 ลูก<br>\r\n11. แป้งข้าวโพด 200 กรัม (โรย, คลุกโมจิ)<br>\r\n12. สีผสมอาหาร (ตามชอบ)<br>', '1. เริ่มทำสีต่างๆของโมจิก่อน <br>\r\nสีชมพู = สตรอเบอร์รี่<br>\r\nสีส้ม = แครอท<br>\r\nสีเขียว = ชาเขียว<br>\r\nสีเหลือง = เลม่อน<br>\r\n2. นำสตรอเบอร์รี่ไปปั่นและแยกน้ำออกมา (พักไว้)<br>\r\n3. นำแครอทมาขูดบีบคั้นน้ำออกมา (พักไว้)<br>\r\n4. ขูดผิวเลม่อน (พักไว้)<br>\r\n5. เริ่มทำแป้งโมจิ นำแป้งข้าวเจ้า แป้งข้าวเหนียว น้ำตาลทราย และเกลือ น้ำเปล่า ผสมให้เข้ากัน<br>\r\n6. แบ่งใส่ชามเป็น 7 ชามเท่าๆกัน แต่ละชามใส่น้ำสีคนละชาม<br>\r\n7. ได้แก่น้ำสีชมพูใส่น้ำสตรอเบอร์รี่<br>\r\n8. ชามสีส้มใส่น้ำแครอท<br>\r\n9. ชามสีเขียวใส่ผงชาเขียว<br>\r\n10. ชามสีเหลืองใส่ผิวเลม่อน และสีเหลืองนิดหน่อย<br>\r\n11. ชามงาดำ ใส่งาดำ<br>\r\n12. ชามสีขาว ไม่ใส่อะไรเลย<br>\r\n13. เมื่อครบ นำชามแต่ละใบเข้าไมโครเวฟ โดยหาจานปิดด้านบน<br>\r\n14. เข้า 2-3 นาที 3 รอบ ทุกรอบนำออกมาคนให้เข้ากันก่อนนำเข้าไมโครเวฟรอบต่อไป<br>\r\n15. เมื่อครบทุกสี นำมาปั้นเป็นก้อนกลมเท่าๆกัน <br>\r\n16. คลุกโรยด้วยแป้งข้าวโพด<br>', 'FoodTravelTV', 'https://www.youtube.com/embed/-6Ub30-ZDzU'),
(2, 'เค้กชาไทยครีมสด', 'สำหรับ 6-8 ที่<br>\r\nเวลา 1 ชั่วโมง<br><br>\r\n\r\n1. แป้งเค้ก 100 กรัม<br>\r\n2. ผงฟู 1 ช้อนชา<br>\r\n3. ไข่แดง 4 ฟอง<br>\r\n4. น้ำตาลทราย 150 กรัม<br>\r\n5. น้ำชาไทย 130 กรัม <br>\r\n6. น้ำมัน 50 กรัม<br><br>\r\n\r\nส่วนผสมที่2<br>\r\n1. ไข่ขาว 4 ฟอง<br>\r\n2. น้ำตาลทราย 250 กรัม<br>\r\n3. เกลือ เล็กน้อย<br><br>\r\n\r\n\r\nส่วนผสมตกแต่ง<br>\r\n1. วิปปิ้งครีม 350 กรัม<br>\r\n2. ไวท์ช็อกโกแลต  ตามชอบ<br>', '1. ร่อนแป้งเค้ก ผงฟู เข้าด้วยกัน<br>\r\n2. ตีไข่แดงกับน้ำตาลทรายให้ขึ้นฟูจนเหลืองนวล<br>\r\n3. นำน้ำชาไทยกับน้ำมัน ผสมรวมกัน <br>\r\n4. แล้วเทใส่สลับกับแป้ง เทลงในโถตีไข่แดง ตีให้พอเข้ากันแล้วหยุด ใช้ไม้พายตะล่อมให้เนื้อเข้ากัน พักไว้<br>\r\n5. ตีไข่ขาวกับน้ำตาลและเกลือ ให้ขึ้นฟูตั้งยอดอ่อน นำไปตะล่อมกับส่วนผสมที่ตีไว้แล้ว อย่างเบามือ ให้เข้ากัน<br>\r\n6. เทใส่พิมพ์ นำเข้าเตาอบ อบไฟบน ล่าง อุณหภูมิ 170 องศาเซลเซียส 13-20 นาที<br>\r\n7. ตีวิปปิ้งครีมให้ขึ้นยอดแข็ง นำมาปาดใส่ตัวเค้กที่เย็นแล้ว แล้วโรยด้วยไวท์ช็อกโกแลต พร้อมเสิร์ฟ<br>', 'FoodTravelTV', 'https://www.youtube.com/embed/UR3-N4rfumo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cocktail`
--
ALTER TABLE `cocktail`
  ADD PRIMARY KEY (`id_cocktail`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `meat_food`
--
ALTER TABLE `meat_food`
  ADD PRIMARY KEY (`id_meat_food`);

--
-- Indexes for table `sweets_food`
--
ALTER TABLE `sweets_food`
  ADD PRIMARY KEY (`id_sweets_food`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cocktail`
--
ALTER TABLE `cocktail`
  MODIFY `id_cocktail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meat_food`
--
ALTER TABLE `meat_food`
  MODIFY `id_meat_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sweets_food`
--
ALTER TABLE `sweets_food`
  MODIFY `id_sweets_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
