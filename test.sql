CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`),
  CONSTRAINT `fk_post_coin_table` FOREIGN  KEY (`id`) REFERENCES `coin_table` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION, 
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8