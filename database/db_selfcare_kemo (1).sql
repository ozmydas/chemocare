-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cancer_categories`;
CREATE TABLE `cancer_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cancer_categories` (`id`, `type`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5,	'payudara',	'Kanker Payudara',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',	'2023-08-20 11:50:17',	'2023-08-25 22:40:22'),
(6,	'serviks',	'Kanker Serviks',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',	'2023-08-20 11:50:17',	'2023-08-25 22:40:22'),
(7,	'usus',	'Kanker Usus',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',	'2023-08-20 11:50:17',	'2023-08-25 22:40:22'),
(8,	'darah',	'Kanker Darah',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',	'2023-08-20 11:50:17',	'2023-08-25 22:40:22');

DROP TABLE IF EXISTS `cancer_details`;
CREATE TABLE `cancer_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `thumbnail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cancer_details` (`id`, `category_id`, `title`, `content`, `thumbnail`, `video_url`, `created_at`, `updated_at`) VALUES
(1,	5,	'Tentang Kanker Payudara',	'<p>**Kanker Payudara**</p><p>Kanker payudara adalah jenis kanker yang terbentuk di sel-sel payudara. Meskipun kanker ini lebih sering terjadi pada wanita, kanker payudara juga bisa mempengaruhi pria. Penyebab kanker payudara meliputi kombinasi faktor genetik, lingkungan, dan gaya hidup.</p><p>**Stadium Kanker Payudara:**</p><p>1. **Stadium 0 (in situ)**:<br>&nbsp; - Kanker masih berada di tempat asalnya dan belum menyebar ke jaringan sekitarnya.<br>&nbsp; - Dua jenis utama: Ductal carcinoma in situ (DCIS) dan Lobular carcinoma in situ (LCIS).</p><p>2. **Stadium I**:<br>&nbsp; - **Stadium IA**: Tumor memiliki ukuran hingga 2 cm dan belum menyebar ke kelenjar getah bening.<br>&nbsp; - **Stadium IB**: Kanker kecil dapat ditemukan di kelenjar getah bening.</p><p>3. **Stadium II**:<br>&nbsp; - **Stadium IIA**: Tumor memiliki ukuran kurang dari 2 cm dan telah menyebar ke 1-3 kelenjar getah bening dekat ketiak ATAU tumor memiliki ukuran antara 2-5 cm tetapi belum menyebar ke kelenjar getah bening.<br>&nbsp; - **Stadium IIB**: Tumor memiliki ukuran antara 2-5 cm dan telah menyebar ke 1-3 kelenjar getah bening dekat ketiak ATAU tumor lebih besar dari 5 cm tetapi belum menyebar ke kelenjar getah bening.</p><p>4. **Stadium III**:<br>&nbsp; - **Stadium IIIA**: Kanker telah menyebar ke 4-9 kelenjar getah bening ATAU tumor memiliki ukuran lebih dari 5 cm dan kecil kanker ditemukan di kelenjar getah bening.<br>&nbsp; - **Stadium IIIB**: Tumor telah menembus dinding dada atau kulit payudara.<br>&nbsp; - **Stadium IIIC**: Kanker telah menyebar ke 10 atau lebih kelenjar getah bening dekat ketiak, atau ke kelenjar getah bening dekat tulang dada.</p><p>5. **Stadium IV**:<br>&nbsp; - Kanker telah menyebar ke organ-organ lain tubuh, seperti tulang, paru-paru, hati, atau otak.</p><p>Penting untuk dicatat bahwa stadium kanker dapat memberikan informasi tentang sejauh mana kanker telah menyebar dan membantu menentukan pilihan pengobatan. Semakin awal kanker dideteksi dan diobati, semakin baik peluang kesembuhannya.</p>',	'1693036042.png',	'ASDASD',	'2023-08-20 13:30:29',	'2023-08-26 00:47:22');

DROP TABLE IF EXISTS `education_articles`;
CREATE TABLE `education_articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `label` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `thumbnail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `education_articles` (`id`, `category`, `label`, `title`, `content`, `thumbnail`, `video_url`, `created_at`, `updated_at`) VALUES
(12,	'edukasi',	'terapi',	'Terapi spiritual (konseling untuk motivasi)',	'<ol><li style=\"text-align:justify;\">Dengan cara berzikir, berdoa, shalat tahajud, berpuasa, dukungan jemaat, kebaktian, dan kegiatan ritual agama lainnya&nbsp;</li><li style=\"text-align:justify;\">Relaksasi --&gt; Mendengar kalimat spiritual zikir, duduk/tidur dengan rileks, tutup mata, kendurkan otot-otot, mulai membaca kalimat spiritual. Lakukan selama 10-20 menit, akhiri secara bertahap duduk, lalu istirahat&nbsp;</li></ol>',	'1693392514.jpg',	'',	'2023-08-30 03:09:42',	'2023-08-30 03:48:34'),
(13,	'edukasi',	'efek-samping',	'Ansietas/Kecemasan ',	'<p>Pasien kanker sering mengalami kecemasan selama menjalani kemoterapi. Salah satu kecemasan yang paling umum adalah ketakutan terhadap keganasan penyakit dan efek samping yang berkelanjutan akibat penyakit dan pengobatan.</p>',	'1693390334.jpg',	'',	'2023-08-30 03:12:14',	'2023-08-30 03:12:14'),
(14,	'edukasi',	'efek-samping',	'Nyeri',	'<p>Rasa nyeri timbul pada bagian perut bawah dan punggung, munculnya hilang timbul dan akan diperberat oleh aktivitas fisik.&nbsp;</p>',	'1693390427.png',	'',	'2023-08-30 03:13:47',	'2023-08-30 03:13:47'),
(15,	'edukasi',	'efek-samping',	'Mual dan Muntah',	'<p style=\"text-align:justify;\">Setelah menjalani kemoterapi pasien akan sering meludah bahkan beberapa jam kedepannya pasien akan merasakan mual dan muntah. Mual muntah yang dirasakan pasien biasanya hilang timbul. Mual dan muntah dapapat dipengaruhi oleh selera, bau, pikiran. Faktor pemicu rasa mual dan muntah seperti aroma masakan rumah sakit, makanan yang berminyak, makanan yang berlemak, makanan dan minuman&nbsp; yang manis, bau yang menyengat, makanan dengan tekstur yang basah, makanan yang berbau amis. Jika mual muntah dibiarkan maka akan menyebabkan penurunan berat badan.</p>',	'1693390527.jpg',	'',	'2023-08-30 03:15:27',	'2023-08-30 03:15:27'),
(16,	'edukasi',	'efek-samping',	'Konstipasi / sembelit  ',	'<p>Hal ini dirasakan oleh pasien yang menjalani kemoterapi yaitu berupa feses yang keluar dengan jumlah yang sedikit, teksturnya keras, kecil bahkan bisa disertai dengan darah. Konstipasi biasanya terjadi selama kurang lebih satu minggu</p>',	'1693390736.jpg',	'',	'2023-08-30 03:18:56',	'2023-08-30 03:18:56'),
(17,	'edukasi',	'efek-samping',	'Rambut Rontok',	'<p>Pertumbuhan rambut menjadi tidak merata, rambut tipis, tekstur rambut lebih kasar. Biasanya rambut akan rontok saat pasien tidur dan menyisir rambut. Kerontokan terjadi 1 minggu sampai 2 bulan setelah pemberian kemoterapi yang pertama.</p>',	'1693390833.jpg',	'',	'2023-08-30 03:20:33',	'2023-08-30 03:20:33'),
(18,	'edukasi',	'efek-samping',	'Kelelahan',	'<p style=\"text-align:justify;\">Kelelahan dialami sekitar 1 sampai 2 minggu setelah pemberian kemoterapi. Kelelahan biasanya muncul saat berjalan dan melakukan aktivitas berat. Kelelahan dapat terjadi akibat anemia dan nutrisi tidak dipenuhi karena penurunan nafsu makan.&nbsp;</p>',	'1693391045.jpg',	'',	'2023-08-30 03:24:05',	'2023-08-30 03:24:05'),
(19,	'edukasi',	'efek-samping',	'Perubahan Rasa',	'<p>Kualitas rasa akan berkurang yang dideskripsikan sebagai sensasi rasa tidak enak dimulut dan mual. Faktor lain yang berpengaruh adalah kurangnya perawatan mulut, infeksi dan asam lambung&nbsp;</p>',	'1693391118.jpg',	'',	'2023-08-30 03:25:18',	'2023-08-30 03:25:18'),
(20,	'edukasi',	'penganan-efek-samping',	'Mual muntah',	'<p style=\"text-align:justify;\"><i><strong>Pemberian Aromaterapi Jahe&nbsp;</strong></i></p><p style=\"text-align:justify;\"><span style=\"color:black;\">Salah satu terapi komplementer yang dapat digunakan untuk mengurangi mual dan muntah pasien kanker yaitu dengan pemberian aromaterapi jahe. Minyak essensial jahe memiliki manfaat dalam segi obat yang bersifat sebagai anti bakteri, antiv irus, diuretik, penenang dan dapat merangsang adrenal. Komponen tersebut yang akan memberikan efek relaksasi serta memberikan perubahan yang positif.&nbsp;</span><span style=\"color:#231F20;\">Aromaterapi jahe diberikan dengan teknik&nbsp; inhalasi/ dihirup. Pengaplikasian&nbsp;<i>essensial&nbsp; oil&nbsp;</i>dengan cara inhalasi merupakan metode yang dinilai paling efektif, praktis dan&nbsp; memiliki khasiat secara langsung karena&nbsp; dapat dengan mudah masuk ke dalam tubuh. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"color:#333333;\">Terapi ini dilakukan sebanyak 3 kali dalam 3 hari dengan lama pemberian 10 menit.&nbsp;</span><span style=\"color:black;\">Aromaterapi jahe di teteskan pada&nbsp;<i>tissue&nbsp;</i>sebanyak 5&nbsp; tetes, lalu&nbsp;<i>tissue </i>di berikan didalam masker yang sudah disiapkan. Klien bisa pakaikan masker dan diminta klien untuk menghirup aromaterapi jahe selama 10 menit. Pemberian intervensi aromaterapi jahe dilakukan sebanyak 3 kali dalam waktu 3 hari (Prahastyono et al,2022)</span></p>',	'1693391347.jpg',	'',	'2023-08-30 03:29:07',	'2023-08-30 03:29:07'),
(21,	'edukasi',	'penganan-efek-samping',	'Nyeri',	'<p style=\"text-align:justify;\"><span style=\"color:black;\">Nyeri pada pasien kanker merupakan suatu fenomena subjektif yang merupakan gabungan antara faktor fisik dan non fisik. Nyeri dapat berasal dari berbagai bagian tubuh ataupun sebagai akibat dari terapi dan prosedur yang dilakukan termasuk operasi, kemoterapi dan radioterapi.&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\"><i>Hand massage&nbsp;</i>merupakan langkah yang paling efektif untuk meningkatkan relaksasi. <i>Hand massage&nbsp;</i>artinya memberikan stimulasi di bawah jaringan kulit dengan memberikan sentuhan dan tekanan yang lembut untuk memberikan rasa nyaman.</span></p><p><span style=\"color:black;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Teknik untuk melakukan <i>hand massage&nbsp;</i>dapat dilakukan dengan beberapa pendekatan, salah satu metode dilakukan adalah dengan memberikan tekanan lembut dan gesekan di seluruh telapak tangan klien dengan melibatkan gerakan melingkar kecil dengan menggunakan ujung jari atau ibu jari perawat dalam waktu 5-10 menit (Fadillah et al, 2016)</span></p>',	'1693391514.jpg',	'',	'2023-08-30 03:31:54',	'2023-08-30 03:31:54'),
(22,	'edukasi',	'penganan-efek-samping',	'Konstipasi / sembelit',	'<p style=\"text-align:justify;\"><strong>Terapi Herbal&nbsp;</strong></p><p style=\"text-align:justify;\"><span style=\"color:black;\">Minuman herbal dipercaya memiliki khasiat yang bermanfaat untuk penyembuhan penyakit. Dari kemanfaatannya minuman herbal juga dapat dijadikan sebagai minuman pelepas dahaga sekaligus sebagai obat dengan bahan herbal yang dapat mencegah dan mengobati penyakit.&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">Lidah buaya (<i>Aloe vera L</i>) merupakan tanaman yang dapat mengatasi berbagai masalah kesehatan salah satunya gangguan pada sistem pencernaan. Mengkomsumsi lidah buaya tanpa rasa akan membuat sediaan menjadi kurang diminati, sehingga jeruk lemon menjadi alternatif pilihan untuk minuman herbal ini. Jeruk lemon tidak dikonsumsi secara langsung, melainkan banyak digunakan sebagai perasa alami, serta penguat citarasa pada makanan maupun minuman. Alat yang digunakan adalah pisau, panci, kompor, blender, sendok, timbangan, gelas ukur, talenan, batang pengaduk, baskom. Sementara bahan yang digunakan adalah lidah buaya, lemon, kayu manis, gula dan air. Tahapan pembuatan minuman yaitu:</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">1. Lidah buaya dicuci hingga bersih&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">2. Daging lidah buaya direndam dalam air garam selama 1 jam&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">3. Lidah buaya dihancurkan menggunakan blender, disaring untuk memisahkan sari dan ampasnya&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">4. Buah lemon diperas untuk diambil sarinya, lalu disisihkan&nbsp;</span></p><p style=\"text-align:justify;\"><span style=\"color:black;\">5. Daging lidah buaya dicampur dengan sari lemon, kayu manis dan variasi gula</span></p><p><span style=\"color:black;\">(Novananda et al, 2022)</span></p>',	'1693391606.jpg',	'',	'2023-08-30 03:33:26',	'2023-08-30 03:37:24'),
(23,	'edukasi',	'penganan-efek-samping',	'Rambut Rontok',	'<p style=\"text-align:justify;\"><strong>Terapi Herbal&nbsp;</strong></p><p style=\"text-align:justify;\"><span style=\"color:black;\">Terdapat bahan bahan alami yang dapat digunakan untuk mengatasi kerontokan rambut, diantaranya adalah Kemiri (<i>Aleurites moluccana W</i>) merupakan salah satu tanaman tahunan yang termasuk dalam famili <i>Euporbiaceae&nbsp;</i>(jarak-jarakan). Kemiri mengandung sejumlah zat kimia yang berkhasiat untukmenyuburkan rambut, menghitamkan rambut secara alami. Kemiri dapat disangrai kemudian diperas. Minyak kemiri juga sudah bisa dijangkau di beberapa supermarket terdekat. Cara penggunaannya minyak kemiri yaitu oleskan minyak kemiri ke seluruh rambut dan kulit kepala, lalu diamkan beberapa saat atau semalaman. Setelah itu bilas menggunakan sampo hingga bersih. (Sari,et al 2016)</span></p>',	'1693391705.jpg',	'',	'2023-08-30 03:35:05',	'2023-08-30 03:35:05'),
(24,	'edukasi',	'penganan-efek-samping',	'Kelelahan',	'<p style=\"text-align:justify;\"><strong>Terapi Foot Massage&nbsp;</strong></p><p style=\"text-align:justify;\">&nbsp;</p>',	'1693391811.jpg',	'https://youtu.be/mk42E0lZbII',	'2023-08-30 03:35:55',	'2023-08-30 03:36:51'),
(25,	'edukasi',	'umum',	'Definisi kemoterapi ',	'<p style=\"text-align:justify;\">Kemoterapi berarti penggunaan bahan kimia dalam menghambat perkembangan sel ganas atau agen infeksi dari penyakit seperti mikro-organisme tanpa mempengaruhi sel inang&nbsp;(Chabner &amp; Longo, 2018)</p>',	'1693392647.jpg',	'',	'2023-08-30 03:49:44',	'2023-08-30 03:50:47'),
(26,	'edukasi',	'terapi',	'Terapi Alam',	'<ol><li style=\"text-align:justify;\">Menikmati udara segar dengan jalan pagi. Menghirup udara segar dapat dilakukan sebelum tidur dan setelah bangun dipagi hari&nbsp;</li><li style=\"text-align:justify;\">Berjemur, karena sinar matahari dapat menghangatkan tubuh, menenangkan saraf, mematikan kuman, melemaskan pembuluh darah, dan memulihkan tenaga.&nbsp;</li><li style=\"text-align:justify;\">Minum air 5-10 gelas/hari, merawat tanaman, konsumsi sayur dan buah&nbsp;</li></ol>',	'1693392927.jpg',	'',	'2023-08-30 03:52:57',	'2023-08-30 03:55:50'),
(27,	'edukasi',	'terapi',	'cvcv',	'<p>ggfg</p>',	'1693393023.jpg',	'',	'2023-08-30 03:57:03',	'2023-08-30 03:57:03'),
(28,	'edukasi',	'terapi',	'ffggfg',	'<p>gdgfgfgf</p>',	'1693393047.jpg',	'',	'2023-08-30 03:57:27',	'2023-08-30 03:57:27'),
(29,	'edukasi',	'terapi',	'aaaaaaaaaavcvcvcvc',	'<p>ccvcv</p>',	'1693393112.jpg',	'',	'2023-08-30 03:57:54',	'2023-08-30 03:58:32');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2023_08_20_142504_create_sessions_table',	1),
(7,	'2023_08_20_144740_create_cancer_categories_table',	2),
(10,	'2023_08_20_194551_create_cancer_details_table',	3),
(13,	'2023_08_20_203209_create_patients_table',	4),
(14,	'2023_08_20_210704_create_articles_table',	5),
(15,	'2023_08_20_210704_create_education_articles_table',	6);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `patient_biodatas`;
CREATE TABLE `patient_biodatas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `age` int DEFAULT NULL,
  `gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancer_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancer_stadium` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `patient_biodatas` (`id`, `name`, `age`, `gender`, `address`, `phone`, `cancer_name`, `cancer_stadium`, `created_at`, `updated_at`) VALUES
(27,	'Jayya Bayya',	12,	'pria',	'Jakarta',	'081234567890',	'[\"Kanker Payudara\",\"Kanker Usus\",\"Kanker Lainnya\"]',	NULL,	'2023-08-30 08:45:26',	'2023-08-30 08:45:26'),
(28,	'Jayya Bayya',	12,	'pria',	'Jakarta',	'081234567890',	'[\"Kanker Lainnya\"]',	2,	'2023-08-30 08:55:38',	'2023-08-30 08:55:38'),
(29,	'Jayya Bayya',	12,	'pria',	'Jakarta',	'081234567890',	'\"Hati\"',	2,	'2023-08-30 09:07:55',	'2023-08-30 09:07:55'),
(30,	'Jayya Bayya',	12,	'pria',	'Jakarta',	'081234567890',	'\"Hati\"',	2,	'2023-08-30 09:08:17',	'2023-08-30 09:08:17'),
(31,	'Jayya Bayya',	12,	'pria',	'Jakarta',	'081234567890',	'\"Hati\"',	2,	'2023-08-30 09:09:17',	'2023-08-30 09:09:17');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('d6UmJRIBytfbSyUms0Z2B9fzSiCjZWtuLKzQoW38',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY0JaM2dodk5wNG1pem1hU2hDS1hnUjRVc01oRU8wcGZIcHBqNjJGbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjEwOiJodHRwOi8vbG9jYWxob3N0L2NoZW1vY2FyZS9wdWJsaWMvbGl2ZXdpcmUvcHJldmlldy1maWxlL2ZJMWt0WnRtd290a3IxRVp4UWFSQ1JzZGR3UnJnQi1tZXRhZEdWeVlYQnBMV0ZzWVcwdWFuQm4tLmpwZz9leHBpcmVzPTE2OTMzOTQ5MDgmc2lnbmF0dXJlPTliMGQ4ZjQxYTY0YzE4MmFiMDg0MTdhMzBlODI3MzljMTk3YzlhNzYxNDVmZTQ2NTE4NmI4N2I3ODI2ZTY5MjkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YToxOntpOjA7czo3OiJtZXNzYWdlIjt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDR2SFlBejduS1IzSVlFVUFSSi5GcHV1MC9ZUVBQcWpaOW1zOHdzQmE5Q0xWWExRY05WVDF5Ijt9',	1693393112);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'master',	'master@gmail.com',	NULL,	'$2y$10$4vHYAz7nKR3IYEUARJ.Fpuu0/YQPPqjZ9ms8wsBa9CLVXLQcNVT1y',	'eyJpdiI6Ik1maXhmbVorUHpUYnkrcXdiYXpZckE9PSIsInZhbHVlIjoiOEVTZzhhZ3hXTEVGakVhSmMxZ1M5b2FWMjBOVDMvbzB6Vm5SS2hrK1NkVT0iLCJtYWMiOiI4NGFiMDFhNmUwZWU3ZjE3NzE1MmU4MTM2NmQzYzQyNGVmZTMxNjRkYjYzYzI1MGIzYmY5ZGZlNDQ5MzJmOWExIiwidGFnIjoiIn0=',	'eyJpdiI6InlHc2pCQ0VGbXp3TkQxUWdzVjVSZFE9PSIsInZhbHVlIjoiSkZHV2xmcHBDMGdiWm5JekdWcjZVZlJMMnBmVk0rSkJRNzEzU0F5aURtbThzM3d2N2k4aFBzWkhiVUZkLzhTdHRpTU1vODZ2Ymd0TFpnakZBZER4YlViK2lxZG54Ti9ycXJwUkRaYWw2TEdoMEowcnA1SmxOMXlvMVlUNE5iN1JNUCtrMERKR2t2YmNGckJDVGNvTDFCNW1YOFZYVjRvSW5qaFRtODZMZzJCTWVoV1RTR0p0QTVNTkJtMDRYdkxaVU1KT29TeEZHb0ZGbTByWXRwQmpsK25YZmJhdDd4SDJ0bER5dGhiSElPd3ZCWk1sQmNFNVFyTDBCb2t0VkNSWFoydlRlUEMrZXlGVGpBQ0R5d2tXN0E9PSIsIm1hYyI6ImU2MzBkNTIwNzkyZTI2ODg5ZDY5M2MxZjNmNzdlZmRiMjZmZmZlYzMyMDc0ODMzM2Q1Zjc1ZGUxNjcxNjNiOTUiLCJ0YWciOiIifQ==',	NULL,	'jiJVbKEXz75mhatlfq9m6QDTRcU0V6ceAwsL8boAShJe7qc6InTfpyRSWXzc',	NULL,	NULL,	'2023-08-20 07:39:51',	'2023-08-21 07:27:55');

-- 2023-08-30 11:01:23
