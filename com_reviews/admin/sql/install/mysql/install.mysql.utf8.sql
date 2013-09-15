CREATE TABLE IF NOT EXISTS `#__reviews_restaurants` (
  `reviews_restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` TEXT NOT NULL,
  `address` TEXT,
  `city` varchar(100),
  `county` varchar(100),
  `country` varchar(100),
  `postcode` varchar(100),
  `telephone` varchar(255),
  `locked_by` bigint(20) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `enabled` tinyint(3) NOT NULL DEFAULT '1',
  `hits` int(11) DEFAULT  '0',
  `mainrating` int(1) NOT NULL,
  `staffrating` int(1) NOT NULL,
  `foodrating` int(1) NOT NULL,
  `servicerating` int(1) NOT NULL,
  `atmosphererating` int(1) NOT NULL,
  `pricerating` int(1) NOT NULL,
   PRIMARY KEY  (`reviews_restaurant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__reviews_comments` (
  `reviews_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` DATETIME NOT NULL,
  `username` int(11) NOT NULL,
  `comment` TEXT NOT NULL,
  PRIMARY KEY  (`reviews_comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;