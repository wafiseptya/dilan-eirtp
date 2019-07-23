-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 10:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dilan_eirtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `image`) VALUES
(1, 'DILAN E-IRTP ADALAH SEBUAH SISTEM LAYANAN PUBLIK YANG DIKEMBANGKAN PEMERINTAH KOTA YOGYAKARTA. DILAN E-IRTP ATAU DIGITALISASI LAYANAN SERTIFIKASI INDUSTRI RUMAH TANGGA PANGAN MERUPAKAN INOVASI LAYANAN PROSES PERMOHONAN SERTIFIKASI INDUSTRI RUMAH TANGGA UNTUK KATEGORI PANGAN YANG DITUJUKKAN UNTUK UMKM DI KOTA YOGYAKARTA DIBAWAH PENGELOLAAN DINAS KESEHATAN', 'about5d22c64f40905.png');

-- --------------------------------------------------------

--
-- Table structure for table `advantage`
--

CREATE TABLE `advantage` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advantage`
--

INSERT INTO `advantage` (`id`, `title`, `description`, `image`) VALUES
(10, 'Legalitas Produk', 'Produk pangan yang diproduksi sudah siap dan layak untuk beredar dipasaran.', 'advantage5d22c92a5b24c.png'),
(11, 'Produk Diakui & Terpercaya', 'Para konsumen akan lebih percaya dengan Produk', 'advantage5d2c4400db379.png'),
(12, 'Produk Bisa Masuk Ritel Besar', 'Produk bisa menembus pasar yang lebih berkelas yaitu masuk ritel-ritel besar.', 'advantage5d2c44e5907eb.png'),
(13, 'Meningkatkan Nilai Jual Produk', 'Meningkatkan nilai jual produk dimata konsumen', 'advantage5d2c45ecdd804.png'),
(14, 'Pendampingan Tanaga Ahli', 'Dibantu pendampingan untuk meningkatkan kapasitas', 'advantage5d2c4602ac2b5.png'),
(15, 'Dibantu Promosi', 'Direkomendasikan dan Dibantu Promosi di berbagai marketplace', 'advantage5d2c49aa394e6.png');

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `category` varchar(191) NOT NULL,
  `venue` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `title`, `start_time`, `end_time`, `category`, `venue`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Penyuluhan Keamanan Pangan PIRT Bulan Juli 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan', 'Dinas Kesehatan Yogyakarta', '2019-07-23', '2019-07-02 08:37:56', '2019-07-02 08:37:56'),
(2, 'Penyuluhan Keamanan Pangan PIRT Bulan Agustus 2019', '08:00:00', '17:00:00', 'Penyuluhan Keamanan Pangan di Yogyakarta', 'Dinas Kesehatan Yogyakarta', '2019-08-20', '2019-07-05 04:42:06', '2019-07-05 04:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `telp` varchar(191) NOT NULL,
  `fax` varchar(191) NOT NULL,
  `whatsapp` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `location` text NOT NULL,
  `apps` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `address`, `telp`, `fax`, `whatsapp`, `email`, `location`, `apps`) VALUES
(1, 'Jalan Kenari No.56 Kota Yogyakarta (Komplek Balaikota Yogyakarta) Kodepos 55165', '(0274) 515869', '(0274) 515868', '0-823-1404-0407', 'regulasi.dinkesyk@gmail.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.61682429466!2d110.390419!3d-7.799966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e4bc5c6b6a26619!2sDinas+Kesehatan+Kota+Yogyakarta!5e0!3m2!1sid!2sid!4v1563183340527!5m2!1sid!2sid\" width=\"100%\" height=\"150\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'https://play.google.com/store/apps/details?id=id.go.jogjakota.jogjasmartservice');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `description` varchar(191) NOT NULL,
  `category` smallint(6) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Slide-1', 1, 'header5d19a9cfeb10a.jpg', '2019-07-01 06:35:59', '2019-07-01 06:35:59'),
(2, 'Slide-2', 1, 'header5d19a9df68cfe.jpg', '2019-07-01 06:36:15', '2019-07-01 06:36:15'),
(3, 'Banner Android Apps', 2, 'header5d2c39e61a511.jpg', '2019-07-15 08:31:34', '2019-07-15 08:31:34'),
(4, 'Daftar Pelatihan', 3, 'header5d2c3fe541639.png', '2019-07-15 08:57:09', '2019-07-15 08:57:09'),
(5, 'Daftar NIB', 3, 'header5d2c3ffaabbe5.png', '2019-07-15 08:57:30', '2019-07-15 08:57:30'),
(6, 'Daftar IRTP', 3, 'header5d2c400b359c4.png', '2019-07-15 08:57:47', '2019-07-15 08:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `name`, `image`, `category`, `url`, `created_at`, `updated_at`) VALUES
(5, 'Gandeng Gendong', 'mitra5d1eee7a3c420.png', 'Marketplace', 'https://dodolan.jogjakota.go.id/', '2019-07-05 06:30:18', '2019-07-05 06:30:18'),
(6, 'Badan POM RI', 'mitra5d1eee954e3c9.png', 'Sertifikasi', 'https://e-reg.pom.go.id/', '2019-07-05 06:30:45', '2019-07-05 06:30:45'),
(7, 'Direktorat Jenderal Kekayaan Intelektual', 'mitra5d1eeed22e1b4.png', 'Sertifikasi', 'http://www.dgip.go.id/', '2019-07-05 06:31:46', '2019-07-05 06:31:46'),
(8, 'Majelis Ulama Indonesia', 'mitra5d1eef0e68598.png', 'Sertifikasi', 'https://e-lppommui.org/new/', '2019-07-05 06:32:46', '2019-07-05 06:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(191) DEFAULT 'Admin',
  `title` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `author`, `title`, `content`, `banner`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT', '<p>Pemerintah Kota Yogyakarta melalui Dinas Kesehatan terus mendorong Usaha Mikro Kecil Menengah khususnya yang bergerak di bidang kuliner untuk memiliki Izin Pangan Industri Rumah Tangga (P-IRT).</p><p>Langkah tersebut dilakukan salah satunya dengan menggelar penyuluhan keamanan pangan Pangan Industri Rumah Tangga (PIRT). Para pelaku juga disosialisasikan prosedur mengurus P-IRT oleh Dinas Kesehatan.</p><p>Wakil Waliota Yogyakarta Heroe Poerwadi pun mengapresiasi langkah tersebut, Ia menilai Yogyakarta memiliki potensi pasar kuliner yang cukup besar. Dengan kondisi itu, Ia meminta para pelkau UMKM untuk bisa mengambil keuntungan.\\</p><p>“Industri kuliner atau makanan telah menjadi salah satu pilar penyumbang PDRB Kota Yogyakarta. Berbagai kuliner baik yang tradisonal maupun modern ada dan tersaji di Kota Yogyakarta,” ucap Heroe Poerwadi dalam Pelatiahan Sertifikat Industri Rumah tangga Pangan di RS Pratama Yogyakarta, Rabu (24/4/2109).</p><p>Sebagai Kota tujuan wisata dengan ragam kuliner maka, menurutnya, pelatihan standardisasi pengolahan pangan atau yang sering di sebut PIRT merupakan suatu keharusan mengingat wisatawan yang berkunjung dan berbelanja di Kota Yogyakarta membutuhkan kepastian bahwa produk olahan pangan yang dibeli telah memenuhi standar &nbsp;kualitas produk, standar kesehatan produk, dan halal serta kemasan yang baik.</p><p>“Dari pelatihan yang telah diselenggarakan yang ke sekian kali ini, membuktikan bahwa Pemerintah Kota Yogyakarta peduli dan memprioritaskan program yang berpihak pada pelaku&nbsp; industri olahan pangan berbasis rumah tangga,” ucapnya.</p><p>Selain itu, masih kata Heroe, juga sebagai upaya untuk membangun branding Kota Yogyakarta sebagai destinasi wisata kuliner yang berkualitas, sehat dan halal.</p><p>Berdasarkan data yang diperolehnya dari pihak penyelenggara layanan belanja hantaran kuliner, bahwa belanja kuliner di Yogyakarta bisa sampai milyaran dalam sebulan dengan pelaku usaha sekitar 6000 pengusaha, bahkan untuk ranking pertama bisa meraup Rp.450 juta sebulan melalui layanan hantaran makanan berbasis online.</p><p>“Angka tersebut belum termasuk pelanggan yang langsung beli ke tempat tersebut. Manisnya potensi pasar kuliner tersebut bias juga dunikmati para pelaku industri olahan pangan rumah tangga sepanjang mampu memenuhi standar mutu dan layanan,” tandasnya.</p><p>Lebih lanjut Heroe menuturkan, Pemerintah Kota Yogyakarta juga memiliki Jogja Smart Service yang di dalamnya terdapat konten Dodolan dan Nglarisi, dari konten tersebut diharapakan pelaku UMKM di Kota Yogyakarta dapat melakukan promosi dan penjualan produknya.</p><p>“Selain itu melalui program gandeng gendong Pemerintah Kota Yogyakarta juga memiliki program fasilitasi dan pemberdayaan melalui program pembelian produk olahan pangan warga Kota Yogyakarta melalui APBD yang berkisar pada angka 38 milyar tiap tahun,” terangnya.</p><p>Kepala Dinas Kesehatan Kota Yogyakarta, Fita Yulia Kisworini menambahkan, bahwa pelatihan ini merupakan program rutin Dinas Kesehatan sebagai upaya untuk meningkatkan kualitas produk dari mulai pemilihan bahan baku, cara mengolah yang hygenis, cara menyajikan dan kemasan yang memenuhi standar mutu.</p><p>“Dengan terpenuhinya standar mutu produksi maka produk makanan olahan akan aman untuk dikonsumsi dan halal. Pencantuman PIRT dan halal dalam sebuah produk olahan akan memberikan rasa aman bagi pelanggan dan mampu bersaing di pasar,” tandasnya. (Oni)</p>', 'news-5d36c1693cf1a.jpeg', '2019-07-23 08:12:25', NULL),
(2, 1, 'Admin', '50 Peserta Mengikuti Penyuluhan Keamanan Pangan PKP-PIRT di Balaikota Yogyakarta', '<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu dan keamanan pangan , Rabu (6/3/2019) di gedung Dinas Perizinan. Puluhan pelaku usaha baru atau Industri Rumah Tangga Pangan (IRTP)&nbsp;mengikuti penyuluhan keamanan pangan dalam rangka sertifikasi produk pangan industri rumah tangga di Ruang Arjuna, Balaikota Yogyakarta.</p><p>Penyuluhan ini membicarakan tentang keamanan pangan produk olahan pangan yang merupakan program rutin yang dilakukan oleh Dinkes Kota Yogyakarta. Setidaknya penyuluhan diikuti oleh kurang lebih 50 sampai 60 perserta yang terdiri dari IRTP baru yang mulai atau merintis usahanya.</p><p>Melalui Pasal 43 Peraturan Pemerintah No. 28 Tahun 2004 tentang keamanan, mutu dan Gizi Pangan mengamati bahwa pangan olahan yang di produksi pangan industri rumah tangga wajib memiliki Sertifikat Produksi Pangan Industri Rumah Tangga (SPP-IRT).</p><p>Penyuluhan tersebut merupakan tahapan dari pengajuan sertifikasi produk pangan industri rumah tangga (PIRT) yang harus dimiliki oleh setiap industri kecil rumah tangga. Setelah mengikuti penyuluhan, maka peserta akan mendapatkan kode dan sertifikat PIRT yang berlaku selama lima tahun.</p><p>Wakil Walikota Yogyakarta, Heroe Poerwadi berharap dengan dilakukan penyuluhan ini dapat meningkatkan pengetahuan produsen pangan industri rumah tangga. “Saya berharap dengan dilakukan penyuluhan ini dapat meningkatkan pengetahuan produsen pangan industri rumah tangga agar semakin maju” ujarnya.</p><p>Kegiatan tersebut dihadiri oleh pemilik perorangan atau penanggung jawab PP-IRT yang belum pernah dan sudah pernah mengikuti penyuluhan Keamanan Pangan (PKP).</p><p>Heroe Poerwadi menambahkan, pelaku usaha nantinnya bisa memasarkan produknnya lebih luas , tidak hanya bergantung dengan pesanan yang ada di Balaikota saja, namun juga mampu memasarkan produknnya melalui&nbsp;aplikasi&nbsp;JSS (Jogja Smart Service)&nbsp;yang dinamakan “Dodolan”&nbsp;sehingga mampu meningkatkan penjualan produk yang diolahnnya.</p><p>Menurut undang-undang Nomor 36 Tahun 2019 tentang Kesehatan dalam pasal 111 ayat (1) menyatakan bahwa makan dan minuman yang digunakan masyarakat harus berdasarkan pada standart dan persyaratan kesehatan.</p><p>Mengingat hal tersebut maka setiap perusahaan mengetahui dan mematuhi peraturan perundang-undangan di bidang pangan.&nbsp;Heroe Poerwadi, menyatakan terima kasih kepada para pelaku UMKM/Industri Rumah yang telah mempunyai kesadaran dengan mengikuti pelatihan tersebut.</p><p>Ia berharap fasilitas PIRT bisa mensupport usaha masyarakat dan dapat dimanfaatkan dengan baik oleh masyarakat.&nbsp;“Sebab bisnis sektor makanan akan mendapatkan profit yang maksimal jika kita pintar dalam mengelola serta tidak berhenti berinovasi serta menyesuaikan packaging yang menarik dan aman” ujarnya.</p><p>Kegiatan ini diharapkan menjadi upaya masyarakat dan perusahaan senantiasa menjaga pangan dan mutu kualitas pangan serta mampu meningkatkan perekonomian masyarakat di Kota Yogyakarta. (Hes/Mil)</p>', 'news-5d36c3a21078a.jpg', '2019-07-23 08:21:54', NULL),
(3, 1, 'Admin', 'Dinkes Kota Yogyakarta Berikan Penyuluhan Peningkatan Mutu dan Keamanan Pangan', '<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu dan keamanan pangan , Selasa (25/9). Puluhan pelaku usaha baru atau Industri Rumah Tangga Pangan (IRTP)&nbsp;mengikuti penyuluhan keamanan pangan dalam rangka sertifikai produk pangan industri rumah tangga di Ruang Arjuna Balaikota Yogyakarta.</p><p>Penyuluh tentang keamanan pangan produk olahan pangan merupakan program rutin yang dilakukan oleh Dinkes Kota Yogya. Setiap kali penyuluhan diikuti oleh 60 sampai 70 perserta yang terdiri dari IRTP baru yang mulai atau merintis usahanya.</p><p>Melalui Pasal 43 Peraturan Pemerintah No. 28 Tahun 2004 tentang keamanan, mutu dan Gizi Pangan mengamati bahwa pangan olahan yang di produksi pangan industri rumah tangga wajib memiliki Sertifikat Produksi Pangan Industri Rumah Tangga (SPP-IRT).</p><p>Penyuluhan tersebut merupakan tahapan dari pengajuan sertifikasi produk pangan industri rumah tangga (PIRT) yang harus dimiliki oleh setiap industri kecil rumah tangga. Setelah mengikuti penyuluhan, maka peserta akan mendapatkan kode dan sertifikat PIRT yang berlaku selama lima tahun.</p><p>Kegiatan tersebut dihadiri oleh orang pemilik atau penanggung jawab PP-IRT yang belum pernah dan sudah pernah mengikuti penyuluhan Keamanan pangan (PKP).</p><p>Menurut undang-undang Nomor 36 Tahun 2019 tentang Kesehatan dalam pasal 111 ayat (1) menyatakan bahwa makan dan minuman yang digunakan masyarakat harus berdasarkan pada standart dan persyaratan kesehatan.</p><p>Wakil Walikota Yogyakarta, Heroe Poerwadi berharap dengan dilakukan penyuluhan ini dapat meningkatkan pengetahuan produsen pangan industri rumah tangga.</p><p>“saya berharap dengan dilakukan penyuluhan ini dapat meningkatkan pengetahuan produsen pangan industri rumah tangga agar semakin maju” ujarnya.</p><p>Heroe Poerwadi menambahkan, sehingga mampu menghasilkan produk pangan bermutu dan aman bagi masyarakat.</p><p>Mengingat hal tersebut maka setiap perusahaan mengetahui dan mematuhi peraturan perundang-undangan di bidang pangan.</p><p>Heroe Poerwadi, menyatakan terima kasih kepada para pelaku UMKM/Industri Rumah yang telah mempunyai kesadaran dengan mengikuti pelatihan tersebut.&nbsp;Ia berharap fasilitas PIRT bisa mensupport usaha masyarakat dan dapat dimanfaatkan dengan baik oleh masyarakat.</p><p>“Sebab bisnis sektor makanan akan mendapatkan profit yang maksimal jika kita pintar dalam mengelola serta tidak berhenti berinovasi” ujarnya.</p><p>Kegiatan ini diharapkan menjadi upaya masyarakat dan perusahaan senantiasa menjaga pangan dan mutu kualitas pangan.(warta.jogjakota.go.id)</p><p><br>&nbsp;</p>', 'news-5d36c3d0f1cf2.jpg', '2019-07-23 08:22:41', NULL),
(4, 2, 'Admin', 'Test Tips', '<p>Lorem ipsum</p>', 'news-5d36c952bc132.jpeg', '2019-07-23 08:46:10', NULL),
(5, 1, 'Admin', 'Dinkes Kota Yogyakarta Berikan Penyuluhan Keamanan Pangan PIRT', '<p>Dinas Kesehatan (Dinkes) Kota Yogya memberikan penyuluhan tentang keamanan pangan kepada puluhan pelaku usaha baru atau Industri Rumah Tangga Pangan (IRTP) di Aula Kantor Kecamatan Tegalrejo, Selasa (3/7). Penyuluhan keamanan pangan ini dalam rangka sertifikasi produk pangan idustri rumah tangga.</p><p>Kepala Dinkes Kota Yogya, Fita Yulia Kisworini mengatakan jika penyuluh tentang keamanan pangan produk olahan pangan merupakan program rutin yang dilakukan oleh Dinkes Kota Yogya. Setiap kali penyuluhan diikuti oleh 60 sampai 70 perserta yang terdiri dari IRTP baru yang mulai atau merintis usahanya.</p><p>“Kegiatan penyuluhan ini bukti hadirnya pemerintah dalam menjamin keamanan pangan di masyarakat,” katanya.</p><p>Penyuluhan tersebut merupakan tahapan dari pengajuan sertifikasi produk pangan industri rumah tangga (PIRT) yang harus dimiliki oleh setiap industri kecil rumah tangga. Setelah mengikuti penyuluhan, maka peserta akan mendapatkan kode dan sertifikat PIRT yang berlaku selama lima tahun.</p><p>“Ada dua aspek penting PIRT yakni untuk legalitas dan pemasaran,” katanya.</p><p>Ia mengatakan dengan memiliki PIRT, pelaku usaha memiliki legalitas bahwa produknya telah terjamin kualitas keamanan pangannya, sehingga aman dan sehat bagi masyarakat.</p><p>“Dengan PIRT pelaku usaha dapat memperluas jangkauan pemasarannya, tidak lagi skala rumahan tapi juga bisa merambah super market bahkan eksport,” katanya.</p><p>Adapun materi penyuluhan yang diberikan kepada peserta yakni tentang kebijakan PIRT di Kota Yogya, peraturan perundang-undangan tentang pangan, cara memproduksi pangan yang baik untuk IRTP, standar operasi prosedur sanitasi, tata cara pemeriksaan sarana.</p><p>“Selain itu juga disampaikan materi mengenai pelabelan dan iklan pangan, penggunaan bahan tambahan pangan, mutu dan keamanan pangan, penjelasan mengenai sertifikasi halal, serta etika bisnis dan pembinaan jaringan bisnis IRTP” katanya.</p><p>Sementara Wakil Walikota Yogyakarta, Heroe Poerwadi, menyatakan terima kasih kepada para pelaku UMKM/Industri Rumah yang telah mempunyai kesadaran dengan mengikuti pelatihan tersebut.</p><p>Ia berharap fasilitas PIRT bisa mensupport usaha masyarakat dan dapat dimanfaatkan dengan baik oleh masyarakat.</p><p>“Sebab bisnis sektor makanan akan mendapatkan profit yang maksimal jika kita pintar dalam mengelola serta tidak berhenti berinovasi” ujarnya.</p><p>Menurutnya dengan standarisasi pangan sesuai kaidah yang berlaku tidak saja memberikan manfaat kesehatan bagi konsumen.</p><p>“Marilah kita bersama-sama memberikan kontribusi dalam upaya meningkatkan derajat kesehatan masyarakat melalui makanan yang sehat, higienis, aman dan menyehatkan, yang merupakan bagian integral dari upaya pembangunan kesehatan di Indonesia” ucapnya. &nbsp;(Han)</p>', 'news-5d36ca0603560.jpg', '2019-07-23 08:49:10', NULL),
(6, 1, 'Admin', '100 pelaku UKM di sepanjang Winongo dapatkan P-IRT Gratis', '<p>Pemkot Yogyakarta melalui Dinas kesehatan menyelenggarakan Penyuluhan Keamanan Pangan di Kecamatan Tegalrejo Yogya pada hari senin (5/3). Penyuluhan&nbsp;diikuti oleh 100 peserta&nbsp;yang berada di sekitar kawasan Kali Winongo.</p><p>Kegiatan ini adalah salah satu rangkaian kegiatan di tahun 2018. Dalam pelaksanaannya ditujukan untuk pendekatan dan mencegah atau menjamin keamanan bahan pangan dengan baik. Pelatihan ini memberikan peluang bagi sumber daya manusia (SDM) agar memperoleh produk pangan yang bermutu dan aman, bahkan bisa dikembangkan menjadi UMKM.</p><p>Diperlukannya suatu penyuluhan bahan pangan untuk melindungi kesehatan masyarakat dan peningkatan kesejahteraan. Kegiatan ini juga berisi landasan hukum bagi pengaturan, pembinaan dan pengawasan terhadap kegiatan produksi, peredaran dan perdagangan pangan.</p><p>Dalam undang-undang nomor 36 tahun 2009 tentang kesehatan pengamanan makanan dan minuman,&nbsp; produk yang diproduksi harus menjamin agar aman bagi masyarakat yang menikmati makanan tersebut.</p><p>Wakil Walikota Heroe Poerwadi mengatakan penyuluhan ini diharapkan bagi pembuat dan masyarakat bisa memilih, mengolah dan menyuguhkan makanan yang sehat dan aman untuk dikonsumsi oleh masyarakat.</p><p>“diharapkan supaya penjualan secara legal, agar bapak ibu nanti terpenuhi standar makanan, cara mengolah, dan mengelola lingkungan. Agar yang di makan dan diolah makanannya menyehatkan” ucapnya.</p><p>Pembuatan bahan dan kemasan pangan yang tepat mampu mewadahi dan melindungi pangan dengan baik. Selain bahan dan kemasan dalam memproduksi dan mempromosikan produk dibutuhkan penampilan pada kemasan yang menarik serta dalam lebel yaitu Pangan Industri Rumah Tangga (P-IRT) harus memenuhi peraturan yang berlaku.</p><p>Heroe Poerwadi menegaskan dalam proses kegiatan ini didukung bagi semua yang terlibat dan mampu mengembangkan kualitas pangan didaerahnya.</p><p>“saya berharap nanti semua yang kita lakukan mendapatkan dukungan oleh semuanya, semakin lama semakin bagus kualitasnya” katanya. (Hes)</p>', 'news-5d36ca3760346.jpg', '2019-07-23 08:49:59', NULL),
(7, 1, 'Admin', 'Dinkes Gencar Beri Penyuluhan Untuk Para Industri Rumah Tangga', '<p>Pemenuhan pangan yang aman dan bermutu merupakan Hak Asasi setiap manusia, tidak terkecuali pangan yang dihasilkan oleh Industri Rumah Tangga Pangan (IRTP). Untuk meningkatkan kesadaran dan motivasi produsen IRTP tentang pentingnya pengolahan pangan yang hygienis, Dinas Kesehatan (Dinkes) Kota Yogya secara rutin mengadakan Sosialisasi Keamana pangan dan pentingnya sertifikat Pangan Industri Rumah Tangga (P-IRT).</p><p>Kepala Seksi regulasi kesehatan Dinkes Kota Yogya, Waryono, mengatakan penyuluhan ini sangat perlu sekali dilakukan kepada seluruh pelaku usaha pangan. “Hal itu demi keamanan pangan yang akan diterima oleh masyarakat” tandasnya di balaikota, Rabu (24/8).</p><p>Ditegaskannya, sertifikasi atau izin P-IRT sangat penting untuk menjamin keamanan pangan terhadap konsumen dari bahan tambahan makanan yang berbahaya.</p><p>“Bagi para pengusaha IRT, kepemilikan Nomor Register P-IRT dalam kemasan produk setidaknya memberikan jaminan atau kepercayaan bagi calon konsumen tentang produk yang ditawarkan,” tegasnya</p><p>Ia menjelaskan, pihaknya tengah gencar menyosialisasikan informasi sertifikasi IRT guna optimalisasi layanan pendaftaran produk untuk dapat izin P-IRT.</p><p>Menurutnya banyaknya produk pangan lokal yang beredar di tengah masyarakat, harus diimbangi dengan memperhatikan kebersihan, dan kesehatan.</p><p>“Untuk itu kami berupaya mengantisipasi beredarnya pangan lokal yang diproduksi industri rumah tangga agar memenuhi standar mutu kesehatan” ujarnya.</p><p>Ia menambahkan seluruh proses pengajuan dari pendafataran sampai pengajuan izin P-IRT dilaksanakan secara gratis oleh Dinkes Kota Yogya. Selanjutnya, pengusaha dapat menggunakan sertifikat P-IRT di seluruh Indonesia.</p><p>“Cara mendapatkan izin P-IRT dengan melakukan permohonan kepada Dinkes Kota Yogya, kemudian nanti akan diperiksa kelengkapan berkasnya. Jika masih ada yang kurang kami akan kembalikan kepada pemohon untuk diperbaiki terlebih dahulu,” jelasnya.</p><p>Setelah semua memenuhi persyaratan, lanjutnya, maka pemohon akan diwajibkan mengikuti penyuluhan keamanan pangan, dan diperiksa sarananya.</p><p>”Jika semua sudah memenuhi persyaratan, maka surat izin P-IRT tersebut akan keluar,” paparnya.</p><p>Pemohon sertifikasi, katan Waryono, wajib melalui proses penyuluhan keamanan pangan, dimaksudkan agar pengusaha memahami untuk tetap menjaga pangan agar tetap aman, higienis, bermutu, bergizi, dan tidak bertentangan dengan agama, keyakinan dan budaya setempat.</p><p>“Nantinya, sertifikat ini bisa seperti ijazah, berlaku diseluruh Indonesia. Untuk masyarakat yang ingin mengajukan P-IRT, tidak dikenakan biaya apapun di Dinkes Kota Yogya, Tak perlu menyuruh orang atau makelar. Berlaku untuk seluruh indonesia, dan berlaku selamanya,” ujar nya.</p><p>Ia berharap pelatihan tersebut ini dapat diserap, diketahui, dilaksanakan dan ditularkan kepada P-IRT di sekitarnya, sehingga kuliner kita menjadi lebih kuat dan dapat menyokong pariwisata di Kota Yogyakarta.</p>', 'news-5d36ca5b1787a.jpg', '2019-07-23 08:50:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_title` varchar(191) NOT NULL,
  `cat_description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `cat_title`, `cat_description`) VALUES
(1, 'Berita', 'Artikel berita'),
(2, 'Tips', 'Artikel tips'),
(3, 'Artikel', 'Artikel');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `year` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `value`, `year`) VALUES
(1, 78, '2019'),
(2, 23, '2019'),
(3, 593, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `statistik_jumlah`
--

CREATE TABLE `statistik_jumlah` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `category` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik_jumlah`
--

INSERT INTO `statistik_jumlah` (`id`, `date`, `value`, `category`) VALUES
(2, '2018-11-00', 5, 1),
(3, '2018-12-00', 12, 1),
(5, '2018-12-00', 7, 2),
(6, '2019-02-00', 6, 2),
(7, '2019-01-00', 8, 1),
(8, '2019-02-00', 7, 1),
(9, '2019-03-00', 5, 1),
(10, '2019-01-00', 9, 2),
(11, '2018-11-00', 4, 2),
(13, '2019-03-00', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$qlVbkCI3Sib6euNB.pv51OJJ1IU0oV2OAnGRpzM8X2QzUMlnJSWLq', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1563869308, 1, 'Admin', 'istrator Account', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1),
(4, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advantage`
--
ALTER TABLE `advantage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE;

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik_jumlah`
--
ALTER TABLE `statistik_jumlah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advantage`
--
ALTER TABLE `advantage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistik_jumlah`
--
ALTER TABLE `statistik_jumlah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `news_category` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
