/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL CONNECTION
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : compro_perizinan

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 30/07/2024 20:54:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `article_category_id` int NULL DEFAULT NULL,
  `created_by` int NULL DEFAULT NULL,
  `created_datetime` datetime NULL DEFAULT NULL,
  `updated_by` int NULL DEFAULT NULL,
  `updated_datetime` datetime NULL DEFAULT NULL,
  `is_publish` tinyint(1) NULL DEFAULT 1,
  `counter` int NULL DEFAULT 1,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`article_id`) USING BTREE,
  UNIQUE INDEX `link`(`link` ASC) USING BTREE,
  INDEX `article_category_id`(`article_category_id` ASC, `created_by` ASC, `updated_by` ASC) USING BTREE,
  INDEX `created_by`(`created_by` ASC) USING BTREE,
  INDEX `updated_by`(`updated_by` ASC) USING BTREE,
  INDEX `id_rumahsakit`(`id_rumahsakit` ASC) USING BTREE,
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`article_category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `article_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `m_user` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `article_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `m_user` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 178 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (26, 'Resiko Bekerja Shift Malam', 'ss', '<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p>Kebanyakan orang umumnya bekerja dari pagi hari hingga sore atau malam hari, namun adakah sahabat Permata yang sering mengambil <em>shift</em> malam? ternyata bekerja di malam hari dapat memberi pengaruh terhadap tubuh lho&hellip;akibatnya pekerja shift malam juga berisiko untuk mengalami penyakit-penyakit yang serius akibat pola hidup yang tidak sehat. Nah Berikut tips-tips kesehatan bagi sahabat Permata yang bekerja pada malam hari:</p>\r\n\r\n<p>1. Mengatur pola tidur</p>\r\n\r\n<p>jangan tunda tidur, luangkan waktu 7-9 jam untuk tidur setelah bekerja shift malam. jika berkesempatan untuk istirahat, tidurlah di rentang pukul 22-24.00 karena di saat itulah metabolism liver sangat membutuhkan istirahat kita.</p>\r\n\r\n<p>2. Atur pola makan yang sehat</p>\r\n\r\n<p>batasi caffeine, jika ingin nyamil makanan instan di tengah malam, siapkan buah atau serat gandum. hindari makanan yang sulit dicerna seperti gorengan, makanan pedas dan makanan olahan. Hindari juga makanan yang terlalu manis, walaupun makanan manis dapat memberikan energy, namun makanan ini juga dapat menurunkan energy lebih cepat karena sulit dipecah.</p>\r\n\r\n<p>3. Minum air putih yang cukup</p>\r\n\r\n<p>4. Tidur Siang</p>\r\n\r\n<p>tidur siang terbukti meningkatkan dan memulihkan kekuatan otak. Tidur setidaknya 45 menit saat istirahat dari pekerjaan atau tidur siang selama 20-45 menit juga terbukti bermanfaat lho bagi pekerja shift malam untuk menghilangkan rasa lelah...Nah tapi idealnya tidur siang jangan melebihi 45 menit yaah sahabat Permata..supaya manfaatnya maksimal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pekerja malam biasanya cenderung memiliki pola hidup yang tidak sehat, misalnya seperti Akibatnya, mereka berisiko terkena penyakit yang serius. Sebuah penelitian juga mengungkapkan bahwa orang-orang yang sering terjaga semalaman lebih berisiko mengidap kanker jenis tertentu, diabetes, penyakit jantung, obesitas dan gangguan kognitif. Selain itu, tubuh yang dipaksa untuk tetap terjaga pada malam hari yang seharusnya menjadi waktu beristirahat, menyebabkan kebanyakan pekerja malam mengalami insomnia.</p>\r\n\r\n<p>&nbsp;</p>', 'kerja-shift-malam.jpg', 9, 3, '2017-06-06 08:38:24', 3, '2020-01-27 13:33:36', 1, 1, 1);
INSERT INTO `article` VALUES (52, 'RAWAT INAP (INPATIENT)', 'poli-spesialis-lengkap', '<p style=\"margin-left: 36pt; text-align: justify;\">Rawat inap adalah pelayanan kesehatan berupa perawatan di Rumah Sakit yang&nbsp; berlangsung paling sedikit 6 (enam) jam terhitung sejak Peserta mendapat perawatan dan terdaftar sebagai pasien rawat inap.</p>', 'rawat_inap2.jpg', 6, 3, '2017-12-06 09:10:38', 3, '2018-03-07 19:57:36', 1, 1, 1);
INSERT INTO `article` VALUES (53, 'POLIKLINIK RSPK LIPPO CIKARANG', 'radiologi', '<h1><strong>&nbsp;Poliklinik Rumah Sakit Permata&nbsp; Keluarga Lippo Cikarang </strong></h1>\r\n\r\n<p>- Klinik Anak</p>\r\n\r\n<p>- Klinik Obgyn (Kandungan)</p>\r\n\r\n<p>- Klinik Gigi</p>\r\n\r\n<p>- Klinik Mata</p>\r\n\r\n<p>- Klinik THT</p>\r\n\r\n<p>Klinik Lainnya :</p>\r\n\r\n<p>- Umum</p>\r\n\r\n<p>- Penyakit Dalam</p>\r\n\r\n<p>- Bedah Orthopaedy</p>\r\n\r\n<p>- Bedah Umum</p>\r\n\r\n<p>- Syaraf</p>\r\n\r\n<p>- Paru &amp; Pernafasan</p>\r\n\r\n<p>- Urologi</p>\r\n\r\n<p>- Jantung</p>\r\n\r\n<p>- Akupuntur</p>\r\n\r\n<p>&nbsp;</p>', 'poliklinik_.jpg', 6, 3, '2017-12-06 09:18:12', 3, '2018-03-05 08:46:02', 1, 1, 1);
INSERT INTO `article` VALUES (56, 'Perinatologi', 'medical-checkup', '<p>-</p>', 'perinatologi.jpg', 6, 3, '2017-12-18 13:26:16', 3, '2018-03-04 21:52:57', 1, 1, 1);
INSERT INTO `article` VALUES (59, 'INSTALASI GAWAT DARURAT (IGD)  24 JAM', 'igd', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Adalah semua jenis pelayanan kesehatan yang diberikan oleh<strong> </strong>Rumah Sakit Permata Keluarga Lippo Cikarang kepada Pasien dalam waktu 24 jam yang berada&nbsp; pada kondisi/situasi gawat darurat/sangat memerlukan pertolongan medis segera yang terjadi &nbsp;pada waktu jam kerja dan atau diluar jam kerja dan atau hari libur resmi umum, nasional, keagamaan</span></span></p>', 'igdrspklc.jpg', 6, 3, '2018-01-06 19:48:07', 3, '2018-05-14 18:49:28', 1, 1, 1);
INSERT INTO `article` VALUES (60, 'INTENSIVE CARE UNIT (ICU) / HCU', 'icu', '<p>-</p>', 'HCU.jpg', 6, 3, '2018-01-07 11:24:36', 3, '2018-03-04 21:49:53', 1, 1, 1);
INSERT INTO `article` VALUES (65, 'Laboratorium Rumah Sakit Permata Lippo Cikarang', 'laboratorium-rumah-sakit-permata-lippo-cikarang', '<p><span style=\"font-size:14px\">Laboratorium kami dilengkapi dengan fasilitas-fasilitas yang memadai. Selain itu ditunjang dengan Sumber Daya Manusia yang kompeten dan profesional dibidangnya sehingga siap memberikan pelayanan yang terbaik bagi anda.</span></p>', 'Laboratorium.jpg', 6, 3, '2018-03-08 20:51:16', 3, '2018-07-02 10:51:07', 1, 1, 1);
INSERT INTO `article` VALUES (66, 'Poli Kandungan ( Obgyn )', 'poli-kandungan-obgyn', '<p>&nbsp;</p>\r\n\r\n<p>Layanan poliklinik kebidanan dan kandungan, kesehatan reproduksi, pemeriksaan pra dan pasca melahirkan yang dilakukan oleh Dokter Spesialis OBGYN. Kami juga telah dilengkapi dengan USG 4D untuk hasil pemeriksaan kandungan lebih akurat. &shy;</p>', 'poli_Kandungan.jpg', 6, 3, '2018-03-08 20:56:58', 3, '2018-03-08 20:59:38', 1, 1, 1);
INSERT INTO `article` VALUES (67, 'Poli Anak', 'poli-anak', '<p style=\"text-align:justify\">Poliklinik Anak melayani masyarakat yang membutuhkan pelayanan kesehatan bagi Anak yang langsung ditangani oleh Dokter Spesialis Anak yang telah berpengalaman di bidangnya.</p>', 'Poli_Anak.jpg', 6, 3, '2018-03-08 21:03:40', 3, '2018-03-08 21:04:05', 1, 1, 1);
INSERT INTO `article` VALUES (68, 'Poli THT', 'poli-tht', '<p style=\"text-align:justify\"><span style=\"font-size:12px\">Memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksaan fisik oleh dokter spesialis THT dan pemeriksaan/tindakan medis tertentu oleh dokter spesialis. Kami siap memberikan pelayanan terbaik kami bagi anda.</span></p>', 'Poli_THT.jpg', 6, 3, '2018-03-08 21:12:21', 3, '2018-03-08 21:12:57', 1, 1, 1);
INSERT INTO `article` VALUES (69, 'POLI MATA', 'poli-mata', '<p>Memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksaan fisik serta tindakan medis tertentu oleh Dokter Spesialis Mata. Konsultasikan masalah mata anda dengan dokter kami</p>', 'Poli_Mata.jpg', 6, 3, '2018-03-16 08:29:00', 3, '2018-03-16 08:29:26', 1, 1, 1);
INSERT INTO `article` VALUES (70, 'Poli Penyakit Dalam / Internis', 'poli-penyakit-dalam-internis', '<p>Kami melayani pasien untuk dapat berkonsultasi mengenai penyakit yang diderita oleh pasien langsung ditangani oleh Dokter Spesialis Penyakit Dalam<strong> </strong>dengan dan langsung dilakukan pemeriksaan fisik sesuai dengan keluhan</p>', 'poli_penyakit_Dalam.jpg', 6, 3, '2018-03-16 08:42:23', 3, '2018-03-16 08:43:22', 1, 1, 1);
INSERT INTO `article` VALUES (71, 'Poli Tulang / Orthopedi', 'poli-tulang-orthopedi', '<p>Memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksaan fisik oleh dokter spesialis Tulang/Orthopedi&nbsp; sesuai dengan keluhan yang dirasa oleh pasien.Pelayanan dan Fasilitas kami ditunjang dengan kelengkapan klinik spesialis</p>', 'poli_tulang.jpg', 6, 3, '2018-03-16 08:51:14', 3, '2018-03-16 08:51:47', 1, 1, 1);
INSERT INTO `article` VALUES (72, 'Poli Syaraf', 'poli-syaraf', '<p>Memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksaan fisik oleh dokter spesialis syaraf&nbsp; sesuai dengan keluhan yang dirasa oleh pasien. Pelayanan dan Fasilitas kami ditunjang dengan kelengkapan klinik spesialis.</p>', 'poli_saraf.jpg', 6, 3, '2018-03-16 08:55:36', 3, '2018-03-16 08:55:36', 1, 1, 1);
INSERT INTO `article` VALUES (73, 'Poli Kulit dan Kelamin', 'poli-kulit-dan-kelamin', '<p>Poliklinik yang bertujuan untuk membantu pasien yang memiliki permasalahan kulit, kecantikan dan penyakit kelamin dengan didukung dokter ahli spesialis kulit dan kelamin. Poliklinik ini ditunjang dengan peralatan dan fasilitas ruang konsultasi, tindakan, perawatan kulit dan kecantikan yang lengkap.</p>', 'poli_penyakit_kulit.jpg', 6, 3, '2018-03-16 08:59:03', 3, '2018-03-16 08:59:03', 1, 1, 1);
INSERT INTO `article` VALUES (74, 'Poli Gigi', 'poli-gigi', '<p>Perawatan gigi yang dilakukan secara personal dengan cara &nbsp;enggosok gigi) tidaklah cukup. Gigi juga memerlukan perawatan secara professional terlebih pada gigi sensitif atau gigi telah mengalami kerusakan. Segera kunjungi dan konsultasikan untuk perawatn gigi anda dengan Dokter Gigi kami &nbsp;seperti&nbsp; Pencabutan Gigi, Pembersihan Karang Gigi (Scaling), Tambal Gigi, dll.</p>', 'poligigi.jpg', 6, 3, '2018-03-16 09:02:03', 3, '2018-07-02 11:48:32', 1, 1, 1);
INSERT INTO `article` VALUES (75, 'Profil RS Permata Keluarga - Jababeka', 'profil-rs-permata-keluarga-jababeka', '<p style=\"margin-left:36pt; text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Setelah suksesnya RS. Permata Keluarga Lippo Cikarang beroperasional dan seiring dengan kebutuhan masyarakat yang terus meningkat akan pelayanan kesehatan khususnya di daerah Jababeka, maka didirikanlah <strong>Rumah Sakit Permata Keluarga Jababeka,</strong> tepatnya di Jl Dr.Ciptomangunkusumo Blok A No 1A Medical City, Kota Jababeka.&nbsp; <em>Ground Breaking</em> RS Permata Keluarga Jababeka ini dimulai pada tanggal 27 Maret 2015, di mana proses pembangunan terus berlangsung sehingga bisa beroperasional pada 21 Juli 2016. Dengan berdirinya Rumah Sakit ini, diharapkan dapat memberikan pelayanan kesehatan bagi seluruh lapisan masyarakat.</span></span></p>', 'IMG_2956.JPG', 7, 3, '2018-04-26 11:24:36', 3, '2020-06-17 15:01:54', 1, 1, 2);
INSERT INTO `article` VALUES (77, 'Profil Rumah Sakit Permata Keluarga', 'profil-rumah-sakit-permata-keluarga', '<p style=\"margin-left: 36pt; text-align: justify;\">Atas dasar kebutuhan untuk pelayanan kesehatan bagi masyarakat di kawasan pemukiman Lippo Cikarang, EJIP, HYUNDAI, Cibitung, Tambun dan Bekasi dan kerinduan untuk dapat melayani seluruh lapisan masyarakat terutama masyarakat industri dari seluruh lapisan masyarakat, maka atas gagasan dan tekad dari sebuah keluarga besar serta beberapa orang rekanan bersepakat untuk mendirikan sebuah rumah sakit swasta baru pada tanggal 5 Agustus 2010 &nbsp;di kawasan Lippo Cikarang tepatnya di Jl. MH. Thamrin&nbsp;&nbsp;&nbsp; Kav. 129 Lippo Cikarang.&nbsp;<strong>Rumah Sakit Permata Keluarga Lippo Cikarang</strong> terletak di atas tanah seluas 2582 M<sup>2.</sup> dan memiliki 5 lantai. Saat ini RS Permata Keluarga &nbsp;memiliki 101 Tempat Tidur (TT), terdiri dari 73 TT Rawat Inap, 3 TT ICU, 3 TT NICU, 3 TT HCU, 15 TT&nbsp; Perina, 4 TT Perinatologi, 2&nbsp; Kamar Operasi, dan Kamar Bersalin. Kami terus berupaya untuk memberikan pelayanan kesehatan yang optimal dan didukung oleh tenaga-tenaga berkualitas dan professional serta sarana dan prasarana kesehatan yang memadai. Setelah suksesnya RS. Permata Keluarga Lippo Cikarang beroperasional dan seiring dengan kebutuhan masyarakat yang terus meningkat akan pelayanan kesehatan khususnya di daerah Jababeka, maka didirikanlah <strong>Rumah Sakit Permata Keluarga Jababeka,</strong> tepatnya di Jl Dr.Ciptomangunkusumo Blok A No 1A Medical City, Kota Jababeka.&nbsp; <em>Ground Breaking</em> RS Permata Keluarga Jababeka ini dimulai pada tanggal 27 Maret 2015, di mana proses pembangunan terus berlangsung sehingga diharapkan bisa beroperasional pada bulan Mei 2016. Dengan berdirinya Rumah Sakit ini, diharapkan dapat memberikan pelayanan kesehatan bagi seluruh lapisan masyarakat.</p>\r\n\r\n<p style=\"margin-left:36.0pt\"><span style=\"font-size:18px\"><strong>VISI</strong></span></p>\r\n\r\n<p style=\"margin-left:36.0pt\">Rumah Sakit yang mengutamakan Pelayanan Kepada Semua lapisan masyarakat melalui tenaga kerja yang terlatih dan Profesional&nbsp;</p>\r\n\r\n<p style=\"margin-left:36.0pt\"><span style=\"font-size:18px\"><strong>MISI</strong></span></p>\r\n\r\n<ol style=\"list-style-type:lower-alpha\">\r\n	<li>Mengembangkan Potensi Tenaga Kerja secara keseluruhan demi tercapainya Pelayanan Kesehatan yang terbaik.</li>\r\n	<li>Menyediakan dan mengembangkan secara terus menerus seluruh Sarana dan Prasarana Penunjang Pelayanan.</li>\r\n	<li>Bekerjasama dengan berbagai Pihak agar dapat lebih meluaskan Jaringan Pelayanan.&nbsp;</li>\r\n</ol>\r\n\r\n<p><span style=\"font-size:18px\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; MOTTO</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>&nbsp; &nbsp; &nbsp; &nbsp;</strong></span>Menghargai Setiap Pribadi, Melayani dengan Sepenuh Hati.</p>', 'logo_profil.png', 7, 3, '2018-05-13 21:16:15', 3, '2018-05-14 20:57:18', 1, 1, 1);
INSERT INTO `article` VALUES (78, 'IGD RSPK JABABEKA', 'igd-rspk-jababeka', '<h3><span style=\"font-size:22px\"><strong>Rumah Sakit Permata Keluarga Jababeka Menyediakan Fasilitas Ambulance 24 Jam .</strong></span></h3>\r\n\r\n<h3>Instalasi Gawat Darurat&nbsp;(IGD) adalah salah satu&nbsp;bagian dirumah sakit yang menyediakan&nbsp;penanganan awal bagi pasien yang menderita sakit dan cedera, yang dapay mengancamkelangsungan hidupnya. Di&nbsp;IGD dapat ditemukan dokter dari berbagai spesialisasi bersamasejumlah perawat dan juga asisten dokter.Pelayanan Gawat Darurat (Emergency care) adalah bagian dari pelayanan darikedokteran yang dibutuhkan oleh penderita dalam waktu segera (immediately) untuk&nbsp;menyelamatkan kehidupan (life saving)</h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><span style=\"font-size:20px\"><strong>Hotline&nbsp;021-29083388 (IGD)</strong></span></h3>', 'IMG_20161124_124451.jpg', 8, 3, '2018-05-14 10:55:32', 3, '2018-07-03 10:40:50', 1, 1, 2);
INSERT INTO `article` VALUES (79, 'INSTALASI GAWAT DARURAT RSPK JABABEKA', 'instaslasi-gawat-darurat-rspk-jababeka', '<p>Instalasi Gawat Darurat (IGD) merupakan salah satu unit terdepan dari bagian pelayanan rumah sakit yang memberikan pelayanan pada pasien&nbsp;<strong>gawat darurat</strong>/emergency dan false emergency bekerja sama dengan unit terkait lainnya. Instalasi Gawat Darurat (IGD) Rumah Sakit memainkan peran utama untuk penanggulangan gawat darurat untuk melakukan pemeriksaan awal kasus gawat darurat, resusitasi dan stabilisasi.&nbsp;</p>', 'IMG_20161124_1244512.jpg', 6, 3, '2018-05-14 11:05:27', 10, '2018-11-09 13:12:02', 1, 1, 2);
INSERT INTO `article` VALUES (80, 'FRONT OFFICE RSPK JABABEKA', 'front-office-rspk-jababeka', '<p>Front Office merupakan suatu department&nbsp;di RS Permata Keluarga Jababeka yang mempunyai tugas dan tanggung jawab untuk pendaftaran pasien, baik pasien baru maupun pasien lama, yang mendapatkan pelayanan kesehatan di RS Permata Keluarga Jababeka.</p>', 'FOJB.jpg', 6, 3, '2018-05-14 11:12:13', 3, '2020-06-20 09:43:26', 1, 1, 2);
INSERT INTO `article` VALUES (81, 'RAWAT INAP (INPATIENT) KELAS VIP  RSPK JABABEKA', 'rawat-inap-inpatient-kelas-vip-rspk-jababeka', '<p><span style=\"color:#0000cd\"><strong>Fasilitas di kamar Kelas VIP :</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#000000\">1 Bed</span></li>\r\n	<li><span style=\"color:#000000\">AC</span></li>\r\n	<li><span style=\"color:#000000\">1 Televisi</span></li>\r\n	<li><span style=\"color:#000000\">1 Kulkas</span></li>\r\n	<li><span style=\"color:#000000\">1 Sofa Bed</span></li>\r\n	<li><span style=\"color:#000000\">1 Kamar mandi (water heater)</span></li>\r\n	<li><span style=\"color:#000000\">1 Lemari Baju</span></li>\r\n	<li><span style=\"color:#000000\">1 Nakas</span></li>\r\n	<li><span style=\"color:#000000\">1 Kursi &amp; 1 Meja Makan</span></li>\r\n</ul>', 'Rawat_Inap_VIP.jpg', 6, 3, '2018-05-14 11:16:12', 10, '2018-11-09 12:04:05', 1, 1, 2);
INSERT INTO `article` VALUES (82, 'RAWAT INAP (INPATIENT) KELAS 1 JABABEKA', 'rawat-inap-inpatient-kelas-1-jababeka', '<p style=\"margin-left:.7pt\"><span style=\"color:#0000cd\"><strong>Fasilitas di kamar Kelas</strong> <strong>I</strong><strong> :</strong></span></p>\r\n\r\n<p>-&nbsp; 2 Bed<br />\r\n-&nbsp;&nbsp;AC<br />\r\n-&nbsp;&nbsp;2 Televisi LED 24 inch<br />\r\n-&nbsp; 1&nbsp;Kulkas<br />\r\n-&nbsp;&nbsp;2 Sofa Bed<br />\r\n-&nbsp;&nbsp;1 Kamar mandi (water heater)<br />\r\n-&nbsp;&nbsp;2 Nakas</p>', 'Rawat_Inap_kels_1.jpg', 6, 3, '2018-05-14 11:20:44', 17, '2020-06-23 09:23:41', 1, 1, 2);
INSERT INTO `article` VALUES (83, 'RAWAT INAP (INPATIENT) KELAS 2  RSPK JABABEKA', 'rawat-inap-inpatient-kelas-2-rspk-jababeka', '<p style=\"margin-left:35.45pt\"><span style=\"color:#0000cd\"><strong>Fasilitas di kamar Kelas </strong><strong>II</strong><strong> :</strong></span></p>\r\n\r\n<ul>\r\n	<li>3 Bed</li>\r\n	<li>AC</li>\r\n	<li>1 Televisi</li>\r\n	<li>1 Kamar mandi (water heater)</li>\r\n	<li>3 Nakas</li>\r\n</ul>', 'Rawat_Inap21.jpg', 6, 3, '2018-05-14 11:24:41', 10, '2018-11-09 13:08:38', 1, 1, 2);
INSERT INTO `article` VALUES (84, 'RAWAT INAP (INPATIENT) KELAS 3  RSPK JABABEKA', 'rawat-inap-inpatient-kelas-3-rspk-jababeka', '<p><span style=\"color:#0000cd\"><strong>Fasilitas di kamar Kelas </strong><strong>III</strong><strong> :</strong></span></p>\r\n\r\n<ul>\r\n	<li>6 Bed</li>\r\n	<li>AC</li>\r\n	<li>2 Televisi</li>\r\n	<li>2 Kamar mandi (water heater)</li>\r\n	<li>6 Nakas</li>\r\n</ul>', 'Rawat_Inap3.jpg', 6, 3, '2018-05-14 11:28:51', 10, '2018-11-09 13:11:21', 1, 1, 2);
INSERT INTO `article` VALUES (85, 'INTENSIVE CARE UNIT (ICU) RSPK JABABEKA', 'intensive-care-unit-icu-rspk-jababeka', '<h3>ICU (Intensive Care Unite) adalah ruang rawat di rumah sakit dengan staf dan perlengkapan khusus ditunjukan untuk mengelola pasien dengan penyakit, trauma atau komplikasi yang mengancam jiwa akibat kegagalan disfungsi satu organ atau lebih akibat penyakit, bencan atau komplikasi yang masih ada &nbsp;harapan hidup.&nbsp;</h3>', 'ICUjb.jpg', 6, 3, '2018-05-14 11:30:43', 3, '2018-07-03 10:51:33', 1, 1, 2);
INSERT INTO `article` VALUES (86, 'PERINATOLOGI RSPK JABABEKA', 'perinatologi-rspk-jababeka', '<p>Ruang Perinatologi merupakan sebuah unit pelayanan khusus bagi bayi baru lahir yang mempunyai masalah/ sakit sampai usia satu bulan. Seperti telah diketahui bersama bahwa keadaan bayi baru lahir dipengaruhi oleh banyak hal sejak didalam kandungan ibunya, selama proses persalinan dan setelah kelahiran. Beberapa masalah dapat terjadi pada bayi baru lahir sehingga memrlukan penanganan dan perawatan khusus agar bayi dapat diselamatkan dan mempunyai kualitas hidup yang baik.</p>', 'Perinajbb.jpg', 6, 3, '2018-05-14 11:32:38', 3, '2018-07-03 14:12:42', 1, 1, 2);
INSERT INTO `article` VALUES (87, 'KLINIK OBGYN RSPK JABABEKA', 'poliklinik-anak-rspk-jababeka', '<p>Obgyn adalah Obstetri dan Ginekologi. Obgyn adalah singkatan yang digunakan untuk Obstetri dan Ginekologi. ... Secara medis dikenal sebagai dokter spesialis obstetri dan ginekologi atau sering kali disebut dokter spesialis kebidanan dan penyakit kandungan.</p>', 'POLIANAKJB.jpg', 6, 3, '2018-05-14 11:35:00', 3, '2018-07-03 15:20:43', 1, 1, 2);
INSERT INTO `article` VALUES (90, 'POLI ANAK', 'poli-anak-rspk-jababeka', '<p>Poliklinik Anak Rumah Sakit &quot; Permata Keluarga Jababeka &rdquo;&nbsp;Selain memperhatikan kualitas layanan terhadap pasien, menjaga lingkungan tetap nyaman dan bersih juga menjadi prioritas kami dalam melakukan pelayanan, tersedia pojok laktasi untuk ibu menyusui, tersedianya ruang konsultasi yang bersih dan nyaman.<br />\r\nBerbagai layanan yang dapat dilakukan di poliklinik anak Rumah Sakit &ldquo;Permata Keluarga Jababeka&rdquo;, yaitu&nbsp;:<br />\r\n-&nbsp;&nbsp;Konsultasi dengan tenaga ahli,<br />\r\n-&nbsp;&nbsp;Layanan imunisasi,<br />\r\n-&nbsp;&nbsp;Layanan laktasi,<br />\r\n-&nbsp;&nbsp;Layanan tumbuh kembang&nbsp;<br />\r\n-&nbsp;&nbsp;Layanan fisioterapi anak<br />\r\n-&nbsp; Layanan pemeriksaan gigi anak<br />\r\n-&nbsp; Layanan lainnya yang berhubungan dengan bayi, anak -anak<br />\r\n<br />\r\nRumah Sakit &quot; Permata Keluarga Jababeka &rdquo; terus berupaya untuk memberikan pelayanan kesehatan yang optimal dan melakukan pelayanan yang baik.yang didukung oleh dokter spesialis beserta tenaga-tenaga medis yang berkualitas dan professional.</p>', 'POLIANAKJB1.jpg', 6, 3, '2018-05-14 11:42:27', 3, '2020-06-20 11:34:07', 1, 1, 2);
INSERT INTO `article` VALUES (91, 'KLINIK MATA RSPK JABABEKA', 'poliklinik-mata-rspk-jababeka', '<p>Klinik mata Rumah Sakit Permata Keluarga Jababeka merupakan suatu instalasi yang memberikan pelayanan mata secara menyeluruh kepada masyarakat secara nyaman dan terpercaya,&nbsp;yang meliputi aspek preventif, kuratif, promotif dan rehabilitatif dengan harapan dapat menurunkan angka kebutaan di Indonesia.</p>', 'Klinik_Mata.jpg', 6, 3, '2018-05-14 11:54:19', 3, '2018-07-03 15:23:12', 1, 1, 2);
INSERT INTO `article` VALUES (92, 'KLINIK THT RSPK JABABEKA', 'poli-tht-rspk-jababeka', '<p>Klinik THT Rumah Sakit Permata Keluarga Jababeka membantu Anda dalam memberikan solusi masalah kesehatan Anda khususnya pada telinga, hidung dan tenggorokan. Melalui dokter spesialis THT yang ahli di bidangnya, serta ditunjang oleh peralatan medis yang modern, lengkap dan memadai, pemberian pelayanan bagi Anda dan keluarga menjadi lebih optimal.</p>', 'POLI_THT1.jpg', 6, 3, '2018-05-14 11:55:51', 3, '2018-07-03 15:24:02', 1, 1, 2);
INSERT INTO `article` VALUES (93, 'ORTHOPEDY RSPK JABABEKA', 'orthopedy-rspk-jababeka', '<h3>Bedah ortopedi adalah tindakan pembedahan yang dilakukan oleh ahli ortopedi yang berpengalaman atau dokter bedah tulang untuk merawat masalah muskuloskeletal yang mempengaruhi tulang, sendi, otot, tendon, dan ligamen yang disebabkan oleh kecelakaan, trauma, cedera, atau kondisi kronis lainnya. Pembedahan ortopedi juga dapat memperbaiki permasalahan pada sistem saraf yang terhubung ke tulang belakang, kelainan bawaan, serta permasalahan muskuloskeletal yang disebabkan oleh penuaan.</h3>', 'Orthopedy.jpg', 6, 3, '2018-05-14 11:56:56', 3, '2018-07-03 11:09:32', 1, 1, 2);
INSERT INTO `article` VALUES (94, 'POLI KLINIK BEDAH UMUM', 'bedah-umum-rspk-jababeka', '<h3>Poli Klinik Bedah Umum adalah disiplin medis yang melibatkan berbagai jenis tindakan bedah untuk mengobati berbagai masalah kesehatan dan penyakit.</h3>\r\n\r\n<h3>Dalam bedah umum, ahli bedah diharapkan mampu melakukan perawatan pra operasi maupun pasca operasi, dan manajemennya, selain tindakan bedah itu sendiri. Ahli bedah umum dapat mendiagnosa beberapa jenis penyakit, terutama yang terkait dengan perut dan organ-organ yang terhubung. Ini termasuk penyakit pada saluran empedu, hati, pankreas, limpa, usus buntu, usus kecil dan besar, rektum, dan perut. Dokter bedah juga dapat membedah di daerah dada, kelenjar tiroid dalam, dan hernia. Dalam batas tertentu, dokter bedah umum juga bertanggung jawab untuk prosedur yang dilakukan pada kulit dan payudara.</h3>', 'Bedah_Umum.jpg', 6, 3, '2018-05-14 11:58:06', 3, '2020-06-20 09:45:16', 1, 1, 2);
INSERT INTO `article` VALUES (95, 'KLINIK SARAF RSPK JABABEKA', 'poli-saraf-rspk-jababeka', '<p><strong>Saraf</strong>&nbsp;adalah serat-serat yang menghubungkan organ-organ tubuh dengan sistem&nbsp;<strong>saraf</strong>&nbsp;pusat (yakni otak dan sumsum tulang belakang) dan antar bagian sistem&nbsp;<strong>saraf</strong>&nbsp;dengan lainnya.&nbsp;<strong>Saraf</strong>&nbsp;membawa impuls dari dan ke otak atau pusat&nbsp;<strong>saraf</strong>. Penyakit yang berhubungan dengan persarafan ditangani oleh dokter spesialis saraf yang jeli, telaten, ramah dan komunikatif dalam pemeriksaan serta penegakan diagnosa yang akurat.</p>', 'POLI_SARAF_.jpg', 6, 3, '2018-05-14 11:59:22', 3, '2018-07-03 15:28:33', 1, 1, 2);
INSERT INTO `article` VALUES (96, 'KLINIK UMUM RSPK JABABEKA', 'poliklinik-umu-rspk-jababeka', '<p><strong>Klinik umum</strong>&nbsp;adalah pelayanan kesehatan primer oleh dokter&nbsp;<strong>umum</strong>&nbsp;untuk seluruh anggota keluarga, dari anak hingga orang tua. Dokter-dokter kami menangani dan mengobati segala jenis penyakit serta merujuk pasien ke dokter spesialis jika diperlukan.</p>', 'Poli_Umum.jpg', 6, 3, '2018-05-14 12:00:19', 3, '2018-07-03 15:30:14', 1, 1, 2);
INSERT INTO `article` VALUES (97, 'KLINIK KULIT DAN KELAMIN RSPK JABABEKA', 'poli-kulit-dan-kelamin-rspk-jababeka', '<p><strong>Klinik Kulit dan Kelamin</strong>&nbsp;adalah unit yang ditujukan untuk membantu pasien dengan permasalahan kesehatan&nbsp;<strong>kulit</strong>, kecantikan, dan penyakit&nbsp;<strong>kelamin</strong>.&nbsp;<strong>Klinik kulit dan kelamin</strong>&nbsp;juga ditunjang pula dengan peralatan dan fasilitas ruang konsultasi, tindakan, perawatan&nbsp;<strong>kulit</strong>&nbsp;dan kecantikan yang lengkap.</p>', 'Poli_Kulit_dan_Kelamin.jpg', 6, 3, '2018-05-14 12:01:45', 3, '2018-07-03 15:19:41', 1, 1, 2);
INSERT INTO `article` VALUES (98, 'UROLOGI RSPKJABABEKA', 'urologi-rspkjababeka', '<p>coming soon</p>', 'Klinik_Urologi.jpg', 6, 3, '2018-05-14 12:03:08', 3, '2018-05-14 12:03:26', 1, 1, 2);
INSERT INTO `article` VALUES (99, 'KLINIK PENYAKIT DALAM RSPK JABABEKA', 'klinik-penyakit-dalam-rspk-jababeka', '<p>coming soon</p>', 'Penyakit_dalam.jpg', 6, 3, '2018-05-14 12:04:21', 3, '2018-05-14 12:04:44', 1, 1, 2);
INSERT INTO `article` VALUES (100, 'KLINIK GIGI RSPK JABABEKA', 'poli-gigi-rspk-jababeka', '<p>Poli Gigi&nbsp;Rumah Sakit &quot;merupakan salah satu unit pelayanan yang khusus memberikan pelayanan kesehatan gigi dan mulut.</p>\r\n\r\n<p>Fasilitas yang ada di dalam poli gigi berupa 2 Dental Unit yang memiliki set yang lengkap, bleaching set yang biasa digunakan dokter gigi untuk melakukan perawatan bleaching/ pemutihan gigi, camera intraoral, memudahkan dokter gigi untuk memperlihatkan keadaan gigi dan mulut kepada pasien dan fasilitas penunjang lain berupa pemeriksaan foto rontgen yang bisa diarahkan menuju ruang/ unit Radiologi.</p>\r\n\r\n<p>Didalam ruang praktek juga memiliki set hands instrumen yang lengkap dan kestrilannya poli gigi Rumah Sakit Harapan Keluarga melayani perawatan gigi dan mulut mulai dari tindakan pencegahan, pemeriksaan gigi dan mulut berkala setiap 6 bulan sekali / pemeriksaan gigi dan mulut untuk paket Medical Check Up, perawatan konservasi berupa penambalan gigi, venners, crown dan bridge, perawatan saluran akar gigi dll. perawatan periodontal berupa implant, perawatan gigi goyah, bleaching, gingivektomi, flap dll. tindakan bedah mulut berupa pencabutan gigi sampai operasi odontektomi dll.</p>\r\n\r\n<p><br />\r\nRumah Sakit &quot; Permata Keluarga Jababeka &rdquo; terus berupaya untuk memberikan pelayanan kesehatan yang optimal dan melakukan pelayanan yang baik.yang didukung oleh dokter spesialis beserta tenaga-tenaga medis yang berkualitas dan professional.</p>', 'Poli_Gigi1.jpg', 6, 3, '2018-05-14 12:05:24', 3, '2020-06-20 12:18:51', 1, 1, 2);
INSERT INTO `article` VALUES (101, 'FISIOTHERAPHY RSPK JABABEKA', 'fisiotheraphy-rspk-jababeka', '<p>Fisioterapi adalah proses merehabilitasi seseorang agar terhindar dari cacat fisik melalui serangkaian pencegahan, diagnosis, serta penanganan untuk menangani gangguan fisik pada tubuh akibat cedera atau penyakit</p>', 'Fisiotheraphy.jpg', 6, 3, '2018-05-14 12:06:32', 3, '2018-07-03 10:49:06', 1, 1, 2);
INSERT INTO `article` VALUES (102, 'Ruangan Operasi (OK)', 'ruangan-operasi-ok', '<h3>Kamar operasi adalah suatu unit khusus di rumah sakit, tempat untuk melakukan tindakan pembedahan, baik elektif maupun emergency, yang membutuhkan keadaan suci hama (steril). Kamar bedah adalah ruang dimana dilakukan tindakan tindakan sehubungan dengan pembedahan.</h3>', 'Ok1.jpg', 6, 3, '2018-05-14 12:07:29', 3, '2018-07-03 10:46:25', 1, 1, 2);
INSERT INTO `article` VALUES (103, 'LABORATORIUM RSPK JABABEKA', 'laboratorium-rspk-jababeka', '<h3>Pelayanan Laboratorium merupakan salah satu fasilitas penunjang medis dari RS Permata Keluarga Jababeka sebagai penunjang diagnosis dalam penetapan penyakit. Laboratorium&nbsp;RS Permata Keluarga Jababeka <strong>buka 24 jam </strong>yang didukung dengan tenaga analis&nbsp;yang profesional.</h3>', 'Laboratorium1.jpg', 6, 3, '2018-05-14 12:08:24', 17, '2020-06-22 11:28:35', 1, 1, 2);
INSERT INTO `article` VALUES (104, 'USG 4D RSPK JABABEKA', 'usg-4d-rspk-jababeka', '<h3>USG atau ultrasonografi adalah pemeriksaan yang bertujuan untuk melihat bagian dalam tubuh. Pemeriksaan ini paling sering digunakan untuk melihat kondisi dalam perut, termasuk kandungan dan janin. Pemeriksaan USG menggunakan gelombang suara frekuensi tinggi yang tidak terdengar oleh telinga manusia.</h3>\r\n\r\n<h3>Fungsi USG 4 dimensi adalah untuk melihat kondisi janin di dalam kandungan, berapa jumlah bayi yang dikandung, apakah organ tubuh janin normal, gerakannya normal, ukurannya normal, dan lain sebagainya.&nbsp;</h3>', 'USG_4D.jpg', 6, 3, '2018-05-14 12:09:20', 3, '2018-07-03 10:37:08', 1, 1, 2);
INSERT INTO `article` VALUES (105, 'CT SCAN RSPK JABABEKA', 'ct-scan-rspk-jababeka', '<h3>CT Scan adalah singkatan dari Computerized Tomography Scan,&nbsp;suatu alat pencitraan atau prosedur medis untuk menggambarkan bagian-bagian tubuh tertentu menggunakan bantuan sinar-X khusus. Dibandingkan dengan foto rongsen, CT scan lebih detil karena mengambil gambar dari potong-potongan organ yang diperiksa.<br />\r\n&nbsp;</h3>', 'CT_SCAN.jpg', 6, 3, '2018-05-14 12:10:28', 3, '2018-07-03 14:08:06', 1, 1, 2);
INSERT INTO `article` VALUES (106, 'PANORAMIC RSPK JABABEKA', 'panoramic-rspk-jababeka', '<p><strong>Panoramic&nbsp;</strong>digunakan untuk melihat gigi secara keseluruhan. Keuntungan&nbsp;<strong>panoramic</strong>&nbsp;adalah bisa melihat keseluruhan gigi hanya dengan satu kali pemeriksaan.</p>', 'Panoramic.jpg', 6, 3, '2018-05-14 12:11:37', 3, '2018-07-03 15:40:17', 1, 1, 2);
INSERT INTO `article` VALUES (107, 'X-Ray', 'x-ray', '<p>X-ray merupakan prosedur yang umum digunakan untuk mengambil gambar bagian dalam tubuh pasien. Prosedur yang dilakukan dengan cepat dan tanpa rasa sakit ini dapat membantu dokter mendiagnosis dan memantau beberapa kondisi tubuh. seperti infeksi, patah tulang, radang sendi, pembusukan gigi, osteoporosis, atau kanker tulang.</p>', 'X-Ray.jpg', 6, 3, '2018-05-14 12:12:20', 3, '2018-07-03 15:42:29', 1, 1, 2);
INSERT INTO `article` VALUES (108, 'ELEKTROENSEFALOGRAFI (EEG) RSPK JABABEKA', 'elektroenselofalografi-rspk-jababeka', '<h3>Elektroensefalografi&nbsp;(EEG) adalah salah satu tes yang dilakukan untuk mengukur aktivitas kelistrikan dari otak untuk mendeteksi adanya kelainan dari otak. Tindakan ini menggunakan sensor khusus yaitu elektroda yang dipasang di kepala dan dihubungkan melalui kabel menuju komputer. EEG digunakan terutama untuk meneliti epilepsy dan penyakit Alzheimer.</h3>', 'Elektroensefalografi.jpg', 8, 3, '2018-05-14 12:13:46', 17, '2020-06-22 11:10:27', 1, 1, 2);
INSERT INTO `article` VALUES (109, 'AUDIOMETRI', 'audiometri-rspk-jababeka', '<h2><span style=\"font-size:14px\"><strong>Apa itu Pemeriksaan Audiometri?</strong></span><br />\r\n<span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Pemeriksaan audiometri adalah sebuah pemeriksaan yang dilakukan untuk memeriksa tingkat fungsi dari pendengaran seseorang dengan cara mendengar suara, nada, atau frekuensi tertentu. Pemeriksaan ini dilakukan untuk mengetahui apakah terjadi gangguan pendengaran setelah operasi dilakukan pada pengidap tumor di atau sekitar telinga. Tidak hanya itu, pemeriksaan audiometri juga berguna untuk mengevaluasi apakah seseorang membutuhkan alat bantu dengar atau tindakan operasi guna meningkatkan kemampuan pendengaran.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Kenapa Melakukan Pemeriksaan Audiometri?</strong></span><br />\r\n<span style=\"font-size:14px\">Indikasi pemeriksaan dilakukannya pemeriksaan audiometri adalah:<br />\r\n-&nbsp;&nbsp;Terjadinya penurunan kualitas pendengaran.<br />\r\n-&nbsp;&nbsp;Telinga mengeluarkan dengungan.<br />\r\n-&nbsp;&nbsp;Telinga terasa penuh.Keluar cairan dari telinga.<br />\r\n-&nbsp;&nbsp;Gangguan keseimbangan.Trauma pada telinga.</span></p>', 'Audiometri.jpg', 6, 3, '2018-05-14 12:15:14', 17, '2020-06-23 09:18:09', 1, 1, 2);
INSERT INTO `article` VALUES (110, 'SPIROMETRI RSPK JABABEKA', 'spirometri-rspk-jababeka', '<p><strong>Spirometri</strong>&nbsp;adalah suatu pemeriksaan yang dilakukan untuk mengukur secara objektif kapasitas atau fungsi paru (ventilasi) pada pasien dengan suatu indikasi medis, sehingga dapat diketahui ada tidaknya gangguan yang terjadi di paru-paru dan saluran pernapasan.</p>', 'Spirometri.jpg', 6, 3, '2018-05-14 12:16:25', 3, '2018-07-03 15:43:54', 1, 1, 2);
INSERT INTO `article` VALUES (113, 'Poli Bedah Umum', 'poli-bedah-umum', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksaan fisik oleh dokter spesialis bedah umum&nbsp; sesuai dengan keluhan yang dirasa oleh pasien. Pelayanan dan Fasilitas kami ditunjang dengan kelengkapan klinik spesialis.</span></p>\r\n\r\n<p>&nbsp;</p>', 'poli_bedah_umum.jpg', 6, 3, '2018-07-02 09:03:23', 3, '2018-07-02 09:03:40', 1, 1, 1);
INSERT INTO `article` VALUES (114, 'Poli Urologi', 'poli-urologi', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Poliklinik&nbsp; Urologi melayani masyarakat yang membutuhkan&nbsp; pelayanan kesehatan di bidang urologi yang langsung ditangani oleh dokter spesialis yang telah berpengalaman di bidangnya.</span></span></p>', 'poli_orologi.jpg', 6, 3, '2018-07-02 09:05:48', 3, '2018-07-02 09:06:25', 1, 1, 1);
INSERT INTO `article` VALUES (115, 'Poli Paru', 'poli-paru', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Organ paru memegang peranan yang sangat penting, Khususnya di daerah industri seperti Cikarang. Kami menyediakan pelayanan kepada pasien untuk konsultasi dan pemeriksaan fisik oleh dokter spesialis paru sesuai dengan keluhan yang dirasa oleh pasien&nbsp;</span></p>', 'POli_Paru.jpg', 6, 3, '2018-07-02 09:11:18', 3, '2018-07-02 09:11:35', 1, 1, 1);
INSERT INTO `article` VALUES (117, 'Poli Akupuntur', 'poli-akupuntur', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Akupuntur efektif melancarkan aliran darah dan meningkatkan daya tahan tubuh. Banyak pula yang mengandalkannya untuk terapi estetika seperti pelangsingan tubuh, penyembuhan pasca stroke, dll. Kini anda dapat langsung mengunjungi&nbsp; Poli Akupuntur kami dan dapatkan Pelayanan tebaik kami.</span></p>', 'Poli_Akupuntur.jpg', 6, 3, '2018-07-02 10:42:20', 3, '2018-07-02 10:42:44', 1, 1, 1);
INSERT INTO `article` VALUES (118, 'Fisioterapi', 'fisioterapi', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Fisioterapi adalah bentuk pelayanan kesehatan yang ditujukan kepada individu dan atau kelompok untuk mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang daur kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi, komunikasi. Kami juga juga melayani pijat bayi untuk memperlancar petumbuhan dan perkembangan bayi.</span></p>', 'fisio_terafi.jpg', 6, 3, '2018-07-02 10:46:16', 3, '2018-07-02 10:46:35', 1, 1, 1);
INSERT INTO `article` VALUES (119, 'Ruang Operasi', 'ruang-operasi', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">Salah satu fasilitas yang ada di rumah sakit dan termasuk sebagai fasilitas yang mempunyai banyak persyaratan. Fasilitas ini dipergunakan untuk pasien yang membutuhkan tindakan operasi, terutama untuk tindakan operasi besar.</span></p>', 'ok11.jpg', 6, 3, '2018-07-02 10:49:35', 3, '2018-07-02 13:23:40', 1, 1, 1);
INSERT INTO `article` VALUES (124, 'Radiologi Rspk Lippo Cikarang', 'radiologi-rspk-lippo-cikarang', '<p>Radiologi&nbsp;</p>', 'rongen.jpg', 6, 3, '2018-07-03 14:08:41', 3, '2018-07-03 14:11:39', 1, 1, 1);
INSERT INTO `article` VALUES (125, 'Medical Check Up ( Recruitment / Annual )', 'medical-check-up-recruitment-annual', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Adalah pemeriksaan awal untuk mengetahui &nbsp;kondisi kesesehatan&nbsp;&nbsp; seseorang, mendeteksi dini terhadap penyakit-penyakit kronis.</span></span></p>', 'mcu.jpg', 6, 3, '2018-07-03 14:16:56', 3, '2018-07-03 14:18:23', 1, 1, 1);
INSERT INTO `article` VALUES (127, 'Ruangan Spriometri', 'ruangan-spriometri', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Spriometri adalah Suatu pemeriksaan yang dilakukan untuk mengukur secara objektif kapasitas atau fungsi paru (Ventilasi) Pada pasien dengan suatu indikasi medis, sehingga&nbsp; dapat diketahui ada tindaknya gangguan yang terjadi di paru - paru dan saluran pernafasan.</span></span></p>', 'spriometri.jpg', 6, 3, '2018-07-16 14:32:51', 3, '2018-07-16 14:33:39', 1, 1, 1);
INSERT INTO `article` VALUES (130, 'Melayani Operasi Katarak di Rs. Permata Keluarga Lippo Cikarang', 'melayani-operasi-katarak-di-rs-permata-keluarga-lippo-cikarang', '<p><span style=\"font-size:18px\">Rs. Permata Keluarga Lippo Cikarang. Salam sehat Sahabat Permata&nbsp;<img alt=\"wink\" src=\"http://permatakeluarga.net/assets/cms/ckeditor_full/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" />&quot; Kini Rs. Permata Keluarga Lippo Cikarang telah dapat Melayani Operasi Katarak &quot;</span></p>', 'Katarak_Umum_copy1.jpg', 9, 3, '2018-08-28 09:30:10', 3, '2018-08-28 09:30:34', 1, 1, 1);
INSERT INTO `article` VALUES (131, 'Melayani Pasien Bpjs Kesehatan', 'melayani-pasien-bpjs-kesehatan', '<h1 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">RS. Permata Keluarga Lippo Cikarang Dear sahabat permata&nbsp;<img alt=\"wink\" src=\"http://permatakeluarga.net/assets/cms/ckeditor_full/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /><br />\r\nRS Permata Keluarga Lippo Cikarang sudah bisa melayani pasien dengan tanggungan BPJS kesehtan.<br />\r\nBagi sahabat permata yg ingin berobat dengan menggunakan fasilitas BPJS kesehatan, silahkan datang ke RS Permata Keluarga Lippo Cikrang.<br />\r\nDengan mengikuti ketentuan yy diberlakukan oleh BPJS Kesehatan</span></span></span></h1>', 'BPJS_Kesehatan_set_A4.jpg', 9, 3, '2018-08-28 09:36:16', 3, '2018-08-28 09:38:00', 1, 1, 1);
INSERT INTO `article` VALUES (132, 'Seminar Dampak pengguna gadget Terhadap Anak', 'seminar-dampak-pengguna-gadget-terhadap-anak', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Sahabat Permata,<br />\r\nKami mengundang Bapak / Ibu untuk mengikuti Seminar Awam di RS. Permata Keluarga Lippo Cikarang dengan tema &quot; Pola Makan Seimbang Pada Anak Menuju Generasi Gemilang dan Dampak Penggunaan Gadget Terhadap Kesehatan Anak &quot;. dengan pembicara &quot; dr. Nadia Deviana E., SpA dan dr.Dian Ariani, SpM &quot;<br />\r\nSeminar ini gratis, terbuka untuk umum dan peserta terbatas. Pendaftaran dapat dilakukan melalui nomor : 082216159993 (Wulan) dan 085624849103 (Novi) atau telp langsung ke Rumah sakit Permata Keluarga Lippo Cikarang di nomor 021-89905588 ext : 005/006<br />\r\n<br />\r\nTerima Kasih</span></span></p>', 'seminar.jpg', 9, 3, '2018-09-01 07:17:53', 3, '2018-09-01 07:18:41', 1, 1, 1);
INSERT INTO `article` VALUES (133, 'Lowongan Dokter Spesialis', 'lowongan-dokter-spesialis', '<p><span style=\"font-size:14px\">Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :<br />\r\n1. Dokter Spesialis Penyakit Dalam<br />\r\n2. Dokter Spesialis Kandungan (Perempuan)<br />\r\n3. Dokter Spesialis Anak<br />\r\n4. Dokter Spesialis Kulit</span></p>\r\n\r\n<p><span style=\"font-size:14px\">5. Dokter Bedah Umum</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke <a href=\"mailto:hrd@permatakeluarga.net\">hrd@permatakeluarga.net</a> &amp; <a href=\"mailto:marketing@permatakeluarga.net\">marketing@permatakeluarga.net</a></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Terima Kasih</span></p>', 'logo-lowongan-kerja.jpg', 3, 3, '2018-09-21 15:12:28', 15, '2018-12-22 10:45:39', 1, 1, 1);
INSERT INTO `article` VALUES (134, 'Pelatihan P3K - PT. Cikarang Berkat Makmur', 'pelatihan-p3k-pt-cikarang-berkat-makmur', '<p>&nbsp;Pelatihan P3K - PT. Cikarang Berkat Makmur ( Hotel Harper cikarang) jumat 12 oct 2018</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'WhatsApp_Image_2018-10-15_at_08_38_42.jpeg', 9, 3, '2018-10-15 09:56:45', 3, '2018-10-15 09:58:44', 1, 1, 1);
INSERT INTO `article` VALUES (136, 'PATAH TULANG / FRACTURE', 'patah-tulang-fracture', '<p><span style=\"color:#0000ff\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\"><strong>Apakah Patah Tulang?</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Patah tulang adalah kondisi terputusnya keutuhan susunan tulang pada tubuh manusia ketika tulang dihantam oleh sesuatu yang kekuatannya melebihi kekuatan tulang itu sendiri.</span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\"><strong>Gejala-gejala Patah Tulang :</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Pembengkakan, kecuali fraktur terjadi pada tulang leher.</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Perubahan bentuk tulang, seperti pemendekan tulang, tulang mengalami rotasi, dan pembentukan sudut tulang baru</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Rasa nyeri yang hebat pada daerah patah tulang.</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\"><strong>Penyebab Terjadinya Patah Tulang :</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Kecelakaan saat kerja, saat berkendara, saat olahraga</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Ketika terjatuh dari ketinggian tertentu</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Trauma dan benturan yang keras pada bagian tertentu</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Adanya keadaan tidak normal pada tulang atau penyakit tertentu</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Usia dan Osteoporosis</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\"><strong>Pertolongan Pertama pada Patah Tulang</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Pembidaian : tindakan untuk mempertahankan kedudukan tulang dengan menggunakan alat. JANGAN DIPIJAT / DIURUT, segera bawa pasien ke IGD Rumah Sakit untuk penanganan lebih lanjut.</span></p>\r\n\r\n<p><span style=\"color:#008080\"><span style=\"font-size:16px\"><span style=\"font-family:Comic Sans MS,cursive\">Manfaat Pembidaian :</span></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mencegah pergerakan tulang yang patah</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mengurangi nyeri</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mencegah cedera lebih lanjut</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mengistirahatkan daerah tulang yang patah</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mengurangi pendarahan</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-family:Comic Sans MS,cursive\"><strong>Apabila Anda mengalami Fraktur atau Patah Tulang, segera bawa ke Rumah Sakit dan konsultasikan dengan Dokter Spesialis Orthopedi kami.</strong></span></span></p>\r\n\r\n<p>&nbsp;</p>', 'Xray_-_AP_and_Lat_-_Galeazzi_fx_moved.jpg', 1, 10, '2018-11-08 09:57:22', 10, '2018-11-08 11:11:34', 1, 1, 2);
INSERT INTO `article` VALUES (137, 'SINUSITIS', 'sinusitis', '<p><strong><span style=\"color:#b22222\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\">Apakah Sinusitis?</span></span></span></strong></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Sinusitis adalah peradangan, atau pembengkakan dari jaringan yang melapisi sinus. Biasanya sinus berisi udara, tetapi ketika sinus tersumbat dan berisi cairan, kuman (bakteri, virus, dan jamur) dapat berkembang dan menyebabkan infeksi.</span></p>\r\n\r\n<p><strong><span style=\"font-size:22px\"><span style=\"color:#b22222\"><span style=\"font-family:Comic Sans MS,cursive\">Apa Gejala Umum Sinusitis?</span></span></span></strong></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Ingus kental</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Hidung tersumbat</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Penciuman terganggu</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Nyeri telinga</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Nyeri di rahang atas dan bawah</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Nyeri dan bengkak sekitar mata, pipi, hidung dan dahi</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Batuk yang memburuk pada malam hari</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Nyeri tenggorokan</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Bau mulut, lemas, dan pusing</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#b22222\"><span style=\"font-size:22px\"><strong><span style=\"font-family:Comic Sans MS,cursive\">Apa Saja Penyebab Sinusitis?</span></strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Iritatif (cat, talkum dan serbuk batu bara)</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Korosif (klorin, sulfur dioksida, amonia, formaldehida)</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Infeksi virus flu yang menyebar pada saluran sinus</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Infeksi jamur dan infeksi pada gigi</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Alergi terhadap makanan, debu, dan juga cuaca</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Kebiasaan merokok</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Polusi dari udara kotor</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Imunologi</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#b22222\"><span style=\"font-size:22px\"><strong><span style=\"font-family:Comic Sans MS,cursive\">Penatalaksanaan</span></strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Objektif : meminimalkan gejala hidung, mencegah timbulnya asthma</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Intervensi lingkungan : hindari penyebab</span></li>\r\n</ol>\r\n\r\n<p><span style=\"color:#b22222\"><span style=\"font-size:22px\"><strong><span style=\"font-family:Comic Sans MS,cursive\">Pengobatan</span></strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Akut : antibiotik 2 sampai 3 minggu, bersama dengan dekongestan dan mukolitik</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Obati penyebab dasar</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Pembedahan (apabila tidak berhasil dengan obat-obatan atau serangan berulang</span></li>\r\n</ol>\r\n\r\n<p><strong><span style=\"color:#b22222\"><span style=\"font-family:Comic Sans MS,cursive\">Apabila Anda mengalami gejala Sinusitis, segera hubungi dan konsultasikan dengan Dokter Spesialis THT kami.</span></span></strong></p>', 'la_sinusitis_podria_poner_en_riesgo_tu_vida.jpg', 1, 10, '2018-11-08 10:25:03', 10, '2018-11-08 11:11:53', 1, 1, 2);
INSERT INTO `article` VALUES (139, 'HEPATITIS B', 'hepatitis-b', '<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#ff8c00\"><span style=\"font-size:22px\"><strong>Apakah Hepatitis B?</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Hepatitis B adalah infeksi hati yang disebabkan oleh virus Hepatitis B yang dapat mengakibatkan kerusakan pada hati selanjutnya dan menyebabkan&nbsp; kanker hati. Orang-orang yang terinfeksi virus ini tidak menyadari kalau mereka sudah terinfeksi.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:22px\"><span style=\"color:#ff8c00\"><strong>Apa Gejala Umum Hepatitis B?</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Mudah lelah dan capai</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Nyeri pada persendian</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Warna kulit dan mata kelihatan menguning</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Perut seringkali terasa mual dan hilang nafsu makan</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Air seni penderita berwarna gelap (seperti air teh kecoklatan)</span></li>\r\n</ol>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#ff8c00\"><span style=\"font-size:22px\"><strong>Bagaimana Hepatitis B Dapat Menular?</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Virus ini dapat menular melalui hubungan seksual tanpa pelndung, melalui kontak cairan tubuh dan darah contohnya : penggunaan jarum, pisau cukur dan sikat gigi secara bersama. Selain itu virus ini juga dapat menular melalui transplasenta (ibu kepada janin).</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#ff8c00\"><span style=\"font-size:22px\"><strong>Bagaimana Cara Pencegahan Hepatitis B?</strong></span></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Imunisasi/ Vaksin (anak maupun dewasa)</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\"><em>Safe sex</em> (berhubungan intim dengan aman dan tidak berganti-ganti pasangan)</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Tidak menggunakan barang pribadi secara bersama-sama seperti : pisau cukur, sikat gigi, gunting kuku, pemakaian jarum suntik, dan lain-lain</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Menghindari kontak dengan darah atau cairan tubuh orang lain</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Bagi wanita hamil, dianjurkan kontrol kehamilan secara teratur.</span></li>\r\n</ol>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#ff8c00\"><strong>Untuk mengetahui seseorang terjangkit Hepatitis B atau tidak, dapat dilakukan pengecekan Laboratorium dan konsultasi Dokter.</strong></span></span></p>', 'aiming-to-cure-hepatitis-b-1920.jpg', 1, 10, '2018-11-08 11:07:29', 10, '2018-11-08 11:09:05', 1, 1, 2);
INSERT INTO `article` VALUES (140, 'Mengapa Obat Antibiotik harus dihabiskan ?', 'mengapa-obat-antibiotik-harus-dihabiskan', '<p>Dilansir dari&nbsp;<a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Fboldsky.com%2F%3Ffbclid%3DIwAR1BLJk3r94YWLI_2d62lPNeKY0_tmo2Y5Dii0oYQZMWxdjHmtxEJJmFdD8&amp;h=AT0sEHofH-zmR6VftqZqvrBOo7a2XbGrFUw4k2CsfL0YeZo_EDwu0hC2c5nOx3Lp5b6IDplIBriRBOB7c9AT_j8Py7GmJlnIPixIWllpoOcQv9kMdFjUzOuEfc0V0ttSShKjDLdkeWZtfKfu-5gYuhpg3TtunVq7WlpeCYbvorNG3JuUwyKBQrPzlXf3eOac0958Ye4dkxDEq-PeQNA9c8QRdFIAfZ3ISzutntv3_7Dn0-Tn8xSwMkb8ZY20uSCctAfmBU_ex4waXw5Kexe99jwzuId6kDqKrMvOiPhU4T0MtoBF5gtvrGNuayGc1bMOm04vJ4_by0JrVXcLl03ibZTBgBXQcXE722-eEI2Hgt3_8rAC8t1XjRqDpgkKhESIs1b-j_og5_RbEqGJ6sTmgC6Yes8OmkPW9sRikIVQ6YQalsqRnYXhPo_CpWBE6CbdwZV8iJchBEni94u8eDJOwDau3bwP2CqnyLGdNaViIDtzi_xrFOHvnfNFhG1ppa4E3a4xiCsg-0N8ymI3BWAUi0t3a28eg801SLUxO2ueh2n7vS7uEf9XWyupHvOWU5dq2Sy9IVI4pOsIbwKheb1DH0c0nKxvULdE_FuCSkMTyegJO6lHYGdoLur9RaudqgBfIw\" rel=\"noopener nofollow\" target=\"_blank\">boldsky.com</a>, berikut adalah alasan kenapa Anda harus meminum obat antibiotik yang diresepkan sampai habis.<br />\r\n.<br />\r\n1.Bakteri bisa tumbuh lagi, Jika Anda tidak menghabiskan antibiotik yang diresepkan, maka bakteri yang sebelumnya telah Anda bunuh bisa kambuh lagi. Hal ini akan membuat penyakit bisa kambuh dan itu malah berbahaya bagi kesehatan tubuh Anda.&nbsp;<br />\r\n.<br />\r\n2.Infeksi bisa kambuh, Selain bakteri yang bisa tumbuh lagi, alasan utama kenapa Anda harus menghabiskan antibiotik Anda adalah infeksi yang bisa kambuh lagi. Kambuhnya penyakit dalam interval waktu yang singkat justru berbahaya untuk kesehatan Anda.&nbsp;<br />\r\n.<br />\r\n3.Antibiotik tidak akan bekerja secara maksimal, Menurut pendapat para dokter, antibiotik bisa bekerja secara maksimal di tubuh jika sudah dikonsumsi dalam dosis tertentu. Namun jika Anda menghentikan konsumsi antibiotik tersebut, maka efeknya tidak akan Anda dapat secara maksimal.&nbsp;<br />\r\n.<br />\r\n4.Sistem kekebalan tubuh masih lemah, Selain dapat membuat bakteri bisa tumbuh kembali, konsumsi antibiotik yang kurang juga tidak mampu mendukung kekuatan sistem kekebalan tubuh. Sehingga sistem kekebalan tubuh Anda masih lemah dan penyakit dapat dengan mudah lahir kembali di tubuh Anda.&nbsp;<br />\r\n.<br />\r\n5.Mempercepat proses pemulihan, Memulihkan diri dari penyakit adalah hal yang penting. Dan itu adalah salah satu tugas dari obat antibiotik. Sehingga jika Anda tidak menghabiskannya, maka proses pemulihan akan berlangsung lebih lama.&nbsp;<br />\r\n.<br />\r\n6.Terhindar dari infeksi yang sama, Dengan menghabiskan obat antibiotik Anda, maka Anda akan menghindarkan tubuh Anda dari penyakit yang sama.&nbsp;<br />\r\n.<br />\r\n.<br />\r\n.<br />\r\nItulah alasan kenapa Anda harus menghabiskan obat antibiotik yang diresepkan. Jadi, Anda masih punya obat antibiotik? Maka segera habiskan menurut petunjuk yang sudah diresepkan dokter.<br />\r\n.</p>', 'obat.jpg', 1, 15, '2018-12-22 10:28:36', 15, '2018-12-22 10:28:56', 1, 1, 1);
INSERT INTO `article` VALUES (141, 'Imunisasi MR', 'imunisasi-mr', '<p>Vaksin MR merupakan kombinasi dari vaksin campak (measles) dan campak jerman (rubella).<br />\r\n.&nbsp;<br />\r\nMeasles dan rubella merupakan penyakit menular yang disebabkan oleh virus. Penularan kedua penyakit ini melalui saluran napas, batuk atau bersin, kontak langsung dengan penderita yang terinfeksi.<br />\r\n.&nbsp;<br />\r\nSegera vaksin MR buah hati Anda untuk mencegah kedua penyakit tersebut, perlu diketahui campak merupakan penyakit yang bisa membunuh anak-anak sedangkan rubella dapat menyebabkan cacat seumur hidup.&nbsp;<br />\r\n.&nbsp;<br />\r\nVaksin MR bisa dilakukan di RS Permata Keluarga setiap hari Sabtu dengan perjanjian terlebih dahulu.<br />\r\n.<br />\r\n<a href=\"https://www.facebook.com/hashtag/rspermatakeluargalippo?epa=HASHTAG\">#rspermatakeluargalippo</a><a href=\"https://www.facebook.com/hashtag/rspermatakeluargajababeka?epa=HASHTAG\">#rspermatakeluargajababeka</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/rspklippo?epa=HASHTAG\">#rspklippo</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/rspkjb?epa=HASHTAG\">#rspkjb</a><a href=\"https://www.facebook.com/hashtag/infokesehatan?epa=HASHTAG\">#infokesehatan</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/imunisasi?epa=HASHTAG\">#imunisasi</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/vaksin?epa=HASHTAG\">#vaksin</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/campak?epa=HASHTAG\">#campak</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/virus?epa=HASHTAG\">#virus</a><a href=\"https://www.facebook.com/hashtag/measles?epa=HASHTAG\">#measles</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/rubella?epa=HASHTAG\">#rubella</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/mr?epa=HASHTAG\">#MR</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/dokter?epa=HASHTAG\">#dokter</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/cikarang?epa=HASHTAG\">#cikarang</a><a href=\"https://www.facebook.com/hashtag/jababeka?epa=HASHTAG\">#jababeka</a></p>', 'campak.jpg', 1, 15, '2018-12-22 10:31:09', 15, '2018-12-22 10:31:27', 1, 1, 1);
INSERT INTO `article` VALUES (142, 'Fyi 25 Januari diperingati sebagai hari gizi nasional', 'fyi-25-januari-diperingati-sebagai-hari-gizi-nasional', '<p>Ayo mulai hidup sehat dengan menjaga pola makan sehat sehari-hari. Selain pola makan sehat, tahukah anda apa saja pilar hidup sehat?<br />\r\n1. Mengkonsumsi makanan yang beraneka ragam.<br />\r\n2. Pentingnya pola hidup aktif dan berolah raga.<br />\r\n3. Menerapkan pola hidup bersih dan sehat.<br />\r\n4. Menjaga berat badan ideal.<br />\r\n.<br />\r\nSelamat Hari Gizi Nasional<br />\r\n.<br />\r\n<a href=\"https://www.facebook.com/hashtag/rspermatakeluargalippo?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#rspermatakeluargalippo</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/rspklippo?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#rspklippo</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/rspermatakeluargajababeka?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#rspermatakeluargajababeka</a><a href=\"https://www.facebook.com/hashtag/rspkjb?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#rspkjb</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/harigizinasional?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#harigizinasional</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/harigizi?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#harigizi</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/hgn?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#hgn</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/infokesehatan?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#infokesehatan</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/cikarang?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#cikarang</a><a href=\"https://www.facebook.com/hashtag/jababeka?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#jababeka</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/bekasi?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#bekasi</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/latepost?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARDUzzmEI6KytDoLAw2NVoibDHkT4Khbn6oy1GSCbJ78u5nU4xT2iPiCNy3moFolCenrvPIBE8LwpwVkVsR-_WnkIqL05cu6RmAiwswCx_g5jLfJzuSmYkYkDsvJuMAr4U2XDcR2hdDpkgPI2AWqA90Otcs9S0o-BynkNxfxzitZ-8D5MpvVPIdXKf78_YKWoY6CPMAUePH8_aTMeq9P-cM0CbuqaQgvqGAy9Zibg7GEdMcfr94zwrFBJG3ufJUqA6wLIcJ49oZb68x3PNSW6emjtScFksebbA1tRUUfDLT7IXhOwO2J2OIxVW9znPDEW-0LGW_-bXEsCbjYofjZ50OtjQ&amp;__tn__=%2ANK-R\">#latepost</a></p>', 'gizi.jpg', 1, 3, '2019-01-26 09:30:04', 3, '2019-01-26 09:31:54', 1, 1, 1);
INSERT INTO `article` VALUES (145, 'KLINIK KANDUNGAN DAN KEBIDANAN', 'program-unggulan-rumah-sakit-permata-kelurga-lippo-cikarang', '<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Klinik kandungan dan kebidanan&nbsp; adalah salah satu layanan unggulan di RS. Permata Keluarga Lippo Cikarang . Kami memiliki para dokter Spesialis maupun bidan bidan&nbsp; yang berpengalaman dan telah lama berkarir di bidangnya sehingga banyak dikenal oleh masyarakat Cikarang dan sekitarnya. Selain tenaga medis yang baik, kami pun memiliki fasilitas sarana dan prasarana yang menunjang dalam melakukan pemeriksaan dan pengobatan di bidang kebidanan secara optimal dan maksimal sehingga proses kehamilan beserta kelainan yang mungkin timbul pada kehamilan dapat diketahui sejak dini. Sebagai bagian dari layanan unggulan RS. Permata Keluarga Lippo Cikarang&nbsp; Klinik obstetri &amp; ginekologi setiap hari tersedia untuk pagi hingga malam hari.</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Layanan Kandungan dan kebidanan&nbsp; antara lain :</span></span></span></p>\r\n\r\n<div style=\"margin-left:-.25in;\">\r\n<ul>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">General Gynecology &amp; Obstetrics</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Konsultasi Pra Marital dan Pra Kehamilan</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Kontrasepsi</span></span></span></li>\r\n</ul>\r\n</div>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">&nbsp;1. Hormonal : dalam bentuk tablet, di tanam di bawah kulit, ditempel&nbsp; pada kulit, melalui vagina maupun di suntik ke dalam otot.</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">2. Mekanik Dapat dilakukan dengan mengunakan Kondom, IUD Diaframa.</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">3. Mantap : - Tubektomi ( mengikat saluran tuba pada wanita )</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Vasektomi ( Mengikat saluran sperma pada pria )</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">&nbsp;Metode ini dapat dilakukan untuk pasangan yang tidak ingin memiliki anak lagi.</span></span></span></p>\r\n\r\n<div style=\"margin-left:-.25in;\">\r\n<ul>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Untuk memilih kontrasepsi yng tepat sebaiknya konsultasikan dengan dokter spesialis Kandungan</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">USG ( 2D / 3D / 4D )</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Endokrinologi Reproduksi : Kelainan Menstruasi, Terapi Endometriosis, Mioma Uteri</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Minimal invasive surgery &ndash; Laparascopi</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Senam Hamil</span></span></span></li>\r\n	<li><span style=\"color:#0000cd\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\">Papsmear</span></span></span></li>\r\n</ul>\r\n</div>\r\n\r\n<p><img alt=\"Whats-App-Image-2019-02-08-at-16-02-48-1\" src=\"https://i.ibb.co/xqYqqB9/Whats-App-Image-2019-02-08-at-16-02-48-1.jpg\" /></p>', 'WhatsApp_Image_2019-02-08_at_16_02_48_(2).jpeg', 8, 3, '2019-02-18 14:14:28', 3, '2019-02-18 16:32:45', 1, 1, 1);
INSERT INTO `article` VALUES (146, 'IMUT OKT - DES 2018', 'imut-okt-des-2018', '<p style=\"margin-left:49.5pt\"><strong>Daftar Indikator Mutu Prioritas RS Permata Keluarga Lippo Cikarang </strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"width:115px\">\r\n			<p><strong>Kategori</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\" style=\"width:37px\">\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\" style=\"width:128px\">\r\n			<p><strong>Indikator</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\" style=\"width:77px\">\r\n			<p><strong>Standart</strong></p>\r\n			</td>\r\n			<td colspan=\"3\" style=\"width:212px\">\r\n			<p><strong>Capaian</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\" style=\"width:70px\">\r\n			<p><strong>Ket</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:70px\">\r\n			<p><strong>Okt</strong></p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p><strong>Nov</strong></p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p><strong>Des</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"8\" style=\"width:638px\">\r\n			<p><strong>INDIKATOR AREA KLINIS</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\" style=\"width:115px\">\r\n			<p><strong>Kepatuhan Terhadap Standart</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>1</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kepatuhan terhadap clinical pathway</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:37px\">\r\n			<p><strong>2</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Presentase kejadian pasien jatuh</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&lt;3%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>0</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:37px\">\r\n			<p><strong>3</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kepatuhan penggunaan FORNAS</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&ge; 80%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>99,80%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>99,89%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>99,80%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>99,83%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p><strong>Capaian Indikator Medik</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>4</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Waktu lapor hasil tes kritis laboratorium</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"8\" style=\"width:638px\">\r\n			<p><strong>INDIKATOR AREA MANAJERIAL</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"width:115px\">\r\n			<p><strong>Kepuasan Pelanggan</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>5</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kepuasan pelanggan</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&ge; 85%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>96,62%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>98,20%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>97,75%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>97,66%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:37px\">\r\n			<p><strong>6</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kecepatan respon terhadap komplain</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&ge; 75%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>67,33%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>81%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>78,67%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>75,67%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p><strong>Ketepatan Waktu Pelayanan</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>7</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Emergency respon time 2</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>79.44%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>66.25%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>93.62%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>79.77%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>8</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Waktu tunggu operasi elektif</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&le;48 jam</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>9</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Waktu tunggu rawat jalan</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&le;60 menit</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>44 menit</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>45 menit</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>49 menit</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>46 menit</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>10</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Ketepatan jam visite</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>&ge; 80%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>65.3%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>64.8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>68.3%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>66.1%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p><strong>Akreditasi</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>11</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Ketepatan identifikasi pasien</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p><strong>Capaian Indikator Medik</strong></p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>12</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kepatuhan cuci tangan</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>68,4%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>69,8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>69,8%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>69,33%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"8\" style=\"width:638px\">\r\n			<p><strong>INDIKATOR AREA SASARAN KESELAMATAN PASIEN</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>1</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Kepatuhan ketepatan identifikasi pasien dengan benar</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>98.8%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>2</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Peningkatan komukasi efektif via lisan/telepon sesuai dengan format dan diisi lengkap</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>3</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Peningkatan keamanan obat (high alert medications) terdapat daftar, pelebelan obat dan tidak adanya elektrolit pekat di ruang</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>4</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Penerapan chect list keselamatan pasien terisi lengkap di kamar operasi</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>5</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Pengurangan risiko infeksi akibat pelayanan kesehatan (hand hygiene)</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>68,4%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>69,8%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>69,8%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>69,33%</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:115px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:37px\">\r\n			<p><strong>6</strong></p>\r\n			</td>\r\n			<td style=\"width:128px\">\r\n			<p>Pengisian assesment resiko jatuh yang diisi lengkap</p>\r\n			</td>\r\n			<td style=\"width:77px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:71px\">\r\n			<p>100%</p>\r\n			</td>\r\n			<td style=\"width:70px\">\r\n			<p>100%</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><a href=\"&lt;a href=\"><img alt=\"1\" src=\"https://i.ibb.co/BrpSH2L/1.jpg\" /></a> <a href=\"https://ibb.co/56HWyVx\"><img alt=\"2\" src=\"https://i.ibb.co/f2wY57G/2.jpg\" /></a> <a href=\"https://ibb.co/C1YpK9V\"><img alt=\"3\" src=\"https://i.ibb.co/dWVs4pk/3.jpg\" /></a> <a href=\"https://ibb.co/r7N1VSf\"><img alt=\"4\" src=\"https://i.ibb.co/ZL7k0P1/4.jpg\" /></a> <a href=\"https://ibb.co/vdNSfPT\"><img alt=\"5\" src=\"https://i.ibb.co/C9jf47Y/5.jpg\" /></a> <a href=\"https://ibb.co/sP31PYX\"><img alt=\"6\" src=\"https://i.ibb.co/dcKpcYH/6.jpg\" /></a> <a href=\"https://ibb.co/gVN0k6Z\"><img alt=\"7\" src=\"https://i.ibb.co/X81ncVx/7.jpg\" /></a> <a href=\"https://ibb.co/qNWmgbb\"><img alt=\"8\" src=\"https://i.ibb.co/jyW3w77/8.jpg\" /></a> <a href=\"https://ibb.co/vJj5FkZ\"><img alt=\"9\" src=\"https://i.ibb.co/cNr5BQD/9.jpg\" /></a> <a href=\"https://ibb.co/D76NZf7\"><img alt=\"10\" src=\"https://i.ibb.co/GV1XqQV/10.jpg\" /></a> <a href=\"https://ibb.co/LkZ0Z3x\"><img alt=\"11\" src=\"https://i.ibb.co/QbKJK4P/11.jpg\" /></a> <a href=\"https://ibb.co/dbFt3w2\"><img alt=\"12\" src=\"https://i.ibb.co/q0KC43s/12.jpg\" /></a>&quot;&gt;<img alt=\"\" src=\"&lt;a href=\" /><img alt=\"1\" src=\"https://i.ibb.co/BrpSH2L/1.jpg\" /> <a href=\"https://ibb.co/56HWyVx\"><img alt=\"2\" src=\"https://i.ibb.co/f2wY57G/2.jpg\" /></a> <a href=\"https://ibb.co/C1YpK9V\"><img alt=\"3\" src=\"https://i.ibb.co/dWVs4pk/3.jpg\" /></a> <a href=\"https://ibb.co/r7N1VSf\"><img alt=\"4\" src=\"https://i.ibb.co/ZL7k0P1/4.jpg\" /></a> <a href=\"https://ibb.co/vdNSfPT\"><img alt=\"5\" src=\"https://i.ibb.co/C9jf47Y/5.jpg\" /></a> <a href=\"https://ibb.co/sP31PYX\"><img alt=\"6\" src=\"https://i.ibb.co/dcKpcYH/6.jpg\" /></a> <a href=\"https://ibb.co/gVN0k6Z\"><img alt=\"7\" src=\"https://i.ibb.co/X81ncVx/7.jpg\" /></a> <a href=\"https://ibb.co/qNWmgbb\"><img alt=\"8\" src=\"https://i.ibb.co/jyW3w77/8.jpg\" /></a> <a href=\"https://ibb.co/vJj5FkZ\"><img alt=\"9\" src=\"https://i.ibb.co/cNr5BQD/9.jpg\" /></a> <a href=\"https://ibb.co/D76NZf7\"><img alt=\"10\" src=\"https://i.ibb.co/GV1XqQV/10.jpg\" /></a> <a href=\"https://ibb.co/LkZ0Z3x\"><img alt=\"11\" src=\"https://i.ibb.co/QbKJK4P/11.jpg\" /></a> <a href=\"https://ibb.co/dbFt3w2\"><img alt=\"12\" src=\"https://i.ibb.co/q0KC43s/12.jpg\" /></a>&quot; /&gt;<iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><img alt=\"1\" src=\"https://i.ibb.co/BrpSH2L/1.jpg\" /><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/56HWyVx\"><img alt=\"2\" src=\"https://i.ibb.co/f2wY57G/2.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/C1YpK9V\"><img alt=\"3\" src=\"https://i.ibb.co/dWVs4pk/3.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/r7N1VSf\"><img alt=\"4\" src=\"https://i.ibb.co/ZL7k0P1/4.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/vdNSfPT\"><img alt=\"5\" src=\"https://i.ibb.co/C9jf47Y/5.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/sP31PYX\"><img alt=\"6\" src=\"https://i.ibb.co/dcKpcYH/6.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/gVN0k6Z\"><img alt=\"7\" src=\"https://i.ibb.co/X81ncVx/7.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/qNWmgbb\"><img alt=\"8\" src=\"https://i.ibb.co/jyW3w77/8.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/vJj5FkZ\"><img alt=\"9\" src=\"https://i.ibb.co/cNr5BQD/9.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/D76NZf7\"><img alt=\"10\" src=\"https://i.ibb.co/GV1XqQV/10.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/LkZ0Z3x\"><img alt=\"11\" src=\"https://i.ibb.co/QbKJK4P/11.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\"></iframe><a href=\"https://ibb.co/dbFt3w2\"><img alt=\"12\" src=\"https://i.ibb.co/q0KC43s/12.jpg\" /></a><iframe frameborder=\"0\" scrolling=\"no\" src=\"&lt;a  data-cke-saved-href=\">&quot;&gt;</iframe></p>\r\n\r\n<p>&nbsp;</p>', 'Indikator-Mutu.jpg', 9, 3, '2019-02-18 15:00:28', 3, '2019-02-18 15:06:54', 1, 1, 1);
INSERT INTO `article` VALUES (147, 'KLINIK KESEHATAN ANAK', 'klinik-kesehatan-anak', '<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Klinik kesehatan anak juga merupakan layanan unggulan bagi RS. Permata Keluarga Lippo cikarang. Klinik kesehatan anak di dukung oleh tenaga medis dokter spesialis di bidang anak.</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Klinik Kesehatan anak RS. Permata Keluarga Lippo Cikarang siap menanggani kesehatan dan perkembangan buah hati&nbsp; anada, sejak kelahiran buah hati hingga beranjak remaja . RS Permata Keluarga Lippo Cikarang juga memilki ruangan menyusui&nbsp; yang nyaman untuk ibu dan bayi, di dekat Poli Klinik Anak.</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Kami menyediakan layanan lengkap mulai dari pemeriksaan, pemberian vaksinasi hingga perawatan khusus secara terpadu seperti Ruang Bayi Sehat, Perinatologi dan NICU</span></span></span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\"><img alt=\"\" src=\"&lt;a href=\" /><img alt=\"Whats-App-Image-2019-02-08-at-16-02-47\" src=\"https://i.ibb.co/TKGfyb5/Whats-App-Image-2019-02-08-at-16-02-47.jpg\" /> <a href=\"https://ibb.co/m0FzqZN\"><img alt=\"Whats-App-Image-2019-02-08-at-16-02-48\" src=\"https://i.ibb.co/f9G0p6D/Whats-App-Image-2019-02-08-at-16-02-48.jpg\" /></a> <a href=\"https://ibb.co/thZ0xb9\"><img alt=\"Whats-App-Image-2019-02-08-at-16-02-49-1\" src=\"https://i.ibb.co/sP5T6FZ/Whats-App-Image-2019-02-08-at-16-02-49-1.jpg\" /></a> <a href=\"https://ibb.co/60hVZV1\"><img alt=\"Whats-App-Image-2019-02-08-at-16-02-49\" src=\"https://i.ibb.co/ch5MvMC/Whats-App-Image-2019-02-08-at-16-02-49.jpg\" /></a>&quot; /&gt;</span></span></span></p>', 'WhatsApp_Image_2019-02-08_at_16_02_47_(1).jpeg', 8, 3, '2019-02-18 16:34:37', 3, '2019-02-18 16:34:58', 1, 1, 1);
INSERT INTO `article` VALUES (148, 'Lowongan Kerja Dokter di Rs. Permata Keluarga Lippo Cikarang', 'lowongan-kerja-dokter-di-rs-permata-keluarga-lippo-cikarang', '<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :<br />\r\n<br />\r\n1. Dokter Spesialis Urologi</span></span></span><br />\r\n<span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">2. Dokter Spesialis Bedah</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">3.Spesialis Bedah Mulut</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">4. Spesialis rehab medik</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke&nbsp;</span><a href=\"mailto:hrd@permatakeluarga.net\"><span style=\"color:#0000ff\">hrd@permatakeluarga.net</span></a><span style=\"color:#0000ff\">&nbsp;&amp;&nbsp;</span><a href=\"mailto:marketing@permatakeluarga.net\"><span style=\"color:#0000ff\">marketing@permatakeluarga.net</span></a></span></span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14px\"><span style=\"color:#0000ff\">Terima Kasih</span></span></span></p>\r\n\r\n<p>&nbsp;</p>', 'dokter.png', 3, 3, '2019-03-18 13:52:53', 3, '2019-11-25 13:56:21', 1, 1, 1);
INSERT INTO `article` VALUES (150, 'Lowongan dr. Rehab Medik', 'lowongan-dr-rehab-medik', '<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :</span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Membutuhkan Dokter Rehab Medik&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#0000ff\">Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke&nbsp;</span><a href=\"mailto:hrd@permatakeluarga.net\"><span style=\"color:#0000ff\">hrd@permatakeluarga.net</span></a><span style=\"color:#0000ff\">&nbsp;&amp;&nbsp;</span><a href=\"mailto:marketing@permatakeluarga.net\"><span style=\"color:#0000ff\">marketing@permatakeluarga.net</span></a></span></span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Terima Kasih</span></span></span></p>', '21.jpg', 3, 3, '2019-04-09 09:48:08', 3, '2019-04-09 09:57:14', 1, 1, 1);
INSERT INTO `article` VALUES (151, 'Gejala Demam Berdarah', 'gejala-demam-berdarah', '<p><span style=\"color:#0000cd\"><span style=\"font-size:14px\">Apabila anak anda mengalami gejala-gejala Demam Berdarah Dengue seperti yang telah kami bahas di postingan sebelumnya, segera hubungi dan konsultasikan dengan Dokter Spesialis Penyakit Dalam Kami.<br />\r\n.<br />\r\ndr. Armen, SpPD<br />\r\nSenin,Kamis,Sabtu 20.30 - selesai.<br />\r\n.<br />\r\ndr. Frederica, SpPD<br />\r\nSenin - Sabtu 09.00 - 14.00<br />\r\n.<br />\r\ndr. Mohammad Irfan, SpPD<br />\r\nSenin - Sabtu 16.00 - 20.00</span></span></p>', '22.jpg', 1, 3, '2019-04-13 10:10:49', 3, '2019-04-13 10:11:08', 1, 1, 1);
INSERT INTO `article` VALUES (152, 'Pencegahan Demam Berdarah', 'pencegahan-demam-berdarah', '<p><span style=\"font-family:Comic Sans MS,cursive\">Demam berdarah dengue dapat dicegah melalui kegiatan PSN (Pemberantasan Sarang Nyamuk), seperti pengasapan insektisida atau fogging dan melakukan 3M-plus, yaitu:<br />\r\n1. Menguras tempat penampungan air, seperti bak mandi.<br />\r\n2. Menutup rapat tempat penampungan air.<br />\r\n3. Mendaur ulang barang bekas yang memiliki potensi untuk jadi tempat perkembangbiakan nyamuk.<br />\r\n<br />\r\nSedangkan pengobatan untuk demam berdarah adalah dengan mengatasi gejala dan mencegah infeksi semakin memburuk.</span><br />\r\n&nbsp;</p>', '31.jpg', 1, 3, '2019-04-13 10:15:01', 3, '2019-04-13 10:15:53', 1, 1, 1);
INSERT INTO `article` VALUES (154, 'Lowongan Kerja Dokter Rs.Permata Keluarga Lippo', 'lowongan-kerja-dokter-rspermata-keluarga-lippo', '<p>Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :<br />\r\n<br />\r\n1. Dokter Radiologi<br />\r\n2. Dokter Jaga Umum 2 orang Laki - Laki</p>\r\n\r\n<p>Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke&nbsp;<a href=\"mailto:hrd@permatakeluarga.net\">hrd@permatakeluarga.net</a>&nbsp;&amp;&nbsp;<a href=\"mailto:marketing@permatakeluarga.net\">marketing@permatakeluarga.net</a></p>\r\n\r\n<p>Terima Kasih</p>', 'dokter_umum1.jpg', 3, 3, '2019-07-10 08:35:33', 3, '2019-07-10 08:35:33', 1, 1, 1);
INSERT INTO `article` VALUES (157, 'Pekan Asi Sedunia', 'pekan-asi-sedunia', '<p>Setiap tahunnya, Pekan ASI Sedunia diperingati tanggal 1-7 Agustus untuk mengkampanyekan pentingnya memberi ASI terutama dalam enam bulan pertama kehidupan bayi. Pekan ASI Sedunia kali ini mengangkat tema &#39;Empower Parents Enable Breastfeed&#39; dan secara spesifik lagi Ayah menjadi sosok kunci keberhasilan ASI Ekslusif. Mengapa ayah?jelas bersama ibu dong hehe...sahabat Permata, tau ga sih kalau peran ayah itu ga kalah pentingnya dalam mendukung keberhasilan ASI Eksklusif? seorang ayah yang siaga akan selalu siap membantu ibu memandikan bayi, mengganti popok bayi bahkan menggendong dan memijat bayi saat ibu butuh istirahat seusai menyusui, sosok ayah pula yang harus setia melakukan pijat oksitosin untuk merangsang produksi ASI, dan yang tidak kalah penting ayah lah yang akan setia menyemangati dan menjadi tempat curhatan ibu hehe...ingat lhoo sahabat Permata..salah satu kunci sukses menyusui adalah : tidak boleh stress!&nbsp;<br />\r\n.<br />\r\nNah sahabat Permata, dalam rangka mendukung gerakan WHO ini..RS Permata Keluarga menyediakan pojok laktasi di RS Permata Keluarga lhoo..supaya ibu2 yang sedang mengantri dokter dapat dengan nyaman menyusui si kecil...semoga bermanfaat yaa!</p>', '5.jpg', 9, 3, '2019-08-08 10:17:33', 3, '2019-08-08 10:17:54', 1, 1, 1);
INSERT INTO `article` VALUES (158, 'HEALTH TALK ASI EKSKLUSIF DAN PIJAT BAYI', 'health-talk-asi-eksklusif-dan-pijat-bayi', '<p>HEALTH TALK ASI EKSKLUSIF DAN PIJAT BAYI..dalam rangka PEKAN ASI SEDUNIA...bersama dr.Nadya,SpA.<br />\r\n.<br />\r\nSeru banget nih sahabat Permata kita bisa sharing apa aja sih tips n trik menyusui, tumbuh kembang anak dan yang ga kalah penting bagaimana menuai manfaat dari pijat bayi...<br />\r\n.<br />\r\nLokasi : PT Indonesia Epson Industry</p>\r\n\r\n<p>&nbsp;</p>', '23.jpg', 9, 3, '2019-08-08 10:28:00', 3, '2019-08-08 10:30:02', 1, 1, 1);
INSERT INTO `article` VALUES (160, 'Lowongan Kerja Dokter rehab medik', 'lowongan-kerja-dokter-rehab-medik', '<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :</span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Membutuhkan Dokter Rehab Medik&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"color:#0000ff\">Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke&nbsp;</span><a href=\"mailto:hrd@permatakeluarga.net\"><span style=\"color:#0000ff\">hrd@permatakeluarga.net</span></a><span style=\"color:#0000ff\">&nbsp;&amp;&nbsp;</span><a href=\"mailto:marketing@permatakeluarga.net\"><span style=\"color:#0000ff\">marketing@permatakeluarga.net</span></a></span></span></p>\r\n\r\n<p><span style=\"color:#0000ff\"><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">Terima Kasih&nbsp;</span></span></span></p>', 'dr_rehab_medik.jpg', 3, 3, '2019-10-04 14:33:24', 3, '2019-10-04 14:34:00', 1, 1, 1);
INSERT INTO `article` VALUES (161, 'Pendaftaran rs berupa wa', 'pendaftaran-rs-berupa-wa', '<p>dddddddddd</p>', NULL, 11, 3, '2019-12-18 09:29:58', 3, '2019-12-18 09:29:58', 1, 1, 1);
INSERT INTO `article` VALUES (162, 'Resiko Bekerja Shift Malam', 'resiko-bekerja-shift-malam', '<p>Kebanyakan orang umumnya bekerja dari pagi hari hingga sore atau malam hari, namun adakah sahabat Permata yang sering mengambil <em>shift</em> malam? ternyata bekerja di malam hari dapat memberi pengaruh terhadap tubuh lho&hellip;akibatnya pekerja shift malam juga berisiko untuk mengalami penyakit-penyakit yang serius akibat pola hidup yang tidak sehat. Nah Berikut tips-tips kesehatan bagi sahabat Permata yang bekerja pada malam hari:</p>\r\n\r\n<p>1. Mengatur pola tidur</p>\r\n\r\n<p>jangan tunda tidur, luangkan waktu 7-9 jam untuk tidur setelah bekerja shift malam. jika berkesempatan untuk istirahat, tidurlah di rentang pukul 22-24.00 karena di saat itulah metabolism liver sangat membutuhkan istirahat kita.</p>\r\n\r\n<p>2. Atur pola makan yang sehat</p>\r\n\r\n<p>batasi caffeine, jika ingin nyamil makanan instan di tengah malam, siapkan buah atau serat gandum. hindari makanan yang sulit dicerna seperti gorengan, makanan pedas dan makanan olahan. Hindari juga makanan yang terlalu manis, walaupun makanan manis dapat memberikan energy, namun makanan ini juga dapat menurunkan energy lebih cepat karena sulit dipecah.</p>\r\n\r\n<p>3. Minum air putih yang cukup</p>\r\n\r\n<p>4. Tidur Siang</p>\r\n\r\n<p>tidur siang terbukti meningkatkan dan memulihkan kekuatan otak. Tidur setidaknya 45 menit saat istirahat dari pekerjaan atau tidur siang selama 20-45 menit juga terbukti bermanfaat lho bagi pekerja shift malam untuk menghilangkan rasa lelah...Nah tapi idealnya tidur siang jangan melebihi 45 menit yaah sahabat Permata..supaya manfaatnya maksimal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pekerja malam biasanya cenderung memiliki pola hidup yang tidak sehat, misalnya seperti Akibatnya, mereka berisiko terkena penyakit yang serius. Sebuah penelitian juga mengungkapkan bahwa orang-orang yang sering terjaga semalaman lebih berisiko mengidap kanker jenis tertentu, diabetes, penyakit jantung, obesitas dan gangguan kognitif. Selain itu, tubuh yang dipaksa untuk tetap terjaga pada malam hari yang seharusnya menjadi waktu beristirahat, menyebabkan kebanyakan pekerja malam mengalami insomnia.</p>\r\n\r\n<p>&nbsp;</p>', 'kerja-shift-malam1.jpg', 1, 3, '2020-01-27 13:30:51', 3, '2020-01-28 10:14:51', 1, 1, 1);
INSERT INTO `article` VALUES (163, 'Rs Permata Keluarga Peduli dan Siaga', 'rs-permata-keluarga-peduli-dan-siaga', '<p>Dalam Rangka memutus mata Rantai Covid-19 Kami sangat berterimakasih Jika para dermawan dapat membantu kamidalam menyediakan alat pelindung diri APD</p>', 'WhatsApp_Image_2020-03-27_at_13_22_44.jpeg', 9, 3, '2020-03-27 13:26:36', 3, '2020-03-27 13:27:02', 1, 1, 1);
INSERT INTO `article` VALUES (166, 'Telekonsul Online RS. Permata Keluarga Lippo Cikarang', 'telekonsul-online-rs-permata-keluarga-lippo-cikarang', '<p><img alt=\"\" src=\"https://ibb.co/JQNR3Gf\" /><img alt=\"\" src=\"https://ibb.co/X82TCqN\" /><img alt=\"\" src=\"https://ibb.co/bzMZKcM\" /><img alt=\"\" src=\"https://ibb.co/bzMZKcM\" /></p>', 'WhatsApp_Image_2020-05-27_at_09_14_55.jpeg', 10, 3, '2020-06-03 09:47:27', 3, '2020-06-03 09:51:31', 1, 1, 1);
INSERT INTO `article` VALUES (167, 'Jadwal Telekonsul Online Rs Permata Keluarga Lippo', 'jadwal-telekonsul-online-rs-permata-keluarga-lippo', '<p><img alt=\"\" src=\"https://ibb.co/bzMZKcM\" /></p>', 'WhatsApp_Image_2020-05-28_at_11_40_54.jpeg', 10, 3, '2020-06-03 09:53:12', 3, '2020-06-03 09:53:52', 1, 1, 1);
INSERT INTO `article` VALUES (168, 'Rs Permata Keluarga Lippo Cikarang New Normal', 'rs-permata-keluarga-lippo-cikarang-new-normal', '<p><iframe frameborder=\"0\" scrolling=\"no\" src=\"https://youtu.be/2RyhePW-990\"></iframe></p>', NULL, 9, 3, '2020-06-09 09:02:07', 3, '2020-06-09 09:02:50', 1, 1, 1);
INSERT INTO `article` VALUES (169, 'TELECONSULTASI', 'telekonsul', '<p>Layanan Telekonsultasi Rumah Sakit Permata Keluarga Jababeka&nbsp;yang bertujuan untuk mempermudah pasien berkonsultasi dengan dokter dari manapun pasien berada. Layanan ini memungkinkan pasien untuk berkonsultasi dengan dokter pilihannya secara videocall melalui suatu aplikasi. Cakupan layanan meliputi konsultasi dengan dokter, peresepan obat, dan pengantaran obat ke lokasi pasien apabila dibutuhkan.&nbsp;Sehingga, kini pasien dengan mudah dapat segera mendapatkan pengobatan dari dokter.</p>\r\n\r\n<p><strong>TATA CARA KONSULTASI ONLINE</strong></p>\r\n\r\n<ul>\r\n	<li>Ketik<strong> <strong>COOL</strong></strong></li>\r\n	<li>Kirim whatsapp ke no 0812 1272 2965</li>\r\n	<li>Download aplikasi <strong>GOOGLE&nbsp;DUO</strong></li>\r\n	<li>Isi dan lengkap <strong>Data Diri Pasien</strong></li>\r\n	<li>Lakukan&nbsp;<strong>Pembayaran</strong></li>\r\n	<li>Kami akan menginfokan jadwal konsultasi&nbsp;</li>\r\n	<li><strong>Konsultasi dengan Dokter</strong></li>\r\n	<li>Apabila Ada <strong>Resep / Obat. </strong>ANDA akan dihubungi oleh petugas farmasi kami</li>\r\n	<li>Lakukan <strong>Pembayaran</strong> resep/obat</li>\r\n	<li>Obat akan <strong>dikirimkan</strong> ke rumah ANDA</li>\r\n</ul>\r\n\r\n<p>Syarat dan ketentuan :</p>\r\n\r\n<p>1. Pendaftaran :</p>\r\n\r\n<ul>\r\n	<li>1 hari sebelum konsultasi</li>\r\n	<li>3 jam sebelum konsultasi online</li>\r\n</ul>\r\n\r\n<p>Informasi lebih lanjut :<br />\r\nRS Permata Keluarga Jababeka<br />\r\n<strong>Hunting</strong> : (021) 29083399<br />\r\n<strong>Customer Service WA</strong> : 0821 1272 2965</p>', 'TELEMEDICINE_-_KONSULTASI_ONLINE1.jpg', 10, 3, '2020-06-18 13:27:18', 3, '2020-06-18 15:47:56', 1, 1, 2);
INSERT INTO `article` VALUES (170, 'Lowongan Kerja dr. Anak & dr. Syaraf', 'lowongan-kerja-dr-anak-dr-syaraf', '<p>Kami group Rumah Sakit Swasta yang sedang berkembang di Kawasan Industri Lippo Cikarang, membutuhkan :<br />\r\n<br />\r\n1. Dokter Spesialis Anak<br />\r\n2. Dokter Spesialis Syaraf</p>\r\n\r\n<p>Mohon kirimkan lamaran Anda ke :<br />\r\nRS. Permata Keluarga Lippo Cikarang, Jl. MH. Thamrin Kav. 129 Lippo Cikarang, Bekasi 17550 (UP. Bagian HRD). Atau email ke&nbsp;<a href=\"mailto:hrd@permatakeluarga.net\">hrd@permatakeluarga.net</a>&nbsp;&amp;&nbsp;<a href=\"mailto:marketing@permatakeluarga.net\">marketing@permatakeluarga.net</a></p>\r\n\r\n<p>Terima Kasih</p>', 'ss.jpg', 3, 3, '2020-06-26 20:46:54', 3, '2020-06-26 20:51:52', 1, 1, 1);
INSERT INTO `article` VALUES (171, 'Live Talkshow Instagram', 'live-talkshow-instagram', '<p>Hai Sahabat Permata....</p>\r\n\r\n<p>Kami mengajak para Sahabat Permata untuk dapat bergabung dalam IG live kami, agar para sahabat permata mengerti tentang <strong>Pencegahan TBC dimasa pandemi</strong>... Jangan lewat kan acara ini karna ada kejutan menarik di akhir acara, jadi di catat ya waktu nya para sahabat permata.... See u</p>\r\n\r\n<p>&nbsp;</p>', 'ig_live_dr_rudy_SpP-min.jpg', 10, 3, '2020-07-16 14:35:00', 3, '2020-07-16 14:55:21', 1, 1, 1);
INSERT INTO `article` VALUES (172, 'KESEHATAN KERJA DI ERA NEW NORMAL', 'kesehatan-kerja-di-era-new-normal', '<p>Hi Sahabat Permata, adakah dari Anda&nbsp;yang tetep bekerja di Era New Normal ini? <em>Covid-19</em> telah membuat dampak besar bagi kehidupan kita, khususnya di era new normal dimana virus masih banyak tersebar, namun&nbsp;kewaspadaan masyarakat yang telah menurun. Meskipun ada berbagai aturan dan pembatasan, kita tetap harus melakukan langkah keselamatan kerja selama pandemi. Karena besarnya populasi dan mobilitas pekerja cukup memiliki kontribusi besar dalam penularan <em>Covid-19</em>. Dan dunia kerja tidak mungkin dapat melakukan pembatasan terus menerus.</p>\r\n\r\n<p>Untuk menjaga kesehatan dan keselamatan kerja masyarakat, Kementerian Kesehatan RI menerbitkan Keputusan Menteri Kesehatan nomor HK.01.07/MENKES/328/2020 tentang panduan Pencegahan dan Pengendalian <em>Covid-19</em> di Tempat Kerja Perkantoran dan Industri dalam Mendukung Keberlangsungan Usaha pada Situasi Pandemi.</p>\r\n\r\n<p>Lalu, jika Anda&nbsp;harus bekerja kembali di kantor setelah PSBB berakhir dan&nbsp;<em>new normal</em>&nbsp;berlangsung, kamu dapat mengikuti protokol kesehatan yang sudah ditetapkan untuk keamanan dan keselamatan kerja, antara lain :</p>\r\n\r\n<ol>\r\n	<li>Lakukan pengukuran suhu dengan menggunakan&nbsp;<em>thermogun</em>. Dan sebelum masuk kerja, terapkan&nbsp;<em>Self Assessment&nbsp;</em>Risiko <em>Covid-19</em>.</li>\r\n	<li>Atur waktu bekerja karyawan agar tidak terlalu panjang, apalagi lembur. Hal ini dapat menyebabkan kurangnya waktu beristirahat yang bisa mengakibatkan penurunan sistem kekebalan tubuh.</li>\r\n	<li>Bagi pekerja&nbsp;<em>shift</em>&nbsp;3 usahakan yang bekerja adalah karyawan berusia di bawah 50 tahun.</li>\r\n	<li>Wajib menggunakan masker sejak&nbsp;berangkat dari rumah dan selama bekerja di kantor. Jika menggunakan masker kain, dimohon utk mengganti setiap 4 jam.</li>\r\n	<li>Atur asupan nutrisi makanan selama bekerja. Perbanyak konsumsi buah-buahan, terutama yang mengandung vitamin C&nbsp;seperti jeruk, jambu, mangga, dan lain sebagainya untuk menjaga daya tahan tubuh.</li>\r\n	<li>Pastikan kantor Anda&nbsp;memiliki fasilitas kesehatan dan tempat kerja yang aman serta sehat.</li>\r\n</ol>\r\n\r\n<p>Selain menerapkan protokol kesehatan yang sudah ditetapkan, selalu terapkan pola hidup sehat dan bersih seperti berikut ini:</p>\r\n\r\n<ol>\r\n	<li><strong>Cuci tangan rutin.</strong>&nbsp;Selalu cuci tangan dengan sabun dan air, minimal 20 detik atau gunakan hand sanitizer untuk membersihkan tangan.</li>\r\n	<li><strong>Terapkan physical distancing</strong><strong>.</strong>&nbsp;Pastikan Anda&nbsp;tetap jaga jarak dan tidak melakukan kontak terlalu dekat dengan orang lain, kecuali memang diperlukan. Jangan lupa, untuk selalu menghindari kerumunan.</li>\r\n	<li><strong>Gunakan masker ketika pergi keluar rumah.</strong> Masker dapat mencegah penyebaran virus dengan melindungi bagian wajah dari droplets seseorang yang mengandung Covid-19.</li>\r\n	<li><strong>Bersihkan permukaan benda dengan disinfektan.</strong>&nbsp; Misal, bersihkan handphone, dompet, atau kantong belanjaan yang sering kamu gunakan.</li>\r\n	<li><strong>Perbanyak asupan makanan bergizi.</strong> Salah satu makanan yang baik untuk daya tahan tubuh adalah makanan kaya akan vitamin C dan vitamin B kompleks.</li>\r\n	<li><strong>Cukupi kebutuhan air putih.</strong>&nbsp;Supaya tidak dehidrasi dan dapat meningkatkan kesehatan tubuh.</li>\r\n	<li><strong>Istirahat cukup.</strong>&nbsp;Tidur dapat membantu memaksimalkan metabolisme dan menjaga daya tahan tubuh. Usahakan untuk tidur minimal 7-8 jam setiap harinya.</li>\r\n	<li><strong>Olahraga rutin.</strong>&nbsp;Memasuki&nbsp;<em>new normal</em>, sebaiknya tetap biasakan berolahraga sebelum melakukan aktivitas harian.</li>\r\n	<li><strong>Bantu dengan multivitamin.</strong>&nbsp;Yang mengandung vitamin C dan vitamin B kompleks untuk bantu jaga daya tahan tubuh serta dapat mengoptimalkan proses metabolisme tubuh.</li>\r\n</ol>', 'new-normal-di-tempat-kerja.jpg', 1, 19, '2020-07-27 11:39:28', 19, '2020-07-27 11:40:55', 1, 1, 2);
INSERT INTO `article` VALUES (173, 'Ravid Tes Covid-19', 'ravid-tes-covid-19', '<p>Bersama Kita cegah Penyebaran Covid-19</p>', 'WhatsApp_Image_2020-08-12_at_13_43_06.jpeg', 10, 3, '2020-08-12 13:48:18', 3, '2020-08-12 13:48:40', 1, 1, 1);
INSERT INTO `article` VALUES (174, 'SWAB ANTIGEN', 'swab-antigen', '<p><a href=\"https://ibb.co/f1jjFB4\"><img alt=\"\" src=\"https://ibb.co/f1jjFB4\" /></a></p>', 'WhatsApp_Image_2020-10-08_at_14_52_47.jpeg', 10, 3, '2020-10-08 14:58:23', 3, '2020-10-08 14:58:40', 1, 1, 1);
INSERT INTO `article` VALUES (175, 'Analis Laboratorium', 'analis-laboratorium', '<p>Kualifikasi :</p>\r\n\r\n<p>1. Pendidikan Min D3 Analis Kesehatan</p>\r\n\r\n<p>2. Usia maksimal 35 tahun</p>\r\n\r\n<p>3. Memiliki STR Aktif / Sertifikat Kompetensi</p>\r\n\r\n<p>4. Berpengalaman / Fresh graduate</p>\r\n\r\n<p>&nbsp;</p>', NULL, 3, 3, '2020-10-16 14:47:06', 3, '2020-10-16 14:48:35', 1, 1, 2);
INSERT INTO `article` VALUES (176, 'Lowongan kerja dr. Sepesialis paru', 'lowongan-kerja-dr-sepesialis-paru', '<p>KAMI MEMBUTUHKAN<br />\r\nDOKTER SPESIALIS PARU<br />\r\n.<br />\r\nSpesifikasi :<br />\r\n1. Laki-laki / perempuan<br />\r\n2. Memiliki STR aktif<br />\r\n3. Jujur, ramah dan bertanggung jawab<br />\r\n4. Mampu bekerjasama dengan tim<br />\r\n.<br />\r\nMohon kirimkan Surat Lamaran dan Curriculum Vitae ke<br />\r\nmarketing-krw@permatakeluarga.net<br />\r\n.<br />\r\n.<br />\r\n#permataku #rspermatakeluargakrw #permatakeluarga #karawang #spesialisparu</p>', 'IMG-20210108-WA0006.jpg', 3, 3, '2021-01-19 09:25:37', 3, '2021-01-19 09:26:32', 1, 1, 1);
INSERT INTO `article` VALUES (177, 'adsa', 'adsa', 'https://www.youtube.com/watch?v=M5bkGaPwoqQ', 'detail.png', 4, 3, '2021-03-03 05:44:35', 3, '2021-03-03 05:53:56', 1, 1, 2);

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category`  (
  `article_category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NULL DEFAULT 1,
  `is_removeable` tinyint(1) NULL DEFAULT 1,
  `is_video` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`article_category_id`) USING BTREE,
  UNIQUE INDEX `link`(`link` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of article_category
-- ----------------------------
INSERT INTO `article_category` VALUES (1, 'Informasi', 'program', '<p>Informasi</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (2, 'Jadwal Dokter', 'promo', '<p>jadwal dokter</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (3, 'Lowongan Kerja', 'artikel', '<p>lowongan kerja</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (4, 'Video', 'video', '<p>VIDEO</p>', NULL, 1, 0, 1);
INSERT INTO `article_category` VALUES (5, 'Dokter Team', 'dokter-team', '<p>Dokter Team</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (6, 'Fasilitas Layanan', 'fasilitas-dan-layanan', '<p>fasilitas layanan</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (7, 'Profil', 'profill', '<p>Profil</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (8, 'PROGRAM UNGGULAN', 'ambulance', '<p>Program Unggulan&nbsp;</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (9, 'Berita', 'berita', '<p>Berita</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (10, 'Promo', 'kerjasama', '<p>promo</p>', NULL, 1, 1, 0);
INSERT INTO `article_category` VALUES (11, 'Pendaftaran', 'pendaftaran', '<p>pendaftaran</p>', NULL, 1, 1, 0);

-- ----------------------------
-- Table structure for bagian
-- ----------------------------
DROP TABLE IF EXISTS `bagian`;
CREATE TABLE `bagian`  (
  `id_bagian` int NOT NULL AUTO_INCREMENT,
  `nama_bagian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_rumahsakit` int NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `urutan` int NOT NULL,
  `is_publish` tinyint(1) NULL DEFAULT 1,
  PRIMARY KEY (`id_bagian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bagian
-- ----------------------------
INSERT INTO `bagian` VALUES (1, 'Spesialis Kandungan (Obgyn)', 1, '<p>Obgyn</p>', 1, 1);
INSERT INTO `bagian` VALUES (2, 'Spesialis Anak', 1, '<p>Spesialis Anak</p>', 2, 1);
INSERT INTO `bagian` VALUES (3, 'Spesialis Bedah Umum', 1, 'Spesialis Bedah Umum', 3, 1);
INSERT INTO `bagian` VALUES (4, 'Spesialis Orthopedy / Bedah Tulang', 1, '<p>Spesialis Orthopedy / Bedah Tulang</p>', 4, 1);
INSERT INTO `bagian` VALUES (5, 'Spesialis Urologi', 1, '<p>Spesialis Urologi</p>', 5, 1);
INSERT INTO `bagian` VALUES (6, 'Spesialis bedah syaraf', 1, '<p>Spesialis bedah syaraf</p>', 6, 1);
INSERT INTO `bagian` VALUES (7, 'Spesialis Jantung', 1, '<p>Spesialis Jantung</p>', 7, 1);
INSERT INTO `bagian` VALUES (8, 'Spesialis Penyakit Dalam / Internis', 1, '<p>Spesialis Penyakit Dalam / Internis</p>', 8, 1);
INSERT INTO `bagian` VALUES (9, 'Spesialis Kulit & Kelamin', 1, '<p>Spesialis Kulit &amp; Kelamin</p>', 9, 1);
INSERT INTO `bagian` VALUES (10, 'Spesialis THT', 1, '<p>Spesialis THT</p>', 10, 1);
INSERT INTO `bagian` VALUES (11, 'Poli Umum', 1, '<p>Poli Umum</p>', 11, 1);
INSERT INTO `bagian` VALUES (12, 'Spesialis Syaraf', 1, '<p>Spesialis Syaraf</p>', 12, 1);
INSERT INTO `bagian` VALUES (13, 'Spesialis Mata', 1, '<p>Spesialis Mata</p>', 13, 1);
INSERT INTO `bagian` VALUES (14, 'Spesialis Paru & Pernapasan', 1, '<p>Spesialis Paru &amp; Pernapasan</p>', 15, 1);
INSERT INTO `bagian` VALUES (15, 'Poli Gigi 1', 1, '<p>Poli Gigi 1</p>', 15, 1);
INSERT INTO `bagian` VALUES (16, 'Poli Gigi 2', 1, '<p>Poli Gigi 2</p>', 16, 1);
INSERT INTO `bagian` VALUES (17, 'Akupuntur', 1, '<p>Akupuntur</p>', 17, 1);
INSERT INTO `bagian` VALUES (18, 'Dokter Jaga IGD', 1, '<p>Dokter Jaga IGD</p>', 18, 1);
INSERT INTO `bagian` VALUES (44, 'Spesialis Anak (Pediatric)', 2, '<p>Pediatric</p>', 1, 1);
INSERT INTO `bagian` VALUES (45, 'Spesialis Kandungan dan Kebidanan (Obgyn)', 2, '<p>Obgyn</p>', 2, 1);
INSERT INTO `bagian` VALUES (46, 'Spesialis Penyakit Dalam (Internist)', 2, '<p>Internist</p>', 3, 1);
INSERT INTO `bagian` VALUES (47, 'Spesialis Bedah Umum (Surgeon)', 2, '<p>Surgeon</p>', 4, 1);
INSERT INTO `bagian` VALUES (48, 'Spesialis Bedah Tulang (Orthopedic)', 2, '<p>Orthopedic</p>', 5, 1);
INSERT INTO `bagian` VALUES (49, 'Spesialis Saraf (Neurologist)', 2, '<p>Neurologist</p>', 6, 1);
INSERT INTO `bagian` VALUES (50, 'Spesialis Mata (Ophthalmologist)', 2, '<p>Ophthalmologist</p>', 7, 1);
INSERT INTO `bagian` VALUES (51, 'Spesialis THT (ENT Specialist)', 2, '<p>ENT Specialist</p>', 8, 1);
INSERT INTO `bagian` VALUES (52, 'Spesialis Paru (Pulmonologist)', 2, '<p>Pulmonologist</p>', 9, 1);
INSERT INTO `bagian` VALUES (53, 'Spesialis Kulit dan Kelamin (Dermatologist)', 2, '<p>Dermatologist</p>', 10, 1);
INSERT INTO `bagian` VALUES (54, 'Spesialis Kedokteran Fisik dan Rehabilitasi', 2, '<p>Spesialis Kedokteran Fisik dan Rehabilitasi</p>', 11, 1);
INSERT INTO `bagian` VALUES (55, 'Spesialis Bedah Syaraf (Neurosurgeon)', 2, '<p>Neurosurgeon</p>', 12, 1);
INSERT INTO `bagian` VALUES (56, 'Spesialis Urologi (Urologist)', 2, '<p>Urologist</p>', 13, 1);
INSERT INTO `bagian` VALUES (58, 'Poli Umum (General Practicioner)', 2, '<p>Dokter Umum</p>', 16, 1);
INSERT INTO `bagian` VALUES (61, 'Poli Gigi 1 (Dentist)', 2, '<p>Dentist</p>', 14, 1);
INSERT INTO `bagian` VALUES (62, 'Poli Gigi 2 (Dentist)', 2, '<p>Dentist</p>', 15, 1);
INSERT INTO `bagian` VALUES (66, 'Dokter Jaga Instalasi Gawat Darurat (IGD)', 2, '<p>Dokter Jaga Instalasi Gawat Darurat (IGD)</p>', 16, 1);
INSERT INTO `bagian` VALUES (67, 'Radiologi (Radiologist)', 2, '<p>Radiologist</p>', 17, 1);
INSERT INTO `bagian` VALUES (68, 'Spesialis Bedah Mulut (Oral Surgeon)', 2, '<p>Spesialis Bedah Mulut</p>', 15, 1);

-- ----------------------------
-- Table structure for category_perizina
-- ----------------------------
DROP TABLE IF EXISTS `category_perizina`;
CREATE TABLE `category_perizina`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category_perizina
-- ----------------------------

-- ----------------------------
-- Table structure for coment
-- ----------------------------
DROP TABLE IF EXISTS `coment`;
CREATE TABLE `coment`  (
  `coment_id` int NOT NULL AUTO_INCREMENT,
  `article_id` int NULL DEFAULT NULL,
  `parent_coment_id` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_approve` tinyint(1) NULL DEFAULT 0,
  `created_datetime` datetime NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'avatar.png',
  PRIMARY KEY (`coment_id`) USING BTREE,
  INDEX `article_id`(`article_id` ASC, `parent_coment_id` ASC) USING BTREE,
  INDEX `parent_coment_id`(`parent_coment_id` ASC) USING BTREE,
  CONSTRAINT `coment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `coment_ibfk_2` FOREIGN KEY (`parent_coment_id`) REFERENCES `coment` (`coment_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of coment
-- ----------------------------
INSERT INTO `coment` VALUES (1, 26, 1, 'wachid', 'wachid@mail.com', 'testing komentar', 1, '2017-08-13 00:00:00', 'avatar.png');

-- ----------------------------
-- Table structure for dokter
-- ----------------------------
DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter`  (
  `id_dokter` int NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_bagian` int NULL DEFAULT NULL,
  `id_rumahsakit` int NOT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_dokter`) USING BTREE,
  INDEX `id_rumahsakit`(`id_rumahsakit` ASC) USING BTREE,
  CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_rumahsakit`) REFERENCES `rumah_sakit` (`id_rumahsakit`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 504 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dokter
-- ----------------------------
INSERT INTO `dokter` VALUES (1, 'dr. Harun, SpOG', 'dr__Harun,_SpOG.jpg', 'Cikarang', 1, 1, '<p>Spesialis Kandungan (Obgyn)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (4, 'dr. Pradipto, SpA', 'dr__Pradifto1.jpg', 'Cikarang', 2, 1, '<p>Spesialis Anak</p>\r\n', 1);
INSERT INTO `dokter` VALUES (7, 'dr. Nadia, SpA', 'dr__Nadia.jpg', 'Cikarang', 2, 1, '<p>Spesialis Anak</p>\r\n', 1);
INSERT INTO `dokter` VALUES (9, 'dr. Nucky, SpOT', 'dr__Nucky_Indra.jpg', 'cikarang', 4, 1, '<p>Spesialis Orthopedy / Bedah Tulang</p>\r\n', 1);
INSERT INTO `dokter` VALUES (10, 'dr. Paulus, SpU', 'dr__Paulus,_SpU_.jpg', 'Cikarang', 5, 1, '<p>Spesialis Urologi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (14, 'dr. Frederica, SpPD', 'dr__Frederica_Apriani,_SpPD1.jpg', 'Cikarang', 8, 1, '<p>Spesialis Penyakit Dalam / Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (17, 'dr. Wiro, SpTHT', 'dr__wiro.jpg', 'Cikarang', 10, 1, '<p>Spesialis THT</p>\r\n', 1);
INSERT INTO `dokter` VALUES (20, 'dr. Wilsen, SpTHt-KL', 'Dr__Wilson2.jpg', 'Cikarang', 10, 1, '<p>Spesialis THT</p>\r\n', 1);
INSERT INTO `dokter` VALUES (21, 'dr. Bambang ', 'dr__Bambang4.jpg', 'Cikarang', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (22, 'dr. Nisinno SK, MARS', 'dr__Nisinno.jpg', 'Cikarang', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (23, 'dr. Melvita ', 'dr__Melvita.jpg', 'Cikarang', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (24, 'dr. H. Endra', 'dr__H__Endra2.jpg', 'Cikarang', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (26, 'dr. Lina F, SpS', 'dr__Lina2.jpg', 'Cikarang', 12, 1, '<p>Spesialis Syaraf</p>\r\n', 1);
INSERT INTO `dokter` VALUES (30, 'dr. Widhi, SpP', 'dr__Widhi1.jpg', 'Cikarang', 14, 1, '<p>Spesialis Paru &amp; Pernapasan</p>\r\n', 1);
INSERT INTO `dokter` VALUES (31, 'drg. Argyaratri', 'drg__Argyaratri.jpg', 'Cikarang', 15, 1, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (33, 'drg. Ajudanto', 'drg__Ajudanto.jpg', 'Cikarang', 15, 1, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (34, 'drg. Indah', 'drg__Indah.jpg', 'Cikarang', 15, 1, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (35, 'drg. Melissa', 'drg__Melisa.jpg', 'Cikarang', 15, 1, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (36, 'drg. Argyaratri', 'drg__Argyaratri1.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (38, 'drg. Ajudanto', 'drg__Ajudanto1.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (39, 'drg. indah', 'drg__Indah1.jpg', 'Cikarang', 16, 1, '<p>Poli GIgi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (40, 'drg. Nurasi', 'drg__Nurasi.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (41, 'drg. Lusi', 'drg__Lusi.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (42, 'drg. Lisbeth', 'drg__Lisbeth.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (44, 'dr. Romula', 'dr__Romula2.jpg', 'Cikarang', 18, 1, '<p>Dokter Jaga IGD&nbsp;</p>\r\n', 1);
INSERT INTO `dokter` VALUES (45, 'dr. Gathot', 'dr__Gatot.jpg', 'Cikarang', 18, 1, '<p>Dokter Jaga IGD</p>\r\n', 1);
INSERT INTO `dokter` VALUES (46, 'dr. Nisinno SK, MARS', 'dr__Nisino1.jpg', 'Cikarang', 18, 1, '<p>Dokter Jaga IGD</p>\r\n', 1);
INSERT INTO `dokter` VALUES (47, 'dr. H. Endra', 'dr__H_Endra.jpg', 'Cikarang', 18, 1, '<p>Dokter Jaga IGD</p>\r\n', 1);
INSERT INTO `dokter` VALUES (48, 'dr. Y Bambang', 'dr__Bambang5.jpg', 'Bogor', 18, 1, '<p>Dokter Jaga IGD</p>\r\n', 1);
INSERT INTO `dokter` VALUES (49, 'dr. Dedy', 'dr__Dedi3.jpg', 'Cikarang', 18, 1, '<p>Dokter Jaga IGD</p>\r\n', 1);
INSERT INTO `dokter` VALUES (62, 'dr. Rudi, SpBS', 'dr__Rudi.jpg', 'Cikarang', 6, 1, '<p>Spesialis Bedah Syaraf</p>\r\n', 1);
INSERT INTO `dokter` VALUES (106, 'dr. Dian Ariani, SpM', 'dr__Dian1.jpg', 'Cikarang', 13, 1, '<p>Spesialis Mata</p>\r\n', 1);
INSERT INTO `dokter` VALUES (108, 'dr. Irwan Tjandi Yanto, SpOG', 'dr__Irwan,_SpOG1.jpg', 'jababeka', 45, 2, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (109, 'dr. Harun, SpOG', 'dr__Harun1.jpg', 'Jababeka', 45, 2, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (111, 'dr. Emy, SpOG', 'dr__Emy,_SpOG.jpg', '', 45, 2, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (114, 'dr. Nadia, SpA', 'dr__Nadia1.jpg', 'jababeka', 21, 2, '<p>Spesialis Anak</p>\r\n', 1);
INSERT INTO `dokter` VALUES (116, 'dr. Lina F,SpS', 'Dr__Lina_F,_SpS_2.jpg', 'jababeka', 23, 2, '<p>Spesialis Syaraf</p>\r\n', 1);
INSERT INTO `dokter` VALUES (120, 'dr.Barnard, SpB ', 'dr__Barnard2.jpg', '', 20, 2, '<p>Spesialis Bedah Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (123, 'dr. Zinson, SpKK', 'dr__Zinzon1.jpg', 'Jababeka', 27, 2, '<p>Spesialis Kulit &amp; Kelamin</p>\r\n', 1);
INSERT INTO `dokter` VALUES (124, 'dr. Retta, SpPd', 'dr_Retta.jpg', 'RS Permata Keluarga Jababeka', 28, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (125, 'dr. Frederica, SpPD', 'dr_Frederica.jpg', 'RS Permata Keluarga Jababeka', 28, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (126, 'dr. Rony Satrio, SpPD', 'dr_Rony.jpg', 'RS Permata Keluarga Jababeka', 28, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (128, 'dr. Dian Ariani, SpM', 'dr__Dian_Ariani,_SpM1.jpg', 'RS Permata Keluarga Jababeka', 29, 2, '<p>Spesialis Mata</p>\r\n', 1);
INSERT INTO `dokter` VALUES (129, 'dr. Zulrafli, SpTHT-KL', 'dr_Zulrafli.jpg', 'RS Permata Keluarga Jababeka', 30, 2, '<p>Spesialis THT</p>\r\n', 1);
INSERT INTO `dokter` VALUES (130, 'dr. Wilsen, SpTHT', 'dr_Wilsen.jpg', 'RS Permata Keluarga Jababeka', 30, 2, '<p>Spesialis THT</p>\r\n', 1);
INSERT INTO `dokter` VALUES (131, 'drg. Ruskandy', 'dr_Ruskandy.jpg', 'RS Permata Keluarga Jababeka', 31, 2, '<p>Dokter Gigi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (134, 'drg. Bonarikson', 'dr_Bonarikson.jpg', 'RS Permata Keluarga Jababeka', 31, 2, '<p>Dokter Gigi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (135, 'drg. Ria Novijanti', 'dr_Ria_Novijanti.jpg', 'RS Permata Keluarga Jababeka', 31, 2, '<p>Dokter Gigi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (136, 'drg. Diana, SpBM', 'dr_Diana.jpg', 'RS Permata Keluarga Jababeka', 31, 2, '<p>Dokter Gigi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (138, 'dr. Widhi, SpP', 'dr_Widhi.jpg', 'RS Permata Keluarga Jababeka', 35, 2, '<p>-</p>\r\n', 1);
INSERT INTO `dokter` VALUES (139, 'dr. Bambang', 'dr_Bambang.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (140, 'dr. Nisinno SK, MARS', 'dr_Nisino.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (142, 'dr. Merry', 'dr_Merry1.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (143, 'dr. Meivita', 'dr_Meivita.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (144, 'dr. Wiwin', 'dr_Wiwin.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (145, 'dr. Dedy', 'dr_Dedi.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (146, 'dr. H. Endra', 'dr_H__Endra1.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (147, 'dr. Romula', 'dr_Romula2.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Poli Klinik Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (148, 'dr. romula', 'dr_Romula3.jpg', 'RS Permata Keluarga Jababeka', 40, 2, '<p>Dokter Jaga IGD Senin - Sabtu</p>\r\n', 1);
INSERT INTO `dokter` VALUES (152, 'dr. Y Bambang S', 'dr_Bambang1.jpg', 'RS Permata Keluarga Jababeka', 36, 2, '<p>Dokter Jaga IGD (Senin - Sabtu)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (154, 'dr. dedy', 'dr_Dedi1.jpg', 'RS Permata Keluarga jababeka', 40, 2, '<p>Dokter Jaga IGD (Senin - Sabtu)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (155, 'dr. h. Endra', 'dr_H__Endra4.jpg', 'RS Permata Keluarga Jababeka', 40, 2, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (165, 'dr. M. Irfan, SpPD', 'WhatsApp_Image_2019-02-15_at_3_03_39_PM_(1)2.jpg', 'RS. Permata Keluarga Jababeka', 28, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (166, 'dr. Mohammad Irfan, SpPD', 'dr_Mohammad_Irfan,S.jpg', 'cikarang', 8, 1, '<p>Spesialis Penyakit Dalalam / Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (168, 'drg.Michael Bing', 'dr__michael.jpg', 'Cikarang\r\n', 15, 1, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (169, 'drg. Michael Bing', 'dr__michael1.jpg', 'Cikarang', 16, 1, '<p>Poli Gigi 2</p>\r\n', 1);
INSERT INTO `dokter` VALUES (171, 'dr. Rudy, SpP', 'download_(4).jpg', '', 35, 2, '', 1);
INSERT INTO `dokter` VALUES (173, 'dr. Rudy Kurniawan, SpP', 'dr_Rudy.jpg', 'Lippo Cikarang', 14, 1, '<p>Spesialis Paru &amp; Pernapasan</p>\r\n', 1);
INSERT INTO `dokter` VALUES (176, 'dr. Juniar P. Silaen, SpB', 'dr__Juniar_P__Silaen,_SpB.jpg', '', 20, 2, '', 1);
INSERT INTO `dokter` VALUES (177, 'dr. Ulfani', '', '', 36, 2, '', 1);
INSERT INTO `dokter` VALUES (178, 'dr. Riyan Sopiyan', 'download_(4)1.jpg', '', 40, 2, '', 1);
INSERT INTO `dokter` VALUES (179, 'dr. Ikromi, SpA', 'ikr.jpg', '', 21, 2, '', 1);
INSERT INTO `dokter` VALUES (182, 'dr.Steffle Simpinano Solin, SpPD', 'dr_steffie.jpg', 'cikarang', 8, 1, '<p>Spesialis Penyakit dalam / Internis</p>\r\n', 1);
INSERT INTO `dokter` VALUES (183, 'dr. Junia Kirana, SpKK,M.Kes', 'dr_junia.jpg', 'RSPK Lippo Cikarang', 9, 1, '<p>Spesialis Kulit &amp; Kelamin</p>\r\n', 1);
INSERT INTO `dokter` VALUES (184, 'dr. Yohanes Ferdinand, Sp.B', 'dr_ferdinan3.jpg', 'RSPK Lippo Cikarang', 3, 1, '<p>Dokter Spesialis Bedah Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (185, 'dr. Rudi, SpBS', 'dr__Rudi2.jpg', '', 19, 2, '', 1);
INSERT INTO `dokter` VALUES (186, 'dr. Ferry Doni, SpOT (K)', 'dr__Ferry_SpOT.jpg', '', 26, 2, '', 1);
INSERT INTO `dokter` VALUES (187, 'dr. Paulus, SpU', 'dr__Paulus,_SpU_1.jpg', '', 34, 2, '', 1);
INSERT INTO `dokter` VALUES (188, 'dr. Elvira', 'dr_elvira3.jpg', '', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (189, 'dr. Ratna', 'IMG_20200626_100330.jpg', '', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (190, 'dr.Wynna', 'dr__Wynna_(Dokter_Jaga_Ruangan).jpg', '', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (191, 'dr. Olieve', 'dr_Olieve.jpg', '', 11, 1, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (193, 'dr. Ferry Doni, SpOT (K)', 'dr__Ferry_SpOT1.jpg', '', 43, 2, '', 1);
INSERT INTO `dokter` VALUES (194, 'dr. Ade Kurniawan', '', '', 60, 2, '<p>Radiologi</p>\r\n', 1);
INSERT INTO `dokter` VALUES (195, 'dr. Barnard Situmorang, SpB', 'barnaard,_dr.jpg', '', 47, 2, '<p>Spesialis Bedah Umum (Surgeon)</p>\r\n', 1);
INSERT INTO `dokter` VALUES (196, 'dr. Zulrafli, SpTHT.KL', 'Zulrafli,_dr.jpg', '', 51, 2, '', 1);
INSERT INTO `dokter` VALUES (197, 'dr. Zinson B Marbun,SpDV', 'zinson,_dr.jpg', '', 53, 2, '', 1);
INSERT INTO `dokter` VALUES (198, 'dr. Wiwin Nurwini', 'wiwin_w.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (199, 'dr. Y. Bambang Sulistyo', 'bambang,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (200, 'dr. Wilsen, SpTHT-KL', 'wilsen,_dr.jpg', '', 51, 2, '', 1);
INSERT INTO `dokter` VALUES (201, 'dr. Widhi Usansi, SpP', 'widhi,_dr.jpg', '', 52, 2, '', 1);
INSERT INTO `dokter` VALUES (202, 'dr. Ulfani Octriani', 'ulfani.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (203, 'dr. Sita Pradjnadewi', '', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (204, 'drg. Ruskandi Lasmana', 'ruskandi,_drg.jpg', '', 61, 2, '', 1);
INSERT INTO `dokter` VALUES (205, 'drg. Bonarikson', 'bonarikson,_dr.jpg', '', 61, 2, '<p>Poli Gigi 1</p>\r\n', 1);
INSERT INTO `dokter` VALUES (206, 'dr. Rudy Kurniawan Putra, SpP', 'rudy,_dr.jpg', '', 52, 2, '', 1);
INSERT INTO `dokter` VALUES (207, 'dr. Dedi', 'dedi,_dr.jpg', '', 58, 2, '<p>Poli Umum</p>\r\n', 1);
INSERT INTO `dokter` VALUES (208, 'dr. Rony Satrio, SpPD', 'rony,_dr.jpg', '', 46, 2, '', 1);
INSERT INTO `dokter` VALUES (209, 'dr. Romula M Silaen', 'romula,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (210, 'dr. Riyan Sopian', 'riyan_sopiyan.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (212, 'drg. Ria Novijanti', 'ria_novijanti.jpg', '', 61, 2, '', 1);
INSERT INTO `dokter` VALUES (213, 'dr. Retta D Siburian, SpPD', 'retta,_dr.jpg', '', 46, 2, '', 1);
INSERT INTO `dokter` VALUES (214, 'dr. Paulus, SpU', 'paulus1.jpg', '', 56, 2, '', 1);
INSERT INTO `dokter` VALUES (215, 'dr. Olieve Indri Leksmana', 'olieve.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (216, 'dr. Nurjamilah Tunnisa', '', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (217, 'dr. Nisinno S Kosala. MARS', 'nisinno,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (218, 'dr. Mervin Tri Hadianto, MSiMed, SpA', 'mervinnnn.jpg', '', 44, 2, '', 1);
INSERT INTO `dokter` VALUES (219, 'dr. Merry Berlian Erlina, MM', 'dr_Merry2.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (220, 'dr. Meivita', 'meivita,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (221, 'dr. Mohammad Irfan, SpPD', 'Irfan,_dr.jpg', '', 46, 2, '', 1);
INSERT INTO `dokter` VALUES (222, 'dr. Lina Faulina S, SpS', 'Lina,_dr.jpg', '', 49, 2, '', 1);
INSERT INTO `dokter` VALUES (223, 'dr. Juniar P Silaen, SpB', 'JP_Silaen,_dr.jpg', '', 47, 2, '', 1);
INSERT INTO `dokter` VALUES (225, 'drg. Indah Sulistiowati, MARS', 'indah,_dr.jpg', '', 61, 2, '', 1);
INSERT INTO `dokter` VALUES (226, 'dr. Imelda', 'imelda,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (228, 'dr. Gracia Angga Widjaja,SpA', 'Gracia,_dr.jpg', '', 44, 2, '', 1);
INSERT INTO `dokter` VALUES (229, 'dr. Frederica Apriani,SpPD', 'frederica,_dr.jpg', '', 46, 2, '', 1);
INSERT INTO `dokter` VALUES (230, 'dr. Ferry Doni Trilasto,SpOT(K)', 'ferry,_dr.jpg', '', 48, 2, '', 1);
INSERT INTO `dokter` VALUES (231, 'dr. H Endra Putra', 'endra,_dr.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (232, 'dr. Emy, SpOG', 'female-doctor.jpg', '', 45, 2, '', 1);
INSERT INTO `dokter` VALUES (233, 'dr. Dian Ariani, SpM', 'dian,_dr.jpg', '', 50, 2, '', 1);
INSERT INTO `dokter` VALUES (234, 'dr. Dewi Ariyani, SpRad', 'dewi,_dr.jpg', '', 67, 2, '', 1);
INSERT INTO `dokter` VALUES (235, 'drg. Diana R Daud, SpBM, MM', 'diana,_drg.jpg', '', 68, 2, '', 1);
INSERT INTO `dokter` VALUES (236, 'drg. Argyaratri Arum', 'arum,_dr.jpg', '', 61, 2, '', 1);
INSERT INTO `dokter` VALUES (237, 'dr. Ade Kurniawan', 'dr_Ade.jpg', '', 67, 2, '', 1);
INSERT INTO `dokter` VALUES (238, 'dr. Ikromi Dalimunthe. M Ked, SpA', 'Ikromi_Dalimunthe.jpg', '', 44, 2, '', 1);
INSERT INTO `dokter` VALUES (239, 'dr. Yudit Sandya, SpKFR', 'dr__Yudit.jpg', '', 54, 2, '', 1);
INSERT INTO `dokter` VALUES (240, 'dr. Maria Mega Sekar Hutami', 'maria_sekar.jpg', '', 58, 2, '', 1);
INSERT INTO `dokter` VALUES (241, 'dr. Nisinno S Kosala. MARS', 'nisinno.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (242, 'dr. H Endra Putra', 'endra,_dr1.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (243, 'dr. Nurjamilah Tunnisa', 'jamila.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (244, 'dr. Dedi', 'dedi.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (245, 'dr. Riyan Sopian', 'riyan_sopiyan1.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (246, 'dr. Ulfani Octriani', 'ulfani1.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (247, 'dr. Y. Bambang Sulistyo', 'bambang.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (250, 'dr. Romula M Silaen', 'romula.jpg', '', 66, 2, '', 1);
INSERT INTO `dokter` VALUES (251, 'dr. Rudi, SpBS', 'rudi_BS.jpg', '', 55, 2, '', 1);
INSERT INTO `dokter` VALUES (253, 'dr. Eunike widiakasih zega,Mked(OG),SpOG', 'dr__Eunike.jpg', 'cikarang', 1, 1, '<p>Spesialis Kandungan</p>\r\n', 1);
INSERT INTO `dokter` VALUES (502, 'dr. Rita, SpOG', 'dr_Ritaweb1.jpg', '', 45, 2, '', 1);
INSERT INTO `dokter` VALUES (503, 'dr. Halim Wijaya, SpB', 'dr_Halim1.jpg', 'Lippo Cikarang', 3, 1, '<p>Spesialis Bedah Umum</p>\r\n', 1);

-- ----------------------------
-- Table structure for download_history
-- ----------------------------
DROP TABLE IF EXISTS `download_history`;
CREATE TABLE `download_history`  (
  `download_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ebook_id` int NULL DEFAULT NULL,
  `download_datetime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`download_id`) USING BTREE,
  INDEX `ebook_id`(`ebook_id` ASC) USING BTREE,
  CONSTRAINT `download_history_ibfk_1` FOREIGN KEY (`ebook_id`) REFERENCES `ebook` (`ebook_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of download_history
-- ----------------------------
INSERT INTO `download_history` VALUES (1, 'hh', 'FFGF@MAIL.COM', 'mj', NULL, '2017-07-06 22:42:48');
INSERT INTO `download_history` VALUES (2, 'dhsh', 'sssa@kdsj.com', 'dkjhwudhuwhd', NULL, '2017-07-06 22:49:24');
INSERT INTO `download_history` VALUES (3, 'csc', 'AA@MAIL.COM', 'dsds', NULL, '2017-07-09 15:05:46');
INSERT INTO `download_history` VALUES (4, 'asas', 'AA@MAIL.COM', 'ddvd', NULL, '2017-07-09 15:06:47');
INSERT INTO `download_history` VALUES (5, 'dsd', 'AA@MAIL.COM', 'vcvdcv', NULL, '2017-07-09 15:09:48');
INSERT INTO `download_history` VALUES (6, 'dsd', 'FFGF@MAIL.COM', 'dfdf', NULL, '2017-07-09 15:10:45');
INSERT INTO `download_history` VALUES (7, 'rr', 'FFGF@MAIL.COM', 'fefefe', NULL, '2017-07-09 15:10:59');
INSERT INTO `download_history` VALUES (8, 'sd', 'AA@MAIL.COM', 'dfwsds', NULL, '2017-07-09 15:11:37');
INSERT INTO `download_history` VALUES (9, 'Agus', 'agus@gmail.com', 'test', NULL, '2017-07-09 15:23:10');
INSERT INTO `download_history` VALUES (10, 'test', 'test@gmail.com', 'test', NULL, '2017-07-09 15:24:26');
INSERT INTO `download_history` VALUES (11, 'dfwe', 'FFGF@MAIL.COM', 'feddefe', NULL, '2017-07-09 15:49:27');
INSERT INTO `download_history` VALUES (12, 'e', 'AA@MAIL.COM', 'efe', NULL, '2017-07-09 15:50:20');
INSERT INTO `download_history` VALUES (21, 'wachid', 'wachidrudyanto@gmail.com', 'alangkah baiknya jika', 8, '2017-07-10 16:02:18');
INSERT INTO `download_history` VALUES (22, 'saya', 'saya@mail.com', 'fffff', 8, '2017-07-19 21:13:37');

-- ----------------------------
-- Table structure for ebook
-- ----------------------------
DROP TABLE IF EXISTS `ebook`;
CREATE TABLE `ebook`  (
  `ebook_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ebook_category_id` int NOT NULL,
  `created_by` int NULL DEFAULT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ebook_id`) USING BTREE,
  INDEX `created_by`(`created_by` ASC) USING BTREE,
  INDEX `update_by`(`updated_by` ASC) USING BTREE,
  INDEX `ebook_category_id`(`ebook_category_id` ASC) USING BTREE,
  CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`ebook_category_id`) REFERENCES `ebook_category` (`ebook_category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `ebook_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `m_user` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `ebook_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `m_user` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ebook
-- ----------------------------
INSERT INTO `ebook` VALUES (3, 'Panduan Sholat 1', 'www.abcdef.com', '<p>Panduan Sholat 1</p>', '', 3, 3, '2017-07-10 15:57:23', 3, '2017-07-31 09:16:18', 1);
INSERT INTO `ebook` VALUES (4, 'Panduan Sholat 2', 'www.qwerty.com', '<p>testing 2</p>', '', 3, 3, '2017-07-10 15:58:00', 3, '2017-07-10 15:58:00', 1);
INSERT INTO `ebook` VALUES (5, 'Rahasia Sukses 1', 'www.coba.com', '<p>testing 3</p>', '', 2, 3, '2017-07-10 15:58:33', 3, '2017-07-10 15:59:13', 1);
INSERT INTO `ebook` VALUES (6, 'Rahasia Sukses 2', 'www.coba2.com', '<p>testing 4</p>', '', 2, 3, '2017-07-10 15:59:42', 3, '2017-07-10 15:59:42', 1);
INSERT INTO `ebook` VALUES (7, 'Kehidupan sosial 1', 'www.ddd.com', '<p>Kehidupan sosial 1</p>', 'slide3.jpg', 4, 3, '2017-07-10 16:00:37', 3, '2017-07-31 09:13:27', 1);
INSERT INTO `ebook` VALUES (8, 'Kehidupan sosial 2', 'www.klmn.com', '<p>testing 6</p>', '', 4, 3, '2017-07-10 16:01:06', 3, '2017-07-10 16:01:06', 1);

-- ----------------------------
-- Table structure for ebook_category
-- ----------------------------
DROP TABLE IF EXISTS `ebook_category`;
CREATE TABLE `ebook_category`  (
  `ebook_category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'default-img.png',
  `is_active` tinyint(1) NULL DEFAULT 1,
  PRIMARY KEY (`ebook_category_id`) USING BTREE,
  INDEX `link`(`link` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ebook_category
-- ----------------------------
INSERT INTO `ebook_category` VALUES (2, 'MOTIFASI', 'motifasi', '<p>Motifasi</p>', 'default-img.png', 1);
INSERT INTO `ebook_category` VALUES (3, 'Agama', 'agama', '<p>Agama</p>', 'default-img.png', 1);
INSERT INTO `ebook_category` VALUES (4, 'Sosial', 'sosial', '<p>Sosial</p>', 'default-img.png', 1);

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_datetime` datetime NULL DEFAULT NULL,
  `created_by` int NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_publish` tinyint(1) NULL DEFAULT 1,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`gallery_id`) USING BTREE,
  INDEX `created_by`(`created_by` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES (7, 'adm', 'adm', '2017-11-27 13:24:18', 3, 'adm', 1, 1);
INSERT INTO `gallery` VALUES (8, 'MCU', 'Medical Checkup', '2018-01-17 20:50:26', 3, 'mcu', 1, 1);
INSERT INTO `gallery` VALUES (9, 'ok', 'kamar operasi', '2018-01-17 20:53:39', 3, 'ok', 1, 1);
INSERT INTO `gallery` VALUES (10, 'dd', 'rrr', '2018-01-17 21:22:39', 3, 'dd', 1, 2);
INSERT INTO `gallery` VALUES (11, 'perina', 'dd', '2018-01-17 21:53:52', 3, 'perina', 1, 1);
INSERT INTO `gallery` VALUES (12, 'fasilitas', 'll', '2018-01-17 22:11:53', 3, 'fasilitas', 1, 3);
INSERT INTO `gallery` VALUES (14, 'foto gambar', 'rspk lippo', '2018-01-18 21:19:14', 3, 'foto-gambar', 1, 1);
INSERT INTO `gallery` VALUES (15, 'd', 's', '2018-01-28 19:47:32', 3, 'd', 1, 3);
INSERT INTO `gallery` VALUES (16, 'medical', 'medical', '2018-01-28 21:28:53', 3, 'medical', 1, 3);
INSERT INTO `gallery` VALUES (17, 'icu', 'icu', '2018-01-28 21:32:05', 3, 'icu', 1, 1);
INSERT INTO `gallery` VALUES (18, 'tes', 'tes', '2018-01-28 22:00:09', 3, 'tes', 1, 3);
INSERT INTO `gallery` VALUES (19, 'test1', 'test1', '2018-01-28 22:01:01', 3, 'test1', 1, 2);
INSERT INTO `gallery` VALUES (20, 'test2', 'test2', '2018-01-28 22:03:22', 3, 'test2', 1, 2);
INSERT INTO `gallery` VALUES (21, 'ruang operasi', 'ruang operasi', '2018-01-30 09:40:49', 3, 'ruang-operasi', 1, 3);
INSERT INTO `gallery` VALUES (22, 'kita', 'mj', '2018-02-02 14:10:44', 3, 'kita', 1, 3);
INSERT INTO `gallery` VALUES (23, 'permata', 'lippo', '2018-02-09 20:01:18', 3, 'permata', 1, 1);
INSERT INTO `gallery` VALUES (24, 'film', 'ddd', '2018-02-10 11:16:13', 3, 'film', 1, 3);
INSERT INTO `gallery` VALUES (25, 'ddd', 'rrr', '2018-02-10 16:54:12', 3, 'ddd', 1, 3);
INSERT INTO `gallery` VALUES (26, 'oo', 'kk', '2018-02-11 21:24:00', 3, 'oo', 1, 3);
INSERT INTO `gallery` VALUES (29, 'logo rumah sakit', 'logorumah sakit', '2018-02-11 22:10:48', 3, 'logo-rumah-sakit', 1, 1);

-- ----------------------------
-- Table structure for gallery_detail
-- ----------------------------
DROP TABLE IF EXISTS `gallery_detail`;
CREATE TABLE `gallery_detail`  (
  `gallery_detail_id` int NOT NULL AUTO_INCREMENT,
  `gallery_id` int NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_active` tinyint(1) NULL DEFAULT 1,
  `alt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_cover` tinyint(1) NOT NULL DEFAULT 0,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`gallery_detail_id`) USING BTREE,
  INDEX `gallery_id`(`gallery_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gallery_detail
-- ----------------------------
INSERT INTO `gallery_detail` VALUES (23, 3, '', 'logo-image2.jpg', '', 1, '', 1, 1);
INSERT INTO `gallery_detail` VALUES (24, 4, 'smk garuda purwakarta', 'smk_garuda_purwakarta1.JPG', 'smk garuda purwakarta', 1, '', 0, 0);
INSERT INTO `gallery_detail` VALUES (25, 4, 'SMAN 1 PATOKBEUSI', 'SMAN_1_PATOKBEUSI1.JPG', 'SMAN 1 PATOKBEUSI', 1, '', 0, 0);
INSERT INTO `gallery_detail` VALUES (26, 4, 'INAUGURASI FKIP-UNSIKA', 'INAUGURASI_FKIP-UNSIKA1.JPG', 'INAUGURASI FKIP-UNSIKA', 1, '', 1, 0);
INSERT INTO `gallery_detail` VALUES (27, 4, 'SMKN 1 TIRTAJAYA', 'SMKN_1_TIRTAJAYA1.JPG', 'SMKN 1 TIRTAJAYA', 1, '', 0, 0);
INSERT INTO `gallery_detail` VALUES (28, 5, 'ss', 'phone.png', 'ss', 1, '', 1, 0);
INSERT INTO `gallery_detail` VALUES (29, 6, 'd', 'slide21.jpg', 'd', 1, '', 1, 0);
INSERT INTO `gallery_detail` VALUES (30, 2, 'aa', 'logo1.jpg', 'aa', 1, 'aa', 1, 1);
INSERT INTO `gallery_detail` VALUES (31, 2, 'aa', 'permata default Jababeka.jpg', 'aa', 1, 'aa', 0, 2);
INSERT INTO `gallery_detail` VALUES (32, 2, '', 'logo3.jpg', '', 1, '', 0, 3);

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook`  (
  `guestbook_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_datetime` datetime NULL DEFAULT NULL,
  `is_processed` tinyint(1) NULL DEFAULT 0,
  `company` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `type` enum('guestbook','portfolio','lamaran','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`guestbook_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 234 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES (38, 'Guestbook', 'Pakai Asuransi Tugu bisa ga ya ??', 'izza', 'izza.annisa@yahoo.co.id', '085717023809', '2018-08-09 12:03:57', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (39, 'Guestbook', 'Apakah rmh sakit Permata Keluarga bekerja sama dengan BPJS Ketenagakerjaan?', 'Yudi Heryadi', 'yudi.ayahandra@gmail.com', '081932925290', '2018-08-14 19:07:28', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (40, 'Guestbook', 'Mau bikin janji dengan dokter tht pada hari ini', 'ahmadjaelani', 'aj273381@gmail.com', '085770815739', '2018-09-11 17:56:21', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (42, 'Guestbook', '', '', '', '', '2018-09-20 18:19:16', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (43, 'Guestbook', 'Selamat malam \r\nSaya linda di Cikarang , mau tanya kalau make an appointment dengan dr inneke (dr kulit) apa bisa ? Dan untuk biaya konsultasi brp ya ? Terimakasih ', 'Nasrie Amalinda', 'amalindando.15@gmail.com', '085794641595', '2018-09-28 19:56:03', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (44, 'Guestbook', 'Selamat siang saya mau tanya jadwal praktek dokter spesialis anak untuk hari ini jam berapa ya?', 'Agus permana', 'aguspermana503@gmail.com', '08998275294', '2018-10-15 12:14:48', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (45, 'Guestbook', 'Saya mau bertanya apakah bisa meminta sub copy medical chek up sudah ada sekitar 6 bulan yang lalu jika bisa berapa biayanya terima kasih', 'Muhamad bayu aditya', 'abayu6193@gmail.com', '085813121367', '2018-10-15 14:32:46', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (46, 'Guestbook', 'ingin mengetahui estimasi biaya usg 4D kandungan berapa trimakasih...', 'novita fitriyani', 'vita230992@gmail.com', '085710122187', '2018-10-20 17:49:49', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (47, 'Guestbook', '', '', '', '', '2018-10-22 09:19:04', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (48, 'Guestbook', 'Halo, selamat siang. saya ingin melalukan rontgen pada gigi saya apakah harus reservasi terlebih dahulu?', 'SYUGA BATARA', 'Syugairawan@gmail.com', '082261606696', '2018-11-06 12:29:59', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (49, 'Guestbook', 'Apakah ada lowker buat radiografer?', 'ahmad fendi', 'fendiahmad101@gmail.com', '089609841391', '2018-11-26 07:27:26', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (50, 'Guestbook', 'Mau tanya kalo mau ke fisioterapi jadwalnya kapan ya?', 'Agus wahyono', 'agustslank@gmail.com', '081904841832', '2018-12-05 16:18:56', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (51, 'Guestbook', 'Mau daftar buat ke dokter THT malam ini.. Bisa gak? Pasien sebelumnya blm pernah ke permata keluarga. ', 'Sunanul ilah', 'sunanulilah89@gmail.com', '083878918105', '2018-12-12 14:56:59', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (52, 'Guestbook', 'siang ini sekitar pukul 2 siang saya dan ibu sy datang ke RSPK jababeka ingin ke spesialis mata. kebetulan ibu saya pertama kali berobat di sana jd mendaftar sebagai pasien baru, ditempat pendaftaran pasien dirasa petugas kurang ramah thd pasien, sudah mendaftar kami diberi arahan untuk ke ruang dokter. duduk lalu ada perawat bilang \"ditunggu ya bu\". bbrp menit menunggu tp blm dipanggil juga ketika saya tanya pd perawat katanya sedang menunggu status (di sistem) berubah. cukup lama menunggu, kemudian dipanggil. stlh dipanggil ke dlm ruang dokter, ditengah dokter memeriksa kondisi mata dimana melihat ke angka ditembok kemudian ada perawat masuk, berdiri mencari kertas dimeja dokter tetapi dgn posisi yg tdk memerhatikan bahwa dokter sedang melakukan test pd pasien sehingga menutupi. ibu sy diminta menunggu diluar terlebih dahulu karna dokter mau melihat reaksi obat yg diberikan, ternyata map pasien sudah naik. ibu saya dipanggil oleh perawat diberi tahu bahwa ditunggu di farmasi, sedangkan msh blm selesai dgn dokter. sudah selesai dgn dokter, kami ke kasir dan farmasi. saya lihat dilayar ketika baru dtg, no antrian farmasi untuk racikan 19, dan non racikan 43. menunggu.. ibu sy dpt nomor antrian non racikan 49. untuk obat non racikan, dari no 43 ke 44 dan 45 cukup lama. stlh 45-48 cepat, tidak sampai 5mnt. stlh 48 lama, dmn itu adalah giliran ibu saya, pdhl obat pada resep hanya 2buah obat tetes mata. obatny sudah ada tp blm dipanggil, sampai akhirnya ibu saya marah. saran untuk RSPK jababeka ke depannya agar lbh memerhatikan kinerja perawatnya, sy bukan pertama kali ke RSPK jababeka tp kali ini saya rasa pelayanan agak mengecewakan. terimakasih. ', 'fitri', 'fitriftrms@gmail.com', '081322598522', '2018-12-21 17:51:40', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (53, 'Guestbook', 'Mohon ijin bertanya, kalau ingin mendaftar menjadi pegawai perawat di RS Permata Keluarga boleh memakai jilbab atau tidak?\r\nTerimakasih, ', 'Erlina Dwi Hastuti', 'erlinahastuti05@gmail.com', '085724783041', '2019-01-15 01:21:30', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (54, 'Guestbook', '', '', '', '', '2019-01-22 09:39:17', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (55, 'Guestbook', 'Kami dari PT. Fuji Seimitsu, telah melakukan MCU tgl 17 desember , dan ada susulan 1 peserta  terakhir tgl 2 januari , tapi sampai saat ini tgl 22 januari belum ada informasi jadwal  hasil MCU akan dikirim ke perusahaan kami, mohon pihak yg berwenang bisa membantu memfollowup ke departemen terkait ', 'Yayah', 'purchasing@fujiseimitsu.co.id', '021-893-7340', '2019-01-22 10:12:56', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (56, 'Guestbook', 'Selamat sore,, Untuk hari ini dokter Rony sppd ada jadwal gak ya,,? Saya mau daftar. ', 'Ahmad Rifai ', 'rifaiahmad9126@gmail.com', '081221727808 ', '2019-01-23 15:29:32', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (57, 'Guestbook', 'tes', 'Agus Badrussalam', 'agus.badruss@gmail.com', '083818229523', '2019-02-17 17:19:47', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (59, 'Guestbook', 'tes yah', 'agus tes', 'agus.badrussalam@student.unsika.ac.id', '083818229523', '2019-02-17 17:50:12', 0, NULL, NULL, 'guestbook', 0);
INSERT INTO `guestbook` VALUES (66, 'Guestbook', 'Yth Bpk / Ibu\r\n\r\nSaya ingin menanyakan mengenai Detil Standar Biaya Persalinan untuk kelas 3 di RS Permata Keluarga. seperti contoh :\r\n1. Biaya persalinan\r\n2. Biaya Dr / Bidan\r\n3. Biaya Kamar (kelas 3)\r\n4. Biaya perawatan Bayi\r\n5. Tindakan lainnya. dan detil lainnya.\r\n\r\nMohon responnya bapak/ibu\r\n\r\nTerimakaish\r\nTaufik', 'Taufik', 'keyfiqh@gmail.com', '081211619977', '2019-02-25 11:51:51', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (67, 'Guestbook', 'Pagi . Maaf mau tanya kalau paket biaya melahirkan rincian ya bolleh tau ga ? ', 'Hendra lesmana', 'lhendra97@gmail.com', '082111979602', '2019-02-27 10:14:23', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (68, 'Guestbook', 'Herpes dibuat di alat kelamin penis, jadi tanyakan konsultasi DrZinson hari ini jam 60:00 sore\r\n', 'Inoue Satoru', 'sinoue@ptkmk.co.jp', '08111080107', '2019-03-04 13:22:27', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (69, 'Guestbook', '', '', '', '', '2019-03-12 16:39:24', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (70, 'Guestbook', 'Selamat Pagi,\r\n\r\nSaya adalah pasien dr. Haroen SPOG. Pagi ini saya mau daftar berobat untuk nanti sore,\r\n\r\ntapi sudah satu jam telp hunting yang biasa saya hubungi tidak bisa menerima panggilan. tertulis sibuk.\r\n\r\nTolong dibantu agar dapat didaftarkan untuk schedule hari ini atas nama:\r\n\r\nNama Pasien : Uvira Kusumawardhani\r\nTTL: 15 Maret 1982\r\nDokter: dr. Haroen SPOG\r\nschedule berobat: 14 Maret 2019 sore\r\n\r\nAtau bisa diinformasikan nomer telepon lainnya yang bisa dihubungi.\r\n\r\nTerima Kasih,\r\n\r\nHormat Saya,\r\nSandy\r\n', 'Mochamad Sandy Muharam', 'sandymuharam@gmail.com', '081510002590', '2019-03-14 08:28:19', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (71, 'Guestbook', 'Selamat pagi,\r\n\r\nSy ingin menanyakan hasil MCU an. Evy dyah utami pada Sabtu, 16 Maret 2019.\r\nTerima kasih.\r\n\r\nRegards, \r\nEvy', 'Evy Dyah Utami', 'ezzizzla@gmail.com', '087768285554', '2019-03-18 09:11:42', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (72, 'Guestbook', '', '', '', '', '2019-03-19 09:44:41', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (73, 'Guestbook', 'Mohon diinfo harga kamar perawatan di rspk jababeka.\r\nTerimakasih.', 'Hadi ismanto', 'myhadiismanto@gmail.com', '081315692501', '2019-04-09 20:21:08', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (74, 'Guestbook', '', '', '', '', '2019-04-11 13:29:44', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (75, 'Guestbook', 'Selamat Sore, Saya ingin bertanya mengenai lowongan kerja. saat ini RS Permata Keluarga sedang proses pembangunan di Karawang. Kira-kira kapan saya bisa melamar pekerjaan ke RS Permata Keluarga. Terima kasih.', 'Alwyn Andraseno', 'rec.alwyn@gmail.com', '088210888483', '2019-04-18 18:58:00', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (76, 'Guestbook', 'Selamat Pagi.\r\n\r\nSaya mau periksa di RS permata keluarga namun sebelumnya saya mau mendaftarkan dulu asuransi yang saya pakai.\r\nAsuransi fullerton Health indonesia ( Tirta Medical Centre ) dan setahu saya ini no limit untuk pengobatan semuanya.\r\nMohon sekitanya jika sudah di daftarkan( sudah jd rekanan Asuransi Titra nya) hubungi saya di tlp/sms/wa 082311178205.\r\nTerimakasih.\r\n\r\nRegards,\r\nRamdlon', 'RAMDLON HIDAYATULLOH', 'ramdlon.hidayatulloh@gmail.com', '082311178205', '2019-04-21 09:50:33', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (77, 'Guestbook', 'assalamualaikum wr wb\r\nselamat siang \r\nsaya euis herawati \r\nbidan di puskesmas cipayung\r\nmau tanya jadwal dokter kulit di RSPK Jababeka ada hari apa aja , mau bawa orang tua ke dokter kulit\r\nterimaksih\r\nwasalamualaikum wr wb', 'EUIS HERAWATI', 'euisherawati094@gmail.com', '081314472660', '2019-04-23 13:24:31', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (78, 'Guestbook', 'KANGEN SAMA FO RSPK JABABEKA !!! :) ', 'PUTRI ANGELITA BR TARIGAN', 'putriangelita53@gmail.com', '087872832900', '2019-04-24 12:48:10', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (79, 'Guestbook', 'Selamat pagi.mau nanya untuk jadwal dokter mata pada hari ini,mulai praktek jam berapa aja ya...', 'Aang Gunaefi', 'gunaefaang8@gmail.com', '085950302017', '2019-05-02 07:29:32', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (80, 'Guestbook', 'Apakah hari ini ada jadwal spesialis dokter anak?\r\n ', 'Ahmad Rosyidi ', 'ahmadrosyidi1@gmail.com', '082240169505 ', '2019-05-13 10:01:04', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (81, 'Guestbook', 'Jadwal praktek poli THT ?', 'junaidi', 'junetjnd@gmil.com', '081315408588', '2019-05-15 13:24:36', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (82, 'Guestbook', '', '', '', '', '2019-05-15 15:20:07', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (83, 'Guestbook', 'mohon dikirimkan informasi biaya : \r\nbiaya ruangan kls 1\r\nbiaya ruangan vip\r\nbiaya lahiran normal\r\nbiaya lahiran caesar\r\n\r\nTerima kasih', 'Rizky', 'rizky.fh@gmail.com', '089522111369', '2019-05-15 17:18:43', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (84, 'Guestbook', 'Boleh tau berapa biaya USG 2 dimensi di rspk Jababeka , terimakasih', 'Mardiah hutasuhut', 'rizkydiah93@yahoo.com', '081210115926', '2019-05-25 08:35:15', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (85, 'Guestbook', '', '', '', '', '2019-05-31 06:56:49', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (86, 'Guestbook', 'Apakah besok sabtu ada jadwal dokter kandungan jam brapa\r\n', 'Rojali', 'rojalidz@gmail.com', '085782706353', '2019-05-31 23:07:15', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (87, 'Guestbook', 'mohon info general checkup ada paket /promo tidak', 'eko widiarsa', 'ekowidiarsa@gmail.com', '081572221999', '2019-06-10 13:07:44', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (88, 'Guestbook', '', '', '', '', '2019-06-10 14:26:12', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (90, 'Guestbook', 'Selamat Pagi,\r\n\r\nSaya ingin menanyakan mengenai proyek pembangunan Rumah Sakit Permata Keluarga di Karawang. Saya bisa minta untuk kontak person dari Manager Proyek nya? Saya ingin menawarkan untuk material listrik (busduct) dan pintu rumah sakit. \r\n\r\nMohon informasinya, terimakasih', 'Malvin', 'malvin.jitu@pintuindustri.com', '081384516454', '2019-07-11 09:33:53', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (91, 'Guestbook', '', '', '', '', '2019-07-12 18:24:30', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (92, 'Guestbook', '', '', '', '', '2019-07-29 14:23:08', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (93, 'Guestbook', 'Selamat siang,\r\n\r\nSaya mau tanya, untuk mendapatkan surat keterangan sehat, surat keterangan tidak TBC, dan surat keterangan tidak menggunakan narkoba, tes lab apa saja yang perlu dilakukan? Mohon informasi mengenai paket, prosedur, dan biayanya.\r\n\r\nTerimakasih.', 'Dwiastuti', 'dwiastutic@gmail.com', '81290328945', '2019-07-30 13:03:30', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (94, 'Guestbook', 'Istri saya tidak berhenti batuk selama lebih dari 3 minggu\r\nSaya ingin menjalani pemeriksaan medis termasuk pemeriksaan sinar X. Apakah mungkin hari ini?\r\n', 'Isti komah', 'sinoue@ptkmk.co.id', '082125206867', '2019-08-29 08:38:53', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (95, 'Guestbook', '', '', '', '', '2019-08-29 08:39:03', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (96, 'Guestbook', 'Biaya persalinan cesar di rs permata keluarga jababeka untuk kelas 1,2,3 brp y? Mohon info nya', 'Palmawati', 'paloma_wati07@yahoo.com', '081319498357', '2019-09-07 16:43:32', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (97, 'Guestbook', '', '', '', '', '2019-09-16 09:54:35', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (98, 'Guestbook', 'Saya mau tanya untuk biaya scaling gigi berapa ya? Trims', 'diena', 'diena28.ros@gmail.com', '08996874599', '2019-09-16 09:57:47', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (99, 'Guestbook', 'Selamat pagi ! \r\nUntuk biaya USG 4D berapa yah ?', 'Yuli safitri', 'yulidanuel3794@gmail.com', '081265016240', '2019-10-01 08:11:37', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (100, 'Guestbook', 'Untuk biaya USG 4D berapa yah ?', 'Yuli safitri', 'yulidanuel3794@gmail.com', '081265016240', '2019-10-01 08:12:36', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (101, 'Guestbook', '', '', '', '', '2019-10-02 09:48:09', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (102, 'Guestbook', 'Saya Ridwan dari PT.Anugerah Prima Medikalindo ingin memberikan penawaran alkes.. untuk info lebih lanjut, saya dapat menghubungi dengan bagian apa. Terima kasih.', 'Ridwan Setiawan', 'setiawan_r@ymail.com', '087788953137', '2019-10-02 11:32:36', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (103, 'Guestbook', 'Sungguh pelayanan rawat jalan yg mengecewakan untuk 2 hal yg saya alami poli spesialis paru. Menunggu dokter dari jam 4 sore sampai jam 7.30 malam tak kunjung datang. Setiap ditanya ke perawat bertugas t jam selalu mundur dari jam 4 jam 6 jam 7.30. Bagaimana tindakan RS dg dr spt ini? Dulu hal yg sama terjadi dg poli spesialis mata. Saya minta response nya.', 'Ishak Lambang Karunia S', 'ishak.lks@gmail.com', '08111083344', '2019-10-07 19:36:34', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (104, 'Guestbook', '', '', '', '', '2019-10-15 01:10:03', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (105, 'Guestbook', 'Selamat pagi permata keluarga, saya ingin menanyakan hasil medical check up atas nama saya sendiri Parzan Nazir Ahmad, tgl pemeriksaan 16 Oktober 2019. Mohon konfirmasinya.', 'Parzan Nazir Ahmad', 'parzannazir02@gmail.com', '085210161431', '2019-10-17 08:25:25', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (106, 'Guestbook', '', '', '', '', '2019-10-21 16:26:43', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (107, 'Guestbook', 'Berapa perkiraan biaya melahirkan normal di rs ini? Dan berapa biaya usg 4 dimensi', 'Sindy ovia', 'sindyovia@gmail.com', '081293566060', '2019-10-28 07:36:13', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (108, 'Guestbook', 'Permisi mau tanya disini ada usg 4D \r\nHarganya berapa yak?', 'Fachri ahmad', 'fachryadf@gmail.com', '085776342214', '2019-11-06 09:21:20', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (109, 'Guestbook', 'Selamat malam,\r\nSemoga rs permata medika makin baik pelayanannya..\r\nSemua orang mengakui keindahan gedung rumah sakit ini. Dipandang dari sebelah manapun, tetap terlihat indah. Sarana prasarana pun nampaknya sudah lengkap. Namun sayang, kalau SDM yang bekerja di rs ini kurang bisa menghargai waktu.\r\nHari ini saya periksa ke dokter kandungan an. Dr.emy dg nomor ruangan 114. Saya melihat dari benerapa hari sebelumnya bahwa jadwal terbaru menuliskan dengan jelas jadwal praktek pukul 17~19. Namun sayang, sampai saat ini pukul 18.40 dokter ybs belum nampak juga. Entah dengan alasan apa saya tidak mengerti.\r\nYang ingin saya tanyakan, apakah cara kerja di sini dokter datang setelah pasien banyak atau bagaimana? Apakah kami harus mondar mandir saja menunggu dokter disaat sudah masuk jadwal prakter? Lalu, berapa banyak pasien di sini yang harus menunggu dengan tidak pasti sedangkan mungkin nanyak juga yang punya janji/urusan/kepentingan yang tidak kalah penting namun harus menunda karena keterlambatan kehadiran dokter. \r\nSesungguhnya saya sangat kecewa. Semoga keterlambatan ini hanya kebetulan yang tidak akan terulang. Semoga bisa lebih saling menghargai, lebih banyak evaluasi, dan lebih baik lagi.', 'Siti Nur Aisah', 'aisahisme@gmail.com', '083874367815', '2019-11-16 18:46:47', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (110, 'Guestbook', 'Hallo, \r\n\r\nSaya Desy, perusahaan kami ingin berkonsutasi dengan dokter spesialias penyakit dalam yang komunikatif. dan kalau bisa perempuan. Konsultasinya dilakukan di pabrik kami selama 2 jam. akan ada 4 orang perwakilan dari perusahaan yang akan hadir pada konsultasi nanti. \r\n\r\nMohon PR nya bisa menghubungi saya di 085743359400.\r\nTerima kasih. \r\nSalam \r\nDesy Magdalena\r\nHRD PT. Kimberly-Clark Indonesia', 'Desy Magdalena', 'desymh@gmail.com', '085743349400', '2019-12-06 12:19:09', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (111, 'Guestbook', 'Mohon informasinya pak,Ibu....', 'Apakah ada nama Yosua di Rawat di RS.Ini ?', '', '081315202827', '2019-12-13 09:24:34', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (112, 'Guestbook', '', '', '', '', '2019-12-13 09:24:40', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (113, 'Guestbook', '', '', 'ulimansihotang17@gimel..com', '', '2019-12-13 09:25:47', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (114, 'Guestbook', '', '', '', '', '2019-12-13 09:25:54', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (115, 'Guestbook', '', '', '', '', '2019-12-14 05:54:45', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (116, 'Guestbook', 'selamat pagi ,,,saya mau bertanya .untuk layanan dokter  spesialis kandungan yang pakai layanan BPJS  ,ada nya jam berapa ya ? terimakasih sebelumnya', 'DINDIN NURDIN', 'diensganteung98@gmail.com', '089655638534', '2019-12-30 09:03:31', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (117, 'Guestbook', 'Minta info nya buat jadwal dr kandungan yg ter up date', 'Ramin Mintarsyah', 'raminmintarsyah@gmail.com', '085710777236', '2020-01-06 20:56:19', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (118, 'Guestbook', 'Berapa biaya kuret janin BO?', 'Nensi', 'nensi1603@gmail.com', '087737461449', '2020-01-08 16:33:27', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (119, 'Guestbook', 'Berapa biaya kuret BO?', 'Nensi', 'nensi1603@gmail.com', '087737461449', '2020-01-08 16:34:12', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (120, 'Guestbook', '', '', '', '', '2020-01-09 17:17:44', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (121, 'Guestbook', '', '', '', '', '2020-01-17 11:19:22', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (122, 'Guestbook', '', '', '', '', '2020-01-20 08:16:18', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (123, 'Guestbook', '', '', '', '', '2020-01-30 09:53:45', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (124, 'Guestbook', 'apakah di permata keluarga ada test narkoba jika ada berapakah biayanya terima kasih.', 'ruslan', 'ruslanrs7781@gmail.com', '081280554251', '2020-02-04 16:30:04', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (125, 'Guestbook', '', '', '', '', '2020-02-10 12:08:19', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (126, 'Guestbook', 'Assalamu\'alaikum \r\n\r\nSelamat siang kak \r\nMau tanya apa kita bisa minta price list untuk persalinan sc di rspk Jbbka ya \r\n.makasih', 'Ngreni w.a', 'ngrenialfi@gmail.com', '081291191305', '2020-02-13 14:02:45', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (127, 'Guestbook', '', '', '', '', '2020-02-14 13:37:30', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (128, 'Guestbook', '', '', '', '', '2020-02-14 13:37:34', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (129, 'Guestbook', 'Assalamualaikum....\r\nSelamat pagi,mau tanya kalu RS.Permata bis pakai BPJS gk??\r\nTerus kalau lahiran pakai BPJS bisa langsung ke RS.Permata atau harus ad rujukan dari faskes 1?\r\nTerimakasih.', 'Deden daenuri', 'dedend96@gmail.com', '085714841682', '2020-02-15 11:08:34', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (130, 'Guestbook', 'Kepada Rs permata lippo cikarang\r\n\r\nNama saya ikhsan ali. Suami dari pasien lisa andriani. Ny lisa dirawat inap di ruang vip 308 13-14 feb 2020 \r\nKronologi nya,pada visit terakhir dokter harun ny lisa dinyatakan bisa pulang dan diberi surat untuk cuti seminggu. Namun ketika di nursing station lantai tiga. Suster ini memberi surat ijin hanya untuk 3 hari. Lalu saya menjelaskan bahwa dokter harun bilang untuk satu minggu. Tapi suster ini ngotot bahwa ijin hanya 3 hari. Sampai pada akhirnya di konfirmasi oleh perwat lain bahwa benar suratnya hanya untuk satu minggu.\r\nDisini si suster ini dengan sikap dan raut muka yang sangat angkuh. Dan yang paling parah dia melotot ke mata saya seperti ngajak berkelahi. Sangat tidak pantas. Apalagi saya menyewa ruang vip. Sikap yang amat sangat mengecewakan\r\nKejadian ini hari jumat 14 febuari 2020. Di nursing station lantai 3 sekitar jam 13.00 \r\nCiri2 susternya. Seperti leader di nursing station tersebut. Terlihat lumayab cantik dibanding perawat lain. Mukanya sering terlihat angkuh dan tidak komunikatif\r\nMohon untuk pihak rumah sakit menindak suster ini\r\n\r\nSalam\r\nIkhsan', 'Ikhsan ali', 'Aliikhsan66@gmail.com', '', '2020-02-15 14:32:37', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (131, 'Guestbook', 'PASIEN LAMA\r\nNama Lengakap : Dahlia Mariana\r\nTempat/tanggal lahir : 30  Sep 1991\r\nDokter yang dituju : dr. Harun\r\nWaktu Berobat : (sore)\r\nAlamat Domisili : bukit sentosa residence, blok D2 no 20, kec. Karangbahagia kel.karang sentosa\r\nPenjamin:Tunai\r\nNo telpon : 081286002454', 'Dahlia Mariana', 'dahlialiandre91@gmail.com', '081286002454', '2020-02-17 13:04:34', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (132, 'Guestbook', '', '', '', '', '2020-02-17 13:08:04', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (133, 'Guestbook', 'Siapa saja Dokter kandungan yg menerima layanan BPJS ?\r\nTerima kasih_', 'AGUS SALIM', 'adopmanchester@yahoo.co.id', '081383670885', '2020-02-24 07:30:19', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (134, 'Guestbook', 'apakah rs permata keluarga utk pembayarannya bisa menggunakan garda medika?', 'Adi Islamay Vivaldi Mozard', 'adislamay19@gmail.com', '081294215270', '2020-02-29 09:47:02', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (135, 'Guestbook', 'Saya berencana untuk berobat ke dokter spesialis mata menggunakan BPJS Kesehatan. Saya lihat schedule hari ini jam 17.00-20.00. Yang saya tanyakan, apa syarat untuk ke dokter tersebut selain surat rujukan dari klinik BPJS? Mohon informasinya. Terimakasih', 'Atika', 'atikakemala.ramadhani@gmail.com', '081284693260', '2020-03-02 08:43:12', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (136, 'Guestbook', '', '', '', '', '2020-03-02 08:43:35', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (137, 'Guestbook', 'selamat siang..\r\napakah bisa melakukan HSG dan cek sperma d RS.permata keluarga lippo??\r\njika bisa berapa kisaran biayanya..terimakasih', 'helisna', 'setiahelisna@gmail.com', '081283193390', '2020-03-03 10:32:48', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (138, 'Guestbook', 'Selamat pagi..  \r\nSaya mau bertanya untuk poli umum hari rabu sore dokter yg bertugas siapa ya?  Dokter laki-laki atau perempuan?  \r\nTerimakasih ', 'Eli Noviana ', 'eliinoviiana15@gmail.com', '083837395439', '2020-03-04 04:44:53', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (139, 'Guestbook', 'Saya ingin mendaftarkan istri saya untuk periksa ke Dokter Spesialis penyakit dalam hari ini jumat 20 Maret 2020. Bagaimana caranya daftar via online. Istri saya baru sekali ini mau berobat ke RS.Permata Keluarga Jababeka. Terimakasih', 'Aris Nurhidayat', 'aris.astra86@gmail.com', '081379414459', '2020-03-20 11:58:15', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (140, 'Guestbook', 'Apakah bisa buat reservasi ke poli mata untuk hari Senin tanggal 23 Maret 2020?\r\n', 'Nandang Susanto', 'susanto.nandang29@gmail.com', '08568874765', '2020-03-21 21:55:19', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (141, 'Guestbook', '', '', '', '', '2020-03-23 20:58:23', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (142, 'Guestbook', 'Anak saya bayi usia 2 bulan 10 hari, jdwal imunisasi dpt,folio, hib tgl 23 maret. Apakah masih bisa melakukan imunisasi (dengan kondisi pandemi saat ini) di rs?', 'Yanti Nurhayati', 'yantinoor82@gmail.com', '085883456885', '2020-03-30 21:12:56', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (143, 'Guestbook', '', '', '', '', '2020-04-11 08:20:33', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (144, 'Guestbook', 'Bagaimana mekanisme perusahaan kami bisa berkerja sama dalam pengelolaan kesehatan karyawan ', 'budi santoso', 'budisantoso@bbg.co.id', '081212013598', '2020-04-13 10:06:09', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (145, 'Guestbook', '', '', '', '', '2020-04-13 10:06:16', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (146, 'Guestbook', 'Menanggapi status darurat #Corona, GreatDay HR siap menyediakan sistem absensi secara GRATIS sampai akhir Juni 2020.\r\nPara karyawan yang sedang melakukan Work From Home atau #WFH, silahkan menggunakan GreatDay HR GRATIS tanpa syarat!\r\n\r\nDaftarkan perusahaan mu sekarang, dan nikmati fitur absensi, rekam aktivitas, dan media sosial internal! Mari maksimalkan upaya #FlattenTheCurve dengan #DiRumahAja dan tetap produktif bersama GreatDay HR????????', 'Moch Saeful Bachry', 'moch.sabar@greatdayhr.com', '081382837890', '2020-04-14 09:54:13', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (147, 'Guestbook', 'Assalamualaikum\r\nMaaf hari ini dr Eunike spesialis kandungan ada tdk y?saya mau periksa . terimakasih\r\n', 'Rina setiawati', 'rinasetiawatisetiawati@gmail.com', '083863515230', '2020-05-01 08:28:06', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (148, 'Guestbook', 'Assalamualaikum\r\nMaaf hari ini dr Eunike spesialis kandungan ada tdk y?saya mau periksa . terimakasih\r\n', 'Rina setiawati', 'rinasetiawatisetiawati@gmail.com', '083863515230', '2020-05-01 08:28:06', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (149, 'Guestbook', '', '', '', '', '2020-05-05 11:23:49', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (150, 'Guestbook', 'Hallo RS Permata Keluarga,\r\n\r\nSaya mau tanya apakah bisa membuat janji untuk konsultasi dgn dokter via telpon atau whatsapp? Nomor mana yg bisa saya hubungi jika saya ingin membuat janji?\r\n\r\nRegards,\r\nAdel', 'Adel', 'miss.mariaadelina@gmail.com', '082143874459', '2020-05-13 07:26:13', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (151, 'Guestbook', 'Yth. HUMAS RS Permata Keluarga Kabupaten Karawang,\r\n\r\nNama saya Arfi. Saya mahasiswa manajemen kelas internasional semester akhir di UNSIKA. Saya berniat untuk melamar pekerjaan di perusahaan anda di posisi apapun yang butuh tenaga kerja, atau saya pun sangat bersedia jika diberikan kesempatan magang. Saya memiliki skill di berbagai bidang yang bisa anda lihat di cv saya pada tautan www.tinyurl.com/cvarfiyahya . Saya memiliki integritas yang tinggi, saya disiplin dan sangat mencintai deadline. Saya sangat bertanggung jawab meski pada hal terkecil seperti menjaga kebersihan suatu tempat.Untuk itu, saya tidak akan mengecewakan jika saya diberikan kesempatan untuk interview atau bahkan menjadi bagian dari perjuangan perusahaan anda. Terimakasih perhatian nya. \r\n\r\nHormat saya,\r\n\r\n\r\n\r\nMohammad Arfi', 'Mohammad Arfi Yahya', 'arfiyahya17@gmail.com', '08878874831', '2020-05-29 20:59:27', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (152, 'Guestbook', '', '', '', '', '2020-06-03 12:02:15', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (153, 'Guestbook', '', '', '', '', '2020-06-03 12:46:24', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (154, 'Guestbook', '', '', '', '', '2020-06-04 12:19:35', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (155, 'Guestbook', '', '', '', '', '2020-06-11 09:43:40', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (156, 'Guestbook', '', '', '', '', '2020-06-16 11:49:57', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (157, 'Guestbook', '', '', '', '', '2020-06-18 07:50:52', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (158, 'Guestbook', 'apakah ada lowongan untuk permata keluarga yang di karawang untuk penata anestesi?', 'sri widaningsih', 'sriwidaningsih1904@gmail.com', '081286461115', '2020-06-20 10:13:41', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (159, 'Guestbook', '', '', '', '', '2020-07-04 06:20:08', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (160, 'Guestbook', 'Selamat siang,  di RS permata keluarga lippo cikarang ada DSA untuk imunisasi vaxigrip tahap ke 2 gak ya? ', 'Handa kusumawati', 'handakusuma60@gmail.com', '087824403302', '2020-07-07 11:13:46', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (161, 'Guestbook', '', '', '', '', '2020-07-08 11:04:50', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (162, 'Guestbook', 'BPJS untuk bayi yang lahir di rumah sakit permata apakah di daftarkan pihak rumah sakit atau di daftarkan sendiri oleh orang tua bayi?\r\n\r\nTerima kasih ', 'IRVAN ', 'irvanfauzi07@gmail.com', '085697185568', '2020-07-13 14:34:22', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (163, 'Guestbook', 'Minta jadwal poli anak dokter nadia', 'Hariawan', 'hariawan893@gmail.com', '08995265791', '2020-07-15 06:28:21', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (164, 'Guestbook', 'Selamat siang\r\nSaya ingin bertanya untuk biaya konsultasi dan usg di poli kandungan kira2 estimasinya berapa ya? \r\n\r\nTerima kasih', 'Kurnia Asmara Deta', 'kurniaadeta06@gmail.com', '085718887091', '2020-07-19 12:00:59', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (165, 'Guestbook', '', '', '', '', '2020-07-22 10:39:32', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (166, 'Guestbook', 'Untuk jadwal spesialis anak untuk hari jumat buka jam berapa sampai jam berapa aja.\r\n\r\nterima kasih', 'Dede iskandar', 'dedeiskandar101191@gmail.com', '081585168638', '2020-07-23 12:22:57', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (167, 'Guestbook', 'selamat pagi ibu / bpk \r\nmau tanya jadwal praktek dr. spesialis kulit', 'anda suganda', 'dulprojeck12@gmail.com', '081281710706', '2020-07-29 10:08:12', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (168, 'Guestbook', 'Selamat siang, saya ingin menanyakan biaya sunat anak umur 6 tahun. Berapa ya perkiraan biayanya? Dan untuk konsultasi awal apakah ke dokter anak atau dokter specialis kulit dan kelamin ya? Terima kasih.', 'Michelle Nilam Frans', 'michelle_nilam@gmail.com', '085314198956', '2020-08-05 14:07:37', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (169, 'Guestbook', 'mau ke dokter kandungan bisa daftar dulu ? atau langsung ke tempat ya?', 'peti', 'petiwahyuliana@yahoo.co.id', '089624064711', '2020-08-10 16:35:09', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (170, 'Guestbook', 'Selamat siang.\r\nSaya Lasma Ida Mikha Theresia Rogate.\r\n\r\nSaya ingin mendaftarkan diri untuk tes PCR besok 17 Agustus 2020 di RS Permata Keluarga Cikarang. Apakah besok tetap ada layanan tes PCR? Apakah hasilnya dapat diterima pada hari yang sama dengan jadwal tes?\r\nSaya sudah mencoba menghubungi pihak RS melalui telpon, Whatsapp, dan Instagram menanyakan hal tersebut tetapi tidak ada respon sama sekali.\r\n\r\nTerima kasih sebelumnya.\r\n\r\nHormat saya,\r\nLasma', 'Lasma Ida Mikha Theresia Rogate', 'lasmaidamikha@gmail.com', '082299449574', '2020-08-16 13:43:48', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (171, 'Guestbook', 'Selamat pagi, apakah disini bekerja sama untuk MCU?', 'Maulani Wulan Syahputri', 'maulaniwulan89@gmail.com', '081317030206', '2020-08-23 02:00:16', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (172, 'Guestbook', 'Bisakah sy melihat biaya persalinan di RS Permata Keluarga Jababeka? ', 'Satria Nurachmat', 'nurchsatria09@gmail.com', '082298671140', '2020-08-23 21:42:38', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (173, 'Guestbook', 'Apakah dokter orthopedi praktek hari ini?', 'Henry Iskandar Pohan', 'henryiskandarpohan@gmail.com', '081370253552', '2020-08-24 10:47:01', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (174, 'Guestbook', 'IMPORTANCE NOTICE\r\n\r\nNotice#: 491343\r\nDate: 2020-09-01    \r\n\r\nExpiration message of your permatakeluarga.net\r\n\r\nEXPIRATION NOTIFICATION\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://gohostingdomains.com/?n=permatakeluarga.net&r=a&t=1598884899&p=v1\r\n\r\nThis purchase expiration notification permatakeluarga.net advises you about the submission expiration of domain permatakeluarga.net for your e-book submission. \r\nThe information in this purchase expiration notification permatakeluarga.net may contains CONFIDENTIAL AND/OR LEGALLY PRIVILEGED INFORMATION from the processing department from the processing department to purchase our e-book submission. NON-COMPLETION of your submission by the given expiration date may result in CANCELLATION of the purchase.\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://gohostingdomains.com/?n=permatakeluarga.net&r=a&t=1598884899&p=v1\r\n\r\nACT IMMEDIATELY. The submission notification permatakeluarga.net for your e-book will EXPIRE WITHIN 2 DAYS after reception of this email\r\n\r\nThis notification is intended only for the use of the individual(s) having received this message. \r\n\r\nPLEASE CLICK ON SECURE ONLINE PAYMENT TO COMPLETE YOUR PAYMENT\r\n\r\nSECURE ONLINE PAYMENT: https://gohostingdomains.com/?n=permatakeluarga.net&r=a&t=1598884899&p=v1\r\n\r\nNon-completion of your submission by given expiration date may result in cancellation.\r\n\r\nAll online services will be restored automatically upon confirmation of payment. Delivery will be completed within 24 hours. \r\n\r\nCLICK UNDERNEATH FOR IMMEDIATE PAYMENT:\r\n\r\nSECURE ONLINE PAYMENT: https://gohostingdomains.com/?n=permatakeluarga.net&r=a&t=1598884899&p=v1', 'Y7TJFC', 'info@domainworld.com', '+12548593423', '2020-08-31 21:41:42', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (175, 'Guestbook', '', '', '', '', '2020-09-08 15:47:44', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (176, 'Guestbook', 'Daftar cek kandungan hari ini', 'Dian Sugiarto', 'diansugiarto12@gmail.com', '087782706457', '2020-09-26 13:04:08', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (177, 'Guestbook', '', '', '', '', '2020-10-01 15:22:15', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (178, 'Guestbook', 'Vaksinasi \r\n\r\nAnak saya usia 15Bln , Vaksin wajib sudah selesai. tp saya ingin melanjutkan vaksin lanjutannya. apakah bisa konsultasi dahulu dengan dr.gracia vaksin apa yg akan di berikan untuk lanjutan. dan amankah jika saya datang ke RS ?\r\n\r\nterima kasih', 'Selvy Novianty', 'selvy.8122@gmail.com', '085219451181', '2020-10-02 15:18:27', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (179, 'Guestbook', '', '', '', '', '2020-10-11 14:08:15', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (180, 'Guestbook', '', '', '', '', '2020-10-14 08:54:18', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (181, 'Guestbook', 'selamat malam\r\nmohon dibantu update jadwal dokter harun setiap hari apa dan jam berapa\r\nterima kasih', 'ilham cholid', 'ilham@astra-daido.co.id', '087804580518', '2020-10-14 20:01:01', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (182, 'Guestbook', 'IMPORTANCE NOTICE\r\n\r\n\r\n\r\nNotice#: 491343\r\n\r\nDate: 2020-10-16    \r\n\r\n\r\n\r\nExpiration message of your permatakeluarga.net\r\n\r\n\r\n\r\nEXPIRATION NOTIFICATION\r\n\r\n\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://gomydomains.site/?n=permatakeluarga.net&r=a&t=1602787107&p=v1\r\n\r\n\r\n\r\nThis purchase expiration notification permatakeluarga.net advises you about the submission expiration of domain permatakeluarga.net for your e-book submission. \r\n\r\nThe information in this purchase expiration notification permatakeluarga.net may contains CONFIDENTIAL AND/OR LEGALLY PRIVILEGED INFORMATION from the processing department from the processing department to purchase our e-book submission. NON-COMPLETION of your submission by the given expiration date may result in CANCELLATION of the purchase.\r\n\r\n\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://gomydomains.site/?n=permatakeluarga.net&r=a&t=1602787107&p=v1\r\n\r\n\r\n\r\nACT IMMEDIATELY. The submission notification permatakeluarga.net for your e-book will EXPIRE WITHIN 2 DAYS after reception of this email\r\n\r\n\r\n\r\nThis notification is intended only for the use of the individual(s) having received this message. \r\n\r\n\r\n\r\nPLEASE CLICK ON SECURE ONLINE PAYMENT TO COMPLETE YOUR PAYMENT\r\n\r\n\r\n\r\nSECURE ONLINE PAYMENT: http://gomydomains.site/?n=permatakeluarga.net&r=a&t=1602787107&p=v1\r\n\r\n\r\n\r\nNon-completion of your submission by given expiration date may result in cancellation.\r\n\r\n\r\n\r\nAll online services will be restored automatically upon confirmation of payment. Delivery will be completed within 24 hours. \r\n\r\n\r\n\r\nCLICK UNDERNEATH FOR IMMEDIATE PAYMENT:\r\n\r\n\r\n\r\nSECURE ONLINE PAYMENT: http://gomydomains.site/?n=permatakeluarga.net&r=a&t=1602787107&p=v1', 'JDHVDZ8ONT', 'info@domainworld.com', '+12548593423', '2020-10-16 01:38:29', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (183, 'Guestbook', 'Bagian front office sepertinya bahagia sekali sehingga mengobrol satu sama lain dengan suara yang kencang. Cukup mengganggu pasien yang sedang menunggu konsul ke Dokter. RSPK 20 Okt 2020 15.23', 'Johanes Djuwana ', 'johanes_djuwana@yahoo.com', '08121082127', '2020-10-20 15:24:06', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (184, 'Guestbook', 'Apakah jadwal MCU atas nama AHMAD HERI masih bisa? ', 'AHMAD HERI', 'ireh.ririn@gmail.com', '082125498543', '2020-10-21 13:51:58', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (185, 'Guestbook', '', '', '', '', '2020-10-21 13:52:18', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (186, 'Guestbook', 'Apakah jadwal MCU atas nama AHMAD HERI masih bisa?  \r\nSurat pengantar dari PT. SEJAHTERA DAMAI BERKHARISMA (SDB)  bagian security', 'AHMAD HERI', 'ireh.ririn@gmail.com', '082125498543', '2020-10-21 13:57:20', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (187, 'Guestbook', '', '', '', '', '2020-10-22 10:48:35', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (188, 'Guestbook', 'Apakah hasil MCU calon karyawan PT ANI per tanggal 23 Oktober 2020 sudah keluar? Kalau sudah bagaimana hasil MCU saya dok?', 'Riyan Eko Prasetyo ', 'riyanekoprasetyo9@gmail.com', '085877245017', '2020-10-24 08:40:03', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (189, 'Guestbook', 'Assalamu\'alaikum warahmatullahi wabarakatuh\r\nSelamat pagi Pak/Bu\r\nSaya Siti Afrikhatul Khuzaimiyah izin bertanya apakah hari ini dokter spesialis mata praktik?????\r\nTerima kasih Pak/Bu\r\nWassalamu\'alaikim warahmatullahi wabarakatuh', 'Siti Afrikhatul Khuzaimiyah', 'sitiafrikhatul@gmail.com', '082113631905', '2020-10-30 06:52:28', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (190, 'Guestbook', 'Apakah besok hari Kamis 05 November dr Eunika sp.og praktek? ', 'Wahida FN', 'wahidafajriatul@gmail.com', '085706396130', '2020-11-04 09:56:00', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (191, 'Guestbook', 'Selamat sore\r\nApakah jadwal dokter indah poly gigi sesuai dijadwal? \r\nTerima kasih sebelumya', 'Nanang fitrianto', 'fitrianto49@gmail.com', '085229912788', '2020-11-07 18:15:53', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (192, 'Guestbook', 'Apakah hasil swab saya kmren sore sudah ada hasil?\r\n\r\nSutrisno \r\nTtl Kebumen 9 februari 1989\r\n\r\nJika sudah keluar,mohon untuk hasil bisa dikirimkan di nomor hp tertera diatas', 'Sutrisno', 'trizz.caem89@gmail.com', '085227282126', '2020-11-11 13:20:34', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (193, 'Guestbook', '', '', '', '', '2020-11-17 16:09:33', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (194, 'Guestbook', '', '', '', '', '2020-11-21 07:02:33', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (195, 'Guestbook', 'Apakah bisa melakukan rontgen gigi panoramic dan cephalomentri di permata keluarga lippo?berapa biaya untuk rontgen gigi panoramic dan cephalomentri?apakah layanan rontgen gigi panoramic dan cephalomentri dapat dilakukan di hari sabtu?', 'Ghina Fairuzzachra', 'ghina.frz@gmail.com', '081298713295', '2020-11-23 09:33:48', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (196, 'Guestbook', '', '', '', '', '2020-11-26 07:54:54', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (197, 'Guestbook', '', '', '', '', '2020-11-28 15:13:54', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (198, 'Guestbook', 'Selamat siang.. Saya Bidan Nara Annur Qhatimah ingin menanyakan info lowongan kerja untuk Bidan di RS Permata Keluarga yang berada di Karawang.. Apakah masih ada lowongan untuk bidan di RS Permata Keluarga ???\r\nTerimakasih sebelumnya dan saya tunggu jawabannya', 'Nara Annur Qhatimah', 'annurnara31@gmail.com', '085214053631', '2020-12-03 13:44:04', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (199, 'Guestbook', '', '', '', '', '2020-12-05 08:02:02', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (200, 'Guestbook', 'Pcr', 'AHMAD ALI MAS\'UD', 'maskalekoleko@gmail.com', '081383226938', '2020-12-05 08:03:08', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (201, 'Guestbook', 'Maaf mau nanya,untuk hari ini Sabtu ada dokter kandungan dan dokter THT ? Kalo ada jm berapa at hrs kesana kak? Terimakasih', 'Irfa Amalia', 'irfaamalia10@gmail.com', '085842037116', '2020-12-05 09:05:05', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (202, 'Guestbook', '', '', '', '', '2020-12-08 19:58:40', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (203, 'Guestbook', 'Hasil test PCR 11 Desember 2020 atas nama Alby Gilang Dirgantara dari PT.Bellsonica Indonesia', 'Alby Gilang Dirgantara', 'albygilang456@gmail.com', '083823736936', '2020-12-12 08:41:18', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (204, 'Guestbook', '', '', '', '', '2020-12-13 10:39:00', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (205, 'Guestbook', 'Apakah RS Permata Keluarga Jababeka melayani Test Rapid antigen?\r\nJika iya, berapa biayanya dan brp lama hasilnya diterima.\r\nTerima kasih ', 'Alyxia Stellata ', 'alyxiamurtadlo@gmail.com', '085213019834', '2020-12-17 10:51:45', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (206, 'Guestbook', 'selamat pagi\r\nsaya ingin menanyakan apakah di rs permata keluarga bisa rapid antigen? jdwalnya jam berapa ya? dan harganya berapa?\r\n', 'NAWANG ARIFANA ', 'nawang22.na@gmail.com', '083848855089', '2020-12-18 08:25:35', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (207, 'Guestbook', 'jadwal & biaya tes swab antigen?', 'marsudi', 'irbadh11@gmail .com', '081392091151', '2020-12-19 07:54:31', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (208, 'Guestbook', '', '', '', '', '2020-12-21 10:23:45', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (209, 'Guestbook', 'Permisi kak mau tanya tarif rongsen paru paru berapa ya?', 'Putri Andarita', 'putriandarita86@gmail.com', '085779547461', '2020-12-22 14:46:06', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (210, 'Guestbook', 'Selamat malam \r\nMau tanya apakah besok dr gracia buka praktek?', 'Epi alpian', 'epialpian02@gmail.com', '085211179080', '2020-12-23 20:38:29', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (211, 'Guestbook', '', '', '', '', '2020-12-26 19:07:05', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (212, 'Guestbook', 'Notice#: 491343\r\nDate: 2020-12-31  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN permatakeluarga.net WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain permatakeluarga.net\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain permatakeluarga.net\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainextended.xyz/?n=permatakeluarga.net&r=a&t=1609378765&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN permatakeluarga.net WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainextended.xyz/?n=permatakeluarga.net&r=a&t=1609378765&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification permatakeluarga.net will EXPIRE WITHIN 24 HOURS after reception of this email', 'QYKCCW48', 'info@domainworld.com', '+12548593423', '2020-12-31 08:39:26', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (213, 'Guestbook', 'Apakahdokter Nero (syaraf) praktek harj ini?', 'ARIESNANTO', 'ariesnanto@gmail.com', '087876666400', '2020-12-31 12:36:52', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (214, 'Guestbook', 'Apa kah RS permata keluarga membuka lowongan di bagia penata anestesi', 'Deni z', 'deniz.anestesi@gmail.com', '082120811622', '2020-12-31 22:14:21', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (215, 'Guestbook', 'Notice#: 491343\r\nDate: 2021-01-02  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN permatakeluarga.net WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain permatakeluarga.net\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain permatakeluarga.net\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainfirm.xyz/?n=permatakeluarga.net&r=a&t=1609566547&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN permatakeluarga.net WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: http://yourdomainfirm.xyz/?n=permatakeluarga.net&r=a&t=1609566547&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification permatakeluarga.net will EXPIRE WITHIN 24 HOURS after reception of this email', '27JMR4C4YM', 'info@domainworld.com', '+12548593423', '2021-01-02 12:49:09', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (216, 'Guestbook', '', '', '', '', '2021-01-05 07:26:14', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (217, 'Guestbook', 'Tolong perhatikan kualitas pelayanan. Antri daftar sudah lama, antri untuk di periksa suster pun bukan main lamanya. Meja suster kosong selama 15 menit lebih. ', 'Dedy Yuda Octasia', 'dedyyuda@gmail.com', '08123320848', '2021-01-05 10:26:05', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (218, 'Guestbook', '', '', '', '', '2021-01-06 10:50:44', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (219, 'Guestbook', '', '', '', '', '2021-01-08 16:22:45', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (220, 'Guestbook', '', '', '', '', '2021-01-09 19:28:35', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (221, 'Guestbook', 'Notice#: 491343\r\nDate: 2021-01-11  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN permatakeluarga.net WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain permatakeluarga.net\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain permatakeluarga.net\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-registration.ga/?n=permatakeluarga.net&r=a&t=1610262222&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN permatakeluarga.net WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-registration.ga/?n=permatakeluarga.net&r=a&t=1610262222&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification permatakeluarga.net will EXPIRE WITHIN 24 HOURS after reception of this email', '2K1FF5', 'info@domainworld.com', '+12548593423', '2021-01-10 14:03:44', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (222, 'Guestbook', 'Jadwal dokter gigi rs permata keluarga jababeka dan minta nomer telephon rs.\r\n\r\n\r\nTrimakasih', 'Niki astuti', 'nikiastutie@gmail.com', '08985369559', '2021-01-21 10:29:15', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (223, 'Guestbook', 'Hallo selamat malam RSPK Jababeka, saya mau bertanya apakah  di RS ini tersedia fasilitas operasi pemasangan pen? Pada bedah tulang fremur.\r\n', 'Sahidin mustopa', 'sahidinmustopa@gmail.com', '085771203921', '2021-02-03 20:38:47', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (224, 'Guestbook', '', '', '', '', '2021-02-04 18:13:03', 0, NULL, NULL, 'guestbook', 4);
INSERT INTO `guestbook` VALUES (225, 'Guestbook', 'Tolong di tanggapi keluhan saya atas pelayanan Dokter Lina Sp. Saraf\r\n\r\nKita ini sakit  bukan pura2  sakit', 'Donna', 'donna5juli@gmail.com', '081210308299', '2021-02-10 14:28:06', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (226, 'Guestbook', 'pendaftaran kontrol atas nama ayesha naura putri akbar ke dokter gracia angga wijaya. pada hari jumat sore jam 6.', 'sugeng nurhaji', 'sugengnurhajia@gmail.com', '08994792307', '2021-02-18 10:18:57', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (227, 'Guestbook', '', '', '', '', '2021-02-19 07:27:13', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (228, 'Guestbook', 'Saya mau menanyakan biaya imunisasi DPT yang tidak menyebabkan panas dan polio berapa ya di rumah sakit permata keluarga lippo cikarang?\r\nMohon infonya terimakasih', 'Novia', 'noviawahyu52@gmail.com', '085226453623', '2021-02-19 19:55:27', 0, NULL, NULL, 'guestbook', 1);
INSERT INTO `guestbook` VALUES (229, 'Guestbook', 'Minta info jadwal dokter bedah dah persyaratan peserta bpjs. Tksh', 'Mujito', 'mujitomujito9834@gmail', '081546082080', '2021-02-21 09:37:57', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (230, 'Guestbook', '', '', '', '', '2021-02-22 11:03:16', 0, NULL, NULL, 'guestbook', 4);
INSERT INTO `guestbook` VALUES (231, 'Guestbook', '', '', '', '', '2021-02-22 13:51:38', 0, NULL, NULL, 'guestbook', 4);
INSERT INTO `guestbook` VALUES (232, 'Guestbook', 'Mau bertanya jika ,elahirkan secara Normal di RS Permata Keluarga, sekitaran berapa ?  terimakasih', 'suripto', 'suripto@detmoldpackaging.com', '089601620946', '2021-02-23 12:23:43', 0, NULL, NULL, 'guestbook', 2);
INSERT INTO `guestbook` VALUES (233, 'Guestbook', 'Ingin menanyakan jadwal pasti dr wilson sptht terimakasih', 'Nur Amalina Masjida', 'linamasjida@gmail.con', '0853144273712/ 083824992743 (WA)', '2021-02-23 17:57:20', 0, NULL, NULL, 'guestbook', 2);

-- ----------------------------
-- Table structure for jadwal_dokter
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_dokter`;
CREATE TABLE `jadwal_dokter`  (
  `id_jadwal` int NOT NULL AUTO_INCREMENT,
  `hari` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jam` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `id_dokter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bagian` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_rumahsakit` int NOT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `oncall` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_jadwal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1835 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jadwal_dokter
-- ----------------------------
INSERT INTO `jadwal_dokter` VALUES (677, 'Senin', '16:00:00', '18:00:00', '9', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (679, 'Selasa', '15:00:00', '18:00:00', '9', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (683, 'Kamis', '16:00:00', '18:00:00', '9', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (685, 'Jumat', '16:00:00', '18:00:00', '9', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (709, 'Selasa', '09:00:00', '13:00:00', '12', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (711, 'Selasa', '00:00:00', '00:00:00', '13', NULL, 1, '<p>20.30 - Selesai&nbsp;</p>\r\n\r\n<p>On call / Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (712, 'Kamis', '00:00:00', '00:00:00', '13', NULL, 1, '<p>20.30 - Selesai</p>\r\n\r\n<p>On call / Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (713, 'Sabtu', '00:00:00', '00:00:00', '13', NULL, 1, '<p>20.30 - Selesai&nbsp;</p>\r\n\r\n<p>On call / Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (720, 'Selasa', '17:00:00', '18:00:00', '15', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (721, 'Rabu', '19:00:00', '20:00:00', '15', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (722, 'Kamis', '08:30:00', '09:30:00', '15', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (723, 'Sabtu', '16:00:00', '17:00:00', '15', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (724, 'Senin', '18:00:00', '19:00:00', '16', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (725, 'Rabu', '11:30:00', '13:00:00', '16', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (729, 'Senin', '17:00:00', '19:00:00', '19', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (736, 'Selasa', '16:30:00', '19:00:00', '20', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (738, 'Jumat', '15:00:00', '16:30:00', '20', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (739, 'Sabtu', '11:00:00', '12:30:00', '20', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (740, 'Senin', '16:00:00', '20:00:00', '21', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (743, 'Kamis', '16:00:00', '20:00:00', '22', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (744, 'Selasa', '14:00:00', '20:00:00', '23', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (745, 'Kamis', '08:00:00', '16:00:00', '23', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (747, 'Rabu', '08:00:00', '16:00:00', '25', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (748, 'Jumat', '16:00:00', '20:00:00', '25', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (750, 'Senin', '08:00:00', '11:00:00', '26', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (751, 'Selasa', '08:00:00', '12:00:00', '26', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (752, 'Rabu', '08:00:00', '12:00:00', '26', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (778, 'Senin', '10:00:00', '16:00:00', '31', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (779, 'Selasa', '10:00:00', '14:00:00', '31', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (780, 'Jumat', '10:00:00', '13:00:00', '32', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (781, 'Sabtu', '10:00:00', '13:00:00', '32', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (782, 'Senin', '18:00:00', '20:00:00', '33', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (783, 'Rabu', '17:00:00', '20:00:00', '33', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (787, 'Selasa', '17:00:00', '20:00:00', '35', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (788, 'Kamis', '10:00:00', '13:00:00', '35', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (791, 'Kamis', '17:00:00', '20:00:00', '37', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (792, 'Jumat', '17:00:00', '20:00:00', '37', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (793, 'Sabtu', '18:00:00', '20:00:00', '38', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (795, 'Selasa', '14:00:00', '16:00:00', '40', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (796, 'Kamis', '14:00:00', '16:00:00', '40', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (797, 'Jumat', '10:00:00', '14:00:00', '40', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (798, 'Sabtu', '10:00:00', '14:00:00', '40', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (799, 'Senin', '10:00:00', '14:00:00', '41', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (800, 'Rabu', '10:00:00', '14:00:00', '41', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (802, 'Selasa', '09:00:00', '14:00:00', '42', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (803, 'Kamis', '09:00:00', '14:00:00', '42', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (804, 'Senin', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (805, 'Selasa', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (806, 'Rabu', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (807, 'Kamis', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (808, 'Jumat', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (809, 'Sabtu', '17:00:00', '20:00:00', '43', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (810, 'Senin', '08:00:00', '20:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (811, 'Selasa', '08:00:00', '20:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (812, 'Rabu', '20:00:00', '08:00:00', '44', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (813, 'Minggu3', '08:00:00', '20:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (814, 'Minggu1', '20:00:00', '08:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (815, 'Minggu2', '20:00:00', '08:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (816, 'Minggu4', '20:00:00', '08:00:00', '44', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (817, 'Minggu5', '20:00:00', '08:00:00', '44', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (818, 'Rabu', '08:00:00', '20:00:00', '45', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (819, 'Jumat', '08:00:00', '20:00:00', '45', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (820, 'Sabtu', '08:00:00', '20:00:00', '46', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (822, 'Sabtu', '20:00:00', '08:00:00', '46', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (825, 'Selasa', '20:00:00', '08:00:00', '47', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (828, 'Senin', '20:00:00', '08:00:00', '48', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (829, 'Kamis', '20:00:00', '08:00:00', '48', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (832, 'Minggu2', '08:00:00', '20:00:00', '47', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (836, 'Senin', '08:00:00', '10:00:00', '5', NULL, 2, '<p>Dokter Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (837, 'Senin', '00:00:00', '00:00:00', '13', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (838, 'Senin', '08:00:00', '10:00:00', '51', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (839, 'Senin', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (840, 'Rabu', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (841, 'Kamis', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (842, 'Jumat', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (843, 'Sabtu', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (844, 'Selasa', '17:00:00', '20:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (845, 'Kamis', '19:00:00', '20:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (848, 'Senin', '19:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (849, 'Senin', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (850, 'Selasa', '17:00:00', '20:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (851, 'Rabu', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (852, 'Kamis', '09:00:00', '14:00:00', '2', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (853, 'Kamis', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (854, 'Kamis', '19:00:00', '20:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (855, 'Jumat', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (856, 'Sabtu', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (858, 'Jumat', '17:00:00', '20:00:00', '53', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (859, 'Selasa', '09:00:00', '12:00:00', '54', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (860, 'Kamis', '16:00:00', '18:00:00', '54', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (861, 'Senin', '17:00:00', '20:00:00', '55', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (862, 'Sabtu', '17:00:00', '20:00:00', '55', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (866, 'Senin', '08:30:00', '13:00:00', '5', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (867, 'Senin', '08:00:03', '13:00:00', '5', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (881, 'Senin', '18:00:00', '20:00:00', '58', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (885, 'Rabu', '18:00:00', '20:00:00', '58', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (886, 'Jumat', '18:00:00', '20:00:00', '58', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (887, 'Senin', '12:00:00', '15:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (889, 'Senin', '12:00:00', '15:00:00', '26', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (890, 'Selasa', '13:00:00', '17:00:00', '26', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (891, 'Selasa', '13:00:00', '17:00:00', '26', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (892, 'Selasa', '13:00:00', '17:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (893, 'Rabu', '13:00:00', '17:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (894, 'Kamis', '15:00:00', '18:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (895, 'Jumat', '12:00:00', '15:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (896, 'Sabtu', '11:30:00', '14:00:00', '59', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (901, 'Senin-Sabtu', '00:00:00', '00:00:00', '57', NULL, 1, '<p>Oncall</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (903, 'Senin-Sabtu', '00:00:00', '00:00:00', '10', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (904, 'Senin-Sabtu', '00:00:00', '00:00:00', '11', NULL, 1, '<p>On Call / Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (905, 'Senin-Sabtu', '08:30:00', '13:00:00', '57', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (906, 'Senin-Sabtu', '18:00:00', '20:00:00', '57', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (909, 'Senin', '08:00:00', '13:00:00', '61', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (910, 'Kamis', '08:00:00', '13:00:00', '61', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (911, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call / Sesuai dengan perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (912, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (913, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (915, 'Senin-Sabtu', '10:00:00', '16:00:00', '63', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (917, 'Senin-Sabtu', '17:00:00', '19:00:00', '64', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (937, 'Senin-Jumat', '16:00:00', '19:00:00', '14', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (938, 'Senin', '16:00:00', '19:00:00', '14', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (939, 'Senin-Jumat', '16:00:00', '19:00:00', '14', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (941, 'Senin-Sabtu', '15:00:00', '17:00:00', '5', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (946, 'Jumat', '15:00:00', '19:00:00', '47', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (949, 'Senin', '19:30:00', '21:00:00', '29', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (952, 'Rabu', '19:30:00', '21:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (956, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (959, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (960, 'Senin-Sabtu', '00:00:00', '00:00:00', '60', NULL, 1, '<p>On Call Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (961, 'Senin-Sabtu', '00:00:00', '00:00:00', '62', NULL, 1, '<p>On Call</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (968, 'Senin', '17:00:00', '20:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (969, 'Senin', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (970, 'Selasa', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (971, 'Selasa', '17:00:00', '20:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (972, 'Rabu', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (973, 'Kamis', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (974, 'Kamis', '17:00:00', '20:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (975, 'Jumat', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (976, 'Sabtu', '09:00:00', '14:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (977, 'Sabtu', '17:00:00', '20:00:00', '1', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (978, 'Senin-Sabtu', '14:00:00', '14:30:00', '2', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (979, 'Rabu', '19:00:00', '21:00:00', '3', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (980, 'Jumat', '19:00:00', '21:00:00', '3', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (988, 'Senin-Sabtu', '17:00:00', '20:00:00', '8', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (989, 'Jumat', '09:00:00', '11:00:00', '12', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (990, 'Senin-Sabtu', '09:00:00', '14:00:00', '14', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (991, 'Jumat', '09:00:00', '10:30:00', '16', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (994, 'Selasa', '00:00:00', '00:00:00', '17', NULL, 1, '<p>21.00 - Selesai On call /&#39;Dengan Perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (995, 'Rabu', '18:15:00', '20:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (996, 'Kamis', '18:15:00', '20:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (997, 'Jumat', '18:15:00', '20:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (998, 'Sabtu', '16:00:00', '20:00:00', '25', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (999, 'Jumat', '17:00:00', '20:00:00', '33', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1000, 'Selasa', '17:00:00', '20:00:00', '42', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1004, 'Selasa', '18:00:00', '20:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1009, 'Sabtu', '19:00:00', '21:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1013, 'Jumat', '16:00:00', '20:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1035, 'Senin-Sabtu', '08:00:00', '20:00:00', '62', NULL, 2, '<p>On Call sesuai perjanjian dengan pasien.</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1037, 'Senin-Sabtu', '08:00:00', '20:00:00', '87', NULL, 2, '<p>On Call sesuai perjanjian dengan pasien.</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1047, 'Senin', '16:00:00', '20:00:00', '92', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1068, 'Kamis', '13:00:00', '16:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1072, 'Rabu', '17:00:00', '20:00:00', '53', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1081, 'Senin', '13:00:00', '15:00:00', '28', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1082, 'Senin', '17:00:00', '19:00:00', '29', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1083, 'Senin', '20:00:00', '21:00:00', '27', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1085, 'Senin', '17:00:00', '19:00:00', '78', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1087, 'Rabu', '20:00:00', '21:00:00', '27', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1088, 'Kamis', '20:00:00', '21:00:00', '27', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1089, 'Jumat', '20:00:00', '21:00:00', '27', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1090, 'Sabtu', '15:00:00', '18:00:00', '27', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1095, 'Selasa', '09:00:00', '11:00:00', '78', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1096, 'Selasa', '09:00:00', '11:00:00', '106', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1100, 'Sabtu', '11:00:00', '13:00:00', '106', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1102, 'Senin', '09:00:00', '14:00:00', '52', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1103, 'Senin', '09:00:00', '14:00:00', '2', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1104, 'Senin', '09:00:00', '14:00:00', '52', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1105, 'Senin', '09:00:00', '14:00:00', '52', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1106, 'Rabu', '17:00:00', '20:00:00', '53', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1107, 'Senin', '09:00:00', '14:00:00', '52', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1109, 'Senin', '09:00:00', '14:00:00', '107', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1110, 'Senin', '09:00:00', '14:00:00', '107', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1117, 'Jumat', '17:00:00', '20:00:00', '109', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1124, 'Senin-Sabtu', '08:30:00', '13:00:00', '112', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1125, 'Senin-Sabtu', '18:00:00', '20:00:00', '112', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1127, 'Senin-Sabtu', '08:30:00', '13:00:00', '5', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1137, 'Senin', '12:00:00', '15:00:00', '115', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1138, 'Senin', '12:00:00', '15:00:00', '115', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1139, 'Senin', '12:00:00', '15:00:00', '115', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1140, 'Senin', '12:00:00', '15:00:00', '26', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1141, 'Senin', '12:00:00', '15:00:00', '115', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1142, 'Senin', '12:00:00', '15:00:00', '116', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1145, 'Selasa', '13:00:00', '17:00:00', '116', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1147, 'Rabu', '13:00:00', '17:00:00', '116', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1148, 'Kamis', '15:00:00', '18:00:00', '116', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1149, 'Jumat', '12:00:00', '15:00:00', '116', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1151, 'Senin-Sabtu', '00:00:00', '00:00:00', '117', NULL, 2, '<p>On Call / Sesuai dengan perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1155, 'Senin-Sabtu', '10:00:00', '16:00:00', '120', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1156, 'Senin-Sabtu', '17:00:00', '19:00:00', '121', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1157, 'Senin', '20:00:00', '21:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1163, 'Senin', '16:00:00', '18:00:00', '123', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1164, 'Selasa', '18:00:00', '20:00:00', '123', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1167, 'Rabu', '12:00:00', '14:00:00', '123', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1168, 'Kamis', '18:00:00', '20:00:00', '123', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1169, 'Jumat', '11:00:00', '13:00:00', '123', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1170, 'Senin', '09:00:00', '13:00:00', '124', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1174, 'Selasa', '09:00:00', '13:00:00', '124', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1175, 'Rabu', '09:00:00', '13:00:00', '124', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1176, 'Kamis', '09:00:00', '13:00:00', '124', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1177, 'Jumat', '09:00:00', '13:00:00', '124', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1179, 'Senin', '16:00:00', '19:00:00', '125', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1180, 'Selasa', '16:00:00', '19:00:00', '125', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1181, 'Rabu', '16:00:00', '19:00:00', '125', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1182, 'Kamis', '16:00:00', '19:00:00', '125', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1183, 'Jumat', '16:00:00', '19:00:00', '125', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1184, 'Senin', '17:30:00', '19:30:00', '126', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1185, 'Selasa', '17:30:00', '19:30:00', '126', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1186, 'Rabu', '17:30:00', '19:30:00', '126', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1187, 'Kamis', '17:30:00', '19:30:00', '126', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1189, 'Jumat', '17:30:00', '19:30:00', '126', NULL, 2, '<p>Spesialis Penyakit Dalam/ Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1200, 'Senin', '12:00:00', '14:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1201, 'Selasa', '18:00:00', '20:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1202, 'Rabu', '18:00:00', '20:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1203, 'Kamis', '18:30:00', '20:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1204, 'Jumat', '14:00:00', '16:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1205, 'Sabtu', '19:00:00', '21:00:00', '129', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1206, 'Senin', '16:00:00', '19:00:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1207, 'Selasa', '13:00:00', '16:00:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1208, 'Rabu', '09:00:00', '12:00:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1209, 'Kamis', '13:00:00', '16:00:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1210, 'Jumat', '17:00:00', '20:00:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1211, 'Sabtu', '09:00:00', '10:30:00', '130', NULL, 2, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1212, 'Kamis', '09:00:00', '14:00:00', '131', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1213, 'Senin', '16:00:00', '20:00:00', '132', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1214, 'Kamis', '16:00:00', '20:00:00', '131', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1215, 'Sabtu', '15:00:00', '20:00:00', '131', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1216, 'Rabu', '09:00:00', '14:00:00', '132', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1217, 'Jumat', '16:00:00', '20:00:00', '132', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1218, 'Sabtu', '09:00:00', '14:00:00', '132', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1219, 'Selasa', '09:00:00', '14:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1220, 'Selasa', '16:00:00', '20:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1221, 'Rabu', '16:00:00', '20:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1222, 'Kamis', '09:00:00', '14:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1223, 'Kamis', '16:00:00', '20:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1224, 'Jumat', '09:00:00', '14:00:00', '133', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1225, 'Senin', '09:00:00', '14:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1226, 'Senin', '16:00:00', '20:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1227, 'Selasa', '09:00:00', '14:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1228, 'Rabu', '09:00:00', '14:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1229, 'Jumat', '09:00:00', '14:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1230, 'Sabtu', '09:00:00', '14:00:00', '134', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1231, 'Selasa', '16:00:00', '20:00:00', '135', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1232, 'Rabu', '16:00:00', '20:00:00', '135', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1233, 'Sabtu', '16:00:00', '20:00:00', '135', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1234, 'Senin', '10:00:00', '12:00:00', '136', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1235, 'Jumat', '15:00:00', '17:00:00', '136', NULL, 2, '<p>Dokter Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1239, 'Senin-Sabtu', '00:00:00', '00:00:00', '10', NULL, 2, '<p>-</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1241, 'Senin-Sabtu', '00:00:00', '00:00:00', '10', NULL, 2, '<p>-</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1243, 'Senin', '08:00:00', '15:00:00', '138', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1245, 'Selasa', '15:00:00', '20:00:00', '138', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1246, 'Rabu', '08:00:00', '15:00:00', '138', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1247, 'Kamis', '08:00:00', '15:00:00', '13', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1250, 'Senin-Sabtu', '00:00:00', '00:00:00', '137', NULL, 2, '<p>oncall dengan perjanjian</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1251, 'Jumat', '08:00:00', '15:00:00', '138', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1252, 'Sabtu', '15:00:00', '17:00:00', '138', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1253, 'Kamis', '16:00:00', '20:00:00', '139', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1254, 'Kamis', '16:00:00', '20:00:00', '21', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1255, 'Selasa', '16:00:00', '20:00:00', '140', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1256, 'Jumat', '16:00:00', '20:00:00', '140', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1257, 'Senin', '16:00:00', '20:00:00', '141', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1258, 'Rabu', '08:00:00', '16:00:00', '142', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1260, 'Jumat', '08:00:00', '16:00:00', '23', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1261, 'Jumat', '08:00:00', '16:00:00', '143', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1262, 'Selasa', '08:00:00', '16:00:00', '144', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1263, 'Sabtu', '08:00:00', '12:30:00', '144', NULL, 2, '<p>Minggu IV</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1265, 'Sabtu', '14:00:00', '20:00:00', '145', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1266, 'Kamis', '08:00:00', '16:00:00', '146', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1267, 'Senin', '08:00:00', '16:00:00', '147', NULL, 2, '<p>Minggu I</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1268, 'Rabu', '16:00:00', '20:00:00', '147', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1286, 'Minggu2', '08:00:00', '20:00:00', '157', NULL, 2, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1287, 'Minggu3', '08:00:00', '20:00:00', '157', NULL, 2, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1291, 'Selasa', '14:00:00', '15:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1292, 'Rabu', '12:00:00', '13:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1293, 'Kamis', '14:00:00', '15:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1294, 'Jumat', '13:00:00', '14:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1295, 'Jumat', '20:00:00', '21:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1296, 'Sabtu', '15:00:00', '16:00:00', '122', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1297, 'Senin-Jumat', '16:00:00', '20:00:00', '157', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1298, 'Senin', '19:30:00', '21:00:00', '106', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1309, 'Jumat', '17:00:00', '19:00:00', '127', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1310, 'Sabtu', '16:00:00', '18:00:00', '127', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1313, 'Sabtu', '11:30:00', '14:00:00', '116', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1314, 'Sabtu', '08:00:00', '14:00:00', '142', NULL, 2, '<p>Sabtu (Minggu ke-II)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1315, 'Sabtu', '08:00:00', '14:00:00', '143', NULL, 2, '<p>Sabtu (Minggu ke-I)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1316, 'Sabtu', '08:00:00', '14:00:00', '158', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1317, 'Sabtu', '08:00:00', '14:00:00', '158', NULL, 2, '<p>Sabtu (Minggu ke-III)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1318, 'Sabtu', '08:00:00', '14:00:00', '158', NULL, 2, '<p>Sabtu (Minggu ke-III)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1319, 'Sabtu', '08:00:00', '14:00:00', '161', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1322, 'Senin', '20:00:00', '08:00:00', '149', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1323, 'Kamis', '20:00:00', '08:00:00', '155', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1324, 'Jumat', '20:00:00', '08:00:00', '155', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1329, 'Rabu', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1332, 'Sabtu', '09:00:00', '14:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1334, 'Senin', '08:00:00', '10:00:00', '9', NULL, 1, '<p>Orthopedy</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1335, 'Selasa', '08:00:00', '10:00:00', '9', NULL, 1, '<p>Orthopedy</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1336, 'Kamis', '08:00:00', '10:00:00', '9', NULL, 1, '<p>Orthopedy</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1337, 'Jumat', '08:00:00', '10:00:00', '9', NULL, 1, '<p>Orthopedy</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1338, 'Rabu', '10:00:00', '11:00:00', '9', NULL, 1, '<p>Orthopedy</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1339, 'Senin', '09:15:00', '11:00:00', '17', NULL, 1, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1345, 'Senin', '19:00:00', '21:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1348, 'Jumat', '19:00:00', '21:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1349, 'Selasa', '09:00:00', '10:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1351, 'Rabu', '09:00:00', '10:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1352, 'Kamis', '09:00:00', '10:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1353, 'Jumat', '09:00:00', '10:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1354, 'Sabtu', '09:00:00', '10:00:00', '17', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1357, 'Senin', '08:00:00', '16:00:00', '145', NULL, 2, '<p>Poli Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1359, 'Sabtu', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1361, 'Minggu2', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1362, 'Minggu2', '08:00:00', '20:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1363, 'Minggu3', '08:00:00', '20:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1364, 'Minggu3', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1365, 'Minggu4', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1366, 'Minggu5', '20:00:00', '08:00:00', '154', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1367, 'Senin', '17:30:00', '19:00:00', '127', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1368, 'Rabu', '17:00:00', '19:00:00', '127', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1369, 'Kamis', '17:30:00', '20:00:00', '127', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1374, 'Kamis', '08:00:00', '13:00:00', '13', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1376, 'Senin-Sabtu', '08:00:00', '13:00:00', '164', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1380, 'Jumat', '09:00:00', '13:00:00', '168', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1381, 'Sabtu', '09:00:00', '13:00:00', '168', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1383, 'Senin', '19:00:00', '21:00:00', '171', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1384, 'Selasa', '19:00:00', '21:00:00', '171', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1385, 'Rabu', '19:30:00', '21:00:00', '171', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1386, 'Kamis', '19:00:00', '21:00:00', '171', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1387, 'Jumat', '19:30:00', '21:00:00', '171', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1389, 'Senin-Sabtu', '13:00:00', '17:00:00', '170', NULL, 2, '<p>Dokter Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1391, 'Senin', '16:00:00', '18:30:00', '173', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1392, 'Rabu', '17:00:00', '19:30:00', '173', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1393, 'Kamis', '16:00:00', '18:30:00', '173', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1394, 'Selasa', '16:00:00', '18:30:00', '173', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1398, 'Senin-Sabtu', '08:00:00', '12:00:00', '174', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1403, 'Minggu3', '08:00:00', '14:00:00', '161', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1404, 'Selasa', '08:00:00', '20:00:00', '159', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1405, 'Senin', '09:00:00', '14:00:00', '7', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1406, 'Selasa', '09:00:00', '14:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1407, 'Rabu', '09:00:00', '14:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1408, 'Rabu', '19:00:00', '21:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1409, 'Kamis', '09:00:00', '14:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1410, 'Senin-Sabtu', '14:00:00', '17:00:00', '179', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1411, 'Senin', '09:00:00', '12:00:00', '180', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1412, 'Selasa', '09:00:00', '12:00:00', '180', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1413, 'Rabu', '11:00:00', '15:00:00', '180', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1416, 'Kamis', '09:00:00', '12:00:00', '180', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1417, 'Senin', '14:00:00', '17:00:00', '181', NULL, 1, '<p>Spesialis Anak&nbsp;</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1418, 'Selasa', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1419, 'Selasa', '19:00:00', '21:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1420, 'Rabu', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1421, 'Rabu', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1423, 'Kamis', '19:00:00', '21:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1424, 'Kamis', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1425, 'Jumat', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1426, 'Sabtu', '14:00:00', '17:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1427, 'Sabtu', '19:00:00', '21:00:00', '181', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1428, 'Senin-Sabtu', '16:00:00', '20:00:00', '182', NULL, 1, '<p>Spesialis Penyakit Dalam / Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1429, 'Senin-Sabtu', '13:00:00', '16:00:00', '166', NULL, 1, '<p>Spesialis Penyakit Dalam / Internis</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1430, 'Minggu2', '08:00:00', '16:00:00', '49', NULL, 2, '<p>Poli Umum</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1436, 'Senin', '19:30:00', '21:00:00', '106', NULL, 2, '<p>Spesialis Mata</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1438, 'Senin', '08:00:00', '20:00:00', '178', NULL, 2, '<p>Dokter Jaga IGD</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1441, 'Senin-Sabtu', '08:00:00', '13:00:00', '165', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1444, 'Senin', '17:00:00', '20:00:00', '128', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1445, 'Selasa', '17:00:00', '20:00:00', '128', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1446, 'Rabu', '17:00:00', '20:00:00', '128', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1447, 'Kamis', '11:30:00', '14:00:00', '128', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1448, 'Jumat', '14:00:00', '17:00:00', '128', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1449, 'Sabtu', '09:00:00', '10:30:00', '13', NULL, 2, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1450, 'Sabtu', '09:00:00', '10:30:00', '128', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1451, 'Senin', '00:00:00', '00:00:00', '13', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1452, 'Senin', '00:00:00', '00:00:00', '13', NULL, 2, '', 1, 0);
INSERT INTO `jadwal_dokter` VALUES (1453, 'Senin-Sabtu', '13:00:00', '17:00:00', '183', NULL, 1, '<p>Dokter Spesialis Kulit dan Kelamin</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1455, 'Senin', '17:00:00', '19:00:00', '176', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1456, 'Selasa', '17:00:00', '19:00:00', '176', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1457, 'Kamis', '17:00:00', '19:00:00', '176', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1458, 'Senin-Sabtu', '00:00:00', '00:00:00', '62', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1459, 'Senin-Jumat', '00:00:00', '00:00:00', '185', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1460, 'Senin', '00:00:00', '00:00:00', '13', NULL, 2, '<p>ON CALL</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1461, 'Senin', '00:00:00', '00:00:00', '13', NULL, 2, '<p>On Call</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1469, 'Senin', '00:00:00', '00:00:00', '187', NULL, 2, '<p>ON CALL</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1470, 'Sabtu', '16:00:00', '20:00:00', '22', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1471, 'Senin', '08:00:00', '16:00:00', '188', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1472, 'Rabu', '16:00:00', '20:00:00', '188', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1473, 'Jumat', '08:00:00', '16:00:00', '188', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1474, 'Senin', '08:00:00', '10:30:00', '192', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1475, 'Senin', '08:00:00', '10:30:00', '192', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1476, 'Senin', '14:00:00', '16:00:00', '186', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1477, 'Senin', '08:00:00', '10:30:00', '192', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1478, 'Senin', '08:00:00', '10:30:00', '192', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1479, 'Senin-Sabtu', '08:00:00', '10:30:00', '192', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1480, 'Senin-Sabtu', '08:00:00', '10:30:00', '192', NULL, 2, '', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1481, 'Senin', '14:00:00', '16:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1482, 'Rabu', '11:00:00', '13:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1484, 'Kamis', '14:00:00', '16:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1485, 'Jumat', '11:00:00', '14:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1486, 'Sabtu', '15:00:00', '16:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1487, 'Selasa', '14:00:00', '15:00:00', '193', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1488, 'Senin', '14:00:00', '16:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1490, 'Rabu', '11:00:00', '13:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1491, 'Kamis', '14:00:00', '16:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1492, 'Jumat', '11:00:00', '14:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1493, 'Sabtu', '15:00:00', '16:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1494, 'Senin', '16:00:00', '18:00:00', '197', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1495, 'Selasa', '18:00:00', '20:00:00', '197', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1496, 'Rabu', '12:00:00', '14:00:00', '197', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1497, 'Kamis', '18:00:00', '20:00:00', '197', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1498, 'Jumat', '11:00:00', '13:00:00', '197', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1499, 'Senin', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1500, 'Selasa', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1501, 'Rabu', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1502, 'Kamis', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1503, 'Jumat', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1504, 'Sabtu', '10:00:00', '16:00:00', '195', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1508, 'Senin', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1510, 'Selasa', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1511, 'Rabu', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1512, 'Kamis', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1514, 'Jumat', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1516, 'Sabtu', '09:00:00', '12:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1520, 'Senin', '09:00:00', '14:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1521, 'Rabu', '09:00:00', '14:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1522, 'Kamis', '09:00:00', '14:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1523, 'Jumat', '09:00:00', '14:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1524, 'Sabtu', '09:00:00', '14:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1527, 'Selasa', '09:00:00', '12:00:00', '211', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1528, 'Kamis', '16:00:00', '18:00:00', '211', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1529, 'Selasa', '17:00:00', '20:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1530, 'Kamis', '19:00:00', '20:00:00', '224', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1531, 'Senin', '14:00:00', '17:00:00', '179', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1532, 'Selasa', '14:00:00', '17:00:00', '179', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1534, 'Jumat', '17:00:00', '20:00:00', '227', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1535, 'Senin', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1536, 'Selasa', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1537, 'Rabu', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1538, 'Kamis', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1539, 'Jumat', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1540, 'Sabtu', '14:00:00', '17:00:00', '238', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1541, 'Senin', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1542, 'Selasa', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1543, 'Rabu', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1544, 'Senin', '09:00:00', '13:00:00', '213', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1545, 'Selasa', '09:00:00', '13:00:00', '213', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1546, 'Kamis', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1547, 'Rabu', '09:00:00', '13:00:00', '213', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1548, 'Jumat', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1549, 'Kamis', '09:00:00', '13:00:00', '213', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1550, 'Jumat', '09:00:00', '13:00:00', '213', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1551, 'Sabtu', '08:00:00', '10:30:00', '218', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1552, 'Senin', '16:00:00', '19:00:00', '229', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1553, 'Selasa', '16:00:00', '19:00:00', '229', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1554, 'Rabu', '16:00:00', '19:00:00', '229', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1555, 'Kamis', '16:00:00', '19:00:00', '229', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1556, 'Jumat', '16:00:00', '19:00:00', '229', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1557, 'Senin', '17:30:00', '19:30:00', '126', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1558, 'Selasa', '13:00:00', '17:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1559, 'Selasa', '17:30:00', '19:30:00', '126', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1560, 'Senin', '17:30:00', '19:30:00', '208', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1561, 'Selasa', '17:00:00', '19:30:00', '208', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1565, 'Senin', '09:00:00', '13:00:00', '166', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1566, 'Senin', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1567, 'Selasa', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1568, 'Senin', '12:00:00', '15:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1569, 'Rabu', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1570, 'Kamis', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1571, 'Rabu', '13:00:00', '17:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1572, 'Jumat', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1573, 'Sabtu', '08:00:00', '13:00:00', '221', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1574, 'Kamis', '15:00:00', '18:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1575, 'Jumat', '12:00:00', '15:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1576, 'Sabtu', '11:30:00', '14:00:00', '222', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1577, 'Senin', '17:00:00', '20:00:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1578, 'Senin', '12:00:00', '14:00:00', '129', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1579, 'Selasa', '17:00:00', '20:00:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1580, 'Rabu', '17:00:00', '20:00:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1581, 'Senin', '12:00:00', '14:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1583, 'Kamis', '11:30:00', '14:00:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1584, 'Jumat', '14:00:00', '17:00:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1585, 'Sabtu', '09:00:00', '10:30:00', '233', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1591, 'Jumat', '14:00:00', '16:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1597, 'Senin', '09:00:00', '14:00:00', '205', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1598, 'Senin', '09:00:00', '14:00:00', '239', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1599, 'Rabu', '09:00:00', '14:00:00', '239', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1600, 'Jumat', '09:00:00', '14:00:00', '239', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1601, 'Kamis', '09:00:00', '14:00:00', '131', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1602, 'Selasa', '09:00:00', '14:00:00', '225', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1603, 'Kamis', '09:00:00', '14:00:00', '204', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1608, 'Kamis', '16:00:00', '20:00:00', '225', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1610, 'Jumat', '09:00:00', '14:00:00', '225', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1611, 'Senin', '16:00:00', '20:00:00', '236', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1614, 'Rabu', '09:00:00', '14:00:00', '236', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1615, 'Senin', '08:00:00', '10:00:00', '237', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1616, 'Rabu', '08:00:00', '10:00:00', '194', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1617, 'Sabtu', '08:00:00', '10:00:00', '194', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1618, 'Senin', '10:00:00', '12:00:00', '235', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1619, 'Rabu', '08:00:00', '10:00:00', '237', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1620, 'Sabtu', '08:00:00', '10:00:00', '237', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1621, 'Jumat', '16:00:00', '18:00:00', '235', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1626, 'Selasa', '09:00:00', '14:00:00', '194', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1627, 'Sabtu', '09:00:00', '14:00:00', '205', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1630, 'Selasa', '16:00:00', '20:00:00', '212', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1631, 'Rabu', '16:00:00', '20:00:00', '212', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1634, 'Senin', '11:00:00', '15:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1635, 'Selasa', '15:00:00', '20:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1636, 'Rabu', '11:00:00', '15:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1637, 'Kamis', '11:00:00', '15:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1638, 'Jumat', '11:00:00', '15:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1639, 'Sabtu', '15:00:00', '17:00:00', '201', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1643, 'Kamis', '16:00:00', '20:00:00', '199', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1644, 'Selasa', '16:00:00', '20:00:00', '217', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1645, 'Jumat', '16:00:00', '20:00:00', '217', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1646, 'Senin', '16:00:00', '20:00:00', '226', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1647, 'Rabu', '08:00:00', '16:00:00', '219', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1648, 'Jumat', '08:00:00', '16:00:00', '143', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1649, 'Jumat', '08:00:00', '16:00:00', '23', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1650, 'Jumat', '08:00:00', '16:00:00', '220', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1652, 'Selasa', '08:00:00', '16:00:00', '198', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1653, 'Kamis', '08:00:00', '16:00:00', '231', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1654, 'Rabu', '16:00:00', '20:00:00', '209', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1655, 'Senin', '08:00:00', '16:00:00', '215', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1656, 'Sabtu', '14:00:00', '20:00:00', '207', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1657, 'Sabtu', '08:00:00', '14:00:00', '178', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1661, 'Selasa', '20:00:00', '08:00:00', '247', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1664, 'Senin', '08:00:00', '20:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1665, 'Rabu', '20:00:00', '08:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1666, 'Kamis', '08:00:00', '20:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1667, 'Sabtu', '20:00:00', '08:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1671, 'Sabtu', '08:00:00', '20:00:00', '249', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1672, 'Selasa', '08:00:00', '20:00:00', '245', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1673, 'Rabu', '08:00:00', '20:00:00', '246', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1674, 'Kamis', '20:00:00', '08:00:00', '242', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1675, 'Jumat', '20:00:00', '08:00:00', '242', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1676, 'Senin', '20:00:00', '08:00:00', '241', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1677, 'Jumat', '08:00:00', '20:00:00', '147', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1678, 'Jumat', '08:00:00', '20:00:00', '250', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1679, 'Sabtu', '08:00:00', '20:00:00', '243', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1680, 'Minggu1', '08:00:00', '20:00:00', '242', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1681, 'Minggu4', '08:00:00', '20:00:00', '242', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1682, 'Minggu1', '20:00:00', '08:00:00', '250', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1683, 'Minggu2', '08:00:00', '08:00:00', '244', NULL, 2, '<p>24 Jam</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1684, 'Minggu3', '08:00:00', '08:00:00', '244', NULL, 2, '<p>24 Jam</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1685, 'Minggu4', '20:00:00', '08:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1686, 'Minggu5', '20:00:00', '08:00:00', '244', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1687, 'Senin-Sabtu', '00:00:00', '00:00:00', '185', NULL, 2, '<p>ON CALL</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1688, 'Senin-Sabtu', '00:00:00', '00:00:00', '171', NULL, 2, '<p>ON CALL</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1689, 'Senin-Sabtu', '00:00:00', '00:00:00', '214', NULL, 2, '<p>ON CALL</p>\r\n', 1, 1);
INSERT INTO `jadwal_dokter` VALUES (1690, 'Senin-Sabtu', '00:00:00', '00:00:00', '62', NULL, 2, '<p>ON CALL</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1691, 'Senin-Sabtu', '00:00:00', '00:00:00', '62', NULL, 2, '<p>ON CALL</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1692, 'Senin-Sabtu', '00:00:00', '00:00:00', '251', NULL, 2, '<p>ON CALL</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1693, 'Senin', '17:00:00', '19:00:00', '234', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1694, 'Selasa', '11:00:00', '13:00:00', '234', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1695, 'Rabu', '14:00:00', '17:00:00', '234', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1696, 'Kamis', '09:00:00', '11:00:00', '234', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1697, 'Jumat', '11:00:00', '13:00:00', '234', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1699, 'Rabu', '17:00:00', '19:30:00', '126', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1700, 'Rabu', '17:00:00', '19:30:00', '208', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1701, 'Kamis', '17:00:00', '19:30:00', '208', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1702, 'Jumat', '17:00:00', '19:30:00', '208', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1703, 'Jumat', '16:00:00', '20:00:00', '205', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1704, 'Sabtu', '16:00:00', '20:00:00', '204', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1705, 'Senin', '09:00:00', '11:00:00', '173', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1707, 'Sabtu', '08:00:00', '14:00:00', '23', NULL, 2, '<p>Minggu I</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1708, 'Sabtu', '08:00:00', '14:00:00', '220', NULL, 2, '<p>Minggu I</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1710, 'Sabtu', '08:00:00', '14:00:00', '210', NULL, 2, '<p>Minggu II</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1711, 'Sabtu', '08:00:00', '14:00:00', '202', NULL, 2, '<p>Minggu III</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1713, 'Sabtu', '08:00:00', '14:00:00', '198', NULL, 2, '<p>Minggu IV</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1714, 'Sabtu', '08:00:00', '14:00:00', '240', NULL, 2, '<p>Minggu V</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1715, 'Selasa', '14:00:00', '16:00:00', '230', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1717, 'Senin', '18:00:00', '20:00:00', '232', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1718, 'Sabtu', '18:00:00', '20:00:00', '232', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1721, 'Senin', '09:00:00', '16:00:00', '109', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1722, 'Senin', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1723, 'Senin', '17:00:00', '20:00:00', '109', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1724, 'Senin', '17:00:00', '20:00:00', '109', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1725, 'Senin', '17:00:00', '20:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1726, 'Selasa', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (Obsgyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1727, 'Selasa', '17:00:00', '20:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1728, 'Rabu', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1729, 'Kamis', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1731, 'Kamis', '17:00:00', '20:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1732, 'Jumat', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1733, 'Sabtu', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1734, 'Sabtu', '09:00:00', '14:00:00', '252', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1735, 'Senin-Sabtu', '14:00:00', '16:30:00', '162', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1736, 'Selasa', '08:00:00', '14:00:00', '24', NULL, 1, '<p>Poli Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1737, 'Rabu', '08:00:00', '16:00:00', '189', NULL, 1, '<p>Poli Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1738, 'Jumat', '16:00:00', '20:00:00', '190', NULL, 1, '<p>Poli Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1740, 'Rabu', '17:00:00', '20:00:00', '1', NULL, 2, '<p>Spesialis Kandungan dan Kebidanan (Obgyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1741, 'Rabu', '17:00:00', '20:00:00', '109', NULL, 2, '<p>Spesialis Kandungan dan kebidanan (ObGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1742, 'Senin', '09:00:00', '14:00:00', '108', NULL, 2, '<p>Spesialis Kandungan dan kebidan (ObGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1744, 'Selasa', '17:00:00', '20:00:00', '108', NULL, 2, '<p>Spesialis Kandungan dan kebidanan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1745, 'Rabu', '09:00:00', '14:00:00', '108', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1746, 'Rabu', '09:00:00', '14:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1747, 'Kamis', '09:00:00', '14:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1748, 'Kamis', '19:00:00', '20:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1749, 'Jumat', '09:00:00', '14:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1750, 'Sabtu', '09:00:00', '14:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1751, 'Sabtu', '17:00:00', '20:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1752, 'Senin', '17:00:00', '20:00:00', '108', NULL, 2, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1753, 'Selasa', '09:00:00', '12:00:00', '502', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1754, 'Kamis', '16:00:00', '18:00:00', '502', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1755, 'Selasa', '18:00:00', '20:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1756, 'Rabu', '18:00:00', '20:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1757, 'Kamis', '18:00:00', '20:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1758, 'Sabtu', '18:00:00', '20:00:00', '196', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1762, 'Senin', '16:00:00', '19:00:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1764, 'Selasa', '13:00:00', '16:00:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1765, 'Kamis', '13:00:00', '16:00:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1766, 'Sabtu', '09:00:00', '10:30:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1767, 'Rabu', '13:00:00', '16:00:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1768, 'Jumat', '17:00:00', '20:00:00', '200', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1769, 'Senin', '14:00:00', '16:30:00', '253', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1770, 'Selasa', '14:00:00', '16:30:00', '253', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1771, 'Kamis', '14:00:00', '16:30:00', '253', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1773, 'Sabtu', '14:00:00', '16:30:00', '253', NULL, 1, '<p>Spesialis Kandungan (ObsGyn)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1774, 'Senin-Sabtu', '15:00:00', '20:00:00', '4', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1776, 'Jumat', '09:00:00', '14:00:00', '7', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1778, 'Senin', '14:00:00', '16:00:00', '200', NULL, 1, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1779, 'Senin', '14:00:00', '16:00:00', '20', NULL, 1, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1780, 'Sabtu', '08:00:00', '16:00:00', '191', NULL, 1, '<p>Poli Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1782, 'Rabu', '09:00:00', '11:00:00', '106', NULL, 1, '<p>Spesialis Mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1784, 'Jumat', '18:00:00', '20:00:00', '128', NULL, 1, '<p>Spesialis Anak</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1787, 'Jumat', '17:00:00', '19:30:00', '173', NULL, 1, '<p>Spesialis Paru &amp; Pernapasan</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1789, 'Kamis', '12:30:00', '14:30:00', '26', NULL, 1, '<p>Spesialis Syaraf</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1790, 'Jumat', '10:30:00', '11:30:00', '26', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1791, 'Sabtu', '10:30:00', '11:30:00', '26', NULL, 1, '<p>-</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1793, 'Senin', '18:00:00', '20:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1794, 'Rabu', '18:00:00', '20:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1795, 'Jumat', '18:00:00', '20:00:00', '228', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1796, 'Sabtu', '15:00:00', '17:00:00', '173', NULL, 1, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1797, 'Senin', '17:00:00', '19:00:00', '223', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1798, 'Selasa', '17:00:00', '19:00:00', '223', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1799, 'Rabu', '17:00:00', '19:00:00', '223', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1800, 'Kamis', '17:00:00', '19:00:00', '223', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1801, 'Jumat', '17:00:00', '19:00:00', '223', NULL, 2, '', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1802, 'Senin', '09:00:00', '11:00:00', '106', NULL, 1, '<p>Spesialis mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1803, 'Kamis', '09:00:00', '11:00:00', '106', NULL, 1, '<p>Spesialis mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1804, 'Jumat', '18:00:00', '20:00:00', '106', NULL, 1, '<p>Spesialis mata</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1805, 'Senin-Jumat', '16:00:00', '20:00:00', '184', NULL, 1, '<p>Spesialis Bedah Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1806, 'Sabtu', '17:00:00', '20:00:00', '184', NULL, 1, '<p>Spesialis Bedah Umum</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1807, 'Senin', '09:15:00', '11:00:00', '17', NULL, 1, '<p>Spesialis THT</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1811, 'Sabtu', '14:00:00', '19:00:00', '133', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1815, 'Rabu', '10:00:00', '14:00:00', '34', NULL, 1, '<p>Poli Gigi&nbsp;</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1816, 'Jumat', '14:00:00', '16:00:00', '34', NULL, 1, '<p>Poli Gigi&nbsp;</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1817, 'Sabtu', '14:00:00', '19:00:00', '34', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1818, 'Kamis', '17:00:00', '20:00:00', '35', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1819, 'Rabu', '15:00:00', '19:00:00', '36', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1820, 'Senin', '17:00:00', '19:00:00', '39', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1821, 'Jumat', '17:00:00', '20:00:00', '168', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1822, 'Jumat', '17:00:00', '20:00:00', '169', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1823, 'Kamis', '17:00:00', '20:00:00', '42', NULL, 1, '<p>Poli Gigi</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1824, 'Jumat', '20:00:00', '08:00:00', '145', NULL, 1, '<p>Dokter Jaga IGD&nbsp;</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1825, 'Jumat', '20:00:00', '08:00:00', '145', NULL, 1, '<p>Dokter Jaga IGD</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1827, 'Kamis', '08:00:00', '20:00:00', '49', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1828, 'Jumat', '20:00:00', '08:00:00', '49', NULL, 1, '<p>Dokter Jaga IGD (Senin-Sabtu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1829, 'Minggu1', '08:00:00', '20:00:00', '49', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1830, 'Minggu4', '08:00:00', '20:00:00', '49', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1831, 'Minggu5', '08:00:00', '20:00:00', '49', NULL, 1, '<p>Dokter Jaga IGD (Minggu)</p>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1832, 'Rabu', '16:00:00', '19:00:00', '253', NULL, 1, '<table id=\"tabel-jadwaldokter\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Spesialis Kandungan (ObsGyn)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1833, 'Jumat', '16:00:00', '19:00:00', '253', NULL, 1, '<table id=\"tabel-jadwaldokter\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Spesialis Kandungan (ObsGyn)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 0, 1);
INSERT INTO `jadwal_dokter` VALUES (1834, 'Senin-Sabtu', '08:00:00', '12:00:00', '503', NULL, 1, '<p>Dokter Spesialis Bedah Umum</p>\r\n', 0, 1);

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `rumahsakit_id` int NULL DEFAULT NULL,
  `username` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '5600e318a8eb1b54a5dcb60c3a793eaa892f34f2b0d5c3e6145bbdd979907e2f',
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` enum('admin','user') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'user',
  `is_active` tinyint(1) NULL DEFAULT 1,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'default-user.png',
  `position` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES (3, 2, 'agus', '202cb962ac59075b964b07152d234b70', 'Administrator User', 'agus.badruss@gmail.com', '08389856364', 'admin', 1, 'default-user.png', NULL);
INSERT INTO `m_user` VALUES (10, NULL, 'ghifar', '202cb962ac59075b964b07152d234b70', 'Admin', 'Ghifar@gmail.com', '081398837727', 'admin', 0, 'default-user.png', NULL);
INSERT INTO `m_user` VALUES (14, NULL, 'yanu', '202cb962ac59075b964b07152d234b70', 'yanuar mahardani', 'thecanten@gmail.com', '085659339606', 'admin', 1, 'default-user.png', NULL);
INSERT INTO `m_user` VALUES (15, NULL, 'rspklc', '202cb962ac59075b964b07152d234b70', 'Rs.Permata Keluarga Lippo Cikarang', 'marketing@permatakeluarga.net', '021-89905588', 'admin', 1, 'default-user.png', NULL);
INSERT INTO `m_user` VALUES (17, NULL, 'bilz', 'a280873b0210357cbb7c5d3a6b71ab43', 'bilz', 'gandr0ck@gmail.com', '085694139971', 'admin', 1, 'default-user.png', NULL);
INSERT INTO `m_user` VALUES (19, NULL, 'marketing', 'cc84de301daf37fce2c0eb928305ca36', 'RS Permata Keluarga Jababeka', 'marketing-jb@permatakeluarga.net', '', 'admin', 1, 'default-user.png', NULL);

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_publish` tinyint(1) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_datetime` datetime NOT NULL,
  `is_removeable` int NULL DEFAULT NULL,
  `updated_by` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_by` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_datetime` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES (1, 'paket-pendirian-cv', 1, 'Paket Pendirian Cv\r\n', '<div class=\"container d-flex justify-content-center my-4\">\r\n  <div class=\"mb-5\">\r\n\r\n    <div class=\"row\">\r\n      <div class=\"col-md-4\">\r\n        <div class=\"card_parent\">\r\n          <div class=\"card-header cardheaderservice\">\r\n            <h5 class=\"textcard_ofchild\">PENDIRIAN PT, IZIN &amp; VO</h5>\r\n          </div>\r\n          <div class=\"card-header cardheaderservicesub\">\r\n            <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 7,5 Juta</h4>\r\n          </div>\r\n          <div class=\"card h-100\">\r\n            <div class=\"card-body\">\r\n              <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                <li class=\"list-group-item\">Pengesahan Menteri Hukum &amp; Hak Asasi Manusia</li>\r\n                <li class=\"list-group-item\">NPWP</li>\r\n                <li class=\"list-group-item\">SKT Pajak</li>\r\n                <li class=\"list-group-item\">NIB</li>\r\n                <li class=\"list-group-item\">Alamat Virtual Office 1 Tahun</li>\r\n                <li class=\"list-group-item\">Jasa Resepsionis</li>\r\n                <li class=\"list-group-item\">Penerimaan Surat Menyurat</li>\r\n                <li class=\"list-group-item\">FREE Pendaftaran EFIN</li>\r\n                <li class=\"list-group-item\">FREE Pendaftaran Pembukaan Rek untuk KBLI Resiko Rendah</li>\r\n              </ul>\r\n            </div>\r\n            <div class=\"card-footer text-center\">\r\n              <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT,%20Izin%20dan%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\"\r\n                class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"col-md-4\">\r\n        <div class=\"card_parent\">\r\n          <div class=\"card-header cardheaderservice\">\r\n            <h5 class=\"textcard_ofchild\">PENDIRIAN PT, IZIN, VO dan PKP</h5>\r\n          </div>\r\n          <div class=\"card-header cardheaderservicesub\">\r\n            <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 9 Juta</h4>\r\n          </div>\r\n          <div class=\"card h-100\">\r\n            <div class=\"card-body\">\r\n              <ul class=\"list-group list-group-flush\">\r\n                <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                <li class=\"list-group-item\">Pengesahan Menteri Hukum &amp; Hak Asasi Manusia</li>\r\n                <li class=\"list-group-item\">NPWP</li>\r\n                <li class=\"list-group-item\">SKT Pajak</li>\r\n                <li class=\"list-group-item\">NIB</li>\r\n                <li class=\"list-group-item\">Alamat Virtual Office</li>\r\n                <li class=\"list-group-item\">Jasa Resepsionis</li>\r\n                <li class=\"list-group-item\">Penerimaan Surat Menyurat</li>\r\n                <li class=\"list-group-item\">Telpon Bersama</li>\r\n                <li class=\"list-group-item\">Pendaftaran PKP</li>\r\n                <li class=\"list-group-item\">FREE Pendaftaran EFIN</li>\r\n                <li class=\"list-group-item\">FREE Pendaftaran Pembukaan REK untuk KBLI Resiko Rendah</li>\r\n              </ul>\r\n            </div>\r\n            <div class=\"card-footer text-center\">\r\n              <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Lengkap.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\"\r\n                class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (2, 'paket-pendirian-pt', 1, 'PAKET PENDIRIAN PT\r\n', '<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4\" style=\"margin: 10px;\">\r\n                    <div class=\"col\">\r\n                        <div class=\"card_parent\">\r\n                            <div class=\"card-header cardheaderservice\">\r\n                                <h5 class=\"card-title text-white\">PENDIRIAN PT NON IZIN</h5>\r\n                            </div>\r\n                            <div class=\"card-header cardheaderservicesub\">\r\n                                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 2,9 juta</h4>\r\n\r\n                            </div>\r\n                            <div class=\"card h-100\">\r\n                                <div class=\"card-body\">\r\n\r\n                                    <ul class=\"list-group list-group-flush\">\r\n                                        <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                                        <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                                        <li class=\"list-group-item\">Pengesahan Menteri Hukum dan Hak Asasi Manusia</li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"card-footer text-center\">\r\n                                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Non%20Izin.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card_parent\">\r\n\r\n                            <div class=\"card-header cardheaderservice\">\r\n                                <h5 class=\"card-title text-white\">PENDIRIAN PT DAN IZIN</h5>\r\n                            </div>\r\n                            <div class=\"card-header cardheaderservicesub\">\r\n                                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 5 juta</h4>\r\n\r\n                            </div>\r\n\r\n                            <div class=\"card h-100\">\r\n                                <div class=\"card-body\">\r\n                                    <!-- <h5 class=\"card-title\">PENDIRIAN PT DAN IZIN</h5>\r\n                                    <h6 class=\"card-subtitle mb-2 text-muted\">Rp 5 juta</h6> -->\r\n                                    <ul class=\"list-group list-group-flush\">\r\n                                        <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                                        <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                                        <li class=\"list-group-item\">Pengesahan Menteri Hukum &amp; HAM</li>\r\n                                        <li class=\"list-group-item\">NPWP</li>\r\n                                        <li class=\"list-group-item\">SKT Pajak</li>\r\n                                        <li class=\"list-group-item\">NIB</li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"card-footer text-center\">\r\n                                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20dan%20Izin.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card_parent\">\r\n                            <div class=\"card-header cardheaderservice\">\r\n                                <h5 class=\"card-title text-white\">PENDIRIAN PT, IZIN &amp; VO</h5>\r\n                            </div>\r\n                            <div class=\"card-header cardheaderservicesub\">\r\n                                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 7,5 Juta</h4>\r\n                            </div>\r\n                            <div class=\"card h-100\">\r\n                                <div class=\"card-body\">\r\n                                    <!-- <h5 class=\"card-title\">PENDIRIAN PT, IZIN & VO</h5>\r\n                                    <h6 class=\"card-subtitle mb-2 text-muted\">Rp 7,5 juta</h6> -->\r\n                                    <ul class=\"list-group list-group-flush\">\r\n                                        <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                                        <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                                        <li class=\"list-group-item\">Pengesahan Menteri Hukum &amp; Hak Asasi Manusia</li>\r\n                                        <li class=\"list-group-item\">NPWP</li>\r\n                                        <li class=\"list-group-item\">SKT Pajak</li>\r\n                                        <li class=\"list-group-item\">NIB</li>\r\n                                        <li class=\"list-group-item\">Alamat Virtual Office 1 Tahun</li>\r\n                                        <li class=\"list-group-item\">Jasa Resepsionis</li>\r\n                                        <li class=\"list-group-item\">Penerimaan Surat Menyurat</li>\r\n                                        <li class=\"list-group-item\">FREE Pendaftaran EFIN</li>\r\n                                        <li class=\"list-group-item\">FREE Pendaftaran Pembukaan Rek untuk KBLI Resiko Rendah</li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"card-footer text-center\">\r\n                                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT,%20Izin%20dan%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card_parent\">\r\n                            <div class=\"card-header cardheaderservice\">\r\n                                <h5 class=\"card-title text-white\">PENDIRIAN PT, IZIN, VO dan PKP</h5>\r\n                            </div>\r\n                            <div class=\"card-header cardheaderservicesub\">\r\n                                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 9 Juta</h4>\r\n                            </div>\r\n                            <div class=\"card h-100\">\r\n                                <div class=\"card-body\">\r\n                                    <!-- <h5 class=\"card-title\">PENDIRIAN PT, IZIN, VO dan PKP</h5>\r\n                                    <h6 class=\"card-subtitle mb-2 text-muted\">Rp 9 juta</h6> -->\r\n                                    <ul class=\"list-group list-group-flush\">\r\n                                        <li class=\"list-group-item\">Pengecekan dan Pemesanan Nama</li>\r\n                                        <li class=\"list-group-item\">Akta Pendirian Dari Notaris</li>\r\n                                        <li class=\"list-group-item\">Pengesahan Menteri Hukum &amp; Hak Asasi Manusia</li>\r\n                                        <li class=\"list-group-item\">NPWP</li>\r\n                                        <li class=\"list-group-item\">SKT Pajak</li>\r\n                                        <li class=\"list-group-item\">NIB</li>\r\n                                        <li class=\"list-group-item\">Alamat Virtual Office</li>\r\n                                        <li class=\"list-group-item\">Jasa Resepsionis</li>\r\n                                        <li class=\"list-group-item\">Penerimaan Surat Menyurat</li>\r\n                                        <li class=\"list-group-item\">Telpon Bersama</li>\r\n                                        <li class=\"list-group-item\">Pendaftaran PKP</li>\r\n                                        <li class=\"list-group-item\">FREE Pendaftaran EFIN</li>\r\n                                        <li class=\"list-group-item\">FREE Pendaftaran Pembukaan REK untuk KBLI Resiko Rendah</li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"card-footer text-center\">\r\n                                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Lengkap.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (3, 'paket-perubahan-akta-pt-cv', 1, 'PERUBAHAN AKTA PT DAN CV\r\n', '<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3\" style=\"margin: 10px;\">\r\n<div class=\"col\">\r\n                        <div class=\"card_parent\">\r\n                            <div class=\"card-header cardheaderservice\">\r\n                                <h5 class=\"card-title text-white\">PERUBAHAN AKTA PT DAN CV MULAI DARI</h5>\r\n                            </div>\r\n                            <div class=\"card-header cardheaderservicesub\">\r\n                                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 2,5 juta</h4>\r\n                            </div>\r\n                            <div class=\"card h-100\">\r\n                                <div class=\"card-body\">\r\n                                    <ul class=\"list-group list-group-flush\">\r\n                                        <li class=\"list-group-item\">Perubahan Nama</li>\r\n                                        <li class=\"list-group-item\">Perubahan Tempat Kedudukan</li>\r\n                                        <li class=\"list-group-item\">Perubahan Alamat</li>\r\n                                        <li class=\"list-group-item\">Perubahan Maksud dan Tujuan</li>\r\n                                        <li class=\"list-group-item\">Perubahan Modal</li>\r\n                                        <li class=\"list-group-item\">Perubahan Pemegang Saham</li>\r\n                                        <li class=\"list-group-item\">Perubahan Direksi dan Dewan Komisaris</li>\r\n                                        <li class=\"list-group-item\">Perubahan Lainnya</li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"card-footer text-center\">\r\n                                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Akta%20Perubahan.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div></div>', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (4, 'pendaftaran-hak-cipta-merk-dan-paten', 1, 'Pendaftaran Hak Cipta Dan Paten', '<div class=\"row g-4\">\n    <div class=\"col-md-4\">\n        <div class=\"card_parent\">\n            <div class=\"card-header cardheaderservice\">\n                <h5 class=\"card-title text-white\">PENDAFTARAN MERK, HAK CIPTA, DAN PATEN</h5>\n            </div>\n            <div class=\"card-header cardheaderservicesub\">\n                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 2 juta</h4>\n            </div>\n            <div class=\"card h-100\">\n                <div class=\"card-body\">\n                    <ul class=\"list-group list-group-flush\">\n                        <li class=\"list-group-item\">Pendaftaran Merk, Hak Cipta, dan Paten</li>\n                    </ul>\n                </div>\n                <div class=\"card-footer text-center\">\n                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendaftaran%20Merek.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\" class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\n                </div>\n            </div>\n        </div>\n    </div><div class=\"col-md-8\">\n        <img src=\"https://www.rariyosya.com/wp-content/uploads/2019/02/biaya-pembuatan-PT-murah.jpg\" class=\"img-fluid\">\n    </div>\n    \n</div>', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (5, 'paket-virtual-office', 1, 'Paket Virtual Office', '<div class=\"row g-4\">\r\n\r\n    <div class=\"col-md-4\">\r\n        <div class=\"card_parent\">\r\n            <div class=\"card-header cardheaderservice\">\r\n                <h5 class=\"card-title text-white\">VIRTUAL OFFICE MULAI DARI</h5>\r\n            </div>\r\n            <div class=\"card-header cardheaderservicesub\">\r\n                <h4 class=\"card-subtitle mb-2 text-muted text-white\"><sub>Rp</sub> 2,5 juta</h4>\r\n            </div>\r\n            <div class=\"card h-100\">\r\n                <div class=\"card-body\">\r\n                    <ul class=\"list-group list-group-flush\">\r\n                        <li class=\"list-group-item\">Alamat Virtual Office 1 Tahun Di Lokasi Sangat Strategis</li>\r\n                        <li class=\"list-group-item\">Penerimaan Surat- Menyurat</li>\r\n                        <li class=\"list-group-item\">Layanan Resepsionis Profesional</li>\r\n                        <li class=\"list-group-item\">Telpon Bersama</li>\r\n                    </ul>\r\n                </div>\r\n                <div class=\"card-footer text-center\">\r\n                    <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih.\"\r\n                        class=\"btn btn-danger\">Konsultasi Gratis Chat via WhatsApp</a>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"col-md-8\">\r\n        <img src=\"https://www.rariyosya.com/wp-content/uploads/2019/02/Architecture-wallpaper-1920x1080.jpg\" class=\"img-fluid\">\r\n\r\n    </div>\r\n\r\n</div>', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (6, 'jasa-penataan-dokumen', 1, 'Jasa Penata Document', '<div class=\"container mb-4\">\r\n    <div class=\"card\">\r\n        <div class=\"card-body\">\r\n            <p>Semakin berkembang dan besarnya perusahaan, berdampak pada semakin banyaknya dokumen KORPORASI DAN PERIZINAN PERUSAHAAN yang dimiliki perusahaan, hal ini karena adanya pendaftaran, perubahan, penambahan, penyesuaian, dan/atau perpanjangan dokumen tersebut untuk disesuaikan dengan kondisi perusahaan. Dengan semakin banyaknya dokumen korporasi dan perizinan yang dimiliki perusahaan, tidak jarang banyak perusahaan yang lalai dalam pengarsipan dokumen, mulai dari tidak urutnya dokumen, rusaknya dokumen, hilang, daluarsa jangka waktu, atau perusahaan tidak mengetahui bahwa seharusnya ada dokumen korporasi dan perizinan yang harus dimiliki oleh perusahaan. Berbekal permasalahan tersebut, kami disini hadir memberikan solusi bagi perusahaan untuk menata dokumen korporasi dan perizinan suatu perusahaan sekaligus memberikan konsultasi bagaimana mengatasi dokumen yang rusak, hilang, daluarsa jangka waktu, dan belum dimiliki perusahaan.</p>\r\n\r\n            <h4>Apa saja dokumen korporasi perusahaan?</h4>\r\n            <p>1. Pendirian (Akta Pendirian, Surat Pengesahan Menteri Hukum dan Hak Asasi Manusia, Berita Negara Republik Indonesia)</p>\r\n            <p>2. Perubahan Akta Pendirian (Akta Perubahan Anggaran Dasar, Surat Persetujuan Menteri Hukum dan Hak Asasi Manusia, Surat Pemberitahuan Perubahan Anggaran Dasar Menteri Hukum dan Hak Asasi Manusia, Surat Pemberitahuan Perubahan Data Menteri Hukum dan Hak Asasi Manusia</p>\r\n            <p>3. Identitas Pemegang Saham (Pemegang Saham Pribadi :<br>\r\n                KTP dan NPWP, Pemegang Saham Berbentuk Badan Hukum : PT, Yayasan, Koperasi)</p>\r\n            <p>4. Daftar Pemegang Saham<br>\r\n            5. Daftar Khusus Pemegang Saham</p>\r\n\r\n            <h4>Apa saja dokumen perizinan perusahaan?</h4>\r\n            <p>1. Surat Keterangan Domisili<br>\r\n            2. Tanda Daftar Perusahaan/Nomor Induk Berusaha<br>\r\n            3. Izin Komersial/Operasional<br>\r\n            4. Surat Izin Usaha Perdagangan<br>\r\n            5. Izin Usaha Perusahaan<br>\r\n            6. Nomor Pokok Wajib Pajak<br>\r\n            7. Surat Keterangan Terdaftar<br>\r\n            8. Pengukuhan Pengusaha Kena Pajak<br>\r\n            9. Wajib Lapor Ketenagakerjaan<br>\r\n            10. Formulir Fasilitas Penyelenggaraan Kesejahteraan<br>\r\n            11. Peraturan Perusahaan<br>\r\n            12. Perizinan Ketenagakerjaan Asing (RPTKA, IMTA, KITAS, PASSPORT)</p>\r\n\r\n            <h4>Tujuan Penataan Dokumen</h4>\r\n            <p>1. Dokumen perusahaan tertata secara sistematis dan rapih<br>\r\n            2. Memudahkan perusahaan dalam pencarian dokumen<br>\r\n            3. Dalam hal perusahaan sedang melakukan audit, baik dari segi finance, tax, dan hukum, perusahaan dapat dengan mudah mencari dokumen-dokumen perusahaan<br>\r\n            4. Perusahaan memiliki dokumen-dokumen yang disyaratkan oleh peraturan perundang-undangan</p>\r\n\r\n            <h4>Apa yang akan kami lakukan ?</h4>\r\n            <p>1. Pengumpulan dokumen korporasi dan<br>\r\n            2. Pengecekan dokumen korporasi dan perizinan<br>\r\n            3. Pendataan dokumen yang rusak, hilang, daluarsa, dan belum dimiliki perusahaan<br>\r\n            4. Pengklasifikasian dokumen korporasi dan perizinan<br>\r\n            5. Pendokumentasian (Filling Document) dan penyusunan dokumen sesuai urutan dan jenisnya<br>\r\n            6. Pen-scanan dokumen agar perusahaan memiliki data softcopy</p>\r\n\r\n            <p>\r\n                <a href=\"https://api.whatsapp.com/send?phone=6281210776636&amp;text=Halo%20Rariyosya.com\" class=\"btn btn-danger w-70 btn-whatsapp\" target=\"_blank\">Tanya Harga</a>\r\n            </p>\r\n        </div>\r\n    </div>\r\n</div>\r\n', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);
INSERT INTO `page` VALUES (7, 'faq', 1, 'faq', '<div class=\"border\">\r\n    <div class=\"row\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex align-items-start\">\r\n                        <div class=\"icon me-3\">\r\n                            <i class=\"fa fa-question\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div>\r\n                            <h5 class=\"card-title\">1. Bolehkan PNS Menjadi Pemegang Saham?</h5>\r\n                            <p class=\"card-text\"></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12\"></div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <p class=\"card-text\">PNS pada dasarnya tidak dilarang untuk menjadi Pemegang Saham, Tetapi harus ada surat keterangan dari Atasan untuk mengizinkan PNS tersebut.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex align-items-start\">\r\n                        <div class=\"icon me-3\">\r\n                            <i class=\"fa fa-question\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div>\r\n                            <h5 class=\"card-title\">2. Apakah perusahaan harus mendaftar BPJS Ketenagakerjaan?</h5>\r\n                            <p class=\"card-text\"></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12\"></div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <p class=\"card-text\">Pendaftaran BPJS Ketenagakerjaan saat ini wajib untuk Perusahaan dengan Modal Kelas Menengah atau Perusahaan dengan izin khusus.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex align-items-start\">\r\n                        <div class=\"icon me-3\">\r\n                            <i class=\"fa fa-question\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div>\r\n                            <h5 class=\"card-title\">3. Apa Perbedaan Modal Setor dan Modal Dasar?</h5>\r\n                            <p class=\"card-text\"></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12\"></div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <p class=\"card-text\">Modal Dasar adalah total jumlah modal yang dapat diterbitkan oleh perusahaan. Modal Setor adalah bagian dari modal dasar yang harus dimasukan ke rekening perusahaan.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex align-items-start\">\r\n                        <div class=\"icon me-3\">\r\n                            <i class=\"fa fa-question\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div>\r\n                            <h5 class=\"card-title\">4. Apakah perusahaan harus mendaftar PKP?</h5>\r\n                            <p class=\"card-text\"></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12\"></div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <p class=\"card-text\">PKP hanya diwajibkan bagi perusahaan yang ingin mengikuti proyek tender dan telah mendapat omset diatas 4.8 Miliar. Bagi perusahaan yang tidak termasuk kedua golongan diatas, tidak diwajibkan untuk melakukan PKP.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <div class=\"d-flex align-items-start\">\r\n                        <div class=\"icon me-3\">\r\n                            <i class=\"fa fa-question\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div>\r\n                            <h5 class=\"card-title\">5. Bisakah CV Berkembang Menjadi PT?</h5>\r\n                            <p class=\"card-text\"></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12\"></div>\r\n    </div>\r\n    <div class=\"row mt-3\">\r\n        <div class=\"col-12\">\r\n            <div class=\"card\">\r\n                <div class=\"card-body\">\r\n                    <p class=\"card-text\">CV tidak bisa berubah menjadi PT karena PT adalah badan hukum yang berbeda jenis dan bukan bentuk lanjutkan dari CV. CV yang ingin berkembang menjadi PT harus memulai perizinan dari tahap awal.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for pengajuan_proposal
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan_proposal`;
CREATE TABLE `pengajuan_proposal`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_lengkap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kota` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi_pesan_jika_ada` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `category_id` int NULL DEFAULT NULL,
  `verification_question` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengajuan_proposal
-- ----------------------------

-- ----------------------------
-- Table structure for rumah_sakit
-- ----------------------------
DROP TABLE IF EXISTS `rumah_sakit`;
CREATE TABLE `rumah_sakit`  (
  `id_rumahsakit` int NOT NULL AUTO_INCREMENT,
  `nama_rumahsakit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rumahsakit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rumah_sakit
-- ----------------------------
INSERT INTO `rumah_sakit` VALUES (1, 'rspk lippo', '<p>lippo</p>', 1);
INSERT INTO `rumah_sakit` VALUES (2, 'RSPK Jababeka', '<p>Jababeka</p>', 1);
INSERT INTO `rumah_sakit` VALUES (4, 'RSPK KARAWANG', '<p>RSPK KARAWANG</p>', 1);

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `setting_id` int NOT NULL AUTO_INCREMENT,
  `name_set` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `value_set` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_active` tinyint(1) NULL DEFAULT 1,
  `is_system` tinyint(1) NULL DEFAULT 0,
  `is_removeable` tinyint(1) NULL DEFAULT 1,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`setting_id`) USING BTREE,
  UNIQUE INDEX `name_set`(`name_set` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'igd02', '021-2908338 (IGD)', 'igd02', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (2, 'fax02', '021-89321010 - 89321000(FAX)', 'fax02', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (11, 'igd01', '021-89901955 (IGD)', 'igd01', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (12, 'fax01', '021-89901860(FAX)', 'fax01', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (13, 'instagram01', 'https://www.instagram.com/explore/locations/1019922655/permata-keluarga-lippo-cikarang/', 'Instagram', 1, 0, 1, 0);
INSERT INTO `setting` VALUES (15, 'address01', 'Jl. M.H. Thamrin Kav.129 Lippo - Cikarang\r\nKab. Bekasi - 17550\r\nJawab Barat - Indonesia', 'alamat01', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (16, 'address02', 'Jl. Dr. Cipto Mangunkusumo Blok A No. 1A, Medical City - Kota Jababeka\r\nKab. Bekasi - 17550\r\nJawa Barat - Indonesia', 'alamat02', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (17, 'address03', 'jl.Galuhmas', 'Alamat03', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (18, 'telp01', '021-89905588 (Hunting)', 'No.telp01', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (24, 'telp02', '021-29083399 - 2908 3388', 'No.telp01', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (25, 'telp03', '021-89905587', 'No.telp01', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (26, 'email1', 'marketing@permatakeluarga.net', 'email', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (27, 'email2', 'marketing-jb@permatakeluarga.net', 'email', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (28, 'email3', 'defg', 'No.telp01', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (29, 'facebook01', 'https://www.facebook.com/rspermatakeluarga/', 'facebook01', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (30, 'facebook02', 'https://www.facebook.com/pages/Rs-Permata-Keluarga-Jababeka/129331931150136', 'facebook02', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (31, 'facebook03', 'https://www.facebook.com/', 'facebook03', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (32, 'map rspk lipo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4817550431444!2d107.14127451431403!3d-6.331574395417922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b2531abdd31%3A0xdfa20e8b65a900ac!2sRS.+Permata+Keluarga+Lippo+Cikarang!5e0!3m2!1sid!2sid!4v1515987728254', 'toko legalitas', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (33, 'map rspk jababeka', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8393094627813!2d107.17157861431376!3d-6.284843295451166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6984b59fe2da2f%3A0x5074d0b361ef95e2!2sRS.+Permata+Keluarga+Jababeka!5e0!3m2!1sid!2sid!4v1515985513520', 'rspk jababeka', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (34, 'logo1', 'Toko legalitas', 'logo1', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (38, 'youtube1', 'https://www.youtube.com/?gl=ID', 'chanel rspk lippo', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (39, 'youtube2', 'https://youtube.com', 'chanel youtube rspk jababeka', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (40, 'youtube3', 'https://youtube.com', 'chanel youtube rspk karawang', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (41, 'Fanspage1', '<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frspermatakeluarga%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=223423957803301\" width=\"340\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', 'Fanpage RSPK Lippo cikarang', 1, 0, 1, 1);
INSERT INTO `setting` VALUES (42, 'Fans page2', '<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frspermatakeluargajb%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=223423957803301\" width=\"340\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>', 'fans page rspk jababeka', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (43, 'Fans Page3', 'fb', 'Fanspage RSPK Karawang\r\n', 1, 0, 1, 3);
INSERT INTO `setting` VALUES (44, 'instagram2', 'https://www.instagram.com/explore/locations/161538124277343/rs-permata-keluarga-jababeka/', 'instagram02', 1, 0, 1, 2);
INSERT INTO `setting` VALUES (45, 'wa1', 'https://api.whatsapp.com/send?phone=6285604081560', 'wa lippo', 1, 0, 1, 1);

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide`  (
  `slide_id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `alt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NULL DEFAULT 1,
  `id_rumahsakit` int NOT NULL,
  PRIMARY KEY (`slide_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 93 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slide
-- ----------------------------

-- ----------------------------
-- Table structure for v_article_fasilitas_lippo
-- ----------------------------
DROP TABLE IF EXISTS `v_article_fasilitas_lippo`;
CREATE TABLE `v_article_fasilitas_lippo`  (
  `article_id` tinyint NOT NULL,
  `title` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `content` tinyint NOT NULL,
  `img` tinyint NOT NULL,
  `article_category_id` tinyint NOT NULL,
  `created_by` tinyint NOT NULL,
  `created_datetime` tinyint NOT NULL,
  `updated_by` tinyint NOT NULL,
  `updated_datetime` tinyint NOT NULL,
  `is_publish` tinyint NOT NULL,
  `counter` tinyint NOT NULL,
  `id_rumahsakit` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_article_fasilitas_lippo
-- ----------------------------

-- ----------------------------
-- Table structure for v_comment
-- ----------------------------
DROP TABLE IF EXISTS `v_comment`;
CREATE TABLE `v_comment`  (
  `link` tinyint NOT NULL,
  `article_content` tinyint NOT NULL,
  `coment_id` tinyint NOT NULL,
  `article_id` tinyint NOT NULL,
  `parent_coment_id` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `content` tinyint NOT NULL,
  `is_approve` tinyint NOT NULL,
  `created_datetime` tinyint NOT NULL,
  `img` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_comment
-- ----------------------------

-- ----------------------------
-- Table structure for v_download
-- ----------------------------
DROP TABLE IF EXISTS `v_download`;
CREATE TABLE `v_download`  (
  `download_id` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `ket` tinyint NOT NULL,
  `ebook_id` tinyint NOT NULL,
  `download_datetime` tinyint NOT NULL,
  `ebook_title` tinyint NOT NULL,
  `ebook_ket` tinyint NOT NULL,
  `category_ebook_name` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_download
-- ----------------------------

-- ----------------------------
-- Table structure for v_ebook
-- ----------------------------
DROP TABLE IF EXISTS `v_ebook`;
CREATE TABLE `v_ebook`  (
  `ebook_id` tinyint NOT NULL,
  `title` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `ket` tinyint NOT NULL,
  `img` tinyint NOT NULL,
  `ebook_category_id` tinyint NOT NULL,
  `created_by` tinyint NOT NULL,
  `created_datetime` tinyint NOT NULL,
  `updated_by` tinyint NOT NULL,
  `updated_datetime` tinyint NOT NULL,
  `is_publish` tinyint NOT NULL,
  `category_name` tinyint NOT NULL,
  `name_create` tinyint NOT NULL,
  `name_update` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_ebook
-- ----------------------------

-- ----------------------------
-- Table structure for v_gallery
-- ----------------------------
DROP TABLE IF EXISTS `v_gallery`;
CREATE TABLE `v_gallery`  (
  `gallery_id` tinyint NOT NULL,
  `gallery_name` tinyint NOT NULL,
  `created_datetime` tinyint NOT NULL,
  `created_by` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `is_publish` tinyint NOT NULL,
  `gallery_detail_id` tinyint NOT NULL,
  `title` tinyint NOT NULL,
  `img` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `is_active` tinyint NOT NULL,
  `alt` tinyint NOT NULL,
  `nama_rumahsakit` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for v_gallery_header
-- ----------------------------
DROP TABLE IF EXISTS `v_gallery_header`;
CREATE TABLE `v_gallery_header`  (
  `gallery_id` tinyint NOT NULL,
  `gallery_name` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `created_datetime` tinyint NOT NULL,
  `created_by` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `is_publish` tinyint NOT NULL,
  `cover` tinyint NOT NULL,
  `nama_rumahsakit` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_gallery_header
-- ----------------------------

-- ----------------------------
-- Table structure for v_setting
-- ----------------------------
DROP TABLE IF EXISTS `v_setting`;
CREATE TABLE `v_setting`  (
  `setting_id` tinyint NOT NULL,
  `name_set` tinyint NOT NULL,
  `value_set` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `is_active` tinyint NOT NULL,
  `is_system` tinyint NOT NULL,
  `is_removeable` tinyint NOT NULL,
  `nama_rumahsakit` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_setting
-- ----------------------------

-- ----------------------------
-- Table structure for v_slide
-- ----------------------------
DROP TABLE IF EXISTS `v_slide`;
CREATE TABLE `v_slide`  (
  `slide_id` tinyint NOT NULL,
  `img` tinyint NOT NULL,
  `title` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `alt` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `is_active` tinyint NOT NULL,
  `nama_rumahsakit` tinyint NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of v_slide
-- ----------------------------

-- ----------------------------
-- View structure for v_article
-- ----------------------------
DROP VIEW IF EXISTS `v_article`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_article` AS select `a`.`article_id` AS `article_id`,`a`.`title` AS `title`,`a`.`link` AS `link`,`a`.`content` AS `content`,`a`.`img` AS `img`,`a`.`article_category_id` AS `article_category_id`,`c`.`category_name` AS `category_name`,`a`.`created_by` AS `created_by`,`u`.`username` AS `username`,`u`.`name` AS `name`,`a`.`created_datetime` AS `created_datetime`,`a`.`updated_by` AS `updated_by`,`a`.`updated_datetime` AS `updated_datetime`,`a`.`is_publish` AS `is_publish`,`a`.`counter` AS `counter`,`r`.`nama_rumahsakit` AS `nama_rumahsakit` from (((`article` `a` join `article_category` `c` on((`a`.`article_category_id` = `c`.`article_category_id`))) join `rumah_sakit` `r` on((`a`.`id_rumahsakit` = `r`.`id_rumahsakit`))) left join `m_user` `u` on((`a`.`created_by` = `u`.`user_id`))); ;

-- ----------------------------
-- View structure for v_bagian
-- ----------------------------
DROP VIEW IF EXISTS `v_bagian`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_bagian` AS select `bag`.`id_bagian` AS `id_bagian`,`bag`.`nama_bagian` AS `nama_bagian`,`bag`.`deskripsi` AS `deskripsi`,`bag`.`is_publish` AS `is_publish`,`rs`.`nama_rumahsakit` AS `nama_rumahsakit`,`bag`.`urutan` AS `urutan`,`rs`.`id_rumahsakit` AS `id_rumahsakit` from (`bagian` `bag` join `rumah_sakit` `rs` on((`rs`.`id_rumahsakit` = `bag`.`id_rumahsakit`))) where (`rs`.`is_active` = 1); ;

-- ----------------------------
-- View structure for v_dokter
-- ----------------------------
DROP VIEW IF EXISTS `v_dokter`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_dokter` AS select `dok`.`id_dokter` AS `id_dokter`,`dok`.`nama_dokter` AS `nama_dokter`,`dok`.`img` AS `img`,`dok`.`alamat` AS `alamat`,`bag`.`nama_bagian` AS `bagian`,`dok`.`id_rumahsakit` AS `id_rumahsakit`,`dok`.`ket` AS `ket`,`dok`.`is_active` AS `is_active`,`rs`.`nama_rumahsakit` AS `nama_rumahsakit`,`bag`.`id_bagian` AS `id_bagian` from ((`dokter` `dok` join `rumah_sakit` `rs` on((`dok`.`id_rumahsakit` = `rs`.`id_rumahsakit`))) join `bagian` `bag` on((`dok`.`id_bagian` = `bag`.`id_bagian`))); ;

-- ----------------------------
-- View structure for v_guestbook
-- ----------------------------
DROP VIEW IF EXISTS `v_guestbook`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_guestbook` AS select `a`.`guestbook_id` AS `guestbook_id`,`a`.`title` AS `title`,`a`.`content` AS `content`,`a`.`name` AS `name`,`a`.`email` AS `email`,`a`.`phone` AS `phone`,`a`.`created_datetime` AS `created_datetime`,`a`.`is_processed` AS `is_processed`,`a`.`company` AS `company`,`a`.`address` AS `address`,`a`.`type` AS `type`,`r`.`nama_rumahsakit` AS `nama_rumahsakit` from (`guestbook` `a` join `rumah_sakit` `r` on((`a`.`id_rumahsakit` = `r`.`id_rumahsakit`))); ;

-- ----------------------------
-- View structure for v_jadwaldokter
-- ----------------------------
DROP VIEW IF EXISTS `v_jadwaldokter`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_jadwaldokter` AS select `j`.`id_jadwal` AS `id_jadwal`,`j`.`hari` AS `hari`,`j`.`jam` AS `jam`,`j`.`jam_pulang` AS `jam_pulang`,`j`.`id_dokter` AS `id_dokter`,`j`.`id_rumahsakit` AS `id_rumahsakit`,`j`.`ket` AS `ket`,`j`.`is_active` AS `is_active`,`j`.`oncall` AS `oncall`,`d`.`nama_dokter` AS `nama_dokter`,`bag`.`nama_bagian` AS `bagian`,`bag`.`id_bagian` AS `id_bagian`,`r`.`nama_rumahsakit` AS `nama_rumahsakit`,`bag`.`urutan` AS `urutan_jadwal`,(case when (`j`.`hari` = 'Senin') then 1 when (`j`.`hari` = 'Selasa') then 2 when (`j`.`hari` = 'Rabu') then 3 when (`j`.`hari` = 'Kamis') then 4 when (`j`.`hari` = 'Jumat') then 5 when (`j`.`hari` = 'Senin-Jumat') then 6 when (`j`.`hari` = 'Senin-Sabtu') then 7 when (`j`.`hari` = 'Sabtu') then 8 when (`j`.`hari` = 'Minggu1') then 9 when (`j`.`hari` = 'Minggu2') then 10 when (`j`.`hari` = 'Minggu3') then 11 when (`j`.`hari` = 'Minggu4') then 12 when (`j`.`hari` = 'Minggu1-Minggu5') then 13 else 14 end) AS `orderday`,`d`.`img` AS `img` from (((`jadwal_dokter` `j` join `dokter` `d` on((`j`.`id_dokter` = `d`.`id_dokter`))) join `rumah_sakit` `r` on((`j`.`id_rumahsakit` = `r`.`id_rumahsakit`))) join `bagian` `bag` on(((`r`.`id_rumahsakit` = `bag`.`id_rumahsakit`) and (`bag`.`id_bagian` = `d`.`id_bagian`)))); ;

-- ----------------------------
-- View structure for v_user_list
-- ----------------------------
DROP VIEW IF EXISTS `v_user_list`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_user_list` AS select `m_user`.`rumahsakit_id` AS `rumahsakit_id`,`m_user`.`username` AS `username`,`m_user`.`password` AS `password`,`m_user`.`name` AS `name`,`m_user`.`email` AS `email`,`m_user`.`phone` AS `phone`,`m_user`.`level` AS `level`,`m_user`.`is_active` AS `is_active`,`m_user`.`img` AS `img`,`m_user`.`position` AS `position`,`m_user`.`user_id` AS `user_id`,`rumah_sakit`.`id_rumahsakit` AS `id_rumahsakit`,`rumah_sakit`.`nama_rumahsakit` AS `nama_rumahsakit`,`rumah_sakit`.`alamat` AS `alamat` from (`m_user` left join `rumah_sakit` on((`m_user`.`rumahsakit_id` = `rumah_sakit`.`id_rumahsakit`))); ;

SET FOREIGN_KEY_CHECKS = 1;
