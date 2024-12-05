-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Dec 05, 2024 at 04:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `pt_thanhtoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `id_donhang`, `id_sach`, `so_luong`, `pt_thanhtoan`) VALUES
(6, 2, 7, 4, 'Chuyển khoản ngân hàng'),
(7, 3, 7, 2, 'Thanh toán Momo'),
(8, 1, 3, 1, 'Thanh toán Momo'),
(9, 4, 5, 1, 'Chuyển khoản ngân hàng'),
(10, 5, 2, 2, 'Chuyển khoản ngân hàng'),
(11, 5, 3, 4, 'Chuyển khoản ngân hàng'),
(12, 6, 9, 1, 'Chuyển khoản ngân hàng'),
(13, 6, 6, 1, 'Chuyển khoản ngân hàng'),
(14, 7, 6, 2, 'Chuyển khoản ngân hàng'),
(15, 7, 5, 1, 'Chuyển khoản ngân hàng');

-- --------------------------------------------------------

--
-- Table structure for table `detail_image`
--

CREATE TABLE `detail_image` (
  `id` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `anh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_image`
--

INSERT INTO `detail_image` (`id`, `id_sach`, `anh`) VALUES
(1, 1, 'nguoi-an-chay.jpg'),
(2, 2, 'cay-cam-ngot-cua-toi.webp'),
(3, 2, 'cay-cam-ngot-cua-toi-ct1.png'),
(4, 2, 'cay-cam-ngot-cua-toi-ct2.png'),
(5, 2, 'cay-cam-ngot-cua-toi-ct3.png'),
(6, 3, 'nguoi-giau-nhat-thanh-babylon.webp'),
(7, 3, 'nguoi-giau-nhat-thanh-babylon-ct1.pnga'),
(8, 3, 'nguoi-giau-nhat-thanh-babylon-ct2.jpg'),
(9, 3, 'nguoi-giau-nhat-thanh-babylon-ct3.webp'),
(11, 4, 'atomic-habits-ct1.jpg'),
(12, 4, 'atomic-habits-ct2.webp'),
(13, 4, 'atomic-habits-ct3.jpg'),
(14, 5, 'tuoi-tre-dang-gia-bao-nhieu.webp'),
(15, 5, 'tuoi-tre-dang-gia-bao-nhieu-ct1.jpg'),
(16, 5, 'tuoi-tre-dang-gia-bao-nhieu-ct2.jpg'),
(17, 5, 'tuoi-tre-dang-gia-bao-nhieu-ct3.jpg'),
(18, 7, 'tieng-anh-cho-nguoi-bat-dau.jpg'),
(19, 9, 'co-gai-den-tu-hom-qua.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `ngay_mua_hang` date NOT NULL,
  `tt_thanhtoan` varchar(100) NOT NULL,
  `tt_donhang` varchar(100) NOT NULL,
  `dia_chi` varchar(1000) NOT NULL,
  `ghi_chu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `id_khachhang`, `ngay_mua_hang`, `tt_thanhtoan`, `tt_donhang`, `dia_chi`, `ghi_chu`) VALUES
(1, 1, '2024-11-10', 'Đã thanh toán', 'Đang giao', '123 Đường ABC, Quận 1, TP. HCM', 'Giao trong giờ hành chính'),
(2, 2, '2024-11-12', 'Chưa thanh toán', 'Chờ xử lý', '456 Đường DEF, Quận 2, TP. HCM', 'Gọi trước khi giao'),
(3, 3, '2024-11-15', 'Đã thanh toán', 'Hoàn thành', '789 Đường GHI, Quận 3, TP. HCM', 'Không có ghi chú'),
(4, 11, '2024-12-03', 'Đã thanh toán', 'Chờ xử lý', 'bình thuận', ''),
(5, 11, '2024-12-04', 'Đã thanh toán', 'Chờ xử lý', 'd', ''),
(6, 11, '2024-12-05', 'Đã thanh toán', 'Chờ xử lý', 'z', 'sđs'),
(7, 11, '2024-12-05', 'Đã thanh toán', 'Chờ xử lý', 'bình thuận', '');

-- --------------------------------------------------------

--
-- Table structure for table `nha_xuat_ban`
--

CREATE TABLE `nha_xuat_ban` (
  `id` int(11) NOT NULL,
  `ten_nxb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`id`, `ten_nxb`) VALUES
(1, 'NXB Thế Giới'),
(2, 'NXB Hà Nội'),
(3, 'NXB Hội Nhà Văn'),
(4, 'NXB Công Thương'),
(5, 'NXB Văn Học'),
(6, 'NXB Giáo Dục Việt Nam'),
(7, 'NXB Thanh Niên');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `id_tacgia` int(11) NOT NULL,
  `id_nxb` int(11) NOT NULL,
  `ten_sach` varchar(50) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `gia` varchar(50) NOT NULL,
  `giam` varchar(50) NOT NULL,
  `mo_ta` varchar(2000) NOT NULL,
  `nam_xb` date NOT NULL,
  `so_luong_ban` int(50) NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id`, `id_theloai`, `id_tacgia`, `id_nxb`, `ten_sach`, `hinh`, `gia`, `giam`, `mo_ta`, `nam_xb`, `so_luong_ban`, `ngay_nhap`, `status`) VALUES
(1, 1, 2, 5, 'Người Ăn Chay', 'nguoi-an-chay.jpg', '80.000', '12', 'Tác phẩm nổi tiếng này xoay quanh câu chuyện của Yeong-hye, một người phụ nữ quyết định từ bỏ việc ăn thịt và thực hiện lối sống ăn chay. Quyết định này không chỉ gây ra sự phẫn nộ trong gia đình mà còn mở ra những khía cạnh sâu sắc của tâm lý con người. Qua các chương sách, Han Kang khám phá sự đau khổ, khát khao tự do và những áp lực xã hội mà nhân vật phải đối mặt. Cuốn sách không chỉ là một hành trình cá nhân mà còn phản ánh những mâu thuẫn trong gia đình và xã hội, làm nổi bật sự khác biệt giữa bản thân và mong muốn từ người khác.', '2018-11-01', 1869, '2024-01-01', 0),
(2, 1, 3, 3, 'Cây Cam Ngọt Của Tôi', 'cay-cam-ngot-cua-toi.webp', '50.000', '18', 'Đây là một tác phẩm văn học thiếu nhi tuyệt vời, kể về cuộc sống của cậu bé Zezé, một đứa trẻ thông minh và nhạy cảm sống trong một khu phố nghèo ở Brazil. Qua những trang sách, độc giả sẽ theo chân Zezé trong những cuộc phiêu lưu hàng ngày, từ việc kết bạn với cây cam trong vườn đến những giấc mơ lớn lao của cậu. Cuốn sách chạm đến trái tim người đọc với thông điệp về tình bạn, tình yêu thương gia đình và những ước mơ không bao giờ tắt, bất chấp hoàn cảnh khó khăn.', '2017-01-01', 802, '2024-01-02', 0),
(3, 2, 5, 7, 'Người Giàu Nhất Thành Babylon', 'nguoi-giau-nhat-thanh-babylon.webp', '70.000', '16', 'Tác phẩm này là một tập hợp những câu chuyện cổ tích về Babylon, một thành phố nổi tiếng với sự giàu có và thịnh vượng. Qua những nhân vật độc đáo và tình huống thú vị, Clason truyền tải các nguyên tắc tài chính đơn giản nhưng hiệu quả. Cuốn sách nhấn mạnh tầm quan trọng của việc tiết kiệm, đầu tư khôn ngoan và sống theo khả năng của mình. Với cách tiếp cận dễ hiểu và thực tiễn, Người Giàu Nhất Thành Babylon đã trở thành một cuốn sách kinh điển trong lĩnh vực quản lý tài chính cá nhân, mang lại cảm hứng cho hàng triệu người đọc.', '2017-01-01', 1204, '2024-01-03', 0),
(4, 3, 6, 1, 'Atomic Habits', 'TL.KN-Atomic Habits - Thay Đổi Tí Hon Hiệu Quả Bất Ngờ (Tái Bản 2023)-James Clear-NXB Thế giới.webp', '140.000', '12', 'Trong cuốn sách này, James Clear cung cấp cho độc giả những chiến lược chi tiết và dễ thực hiện để xây dựng thói quen tích cực và loại bỏ những thói quen xấu. Clear lập luận rằng thay đổi nhỏ nhưng liên tục có thể dẫn đến kết quả lớn. Ông sử dụng những câu chuyện cá nhân, nghiên cứu khoa học và các ví dụ từ thực tế để minh họa cho quan điểm của mình. Độc giả sẽ tìm thấy các phương pháp cải thiện hiệu suất cá nhân và đạt được mục tiêu thông qua những bước thay đổi nhỏ hàng ngày, từ đó xây dựng một cuộc sống tốt đẹp hơn.', '2019-01-01', 3120, '2024-01-04', 0),
(5, 3, 7, 3, 'Tuổi Trẻ Đáng Giá Bao Nhiêu', 'tuoi-tre-dang-gia-bao-nhieu.webp', '90.000', '14', 'Cuốn sách này là một cuộc hành trình tự khám phá bản thân dành cho giới trẻ. Rosie Nguyễn khuyến khích độc giả suy nghĩ về giá trị của tuổi trẻ, cách tận dụng thời gian quý báu để phát triển bản thân và theo đuổi đam mê. Với những câu chuyện truyền cảm hứng, các bài học thực tiễn và những phương pháp tự phát triển, cuốn sách đã chạm đến trái tim của nhiều bạn trẻ. Đây là một nguồn động lực mạnh mẽ để các bạn trẻ hiểu rằng, mỗi giai đoạn trong cuộc đời đều có ý nghĩa và cơ hội để trưởng thành.', '2017-01-01', 502, '2024-01-05', 0),
(6, 6, 4, 4, 'Thiết Kế Cuộc Đời Thịnh Vượng', '53024474.jpg', '150.000', '15', 'Dan Nicholson kết hợp các nguyên tắc tư duy thiết kế với cuộc sống cá nhân trong cuốn sách này. Ông hướng dẫn độc giả cách tạo dựng một cuộc sống đầy ý nghĩa và thành công thông qua các phương pháp thiết kế sáng tạo. Bằng cách áp dụng tư duy thiết kế vào các quyết định hàng ngày, người đọc có thể khám phá và định hình tương lai của mình một cách chủ động, sáng tạo hơn. Cuốn sách không chỉ là một tài liệu hướng dẫn, mà còn là một cuộc cách mạng trong cách nhìn nhận cuộc sống.', '0000-00-00', 1233, '2024-01-06', 0),
(7, 7, 10, 6, 'Sách học tiếng Anh cho người mới bắt đầu - Bino Ch', 'tieng-anh-cho-nguoi-bat-dau.jpg', '70.000', '13', 'Cuốn sách này là một công cụ hữu ích dành cho những ai muốn bắt đầu học tiếng Anh. Nó cung cấp những kiến thức cơ bản về ngữ pháp, từ vựng, và cách phát âm, cùng với các bài tập thực hành giúp người học củng cố kiến thức. Với cách trình bày dễ hiểu, cuốn sách giúp người mới bắt đầu tự tin hơn trong việc giao tiếp và sử dụng tiếng Anh trong cuộc sống hàng ngày. Đây là một lựa chọn tuyệt vời cho những ai muốn trang bị cho mình nền tảng vững chắc trong việc học ngôn ngữ này.', '2021-01-01', 325, '2024-01-07', 0),
(8, 4, 8, 7, 'Bé Làm Kế Toán', '8936093912772.webp', '75.000', '12', 'Cuốn sách này hướng dẫn trẻ em cách hiểu về tiền bạc và kế toán thông qua những câu chuyện vui nhộn và hình ảnh sinh động. Hoàng Nam Tiến sử dụng các nhân vật hoạt hình đáng yêu để dạy trẻ về các khái niệm cơ bản của quản lý tài chính, từ việc tiết kiệm đến chi tiêu hợp lý. Đây là một cuốn sách thú vị và giáo dục, giúp trẻ hình thành thói quen tài chính tốt từ khi còn nhỏ.', '2020-01-01', 125, '2024-01-08', 0),
(9, 5, 1, 5, 'Cô Gái Đến Từ Hôm Qua', 'co-gai-den-tu-hom-qua.jpg', '85.000', '15', 'Tác phẩm này khám phá mối quan hệ giữa hai nhân vật chính, là những người trẻ đang trong giai đoạn tìm kiếm bản thân và tình yêu. Qua những tình huống dở khóc dở cười, Mộc Trầm khéo léo thể hiện những cảm xúc chân thật, nỗi lo lắng và hy vọng của giới trẻ trong tình yêu. Cuốn sách là một hành trình khám phá tình cảm và sự trưởng thành, khiến độc giả không thể không đồng cảm với các nhân vật.', '2021-01-01', 801, '2024-01-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tac_gia`
--

CREATE TABLE `tac_gia` (
  `id` int(11) NOT NULL,
  `ten_tacgia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tac_gia`
--

INSERT INTO `tac_gia` (`id`, `ten_tacgia`) VALUES
(1, 'Tác giả Mộc Trầm'),
(2, 'Tác giả Han Kang'),
(3, 'Tác giả José Mauro de Vasconcelos'),
(4, 'Tác giả Dan Nicholson'),
(5, 'Tác giả George Samuel Clason'),
(6, 'Tác giả James Clear'),
(7, 'Tác giả Rosie Nguyễn'),
(8, 'Tác giả Hoàng Nam Tiến'),
(9, 'Tác giả Rasmus Hoài Nam'),
(10, 'Tác giả Bino Chém Tiếng Anh');

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int(11) NOT NULL,
  `ten_theloai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id`, `ten_theloai`) VALUES
(1, 'Văn Học'),
(2, 'Kinh Tế'),
(3, 'Kỹ Năng Sống'),
(4, 'Thiếu Nhi'),
(5, 'Tâm Lý - Tình Cảm'),
(6, 'Khoa Học'),
(7, 'Giáo Khoa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mat_khau` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ho_ten`, `sdt`, `username`, `mat_khau`, `email`, `vai_tro`) VALUES
(1, 'Nguyen An', '0901234567', 'nguyenan', 'password1', 'an.nguyen@example.co', '0'),
(2, 'Tran Binh', '0902345678', 'tranbinh', 'password2', 'binh.tran@example.co', '0'),
(3, 'Le Cuong', '0903456789', 'lecuong', 'password3', 'cuong.le@example.com', '0'),
(4, 'Pham Dung', '0904567890', 'phamdung', 'password4', 'dung.pham@example.co', '0'),
(5, 'Vo Hoa', '0905678901', 'vohoa', 'password5', 'hoa.vo@example.com', '0'),
(6, 'Ho Khanh', '0906789012', 'hokhanh', 'password6', 'khanh.ho@example.com', '0'),
(7, 'Dang Lam', '0907890123', 'danglam', 'password7', 'lam.dang@example.com', '0'),
(8, 'Ngo Minh', '0908901234', 'ngominh', 'password8', 'minh.ngo@example.com', '0'),
(9, 'Do Ngan', '0909012345', 'dongan', 'password9', 'ngan.do@example.com', '0'),
(10, 'Ly Quynh', '0909123456', 'lyquynh', 'password10', 'quynh.ly@example.com', '0'),
(11, 'Thuỷ Tiên', '0389330759', 'Tieenz', 'Thuytien965002@', 'hiu800hu@gmail.com', '2'),
(15, 'Thuỷ Tiên', '0389330759', 'Tieenz965', '$2y$10$jTefZUjGbR1pdMaiWxs.ruBLEpVSKYba.OhcYvhgdxci8OWSlmRLG', 'thuytien.hoctap@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donhang` (`id_donhang`),
  ADD KEY `id_sach` (`id_sach`);

--
-- Indexes for table `detail_image`
--
ALTER TABLE `detail_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sach` (`id_sach`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_theloai` (`id_theloai`),
  ADD KEY `id_tacgia` (`id_tacgia`),
  ADD KEY `id_nxb` (`id_nxb`);

--
-- Indexes for table `tac_gia`
--
ALTER TABLE `tac_gia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `detail_image`
--
ALTER TABLE `detail_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tac_gia`
--
ALTER TABLE `tac_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id`),
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`);

--
-- Constraints for table `detail_image`
--
ALTER TABLE `detail_image`
  ADD CONSTRAINT `detail_image_ibfk_1` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `user` (`id`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`id_theloai`) REFERENCES `the_loai` (`id`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`id_tacgia`) REFERENCES `tac_gia` (`id`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`id_nxb`) REFERENCES `nha_xuat_ban` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
