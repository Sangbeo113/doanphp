-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 10, 2023 lúc 03:06 PM
-- Phiên bản máy phục vụ: 5.7.40
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `shoe_color` varchar(255) NOT NULL,
  `shoe_size` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids'),
(4, 'nike'),
(5, 'adidas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe`
--

DROP TABLE IF EXISTS `shoe`;
CREATE TABLE IF NOT EXISTS `shoe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` bigint(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `review` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(9, 'STAN SMITH SHOES', 2800000, 10, '40,41,42,43,44,45', 2, 'trắng,hồng,tím', 'Giày nữ'),
(10, ' adidas querry', 4500000, 5, '40,41,42,43,44,45', 2, 'trắng,hồng,tím', 'Giày nữ'),
(11, 'Adidas skeleton', 3400000, 15, '40,41,42,43,44,45', 2, 'trắng, đen', 'Giày nữ'),
(12, 'adidas fake', 1490000, 11, '40,41,42,43,44,45', 2, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', 'Giày nữ'),
(13, 'adidas nicke', 2300000, 25, '40,41,42,43,44,45', 2, 'cam,trắng', 'Giày nữ'),
(14, 'adidas balance', 2300000, 13, '40,41,42,43,44,45', 1, 'xanh,vàng,cam,hồng cánh sen,trắng,đỏ,tím,đen', 'Giày adidas'),
(15, 'Adidas zero night', 3499000, 12, '40,41,42,43,44,45', 5, 'trắng, đen', 'Giày thể thao'),
(16, 'Giày TERREX CYPREX', 1800000, 5, '40,41,42,43,44,45', 3, 'đen,trắng,xám', 'Giày Bata'),
(19, 'Dép PREMIUM SLIDES', 1700000, 14, '40,41,42,43,44,45', 5, 'nâu,cam', 'Dép adidas'),
(20, 'X SPEEDPORTAL.3', 2500000, 23, '40,41,42,43,44,45', 1, 'xanh,vàng', 'Giày Đá Bóng'),
(21, 'X SPEEDPORTAL.3', 1490000, 12, '40,41,42,43,44,45', 1, 'xanh,vàng', 'Giày Đá Bóng'),
(22, 'PREDATOR EDGE.1 LOW', 3500000, 21, '40,41,42,43,44,45', 1, 'Trắng,đỏ', 'Giày Đá Bóng'),
(23, 'PREDATOR 20.3', 2100000, 12, '40,41,42,43,44,45', 1, 'Trắng,đỏ', 'Giày Đá Bóng'),
(24, 'X SPEEDPORTAL MESSI.3', 2300000, 10, '40,41,42,43,44,45', 1, 'cam,trắng', 'Giày đá bóng'),
(25, 'ADIZERO TENNIS 4', 3500000, 15, '40,41,42,43,44,45', 1, 'hồng', 'giày tennis'),
(26, 'X SPEEDPORTAL.3 ', 2100000, 10, '40,41,42,43,44,45', 1, 'hồng', 'Giày Đá Bóng'),
(27, 'NMD_R1 ', 3900000, 25, '40,41,42,43,44,45', 1, 'hồng cánh sen,xanh nhạt', 'Giày thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe_image`
--

DROP TABLE IF EXISTS `shoe_image`;
CREATE TABLE IF NOT EXISTS `shoe_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shoe_id` int(11) NOT NULL,
  `link_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe_image`
--

INSERT INTO `shoe_image` (`id`, `shoe_id`, `link_image`) VALUES
(42, 27, 'imageShoe/123.jpg'),
(43, 27, 'imageShoe/a3fe18350b9b4a1ab10baf8c00d2fc29.jpg'),
(44, 27, 'imageShoe/NMD_R1_Shoes_Blue_HQ4462_02_stan.jpg'),
(45, 27, 'imageShoe/NMD_R1_Shoes_Blue_HQ4462_04_stan.jpg'),
(46, 26, 'imageShoe/4037e3aa81534124bbbbaf7201050d08_9366.png'),
(47, 26, 'imageShoe/7b3184ef380f44d49da0af7200f64c97_9366.png'),
(48, 26, 'imageShoe/0977bfec1d734b94b4fdaf7200f65c55_9366.png'),
(49, 26, 'imageShoe/b4975dea99d744298555af7200f6657c_9366.png'),
(50, 25, 'imageShoe/c260db9b30394c74a643af5800f4bedd_9366.webp'),
(51, 25, 'imageShoe/49d38ea1626544d9ba42af5700f5126d_9366.webp'),
(52, 25, 'imageShoe/a4fa8f4b3c474da1beceaf5800f4d331_9366.webp'),
(53, 25, 'imageShoe/7eb161750fd3477f86cdaf7200c2daf7_9366.webp'),
(54, 24, 'imageShoe/2d655e8a500c47519e3aaf7b01227286_9366.webp'),
(55, 24, 'imageShoe/1bc10108c35f45db9446af8c01122715_9366.webp'),
(56, 24, 'imageShoe/X_Speedportal_Messi.3_Turf_Boots_Orange_GZ5142_02_standard.jpg'),
(57, 24, 'imageShoe/580a16cf7e80419784a1af7b01221460_9366.webp'),
(58, 23, 'imageShoe/fbbdc727aeac46a883d0ab3b012c6813_9366.webp'),
(59, 23, 'imageShoe/772831c328a2434d85e2ab3b012c79b2_9366.webp'),
(60, 23, 'imageShoe/c16aca34cefd43b6bf94ab3b012c80cc_9366.webp'),
(61, 23, 'imageShoe/58a8221901d44ff198cfab3b012c85d6_9366.webp'),
(62, 22, 'imageShoe/2e3fbcadc92047959096ae9b00fe39c7_9366.webp'),
(63, 22, 'imageShoe/1341a4aa118147e4a189ae9b00fdb99c_9366.webp'),
(64, 22, 'imageShoe/dafe3ee356c44dab818bae9b00fde538_9366.webp'),
(65, 22, 'imageShoe/04b161ff2d9c438fab9dae9b00fdd86f_9366.webp'),
(66, 21, 'imageShoe/e6841ec78c424e3b885dae9b01152c03_9366.webp'),
(67, 21, 'imageShoe/b82bf7363bf14441bde4ae9b011594c4_9366.webp'),
(68, 21, 'imageShoe/1f1b4992b5f343359247ae9b011555b3_9366.webp'),
(69, 21, 'imageShoe/94af770fb23b4c0294b6ae9b011548b1_9366.webp'),
(70, 20, 'imageShoe/2173b0e461ed43838bdaae9e01162e47_9366.png'),
(71, 20, 'imageShoe/6bae2e2a25d044fcaec9ae9e0115d815_9366.webp'),
(72, 20, 'imageShoe/8f456549dcd4485ebef6ae9e0115e778_9366.webp'),
(73, 20, 'imageShoe/4aaccd90abe44b5ab6b0ae9e0115efc1_9366.webp'),
(74, 19, 'imageShoe/06aaccf76fde4c35ae48afc700fc1548_9366.webp'),
(75, 19, 'imageShoe/2ebc55c0f5694572b922afc700fc299e_9366.webp'),
(76, 19, 'imageShoe/f88f1ed2d0104a6e961cafc700fc3da0_9366.webp'),
(77, 16, 'imageShoe/1abef704676f44ae98baaf8c0113edb6_9366.webp'),
(78, 16, 'imageShoe/6bb7f264f20a475aaf54af8c0113dc23_9366.webp'),
(79, 16, 'imageShoe/29243a2f8da440f78eaaaf8c0113cabc_9366.webp'),
(80, 16, 'imageShoe/c778e8be47cf43a4adebaf8c0113e4b8_9366.webp'),
(81, 15, 'imageShoe/c3bcd07c283a4f9b96dfafaa00b72085_9366.webp'),
(82, 15, 'imageShoe/cf61fbd1d3e0454ca18dafaa00ba805f_9366.webp'),
(83, 15, 'imageShoe/9aa6b72ac50d4cac9e73afaa00ba6aa9_9366.webp'),
(84, 15, 'imageShoe/Terrex_Free_Hiker_2.0_Hiking_Shoes_Purple_HQ8398_03_standard.jpg'),
(85, 14, 'imageShoe/60bfe966ed1048cfa45faf2301064365_9366.webp'),
(86, 14, 'imageShoe/f9c222971b8f4d5fba78af23010708f9_9366.webp'),
(87, 14, 'imageShoe/bb60fbaec4ac4257b213af2301080dee_9366.webp'),
(88, 13, 'imageShoe/e0ec11a4f09b4fb08c54ab6600edb544_9366.webp'),
(89, 13, 'imageShoe/a5100ed1625446eeb450ab6600edc14e_9366.webp'),
(90, 13, 'imageShoe/2946803ae9f34a4bb222ab6600edceae_9366.webp'),
(91, 12, 'imageShoe/792de84663994106acd1aefc017ef28c_9366.webp'),
(92, 12, 'imageShoe/011fa1497ea7407784fcaefc017faa54_9366.webp'),
(93, 11, 'imageShoe/189bb7c8f75b4e89931faf9c00c6f98c_9366.webp'),
(94, 11, 'imageShoe/40e5c25ac02e44ebbd9baf9c00c7236f_9366.webp'),
(95, 11, 'imageShoe/6a4abf73d8e8448196f9af9c00c71305_9366.webp'),
(96, 10, 'imageShoe/9cc5016ed48741229ef0af9c00c07ce4_9366.webp'),
(97, 10, 'imageShoe/43d26535df6d4eec9880afa500a5f156_9366.webp'),
(98, 10, 'imageShoe/Hyperturf_Adventure_Shoes_Black_HP2845_02_standard.jpg'),
(99, 10, 'imageShoe/7a78462ace53425daa89af9c00c09d7a_9366.webp'),
(100, 9, 'imageShoe/1013e152c01c4551b87caf8e012a5478_9366.webp'),
(101, 9, 'imageShoe/50ed20415883480d8c5baf8e012a8500_9366.webp'),
(102, 9, 'imageShoe/68cc3e70cd94422f9eb7af8e012a722e_9366.webp'),
(103, 9, 'imageShoe/Stan_Smith_Shoes_White_HP9656_03_standard.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `dob`, `address`, `role`, `gender`, `email`, `phone`) VALUES
(15, 'truong', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Gia Trường', '2001-04-27', 'Bắc Ninh', 0, 1, 'truongjae@gmail.com', '0345382198'),
(17, 'sangbeo', '25d55ad283aa400af464c76d713c07ad', 'ngocj sang', '2023-03-16', 'fdawfsf', 1, 1, 'nguyenvuongngocsang11321@gmail.com', '0931415864');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
