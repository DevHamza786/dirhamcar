# Host: localhost  (Version 8.0.30)
# Date: 2024-01-01 21:52:57
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "blogs"
#

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "blogs"
#

INSERT INTO `blogs` VALUES (1,'Tips for Renting Luxury Cars in UAE','tips-for-renting-luxury-cars-in-uae','seo title','seo Description','<p><b>Tips for Renting Luxury Cars in UAE</b><br></p>','mountains','1703074150_car.png',1,'2023-12-20 11:54:34','2023-12-20 11:54:34');

#
# Structure for table "car_addons"
#

DROP TABLE IF EXISTS `car_addons`;
CREATE TABLE `car_addons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_aed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_usd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "car_addons"
#

INSERT INTO `car_addons` VALUES (1,'first addon','first-addon','3000','300','1703068201_car.png',0,'2023-12-20 10:28:46','2023-12-20 10:28:46'),(2,'Personal Accident Insurance','personal-accident-insurance','20','80','1703709159_car.png',1,'2023-12-28 01:32:39','2023-12-28 01:32:39'),(3,'Super Collision Damage Waiver','super-collision-damage-waiver','40','90','1703709246_car.png',1,'2023-12-28 01:34:06','2023-12-28 01:34:06'),(4,'Global Positioning System','global-positioning-system','35','70','1703709313_car.png',1,'2023-12-28 01:35:13','2023-12-28 01:35:13');

#
# Structure for table "car_features"
#

DROP TABLE IF EXISTS `car_features`;
CREATE TABLE `car_features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "car_features"
#

INSERT INTO `car_features` VALUES (1,'Sensor test','sensor-test','1703066299_car.png',1,'2023-12-20 09:42:20','2023-12-20 09:42:20'),(2,'Sensor test 2','sensor-test-2','1703066299_car.png',1,'2023-12-20 09:42:20','2023-12-20 09:42:20');

#
# Structure for table "car_types"
#

DROP TABLE IF EXISTS `car_types`;
CREATE TABLE `car_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_aed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_usd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "car_types"
#

INSERT INTO `car_types` VALUES (1,'Economy Car','economy-car','4000','27000','1703058775_icon.png','1703058907_car.png',1,'2023-12-20 07:52:55','2023-12-20 07:52:55'),(2,'Suv car','suv-car','5000','3000','1703059393_icon.png','1703059393_car.png',1,'2023-12-20 08:03:13','2023-12-20 08:03:13');

#
# Structure for table "cars"
#

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passager` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_shift` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `baggage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `door` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_aed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_usd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_type_id` int NOT NULL,
  `car_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_feature_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branches` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `is_feature` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "cars"
#

INSERT INTO `cars` VALUES (1,'Model test','1997','40','Gear Shift','40','3','Car Detail','400','500',1,'1703086341_car.png','Milage','red','1,2','',10,'Title','Meta Title','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Seo Content</span><br></p>','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Meta Description test</span><br></p>',1,0,'2023-12-20 14:55:49','2023-12-20 14:55:49'),(2,'Model test 2','1997','5','Gear Shift','1','Door','Car Detail','9000','5000',1,'1703086497_car.png','Milage','Car Color','2','',10,'Title','Meta Title','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Seo Content</span><br></p>','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Meta Description</span><br></p>',1,0,'2023-12-20 15:34:57','2023-12-20 15:34:57'),(3,'new one','2007','4','over','4','4','good','15000','3000',2,'1703375762_car.jpg','Milage','red','2','0',10,'City','Meta Title','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Seo Content</span><br></p>','<p><span style=\"color: rgb(52, 57, 94); font-family: Nunito, &quot;Segoe UI&quot;, arial; font-weight: 600; letter-spacing: 0.5px;\">Meta Description</span><br></p>',1,0,'2023-12-24 04:56:02','2023-12-24 04:56:02');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (3,'2014_10_12_000000_create_users_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_12_16_114255_create_car_types_table',2),(6,'2023_12_19_130934_slug_to_car_types',3),(7,'2023_12_20_081322_create_car_features_table',4),(8,'2023_12_20_101347_create_car_addons_table',5),(9,'2023_12_20_103818_create_blogs_table',6),(10,'2023_12_20_114551_slug_to_blogs_table',7),(11,'2023_12_20_125025_create_cars_table',8),(12,'2023_12_21_072130_branch_to_cars_table',9),(13,'2023_12_23_113608_add_is_features_to_cars_table',10),(14,'2023_12_26_203313_country_to_users_table',11),(15,'2023_12_26_220648_create_reservations_table',12),(16,'2023_12_26_221340_payment_to_reservations_table',13);

#
# Structure for table "personal_access_tokens"
#

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "personal_access_tokens"
#


#
# Structure for table "reservations"
#

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pick_up` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_pickup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pickup_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `payment_status` int NOT NULL,
  `remaining_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_seat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` int DEFAULT NULL,
  `license_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "reservations"
#

INSERT INTO `reservations` VALUES (121,'10044255400000','test','test2','2024-01-01','2024-01-04','10:36','10:36',39,1,'0','0','','1200','60','1260','1260',1,'','','aed',0,'2024-01-01 10:49:08','2024-01-01 10:49:08'),(122,'10044255400001','test','test2','2024-01-01','2024-01-04','10:36','10:36',39,1,'0','3','2,3,4','1800','90','1890','1890',1,'Bentley Continental GT.png','Porche 911.png','aed',1,'2024-01-01 10:50:09','2024-01-01 10:55:49'),(123,'10044255400002','test','test2','2024-01-01','2024-01-04','10:36','10:36',39,1,'0','1','2,3','1485','74.25','1559.25','1559.25',1,'Corvette C8 Stingray.png','Porche 911.png','aed',0,'2024-01-01 12:08:48','2024-01-01 12:08:48'),(135,'10044255400003','test','test2','2024-01-01','2024-01-04','14:13','14:13',39,1,'0','2','2,3,4','2430','121.5','2551.5','2551.5',1,'Bentley Continental GT.png','Corvette C8 Stingray.png','usd',1,'2024-01-01 14:14:11','2024-01-01 14:14:11');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_driver_confirmed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'0','Admin','','dirhamcars@gmail.com','2023-12-19 17:56:23','$2y$10$Tvh0N18aAdysVpwcWpUYVO7tF88uGxj7e6rCLBLfpju0V9aKmrWv.','',1,'','','',NULL,NULL,NULL),(39,'056b5b28-46d9-4eb4-a5e7-7bd10e49995f','junad','bhatti','junaidmasih102@gmail.com','2024-01-01 13:04:07','','03112190270',2,'fb area','true','OM',NULL,'2024-01-01 08:04:07','2024-01-01 08:04:07');
