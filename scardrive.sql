-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 05:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scardrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT 'NOT_FOUND',
  `s_cost` int(10) NOT NULL DEFAULT 0,
  `m_cost` int(10) NOT NULL DEFAULT 0,
  `city` varchar(50) NOT NULL DEFAULT 'UNKNOWN',
  `bspace` varchar(100) NOT NULL,
  `seat` int(23) NOT NULL DEFAULT 0,
  `engine` varchar(100) NOT NULL DEFAULT 'NOT_FOUND',
  `ownername` varchar(200) NOT NULL DEFAULT 'NO DATA',
  `utility` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `status` varchar(256) DEFAULT NULL,
  `loclink1` varchar(2000) NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119058.47792292511!2d72.97686459575851!3d21.169208445371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be060e07393bc51%3A0xf96e044991e337e9!2sUKA%20TARSADIA%20UNIVERSITY.!5e0!3m2!1sen!2sin!4v1680356891011!5m2!1sen!2sin',
  `loclink2` varchar(2000) NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119058.47792292511!2d72.97686459575851!3d21.169208445371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be060e07393bc51%3A0xf96e044991e337e9!2sUKA%20TARSADIA%20UNIVERSITY.!5e0!3m2!1sen!2sin!4v1680356891011!5m2!1sen!2sin',
  `wishlist` int(10) NOT NULL DEFAULT 0,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `s_cost`, `m_cost`, `city`, `bspace`, `seat`, `engine`, `ownername`, `utility`, `descrip`, `status`, `loclink1`, `loclink2`, `wishlist`, `images`) VALUES
(7, 'Mahindra-Thar', '1800000', 10000, 50000, 'Surat', '130', 2, '2184 Cc Diesel    & 1984 Cc Petrol', 'Scar', 'Drive-Terrain: 4x4  |  Tyre-Profile: All Terrain Tyre  |  Ground Clearance : 226mm', 'Safety-Rating : 4 Star\r\nCylinder : 4\r\nMilage : 15.00 Km/L Diesel  & 13.00 Km/L Petrol\r\nPower : 130 Bhp Diesel & 150 Bhp Petrol\r\nTorque : 300 Nm Diesel & 320nm Petrol\r\nFuel-Tank-Capacity : 57L\r\nLength : 4039mm\r\nHeight : 1920mm\r\nWidth : 1855mm\r\nWheel-Base : 2450mm\r\nBody-Type : SUV\r\nAirbags : 2\r\nABS(Advance-Break-System) : Yes\r\nInfotainment-System : 7 Inch\r\nMusic-System : 6 Speaker\r\nSteering : Hydraulic Power Steering', 'automatic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.408224506348!2d72.82905717448514!3d21.17593628270886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e3f6df483c9%3A0xd6a0ea8aedbd8e24!2sMahindra%20President%20Motors!5e0!3m2!1sen!2sin!4v1681655494532!5m2!1sen!2sin\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.408224506348!2d72.82905717448514!3d21.17593628270886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e3f6df483c9%3A0xd6a0ea8aedbd8e24!2sMahindra%20President%20Motors!5e0!3m2!1sen!2sin!4v1681655494532!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 0, 'thar-main.webp'),
(8, 'Mahindra-XUV700', '2700000', 12000, 25000, 'Surat', '200', 2, '2184 Cc Diesel    & 1984 Cc Petrol', 'Scar', 'ADAS |  Lan Assist |  Adrenox', 'Safety-Rating : 5 Star\r\nCylinder : 4\r\nEngine : 2200 Cc Diesel    & 2000 Cc Petrol\r\nMilage : 1501 Km/L Diesel      & 13.85 Km/L Petrol\r\nPower : 185 Bhp Diesel      & 200 Bhp Petrol\r\nTorque : 420 Nm Diesel      & 380nm Petrol\r\nFuel-Tank-Capacity : 70L\r\nLength : 3695mm\r\nHeight : 1710mm\r\nWidth : 1890mm\r\nWheel-Base : 2750mm\r\nBody-Type : SUV\r\nAirbags : 10\r\nABS(Advance-Break-System) : Yes\r\nImfotainment-System : 10.25 Inch\r\nMusic-System : 12 Speaker(Sony System)\r\nSteering : Electronic  Power Steering', 'automatic', 'https://www.google.com/maps/dir/21.1941908,72.8869927/MAHINDRA+PRESIDENT+MOTORS+-+VARACHHA,+G-01,02+SKY+ZONE+BUSINESS+HUB,+Surat+-+Kamrej+Hwy,+near+SHYAMDHAM+MANDIR,+Surat,+Gujarat+395006/@21.2156815,72.8766876,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be045323a6be07f:0xc7c74c03a0192bd4!2m2!1d72.9093494!2d21.2372294', 'https://www.google.com/maps/dir//Mahindra+President+Motors,+Umiya+Nagar+Society,+Udhana+-+Magdalla+Rd,+near+Shree+Chosath+Joganiya,+Udhana,+Surat,+Gujarat+394210/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3be04e3f6df483c9:0xd6a0ea8aedbd8e24?sa=X&ved=2ahUKEwiOweG5_av-AhWDbGwGHQXkAVYQ48ADegQIDRAJ', 0, 'xuv700-main.webp'),
(9, 'Tata-Harrier', '2400000', 22000, 40000, 'Surat', '425', 2, '2000Cc Diesel   ', 'Scar', 'Land Rover DNA  |  Fiat Multijet Engine | ', 'Safety-Rating : 5 star\r\nCylinder: 4\r\nMilage : 16 km/l\r\nPower : 170 bhp\r\nTorque : 350nm\r\nFuel-Tank-Capacity:50L \r\nLength : 4598 mm\r\nHeight : 1706 mm\r\nWidth : 1894 mm\r\nWheel-Base : 2741 Mm \r\nBody-Type : SUV\r\nAirbags : 6\r\nABS(Advance-Break-System) : yes \r\nImfotainment-System : 8.8 inch\r\nMusic-System : 9 speaker JBL audio\r\nSteering : hydraulic ', 'automatic', 'https://www.google.com/maps/dir/21.1941908,72.8869927/MAHINDRA+PRESIDENT+MOTORS+-+VARACHHA,+G-01,02+SKY+ZONE+BUSINESS+HUB,+Surat+-+Kamrej+Hwy,+near+SHYAMDHAM+MANDIR,+Surat,+Gujarat+395006/@21.2156815,72.8766876,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be045323a6be07f:0xc7c74c03a0192bd4!2m2!1d72.9093494!2d21.2372294', 'https://www.google.com/maps/dir//Mahindra+President+Motors,+Umiya+Nagar+Society,+Udhana+-+Magdalla+Rd,+near+Shree+Chosath+Joganiya,+Udhana,+Surat,+Gujarat+394210/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3be04e3f6df483c9:0xd6a0ea8aedbd8e24?sa=X&ved=2ahUKEwiOweG5_av-AhWDbGwGHQXkAVYQ48ADegQIDRAJ', 0, 'harrier-main.webp'),
(12, 'Honda WR-V', '800000', 9000, 16000, 'Ahmedabad', '363', 3, 'petrol ', 'scar', 'Spacious Cabin , Boot Space , Infotainment System , Safety Features , Fuel Efficiency', 'Cylinder: 3,600 rpm.\r\n\r\nMileage: 23.7 km/l.\r\n\r\nPower: 3,600 rpm.\r\n\r\nTorque: 1,750 rpm.\r\n\r\nFuel Tank Capacity: 40 liters.\r\n\r\nLength: 3,999 mm.\r\n\r\nHeight: 1,601 mm.\r\n\r\nWidth: 1,734 mm.\r\n\r\nWheelbase: 2,555 mm.\r\n\r\nBody Type: SUV.\r\n\r\nAirbags: 4 airbag.\r\n\r\nABS (Anti-lock Braking System): yes.\r\n\r\nInfotainment System: 7-inch.\r\n\r\nMusic System: 4-speaker.\r\n\r\nSteering: electric power steering system.', 'manual', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119064.79907790205!2d72.62097229726562!3d21.1613518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d9188fffc37%3A0x3f90d6de852fddda!2sLandmark%20Honda!5e0!3m2!1sen!2sin!4v1683126788177!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119054.30306922381!2d72.67606579726561!3d21.17439590000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fcf3d091f89%3A0xec481d2c97ca7e79!2sLandmark%20Honda!5e0!3m2!1sen!2sin!4v1683128003308!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'wr-v-exterior-right-front-three-quarter.jpeg'),
(13, 'Maruti shift Dzire', '800000', 5999, 6000, 'Ahmedabad', '378', 3, 'disel', 'scar', 'Low Maintenance Costs , Infotainment System , Safety Features , Automatic Transmission ,  Fuel Efficiency', 'safety rating: 1 star\r\n\r\nMileage: 28kml\r\n\r\nPower: 81.80 \r\n\r\nTorque: 190nm\r\n\r\nFuel Tank Capacity:  37 liters.\r\n\r\nLength:  3,995 mm.\r\n\r\nHeight:  1,515 mm.\r\n\r\nWidth:  1,735 mm.\r\n\r\nWheelbase: 2,450 mm.\r\n\r\nBody Type:  sedan.\r\n\r\nAirbags: 2 airbags\r\n\r\nABS (Anti-lock Braking System): yes\r\n\r\nInfotainment System:  7-inch\r\n\r\nMusic System: 4 speaker\r\n\r\nSteering: electric', 'manual', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119054.33519766861!2d72.67606552401011!3d21.17435598350599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f13fce750e3%3A0xe11888e7b0819a73!2sMaruti%20Suzuki%20Arena!5e0!3m2!1sen!2sin!4v1683128352794!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119054.33519766861!2d72.67606552401011!3d21.17435598350599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e53a24065eb%3A0x3b54bf6d263e3288!2sMaruti%20Suzuki%20Showroom!5e0!3m2!1sen!2sin!4v1683128416502!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'maruti-suzuki-dzire-right-front-three-quarter1.webp'),
(14, 'audi - A6', '6700000', 25000, 30000, 'Surat', '390', 3, 'disel', 'scar', 'Spacious interiors , Automatic Transmission , Safety Features', 'Mileage: 15 kmpl.\r\n\r\nPower: 335 bhp.\r\n\r\nTorque: 650 Nm.\r\n\r\nFuel Tank Capacity: 73 liters.\r\n\r\nLength: 4,939 mm.\r\n\r\nHeight: 1,457 mm.\r\n\r\nWidth: 1,886 mm.\r\n\r\nWheelbase: 2,924 mm.\r\n\r\nBody Type: sedan.\r\n\r\nAirbags: 7 airbags.\r\n\r\nABS (Anti-lock Braking System): yes.\r\n\r\nInfotainment System: high-resolution infotainment .\r\n\r\nMusic System: 10 speaker.\r\n\r\nSteering: power steering system .', 'automatic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59537.55505847184!2d72.68430284863283!3d21.148530099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d80f0706c81%3A0x2c73256469efe4f7!2sAudi%20Surat!5e0!3m2!1sen!2sin!4v1683129195001!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59537.55505847184!2d72.68430284863283!3d21.148530099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d209f117b0f%3A0xdbf1b8b490e92416!2sAudi%20Service%20Surat!5e0!3m2!1sen!2sin!4v1683129269433!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'download (1).jpg'),
(15, 'BMW X7', '1200000', 160000, 30000, 'Surat', '326', 3, 'disel', 'scar', 'Spacious interiors , Automatic Transmission , Safety Features', 'Cylinder: 8-cylinder.\r\n\r\nMileage: 9 kmpl.\r\n\r\nPower: 394 bhp.\r\n\r\nTorque: 760 Nm.\r\n\r\nFuel Tank Capacity: 80 liters.\r\n\r\nLength: 5151 mm.\r\n\r\nHeight: 1805 mm.\r\n\r\nWidth: 2000 mm.\r\n\r\nWheelbase: 3105 mm.\r\n\r\nBody Type: SUV.\r\n\r\nAirbags: 8 airbags.\r\n\r\nABS (Anti-lock Braking System): yes.\r\n\r\nInfotainment System: 12.3-inch.\r\n\r\nMusic System: 9 premium sound system from Harman Kardon.\r\n\r\nSteering: speed-sensitive power steering system.', 'automatic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58766.210635386895!2d72.42059654863284!3d22.991139599999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b4efe858801%3A0xbc567815f957bd5!2sBMW%20Gallops%20Autohaus!5e0!3m2!1sen!2sin!4v1683172181221!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59537.55906565227!2d72.68430278031471!3d21.148520131317476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d06c027ecff%3A0x2140dedb8c1ecec7!2sBMW%20Motorrad%20Gallops%20Surat!5e0!3m2!1sen!2sin!4v1683129793196!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'download (3).jpg'),
(16, 'Mercedes-Benz - c-class', '9000000', 50000, 40000, 'Surat', '360', 3, 'disel', 'Scar', 'Spacious interiors , Automatic Transmission , Safety Features', 'Safety Rating: 5-star.\r\n\r\nCylinder: 6-cylinder.\r\n\r\nMileage: 14kml.\r\n\r\nPower: 503 bhp.\r\n\r\nTorque: 700 Nm.\r\n\r\nFuel Tank Capacity: 66l.\r\n\r\nLength: 4686 mm.\r\n\r\nHeight: 1442 mm.\r\n\r\nWidth: 1810 mm.\r\n\r\nWheelbase: 2840 mm.\r\n\r\nBody Type: sedan.\r\n\r\nAirbags: 7 airbags.\r\n\r\nABS (Anti-lock Braking System): yes.\r\n\r\nInfotainment System: 10.25-inch .\r\n\r\nMusic System: 15 speaker\r\n\r\nSteering: speed-sensitive power steering.', 'automatic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59537.563072829354!2d72.68430271199665!3d21.148510162638775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d1ab44f6f83%3A0xa9c9cc0358545108!2sMercedes-Benz%20Landmark%20Cars%20Service%20Center%20Surat!5e0!3m2!1sen!2sin!4v1683130325706!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59537.563072829354!2d72.68430271199665!3d21.148510162638775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0539e45ea461d%3A0x8d1e7dd6d180917!2sMercedes-Benz%20Central%20Star%20Showroom%20Surat!5e0!3m2!1sen!2sin!4v1683130365410!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'download (5).jpg'),
(17, 'Ford Endeavour', '3000000', 11000, 5000, 'Surat', '450', 4, 'disel', 'scar', 'Spacious interiors , Automatic Transmission , Safety Features', 'Safety Rating: 4star\r\n\r\nCylinder: 5-cylinder\r\n\r\nMileage: 13.9 kmpl\r\n\r\nPower:197 bhp \r\n\r\nTorque: 470 \r\n\r\nFuel Tank Capacity: 80 \r\n\r\nLength: 4903 mm.\r\n\r\nHeight: 1837 mm.\r\n\r\nWidth: 1869 mm.\r\n\r\nWheelbase: 2850 mm.\r\n\r\nBody Type: SUV.\r\n\r\nAirbags: 7 airbags.\r\n\r\nABS (Anti-lock Braking System): Yes.\r\n\r\nInfotainment System: 8-inch.\r\n\r\nMusic System: 10-speaker sound system from Sony.\r\n\r\nSteering: electric.', 'automatic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238150.38855730862!2d72.5606886887579!3d21.148425415025198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e2316c7fc67%3A0x84e6cb94bca19fcb!2sSurat%20Ford!5e0!3m2!1sen!2sin!4v1683130770132!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238150.38855730862!2d72.5606886887579!3d21.148425415025198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d855e79a1bd%3A0x9f37ebe191fc29a4!2sKings%20Ford!5e0!3m2!1sen!2sin!4v1683130812835!5m2!1sen!2sin\" width=\"1400\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">', 0, 'Ford-Left-Front-Three-Quarter-26168.webp');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `images`, `proid`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(3, '3.jpg', 1),
(4, '4.jpg', 1),
(5, '5.jpg', 1),
(6, '6.jpg', 1),
(7, '6.jpg', 2),
(8, '7.jpg', 2),
(9, '8.jpg', 2),
(10, '9.jpg', 2),
(11, 'vehicle-7.webp', 3),
(12, 'vehicle-8.webp', 3),
(13, 'vehicle-9.webp', 3),
(14, 'car-3.webp', 4),
(15, 'car-6.webp', 4),
(16, 'car-8.webp', 4),
(17, 'vehicle-7.webp', 5),
(18, 'vehicle-8.webp', 5),
(19, 'vehicle-9.webp', 5),
(20, 'baleno-exterior-right-front-three-quarter-2.webp', 6),
(21, 'thar-exterior-right-front-three-quarter-11.webp', 7),
(22, 'thar-exterior-right-front-three-quarter-11.webp', 8),
(23, 'download.jpg', 9),
(24, 'download (2).jpg', 9),
(25, 'download.jpg', 10),
(26, 'download (2).jpg', 10),
(27, 'WhatsApp Image 2022-10-17 at 12.14.36 PM.jpeg', 11),
(28, 'WhatsApp Image 2022-10-17 at 12.14.36 PM.jpeg', 12),
(29, 'Screenshot 2023-03-14 085726.png', 13),
(30, 'Screenshot 2023-03-14 085726.png', 14),
(31, 'Screenshot 2023-03-14 090248.png', 15),
(32, 'Screenshot 2023-03-14 085726.png', 16),
(33, 'Screenshot 2023-03-14 085952.png', 17),
(34, 'Screenshot 2023-03-14 085952.png', 18),
(35, 'Screenshot 2023-03-14 085952.png', 19),
(36, 'quantam_break_01.jpg', 20),
(37, 'cod_4.jpg', 21),
(38, 'control_01.jpg', 22),
(39, 'control_01.jpg', 23),
(40, 'control_01.jpg', 24),
(41, 'control_01.jpg', 25),
(42, 'control_01.jpg', 26),
(43, 'control_01.jpg', 27),
(44, 'control_01.jpg', 28),
(45, 'control_01.jpg', 29),
(46, 'cod_6.jpg', 30),
(47, 'cod_6.jpg', 1),
(48, 'cod_2.png', 2),
(49, 'cod_2.png', 3),
(50, 'cod_4.jpg', 4),
(51, 'control_01.jpg', 5),
(52, 'statue of unity.jpg', 6),
(53, 'interior thar.jpg', 7),
(54, 'thar ex.webp', 7),
(55, 'interior xuv700.jpg', 8),
(56, 'xuv 700-ex.webp', 8),
(57, 'harrier ex.jpg', 9),
(58, 'interior harirer.webp', 9),
(59, 'Screenshot 2023-04-16 222319.png', 10),
(60, '20220914112449_IMG_6638.jpg', 11),
(61, 'wr-v-exterior-left-front-three-quarter.webp', 12),
(62, '20200303025903_Maruti-Dzire-side.jpg', 13),
(63, 'download (2).jpg', 14),
(64, 'download (4).jpg', 15),
(65, 'Mercedes-Benz_W213_E_350_4_matic_AMG_Line_white_(cropped).jpg', 16),
(66, 'Endeavour-Thailand-resized.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `ownername`, `email`, `password`) VALUES
(16, 'suresh reyna', 'suresh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'sir', 'sir@gmail.com', 'dcff57c9a964f83fbf81cc75ec2e413a'),
(22, 'utu', 'utu@gmail.com', '037b2d56dd15afa9e43a0de04eaf2c85');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'het', 'hello@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1'),
(20, 'sir', 'sir@gmail.com', 'dcff57c9a964f83fbf81cc75ec2e413a'),
(21, 'utu', 'utu@gmail.com', '037b2d56dd15afa9e43a0de04eaf2c85');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `car_id`, `name`, `price`, `image`) VALUES
(11, 20, 7, 'Mahindra-Thar', 1800000, 'thar-main.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
