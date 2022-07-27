-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2020 pada 06.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahu_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Buku', 'buku', NULL, NULL),
(5, 'Fashion', 'fashion', NULL, NULL),
(6, 'Elektronik', 'elektronik', NULL, NULL),
(24, 'Handphone', 'handphone', '2020-04-17 10:58:01', '2020-04-17 10:58:01'),
(25, 'Android', 'android', '2020-04-17 10:58:16', '2020-04-17 10:58:16'),
(26, 'Software', 'software', '2020-04-17 11:00:13', '2020-04-17 11:00:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('syaiful.kiara@gmail.com', '$2y$10$CBJe.fD.xIFsGE0B2WzuNuTNYu5nW9OXfePGS1ti/NB7KI8A54inG', '2020-04-15 09:43:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `gambar`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(3, 'Cek Poin Andromax A', 6, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing oftware like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'public/uploads/posts/1586791151test_point.jpg', '2020-04-13 08:19:11', '2020-04-18 10:24:27', 'cek-poin-andromax-a', NULL, 1),
(5, 'Power Amplifier Badak', 6, 'Lorem Ipsum is simply dummy text \r\nof the printing and typesetting industry.\r\n Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley \r\nof type and scrambled it to make a type\r\n specimen book. It has survived \r\nnot only five centuries, but also the leap \r\ninto electronic typesetting, remaining\r\n essentially unchanged. It was \r\npopularised in the 1960s with the\r\n release of Letraset sheets containing\r\n Lorem Ipsum passages, and more \r\nrecently with desktop publishing \r\noftware like Aldus PageMaker\r\n including versions of Lorem Ipsum.', 'public/uploads/posts/1587059309FB_IMG_1576328520800.jpg', '2020-04-13 09:22:44', '2020-04-17 11:06:02', 'power-amplifier-badak', NULL, 1),
(6, 'Skema LED Hemat Energi', 6, 'Lorem Ipsum is simply dummy text \r\nof the printing and typesetting industry.\r\n Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley \r\nof type and scrambled it to make a type\r\n specimen book. It has survived \r\nnot only five centuries, but also the leap \r\ninto electronic typesetting, remaining\r\n essentially unchanged. It was \r\npopularised in the 1960s with the\r\n release of Letraset sheets containing\r\n Lorem Ipsum passages, and more \r\nrecently with desktop publishing \r\noftware like Aldus PageMaker\r\n including versions of Lorem Ipsum.', 'public/uploads/posts/1586892232FB_IMG_1575726319669.jpg', '2020-04-13 21:06:53', '2020-04-17 11:06:13', 'skema-led-hemat-energi', NULL, 1),
(11, 'contoh ampli 5000', 6, 'Lorem Ipsum is simply dummy text \r\nof the printing and typesetting industry.\r\n Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley \r\nof type and scrambled it to make a type\r\n specimen book. It has survived \r\nnot only five centuries, but also the leap \r\ninto electronic typesetting, remaining\r\n essentially unchanged. It was \r\npopularised in the 1960s with the\r\n release of Letraset sheets containing\r\n Lorem Ipsum passages, and more \r\nrecently with desktop publishing \r\noftware like Aldus PageMaker\r\n including versions of Lorem Ipsum.', 'public/uploads/posts/1587146183FB_IMG_1565359301534.jpg', '2020-04-14 12:30:01', '2020-04-17 11:06:23', 'contoh-ampli-5000', NULL, 1),
(12, 'Cemberut Aje', 3, 'Lorem Ipsum is simply dummy text \r\nof the printing and typesetting industry.\r\n Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley \r\nof type and scrambled it to make a type\r\n specimen book. It has survived \r\nnot only five centuries, but also the leap \r\ninto electronic typesetting, remaining\r\n essentially unchanged. It was \r\npopularised in the 1960s with the\r\n release of Letraset sheets containing\r\n Lorem Ipsum passages, and more \r\nrecently with desktop publishing \r\noftware like Aldus PageMaker\r\n including versions of Lorem Ipsum.', 'public/uploads/posts/1586944228FB_IMG_1574917972020.jpg', '2020-04-15 02:50:28', '2020-04-17 11:06:31', 'cemberut-aje', NULL, 1),
(13, 'Judul berita kedua', 6, 'Lorem Ipsum is simply dummy text \r\nof the printing and typesetting industry.\r\n Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley \r\nof type and scrambled it to make a type\r\n specimen book. It has survived \r\nnot only five centuries, but also the leap \r\ninto electronic typesetting, remaining\r\n essentially unchanged. It was \r\npopularised in the 1960s with the\r\n release of Letraset sheets containing\r\n Lorem Ipsum passages, and more \r\nrecently with desktop publishing \r\noftware like Aldus PageMaker\r\n including versions of Lorem Ipsum.', 'public/uploads/posts/1587146043IMG_20200222_085145.jpg', '2020-04-17 10:53:06', '2020-04-17 11:06:39', 'judul-berita-kedua', NULL, 1),
(14, 'contoh', 6, '<p><strong>contoh</strong></p>\r\n\r\n<p><strong>satu</strong></p>\r\n\r\n<p><strong>dua</strong></p>\r\n\r\n<p><strong>tiga</strong></p>', 'public/uploads/posts/1587229987FB_IMG_1566838813846.jpg', '2020-04-18 10:13:07', '2020-10-03 21:39:30', 'contoh', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 5, 4, NULL, NULL),
(4, 6, 5, NULL, NULL),
(9, 3, 4, NULL, NULL),
(10, 7, 6, NULL, NULL),
(11, 8, 4, NULL, NULL),
(12, 9, 5, NULL, NULL),
(13, 10, 5, NULL, NULL),
(14, 11, 5, NULL, NULL),
(15, 12, 5, NULL, NULL),
(16, 13, 6, NULL, NULL),
(17, 3, 9, NULL, NULL),
(18, 5, 9, NULL, NULL),
(19, 6, 6, NULL, NULL),
(20, 11, 6, NULL, NULL),
(21, 14, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Pendidikan', 'pendidikan', '2020-04-12 15:55:22', '2020-04-12 15:56:13'),
(5, 'Fashion Pria', 'fashion-pria', '2020-04-12 15:55:35', '2020-04-12 15:56:30'),
(6, 'Makanan', 'makanan', '2020-04-12 15:55:39', '2020-04-17 11:00:45'),
(9, 'Flashing', 'flashing', '2020-04-17 11:01:14', '2020-04-17 11:01:14'),
(10, 'Tutorial', 'tutorial', '2020-04-17 11:02:31', '2020-04-17 11:02:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe`) VALUES
(1, 'Syaiful Kiara', 'syaiful.kiara@gmail.com', NULL, '$2y$10$9qQPls8NE3eI1fcTL/GEF.jlR2FCiCr7jKbHS1K8JW4rutNqaqwkS', NULL, '2020-04-15 08:27:55', '2020-04-15 08:27:55', 1),
(7, 'Daffian', 'daffian@mail.com', NULL, '$2y$10$n58eHwr//nb8UOIg7p4eTeRe93qNW2lMEYB2BGTod8yOGN.ZtzF/u', NULL, '2020-04-15 10:36:06', '2020-04-15 10:36:06', 0),
(8, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$gV3BS.4OcYFbWgqqoioKJ.Tb/3POeqgIGw4V4BWpbtIh0U9nyjKom', NULL, '2020-04-15 10:36:17', '2020-04-15 10:36:17', 0),
(9, 'Luthfi', 'luthfi@gmail.com', NULL, '$2y$10$K8BRVfF6OpzmACKGANz2geRre06pd3khgJecj3NOotnlXEG9Il1nS', NULL, '2020-04-15 10:36:28', '2020-04-15 10:36:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
