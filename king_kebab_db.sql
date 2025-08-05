-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 08:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `king_kebab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'King Kebab',
  `status` enum('published','draft') NOT NULL DEFAULT 'published',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `author`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'L\'histoire du Kebab Royal', 'Le Kebab Royal est notre plat signature depuis plus de 20 ans. Cette recette traditionnelle a été transmise de génération en génération dans notre famille.\n\nNotre secret réside dans la sélection rigoureuse des ingrédients. Nous utilisons uniquement de la viande de bœuf de première qualité, marinée pendant 24 heures dans un mélange d\'épices secrètes qui lui donne ce goût unique et authentique.\n\nLa préparation commence tôt le matin, où notre chef prépare la pâte fraîche pour le pain. Chaque kebab est assemblé à la main avec amour, en respectant les proportions parfaites entre la viande, les légumes frais et nos sauces maison.\n\nLes légumes sont sélectionnés quotidiennement auprès de nos fournisseurs locaux pour garantir leur fraîcheur. La salade, les tomates, les oignons et les concombres sont coupés à la main pour préserver leur texture et leur saveur.\n\nNotre sauce spéciale, préparée selon une recette familiale secrète, est le complément parfait qui lie tous les ingrédients ensemble. Elle apporte cette touche finale qui fait de notre Kebab Royal une expérience culinaire inoubliable.\n\nChaque bouchée raconte une histoire - l\'histoire de notre passion pour la gastronomie traditionnelle et notre engagement à offrir à nos clients le meilleur de la cuisine du Moyen-Orient.', NULL, 'Chef Ahmed', 'published', '2025-07-31 14:27:44', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(2, 'Les secrets de notre pâte fraîche', 'La qualité de notre pain est essentielle pour créer le kebab parfait. Chaque jour, notre boulanger commence son travail à l\'aube pour préparer la pâte fraîche qui accompagnera nos kebabs.\n\nNotre recette de pâte utilise une farine de blé dur de haute qualité, mélangée avec de l\'eau tiède, du sel et une pincée de sucre. La pâte est pétrie à la main pendant au moins 15 minutes pour développer le gluten et créer cette texture élastique caractéristique.\n\nAprès le pétrissage, la pâte repose pendant 2 heures dans un endroit chaud et humide. Cette étape cruciale permet à la pâte de lever et de développer ses saveurs. Nous surveillons attentivement la température et l\'humidité pour obtenir la consistance parfaite.\n\nUne fois levée, la pâte est divisée en portions individuelles et façonnée en boules. Chaque boule est ensuite étirée à la main pour former le pain fin et souple qui enveloppera nos kebabs.\n\nLa cuisson se fait sur une plaque chaude traditionnelle, donnant au pain cette texture légèrement croustillante à l\'extérieur et moelleuse à l\'intérieur. Le temps de cuisson est minutieusement contrôlé pour obtenir la couleur dorée parfaite.\n\nCe processus artisanal, transmis de génération en génération, est ce qui distingue notre pain de celui des autres restaurants. Chaque bouchée de notre kebab commence par cette base parfaite, créant une expérience culinaire authentique et mémorable.', NULL, 'Boulanger Hassan', 'published', '2025-08-02 14:27:44', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(3, 'L\'importance des épices dans notre cuisine', 'Les épices sont le cœur de notre cuisine traditionnelle. Chaque épice que nous utilisons a été soigneusement sélectionnée pour sa qualité et son authenticité.\n\nNotre mélange d\'épices secret comprend du cumin, de la coriandre, du paprika, du curcuma et plusieurs autres épices qui créent cette saveur unique caractéristique de notre cuisine. Ces épices sont importées directement des meilleures régions productrices du Moyen-Orient.\n\nLe processus de torréfaction des épices est crucial. Nous torréfions nos épices à basse température pour préserver leurs huiles essentielles et leurs arômes. Cette méthode traditionnelle, transmise de génération en génération, garantit que chaque épice libère son potentiel gustatif maximum.\n\nLa marinade de notre viande utilise un mélange d\'épices spécifiquement dosé pour chaque type de viande. Le bœuf nécessite un mélange différent de celui du poulet, et nous respectons ces nuances pour obtenir le goût parfait.\n\nNous préparons également nos propres mélanges d\'épices pour nos sauces. La sauce blanche, par exemple, contient un mélange secret d\'épices qui lui donne cette saveur distinctive et addictive.\n\nL\'utilisation des épices dans notre cuisine ne se limite pas aux kebabs. Nos pizzas et nos grillades bénéficient également de ces mélanges d\'épices soigneusement élaborés, créant une cohérence gustative dans tout notre menu.\n\nChaque jour, notre chef vérifie la qualité de nos épices et ajuste les proportions selon les saisons et la disponibilité des ingrédients. Cette attention aux détails est ce qui fait de notre cuisine une expérience authentique et mémorable.', NULL, 'Chef Fatima', 'published', '2025-08-04 14:27:44', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(4, 'Notre engagement pour la qualité', 'Chez King Kebab, la qualité n\'est pas seulement un objectif, c\'est notre raison d\'être. Depuis notre ouverture, nous nous engageons à offrir à nos clients les meilleurs ingrédients et les techniques culinaires les plus authentiques.\n\nNotre engagement pour la qualité commence par la sélection rigoureuse de nos fournisseurs. Nous travaillons exclusivement avec des fournisseurs locaux et certifiés qui partagent nos valeurs de qualité et de durabilité.\n\nLa viande que nous utilisons provient d\'éleveurs locaux qui respectent les plus hauts standards de bien-être animal. Nous privilégions la viande bio et les pratiques d\'élevage respectueuses de l\'environnement.\n\nNos légumes sont sélectionnés quotidiennement auprès de maraîchers locaux. Nous privilégions les produits de saison et les variétés traditionnelles qui offrent le meilleur goût et la meilleure qualité nutritionnelle.\n\nL\'hygiène et la sécurité alimentaire sont au cœur de nos préoccupations. Notre équipe suit des formations régulières sur les bonnes pratiques d\'hygiène, et notre cuisine respecte les plus hauts standards de sécurité alimentaire.\n\nNous investissons également dans des équipements de qualité professionnelle qui nous permettent de maintenir la fraîcheur et la qualité de nos ingrédients tout au long de la journée.\n\nNotre engagement pour la qualité se reflète également dans notre service client. Chaque membre de notre équipe est formé pour offrir un service attentionné et personnalisé, créant une expérience culinaire complète et mémorable.\n\nNous croyons que la qualité n\'est pas un coût, mais un investissement dans la satisfaction de nos clients et la pérennité de notre entreprise. C\'est pourquoi nous continuons à investir dans les meilleurs ingrédients, les meilleures techniques et le meilleur service.', NULL, 'Directeur Mohammed', 'published', '2025-08-05 14:27:44', '2025-08-05 14:27:44', '2025-08-05 14:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','replied') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `description`, `price`, `category`, `image`, `is_available`, `created_at`, `updated_at`) VALUES
(1, 'Kebab Royal', 'Kebab avec viande de bœuf, salade, tomates, oignons et sauce spéciale', 12.50, 'Kebabs', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(2, 'Kebab Poulet', 'Kebab avec viande de poulet grillée, salade fraîche et sauce tahini', 11.00, 'Kebabs', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(3, 'Kebab Mixte', 'Kebab avec viande de bœuf et poulet, fromage, salade et sauce au choix', 13.50, 'Kebabs', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(4, 'Pizza Margherita', 'Pizza traditionnelle avec tomates, mozzarella et basilic', 15.00, 'Pizzas', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(5, 'Pizza Quatre Fromages', 'Pizza avec quatre types de fromages différents', 18.00, 'Pizzas', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(6, 'Pizza Royale', 'Pizza avec jambon, champignons, poivrons et mozzarella', 16.50, 'Pizzas', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(7, 'Burger Royal', 'Burger avec steak de bœuf, fromage, salade et sauce spéciale', 14.50, 'Burgers', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(8, 'Burger Poulet', 'Burger avec filet de poulet pané, salade et sauce ranch', 13.00, 'Burgers', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(9, 'Coca-Cola', 'Boisson gazeuse rafraîchissante', 3.00, 'Boissons', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(10, 'Fanta', 'Boisson gazeuse à l\'orange', 3.00, 'Boissons', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(11, 'Eau minérale', 'Eau minérale naturelle', 2.50, 'Boissons', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(12, 'Tiramisu', 'Dessert italien traditionnel', 6.50, 'Desserts', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(13, 'Baklava', 'Dessert oriental aux noix et miel', 5.50, 'Desserts', NULL, 1, '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(14, 'Kebab Royal', 'Kebab traditionnel avec viande de bœuf, salade, tomates, oignons et sauce spéciale', 10.00, 'Kebabs', 'menu-1.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(15, 'Kebab Poulet', 'Kebab au poulet grillé avec légumes frais et sauce blanche', 9.50, 'Kebabs', 'menu-2.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(16, 'Kebab Végétarien', 'Kebab végétarien avec falafels, légumes frais et sauce tahini', 8.50, 'Kebabs', 'menu-3.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(17, 'Pizza Margherita', 'Pizza classique avec tomates, mozzarella et basilic frais', 12.00, 'Pizzas', 'menu-4.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(18, 'Pizza Quatre Fromages', 'Pizza gourmet avec quatre variétés de fromages', 14.00, 'Pizzas', 'menu-5.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(19, 'Burger Classic', 'Burger avec steak de bœuf, salade, tomate, oignon et fromage', 11.00, 'Burgers', 'menu-6.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(20, 'Burger Royal', 'Burger premium avec double steak, bacon, fromage et sauce spéciale', 13.50, 'Burgers', 'menu-1.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(21, 'Assiette Grillades', 'Assiette de viandes grillées avec frites et salade', 15.00, 'Grillades', 'menu-2.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(22, 'Poulet Grillée', 'Poulet grillé avec riz et légumes', 12.50, 'Grillades', 'menu-3.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(23, 'Coca-Cola', 'Boisson gazeuse rafraîchissante', 2.50, 'Boissons', 'menu-4.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(24, 'Jus d\'Orange', 'Jus d\'orange frais naturel', 3.00, 'Boissons', 'menu-5.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(25, 'Thé à la Menthe', 'Thé traditionnel à la menthe fraîche', 2.00, 'Boissons', 'menu-6.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(26, 'Café Turc', 'Café turc traditionnel préparé à la perfection', 2.50, 'Boissons', 'menu-1.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(27, 'Limonade', 'Limonade maison rafraîchissante', 3.50, 'Boissons', 'menu-2.png', 1, '2025-08-05 14:27:44', '2025-08-05 14:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kebabs', 'Nos délicieux kebabs traditionnels', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(2, 'Pizzas', 'Pizzas fraîches et savoureuses', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(3, 'Burgers', 'Burgers gourmets', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(4, 'Boissons', 'Boissons rafraîchissantes', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(5, 'Desserts', 'Desserts maison', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(6, 'Kebabs', 'Nos délicieux kebabs traditionnels', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(7, 'Pizzas', 'Pizzas fraîches et savoureuses', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(8, 'Burgers', 'Burgers gourmets', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(9, 'Grillades', 'Viandes grillées à la perfection', '2025-08-05 14:27:44', '2025-08-05 14:27:44'),
(10, 'Boissons', 'Boissons fraîches et chaudes', '2025-08-05 14:27:44', '2025-08-05 14:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_01_01_000001_create_reservations_table', 1),
(5, '2024_01_01_000002_create_menus_table', 2),
(6, '2024_01_01_000003_create_menu_categories_table', 2),
(7, '2024_01_01_000004_create_contacts_table', 2),
(8, '2024_01_01_000005_create_newsletters_table', 2),
(9, '2024_01_01_000006_create_settings_table', 2),
(10, '2024_01_01_000007_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `person` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `message` text DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'King Kebab', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(2, 'site_description', 'Le vrai goût du kebab', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(3, 'contact_email', 'contact@kingkebab.com', '2025-08-05 14:17:20', '2025-08-05 14:17:20'),
(4, 'contact_phone', '0426423743', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(5, 'contact_address', '20, avenue Marcel Nicolas', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(6, 'opening_hours', '11h00 - 23h00', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(7, 'facebook_url', '#', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(8, 'instagram_url', '#', '2025-08-05 14:17:20', '2025-08-05 14:27:43'),
(9, 'twitter_url', '#', '2025-08-05 14:17:20', '2025-08-05 14:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
