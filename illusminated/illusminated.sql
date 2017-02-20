-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2016 at 04:44 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `illusminated`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact_work`
--

CREATE TABLE IF NOT EXISTS `Contact_work` (
  `contactWorkId` int(10) NOT NULL,
  `contactName` varchar(50) NOT NULL,
  `contactSurname` varchar(100) NOT NULL,
  `contactTel` varchar(10) NOT NULL,
  `contactEmail` varchar(30) NOT NULL,
  `contactWorkType` varchar(30) NOT NULL,
  `contactOther` varchar(50) NOT NULL,
  `contactDetails` varchar(500) NOT NULL,
  `memberId` int(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contact_work`
--

INSERT INTO `Contact_work` (`contactWorkId`, `contactName`, `contactSurname`, `contactTel`, `contactEmail`, `contactWorkType`, `contactOther`, `contactDetails`, `memberId`, `status`) VALUES
(3, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', '0863731329', 'pakakol.s@gmail.com', 'Illustration', '-', 'อยากให้วาดภาพประกอบรูปอาหาร เอาไปประกอบหนังสือตำราอาหาร', 8, 1),
(4, 'ศุภลักษณ์', 'ช่างเกวียน', '0912345678', 'nan@hotmail.com', 'Other', 'ออกแบบแพคเกจจิ้ง', 'product คือ ขวดน้ำผลไม้\r\nอยากให้ออกแบบแนวสีพาสเทล มีผลไม้อยู่ 3 ชนิด ส้ม แอปเปิ้ล กล้วย', 8, 1),
(5, 'เจนนี่', 'ปาหนัน', '0934567891', 'jenypanan@gmail.com', 'Other', 'งานถ่ายภาพขาว-ดำ', 'อยากได้ภาพวิวทะเลแต่เป็นขาวดำ', 2, 1),
(7, 'รุ่งธิวา', 'แซ่เหลียว', '0901234567', '่junekoo@gmail.com', 'Typography', '', 'ช่วยออกแบบโลโก้ร้านอาหารตามสั่งให้หน่อยค่ะ', 10, 1),
(8, 'ภคกุล', 'เสนีย์วงศ์', '0812345678', 'pakakol.s@gmail.com', 'Graphics', '', 'ออกแบบโลโก้', 8, 1),
(9, 'ศุภลักษณ์', 'ช่างเกวียน', '0912345678', 'nan@hotmail.com', 'Graphics', '', 'ออกแบบโลโก้', 10, 1),
(10, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', '0863731329', 'pakakol.s@gmail.com', 'Other', 'การ์ตูน 2D', 'ออกแบบการ์ตูนลายเส้น เป็นคาแรกเตอร์สุนัขและแมว ใช้สีสันสดใส จะเอาไปทำเป็นการ์ตูนสำหรับเด็กอนุบาล', 3, 1),
(11, 'ปริชญา', 'แจ้งตามธรรม', '0901234567', 'buunqq@gmail.com', 'Other', 'งานภาพถ่าย', 'อยากให้ช่วยถ่ายภาพ Potrait ของเราเอง ทำเป็นภาพสีวินเทจ สถานที่ถ่ายภาพที่สวนรถไฟ ถ้าสนใจ ติดต่อกลับมาอีกทีนะคะ ขอบคุณค่ะ', 15, 1),
(12, 'จันทรา', 'ไกลลิบฟ้า', '0901234567', '่ีืduangjun@msn.com', 'Other', 'งานภาพถ่าย', 'อยากให้ช่วยถ่ายภาพเครื่องสำอางค์ของแบรนด์เรา เอาไปลงโฆษณาในนิตยสารหน่อยค่ะ', 10, 0),
(14, 'ภูริพัฒน์', 'เหมศรีสวัสดิ์', '0801234567', 'golf@msn.com', 'Other', 'Photography', 'อยากจะชวนมาให้ร่วมกันถ่ายภาพงานศิลปะที่หอศิลป์กรุงเทพ ในวันที่ 30 กันยายน เพื่อร่วมเป็นทีมในการถ่ายภาพ', 8, 0),
(15, 'ณัฐรินทร์', 'สุนทรพิสิทธ์', '0986789011', 'poonaxoxo@gmail.com', 'Graphics', '', 'ติดต่อออกแบบ CI ของบริษัท เป็นบริษัทส่งออกส้มตำอบแห้ง อยากให้ทำ CI ให้หน่อย ให้ดูแล้ว unique ที่สุด เหมาะกับเอาไปวางขายที่ต่างประเทศ', 17, 0),
(16, 'ญัฐรินทร์', 'สุนทรพิสิทธ์', '0986789011', 'poonaxoxo@gmail.com', 'Other', 'Interior', 'อยากให้ช่วยสเก็ตภาพงานตกแต่งภายในของร้านส้มตำของเรา ก่อนที่จะนำไปเสนอมัณฆนากรตัวจริง', 19, 0),
(17, 'ณัฐวรรณ', 'ศรชัย', '0872234564', 'ืืีืnutwan@gmail.com', 'Illustration', '', 'อยากชวนมาวาดภาพประกอบด้วยกัน เพื่อนำผลงานไปลงนิตยาสารภาพประกอบที่ดังระดับโลก', 15, 0),
(18, 'ชนัญญา', 'ลิ้มสินสวัสดิ์', '0909983322', 'damm@gmail.com', 'Typography', '', 'อยากติดต่อให้ช่วยออกแบบโปสเตอร์งานตลาดนัดเปิดท้าย ของ คณะเศรษฐศาสตร์จุฬา หน่อยค่ะ เอาตีมสีชมพูฟ้า ให้เป็น typo ในการออกแบบ', 2, 0),
(19, 'อัครยา', 'บูรณะจรรยากุล', '0872234564', 'petch@gmail.com', 'Other', 'Photography', 'อยากให้ถ่ายภาพสุนัข 50 สายพันธุ์ เป็นภาพโทนสีสดใส', 14, 0),
(20, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', '0863731329', 'pakakol.s@gmail.com', 'Typography', '', 'ออกแบบฟอนต์ของทางบริษัทเราให้หน่อยค่ะ เป็นบริษัทผลิตหนังสือแจกฟรี ตามร้านกาแฟ ', 23, 0),
(21, 'ป๋อมแป๋ม', 'นิธิ', '0908876655', 'pompam@gmail.com', 'Illustration', '', 'ให้วาดภาพเหมือนด้วยสีน้ำ คนในรายการเทยเที่ยวไทย ราคาตกลงกันได้ สนใจติดต่อกลับมาครับ', 17, 0),
(22, 'รวิศรา', 'ประสพอัครกิจ', '0983342567', 'hamaizz@gmail.com', 'Illustration', '', 'อยากให้ออกแบบลายผ้าให้หน่อยค่ะ เป็นลายดอกไม้ สีสันสดใส สัก 3 ลาย ', 24, 0),
(23, 'ก๊อตจิ', 'เทยเที่ยวไทย', '0803398876', 'godji@gmail.com', 'Typography', '', 'อยากให้ช่วยออกแบบไทโปโปสเตอร์รายการเทยเที่ยวไทยหน่อย เป็นตอนเที่ยวภาคเหนือนะคะ ขอบคุณค่ะ', 15, 0),
(24, 'ชนัญญา', 'ลิ้มสินสวัสดิ์', '0984453344', 'damm@gmail.com', 'Other', 'Product Design', 'ออกแบบผลิตภัณฑ์สำหรับใส่พิซซ่าให้แปลกและไม่เหมือนใครหน่อยค่ะ โทนสีเป็นเทา-ดำ-เขียว ทำยังไงก็ได้ให้ดูน่าทานมากที่สุด', 26, 0),
(25, 'ฐมาวดี', 'เทียนพาลี', '0872234564', 'jnam@hotmail.com', 'Other', 'Packaging Design', 'อยากให้ช่วยออกแบบแพคเกจของสบู่ที่ทำจากผักให้หน่อยค่ะ เอาแบบน่ารักๆ น่าใช้', 26, 0),
(26, 'เมธาวี', 'ทองอร่าม', '0872234564', 'mathy@gmail,com', 'Other', 'Photography', 'อยากให้ช่วยถ่ายภาพอาหารให้หน่อยค่ะ จะเอาไปประกอบกับเมนูอาหารในร้าน และบนเว็บไซต์', 19, 0),
(27, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', '0984563324', 'pakakol.s@gmail.com', 'Graphics', '', 'อยากให้ช่วยออกแบบหน้าปกของหนังสือให้หน่อยค่ะ', 35, 0),
(28, 'อัครยา', 'บูรณะจรรยากุล', '0984328765', 'petch@gmail.com', 'Typography', '', 'อยากให้ออกแบบฟอนต์สำหรับเด็ก เอาไปใช้ในหนังาสือนิทานค่ะ', 35, 0),
(29, 'วนิดา', 'ส้มส้ม', '0974453321', 'somjpg@gmail.com', 'Graphics', '', 'อยากให้ช่วยออกแบบโลโก้ร้านเสื้อยืดหน่อยค่ะ', 36, 0),
(30, 'ธนกฤต', 'ขาวป้อม', '0901234567', 'tong@hotmail.com', 'Graphics', '', 'อยากให้ช่วยออกแบบไอคอนแอปตามหาสุนัชหายหน่อยครับ', 36, 0),
(31, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', '0872234564', 'pakakol.s@gmail.com', 'Typography', '', 'อยากให้วาดแผ่นป้ายร้านอาหารสุนัขให้หน่อยค่ะ', 36, 0),
(32, 'ปริชญา', 'แจ้งตามธรรม', '0841254465', 'ิีิbunqq@gmail.com', 'Typography', '', 'อยากให้ช่วยออกแบบ Label ของตุ้มหูของร้านให้หน่อยค่ะ', 17, 0),
(33, 'โชษิตา', 'ลิ้มอารยะชน', '0903349087', 'wawa@hotmail.com', 'Other', 'Photography', 'อยากติดต่อให้ไปช่วยถ่ายรูปงานรับปริญญาหน่อยค่ะ', 31, 0),
(34, 'โชษิตา', 'ลิ้มอารยะชน', '0903349087', 'wawa@hotmail.com', 'Illustration', '', 'พอดีจะตกแต้งห้องใหม่ อยากได้รูปแขวนผนังห้อง อยากให้วาดภาพเหมือนเราให้หน่อยค่ะ', 19, 0),
(35, 'ณัฐฐิรา', 'ผ่องบุรุษ', '0872234564', 'bambam@hotmail.com', 'Graphics', '', 'อยากให้ออกแบบหน้าปกเฟสบุ๊ค ตัดต่อรูปให้หน่อยค่ะ', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE IF NOT EXISTS `Member` (
  `memberId` int(4) NOT NULL,
  `memberName` varchar(30) NOT NULL,
  `memberSurname` varchar(50) NOT NULL,
  `memberUsername` varchar(10) NOT NULL,
  `memberPassword` varchar(8) NOT NULL,
  `memberGender` varchar(10) NOT NULL,
  `memberAge` int(2) NOT NULL,
  `memberTel` varchar(10) NOT NULL,
  `memberEmail` varchar(20) CHARACTER SET utf32 NOT NULL,
  `memberProfilePicture` varchar(300) CHARACTER SET utf32 NOT NULL,
  `memberType` varchar(20) CHARACTER SET utf32 NOT NULL,
  `memberStatus` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`memberId`, `memberName`, `memberSurname`, `memberUsername`, `memberPassword`, `memberGender`, `memberAge`, `memberTel`, `memberEmail`, `memberProfilePicture`, `memberType`, `memberStatus`) VALUES
(1, 'Pakakol', 'Sanevong Na Ayuthaya', 'Admin', '1', 'female', 21, '0863731329', 'pakakol.s@gmail.com', '', 'admin', '1'),
(2, 'อัครยา', 'บูรณะจรรยากุล', 'petch', '1234', 'female', 20, '0814567788', 'petch@gmail.com', 'PicsMember/13600134_1128470000529527_5160338116123810274_n.jpg', 'designer', '1'),
(3, 'ภูริพัฒน์', 'เหมศรีสวัสดิ์', 'golf', '1616', 'male', 20, '0812233456', 'golf@msn.com', 'PicsMember/13697255_1320050811356827_706002068427535754_n.jpg', 'designer', '1'),
(4, 'Supalak', 'Changkwien', 'nansuju', '123', 'female', 21, '0812345678', 'supalak@gmail.com', 'PicsMember/13173663_1119950418075467_504818755052947415_n.jpg', 'customer', '1'),
(8, 'ภคกุล', 'เสนีย์วงศ์ ณ อยุธยา', 'pakul', '1234', 'female', 21, '0863731329', 'pakakol.s@gmail.com', 'PicsMember/save-new.jpg', 'designer', '1'),
(10, 'รุ่งธิวา', 'แซ่เหลี่ยว', 'Junekoo', '1234', 'female', 21, '0842234567', 'juneko@hotmail.com', 'PicsMember/12541087_1129938220349774_5584213054127000180_n.jpg', 'designer', '1'),
(11, 'ณัฐณิชา', 'เบี้ยวศิริ', 'Nutcha', '1234', 'female', 21, '0814567788', 'nutcha@msn.com', 'PicsMember/12885731_10204393676521066_4070408373938864576_o.jpg', 'customer', '1'),
(12, 'อรณพรรณ', 'พิศปั้น', 'Doobadoo', '1234', 'female', 20, '0801234567', 'nuk@hotmail.com', 'PicsMember/13179405_861686377298195_861783369949563877_n.jpg', 'customer', '1'),
(13, 'ปริชญา', 'แจ้งตามธรรม', 'Bunqq', '1234', 'female', 21, '0901234567', 'buunqq@gmail.com', 'PicsMember/12670480_1130315030345856_5291112521180054307_n.jpg', 'customer', '1'),
(14, 'ธนกฤต', 'ขาวป้อม', 'Tongter', '1234', 'male', 21, '0831124456', 'tong@hotmail.com', 'PicsMember/12347924_928185743895369_4800658259516146515_n.jpg', 'designer', '1'),
(15, 'วราศักดิ์', 'อาจแสน', 'Dapper', '1234', 'male', 21, '0903442343', 'dapper@gmail.com', 'PicsMember/13921042_1281791788512851_3828688632306013609_n.jpg', 'designer', '1'),
(16, 'Sukapitch', 'Sillapaprayoon', 'Junila', '1234', 'female', 21, '0865543321', 'junilaaa@hotmail.com', 'PicsMember/13322097_10208661779876239_1497976114366172352_n.jpg', 'customer', '1'),
(17, 'ณัฐวรรณ', 'ศรไชย', 'nutwan', '1234', 'female', 21, '0986789011', 'nutwan@hotmail.com', 'PicsMember/12805658_10205680433392529_190038946223977955_n.jpg', 'designer', '1'),
(19, 'ณัฐฐิรา', 'ผ่องบุรุษ', 'Bambam', '1234', 'female', 22, '0872234564', 'bambam@hotmail.com', 'PicsMember/13925790_1315559748471548_3321050233219968206_o.jpg', 'designer', '1'),
(20, 'ชุติรัตน์', 'คงสันเทียะ', 'Airee', '123', 'female', 22, '0932234567', 'airee@hotmail.com', 'PicsMember/12046702_10204716604063663_4474368600604605619_n.jpg', 'customer', '1'),
(21, 'ณัฐรินทร์', 'สุนทรพิสิทธ์', 'Poona', '123', 'female', 22, '0872314543', 'poonaxoxo@gmail.com', 'PicsMember/11265589_907732852582853_9071666054603868476_n.jpg', 'customer', '1'),
(22, 'ปิยมณฑ์', 'ค้าสม', 'Prual', '1234', 'female', 22, '0903349087', 'prualza@hotmail.com', 'PicsMember/10649671_10205113702152032_7712062023786429228_n.jpg', 'customer', '1'),
(23, 'รวิศรา', 'ประสพอัครกิจ', 'Hamaizz', '1234', 'female', 22, '0983342122', 'hamaizz@gmail.com', 'PicsMember/13707565_548698078654104_5070171885700513870_n.jpg', 'designer', '1'),
(24, 'ฐมาวดี', 'เทียนพาลี', 'Jnam', '1234', 'female', 20, '0814567788', 'jnam@hotmail.com', 'PicsMember/10568873_753168021396768_4967638981306741718_n.jpg', 'designer', '1'),
(26, 'ปวริศา', 'อ่วมคง', 'Dear', '1234', 'female', 21, '0986789011', 'dear.bear@gmail.com', 'PicsMember/12509363_10205893645443654_4538985758595912068_n.jpg', 'designer', '1'),
(27, 'ชนัญญา', 'ลิ้มสินสวัสดิ์', 'Dammq', '1234', 'female', 21, '0909983322', 'damm@gmail.com', 'PicsMember/1958311_1079339498779465_1687165144192873239_n.jpg', 'customer', '1'),
(29, 'Sikapat', 'tonq', 'tonton', '1234', 'male', 21, '0893426678', 'tonp@gmail.com', 'PicsMember/13640874_1141137132623580_668556470038182198_o.jpg', 'designer', '1'),
(30, 'เมธาวี', 'ทองอร่าม', 'Mayyoii', '1234', 'female', 21, '0984563369', 'mathy@gmail,com', 'PicsMember/12509599_1235536566472913_7663925749157665661_n.jpg', 'customer', '1'),
(31, 'อาทิมา', 'จันทแสงสว่าง', 'evefy', '1234', 'female', 21, '0872343321', 'evefyyyy@hotmail.com', 'PicsMember/13173001_10206749264832452_7609415971969406169_o.jpg', 'designer', '1'),
(32, 'Zayn', 'Malik', 'Zayn', '1234', 'male', 28, '0863433675', 'z.ayn@gmail.com', 'PicsMember/Zayn_Malik_officially_quits_One_Direction_music_scene_ireland.jpg', 'designer', '1'),
(33, 'Justin', 'Bieber', 'justin', '1234', 'male', 23, '0983342567', 'justin@gmail.com', 'PicsMember/justin-bieber-hard-2-face-reality1.jpg', 'customer', '1'),
(34, 'Sarah', 'Maese', 'Sarah', '1234', 'female', 30, '0862231434', 'sarahmaese@gmail.com', 'PicsMember/658958e7612ce5611ced8375f61ababe.jpg', 'designer', '1'),
(35, 'wanida', 'somsom', 'som', '1234', 'female', 21, '0987765543', 'somjpg@gmail.com', 'PicsMember/13012885_959738090800557_2295453961313221973_n.jpg', 'designer', '1'),
(36, 'วรวลัญช์', 'ขันตี', 'Worawalun', '1234', 'male', 21, '0873425564', 'worawalun@gmail.com', 'PicsMember/10304640_10203643029688926_9167280311448563527_n.jpg', 'designer', '1'),
(37, 'โชษิตา', 'ลิ้มอารยะชน', 'wawa', '1234', 'female', 21, '0903308833', 'wawa@hotmail.com', 'PicsMember/13590371_1156492057706967_620539649488400919_n.jpg', 'customer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `newsId` int(5) NOT NULL,
  `newsTitle` varchar(100) CHARACTER SET utf8 NOT NULL,
  `newsDesigner` varchar(100) CHARACTER SET utf8 NOT NULL,
  `newsContent` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `newsCredit` varchar(100) CHARACTER SET utf8 NOT NULL,
  `newsPicture` varchar(300) CHARACTER SET utf8 NOT NULL,
  `newsStatus` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`newsId`, `newsTitle`, `newsDesigner`, `newsContent`, `newsCredit`, `newsPicture`, `newsStatus`) VALUES
(15, 'งานศิลปะจากการละลายสีเทียน!', 'Jessie Kerbawy', 'งานศิลปะสุดเจ๋งชิ้นนี้สร้างขึ้นโดย ศิลปินชาวอเมริกัน Jessie Kerbawy ที่เค้านำสีเทียนมาละลายผสมกัน เกิดการไล่สีไปมา โดยวิธีทำนั้น Jessie Kerbawy บอกว่า ใช้ Heat gun หรือ ไดเป่าร้อนมาเป่าสีเทียนให้ละลายนั่นเอง\r\n\r\nแต่อย่าคิดว่าง่าย กว่า Jessie Kerbawy จะทำงานออกมาได้สวยขนาดนี้เค้าก็ต้องลองผิดลองถูกหมดค่าสีเทียนไปหลายพันดอลล่าเหมือนกัน!\r\n\r\nส่วนแรงบันดาลใจในการสร้างงานชุดนี้ Jessie Kerbawy บอกว่าตอนเด็กๆ เค้าเคยทิ้งสีเทียนไว้ในกระเป๋า ระหว่างไปเข้าค่ายฤดูร้อนแล้วเมื่อเปิดมาจะใช้สีมันก็ละลายหมดแล้ว..', 'http://www.multiple-owners.com/inspiration-2/%E0%B', 'PicsNews/meltedcrayon16.jpeg', 0),
(16, 'รูปแกะสลักจากแก้ว โดย Ben Young', 'Ben Young', 'งานศิลปะ จากการแกะสลักแก้ว โดย Ben Young ชิ้นนี้ถ้าดูเผินๆ ก็เหมือนเป็นงานธรรมดาทั่วไป แต่ใครจะรู้ว่า ที่จริงแล้วการแกะสลักแก้วนั้นมันเป็นอะไรที่ยากมากๆ ต้องใช้ความพิถีพิถันเป็นอย่างมาก และแต่ละชิ้นงานของ Ben นั้นถือว่าเป็นงานที่ “Unique” มากๆ เพราะไม่มีใครสามารถเรียนแบบได้ง่ายๆ', 'http://www.multiple-owners.com/design-2/%E0%B8%A3%', 'PicsNews/ben-young08.jpg', 0),
(17, 'ภาพประกอบ สีน้ำ ที่ไม่เหมือนใคร โดย Faryn Hughes', 'Faryn Hughes', 'ผลงานของ นักวาดภาพประกอบ Faryn Hughes จะเป็นการใช้สีน้ำซะส่วนมากหรือแทบจะทั้งหมดเลยก็ว่าได้ และงานแต่ละชิ้นเธอก็จะเก็บรายละเอียดงานค่อนข้างสมบูรณ์ นอกจากสีน้ำแล้วเธอยังสามารถใช้ อะไรก็ได้ที่ใช้น้ำเป็นสื่อในการผสมมาระบายบนงานภาพประกอบชองเธอเอง เช่น ชา หมึกจีน สีผสมอาหาร ฯลฯ ', 'cr. http://www.multiple-owners.com', 'PicsNews/con-2.jpg', 1),
(18, 'There Are Two kinds of people  in this world', 'Zomato', 'โลกนี้มีคนทั้งหมดมากกว่า 7 พันล้านคน ทุกคนล้วนแล้วแต่แตกต่างกัน มีความเฉพาะในแต่ละบุคคลก็ต่างกันไป และนี่เป็นสิ่งที่ Zomato ได้เก็บสถิติไว้ว่า ไม่ว่าคนจะเยอะขนาดไหน แต่เมื่อพวกเค้า เจอสิ่งเหล่านี้ก็จะมีอยู่ 2 อย่างนี้เท่านั้นที่แตกต่างกัน Zomato จึงแสดงผลการสำรวจออกมาเป็นรูปแบบ อินโฟกราฟฟิก (infographic) ให้เราได้เข้าใจกันง่ายๆ ', 'cr. http://www.multiple-owners.com', 'PicsNews/con-3.jpg', 1),
(19, 'Shades of Change ผลงานจาก  Marin Dearie', 'Marin Dearie', 'Marin Dearie ศิลปินและนักออกแบบแห่งเมือง New Orleans ได้สร้างผลงานที่ใช้ชื่อว่า Shades of Change โดยได้รับแรงบันดาลใจมาจากการเปลี่ยนสีของสิ่งต่างๆ ที่เรามักพบเห็นได้ทั่วไป หรือสีการเปลี่ยนแปลงของอวัยวะในร่างกายของเราเอง \r\n', 'cr. http://www.multiple-owners.com', 'PicsNews/con-4.jpg', 0),
(20, 'ผลงานภาพประกอบโดย Emma Kelly', 'Emma Kelly', 'Emma Kelly เธอบอกว่าเริ่มต้นวาดรูปตั้งแต่สองขวบ โดยเริ่มต้นวาดที่กำแพงบ้างตามโต๊ะหรือเก้าอี้บ้าง และตั้งแต่นั้นเป็นต้นมาเธอก็วาดภาพเรื่อยมาโดยใช้สีต่างๆ มาแล้วเกือบทุกชนิดและมาจบลงที่สีน้ำ ทั้งลายเส้นและจังหวะของสีน้ำจะเป็นเอกลักษณ์มากๆ แบบว่าใครที่เห็นผลงานของเธอนั้นจะต้องรู้ทันทีว่าเป็นภาพประกอบของเธอ ', 'cr. http://www.multiple-owners.com', 'PicsNews/piccon4.jpg', 0),
(21, 'Toilers on the Sea ภาพประกอบ โดย Alex Boren', 'Alex Boren', 'ภาพประกอบชุดทหารเรือสุดคราสสิกนี้เป็นของ Alex Boren ซึ่งเป็นนักวาดภาพประกอบ (Illustrattion) และกราฟฟิกดีไซเนอร์ (Graphic Designer) ฟรีแลน สัญชาติอเมริกา\r\n\r\nซึ่งภาพประกอบนี้ก็ทำเพื่อใช้ในงาน Infographic ที่แสดงให้เห็นถึงการถูกทอดทิ้งของทหารเรือที่ถูกปลดประจำการโดยเหตุจำเป็นอะไรบางอย่าง ลองดูกันว่าภาพประกอบของ Alex Boren จะสื่อสารออกมาได้ดีแค่ไหน', 'http://www.multiple-owners.com/illustration/toiler', 'PicsNews/cover.png', 0),
(22, 'ภาพประกอบซอฟๆ จากนักวาดภาพประกอบชาวรัสเซีย Torgashova Natasha', 'Torgashova Natasha', 'ภาพประกอบซอฟๆ จากนักวาดภาพประกอบชาวรัสเซีย Torgashova Natasha ซึ่งวาดให้นิตยสาร CK Magazine ในรัสเซีย', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/ภาพประกอบ-torgashova-05.jpg', 0),
(23, 'ภาพประกอบแนวเซอร์เรียว โดย Pierre Mornet', 'Pierre Mornet', 'ภาพวาดและภาพประกอบของ Pierre Mornet จะเป็นแนวเซอร์เรียว (Surrealism) ทำให้ภาพประกอบของ Mornet นั้นเป็นภาพวาดศิลปะดีๆ นี่เอง\r\n\r\nโดยสไตล์งานของ Mornet จะเป็นภาพที่ดูนิ่งๆ แต่ก็ไม่แข็ง ตัวละครจะดูมีอารมณ์ชืดๆ เหมือนกำลังฝันอยู่ ทำให้ภาพของ Mornet นั้นเกินระดับที่จะนำมาเป็นภาพประกอบในหนังสือ ทำให้เป็นเหตุผลว่างาน Original ส่วนมากของเค้าถูกซื้อไปจัดแสดงใน Gallery Art มากมายทั่วโลก\r\n\r\nPierre Mornet เป็นสมาชิกของ Marlena Agency ซึ่งเป็นที่รวมศิลปินยอดฝีมือไว้มากมาย และยังเป็นที่เก็บภาพวาดต้นฉบับของศิลปินแต่ละคนเพื่อเป็นตัวแทนนำไปจัดแสดงยังหอศิลป์ต่างๆ อีกด้วย', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/pierre-mornet-03.jpg', 1),
(24, 'AERIAL VIEWS ภาพถ่ายชายหาด Italy', 'Bernhard Lang', 'ชุดภาพถ่าย AERIAL VIEWS ADRIA เป็นของช่างภาพชาวเยอรมัน Bernhard Lang เป็นการถ่ายภาพมุมสูงระหว่างหาด Ravenna และ Rimini ในประเทศ Italy ซึ่งพอมองจากมุมนี้แล้วทำให้ภาพดูน่าสนใจขึ้นมาก โดยเฉพาะผู้ที่ชื่นชอบงาน Minimal\r\n\r\nBernhard Lang นั้นเป็นช่างภาพ แนว Fine art ซึ่งสไตล์งานของ Bernhard Lang นั้นก็จะออกมาแนวลักษณ์ Aerial Views (หรือ Bird eyes view) ซะส่วนมาก ใครชื่นชอบภาพถ่ายแนวนี้สามารถติดตามผลงานได้ที่ website ของเค้าได้เลย ที่ www.bernhardlang.de', 'cr. http://www.multiple-owners.com', 'PicsNews/beach-top-view-13.jpg', 1),
(27, 'ภาพประกอบ Horoscope จาก Ryan Tandya', 'Ryan Tandya', 'ภาพประกอบ Horoscope ชุดนี้เป็นของ Ryan Tandya นักวาดภาพประกอบชาว Indonesia\r\nงานชิ้นนี้เจาวาดให้เว็บ Fimela.com ซึ่งก็ใช้ดูดวงทำนายตามราศีกันไป ซึ่งแต่ละราศีแต่ละตัวนั้นก็น่ารักมากๆ\r\nและแน่นอนว่าคาร์แรคเตอร์ของแต่ละตัวก็จะต่างไปในแต่ละราศี', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/89c3844cd1a6f6032c02aa5ea5f49d42.jpg', 0),
(28, 'ภาพประกอบชุด The Art of Negative Space', 'Tang Yau Hoong', 'เมื่อไม่นานมานี้ Graphic designer ชาว Malaysia ได้สร้างงานภาพประกอบขึ้น ชื่อว่า The Art of Negative Space ซึ่งมันก็คล้ายๆ กับภาพลวงตาที่สามารถมองภาพได้สองมุมมอง เหมือนกับว่าชีวิตเรานั้นมันไม่ได้มีเพียงแค่ด้านเดียว หัดมองอะไรให้มันแตกต่างจากเดิมบ้างสิ่งที่คุณเห็นอาจจะไม่เหมือนสิ่งที่คนอื่นเห็นก็เป็นได้..\r\n\r\nและผู้ที่สร้างงานชุดนี้คือ Tang Yau Hoong สามารถไปเยี่ยมชม Website ของเค้าได้ที่ http://tangyauhoong.com/', 'http://www.multiple-owners.com/design-2/graph-desi', 'PicsNews/1b16976c80e22bd9e61c1edbce75384b.jpg', 0),
(29, 'นักวาดภาพประกอบ James Braithwaite', 'James Braithwaite', 'James Braithwaite เป็นทั้งนักวาดภาพประกอบ, ทำแอนนิเมชั่น, เป็นอาร์ทไดเร็กเตอร์ อยู่ที่ Montreal ประเทศ Canada ผลงานของ James Braithwaite ส่วนใหญ่จะทำให้กับหลายๆ นิตยสาร หนังสือพิมพ์และทำงานเบื้องหลังในหนังสั้นเรื่อง ”I Met the Walrus” ทำให้กับ John Lennon และได้รับรางวัล Oscar Nominees อีกด้วย\r\n\r\nด้วยลายเส้นและตัวการ์ตูนที่เป็นเอกลักษณ์ ทำให้ James Braithwaite กลายเป็นนักวาดภาพประกอบชื่อดัง ถึงแม้ว่าลายเส้นจะดูง่ายๆ ในงานของเค้าแต่พอดูแล้วแต่ละภาพแต่ละตัวละครก็จะมีลายละเอียดเล็กๆ น้อยๆ มาเติมเต็มในแต่ละภาพ', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/1256054469_large_09lg.jpeg', 0),
(30, '“Estudio para perforar una zorra”', 'Marcela Cardenas', 'Marcela Cardenas เป็นศิลปินชาว Colombia ผลงานหลายๆ อย่างของเขาถูกเก็บไปจัดแสดงโชว์มาแล้วทั่วโลก และงานส่วนมากจะเป็นงานภาพวาดเกี่ยวกับธรรมชาติ การเกิด ความตาย\r\n\r\nงานชิ้นนี้ก็เป็นอีกหนึ่งผลงานที่น่าสนใจ ชื่อว่า “Estudio para perforar una zorra” แปลเป็นภาษาอังกฤษได้ว่า “Study on how to pierce a female fox” ', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/8_detalle2.jpeg', 0),
(31, 'Oscar Wilde', 'Tereza Scerbova', 'Tereza Scerbova เป็นนักวาดภาพประกอบจาก Czech Republic เติบโตและทำงานที่เมือง Prague และเมื่อเร็วๆ นี้ก็ได้ทำหนังสือออกมาเป็นหนังสื่อนิทาน ชื่อว่า Oscar Wilde\r\n\r\nOscar Wilde เป็นซี่รี่มีหลายตอนเลย หนึ่งในนั้นคือ The Selfish Giant and The Happy Prince ที่เป็นเรื่องราวของยักษ์ที่เห็นแก่ตัว กับเจ้าหญิงที่เปี่ยมไปด้วยความสุข (ว้าววว) เรื่องราวจะเป็นอย่างไรต้องดูภาพปะรกอบเอาเอง', 'http://www.multiple-owners.com/illustration/oscar-', 'PicsNews/01.jpg', 0),
(33, 'Typography Pattern โดย MaricorMaricar', 'Maricor Maricar', 'MaricorMaricar มีสมาชิกอยู่สองท่านเป็นพี่น้องฝาแฝดกันคือ Maricor Manalo และ Maricar Manalo ทำงานออกแบบ แบบงานทำมือโดยการเย็บ มีทั้งภาพประกอบและงาน Typography ส่วนมากจะทำงานออกแบบปกอัลบัมให้กับศิลปิน งาน Animation MV Poster และงานโชว์ต่างๆ', 'http://www.multiple-owners.com/illustration/typogr', 'PicsNews/MaricorMaricar_Makers_Blog.gif', 0),
(34, 'ภาพประกอบขนมหวาน โดย Amy Holliday', 'Amy Holliday', 'ภาพประกอบขนมหวาน โดย Amy Holliday ชุดนี้ใช้ในเมนูร้านขนมหวานแห่งหนึ่ง ต้องบอกเลยว่า Amy นั้นวาดได้น่าทานมากๆ และยังคงสไตล์การวาดของเธอไว้ได้อย่างครบถ้วน\r\n\r\nAmy Holliday เธอจบทางด้าน Illustration จาก University of Cumbria เป็นมหาวิทยาลัยเล็กๆ ทางตะวันตกเฉียงเหนือของประเทศอังกฤษ และเธอก็ทำงานเป็น Freelance ทางด้าน Illustraion และ Typography งานทั้งสองด้านของ Amy Holliday นั้นทำงานด้วยสีน้ำวาดมือทั้งหมด ซึ่งเป็นเอกลักษณ์ในงานของเธอมาตลอด Amy Holliday เคยได้รางวัลจาก Computer Art Magazine ด้วย สาขา Graduate Showcase Illustration เมื่อปี 2011', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/illustrations-cupcake_01.jpeg', 0),
(35, 'งานภาพประกอบ โดย Maria Corte Maidagan', 'Maria Corte Maidagan', 'รวมผลงานภาพประกอบของ Maria Corte Maidagan ช่วง ธันวาคม 2011 ถึง ตุลาคม ปี 2012 เค้าเป็นนักวาดภาพประกอบ จากประเทศ Spain และได้เคยร่วมงานกับนิตยสารดังๆ มาแล้วทั่วโลก !\r\n\r\nเช่น New York Times, Wall Street Journal, Corriere della Sera, Deloitte, BBC Classics Magazine ภาพประกอบของ Maria ถือว่ามีความเป็นเอกลักษณ์มากคนนึง เพราะ Maria จะทำภาพแบบ Vector และใน Vector นั้นก็จะมี texture ของกระดาษบางๆ อยู่ ซึ่งถือว่าเทคนิคนี้ Maria ได้ทำเป็นคนแรกๆ เลยก็ว่าได้', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/545f337ed69d10cfbf38be67812af383.jpeg', 0),
(38, 'ภาพประกอบ แนว Vector ออกแบบโดย Lumadessa', 'Lumadessa หรือ Josh Brill', 'Lumadessa หรือ Josh Brill เป็น Graphic Design ชาว Portland จบด้าน Media Design และทำงานเป็น Art Director หลังจากนั้นก็ผันตัวเองมาทำงานด้าน Fine Art\r\n\r\nและจัดงานแสดงภาพต่างๆ ที่เค้าทำขึ้นใน Gallery ต่างๆ งานที่้เด่นและทำให้ผู้คนรู้จักกับชื่อ Lumadessa นั้นก็คืองานภาพ Graphic น้องหมาที่ทำเป็นภาพ Vector น่ารักๆ', 'http://www.multiple-owners.com/design-2/graph-desi', 'PicsNews/BD_CE_FF_Lumadessa_1024x1024.jpeg', 0),
(39, 'ชุดภาพ Portrait จากนักวาดภาพประกอบสุดเท่จาก Poland', 'Bartosz Kosowski', 'ภาพชุดนี้เป็นภาพ Portrait หรือ ภาพวาดบุคคล ที่ถูกใช้ในปี 2011 ของนักวาดภาพประกอบชาว Poland ที่ชื่อว่า Bartosz Kosowski\r\n\r\nฝีมือของเขานั้นโดดเด่นทั้งในเรื่องการใช้สีและมีสไตล์งานที่โดดเด่น จนทำให้หลายๆ นิตยสารทาบทามเค้าเข้ารวมงาน เช่น นิตยสาร “Przekroj” “Architektura” “Gazeta Wyborcza” ซึ่งล้วนแต่เป็นนิตยสารชั้นนำของ Poland กันทั้งนั้น', 'http://www.multiple-owners.com/illustration/%E0%B8', 'PicsNews/Kasia-Nosowska.jpg', 0),
(40, 'The Unrefined Olive โดย The Small Monsters', 'The Small Monsters', 'เช้าวันนึง The Small Monsters ซึ่งเป็น Studio ออกแบบเล็กๆ ใน Montreal Canada ได้รับโทรศัพท์จากเจ้าของไร่ซึ่งทำน้ำมันมะกอก (Olive oil) ว่าให้ออกแบบ Package ของขวดน้ำมันมะกอกให้หน่อย แต่มีเวลาให้ประมาณ 10 วัน\r\n\r\nและภายใน 1 อาทิตย์ The Small Monsters ก็ส่งคนไปดูถึงโรงงานของผู้ผลิตน้ำมันมะกอกซึ่งอยู่เมือง Ottawa ทันที เมื่อไปถึกก็เริ่มทำการหาข้อมูลการผลิตและวัสดุที่ใช้ในการทำน้ำมัน เพียง 3-4 วันเท่านั้นทีมที่ไปหาข้อมูลมาก็กลับมาที่ออฟฟิศเพื่อนให้ข้อมูลดิบให้ทีม Design ต่อ\r\n\r\nThe Small Monsters ต้องออกแบบทั้ง Logo, Type, Graphic และ Packaging บนขวด ทั้ง 4 ขนาด ซึ่งกว่าจะได้รูปแบบและสีขวดที่ถูกใจก็ต้องตามหากันทั่วจากจำนวนกว่า 50 แบบ ที่มีให้เลือก หลักในการเลือกขวดซึ่งเป็นน้ำมันมะกอกที่รับประทานได้นั้นจะต้องดูเป็นมิตร (Friendly) และต้องเข้ากับ Graphic ที่ออกแบบมาด้วย\r\n\r\nนับว่างานนี้เป็นงานหนักของ The Small Monsters ที่สุดก็ว่าได้เนื่องจากเวลาที่มีให้น้อยมากไม่สัมพันธ์กับปริมาณงาน แต่ถึงอย่างไร The Small Monsters ก็ทำงานโปรโจคนี้ออกมาได้ทีเกินคาดสุดๆ', 'http://www.multiple-owners.com/design-2/package-de', 'PicsNews/theunrefinedolive_cover.jpg', 0),
(41, 'Teapee ออกแบบโดย Sophie Pepin', 'Sophie Pepin', 'Packaging ชา ชิ้นนี้เป็นผลงานของนักเรียนสาขา Graphic Design ที่ชื่อว่า Sophie Pepin และเธอก็เป็นชาว Canadian จึงไม่แปลกใจเลยที่จะมีสไตล์ออกมาเป็นแบบนี้ เธอได้ตั้งชื่องานชิ้นนี้ว่า “North American Teapee”\r\n\r\nทั้งรูปทรงและลวดลาย Graphic ต่างก็มาจากชนเผ่าพื้นเมืองของ Canadian ทั้งนั้น เธอก็บอกสาเหตุที่ทำแบบนี้เพราะได้เรียนในวิชาประวัติศาสตร์และได้เรียนเกี่ยวกับ “American Indians story” ที่ชาวผิวขาวได้บุกรุกดินแดนของชนเผ่าพื้นเมือง ซึ่งมันเป็นเรื่องน่าเศร้ามากๆ เธอจึงทำงานชิ้นนี้ออกมาเพื่อระรึกถึงการศูนย์เสียในครั้งนั้น', 'http://www.multiple-owners.com/design-2/package-de', 'PicsNews/pep1.jpeg', 0),
(42, 'Der Hals der Sängerin – Edition Thurnhof', 'Stefan Zsaitsits', 'ภาพประกอบชุดนี้เป็นภาพประกอบของ Stefan Zsaitsits นักวาดภาพประกอบและศิลปินชาว Austria ซึ่งงานชุดนี้เป็นงานภาพวาดในปี 2012 เพื่อใช้เป็นภาพประกอบในหนังสือ Der Hals der Sängerin – Edition Thurnhof', 'http://www.multiple-owners.com/illustration/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%A3%E0%B8%B0%E', 'PicsNews/Publication-Stefan-Zsaitsits.png', 0),
(43, 'James Gulliver Hancock นักวาดภาพประกอบมากความสามารถ', 'James Gulliver Hancock', 'James Gulliver Hancock เป็นนักวาดภาพประกอบชาวออสซี่และเรียนจบจากที่ University Medal and Honours สาขา Visual Communications หลังจากเรียนจบเขาก็จับกลุ่มกับเพื่อนเพื่อเปิด Gallery เล็กๆ โชว์ผลงานตอนเรียนกับเพื่อนๆ สามคน ชื่อ Gallery ว่า SPACE3\r\n\r\nและหลังจากนั้นเขาก็ออกเที่ยว จาก Sydney ไป London กลับมา เอเชีย, จีน, ญี่ปุ่น, รัสเซียและยุโรป จนสุดท้ายมาที่อเมริกา และได้ทำงานที่นั่นให้กับลูกค้ารายใหญ่ เช่น Dell Computers, Coca-Cola, Businessweek Magazine, The New York Times, Simon&Schuster, Herman Miller ฯลฯ และก็ทำให้ชื่อของ James Gulliver Hancock เป็นที่รู้จักกันโดยทั่วไป..\r\n\r\nผลงานของ James Gulliver Hancock มีงาน Design ทุกด้านทั้งแต่ภาพวาดเล็กๆ ไปจนถึงงานกำกับใหญ่ๆ พูดว่าเขาคนนี้สามารถออกแบบได้หมด แต่ที่โด่งดังที่สุดของเขาคืองานด้านภาพประกอบที่มีเอกลักษณ์ใส่ทุกรายละเอียดของภาพวาด', 'http://www.multiple-owners.com/illustration/james-gulliver-hancock-%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8', 'PicsNews/jgh_studiohand_color_a5_print_web-700x509.jpg', 0),
(45, 'Mattias Adolfsson นักวาดภาพประกอบชาว Sweden', 'Mattias Adolfsson', 'Mattias Adolfsson เป็น freelance วาดภาพประกอบให้กับหนังสือและเกมส์ ทั้งใน Sweden และต่างประเทศ และตอนนี้ Mattias Adolfsson ก็กำลังทำหนังสือภาพประกอบของตัวเองที่มีชื่อว่า Sanatorium ที่รวบรวมภาพประกอบจากในสมุดสเกทและผลงานที่น่าสนใจ', 'http://www.multiple-owners.com/illustration/mattias-adolfsson-%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A7%E', 'PicsNews/moocards.jpg', 0),
(46, 'กลางวันและกลางคืน', 'Jason Dean’s ', 'Jason Dean’s ได้ออกแบบภาพพิมพ์ที่บอกเล่าเรื่องราวที่เกิดขึ้นในเวลากลางวันและกลางคืน ถึงเมืองเล็กๆ ที่เมื่อถึงเวลายามค่ำคืนได้กลับกลายเป็นเมืองที่เต็มไปด้วยอาชญากร โสเภณีรวมไปถึงซอมบี้!! โดยใช้เทคนิคการพิมพ์ของสีสองชั้นที่แตกต่างกันด้วยหมึกเรืองแสงที่พิมพ์บนกระดาษสีขาว โดยผลิตเพียง 60 ชิ้นเท่านั้นและเหมือนว่าจะถูกจำหน่ายหมดในเวลาอันรวดเร็ว ใครที่ไม่ได้มาครอบครองเรามีรูปภาพตัวอย่างมาให้ดูเล่นๆ จ้า\r\n\r\n', 'http://www.multiple-owners.com/design-2/graph-design/%E0%B8%81%E0%B8%A5%E0%B8%B2%E0%B8%87%E0%B8%A7%E', 'PicsNews/DAY_NIGHT_FOR_SHOP.jpg', 0),
(47, 'Infographic Kuala Lumpur city guide', 'Agency “41?29!”', 'Turkish Airlines ก็ได้มีการทำแผนที่เป็นอินโฟกราฟฟิกโปรโมทให้เมือง Kuala Lumpur ซึ่งเป็นเมืองหลวงของประเทศมาเลเซีย ให้ผู้ที่จะมาเที่ยวนั้นวางแผนในการเที่ยวได้ถูก\r\n\r\nผลงานแผนที่อินโฟกราฟฟิกเมือง Kuala Lumpur ที่ออกแบบโดย Agency “41?29!” ชิ้นนี้ ก็จะรวมสถานที่เที่ยวสำคัญๆ ของเมืองไว้หลายๆ ที่ด้วยกัน ทั่งแหล่งช้อปปิ้ง การเดินทาง หรือแม้กระทั้งภูมิประเทศที่บอกให้พกร่มไปเที่ยวด้วย!', 'http://www.multiple-owners.com/design-2/graph-design/infographic-kuala-lumpur-city-guide/', 'PicsNews/Kuala-Lumpur-city-guide-07.png', 0),
(50, 'Graphic Designer Lotta Nieminen', 'Lotta Nieminen', 'Lotta Nieminen เธอเป็นทั้งนักวาดภาพประกอบ Graphic Designer และ Art Director จากเมือง Helsinki ประเทศ Finland\r\n\r\nงานของเธอส่วนมากจะเป็นภาพประกอบใน Magazine Fashion ซะส่วนใหญ่ เคยทำงานร่วมกับ Trendi, Pentagram Desogn และ RoAndCo Studio และในปัจจุบันเธอเป็น Freelance อยู่ New York ผลงานของ Lotta Nieminen ส่วนมากจะเน้นใช้ Graphic แบบ Vector โดยใช้สีที่คุมโทนในงานเดียวและการใส่รายละเอียดที่น้อยแต่ดูลงตัว ทำให้งานของเธอมีเอกลักษณะมากๆ', 'http://www.multiple-owners.com/design-2/graph-design/graphic-designer-lotta-nieminen/', 'PicsNews/11111.jpg', 0),
(51, 'Raphael Vicenzi นักวาดภาพประกอบชาวเบลเยียม', 'Raphael Vicenzi', 'Raphael Vicenzi เป็นนักวาดภาพประกอบชาวเบลเยียม หากใครมีโอกาสได้ไปประเทศเบลเยียมจะได้พบเห็นงานของเธอในหน้าหนังสือและนิตยสารมากมาย เพราะเธอเป็นนักวาดภาพประกอบอันดับต้นๆ ของเบลเยียมเลยก็ว่าได้ Raphael มักจะทำงานในรูปแบบของ Digital Art ซึ่งวาดภาพด้วยมือและนำมาสแกน ขึ้นตอนสุดท้ายตกแต่งด้วย Photoshop\r\n\r\nสไตล์การทำงานของ Raphael นั้นจะเน้นไปที่รูปร่างและใบหน้าผู้หญิงซะส่วนมาก เธอบอกว่าชอบวาดภาพประกอบแฟชั่นมากเพราะมันดูเป็นผู้หญิงและสามารถแต่จะเล่นกับมันได้หลากหลายแนว', 'http://www.multiple-owners.com/illustration/raphael-vicenzi-%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A7%E0%', 'PicsNews/3aa40e422234f96021fc8deee5a97f2f.jpg', 0),
(52, 'นักวาดภาพประกอบจาก อินโดนีเซีย', 'Morin Zasly', 'นักวาดภาพประกอบจากอินโดนีเซีย เธอผู้นี้นามว่า Morin Zasly จบจากสาขา Visual Communication Design เทคนิคของเธอนั้น เธอบอกว่าชอบวาดด้วยดินสอประมาณวาดดรออิ้งและใส่สีน้ำนิดๆ พอให้มีลูกเล่น แต่คนจ้างงานที่นี่ (Indonesia) ส่วนมากมักไม่ชอบงานที่มีสีเรียบๆ งานใหม่ๆ ของเธอเลยทำโดยใช้หลากหลายเทคนิคผสมกัน ทั้งสีไม้ สีน้ำ สีอะคริลิค สไตล์งานของเธอนั้น เธอบอกว่ามักจะได้แรงบันดาลใจมาจากผู้หญิงและแฟชั่นเป็นส่วนมาก', 'http://www.multiple-owners.com/illustration/%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A7%E0%B8%B2%E0%B8%94%E', 'PicsNews/legs.png', 0),
(53, 'งานภาพประกอบ โดย yourPorcelainDoll', 'Nadia', 'ผลงานภาพประกอบโดย yourPorcelainDoll ซึ่งไม่ได้เป็นชื่อจริงๆ แต่ว่าเป็นชื่อ User name ในเว็บ deviantART เธอเป็นศิลปินและนักวาดภาพประกอบชาว Ukraine ชื่อจริงๆ ของเธอชื่อ Nadia\r\n\r\nภาพประกอบที่เน้นลายเส้นและการแต้มสีตามอารมณ์ของตัวละคร ทำให้งานภาพประกอบของเธอมีจุดเด่นที่หลายๆ คนจะต้องจับตามอง', 'http://www.multiple-owners.com/illustration/%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%A0%E0%B8%B2%E0%B8%9E%E', 'PicsNews/YourPorcelainDoll-Portrait-Illustrations-17.jpg', 0),
(54, 'Star Wars Fashion โดย John Woo', 'John Woo', 'ภาพประกอบแนว Fashion เซทนี้เป็นของศิลปินชื่อว่า John Woo จากประเทศ Hong Kong Concept ของภาพประกอบเซทนี้คือการเอาตัวละครในเรื่อง Star Wars แต่ละตัวมาลองใส่ชุดเป็นนายแบบดู แต่ละชุดที่ตัวละครใส่นั้นก็มาจาก Brand Fashion ชื่อดังทั้งนั้น', 'http://www.multiple-owners.com/illustration/star-wars-fashion-%E0%B9%82%E0%B8%94%E0%B8%A2-john-woo/', 'PicsNews/starwarsfashion12.jpg', 0),
(55, 'The Rescue of the Bull', 'Fran Recacha', 'The Rescue of the Bull เป็นงานศิลปะภาพวาดของศิลปินชาว Spain ที่มีชื่อว่า Fran Recacha เขาเกินที่ Barcelona ประเทศ Spain เมื่อวันที่ 27 ปี 1976 และได้เข้าเรียนที่ Fine Arts from the University ที่อยู่ในเมืองเดียวกัน\r\n\r\nFran Recacha มีหลายผลงานออกมาและชิ้นนี้ก็เป็นผลงานล่าสุดของเข้าที่มีชื่อว่า The Rescue of the Bull ที่ชุดอยู่ในชุดภาพวาด Utopia \r\n\r\n \r\n\r\nThe Rescue of the Bull เป็นภาพวาดสีน้ำมันบนผ้าใบขนาด 150 x 300 cm', 'http://www.multiple-owners.com/illustration/the-rescue-of-the-bull/', 'PicsNews/bba280d6d12e441d49ffaeea1d63d1a0.jpg', 0),
(56, 'Visiting Ceuta', 'Sara Maese', 'Map project about Ceuta, my birthplace.\r\nYou can find on it all the important places of the city.\r\n', 'http://www.saramaese.com/Visiting-Ceuta', 'PicsNews/MapaCeuta_Presentacion1_830.jpg', 0),
(57, '2016 Thus Far ภาพประกอบโดย Jacob Livengood', 'Jacob Livengood', 'ผลงานนี้เป็นผลงานภาพประกอบของ Jacob Livengood ในปี 2016 ซึ่งจริงๆ แล้วมีมากมายหลายงานมากๆ แต่ขอหยิบยกผลงานชุดนี้มาให้ได้ดูกัน เพราะเป็นงานที่ Paint ด้วยมือซะส่วนใหญ่', 'http://www.multiple-owners.com/illustration/2012-thus-far-%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8', 'PicsNews/024745f416a3878292f8ad3fe5bb8184.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Uploads`
--

CREATE TABLE IF NOT EXISTS `Uploads` (
  `uploadsId` int(10) NOT NULL,
  `pictureWork` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nameWork` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `typeWork` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `workCaption` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `workPrice` int(5) NOT NULL,
  `memberId` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Uploads`
--

INSERT INTO `Uploads` (`uploadsId`, `pictureWork`, `nameWork`, `typeWork`, `workCaption`, `workPrice`, `memberId`) VALUES
(19, 'PicsWorks/13.jpg', 'BIRCHBOX', 'graphics', 'CI of Brichbox company \r\nchoose the color like a funny feel.', 5000, 15),
(24, 'PicsWorks/t1.jpg', 'Just Do It', 'typography', 'Just Do it Pastel Graphics Font', 2000, 2),
(26, 'PicsWorks/9.jpg', 'นกเงือก', 'illustration', 'นกเงือกแสนสวย ในป่าสีเขียว', 1000, 14),
(30, 'PicsWorks/desk-space_960_edit.jpg', 'My Desk - Louise Lockhart', 'illustration', 'Louise has been drawing ever since she first held a pencil and she is so happy to be doing it for a living now she is a grown up. Based in a small town in England, she takes inspiration from the every day things around her, such as hand painted signs, food packaging and old toys. Her work is colourful, jolly and playful as well as being unusual. She creates her designs by drawing, printing, cutting and finding collage material and textures, then compiles them using a computer. Never one to follow current design trends, her work has a folk art aesthetic and a timeless feel.\r\n', 5000, 8),
(32, 'PicsWorks/t6.jpg', 'Shadow Poster', 'typography', 'Typography Poster use Text to create the building Shadow in Poster', 1000, 15),
(33, 'PicsWorks/t3.jpg', 'Poster', 'typography', 'aaaaaaaa', 5000, 2),
(34, 'PicsWorks/t2.jpg', 'Pastel Poster', 'typography', 'โปสเตอร์สีพาสเทลสวยงาม ให้ความรู้สึกอ่อนหวาน มองแล้วสบายตา\r\nเหมาะกับเอาไปทำร้านขนม', 300, 2),
(35, 'PicsWorks/t4.jpg', 'Stamp Logo', 'typography', 'logo like a stamp ink', 1300, 8),
(36, 'PicsWorks/g2.jpg', 'The Uncle Of Words', 'typography', 'เป็นงานกราฟฟิกไทโปกราาฟี่ สื่อสารถึงคนสูงอายุ และคำพูดความคิก', 2000, 2),
(37, 'PicsWorks/15.jpg', 'Camera Logo', 'graphics', 'Logo for Company that works for Camera product use black&white colour cause inspire by real colour of camera', 5000, 3),
(38, 'PicsWorks/g4.jpg', 'Fruit Food Poster', 'graphics', 'Fruit Food Poster', 1000, 3),
(43, 'PicsWorks/2f5120285f128b49089facf1405afeea.jpg', 'My Typo Logo', 'typography', '...', 2300, 17),
(45, 'PicsWorks/g7.jpg', 'Identity For Fastfood', 'graphics', 'CI for fastfood use red and blue color.', 5000, 17),
(46, 'PicsWorks/06dbaa8f352a08bedbad419b3a4afa2c.jpg', 'Pastel Character', 'illustration', '...', 2000, 10),
(47, 'PicsWorks/9978f9047432110f946fb5c279487025.jpg', 'Architect on Apartment', 'illustration', '...', 2000, 10),
(48, 'PicsWorks/e9d0705db2cd06f03044223ecdd73d8f.jpg', 'My Cosmetics', 'illustration', 'My Cosmetics on my desk use water colour to create', 1000, 10),
(49, 'PicsWorks/5.jpg', 'Ride a Bike on a mountain ', 'illustration', 'ภาพประกอบ ใช้สีสีนสีเขียว แดง เป็นภาพจักรยานปั่นอยู่บนภูเขา สะท้อนการชอบปั่นจัดรยานของคนในสมัยนี้', 3000, 15),
(50, 'PicsWorks/d61e046b26dd4a69f68267b4789d49c4.jpg', 'Room Sketching', 'illustration', 'งานสเก็ตภาพห้อง', 2000, 19),
(51, 'PicsWorks/3483e5efda4cc01634cdd7600e7b2beb.jpg', 'Dining Room Sketch', 'illustration', 'งานสเก็ตภาพห้องในคอนโด เป็นห้องนั่งเล่น ใช้ ipad ในการสเก็ต', 2000, 19),
(52, 'PicsWorks/affccc3d7071e0df08c11b46491c6ea5.jpg', 'Bathroom Sketch', 'illustration', 'งานสเก็ตรูปห้องน้ำใต้หลังคา', 2000, 19),
(53, 'PicsWorks/0416b41777d66498c10f0309b9b13bd6.jpg', 'Postal Stamp', 'graphics', 'The concept Art of Stamps', 500, 3),
(54, 'PicsWorks/c3641d28496ecc6fe873748a41d7fdc1.jpg', 'Japanese Magazine Cover', 'graphics', 'Japanese Magazine Cover: Kiblind. Tomoya Wakasugi. 2014 | The Gurafiku archive of Japanese graphic design is a collection of visual research…', 4000, 15),
(55, 'PicsWorks/1535a46ed4638e88ea31b4bc1677e9e8.jpg', 'SLALOM', 'graphics', 'Book Cover Pastel Color\r\nuse the text font to create', 1000, 2),
(56, 'PicsWorks/415c22ace548ff93af32605de66a56df.jpg', 'Stripe Secret of Book', 'graphics', 'Cover Book ออกแบบโดยใช้เส้น และ แสงเงา ของสีดำ มาทำให้ดูมีความลึกลับ น่าค้นหา น่าอ่านสำหรับหนังสือเล่มนี้', 3000, 14),
(57, 'PicsWorks/e419ef5808818a9f23e250409b9ee8f5.jpg', 'A girl in bath.', 'illustration', 'เป็นภาพประกอบที่สื่ออารมณ์ถึงผู้หญิงในปัจจุบัน ', 2000, 8),
(58, 'PicsWorks/ad6a5bc93907a803ec61590559db370a.jpg', 'Trouble Pastel', 'illustration', 'เป็นภาพที่สื่ออารมณ์ถึงความว้าวุ่น แต่ไม่ร้ายแรงมาก หรือ อาจจะสื่ออารมณ์ได้ตามผู้ที่พบเห็นภาพ', 2000, 8),
(59, 'PicsWorks/72f81a0623e100f0801588826966738a.jpg', 'At the Beach.', 'illustration', 'Stuff when you go to the beach.', 2000, 8),
(60, 'PicsWorks/db71d794a2a876eafa488f242d8f838f.jpg', 'Sun and Train', 'illustration', 'ภาพประกอบหนังสือ เป็นภาพที่แสดงถึงรถไฟที่กำลังวิ่งป่านดวงอาทิตย์ที่กำลังจะตกดิน โดยใช้โทนสี 2 สี คือ เขียวและชมพู', 2000, 8),
(61, 'PicsWorks/61ddfde077845f638508e971deb9272d.jpg', 'Pantone Working Women', 'illustration', 'ภาพผู้หญิงวันทำงานคนนึง ที่ดูแข็งแกร่ง แต่ใช้ Pantone ของปีนี้มาวาดเลยทำให้ดูซอฟลง', 2000, 17),
(62, 'PicsWorks/47aafd9986f8927ea2e121bad0ec9c63.jpg', 'F innovation', 'graphics', 'โลโก้ F ที่ทำให้รู้สึกเหมือนมีความทันสมัย เป็นเทคโนโลยี มีความเป็น Innovation High Technology', 5000, 17),
(63, 'PicsWorks/39e8b74daffbaa701daec2aa2d519dd7.jpg', 'Readable', 'illustration', 'The girl who read a book all the time', 5000, 23),
(64, 'PicsWorks/7c21b597454a0c2ec1deb6ef2776938b.jpg', 'TGB Poster', 'typography', 'The great Barrier Poster\r\ncolour is pink light-green and blue and use text typography to create this poster', 4000, 23),
(65, 'PicsWorks/46b219033f3315691fd951d580688645.jpg', 'The Forest Ever Land.', 'illustration', 'The Forest Ever Land เป็นภาพประกอบสื่อถึงชีวิตในป่า ที่มีต้นไม้สีเขียวล้อมลอบ มีธรรมชาติที่สวยงาม มีน้ำตกไหลผ่าน สวยงาม น่าสนใจ', 2000, 24),
(66, 'PicsWorks/0945d8e76c4a7c8f7f99d8cf299f46f1.jpg', 'Step Poster', 'typography', 'โปสเตอร์ที่ใช้ text มาสื่อแทนบันได ให้ก้าวต่อไปอย่างมีสเต็ป', 1000, 14),
(67, 'PicsWorks/6931b8b7e8d6952ea8b799c83db436cf.jpg', 'Triangle Book Cover', 'graphics', 'Triangle book cover colour of design is grey black and white ', 1000, 23),
(68, 'PicsWorks/857820c0fcffb8a50e7975f520b4cf69.jpg', 'Cloud Cottonbud', 'graphics', 'ออกแบบผลิตภัณฑ์ที่ใส่คอนตอนบัด รูปก้อนเมฆ ', 300, 26),
(69, 'PicsWorks/31e9aed53c9043e6c7837ed5b01d0903.jpg', 'Work Shop', 'typography', 'Work Shop Computer Poster', 2000, 3),
(70, 'PicsWorks/218b64d3ebc41f096611397662cf9918.jpg', 'Font TonTon Design', 'typography', 'ออกแบบฟอนต์สำหรับตัวเอง โดยออกแบบภาษาอังกฤษเป็นหลัก', 10000, 29),
(71, 'PicsWorks/7a404ddfd34a96542203c26dafc831b1.jpg', 'something inspiration', 'typography', 'Typography Design for some quotes.', 1000, 29),
(72, 'PicsWorks/c017086a4dab94c47bce7cd104af03b5.jpg', 'ALIVE', 'typography', 'Typography of logo Alive', 2000, 29),
(73, 'PicsWorks/3a964e7b7d8ac77fb7b6c7fa56a9556c.jpg', 'GOODIE GOODIE BOY', 'graphics', 'Poster Goodie Boy user red colour because this colour made people excited when they read.', 3000, 29),
(74, 'PicsWorks/37609394c316151dbb69125c3bb21096.jpg', 'Freedom', 'typography', 'Poster Freedom Character', 1000, 31),
(75, 'PicsWorks/02d0d1da6c85e0d1f5130ce14992d4b2.jpg', 'In Authum Glass House', 'illustration', 'เป็นภาพประกอบหนังสือนิทานต่างประเทศ ที่เกี่ยวกับฤดูต่างๆ ในที่นี้เป็นรูปฤดูใบไม้ผลิ เป็นหญิงสาวนั่งอยู่ในเรือนเพาะต้นไม้ ดูต้นไม้ที่ผลิใบไปตามกาลเวลา', 1000, 31),
(76, 'PicsWorks/98187b392fa61885bc7f92f282a10436.jpg', 'FRESH', 'typography', '- fresh - use the copic write in my sketch book ', 0, 2),
(77, 'PicsWorks/55e3223d04d98236019cab9b11fc1edf.jpg', 'Oil Color Pattern', 'illustration', 'Pattern Oil Colour on canvas', 2500, 24),
(78, 'PicsWorks/a4dd7d1a7109d268c1795d48aac4d97d.jpg', 'Graphics On Cover', 'graphics', 'Cover book use geomatic form to made pattern ', 1000, 24),
(79, 'PicsWorks/8ed4f1c2e0e515e69861dd9cb48e3f08.jpg', 'Confuse', 'illustration', 'เป็นภาพเลเอ้าของผู้หญิงคนนึง ที่กำลังรู้สึกสับสนมากๆ', 1000, 24),
(80, 'PicsWorks/803e8ead760d9b3c6099fafae3f904d2.jpg', 'Oh! Legs', 'illustration', 'เป็นภาพขาที่มองไปแล้วจริงๆเป็นขาของผู้หญิง และ ผู้ชาย วาดให้สื่อในเชิงความเท่าเทียมกันของคนในสมัยนี้', 5000, 19),
(81, 'PicsWorks/AhMagazine_SaraMaese_1_1_800.jpg', '¡Ah! Magazine', 'illustration', 'Pattern created for the social media covers of ¡Ah! Magazine,\r\na digital publication about culture.', 3000, 34),
(82, 'PicsWorks/07BeachPat_SaraMaese_800.jpg', 'Beach Time Patterns', 'illustration', 'Pattern project about summer and spending time at the beach.', 3000, 34),
(83, 'PicsWorks/Pattern15_SaraMaese_800.jpg', 'Optymistic Cases & Tote Bags', 'illustration', 'First collection of cases and tote bags with the Spanish company Optymistic. \r\nI chose different summer patterns I made for creating the entire collection.\r\n', 5000, 34),
(84, 'PicsWorks/57b687554c2a2702730e9be22e02e037.jpg', 'The Marble', 'graphics', 'Cover Book marble pattern\r\nhave color black and white', 300, 8),
(85, 'PicsWorks/50abf07b0482f39d335cf274a3d081bb.jpg', 'Book Layout design', 'typography', 'Layout Design in book ', 2000, 15),
(86, 'PicsWorks/59d33017db724ee62de985689d304bdf.jpg', 'Pink Only', 'typography', 'Design Package use only pink colour and have some text to design', 2000, 10),
(87, 'PicsWorks/01ea31c220997549dbca8a1ecbc0fd86.jpg', 'CAMP Logo', 'graphics', 'โลโก้สำหรับร้าน CAMP เป็นลักษณะการใช้ตัวหนังสือในการออกแบบโลโก้\r\nมีการตัดทอนตัวอักษร ทำให้เหมือนเป็น แคมป์ ตรงตัว A ใช้สีดำเรียบง่าย ทำให้ดู unique', 5000, 31),
(88, 'PicsWorks/938cb427fa7ae6ea74cff6456877b6e3.jpg', 'SATORI', 'graphics', 'โลโก้ Satori เป็น รีสอร์ท ที่อยู่ริมทะเล เลยใช้ใบไม้ในการออกแบบ เพิ่มความหรูหราให้เป็นรีสอร์ทระดับ 5 ดาว โดยการใช้สีทอง', 10000, 31),
(89, 'PicsWorks/9b032800c0034f2690223e12ff014809.jpg', 'Olive Logo', 'graphics', 'โลโก้ของร้านอาหารที่ใช้น้ำมันมะกอกในการทำอาหาร และใช้มะกอก ประกอบอาหารทุกอย่างในร้าน ออกแบบให้มีความน่ารัก ดูไม่เป็นการกินมะกอกจริงจังเกินไป แต่ในขณะเดียวกันก็คงความโมเดิร์นไว้ด้วยการใช้สีดำ', 5000, 23),
(90, 'PicsWorks/8b3598d6f31d703915199e939aefb76f.jpg', 'Camera Namecard', 'graphics', 'นามบัตรสำหรับองค์กรที่ทำธุรกิจเกี่ยวกับกล้อง และมือถือ', 3000, 17),
(91, 'PicsWorks/32f820ed143585ee9ffd75248cc7d4e7.jpg', 'Cloud Soap Packaging', 'graphics', 'ออกแบบแพคเกจจิ้งสำหรับใส่สบู่ รูปก่อนเมฆ ใช้โทนสีพาสเทล เพื่อให้ลืมความเป็นสบู่สมุนไพรพื้นบ้านไป ทำให้ดูโมเดิร์นและน่าใช้มากขึ้น', 5000, 26),
(92, 'PicsWorks/5156cd5b3a5fc48a76b82702d9a27ce6.jpg', 'KEAT Soap Package Design', '- Select -', 'Packaging สบู่ ยี่ห้อ KEAT เน้นรูปวาดบนแพคเกจสบู่ให้ดูน่ารัก วาดรูปตามกลิ่นของสบู่ ใช้โทนสีพาสเทล น่ารัก น่าใช้', 5000, 26),
(93, 'PicsWorks/38d224d1d34ff50afc981e3df803e76a.jpg', 'Soap Stone', 'graphics', 'ออกแบบรูปทรงของสบู่ ให้ดูเหมือนหินตามที่ทางลูกค้าต้องการ ', 5000, 26),
(94, 'PicsWorks/b2216c9b56e131c430134372183532dd.jpg', 'Bay Cloud', 'graphics', 'Logo Design '' CLEARED PATH '' ออกแบบโดยเน้นสื่อถึงนวัตกรรมใหม่ เป็นเทคโนโลยีใหม่ มีความทันสมัย ', 5000, 23),
(96, 'PicsWorks/088c2a99a414e09c456c42e0017c3de6.jpg', 'Picnic On Vacation', 'illustration', 'เป็นภาพประกอบ สื่อถึงการมาปิกนิกในวันหยุด', 3000, 35),
(97, 'PicsWorks/e12fda7397dfba951a8bd947d0a58c48.jpg', 'Happy 3 Friends', 'illustration', 'เป็นภาพประกอบผู้หญิง 3 คน หน้าตาไร้อารมณ์ ใช้สีชมพูพาสเทลในการวาด ทำให้ภาพซอฟ', 5000, 35),
(98, 'PicsWorks/3d74b6d56eef4aed6eb008d6af414232.jpg', 'Pink Tree', 'graphics', 'เป็นภาพกราฟฟิกที่เป็นปะการัง หรือ ต้นไม้สีชมพู เอาเอาท์ไลน์ของสี่เหลี่ยมเข้าไปประกอบภาพ ทำให้ดูมีมิติมากขึ้น', 2000, 35),
(99, 'PicsWorks/a2424ea70e9b208f7a37fcb22bec38ef.jpg', 'App icon Cloud 1', 'graphics', 'แอปลพิเคชั่นไอคอน ออกแบบโดยได้แรงบันดาลใจมาจากธรรมชาติ', 5000, 36),
(100, 'PicsWorks/802c8db854c4caaef90c131a927e3e8e.jpg', 'Coca Cola icon App', 'graphics', 'icon application coca cola ได้แรงบันดาลใจมาจากขวดของโค้ก ออกแบบให้เหมือนขวด มีความใส', 5000, 36),
(101, 'PicsWorks/1335154329168501fc594b6239bf8c91.jpg', 'Discount Application Icon', 'graphics', 'ไอคอนสำหรับแอปพลิเคชั่นสินค้าลดราคา ออกแบบให้ดูแฟลต ทันสมัย ง่ายต่อการใช้งาน', 5000, 36),
(102, 'PicsWorks/4c52def8be9d3036217285d78171c563.jpg', 'Quotes App icon', 'graphics', 'ไอคอนสำหรับแอผลพิเคชั่นเกี่ยวกับการแชท', 5000, 36),
(103, 'PicsWorks/0676908cfda1e4e7f8e31a256a4d82cf.jpg', 'Starbucks Application icon', 'graphics', 'ไอคอนแอปพลิเคชั่นสตาร์บัค', 5000, 36),
(104, 'PicsWorks/76b5b0f903cf5f5cc918472a77dce320.jpg', 'HIENZ', 'graphics', 'Application icon for HIENZ company inspiration by tomato sauce bottle.', 5000, 36),
(105, 'PicsWorks/1cf26daf6a0817037cd94d3ef906f080.jpg', 'Freetime 1', 'typography', 'Typography Design when freetime', 0, 36),
(106, 'PicsWorks/4987930f4b3147438791c4832265fe02.jpg', 'CLOUDS', 'typography', 'typography when free time 2\r\ninspiration by cloud and sea ', 1000, 36),
(107, 'PicsWorks/ed0d3bbc6368e6e0a166d9ae837b6571.jpg', 'Your my Favourite', 'typography', 'water color and inspire by flower', 1400, 10),
(108, 'PicsWorks/bfa5d00a287e778723d0a83d6b147c47.jpg', 'Flower Quotes', 'typography', 'Winnie the pooh quotes inspiration by flower', 1000, 10),
(109, 'PicsWorks/dfbea188cd5a5c2970474137182796b8.jpg', 'When i have free time', 'typography', 'White by hand and Calligraphy Designs', 2000, 10),
(110, 'PicsWorks/cd36e74f95012f14cfb8bbb045c85353.jpg', 'OH MY GOSH', 'typography', 'inspiration by korean series', 1000, 10),
(111, 'PicsWorks/ba2a85a63bb360649311444d83ceddfa.jpg', 'Sunshine ', 'typography', 'แรงบันดาลใจมาจากพระอาทิตย์ส่องแสง เลยให่สีเหลืองในการเน้นคำที่โดดเด่น และ ใช้ฟ้อนแบบวาดน่ารักๆ', 2000, 17),
(112, 'PicsWorks/d096bffe1b30686f1a7001aa495ccb1f.jpg', 'NEW YORK', 'typography', 'เป็นการออกแบบฟ้อนให้เอาเมือง หรือรูปตึกของนิวยอค เข้ามาเกี่ยวข้อง', 2000, 17),
(113, 'PicsWorks/d1c835612c38a709cafba00d9968c2b7.jpg', 'A girl short hair', 'illustration', 'Portrait a girl short hair ', 1000, 19),
(114, 'PicsWorks/18f90e10572013c1d0dfc8f61769cdc7.jpg', 'impress me', 'illustration', 'a black cat ', 1200, 19),
(115, 'PicsWorks/375e1465bb71a8d5eb7636ab5fffef4f.jpg', 'AW', 'graphics', 'Logo Design AW use Black&White colour for minimal style', 5000, 14),
(116, 'PicsWorks/045687c5d4e2d9691759eb6f0b3fc1e9.jpg', 'TWO Hands', 'graphics', 'เป็นภาพกราฟิกที่สื่อถงการร่วมมือกัน', 2000, 14),
(117, 'PicsWorks/f7e9ec28601d85c13b1d45838bf3a78a.jpg', 'PAINT LOGO', 'graphics', 'โลโก้ที่ออกแบบมาเกี่ยวกับการระบายสี ใช้แปรงสื่อถึงการทา ', 5000, 14),
(118, 'PicsWorks/28e920aa2299d86116cc323562e80718.jpg', 'WAVE', 'graphics', 'โลโก้ดีไซน์ สื่อถึงคลื่นน้ำ', 5000, 14),
(119, 'PicsWorks/73cbe56b7093e62810e8b673f210104e.jpg', 'Confuse logo', 'graphics', 'โลโก้ที่มีความซับซ้อน', 2000, 14),
(120, 'PicsWorks/6a4632d93b707e6e761b55e4b163bce6.jpg', 'Liqiud', 'typography', 'ออกแบบให้สื่อถึงของเหลว น้ำ ', 2000, 3),
(121, 'PicsWorks/5e91262010dd3ac7293c69e164d7915b.jpg', 'Good Time', 'graphics', 'งานตัดต่อรูปและข้อความ ให้ดูสื่ออารมณ์และเนียนไปกับภาพ', 2000, 3),
(122, 'PicsWorks/f5016c6c20c95a13049410340a0c4a35.jpg', 'Trust One', 'typography', 'ออกแบบให้สื่อถึงความรัก ให้อยู่ในแนวของรุปหัวใจ', 5000, 3),
(123, 'PicsWorks/7442484e89ff30f7ff1a4d9f1e35bae8.jpg', 'Open your mind', 'typography', 'ออกแบบโดยเน้นให้สีสันสดใส และตัดทอนคำให้ดูเป็นอนาคต', 2000, 15),
(124, 'PicsWorks/8ae3266da090fd7f4c25536097c08ae9.jpg', 'Hapiness', 'graphics', 'ออกแบบให้ดูมีความสุข มีความรัก ทำ text ให้อยู่ในรูปของหัวใจ', 2000, 15),
(125, 'PicsWorks/c6f74bb34ddade671368d8ec257a22a4.jpg', 'infinity', 'typography', 'อินฟินิตี้ typography ', 2000, 29),
(126, 'PicsWorks/27abbdc471733123dc2828f08bb2663f.jpg', 'Freetime', 'typography', 'free time to create arts', 1000, 29),
(127, 'PicsWorks/02c84acd2b93d4ef3891d62e2c401f51.jpg', 'Galaxy', 'illustration', 'ภาพประกอบผู้หญิงคนนึงกำลังมองดูแกแลกซี่อันไกลโพ้น', 5000, 23),
(128, 'PicsWorks/5c44c3f389ca4ec63e12ac6c94f3ca7b.jpg', 'That Beach', 'illustration', 'ภาพทะเล ใช้สีสันสดใส มีความสะท้อนแสง', 5000, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact_work`
--
ALTER TABLE `Contact_work`
  ADD PRIMARY KEY (`contactWorkId`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`memberId`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `Uploads`
--
ALTER TABLE `Uploads`
  ADD PRIMARY KEY (`uploadsId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact_work`
--
ALTER TABLE `Contact_work`
  MODIFY `contactWorkId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `Member`
--
ALTER TABLE `Member`
  MODIFY `memberId` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `newsId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `Uploads`
--
ALTER TABLE `Uploads`
  MODIFY `uploadsId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
