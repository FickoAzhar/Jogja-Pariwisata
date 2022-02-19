-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 06:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(5, 'fiko', '$2y$10$3/.opkTXJ0VPp57RjiI/CeC8zTf/2/MsKd6QND0ERZ3'),
(6, 'fickid', '$2y$10$TnbGeH1cEIElAYVoP337Cevp4pCWSVA3pT8y7/pAs3y'),
(10, 'alfi', '$2y$10$m231IHr7eK1QGe9O9xQv.e1Uzn2ecwm6tkGOWdaOP9rF0YguRKc3e'),
(11, 'laras', '$2y$10$JBzD9CKD.tuGLWq3.V9JSOD1OcxQksHXKuHPrnGPtciYVZwxJ7N3C'),
(12, 'nuy', '$2y$10$E4yXy5FoEdpPynZVu5KDc.Y.WkBqbB1LYAWxK8THAq9/e1nT20Pji');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akomodasi`
--

CREATE TABLE `tb_akomodasi` (
  `id` int(12) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `artikel` longtext NOT NULL,
  `lokasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akomodasi`
--

INSERT INTO `tb_akomodasi` (`id`, `nama`, `gambar`, `artikel`, `lokasi`) VALUES
(2, 'Hotel Tentrem Yogyakarta', '602e738d7f138.jpg', 'Alamat: Jl. P. Mangkubumi No.72A, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233\r\nTelepon: (0274) 6415555', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.150983639704!2d110.3662888143263!3d-7.773809979272112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58485d4d2de1%3A0x59986450d810f006!2sHotel%20Tentrem%20Yogyakarta!5e0!3m2!1sid!2sid!4v1613656959222!5m2!1sid!2sid'),
(4, 'Royal Ambarrukmo Yogyakarta', '602e73e0b819b.jpg', 'Jl. Laksda Adisucipto No.81, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281\r\n(0274) 488488', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.06592551323!2d110.40061131432637!3d-7.782835179380118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59e82583c5f9%3A0x8decbfc296a4eef2!2sRoyal%20Ambarrukmo%20Yogyakarta!5e0!3m2!1sid!2sid!4v1613657043037!5m2!1sid!2sid'),
(5, 'Gaia Cosmo Hotel', '602e721c73d13.jpg', 'Jl. Ipda Tut Harsono No.16, Muja Muju, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165\r\n(0274) 5307777', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9138868051664!2d110.3907354143266!3d-7.798941579573204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5763615c8987%3A0x1bcc5faf6f27b644!2sGaia%20Cosmo%20Hotel!5e0!3m2!1sid!2sid!4v1613656576646!5m2!1sid!2sid'),
(6, 'Grand Mercure Yogyakarta', '602e7439ddf5b.jpg', 'Jl. Laksda Adisucipto No.80, Demangan Baru, Caturtunggal, Sleman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55281\r\n(0274) 2924000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0573579082625!2d110.39026471432635!3d-7.783743679391011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c53e8f9e4f%3A0x428ec2bf72c50217!2sGrand%20Mercure%20Yogyakarta!5e0!3m2!1sid!2sid!4v1613657132870!5m2!1sid!2sid'),
(7, 'Hotel Harper Malioboro', '602e747b13cad.jpg', 'Jl. P. Mangkubumi No.52, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232\r\n(0274) 2920008', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0478111904013!2d110.36504131432638!3d-7.784755879403121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58300c106aa1%3A0xcbf872b8a6bb84a1!2sHotel%20Harper%20Malioboro!5e0!3m2!1sid!2sid!4v1613657199472!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_destinasi`
--

CREATE TABLE `tb_destinasi` (
  `id` int(12) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `artikel` longtext NOT NULL,
  `lokasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_destinasi`
--

INSERT INTO `tb_destinasi` (`id`, `judul`, `gambar`, `artikel`, `lokasi`) VALUES
(16, 'Jalan Malioboro', '602e6afa272a5.jpg', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Secara keseluruhan terdiri dari Jalan Margo Utomo, Jalan Malioboro, dan Jalan Margo Mulyo. Jalan ini merupakan poros Garis Imajiner Kraton Yogyakarta.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9734976280884!2d110.36368561432651!3d-7.792630579497509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5825fa6106c5%3A0x3ea4c521a5ed1133!2sJl.%20Malioboro%2C%20Sosromenduran%2C%20Gedong%20Tengen%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1613654712827!5m2!1sid!2sid'),
(19, 'Taman Sari', '602e6b88b53fa.jpg', 'Taman Sari Yogyakarta atau Taman Sari Keraton Yogyakarta adalah situs bekas taman atau kebun istana Keraton Ngayogyakarta Hadiningrat, yang dapat dibandingkan dengan Kebun Raya Bogor sebagai kebun Istana Bogor. Kebun ini dibangun pada zaman Sultan Hamengku Buwono I pada tahun 1758-1765/9. Jam buka 09.00 – 15.00.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8087318809576!2d110.35726941432655!3d-7.810061979706803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5793d0c2cf2b%3A0x276a21f8a01cbe13!2sKampung%20Wisata%20Taman%20Sari!5e0!3m2!1sid!2sid!4v1613654900351!5m2!1sid!2sid'),
(20, 'Keraton Yogyakarta', '602e6bd89b914.jpg', 'Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta, Daerah Istimewa Yogyakarta, Indonesia.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.853976468344!2d110.36201441432667!3d-7.805279179649338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5796db06c7ef%3A0x395271cf052b276c!2sKeraton%20Yogyakarta!5e0!3m2!1sid!2sid!4v1613654985224!5m2!1sid!2sid'),
(21, 'Pantai Indrayanti', '602e6c313b55e.jpg', 'Pesona laut dan langit yang biru, pasir putih yang bersih, ditambah dengan fasilitas penunjang yang lengkap membuat pantai ini menjadi destinasi pantai yang wajib dikunjungi wisatawan. HTM 10.000 per orang.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.514181861078!2d110.61079651433049!3d-8.150836183897388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bba2bc08969f7%3A0x6df3fa2309bb186a!2sPulang%20Sawal!5e0!3m2!1sid!2sid!4v1613655072797!5m2!1sid!2sid'),
(22, 'Goa Jomblang', '602e6c8ab6d50.jpg', 'Gua Jomblang merupakan gua vertikal yang bertipe collapse doline. Gua ini terbentuk akibat proses geologi amblasnya tanah beserta vegetasi yang ada di atasnya ke dasar bumi yang terjadi ribuan tahun lalu. Runtuhan ini membentuk sinkhole atau sumuran yang dalam bahasa Jawa dikenal dengan istilah luweng. Buka jam 09.00 – 14.00.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.7163848362343!2d110.63614201432911!3d-8.028150882366958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb41fce34d717%3A0xf9ffcb6f9fbd5cce!2sGoa%20Jomblang!5e0!3m2!1sid!2sid!4v1613655158983!5m2!1sid!2sid'),
(25, 'Candi Prambanan', '602e6d37dcf8a.jpg', 'Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wisnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3559836610148!2d110.48927871432598!3d-7.752015279011824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ae3dbd859d1%3A0x19e7a03b25955a2d!2sCandi%20Prambanan!5e0!3m2!1sid!2sid!4v1613655247656!5m2!1sid!2sid'),
(26, 'Pantai Parangtritis', '602e6fd4394ec.jpg', 'Pantai Parangtritis hanya 27 km dari pusat Kota Jogja dan terkenal memiliki pemandangan sunset yang romantis. Naik bendi menyusuri Pantai Parangtritis sore hari akan menjadi kenangan yang manis. HTM hari biasa 7.000 dan hari libur 10.000.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15802.97339044298!2d110.32001656991388!3d-8.025377959889408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00975eac533d%3A0x351bfe1453e22e36!2sPantai%20Parangtritis!5e0!3m2!1sid!2sid!4v1613655580623!5m2!1sid!2sid'),
(30, 'Bungker Kaliadem', '602e705080f1a.jpg', 'Bungker beton terbengkalai dengan panorama gunung Merapi aktif, bisa dicapai melalui jalan tanah bergelombang.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.927099214065!2d110.44549291432405!3d-7.582914477018353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a66afbed3ead3%3A0x400208ebbdc0d806!2sBunker%20Kaliadem%20Merapi!5e0!3m2!1sid!2sid!4v1613656131361!5m2!1sid!2sid'),
(31, 'Jogja Bay Pirates Adventure Waterpark', '602e7096dca2e.jpg', 'Jogja Bay Waterpark atau Jogja Bay adalah salah satu taman wisata air atau waterpark terbesar di Asia Tenggara yang berlokasi di Yogyakarta, Indonesia. Taman wisata air ini dibuka secara resmi pada 20 Desember 2015.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3951835553653!2d110.41668671432589!3d-7.747840778962028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bd52e7e19b7%3A0xbef22cb0aeba5965!2sJogja%20Bay%20Pirates%20Adventure%20Waterpark!5e0!3m2!1sid!2sid!4v1613656197685!5m2!1sid!2sid'),
(35, 'Geoforest Watu Payung Turunan', '602e70dac9654.jpg', 'Watu Payung Turunan ini menawarkan keindahan hamparan perbukitan hijau yang luas seakan tidak berujung. Dari atas kita bisa melihat kawasan Gunung Kidul dan Sungai Oya yang meliuk membelah Pegunungan Sewu.', 'lokasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuliner`
--

CREATE TABLE `tb_kuliner` (
  `id` int(12) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `artikel` longtext NOT NULL,
  `letak` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kuliner`
--

INSERT INTO `tb_kuliner` (`id`, `nama`, `gambar`, `artikel`, `letak`) VALUES
(4, 'Angkringan Kopi Jos Lek Man', '602e7655e41ec.png', 'Terkenal sebagai pionir angkringan Jogja, Lik Man sudah terlebih dulu punya nama dibandingkan lokasi streetfood lainnya. Abadikan momen bersejarah sambil berlesehan di tikar dan menyeruput kopi jos (kopi yang dicelup arang panas) ditemani sego kucing yang tersohor, aneka sate, gorengan sambil diiringi musisi jalanan.\r\nAlamat: Jalan Wongsodirjan, Gedong Tengen, Sosromenduran, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\nJam Operasional: Senin – Sabtu, 14.00 – 03.00 |  Minggu tutup\r\nTelepon: 0856 4317 2339\r\nHarga: Mulai dari Rp1.000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0077177832204!2d110.36366241397847!3d-7.789005394386805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58258545add9%3A0x92ce1fde42439ef9!2sAngkringan%20Kopi%20Jos%20Lik%20Man!5e0!3m2!1sid!2sid!4v1613657652687!5m2!1sid!2sid'),
(8, 'Gudeg Pawon', '602e769c9b292.png', 'Gudeg yang satu ini cukup unik, karena sesuai namanya Anda harus berdesak-desakan di antara pengunjung lain di dapur (pawon) untuk menikmati gudegnya yang lezat. Keunikan lain dari gudeg yang ada sejak tahun 1958 ini adalah bukanya hanya malam hari dan hanya 3 jam saja!\r\nAlamat: Jalan Janturan UH/IV No. 36, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\nJam Operasional: 22.00 – 01.00\r\nTelepon: 0857 4328 1104 / 0822 3315 5497', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8495637131896!2d110.38797251432656!3d-7.805745779654913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57700347cb51%3A0xed0b575329f65c3d!2sGudeg%20Pawon!5e0!3m2!1sid!2sid!4v1613657344307!5m2!1sid!2sid'),
(9, 'Sate Klatak Pak Bari', '602e76da70771.png', 'Setelah muncul di film AADC 2, tempat makan yang satu ini jadi lebih ramai dari biasanya. Tapi memang rasanya begitu enak, empuk dan nggak bau prengus kok! Uniknya, sate klatak ditusuk tidak menggunakan tusuk sate dari bambu seperti biasa, melainkan dengan besi jeruji sepeda! Apalagi disantap bersama gule kambing panas yang bisa bikin udara dingin tak terasa.\r\nAlamat: Pasar Wonokromo, Jalan Imogiri Timur No.5, Wonokromo, Pleret, Bantul, Daerah Istimewa Yogyakarta\r\nJam Operasional: 18.30 – 01.00\r\nTelepon: 0813 2880 0165\r\nHarga: Rp20.000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.232431957848!2d110.3899240143273!3d-7.870729880439025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a569b6a53a729%3A0x880ca732cdeee1ac!2sSate%20Klathak%20Pak%20Bari%20Pasar%20Wonokromo!5e0!3m2!1sid!2sid!4v1613657427407!5m2!1sid!2sid'),
(10, 'Mie Ayam Bu Tumini', '602e7712df80f.png', 'Untuk para penggila masakan bakmie cs, tidak cukup kalau jalan-jalan tanpa menikmati mie setempat. Tak terkecuali di Jogja, Mie Ayam Bu Tumini dengan kuah coklat yang tidak biasa dan lauk ayam atau ceker siap jadi teman makan siang yang akrab!\r\nAlamat: Jalan Imogiri Timur Nomor 187, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\nJam Operasional: 10.00 – 17.00\r\nTelepon: (0274) 410 334\r\nHarga: Rp8.000 – Rp10.000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5842342027067!2d110.38856471432685!3d-7.833750679992009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a571d2c6ec877%3A0xa74c1530e70d8392!2sMie%20Ayam%20Bu%20Tumini%20Sari%20Rasa%20Jati%20Ayu!5e0!3m2!1sid!2sid!4v1613657499752!5m2!1sid!2sid'),
(11, 'Tempo Gelato', '602e773c8777a.png', 'Gelato merupakan es krim khas Italia yang mempunyai kandungan lemak lebih sedikit dibanding es krim lainnya. Tempo Gelato merupakan salah satu gelato yang berada di Yogyakarta. Untuk saat ini Tempo Gelato terletak di 2 tempat yaitu di Prawirotaman dan di Jalan Kaliurang. Di sini tersedia  es krim gelato dengan banyak varian rasa mulai dari buah-buahan ,rempah-rempah,sorbet dll. Resep es krimnya merupakan resep tradisional keluarga, tanpa pengawet, tanpa pewarna. dan berasal dari buah murni dan bahan alami.\r\nAlamat : Tempo Gelato Prawirotaman : Jalan Prawirotaman No.43, Brontokusuman, Mergangsan,Yogyakarta.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.718267133841!2d110.37034201432678!3d-7.819616279821703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a30c10a855%3A0xb7cc45a699d5ad6e!2sTempo%20Gelato%20Prawirotaman!5e0!3m2!1sid!2sid!4v1613657563002!5m2!1sid!2sid'),
(12, 'Lumpia Samijaya', '602e776fda8a8.png', 'Lumpia memang identik dengan Kota Semarang, namun di Jogja Anda bisa menjumpai lumpia lezat yang sudah berjualan sejak 40 tahun lalu. Lumpia Samijaya hadir dengan isi beda dibanding lumpia lainnya. Campuran daging ayam, bengkoang, atau telur puyuh menjamin gorengan satu ini penuh gizi dan nutrisi. Lumayan buat mengganjal perut saat jalan-jalan di Malioboro.\r\nAlamat: Jalan Malioboro Nomor 18, Suryatmajan, Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\nJam Operasional: 10.00 – 16.00\r\nTelepon: 0877 3824 0558\r\nHarga: Rp3.500 – Rp4.000/buah', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.951406318317!2d110.36685491432648!3d-7.7949699795255984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a582830d86139%3A0xe9f277b05950ed89!2sLumpia%20Samijaya!5e0!3m2!1sid!2sid!4v1613657624753!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_senibudaya`
--

CREATE TABLE `tb_senibudaya` (
  `id` int(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `artikel` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_senibudaya`
--

INSERT INTO `tb_senibudaya` (`id`, `nama`, `gambar`, `artikel`) VALUES
(2, 'Kethoprak', '602e7c06a3d2a.png', 'Kethoprak merupakan seni pertunjukkan tradisional yang mirip dengan wayang orang. Kisah yang dimainkan juga menceritakan tentang Kerajaan Mataram, kerajaan Islam di Jawa. Oh ya, dulu Yogyakarta merupakan salah satu bagian dari wilayah kekuasaan Kerajaan Mataram. Para pemain kethoprak menggunakan kostum tradisional khas Jawa yang telah disesuaikan dengan perannya. Ada juga iringan gamelan dan lantunan tembang dari para sinden. '),
(4, 'Karawitan', '602e793ad1f8b.png', 'Karawitan merupakan sebuah budaya Jogja berupa music gamelan tradisional Jawa yang dimainkan oleh sekelompok Wiyaga dan diiringi dengan nyanyian dari Waranggono dan Wiraswara atau biasa disebut dengan uyon-uyon.'),
(5, 'Wayang Golek', '602e7c2484ad0.png', 'Wayang golek merupakan salah satu kesenian daerah Jogja yang terbuat dari kayu. Cerita yang diangkat biasanya berasal dari kisah Menak. Wayang ini banyak disukai karena gerakan wayang yang didandani seperti manusia sangat mirip dengan gerakan orang.'),
(6, 'Kesenian Gamelan', '602e7c5517b90.png', 'Gamelan adalah sebuah kesenian yang berasal dari daerah Jawa, khususnya berada di daerah Yogyakarta. Perlu diketahui bahwa alat musik atau kesenian ini sering digunakan untuk upacara – upacara adat yang berada di daerah kepulauan Jawa ini.'),
(7, 'Sendratari Ramayana', '602e7c76a8884.png', 'Sendratari Ramayana meupakansalah satu kesenian yang berasal dari  ddaerah Yogyakarta, kesenian ini adalah salah satu kesenian yang paling terkenl di daerah tersebt. Para wisatawan dan juga Turis sering melihat pertunjukan kesenian ini di Candi Prambanan. Kesenian Sendratari Ramayana ini adalah sebuah keseenian yang  menceritakan tentang perlawanan antara budi perekrti yang baik yang ada dalam diri Sri Rama melawan sifat jahat yang ada dalam diri Rahwana. Senderatari ini di tampilkan hanya pada bulan mei sampai dengan bulan Oktober.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_senibudaya`
--
ALTER TABLE `tb_senibudaya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_senibudaya`
--
ALTER TABLE `tb_senibudaya`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
