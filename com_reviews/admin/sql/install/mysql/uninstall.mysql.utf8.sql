DROP TABLE IF EXISTS `#__reviews_restaurants`;
DROP TABLE IF EXISTS `#__reviews_comments`;

DELETE FROM `#__content_types` WHERE `type_alias` = 'com_reviews.restaurant';
