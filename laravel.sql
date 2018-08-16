-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.20 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel`;

-- Дамп структуры для таблица laravel.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.categories: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `slug`, `parent_id`) VALUES
	(1, 'Автомобили', 'avtomobili', 0),
	(2, 'Седан', 'sedan', 1),
	(3, 'Универсал', 'universal', 1),
	(4, 'Мотоциклы', 'mototsikly', 0),
	(5, 'Купе', 'kupe', 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.categoryables
CREATE TABLE IF NOT EXISTS `categoryables` (
  `category_id` int(11) NOT NULL,
  `categoryables_id` int(11) NOT NULL,
  `categoryables_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.categoryables: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `categoryables` DISABLE KEYS */;
INSERT INTO `categoryables` (`category_id`, `categoryables_id`, `categoryables_type`) VALUES
	(2, 6, 'App\\Models\\Admin\\Goods'),
	(5, 4, 'App\\Models\\Admin\\Goods'),
	(3, 5, 'App\\Models\\Admin\\Goods'),
	(3, 2, 'App\\Models\\Admin\\Goods'),
	(3, 1, 'App\\Models\\Admin\\Goods'),
	(5, 3, 'App\\Models\\Admin\\Goods'),
	(4, 7, 'App\\Models\\Admin\\Goods');
/*!40000 ALTER TABLE `categoryables` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_goods_id_foreign` (`goods_id`),
  CONSTRAINT `comments_goods_id_foreign` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.comments: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `text`, `goods_id`, `created_at`, `updated_at`) VALUES
	(1, 'fdsfds', 1, NULL, NULL),
	(2, 'fdsfdsf', 1, NULL, NULL),
	(3, 'Test', 3, NULL, NULL),
	(4, 'заправка кондиционера', 3, NULL, NULL),
	(5, 'fdsfds', 3, NULL, NULL),
	(6, 'hgfhg', 3, NULL, NULL),
	(7, 'mlnmkl', 4, NULL, NULL),
	(8, 'ававы', 4, NULL, NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.goods
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.goods: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` (`id`, `name`, `short_description`, `description`, `icon`, `price`) VALUES
	(1, 'Opel Zafira tourer', '2015', 'Машина в отличном состоянии. Чистый 2014 год . Без пробега по РБ.', 'http://cdn.motorpage.ru/Photos/800/1B89.jpg', 5050),
	(2, 'Lexus IS 250 Executive', '2011', 'седан, бензин 2.5 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, парктроник, подогрев сидений, система контроля стабилизации, громкая связь.', 'https://content.onliner.by/automarket/157591/800x800/f8502657b3133548568199fc5dbd4059.jpeg', 10000),
	(3, 'Toyota Auris', '2008', 'хетчбэк, бензин 1.6 л, автомат, передний привод, кондиционер, легкосплавные диски, парктроник, подогрев сидений.', 'https://content.onliner.by/automarket/513253/800x800/994935c70684d64db1404fc329269a2d.jpeg', 9000),
	(4, 'BMW 335', '2007', 'купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.', 'https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg', 8000),
	(5, 'Ford Fiesta Chia', '2010', 'хетчбэк, бензин 1.3 л, механика, передний привод, кондиционер, легкосплавные диски, система контроля стабилизации, громкая связь.', 'https://content.onliner.by/automarket/725411/800x800/d12755f6064684a05aff2e4c43284c75.jpeg', 2900),
	(6, 'Iveco Daily 50С15', '2011', 'fsdfsdfdsfs', 'https://content.onliner.by/automarket/2529126/800x800/a9221ac3240e2715f7fe9e28d7788771.jpeg', 5000),
	(7, 'Kawasaki Vulcan', '1994', 'мотоцикл, круизер, 750 см³, V-образный, 4-цилиндровый, кардан', 'https://content.onliner.by/motofleamarket/1491083/800x800/459778e30ce208cb8afd747309027657.jpeg', 2300);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.goodsPhotos
CREATE TABLE IF NOT EXISTS `goodsPhotos` (
  `goods_id` int(11) NOT NULL,
  `photos_id` int(11) NOT NULL,
  KEY `goodsphotos_goods_id_foreign` (`goods_id`),
  KEY `goodsphotos_photos_id_foreign` (`photos_id`),
  CONSTRAINT `goodsphotos_goods_id_foreign` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE,
  CONSTRAINT `goodsphotos_photos_id_foreign` FOREIGN KEY (`photos_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.goodsPhotos: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `goodsPhotos` DISABLE KEYS */;
INSERT INTO `goodsPhotos` (`goods_id`, `photos_id`) VALUES
	(4, 2),
	(4, 2),
	(4, 2);
/*!40000 ALTER TABLE `goodsPhotos` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.menus: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.migrations: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_07_08_151416_goods', 2),
	(4, '2018_07_10_210002_photos', 2),
	(5, '2018_07_10_210733_goods-photos', 3),
	(6, '2018_07_21_100059_comments', 4),
	(7, '2018_07_28_100748_menus', 5),
	(9, '2018_08_02_075327_shops', 7),
	(12, '2018_08_02_081133_shops_goods', 8),
	(13, '2018_08_03_140734_create_categories_table', 9),
	(14, '2018_08_04_084709_categoryables', 10),
	(15, '2018_08_04_105936_comments_date', 10),
	(16, '2018_08_04_111532_add_price_to_goods', 10),
	(17, '2018_07_29_145053_orders', 11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.orders: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `name`) VALUES
	(1, '2018-08-16 20:35:10', '2018-08-16 20:35:10', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:1:{i:2;a:3:{s:3:"qty";i:1;s:5:"price";i:10000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:2;s:4:"name";s:22:"Lexus IS 250 Executive";s:17:"short_description";s:4:"2011";s:11:"description";s:305:"седан, бензин 2.5 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, парктроник, подогрев сидений, система контроля стабилизации, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/157591/800x800/f8502657b3133548568199fc5dbd4059.jpeg";s:5:"price";i:10000;}s:11:"\0*\0original";a:6:{s:2:"id";i:2;s:4:"name";s:22:"Lexus IS 250 Executive";s:17:"short_description";s:4:"2011";s:11:"description";s:305:"седан, бензин 2.5 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, парктроник, подогрев сидений, система контроля стабилизации, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/157591/800x800/f8502657b3133548568199fc5dbd4059.jpeg";s:5:"price";i:10000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:1;s:10:"totalPrice";i:10000;}', 'admin'),
	(2, '2018-08-16 20:36:16', '2018-08-16 20:36:16', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:4;a:3:{s:3:"qty";i:1;s:5:"price";i:8000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:11:"\0*\0original";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:1;a:3:{s:3:"qty";i:1;s:5:"price";i:5050;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:1;s:4:"name";s:18:"Opel Zafira tourer";s:17:"short_description";s:4:"2015";s:11:"description";s:112:"Машина в отличном состоянии. Чистый 2014 год . Без пробега по РБ.";s:4:"icon";s:43:"http://cdn.motorpage.ru/Photos/800/1B89.jpg";s:5:"price";i:5050;}s:11:"\0*\0original";a:6:{s:2:"id";i:1;s:4:"name";s:18:"Opel Zafira tourer";s:17:"short_description";s:4:"2015";s:11:"description";s:112:"Машина в отличном состоянии. Чистый 2014 год . Без пробега по РБ.";s:4:"icon";s:43:"http://cdn.motorpage.ru/Photos/800/1B89.jpg";s:5:"price";i:5050;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:2;s:10:"totalPrice";i:13050;}', 'admin'),
	(3, '2018-08-16 20:47:52', '2018-08-16 20:47:52', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:1:{i:2;a:3:{s:3:"qty";i:1;s:5:"price";i:10000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:2;s:4:"name";s:22:"Lexus IS 250 Executive";s:17:"short_description";s:4:"2011";s:11:"description";s:305:"седан, бензин 2.5 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, парктроник, подогрев сидений, система контроля стабилизации, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/157591/800x800/f8502657b3133548568199fc5dbd4059.jpeg";s:5:"price";i:10000;}s:11:"\0*\0original";a:6:{s:2:"id";i:2;s:4:"name";s:22:"Lexus IS 250 Executive";s:17:"short_description";s:4:"2011";s:11:"description";s:305:"седан, бензин 2.5 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, парктроник, подогрев сидений, система контроля стабилизации, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/157591/800x800/f8502657b3133548568199fc5dbd4059.jpeg";s:5:"price";i:10000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:1;s:10:"totalPrice";i:10000;}', 'admin'),
	(4, '2018-08-16 20:49:58', '2018-08-16 20:49:58', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:1:{i:3;a:3:{s:3:"qty";i:1;s:5:"price";i:9000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:3;s:4:"name";s:12:"Toyota Auris";s:17:"short_description";s:4:"2008";s:11:"description";s:201:"хетчбэк, бензин 1.6 л, автомат, передний привод, кондиционер, легкосплавные диски, парктроник, подогрев сидений.";s:4:"icon";s:90:"https://content.onliner.by/automarket/513253/800x800/994935c70684d64db1404fc329269a2d.jpeg";s:5:"price";i:9000;}s:11:"\0*\0original";a:6:{s:2:"id";i:3;s:4:"name";s:12:"Toyota Auris";s:17:"short_description";s:4:"2008";s:11:"description";s:201:"хетчбэк, бензин 1.6 л, автомат, передний привод, кондиционер, легкосплавные диски, парктроник, подогрев сидений.";s:4:"icon";s:90:"https://content.onliner.by/automarket/513253/800x800/994935c70684d64db1404fc329269a2d.jpeg";s:5:"price";i:9000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:1;s:10:"totalPrice";i:9000;}', 'admin'),
	(5, '2018-08-16 21:07:53', '2018-08-16 21:07:53', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:1:{i:4;a:3:{s:3:"qty";i:1;s:5:"price";i:8000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:11:"\0*\0original";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:1;s:10:"totalPrice";i:8000;}', 'admin'),
	(6, '2018-08-16 21:11:06', '2018-08-16 21:11:06', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:1:{i:7;a:3:{s:3:"qty";i:1;s:5:"price";i:2300;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:7;s:4:"name";s:15:"Kawasaki Vulcan";s:17:"short_description";s:4:"1994";s:11:"description";s:104:"мотоцикл, круизер, 750 см³, V-образный, 4-цилиндровый, кардан";s:4:"icon";s:95:"https://content.onliner.by/motofleamarket/1491083/800x800/459778e30ce208cb8afd747309027657.jpeg";s:5:"price";i:2300;}s:11:"\0*\0original";a:6:{s:2:"id";i:7;s:4:"name";s:15:"Kawasaki Vulcan";s:17:"short_description";s:4:"1994";s:11:"description";s:104:"мотоцикл, круизер, 750 см³, V-образный, 4-цилиндровый, кардан";s:4:"icon";s:95:"https://content.onliner.by/motofleamarket/1491083/800x800/459778e30ce208cb8afd747309027657.jpeg";s:5:"price";i:2300;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:1;s:10:"totalPrice";i:2300;}', 'admin'),
	(7, '2018-08-16 21:12:32', '2018-08-16 21:12:32', 1, 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:6;a:3:{s:3:"qty";i:1;s:5:"price";i:5000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:6;s:4:"name";s:18:"Iveco Daily 50С15";s:17:"short_description";s:4:"2011";s:11:"description";s:11:"fsdfsdfdsfs";s:4:"icon";s:91:"https://content.onliner.by/automarket/2529126/800x800/a9221ac3240e2715f7fe9e28d7788771.jpeg";s:5:"price";i:5000;}s:11:"\0*\0original";a:6:{s:2:"id";i:6;s:4:"name";s:18:"Iveco Daily 50С15";s:17:"short_description";s:4:"2011";s:11:"description";s:11:"fsdfsdfdsfs";s:4:"icon";s:91:"https://content.onliner.by/automarket/2529126/800x800/a9221ac3240e2715f7fe9e28d7788771.jpeg";s:5:"price";i:5000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:4;a:3:{s:3:"qty";i:1;s:5:"price";i:8000;s:4:"item";O:22:"App\\Models\\Admin\\Goods":26:{s:10:"timestamps";b:0;s:11:"\0*\0fillable";a:5:{i:0;s:4:"name";i:1;s:17:"short_description";i:2;s:11:"description";i:3;s:4:"icon";i:4;s:5:"price";}s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:11:"\0*\0original";a:6:{s:2:"id";i:4;s:4:"name";s:7:"BMW 335";s:17:"short_description";s:4:"2007";s:11:"description";s:335:"купе, бензин 3 л, автомат, задний привод, кондиционер, кожаный салон, легкосплавные диски, ксенон, парктроник, подогрев сидений, система контроля стабилизации, навигация, громкая связь.";s:4:"icon";s:90:"https://content.onliner.by/automarket/425981/800x800/23f796fe148b99a9b3da739211c58574.jpeg";s:5:"price";i:8000;}s:10:"\0*\0changes";a:0:{}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:2;s:10:"totalPrice";i:13000;}', 'admin');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.photos: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`id`, `name`, `alt`, `title`, `path`) VALUES
	(2, 'TNGA', 'tnga', 'TNGA', 'https://content.onliner.by/news/1400x5616/2b38b791f3babe1cc0d2f9072deb4b8e.jpeg');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.shops
CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.shops: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` (`id`, `address`) VALUES
	(1, 'Minsk'),
	(2, 'Grodno');
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.shopsGoods
CREATE TABLE IF NOT EXISTS `shopsGoods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shopsgoods_goods_id_foreign` (`goods_id`),
  KEY `shopsgoods_shop_id_foreign` (`shop_id`),
  CONSTRAINT `shopsgoods_goods_id_foreign` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shopsgoods_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.shopsGoods: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `shopsGoods` DISABLE KEYS */;
INSERT INTO `shopsGoods` (`id`, `goods_id`, `shop_id`) VALUES
	(1, 4, 1),
	(2, 4, 1),
	(3, 1, 1),
	(4, 4, 1);
/*!40000 ALTER TABLE `shopsGoods` ENABLE KEYS */;

-- Дамп структуры для таблица laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Mixalka01@gmail.com', '$2y$10$A4nrIdMbjTF0bmOkr/Bjpu.4HGiUyJyxVS2ymJFZYTP/bep4rTuSC', 'lkp5D2JQkY4WA0KHAIhPlO3JJT7wgPMXMnaRvV8mLHVVj7F6UDw1xtY5HX7W', '2018-07-24 21:03:06', '2018-07-24 21:03:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
