-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2026 at 11:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_sections`
--

CREATE TABLE `about_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus_items` json DEFAULT NULL,
  `focus_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tags` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sections`
--

INSERT INTO `about_sections` (`id`, `title`, `intro`, `story_1`, `story_2`, `story_3`, `focus_title`, `focus_items`, `focus_1`, `focus_2`, `focus_3`, `focus_4`, `meta_tags`, `created_at`, `updated_at`) VALUES
(1, 'About Me', 'Junior Cloud Engineer with a backend foundation, focused on production-ready infrastructure and reliable system deployment.', 'I focus on supporting real-world cloud and backend environments, not just writing code. My work involves Linux server setup, environment configuration, and preparing applications for stable deployment.', 'I work with core AWS services such as IAM, VPC, EC2, and S3, applying best practices for access control, networking, and cost awareness in cloud environments.', 'As a junior engineer, I actively build hands-on experience through projects and labs, with a strong focus on learning production operations, monitoring basics, and infrastructure reliability.', 'Professional Focus', '[\"AWS core services: IAM, VPC, EC2, S3\", \"Linux-based cloud deployment & configuration\", \"Secure and reliable backend systems\", \"Production readiness & infrastructure fundamentals\"]', 'Backend system architecture & API design', 'Cloud deployment & server configuration', 'Secure, maintainable web applications', 'Performance optimization & scalability', '[\"Cloud Engineer\", \"AWS IAM\", \"VPC\", \"EC2\", \"S3\", \"Linux Server\", \"Backend Deployment\", \"Infrastructure Basics\"]', '2025-12-27 06:29:55', '2026-01-12 02:20:35'),
(2, 'About Me', 'I’m a Cloud & Backend Engineer focused on designing scalable, maintainable systems with a strong emphasis on clean architecture, performance, and long-term reliability.', 'I specialize in backend development and cloud deployment, working primarily with Laravel, relational databases, and Linux-based server environments.', 'My approach prioritizes system clarity and sustainability — building solutions that are easy to maintain, scale, and evolve as requirements grow.', 'I enjoy translating complex technical challenges into structured, production-ready implementations rather than quick fixes or short-term hacks.', 'Professional Focus', NULL, 'Backend system architecture & API design', 'Cloud deployment & server configuration', 'Secure, maintainable web applications', 'Performance optimization & scalability', '[\"Laravel\", \"MySQL\", \"AWS\", \"Nginx\", \"Linux\"]', '2025-12-27 06:36:54', '2025-12-27 06:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issuer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `credential_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `issuer`, `year`, `description`, `credential_url`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Creativity: Meningkatkan Keterampilan Berpikir Kreatif', 'GameLab Indonesia', 2025, 'Menunjukkan kemampuan untuk menerapkan teknik berpikir kreatif, strategi pemecahan masalah, dan pendekatan inovatif untuk menghasilkan solusi yang efektif dan orisinal dalam berbagai konteks.', NULL, 'certificates/sxaWykyZusFJqxNObc0BQ7heCwfrtiCx6dyEOwWN.png', '2025-12-29 07:26:57', '2025-12-29 07:54:46'),
(4, 'Swift: Pemrograman Dasar', 'GameLab Indonesia', 2025, 'Menunjukkan keterampilan pemrograman dasar menggunakan Swift, termasuk sintaksis, struktur kontrol, fungsi, dan logika aplikasi dasar untuk pengembangan iOS.', NULL, 'certificates/d7k3YZuNTBuAzsXW1RRW5OQ01QB7jAehTwnkQg3V.png', '2025-12-29 07:28:16', '2025-12-29 07:55:44'),
(5, 'JavaScript untuk Game Development', 'GameLab Indonesia', 2025, 'Menunjukkan kemampuan dalam menggunakan JavaScript untuk pengembangan game, termasuk penulisan skrip logika game, penanganan interaksi, dan implementasi fitur gameplay.', NULL, 'certificates/PBz8dXJ5knA4NRI0MNuKY4A6DM5KQUNReaubQego.png', '2025-12-29 07:30:38', '2025-12-29 07:58:12'),
(6, 'Game 3D: Three.js', 'GameLab Indonesia', 2025, 'Memverifikasi kemampuan untuk mengembangkan aplikasi interaktif 3D menggunakan Three.js, termasuk pembuatan scene, pencahayaan, pengendalian kamera, dan manipulasi objek 3D dasar.', NULL, 'certificates/qwWS2Jm6mWcT62qhq4YW0vLtTtLXHR4Vl4hZe0Ia.png', '2025-12-29 07:32:12', '2025-12-29 08:00:24'),
(7, 'Game 2D: Phaser Game Framework', 'GameLab Indonesia', 2025, 'Memverifikasi kemampuan dalam mengembangkan permainan 2D menggunakan kerangka kerja Phaser, termasuk manajemen aset, fisika, animasi, dan mekanika permainan interaktif.', NULL, 'certificates/9XSxU3jtrQZreP22iH6oWTcsLOsq3PxpxHNFPJxC.png', '2025-12-29 08:01:07', '2025-12-29 08:01:07'),
(8, 'Game 3D: C# dan Unity', 'GameLab Indonesia', 2025, 'Membuktikan kemampuan dasar pengembangan game 3D menggunakan C# dan Unity, termasuk pembuatan gameplay, pengelolaan objek, dan logika permainan.', NULL, 'certificates/8vBkO5Ttv1kas4Qjsq1U6pVC5WtXRHtV61PbpruR.jpg', '2025-12-29 08:06:33', '2025-12-29 08:06:33'),
(9, 'Game Fundamental: Construct', 'GameLab Indonesia', 2025, 'Memverifikasi kemampuan dalam mengembangkan permainan 2D menggunakan kerangka kerja Phaser, termasuk manajemen aset, fisika, animasi, dan mekanika permainan interaktif.', NULL, 'certificates/q6OrAnHiq56JxWEhQBykcHs4QPfZntpwvYnrXVPC.png', '2025-12-29 08:08:12', '2025-12-29 08:08:12'),
(10, 'Artificial Intelligence', 'MySkill', 2024, 'Membuktikan pemahaman dasar kecerdasan buatan, konsep AI, serta penerapannya dalam solusi dan sistem digital modern.', NULL, 'certificates/dE0zB9M23etamUwlSrfXPvjTAGPadl67pMKRtqnb.png', '2025-12-29 08:11:26', '2025-12-29 08:11:26'),
(11, 'Basic Database Interaction', 'MySkill', 2024, 'Membuktikan pemahaman dasar interaksi database menggunakan Python, termasuk operasi dasar dan pengelolaan data.', NULL, 'certificates/SThZejnDm84FYvfdIzZzOXUnQEzgO8RC5qItPTbQ.png', '2025-12-29 08:13:51', '2025-12-29 08:13:51'),
(12, 'Xpresso ACP Lite – Python Programming', 'LearningX', 2024, 'Menunjukkan kemampuan dasar pemrograman Python, termasuk tipe data, alur kontrol, fungsi, dan pemecahan masalah dasar menggunakan Python.', NULL, 'certificates/VRoJ7pJopR5FxRVAomWIiZ4yIfyhIc3DvcDRCjQ7.png', '2025-12-29 08:22:23', '2025-12-29 08:22:23'),
(13, 'Xpresso ACP Lite – UI/UX Design and Development', 'LearningX', 2024, 'Menunjukkan pemahaman tentang prinsip-prinsip UI/UX, termasuk desain berpusat pada pengguna, tata letak antarmuka, kegunaan, dan implementasi dasar konsep desain ke dalam produk digital.', NULL, 'certificates/tS2YjCFBibbMKGMjJQLRJlYq4IaVs5y13LuaPVhH.png', '2025-12-29 08:23:29', '2025-12-29 08:23:29'),
(14, 'Xpresso ACP Lite – Mobile Application Development', 'LearningX', 2024, 'Memverifikasi kompetensi dasar dalam pengembangan aplikasi seluler, termasuk struktur aplikasi, implementasi antarmuka pengguna (UI), dan konsep dasar aplikasi seluler.', NULL, 'certificates/9rergmlSmvBwffmJVRHVk8UdljLDgXkmUaSmsk8x.png', '2025-12-29 08:24:01', '2025-12-29 08:24:01'),
(15, 'Xpresso ACP Lite – Web Programming', 'LearningX', 2024, 'Memverifikasi keterampilan pemrograman web dasar, termasuk HTML, CSS, dan struktur dasar aplikasi web.', NULL, 'certificates/NrVWjxjCOvdsXn4BCbtUYKNLwrjFN3tuUnpe2mWm.png', '2025-12-29 08:24:49', '2025-12-29 08:24:49'),
(17, 'Jaringan Komputer Dasar', 'ID-Networkers (IDN.ID)', 2025, 'Menunjukkan pemahaman tentang konsep dasar jaringan komputer, komponen jaringan, dan prinsip konektivitas dasar.', NULL, 'certificates/xDzdJha0wnahMBD6tQdsly38yPP3l8CKiFckFXll.png', '2025-12-29 08:28:25', '2025-12-29 08:28:25'),
(18, 'Cyber Security Dasar', 'ID-Networkers (IDN.ID)', 2025, 'Memverifikasi pemahaman dasar tentang konsep keamanan siber, ancaman umum, dan praktik terbaik keamanan dasar.', NULL, 'certificates/QIqe0WSx4BKAEeecnWibuZrQTaWrBH3ilFZrbokc.png', '2025-12-29 08:29:03', '2025-12-29 08:29:03'),
(20, 'Webinar Unifi: Building the Future of IT', 'ID-Networkers (IDN.ID)', 2025, 'Menunjukkan partisipasi dan pemahaman wawasan perkembangan teknologi dan masa depan industri IT.', NULL, 'certificates/bRZaMarivBHZfDauArT3vl8I0tXNOBOx40n7aIqw.png', '2025-12-29 08:43:27', '2025-12-29 08:44:34'),
(21, 'CSCU Introduction: Securing Email Communication', 'ID-Networkers (IDN.ID)', 2025, 'Menunjukkan pemahaman dasar keamanan email dan praktik perlindungan komunikasi digital.', NULL, 'certificates/icXhBQ0QpC69hyIMRxiMDDxSByj1hlHKHIQ80tCb.png', '2025-12-29 08:44:17', '2025-12-29 08:44:17'),
(22, 'CompTIA IT Fundamentals (FC0-U61) Complete Course', 'Udemy', 2025, 'Memvalidasi pemahaman dasar teknologi informasi, meliputi hardware, software, jaringan, keamanan, dan konsep IT fundamental.', NULL, 'certificates/JzrvmaQJnDmdLCM7ZzJV8p8EWzM2gvU0Ve7DFkEr.png', '2025-12-29 08:47:26', '2025-12-29 08:47:26'),
(23, 'Ethical Hacking: Blockchain & Smart Contract Security 2025', 'Udemy', 2025, 'Membuktikan pemahaman dasar keamanan blockchain dan smart contract, termasuk risiko, celah, dan konsep perlindungan siste', NULL, 'certificates/Vx8cJoHbOaJffuEMNBcHP8WhRhf7ivgsiFYevaxj.png', '2025-12-29 08:48:12', '2025-12-29 08:48:12'),
(24, 'Blockchain and Bitcoin Fundamentals', 'Udemy', 2025, 'Memvalidasi pemahaman dasar teknologi blockchain dan Bitcoin, termasuk konsep desentralisasi dan mekanisme transaksi.', NULL, 'certificates/JCVE93w9VMuYQy9vxmtTTsPsExs2coV8R0cKOVWr.png', '2025-12-29 08:48:53', '2025-12-29 08:48:53'),
(25, 'Practical Web Exploitation for Bug Bounty (Webinar Participation)', 'Linuxhackingid', 2025, 'Berpartisipasi dalam webinar keamanan siber yang berfokus pada teknik eksploitasi web praktis untuk program bug bounty, termasuk penemuan kerentanan, alur kerja eksploitasi, dan kesadaran keamanan untuk deteksi dini pelanggaran.', NULL, 'certificates/iZg0PNqAoxRUXHFUMx7a4LLoMznT5wI56J48ggd7.png', '2025-12-29 08:52:03', '2025-12-29 08:52:03'),
(26, 'Classical Cryptography for Beginner', 'Cyber Academy', 2025, 'Sudah menyelesaikan kursus pengantar yang mencakup konsep-konsep kriptografi klasik, termasuk prinsip-prinsip enkripsi dan dekripsi, sandi substitusi dan transposisi, serta pemikiran kriptografi dasar yang relevan dengan keamanan informasi modern.', NULL, 'certificates/s6lj7WQkv5uOHdGB6tIhCo440yFMNSuUgNDeZVb0.png', '2025-12-29 08:52:54', '2025-12-29 08:52:54'),
(27, 'Introduction to Information Security', 'Cyber Academy', 2025, 'Sudah menyelesaikan kursus pengantar yang mencakup konsep dasar keamanan informasi, termasuk kerahasiaan, integritas, ketersediaan (CIA triad), kesadaran risiko dasar, dan praktik terbaik keamanan.', NULL, 'certificates/ZZPlq0x3FOgwuBMNEGNCBzBasSMIBcGrsG0bKG8R.png', '2025-12-29 08:53:34', '2025-12-29 08:53:34'),
(28, 'FCF – Getting Started in Cybersecurity 3.0', 'Fortinet Training Institute', 2025, 'Pelatihan dasar keamanan siber yang telah diselesaikan, mencakup konsep keamanan inti, pemahaman tentang lanskap ancaman, dasar-dasar keamanan jaringan, dan praktik keamanan dasar yang selaras dengan kerangka kerja keamanan siber Fortinet.', NULL, 'certificates/C44aqyeOmbbn2JbFkIdSnXmsi7E1ZQWVAGW7vSK7.png', '2025-12-29 08:54:37', '2025-12-29 08:54:37'),
(29, 'FCA – FortiGate 7.6 Operator (Self-Paced)', 'Fortinet Training Institute', 2025, 'Sudah menyelesaikan pelatihan praktis tentang operasi firewall FortiGate, termasuk kebijakan keamanan, pengendalian lalu lintas jaringan, konfigurasi firewall, dan manajemen operasional menggunakan FortiOS 7.6.', NULL, 'certificates/n0p8XGH0iMPyJQPYCT2zBOYlmmmfNXdN9Kwb0Ux8.png', '2025-12-29 08:55:12', '2025-12-29 08:55:12'),
(30, 'Make In-house Hacking and Pentesting Lab', 'EC-Council', 2025, 'Selesai mengikuti kursus praktis tentang pembuatan laboratorium hacking dan pengujian penetrasi internal, mencakup pengaturan lingkungan laboratorium, alur kerja pengujian, dan praktik dasar pengujian penetrasi.', NULL, 'certificates/w2JqdbMYwE1VDZONltzTdZCMIrVPIYbD1iTounAe.png', '2025-12-29 08:56:08', '2025-12-29 08:56:08'),
(31, 'SQL Injection Attacks', 'EC-Council', 2025, 'Menyelesaikan kursus khusus tentang teknik serangan SQL Injection, termasuk pemahaman tentang vektor injeksi, metode eksploitasi, dan strategi mitigasi dasar. Memperoleh pengetahuan dasar tentang kerentanan keamanan aplikasi web dan risiko eksploitasi basis data.', NULL, 'certificates/3AaGokljyn1q3TDf7gvFwQxk5AY4T5040Qpy8LQk.png', '2025-12-29 08:56:56', '2025-12-29 08:56:56'),
(32, 'Cisco LABS Crash Course', 'EC-Council', 2025, 'Selesai mengikuti kursus kilat pengenalan yang mencakup konsep laboratorium Cisco, dasar-dasar jaringan, dan pengalaman praktis dalam konfigurasi jaringan dan konsep keamanan.', NULL, 'certificates/1f9G5BfiYTk9y9hRbJKvtr66qZfGr266kGhcL0U1.png', '2025-12-29 08:57:40', '2025-12-29 08:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `highlights` json DEFAULT NULL,
  `tech_stack` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

CREATE TABLE `home_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `role_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_line_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`id`, `role_text`, `headline_line_1`, `headline_line_2`, `description`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'Junior Cloud Engineer · Deployment & Linux Server Support', 'Hi, I’m Rafi Bakhtiar.', 'I help teams deploy and maintain, reliable cloud-based applications.', 'I assist in deploying and maintaining web applications on Linux-based cloud servers. Familiar with AWS EC2, basic networking, environment configuration, and server security. Comfortable working with backend teams to support real production environments.', NULL, '2025-12-27 05:02:48', '2026-01-12 02:12:50'),
(2, 'Cloud & Backend Engineer', 'Building Reliable', 'Scalable Systems', 'I design and deploy backend systems and cloud infrastructure focused on performance, security, and long-term maintainability.', NULL, '2025-12-27 06:28:02', '2025-12-27 06:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_27_120053_create_home_sections_table', 2),
(5, '2025_12_27_132702_create_about_sections_table', 3),
(6, '2025_12_27_133505_add_meta_tags_to_about_sections_table', 4),
(7, '2025_12_27_134632_create_projects_table', 5),
(8, '2025_12_27_135348_update_projects_images_structure', 6),
(9, '2025_12_27_141004_add_thumbnail_to_projects_table', 7),
(10, '2025_12_28_092424_create_skill_categories_table', 8),
(11, '2025_12_28_092545_create_skills_table', 9),
(12, '2025_12_28_131840_add_focus_items_to_about_sections', 10),
(13, '2025_12_28_134334_create_experiences_table', 11),
(14, '2025_12_29_044537_create_certificates_table', 12),
(15, '2025_12_29_045648_add_image_to_certificates_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'indigo',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` json DEFAULT NULL,
  `tags` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `badge_color`, `thumbnail`, `description`, `project_url`, `images`, `tags`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(6, 'Pelaporan Kerusakan', 'Cloud / Web', 'indigo', 'projects/IL1y3e9ToGcnZY9UmOvmtZZubQGJA7KLS5SoumXh.png', 'Aplikasi web pelaporan kerusakan dengan tiga role: siswa, admin, dan teknisi. Siswa membuat laporan kerusakan, admin meninjau dan menyetujui atau menolak laporan, dan teknisi menyelesaikan laporan hingga status berubah menjadi done.\r\n\r\nAplikasi ini dilengkapi dengan sistem login berbasis role untuk keperluan demo, dengan akun sebagai berikut:\r\n- Siswa: username siswa1, password 12345\r\n- Admin: username admin1, password 12345\r\n- Teknisi: username teknisi1, password 12345', 'https://pelaporan.rafibakhtiar.site', '[]', '[\"PHP\", \"MySQL\", \"AWS EC2\", \"Apache\", \"Linux\"]', 1, 1, '2026-01-10 06:23:44', '2026-01-12 03:36:16'),
(7, 'Employee Data Management System', 'Cloud / Web', 'indigo', 'projects/iqGJzIshrpsci94RX6HNYiMrQC98I4g98Hl85ghP.png', 'A Laravel employee management system that allows users to manage employee data through CRUD operations, including adding, editing, viewing, and deleting employee records.', 'https://laravel1.rafibakhtiar.sites', '[]', '[\"Laravel\", \"PHP\", \"MySQL\", \"AWS EC2\", \"Apache\", \"Linux\"]', 1, 2, '2026-01-10 07:08:36', '2026-01-12 03:25:07'),
(8, 'Project Produk Kreatif dan Kewirausahaa (PKK)', 'Web', 'orange', 'projects/iDAAHZOvxSr3fGZnuibtr4BTBKWrjo2KuzIp4cvj.png', 'A modern landing page for D’Rolls – Pancake Roll, showcasing menu highlights, culinary descriptions, and customer engagement sections. The site features a clean navigation menu including Home, Menu, Chefs, and Cart, as well as compelling visuals and product details to attract customers. This project demonstrates web design and frontend implementation skills with responsive layout, compelling content presentation, and food branding focus.', 'https://pkk.rafibakhtiar.site', '[]', '[\"Laravel\", \"AWS EC2\", \"Apache\", \"Linux\"]', 1, 3, '2026-01-10 07:54:07', '2026-01-11 22:37:24'),
(9, 'Student Management Web App (CRUD)', 'Cloud / Web', 'indigo', 'projects/M4dOgA9pdcfaW4QjotGXS7eTrst4BkbCU2qjCxd9.png', 'A PHP native CRUD web application for managing student data, deployed on a Linux cloud server. \r\nThe system supports full Create, Read, Update, and Delete operations with MySQL integration, \r\nsecure database authentication, and Apache virtual host configuration with HTTPS (SSL).', 'https://datasiswa.rafibakhtiar.site', '[]', '[\"PHP\", \"MySQL\", \"CRUD\", \"Cloud\", \"Apache\"]', 1, 4, '2026-01-10 22:21:28', '2026-01-10 22:21:28'),
(10, 'LuxTodo – Personal Task Manager', 'Cloud / Web', 'indigo', 'projects/nKclMVKSXOGLZPvT4wF7Iahfci7KEppBSG64aEqG.png', 'A private task management web app built with Laravel and Tailwind CSS, featuring authentication, per-user data isolation, progress tracking, and a cinematic dark UI. Deployed-ready for AWS EC2.', 'https://todos.rafibakhtiar.site/', '[]', '[\"Laravel\", \"Tailwind CSS\", \"AWS EC2\", \"CRUD\", \"Full Stack\", \"Cloud Deployment\"]', 1, 5, '2026-01-11 22:09:00', '2026-01-11 22:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UEb3jV000wKhhlNk5yfStU5aPHOYSZ1RIz6AH8eU', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS3RWS0xQY2pLdzFrRVJYNkFNbmpLWHdjWWlvTHJFT21GY0RHS2VpZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9wb3J0b2ZvbGlvMi50ZXN0IjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1768215809);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `skill_category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` tinyint UNSIGNED NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_category_id`, `name`, `level`, `value`, `sort_order`, `created_at`, `updated_at`) VALUES
(6, 3, 'AWS IAM (Users, Roles, Permissions – Fundamentals)', 'Beginner', 25, 1, '2026-01-02 08:00:32', '2026-01-02 08:00:32'),
(7, 3, 'Amazon VPC (Networking Basics, Subnets, Routing)', 'Beginner', 25, 2, '2026-01-02 08:00:57', '2026-01-02 08:00:57'),
(8, 3, 'Amazon EC2 (Compute, Security Groups, SSH)', 'Beginner', 25, 3, '2026-01-02 08:01:18', '2026-01-02 08:01:18'),
(9, 3, 'Amazon S3 (Object Storage Basics)', 'Beginner', 25, 4, '2026-01-02 08:01:36', '2026-01-02 08:01:36'),
(11, 3, 'Billing & Cost Awareness (Free Tier)', 'Beginner', 25, 6, '2026-01-02 08:02:05', '2026-01-02 08:02:05'),
(12, 4, 'Linux Server (Ubuntu 24.04 LTS)', 'Beginner', 25, 1, '2026-01-02 08:04:04', '2026-01-02 08:04:04'),
(13, 4, 'SSH & Key-based Access', 'Beginner', 25, 2, '2026-01-02 08:04:36', '2026-01-02 08:04:36'),
(14, 4, 'File System & Permissions', 'Beginner', 25, 3, '2026-01-02 08:04:49', '2026-01-02 08:09:19'),
(15, 4, 'Environment Configuration', 'Beginner', 25, 4, '2026-01-02 08:05:03', '2026-01-02 08:09:00'),
(16, 4, 'Basic Server Security', 'Beginner', 25, 5, '2026-01-02 08:05:15', '2026-01-02 08:05:15'),
(17, 5, 'Laravel (Backend Systems)', 'Intermediate', 55, 1, '2026-01-02 08:05:56', '2026-01-02 08:05:56'),
(18, 5, 'PHP (Server-side)', 'Intermediate', 55, 2, '2026-01-02 08:06:12', '2026-01-02 08:10:11'),
(19, 5, 'MVC Architecture', 'Intermediate', 40, 3, '2026-01-02 08:06:34', '2026-01-02 08:10:39'),
(20, 5, 'Database Integration (MySQL)', 'Intermediate', 50, 4, '2026-01-02 08:06:52', '2026-01-02 08:11:00'),
(21, 6, 'Git & GitHub', 'Beginner', 30, 1, '2026-01-02 08:07:09', '2026-01-02 08:09:40'),
(22, 6, 'Linux CLI (Ubuntu Server)', 'Beginner', 25, 2, '2026-01-02 08:11:51', '2026-01-02 08:11:51'),
(23, 6, 'SSH (key-based access)', 'Beginner', 20, 3, '2026-01-02 08:12:06', '2026-01-02 08:12:06'),
(24, 6, 'Environment Variables (.env)', 'Beginner', 15, 4, '2026-01-02 08:12:30', '2026-01-02 08:13:00'),
(25, 6, 'Basic Server Troubleshooting', 'Beginner', 20, 4, '2026-01-02 08:12:44', '2026-01-02 08:13:11'),
(26, 6, 'Manual Deployment (SSH-based)', 'Beginner', 20, 6, '2026-01-02 08:13:38', '2026-01-02 08:14:38'),
(27, 7, 'Unity & C# (game development fundamentals)', 'Beginner', 30, 1, '2026-01-02 08:19:25', '2026-01-02 08:19:25'),
(28, 7, 'Construct (logic-based game systems)', 'Beginner', 30, 2, '2026-01-02 08:19:46', '2026-01-02 08:19:46'),
(29, 7, 'Phaser.js (2D game development)', 'Intermediate', 50, 3, '2026-01-02 08:20:07', '2026-01-02 08:20:07'),
(30, 7, 'JavaScript (general programming)', 'Beginner', 20, 4, '2026-01-02 08:20:30', '2026-01-02 08:21:52'),
(31, 7, 'Python (Basic Scripting & Fundamentals)', 'Beginner', 20, 5, '2026-01-02 08:21:35', '2026-01-02 08:22:02'),
(32, 7, 'Three.js (3D graphics basics)', 'Beginner', 15, 6, '2026-01-02 08:22:35', '2026-01-02 08:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `skill_categories`
--

CREATE TABLE `skill_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_categories`
--

INSERT INTO `skill_categories` (`id`, `name`, `sort_order`, `created_at`, `updated_at`) VALUES
(3, 'Cloud & Infrastructure', 1, '2026-01-02 07:56:43', '2026-01-02 07:56:43'),
(4, 'Linux & Server Administration', 2, '2026-01-02 07:57:15', '2026-01-02 07:57:15'),
(5, 'Backend & Application Systems', 3, '2026-01-02 07:57:22', '2026-01-02 07:57:22'),
(6, 'Tools & Workflow', 4, '2026-01-02 07:57:45', '2026-01-02 07:57:45'),
(7, 'Additional Technical Background', 5, '2026-01-02 08:17:50', '2026-01-02 08:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-12-27 05:02:48', '$2y$12$II3vR7l7rkKrf9dnCRez3OOHTeqF5nPv0s6.SRjwF236P7GVp2m.y', 'twYMGjrw7H', '2025-12-27 05:02:48', '2025-12-27 05:02:48'),
(2, 'Rafi Bakhtiar Cahyadi', 'rafibakkhtiar@gmail.com', NULL, '$2y$12$hNlqLlaXlSMC0ZWPxSlXT.J33C9CyKQGcyMGky2GpwM5GhJO5a.Fe', NULL, '2025-12-27 05:17:55', '2025-12-27 05:17:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_sections`
--
ALTER TABLE `about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_skill_category_id_foreign` (`skill_category_id`);

--
-- Indexes for table `skill_categories`
--
ALTER TABLE `skill_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_sections`
--
ALTER TABLE `about_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `skill_categories`
--
ALTER TABLE `skill_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_skill_category_id_foreign` FOREIGN KEY (`skill_category_id`) REFERENCES `skill_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
