-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 14.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skensos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `countdowns`
--

CREATE TABLE `countdowns` (
  `id_countdown` bigint(20) UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `countdowns`
--

INSERT INTO `countdowns` (`id_countdown`, `bulan`, `tanggal`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'October', 20, 2023, '2023-07-18 12:06:45', '2023-10-20 08:34:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapilketos`
--

CREATE TABLE `datapilketos` (
  `id_datapilketos` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` int(11) NOT NULL,
  `tanggal_dimulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitassekolahs`
--

CREATE TABLE `identitassekolahs` (
  `id_identitassekolah` bigint(20) UNSIGNED NOT NULL,
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_jalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identitassekolahs`
--

INSERT INTO `identitassekolahs` (`id_identitassekolah`, `npsn`, `nama_sekolah`, `alamat_jalan`, `desa`, `kecamatan`, `kabupaten`, `kepala_sekolah`, `nip`, `created_at`, `updated_at`) VALUES
(1, 12345, 'SMKN 1 DENPASAR', 'Jl. Cokroaminoto No.84, Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116', 'Pemecutan Kaja', 'Denpasar Utara', 'Kota Denpasar', 'I Wayan Mustika, S.Pd., M.Pd.', 54321, '2023-07-18 12:06:45', '2023-07-18 12:06:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidats`
--

CREATE TABLE `kandidats` (
  `id_kandidat` bigint(20) UNSIGNED NOT NULL,
  `nisn` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dipilih` int(11) NOT NULL DEFAULT 0,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kandidats`
--

INSERT INTO `kandidats` (`id_kandidat`, `nisn`, `no`, `nama`, `foto`, `dipilih`, `nama_panggilan`, `visi_misi`, `created_at`, `updated_at`) VALUES
(1, 29689, 1, 'Kandidat Pertama', '061223010254student.jpg', 2, 'Pertama', '<p><strong>Visi:</strong></p>\r\n\r\n<p><strong>Mewujudkan Sekolah yang Berkembang dengan Kreativitas dan Kepemimpinan</strong></p>\r\n\r\n<p><strong>Misi:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mendorong Inovasi Pendidikan:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mengembangkan program-program pelatihan dan lokakarya inovatif bagi siswa dan guru untuk mendorong kreativitas dan kepemimpinan di sekolah.</li>\r\n		<li>Menyediakan platform untuk siswa untuk mengembangkan dan berbagi ide-ide inovatif yang dapat memperbaiki pengalaman belajar.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pemberdayaan Siswa:</strong></p>\r\n\r\n	<ul>\r\n		<li>Membentuk forum siswa yang aktif untuk mendorong partisipasi dan keterlibatan dalam pengambilan keputusan sekolah.</li>\r\n		<li>Membangun program mentor-murid untuk membantu siswa dalam pengembangan soft skill, kecerdasan emosional, dan kemampuan kepemimpinan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kesejahteraan Siswa:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mengadvokasi kebijakan yang mendukung kesejahteraan siswa, termasuk peningkatan kualitas makanan di kantin, akses ke konseling dan dukungan mental, serta kegiatan-kegiatan kesejahteraan.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sarana dan Prasarana:</strong></p>\r\n\r\n	<ul>\r\n		<li>Memastikan fasilitas sekolah yang baik dengan upaya perbaikan dan pemeliharaan rutin.</li>\r\n		<li>Mendorong penggunaan teknologi modern dalam proses pembelajaran dengan memastikan ketersediaan perangkat dan akses internet yang baik.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kemitraan Sekolah-Komunitas:</strong></p>\r\n\r\n	<ul>\r\n		<li>Membangun hubungan yang kuat antara sekolah dan komunitas lokal melalui program-program sosial, kebersihan lingkungan, dan kegiatan amal.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Transparansi dan Akuntabilitas:</strong></p>\r\n\r\n	<ul>\r\n		<li>Membuka komunikasi yang lebih transparan antara pengurus OSIS, siswa, guru, dan orang tua untuk menjaga akuntabilitas dalam pengelolaan sumber daya dan proyek-proyek sekolah.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengembangan Budaya Sekolah:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mendorong budaya sekolah yang inklusif, mendukung, dan ramah siswa di mana semua siswa merasa diterima dan dihargai.</li>\r\n	</ul>\r\n	</li>\r\n</ol>', '2023-10-13 21:28:34', '2023-12-06 05:03:48'),
(2, 29686, 2, 'Kandidat Kedua', '061223011242beautiful-smiling-korean-woman-hat-pointing-finger-left-showing-information-banner-demonstrates-o.jpg', 1, 'Kedua', '<p><strong>Visi:</strong> &quot;Membangun Sekolah yang Inspiratif dan Harmonis&quot;</p>\r\n\r\n<p><strong>Misi:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mendorong Kepemimpinan dan Partisipasi Siswa:</strong></p>\r\n\r\n	<ul>\r\n		<li>Memberikan pelatihan kepemimpinan kepada anggota OSIS dan seluruh siswa untuk mengembangkan potensi mereka.</li>\r\n		<li>Mendorong partisipasi aktif siswa dalam kegiatan sekolah dan pengambilan keputusan yang memengaruhi mereka.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menciptakan Suasana Sekolah yang Inklusif:</strong></p>\r\n\r\n	<ul>\r\n		<li>Memastikan semua siswa merasa diterima dan dihormati tanpa memandang latar belakang, identitas, atau kepercayaan mereka.</li>\r\n		<li>Mengadakan kegiatan yang mempromosikan keberagaman dan keragaman budaya di antara siswa.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Memajukan Prestasi Akademik dan Kreativitas:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mendukung program-program pendidikan yang memberikan bantuan kepada siswa untuk meningkatkan prestasi akademik mereka.</li>\r\n		<li>Mengadakan kegiatan seni, budaya, dan ilmiah yang mendorong kreativitas siswa.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Meningkatkan Kualitas Hidup Sekolah:</strong></p>\r\n\r\n	<ul>\r\n		<li>Berperan aktif dalam memperbaiki fasilitas dan lingkungan sekolah.</li>\r\n		<li>Mengorganisir kegiatan yang meningkatkan semangat dan rasa bangga siswa terhadap sekolah mereka.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mengembangkan Kepedulian Sosial:</strong></p>\r\n\r\n	<ul>\r\n		<li>Mengadakan kegiatan amal dan pelayanan masyarakat yang melibatkan siswa dan memberikan dampak positif pada komunitas sekitar.</li>\r\n		<li>Mendorong siswa untuk menjadi warga yang bertanggung jawab dan peduli terhadap masalah sosial.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Komunikasi dan Keterbukaan:</strong></p>\r\n\r\n	<ul>\r\n		<li>Menjaga komunikasi terbuka dengan siswa, guru, dan staf sekolah.</li>\r\n		<li>Mendengarkan masukan dan umpan balik dari semua pihak dalam upaya untuk terus memperbaiki sekolah.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Keberlanjutan dan Tanggung Jawab Lingkungan:</strong></p>\r\n\r\n	<ul>\r\n		<li>Memimpin usaha untuk menjadikan sekolah lebih berkelanjutan dengan mengurangi jejak lingkungan.</li>\r\n		<li>Menggalakkan praktik keberlanjutan di kalangan siswa dan staf.</li>\r\n	</ul>\r\n	</li>\r\n</ol>', '2023-10-13 21:29:16', '2023-12-06 05:12:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'X RPL 1', '2023-07-18 12:06:45', '2023-07-18 12:06:45'),
(2, 'XI RPL 1', '2023-07-18 12:06:45', '2023-07-18 12:06:45'),
(3, 'XII RPL 1', '2023-07-18 12:06:45', '2023-07-18 12:06:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_05_031555_create_countdowns_table', 1),
(6, '2023_07_05_055559_create_datapilketos_table', 1),
(7, '2023_07_05_055856_create_identitassekolahs_table', 1),
(8, '2023_07_05_060416_create_kandidats_table', 1),
(9, '2023_07_05_062909_create_kelas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hadir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tidak hadir',
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `username_verified_at`, `password`, `jenis_kelamin`, `kelas`, `hadir`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2023-07-18 12:06:44', '$2y$10$T6DtNgzjvrJyZS6OKxSy5OyYaY0zcz2BUHGr9Owzph3o9Q74zQeYa', '-', '-', '-', 1, 'FZfrkt3LMTOTcfZA0Os11xGzJkj84GHjT6EDFusiNpGXcUilaevwzoIvAbYO', '2023-07-18 12:06:44', '2023-07-18 12:06:44'),
(2, 'admin2', 'admin2', '2023-07-18 12:06:44', '$2y$10$I.bRI1llYsNBJexJsSowhuhlbu/Bwok0rDkbxjf.9cd47ijqL7q8e', '-', '-', '-', 1, 'XFYVg4eGbo', '2023-07-18 12:06:44', '2023-07-18 12:06:44'),
(3, 'admin3', 'admin3', '2023-07-18 12:06:44', '$2y$10$2.4ECJOe0rHlAnmsY9Q3ru08CVcoqfMi0pXx2nJK003H.veMdNlXm', '-', '-', '-', 1, 'VVAggHoAEc', '2023-07-18 12:06:44', '2023-07-18 12:06:44'),
(31, '2335', 'XII RPL 2', '2023-10-13 20:50:08', '$2y$10$cux7X73XADRguLPwLEWMbO5BngYxGR8UsuqASSP9WzFqsvJHWuWVC', 'laki-laki', 'XII RPL 2', 'hadir', 0, NULL, '2023-10-13 20:50:08', '2023-10-18 22:48:08'),
(34, '7295', 'XII RPL 1', '2023-10-13 20:57:04', '$2y$10$ruUXBnMLu0alUtzUZ6A9t.HMqydtWWHclkxEbBtQBBbeG59CHwFNa', 'laki-laki', 'XII RPL 1', 'hadir', 0, NULL, '2023-10-13 20:57:04', '2023-10-18 22:47:45'),
(35, '7219', 'XII RPL 3', '2023-10-13 21:20:25', '$2y$10$OkTkJe7glRJnBLSQ6vAnR.YhIkaGs3/J2JSYJTDYi/a2QOnj2dNTe', 'laki-laki', 'XII RPL 3', 'hadir', 0, NULL, '2023-10-13 21:20:25', '2023-10-18 22:48:53'),
(37, '9357', 'XII MM 2', NULL, '$2y$10$/yISs4kBclhdhKsRKe.oKeYLBkInaD4hD7i88RyVoeKKj/2Zwtcwy', 'Laki-laki', 'XII MM 2', 'tidak hadir', 0, NULL, '2023-10-14 11:15:21', '2023-10-15 15:17:11'),
(41, '6464', 'XII MM 1', '2023-10-18 20:16:19', '$2y$10$Sk8u/94A.8j//HtaL5f40OBCiQNyUjcKguuvBM4wWxDNvQCKJ6gdC', 'laki-laki', 'XII MM 1', 'tidak hadir', 0, NULL, '2023-10-18 20:16:19', '2023-10-18 20:16:19'),
(43, '1935', 'XII TKJ 1', NULL, '$2y$10$85/Ez2YeoHyj45hgTwXif.C/FyHsJpnKlUD6OZaPtrt7nT1YUlrjG', 'laki-laki', 'XII TKJ 1', 'tidak hadir', 0, NULL, '2023-10-18 20:29:22', '2023-10-18 20:29:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `countdowns`
--
ALTER TABLE `countdowns`
  ADD PRIMARY KEY (`id_countdown`);

--
-- Indeks untuk tabel `datapilketos`
--
ALTER TABLE `datapilketos`
  ADD PRIMARY KEY (`id_datapilketos`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `identitassekolahs`
--
ALTER TABLE `identitassekolahs`
  ADD PRIMARY KEY (`id_identitassekolah`);

--
-- Indeks untuk tabel `kandidats`
--
ALTER TABLE `kandidats`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `countdowns`
--
ALTER TABLE `countdowns`
  MODIFY `id_countdown` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datapilketos`
--
ALTER TABLE `datapilketos`
  MODIFY `id_datapilketos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `identitassekolahs`
--
ALTER TABLE `identitassekolahs`
  MODIFY `id_identitassekolah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kandidats`
--
ALTER TABLE `kandidats`
  MODIFY `id_kandidat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
