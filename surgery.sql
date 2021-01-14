-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 07:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surgery`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(255) NOT NULL,
  `book_surgery` int(255) NOT NULL,
  `confirm_status` text COLLATE utf8_unicode_ci NOT NULL,
  `id_booking` int(254) NOT NULL,
  `price` int(254) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(255) NOT NULL,
  `book_surgery` int(254) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(255) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`, `tel`, `status`) VALUES
(3, 'admin', '123456', 'admin', '09-9999999', 'admin'),
(9, 'member', '123456', 'member', '123456789', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `surgery` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `sub_text` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `surgery`, `price`, `sub_text`, `photo`, `text`) VALUES
(19, 'เสริมจมูก', 30000, 'คลินิกเสริมจมูก พิษณุโลก ขอนแก่น\r\nการทำศัลยกรรมเสริมจมูกด้วยซิลิโคนปัจจุบันเป็นที่นิยมมาก เพราะเปลี่ยนแปลงใบหน้าให้ดูดีขึ้นอย่างเห็นได้ชัด การทำจมูกจึงมักเป็นการศัลยกรรมแรกๆ ที่คนเราเลือกที่จะทำ รวมไปถึงการตัดปีกจมูก นอกจากช่วยเสริมบุคลิกให้ดูดีขึ้นแล้ว ยังช่วยปรับโหงวเฮ้งอีกด้วย สนใจเสริมจมูกและมองหาคลินิกศัลยกรรมเสริมจมูกในจังหวัดพิษณุโลกและจังหวัดขอนแก่นที่ไหนดี ลองเข้ามาปรึกษา สอบถามราคาและขอดูรีวที่ถูกใจกันก่อนได้ที่ เฌอมารินทร์ คลินิก', 'เสริมจมูก.jpg', '<h2 style=\"text-align:center\">คลินิกเสริมจมูก พิษณุโลก ขอนแก่น</h2>\r\n\r\n<p style=\"text-align:center\">การทำศัลยกรรมเสริมจมูกด้วยซิลิโคนปัจจุบันเป็นที่นิยมมาก เพราะเปลี่ยนแปลงใบหน้าให้ดูดีขึ้นอย่างเห็นได้ชัด การทำจมูกจึงมักเป็นการศัลยกรรมแรกๆ ที่คนเราเลือกที่จะทำ รวมไปถึงการตัดปีกจมูก นอกจากช่วยเสริมบุคลิกให้ดูดีขึ้นแล้ว ยังช่วยปรับโหงวเฮ้งอีกด้วย สนใจเสริมจมูกและมองหาคลินิกศัลยกรรมเสริมจมูกในจังหวัดพิษณุโลกและจังหวัดขอนแก่นที่ไหนดี ลองเข้ามาปรึกษา สอบถามราคาและขอดูรีวที่ถูกใจกันก่อนได้ที่ เฌอมารินทร์ คลินิก</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม เสริมจมูก พิษณุโลก ขอนแก่น\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-surgery-phitsanulok-khonkaen-1608483797.jpg\" /></p>\r\n\r\n<h3 style=\"text-align:center\">เสริมจมูก</h3>\r\n\r\n<p style=\"text-align:center\">การศัลยกรรมเสริมจมูกด้วยซิลิโคนที่ เฌอมารินทร์ คลินิก (Shermarin Clinic) ทั้งสาขาในจังหวัดพิษณุโลกและสาขาขอนแก่น แตกต่างจากที่อื่นเพราะเราเน้นพูดคุยถึงความต้องการของคนไข้ก่อนลงมือทำจมูก ให้คนไข้อธิบายลักษณะบุคลิกที่อยากได้ จากนั้นแพทย์จึงแนะนำทรงให้เข้ากับใบหน้าและบุคลิกตามความเหมาะสมและเหมือนหรือใกล้เคียงตามความต้องการมากที่สุด แล้วจึงวิเคราะห์ว่าจมูกคนไข้ต้องทำอะไรบ้างเพื่อให้ได้ตามวัตถุประสงค์ถูกใจมากที่สุด โดยจะจัดลำดับความสำคัญก่อนหลังตามราคางบประมาณที่คนไข้ตั้งไว้</p>\r\n\r\n<p style=\"text-align:center\">ทรงจมูกที่นิยมถูกใจสำหรับผู้ที่เคยใช้บริการกับ เฌอมารินทร์ คลินิก ทั้งพิษณุโลกและขอนแก่น คือ เสริมจมูกทรงสโลปปลายพุ่ง ทรงนี้จะช่วยปรับใบหน้าให้ดูสวยหวาน จึงเป็นที่ชื่นชอบของใครหลายคน เพราะทำจมูกทรงนี้แล้วจะทำให้รู้สึกว่าหน้าของตนเองที่เคยดูแข็งหรือดูดุ มีความหวานและมีมิติมากยิ่งขึ้น</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม เสริมจมูก พิษณุโลก ขอนแก่น\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-surgery-phitsanulok-khonkaen-1608484163.jpg\" /></p>\r\n\r\n<h3 style=\"text-align:center\">ตัดปีกจมูก</h3>\r\n\r\n<p style=\"text-align:center\">การตัดปีกจมูกเป็นอีกหนึ่งเทคนิคที่มักจะทำร่วมกับการเสริมจมูก โดยเฉพาะคนที่มีปีกจมูกหนาทำให้จมูกดูบานใหญ่ เสริมจมูกด้วยซิลิโคนอย่างเดียวอาจจะทำให้ทรงจมูกยังถูกใจเท่าที่ควร และการที่หลายคนเลือกตัดปีกจมูกพร้อมกับการเสริมจมูกเพราะอยากเจ็บตัวในการทำจมูกครั้งเดียว ไม่ต้องพักฟื้นหลายครั้ง และก่อนที่จะตัดสินใจตัดปีกจมูก ต้องได้รับคำปรึกษาแนะนำจากหมอโดยตรงก่อน เพราะปีกจมูกตัดแล้วตัดเลย ถ้าไม่ถูกใจแก้ไขยากมาก ถ้าสนใจอยากตัดปีกจมูกสามารถขอเข้ารับปรึกษากับแพทย์ได้ที่ เฌอมารินทร์ คลินิก พิษณุโลก ขอนแก่น</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม ตัดปีกจมูก ทำจมูก เสริมจมูก พิษณุโลก\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-alar-surgery-1608378707.jpg\" /></p>\r\n\r\n<h4 style=\"text-align:center\">การดูแลตัวเองหลังทำเสริมจมูกหรือตัดปีกจมูก</h4>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\">ทานยาตามแพทย์สั่งให้ครบจนหมด</li>\r\n	<li style=\"text-align:center\">ประคบเย็น บริเวณข้างแก้มและหน้าฝาก ประมาณ 3-5 วัน ระวังอย่ากดแรงเกินไปหรือกระทบกระเทือนจมูกโดยตรง</li>\r\n	<li style=\"text-align:center\">งดล้างหน้า ใช้การเช็ดด้วยสำลีเบาๆ และลดการแต่งหน้าอย่างน้อย 7 วัน</li>\r\n	<li style=\"text-align:center\">ให้นอนหงายหนุนหมอนสูงเพื่อลดอาการบวมและเลือดคั่ง ใช้หมอนรองคอในการนอนเพื่อป้องกันการนอนตะแคงและอาจจะเผลอหน้ามุดหมอนป้องกันอาการจมูกเบี้ยว</li>\r\n	<li style=\"text-align:center\">งดของดอง ของแสดง อาหารทะเล งดสูบบุหรี่และแอลกอฮอล์เป็นเวลา 1 เดือน ส่วนไก่กับไข่อาจจะงดด้วยถ้ากังวลเรื่องแผลเป็นหรือคีย์ลอยด์</li>\r\n	<li style=\"text-align:center\">ช่วง 2 สัปดาห์แรก งดการออกกำลัง ยกของหนัก หรือกิจกรรมที่จะทำให้แผลกระเทือน ระวังการกระทบกระเทือนที่จมูก กระโดดหรือวิ่ง เป็นต้น</li>\r\n	<li style=\"text-align:center\">เข้าพบแพทย์ตามนัดทุกครั้ง มีข้อสงสัยแจ้งเจ้าหน้าที่ทันที</li>\r\n	<li style=\"text-align:center\">มีอาการผิดปกติ อักเสบ บวมแดง ให้รีบติดต่อแพทย์ทันที</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม เสริมจมูก พิษณุโลก ขอนแก่น\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-surgery-phitsanulok-khonkaen-1608484218.jpg\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม เสริมจมูก พิษณุโลก ขอนแก่น\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-surgery-phitsanulok-khonkaen-1608484257.jpg\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"ศัลยกรรม เสริมจมูก พิษณุโลก ขอนแก่น\" src=\"https://www.shermarinclinic.com/upload/img_pages/nose-surgery-phitsanulok-khonkaen-1608484285.jpg\" /></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
