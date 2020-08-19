-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 11:41 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `foods`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `username`, `password`, `role`) VALUES
(1, 1, 'anh nguyen', '$2y$10$F46mNN2wMovmBt1w1rfTNudYvf6K2zTNtLIphdmw0y20Eq42EYegK', 1),
(2, 2, 'trang tran', '$2y$10$F46mNN2wMovmBt1w1rfTNudYvf6K2zTNtLIphdmw0y20Eq42EYegK', 0),
(3, 3, 'huong nguyen', '$2y$10$F46mNN2wMovmBt1w1rfTNudYvf6K2zTNtLIphdmw0y20Eq42EYegK', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `type`) VALUES
(1, 'Chiên'),
(2, 'Mì'),
(3, 'Bánh'),
(4, 'Chay'),
(5, 'Khai vi'),
(6, 'Cay'),
(7, 'Gỏi'),
(8, 'Súp'),
(9, 'Nướng'),
(10, 'Hấp'),
(11, 'Lẩu'),
(12, 'Salad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatbox`
--

CREATE TABLE `chatbox` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `message` text NOT NULL,
  `id_rep` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chatbox`
--

INSERT INTO `chatbox` (`id`, `id_user`, `message`, `id_rep`, `time`) VALUES
(11, 2, 'admin', 0, '2020-07-26 01:55:28'),
(12, 1, 'xin loi', 2, '2020-07-26 01:56:12'),
(13, 2, 'cho toi hoi', 0, '2020-07-26 01:57:09'),
(14, 2, 'manh cho', 0, '2020-07-26 02:19:30'),
(15, 2, 'cho minh hoi', 0, '2020-07-26 02:25:50'),
(16, 2, 'dfdf', 0, '2020-07-26 02:27:55'),
(17, 3, 'dfdsgfs', 0, '2020-07-26 02:28:41'),
(18, 3, 'àdfdsf', 0, '2020-07-26 02:43:21'),
(19, 1, 'zxcxzc', 2, '2020-07-30 10:14:51'),
(20, 1, 'zxcxzc', 2, '2020-07-30 10:15:08'),
(21, 1, 'zxcxzc', 2, '2020-07-30 10:15:23'),
(22, 1, 'sdfdsf', 2, '2020-07-30 10:20:39'),
(23, 1, 'xfffcx', 3, '2020-07-30 10:20:58'),
(24, 2, 'toi muon dat mon', 0, '2020-08-03 04:12:41'),
(25, 1, 'ban muon dat gi', 3, '2020-08-03 04:29:05'),
(26, 1, 'efref', 3, '2020-08-03 08:06:48'),
(27, 1, 'ban muon dat gi', 2, '2020-08-03 08:07:01'),
(28, 1, 'toi co the phuc vu ban nhung gi', 2, '2020-08-03 08:08:13'),
(29, 1, 'ok', 2, '2020-08-03 08:08:55'),
(33, 2, 'anh', 0, '2020-08-10 15:57:04'),
(36, 2, 'com chien', 0, '2020-08-10 16:32:56'),
(37, 2, '123', 0, '2020-08-10 16:33:23'),
(38, 2, '456', 0, '2020-08-10 16:36:34'),
(39, 2, 'admin', 0, '2020-08-10 16:37:25'),
(40, 2, 'admin', 0, '2020-08-10 16:37:30'),
(49, 3, 'cho hoi', 0, '2020-08-11 09:03:42'),
(50, 3, 'toi muon mua', 0, '2020-08-11 09:03:53'),
(51, 3, 'ban co the giup', 0, '2020-08-11 09:04:29'),
(52, 3, '1', 0, '2020-08-11 09:04:44'),
(53, 3, '2', 0, '2020-08-11 09:04:49'),
(54, 3, '2', 0, '2020-08-11 09:05:05'),
(55, 3, '4', 0, '2020-08-11 09:05:09'),
(56, 3, '3', 0, '2020-08-11 09:06:59'),
(57, 3, '1', 0, '2020-08-11 09:07:02'),
(58, 3, '1', 0, '2020-08-11 09:08:23'),
(59, 3, '2', 0, '2020-08-11 09:10:14'),
(60, 3, '2', 0, '2020-08-11 09:11:16'),
(61, 3, '3', 0, '2020-08-11 09:11:22'),
(62, 3, '4', 0, '2020-08-11 09:11:26'),
(63, 3, '1', 0, '2020-08-11 09:11:32'),
(64, 3, '1', 0, '2020-08-11 09:11:48'),
(65, 3, '2', 0, '2020-08-11 09:11:51'),
(66, 3, '3', 0, '2020-08-11 09:12:14'),
(67, 2, '123', 0, '2020-08-11 09:16:52'),
(68, 2, '1', 0, '2020-08-11 09:19:10'),
(69, 2, '2', 0, '2020-08-11 09:31:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluates`
--

CREATE TABLE `evaluates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pro` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `evaluate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluates`
--

INSERT INTO `evaluates` (`id`, `id_pro`, `id_user`, `evaluate`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Đồ ăn ngon', '2020-08-11 17:04:32', '2020-08-11 17:04:32'),
(2, 1, 3, 'Đồ ăn tuyệt vời', '2020-08-11 17:05:10', '2020-08-11 17:05:10'),
(3, 1, 2, 'Nhà hàng nhiệt tình', '2020-08-11 17:05:21', '2020-08-11 17:05:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `donhang` text DEFAULT NULL,
  `diachi` varchar(255) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `donhang`, `diachi`, `thoigian`, `ghichu`) VALUES
(1, '[{\"product_id\":4,\"user_id\":2,\"options\":null,\"quantity\":3},{\"product_id\":19,\"user_id\":2,\"options\":null,\"quantity\":4},{\"product_id\":1,\"user_id\":2,\"options\":null,\"quantity\":4}]', '', '', ''),
(3, '[{\"product_id\":1,\"user_id\":2,\"options\":null,\"quantity\":5},{\"product_id\":18,\"user_id\":2,\"options\":null,\"quantity\":4},{\"product_id\":12,\"user_id\":2,\"options\":null,\"quantity\":2}]', 'da nang', '12', 'dung thoi gian');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `options` varchar(200) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `user_id`, `options`, `quantity`) VALUES
(1, 1, 1, 'Ha Noi', 5),
(19, 18, 3, NULL, 4),
(20, 12, 3, NULL, 2),
(21, 16, 3, NULL, 1),
(33, 8, 2, NULL, 1),
(34, 20, 2, NULL, 1),
(35, 23, 2, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `promotion_price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_type`, `title`, `description`, `unit_price`, `promotion_price`, `quantity`, `detail`, `image`) VALUES
(1, 1, 'Cơm chien', 'Cơm chien được làm từ cơm và cac loai thuc pham', 50000, 30000, 100, 'San pham duoc che bien theo cong thuc gồm các loại thực phẩm tôt', 'public/img_food/food_content/1.jfif'),
(2, 10, 'Mực hấp', 'Mực hấp ngon ngọt', 300000, 25000, 120, 'San pham duoc che bien theo cong thuc gồm các loại thực phẩm tôt', 'public/img_food/food_content/2.jfif'),
(3, 9, 'Thịt nướng', 'THịt ngon bổ dưỡng', 380000, 300000, 50, 'San phẩm được nướng theo công thức riêng biệt', 'public/img_food/food_content/3.jfif'),
(4, 11, 'Lẩu Tokbboki hải sản cay', 'Lẩu tokbboki cần các nguyên liệu :mì gà cay,tokbokki,chả cá xay,hành lá ', 199000, 180000, 50, 'null', 'public/img_food/food_content/lautokbokihs.jpg'),
(5, 2, 'Mì tôm thịt', 'Mì tôm thịt gồm các nguyên liệu từ mì, tôm và thịt heo', 50000, 30000, 15, 'null', 'public/img_food/food_content/mitomthit.jpg'),
(6, 3, 'Bánh xèo', 'Bánh xèo được rán lên chảo với nhưng là tôm thịt ăn kèm nước chấm', 70000, 50000, 120, 'null', 'public/img_food/food_content/banhxeo.jpg'),
(7, 10, 'Bánh bao hấp', 'Bánh bao được hấp vừa đủ chín thơm ,ngon', 30000, 30000, 120, 'null', 'public/img_food/food_content/2.png'),
(8, 8, 'Súp Cua', 'Súp được nấu với cua , ngon ngọt từ nước dừa', 200000, 180000, 120, 'null', 'public/img_food/food_content/supcua.jpg'),
(9, 7, 'Gỏi chân gà sốt thái', 'Gỏi được sử dụng nước sốt siêu ngon, ngọt', 100000, 60000, 50, 'null', 'public/img_food/food_content/goisua.jpg'),
(10, 4, 'Đậu chay', 'Đậu được chiên với sốt xì dầu thơm', 30000, 15000, 20, 'null', 'public/img_food/food_content/dauchay.jpg'),
(11, 5, 'Rau cau hoa hong', 'Rau câu được kết hợp sự khóe léo , sáng tạo ', 150000, 100000, 100, '', 'public/img_food/food_content/raucau.jpg'),
(12, 6, 'Bạch tuột xào cay', 'Bạch tuột được xào với 1 lg ướt cay xéo mỏ', 500000, 499000, 200, '', 'public/img_food/food_content/bachtuotcay.jpg'),
(13, 7, 'Gỏi chân gà sốt thái', 'Gỏi được sử dụng nước sốt siêu ngon, ngọt', 100000, 60000, 50, 'null', 'public/img_food/food_content/banhtrangcay.jpg'),
(14, 12, 'salad', 'salad rau bổ sung diep luc', 30000, 10000, 200, '', 'public/img_food/food_content/salad.jpg'),
(15, 12, 'salad dưa chuột', 'Salad bao gồm rau dưa chuột tươi', 30000, 15000, 10, '', 'public/img_food/food_content/saladduachuot.jpg'),
(16, 6, 'banh trang cay', 'bánh tráng cay được rưới sốt cay nồng', 20000, 18000, 50, '', 'public/img_food/food_content/banhtrangcay.jpg'),
(17, 6, 'Gà cay', 'Gà được chiêm ga dầu rồi tưới sốt siêu cay', 30000, 200000, 300, '', 'public/img_food/food_content/gacay.jpg'),
(18, 6, 'Mì cay cấp độ', 'Mì cay được bỏ lượng ớt tùy theo cấp độ cay ', 100000, 80000, 400, '', 'public/img_food/food_content/micay.jpg'),
(20, 8, 'Súp gà xén nấm', 'Súp được hầm ở nhiệt độ vừa đủ chín', 220000, 200000, 12, '', 'public/img_food/food_content/súpgàxénấm.jpg'),
(21, 7, 'Gỏi bê bóp thấu', 'Thịt bê là nguồn cung cấp rất nhiều đạm và protein trong cơ thể', 200000, 199000, 50, '', 'public/img_food/food_content/goibebopthau.jpg'),
(22, 1, 'Khoai lang chiên', 'Khoai lang được chiên ở nhiệt độ giòn ', 50000, 20000, 20, '', 'public/img_food/food_content/khoailangchien.jpg'),
(23, 8, 'Súp rau ', 'súp rau cung cấp các loại vitamin trong các củ quả', 100000, 50000, 100, '', 'public/img_food/food_content/suprau.jpg'),
(24, 1, 'Khoai tây chiên', 'Khoai tây được chiên ở nhiệt độ giòn ', 50000, 20000, 20, '', 'public/img_food/food_content/khoai-tay-chien.jpg'),
(25, 8, 'Súp ngô ', 'súp ngô cung cấp các loại vitamin trong các củ quả', 50000, 49500, 100, '', 'public/img_food/food_content/supngo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `year_of_birth` varchar(5) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `year_of_birth`, `city`, `phoneNumber`) VALUES
(1, 'Nguyen The Anh', 0, 'anhanh5811@gmail.com', '2000', 'Quang Tri', '03345678912'),
(2, 'Tran Thi Huyen Trang', 0, 'trang.tran@gmail.com', '2000', 'Quang Binh', '02287600012'),
(3, 'Nguyen Thi Hoang Huong', 0, 'huong.nguyen@gmail.com', '2000', 'Da Nang', '0353956450');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `evaluates`
--
ALTER TABLE `evaluates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `evaluates`
--
ALTER TABLE `evaluates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
