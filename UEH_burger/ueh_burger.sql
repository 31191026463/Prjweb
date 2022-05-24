-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql302.byetcluster.com
-- Thời gian đã tạo: Th5 17, 2022 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.3.27-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `b6_31623571_ueh_burger`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `url` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`url`, `name`, `image`) VALUES
('Burger', 'Burger', 'http://localhost:8080/UEH_burger/public/img/sanpham/1.jpg'),
('Combo', 'Combo', 'http://localhost:8080/UEH_burger/public/img/sanpham/4.png'),
('Ga-ran', 'Gà rán', 'http://localhost:8080/UEH_burger/public/img/sanpham/7.jpg'),
('Mon-an-kem', 'Món ăn kèm', 'http://localhost:8080/UEH_burger/public/img/sanpham/6.jpeg'),
('Thuc-uong', 'Thức uống', 'http://localhost:8080/UEH_burger/public/img/sanpham/5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_details`
--

CREATE TABLE `category_details` (
  `category_url` varchar(256) NOT NULL,
  `product_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_details`
--

INSERT INTO `category_details` (`category_url`, `product_url`) VALUES
('Burger', 'Burger-2-mieng-bo-pho-mai-thit-xong-khoi'),
('Burger', 'Burger-Bo-Khoai-Tay'),
('Burger', 'Burger-Bo-Nuong-Hanh-Chien'),
('Burger', 'burger-bo-nuong-khoai-tay-lat'),
('Burger', 'Burger-Bo-Nuong-Pho-Mai'),
('Burger', 'Burger-Bo-Nuong-Whopper'),
('Burger', 'Burger-bo-tran-pho-mai'),
('Burger', 'burger-ca'),
('Burger', 'Burger-Ga-Nuong'),
('Combo', 'Combo-couple'),
('Combo', 'Combo-happiness'),
('Combo', 'Combo-joy'),
('Combo', 'Combo-Bo-tam-pho-mai--banh-lon-'),
('Combo', 'Combo-Bo-tam-pho-mai--banh-vua-'),
('Combo', 'Combo-burger-2-mieng-bo-nuong-whopper-jr'),
('Combo', 'Combo-burger-bo-nuong-hanh-chien'),
('Combo', 'Combo-burger-bo-nuong-whopper-jr'),
('Combo', 'Combo-ga-gion-khong-cay--3-mieng-'),
('Combo', 'Combo-say-nang-for-2-people'),
('Combo', 'Combo-say-yes-for-2-people'),
('Ga-ran', 'Combo-ga-gion-khong-cay--3-mieng-'),
('Ga-ran', 'Ga-BBQ--1-mieng-'),
('Ga-ran', 'Ga-gion-khong-cay'),
('Ga-ran', 'Ga-ran-gion-cay'),
('Ga-ran', 'Khoai-tay-chien--size-M-'),
('Mon-an-kem', 'Ga-Nuggets'),
('Mon-an-kem', 'Mix-wing'),
('Mon-an-kem', 'Pho-mai-que'),
('Thuc-uong', 'Coca'),
('Thuc-uong', 'Dasani'),
('Thuc-uong', 'Milo'),
('Thuc-uong', 'Nuoc-xoai-dao'),
('Thuc-uong', 'sprite'),
('Thuc-uong', 'TRA-CHANH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_store`
--

CREATE TABLE `images_store` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images_store`
--

INSERT INTO `images_store` (`id`, `link`, `date_created`) VALUES
(3, 'http://localhost:8080/UEH_burger/public/img/sanpham/1.jpg', '2022-05-16 17:56:51'),
(4, 'http://localhost:8080/UEH_burger/public/img/sanpham/4.png', '2022-05-16 17:57:37'),
(5, 'http://localhost:8080/UEH_burger/public/img/sanpham/5.jpg', '2022-05-16 17:57:57'),
(6, 'http://localhost:8080/UEH_burger/public/img/sanpham/6.jpeg', '2022-05-16 17:58:11'),
(7, 'http://localhost:8080/UEH_burger/public/img/sanpham/7.jpg', '2022-05-16 17:58:23'),
(8, 'http://localhost:8080/UEH_burger/public/img/sanpham/8.jpg', '2022-05-16 18:02:01'),
(9, 'http://localhost:8080/UEH_burger/public/img/sanpham/9.jpg', '2022-05-16 18:02:07'),
(10, 'http://localhost:8080/UEH_burger/public/img/sanpham/10.jpg', '2022-05-16 18:04:15'),
(11, 'http://localhost:8080/UEH_burger/public/img/sanpham/11.jpg', '2022-05-16 18:04:23'),
(12, 'http://localhost:8080/UEH_burger/public/img/sanpham/12.jpg', '2022-05-16 18:06:04'),
(13, 'http://localhost:8080/UEH_burger/public/img/sanpham/13.jpg', '2022-05-16 18:06:15'),
(14, 'http://localhost:8080/UEH_burger/public/img/sanpham/14.jpg', '2022-05-16 22:35:22'),
(15, 'http://localhost:8080/UEH_burger/public/img/sanpham/15.jpg', '2022-05-16 22:35:29'),
(16, 'http://localhost:8080/UEH_burger/public/img/sanpham/16.jpg', '2022-05-16 22:37:26'),
(17, 'http://localhost:8080/UEH_burger/public/img/sanpham/17.jpg', '2022-05-16 22:38:02'),
(18, 'http://localhost:8080/UEH_burger/public/img/sanpham/18.jpg', '2022-05-16 22:39:34'),
(19, 'http://localhost:8080/UEH_burger/public/img/sanpham/19.jpg', '2022-05-16 22:40:37'),
(20, 'http://localhost:8080/UEH_burger/public/img/sanpham/20.jpg', '2022-05-16 22:40:44'),
(21, 'http://localhost:8080/UEH_burger/public/img/sanpham/21.jpg', '2022-05-16 22:41:42'),
(22, 'http://localhost:8080/UEH_burger/public/img/sanpham/22.jpg', '2022-05-16 22:41:58'),
(23, 'http://localhost:8080/UEH_burger/public/img/sanpham/23.jpg', '2022-05-16 22:43:01'),
(24, 'http://localhost:8080/UEH_burger/public/img/sanpham/24.jpg', '2022-05-16 22:43:07'),
(25, 'http://localhost:8080/UEH_burger/public/img/sanpham/25.jpg', '2022-05-16 22:44:01'),
(26, 'http://localhost:8080/UEH_burger/public/img/sanpham/26.jpg', '2022-05-16 22:44:10'),
(27, 'http://localhost:8080/UEH_burger/public/img/sanpham/27.jpg', '2022-05-16 22:46:31'),
(28, 'http://localhost:8080/UEH_burger/public/img/sanpham/28.jpg', '2022-05-16 22:46:39'),
(29, 'http://localhost:8080/UEH_burger/public/img/sanpham/29.jpg', '2022-05-16 22:49:14'),
(30, 'http://localhost:8080/UEH_burger/public/img/sanpham/30.jpg', '2022-05-16 22:49:21'),
(31, 'http://localhost:8080/UEH_burger/public/img/sanpham/31.jpg', '2022-05-16 22:50:21'),
(32, 'http://localhost:8080/UEH_burger/public/img/sanpham/32.jpg', '2022-05-16 22:50:28'),
(33, 'http://localhost:8080/UEH_burger/public/img/sanpham/33.jpeg', '2022-05-16 22:52:11'),
(34, 'http://localhost:8080/UEH_burger/public/img/sanpham/34.jpg', '2022-05-16 22:52:20'),
(35, 'http://localhost:8080/UEH_burger/public/img/sanpham/35.jpg', '2022-05-16 22:53:11'),
(36, 'http://localhost:8080/UEH_burger/public/img/sanpham/36.png', '2022-05-16 22:53:17'),
(37, 'http://localhost:8080/UEH_burger/public/img/sanpham/37.jpg', '2022-05-16 22:55:47'),
(38, 'http://localhost:8080/UEH_burger/public/img/sanpham/38.png', '2022-05-17 03:10:00'),
(39, 'http://localhost:8080/UEH_burger/public/img/sanpham/39.jpg', '2022-05-17 03:10:53'),
(40, 'http://localhost:8080/UEH_burger/public/img/sanpham/40.jpg', '2022-05-17 03:13:26'),
(41, 'http://localhost:8080/UEH_burger/public/img/sanpham/41.png', '2022-05-17 03:15:00'),
(42, 'http://localhost:8080/UEH_burger/public/img/sanpham/42.jpg', '2022-05-17 03:15:56'),
(43, 'http://localhost:8080/UEH_burger/public/img/sanpham/43.jpeg', '2022-05-17 03:17:03'),
(44, 'http://localhost:8080/UEH_burger/public/img/sanpham/44.jpg', '2022-05-17 03:17:30'),
(45, 'http://localhost:8080/UEH_burger/public/img/sanpham/45.jpg', '2022-05-17 03:28:32'),
(46, 'http://localhost:8080/UEH_burger/public/img/sanpham/46.jpg', '2022-05-17 03:32:09'),
(47, 'http://localhost:8080/UEH_burger/public/img/sanpham/47.jpg', '2022-05-17 03:33:48'),
(48, 'http://localhost:8080/UEH_burger/public/img/sanpham/48.jpg', '2022-05-17 03:35:04'),
(49, 'http://localhost:8080/UEH_burger/public/img/sanpham/49.jpg', '2022-05-17 03:35:33'),
(50, 'http://localhost:8080/UEH_burger/public/img/sanpham/50.jpeg', '2022-05-17 03:36:33'),
(51, 'http://localhost:8080/UEH_burger/public/img/sanpham/51.jpeg', '2022-05-17 03:38:29'),
(52, 'http://localhost:8080/UEH_burger/public/img/sanpham/52.jpeg', '2022-05-17 03:39:33'),
(53, 'http://localhost:8080/UEH_burger/public/img/sanpham/53.jpg', '2022-05-17 03:39:37'),
(54, 'http://localhost:8080/UEH_burger/public/img/sanpham/54.jpeg', '2022-05-17 03:40:18'),
(55, 'http://localhost:8080/UEH_burger/public/img/sanpham/55.jpeg', '2022-05-17 03:42:42'),
(56, 'http://localhost:8080/UEH_burger/public/img/sanpham/56.jpeg', '2022-05-17 03:43:43'),
(57, 'http://localhost:8080/UEH_burger/public/img/sanpham/57.jpg', '2022-05-17 03:55:56'),
(58, 'http://localhost:8080/UEH_burger/public/img/sanpham/58.jpg', '2022-05-17 03:57:34'),
(59, 'http://localhost:8080/UEH_burger/public/img/sanpham/59.jpg', '2022-05-17 03:59:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_infor`
--

CREATE TABLE `order_infor` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `order_detail` text DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_infor`
--

INSERT INTO `order_infor` (`id`, `name`, `phone_number`, `address`, `order_detail`, `date_created`) VALUES
(2, 'Vĩ', '0933557238', '123 Bình Thới', 'Burger Bò Khoai Tây', '2022-05-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `url` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` decimal(13,0) DEFAULT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `date_created` date DEFAULT current_timestamp(),
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`url`, `name`, `price`, `images`, `description`, `tag`, `date_created`, `view_count`) VALUES
('Burger-2-mieng-bo-pho-mai-thit-xong-khoi', 'Burger 2 miếng bò phô mai thịt xông khói', '97000', ' http://localhost:8080/UEH_burger/public/img/sanpham/50.jpeg ,  http://localhost:8080/UEH_burger/public/img/sanpham/50.jpeg', 'Thịt xông khói đến từ Mỹ. Bò đến từ Úc. Burger thì ở UEH. Một món ăn mà ba dân tộc.', 'Bò, Thịt xông khói', '2022-05-17', 123123),
('Burger-Bo-Khoai-Tay', 'Burger Bò Khoai Tây', '60000', 'http://localhost:8080/UEH_burger/public/img/sanpham/12.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/13.jpg', 'Burger Bò Khoai Tây với sự tan chảy từ trong miệng.', 'Burger, Bò Khoai Tây', '2022-05-16', 140),
('Burger-Bo-Nuong-Hanh-Chien', 'Burger Bò Nướng Hành Chiên', '51000', 'http://localhost:8080/UEH_burger/public/img/sanpham/58.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/58.jpg', 'Burger Bò Nướng hành chiên được hình thành bởi công thức đặc biệt.', 'Bò', '2022-05-17', 1220),
('burger-bo-nuong-khoai-tay-lat', 'burger bò nướng khoai tây lát', '53000', ' http://localhost:8080/UEH_burger/public/img/sanpham/51.jpeg , http://localhost:8080/UEH_burger/public/img/sanpham/52.jpeg', 'BURGER BÒ NƯỚNG KHOAI TÂY LÁT', 'Burger, Bò', '2022-05-17', 1233),
('Burger-Bo-Nuong-Pho-Mai', 'Burger Bò Nướng Phô Mai', '50000', 'http://localhost:8080/UEH_burger/public/img/sanpham/10.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/11.jpg', 'Burger Bò Nướng Phô Mai với vị ngon đặc biệt.', 'Burger, Bò Nướng Phô Mai, Phô Mai', '2022-05-16', 299),
('Burger-Bo-Nuong-Whopper', 'Burger Bò Nướng Whopper', '40000', 'http://localhost:8080/UEH_burger/public/img/sanpham/8.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/9.jpg', 'Whopper là chiếc burger khổng lồ với một miếng thịt bò nướng 100% nguyên chất không chứa chất bảo quản hay lẫn gì khác.', 'burger, Whopper, Bò Nướng Whopper', '2022-05-16', 300),
('Burger-bo-tran-pho-mai', 'Burger bò tràn phô mai', '65000', ' http://localhost:8080/UEH_burger/public/img/sanpham/54.jpeg ,  http://localhost:8080/UEH_burger/public/img/sanpham/54.jpeg', 'Một chiếc Burger ngon là một miếng Burger tràn phô mai', 'Bò, Phô Mai', '2022-05-17', 12),
('burger-ca', 'burger cá', '46000', 'http://localhost:8080/UEH_burger/public/img/sanpham/57.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/57.jpg', 'Burger Cá đỉnh cao nhất Sài Gòn.', 'Cá', '2022-05-17', 1222),
('Burger-Ga-Nuong', 'Burger Gà Nướng', '45000', 'http://localhost:8080/UEH_burger/public/img/sanpham/14.jpg,http://localhost:8080/UEH_burger/public/img/sanpham/15.jpg', 'Burger Gà Nướng với hương vị đặc trưng nông thôn.', 'Burger, Gà Nướng', '2022-05-16', 160),
('Coca', 'Coca', '39000', 'http://localhost:8080/UEH_burger/public/img/sanpham/46.jpg,\r\nhttp://localhost:8080/UEH_burger/public/img/sanpham/53.jpg', 'Nước ngọt Coca Cola với thương hiệu uy tín hàng đầu thế giới, được nhiều người yêu thích với hương vị thơm ngon, hấp dẫn.\r\nNước ngọt Coca Cola chai 390ml không chỉ giúp giải tỏa cơn khát mà còn cung cấp nguồn năng lượng cùng hàm lượng khoáng chất dồi dào, cho bạn khơi lại hứng khởi ngay từ ngụm đầu tiên!', 'Coca', '2022-05-17', 100),
('Combo-couple', 'Combo \"couple\"', '189000', 'https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo-couple.jpg, https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo-couple.jpg', '1 bò tắm phô mai cỡ vừa + 1 bò nướng whopper + 4 cá cuộn rong biển + 1 khoai tây chiên + 2 coke', 'Combo', '2022-05-17', 1000000),
('Combo-happiness', 'Combo \"happiness\"', '299000', 'https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo_happiness.jpg, https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo_happiness.jpg', '1 bò nướng whopper + 1 bò phô mai + 1 gà phô mai sốt bbq + 1 bò tắm phô mai cỡ vừa + 4 gà nuggets + 2 cá cuộn rong biển + 4 nước ngọt', 'Combo', '2022-05-17', 500),
('Combo-joy', 'Combo \"joy\"', '299000', 'https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo_joy.jpg, https://burgerking.vn/media/catalog/product/cache/1/small_image/1000x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo_joy.jpg', '1 bò nướng whopper + 1 bò phô mai + 1 gà phô mai sốt bbq + 1 bò tắm phô mai cỡ vừa + 4 cá cuộn rong biển + 4 coke', 'Combo', '2022-05-17', 2500),
('Combo-Bo-tam-pho-mai--banh-lon-', 'Combo Bò tắm phô mai (bánh lớn)', '100000', 'http://localhost:8080/UEH_burger/public/img/sanpham/16.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/17.jpg', 'Combo Bò tắm phô mai (bánh lớn) là sự kết hợp của miếng bò nguyên chất và phô mai béo ngậy', 'Combo, Bò tắm phô mai, Bò tắm phô mai (bánh lớn)', '2022-05-16', 170),
('Combo-Bo-tam-pho-mai--banh-vua-', 'Combo Bò tắm phô mai (bánh vừa)', '90000', 'http://localhost:8080/UEH_burger/public/img/sanpham/18.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/17.jpg', 'Combo Bò tắm phô mai (bánh vừa) cực kì ngon và hấp dẫn', 'Combo,  Bò tắm phô mai (bánh vừa)', '2022-05-16', 184),
('Combo-burger-2-mieng-bo-nuong-whopper-jr', 'Combo burger 2 miếng bò nướng whopper jr', '99000', 'http://localhost:8080/UEH_burger/public/img/sanpham/40.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/40.jpg', 'Combo gồm : 1 nước (free refill) + 1 khoai tây (m)', 'Combo', '2022-05-17', 400000),
('Combo-burger-bo-nuong-hanh-chien', 'Combo burger bò nướng hành chiên', '78000', 'http://localhost:8080/UEH_burger/public/img/sanpham/59.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/59.jpg', 'Combo Gồm : 1 Nước (Free Refill) + 1 Khoai Tây (M)', 'Combo', '2022-05-17', 200),
('Combo-burger-bo-nuong-whopper-jr', 'Combo burger bò nướng whopper jr', '78000', 'http://localhost:8080/UEH_burger/public/img/sanpham/39.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/39.jpg', 'Combo gồm : 1 nước (free refill) + 1 khoai tây (m)', 'Combo', '2022-05-17', 3000),
('Combo-ga-gion-khong-cay--3-mieng-', 'Combo gà giòn không cay (3 miếng)', '119000', 'http://localhost:8080/UEH_burger/public/img/sanpham/45.jpg,\r\nhttp://localhost:8080/UEH_burger/public/img/sanpham/45.jpg', 'Main course : 1 nước + 3 miếng gà giòn không cay + 1 khoai tây', 'Combo, Gà rán', '2022-05-17', 3500),
('Combo-say-nang-for-2-people', 'Combo say nắng for 2 people', '195000', 'http://localhost:8080/UEH_burger/public/img/sanpham/44.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/44.jpg', '2 bò tắm phô mai cỡ vừa + khoai tây tắm phô mai + 2pcs drumlets + 2 coke', 'Combo', '2022-05-17', 5000),
('Combo-say-yes-for-2-people', 'Combo say yes for 2 people', '251000', 'http://localhost:8080/UEH_burger/public/img/sanpham/42.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/42.jpg', '2 bò tắm phô mai cỡ lớn + khoai tây tắm phô mai + 4pcs nugget + 2 coke', 'Combo', '2022-05-17', 600),
('Dasani', 'Dasani', '19000', 'http://localhost:8080/UEH_burger/public/img/sanpham/47.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/47.jpg', 'Từ nguồn nước ngầm thông qua hệ thống thẩm thấu ngược và thanh trùng bằng Ozone, đảm bảo sự thanh khiết trong từng giọt nước giúp thanh lọc cơ thể hoàn hảo của Dasani. Nước tinh khiết Dasani 350ml khi uống có vị tinh khiết, thanh mát giúp cơ thể bù nước', 'Nước suối', '2022-05-17', 98),
('Ga-BBQ--1-mieng-', 'Gà BBQ (1 miếng)', '55000', 'http://localhost:8080/UEH_burger/public/img/sanpham/23.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/24.jpg', 'Gà BBQ (1 miếng)', 'Gà BBQ ', '2022-05-16', 140),
('Ga-gion-khong-cay', 'Gà giòn không cay', '60000', 'http://localhost:8080/UEH_burger/public/img/sanpham/19.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/20.jpg', 'Gà giòn không cay', 'Gà giòn, không cay', '2022-05-16', 129),
('Ga-Nuggets', 'Gà Nuggets', '80000', 'http://localhost:8080/UEH_burger/public/img/sanpham/27.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/28.jpg', 'Gà nuggets màu sắc đẹp mắt, giòn tan trong miệng', 'Gà Nuggets', '2022-05-16', 126),
('Ga-ran-gion-cay', 'Gà rán giòn cay', '60000', 'http://localhost:8080/UEH_burger/public/img/sanpham/21.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/22.jpg', 'Gà rán giòn cay', 'Gà rán giòn, cay ', '2022-05-16', 130),
('Khoai-tay-chien--size-M-', 'Khoai tây chiên (size M)', '60000', 'http://localhost:8080/UEH_burger/public/img/sanpham/25.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/26.jpg', 'Khoai tây chiên giòn tan, thơm lừng', 'Khoai tây chiên ', '2022-05-16', 140),
('Milo', 'Milo', '40000', 'http://localhost:8080/UEH_burger/public/img/sanpham/35.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/37.jpg', 'Milo là thức uống có lợi cho sức khỏe.\r\n\r\nDung tích: 380ml.', 'milo', '2022-05-16', 24),
('Mix-wing', 'Mix wing', '43000', 'http://localhost:8080/UEH_burger/public/img/sanpham/31.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/32.jpg', 'Một chiếc cánh gà rán đậm đà hương vị được mix với những nguyên liệu tốt cho sức khoẻ', 'Mix wing', '2022-05-16', 23),
('Nuoc-xoai-dao', 'Nước xoài đào', '45000', 'http://localhost:8080/UEH_burger/public/img/sanpham/33.jpeg, http://localhost:8080/UEH_burger/public/img/sanpham/34.jpg', 'Nước trái cây cô đặc Sjora xoài đào', 'Nước xoài đào', '2022-05-16', 57),
('Pho-mai-que', 'Phô mai que', '40000', 'http://localhost:8080/UEH_burger/public/img/sanpham/29.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/30.jpg', 'Phô mai que là sự kết hợp của sự giòn tan ở ngoài vỏ và mềm dẻo, béo ngậy của phô mai bên trong', 'Phô mai que', '2022-05-16', 216),
('sprite', 'sprite', '19000', 'http://localhost:8080/UEH_burger/public/img/sanpham/49.jpg, http://localhost:8080/UEH_burger/public/img/sanpham/49.jpg', 'Hương vị được ưa chuộng tại hơn 190 quôc gia và lọt top những nước giải khát được yêu thích nhất toàn cầu. Với vị chanh tươi mát cùng những bọt ga sảng khoái tê đầu lưỡi giúp bạn đập tan cơn khát ngay tức thì. Sản phẩm cam kết chính hãng, chất lượng và an toàn từ nhà Sprite', 'Sprite', '2022-05-17', 215),
('TRA-CHANH', 'TRÀ CHANH', '19000', ' http://localhost:8080/UEH_burger/public/img/sanpham/55.jpeg , http://localhost:8080/UEH_burger/public/img/sanpham/56.jpeg', 'Trà chanh nhà làm, ngon như nhà làm!', 'Trà', '2022-05-17', 3400);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `address`, `phone_number`, `date_created`, `role`) VALUES
('admin', 'admin', 'Admin', 'admin house', '0000000000', '2022-05-16 19:24:22', 1),
('dongvi', 'admin', 'Đặng Đông Vĩ', '123', '0934581137', '2022-05-17 01:43:03', 2),
('tuan', '123', 'Nguyễn Văn Tuấn', 'xóm Tiến Quân, xã An Nam, huyện Viễn Đông', '1236547890', '2022-05-16 14:05:36', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`url`);

--
-- Chỉ mục cho bảng `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`category_url`,`product_url`),
  ADD KEY `product_url` (`product_url`);

--
-- Chỉ mục cho bảng `images_store`
--
ALTER TABLE `images_store`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_infor`
--
ALTER TABLE `order_infor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`url`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images_store`
--
ALTER TABLE `images_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `order_infor`
--
ALTER TABLE `order_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_details`
--
ALTER TABLE `category_details`
  ADD CONSTRAINT `category_details_ibfk_1` FOREIGN KEY (`category_url`) REFERENCES `category` (`url`),
  ADD CONSTRAINT `category_details_ibfk_2` FOREIGN KEY (`product_url`) REFERENCES `product` (`url`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
