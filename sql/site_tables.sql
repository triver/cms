/*
/ create site info table
*/
DROP TABLE IF EXISTS `site_info`;

CREATE TABLE `site_info` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `key_name` varchar(20) NOT NULL,
  `key_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `site_info` (`id`, `key_name`, `key_value`) VALUES
     (1,'name','Site Name'),
     (2,'email','info@domain.com'),
     (3,'street_address','Baker Street 12'),
     (4,'city','Stockholm'),
     (5,'postal_code','112 47'),
     (6,'phone','123456789'),
     (7,'description','Site description'),
     (8,'og_image','OG Image');
     
     
/*
/ create news table
*/
DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news` (`id`, `title`, `content`,`date`) VALUES
     (1,'Old News','First news content...', CURDATE() ),
     (2,'Latest News','Second news content...', CURDATE() );

/*
/ create board members table
*/

DROP TABLE IF EXISTS `board_members`;

CREATE TABLE `board_members` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT, 
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `duty` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `board_members` (`id`, `first_name`, `last_name`, `email`, `phone`, `description`, `image`,`duty`) VALUES
     (1,'Big','Boss','bigboss@domain.com', '0739161806','I am Big Boss.','boss.jpg','president'),
     (2,'Annie','Lööf','nextboss@domain.com', '0764553729','I am not so bossy boss.','lindalov.jpg','Madam secretary');


/*
/ create members table
*/

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `phone`, `description`, `image`,`active`) VALUES
     (1,'John','Doe','jhon@domain.com', '0739161806','I am John','johndoe.jpg',1),
     (2,'Linda','Löv','linda@domain.com', '0764553729','I am Linda','lindalov.jpg',1);