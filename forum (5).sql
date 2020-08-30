-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2015 pada 16.53
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `password` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `cp` int(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `nama`, `alamat`, `email`, `bio`, `cp`, `status`) VALUES
(1, 19950327, 'fahrudinwhb', 'Joyogrand X', 'fahrudinwaw@gmail.com', 'Saya dari Tulungagung', 1234567890, 'admin'),
(2, 110394, 'adon', 'jl. Kertoyudho Jogjakarta', 'adon_cekape@gmail.uk', 'Jagoan neon', 1234567891, 'admin'),
(3, 1111071, 'afif', 'jl.bumi asri', 'afifnandya@gmail.com', 'Ngoding adalah kehidupan yang membosankan', 1234567892, 'admin'),
(4, 1111068, 'ednan', 'kendari bersatu', 'ednanfajri@gmail.com', 'tidak ada yang lebu=ih baik daripada logika cowok', 1234567893, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bad_word`
--

CREATE TABLE IF NOT EXISTS `bad_word` (
`id_word` int(11) NOT NULL,
  `kata` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bad_word`
--

INSERT INTO `bad_word` (`id_word`, `kata`, `status`) VALUES
(1, 'Anjing', 'ENABLE'),
(2, 'Jancuk', 'ENABLE'),
(3, 'Bangsat', 'ENABLE'),
(5, 'Celeng', 'ENABLE'),
(6, 'Kampret', 'ENABLE'),
(8, 'Bajingan', 'ENABLE'),
(9, 'Ndasmu', 'ENABLE'),
(10, 'ednan', 'ENABLE'),
(11, 'afif', 'DISABLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Musik', 'Membicarakan tentang musik'),
(2, 'Olahraga', 'Membicarakan tentang olahraga'),
(6, 'Kesehatan', 'Membicarakan tentang kesehatan'),
(7, 'Travel', 'My life my adventure');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komentar` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_member`, `tanggal`, `komentar`, `id_post`) VALUES
(1, 1, '2015-05-22 05:24:38', 'pertamax', 13),
(2, 1, '2015-05-22 05:26:19', 'keren gan!!!', 13),
(3, 5, '2015-05-22 06:01:28', '*** adalah manager barunya noah <img src="emoticon/smile.gif">', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `cp` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `password`, `nama`, `alamat`, `email`, `bio`, `cp`, `foto`, `status`) VALUES
(1, '016974103b9a324650c3f44314048919', 'Ednan Fajri', 'Jl. Joyo tambaksari no. 95', 'ednan.fajri.19@gmail.com', 'Live to Life', '085341019281', '20150417_061810.jpg', 'ENABLE'),
(2, '2fadfecbb08b9cfa2ee6a261de7a9647', 'adon', 'bali', 'adon@gmail.com', 'siapa cepat dia dapat', '0981765889', '20150417_052519_8.jpg', 'ENABLE'),
(3, '111e2895a1a6d4b77084531aabfb3fa7', 'afif', 'bali', 'afif@mail.com', 'bebas', '085341019281', '20150416_125355.jpg', 'ENABLE'),
(4, '57c467f5186e6ec68b0bf0b8cc348726', 'fahrudinwahabi', 'Perum Joyogrand X No. 154', 'fahrudinwaw@gmail.com', 'Saya bukan seorang kapiten', '085258269088', '20150417_054935_Richtone(HDR).jpg', 'ENABLE'),
(5, 'd41d8cd98f00b204e9800998ecf8427e', 'Agus', 'Jl. Joyo tambaksari no. 95', 'ednan.fajri.19@gmail.com', 'saya kembarannya ednan', '09878376272', '20150416_125355.jpg', 'ENABLE'),
(7, '6fb42da0e32e07b61c9f0251fe627a9c', 'febby', 'tulungagung', 'asimbyt@yahoo.com', 'siapa saya', '0976756569', '', 'ENABLE'),
(8, 'e10adc3949ba59abbe56e057f20f883e', 'ADONADIT', 'tulungagung', 'G.tulus11@gmail.com', 'suip', '0976756569', '10540332_687840044629928_1970469185_n.jpg', 'ENABLE'),
(9, '6fb42da0e32e07b61c9f0251fe627a9c', 'marwi', 'asdef', 'asimby@yahoo.com', 'siapa saya', '3214', '2.PNG', 'ENABLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id_pesan` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_penerima`, `id_pengirim`, `pesan`, `tanggal`) VALUES
(1, 4, 1, 'Hallo Udin', '2015-05-22 05:33:14'),
(2, 1, 4, 'hai Ednan, apa kabar? Sehat?', '2015-05-22 05:55:12'),
(3, 5, 5, 'halo agus', '2015-05-22 06:01:52'),
(4, 3, 4, 'Hai afif, mohon maaf kamu harus di banned', '2015-05-22 06:06:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id_post` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `isi` mediumtext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_member` int(8) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `id_kategori`, `waktu`, `id_member`, `status`) VALUES
(4, 'Taman Wisata Alam Buyan-Tamblingan', 'Pesona Gunung Lesung di Bali didukung oleh tiga danau di sekelilingnya. Ada Danau Buyan, Danau Beratan dan Danau Tamblingan yang alamnya masih benar-benar asri. Ketiga danau merupakan sumber resapan air dan sumber penghidupan bagi masyarakat setempat.Taman Wisata Alam Buyan-Tamblingan memiliki 3 tipe ekosistem, yaitu ekosistem perairan, ekosistem hutan tanaman, dan ekosistem hutan alam.\r\n \r\nSecara geografis Danau Tamblingan terletak di Desa Munduk, Kecamatan Banjar, Kabupaten Buleleng, Bali. Jika dibandingkan danau lain yang ada di Bali, danau ini terbilang kecil karena hanya memiliki luas permukaan 1,5 kilometer persegi sedangkan kedalamannya sekira 90 meter.Danau Tamblingan memang terlihat lebih bercorak karena dihiasi sebuahpura di pinggir danau.  Kawasan ini sering pula digunakan untuk kegiatan photography dan videography.\r\n \r\nNama Tamblingan berasal dari kata tamba yang artinya obat, dan kata elingang atau kemampuan spiritual. Konon pada abad ke 10 hingga 14 masehi, ada empat desa sekaligus yang mengelilingi danau: Desa Munduk, Desa Gobleg, Desa Gesing, dan Desa Umejero. Seluruh warga desa sepakat untuk menjaga kesucian danau tersebut.\r\n \r\nAkan tetapi, suatu ketika warga di keempat desa terkena wabah penyakit dan orang yang dianggap suci di antara mereka turun ke danau untuk mengambil air. Berkat doa dan kemampuan spiritual orang tersebut, penyakit  dapat sembuh melalui basuhan air Danau Tambilang, akhirnya semua warga desa pun sembuh berkat air danau itu.\r\n \r\nSejak saat itulah, Danau Tamblingan dikelilingi banyak pura: Pura Endek, Pura Dalem Tamblingan, Pura Sang Hyang Kawuh, Pura Ulun Danu, Pura Pengukiran, Pura Gubug, Pura Embang, Pura Batulepang, Pura Pengukusan, Pura Naga Loka, dan Pura Tirta Mengening. Dua pura lain yaitu Pura Tukang Timbang dan Pura Embang terbuat dari batuan yang merupakan peninggalan masa pra-Hindu sebelum abad ke-10. Seluruh pura kini membentuk lansekap yang indah bersama danau sehingga ada daya tarik tersendiri.\r\n \r\nBerdiri di atas ketinggian lebih dari 1000 m dpl membuat kawasan danau begitu sejuk. Pagi hari kabut akan menyapa danau sehingga kesan mistisnya lebih kuat. Hal menarik lain menurut sejarah, ribuah tahun silam di kawasan ini pernah ada kehidupan masyarakat yang sangat teratur, baik dari segi tata pemerintahan, tata ekonomi, maupun sosial budaya.\r\n \r\nTerdapat kera-kera yang habitatnya tidak jauh di Danau Tamblingan, tepatnya di sekitar jalan raya dekat Danau Buyan jurusan denpasar-singaraja. Semakin hari jumlahnya semakin banyak sehingga kawasan ini sering disebut-sebut jungle monkey forest.\r\n', 7, '2015-05-22 04:55:06', 1, 'ENABLE'),
(5, 'Bintan Lagoon Resort', 'Selain Nirwana Garden, kawasan resor terpadu di Pulau Bintan adalah Bintan Lagoon Resort. Luas kawasan ini lebih dari 300 hektar dilengkapi 470 kamar mewah, dua lapangan golf, ruang konvensi, fasilitas olahraga air, area kegiatan untuk keluarga, sejumlah restoran internasional dan juga kapal ferry pribadi yang berlayar dari Singapura.\r\n \r\nBintan Lagoon Resort berhasil memadukan kemewahan dan kenyamanan saat Anda menghabiskan  waktu liburan dalam satu kawasan.Anda tidak akan kehabisan kegiatan karena ada sekira 30 jenis olahraga air dan 20 jenis olahraga lain seperti tenis, voli, sepakbola serta panahan bisa menjadi pilihan yang menarik. Anda bisa menikmati keceriaan menaiki banana boat, flying fish, snorkeling, surfing, hingga beragam olahraga air yang cocok bagi anak-anak.\r\n \r\nBagi pecinta golf, Bintan Lagoon memiliki padang golf 18 hole dengan desain yang luar biasa indah hasil rancangan arsitek terkenal Jack Nicklaus dan Ian Baker-Finch.\r\n \r\nSementara bagi perusahaan yang membutuhkan fasilitas ruang pertemuan, konvensi ataupun untuk acara yang membutuhkan suasana tenang jauh dari keramaian, Pulau Bintan adalah tempat yang tepat karena Anda akan bertatapan langsung dengan hamparan pantai dan panorama laut yang indah. Bintan Lagoon pun memiliki segala fasilitas tersebut.\r\n \r\nAnda bisa menggunakan Great Hall, yakni sebuah bangunan berlantai tiga yang difungsikan sebagai pusat konvensi. Gedung ini meliputi beberapa ruang terbuka dengan total luas 20.000 meter persegi dan sebuah ruang serbaguna yang mampu menampung 1300 tamu. The Great Hall memiliki sentuhan seni dan biasanya digunakan untuk ruang pertemuan hingga presentasi. Melangsungkan pertemuan di sini akan menyenangkan karena dikombinasikan dengan outbound.\r\n \r\nApabila Anda mencari tempat untuk relaksasi, nikmatilah spa di Taman Sari Spa yang menawarkan teknik pijat modern dan terapi tradisional ekslusif sehingga Anda akan benar-benar segar kembali.\r\n', 7, '2015-05-22 04:58:29', 2, 'ENABLE'),
(8, 'Kalau Ditinggal De Gea, MU Disarankan Rekrut Cech', 'Eks gelandang Manchester United Paul Scholes punya saran untuk bekas klubnya itu kalau pada akhirnya David De Gea benar-benar pergi. Dia menyarankan agar MU merekrut Petr Cech sebagai gantinya.\r\nMasa depan De Gea di Old Trafford sedang menjadi bahan spekulasi. Kiper asal Spanyol itu santer dikabarkan menjadi incaran Real Madrid. De Gea bahkan sempat diisukan sudah mencapai kesepakatan pribadi dengan Los Blancos.\r\nKalau De Gea akhirnya hengkang, Scholes menyarankan agar MU menggaet Cech. Kiper Chelsea itu kabarnya juga siap hengkang dari Stamford Bridge karena tak mau menjadi pilihan kedua di belakang Thibaut Courtois.\r\n', 2, '2015-05-22 05:07:24', 2, 'ENABLE'),
(9, 'Yamaha Nilai MotoGP di Indonesia ', 'Yamaha Indonesia menyambut positif peluang Indonesia menggelar balapan MotoGP pada tahun 2017 mendatang. Mereka menilai event tersebut bisa mendongkrak motivasi para pebalap lokal untuk lebih berprestasi.\r\n\r\nCEO Dorna, Carmelo Ezpeleta, datang langsung ke Jakarta pada Rabu (20/5/2015) untuk membahas kemungkinan adanya seri MotoGP di Indonesia. Ezpeleta bertemu Menteri Pariwisata Arief Yahya, Ketua Umum PP IMI Nanan Soekarna, dan Direktur Sirkuit Sentul Tinton Soeprapto.\r\n\r\n"Kami sangat menyambut baik kalau itu memang terlaksana. Penggemar MotoGP di Indonesia sangat banyak dan sangat rindu event MotoGP digelar di negara sendiri. Kalau balapan di Sepang saja, lebih dari 50% penontonnya orang Indonesia. Mewakili pecinta MotoGP di Indonesia, kami berharap ini benar-benar terlaksana," ujar GM After Sales and Motorsport PT Yamaha Indonesia Motor Manufacturing, M. Abidin, kepada detikSport, Kamis (21/5).\r\n\r\n"Ini peluang bagi pebalap Indonesia untuk menuju jenjang yang lebih tinggi. Mimpi setiap pebalap tentu bisa menorehkan prestasi di jenjang yang paling tinggi, yaitu MotoGP," tambah Abidin. \r\n\r\n"Ini akan berpengaruh ke motivasi mereka dalam berlatih dan meningkatkan skill," katanya.\r\n\r\nAbidin cukup optimistis para pebalap lokal bisa unjuk gigi andai seri MotoGP jadi digelar di Indonesia pada tahun 2017. Menurutnya, masih ada waktu untuk mengasah skill yang sudah cukup baik.\r\n\r\n"Saya pikir sangat memungkinkan. Baik pebalap Yamaha, Honda, atau Kawasaki sudah bisa berprestasi di Asia," ujarnya.\r\n\r\n"Dalam dua tahun ke depan masih bisa mengasah skill. Kalau skill nggak beda jauh. Tapi, fisik jadi PR besar bagi pebalap-pebalap indonesia," imbuh Abidin.\r\n\r\nYamaha Indonesia saat ini tengah menggembleng pebalap-pebalap muda seperti Sigit PD, Imanuel Pratna, dan Galang Hendra. Terlepas dari rencana digelarnya MotoGP di Indonesia, Yamah menargetkan para pebalapnya itu bisa tampil di MotoGP pada tahun 2018.\r\n\r\n"Selama dua tahun terakhir mereka kami gembleng terus. Kami sediakan latihan di dalam dan luar negeri dengan instruktur mantan-mantan pebalap MotoGP. Yang lalu-lalu main langsung kirim ke arena yang lebih tinggi, ya wajar kalau tidak memuaskan," tuturnya.\r\n\r\n"Kami belajar dari pebalap Malaysia, saya lupa namanya. Saat masih memakai motor bebek, levelnya di bawah pebalap Indonesia. Tapi, dia dilatih secara profesional di Eropa, kehidupan pribadi diawasi. Itu kita tiru. Bagaimana disiplin menjaga fisik, bukan hanya skill balap, kalau mau berkarier di level yang lebih tinggi. Memang harus mengorbankan kehidupan pribadinya kalau sudah pro," kata Abidin.\r\n\r\n"Tahun 2018 mereka ke MotoGP. Bukan cuma rider, tapi termasuk teknisi dan manajer. Pengalaman kami dengan Doni Tata, kami cuma mengirim pebalap. Itu ada faktor psikologis yang menimbulkan pressuretersendiri karena dia merasa sendiri, bahasa berbeda. Kalau turun dengan tim ceritanya akan berbeda. Jadinya bisa konsentrasi ke balapan," simpulnya.\r\n', 2, '2015-05-22 05:08:46', 2, 'ENABLE'),
(10, 'Usia Tak Pengaruhi Performa Olahraga', 'Usia yang sudah lanjut kerap membuat seseorang berhenti melakukan olahraga. Namun seorang pelatih fitnes asal Amerika Serikat dengan tegas membantah hal tersebut.\r\n\r\nTracy Anderson pelatih fitnes bagi beberapa seleb hollywood seperti Gwyneth Paltrow, Jennifer Lopez hingga Madonna, mengatakan bahwa alasan seperti usia yang sudah tua, badan yang tidak fit atau tak punya waktu hanyalah batasan-batasan yang dibuat oleh otak. Jika batasan itu bisa ditembus, maka hal-hal tersebut tak lagi menjadi halangan untuk melakukan olahraga.\r\n', 2, '2015-05-22 05:10:38', 2, 'ENABLE'),
(11, 'Saat Sudah Kompetitif, Manfaat Olahraga Malah Bisa Jadi Hilang', 'Kebanyakan orang berolahraga untuk menjaga kesehatan serta kebugaran tubuh, namun ada juga beberapa orang yang berolahraga dalam lingkup kompetisi seperti atlet misalnya. Nah dokter mengingatkan agar jangan tertukar tujuan olahraga ini agar manfaatnya tak jadi musibah.\r\n\r\nAhli kedokteran olahraga dr Michael Triangto, SpKO, mengatakan bahwa banyak orang seringkali terbawa situasi dan menjadi kompetitif ketika berolahraga. Apabila sudah demikian maka waspada risiko cedera bisa menghantui yang mungkin juga berujung fatal.\r\n\r\n"Kenapa olahraga yang dibilang sehat bisa jadi sumber kematian? Pada saat kita sudah masuk ke yang namanya kompetitif. Kita kompetitif dengan orang lain, seharusnya kita kompetitif dengan diri kita sendiri," kata dr Michael ketika ditemui pada acara Jakarta Health Week di Senayan City, Jakarta, seperti ditulis Kamis (21/5/2015).\r\n', 2, '2015-05-22 05:14:30', 3, 'ENABLE'),
(12, 'Pemain Klarinet Berumur 9 Tahun Siap Ikut Konser', 'Usianya baru menginjak 9 tahun, tapi bakat seninya sudah sangat menonjol. Itulah Sean Nicholas Alexander, pemain klarinet termuda di Indonesia.\r\n\r\nSean mengaku dirinya baru setahun belakangan bermain alat musik tiup itu. Awalnya ia ingin mencoba bermain klarinet karena melihat permainan sang ayah, Bambang Witono.\r\n\r\n"Awal mainnya susah, tapi sekarang sudah bisa," ucap Sean saat ditemui di Warung Tekko, Pecenongan, Jakarta Pusat.\r\n\r\nSaat ini, Sean belajar bermain klarinet dari Nino Ario Wijaya yang dikenal sebagai pemain klarinet terbaik di negeri ini. Lalu, apa komentar Nino mengenai muridnya?\r\n\r\n"Sean ini cerdas, dia bisa menangkap ilmu dengan cepat. Padahal klarinet ini paling sulit dimiankan dibanding alat musik tiup lainnya," ujar Nino.\r\n\r\n"Tapi Sean dengan kemauannya yang keras terus mencoba dengan ulet," tambahnya.\r\n\r\nMeski tergolonh baru bermain klarinet, Sean tak lama lagi akan ikut andil di sebuah konser yang dibuat gurunya tersebut. Konser itu melibatkan banyak musisi lain dari Grenadila Clarinet Ensemble dan bakal diselenggarakan di Rumah Musik Indonesia, Alam Sutera, Tangerang.\r\n\r\n"Acaranya tanggal 24 Mei. Ini bukan cuma ajang unjuk kebolehan tapi diharapkan Sean juga bisa melatih mentalnya di atas panggung," tutup Nino.\r\n', 1, '2015-05-22 05:17:20', 4, 'ENABLE'),
(13, 'Raisa Undang Ahok Jadi Tamu Istimewa di Konser Tunggalnya', 'Penyanyi Raisa Andriana secara khusus mengundang Gubernur DKI Jakarta Basuki Tjahaja Purnama untuk datang ke konser tunggalnya yang bertajuk Raisa Live in Concert, pada Minggu (24/5/2015) di Istora Senayan, Jakarta Selatan. \r\n\r\nMelalui akun twitternya, @raisa6690, pelantun lagu "Could it Be" itu menuliskan permohonannya kepada Basuki. Permohonannya itu ditulis Raisa sekitar pukul 10.20 pagi. \r\n\r\n"Selamat pagi Yth. Bapak @basuki_btp aku Raisa. Dengan segala hormat ingin mengundang Bapak ke konser aku," kicau Raisa dalam akun Twitternya. \r\n\r\nKemudian, ia menginfokan agenda konser tunggalnya. "Konser aku akan diselenggarakan tgl 24 Mei di Istora Senayan. Apakah Bapak @basuki_btp bersedia jadi tamu kehormatan?".\r\n', 1, '2015-05-22 05:18:46', 4, 'ENABLE'),
(27, 'afif', 'tidak sehat', 6, '2015-05-26 09:18:47', 9, 'DISABLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bad_word`
--
ALTER TABLE `bad_word`
 ADD PRIMARY KEY (`id_word`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bad_word`
--
ALTER TABLE `bad_word`
MODIFY `id_word` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
