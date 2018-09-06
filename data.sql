# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22-0ubuntu18.04.1)
# Database: homestead
# Generation Time: 2018-09-06 02:28:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table park_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `park_details`;

CREATE TABLE `park_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `park_id` int(11) NOT NULL,
  `central_attraction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_opened` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ride_count` int(11) NOT NULL,
  `restaurant_count` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `resort_count` int(11) NOT NULL,
  `fireworks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `park_details` WRITE;
/*!40000 ALTER TABLE `park_details` DISABLE KEYS */;

INSERT INTO `park_details` (`id`, `park_id`, `central_attraction`, `year_opened`, `ride_count`, `restaurant_count`, `size`, `resort_count`, `fireworks`, `created_at`, `updated_at`)
VALUES
	(1,1,'Cinderella\'s Castle','1971',42,31,107,6,1,'2018-08-11 19:42:04','2018-08-11 19:42:04'),
	(2,2,'Spaceship Earth','1982',35,60,300,7,1,'2018-08-11 19:42:04','2018-08-11 19:42:04'),
	(3,3,'The Chinese Theater','1989',13,21,135,0,1,'2018-08-11 19:42:04','2018-08-11 19:42:04'),
	(4,4,'The Tree of Life','1998',41,33,580,7,0,'2018-08-11 19:42:04','2018-08-11 19:42:04'),
	(7,8,'Mount Gushmore','1995',12,6,66,0,0,'2018-09-01 12:16:36','2018-09-01 12:16:36');

/*!40000 ALTER TABLE `park_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table parks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `parks`;

CREATE TABLE `parks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `parks` WRITE;
/*!40000 ALTER TABLE `parks` DISABLE KEYS */;

INSERT INTO `parks` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Magic Kingdom','2018-08-11 19:42:13','2018-08-11 19:42:13'),
	(2,'Epcot','2018-08-11 19:42:13','2018-08-11 19:42:13'),
	(3,'Hollywood Studios','2018-08-11 19:42:13','2018-08-11 19:42:13'),
	(4,'Animal Kingdom','2018-08-11 19:42:13','2018-08-11 19:42:13'),
	(5,'Disney Springs','2018-08-11 19:42:13','2018-08-11 19:42:13');

/*!40000 ALTER TABLE `parks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table resort_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resort_details`;

CREATE TABLE `resort_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resort_id` int(11) NOT NULL,
  `park_id` int(11) NOT NULL,
  `resort_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_rooms` int(11) DEFAULT NULL,
  `quick_service_restaurants` int(11) NOT NULL,
  `table_service_restaurants` int(11) NOT NULL,
  `gift_shop` int(11) NOT NULL,
  `arcade` int(11) NOT NULL,
  `pool` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resort_details` WRITE;
/*!40000 ALTER TABLE `resort_details` DISABLE KEYS */;

INSERT INTO `resort_details` (`id`, `resort_id`, `park_id`, `resort_type`, `transport_options`, `category`, `num_of_rooms`, `quick_service_restaurants`, `table_service_restaurants`, `gift_shop`, `arcade`, `pool`, `created_at`, `updated_at`)
VALUES
	(1,1,4,'Value','Bus','Movies',1920,1,0,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(2,2,4,'Value','Bus','Music',1604,1,0,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(3,3,4,'Value','Bus','Sports',1920,1,0,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(4,4,4,'Value','Bus','Animation',1984,1,0,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(5,5,4,'Value','Bus','Pop Culture',2880,1,0,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(6,6,2,'Moderate','Bus,Skyliner','Caribbean Islands',2112,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(7,7,4,'Moderate','Bus','American Southwest',1915,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(8,8,1,'Moderate','Bus,Boat','Rustic Woods Camping',1309,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(9,9,5,'Moderate','Bus,Boat','Antebellum South',2048,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(10,10,5,'Moderate','Bus,Boat','New Orleans French Quarter',1008,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(11,11,4,'Deluxe','Bus','African Wildlife preserve',1307,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(12,12,2,'Deluxe','Bus,Boat,Walkway','Newport Beach cottage',576,1,1,1,1,1,'2018-09-02 00:39:23','2018-09-02 00:39:23'),
	(13,13,2,'Deluxe','Bus,Boat,Walkway','Early 20th Century Atlantic and Ocean City',378,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(14,14,1,'Deluxe','Bus,Monorail,Walkway','Modern',655,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(15,15,1,'Deluxe','Bus,Monorail,Boat','Early 20th Century Florida',867,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(16,16,1,'Deluxe','Bus,Monorail,Boat','South Seas',492,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(17,17,1,'Deluxe','Bus,Boat','Pacific Northwest, National Park Service rustic',729,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(18,18,2,'Deluxe','Bus,Boat,Walkway','Martha\'s Vineyard Resort',621,1,1,1,1,1,'2018-09-02 00:38:51','2018-09-02 00:38:51');

/*!40000 ALTER TABLE `resort_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resorts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resorts`;

CREATE TABLE `resorts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `park_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resorts` WRITE;
/*!40000 ALTER TABLE `resorts` DISABLE KEYS */;

INSERT INTO `resorts` (`id`, `name`, `park_id`, `created_at`, `updated_at`)
VALUES
	(1,'All-Star Movies Resort',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(2,'All-Star Music Resort',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(3,'All-Star Sports Resort ',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(4,'Art of Animation Resort',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(5,'Pop Century Resort ',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(6,'Caribbean Beach Resort',2,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(7,'Caribbean Beach Resort',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(8,'Fort Wilderness Resort & Campground',1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(9,'Port Orleans Resort - Riverside',5,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(10,'Port Orleans Resort - French Quarter',5,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(11,'Animal Kingdom Lodge',4,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(12,'Beach Club Resort',2,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(13,'Boardwalk Inn Resort ',2,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(14,'Contemporary Resort',1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(15,'Grand Floridian Resort and Spa',1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(16,'Polynesian Village Resort',1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(17,'Wilderness Lodge',1,'2018-09-02 00:38:51','2018-09-02 00:38:51'),
	(18,'Yacht Club Resort',2,'2018-09-02 00:38:51','2018-09-02 00:38:51');

/*!40000 ALTER TABLE `resorts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table restaurant_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurant_details`;

CREATE TABLE `restaurant_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `park_id` int(11) NOT NULL,
  `quick_service` int(11) NOT NULL,
  `table_service` int(11) NOT NULL,
  `alcohol` int(11) NOT NULL,
  `dining_plan` int(11) NOT NULL,
  `meal_types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `restaurant_details` WRITE;
/*!40000 ALTER TABLE `restaurant_details` DISABLE KEYS */;

INSERT INTO `restaurant_details` (`id`, `restaurant_id`, `park_id`, `quick_service`, `table_service`, `alcohol`, `dining_plan`, `meal_types`, `food_types`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1,0,0,1,'Snacks','Snacks,Dole Whip','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(2,2,1,1,0,0,1,'Snacks','Snacks,Ice Cream','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(3,3,1,1,1,1,1,'Breakfast,Lunch,Dinner','Pastries,Breakfast Sandwiches,Steak,Sandwiches,Fish,Cakes,Pudding','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(4,4,1,1,0,0,1,'Lunch,Dinner','Hot Dogs,Desserts','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(5,5,1,1,0,0,1,'Snacks','Snacks,Pretzels','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(6,6,1,0,1,0,1,'Breakfast,Lunch,Dinner','Character Dining,Upscale Dining','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(7,7,1,1,0,0,1,'Lunch,Dinner','Salads,Seafood,Sandwiches','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(8,8,1,1,0,0,1,'Lunch,Dinner','Sandwiches,Salads','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(9,9,1,1,0,0,1,'Breakfast,Lunch,Dinner','Pastries,Coffee,Fruit,Vegetables','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(10,10,1,1,0,0,1,'Lunch,Dinner','BBQ,Snacks','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(11,11,1,0,1,1,1,'Lunch,Dinner','Steak,Seafood,Salads','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(12,12,1,1,0,0,1,'Breakfast,Lunch,Dinner','Snack,Hot Dogs,Fruits','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(13,13,1,0,1,1,1,'Lunch,Dinner','Pasta,Burgers,Homestyle','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(14,14,1,1,0,0,1,'Breakfast,Lunch,Dinner','Coffee,Baked Goods,Breakfast Sandwiches','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(15,15,1,1,0,0,1,'Lunch,Dinner','Southweast,Mexican','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(16,16,1,1,0,0,1,'Lunch,Dinner','Salads,Sandwiches,Flatbreads,Pasta','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(17,17,1,1,0,0,1,'Snacks','Ice Cream','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(18,18,1,1,0,0,1,'Lunch,Dinner','Sandwiches,Potatoes','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(19,19,1,1,0,0,1,'Snacks','Ice Cream','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(20,20,1,1,0,0,1,'Snacks','Ice Cream Floats','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(21,21,1,0,1,0,1,'Breakfast,Lunch,Dinner','Character Dining,Breakfast Buffet,Lunch Buffet,Dinner Buffet','2018-08-27 00:14:26','2018-08-27 00:14:26'),
	(22,22,1,1,1,0,1,'Lunch,Dinner','BBQ,Family Style','2018-08-27 00:14:26','2018-08-27 00:14:26');

/*!40000 ALTER TABLE `restaurant_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table restaurants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurants`;

CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `park_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;

INSERT INTO `restaurants` (`id`, `name`, `park_id`, `created_at`, `updated_at`)
VALUES
	(1,'Aloha Isle',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(2,'Auntie Gravity\'s Galactic Goodies',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(3,'Be Our Guest Restaurant',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(4,'Casey\'s Corner',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(5,'Cheshire Cafe',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(6,'Cinderella\'s Royal Table',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(7,'Columbia Harbour House',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(8,'Cosmic Ray\'s Starlight Cafe',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(9,'Gaston\'s Tavern',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(10,'Golden Oak Outpost',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(11,'Jungle Navigation Co. Ltd. Skipper Canteen',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(12,'Liberty Square Market',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(13,'Liberty Tree Tavern',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(14,'Main Street Bakery',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(15,'Pecos Bill Tall Tale Inn and Cafe',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(16,'Pinocchio Village Haus',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(17,'Plaza Ice Cream Parlor',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(18,'Sleepy Hollow',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(19,'Storybook Treats',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(20,'Sunshine Tree Terrace',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(21,'The Crystal Palace',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(22,'The Diamond Horseshoe ',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(23,'The Friar\'s Nook',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(24,'The Lunching Pad ',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(25,'The Plaza Restaurant',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(26,'Tomorrowland Terrace Restaurant',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(27,'Tony\'s Town Square Restaurant',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(28,'Tortuga Tavern',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(29,'Westward Ho',1,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(30,'Coral Reef Restaurant',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(31,'Electric Umbrella Restaurant',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(32,'Fountain View',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(33,'Garden Grill',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(34,'Sunshine Seasons Food Court',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(35,'Taste Track',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(36,'The Land Cart',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(37,'Akershus Royal Banquet Hall',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(38,'Biergarten',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(39,'Block and Hans',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(40,'Chefs de France',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(41,'Choza de Margarita',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(42,'Crepes des Chefs de France',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(43,'Fife and Drum Tavern',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(44,'Funnel Cake',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(45,'Gelati',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(46,'Kabuki Cafe',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(47,'Kringla Bakeri Og Kafe',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(48,'L\'Artisan des Glaces',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(49,'La Cantina de San Angel',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(50,'La Cava del Tequila',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(51,'La Hacienda de San Angel',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(52,'Le Cellier Steakhouse',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(53,'Les Halles Boulangerie Patisserie',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(54,'Les Vins des Chefs de France',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(55,'Liberty Inn',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(56,'Lotus Blossom Cafe',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(57,'Midnattssol Bakeri',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(58,'Monsieur Paul',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(59,'Nine Dragons Restaurant',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(60,'Rose and Crown Pub and Dining Room ',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(61,'San Angel Inn',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(62,'Sommerfest',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(63,'Spice Road Table',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(64,'Tangierine Café',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(65,'Teppan Edo',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(66,'Tokyo Dining',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(67,'Tutto Gusto Wine Cellar ',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(68,'Tutto Italia Ristorante',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(69,'Via Napoli',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(70,'Yorkshire County Fish Shop ',2,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(71,'50\'s Prime Time Cafe',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(72,'ABC Commissary',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(73,'Anaheim Produce ',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(74,'Backlot Express',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(75,'BaseLine Tap House',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(76,'Catalina Eddie\'s',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(77,'Dockside Diner ',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(78,'Fairfax Fare ',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(79,'Hollywood and Vine',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(80,'Hollywood Scoops',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(81,'KRNR The Rock Station ',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(82,'Mama Melrose\'s Ristorante Italiano',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(83,'Oasis Canteen',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(84,'PizzeRizzo',3,'2018-08-25 13:47:49',NULL),
	(85,'Rosie\'s All American',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(86,'Sci-Fi Dine-In Theater Restaurant',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(87,'The Hollywood Brown Derby',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(88,'The Hollywood Brown Derby Lounge ',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(89,'The Trolley Car Cafe',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(90,'Tune-In Lounge',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(91,'Woody\'s Lunch Box',3,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(92,'Anandapur Ice Cream Truck',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(93,'Caravan Road',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(94,'Creature Comforts ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(95,'Dawa Bar ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(96,'Dino Diner ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(97,'Dino-Bite Snacks',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(98,'Eight Spoon Cafe',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(99,'Flame Tree Barbecue ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(100,'Harambe Fruit Market',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(101,'Harambe Market',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(102,'Mahindi',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(103,'Nomad Lounge',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(104,'Pizzafari',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(105,'Pongu Pongu',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(106,'Rainforest Cafe at Animal Kingdom',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(107,'Restaurantosaurus',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(108,'Satu\'li Canteen',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(109,'Tamu Tamu Refreshments',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(110,'Terra Treats ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(111,'The Smiling Crocodile',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(112,'Thirsty River Bar and Trek Snacks',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(113,'Tiffins',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(114,'Trilo-Bites',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(115,'Tusker House Restaurant',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(116,'Warung Outpost ',4,'2018-08-25 13:47:49','2018-08-25 13:47:49'),
	(117,'Yak and Yeti Restaurant',4,'2018-08-25 13:47:49','2018-08-25 13:47:49');

/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ride_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ride_details`;

CREATE TABLE `ride_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ride_id` int(11) NOT NULL,
  `park_id` int(11) NOT NULL,
  `opening_year` int(11) NOT NULL,
  `ride_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ride_vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interactive_queue` int(11) NOT NULL,
  `gift_store_finish` int(11) NOT NULL,
  `single_rider` int(11) NOT NULL,
  `ride_photo` int(11) NOT NULL,
  `height_restricted` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `ride_details` WRITE;
/*!40000 ALTER TABLE `ride_details` DISABLE KEYS */;

INSERT INTO `ride_details` (`id`, `ride_id`, `park_id`, `opening_year`, `ride_type`, `ride_vehicle`, `interactive_queue`, `gift_store_finish`, `single_rider`, `ride_photo`, `height_restricted`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1971,'Transport','Train',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(2,2,1,1971,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(3,3,1,2001,'Aerial Carousel','Flying Carpets',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(4,4,1,1973,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(5,5,1,1992,'Boat','Boat',0,1,0,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(6,6,1,1980,'Roller Coaster','Steel-Mine Train',1,0,0,0,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(7,7,1,1973,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(8,8,1,1971,'Dark Ride','Doom Buggie',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(9,9,1,1971,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(10,10,1,1996,'Roller Coaster','Plane Coaster',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(11,11,1,1971,'Carousel','Elephant',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(12,12,1,1971,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(13,13,1,1971,'Teacups','Teacups',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(14,14,1,1999,'Dark Ride','Honey Pots',1,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(15,15,1,1971,'Dark Ride','Pirate Ships',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(16,16,1,1971,'Carousel','Horses',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(17,17,1,2014,'Roller Coaster','Log Train',1,0,0,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(18,18,1,2011,'Dark Ride','Clam Shells',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(19,19,1,1994,'Carousel','Rockets',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(20,20,1,1971,'Race Track','Car',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(21,21,1,1975,'Carousel','Room',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(22,22,1,1975,'Transport','People Mover',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(23,23,1,1998,'Dark Ride','Command Buggy',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(24,24,1,1975,'Roller Coaster','Rocket Ship',1,1,0,0,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(25,25,2,2002,'Dark Ride','Science Buggy',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(26,26,2,1982,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(27,27,2,2005,'Simulator ','Glider',1,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(28,28,2,1982,'Dark Ride','Future Train',0,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(29,29,2,1999,'Dark Ride','Test Car',1,1,1,1,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(30,30,2,2003,'Dark Ride','Spaceship',0,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(31,31,2,2007,'Dark Ride','Clam Shells',1,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(32,32,2,2007,'Boat','Boat',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(33,33,2,2016,'Boat','Boat',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(34,34,3,1987,'Simulator','Starspeeder',0,1,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(35,35,3,2008,'Dark Ride','Toy Buggy',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(36,36,3,2018,'Roller Coaster','Slinky Dog',0,0,0,0,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(37,37,3,2018,'Spinning Ride','Flying Saucers',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(38,38,3,1994,'Dark Ride','Service Elevator',1,1,0,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(39,39,3,1999,'Roller Coaster','Cadillac Limo',1,1,1,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(40,40,4,2017,'Simulator','Banshee Flyer',1,0,0,0,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(41,41,4,2017,'Dark Ride','Raft',1,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(42,42,4,1998,'Safari','Truck',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(43,43,4,1998,'Train','Train',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(44,44,4,2006,'Roller Coaster','Train',1,1,1,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(45,45,4,1999,'River Rapids','Raft',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(46,46,4,1998,'Dark Ride','Time Traveler',1,1,0,1,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(47,47,4,2002,'Roller Coaster','Spinning Car',0,0,0,0,1,'2018-08-12 23:40:48','2018-08-12 23:40:48'),
	(48,48,4,2002,'Carousel ','Triceratops',0,0,0,0,0,'2018-08-12 23:40:48','2018-08-12 23:40:48');

/*!40000 ALTER TABLE `ride_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rides`;

CREATE TABLE `rides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `park_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `rides` WRITE;
/*!40000 ALTER TABLE `rides` DISABLE KEYS */;

INSERT INTO `rides` (`id`, `name`, `park_id`, `created_at`, `updated_at`)
VALUES
	(1,'Walt Disney World Railroad','1',NULL,NULL),
	(2,'Jungle Cruise','1',NULL,NULL),
	(3,'The Magic Carpets of Aladdin','1',NULL,NULL),
	(4,'Pirates of the Caribbean','1',NULL,NULL),
	(5,'Splash Mountain','1',NULL,NULL),
	(6,'Big Thunder Moutain','1',NULL,NULL),
	(7,'Tom Sawyer\'s Island','1',NULL,NULL),
	(8,'Haunted Mansion','1',NULL,NULL),
	(9,'Liberty Belle Riverboat','1',NULL,NULL),
	(10,'The Barnstormer featuring the Great Goofini','1',NULL,NULL),
	(11,'Dumbo the Flying Elephant','1',NULL,NULL),
	(12,'it\'s a small world','1',NULL,NULL),
	(13,'Mad Tea Party','1',NULL,NULL),
	(14,'The Many Adventures of Winnie the Pooh','1',NULL,NULL),
	(15,'Peter Pan\'s Flight','1',NULL,NULL),
	(16,'Prince Charming Regal Carousel','1',NULL,NULL),
	(17,'Seven Drawfs Mine Train','1',NULL,NULL),
	(18,'Under The Sea: Journey of the Little Mermaid','1',NULL,NULL),
	(19,'Astro Orbiter','1',NULL,NULL),
	(20,'Tomorrowland Speedway','1',NULL,NULL),
	(21,'Carousel of Progess','1',NULL,NULL),
	(22,'Tomorrowland Transit Authority PeopleMover','1',NULL,NULL),
	(23,'Buzz Lightyear\'s Space Ranger Spin','1',NULL,NULL),
	(24,'Space Mountain','1',NULL,NULL),
	(25,'Journey into Imagination with Figment','2',NULL,NULL),
	(26,'Living with the Land','2',NULL,NULL),
	(27,'Soarin\' Around The World','2',NULL,NULL),
	(28,'Spaceship Earth','2',NULL,NULL),
	(29,'Test Track','2',NULL,NULL),
	(30,'Mission: Space','2',NULL,NULL),
	(31,'The Seas with Nemo & Friends','2',NULL,NULL),
	(32,'Gran Fiesta Tour starring the Three Caballeros','2',NULL,NULL),
	(33,'Frozen Ever After','2',NULL,NULL),
	(34,'Star Tours - The Adventure Continues','3',NULL,NULL),
	(35,'Toy Story Mania!','3',NULL,NULL),
	(36,'Slinky Dog Dash','3',NULL,NULL),
	(37,'Alien Swirling Saucers','3',NULL,NULL),
	(38,'The Twilight Zone Tower of Terror','3',NULL,NULL),
	(39,'Rock N\' Roller Coaster starring Aerosmith','3',NULL,NULL),
	(40,'Avatar Flight of Passage','4',NULL,NULL),
	(41,'Na\'vi River Journey','4',NULL,NULL),
	(42,'Kilimanjaro Safaris','4',NULL,NULL),
	(43,'Wild Africa Trek','4',NULL,NULL),
	(44,'Expedition Everest','4',NULL,NULL),
	(45,'Kali River Rapids','4',NULL,NULL),
	(46,'Dinosaur','4',NULL,NULL),
	(47,'Primeval Whirl','4',NULL,NULL),
	(48,'TriceraTop Spin','4',NULL,NULL);

/*!40000 ALTER TABLE `rides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
