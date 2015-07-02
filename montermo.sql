-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 12:46 AM
-- Server version: 5.6.23-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mekhlo5_montermo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(100) NOT NULL AUTO_INCREMENT,
  `about_keyword` varchar(100) COLLATE utf8_bin NOT NULL,
  `about_text` varchar(255) COLLATE utf8_bin NOT NULL,
  `about_lang` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`about_id`),
  KEY `about_id` (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand_short_desc` text COLLATE utf8_bin,
  `brand_description` text COLLATE utf8_bin NOT NULL,
  `brand_logo` varchar(50) COLLATE utf8_bin NOT NULL,
  `brand_lang` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=50 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_short_desc`, `brand_description`, `brand_logo`, `brand_lang`) VALUES
(34, 'FLOWROX', 'Heavy duty valves, pumps and system', '<P>\r\n                                    Montermo LLC is an authorized representative of Flowrox Oy, \r\n                                    Finland in the Mongolian market since 2013. \r\n                                </P>\r\n                                <P>\r\n                                    Flowrox has over 30 years of experience with more than 120 000 \r\n                                    installed products. Flowrox was the first pinch valve manufacturer \r\n                                    in the world to get awarded the ISO 9001: 2000 Quality Certificate \r\n                                    in 1997. \r\n                                </P>\r\n                                <P>\r\n                                    Flowrox is known for its reliable solutions for demanding pro¬cess \r\n                                    conditions and deliver flow control technology especially for Mining, \r\n                                    Minerals & Metallurgy and Energy & Environment industries as well as \r\n                                    for OEMs, but Flowrox have many prov¬en solutions also in Chemical, \r\n                                    Pulp & Paper, Oil & Offshore and Cement processes as well as in Waste \r\n                                    Water Treatment among others. \r\n                                </P>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Pinch valves </li>\r\n                                    <li>Knife gate valves </li>\r\n                                    <li>Rotary disc valves </li>\r\n                                    <li>Peristaltic hose pumps </li>\r\n                                    <li>Progressive cavity pumps </li>\r\n                                    <li>Spare components </li>\r\n                                    <li>Service agreements for heavy duty valves, pumps and system</li>\r\n                                </ul>\r\n\r\n<iframe width="420" height="315" src="https://www.youtube.com/embed/L57OVxIBQsg" frameborder="0" allowfullscreen></iframe>', 'brand_34/logo_34.jpeg', 'english'),
(35, 'CiDRA', 'Pipeline flow & wear monitoring sensors', '<P>\r\n                                    Montermo LLC has been working as an authorized representative of CiDRA \r\n                                    Corporate Services Inc, USA in Mongolia since 2014. \r\n                                </P>\r\n                                <p>\r\n                                    CiDRA is a leader in Process Optimization and Enhanced Recovery solutions \r\n                                    and services to many of the world’s largest industrial markets. CiDRA’s \r\n                                    Intellectual Property portfolio contains 700 U.S. and International patent \r\n                                    applications; moreover, 65% of the world’s copper is processed through \r\n                                    CIDRA products.\r\n                                </p>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>\r\n                                        SONARtrac® Flow Measurement.\r\n                                    </li>\r\n                                    <li>\r\n                                        HALO® Pipe Wear Measurement.\r\n                                    </li>\r\n                                </ul>', 'brand_35/logo_35.jpg', 'english'),
(36, 'MULTOTEC', 'Processing equipment and consumable parts', '<P>\r\n                                    Montermo LLC has been working as an `Authorized Representative` of \r\n                                    The Multotec Group, South African in the Mongolia since 2014.\r\n                                </P>\r\n                                <p>\r\n                                    The Multotec Group, established more than thirty years ago, is a \r\n                                    South African organization with German shareholding. Its core business \r\n                                    is the supply of products and services to the mining, mineral beneficiation \r\n                                    and power generation industries.\r\n                                </p>\r\n                                <p>\r\n                                    Quality remains an integral part of the group’s ongoing strategy and \r\n                                    the entire organization is ISO 9001:2008 certified.\r\n                                </p>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Screening and Flotation Solutions</li>\r\n                                    <li>Process Equipment Solutions</li>\r\n                                    <li>Solid / Liquid Separation Solutions</li>\r\n                                    <li>Rubber Wear Solutions</li>\r\n                                    <li>Wear Resistant Linings</li>\r\n                                    <li>Conveyor Belt Fastening Solutions</li>\r\n                                </ul>\r\n\r\n<iframe width="420" height="315" src="https://www.youtube.com/embed/45SOTN98SFQ" frameborder="0" allowfullscreen></iframe>', 'brand_36/logo_36.gif', 'english'),
(37, 'FLYGT', 'Pumps, mixers, monitoring and control equipment', '<P>\r\n                                    Montermo LLC has been working for a trade partner of Flygt brand \r\n                                    of Xylem, Sweden in Mongolian market since 2014. \r\n                                    The world’s premier manufacturer of submersible pumps, mixers and \r\n                                    mechanical aeration equipment for use in mar¬kets ranging from water \r\n                                    and wastewater treatment, raw water supply, abrasive or contaminated \r\n                                    industrial processes, mining and irrigation. \r\n                                </P>\r\n                                <ul>\r\n                                    <li>Flygt mixers and agitators are systematically tested for thrust and comply with ISO 21630:2007 for sub mersible mixers of all sizes </li>\r\n                                    <li>There are more than 200,000 Flygt mixers installed in wastewater treatment plants around the world </li>\r\n                                    <li>One Flygt dewatering pump is sold every three minutes somewhere around the world </li>\r\n                                    <li>175,200 dewatering pumps are put into service around the world every year </li>\r\n                                </ul>\r\n                                <br><strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Pumps</li>\r\n                                    <li>Mixers</li>\r\n                                    <li>Dewatering pumps and equipment</li>\r\n                                    <li>Monitoring and Control equipment</li>\r\n                                </ul>\r\n<br>\r\n\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/GDngss02_D8?list=PLdXo7F6pjX_8HhdxTX4NtfuAv1enI81Hz" frameborder="0" allowfullscreen></iframe>', 'brand_37/logo_37.png', 'english'),
(38, 'PUDA', 'Weighing and filling equipment and systems', '<p>\r\n                                    Montermo LLC has been working for an official distributor of PUDA-International \r\n                                    Packaging Machinery Inc, Canada in the Mongolian market since 2014. \r\n                                    PUDA produces weighing and filling equipment and systems. Automated bagging \r\n                                    facilitates the quantifying and packag¬ing of various products such as packaging \r\n                                    powders, pellets, flakes or granules for many different industries such as food, \r\n                                    feed, chemical and building materials industries. Furthermore, PUDA`s systems have \r\n                                    been used with a variety of packaging materials: paper, plastic, as well woven polypropylene.\r\n                                </p>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Valve bag packing series</li>\r\n                                    <li>Open mouth bag packing series</li>\r\n                                    <li>Big bag handling series</li>\r\n                                    <li>In-process weighing series</li>\r\n                                    <li>Mobile Containerized Bagging System</li>\r\n                                    <li>Mixer series</li>\r\n                                    <li>Dry Mixing and Blending Line </li>\r\n                                    <li>Automatic packing and stacking line </li>\r\n                                    <li>Others (conveyor, platform and crane scales)</li>\r\n                                </ul>', 'brand_38/logo_38.jpeg', 'english'),
(39, 'GEHO', 'PD Slurry pumps', '<p>\r\n                                    GEHO® pumps are world market and technological leaders in the design and \r\n                                    manufacture of piston, piston diaphragm and hose diaphragm pumps for slurry, \r\n                                    sludge and paste applications. The pumps handle a wide range of applications \r\n                                    such as long-distance slurry pipeline transport, mine dewatering and backfill, \r\n                                    autoclave, reactor and digester feed, gasifier feed and high density tailings \r\n                                    disposal.\r\n                                </p>\r\n                                <p>\r\n                                    The crankshaft driven piston pumps handle slurries and sludges with moderate abrasivity, \r\n                                    medium to high viscosity, mild corrosivity, up to 6 mm particle size and up to \r\n                                    75% solids content.\r\n                                </p>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Crankshaft driven piston pumps</li>\r\n                                    <li>Hose diaphragm pumps</li>\r\n                                    <li>Hydraulic driven piston pumps</li>\r\n                                    <li>Piston diaphragm pumps</li>\r\n                                </ul>\r\n\r\n<br>\r\n\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/wiZcBlvkcKU" frameborder="0" allowfullscreen></iframe>', 'brand_39/logo_39.gif', 'english'),
(40, 'KAMAT', 'High pressure plunger pumps and pump systems', '<p>\r\n                                    KAMAT produces high pressure plunger pumps, with operating pressures of up to \r\n                                    3,500 bar, for the most demanding industrial applications. Our pumps excel \r\n                                    through their small dimensions, as well as high modularity that makes special \r\n                                    designs and single piece production possible.\r\n                                </p>\r\n                                <p>\r\n                                    KAMAT plunger pumps with integrated transmissions, are the heart of any KAMAT \r\n                                    high pressure system. With minimum space requirements it ensures continuous high \r\n                                    pressure and maximum reliability. While achieving efficiency of over 90 percent, \r\n                                    energy is utilized to the fullest. Further advantages of KAMAT high pressure pumps:\r\n                                </p>\r\n                                <ul>\r\n                                    <li>Modular construction makes special designs and single piece production possible</li>\r\n                                    <li>Simple operation and maintenance with customer friendly service</li>\r\n                                    <li>High versatility for pressure and flow is achieved simply by changing the plunger conversion kit</li>\r\n                                    <li>Reliable gearboxes with high lubrication security</li>\r\n                                    <li>Compliance with electrical & mechanical international standards like eg ATEX, API 674</li>\r\n                                </ul>\r\n                                <p>\r\n                                    KAMAT offers suitable pumps for any demand. Input power range from at 15 kW and reaches \r\n                                    up to 800 kW. Operating pressure can be chosen from between 0 to 3,500 bar. The spectrum \r\n                                    of usable fluids range from high viscous, watery or loaded with solids to very hot or \r\n                                    very cold.\r\n                                </p>\r\n                                <p>\r\n                                    A plunger pump is a type of positive displacement pump where the high-pressure seal is \r\n                                    stationary and a smooth cylindrical plunger slides through the seal. This makes them \r\n                                    different from piston pumps and allows them to be used at higher pressures.\r\n                                </p>\r\n\r\n<strong>Product range:</strong>\r\n<ul>\r\n<li>High pressure pumps – compact and efficient</li>\r\n<li>High pressure pump systems</li>\r\n<li>Pump accessories – high pressure valves, high pressure nozzles, high pressure guns, rotating joints</li>\r\n</ul>', 'brand_40/logo_40.gif', 'english'),
(41, 'TYCO', 'Actuators & Controls', '<p>\r\n                                    Pentair offers one of the largest portfolios of actuation and controls products available \r\n                                    in the market today.  Global manufacturing facilities produce electric, pneumatic, hydraulic, \r\n                                    gas-hydraulic and subsea actuators along with rotary and linear valve position and control monitors.  \r\n                                    Servicing a wide range of industries including oil and gas (onshore and offshore), petrochemical, \r\n                                    chemical and power generation, Pentair has the applications experience and customization capabilities \r\n                                    to find the optimum solution for your valve automation needs.  Whether it’s providing a bare actuator, \r\n                                    helping to size an actuator or designing a customized automation solution, Pentair actuation and controls \r\n                                    can help.\r\n                                </p>\r\n                                <strong>Product range:</strong>\r\n                                <ul>\r\n                                    <li>Electric Actuators</li>\r\n                                    <li>Hydraulic Actuators</li>\r\n                                    <li>Manual Operators</li>\r\n                                    <li>Pneumatic Actuators</li>\r\n                                    <li>Pneumatic Controls</li>\r\n                                </ul>\r\n<br>\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/wSCeD4j5894" frameborder="0" allowfullscreen></iframe>', 'brand_41/logo_41.jpeg', 'english'),
(42, 'FLOWROX', 'Хаалт, насос, шийдлүүд', '<p>\r\n                                    Монтермо ХХК нь 2013 оноос Финландын “Flowrox” компанийн Монгол \r\n                                    дахь албан ёсны төлөөлөгчөөр ажиллаж байна. \r\n                                    Flowrox компани нь дэлхий даяар 120 000 гаруй бүтээгдэхүүнээ \r\n                                    суурилуулсан, 30 гаруй жилийн туршлагатай үйлдвэрлэгч юм. \r\n                                    Хавчдаг хаалтны үйлдвэрлэлээрээ дэлхийд анхдагч бөгөөд 1997 \r\n                                    онд ISO 9001:2000 чанарын гэрчилгээ авсан.\r\n                                    Flowrox компани нь уул уурхай, ашигт малтмалын баяжуулалт, металлурги, \r\n                                    эрчим хүч, байгаль орчны салбар болон үндсэн тоног төхөөрөмж үйлдвэрлэгчдэд \r\n                                    процессийн буюу урсгал хяналтын технологийн найдвартай шийдлээрээ танигдсан. \r\n                                    Мөн химийн бодис, цаасны үйлдвэрлэл, нефть ба далайн гүний газрын тос, цемент \r\n                                    боловсруулалт болон бохир ус цэвэрлэгээнд зориулсан баталгаат шийдлүүдтэй. \r\n                                </p>\r\n                                <strong>Бүтээгдэхүүний нэр төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Хавчдаг хаалт</li>\r\n                                    <li>Хутган хавхлагатай хаалт  </li>\r\n                                    <li>Эргэдэг хавхлагатай хаалт  </li>\r\n                                    <li>Резинэн хоолойт насос  </li>\r\n                                    <li>Үргэлжилсэн хоолойт насос  </li>\r\n                                    <li>Сэлбэг хэрэгсэл  </li>\r\n                                    <li>Өндөр бүтээмжит хаалт, насос, болон системд зориулсан үйлчилгээний гэрээ</li>\r\n                                </ul>\r\n\r\n\r\n<iframe width="420" height="315" src="https://www.youtube.com/embed/L57OVxIBQsg" frameborder="0" allowfullscreen></iframe>', 'brand_42/logo_42.jpeg', 'mongolian'),
(43, 'CiDRA', 'Шугам хоолойн урсгал мэдрэгч ба элэгдлийн түвшин тодорхойлогч', '<P>\r\n                                    Монтермо ХХК нь 2014 оноос АНУ-ын “CiDRA Corporate Services Inc”-ийн \r\n                                    Монгол дахь албан ёсны төлөөлөгчөөр ажиллаж байна.\r\n                                </P>\r\n                                <p>\r\n                                    CiDRA нь үйлдвэрийн процессийн оновчлол, эрчимжүүлсэн аргаар эрдэс \r\n                                    баяжуулах шийдлээрээ тэргүүлэгч компани бөгөөд дэлхийн томоохон \r\n                                    үйлдвэрүүдэд өөрийн шийдлээ нэвтрүүлсэн. CiDRA нь АНУ-ын болон олон \r\n                                    улсын зэрэглэлтэй 700 гаруй патентыг эзэмшдэг бөгөөд албан ёсны оюуны \r\n                                    өмчийн бүртгэлтэй. Дэлхийн нийт зэсийн баяжмалын 65% нь CiDRA-ийн \r\n                                    бүтээгдэхүүнүүдээр дамжин өнгөрдөг.\r\n                                </p>\r\n                                <strong>Бүтээгдэхүүний нэр төрөл:</strong>\r\n                                <ul>\r\n                                    <li>\r\n                                        SONARtrac®- Шугаман хоолойн урсгал мэдрэгч - Шугаман хоолойгоор дамжин \r\n                                        өнгөрч буй баяжмалын тунг тодорхойлдог ба хийн хэмжээг гаргаж ирдгээрээ \r\n                                        баяжмалын ашигтай эсэхийг тодорхойлдог.\r\n                                    </li>\r\n                                    <li>\r\n                                        HALO® – Элэгдлийн түвшин тодорхойлогч - Шугаман хоолойн хананы зузааныг \r\n                                        дуун дохионы тусламжтайгаар тогтоодог бөгөөд аливаа цооролт задралт үүсэхээс \r\n                                        сэргийлдэг.\r\n                                    </li>\r\n                                </ul>', 'brand_43/logo_43.jpg', 'mongolian'),
(44, 'MULTOTEC', 'Баяжуулах үйлдвэрийн тоног төхөөрөмж', '<P>\r\n                                    Монтермо ХХК нь 2014 оноос Өмнөд Африкийн Бүгд Найрамдах Улсын \r\n                                    “Multotec Групп”-ын Монгол дахь албан ёсны төлөөлөгчөөр ажиллаж байна. \r\n                                </P>\r\n                                <p>\r\n                                    Multotec групп нь 30 гаруй жилийн өмнө үүсгэн байгуулагдсан, Германы \r\n                                    хөрөнгө оруулалттай, ӨАБНУ-ын компани юм. Тус группын үндсэн бизнес нь \r\n                                    уул уурхай, ашигт малтмалын баяжуулалт, эрчим хүч үйлдвэрлэлийн салбарт \r\n                                    бүтээгдэхүүн, үйлчилгээгээ хүргэдэг. \r\n                                </p>\r\n                                <p>\r\n                                    Тус группын хэрэгжүүлж буй стратегийн салшгүй нэгэн хэсэг нь чанар бөгөөд \r\n                                    группын хэмжээнд бүх салбар компаниуд нь ISO 9001:2008 сертификатаар \r\n                                    баталгаажсан.\r\n                                </p>\r\n                                <strong>Бүтээгдэхүүний нэр төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Баяжуулалт болон шүүлтүүрийн шийдлүүд</li>\r\n                                    <li>Процессийн тоног төхөөрөмжийн шийдлүүд</li>\r\n                                    <li>Хатуу/шингэн тусгаарлах шийдлүүд</li>\r\n                                    <li>Элэгдэлд тэсвэртэй резинэн шийдлүүд</li>\r\n                                    <li>Элэгдэлд тэсвэртэй зузаавч доторлогоонууд</li>\r\n                                    <li>Конвейерийн тууз бэхлэх шийдлүүд</li>\r\n                                </ul>\r\n<br>\r\n<br>\r\n\r\n<iframe width="420" height="315" src="https://www.youtube.com/embed/45SOTN98SFQ" frameborder="0" allowfullscreen></iframe>', 'brand_44/logo_44.gif', 'mongolian'),
(45, 'FLYGT', 'Насос, холигч, ус шавхах төхөөрөмж, хяналт, шинжилгээний төхөөрөмжүүд', '<P>\r\n                                    Монтермо ХХК нь 2014 оноос Шведийн “Xylem” компанийн “Flygt” брэндийн Монгол \r\n                                    дахь худалдааны түншээр ажиллаж байна. \r\n                                    Flygt нь уул уурхай, усжуулалт, цэвэр ба бохир ус зайлуулалт, цэвэр усны хангамж, \r\n                                    үрэлт болон бохирдолт ихтэй үйлдвэрийн процессуудад өргөн ашиглагддаг гүний насос, \r\n                                    холигч болон механик хийжүүлэгч тоног төхөөрөмжүүдийн үйлдвэрээрээ дэлхийд \r\n                                    тэргүүлэгч юм. \r\n\r\n                                </P>\r\n                                <ul>\r\n                                    <li>Flygt холигч, хутгагчууд нь бүх төрлийн гүний холигчид зориулсан ISO 21630:2007 стандартын дагуу үйлдвэрлэгддэг</li>\r\n                                    <li>Дэлхий дээрх 200,000 гаруй бохир ус цэвэршүүлэх станцуудад Flygt холигч суурилуулагдсан</li>\r\n                                    <li>Дэлхий дээр 3 минут тутамд нэг ширхэг Flygt ус шахах насос борлуулагддаг</li>\r\n                                    <li>Жил бүр 175,200 ширхэг Flygt ус шахах насос суурилуулагддаг</li>\r\n                                </ul>\r\n                   <br>             <strong>Бүтээгдэхүүний нэр төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Төрөл бүрийн насос </li>\r\n                                    <li>Төрөл бүрийн холигч </li>\r\n                                    <li>Ус шавхах төхөөрөмжүүд </li>\r\n                                    <li>Хяналт, шинжилгээний төхөөрөмжүүд</li>\r\n                                </ul>\r\n\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/GDngss02_D8?list=PLdXo7F6pjX_8HhdxTX4NtfuAv1enI81Hz" frameborder="0" allowfullscreen></iframe>', 'brand_45/logo_45.png', 'mongolian'),
(46, 'PUDA', 'Хэмжилт ба савлалтын тоног төхөөрөмж', '<p>\r\n                                    Монтермо ХХК нь 2014 оноос Канадын “PUDA-Internation¬al Packaging Machinery Inc”-ийн \r\n                                    Монгол дахь албан ёсны төлөөлөгчөөр ажиллаж байна. \r\n                                    PUDA компани нь хэмжилт ба савлалтын тоног төхөөрөмж, системүүдийг голчлон үйлдвэрлэдэг. \r\n                                    Автомат савлагаа нь хүнсний үйлдвэрлэл, малын тэжээл, химийн болон барилгын материалын \r\n                                    үйлдвэрлэлийн нунтаг, үрлэн, ялтсан болон үйрмэг бүтээгдэхүүнийг савлах болон тоолох \r\n                                    шийдлийг нийлүүлдэг. PUDA компанийн системүүд нь цаас, хуванцар, сүлжмэл полипропилен \r\n                                    зэрэг олон төрлийн савлагааны материалуудтай хамт хэрэглэгддэг. \r\n                                </p>\r\n                                <strong>Бүтээгдэхүүний нэр төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Тагтай уут савлах төхөөрөмж </li>\r\n                                    <li>Задгай амтай уут савлах төхөөрөмж </li>\r\n                                    <li>Баяжмалын уут савлах болон суллах төхөөрөмж </li>\r\n                                    <li>Процессийн үеийн жин хэмжих төхөөрөмж </li>\r\n                                    <li>Хөдөлгөөнт чингэлэгт савлагааны систем </li>\r\n                                    <li>Холигч төхөөрөмж </li>\r\n                                    <li>Хуурайгаар холих болон хутгах шугам  </li>\r\n                                    <li>Автоматаар савлах болон багцлах төхөөрөмж  </li>\r\n                                    <li>Бусад (конвейер, платформ, краны жин)</li>\r\n                                </ul>', 'brand_46/logo_46.jpeg', 'mongolian'),
(47, 'GEHO', 'PD Булингарын насос', '<p>\r\nБулингар, шавар, зуурмаг зэрэг хүнд нөхцөлд зориулсан поршень, поршень диафрагм ба шланган диафрагм насосны дэлхийн зах зээлд технологиор тэргүүлэгч нь GEHO® насосууд юм. Эдгээр насоснууд нь шавар шавхайг холын зайд хоолойгоор дамжуулах, уурхайн ус таталт болон дүүргэлт, автоклав, реактор болон девулканизаторын тэжээл, хийжүүлэх тэжээл, өндөр нягтралт хаягдал зайлуулах зэрэг олон салбарт өргөн цар хүрээтэй ашиглагдаж байна. \r\nТахир голд тулгуурласан поршень насос нь дунд зэргийн үрэлттэй, дунджаас өндөр зэргийн зуурамтгай чанартай, дунд зэргийн зэврэмтгий, 6 мм хүртэлх хэмжээтэй ширхэгтэй, 75% хүртэлх хатуулгийн агуулгатай булингар болон шавартай орчинд ажиллах насос юм.\r\n                                </p>\r\n                                <strong>Бүтээгдэхүүний төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Тахир голд тулгуурласан поршень насос</li>\r\n                                    <li>Шланган диафрагм насосууд</li>\r\n                                    <li>Гидравликт тулгуурласан поршень насос</li>\r\n                                    <li>Поршень диафрагм насосууд</li>\r\n                                </ul>\r\n<br>\r\n\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/wiZcBlvkcKU" frameborder="0" allowfullscreen></iframe>', 'brand_47/logo_47.gif', 'mongolian'),
(48, 'KAMAT', 'Өндөр даралтын плунжерын насос ба насосны системүүд', '<p>\r\nKAMAT нь хамгийн эрэлт хэрэгцээ ихтэй үйлдвэрлэлийн хэрэглээнд зориулж 3500 бар хүртэлх өндөр даралтын плунжерийн насосыг үйлдвэрлэдэг. Манай насосуудын авсаархан байдал, дэвшилтэт технологи нь тэдгээрийг хэрэглэгчдийн хэрэгцээ шаардлаганд тохируулан, цөөхөн ширхэгээр өвөрмөц дизайнтай үйлдвэрлэх боломжийг олгодог. \r\n                                </p>\r\n                                <p>\r\nНэгдсэн дамжуулгатай KAMAT плунжерийн насосууд бол KAMAT –ийн өндөр даралтын систем дэх цохилох зүрх билээ. Тус насосууд нь авсаархан бөгөөд үргэлжилсэн өндөр даралтын үед найдвартай ажилладаг учраас бүтээмжийг 90 гаруй хувьд хүргэж, эрчим хүчийг бүрэн гүйцэд ашиглаж байна. KAMAT өндөр даралтын насосны бусад давуу тал нь:\r\n                                </p>\r\n                                <ul>\r\n                                    <li>Захиалгаар цөөн ширхэгээр, хэрэглэгчийн хэрэгцээнд тааруулан дизайныг гаргах боломжтой</li>\r\n                                    <li>Энгийн үйл ажиллагаа, засвар үйлчилгээ, хэрэглэгчид төвлөрсөн үйлчилгээ</li>\r\n<li>Плунжерын хөрвүүлэх багажийг солих замаар өндөр даралт болон урсгалын хэмжээнд насосыг тохируулж болно</li>\r\n<li>Арааны аюулгүй байдлыг найдвартай хангах тосолгоотой</li>\r\n<li>ATEX, API 674 гэх мэт цахилгааны болон механикын олон улсын стандартад нийцсэн</li>\r\n                                </ul>\r\n                                <p>\r\n     KAMAT нь ямар ч хэрэгцээнд зориулж тохирох насосыг үйлдвэрлэж чадах бөгөөд 15 kW - 800 kW хүчин чадалтай, 0 - 3,500 бар ажиллагааны даралтыг тэсвэрлэх насосуудыг нийлүүлдэг. Ашиглах шингэн нь өтгөн зуурамтгай, хэт шингэн, хатуу бодис агуулсан, маш халуунаас тэсгим хүйтэн гээд төрөл бүрийн шингэн байж болдог. \r\n                                </p>\r\n                                <p>\r\nБүтээгдэхүүний төрөл: </p>\r\n\r\n<ul>\r\n<li>Өндөр даралтын насос - авсаархан бөгөөд үр ашигтай</li>\r\n<li>Өндөр даралтын насосны систем</li>\r\n<li>Насосны хэрэгслүүд - өндөр даралтын хаалт, цорго, шүршигч болон эргэдэг үе</li>\r\n</ul>', 'brand_48\\logo_48.gif', 'mongolian'),
(49, 'TYCO', 'Actuators & Controls', '<p>\r\nPentair нь хөдөлгөгч ба хянагч бүтээгдэхүүний өнөөгийн зах зээлд хамгийн том багц бүтээгдэхүүнийг санал болгогч үйлдвэрлэгч юм. Дэлхийн олон оронд байрлах салбар үйлдвэрүүд нь цахилгаан, хийн, гидравлик, хий-гидравлик болон далайн тоног төхөөрөмжийн хөдөлгөгчийг эргэлдэх ба шугаман хаалт, хянах мониторуудын хамтаар үйлдвэрлэж байна. Газрын тос, байгалийн хий (эх газрын ба далайн), нефть-хими, хими болон эрчим хүч үйлдвэрлэл зэрэг олон салбарт бүтээгдэхүүнээ нийлүүлдэг Pentair нь таны хаалтны автоматжуулалтын хэрэгцээнд оновчтой шийдлийг санал болгох захиалгат үйлдвэрлэлийн арвин туршлагатай. Та зөвхөн хөдөлгөгч худалдан авах эсвэл хөдөлгөгчийн хэмжээг тааруулах болон захиалгат автоматжуулалтын шийдлийг бүтээхээс үл хамааран Pentair хөдөлгөгч ба хянагчууд танд тусалж чадна.\r\n</p>\r\n                                <strong>Бүтээгдэхүүний төрөл:</strong>\r\n                                <ul>\r\n                                    <li>Цахилгаан хөдөлгөгч</li>\r\n                                    <li>Гидравлик хөдөлгөгч</li>\r\n                                    <li>Гар оператор</li>\r\n                                    <li>Хийн хөдөлгөгч</li>\r\n                                    <li>Хийн хянагч</li>\r\n                                </ul>\r\n<br>\r\n<iframe width="560" height="315" src="https://www.youtube.com/embed/wSCeD4j5894" frameborder="0" allowfullscreen></iframe>', 'brand_49\\logo_49.jpeg', 'mongolian');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `contact_lang` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `contact_inbox`
--

CREATE TABLE IF NOT EXISTS `contact_inbox` (
  `contact_inbox_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `position_title` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `message` text COLLATE utf8_bin,
  PRIMARY KEY (`contact_inbox_id`),
  KEY `contact_inbox_id` (`contact_inbox_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_inbox`
--

INSERT INTO `contact_inbox` (`contact_inbox_id`, `name`, `email`, `position_title`, `company_name`, `message`) VALUES
(2, 'Anthony Pucjlowski', 'pucj001@yahoo.com', 'Metallurgist/Process Engineer', 'Private', 'To whom it may concern\r\n\r\nIf an opportunity for a Metallurgist/Process Engineer become available and/or exists, I am readily available.\r\n\r\nLook forward to hearing from you.\r\n\r\nThanking you.\r\n\r\nKind regards,\r\n\r\nAnthony\r\n\r\npucj001@yahoo.com\r\n0027116145879 (home)\r\n27763026069 (mobile)\r\n'),
(3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT,
  `news_text` text COLLATE utf8_bin NOT NULL,
  `news_header` varchar(155) COLLATE utf8_bin NOT NULL,
  `news_date` date NOT NULL,
  `news_thumb` varchar(50) COLLATE utf8_bin NOT NULL,
  `news_lang` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `news_id` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_text`, `news_header`, `news_date`, `news_thumb`, `news_lang`) VALUES
(9, '<p>\r\n                                Монтермо ХХК нь 2014 оноос АНУ-ын “Pentair Ltd”-ийн Монгол дахь албан ёсны \r\n                                төлөөлөгчөөр ажиллаж байна. 2015 оны 3-р сарын 24-27-нд манай компанийн урилгаар \r\n                                TYCO брэндийг суурилуулах мэргэжилтнүүд ирж, Оюу Толгой ХХК-ийн баяжуулах үйлдвэр \r\n                                дэх хаалт, хавхлаганы судалгаа хийсэн байна. Түүнчлэн судалгаандаа үндэслэн TYCO \r\n                                брэндийг суурилуулах талаар зөвлөгөө өгсөн байна.\r\n                            </p>\r\n                            <p>\r\n                                Pentair offers one of the largest portfolios of actuation and controls products \r\n                                available in the market today.  Global manufacturing facilities produce electric, \r\n                                pneumatic, hydraulic, gas-hydraulic and subsea actuators along with rotary and linear \r\n                                valve position and control monitors.  Servicing a wide range of industries including \r\n                                oil and gas (onshore and offshore), petrochemical, chemical and power generation, \r\n                                Pentair has the applications experience and customization capabilities to find the \r\n                                optimum solution for your valve automation needs.  Whether it’s providing a bare actuator, \r\n                                helping to size an actuator or designing a customized automation solution, \r\n                                Pentair actuation and controls can help.\r\n                            </p>\r\n                            <strong>Product range: </strong>\r\n                            <ul>\r\n                                <li>Electric Actuators</li>\r\n                                <li>Hydraulic Actuators</li>\r\n                                <li>Manual Operators</li>\r\n                                <li>Pneumatic Actuators</li>\r\n                                <li>Pneumatic Controls</li>\r\n                            </ul>', 'АНУ-ын PENTAIR компанитай хамтран Оюу Толгой ХХК-ийн баяжуулах үйлдвэрд шугам хоолойн хаалтны судалгааг хийлээ', '2015-05-17', '', 'mongolian'),
(10, '<P>\r\n                                Монтермо ХХК нь 2014 оноос АНУ-ын “CiDRA Corporate Services Inc”-ийн Монгол дахь албан \r\n                                ёсны төлөөлөгчөөр ажиллаж байна. 2015 оны 4-р сард CiDRA компанийн мэргэжилтэн John Viega \r\n                                хүрэлцэн ирэж, Эрдэнэт Үйлдвэр ХХК-ийн 30 ажилтанд 1 хоног техникийн сургалт үзүүллээ. \r\n                                Тус сургалтын үеэр баяжуулах үйлдвэрийн шугам хоолойн ашиглалтыг сайжруулах, эвдрэлээс \r\n                                сэргийлэх талаар зөвлөгөө өгсөн байна.\r\n                            </P>\r\n                            <P>\r\n                                CiDRA нь үйлдвэрийн процессийн оновчлол, эрчимжүүлсэн аргаар эрдэс баяжуулах шийдлээрээ \r\n                                тэргүүлэгч компани бөгөөд дэлхийн томоохон үйлдвэрүүдэд өөрийн шийдлээ нэвтрүүлсэн. \r\n                                CiDRA нь АНУ-ын болон олон улсын зэрэглэлтэй 700 гаруй патентыг эзэмшдэг бөгөөд албан \r\n                                ёсны оюуны өмчийн бүртгэлтэй. Дэлхийн нийт зэсийн баяжмалын 65% нь \r\n                                CiDRA-ийн бүтээгдэхүүнүүдээр дамжин өнгөрдөг.\r\n                            </P>\r\n                            <strong>Бүтээгдэхүүний нэр төрөл: </strong>\r\n                            <ul>\r\n                                <li>SONARtrac®- Шугаман хоолойн урсгал мэдрэгч - \r\n                                    Шугаман хоолойгоор дамжин өнгөрч буй баяжмалын \r\n                                    тунг тодорхойлдог ба хийн хэмжээг гаргаж ирдгээрээ \r\n                                    баяжмалын ашигтай эсэхийг тодорхойлдог.</li>\r\n                                <li>\r\n                                    HALO® – Элэгдлийн түвшин тодорхойлогч - \r\n                                    Шугаман хоолойн хананы зузааныг дуун \r\n                                    дохионы тусламжтайгаар тогтоодог бөгөөд \r\n                                    аливаа цооролт задралт үүсэхээс сэргийлдэг.\r\n                                </li>\r\n                            </ul>', 'АНУ-ын “CiDRA Corporate Services Inc”-тэй хамтран “Эрдэнэт Үйлдвэр” ХХК-д сургалт явууллаа', '2015-05-17', '', 'mongolian'),
(11, '<P>\r\n                                2015/02/21 - ны өдөр тавигдав.\r\n                            </P>\r\n                            <img class="img-responsive" src="" alt="">\r\n                            <P>\r\n                                Монтермо ХХК нь 2014 оноос АНУ-ын “CiDRA Corporate Services Inc”-ийн Монгол дахь албан \r\n                                ёсны төлөөлөгчөөр ажиллаж байна. 2015 оны 4-р сард CiDRA компанийн мэргэжилтэн John Viega \r\n                                хүрэлцэн ирэж, Эрдэнэт Үйлдвэр ХХК-ийн 30 ажилтанд 1 хоног техникийн сургалт үзүүллээ. \r\n                                Тус сургалтын үеэр баяжуулах үйлдвэрийн шугам хоолойн ашиглалтыг сайжруулах, эвдрэлээс \r\n                                сэргийлэх талаар зөвлөгөө өгсөн байна.\r\n                            </P>\r\n                            <P>\r\n                                CiDRA нь үйлдвэрийн процессийн оновчлол, эрчимжүүлсэн аргаар эрдэс баяжуулах шийдлээрээ \r\n                                тэргүүлэгч компани бөгөөд дэлхийн томоохон үйлдвэрүүдэд өөрийн шийдлээ нэвтрүүлсэн. \r\n                                CiDRA нь АНУ-ын болон олон улсын зэрэглэлтэй 700 гаруй патентыг эзэмшдэг бөгөөд албан \r\n                                ёсны оюуны өмчийн бүртгэлтэй. Дэлхийн нийт зэсийн баяжмалын 65% нь \r\n                                CiDRA-ийн бүтээгдэхүүнүүдээр дамжин өнгөрдөг.\r\n                            </P>\r\n                            <strong>Бүтээгдэхүүний нэр төрөл: </strong>\r\n                            <ul>\r\n                                <li>SONARtrac®- Шугаман хоолойн урсгал мэдрэгч - \r\n                                    Шугаман хоолойгоор дамжин өнгөрч буй баяжмалын \r\n                                    тунг тодорхойлдог ба хийн хэмжээг гаргаж ирдгээрээ \r\n                                    баяжмалын ашигтай эсэхийг тодорхойлдог.</li>\r\n                                <li>\r\n                                    HALO® – Элэгдлийн түвшин тодорхойлогч - \r\n                                    Шугаман хоолойн хананы зузааныг дуун \r\n                                    дохионы тусламжтайгаар тогтоодог бөгөөд \r\n                                    аливаа цооролт задралт үүсэхээс сэргийлдэг.\r\n                                </li>\r\n                            </ul>', 'АНУ-ын “CiDRA Corporate Services Inc”-тэй хамтран Оюу Толгой ХХК-д техникийн үйлчилгээ үзүүллээ', '2015-05-17', '', 'mongolian'),
(12, '<P>\r\n                                Уул Уурхайн Үндэсний Ассоциациас жил бүр зохион байгуулдаг "Mine Tech" \r\n                                олон улсын уул уурхайн үзэсгэлэнд Монтермо ХХК анх удаа амжилттай оролцлоо. \r\n                                Мишээл Экспод 3 хоног үргэлжилсэн уг үзэсгэлэнд гадаад дотоодын нийт 70 гаруй \r\n                                компани оролцсон бөгөөд энэ үеэр Монтермо ХХК нийт харилцагчиддаа өөрсдийн түнш \r\n                                байгууллагуудын бүтээгдэхүүн үйлчилгээг танилцуулж, олон талаар хамтран ажиллах \r\n                                санал солилцлоо. Үзэсгэлэнгийн үеэр гадаад дотоодын нөлөө бүхий олон байгууллагын \r\n                                төлөөлөгчид хүрэлцэн ирж манай компанийн үйл ажиллагаатай танилцан, харилцан санал \r\n                                солилцох зэргээр үр дүнтэй арга хэмжээ болж өнгөрлөө.\r\n                            </P>\r\n                            <P>\r\n                                Бид бүтээгдэхүүнийхээ нэр төрлүүдийг амжилттай сурталчилж, ингэснээрээ үйлчлүүлэгчдийн \r\n                                дунд өөрсдийн бүтээгдэхүүнийхээ талаар өргөн хүрээний, дэлгэрэнгүй ойлголтыг өгч чадсан юм.\r\n                            </P>', 'Монтермо ХХК “Mine Tech 2014” үзэсгэлэнд амжилттай оролцлоо', '2014-04-01', '', 'mongolian'),
(21, '<p>\r\nMontermo LLC has successfully participated “Mine Tech Expo 2014” for the first time which organized by “Mongolian National Mining Association” every year. Exhibition has taken place in Misheel Expo during 26-28th of March 2014 for 3 days and participated over 70 companies from foreign and domestic market. Montermo LLC has been introducing its all brands and giving detailed information about the products and services to the customers and exhibitors as well as the partners. During the exhibition, we introduced ourselves to influential mining companies from foreign and domestic market which was one of the main goals of the participation.<br><br>\r\nWe have successfully advertised our products and services so that we have become more familiar with our potential partners and customers through this event.\r\n<p>', 'Montermo LLC Successfully Participated in "Mine Tech 2014" Mining Expo', '2014-04-01', 'news_21.JPG', 'english'),
(22, '<p>\r\nMontermo LLC has been working as an authorized representative of CiDRA Corporate Services Inc, USA in Mongolia since 2014. In February of 2015, CiDRA brand’s installation specialists came to the Mongolia and provided 14 days technical services for Oyu Tolgoi mining site. Furthermore, we have given advice on the prevention of erosion and services to improve the utilization of the pipeline on the basis of the report.\r\nCiDRA is a leader in Process Optimization and Enhanced Recovery solutions and services to many of the world’s largest industrial markets. CiDRA’s Intellectual Property portfolio contains 700 U.S. and International patent applications; moreover, 65% of the world’s copper is processed through CIDRA products.\r\nProduct range:</p>\r\n<ul>\r\n<li>SONARtrac® Flow Measurement </li>\r\n<li>HALO® Pipe Wear Measurement</li>\r\n</ul>\r\n', 'Montermo LLC together with US "CiDRA Corporate Services Inc" provided technical service to Oyu Tolgoi LLC', '2015-02-21', 'news_22.jpg', 'english'),
(25, 'Montermo LLC has been working as an authorized representative of Pentair Ltd, USA in Mongolia since 2014. On March 24-27, 2015 at the invitation of our company TYCO brand’s installation professionals came to Mongolia and made visitation to Oyu Tolgoi mine site. Moreover, we have given advice on the installation of TYCO brands on the basis of the visitation report.\r\nPentair offers one of the largest portfolios of actuation and controls products available in the market today.  Global manufacturing facilities produce electric, pneumatic, hydraulic, gas-hydraulic and subsea actuators along with rotary and linear valve position and control monitors.  Servicing a wide range of industries including oil and gas (onshore and offshore), petrochemical, chemical and power generation, Pentair has the applications experience and customization capabilities to find the optimum solution for your valve automation needs.  Whether it’s providing a bare actuator, helping to size an actuator or designing a customized automation solution, Pentair actuation and controls can help.\r\nProduct range:\r\n	Electric Actuators\r\n	Hydraulic Actuators\r\n	Manual Operators\r\n	Pneumatic Actuators\r\n	Pneumatic Controls\r\n', 'Montermo LLC together with Pentair Ltd, USA made visitation of pipeline valve to Oyu Tolgoi mining site', '2015-04-05', 'news_25.JPG', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `news_desc_img`
--

CREATE TABLE IF NOT EXISTS `news_desc_img` (
  `news_desc_img_url` varchar(50) COLLATE utf8_bin NOT NULL,
  `news_news_id` int(100) NOT NULL,
  KEY `FKnews_desc_474379` (`news_news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `brands_brand_id` int(100) NOT NULL,
  `product_name` varchar(155) COLLATE utf8_bin NOT NULL,
  `product_description` varchar(255) COLLATE utf8_bin NOT NULL,
  `product_lang` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_id` (`product_id`),
  KEY `FKproducts185952` (`brands_brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `brands_brand_id`, `product_name`, `product_description`, `product_lang`) VALUES
(28, 35, 'Images', 'Images desc', 'english'),
(30, 48, ' ', ' ', 'english'),
(31, 48, ' ', ' ', 'english'),
(32, 48, 'Kamat', 'Big item', 'english'),
(33, 35, 'Asd', 'a', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE IF NOT EXISTS `product_img` (
  `img_url` varchar(50) COLLATE utf8_bin NOT NULL,
  `products_product_id` int(100) NOT NULL,
  KEY `FKproduct_im148295` (`products_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`img_url`, `products_product_id`) VALUES
('product_img1.jpg', 30),
('product_img2.gif', 31),
('product_Pump accessories.jpg', 32),
('product_CommitTimeAndWeekDate.JPG', 33);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `slide_description` text COLLATE utf8_bin NOT NULL,
  `slide_link` varchar(255) COLLATE utf8_bin NOT NULL,
  `slide_lang` varchar(50) COLLATE utf8_bin NOT NULL,
  `slide_image` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_description`, `slide_link`, `slide_lang`, `slide_image`) VALUES
(1, 'Consulting', 'Based on our information center, the sales and engineering teams of Montermo LLC are able to render providing, assembling, installation, after sale and consulting services, finding the best possible solution for your problem from the worldwide producers and providers.', '#', 'english', 'templatemo_slide_1.jpg'),
(2, 'Maintenance', 'Besides providing high-quality equipment and spare parts to our customers, we always put the best and most reliable service first in our partnership. Through this, we contribute realistically in ensuring every one of our customers’ equipment to work well and without any failures, let the producing operate normally, increase productiveness, and improve satisfaction.', '#', 'english', 'templatemo_slide_2.jpg'),
(3, 'Installing', 'We develop successful and long-lasting business relationship with our customers and are ready to accept all your requests. We offer competitive price for our all kinds of products and deliver our products anywhere in the territory of Mongolia. Furthermore, the company provides full range of after sales services:  assembly, installation, testing & adjustment, inventory planning and control, technical training services.', '#', 'english', 'templatemo_slide_3.jpg'),
(4, 'Зөвлөгөө', 'Бид өөрсдийн туршлага, мэдлэг, харилцаа холбоонд үндэслэн, харилцагчийнхаа тусгай хэрэгцээ, шаардлагад нийцсэн, ханган нийлүүлэх, зөвлөх үйлчилгээг үзүүлдэг.\r\nМонтермо ХХК-ийн худалдааны болон инженерийн баг таны уул уурхайн бүх хэрэгцээг дээр дурьдсан мэдээллийн баазад тулгуурлан дэлхий даяарх үйлдвэрлэгч, ханган нийлүүлэгчдээс тохиромжтой шийдлийг гарган нийлүүлэлт, угсралт суурилуулалт болон нийлүүлэлтийн дараах зөвлөгөө үйлчилгээг үзүүлэх боломжтой.', '#', 'mongolian', 'templatemo_slide_1.jpg'),
(5, 'Техник үйлчилгээ', 'Бид харилцагчиддаа өндөр чанар бүхий сэлбэг хэрэгсэл, эд анги нийлүүлэхээс гадна хамгийн шилдэг найдвартай үйлчилгээг үзүүлэхийг цаг ямагт эрхэмлэн ажилладаг. Ингэснээр харилцагч бүрийнхээ тоног төхөөрөмжийн тасралтгүй ажиллагааг хангах, үйлдвэрлэлийг хэвийн явуулах, бүтээмжийг нэмэгдүүлэх, сэтгэл ханамжийг дээшлүүлэхэд бодит хувь нэмэр оруулдаг юм. ', '#', 'mongolian', 'templatemo_slide_2.jpg'),
(6, 'Суурилуулалт', 'Манай компани уул уурхай, баяжуулалтын компаниудтай хамтран ажилласан арвин туршлагатай бөгөөд шуурхай нийлүүлэлт, угсралт суурилуулалтын үйлчилгээгээрээ үйлчдвэрлэлийн эрсдэлийг бууруулах, бодит гүйцэтгэлийг нэмэгдүүлэхийг ямагт зорин ажилладаг.', '#', 'mongolian', 'templatemo_slide_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123456789@');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_desc_img`
--
ALTER TABLE `news_desc_img`
  ADD CONSTRAINT `FKnews_desc_474379` FOREIGN KEY (`news_news_id`) REFERENCES `news` (`news_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FKproducts185952` FOREIGN KEY (`brands_brand_id`) REFERENCES `brands` (`brand_id`);

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `FKproduct_im148295` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
