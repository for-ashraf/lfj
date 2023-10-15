-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2023 at 06:55 PM
-- Server version: 8.0.27
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `amazon_products`
--

DROP TABLE IF EXISTS `amazon_products`;
CREATE TABLE IF NOT EXISTS `amazon_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `featured_image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `affiliate_link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `amazon_products`
--

INSERT INTO `amazon_products` (`id`, `category`, `product_id`, `title`, `description`, `featured_image`, `price`, `affiliate_link`, `created_at`, `updated_at`) VALUES
(5, 'Bracelets', 'change sdasf', 'change asdf', 'change asdfasf', '5.jpg', '238.00', 'https://amzn.to/3Qg76AE', '2023-10-12 18:04:40', '2023-10-12 18:04:40'),
(6, 'Necklaces', 'dsf', 'asdf', 'asdf', '6.jpg', '23.00', 'https://amzn.to/3LZUlYJ', '2023-10-12 18:06:04', '2023-10-12 18:06:04'),
(8, 'Earrings', '23', 'sdsfadf', 'sadfasf', NULL, '32.00', 'sdf', '2023-09-24 09:52:22', '2023-09-24 09:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `api_amazon_products`
--

DROP TABLE IF EXISTS `api_amazon_products`;
CREATE TABLE IF NOT EXISTS `api_amazon_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `access_key` varchar(255) NOT NULL,
  `secret_key` varchar(255) NOT NULL,
  `associate_tag` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text,
  `author_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `author_name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `celebrity_id` int DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `content`, `author_id`, `author_name`, `celebrity_id`, `publication_date`, `category_id`, `featured_image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Unveiling the Allure of Diamond Necklaces', 'Step into a world of elegance and luxury as we explore the mesmerizing beauty of diamond necklaces. From dazzling solitaires to intricate diamond-studded designs, discover how these exquisite pieces can elevate your style and make a statement. Whether you\'re attending a glamorous event or simply want to add a touch of sparkle to your everyday look, diamond necklaces are a timeless choice that never fails to captivate.', '1', 'Muhammad Ashraf', 1, '2023-07-01', 1, '1.jpg', '2023-07-15 14:31:43', '2023-10-15 11:27:40', 0),
(2, 'Choosing the Perfect Engagement Ring: A Symbol of Everlasting Love', 'Embark on a journey to find the perfect engagement ring, a symbol of your everlasting love and commitment. Explore the world of breathtaking diamond cuts, from the classic brilliance of round diamonds to the exquisite sparkle of princess and cushion cuts. Delve into the art of selecting the ideal metal band and setting that complements your partner\'s style and personality. Let us guide you through the process, ensuring that the ring you choose represents the profound love you share and becomes a cherished heirloom for generations to come.', '1', '', 0, '2023-06-15', 2, NULL, '2023-07-15 14:31:43', '2023-08-04 14:02:56', 0),
(3, 'Pearl Jewelry: Timeless Elegance for Every Occasion', 'Immerse yourself in the timeless allure of pearl jewelry, an embodiment of sophistication and grace. From luminous freshwater pearls to exquisite cultured pearls, discover the mesmerizing variety of colors, shapes, and sizes available. Explore how pearls effortlessly transition from delicate bridal accessories to statement pieces that enhance your professional attire or evening ensemble. Unveil the secrets behind their creation and learn how to care for these treasures, ensuring their longevity and radiance throughout the years.', '1', '', 0, '2023-07-10', 1, NULL, '2023-07-15 14:31:43', '2023-08-04 14:02:56', 0),
(4, 'The Timeless Allure of Diamond Necklaces', 'Indulge in the mesmerizing beauty of diamond necklaces that effortlessly capture the essence of elegance and timelessness. From delicate solitaires that radiate brilliance to intricately designed diamond-encrusted necklaces that make a bold statement, explore the exquisite craftsmanship and luxurious appeal of these dazzling pieces. Discover how a diamond necklace can become the centerpiece of your collection, adding a touch of glamour to any occasion.', '1', '', 0, '2023-07-15', 1, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(5, 'The Versatility of Pearl Necklaces', 'Immerse yourself in the enchanting world of pearl necklaces, where sophistication meets versatility. Whether it\'s a classic single-strand necklace that exudes timeless elegance or a modern twist with layered pearls, these lustrous gems effortlessly elevate your style. Dive into the various pearl types, from Akoya pearls to South Sea pearls, and learn how to choose the perfect pearl necklace that complements your unique personality and captures attention wherever you go.', '1', '', 0, '2023-06-20', 1, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(6, 'Dazzling Diamond Earrings: Shimmering Elegance', 'Embrace the brilliance of diamond earrings that frame your face with radiant elegance. From timeless studs that add a subtle sparkle to extravagant chandelier earrings that demand attention, discover the vast array of diamond cuts and settings available. Uncover the art of selecting the perfect pair that enhances your features and complements your personal style, ensuring that every step you take is accompanied by the glimmer of pure sophistication.', '1', '', 0, '2023-07-12', 2, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(7, 'The Art of Statement Earrings: Unleash Your Style', 'Make a bold fashion statement with statement earrings that exude personality and flair. Delve into the realm of oversized hoops, geometric shapes, and intricate designs that allow you to express your unique style. Explore the transformative power of statement earrings, whether you\'re dressing up for a special occasion or seeking to elevate your everyday outfits. Discover how a well-chosen pair of statement earrings can instantly enhance your confidence and showcase your individuality.', '1', '', 0, '2023-06-25', 2, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(8, 'The Timeless Charm of Tennis Bracelets', 'Experience the timeless charm of tennis bracelets, an iconic jewelry piece that epitomizes grace and sophistication. Discover the captivating history behind these elegant bracelets, and explore the wide range of precious gemstones, such as diamonds, emeralds, and sapphires, that embellish their delicate designs. Unveil the versatility of tennis bracelets, whether you wear them alone for a refined touch or stack them with other bracelets to create a fashion-forward statement.', '1', '', 0, '2023-07-18', 3, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(9, 'Stylish and Stackable: Embracing Bangle Bracelets', 'Unleash your creativity and embrace the trend of stackable bangle bracelets that allow you to express your unique style. Explore the diverse range of materials, including sterling silver, gold, and gemstones, that form the foundation of these fashionable accessories. Learn how to mix and match bangles of different sizes, colors, and textures to create a personalized arm candy ensemble that captures attention and exudes confidence.', '1', '', 0, '2023-07-01', 3, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(10, 'Eternal Love: The Symbolism of Engagement Rings', 'Embark on a journey to discover the symbolism behind engagement rings and the eternal love they represent. Explore the captivating world of diamond cuts, including the classic brilliance of round diamonds, the romantic sparkle of princess cuts, and the vintage allure of cushion cuts. Delve into the significance of different precious metals and settings, allowing you to create a ring that perfectly encapsulates your unique love story.', '1', '', 0, '2023-07-08', 4, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(11, 'Celebrate Your Journey: The Beauty of Anniversary Rings', 'Celebrate the milestones of your journey together with exquisite anniversary rings that symbolize love, commitment, and cherished memories. Explore the enchanting designs, such as eternity bands adorned with shimmering diamonds or colorful gemstones that represent each year of togetherness. Discover the joy of selecting an anniversary ring that beautifully commemorates your enduring love and creates a lasting legacy for years to come.', '1', '', 0, '2023-06-10', 4, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(12, 'Timeless Elegance: The Art of Luxury Watches', 'Indulge in the world of luxury watches that seamlessly combine exquisite craftsmanship, timeless design, and impeccable precision. From classic stainless steel timepieces to elegant gold watches adorned with diamonds, discover the allure of these meticulously crafted accessories. Dive into the mechanisms that drive these masterpieces, including automatic and quartz movements, and learn how to choose a luxury watch that becomes a cherished heirloom for generations.', '1', '', 0, '2023-07-05', 5, '12.jpg', '2023-07-15 14:47:51', '2023-10-10 17:26:19', 0),
(13, 'The Perfect Blend: Fashion and Functionality in Sports Watches', 'Explore the perfect blend of fashion and functionality with sports watches that accompany you on all your adventures. From durable materials and water resistance to advanced features like chronographs and GPS, discover the versatility and reliability of sports watches. Whether you\'re exploring the great outdoors or hitting the gym, find a sports watch that matches your active lifestyle without compromising on style.', '1', '', 0, '2023-06-28', 5, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(14, 'Anklets: The Subtle Accessory with a Big Impact', 'Discover the understated charm of anklets, the subtle accessory that adds a touch of elegance and femininity to your every step. Explore the various anklet designs, from delicate chains adorned with charms to beaded creations that capture the essence of bohemian chic. Learn how to style anklets with different footwear choices and embrace the freedom of expression that anklets offer, showcasing your unique personality and impeccable taste.', '1', 'Muhammad Ashraf', 3, '2023-07-13', 6, NULL, '2023-07-15 14:47:51', '2023-10-15 11:17:33', 0),
(15, 'Anklets: A Beach Lover\'s Must-Have', 'Dive into the world of anklets and discover why they are a beach lover\'s must-have accessory. Explore the beach-inspired designs, including seashell charms, starfish pendants, and colorful beads, that capture the essence of the ocean. Learn how to effortlessly incorporate anklets into your beachwear ensemble, elevating your style and channeling a carefree, bohemian vibe that perfectly complements your sun-kissed glow.', '1', '', 0, '2023-06-22', 6, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(16, 'Brooches: Reviving Classic Elegance', 'Step into the world of brooches, a timeless accessory that adds a touch of classic elegance to any ensemble. Explore the exquisite designs, from intricate floral motifs to dazzling gemstone brooches, that transform an outfit into a work of art. Discover how to wear brooches creatively, whether adorning your lapel, cinching a scarf, or adding flair to your favorite handbag, embracing the versatility and sophistication of this iconic jewelry piece.', '1', '', 0, '2023-07-08', 7, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(17, 'Brooches: The Versatile Style Statement', 'Unleash your creativity with brooches, the versatile accessory that allows you to make a style statement in countless ways. From adding a pop of color to a classic blazer to securing a wrap dress with flair, brooches are the epitome of versatility. Explore the various designs and styles available, from vintage-inspired cameos to contemporary geometric shapes, and let your imagination run wild as you experiment with different ways to wear these stunning adornments.', '1', '', 0, '2023-06-12', 7, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(18, 'Pandets: Exquisite Charms That Tell Your Story', 'Discover the allure of pandets, the enchanting charms that allow you to create a personalized jewelry piece reflecting your unique story and passions. Explore the vast selection of pandets available, ranging from delicate symbols to whimsical shapes and colorful gemstones. Learn how to style and combine pandets on bracelets or necklaces to curate a cherished collection that tells a captivating narrative of your life.', '1', '', 0, '2023-07-16', 8, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(19, 'Pandets: A Playful Expression of Your Individuality', 'Embrace the playful side of pandets and celebrate your individuality with these versatile accessories. Dive into the world of cute animal shapes, sparkling birthstones, and symbolic representations that resonate with your personality. Explore how to mix and match pandets on bracelets or create a unique charm necklace that showcases your interests, dreams, and memories, making each pandet a cherished keepsake that reflects who you are.', '1', '', 0, '2023-06-18', 8, NULL, '2023-07-15 14:47:51', '2023-08-04 14:02:56', 0),
(43, 'saf', 'sadf', '1', '', 0, NULL, NULL, 'saf-1.jpg', '2023-08-01 07:38:06', '2023-08-01 07:38:06', 0),
(44, 'asdf', 'asdf', '1', '', 0, NULL, NULL, NULL, '2023-08-01 07:41:12', '2023-08-01 07:41:12', 0),
(45, 'sgd', 'dfg', '1', '', 0, NULL, NULL, NULL, '2023-08-01 07:47:07', '2023-08-01 07:47:07', 0),
(46, 'sdaf', 'sadfsaf', '1', '', 0, NULL, NULL, NULL, '2023-08-01 07:49:43', '2023-08-01 07:49:43', 0),
(49, 'dg', 'dsfgs', '1', '', 0, NULL, NULL, '.jpg', '2023-08-01 08:01:34', '2023-08-01 13:06:00', 0),
(50, 'sadf', 'asdf', '1', '', 0, NULL, NULL, '50.jpg', '2023-08-01 08:02:33', '2023-08-01 08:02:33', 0),
(51, 'sdf', 'dsf', '1', '', 0, NULL, NULL, '51.jpg', '2023-08-03 05:18:13', '2023-08-03 05:18:13', 0),
(56, 'sadf data', 'asdf data', '1', NULL, 0, NULL, 1, '56.jpg', '2023-08-06 19:08:02', '2023-08-13 08:51:25', 0),
(58, 'safd', 'sadfsdf', '1', 'Muhammad Ashraf', 0, NULL, 1, '58.jpg', '2023-08-06 19:35:23', '2023-08-06 19:35:23', 0),
(59, 'sadf--Edited', 'asdf-Edited', '1', 'Shahzad Ansar', 0, '2023-08-07', 3, '59.jpg', '2023-08-06 19:38:50', '2023-08-07 05:50:43', 0),
(60, 'asd', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-08-13', 1, '60.png', '2023-08-13 08:47:04', '2023-08-13 08:47:04', 0),
(61, 'asdf asdf', 'sadf asdf&nbsp; &nbsp; &nbsp;sdfasd&nbsp; &nbsp; &nbsp; asdf', '1', 'Muhammad Ashraf', NULL, '2023-08-13', 3, '61.jpg', '2023-08-13 08:49:33', '2023-10-15 12:22:19', 0),
(62, 'dfdf 2 checking', 'asdf 2 checking', '1', 'Muhammad Ashraf', 0, '2023-08-14', 8, '62.jpg', '2023-08-14 00:49:13', '2023-08-14 00:57:29', 0),
(70, 'sadf', 'asdfasf', '1', 'Muhammad Ashraf', 0, '2023-09-05', 4, '70.jpg', '2023-09-05 11:38:23', '2023-09-05 11:38:23', 0),
(71, 'Hindi Jewellery', 'asjfdlasfjlasj sdajflsajf&nbsp;', '1', 'Muhammad Ashraf', 0, '2023-09-11', 1, '71.jpg', '2023-09-11 12:26:19', '2023-09-11 12:26:19', 0),
(72, 'blog with tag', 'asdfasf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 2, '72.jpeg', '2023-10-09 12:27:34', '2023-10-09 12:27:34', 0),
(73, 'asdf', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 4, '', '2023-10-09 12:35:00', '2023-10-09 12:35:00', 0),
(74, 'asdf', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 4, '', '2023-10-09 12:41:01', '2023-10-09 12:41:01', 0),
(75, 'asdf', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 4, '', '2023-10-09 12:42:02', '2023-10-09 12:42:02', 0),
(76, 'asdf', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 4, '', '2023-10-09 12:42:44', '2023-10-09 12:42:44', 0),
(77, 'asdf', 'asdf', '1', 'Muhammad Ashraf', 0, '2023-10-09', 4, '77.jpg', '2023-10-09 12:49:35', '2023-10-09 12:49:35', 0),
(78, 'sdfaf', 'dass', '1', 'Muhammad Ashraf', 0, '2023-10-09', 2, '78.jpg', '2023-10-09 13:50:58', '2023-10-09 13:50:58', 0),
(80, 'my titlea asdffas', 'let check that out&nbsp; &nbsp; &nbsp;adsfasdfa', '1', 'Muhammad Ashraf', 15, '2023-10-15', 8, '80.jpeg', '2023-10-15 11:07:37', '2023-10-15 11:43:57', 0),
(81, 'new blog', 'Thats a new blog. Lets try .&nbsp; &nbsp; &nbsp;and try and try again.&nbsp; sdf', '1', 'Muhammad Ashraf', 15, '2023-10-15', 2, '81.jpeg', '2023-10-15 11:38:08', '2023-10-15 12:24:14', 0),
(82, 'asdfafa', 'asdf', '1', 'Muhammad Ashraf', 12, '2023-10-15', 1, '82.jpeg', '2023-10-15 12:26:46', '2023-10-15 12:26:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

DROP TABLE IF EXISTS `blog_authors`;
CREATE TABLE IF NOT EXISTS `blog_authors` (
  `author_id` int NOT NULL AUTO_INCREMENT,
  `author_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` text,
  `website_url` varchar(255) DEFAULT NULL,
  `social_media_url` varchar(255) DEFAULT NULL,
  `avatar` varchar(150) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog_authors`
--

INSERT INTO `blog_authors` (`author_id`, `author_name`, `email`, `bio`, `website_url`, `social_media_url`, `avatar`) VALUES
(1, 'Muhammad Ashraf', 'forashraf@gmail.com', 'A College Teacher', NULL, NULL, '1.png'),
(2, 'Shahzad Ansar', 'shahzad.anser3310@gmail.com', 'A College English Teacher', NULL, NULL, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `blog_id` int NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`blog_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

DROP TABLE IF EXISTS `blog_images`;
CREATE TABLE IF NOT EXISTS `blog_images` (
  `image_id` int NOT NULL AUTO_INCREMENT,
  `blog_id` int DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

DROP TABLE IF EXISTS `blog_tag`;
CREATE TABLE IF NOT EXISTS `blog_tag` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_id` int NOT NULL,
  `tag_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 77, 2, '2023-10-09 12:49:35', '2023-10-09 12:49:35'),
(2, 77, 3, '2023-10-09 12:49:35', '2023-10-09 12:49:35'),
(19, 82, 3, '2023-10-15 12:26:46', '2023-10-15 12:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_image`, `parent_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Necklaces', 'Explore our exquisite collection of necklaces for every occasion.', '1.jpg', NULL, '2023-07-15 14:16:44', '2023-08-26 14:48:24'),
(2, 'Earrings', 'Discover our stunning earrings crafted with precision and elegance.', '2.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:25:25'),
(3, 'Bracelets', 'Adorn your wrist with our beautiful collection of bracelets.', '3.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:25:30'),
(4, 'Rings', 'Find the perfect ring to symbolize your love and commitment.', '4.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:25:33'),
(5, 'Watches', 'Browse our elegant watches that combine style and functionality.', '5.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:25:37'),
(6, 'Anklets', 'Enhance your style with our fashionable anklets.', '6.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:42:16'),
(7, 'Brooches', 'Add a touch of elegance with our exquisite brooches.', '7.jpg', NULL, '2023-07-15 14:16:44', '2023-09-17 08:25:45'),
(8, 'Pandets', 'Discover our collection of elegant and unique pandets.', '8.jpg', NULL, '2023-07-15 14:17:39', '2023-09-17 08:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `celebrities`
--

DROP TABLE IF EXISTS `celebrities`;
CREATE TABLE IF NOT EXISTS `celebrities` (
  `celebrity_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`celebrity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `celebrities`
--

INSERT INTO `celebrities` (`celebrity_id`, `name`, `description`, `image`, `birthdate`, `nationality`, `instagram`, `twitter`, `facebook`, `youtube`, `tiktok`, `snapchat`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Jennifer Lawrence', 'Academy Award-winning actress known for her roles in \"The Hunger Games\" and \"Silver Linings Playbook.\"', '1.jpg', '1990-08-15', 'American', 'jlawrence', 'JenLawrence', 'JenniferLawrence', 'JenniferLawrenceOfficial', 'jlaw', 'jenniferlawrence', 'https://www.jenniferlawrence.com', '2023-07-15 14:54:26', '2023-09-02 13:26:30'),
(2, 'Chris Hemsworth', 'Australian actor best known for portraying Thor in the Marvel Cinematic Universe films.', 'chris-hemsworth.jpg', '1983-08-11', 'Australian', 'chrishemsworth', 'chrishemsworth', 'ChrisHemsworth', 'ChrisHemsworth', 'thor', 'chrishemsworth', 'https://www.chrishemsworth.com', '2023-07-15 14:54:26', '2023-07-15 14:54:26'),
(3, 'Beyoncé Knowles', 'Grammy Award-winning singer, songwriter, and actress known for her powerful vocals and captivating performances.', 'beyonce-knowles.jpg', '1981-09-04', 'American', 'beyonce', 'Beyonce', 'beyonce', 'Beyonce', 'beyonce', 'beyonce', 'https://www.beyonce.com', '2023-07-15 14:54:26', '2023-07-15 14:54:26'),
(4, 'Dwayne Johnson', 'Former professional wrestler turned actor, known as \"The Rock,\" with appearances in films like \"Jumanji\" and \"Fast & Furious\" series.', 'dwayne-johnson.jpg', '1972-05-02', 'American', 'therock', 'TheRock', 'dwaynejohnson', 'TheRock', 'therock', 'dwaynejohnson', 'https://www.therock.com', '2023-07-15 14:54:26', '2023-07-15 14:54:26'),
(5, 'Selena Gomez', 'Singer, songwriter, and actress known for her hits like \"Good for You\" and her roles in TV series like \"Wizards of Waverly Place.\"', 'selena-gomez.jpg', '1992-07-22', 'American', 'selenagomez', 'selenagomez', 'Selena', 'SelenaGomez', 'selenagomez', 'selenagomez', 'https://www.selenagomez.com', '2023-07-15 14:54:26', '2023-07-15 14:54:26'),
(6, 'Leonardo DiCaprio', 'Academy Award-winning actor known for his roles in films like \"Titanic\" and \"The Revenant.\"', 'leonardo-dicaprio.jpg', '1974-11-11', 'American', 'leonardodicaprio', 'LeoDiCaprio', 'LeonardoDiCaprio', 'LeonardoDiCaprio', 'leodicaprio', 'leodicaprio', 'https://www.leonardodicaprio.com', '2023-07-15 14:54:56', '2023-07-15 14:54:56'),
(7, 'Emma Watson', 'Actress and activist known for her role as Hermione Granger in the \"Harry Potter\" film series.', 'emma-watson.jpg', '1990-04-15', 'British', 'emmawatson', 'EmmaWatson', 'EmmaWatson', 'EmmaWatson', 'emmawatson', 'emmawatson', 'https://www.emmawatson.com', '2023-07-15 14:54:56', '2023-07-15 14:54:56'),
(8, 'Tom Hanks', 'Academy Award-winning actor known for his performances in films like \"Forrest Gump\" and \"Saving Private Ryan.\"', 'tom-hanks.jpg', '1956-07-09', 'American', 'tomhanks', 'tomhanks', 'tomhanks', 'TomHanks', 'tomhanks', 'tomhanks', 'https://www.tomhanks.com', '2023-07-15 14:54:56', '2023-07-15 14:54:56'),
(9, 'Taylor Swift', 'Grammy Award-winning singer-songwriter known for her chart-topping hits and personal songwriting style.', 'taylor-swift.jpg', '1989-12-13', 'American', 'taylorswift', 'taylorswift13', 'taylorswift', 'taylorswift', 'taylorswift', 'taylorswift', 'https://www.taylorswift.com', '2023-07-15 14:54:56', '2023-07-15 14:54:56'),
(10, 'Will Smith', 'Actor and rapper known for his roles in films like \"Men in Black\" and \"The Pursuit of Happyness.\"', 'will-smith.jpg', '1968-09-25', 'American', 'willsmith', 'willsmith', 'WillSmith', 'WillSmith', 'willsmith', 'willsmith', 'https://www.willsmith.com', '2023-07-15 14:54:56', '2023-07-15 14:54:56'),
(11, 'My Celeb', '<p>This is a celeb description&nbsp;&nbsp;&nbsp;&nbsp;</p>', '11.jpg', NULL, 'Pakistan', 'insta', 'twitter', 'facebook', 'youtube', 'tiktok', 'snapchat', 'mywebsite', '2023-09-02 10:23:59', '2023-09-02 10:23:59'),
(12, 'My Celeb2', 'My Desc&nbsp; &nbsp; 2', '12.png', '1968-09-25', 'Albania', 'insta2', 'twitter2', 'facebook2', 'youtube2', 'TikTok2', 'Snapchat2', 'website2', '2023-09-02 11:56:59', '2023-09-02 13:37:16'),
(15, 'me', 'asdfasfdsa', '15.jpg', '2023-09-05', 'Antigua and Barbuda', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdfa', '2023-09-05 13:27:39', '2023-09-05 13:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `event_date` date DEFAULT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gps_location` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_organizer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_date`, `event_location`, `gps_location`, `event_website`, `event_category`, `event_organizer`, `event_contact`, `event_image`, `registration_link`, `created_at`, `updated_at`) VALUES
(1, 'International Jewelry Expo 2023', 'Explore the latest trends and designs in the world of jewelry at the International Jewelry Expo. Discover exquisite pieces from renowned jewelry designers and brands.', '2023-10-15', 'New York City, USA', '40.74268570454924, -74.00276146888397', 'www.jewelryexpo2023.com', 'Trade Show', 'Jewelry Expo Events Inc.', 'info@jewelryexpo2023.com', 'image_url.jpg', 'Register online at www.jewelryexpo2023.com/registration', '2023-09-05 18:02:51', '2023-09-05 19:03:40'),
(2, 'Jewelry Design Conference 2024', 'Join industry experts and passionate jewelry designers at the Jewelry Design Conference. Get insights into the latest design techniques, trends, and technologies.', '2024-05-08', 'London, UK', '51.51178373836618, -0.14886926603610617', 'www.jewelrydesignconference.com', 'Conference', 'Jewelry Designers Association', 'contact@jewelrydesignconference.com', 'image_url.jpg', 'Early bird registration ends on April 15th. Register at www.jewelrydesignconference.com/registration', '2023-09-05 18:02:51', '2023-09-05 19:04:13'),
(3, 'Gemstone Exhibition 2025', 'Experience the brilliance and beauty of gemstones at the Gemstone Exhibition. Discover rare and exquisite gemstone specimens from around the world.', '2025-09-20', 'Hong Kong', '', 'www.gemstoneexhibition2025.com', 'Exhibition', 'Gemstone Society', 'info@gemstoneexhibition2025.com', 'image_url.jpg', 'Free entry. No registration required.', '2023-09-05 18:02:51', '2023-09-05 18:02:51'),
(4, 'Diamond Trade Show 2023', 'Discover the world of diamonds at the Diamond Trade Show. Connect with diamond suppliers, manufacturers, and industry professionals.', '2023-11-25', 'Las Vegas, USA', '', 'www.diamondtradeshow2023.com', 'Trade Show', 'Diamond Association', 'info@diamondtradeshow2023.com', 'image_url.jpg', 'Register online at www.diamondtradeshow2023.com/registration', '2023-09-05 18:02:51', '2023-09-05 18:02:51'),
(5, 'Fashion Jewelry Exhibition 2024', 'Experience the latest trends in fashion jewelry at the Fashion Jewelry Exhibition. Explore unique and stylish pieces from emerging designers.', '2024-08-10', 'Paris, France', '', 'www.fashionjewelryexhibition2024.com', 'Exhibition', 'Fashion Events Company', 'contact@fashionjewelryexhibition2024.com', 'image_url.jpg', 'Tickets available at the venue.', '2023-09-05 18:02:51', '2023-09-05 18:02:51'),
(6, 'Gemstone Conference 2025', 'Join gemstone experts and enthusiasts at the Gemstone Conference. Gain knowledge about gemstone identification, grading, and the latest industry developments.', '2025-06-05', 'Bangkok, Thailand', '', 'www.gemstoneconference2025.com', 'Conference', 'Gemstone Institute', 'info@gemstoneconference2025.com', 'image_url.jpg', 'Register online at www.gemstoneconference2025.com/registration', '2023-09-05 18:02:51', '2023-09-05 18:02:51'),
(11, 'change', 'change', '2023-09-07', 'change', 'change', 'change', 'change', 'change', 'change', '11.jpg', 'change', '2023-09-06 12:39:41', '2023-09-06 12:39:41'),
(12, 'No Change', 'No Change', '2023-09-13', 'No Change', 'No Change', 'No Change', '3', 'No Change', 'No Change', '12.png', 'No Change', '2023-09-06 12:51:18', '2023-09-06 12:51:18'),
(13, 'data', 'data', '2023-09-20', 'data', 'data', 'data', 'Watches', 'data', 'data', '13.png', 'data', '2023-09-06 12:53:08', '2023-09-06 12:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

DROP TABLE IF EXISTS `image_gallery`;
CREATE TABLE IF NOT EXISTS `image_gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `celebrity_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `category`, `title`, `image`, `celebrity_id`, `created_at`, `updated_at`) VALUES
(3, 'Watches', 'Change asdf', '3.jpg', 15, '2023-09-08 13:52:02', '2023-10-15 13:52:36'),
(4, 'Rings', 'asdf', '4.jpg', 0, '2023-09-08 13:52:24', '2023-09-08 13:52:24'),
(5, 'Earrings', 'New Jewellery', '5.jpg', 0, '2023-09-11 12:30:32', '2023-09-11 12:30:32'),
(6, 'Earrings', 'New Jewellery', '5.jpg', 0, '2023-09-11 12:30:32', '2023-09-11 12:30:32'),
(7, 'Necklaces', 'Dash', '7.jpeg', 0, '2023-10-15 13:36:25', '2023-10-15 13:36:25'),
(8, 'Watches', 'was', '8.jpeg', 2, '2023-10-15 13:42:29', '2023-10-15 13:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery_brands`
--

DROP TABLE IF EXISTS `jewellery_brands`;
CREATE TABLE IF NOT EXISTS `jewellery_brands` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text,
  `website_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jewellery_brands`
--

INSERT INTO `jewellery_brands` (`id`, `brand_name`, `brand_image`, `description`, `website_url`) VALUES
(1, 'Tiffany & Co.', '/images/brands/1.jpg', 'Tiffany & Co. is a famous American luxury jewelry brand known for its diamonds and silver jewelry.', 'https://www.tiffany.com/'),
(2, 'Cartier', '/images/brands/2.jpg', 'Cartier is a renowned French jewelry and watchmaker brand with a long history of craftsmanship.', 'https://www.cartier.com/'),
(3, 'Bvlgari', '/images/brands/3.jpg', 'Bvlgari is an Italian luxury brand known for its exquisite jewelry, watches, and accessories.', 'https://www.bulgari.com/'),
(4, 'Harry Winston', '/images/brands/4.jpg', 'Harry Winston is an American luxury jeweler famous for its exceptional diamonds and gemstones.', 'https://www.harrywinston.com/'),
(5, 'Chopard', '', 'Chopard is a Swiss luxury brand known for its jewelry, watches, and accessories.', 'https://www.chopard.com/'),
(6, 'David Yurman', '', 'David Yurman is an American jewelry designer known for his unique designs and signature cable bracelet.', 'https://www.davidyurman.com/'),
(7, 'Van Cleef & Arpels', '', 'Van Cleef & Arpels is a French luxury jewelry brand known for its exquisite craftsmanship and iconic Alhambra collection.', 'https://www.vancleefarpels.com/'),
(8, 'Boucheron', '', 'Boucheron is a French high jewelry brand founded in 1858 and known for its luxurious and artistic designs.', 'https://www.boucheron.com/');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_24_150059_create_affiliate_products_table', 1),
(6, '2023_07_24_150100_create_blog_categories_table', 1),
(7, '2023_07_24_150101_create_blogs_table', 1),
(8, '2023_07_24_150102_create_blog_images_table', 1),
(9, '2023_07_24_150103_create_categories_table', 1),
(10, '2023_07_24_150104_create_celebrities_table', 1),
(11, '2023_07_24_150105_create_events_table', 1),
(12, '2023_07_24_150106_create_website_cookies_table', 1),
(13, '2023_08_12_132854_create_roles_table', 1),
(14, '2023_08_12_133717_create_roles_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(2, 'moderator', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(3, 'user', '2023-08-12 12:44:32', '2023-08-12 12:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(3, 1),
(6, 1),
(17, 1),
(5, 2),
(5, 3),
(12, 3),
(16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Celebrity Jewellery', '2023-10-08 13:12:42', '2023-10-08 13:12:42'),
(3, 'Style Tips', '2023-10-09 11:07:14', '2023-10-09 11:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Dr. Omari Metz', 'ehoeger@example.net', '2023-08-12 12:44:32', '$2y$10$X07ZaVXOIcjMXPSBAC.KDOq1qv4PgBn6L77LPE8LnJ4GBiib0gWt.', 'uV1DpSxMmhn0SYpEk2LT1ud1D1zjvjJHlS336nh4LvXNOrn3CRBojaYEP7Fg', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(5, 'Jimmy Lemke', 'schultz.horacio@example.org', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AcIUjv2667', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(6, 'Muvenal Mueller', 'Ninnie70@example.org', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SsaUxeDrv8', '2023-08-12 12:44:32', '2023-08-16 10:03:26'),
(7, 'Vilma Hackett', 'orland87@example.net', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SzP4M4jo5R', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(8, 'Kane Grant', 'kirlin.cleve@example.com', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ig9TIKUYGS', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(9, 'Rosie Wolf', 'daniela47@example.org', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'h1eprFotc9', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(10, 'Carolina Mayer MD', 'zechariah.huels@example.org', '2023-08-12 12:44:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wthYd7YjF7', '2023-08-12 12:44:32', '2023-08-12 12:44:32'),
(12, 'user', 'user@users.com', NULL, '$2y$10$sYcTZONxHs6yG4Q6FL2sYOZIfv7XJ32CWokuBpFfhaN277zRgjnW6', NULL, '2023-08-15 15:04:22', '2023-08-15 15:04:22'),
(16, 'Muhammad Ashraf', 'forashraf@gmail.com', NULL, '$2y$10$hzdShwVTou/Mc8iv5e8gmuUx5lO7rpRGvu997cP6o0SwWinY2auzC', NULL, '2023-08-18 12:24:12', '2023-08-18 12:24:12'),
(17, 'admin', 'admin@gmail.com', NULL, 'Pakistan', NULL, '2023-08-19 07:18:08', '2023-10-04 14:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `website_cookies`
--

DROP TABLE IF EXISTS `website_cookies`;
CREATE TABLE IF NOT EXISTS `website_cookies` (
  `cookie_id` int NOT NULL,
  `cookie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_value` text COLLATE utf8mb4_unicode_ci,
  `cookie_expiry` datetime DEFAULT NULL,
  `cookie_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cookie_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cookie_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cookie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD CONSTRAINT `blog_images_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
