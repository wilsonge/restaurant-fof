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
  `date` DATETIME NOT NULL,
  `username` int(11) NOT NULL,
  `comment` TEXT NOT NULL,
  PRIMARY KEY  (`reviews_comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__content_types` (`type_title`, `type_alias`, `table`, `rules`, `field_mappings`, `router`, `content_history_options`) VALUES
('Restaurant', 'com_reviews.restaurant', '{"special":{"dbtable":"#__reviews_restaurants","key":"id","type":"Restaurant","prefix":"ReviewsTable","class":"FOFTable","config":"array()"}, "common":{"dbtable":"#__ucm_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}', '', '{"common":{"core_content_item_id":"reviews_restaurant_id","core_title":"name","core_state":"enabled","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"},"special":{"address":"address","city":"city","county":"county","country":"country","postcode":"postcode","telephone":"telephone","mainrating":"mainrating","staffrating":"staffrating","foodrating":"foodrating","servicerating":"servicerating","atmosphererating":"atmosphererating","pricerating":"pricerating"}}', '', NULL);
