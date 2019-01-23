/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `auth_key` varchar(32) NOT NULL,
  `access_token` varchar(40) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `oauth_client` varchar(255) DEFAULT NULL,
  `oauth_client_user_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `registration_ip` varchar(50) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '2',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `logged_at` int(11) DEFAULT NULL,
  `confirmation_token` varchar(50) DEFAULT NULL,
  `confirmation_sent_at` int(11) DEFAULT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `recovery_token` varchar(32) DEFAULT NULL,
  `recovery_sent_at` int(11) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registered_from` int(11) DEFAULT NULL,
  `logged_in_from` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `access_token`, `password_hash`, `oauth_client`, `oauth_client_user_id`, `email`, `registration_ip`, `status`, `created_at`, `updated_at`, `logged_at`, `confirmation_token`, `confirmation_sent_at`, `confirmed_at`, `unconfirmed_email`, `recovery_token`, `recovery_sent_at`, `blocked_at`, `registered_from`, `logged_in_from`) VALUES
	(1, 'amministratore', 'CMBiXTIBBAOg3rOqxeVMQB_dpau17Ln-', 'PyoUw0pbBNNifwBJCcf9go5XR4bBpPTiogDohM-L', '$2y$13$PSZwxgWPNAbHAZLjFzYruu4o6K4hEJwjehPChe4Plom/bn/5YuBZm', NULL, NULL, 'amministratore@smartisland.it', NULL, 2, 1497792276, 1515240623, 1527013544, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'manager', 'TBgh3S4mKEU0346hVf4CchoCRXEcq4ny', 'jeGqqQffQfhvR7D2g7nZUC462QlDfs9AmlwhSNvN', '$2y$13$/rLRoh2dP5l0jZIGLeJS6eSt6ZL9zeQl3fWNXQeKJ/FuT7TggRhLa', NULL, NULL, 'manager@example.com', NULL, 2, 1497792277, 1497792277, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'user', 'b51t-_sK4dJsDMIBmGUx6TcEyqzxHkBX', 'GpNJTKgFx7CcDqZGpYJqDVv0FDjUMoFuT2F2Scms', '$2y$13$URquFvCmU4gGOMqL/7kAWel0qzjnd6a.ghHdAKOOCk.nYl./6j3lS', NULL, NULL, 'user@example.com', NULL, 2, 1497792278, 1497792278, 1511433395, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `avatar_path` varchar(255) DEFAULT NULL,
  `avatar_base_url` varchar(255) DEFAULT NULL,
  `locale` varchar(32) NOT NULL,
  `gender` smallint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

DELETE FROM `user_profile`;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` (`user_id`, `firstname`, `middlename`, `lastname`, `avatar_path`, `avatar_base_url`, `locale`, `gender`) VALUES
	(1, 'dasfsf', 'sfsdgfsdg', 'vdsgdsgsd', '1/1vhWOrmCmQ9HE0xQBf0c0fNM0oS8Sx4S.jpg', 'http://www.agrodati.com/smartfarm/storage/web/source', 'it-IT', 2),
	(2, NULL, NULL, NULL, NULL, '', 'en-US', NULL),
	(3, NULL, NULL, NULL, NULL, '', 'en-US', NULL);
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
