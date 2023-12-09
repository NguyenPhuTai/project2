-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 04:27 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `prj2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không hoạt động\r\n1:Hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_video`
--

CREATE TABLE `anh_video` (
  `id` int(11) NOT NULL,
  `anh_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không thành công\r\n1:Thành công'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id` int(11) NOT NULL,
  `id_phuongThucThanhToan` int(11) NOT NULL,
  `loiNhanCuaShop` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGianGiaoHang` datetime NOT NULL,
  `tongTien` float NOT NULL,
  `voucher` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gioHang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthanhtoan`
--

CREATE TABLE `chitietthanhtoan` (
  `id` int(11) NOT NULL,
  `id_phuongThucThanhToan` int(11) NOT NULL,
  `danhSachNganHang` tinyint(4) NOT NULL COMMENT '1:MB Bank\r\n2:VCB'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthongtin`
--

CREATE TABLE `chitietthongtin` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` int(10) NOT NULL,
  `id_khachHang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anhVideo` int(11) NOT NULL,
  `rating` tinyint(5) NOT NULL COMMENT '1 sao\r\n2 sao\r\n3 sao\r\n4 sao\r\n5 sao\r\n',
  `id_doiTac` int(11) NOT NULL,
  `id_khachHang` int(11) NOT NULL,
  `id_sanPham` int(11) NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không thành công\r\n1:Thành công'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doitac`
--

CREATE TABLE `doitac` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không hoạt động\r\n1:Hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_khachHang` int(11) NOT NULL,
  `id_sanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` int(10) NOT NULL,
  'password' varchar(200) NOT NULL,
  `capBac` tinyint(4) NOT NULL COMMENT 'Bạc\r\nVàng\r\nBạch Kim\r\nKim Cương',
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không hoạt động\r\n1:Hoạt động',
  create_at date DEFAULT current_timestamp(),
  update_at date null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `id` int(11) NOT NULL,
  `kieuThanhToan` tinyint(4) NOT NULL COMMENT '1: thanh toán khi nhận hàng\r\n2:Chuyển khoản/VISA',
  `voucher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:thanh toán không thành công\r\n1:thanh toán thành công'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anhVideo` int(11) NOT NULL,
  `id_doiTac` int(11) NOT NULL,
  `id_thuongHieu` int(11) NOT NULL,
  `id_danhMucSanPham` int(11) NOT NULL,
  `moTaSanPham` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soLuong` int(10) NOT NULL,
  `gia` float NOT NULL,
  `trangThai` int(11) NOT NULL COMMENT 'trong kho\r\n0:hết hàng\r\n1:còn hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `id_doiTac` int(11) NOT NULL,
  `id_sanPham` int(11) NOT NULL,
  `trangThai` tinyint(4) NOT NULL COMMENT '0:Không hoạt động\r\n1:Hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_video`
--
ALTER TABLE `anh_video`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gioHang` (`id_gioHang`),
  ADD KEY `id_phuongThucThanhToan` (`id_phuongThucThanhToan`);

--
-- Chỉ mục cho bảng `chitietthanhtoan`
--
ALTER TABLE `chitietthanhtoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phuongThucThanhToan` (`id_phuongThucThanhToan`);

--
-- Chỉ mục cho bảng `chitietthongtin`
--
ALTER TABLE `chitietthongtin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachHang` (`id_khachHang`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doiTac` (`id_doiTac`),
  ADD KEY `id_khachHang` (`id_khachHang`),
  ADD KEY `id_sanPham` (`id_sanPham`),
  ADD KEY `id_anhVideo` (`id_anhVideo`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachHang` (`id_khachHang`),
  ADD KEY `id_sanPham` (`id_sanPham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doiTac` (`id_doiTac`),
  ADD KEY `id_thuongHieu` (`id_thuongHieu`),
  ADD KEY `id_danhMucSanPham` (`id_danhMucSanPham`),
  ADD KEY `id_anhVideo` (`id_anhVideo`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doiTac` (`id_doiTac`),
  ADD KEY `id_sanPham` (`id_sanPham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_video`
--
ALTER TABLE `anh_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietthanhtoan`
--
ALTER TABLE `chitietthanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietthongtin`
--
ALTER TABLE `chitietthongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `doitac`
--
ALTER TABLE `doitac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`id_gioHang`) REFERENCES `giohang` (`id`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`id_phuongThucThanhToan`) REFERENCES `phuongthucthanhtoan` (`id`);

--
-- Các ràng buộc cho bảng `chitietthanhtoan`
--
ALTER TABLE `chitietthanhtoan`
  ADD CONSTRAINT `chitietthanhtoan_ibfk_1` FOREIGN KEY (`id_phuongThucThanhToan`) REFERENCES `phuongthucthanhtoan` (`id`);

--
-- Các ràng buộc cho bảng `chitietthongtin`
--
ALTER TABLE `chitietthongtin`
  ADD CONSTRAINT `chitietthongtin_ibfk_1` FOREIGN KEY (`id_khachHang`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`id_doiTac`) REFERENCES `doitac` (`id`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`id_khachHang`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `danhgia_ibfk_3` FOREIGN KEY (`id_sanPham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `danhgia_ibfk_4` FOREIGN KEY (`id_anhVideo`) REFERENCES `anh_video` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_khachHang`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_sanPham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_doiTac`) REFERENCES `doitac` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_thuongHieu`) REFERENCES `thuonghieu` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_danhMucSanPham`) REFERENCES `danhmucsanpham` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`id_anhVideo`) REFERENCES `anh_video` (`id`);

--
-- Các ràng buộc cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD CONSTRAINT `thuonghieu_ibfk_1` FOREIGN KEY (`id_doiTac`) REFERENCES `doitac` (`id`),
  ADD CONSTRAINT `thuonghieu_ibfk_2` FOREIGN KEY (`id_sanPham`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
