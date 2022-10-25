-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2022 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cse481`
--

DELIMITER $$
--
-- Các hàm
--
CREATE DEFINER=`root`@`localhost` FUNCTION `today` () RETURNS DATE BEGIN
RETURN CURDATE();
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sđt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `hoten`, `email`, `gioitinh`, `ngaysinh`, `diachi`, `sđt`, `password`, `chucvu`, `luong`) VALUES
(8, 'Nguyễn Thị Ngọc Bích', 'ab@gmail.com', 'Nữ', '2022-03-12', '', '', '', 'nhanvien', 15000),
(123, 'Nguyễn Thùy Duong', 'd@gmail.com', 'Nữ', '2001-05-14', 'Ha Noi', '032215467', '123456', 'admin', 15000),
(12344, 'Nguyễn Thị Ngọc Bích', 'b@gmail.com', 'Nữ', '2001-02-28', '', '', '12345678', 'nhanvien', 15000),
(1951060517, 'Nguyễn Quỳnh Anh', 'qanh1662001@gmail.com', 'Nữ', '2001-06-16', 'Hà Nội', '0324556878', '12345', 'admin', 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `Sluong`) VALUES
(3, 'SP05', 3),
(3, 'SP07', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaK` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `size` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `Ngaymua` date DEFAULT NULL,
  `MaK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `Ngaymua`, `MaK`) VALUES
(1, '2022-01-13', 1),
(2, '2022-03-13', 2),
(3, '2022-03-01', 1),
(4, '2022-02-17', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaK` int(11) NOT NULL,
  `TenK` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SĐT` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaK`, `TenK`, `Gioitinh`, `Ngaysinh`, `Diachi`, `SĐT`, `email`, `matkhau`) VALUES
(1, 'Nguyễn Quỳnh Anh', 'Nữ', '2022-03-04', 'Thanh Hóa', '0489573754', 'qa1662001@gmail.com', '12345678'),
(2, 'Nguyễn Thùy Duong ', 'Nữ', '2001-05-14', NULL, NULL, 'd@gmail.com', '123'),
(9, 'Nguyễn Quỳnh Anh ', 'Nữ', '2022-03-11', 'Thanh Hóa', '0456776645', 'qanh1662001@gmail.com', '12345678'),
(10, 'Nguyễn Quỳnh', 'Nữ', '2022-03-12', 'Thanh Hóa', '0489573754', 'qanh16620012001@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `MaLH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`MaLH`, `TenLH`) VALUES
('LH01', 'Áo'),
('LH02', 'Quần'),
('LH03', 'Váy'),
('LH04', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaLH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Giaban` int(11) DEFAULT NULL,
  `Gianhap` int(11) DEFAULT NULL,
  `Tylegiamgia` double(2,2) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Mota` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trangthai` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaLH`, `Giaban`, `Gianhap`, `Tylegiamgia`, `Soluong`, `Mota`, `Trangthai`, `img`, `Ngaynhap`) VALUES
('SP04', 'Đầm Adel Flower Dress', 'LH03', 390000, 299000, 0.00, 15, 'Tên sản phẩm: Đầm Adel Flower Dress\r\nPhong cách: Cơ bản, Hàn Quốc, Retro\r\nSize: S - M - L', 'Đang bán', 'd1.jpg', '2022-01-25'),
('SP05', 'Đầm hoa gân tăm', 'LH03', 310000, 299000, 0.10, 15, 'Tên sản phẩm: Đầm hoa gân tăm\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\n', 'Đang bán', 'd2.png', '2022-01-23'),
('SP06', 'Checked Sweater len', 'LH01', 390000, 250000, 0.00, 20, 'Tên sản phẩm: Checked Sweater len\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\nSize: S - M - L', 'Đang bán', 'a2.png', '2022-01-04'),
('SP07', 'Đầm Jeong suông gân tăm', 'LH03', 385000, 250000, 0.00, 10, 'Tên sản phẩm: Đầm Jeong suông gân tăm\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\nSize: XS - S - M - L - XL', 'Đang bán', 'd3.png', '2022-01-16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaK` (`MaK`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaK` (`MaK`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaK`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MaLH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLH` (`MaLH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaK`) REFERENCES `khachhang` (`MaK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaK`) REFERENCES `khachhang` (`MaK`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLH`) REFERENCES `loaihang` (`MaLH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
