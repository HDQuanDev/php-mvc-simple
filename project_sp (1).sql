-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 20, 2024 lúc 10:51 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB-log
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_sp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhasx`
--

CREATE TABLE `tbl_nhasx` (
  `ma_nhasx` int(11) NOT NULL,
  `ten_nhasx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhasx`
--

INSERT INTO `tbl_nhasx` (`ma_nhasx`, `ten_nhasx`) VALUES
(1, 'Xiaomi'),
(2, 'Samsung'),
(3, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` text NOT NULL,
  `ma_nhasx` int(11) NOT NULL,
  `dongia` text NOT NULL,
  `soluong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ma_sp`, `ten_sp`, `ma_nhasx`, `dongia`, `soluong`) VALUES
(2, 'Xiaomi 14 Pro', 1, '25000000', '5'),
(3, 'Xiaomi 14', 1, '15000000', '4'),
(5, 'Xiaomi 14 Pro 9999', 1, '25000000', '5');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_nhasx`
--
ALTER TABLE `tbl_nhasx`
  ADD PRIMARY KEY (`ma_nhasx`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
