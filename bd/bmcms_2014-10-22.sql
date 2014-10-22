# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: bmcms
# Generation Time: 2014-10-22 13:00:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `feature_image` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `content`, `slug`, `category_id`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`, `is_published`, `excerpt`, `feature_image`, `meta_title`)
VALUES
	(16,'Chelsea v Arsenal ','<p>October 5th saw the coming together of two huge rivals to battle it out for not only a greater edge in the Premier league title but pride on the pitch. It also saw the reunion of two old adversaries as Arsene Wenger and Jose Mourinho came face to face once again. For months prior the pair have been locked in a war of words. Arsene could be seen to have started the spat as he claimed Mourinho was playing down his title chances as he had a &#39;fear to fail&#39;. This fuelled an angry response as Mourinho branded him &#39;a specialist in failure.&#39; However if you are to delve deeper into the history books you would see that this is not the first time the pair have been at each other&#39;s throat&#39;s. With all this in mind it was virtually expected what was to come!</p>\r\n\r\n<p><img alt=\"\" src=\"http://footballticketspads.bonddemo.com/uploads/78025470-diegocostagetty3-200038.jpg\" style=\"float:left; height:351px; padding:10px; width:624px\" />It was a slowish start to the game with Chelsea looking comfortable passing the ball around and in control of the game. Neither team hugely looked like threatening as the half went on.</p>\r\n\r\n<p>It was finally a mazy run by Eden Hazard beating 3 Arsenal players on his way into the box that unlocked the Arsenal defence. The Chelsea winger was scythed down just as he was preparing to shoo, a penalty was awarded and the chance for Chelsea to draw first blood. It was Hazard that steeped up to the plate and coolly rolled the ball into the bottom corner! One nil Chelsea! The game saw few real clear-cut chances following this moment of magic. Despite a scare for the visiting team as a cross was almost deflected in, clipping the post.</p>\r\n\r\n<p>An embarrassing incident, no more than &#39;handbags&#39; was witnessed worldwide on the touch line. Mr. Wenger whom was unhappy with a foul sauntered over to where the incident occurred near Jose Mourinho&#39;s technical area. Very characteristically he showed his displeasure to this, uttered some words to which Arsene proceeded to shove the Chelsea boss in the chest. The Arsenal boss may be seen as rather fortunate not to have had any action taken against him.</p>\r\n\r\n<p><img alt=\"\" src=\"http://footballticketspads.bonddemo.com/uploads/78025709-mourinhowengergetty-200227.jpg\" style=\"float:right; height:249px; padding:10px; width:624px\" />The second half saw the newly settled Spanish duo combine once again as they so often have this season for Chelsea! Cesc Fabregas picked up the ball just inside his own half to play a perfectly weighted ball splitting apart his former teams back line. Who else but Diego Costa to be the man galloping free with gusto onto this delicious pass. The in form Chelsea man delicately dinked the ball over and incoming Wojciech Szczęsny to double Chelsea&#39;s lead!</p>\r\n\r\n<p>Soon to follow was an unbelievable chance for Diego costa to get his second but it was one the Chelsea forward squandered. As the ball was laid across the box he somehow managed to put it over the bar.</p>\r\n\r\n<p>The game finished at 2-0 with what was a comfortable victory for Chelsea who looked dominant containing Arsenal to not a shot on target. Arsenal fans maybe discontented with a few niggly fouls that disrupted the passing game we are so accustomed to seeing arsenal play. But it was the quality in Chelsea&#39;s play that got them over the line.</p>\r\n\r\n<p>Don&#39;t forget to check out next months feed as we cover an always action packed, anger fuelled Manchester derby. Until next time!</p>\r\n','chelsea-v-arsenal',8,'','','2014-10-05 11:16:08','2014-10-15 20:03:46',1,'October 5th saw the coming together of two huge rivals to battle it out for not only a greater edge in the Premier league title but pride on the pitch. It also saw the reunion of two old adversaries as Arsene Wenger and Jose Mourinho came face to face once again. For months prior the pair have been locked in a war of words. Arsene could be seen to have started the spat as he claimed Mourinho was playing down his title chances as he had a \'fear to fail\'. This fuelled an angry response as Mourinho branded him \'a specialist in failure.\' However if you are to delve deeper into the history books you would see that this is not the first time the pair have been at each other\'s throat\'s. With all this in mind it was virtually expected what was to come!','',''),
	(17,'November Football ','<p>With the season well under way and the Premier League beginning to shape itself November comes as a vital month in the calendar. There&#39;s plenty of high profile matches to enjoy. November gets underway with top of the table clashes such as Liverpool v Chelsea followed by<br />\r\nArsenal v Manchester United and a few mouth watering ties in the Champions League as Manchester City take on Bayern Munich and Liverpool travel to the Bernab&eacute;u. Don&#39;t miss the likes of Liverpool v Basel or Arsenal v Borrusia Dortmund, which although may not be the biggest fixture, they are likely to be key to the progression of these two top English sides. There&#39;s always that added spice and excitement in the build up to these deciders! Don&#39;t miss out on tickets to see these game live with Football Ticket Pad! All our options are on the relevant team pages so take a look!</p>\r\n\r\n<p>Keep an eye on Queens park rangers v Aston villa and Newcastle v Leicester. Both home teams will be fighting for their lives in a bid to avoid being in that dreaded relegation zone at Christmas. Statistics show teams who are sat bottom of the table come Christmas Day are highly likely to go down.</p>\r\n\r\n<p>Anyone who is the bottom 6 this stage of the season is susceptible to the drop, such is the drama of the Premier League. It&#39;s not surprising for teams to miraculously escape the plummet to the Championship at the last gasp. It was only last season that Sunderland pulled off the great escape beating Chelsea, Manchester United and drawing to Manchester City to leave the whole country bewildered! So who knows what this season will have to throw up!</p>\r\n\r\n<p>Furthermore, November is also the month of derbies! Manchester city v Manchester United, Bayern Munich v Dortmund and Chelsea v Queens Park Rangers. These games are always full of spice and passion and well worth a watch! We offer tickets in both ends. Whoever you root for you can be rest assured you can sit with your fellow fans when booking with Football Ticket Pad.</p>\r\n\r\n<p>Unlike most others we have the capacity to offer seats in the away end to any game you are interested in! This is despite there being only a few thousand available to these games. We really do have everything you could possibly hope for in terms of ticket selection and customer service!</p>\r\n','november-football',8,'','','2014-10-13 11:18:45','2014-10-15 19:58:41',1,'With the season well under way and the Premier League beginning to shape itself November comes as a vital month in the calendar. There\'s plenty of high profile matches to enjoy. November gets underway with top of the table clashes such as Liverpool v Chelsea followed by\r\nArsenal v Manchester United and a few mouth watering ties in the Champions League as Manchester City take on Bayern Munich and Liverpool travel to the Bernabéu. Don\'t miss the likes of Liverpool v Basel or Arsenal v Borrusia Dortmund, which although may not be the biggest fixture, they are likely to be key to the progression of these two top English sides. There\'s always that added spice and excitement in the build up to these deciders! Don\'t miss out on tickets to see these game live with Football Ticket Pad! All our options are on the relevant team pages so take a look!','',''),
	(18,'The Launch of Football Ticket Pad','<p>This week sees the launch of Football Ticket Pad! Your online market place for all football tickets across Europe. Delve into all the pages on our site to see the great wealth of options on offer.</p>\r\n\r\n<p>With one of the biggest inventories of tickets on the web, the huge range of stock our broker&rsquo;s hold means we are in the best position to fulfill your every desire. No longer sit in the two same seats again at your beloved club. Cherry pick from seats lower behind the goal with the boisterous die hard fans bellowing in unison your teams passion felt songs! Sit shortside upper tier for a great view across the length of the pitch directly behind the goal to catch any goals at the very best angle. In our opinion longside seats are the better option! With us you can sit on the upper tier or the lower tier both providing great views of the game. For those that want to feel close to the players and almost as if you are sat in the dugout yourselves we highly recommend some longside lower seats.</p>\r\n\r\n<p>If u are a die hard Liverpool fan you will be elated too know we can offer seats in the world renowned kop stand! There is no atmosphere more electric in football! Whether you are an avid follower or a first timer at Anfield it&#39;s an unmissable experience.</p>\r\n\r\n<p>In addition to offering every section in the stadium, we go even more specific than that! Our suppliers even list blocks and rows of sections in the crowd so you can see exactly where you&#39;ll be sat before even making your purchase!</p>\r\n\r\n<p>Not only can we provide standard seats for any match, there&#39;s much more.. If you are seeking exclusive executive seats to entertain clients or to enjoy a game with some fine cuisine this is more than within our repertoire. Group and companies booking is a big feature of Football Ticket Pad we are well equipped to deal with any itinerary put in front of us and any sized group. Just leave it in the hands of professionals to tailor your dream football weekend.</p>\r\n\r\n<p>If you fancy going further afield to witness a different style of football in Germany or Spain or even France with Football Ticket Pad you can order tickets in each of these countries and many more across Europe. We are just a phone call away for any queries you may have. Let the bookings commence!</p>\r\n\r\n<h2>Special offers</h2>\r\n\r\n<p>Special offers on Liverpool v Real Madrid experience the magical atmosphere on Champions League nights at Anfield! The last time these two giants met it was a stroll in the park for Liverpool. On what must have been one of their best European nights Liverpool came out 4-0 winners leaving a Real Madrid squad of &#39;galatico&#39;s&#39; shell shocked before heading back home to Spain. It&#39;s been 5 years since this historic club last took part in the competition so tickets are selling fast. Take advantage early of these fantastic prices to avoid disappointment.</p>\r\n\r\n<h2>Chelsea v Everton</h2>\r\n\r\n<p>This fixture always throws up some cracking games with two of the Premier Leagues biggest physical teams going hammer and tongs! Already this season this game at has been one of the highlights. The reverse fixture at Goodison Park saw a 9-goal thriller and some great goals with ex Chelsea man Eto&#39;o scoring against his former club with his first touch! The Toffees fought back after conceding an early two goals. The sides then traded five goals in a manic 10 minute second half spell. It would be an injustice for any Chelsea or Everton fan to miss this replay so don&#39;t hesitate to order this game, prices won&#39;t stay discounted long!</p>\r\n\r\n<h2>Arsenal v Dortmund</h2>\r\n\r\n<p>We have some incomparable prices all over the stadium for this potential qualification deciding Champions League tie. Sit in Arsenals club level and enjoy a fine meal before the game with a pre match programme, padded seats, middle tier seating and a great price you can enjoy this game in style. We have an either cheaper option in short side seats where you can find yourself sat right by the raucous away fans for a night that will be the most atmospheric of your life!</p>\r\n\r\n<p>These two teams are no strangers to each other having met numerous times recently in the competition. This always makes a great game with both managers having to try new different tactics, players and formations in a bid to outwit there opponent.</p>\r\n\r\n<p>If you&rsquo;re yet to witness Champions League nights at the emirates now is your chance!</p>\r\n\r\n<h2>Manchester United v Manchester city</h2>\r\n\r\n<p>We have a special offer on this highly sought after game with some rock bottom prices for this week only! Don&#39;t miss your chance on this one! In recent years the noisy neighbour&rsquo;s have only been getting noisier and the once great Manchester United are playing catch up. It will be an interesting prospect after Manchester United&#39;s big spending summer where they assembled a squad of superstars.<br />\r\nWatch in anticipation to see if Van Gaal&#39;s new set of stars can halt the rise of Manchester city. Who will claim the bragging rights?! Will it be the blue half of Manchester or the red?! Why don&#39;t you find out live at the Etihad!</p>\r\n','the-launch-of-football-ticket-pad',8,'The Launch of Football Ticket Pad','This week sees the launch of Football Ticket Pad! Your online market place for all football tickets across Europe. ','2014-10-30 11:19:03','2014-10-20 09:44:04',1,'This week sees the launch of Football Ticket Pad! Your online market place for all football tickets across Europe. Delve into all the pages on our site to see the great wealth of options on offer.','/uploads/2014/10/13/banner-robben-121853.jpg','test title');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table articles_tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles_tags`;

CREATE TABLE `articles_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `articles_tags_article_id_index` (`article_id`),
  KEY `articles_tags_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table cache
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;

INSERT INTO `cache` (`key`, `value`, `expiration`)
VALUES
	('BM_CMS_bm-theme-config','eyJpdiI6IlFFeDNKRDhra1FBSHNEaVE3blJoOXc9PSIsInZhbHVlIjoibmhLUjdcL01XVW1VVk5DSHQ2blwvdGl6UkNjdTRqNHVcL216WWlvSkRaZlYzcXFiWU1UNFlIcVhCcTNRbWoxa2g4dTNxWk54UjFza21DVldzRUswYnM4cmVBeG9aZWJLUUx0VXA3bVZUM2pNbHlvQ1NjT25jUFJtbUNraktzaWlLWmc3REtMWlJpVVdWWUpqVGJEMGFHVlp5YlwvNFBrMDhCbVhUeDZTSUVucjZMZVwvY3JJSmtSYlwvV1ZCUWN0R1wvV2pGTTJwWitzWGpXZjI5NHE5WlV5UUxoVThnREpoeHVjZjl0WWUyblBVY205VG9VTWVwZ2NGNHJUZzhudGE3Z1pIb29QU1hiTFE2VWtHRzNwalFUbUZkeVd5dEp3ejZDY1BGcjArUnFvUDVyM3dpWVRlQjAzRzc2dFhwMGM0SkEyRTFtMXE4WmVOUDZBY01zc1Y2QUphMXVGYVpWVVI3akM5Zlljb2hRcFV5eE5GMDBRWU9sTUZYZGhxM2RtOGxna0IxMFRlbXdFQ1I3a1V4dmVMKzRQMmV5WEdiM3UzRHExOXA1clVaNEp2NmhjVFV3N2RPeGRcL3VDa3hsaTZYSkt2ZlZRTUE3c0Q0bVNcL2hNa0JJQ2d5UlJpUGE3bDRtOU9tenRRRGk0YTQwNEh4eW5UaG5DT3Exb1NxR0FnSzVQdzRqdDZKTjFQbUxOWHJzWU9pYVpvSG5ISFNwSzFNZDA1Y3duY0p2R0tHa3drM3J5UkQwb2tpM2pUZk0xZ2Z4NXN5ME1WRThZVndVYVA5a3NiSlR5YTZvQ3UyOFFtM1JWNzdEMlBjM0kxTHJiQWVjUnhQckpXVGZcL01UWGRBamFkbmN6YWUiLCJtYWMiOiJmYzgxOWNkNjdkMWM2YmI5ZDI5NDg4NmE5YThkNzVlODZmYTVjYjlkZmY3OWEwM2U1ZWEyZjA5MGFjMWFlNGFjIn0=',1408706470),
	('BM_CMS_route-httpbmnewdev-1','eyJpdiI6InhydFNpeCswVVwvUHE3WnJIekRjdU5RPT0iLCJ2YWx1ZSI6IjNzQlJoSkhpV1VPMUdweURhaGhSTlM0TjJhOWJyZ2hsTEhMZXdQT3grWm1xYnR0Q24yaGV2SnVUNmV3Tnduem9PVm56MjNRdW5QY0NScUtoaXkwQzVcL2xIK1JoTnZCSnBsT0E5cjNqQXpwMUN0RUFBSWJYYkFcLyticXZOeFwvQzJTUkJ6QlM3dUhaU0U5NVJITUt3RjJMa2loalBGU1NrdW4zamprb1wvYXJYWlZBbVFsMllST2tnQU8wUnR0akh6MXlmQTJGa1VuNmxmMlwvUXJucHNUTlpacHlNVEpSdjF0c09zTjk1NG5kdlh4RnBPaHF5cjI3a3I1VzVrOVEweHV1K3JTNFZ6K21yMU5VclEyc1wvMHNmVk5TT0tKVFc0eGN6ejRXRHk0Qkx1NWRwZGJybEF6MHpSOEZoVnNyYzdhY0oxQUxLaFpHYnJDWXNhanVkVWtQV0FQUHlYRGdOUzBhTGdRd0JHS1FodlBqWkhzVDNYVjNJbWRvUGdlWFVicXZUb2wrVGVzazVxMmQyWG81dzNoeEQxcjRXVStBRTBDdkdpVlwvdWVKcmVwUW00aGcxWWRNZlMzZzA1KzN5a0s3MGJWc2QxMGJZbmFkR1REc08rakF0cE5uMjk4dlRZa1d1OFE3NlE1bmR2TGVoTmJYTWk4THh5K0gxVWJjQk9sSG9KS2pncEZuY015WDVyQkJwQU1aWVJsTUFjc2wzWVhTMm13T0VhTExWY2h5Sm5NV0tKSzE1cG9NQ3ZacXBEWEw5ZEY2RFZjN295NzZcL2tnN3R4UVFhUEREMXZoNkxUWmVPZjFKRHZVRVlmMTRQWk1QYlliQVRpaTRXWW9HZmZmRkJmU3lJbHpCcDB1QmhrUjhJU0pDWDBNRzVjSTkyZ1pjQjM2R3lmU1cxb2pudEJzb0h2N2RlOTZqU1ZKbmU5NThjaVlLcjdIQVI4ZlNlcEdKTWxzcWV6QUlORFdmSStrRVpXZUY0b2wzUHY5SVk2aythTmNYXC9XbkpIeTJpZVwvM3hmWXN3Skd4TXJzUWRrUEhDYmFjbUVKVmpXRlwvTWpqOVFRWm5lWFRWZDFMRllHM0NXZE9PWEI1TXF0blZ0enJ4QWl5U2hrdktCTmQzNEFEVGVIc0NkZWVYa2NPdTZIUGZBTVlWS1Nja2kwRGl2Nytvb0l1K3Y1WVhzdzZtZ1wvYUo3aDU5cDh2T0pBQ2piSnJiT01iV0dTa3c1RXgxYTc0dWxoMDloNkxGbTh5VlVDbjd1VUNnd3BZc3BmV1RndndUSWxQQW5tY0lPMTFmOUtVUFh1ZVVjYkZsYkdNZWtnclhMWEFocHc4RTVHVjduUWp2RGJnMkhqZlZuYVFqalVDSHNkYmx0WCs2djFkYVwvc0VRUW1kVWN5R3FuT09GSWFwVThwRmxmZEMwUndpaHREYnA1NW1cLzIxVHdvZXdYNklZYWRBZ0Z5S3cyTXk4YmIrODhqR0twcWl6MVZOZGpKYTZrNFJjSFwvVmdKKzNQaXI5WnVDWmd3N3dzeWFtNlwvaElcL3cralJTdFhESEc5YVZWdXpRc0FlbkVRRDlTYUgyRG1XaE8rTW1Bd2lnOG5OQU1DYU9iWDNMaDI1djhtRzhXdzdsWWxTa2x2c3lISkRrRnhwYzBRc0d1eUNhKzJuUFQ2a2tYZlNseWkwQ2gxU1YyQ2w0WlNMemVyaWthTlIxWld1R2ZcL0pZelNWMUVTR3hnVlB2SURZT25CeUdPblZsblcyMzhUa0JVUDhtTHMzUSt0NzVqdFBOem01Sk5tOHdVXC9LYUhuRHNJUUZqZzFiT0x1Qm5XMlhLd2lteUt1OTFSZnJFVTkweGRhRlR6SjlYQnJpN2diVnp5cjVLc05MOUkzQ044SnkwWGVGTW1cL3ZCWThhZVhraEVmY0g2SWFoc1lNUUVScHJkR0N4N0t6RUpMNW9cL3kwMXM2d2UzdXV2MHV0a2Y4OGRNSGgzcTRoendYN0QxMlc0amJcL08weHc4Qk14YmZ0TmduS2pNQThRS1Fnc3dtMDM0N0xyQTFVMng1WHRRVGlzVVFQZjhoSVlmT09vZDJSa1hoRFVVVFl1cG5wN096SlpxVVBDN290R0dITEVQRndWOVVQUTlRR2RKdjR4NlwvYUFjRkdDR0VJZU51SHZoN3Faam9sZ1BqUGVXaHljbndqeTQxall5MDZMeWtSMWVuWVwvT2ZcLzhEUURFVEtHQU5PYzlFU3VzTkpYdzc3bXN3Z3Q0OVBmOFZqOUtHVWlxbVYxZ0x5aXNlNlFMdTBRN21oSnArMXVrMnRMejF5TzlERjZhdExYdm1PRm9IN01GZTlcL3pBdVwvMnJZeVNBbm9mVFV1VnltOHBabkV5XC9QbGRqUDlJeTN2a3V5WFR0VFR4YXh0RFUxOWZqb3VcL2N6V0VwNFdtN29MajVweVNSalhlSTU4SHNWV2x6RHNWaWU1TkhmWnNtY1lHaUxXZ1Z4YXFhUzVRdEJhS3BUdHdVS3phdjZXVVdFdUhHblB5a1k5TWVMaGw5MHVVc3ZqY0ZPTytWV1R2RjZSRFdHYms2bWZBdENHSXB3Q1Q1OU9rMHJXeVJCMDFzMFZ2dTlRcjErMjBYcyt3UzVrSXpuaktQblhTU0RHbHpyV1wvd240N0dDeEtubVJMc3BnR1hPYWk3b1hoU1Y2ZDFpSDloTjB0Y1lxU2t5Q0tOV3krVU5LTjR2QXdiYTJPeVFlVmhCZUtwa0QydVlFNUdoNlNiV1FBZFNIV3FMd2t3SFd1RDJFU0lGNW5LcVwveTV1Qk5ybFpGT0lERUNsRFg3YnkwU3JHY3VxbllHOFwvWkFKZlkrSHpDY21oSGpXWTdnUUN4aCtVSHQ0QlkwdCtJSXViTjlLUHgxN1Y4UEZJeWFma2F5UDNvZ0FBaDVYZ1JhVHRsTjdcLzRMOExDdkFKdTdPQ1NadVV0Q0xEN3l4ZVwvYTFZTVc1VXpZU3l6UnhVcFd1bU85OVwvaXVWRkFqdCtiakZTWHBXVDBhbGp3dlJ5MHIwZXMyczZ2SFdzU1BYcEdQQ1BqdkVVdXE2U2t6SnMybE13djliQXBQSTZFRlN0b0NQUkpoaVNoTStOam4rRWxZRGVzaVB5YzVtMk5GOGl1NlwvRVcxUE9DVXZlUVJkQllTbE85MXM3bWZPT0VaMDFmYytmVXRsUkd2MktIcDduNGljTEQyM3c2aGxnRXRQWHZrejlpRDNpMEVwUVZpRzR1dGphUHJKUUpzWnZmSzFOT0h2TCthajlXbThvOFU2djVWSTlrN01lM2Q2WGdyY2xMVzMyVnZEVmxTVHNFRWhZaVd3VzFXbUJzVHpZSTMzSmJrbENwXC9IUDI5NXZZbTRVMFM4cDJKYmhCSkZMN09Sem9WZStSS3hCMXN1NUNxMUVYSitEdFwvc1g4cFd0TnNpVHpicUgrOFlwa3hLeUdHZG5oanZ5dTNUelcrWW1kYlRqUFpodVdzXC93czdqSlhDcFpBdkJsWjhiQXh2dlBUaitJb3ZJdExaRHZraHllc1RQV0F6Y3dRcTV1eGhZWDdFOGlMT3Irek1aRGh4aFBNUzhUMFFFQURjZEM3TDBcL3lOZ1hoM2pPVGtwYzdCSCtyazQ1Z3E1Wmd6Z0FRUjFtZFNcLzIycmtuRkV6OUJYeWsxWnJzOTNCMFM0eHRHVmZLaXYwNGZOZG1XaGhqM2RuZDBLVVBTXC9Jd3pESEJQMWJ2R0lQWFwvT2M4VkFVZURSNFVQMHA1djVEcFpnMUR3WWY0TGJKellVaDl5TmZmdkFRaWFGOVdDM3g0ODNwTk9wZWpTSmJDd3lqNVwveGMzSUo2dmpJdHhpb0xNZjgyWU1GWnk3Szc2TkJDRXBFdFBzeGdmNHRmRVZlYWtjT3MxVUxVb25ZQTMxSVhCZlc4NjlGNVIrdU0rVTRsbndFUzIrQ1l6TTlVeUo1NUlKWkxGSE5zQ0JLTk1YWnUrdk5yeWFFTlc1bkttQmtOR1JcL2xaTm9MMGF3UHQ0RnMwR0dIY2k0NSsxVUJ3bzdxMHhMT3pXY2Q5Sk1GMzZ5TUFWTVwvVUVMTlZCU0g1blJRYlwvOWtNQ3p2eEZDbWJ1a0Zsdko1V1E3RjNrdXpnSXppV0t5bkVQZWhwZEVXMHQ2RTdTYmcwWmNjb0g4bXBwRGo5OXNjUWJNZnRTd3JVbzZEeTdHK2xjVEh4ZENocWYyc1wvMTI5OFVnMUxqNFRaYmtyNHZiaDllRnoyUTczM25Ndm1QMHpOYXVCTHNzNWhcL3Ywd0VQTndSQVM1VGtGbjR4a1IraVgxb1dYcklJdmRzdXhFazF4RUEzYTdKUmwyUjRJUlwvZnA1aDVPU1RpekdDRFdIWVpKcExKQUdpdlBpdEFZcGRka0txSms4TTdRbzlXUWowVENoc1daY25XZ1plR29HU2pGd1wvUERXZEFwQ3UxbitwRk4wb0Rib0F0VHA3Z3g0SkFGd2ZNOUNnMWV3VlBIbE50VW1PZVVnZGhzZDVrZTk1S0VIc1RaYXVmV1E5YWhIVDV1c2NJVGYxV1dFMGNwWGYyR21YWE8rZldCV2JxZHZUdjE5YU1YVjNHWjZpWUlOMVcrenRvU0U5R0ZHSnl6TllycGpZK0dtMEh1VmN4SnFNNGxJTW41YktaelpOWFNacjNrdUlodTBwZHJoNjBBMGJaOFphU093UGlYaHVYTGhhY21hUmRzNkp0MEJcL1JXYmJvb0QrallaSzRLS2JDaDR6bmtjclhUenJ5SmwyZXFVSU1NbHVHeVhjMWRXQmNFSFJmVCtFRzBqbjFrenFWSFNmQ0U3VUtiZlRsVXpxc3VGRWltdGVQaGRWTDVGSzU3RnFpakV0ck5oZ05Tb1gzMnhDT3M4dGlrekdqbU94QzI3TDJMdGlUeER0ZUg0bTdUT2ZIYlpzVmRCV05rUFBUZzYzbUdYN0d2K2dmUTZLOEFGcnJYWEdXT3JFeXF6c2tvMEIwcHVhS3NVQk9CbXM1K2tnUjRTUzFOR3YrenIrVWZZcDdIRkFvUXdXVHNGdFZZTENTazk4emlTOVJRWmh3VXZLT3JzM2ViU2kxdlNFdUZ6K1VhMzJXNWJjblo2ZlNRMHkwXC92RDZCNTZcL2ROamV5b1wvOG8wcWFBSHVKam1RZzdwaHhEWk1BN1lSeXdwdUN3SlRISGc1Qkd0UVRLYTVpeGZENWJBck5IeXNaXC8wR1VVZlwvMmI2M0F1VzlFRmtLNG41NmUzdGRNSUNVaWpSdDJOTHpVSEVKT0U3MENRSExwRHJ0bGo2VGpVTUxFWjlkNG9WMiszUm5WbGtuNkUzM2ZneEVhTFV4dTB6RzM5YlRcL0p2T2JQVGNUbkJKdWpPWXFpbnlGOXBhbWZrZVRrUnluXC9uY2NiWSs4Z3RNUmV1NkhOU29OcVY5dld2ZVplOWpnY0ZnN0M3VkxYQ3JWMERkMFdHUjhwRGluWlRBaUpZMzN5MDNlU1VweWRZbWRhOXJNQkZUYXljOWJocGJvS3FPTXozY0RsZmlqMmZUTUFrTkFaVXpQSWFEOEN5RVArOHVVNFZXb1wvdmpiRXRMeFdqS3loaFNnNjlvd1Q0YXlGRDh5Y2o1eDI3OWoxdEcyYSsyRWJUaU9iT3NLcTUrTVRMeFBnaDZDdlR0YnI2TERVZ2tQcWZHeG9JNXMzTkJsR1RseW0xZHduY0JiYm9wMTRhYTlsRG15ZmtmMWYzUUVUcDBud2xxOGIrXC9JRVpMRkUzVTIxK0RMQXo2WEF2VDlUem91WVR5eXhlNDVueWMxc04wRGRcL3Vkbkh6cWw0ZnhZUklPQVoyUG8xWjJlTVl4V1lSbnZNc1VlT0I1NmRRTlFKVGxtalFTeWZCdDBuODZnalMrRllsU2dRQktnMndcL1RXejJNaVZQRnRiTTJodkpvRCtSd2E4bFkyanVENklvY0Q3MERMYTRWQlwvK05Db0tJQ3dLeXYwMFY3TmpMUFJRUW9DWXFTSjdMWkYxbWJBNVJNaStoUEZ3SHBEY3hod2kzclNyb0w1aVJORjNRMGR2ZUJLMU1ETE9ZYkdsQm9kTllBZUhheXQ4U2hUem5KdWV0anBza2kwMjNxbUJRMnBGNlkwUm44UWQ3SEZWNHlBbWZ1ZDBiTkZtYzZDeVc4bFdHVytFMHBZMFNFZE45NlFqcEMwb1pkQ2xFTWZabXRDa0tMUmN1XC9JcGhrUHlneUprWmdTRmdKMkN6Y3NHUkxLd0RGWXNQVW1cL2R2SkhiK0pmc2ExV2R5Mm5acXJSbHo5TGZLOFJpeWtrYk80VzdmNTloUitYaWRKQ3JSeFE3NnpsR3pGbHJzXC9GK0RDamF1bklJUGdaUEdnMDA0VDg5enBLRU1YbjFZMEtReTBcL0d2YXp3NkY0QjdlT2d2XC9FekNPZmsrUklyQW9yd1wvXC96MmIrV1UzN1kzaG1Dekg3OFB5UkZPOG9KVEU3ajdQWVNnVmtuWkZaOHViNnhnbkl1VDlkS1l1YlU3MTJuMHVKbkpudFExRlBFTzNhczJxODJZQjJ3Mkh3N0p2OENqdGthdVBJSEFEUVQzQUV2UzhBdUJYczZEVWJXeVhlY25OZTZHMEVSSklEY0I5NHVcL01qM25ZNW1zOVo1SzFxVlZEaFdGcUJHdTJKS0JnWUlNdUZEOHdSUUwycXZob0NrNjZaaUh4ZjhBQmxmeTNsTm9zVmZsXC95ZDNwSFQ4cjJkYTdrcDAyVUdlRFlmcVRHNkN6WTFTbXhyNU9KcUZPMnY0U1lNdHN6cmxCdWY3MTZPMUhvb21lcHdmTmpIRWQ5aUxFc3djQWtmdVhjZGtESUlZTis2ckg5NVo5S1dWMVQ0UmxaQ1wvYWlQeGprZFdrME8wbFpxRTNVM2t0NTQxR0o3bUo4VVpLb2lvWUxHSEtaa3Q5a0l2V2c1dVNobGdiUDNNWVB5TkFNYkMzVkxBOWp0QmhITEJCY2M1dEg1ZW9HUUVPbkl0OG9QS0tQTHlPK1BDYmxSb3NhOVJZdENCTFZTbjVUU2ZxZ3E1dWRRZGRuTnp4cTdLTHM1OStBTkdGblhtbmtIbElJM0F0NE83ckdMUWM5MWFXRHhrTFc4VDhEU2dVekxkc1Fvd0hQbkZ2OG5uMnZNRUhnWWRuYVcyNmk3dWd6MGtCblVKTVIxZGp2VWdKQTNjT1lrM0lENHVTSjVYYmcrYVhlNG4zOENLQm96OG05YzZxWWtrNTlUb1pwXC9uVVpzeWpPSUpsUU5WUENhbGtwc3BtdmIrUVhmNm5oNmdJVFF3QllGNjB3WEFqZWdcLzB1Y0IydTN5YjRBNGJSKzVwZlozaUpyK29IMUk2aVJPTGtEWVhZaXBEaElIVEkzVzZNSTdkRDdRd1JCT00yZGJIanY1TXNaTWdRRTVUYVdmRlFXXC9wcTNhUXRSNHBCTUNTWHRSK3IycmpONU9BNHlNNXdrVkg1TFNNS2llZ1J5RmFUODJNQWRNYm12SXpHQWYrYUozT2FocWl5TmlKSFlhN1BDRFlPMGxkaGdUMjc1aDNLbHJcL0s1b3RyUVwveVZmWXZiUVV1NGMwZDdzYlhycFpqQVpXQld5b1piZG54UW1SOFd0b240Y0xERmFUMktTVTlLMWVaS1gzVnFCOVFcLzFVR1YzMFwvREpMbVVjeVE3QU91UFdDblExMDBUMkNsb1pGNnpcL0xYM2JxY0pnQXFwZkJcL1B4SmZXWGdCWHNYYThtZ3NcL0xsSXVXNzRUNEdVUmFTSmZHWGVlaUI2V2Z0ZTlpdkZ4RE1xV0RiVmRFbFRQTTVDb042UUx4TXFVazRxbTBTMW93TnlFQ0J3WUxtQzFtempHMFJiK2NYWm9PMlFzblNZMGFJb0R6V2lNNWFrRHlrN0NHSDh2ZDFVNTNiOHpqOXc0aXJlaEhDaENiYVdFcVwvWU12Q3JYY04xU3FWYythUldFN3IzNGFwdVRCU0lNcytKeWF3d2dzUlpIZnNaUzVRQjgzajNpUE9pUERXODhSTkl5cFwvUGF5ZXNSa0NcL1l0emY5UjZuWWZha01qQ3dKXC9ER1M0d21nVmRhWnFZNGdMcDNsc3BuNUg5N3AwMFh3YndxdnRNV3pjQXh5Ukt0MURWVGZ2RVRLcm16OEZkZkgwYWszaWpndzJJMis1XC84N3ZFM3daTjNXaEI1dEJKWm9JMWNkSDUwVTdka3FZSFYwaThHUUptdStCOFhhaHBjamYzb1FlbER6RHd4UTdlME9CNWhlWlhsNDUzUm0xNEEyanJUXC9SNFVzUTdcL1g5TWs5YzRKTlJtT3JlUFhsSHUzSm9LSTRaWWlTWTBwUkNyeUVlSlo1MHEzSnJKNUw5UjhMYXhcL2pIaUlPK3RzcldCSmFBcnkxQmpERGtiS2thMTNjaFRLS3d0ZVQwcHhZXC9OR2gya2pVQklBSTVLRkR4SHBSd0E1WGdiYUI2MTV6bkZMXC9LeVRncHBINlUwRXBsckZDbE5QYWtHQ0pJQVdLUjNTUnlWWXp5Z1VRSVc2WWFycjlKRmFLRTZ3WTdEOG53b2JZUmtVYzFwZktTNmJtVkJ1aENSSWxNXC9YVVBCSWlDOE1uVFpWeFNGdmZucFFSRVRKaTJXcGFvQnRkUFJhZDhWalM2RXAyTEdNbVJ5NlVUTEVFbTJ3SXFOeTZlY2lUSGtpSmlsVERtVUxXVnlHT01RMDAyUGVRUUVMcysxWVVYdHdicThFWkRYOFpSUnhUbGN2T0UyQzZZdlM0NHoxVmJxejUzXC9nQUFqSmlaZzU4Y2cxV2R1TTlNUlhTTndwNmVpblhGbm5BMDVtbFNRUnNJeFcyZHdUNHFDU3pnaHFQYzk4bXpvS3czQjJINDhwUlo2aFoyMzJLYk84RlZWOEJwcWtsSUVBZGZwaStWWEo5SWhRcVc3TGVaVDYyWXlDSWQ3enpucTljT055b09nT296Vk9KWEN4UGdKVTUwVFVwK0sxOUFRWjQ2UUxta1diVXdFRVBsY0JkWWtDbjZFUHo1Rk8wSFd1WWNJd3NiaDZ0QmNpenU3YXBOZVwvSnlzcExQd3duamJzMWVcL3pWcUJuRVlMT3JNcTBWXC9BTHRmSWZsT3ZjckF2SzFlWG9TTFg0RkJpT2ZkRU1vQVk1eUFZajJxUzRZUHRPY25qSWxBSkliaHFpWDRESXdQXC9BRW8yMVRsbVhiVElhXC9KT0NGZGcwZ0poQk9kcFA2STIzazFuWERPSjl4cEZTVERNNnNHek5TZjdlcFU2OGN2RldiS1ZrUXhVb0QrdEhiVHFBVkROeFZBaXFySWlacGNcL0QyOFUyVTlkXC9JYmlmeVVwQndacENoZk50TGZ1YThWb1BTS3h1T0FPbjR3UXAxdVF1WmpQTEQwWHJnamlJU2VqZTF6Nk5sR05OcEIwNFpsR1dzc3ZNM0ZlRlpYTVZHSjQ1VFdxNEdiR1wvQVhsNkdEc2YyV2FXS1BNWHAySDdVQzM2cThnV1BUSGJsOGhGSEZOcUNvQ216VlZnb2VIMTEwZ0hvMWhRTm5oMGljK09SdlB5bzVhTnJnNGRRVnMyVStERE9IRG5WQWRBeHVjZkdMRTFHemJvWkRRVDlQenJ1QVgrMjVDb2JqaEduMGFmSFFlMW9HcFJiXC9rb2tqY0RLY2VzU3A1b29nOENibFgrZGt4cERlaEswcmJ5elNIVjB4ZHRNNllpMDA2OWFsMFpCSjFtTTJmeUFSRWhUbEswaTYyNk9aKzc3Q1BoVVFcL2labmw5SFlBa0wzcll2WTJUcmJqMnhNdzJCb25CZGJ5V2JCbU0ycVdcL3BDS0VKU0VcL3BWNGRrMVVyWlI2d0pVUXVqakxpbzM2dktCTDJLMnk1a21PTUNQWWpIVkVDYUZqS0JJVW54alNhRWNCZnZjSjhwSVlQbGxPdGtBbE1ybXpoTnRLMmNZRHVQXC9sdzNOektGZzZiUVJ6XC9xMjk2ZHpEaThYYkNqa1FubStuTnRqa1JDcGdDcWhmaXZDVm5EOHNnNVNTbWphSnVWVUxpTkVqWUxXcERsaHZ2b2lLd3Vza0IwZm1QcVJjcFNMRDNSbkFsdEdPYlRLUUtjbERVNDc5NmQ1SG5ZeVluUGFQWHdKcTFkYmJob1RFK0hHMmtraWR3QVhWcUlSbThVK1kraGoxYjNcL01rOEJmaE55WEVwKzhlTmxlT2tHVlVONmU0dnZwbytSN2lES2s5Q3hYRytRdlZVTktnU1ZCNTZ0eWxvM285UUtJMUVHc04wVjZaeWFDMkpLR0F2WmI1UDBDYW1cL3FLXC93WVB5Wm9EZ0xhdkZ1NmoxNFNTcVVvbUJSc1NMdzVrN29ubEdPOW9NMWdkTlpDaXB1RFdmeVhZYlNUTURXTWhWaFpnQmRwWUtHQ3ZKK0szM1I3WGdXNGtLekYwZVUrSGhxYTNzODRTZjRNSkJIT3BZWU1EemJHVWZteWlCOXJEa2d6eFhGQ0hFQW5EejZYU2hJYW0ySXVRclR2Z0RLTVp2dUlkaUVTTE5qWXB4dEx4WG14Mk5DY0RCR3Q3b0VKbzJFY3dValAyUTBlT0hMS2pEYnZmcWRKeUVpc3BISHczQ2txbk1KSWNRUEhVVXUrekh6cGpjd01HRkQwMmo0WjFIaldkQXVcL1VHbXdOaTZxcnMraWYxck55NFFnYVYrUDc1RDNjRzUzVEZlV1ZRYktQWHhEQ042OEdsdjNENW1CcjVZb3dpMEF2RSsrTHRtMUpBaDJ0d05MbW9LdVwvRWJKajVSbEJrTlplanJURWVkeG02TTV5VktVb3R2dFVcL015NHFBQWNLNE1KMjJJcnBSczRsV2g4alwvbEFJQUsxREVUazJjNVFSbjVTZXlwYzNuanlqNEZiSHFZNHZPbXBtVFdBMFJVQ044VDFQT3JMU1AwdkdHNmh5WTNGZFlIQlBGN25yK29EbHpUa2JRbldTbXlTeGRSUDgrWTRucVY3U09XOUEzWXk1N1NieTY1U2FcLzgxVk9DSDl6NWVEZ0Q2WXcrMWwyQU43ZkVpUWZFVzdVYXJ0b041WkF2VlpYSVpydUtNTWE1Snh4dWFkWitUSFpUaGVsdFA3UlFhSkFxWENFQ1ZYSGNPVFkrbmduK29KbU8xUVNYWmQyclFFY0dRWlZFOW5uZmV2QjZCWE93dW42WGw1REs1bXRtRjRpWDBxcGQ4RlwvMTJrMUU3czdoMEErcnBkMXo2TzFYTktYK1NjbHkrQUJUSkFQUnVWRDNJaU9wMG9nR2YyeFwvXC9OUytaYnUwbzd4Y24wR3RPaFdpT25xbzBDZXRNWmdiV2VEM2hEUFwvUUlYdjZnMlVcL0ltRGw4a3lJdDlZNHJsTzJOOWx3VGZHQnVRd2h5cklaTFB2bmVhUjB2TzZPN3pDOXZ1M3FDc21WY2s4U29sQzhxbWNhMUhoTUNtUDQ1TTZkWTh2M1NHZmh4VkJ2eW83Mk5NRXlPOGpyR1pkR3pFOUt0RmpZZzJnMmJ3MGdBSzh4XC91WlwvdXQxXC84MkNuZ2pPalhSd29MK0dVc3VJZmI3UFEybDlRNmR5TlRDOEpaM0xYcUk5YnV1SFRwbDlHWEVUNFJmUU9Da0dMK2pNZE1oN1JMbno4K0p6dXVKU3NNSjRqNitOa01HVjJiZUdDMzVzb2JtSXlMbE5UMGhyUFNJYWh2RnZ1XC9qd3dyUVVaeWJGcEtYVjJNcG5aV3M1dk50TnFqZWUwbjgrS2FnanJGSk56VFJSWXM0Zjl0dFlveTM0d3BlcXh6ZHh3U0w4dFdjRnBrWml5YzV4dVFHMlhKeXFPT3JoZGRzOHI1aDNQSzFiVll0SmY0SU55OTFsaGVyUlwvVXZEXC9yN2JtV0dBR0V6eUd6UW9hNlwva3A5dDF5dDFVUStOZnN1aHl2YllzRU1QUUNYWUxNTlc3SlhQeDBMK2cxbnpxOVVzaXNzVVNkdTRjNytMSHZZXC9uYnNPMlh4NVZ1aVdVU1wvdVVORUpQbzN2cjNVYWdNUTVwTW1iSlRaYjdWWXJcL2hick5QdGp1TkxXMmp2SHd4Qlh6bDJ4SkY2RFllNjVoVitvS1kybFFvZkhLTE1FOEhWSElXYVVIMjdweERKQnpoM1JieXM5dUtEbEtEMlFzUFIzTjNVQnFBbGdVZFwvM2VXc0lSZXRic2FRV0ZFd1lEZlwvaHBaQ2paV2tlVU02NGVHUVBuRHA0eDdzM3BraG5ocmxza1Z0c0hrYnVJMkM4dEI2anBGSlRNNkpWelwvamk4YU90dGtaWTZlcTNzUmY3a0xkbFZHTHB6RHM4ZW5YejlFNzZ5ZWJYTGxlb2ZGa0JRQU1ZRUZ5ejVyWEV5em9EYjlMbWtQTm8yMkJ6MXA3T2pxQ21CM1wvWDhJTFhYMmpQbzVSSnZzVytaOXQzWFM5XC9FRjJyQ2VZUUUyM29NajZ1UDhFcVBsXC8xcFBTMjBVZGRzRDc0TjFUd1d5cmg4WFRSYVVQbEVUcDZTTlpzNWlsWlVFaEdNS1JUTXZiVjhGSGNPNHh2bFA0RjhEV2lUZk9vVVpGT05iNkpvV2ZKZHh1dVJjNDRhQUtxQ1dKdVVxdDhMR3JOXC9WMWpXem1PdEw2Ym05K09tdW5VWStKTVN5dTdRXC9KemM3RCtcL0NzK0Z4WlBlSHBBVkFXZzlcL1dEczFsclE1M1wvcTFYOWc0RXdKWXBKaDZQVng2M2NIT1pvZEtnMmJcL25LV0V6UVFWSEtwS1wvWmVUVWRhMFFGU0JpXC9DRFhsWnhPaElscVRcLzhkbz0iLCJtYWMiOiI5YWQ4ZjBkYWI1OGI2MGQzZWEzMWI1N2Q1YjZiZmJmMDM3NDMzMmJkYTRmZTM5NWEwMGJlZWUzZGZkNzI0YmYyIn0=',1406738829),
	('BM_CMS_route-httpbmnewdevabdulla-test-1','eyJpdiI6IlpBMmh4ZzlxWWZBT056MmVSSWIyaWc9PSIsInZhbHVlIjoiS2F1dHhhek8rR1RGNGo1MnF2WU9tc0FEY09uSzNxd2x6RjdHQWk2WnRYcW1QMGppeVNtU1dnVHM4QnJMdG9RYklEV1dlWTd4dFF6V1wvYnprNmd1a1VHUWZsbDBGMk0zMTdYWHRrb1h6TkNmUkhTQncrWHkxOFVjRTlEZHhTWmdkdW1BRDUxUmxUQ2NBc05vXC9BZXhCeHFRK0wzcVU3YzdsRWxLOGpcL0JPeFU4bUorbDdyR1ZWMTJ1ejFXaHd0c2k1SnFIMGo5cXViK2RTaGtjbnNnMmN6b0FqWTdYcWdnUkt2ejBFT243ak1SamYxXC80Tk1kVGkxaTZTMUpMMlhvekR3ZlNwc2FMQTJzVkFFOUFFcXlhWWw0dkw0RnNmTlZwTTZTMXJVZmxMOVp3bDBaUjJYVWt2Q2FnNG9sV3QwVlVPT0plTEhUU2xcL1RqaEZLdVJncVBUUFdMS0dmclFHdFdZXC9abzZZMzVONlh6UVB3NnZzKzZWS0Jsd00zWTE3OXJLUGgwckMwVGlhbG5Wb3FlRXRDbmdKRTd5MmZMTWJoOWwxdFFYYlNrSFpKTkNOemFLV0U5TVczNnE4SExDbTVUOHA4RTF2VkhtMVdBVEhcL21MNkpWb1BldVNZQkxDc0FyTCttSmQ5V1NmQXFiMFRleHoydnpyZzRKQ3grN3AyTzBYM1wva2o5MnhIZVNEWnVKSElITmxtVzZqMDM4ZEdUWkZSMVwvQ2RseGVkS3kyd1BLaXlMdWx2VnprMHBOM3E5MUJDNHA0XC96TlRReVV6ZkpFUklmVXhMb2xkUzVpNmQyMVNJVExyZFdua0N4c09TR1ZIelhRZFgreXU3WFpCRWZRMWlEWXEyeHV5Vk4ycFlpZFBLXC9MZHQxanorYjFhb3BleU1xMHJCRFFyNG42N2g0M0NWdXkxWFhvN0RiM1MrK0l2RTJlSktlcHZpdTJBNkphY20zRU5iMWllN2IzR1BIR3JCZlZFaTNGdDNCU3ZnM3dyazROTnFOaDQrbkVnUmJCN0h3R2pQdjkrMGRFcFp5RE82KzhcL09XTzJJbjlDZzZkMys0S1RwSjhRVFlGWDByazFrTzNYQWJkcGxzR0oydVwvQmFlbWgrTXJNaE9ZS0F5N3A2SGd5YmRjWWZqcFEyNDBZRklCMUFzVVJRN0xIOXErMkZ0Wit6RlwvVFZheUZFQjlKa2VEcXNndUUxc04yRVhQeURJN0lwNTAzclYwb1pJOG1Fbno3XC9pWXBtaFE1OGZzcmhzbGlSSDRxTWJaXC9MMFJJTlBRZENOV0J4d0RKZVFHZ1FYRkJrd28wdGx5dkp1OFZ3U1VJTTh4R3lMZ1VEeW1IZ0ZuZFZsNGVnTjlQUFJ3OVBYZ0gwQ1dHUThXeFVJdTdyRzVaZ1NuSGN4RUdrMkR2R1RuOERINTg5M2F6YjNQb01lUk9MYmd3S2FqSldMQnoyeXM1NFNpaXRueW1maU11bkpEVldkQmQyazRwbENkTXZEUUVZMEx1ZmhQdGN6T2JacmtmTEc5NHNzSVlkcFVPdFdnXC8xTlZ6bVBlRVRSdlZIeWM5WFVjRmpPOHhUS1dweVA0dm1tcUFPcW1QUDBnRDYzZlZycWZ6NVJOMVZqNE0rVllKWDBsZDREbzBjbW50WWE1a25nWW04S09FbFdBdVlRbTdzeFlFWUVDYjg4UTVkbktqXC81QVB0Qm5PWUlrSWx3U09cL3RGcUo0aFozelJhaVQ0cklxd0tuYlh4Mzc1bXBRbjBYNnpVUXExVWowU3BnZnFEUlFXdFB4VjhOMEYzRVI0bFZ6QXhsdExvYWF6eFR2MDFqdG1IdEtMMU5na1hTeHRPalQrZFNMVUUrbzFxcCs1bXNzSW9GeGRycHBnbDd1YXd6OGdMSU5FTnhcL1JiTHlvUENOUEtBUEFuaEtzUm5Yd1poZnFScVFkekVrVUVQWiswdnZ4UUx4ZFg0R1hIbFBxK0NLNnNyS0tjWVNJaFM2OGJmTWZmOTRjK1hNVGJBOTVCOEZObkdcL3VBeDdFOGVkVDFaMVwvVzF2ZHZ5dDZxaUczak9vKzN3MFFWdmM0RXpWQ2xvcFh1QXV1azdWUGtyYXh5OCs2QmYxeGRhd1ptZVwvdkZJT3FwS2ZDVzQ2Y012TFpXWHFvK0xQWVdUcFpMeXJVam1OV3k3MUNsclZTdkIrbWJBMGdWTlwva1NcL0kyT2swQ3Z5UTczendvbTJlZHJ1T084M29saEZuZjFpbHpuXC96cG9WdEN6WkRzMnV6SFQwTUlIQ0RGbmlkcEVcL1hTQkNsYVJoenZjMW41dWpKU2gzYWppck9qOVFBQ2tlZnBGVFpvOEJNMWwzNjRcL0VFS0pJQVwvZFwvdXQ3bGVtZUs5WERDRk9IRmhqSEpacTY4YkxYQWN4WXU5WDQrOE5rUEFKdHFGT3l3dXhuSFNNN0NWbm9oRkNmSUp6a2RMMVRcL2ljQWJkT05HSkNsVEdMd3drTjd3RXNWWWFvT1NsaEV5UllHRkZuWHVBcDZzcUwwaitQSTZMM3V1cENoTmZPTlNFcXRYOUdpQ05JOExHUHcxSkdjNURwdTJ5c3dTb2xXeUxobGs2clhJSGlabVM1VnpwRlJBaXozM3FOelIwUzIzXC8xXC8rZFRSTFRISXBaMk1kb09oeXI5WjA2c1dzYnZONm5Vak5PbDFwYXIrTGNUY3krY2ZMcTNCelpqSmEycUl3bTBcL2VGc0MrQmxOTUdabVhrY2lCQXBHZTErUERCb1pyeW41aEt1a0RqdkdqbmxOb0pJWjQ4UjBGd2ZxdHpFTFlDbUpkT2JJUGdudXpWdWMzMDdVT2psdGMySjkxZnFwOG1wR2pCTlYxY2ZTaDVJQWlqekZcL0FPY2RENnZKdkpQT0NwTk9ieDZJTTBMRnByNVNXWXZma1d6RDV0XC9adW5JM3g1Q3ZcL290MDExR1BwcnVsbmRDVXB5UXFvOWRSVnFVaEpCRktPVzJ4ZUsrRW1vaFBVZ1VTVGJKUDY0SXpcL1wvQ3BjM0JEbjdTTjArRHQ2eklaT05MQUN2TE9Ed3ltT3NrRzNVdml0RzN5TnV6QTI2OEoxZUQ3a0tPZkoxV25idlJ5TzhDYUI4SzdyM01TQkdTNk1iNXFwMFwvWkVHUTMyVnlBeVwvdm56N2ZhYlEwU1wvaHF4WkV3MHI1MmdyaHA5RFJrUGJkMFFNSDV1aXRQdkZoMGdvWkJYUVpqS3d1Q25DZ0VGZDZwRkFFdXFUeWxlaDFZdUM5TVlpcFQ1bHZIOE8rSnFnOGVza3lmQVYxZkM2MEFYaUlnVnNuc2VQZU5ZcUREbjFjVjJyOUxMXC9jZnhUZ1B5NlV4ZFBpK3RoMzJzZTBXUG1VNm1yV1JBdDkxdjA1cXV6Rkk2Y3VneWRPc1Q5S3A4bWthZkJXb2FqV2JJMnZaM1lmcVlpU0RwcCtmVkgrVXdWQ0pCNGRcL1ZGTDNoV2FNZ1J3TmpvcFU0TGNqbXdxekFGNnhoVzdFVml0WnVkbExkQ1RYQ2pySG9ZUytLNEo2a2NFTWNYTzRKTXE1N2FLa3lyUjlXSmxHc1loMnpuaVwvWmdxTm5VdW9vR1kyZUdUVnlwMmpmcFdVZU1FbUpkeTdUY2FZdWNhZUFwU2NvaVMzVWVrT2VpS1N3K09mZGlKUkQwbmtpZlpBZ3ZxZEo1NzlpM3ExNHN3Q29xeVhuNmlOUTY4OWU4QUFXVUVMRkFBQlwvVDBHRU9rVHN4ZHpPaXp0U1lzRVJKK0ViM0g3VUpxN3RLUGlsZWV4aHRrdGErRUlWWkhBZUI0TlhSckpLeWRlUk1heFQ0ZjZrRmhBZlFhU1ZKY3pCU01RMXNzU1JLXC9DMGRRZ3VFRG1TNSt0eDV5TWV5VEhHTHpmK3VReWtHZ0Q5YllJMm01ZUduOUdEYlBDR0JMU0dEeTFhTk5zVm1yNEFvVmNPTFUrSFRjT0hDcm9yd2xaQWxzSnJiZ21USkExMVo0SmZBK25yTm9DSUxiaXlnSlBsdWFWeXprTVUrU1BDb3ZJTk5Ca3RxajZObXdDbEtReURMZXNsejNtN1lCZnZJN21HTEU5UkQ3UDRSckpBVWhYekFxZGV4UlBDU1Y3eWhmU0hyUUNMSVE0SlJUdytpekZhNVdmM0FnRENBYlorVVhiUzFEYUV2Y2M1RklRSmc4NUFKaTNFT1hlSSt0cmRKeXkrNUNCdUdIRnh0QUw5bW9zTVwvd3ZnVDF3aHh5NHJcL0VpanZhckxpVyt2SW5HeFhtQmw0dEQwZll2aWZuVTk5Q1ZtMWtRZzdBemxMSERhbjJDazZZOWN2eWQwRVhqTVdZa3d2c01lTEtHRGJURER4czdkNitMeEtpMm9rZHpTTXFUMWkzQUVxV2o0S2REaU9cLzJPTnRtYU5jNE5EVHBTaXRaeW1KSDR6bjhwNXM5NDNmNXZlM2NNTFRYbGVDS0M1a1I1bGEwTVwvUDNXM1hSRG0wb3NocDlhVWRpT0U3UENTeWJSN3VqS3NERDhxaFdNSWgzdkpqUm1SXC9Ua3BJQms4eXlUOFhiM1d5STMxOTI3Z2ZCT2ZIOWpqc3RNazhwdGN1S3FXaElQZFJEOGt2YVNSS1U0elJcLytTZXlBeWxBemVKMWJGK3ZJN2NQbDRWXC9YcHlMeTUrUUFBMFBwVHlSMXkraDlWOVpPRWZJZ2JXVnFWbWNySGJLaVdFaWdFcTJQS3VvbTRVMGJERW1jeFI4V3hkVnJieElJdXp6Tk5xUU1hNXk2SDB1M3FldHdmcDg1a0VQclRhdXJMUFBRRkplZWJmY2Q3cE9wSXA2YzBRaEZkZ2JmSFV6R25KZnpudGJNQk5SKzdsbDRIWFBOY1ZXNkRONVwvNVRjWU81b3cxMzhIRjI0emVFckd5XC9JTzAyZU0welJ2QkVobVwvV1wvWEFPREljNnIwaTJlT1lJU1M1Kzg5dTI5bkhWSXFLM1lUQk9ad1d2VTU2QzU2ZjI5UHAwUFU3NDdnSnJ0RVh6MTdLY1pCXC9MVDV2XC9pWlFvNGVrMDhUQm5sZ3ZkVVZYV1wvdTRQQXMybHMrWjhuZzFHS0xxVUdLXC95bkJcL0JicVwvUHI3bHl5UURaUUtRZ2Z0VUJGenJTSFNRTldvbWJYMGtxd0R6Q1VqQVQzb3R0N3hmb3dNOWZuWWFSMHh3WkNRanVFdlpNNEFCejZva1NaMnhQVDRMdUcwU3c4dFVYaXlkSzk1WVRYVEMyaE5TdHpqYnZpT1wvRThpTktoN0dyeVh6R3plUEN1V2pjRG55dWRHWDFYMHVBUWFhbEEzaFgxMkVhRzJIckR1VVN5Z1I4d0NsdkxqQk5STVNPaE94bkJLUVwva0U3YldaRGFRYkNtWTJaOTJqN2UwR2xYN0pzbWd2SWR5QkF5bEcwK1h4SWQ3K05OUXAwcG81amFmK2FoOE11N013TWV6Ym90MUxqZ1N0UDNiRnM4R2dGeEJtS1FRZmdnVFMrb2xUMDFabVY2am5qNEtxQ2JBWjAzcStqYmtNNzBwdUVGZzVXXC9wY1NpenMydnI3RFhHN29ZS0lnT3AwZWdhM1R6MlRZcTB6Qkt1VFc0SnpNeWd1cTA4Uk1nM05tZm5PUk1ncGs1QWJCdjJQSXBhS3ZDMFZHVW9GdzkwNlVObUFcL3I3R0dBQlwvamhHWlZoZzZCb0ozSVVudFpZalhTR3dUdkFhS3VSRjZEVmNtdWNYVDVVMG5aVCtDTjNRVldubUU0UGxXdjQrYkJBM0hoU1wvd3ZaNUxiZDI0cEF4VzJOdzNHQWU5MkZhejRjS21tN2p2c2Q2eGhLVGV4akwrNmgwcnJoc2k4RVIyNFZkZEFUemlRT1wvV2xrZDVRbmJjWGFqcjhGOEswYUdhZWVJOXprT0ZrdFwvXC9NNVY3ZGFvWXVIaFRWcEE1dWtUZWxNSDRHclhvWllIMUN3bExWWVdKZFJiQXRsRU5tOHE3RCtVVytjbHVKMU9EM1FteVRhQ3FEd0dZbnhLSEV5MzlLY05VUkwrTVllcWVPRVpBaUlFXC9LdTdKSSt5S2hcL1lqd2hRaFdNZXZxeHI3ZUgxZkYyM1YyYllqeHpMRnY5UXl3R1JIVkZuQlJIT2Z5NTZhK3hGY2tBbktOcU51TkFGTjB0TmYrYXJTWklFT3RJWHhiN2JZVm1KY2lMZlNMYTFmbEFHTVwvWEZjQlkrbVRYTTZiXC94RURsXC9JQ0VoN1JFSkNRQzYzWnR2ZzZHVkxuTG04eXhuWkhvYU1ORGhveW93TEJ4TGR0T29uMzJHdWJRcTBRQkZoYldnOTF0b3hiKzlLXC9WOTBlT0t0RDlcLzFKXC9pXC9weW4rTDRiRlNsRXF0RGpDdmQwdHVqMnlpc0RjTklCR1B0MVwvcmdmUHAyNUxUUDB0RU9weVZaWmxSa2dGQzRJS1UydUJoeGQrV1wvMDFVTE10ckp2OG5vaEFsNXJ1Q3huNlpyakhUQ1pUZmVXeXFPRGVibXZZUTlKcWdXd2M4K2FIcXQyZVkxeVA3cnY3Q1lsWWFDczErN1MxYjIzd0x3eGd1bHlGWjlcL1RnUGNHc3JNWk1YRmFKK0RaNmxYYnh4UTNuK29BTURFUE1oeDNldnJ6T0kyZVwvcTlEaUJnZDNGREZGRVhYQW9iOVo1dTRCUDZtUExDd2VWRTRBTml6UlwvYW9ET1wvdUtNMTlhXC9yZG4razhEN0RrS1lIbUl0SldqKzRkWGpaeXc1dkVpaUgwZGV1K0JzRkd0T3JqZkdrM3diR21XOG9oeGdtSlBFcllEeHEra1FUdjQwdWFoV1VsSklmaWo2b0xQYVZXdFdNMHJEQ2g3UWZic253aGlkc0lWN09zQzFab2xaaFEyd1VhUDdtSU5meEw2Y3o5cWc1aWMweVlhTEVnZVlqMUFVT0pQa2YwbGEzMVhHaFdzaW5oTFI5QU9XU3lcL09OcFdrdXRQbVwvQ2d5SzBEWlwvZGJCOHk0R1RpTHhyYkNiem5hNWw0Qnl3dXYxbnkrbFBzeUZONit1cjIzTTBEQ0ZcL3k1dlZ2QVBPaEFqN1NLbEFUVU9MT1lqZ1Fua0lYeXB5WDhBT0F4V1lYUjU3SHhwQ2RLbHJOSVdyT3lVS1lyWkR1QlQ5OGRPS0szR3lRczRIamZYZm5VeEtka3ZISExIeDdpeG8xXC9EcUxZbUFpRjBISUppdUpCaGJYR2dWMm1KM0xFaUEyenhKM09FVWlTZFwveXBEM2t1UmxkcERNQStWUXdWU1pXeGJucjR3cXlKR1N2bXR2N3N4ank4TjAxRjBUXC9ZYWRZTG1EOGNBMTdEMTU5NXg2RjRhZGJsUUFpVUpKVU1iXC9cL1wvUGtWY0o1NWlDTlA2NUJtN0xEc3ZqV0N5UDBVa1wvZEJzZGJEbzZEbSt4cStSeVk5QnRrc3R3NDFrWUJtSGt5eWJ4WHVmemh1SHJlOWVZOGhOT1paMkJ6V0lIZTQyTCtjZ2lvXC9GcWNTZDdabUtvMGRENzUzSWZkV1ZhZ1pxREhMK3YwUEpVazh3XC9vU1ZZMVJ1MGZYV1U3SER1NzlpY1N4ZGhjODlGSlBudyt4TXN3RGRLNlRJSW9RMm5ZTGlmZnJ3bzNHSzhLTHRGcUZpWDVuS2JLSHZwSXVzTEMrRWNpMjZvK1o1UnVmelh0TGtSa01XS0I2NXhhOVJEWmk2XC9CQjJqR1dsRkliNUEwZnFVTyt0M29ySEN5YlZRRWRKQXByQ1pcL3MwTzBzZEVUU0JXaWJQVFhnVlJjMHZrVUlZMGFcL21FcFdxbEtsd2ZZWlVWd3FnSlwvY2xuZHRHREE4citsZ1FQSHQxUklFZlBpbWJrNzdrbStVdGlcL1lCYjFlZ0s0aXZOMkFjU2hVMHlMeDJyakMzRXlONWc1OFU1ZnRic2VoSm9tdXpGa1pDY0d5Q0gzcmIwTkNtXC8rXC85RngrRFNqYng3TDk3aGJ2VGU1RXJlQzIwNnpjVXRLOEY1aEd3cFVmaWppV1Z2WURsdnMwNkJoaEIrYVVuYmMzWEVxcllRcVwvQlFvK3pNY1hpd3lPSE5oNXlvTEQ1eWZaVUNPMlh6d2daXC95cFVQY0tzY2VXSG5UbnEyd21aZm5aWDExQUd4cUxJXC95bGNKK3I5WEkwQXdGbWVqbzdIXC9MMENCRmF1RGxUbXpyY2hTVWE4MVNjV2lPYWJcL2lKaW5TNktUTGFHMUpNUzR6dHA0R2cxU3ltMWphVnpGS3NyU0dhNzBCaXpmcCt2ZUdSQVkwMXZkVmxzck5VWkZnVHNQU0VReDVaVU1qQ0hBdFwvamVtSjkwbVEzVHgrVXBrQm82OEpHb2NuMkN3ZUJ0b05STmVYS285TkVMSXFsR2Q0b0IwbUdPR1lxOVRzd1wveCt0aHp5WVhlVkx6a1I0WE94emV2V3RGVkplQmRmYzE4RGtiZ3N0RkNHT3NMeVUrRThkVjRwTmwwbm1wMWdHeTRyWjlvblVJQWdKQlpCWndXWUN6UFUrd2hYdTNzQUZGU29oeG5UT1RHcEdZemYrZUhSUldqMlpzanpEdHgzNDdjSHlURjUzOXBmcFZ5QWhFUmVCR0djRk44K1BWbE1meFU5T2QwRnF1VFNXNXhKTDN3XC93dVBwcmNwdm9LQkNiU3BDbnNsd01NdFpGNlluTGhhQm5cL2NvQVVUOENIUHlQVjZHN2I0K2lrZ0Y4dEJJd2ZCUjd4cFZsUE5xa29KcDJuTTJTbzlGdDFjalwvUHI2VTJFMTBHUGJLaTZjTjVBRkJjQmFRM3pkc2hxVkRjSUFadXRWK3JQZldBZ2NOVWg2bkFzOU5qT3FDZmlHZHNSbXdEMlZZS2NGTjZuTnBsdnJOVVRtNXVReWx5XC8wU21LU0JmMWpnblNjcEtRUUVKNkhJSldQY3lKajB5VW1rSzNDQkR0YXlsbnVcL2F3MU9hYmVDVFoxRmhsbEw4WTZSZWRGdU16WHpwY2htWVwvT2RSbFpYQyszWnJrN3ZKVEZ5WWdVYmhQQk93XC9mbDNjb3kzOGNMUVRFSDk4cjl1cHVXOFhuSE53ZGRZaWJGWmV2VlhvMW0zZlM3WnNmSW5MMTdDMnRrSkVTeUpiYnQzOFZyK3JhWk82ckl1eWVhenhUT1BPdVVcL2FVNUU3Wkd3eVNDemtvellxV05IUFwvVEdnRU9JWW1OXC81ZzFDQzN3a3RnYnk4NVdDdVNVa3hWZXM0WXVxbUNjaVJyTDM4eHhBSTJTcXVwUWxoeVpMNlJaUHBaRWlhOWg2VFhYUXlpYU1xT2ZTT05RdTZsNHU4QTFqenQzNzNSQm1PeUhXZE5wdlQ1cEhwWEExTjFzb1FxdmVHZUduNkg5T1dmRldFQWpkN3ZaVm0yV1ZYNlp4eG5neWJIa1RDcUR6TXg3aW5OcWNJcDd3UXFFMCs5THlQdGRzbk5HdEFHYmYyNk1CYWpkb2ZweGlcL2VndjU2MG51N0o1M3VSdXdUdG1kV2FpK0FuUWZqcktPZGkzY3hneHlvZ1NEM3VVQWVaNHlITVhJOHpHQXFobHZIb2txVHRUaWNMRzI1UXFSZzZoS2UyZmVBdnpjbmtzVjFJMlwvZHo4RExsaEJzTm41MzZiV0JiUGQ2ZlArUGh3U1JCSGJXUjRNQkxkbU5wR1c1RGYybks3UU1CemIzXC9PVVwvMTVwRmVodUhjNWU3UUJRT2JDXC84WDd2eDJheXdkQUlpWlhzVmVJeFwveVR0RFVvRjVPZCswSHI3NHRDM1ErRWJsRlZzZkRtZmVrVnROdjk4ZEc3ejM0NXhwT3hJdTdtUzltRDJTN3BISHRFbU5IbkpGTXZ4VTZmMFdQQT09IiwibWFjIjoiNjBiYjA0ODhkYWEwY2U3YmYxYzUwNTI1NDZiZWNmM2I3MzBlMmVmM2U5YzliNzQ1ZWE0YmM5MjY5MGY4MDI4MyJ9',1406738699),
	('BM_CMS_route-httpbmnewdevhello-worldtest-page-1234-1','eyJpdiI6Inh2NWdsWlwvWlcwYnRRaURQaVwvQldxQT09IiwidmFsdWUiOiJERlphelBtNThSeVowTTJZblE4c29xTDlGQTdQQndzY2hrOHZnaGFIa3lTeGZ1cWVzTGRRY3RacEcwTDZjc3R4bFFqaUdkMFlHSkhrMWdoRENLdnpzXC9DbGNhd1lnQU1ERitwb0E3bFwvbVBmTlNSaE9xMEttNThPOGUrNm9qSUFvRXN0QitFOXVtOFA2KzRYM0lJREpCYWRrNjlYam8rY2FBcGxvTFM1Zk9CZk1BYmE0ZlBpbWV6cmcyYzhpQWg0aWNFXC9oRCtBWGpqQVwvcVQ5S1NYWHVRQStwTjhFdkRJQUpNMmtsNk9md0R4QjFlU1E1OE1JSVNZdlh5Y1wvZ0NPdUxoZ0dwT0FuZ1VtTEMxR3gxMm9tbHY0MTJDN1BPZGJcL1BvN25QaW5PY1RYajRhQ1Nqbm1wVHZDd212bGpiWUlUU2MydUdhbzJ2SGJsMFp5S0ZxUGlITTNtb21sSlVDYzN4ZTd6bW5GZ09qbUtZVXN2RzhnYlwvMEl1ZFJ0TDVVSkJTOU42SEVaRUVzZzNMZWF2MjNZOU43a2pFWEVJb1RBVmhvVzVicVpFRE5BXC91Mld2b0wrcUNsTksxK0h4NUEzTkxiaTB4cWpnQWpLalk0UGVNeHFheHJkZmdlbE8rVXY3YVZzazhjN1RCbzEzcml2cTRWNG95ZzdIMWtEb2ZQMzdoWThBY0loRGxUZDJSUUREaXlrdjNwSVpDbndLWVF3cVZmak5sRUlTaHBmMjljV1F5Q2ZlS1ltZXBhT2RcLzJcL0lQeVNqVWF5RXhPZXZqRkthcHVubVJkWW9lZG1PS3J4a2tyakxpcTU1NU9pbGZ6VG5abEs0ZlVFQ2hzNWtHR2NVZTRFOWhGRWdjb3FcLzByMStYWGpPM1VWQ3pkSzVjTEZRVjZRVXJzT1VNWElPcmtLTWRKRlpDRlJPTlNCTG8zbUVcL05tVWRUdmhxcDRIRiswSTZLeGpnaE1kZGxXSExKK1B5XC9uRStWWkpcL2dmYmZaMUJIaDFNekp6eHo0VU8raUw2OUNTZ2taYlZxbEhEaEFOR1FqeVE0UitwcG5tZzNhSGppeFBEeFAwUlhPWTFaYlV3Rk5qd1J3OSsxakNhZDFTWG16cUdsQzYwclFnQlQ1WUV0c2tHNFYyckQyXC83dGpVQjk2U1FLenBPQmhYRkRseVwvSVVXNW5pYkdpWmVUMnFhcVJXZ0xiaVpXZEJXdk9wellsXC9WTElEV1Z2ZjdCblA0THBuXC9hXC83T293Y0ZZajdyMWo1SmZiQU13K1lQb2YrcndTOXowRVZGOGMzdXR2REU4SG8zNVU0S1Z0U2NhS1EyVHF6WHR6clYweEZDMjF6eU4ySEhmZkhcL3JpMk42T2RLVVp3VmtYVFZzdEVJdTdoM1wvRjNlbmU5bmFcL0xJNXk2emFYaWNNVE0zZHRldzlEbk1jU3B0UnFRWkdDNGo5NkozVzlmY205Wk9QV0VVQndBbjQ4WWgxb0NVU3ppWGt5WldxQlJLeEhuSHdkSEFcL3lNSk55bEhtXC9zU2ZcL1hoUXl1U1ZQR2RYcmZyU1VRQzQxM1VISjhObUVNZkxucTAyQXJvOE91WTUxWVNGdWNBZFwvcUtjXC9pYjdqRlk0elZYTDN0alhkQXJ6ZlphOXhWeDY0Zk9uK1BVekRtOEtjQmJoOVlPTnNIeSt2WnRidGFVZFB6b2JoRFNYczlBMFdhKzM2MjZ1ZUkwZmZvaEFQMmZNd1JRUDlCVFN1MkZQN3d3OXU0QzE4QVljOVZmdUNjMEpKejk2M2U3QTR1SlRIRHdlWU5CWWwwZXNITWJlS21tNjlBaE53ZGdYVklMalZiOGdBZFkydGtOcTZiR29oT1wvR1dpY05oa0g0NWFFSExZaWxldUxpT2JHZlYrVVwvN1wvYUE3VUlxMnJ2UlZTUnV3RzhCSnRKWVVRS3piZ0diWjhZNjdRWFNHNkd5MXorSmFBQmNaNHlwU3JERUFMaWRXcjgyWU1aampcL0Q2Y3JEeHRDVVRlQXpySUxRbE5WUFFQMVwvM0I5eENEbmJoWGZ3d1lPdHMyczU2a3VcL0pNdFJCWDhcL1R4eDhON255XC9pcGJBWkl1YnBUeUNGK1FUSU5zc29PUkFhc0MzT1VKS2JJZmVOTDNONUVwMFhiSExZNlhuSGk4REdyK1BmRkkwSm5NbFZtUThUNFRhdTRTY2k5VFwvYlR4UjlMZ2pndzRsRm1BK3NoTXlWWjZZK2hwT21hdDdGZVgzYSs1ZlZJZWNTQ3lSTjlpcE5hMWhVVVlWOHNmaEdzVDYrYlwvZWg5WFhLVWswdFwvcmlRa1dDNDVyenU5RFwvV2txYjZudnhkSittOHNOV3hWam1kZWRIbzlTUFJvYmtZd3lZa1hPYnNTaUcwMUtaQ255UnJPN0didkRvdmFhYTdKSDVneFJYSEZsUGdWcm9DcStXazE5d1B4eXltckw5U3ZXeFpEejhNb05JSTlZSUhLSTF0ais0bytqZ295Qk56OUlvTGRudmRVemlMUWpxZjhFT2lvRERJSnNXbnM1UDJGSDRIeTVMRjNKMTdmSFRkNHRtWmVYNk1sUGk4NE9VZ0tZRkR6QW16XC96cFBoajRkSUNNNjNqR2NSeEtHelQ5SjgxOFVrdG42T2lHYklhUWV3RDV2U0htZnptQWFnSHdrQ0U5UFNsVHl3MEoxN0pUYW1uZDlvS3hRek5WcFlQb0hpV3pcL2F0UnZPSDgyZlRuME1tVHgrMldpQjl3VVpYbDg0eDhVNzR1Vkd4M09hSXczaTlxVHR4SXdWcytza0g2VDlsXC8rMG9TT0lNVGZFbTJDQVc3T2JwNUpqWm1yOVkxeDBcLzlBWkpic3NSRVwvOE5lZDU3NDl4UDJmNHBsbWV6Yk1EbzJGUXlWanQwUWQyUmEyQ3VlT1k0TU5UWmVGS3Z4cDdBRGl0R0NLXC9WMDViaVFmczdYNGVmY2gwMjd3bWl6cXcyZDUwazY5Qm1cL3lySlpUejQwXC9uMFYzZ2M0VmQ4TllwZXZXSktaXC9XOTY0bHBDdE1wMExONW5rdlR2WEpPNUt4eW9wNTlyZE4wQUhYczVYXC9xRzVYMGhFVkJjU3ZQb0tBNjY0d2gxNEMrVjhzVHlMbjdsZnRVcml3QjlTR1Z3RXFhbXZvbkZQblZUeERLUHhxRm5iaEF4VmRhOHo0XC96SG45WGFQdGlaSENxVDY0Rk8yNE10dVdiMVRna3dlMmFiY1RRYWRPY2RlSWJhcFpzVlIxbGJZdHFMclRqKzZWWDVSc2dUdG8zRTBOM3ZaMHNQUG5tSTZtN05cL2VMWXI3MDJkZFdaNDJ6OFYybG9NckJvREplb0JCUTExaGYxMjVZaFlWNUwycHdkR3V4enBxcnE3SkZOc001MW9sTTdNNjZHcGRCVmJRMDA4QUhOMkxTWjM0QWtPRlFCckU0UlBVSEs0NzlXR1hkenhKRlo5VVdXanVyeTVWNU55K0x2WVFvcmljcGtvV01uNHAwbUZ2TzJ5THV2MHZQOVRMcVV5UHZLQ0l3RUV6WDVHXC9VQzhmMUJGR2xDdmVCY01NU1pqaUNpM0xnaEpKUmxFaTlCTURRS2JrTjkyQVdLYTZyV2FWS1V2R0piQ1FSUGVNRG5QUk0rdTliMFJad2VoMFAwZjBmZE04dnVcL3RWV3hDVnZLRmdUZGxXU3RKYjZ2WmtJMlJjZGhQbDV2blY5bmlIV3crbEpDXC95M0FqNEpOSjN0XC9yTmx5QWh5WG9ENUVrajZXTWhXTUU1OE5EZDBJbzBhV0dxcGprVUF0d2JLZ1EzVjk1ZVF3aHlOUE1teGE4aXh5RFVFSm1jM3hlOW0rK3hoN281NHNKTTlUQ004b0NiT1V3enZkMUhcLzRqbGg5OFwva2krcUhJQUlPV1I0RFVnang3aHBaYTlWMUVIUXg1UVlncEhPZ3dnVisxUmI4S2xTaTBPc1NKQXREVUNFUTJ0WUROVGp6VDhiVWY1RmpaZ0JnXC92dk94NWw2ZXg5TUl5alZcL0Vmb3Z0Q1ZJNWJSYWk3QWpGZk5yelhHbUE0NlJzVWdmTkoyWk9TTkk4NjlndkNqU2ltbG9sUE5mcEtwc1RhcmV2MnFEejV0d2dOUllTNTdqWVZNZmtwQ3FycWxobzZnY081R2xTOUVUVFdSckdRNWljbk8rN3hnWm8zdzhTZm9PeCtNZFFycE84WURyZFNNdURIbXRZeGZlUnpqd1l0SGhkQ0ZuaUJLK0ZFc1FxWGk4MDRWd0JVRmdDUTBYZlYxc2tRWUc2ZExoS3lEaDVvRmdnc3NrSkFoQmRyclNpTkJSb0dYZVZcL3VodHp5Q2UySHBPUXpGUUJJQWEwVEVrY0ZKT1JUZ3ZQdXQ4NkdyelQ1YkZHa0ZLdk1Fdis4dFB2aE9QMGdhdFBENHhRb1dSZnFpbXNwUDN0a1MrNFh1cUtCd2VQV21mUG02M1wvNWgrWElsbUdSeXdQZlpCZjFLQmw4elpNSkpxeEd6Y2RYajRQZ05HMjBna1owT29XcmVHeDREcWNEWjFCc2ZpejVjRTZjdExBKytaSFpBbmw0d3J0ZWxybk5rMnd3bHIrUzVla05WcWQ0UDAyQWZPTlQ4NnI0TUFPdkc5UHNYYTZPQXVnOWxSSHN2RXlvb1R2allyTUZcL2FiZXAxdnFmUXdWdFdIYUVTY1lRRkZcL2puNXVlZUowUDdTc1BDTzdHZjIzcTdlekJkOUpUU09hcE1HN2xSN1wvRm5zVDFUOG5KYjcwTmRXZGY2S2ZVSWZoNjdjTHRiQVg3aXAwN1d5SU5pRytKVnFaTm5cL3FwTE1lMDhUSHFaSzRBSFhZV3dWUE5DUUVDOTJsY0NRYjFUZ2lcL0J6dTYxamNobnlmNGpUVzZtc1grVVwvdk5XQVNwT2cyd1ZZUnVQcU05cVwvempWWmJzYVwvU0xkNVlnSXo3eFwvMDhiSVhFa2VQazhBcDg0SFE4SHB4ZG9lN3JkRFJuNWZCU3pTSlNpRXZuM2VxWlc4TFl5cDNLV1ZDT0NFMEcyQlNIOUlNZGNSQkJ0MnRjcmE0QVN1SndjY0JCTEhpdmtTMVZCK0hRZXA1dnVxM2Q4ODdEVGZ0T0ZwOTZBN1JuZFhaeVBJSHQzd2h0YnkrdHZON05HVStOZUdxcDFOZzZPVzFlWWdtRElaS1NtQkRYaDZWWHRZZTd4R1pENmwzRTIwV09YVmlXODRrK1wvbmExMUVaclJSVVJ5djRmeTY1eG1vU0JGXC9YQWVsdlN3RkZDMlBNa3ZuYzk5VXNtYWlBdEsyOWVMaEdjNGNMSGlLSlBsQnVkcGdsNmJwc0NTdVZ6SEp0Nzg2bll0TlZBSDhMTTVza2F5UGE0V0hiYyt1MTRaREtRRUJQZU9leVpVNGJCeWxLaWFoXC9LRyttMjRXbTRJRVhrWmpsMTdKYk94anMrcmNVbE5pdksrSkJhaVA3U0hzVDRGNlZUbU9Hb3g3UUZTWnVEbnN0eXErb0djTmRzdlkwZ1ErazgxT0VlcG9vZ3BSazl6UUZ6ZnI4UEkycDFCbUlRY2JHMExPY05uc0FTM0ZxeEpuQm5oSEk4WDBEMlVraEtFNk5KbnpvZEM1bm5UcDZTZ2tJcGhBWkE0SDJFb0NiY1wvNU9XbWcweXNCenRBWU43dlpLZyt0dUFrXC9mNmRjQUxsQVRUdEdBZXErN1BiVjhpUDlEK09KYTN2N0xCa3dubnN4N25JMjFuMmpGVldiY1ZNTUY1dW5BN1RIcHcraWhaV21IWm5BR1ZlXC9EVzRNaVZ0d2FldFFqRDFSMVhFTmF0MXZJdURwNG83djhkUFI1MHZhQ1wvTzJxQWx1eXA3VjdjYjR0ZDRuNEREQWY5SXZSS2tNT2l0UzRQZnRTU2greGpcL1lpOTQ3UmRqTUFOeGVjYU9uSjZQMjVrR2tqeWNOOUlzNWxYMU8yXC9kbm16YmJGYXpRd2RTeTdhenBiVlR3cHVnV1BRNWNqSEZ3WnhucWlVZWpSZnIxN090a3FhenVtaUxWa0RBMWJIMkJ4QUpSNFpDR3o1T1BWZnRCcFwveG5JWjFVcE01WkZZa2kyZ2FVQ0dCRzJMcGlVeGtUdWdBOE9aNFF2aVRaeUlmQ0NUUG51aGEzWDFyUytwSGlDclNJUXN4djVtZDBIblhxYUFFZWw2QlYwNGdxOG1xaUtwZXNZQzRLNjh6ZHVnWDRGd3NNenFscXNMdXdZS3dMTXRRZ3NtRUhTaFJRZHVsa1ZcL3RlcnRPQWJWN2x5aWhMUVhocUpSZDdsRWdzTzMxdDhONVp5ZUJcL0dLdTlOUjRvUWZCdmJBQjRlMjZzOFREd3JxUzA2b1lrMjg3OCtFUkZ0alwvUXZudU9Rd3RGTUd2aVpqbW1TR3IyS044SjVhOHhEYTZKZnorUUxiU1dLWUxid280c2RXbUhnN1RiK3ZXQ0l4aTNIVm53UXVHeTFha0Y2c2hIaUFIUGNYcnlBU0VQZVQrMGNWejRZcElWbHNsWEI3bmVTZWRoWkRWSk9LeU5HNExGVytwWWlsZ3I4TFwvSHBDQm1IRFg5UjNaXC9JSDU2aTE2WEkwaXhKYk5EMlFCK0ZnOVRlYWdZbjBncEQwVEgwODZCdlk4MGdnMmJKSEN2UFJvcXB5V01PSmdGbUx2T1V5ZzZPdVZ2XC9TYndPZG5xcUdpcExwY2dNWFM2cytuUEk5OEo2RG1Bb3E0bXJObkhUcG9kTGEwUlwvTjJ6OGVBcFhhdXpjN0puRFk1RGhSOW9GaTJRZHRJNnA0eDVPRTV0ajh4Wm1jUG1qdjAxZmRcL1wvMnpsdEVDeUYyUGIwY09qYWUrV2pnS0g1bGZIT1RGb0V1Skh5bmlCS2s1YjVtc2p1ZFltTlpmbVNqMnFYZnFjMkQzK0NPTXZWRVFcL2xCZGd0MHhZaU02dm44Y0JNXC9zOWZ6KzU5a0xnXC9wQzBNb1NFQkRmT29FbHNucDd0RVJcL1FFR0tRSnExS2hWN0F4RHVtTHBQSk0yWHQybkZcL1FjbjVFR2dIRFA0alVkXC94WWRjZXlRU3FOQUNWVHhsT3JSU2NqamxXeWkyS1hXaVltdkFWbGxwcFZjVW5TY0hBZkNxWkdERUR3bHM0YmdpOTFuRjdZcldzaDJYYkhuYVduSDUzT1VxU2FJSjBJU3k1VkdVSkpPcjc1SFVMbUFVQ0hlKzR2Rkk2S2ZtYlwveWxwa3A5Z0p1OWo1bDVzWUZiMHBPUnk4ZitYa2gydTAyT3hWd01UR1VNM0hEMnJGcXV1Y2U1Vk91anhOOUM5ZGw2VW43am5hRDI0OU1obGpKeVpZWEdpdWFWNTBsdVVOQmNCdVdEWDROYjVuOTVWUVwvcEI3cWRuXC94cjNaTHRpVlNVd3VPN1IwWDBsUkRXMXNKOGtGclwvb1wvdDVMbDdjekUzQnNKMzV2VWdKRjlxdU13YXpNbDR6WGpIYWVGQWUwTUd6MFNLeEFjTXRoSlwvQ1pUQjVLNFh1VDQxdXNEUGpKY1pOcTliYnE5U254bnp0TTRvazh4akp6ek15bXF1VVRcLzNKc01mK3hUUCtyV0o1RDZpUkVBNEFSQlRiT29aZjZEMUk0Z3dzWXFQZ2pLOW82am1pdUdKalY1bDlHOWswZzQ5TnVyTXltMUh5aTRqVGJRT2FwWFwvZFNXeUd0czJDODJzdW5qMmdMS3BuYk9uYjlNcTdrTmVxYTBPZjFZNmJ3Y2t1SHVsUnV3bllUTTJcL3NTYzY1eFZtbmNQQ2xzaEsrajl3TkxwVUo1cjB1ajd5eCtkZU1kVHltbzV4QVwvQklIQloxblZNUjkrV3luclJqcTZsUVQ4YXVGeFFVZVVjbTc3ZmEzcXNQUUtcL0x1ektYMUU1bHM0aTFpbmVNcElHTUxudVYwMkVtWG03WmhCK0RmOWhzckpuREgyN0tiaXJSRE0rXC9kUjdtT1pqTW1DNzhneDBLMXJWS1hQZWxFbkg0MDlocDB6VXhia0Qwak1YVzdaQytcLytteDl0WlB3TThlUkVhbDZmUkQrNWlOUTdKNG5zVUJ5cWRtbXlSRnVGV2RhZGtob0ZvWWNhVSszSGl2OGZkbFJNM0lwSjYyNmwzU3dqcWFEcElcL3VKZUNlQnlVZ1F1S3ZLc2lLRXlheUhwNVRSc0p2VWdrejArRlJqMElRcTlBYzhZRE4yeVRpdnhpQmJqUHVSS2F3cmtaVjhYQWlGQzNoYWhkVldvdHR2MldyMGJVYlJpWWVtZXlVR2FkYXRxeXdwVEhkK0lDNDVWMkNXYlE3aDA2eWlwK1BQVnZUMVNVcnliUlVmZ0k4S2lQemptM3VVNlU0a2xqdVRnZmhJTmV1bmk1Sk1tOTNtKzkrVW1CbVFrKzUyMDY0WENzXC92Y2RWYUxxOHlJQWJGa2pvMVZiRFRXXC83NFwvY1l1RDlxQm95UjlwZk1cL0VqNXB6SnVaa1MwR0RZSXF5ZHdHZjh3cjlCZXZodm44YjVyMzVzbUgxRHI4d3ZJT2htQXdQWDVmd3pneXVEdDYwempmS3FaTVwvNzBvcERQVDZwTklBXC9McUtTYmRMRDN6K2d5YXNtRDBLR2hXeXdUR1d0WURzUURXSUw0VHJUY3ZxNVZadU5YS0YxdGtrMVNXNzF4YkVVcDBmd2thQXNUWHZ0bUE1b29aZ1JmaUF3aU40c1N1ODNOa0x3SG42SkJ5SGN4VHVPMThvVkRQRTd4SW1ncFpEWXZDQkp1SzhzS000QkR5ZEtmdytWZ201SEJLYWh6U1dhamdYVGRBYmZ0WTNPeHNRZkZyckNrNkN3d3JTNElrUW50QkErZUVjaVRwQzBObkNMVmU4SzUwbE80ZHdiY1wvNHI2dG1KUk45cTNZXC9Kd0U2VHdTaU03VzFGc2JVZFF0bVZZZFVxY3M0OG1DSlJyWEw1d09PbzJ2YXQyT2c0MnJRUmkyUnM0VnBTNzRQUHZ2SG1UeWNPVzZDVGlaWmRPS05ZTExKdlAwY2VweDdtVVY4OGd1a2xySG54T0twMDlhS3JqQkNrU0pcL1gyTDhleVwvSjhoKytTRDNsSkRGRmJCSlIxXC9lZDJBbllUMCttT1BVYXVRa1NFOVFoV0RlWEdNdWVCUU5KdGNzR0tTN2pBSXJRbDQ0ZlJXWUZZZEZMWkltNzEyNUtHaEZNXC9XNWZlaXhuaUhHYVJ4U0FHSWpSMFpOSFdsUys0b01acUEwOXpad1FxVlJ3VDJqSG5ld3hNcmFwZm5yVkhRRnVvSXptNHorVGVJS3hPbjBoNmhCYjRjYm5Rbm9uZHowSnVkQmV3XC9pYnFDbkJ5ZDRuelZXaXlTRHlBRXRVSk9iNno5dzdMQXFGMkkzODk4anVBT003U3lQUStVeVA3RUpyUnJhZTJtU2FVQUZGS1BDdjJLcmtKd2NaSVFVNFVGXC9LWERVbWpndXJSQXVIREdOVHdwY3p1Ykg2NCtBQ2NpZFwvbjB6TnZLc3NZQnoxR3dGaTZtNjVwM3U3WnhXYUxJcWJqRjgybjZZRklHckVtVVJGUWdEcFNRZGZ5eFVrWm9RWVZ1MjZRMDZ4cEQzYWhHcEN3QVNqNW12VnM4NTZxa2FYN0RWV3ZqaXVJaVwvaXFDa1F4MTd1TEtNbUxFeTF0R1hwMGZiRjVOTWJhUWpncGtmXC9LUmRDVW5WYjliWWo0OUl2c21ZMEVEN3QxWUwwODl2ZytMSXVpVFpPRUZJcml3aDhJY1lYUTFKK0paYnYyRDBYYndGM0ZHVjRsaks3d0ZLOXBzcjF6d2RWdExqSFVcL0YrRDRFUnFwSFpnZG1rOVZSenZ3SjNTVUZuWGp6R2xudFJTUlJrXC9veUk9IiwibWFjIjoiODZiODI2MGFjZmM4NmRhYWIzNTM1MTg1YWI0NzNmNzc2ZmQyZGE4OTgxZjQ0YjgxN2QzMTM3ZjExNWFkNTlkOCJ9',1406738694);

/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `title`)
VALUES
	(8,'News');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `event_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_type` enum('club','country') COLLATE utf8_unicode_ci NOT NULL,
  `home_team_id` int(11) NOT NULL,
  `away_team_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `tournament_id` int(11) NOT NULL,
  `event_in_home` tinyint(1) NOT NULL DEFAULT '1',
  `venue_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_type_ids` text COLLATE utf8_unicode_ci,
  `form_of_ticket_ids` text COLLATE utf8_unicode_ci,
  `ticket_restriction_ids` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `feature_event` tinyint(4) NOT NULL DEFAULT '0',
  `widget_display` tinyint(1) NOT NULL,
  `widget_order` tinyint(4) NOT NULL,
  `meta_title` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `title`, `content`, `slug`, `datetime`, `event_location`, `team_type`, `home_team_id`, `away_team_id`, `season_id`, `tournament_id`, `event_in_home`, `venue_image`, `feature_image`, `ticket_type_ids`, `form_of_ticket_ids`, `ticket_restriction_ids`, `created_at`, `updated_at`, `is_published`, `feature_event`, `widget_display`, `widget_order`, `meta_title`, `meta_keyword`, `meta_description`)
VALUES
	(2,'Man U VS Chelsea 2014','<p>Little boit desciption</p>\r\n','man-u-vs-chelsea-2014','2014-09-30 17:00:00','London','club',1,2,2,2,1,NULL,NULL,'1,2,6,8','1,2,3','1,2,3','2014-09-11 11:45:03','2014-09-11 15:57:15',1,0,0,0,'','',''),
	(4,'Manchester City vs Manchester United','<p>Be there to see the two neighbouring rivals face each other at the Old Trafford, where over 75 thousand football fans will be waiting for the big moment to come. This will be an exciting game as both teams are considered two of the best in English football. Last season saw Manchester City win the Premier League title, with Manchester United finishing in seventh position.</p>\r\n','manchester-city-vs-manchester-united','2014-10-31 12:00:20','Old Trafford','club',9,10,8,7,0,'/uploads/2014/10/09/image009-134845.png','/uploads/2014/10/08/-095624.jpg','2','1','2','2014-10-08 09:59:59','2014-10-09 13:49:14',1,0,1,1,'','',''),
	(5,'Manchester United V Chelsea','<p>This fixture was arranged to be played at Old Trafford on Saturday 25 October 2014 at 15:00. Due to live broadcasting on Sky Sports it has been moved to a new scheduled date Sunday 26 October 2014 at 16:00.</p>\r\n','manchester-united-v-chelsea','2014-10-26 16:00:56','Old Trafford','club',13,14,8,7,0,'/uploads/2014/10/09/image009-134315.png','/uploads/2014/10/15/cfc-top-image-153355.jpg','1,2,3,4','2,4','','2014-10-15 15:48:20','2014-10-15 19:46:18',1,1,1,0,'','',''),
	(6,'Chelsea v Westbrom ','<p>Chelsea v Westbrom football tickets for sale!</p>\r\n','chelsea-v-westbrom','2014-11-22 15:00:54','Stamford Bridge','club',14,30,8,7,1,'','','','','','2014-10-16 16:58:09','2014-10-17 08:51:59',1,0,0,0,'','',''),
	(7,'Chelsea v Hull City','<p>Chelsea v Hull City&nbsp;football tickets for sale!</p>\r\n','chelsea-v-hull-city','2014-12-13 15:00:47','Stamford Bridge','club',14,20,8,7,1,'/uploads/2014/10/15/chelsea-map-153413.png','','3,4,9,19,20,21','4,14,15,16','1,4,5,7,8,9,10','2014-10-16 17:01:55','2014-10-16 20:39:51',1,0,0,0,'','',''),
	(8,'Chelsea v Newcastle','<p>Chelsea v Newcastle football tickets for sale!</p>\r\n','chelsea-v-newcastle','2015-01-10 15:00:28','Stamford Bridge','club',14,24,8,7,1,'/uploads/2014/10/15/chelsea-map-153413.png','','3,4,9,19,20,21','4,14,15,16','1,4,5,7,8,9,10','2014-10-16 17:04:44','2014-10-16 20:40:31',1,0,1,2,'','',''),
	(9,'Manchester United vs Crystal Palace','<p>Manchester United vs Crystal Palace football tickets for sale!</p>\r\n','manchester-united-vs-crystal-palace','2014-11-08 15:00:00','Old Trafford','club',13,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,5,7,8,9,10','2014-10-16 21:41:20','2014-10-16 21:41:20',1,0,0,0,'','',''),
	(10,'Manchester United vs Hull City','<p>Manchester United v Hull city fooball tickets for sale!</p>\r\n','manchester-united-vs-hull-city','2014-11-29 15:00:00','Old Trafford','club',13,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 16:44:25','2014-10-17 16:44:25',1,0,0,0,'','',''),
	(11,'Manchester United vs Stoke','<p>Manchester United v Stoke fooball tickets for sale!</p>\r\n','manchester-united-vs-stoke','2014-12-02 19:45:00','Old Trafford','club',13,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 16:54:33','2014-10-17 16:54:33',1,0,0,0,'','',''),
	(12,'Manchester United vs Liverpool','<p>Manchester United v Liverpool fooball tickets for sale!</p>\r\n','manchester-united-vs-liverpool','2014-12-14 13:30:00','Old Trafford','club',13,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,3,4,6,7,8,9,10','2014-10-17 17:10:37','2014-10-17 17:10:37',1,0,0,0,'','',''),
	(13,'Manchester United vs Newcastle','<p>Manchester United v Newcastle fooball tickets for sale!</p>\r\n','manchester-united-vs-newcastle','2014-12-26 15:00:00','Old Trafford','club',13,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 17:12:43','2014-10-17 17:12:43',1,0,0,0,'','',''),
	(14,'Manchester United vs Southampton','<p>Manchester United v Southampton&nbsp;fooball tickets for sale!</p>\r\n','manchester-united-vs-southampton','2015-01-10 15:00:00','Old Trafford','club',13,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 17:15:03','2014-10-17 17:15:03',1,0,0,0,'','',''),
	(15,'Manchester United vs Leicester City','<p>Manchester United v Leicester City fooball tickets for sale!</p>\r\n','manchester-united-vs-leicester-city','2015-01-31 15:00:00','Old Trafford','club',13,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:06:57','2014-10-17 18:06:57',1,0,0,0,'','',''),
	(16,'Manchester United vs Burnley','<p>Manchester United v Burnley fooball tickets for sale!</p>\r\n','manchester-united-vs-burnley','2015-02-10 19:45:00','Old Trafford','club',13,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:09:24','2014-10-17 18:09:24',1,0,0,0,'','',''),
	(17,'Manchester United vs Sunderland','<p>Manchester United v Sunderland fooball tickets for sale!</p>\r\n','manchester-united-vs-sunderland','2015-02-28 15:00:00','Old Trafford','club',13,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:11:25','2014-10-17 18:11:25',1,0,0,0,'','',''),
	(18,'Manchester United vs Tottenham','<p>Manchester United v Tottenham&nbsp;fooball tickets for sale!</p>\r\n','manchester-united-vs-tottenham','2015-03-14 15:00:00','Old Trafford','club',13,29,8,7,1,'','','','','','2014-10-17 18:13:37','2014-10-17 18:13:37',1,0,0,0,'','',''),
	(19,'Manchester United vs Aston Villa','<p>Manchester United v Aston Villa fooball tickets for sale!</p>\r\n','manchester-united-vs-aston-villa','2015-04-04 15:00:00','Old Trafford','club',13,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:40:47','2014-10-17 18:40:47',1,0,0,0,'','',''),
	(20,'Manchester United vs Manchester City','<p>Manchester United v Manchester City fooball tickets for sale!</p>\r\n','manchester-united-vs-manchester-city','2015-04-11 15:00:00','Old Trafford','club',13,10,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:43:17','2014-10-17 18:43:17',1,0,0,0,'','',''),
	(21,'Manchester United vs West brom','<p>Manchester United v West Brom fooball tickets for sale!</p>\r\n','manchester-united-vs-west-brom','2015-05-02 15:00:00','Old Trafford','club',13,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:47:23','2014-10-17 18:47:23',1,0,0,0,'','',''),
	(22,'Manchester United vs Arsenal ','<p>Manchester United v Arsenal&nbsp;fooball tickets for sale!</p>\r\n','manchester-united-vs-arsenal','2015-05-16 15:00:00','Old Trafford','club',13,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-17 18:50:13','2014-10-17 18:50:13',1,0,0,0,'','',''),
	(23,'Southampton v Leicester City','<p>Southampton v Leicester City football tickets for sale!</p>\r\n','southampton-v-leicester-city','2014-11-08 15:00:00','Saint Mary\'s','club',25,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:04:59','2014-10-18 11:04:59',1,0,0,0,'','',''),
	(24,'Southampton v Manchester City','<p>Southampton v Manchester City football tickets for sale!</p>\r\n','southampton-v-manchester-city','2014-11-30 13:30:00','Saint Mary\'s','club',25,10,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:07:26','2014-10-18 11:07:26',1,0,0,0,'','',''),
	(25,'Southampton v Manchester United','<p>Southampton v Manchester United football tickets for sale!</p>\r\n','southampton-v-manchester-united','2014-12-08 20:00:00','Saint Mary\'s','club',25,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:09:43','2014-10-18 11:09:43',1,0,0,0,'','',''),
	(26,'Southampton v Everton','<p>Southampton v Everton football tickets for sale!</p>\r\n','southampton-v-everton','2014-10-18 15:00:00','Saint Mary\'s','club',25,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:12:14','2014-10-18 11:12:14',1,0,0,0,'','',''),
	(27,'Southampton v Chelsea','<p>Southampton v Chelsea&nbsp;football tickets for sale!</p>\r\n','southampton-v-chelsea','2014-12-28 14:05:00','Saint Mary\'s','club',25,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:22:40','2014-10-18 11:22:40',1,0,0,0,'','',''),
	(28,'Southampton v Arsenal','<p>Southampton v Arsenal football tickets for sale!</p>\r\n','southampton-v-arsenal','2015-01-01 15:00:00','Saint Mary\'s','club',25,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:24:35','2014-10-18 11:24:35',1,0,0,0,'','',''),
	(29,'Southampton v Swansea City','<p>Southampton v Swansea&nbsp;City football tickets for sale!</p>\r\n','southampton-v-swansea-city','2015-01-31 15:00:00','Saint Mary\'s','club',25,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:33:19','2014-10-18 11:33:19',1,0,0,0,'','',''),
	(30,'Southampton v West Ham United','<p>Southampton v West Ham United&nbsp;football tickets for sale!</p>\r\n','southampton-v-west-ham-united','2015-02-10 19:45:00','Saint Mary\'s','club',25,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:35:40','2014-10-18 11:35:40',1,0,0,0,'','',''),
	(31,'Southampton v Liverpool','<p>Southampton v Liverpool&nbsp;football tickets for sale!</p>\r\n','southampton-v-liverpool','2015-02-21 15:00:00','Saint Mary\'s','club',25,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:38:06','2014-10-18 11:38:06',1,0,0,0,'','',''),
	(32,'Southampton v Crystal Palace','<p>Southampton v Crystal Palace&nbsp;football tickets for sale!</p>\r\n','southampton-v-crystal-palace','2015-03-03 19:45:00','Saint Mary\'s','club',25,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:41:17','2014-10-18 11:41:17',1,0,0,0,'','',''),
	(33,'Southampton v Burnley','<p>Southampton v Burnley football tickets for sale!</p>\r\n','southampton-v-burnley','2015-03-21 15:00:00','Saint Mary\'s','club',25,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:43:30','2014-10-18 11:43:30',1,0,0,0,'','',''),
	(34,'Southampton v Hull City','<p>Southampton v Hull City football tickets for sale!</p>\r\n','southampton-v-hull-city','2015-04-11 15:00:00','Saint Mary\'s','club',25,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:45:52','2014-10-18 11:45:52',1,0,0,0,'','',''),
	(35,'Southampton v Tottenham','<p>Southampton v Tottenham football tickets for sale!</p>\r\n','southampton-v-tottenham','2015-04-25 15:00:00','Saint Mary\'s','club',25,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:49:04','2014-10-18 11:49:04',1,0,0,0,'','',''),
	(36,'Southampton v Aston Villa','<p>Southampton v Aston Villa&nbsp;football tickets for sale!</p>\r\n','southampton-v-aston-villa','2015-05-16 15:00:00','Saint Mary\'s','club',25,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:51:28','2014-10-18 11:51:28',1,0,0,0,'','',''),
	(37,'Swansea City v Arsenal','<p>Swansea City v Arsenal football tickets for sale!</p>\r\n','swansea-city-v-arsenal','2014-11-09 16:00:00','The Liberty Stadium ','club',28,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 11:55:07','2014-10-18 11:55:07',1,0,0,0,'','',''),
	(38,'Swansea City v Crystal Palace','<p>Swansea City v Crystal Palace football tickets for sale!</p>\r\n','swansea-city-v-crystal-palace','2014-11-29 15:00:00','The Liberty Stadium ','club',28,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 12:02:28','2014-10-18 12:02:28',1,0,0,0,'','',''),
	(39,'Swansea City v Tottenham','<p>Swansea City v Queens Park Rangers&nbsp;tickets for sale!</p>\r\n','swansea-city-v-tottenham','2014-12-14 16:00:00','The Liberty Stadium ','club',28,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 12:09:16','2014-10-18 12:09:16',1,0,0,0,'','',''),
	(40,'Swansea City v Aston Villa ','<p>Swansea City v Aston Villa tickets for sale!</p>\r\n','swansea-city-v-aston-villa','2014-12-26 15:00:00','The Liberty Stadium ','club',28,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 12:46:16','2014-10-18 12:46:16',1,0,0,0,'','',''),
	(41,'Swansea City v West Ham United','<p>Swansea City v West Ham United&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-west-ham-united','2015-01-10 15:00:00','The Liberty Stadium ','club',28,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 12:48:21','2014-10-18 12:48:21',1,0,0,0,'','',''),
	(42,'Swansea City v Chelsea','<p>Swansea City v Chelsea&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-chelsea','2015-01-17 15:00:00','The Liberty Stadium ','club',28,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,3,4,6,7,8,9,10','2014-10-18 12:50:31','2014-10-18 12:50:31',1,0,0,0,'','',''),
	(43,'Swansea City v Sunderland','<p>Swansea City v Sunderland&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-sunderland','2015-02-07 15:00:00','The Liberty Stadium ','club',28,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 12:58:39','2014-10-18 12:58:39',1,0,0,0,'','',''),
	(44,'Swansea City v Manchester United','<p>Swansea City v Manchester United&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-manchester-united','2015-02-21 15:00:00','The Liberty Stadium ','club',28,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:10:32','2014-10-18 13:10:32',1,0,0,0,'','',''),
	(45,'Swansea City v Liverpool','<p>Swansea City v Liverpool football tickets for sale!</p>\r\n','swansea-city-v-liverpool','2015-03-14 15:00:00','The Liberty Stadium ','club',28,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:15:06','2014-10-18 13:15:06',1,0,0,0,'','',''),
	(46,'Swansea City v Hull City','<p>Swansea City v Hull City&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-hull-city','2015-04-04 15:00:00','The Liberty Stadium ','club',28,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:38:33','2014-10-18 13:38:33',1,0,0,0,'','',''),
	(47,'Swansea City v Everton','<p>Swansea City v Everton&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-everton','2015-04-11 15:00:00','The Liberty Stadium ','club',28,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:40:13','2014-10-18 13:40:13',1,0,0,0,'','',''),
	(48,'Swansea City v Stoke','<p>Swansea City v Stoke&nbsp;football tickets for sale!</p>\r\n','swansea-city-v-stoke','2015-05-02 15:00:00','The Liberty Stadium ','club',28,27,0,0,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,7,8,9,10','2014-10-18 13:42:04','2014-10-18 13:42:04',1,0,0,0,'','',''),
	(49,'Swansea City v Manchester City','<p>Swansea City v Manchetser City football tickets for sale!</p>\r\n','swansea-city-v-manchester-city','2015-05-16 15:00:00','The Liberty Stadium ','club',28,23,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:45:00','2014-10-18 13:45:00',1,0,0,0,'','',''),
	(50,'West Ham United v Aston Villa','<p>West Ham United v Aston Villa football tickets for sale!</p>\r\n','west-ham-united-v-aston-villa','2014-11-08 15:00:00','Upton Park','club',31,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 13:50:14','2014-10-18 13:50:14',1,0,0,0,'','',''),
	(51,'West Ham United v Newcastle','<p>West Ham United v Newcastle football tickets for sale!</p>\r\n','west-ham-united-v-newcastle','2014-11-29 15:00:00','Upton Park','club',31,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9','2014-10-18 16:12:17','2014-10-18 16:12:17',1,0,0,0,'','',''),
	(52,'West Ham United v Swansea City','<p>West Ham United v Swansea City football tickets for sale!</p>\r\n','west-ham-united-v-swansea-city','2014-12-07 13:30:00','Upton Park','club',31,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:14:27','2014-10-18 16:14:27',1,0,0,0,'','',''),
	(53,'West Ham United v Leicester City','<p>West Ham United v Leicester City football tickets for sale!</p>\r\n','west-ham-united-v-leicester-city','2014-12-20 15:00:00','Upton Park','club',31,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:17:18','2014-10-18 16:17:18',1,0,0,0,'','',''),
	(54,'West Ham United v Arsenal','<p>West Ham United v Arsenal football tickets for sale!</p>\r\n','west-ham-united-v-arsenal','2014-12-28 15:00:00','Upton Park','club',31,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:18:46','2014-10-18 16:18:46',1,0,0,0,'','',''),
	(55,'West Ham United v West Brom','<p>West Ham United v West Brom&nbsp;football tickets for sale!</p>\r\n','west-ham-united-v-west-brom','2015-01-01 15:00:00','Upton Park','club',31,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:20:37','2014-10-18 16:20:37',1,0,0,0,'','',''),
	(56,'West Ham United v Hull City','<p>West Ham United v Hull City football tickets for sale!</p>\r\n','west-ham-united-v-hull-city','2015-01-17 15:00:00','Upton Park','club',31,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:23:27','2014-10-18 16:23:27',1,0,0,0,'','',''),
	(57,'West Ham United v Manchester United','<p>West Ham United v Manchester United&nbsp;football tickets for sale!</p>\r\n','west-ham-united-v-manchester-united','2015-02-07 15:00:00','Upton Park','club',31,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:25:33','2014-10-18 16:25:33',1,0,0,0,'','',''),
	(58,'West Ham United v Crystal Palace','<p>West Ham United v Crystal Palace&nbsp;football tickets for sale!</p>\r\n','west-ham-united-v-crystal-palace','2015-02-28 15:00:00','Upton Park','club',31,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:27:17','2014-10-18 16:27:17',1,0,0,0,'','',''),
	(59,'West Ham United v Chelsea','<p>West Ham United v Chelsea football tickets for sale!</p>\r\n','west-ham-united-v-chelsea','2015-03-03 19:45:00','Upton Park','club',31,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:29:02','2014-10-18 16:29:02',1,0,0,0,'','',''),
	(60,'West Ham United v Sunderland','<p>West Ham United v Sunderland football tickets for sale!</p>\r\n','west-ham-united-v-sunderland','2015-03-21 15:00:00','Upton Park','club',31,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:34:00','2014-10-18 16:34:00',1,0,0,0,'','',''),
	(61,'West Ham United v Stoke','<p>West Ham United v Stoke football tickets for sale!</p>\r\n','west-ham-united-v-stoke','2015-04-11 15:00:00','Upton Park','club',31,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:39:23','2014-10-18 16:39:23',1,0,0,0,'','',''),
	(62,'West Ham United v Burnley','<p>West Ham United v Burnley football tickets for sale!</p>\r\n','west-ham-united-v-burnley','2015-05-02 15:00:00','Upton Park','club',31,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:40:56','2014-10-18 16:40:56',1,0,0,0,'','',''),
	(63,'West Ham United v Everton','<p>West Ham United v Everton football tickets for sale!</p>\r\n','west-ham-united-v-everton','2015-05-16 15:00:00','Upton Park','club',31,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:43:28','2014-10-18 16:43:28',1,0,0,0,'','',''),
	(64,'Hull City v Southampton ','<p>Hull City v Southampton football tickets for sale!</p>\r\n','hull-city-v-southampton','2014-11-01 15:00:00','The KC stadium ','club',31,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:46:00','2014-10-18 16:48:24',1,0,0,0,'','',''),
	(65,'Hull City v Tottenham','<p>Hull City v Tottenham football tickets for sale!</p>\r\n','hull-city-v-tottenham','2014-11-23 16:00:00','The KC stadium','club',20,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:48:01','2014-10-18 16:48:01',1,0,0,0,'','',''),
	(66,'Hull City v West Brom','<p>Hull City v Westbrom football tickets for sale!</p>\r\n','hull-city-v-west-brom','2014-12-06 15:00:00','The KC stadium ','club',20,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:50:31','2014-10-18 16:50:31',1,0,0,0,'','',''),
	(67,'Hull City v Swansea City','<p>Hull City v Swansea City football tickets for sale!</p>\r\n','hull-city-v-swansea-city','2014-12-20 15:00:00','','club',20,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:54:24','2014-10-18 16:54:24',1,0,0,0,'','',''),
	(68,'Hull City v Leicester City','<p>Hull City v Leicester City football tickets for sale!</p>\r\n','hull-city-v-leicester-city','2014-12-28 15:00:00','The KC stadium ','club',31,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 16:55:52','2014-10-18 16:55:52',1,0,0,0,'','',''),
	(69,'Hull City v Everton','<p>Hull City v Everton football tickets for sale!</p>\r\n','hull-city-v-everton','2015-01-01 15:00:00','The KC stadium ','club',20,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:15:49','2014-10-18 17:15:49',1,0,0,0,'','',''),
	(70,'Hull City v Newcastle','<p>Hull City v Newcastle&nbsp;football tickets for sale!</p>\r\n','hull-city-v-newcastle','2015-01-31 15:00:00','The KC stadium ','club',20,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:18:17','2014-10-18 17:18:17',1,0,0,0,'','',''),
	(71,'Hull City v Aston Villa','<p>Hull City v Aston Villa&nbsp;football tickets for sale!</p>\r\n','hull-city-v-aston-villa','2015-02-10 19:45:00','The KC stadium ','club',20,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:19:58','2014-10-18 17:19:58',1,0,0,0,'','',''),
	(72,'Hull City v Sunderland','<p>Hull City v Sunderland football tickets for sale!</p>\r\n','hull-city-v-sunderland','2015-03-03 19:45:00','The KC stadium ','club',20,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:22:27','2014-10-18 17:22:27',1,0,0,0,'','',''),
	(73,'Hull City v Chelsea','<p>Hull City v Chelsea football tickets for sale!</p>\r\n','hull-city-v-chelsea','2015-03-21 15:00:00','The KC stadium ','club',20,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:24:30','2014-10-18 17:24:30',1,0,0,0,'','',''),
	(74,'Hull City v Liverpool','<p>Hull City v Liverpool football tickets for sale!</p>\r\n','hull-city-v-liverpool','2015-04-18 15:00:00','The KC stadium ','club',20,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:26:08','2014-10-18 17:26:08',1,0,0,0,'','',''),
	(75,'Hull City v Arsenal','<p>Hull City v Arsenal football tickets for sale!</p>\r\n','hull-city-v-arsenal','2015-05-02 18:26:00','The KC stadium ','club',20,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:27:43','2014-10-18 17:27:43',1,0,0,0,'','',''),
	(76,'Hull City v Burnley','<p>Hull City v Burnley football tickets for sale!</p>\r\n','hull-city-v-burnley','2015-05-09 15:00:00','The KC stadium ','club',20,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:29:16','2014-10-18 17:29:16',1,0,0,0,'','',''),
	(77,'Hull City v Manchester United','<p>Hull City v Manchester United&nbsp;football tickets for sale!</p>\r\n','hull-city-v-manchester-united','2015-05-24 15:00:00','The KC stadium ','club',20,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:31:18','2014-10-18 17:31:18',1,0,0,0,'','',''),
	(78,'Newcastle v Liverpool','<p>Newcastle v Liverpool football tickets for sale!</p>\r\n','newcastle-v-liverpool','2014-11-01 12:45:00','St James\' Park','club',24,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:34:33','2014-10-18 17:34:33',1,0,0,0,'','',''),
	(79,'Newcastle v Chelsea','<p>Newcastle v Chelsea football tickets for sale!</p>\r\n','newcastle-v-chelsea','2014-12-06 12:45:00','St James\' Park','club',24,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:36:44','2014-10-18 17:36:44',1,0,0,0,'','',''),
	(80,'Newcastle v Sunderland','<p>Newcastle v Sunderland football tickets for sale!</p>\r\n','newcastle-v-sunderland','2014-12-21 13:30:00','St James\' Park','club',24,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:39:06','2014-10-18 17:39:06',1,0,0,0,'','',''),
	(81,'Newcastle v Everton','<p>Newcastle v Everton football tickets for sale!</p>\r\n','newcastle-v-everton','2014-12-28 16:15:00','St James\' Park','club',24,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:41:01','2014-10-18 17:41:01',1,0,0,0,'','',''),
	(82,'Newcastle v Burnley','<p>Newcastle v Burnley&nbsp;football tickets for sale!</p>\r\n','newcastle-v-burnley','2015-01-01 15:00:00','St James\' Park','club',24,17,0,0,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:43:40','2014-10-18 17:43:40',1,0,0,0,'','',''),
	(83,'Newcastle v Southampton','<p>Newcastle v Southampton&nbsp;football tickets for sale!</p>\r\n','newcastle-v-southampton','2015-01-17 15:00:00','St James\' Park','club',24,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:48:59','2014-10-18 17:48:59',1,0,0,0,'','',''),
	(84,'Newcastle v Stoke','<p>Newcastle v Stoke&nbsp;football tickets for sale!</p>\r\n','newcastle-v-stoke','2015-02-07 15:00:00','St James\' Park','club',24,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:50:58','2014-10-18 17:50:58',1,0,0,0,'','',''),
	(85,'Newcastle v Aston Villa','<p>Newcastle v Aston Villa&nbsp;football tickets for sale!</p>\r\n','newcastle-v-aston-villa','2015-02-28 15:00:00','St James\' Park','club',24,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:52:30','2014-10-18 17:52:30',1,0,0,0,'','',''),
	(86,'Newcastle v Manchester United','<p>Newcastle v Manchester United football tickets for sale!</p>\r\n','newcastle-v-manchester-united','2015-03-04 19:45:00','St James\' Park','club',24,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','2,8,9,10','2014-10-18 17:54:11','2014-10-18 17:54:11',1,1,0,0,'','',''),
	(87,'Newcastle v Arsenal','<p>Newcastle v Arsenal football tickets for sale!</p>\r\n','newcastle-v-arsenal','2015-03-21 15:00:00','St James\' Park','club',24,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 17:55:34','2014-10-18 17:55:34',1,0,0,0,'','',''),
	(88,'Newcastle v Tottenham','<p>Newcastle v Tottenham football tickets for sale!</p>\r\n','newcastle-v-tottenham','2015-04-18 15:00:00','St James\' Park','club',0,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:06:55','2014-10-18 18:06:55',1,0,0,0,'','',''),
	(89,'Newcastle v Swansea City','<p>Newcastle v Swansea City football tickets for sale!</p>\r\n','newcastle-v-swansea-city','2015-04-25 15:00:00','St James\' Park','club',24,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:09:20','2014-10-18 18:09:20',1,0,0,0,'','',''),
	(90,'Newcastle v West Brom','<p>Newcastle v West Brom&nbsp;football tickets for sale!</p>\r\n','newcastle-v-west-brom','2015-05-09 15:00:00','St James\' Park','club',24,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:10:59','2014-10-18 18:10:59',1,0,0,0,'','',''),
	(91,'Newcastle v West Ham United','<p>Newcastle v West Ham United football tickets for sale!</p>\r\n','newcastle-v-west-ham-united','2015-05-24 15:00:00','St James\' Park','club',24,31,0,0,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:13:11','2014-10-18 18:13:11',1,0,0,0,'','',''),
	(92,'Burnley v Hull City','<p>Burnley v Hull City football tickets for sale!</p>\r\n','burnley-v-hull-city','2014-11-08 15:00:00','Turf Moor','club',17,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:15:35','2014-10-18 18:15:35',1,0,0,0,'','',''),
	(93,'Burnley v Aston Villa','<p>Burnley v Aston Villa&nbsp;football tickets for sale!</p>\r\n','burnley-v-aston-villa','2014-11-29 15:00:00','Turf Moor','club',17,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:17:01','2014-10-18 18:17:01',1,0,0,0,'','',''),
	(94,'Burnley v Newcastle','<p>Burnley v Newcastle&nbsp;football tickets for sale!</p>\r\n','burnley-v-newcastle','2014-12-02 19:45:00','Turf Moor','club',24,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:23:18','2014-10-18 18:23:18',1,0,0,0,'','',''),
	(95,'Burnley v Southampton','<p>Burnley v Southampton&nbsp;football tickets for sale!</p>\r\n','burnley-v-southampton','2014-12-13 15:00:00','Turf Moor','club',17,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:25:52','2014-10-18 18:28:12',1,0,0,0,'','',''),
	(96,'Burnley v Liverpool','<p>Burnley v Liverpool football tickets for sale!</p>\r\n','burnley-v-liverpool','2014-12-26 15:00:00','Turf Moor','club',17,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-18 18:27:49','2014-10-18 18:27:49',1,0,0,0,'','',''),
	(97,'Burnley v Crystal Palace','<p>Burnley v Crystal Palace football tickets for sale!</p>\r\n','burnley-v-crystal-palace','2015-01-17 15:00:00','Turf Moor','club',17,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:07:36','2014-10-19 11:07:36',1,0,0,0,'','',''),
	(98,'Burnley v West Brom','<p>Burnley v West Brom football tickets for sale!</p>\r\n','burnley-v-west-brom','2015-02-07 15:00:00','Turf Moor','club',17,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:09:36','2014-10-19 11:09:36',1,0,0,0,'','',''),
	(99,'Burnley v Swansea City','<p>Burnley v Swansea City football tickets for sale!</p>\r\n','burnley-v-swansea-city','2015-02-28 15:00:00','Turf Moor','club',17,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:11:17','2014-10-19 11:11:17',1,0,0,0,'','',''),
	(100,'Burnley v Manchester City','<p>Burnley v Manchetser City&nbsp;football tickets for sale!</p>\r\n','burnley-v-manchester-city','2015-03-14 15:00:00','Turf Moor','club',17,10,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:13:53','2014-10-19 11:13:53',1,0,0,0,'','',''),
	(101,'Burnley v Tottenham','<p>Burnley v Tottenham football tickets for sale!</p>\r\n','burnley-v-tottenham','2015-04-04 15:00:00','Turf Moor','club',17,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:15:55','2014-10-19 11:15:55',1,0,0,0,'','',''),
	(102,'Burnley v Arsenal','<p>Burnley v Arsenal football tickets for sale!</p>\r\n','burnley-v-arsenal','2015-04-11 15:00:00','Turf Moor','club',17,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:18:33','2014-10-19 11:18:33',1,0,0,0,'','',''),
	(103,'Burnley v Leicester City','<p>Burnley v Leicester City football tickets for sale!</p>\r\n','burnley-v-leicester-city','2015-04-25 15:00:00','Turf Moor','club',17,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:20:54','2014-10-19 11:20:54',1,0,0,0,'','',''),
	(104,'Burnley v Stoke','<p>Burnley v Stoke football tickets for sale!</p>\r\n','burnley-v-stoke','2015-05-16 15:00:00','Turf Moor','club',17,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:24:27','2014-10-19 11:24:27',1,0,0,0,'','',''),
	(105,'Sunderland v Everton','<p>Sunderland v Everton football tickets for sale!</p>\r\n','sunderland-v-everton','2014-11-09 13:30:00','The Stadium Of Light','club',26,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:26:57','2014-10-19 11:26:57',1,0,0,0,'','',''),
	(106,'Sunderland v Chelsea','<p>Sunderland v Chelsea football tickets for sale!</p>\r\n','sunderland-v-chelsea','2014-11-29 17:30:00','The Stadium Of Light','club',26,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:30:48','2014-10-19 11:30:48',1,0,0,0,'','',''),
	(107,'Sunderland v Manchester City','<p>Sunderland v Manchester City&nbsp;football tickets for sale!</p>\r\n','sunderland-v-manchester-city','2014-12-03 17:45:00','The Stadium Of Light','club',26,10,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:33:07','2014-10-19 11:33:07',1,0,0,0,'','',''),
	(108,'Sunderland v West Ham United','<p>Sunderland v West Ham United football tickets for sale!</p>\r\n','sunderland-v-west-ham-united','2014-12-03 15:00:00','The Stadium Of Light','club',26,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:35:47','2014-10-19 11:35:47',1,0,0,0,'','',''),
	(109,'Sunderland v Hull City','<p>Sunderland v Hull City football tickets for sale!</p>\r\n','sunderland-v-hull-city','2014-12-26 15:00:00','The Stadium Of Light','club',26,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:37:22','2014-10-19 11:37:22',1,0,0,0,'','',''),
	(110,'Sunderland v Liverpool','<p>Sunderland v Liverpool football tickets for sale!</p>\r\n','sunderland-v-liverpool','2015-01-10 15:00:00','The Stadium Of Light','club',26,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:50:03','2014-10-19 11:50:03',1,0,0,0,'','',''),
	(111,'Sunderland v Burnley','<p>Sunderland v Burnley football tickets for sale!</p>\r\n','sunderland-v-burnley','2015-01-31 15:00:00','The Stadium Of Light','club',26,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:51:49','2014-10-19 11:51:49',1,0,0,0,'','',''),
	(112,'Sunderland v West Brom','<p>Sunderland v West Brom football tickets for sale!</p>\r\n','sunderland-v-west-brom','2015-02-21 15:00:00','The Stadium Of Light','club',26,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:53:37','2014-10-19 11:53:37',1,0,0,0,'','',''),
	(113,'Sunderland v Aston Villa','<p>Sunderland v Aston Villa football tickets for sale!</p>\r\n','sunderland-v-aston-villa','2015-03-14 15:00:00','The Stadium Of Light','club',26,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:55:28','2014-10-19 11:55:28',1,0,0,0,'','',''),
	(114,'Sunderland v Newcastle','<p>Sunderland v Newcastle football tickets for sale!</p>\r\n','sunderland-v-newcastle','2015-04-04 15:00:00','The Stadium Of Light','club',26,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:57:09','2014-10-19 11:57:09',1,0,0,0,'','',''),
	(115,'Sunderland v Crystal Palace','<p>Sunderland v Crystal Palace football tickets for sale!</p>\r\n','sunderland-v-crystal-palace','2015-04-11 15:00:00','The Stadium Of Light','club',26,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 11:59:42','2014-10-19 11:59:42',1,0,0,0,'','',''),
	(116,'Sunderland v Southampton','<p>Sunderland v Southampton football tickets for sale!</p>\r\n','sunderland-v-southampton','2015-05-02 15:00:00','The Stadium Of Light','club',26,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:01:32','2014-10-19 12:01:32',1,0,0,0,'','',''),
	(117,'Sunderland v Leicester City','<p>Sunderland v Leicester City football tickets for sale!</p>\r\n','sunderland-v-leicester-city','2015-05-16 15:00:00','The Stadium Of Light','club',26,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:03:39','2014-10-19 12:03:39',1,0,0,0,'','',''),
	(118,'Stoke v West Ham United','<p>Stoke v West Ham United football tickets for sale!</p>\r\n','stoke-v-west-ham-united','2014-11-01 15:00:00','The Britannia Stadium','club',27,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:06:11','2014-10-19 12:06:11',1,0,0,0,'','',''),
	(119,'Stoke v Burnley','<p>Stoke v Burnley football tickets for sale!</p>\r\n','stoke-v-burnley','2014-11-22 15:00:00','The Britannia Stadium','club',27,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:07:32','2014-10-19 12:07:32',1,0,0,0,'','',''),
	(120,'Stoke v Arsenal','<p>Stoke v Arsenal&nbsp;football tickets for sale!</p>\r\n','stoke-v-arsenal','2014-12-06 15:00:00','The Britannia Stadium','club',27,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:09:03','2014-10-19 12:09:03',1,0,0,0,'','',''),
	(121,'Stoke v Chelsea','<p>Stoke v Chelsea football tickets for sale!</p>\r\n','stoke-v-chelsea','2014-12-22 20:00:00','The Britannia Stadium','club',27,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:11:10','2014-10-19 12:11:10',1,0,0,0,'','',''),
	(122,'Stoke v West Brom','<p>Stoke v West Brom football tickets for sale!</p>\r\n','stoke-v-west-brom','2014-12-28 15:00:00','The Britannia Stadium','club',27,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:12:56','2014-10-19 12:12:56',1,0,0,0,'','',''),
	(123,'Stoke v Manchester United','<p>Stoke v Manchester United football tickets for sale!</p>\r\n','stoke-v-manchester-united','2015-01-01 12:45:00','The Britannia Stadium','club',27,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:14:21','2014-10-19 12:14:21',1,0,0,0,'','',''),
	(124,'Stoke v Manchester City','<p>Stoke v Manchester City&nbsp;football tickets for sale!</p>\r\n','stoke-v-manchester-city','2015-02-11 17:45:00','The Britannia Stadium','club',27,23,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:19:22','2014-10-19 12:19:22',1,0,0,0,'','',''),
	(125,'Stoke v Hull City','<p>Stoke v Hull City football tickets for sale!</p>\r\n','stoke-v-hull-city','2015-02-28 15:00:00','The Britannia Stadium','club',27,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:20:50','2014-10-19 12:20:50',1,0,0,0,'','',''),
	(126,'Stoke v Everton','<p>Stoke v Everton&nbsp;football tickets for sale!</p>\r\n','stoke-v-everton','2015-03-04 19:45:00','The Britannia Stadium','club',27,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:22:22','2014-10-19 12:22:22',1,0,0,0,'','',''),
	(127,'Stoke v Crystal Palace','<p>Stoke v Crystal Palace football tickets for sale!</p>\r\n','stoke-v-crystal-palace','2015-03-21 15:00:00','The Britannia Stadium','club',27,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:24:00','2014-10-19 12:24:00',1,0,0,0,'','',''),
	(128,'Stoke v Southampton','<p>Stoke v Southampton football tickets for sale!</p>\r\n','stoke-v-southampton','2015-04-18 15:00:00','The Britannia Stadium','club',27,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:25:26','2014-10-19 12:25:26',1,0,0,0,'','',''),
	(129,'Stoke v Sunderland','<p>Stoke v Sunderland football tickets for sale!</p>\r\n','stoke-v-sunderland','2015-04-25 15:00:00','The Britannia Stadium','club',27,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,7,8,9,10','2014-10-19 12:26:48','2014-10-19 12:26:48',1,0,0,0,'','',''),
	(130,'Stoke v Tottenham','<p>Stoke v Tottenham football tickets for sale!</p>\r\n','stoke-v-tottenham','2015-05-09 15:00:00','The Britannia Stadium','club',27,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:28:12','2014-10-19 12:28:12',1,0,0,0,'','',''),
	(131,'Stoke v Liverpool','<p>Stoke v Liverpool football tickets for sale!</p>\r\n','stoke-v-liverpool','2015-05-24 15:00:00','The Britannia Stadium','club',27,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:29:28','2014-10-19 12:29:28',1,0,0,0,'','',''),
	(132,'Aston Villa v Tottenham','<p>Aston Villa v Tottenham football tickets for sale!</p>\r\n','aston-villa-v-tottenham','2014-11-02 16:00:00','Villa Park','club',16,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:31:46','2014-10-19 12:31:46',1,0,0,0,'','',''),
	(133,'Aston Villa v Southampton','<p>Aston Villa v Southampton&nbsp;football tickets for sale!</p>\r\n','aston-villa-v-southampton','2014-11-24 20:00:00','Villa Park','club',16,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:33:28','2014-10-19 12:33:28',1,0,0,0,'','',''),
	(134,'Aston Villa v Leicester City','<p>Aston Villa v Leicester City football tickets for sale!</p>\r\n','aston-villa-v-leicester-city','2014-12-07 16:00:00','Villa Park','club',16,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:35:14','2014-10-19 12:35:14',1,0,0,0,'','',''),
	(135,'Aston Villa v Manchester United','<p>Aston Villa v Manchester United&nbsp;football tickets for sale!</p>\r\n','aston-villa-v-manchester-united','2014-12-20 15:00:00','Villa Park','club',16,13,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:37:43','2014-10-19 12:37:43',1,0,0,0,'','',''),
	(136,'Aston Villa v Sunderland','<p>Aston Villa v Sunderland football tickets for sale!</p>\r\n','aston-villa-v-sunderland','2014-12-28 15:00:00','Villa Park','club',16,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 12:39:20','2014-10-19 12:39:20',1,0,0,0,'','',''),
	(137,'Aston Villa v Crystal Palace','<p>Aston Villa v Crystal Palace football tickets for sale!</p>\r\n','aston-villa-v-crystal-palace','2015-01-01 15:00:00','Villa Park','club',16,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:18:07','2014-10-19 13:18:07',1,0,0,0,'','',''),
	(138,'Aston Villa v Liverpool','<p>Aston Villa v Liverpool football tickets for sale!</p>\r\n','aston-villa-v-liverpool','2015-01-17 15:00:00','Villa Park','club',16,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:19:22','2014-10-19 13:19:22',1,0,0,0,'','',''),
	(139,'Aston Villa v Chelsea','<p>Aston Villa v Chelsea&nbsp;football tickets for sale!</p>\r\n','aston-villa-v-chelsea','2015-02-07 15:00:00','Villa Park','club',16,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:20:49','2014-10-19 13:20:49',1,0,0,0,'','',''),
	(140,'Aston Villa v Stoke','<p>Aston Villa v Stoke football tickets for sale!</p>\r\n','aston-villa-v-stoke','2015-02-21 15:00:00','Villa Park','club',16,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:22:10','2014-10-19 13:22:10',1,0,0,0,'','',''),
	(141,'Aston Villa v Westbrom','<p>Aston Villa v West Brom&nbsp;football tickets for sale!</p>\r\n','aston-villa-v-westbrom','2015-03-03 19:45:00','Villa Park','club',16,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:24:33','2014-10-19 13:24:33',1,0,0,0,'','',''),
	(142,'Aston Villa v Swansea City','<p>Aston Villa v Swansea City football tickets for sale!</p>\r\n','aston-villa-v-swansea-city','2015-03-21 15:00:00','Villa Park','club',16,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:26:02','2014-10-19 13:26:02',1,0,0,0,'','',''),
	(143,'Aston Villa v Everton','<p>Aston Villa v Everton football tickets for sale!</p>\r\n','aston-villa-v-everton','2015-05-02 15:00:00','Villa Park','club',16,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:27:52','2014-10-19 13:27:52',1,0,0,0,'','',''),
	(144,'Aston Villa v West Ham United','<p>Aston Villa v West Ham United&nbsp;football tickets for sale!</p>\r\n','aston-villa-v-west-ham-united','2015-05-09 15:00:00','Villa Park','club',16,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:29:23','2014-10-19 13:29:23',1,0,0,0,'','',''),
	(145,'Aston Villa v Burnley','<p>Aston Villa v Burnley football tickets for sale!</p>\r\n','aston-villa-v-burnley','2015-05-24 15:00:00','Villa Park','club',16,17,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:30:42','2014-10-19 13:30:42',1,0,0,0,'','',''),
	(146,'West Brom v Newcastle','<p>West Brom v Newcastle football tickets for sale!</p>\r\n','west-brom-v-newcastle','2014-11-09 13:30:00','The Hawthornes','club',30,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:33:38','2014-10-19 13:33:38',1,0,0,0,'','',''),
	(147,'West Brom v Arsenal','<p>West Brom v Arsenal&nbsp;football tickets for sale!</p>\r\n','west-brom-v-arsenal','2014-11-29 12:45:00','The Hawthornes','club',30,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:35:25','2014-10-19 13:35:25',1,0,0,0,'','',''),
	(148,'West Brom v West Ham United','<p>West Brom v West Ham United&nbsp;football tickets for sale!</p>\r\n','west-brom-v-west-ham-united','2014-12-02 20:00:00','The Hawthornes','club',30,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:36:56','2014-10-19 13:36:56',1,0,0,0,'','',''),
	(149,'West Brom v Aston Villa ','<p>West Brom v Aston Villa&nbsp;football tickets for sale!</p>\r\n','west-brom-v-aston-villa','2014-12-13 15:00:00','The Hawthornes','club',30,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:40:35','2014-10-19 13:40:35',1,0,0,0,'','',''),
	(150,'West Brom v Manchester City','<p>West Brom v Manchester City football tickets for sale!</p>\r\n','west-brom-v-manchester-city','2014-12-26 15:00:00','The Hawthornes','club',30,23,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 13:42:32','2014-10-19 13:42:32',1,0,0,0,'','',''),
	(151,'West Brom v Hull City','<p>West Brom v Hull City football tickets for sale!</p>\r\n','west-brom-v-hull-city','2015-01-10 15:00:00','The Hawthornes','club',30,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:33:32','2014-10-19 14:33:32',1,0,0,0,'','',''),
	(152,'West Brom v Tottenham','<p>West Brom v Tottenham football tickets for sale!</p>\r\n','west-brom-v-tottenham','2015-01-31 15:00:00','The Hawthornes','club',30,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:35:02','2014-10-19 14:35:02',1,0,0,0,'','',''),
	(153,'West Brom v Swansea City','<p>West Brom v Swansea City football tickets for sale!</p>\r\n','west-brom-v-swansea-city','2015-02-10 20:00:00','The Hawthornes','club',30,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:37:54','2014-10-19 14:37:54',1,0,0,0,'','',''),
	(154,'West Brom v Southampton','<p>West Brom v Southampton football tickets for sale!</p>\r\n','west-brom-v-southampton','2015-02-28 15:00:00','The Hawthornes','club',30,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:39:58','2014-10-19 14:39:58',1,0,0,0,'','',''),
	(155,'West Brom v Stoke','<p>West Brom v Stoke football tickets for sale!</p>\r\n','west-brom-v-stoke','2015-03-14 15:00:00','The Hawthornes','club',30,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:50:19','2014-10-19 14:50:19',1,0,0,0,'','',''),
	(156,'West Brom v Leicester City','<p>West Brom v Leicester City football tickets for sale!</p>\r\n','west-brom-v-leicester-city','2015-04-11 15:00:00','The Hawthornes','club',30,21,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:52:12','2014-10-19 14:52:12',1,0,0,0,'','',''),
	(157,'West Brom v Liverpool','<p>West Brom v Liverpool football tickets for sale!</p>\r\n','west-brom-v-liverpool','2015-04-25 15:00:00','The Hawthornes','club',30,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:53:26','2014-10-19 14:53:26',1,0,0,0,'','',''),
	(158,'West Brom v Chelsea','<p>West Brom v Chelsea football tickets for sale!</p>\r\n','west-brom-v-chelsea','2015-05-16 15:00:00','The Hawthornes','club',30,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:55:01','2014-10-19 14:55:01',1,0,0,0,'','',''),
	(159,'Crystal Palace v Sunderland','<p>Crystal Palace v Sunderland football tickets for sale!</p>\r\n','crystal-palace-v-sunderland','2014-11-03 20:00:00','Selhurst Park','club',18,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:57:15','2014-10-19 14:57:15',1,0,0,0,'','',''),
	(160,'Crystal Palace v Liverpool','<p>Crystal Palace v Liverpool&nbsp;football tickets for sale!</p>\r\n','crystal-palace-v-liverpool','2014-11-23 13:30:00','Selhurst Park','club',18,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 14:58:59','2014-10-19 14:58:59',1,0,0,0,'','',''),
	(161,'Crystal Palace v Aston Villa','<p>Crystal Palace v Aston Villa football tickets for sale!</p>\r\n','crystal-palace-v-aston-villa','2014-12-02 20:00:00','Selhurst Park','club',18,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 15:00:31','2014-10-19 15:00:31',1,0,0,0,'','',''),
	(162,'Crystal Palace v Stoke','<p>Crystal Palace v Stoke football tickets for sale!</p>\r\n','crystal-palace-v-stoke','2014-12-13 15:00:00','Selhurst Park','club',18,27,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 15:01:52','2014-10-19 15:01:52',1,0,0,0,'','',''),
	(163,'Crystal Palace v Southampton','<p>Crystal Palace v Southampton&nbsp;football tickets for sale!</p>\r\n','crystal-palace-v-southampton','2014-12-26 15:00:00','Selhurst Park','club',18,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 15:03:24','2014-10-19 15:03:24',1,0,0,0,'','',''),
	(164,'Crystal Palace v Tottenham','<p>Crystal Palace v Tottenham football tickets for sale!</p>\r\n','crystal-palace-v-tottenham','2015-01-10 15:00:00','Selhurst Park','club',18,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:11:57','2014-10-19 21:11:57',1,0,0,0,'','',''),
	(165,'Crystal Palace v Everton','<p>Crystal Palace v Everton football tickets for sale!</p>\r\n','crystal-palace-v-everton','2015-01-31 15:00:00','Selhurst Park','club',18,19,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:13:48','2014-10-19 21:13:48',1,0,0,0,'','',''),
	(166,'Crystal Palace v Newcastle','<p>Crystal Palace v Newcastle football tickets for sale!</p>\r\n','crystal-palace-v-newcastle','2015-02-10 20:00:00','Selhurst Park','club',18,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:15:56','2014-10-19 21:15:56',1,0,0,0,'','',''),
	(167,'Crystal Palace v Arsenal','<p>Crystal Palace v Arsenal football tickets for sale!</p>\r\n','crystal-palace-v-arsenal','2015-02-21 15:00:00','Selhurst Park','club',18,15,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:18:11','2014-10-19 21:18:11',1,0,0,0,'','',''),
	(168,'Crystal Palace v Manchester City','<p>Crystal Palace v Manchester City football tickets for sale!</p>\r\n','crystal-palace-v-manchester-city','2015-04-04 15:00:00','Selhurst Park','club',18,23,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:21:24','2014-10-19 21:21:24',1,0,0,0,'','',''),
	(169,'Crystal Palace v West Brom','<p>Crystal Palace v West Brom football tickets for sale!</p>\r\n','crystal-palace-v-west-brom','2015-04-18 15:00:00','Selhurst Park','club',18,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:23:33','2014-10-19 21:23:33',1,0,0,0,'','',''),
	(170,'Crystal Palace v Hull City','<p>Crystal Palace v Hull City football tickets for sale!</p>\r\n','crystal-palace-v-hull-city','2015-04-25 15:00:00','Selhurst Park','club',18,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:25:26','2014-10-19 21:25:26',1,0,0,0,'','',''),
	(171,'Crystal Palace v Manchester United','<p>Crystal Palace v Manchester United football tickets for sale!</p>\r\n','crystal-palace-v-manchester-united','2015-05-09 15:00:00','Selhurst Park','club',18,36,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:27:18','2014-10-19 21:27:18',1,0,0,0,'','',''),
	(172,'Crystal Palace v Swansea City','<p>Crystal Palace v Swansea City football tickets for sale!</p>\r\n','crystal-palace-v-swansea-city','2015-05-24 15:00:00','Selhurst Park','club',18,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:30:18','2014-10-19 21:30:18',1,0,0,0,'','',''),
	(173,'Leicester City v West Brom','<p>Leicester City v West Brom football tickets for sale!</p>\r\n','leicester-city-v-west-brom','2014-11-01 15:00:00','The King Power Stadium','club',21,30,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:34:00','2014-10-19 21:34:00',1,0,0,0,'','',''),
	(174,'Leicester City v Sunderland','<p>Leicester City v Sunderland&nbsp;football tickets for sale!</p>\r\n','leicester-city-v-sunderland','2014-11-22 15:00:00','The King Power Stadium','club',21,26,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:36:24','2014-10-19 21:36:24',1,0,0,0,'','',''),
	(175,'Leicester City v Liverpool','<p>Leicester City v Liverpool football tickets for sale!</p>\r\n','leicester-city-v-liverpool','2014-12-02 19:45:00','The King Power Stadium','club',21,22,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:37:54','2014-10-19 21:37:54',1,0,0,0,'','',''),
	(176,'Leicester City v Manchester City','<p>Leicester City v Manchester City football tickets for sale!</p>\r\n','leicester-city-v-manchester-city','2014-12-13 15:00:00','The King Power Stadium','club',21,10,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:45:54','2014-10-19 21:45:54',1,0,0,0,'','',''),
	(177,'Leicester City v Tottenham','<p>Leicester City v Tottenham&nbsp;football tickets for sale!</p>\r\n','leicester-city-v-tottenham','2014-12-26 15:00:00','The King Power Stadium','club',21,29,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 21:58:36','2014-10-19 21:58:36',1,0,0,0,'','',''),
	(178,'Leicester City v Aston Villa','<p>Leicester City v Aston Villa football tickets for sale!</p>\r\n','leicester-city-v-aston-villa','2015-01-10 15:00:00','The King Power Stadium','club',21,16,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:01:00','2014-10-19 22:01:00',1,0,0,0,'','',''),
	(179,'Leicester City v Stoke','<p>Leicester City v Stoke football tickets for sale!</p>\r\n','leicester-city-v-stoke','2015-01-17 15:00:00','The King Power Stadium','club',21,27,8,7,0,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:16:25','2014-10-19 22:16:25',0,0,0,0,'','',''),
	(180,'Leicester City v Crystal Palace','<p>Leicester City v Crystal Palace football tickets for sale!</p>\r\n','leicester-city-v-crystal-palace','2015-02-07 15:00:00','The King Power Stadium','club',21,18,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:18:05','2014-10-19 22:18:05',1,0,0,0,'','',''),
	(181,'Leicester City v Chelsea','<p>Leicester City v Chelsea football tickets for sale!</p>\r\n','leicester-city-v-chelsea','2015-02-28 15:00:00','The King Power Stadium','club',21,14,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:20:12','2014-10-19 22:20:12',1,0,0,0,'','',''),
	(182,'Leicester City v Hull City','<p>Leicester City v Hull City football tickets for sale!</p>\r\n','leicester-city-v-hull-city','2015-03-14 15:00:00','The King Power Stadium','club',21,20,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:21:58','2014-10-19 22:21:58',1,0,0,0,'','',''),
	(183,'Leicester City v West Ham United','<p>Leicester City v West Ham United&nbsp;football tickets for sale!</p>\r\n','leicester-city-v-west-ham-united','2015-04-04 15:00:00','The King Power Stadium','club',21,31,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:24:08','2014-10-19 22:24:08',1,0,0,0,'','',''),
	(184,'Leicester City v Swansea City','<p>Leicester City v Swansea City football tickets for sale!</p>\r\n','leicester-city-v-swansea-city','2015-04-18 15:00:00','The King Power Stadium','club',21,28,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:25:42','2014-10-19 22:25:42',1,0,0,0,'','',''),
	(185,'Leicester City v Newcastle','<p>Leicester City v Newcastle&nbsp;football tickets for sale!</p>\r\n','leicester-city-v-newcastle','2015-05-02 15:00:00','The King Power Stadium','club',21,24,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:27:27','2014-10-19 22:27:27',1,0,0,0,'','',''),
	(186,'Leicester City v Southampton','<p>Leicester City v Southampton football tickets for sale!</p>\r\n','leicester-city-v-southampton','2015-05-09 15:00:00','The King Power Stadium','club',21,25,8,7,1,'','','3,4,9,19,20,21','4,14,15,16','1,4,6,7,8,9,10','2014-10-19 22:30:01','2014-10-20 10:57:33',1,0,0,0,'test Title Events','test Title Events','test Title Events'),
	(187,'test club ','<p>Test Messages</p>\r\n','test-club','2014-10-20 11:13:00','London','country',4,10,8,12,1,'','/uploads/abdul/avatar5-173844.png','1,2,3','2,4,5','1,2,3','2014-10-20 10:14:07','2014-10-20 10:18:31',1,1,0,0,'test data','asdasdasD','Test Meta Description');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events_form_of_ticket
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events_form_of_ticket`;

CREATE TABLE `events_form_of_ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events_form_of_ticket` WRITE;
/*!40000 ALTER TABLE `events_form_of_ticket` DISABLE KEYS */;

INSERT INTO `events_form_of_ticket` (`id`, `title`, `default`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'std ticket',NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'season ticket',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'test1',NULL,0,'2014-09-10 16:25:08','2014-09-10 16:25:08'),
	(4,'Official Hospitality package',1,1,'2014-09-10 17:42:03','2014-09-10 17:42:03'),
	(5,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:05','2014-10-16 15:09:05'),
	(6,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:20','2014-10-16 15:09:20'),
	(7,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:33','2014-10-16 15:09:33'),
	(8,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:37','2014-10-16 15:09:37'),
	(9,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:38','2014-10-16 15:09:38'),
	(10,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:38','2014-10-16 15:09:38'),
	(11,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:50','2014-10-16 15:09:50'),
	(12,'Longside Upper Tier',NULL,1,'2014-10-16 15:09:54','2014-10-16 15:09:54'),
	(13,'Longside Upper Tier',NULL,1,'2014-10-16 15:10:00','2014-10-16 15:10:00'),
	(14,'Paper tickets',1,1,'2014-10-16 16:49:46','2014-10-16 16:49:46'),
	(15,'E-tickets',1,1,'2014-10-16 16:50:11','2014-10-16 16:50:11'),
	(16,'Season cards',1,1,'2014-10-16 16:50:37','2014-10-16 16:50:37');

/*!40000 ALTER TABLE `events_form_of_ticket` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events_related_tickets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events_related_tickets`;

CREATE TABLE `events_related_tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ticket` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `price` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `available_qty` int(11) NOT NULL,
  `ticket_status` enum('paused','active','sold','deleted','blocked') COLLATE utf8_unicode_ci DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events_related_tickets` WRITE;
/*!40000 ALTER TABLE `events_related_tickets` DISABLE KEYS */;

INSERT INTO `events_related_tickets` (`id`, `event_id`, `product_id`, `ticket`, `created_at`, `updated_at`, `price`, `user_id`, `available_qty`, `ticket_status`)
VALUES
	(1,1,13,'{\"ticketInformation\":{\"event_id\":\"1\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"4\",\"ticket_type\":\"3\",\"loc_block\":\"103\",\"loc_row\":\"12\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"others\":\"Test\"},\"price\":\"120\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-09-19 16:13:03','2014-09-19 16:13:03',0,0,0,'active'),
	(2,1,14,'{\"ticketInformation\":{\"event_id\":\"1\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"4\",\"ticket_type\":\"3\",\"loc_block\":\"103\",\"loc_row\":\"12\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"others\":\"Test\"},\"price\":\"120\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-09-19 16:13:48','2014-09-19 16:13:48',0,0,0,'active'),
	(3,1,15,'{\"ticketInformation\":{\"event_id\":\"1\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"3\",\"ticket_type\":\"2\",\"loc_block\":\"12\",\"loc_row\":\"05\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"120\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-09-19 16:43:28','2014-09-19 16:43:28',0,0,0,'active'),
	(4,1,16,'{\"ticketInformation\":{\"event_id\":\"1\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"3\",\"ticket_type\":\"2\",\"loc_block\":\"12\",\"loc_row\":\"05\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"120\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-09-19 17:02:39','2014-09-19 17:02:39',0,0,0,'active'),
	(5,1,17,'{\"ticketInformation\":{\"event_id\":\"1\",\"number_of_ticket\":\"5\",\"form_of_ticket\":\"2\",\"ticket_type\":\"2\",\"loc_block\":\"BL1\",\"loc_row\":\"2\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"others\":\"Test\"},\"price\":\"120.00\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-09-24 09:17:49','2014-09-24 09:17:49',0,0,0,'active'),
	(6,3,18,'{\"ticketInformation\":{\"event_id\":\"3\",\"number_of_ticket\":\"4\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"5\",\"loc_row\":\"1\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"others\":\"Test Entry\"},\"price\":\"120\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 02:46:51','2014-10-08 02:46:51',0,0,0,'active'),
	(7,3,19,'{\"ticketInformation\":{\"event_id\":\"3\",\"number_of_ticket\":\"1\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"1\",\"loc_row\":\"3\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"others\":\"Test Entry\"},\"price\":\"120\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"SAMAD ABDUL\",\"iban\":\"IBAN098786\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"9\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 04:11:59','2014-10-08 04:11:59',0,0,0,'active'),
	(8,4,7,'{\"ticketInformation\":{\"event_id\":\"4\",\"number_of_ticket\":\"5\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"5\",\"loc_row\":\"123\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"120\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"payment_option\":\"paypal\",\"paypal_email\":\"felahee@gmail.com\",\"account_holder\":\"1111111\",\"iban\":\"11111\",\"bic_swift\":\"1111111\"},\"paymentAgreement\":{\"credit_card\":\"10\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 10:53:44','2014-10-08 10:53:44',0,0,0,'active'),
	(9,4,8,'{\"ticketInformation\":{\"event_id\":\"4\",\"number_of_ticket\":\"1\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"4\",\"loc_row\":\"5\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"222\",\"sell_preference\":\"3\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"felahee@gmail.com\",\"payment_option\":\"bank\",\"account_holder\":\"1111111\",\"iban\":\"11111\",\"bic_swift\":\"1111111\"},\"paymentAgreement\":{\"credit_card\":\"10\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 11:12:12','2014-10-08 11:12:12',0,0,0,'active'),
	(10,4,9,'{\"ticketInformation\":{\"event_id\":\"4\",\"number_of_ticket\":\"1\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"1\",\"loc_row\":\"2\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"120.c0m\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"payment_option\":\"paypal\",\"paypal_email\":\"fazlle..elahee123@gmaill.com\",\"account_holder\":\"1111111\",\"iban\":\"11111\",\"bic_swift\":\"111111\"},\"paymentAgreement\":{\"credit_card\":\"11\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 11:42:16','2014-10-08 11:42:16',0,0,0,'active'),
	(11,4,10,'{\"ticketInformation\":{\"event_id\":\"4\",\"number_of_ticket\":\"1\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"A\",\"loc_row\":\"2\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"others\":\"eee\"},\"price\":\"250\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"payment_option\":\"paypal\",\"paypal_email\":\"am@bondmedia.co.uk\",\"account_holder\":\"e\",\"iban\":\"e\",\"bic_swift\":\"e\"},\"paymentAgreement\":{\"credit_card\":\"12\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-08 16:58:58','2014-10-08 16:58:58',0,0,0,'active'),
	(12,4,11,'{\"ticketInformation\":{\"event_id\":\"4\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"1\",\"ticket_type\":\"2\",\"loc_block\":\"fbdb\",\"loc_row\":\"fdvfdv\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"2333.00\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"ABDULLAH\",\"iban\":\"IBAN 123\",\"bic_swift\":\"BIC 231\"},\"paymentAgreement\":{\"credit_card\":\"1\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-15 16:46:36','2014-10-15 16:46:36',2333,0,0,'active'),
	(13,5,12,'{\"ticketInformation\":{\"event_id\":\"5\",\"number_of_ticket\":\"3\",\"form_of_ticket\":\"2\",\"ticket_type\":\"2\",\"loc_block\":\"a\",\"loc_row\":\"12\",\"restriction_option\":\"1\",\"restrictions\":{\"2\":\"2\",\"others\":\"sefwef\"},\"price\":\"120.00\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"ABDULLAH\",\"iban\":\"IBAN 123\",\"bic_swift\":\"BIC 231\"},\"paymentAgreement\":{\"credit_card\":\"1\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-16 12:05:22','2014-10-16 12:05:22',120,0,0,'active'),
	(14,5,13,'{\"ticketInformation\":{\"event_id\":\"5\",\"number_of_ticket\":\"2\",\"form_of_ticket\":\"4\",\"ticket_type\":\"2\",\"loc_block\":\"s\",\"loc_row\":\"22\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"200.00\",\"sell_preference\":\"0\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"ABDULLAH\",\"iban\":\"IBAN 123\",\"bic_swift\":\"BIC 231\"},\"paymentAgreement\":{\"credit_card\":\"1\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-16 12:11:48','2014-10-16 12:11:48',200,0,0,'active'),
	(15,5,14,'{\"ticketInformation\":{\"event_id\":\"5\",\"number_of_ticket\":\"1\",\"form_of_ticket\":\"2\",\"ticket_type\":\"1\",\"loc_block\":\"A\",\"loc_row\":\"2\",\"restriction_option\":\"1\",\"restrictions\":{\"2\":\"2\",\"others\":\"TEST\"},\"price\":\"150.00\",\"sell_preference\":\"0\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"payment_option\":\"paypal\",\"paypal_email\":\"am@bondmedia.co.uk\",\"account_holder\":\"\",\"iban\":\"\",\"bic_swift\":\"\"},\"paymentAgreement\":{\"credit_card\":\"12\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-17 09:25:30','2014-10-17 09:25:30',150,0,0,'active'),
	(16,186,27,'{\"ticketInformation\":{\"event_id\":\"186\",\"number_of_ticket\":\"8\",\"form_of_ticket\":\"14\",\"ticket_type\":\"4\",\"loc_block\":\"12\",\"loc_row\":\"120\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"4\":\"4\",\"6\":\"6\",\"7\":\"7\",\"8\":\"8\",\"9\":\"9\",\"10\":\"10\",\"others\":\"test\"},\"price\":\"120.00\",\"sell_preference\":\"2\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"Fazle Elahee\",\"iban\":\"12345677766\",\"bic_swift\":\"123445455\"},\"paymentAgreement\":{\"credit_card\":\"1\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"}}','2014-10-20 11:26:50','2014-10-20 11:26:50',120,0,0,'active'),
	(17,8,28,'{\"ticketInformation\":{\"event_id\":\"8\",\"number_of_ticket\":\"8\",\"form_of_ticket\":\"15\",\"ticket_type\":\"9\",\"loc_block\":\"e12\",\"loc_row\":\"12\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"7\":\"7\",\"10\":\"10\",\"others\":\"\"},\"price\":\"100.00\",\"sell_preference\":\"0\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"1234555\",\"iban\":\"sdfsdf\",\"bic_swift\":\"sdfsdfsdf\"},\"paymentAgreement\":{\"credit_card\":\"1\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"},\"commission_in_per\":\"15\"}','2014-10-20 12:48:49','2014-10-20 12:48:49',100,1,8,'active'),
	(18,8,29,'{\"ticketInformation\":{\"event_id\":\"8\",\"number_of_ticket\":\"10\",\"form_of_ticket\":\"14\",\"ticket_type\":\"9\",\"loc_block\":\"10\",\"loc_row\":\"120\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"7\":\"7\",\"10\":\"10\",\"others\":\"\"},\"price\":\"120.00\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"Fazle Elahee\",\"iban\":\"LV10RTMB0000637806525\",\"bic_swift\":\"SWITF\"},\"paymentAgreement\":{\"credit_card\":\"11\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"},\"commission_in_per\":\"15\"}','2014-10-20 12:52:41','2014-10-22 12:59:09',120,1,6,'active'),
	(19,8,30,'{\"ticketInformation\":{\"event_id\":\"8\",\"number_of_ticket\":\"20\",\"form_of_ticket\":\"16\",\"ticket_type\":\"9\",\"loc_block\":\"120\",\"loc_row\":\"130\",\"restriction_option\":\"1\",\"restrictions\":{\"1\":\"1\",\"4\":\"4\",\"5\":\"5\",\"7\":\"7\",\"8\":\"8\",\"9\":\"9\",\"10\":\"10\",\"others\":\"\"},\"price\":\"80.00\",\"sell_preference\":\"1\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"payment_option\":\"paypal\",\"paypal_email\":\"felahee@gmail.com\",\"account_holder\":\"\",\"iban\":\"\",\"bic_swift\":\"\"},\"paymentAgreement\":{\"credit_card\":\"11\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"},\"commission_in_per\":\"15\"}','2014-10-20 12:54:40','2014-10-22 12:46:32',80,1,0,'active'),
	(20,5,31,'{\"ticketInformation\":{\"event_id\":\"5\",\"number_of_ticket\":\"10\",\"form_of_ticket\":\"4\",\"ticket_type\":\"2\",\"loc_block\":\"120\",\"loc_row\":\"1\",\"restriction_option\":\"0\",\"restrictions\":{\"others\":\"\"},\"price\":\"120.00\",\"sell_preference\":\"0\",\"submit\":\"CONTINUE\"},\"paymentMethod\":{\"paypal_email\":\"\",\"payment_option\":\"bank\",\"account_holder\":\"ABDULLAH\",\"iban\":\"IBAN 123\",\"bic_swift\":\"BIC 231\"},\"paymentAgreement\":{\"credit_card\":\"11\",\"ticket_ready\":\"1\",\"term_and_conditions\":\"1\"},\"commission_in_per\":\"15\"}','2014-10-20 15:23:40','2014-10-20 15:23:40',120,1,10,'active');

/*!40000 ALTER TABLE `events_related_tickets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events_ticket_buy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events_ticket_buy`;

CREATE TABLE `events_ticket_buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL DEFAULT '',
  `buyer_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `delivery_status` enum('pending','complete','cancelled') CHARACTER SET utf8 NOT NULL DEFAULT 'pending',
  `payment_status` enum('pending','paid','cancelled') DEFAULT 'pending',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `events_ticket_buy` WRITE;
/*!40000 ALTER TABLE `events_ticket_buy` DISABLE KEYS */;

INSERT INTO `events_ticket_buy` (`id`, `order_id`, `buyer_id`, `event_id`, `product_id`, `qty`, `amount`, `delivery_status`, `payment_status`, `updated_at`, `created_at`)
VALUES
	(1,'100000023',38,0,31,5,0,'pending','paid','2014-10-22 09:17:25','2014-10-22 09:17:25'),
	(2,'100000024',38,0,30,3,0,'pending','pending','2014-10-22 11:21:50','2014-10-22 11:21:50'),
	(3,'100000025',38,0,30,8,0,'pending','pending','2014-10-22 11:32:15','2014-10-22 11:32:15'),
	(4,'100000026',38,0,30,12,0,'pending','pending','2014-10-22 12:46:32','2014-10-22 12:46:32'),
	(5,'100000027',1,0,29,4,0,'pending','pending','2014-10-22 12:59:08','2014-10-22 12:59:08');

/*!40000 ALTER TABLE `events_ticket_buy` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events_ticket_restrictions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events_ticket_restrictions`;

CREATE TABLE `events_ticket_restrictions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `default` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events_ticket_restrictions` WRITE;
/*!40000 ALTER TABLE `events_ticket_restrictions` DISABLE KEYS */;

INSERT INTO `events_ticket_restrictions` (`id`, `title`, `status`, `default`, `created_at`, `updated_at`)
VALUES
	(1,'Single Seats',1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Official Hospitality package',1,NULL,'2014-09-10 17:44:03','2014-09-10 17:44:03'),
	(3,'VIP seats',1,NULL,'2014-09-10 17:44:29','2014-09-10 17:44:29'),
	(4,'U16 tickets',1,1,'2014-10-16 14:24:07','2014-10-16 14:24:07'),
	(5,'Restricted View',0,NULL,'2014-10-16 15:07:13','2014-10-16 15:07:13'),
	(6,'Restricted view',1,1,'2014-10-16 15:07:21','2014-10-16 15:07:21'),
	(7,'Over 65 tickets',1,1,'2014-10-16 15:07:48','2014-10-16 15:07:48'),
	(8,'Includes parking',1,1,'2014-10-16 15:08:08','2014-10-16 15:08:08'),
	(9,'Includes food',1,1,'2014-10-16 15:08:22','2014-10-16 15:08:22'),
	(10,'Includes beverages',1,1,'2014-10-16 15:08:32','2014-10-16 15:08:32');

/*!40000 ALTER TABLE `events_ticket_restrictions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events_ticket_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events_ticket_type`;

CREATE TABLE `events_ticket_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `default` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events_ticket_type` WRITE;
/*!40000 ALTER TABLE `events_ticket_type` DISABLE KEYS */;

INSERT INTO `events_ticket_type` (`id`, `title`, `status`, `default`, `created_at`, `updated_at`)
VALUES
	(1,'Shortside Upper Tower',1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Longside Upper Tower',1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'Longside lower',1,1,'2014-09-10 10:23:22','2014-09-10 10:23:22'),
	(4,'Shortside Lower',1,NULL,'2014-09-10 10:55:58','2014-09-10 10:55:58'),
	(5,'Chealsea Support',1,NULL,'2014-09-10 11:14:25','2014-09-10 11:14:25'),
	(6,'Test 1',0,NULL,'2014-09-10 15:34:32','2014-09-10 15:34:32'),
	(7,'Test 2 ',0,NULL,'2014-09-10 15:41:28','2014-09-10 15:41:28'),
	(8,'New One',1,NULL,'2014-09-11 11:44:18','2014-09-11 11:44:18'),
	(9,'Shortside Upper tier ',1,1,'2014-10-16 14:09:16','2014-10-16 14:09:16'),
	(10,'Test 2',0,NULL,'2014-10-16 15:56:47','2014-10-16 15:56:47'),
	(11,'Test 3',0,NULL,'2014-10-16 15:56:59','2014-10-16 15:56:59'),
	(12,'Season cards',1,NULL,'2014-10-16 16:51:24','2014-10-16 16:51:24'),
	(13,'Season cards',1,NULL,'2014-10-16 16:51:47','2014-10-16 16:51:47'),
	(14,'Season cards',1,NULL,'2014-10-16 16:52:16','2014-10-16 16:52:16'),
	(15,'Season cards',1,NULL,'2014-10-16 16:52:17','2014-10-16 16:52:17'),
	(16,'Season cards',1,NULL,'2014-10-16 16:53:19','2014-10-16 16:53:19'),
	(17,'Season cards',1,NULL,'2014-10-16 16:53:23','2014-10-16 16:53:23'),
	(18,'Season cards',1,NULL,'2014-10-16 16:53:24','2014-10-16 16:53:24'),
	(19,'Vip hospitality',1,1,'2014-10-16 16:53:58','2014-10-16 16:53:58'),
	(20,'Away section',1,1,'2014-10-16 16:54:12','2014-10-16 16:54:12'),
	(21,'Longside upper tier',1,1,'2014-10-16 16:55:03','2014-10-16 16:55:03');

/*!40000 ALTER TABLE `events_ticket_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table faq
# ------------------------------------------------------------

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;

INSERT INTO `faq` (`id`, `title`, `content`, `slug`, `datetime`, `created_at`, `updated_at`, `is_published`, `order`)
VALUES
	(11,'When will I receive my tickets?','<p>If you have provided a UK address your tickets will be delivered to you on the week of match. In some cases tickets can be delivered right up until the day before the fixture due to football clubs sending tickets out close to match-days. If you are staying in a hotel the seller will do their best to make the delivery date coincide with your check in date.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:34:01','2014-10-13 10:34:01',1,0),
	(12,'How will I receive my tickets?','<p>Tickets are always sent via recorded delivery or courier service. We ensure our sellers use Royal Mail Special Delivery, which is guaranteed for next day delivery. A tracking code will be emailed to you following dispatch, which allows you to check the status of your tickets through the Royal Mail Network:&nbsp;<a href=\"http://www.royalmail.co.uk/track-your-item.\">www.royalmail.co.uk/track-your-item. </a></p>\r\n',NULL,'2014-10-13','2014-10-13 10:34:36','2014-10-13 10:34:45',1,1),
	(13,'Do I need to sign for my tickets?','<p>Yes. Somebody will need to sign for the tickets the day after you receive the dispatch email. If there is no one present at your home address between the hours of 9am and 1pm, we recommend having the tickets delivered to your work/office. If you are staying in a hotel your reception or concierge will sign on your behalf. Please ensure that the reservation name at your hotel is the same name you use for the delivery address on our website. Failure to do this may result in the hotel refusing to sign for the tickets.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:48:39','2014-10-13 10:48:39',1,3),
	(14,'I am staying in a hotel; can my ticket be delivered there?','<p>Yes, many of our clients travel from overseas and stay in hotels. Our sellers will send the tickets to your hotel to coincide with your check in date where possible. Remember to make your booking with the lead name you have provided to your hotel. This is so that the reception or concierge can sign for the tickets on your behalf and keep them safe for you.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:49:19','2014-10-13 10:49:19',1,4),
	(15,'How do I know my tickets are genuine?','<p>Football Ticket Pad only allows authorized sellers to list tickets on our platform. The sellers provide us with a credit card upon opening their account that we use to verify them with. Sellers are also paid after the event so your money is safe with us! If you feel you would like to raise a dispute, please email our customer care department. The address is <a href=\"mailto:complaints@footballticketpad.com\">complaints@footballticketpad.com</a>. Remember, we are here to help you.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:50:34','2014-10-13 10:50:34',1,4),
	(16,'I live in a different country; can you post my tickets here?','<p>In special circumstances we can get tickets shipped abroad provided that there is enough time. We strongly recommend that you have a hotel in the country where the fixture will be played and have the tickets delivered there. Please email our customer service department if you have any further queries.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:50:56','2014-10-13 10:50:56',1,5),
	(17,'Can I collect my tickets from the venue instead of getting them delivered?','<p>No. All football tickets must be delivered by recorded mail or via a courier.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:51:19','2014-10-13 10:51:19',1,5),
	(18,'Will the seats I get be the seats I ordered?','<p>Yes. As part of the Ticket Pad Guarantee, all football tickets issued by sellers must be equivalent or better than the tickets you have ordered.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:51:37','2014-10-13 10:51:37',1,6),
	(19,'Can I change my delivery address?','<p>Yes. It is possible to change your delivery address at any point if the tickets are yet to be dispatched. Please email your change of address to cs@footballticketpad.com with your order ID as the subject. Alternatively use our contact form.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:51:54','2014-10-13 10:51:54',1,7),
	(20,'What payment methods do you accept?','<p>We accept all major credit and debit cards. We also accept bank transfer on special request. Unfortunately we do not accept payments through paypal.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:52:10','2014-10-13 10:52:10',1,8),
	(21,'Is my payment secure?','<p>Yes. At Football Ticket Pad, we take customer privacy and safety very seriously. When paying by credit and debit card your payment will be processed through 3D Secure Technology: Verified-by-Visa and MasterCard SecureCode.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:52:27','2014-10-13 10:52:27',1,8),
	(22,'Can I pay over the phone?','<p>For security reasons we do not accept payments over the phone. However, if you would like to talk to a Sales Representative you can call us to discuss your requirements and then proceed to buy the tickets through the site. This way our 3D Secure Technology covers you.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:52:41','2014-10-13 10:52:41',1,9),
	(23,'Can I cancel my order?','<p>Unfortunately all sales are final. As soon as your order is confirmed the seller is legally obliged to fulfilling the order. Therefore we cannot offer a refund, as the seller would be left with the tickets. You can however relist the tickets on the platform but there is no guarantee they will sell.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:53:06','2014-10-13 10:53:06',1,10),
	(24,'I am an adult; can I order a concession ticket?','<p>No. Please ensure you buy the correct ticket. If you do not meet the requirements of the concession (e.g. Over 65 or under 16) you risk not being allowed in the stadium. Football Ticket Pad takes no responsibility for clients buying incorrect concessions.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:53:23','2014-10-13 10:53:23',1,11),
	(25,'The match is tomorrow; can I still get tickets?','<p>Football Ticket Pad runs a &ldquo;Last Minute Ticket Program.&rdquo; This allows buyers to purchase football tickets right up until kick off. We have trusted ticket brokers that specialize in Last Minute Sales and can deliver the ticket direct to you following payment.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:53:41','2014-10-13 10:53:41',1,11),
	(26,'My tickets are membership cards; what does this mean?','<p>Many Football Clubs now use membership cards to enter stadia instead of traditional paper tickets. This is common practice and nothing to be concerned about. Just follow the instructions that the seller has provided to you.&nbsp;</p>\r\n',NULL,'2014-10-13','2014-10-13 10:54:00','2014-10-13 10:54:00',1,12),
	(27,'What is the Ticket Pad Guarantee? ','<p>To ensure peace of mind to all our clients, every order placed with Football Ticket Pad comes with our guarantee. We guarantee that you will receive genuine football tickets in time for the fixture. The seats you receive will be equal to or better than the ones you have paid for, always. We do not pay the seller until after you have been to the match so your money is always safe with us.</p>\r\n\r\n<p>&nbsp;</p>\r\n',NULL,'2014-10-13','2014-10-13 10:54:28','2014-10-13 10:54:28',1,13),
	(28,'How do I list tickets?','<p>Search the football match you have extra tickets for and select &ldquo;Sell.&rdquo; From here enter all the relevant information and confirm your listing. Your tickets are now available for the World to see and buy!</p>\r\n',NULL,'2014-10-13','2014-10-13 10:54:46','2014-10-13 10:54:46',1,1),
	(29,'Does it cost to list tickets on Football Ticket Pad?','<p>No. It is free to list tickets on Football Ticket Pad. We take a 10% sales commission following the sale of your tickets and charge the buyer a 15% booking fee. Please be mindful of this when setting you selling price.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:55:03','2014-10-13 10:55:03',1,0),
	(30,'My tickets have restrictions; do I have to include this in the listing?','<p>Yes. You must always provide as much information about your tickets as possible. Concession tickets must be clearly listed with the relevant concession e.g. Under 16. If your ticket is restricted in view, this must also be clearly stated. Failure to do so will result in the buyer receiving a full or partial refund depending on the circumstances.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:55:19','2014-10-13 10:55:19',1,2),
	(31,'My tickets aren’t sat together; do I have to include this in the listing?','<p>Yes. If you list for example 5 tickets, the seat numbers MUST be consecutive unless stated in the restrictions. We recommend listing different groups of tickets separately. E.g. 2/2/2 if you have 3 pairs.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:55:36','2014-10-13 10:55:36',1,3),
	(32,'What is the seller fee?','<p>The seller fee is 10%. This is deducted from your listed price.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:55:52','2014-10-13 10:55:52',1,4),
	(33,'Why do you take my credit card details?','<p>Your credit card is used as a seller guarantee. In the event you do not supply the tickets you have sold, we will have to replace your order with equivalent or better tickets and your account will be debited the difference plus a &pound;25 administration fee.&nbsp; Please read our terms and conditions for more information.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:56:11','2014-10-13 10:56:11',1,0),
	(34,'Why does my sale get put on hold? ','<p>This is for fraud purposes to make sure the transaction goes through entirely. At the on hold stage you are committed to the sale and must supply if the sale goes on to be confirmed. We always intend to carry out our due diligence as quick as possible and prioritise sales that are within close proximity of the event.&nbsp;&nbsp;</p>\r\n',NULL,'2014-10-13','2014-10-13 10:56:31','2014-10-13 10:56:31',1,0),
	(35,'I have a sale; now what do I do?','<p>Once you have a confirmed your sale you must send the tickets to the buyer as soon as possible. To prove that you have sent the tickets we require all tickets to be sent via recorded mail. In the UK we recommend Royal Mail Special Delivery. For International delivery we recommend couriers such as: FedEx, DHL or UPS. Without proof of delivery you may not be paid for your tickets. As soon as you have dispatched your tickets to the buyer you must update the system with the correct tracking number.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:56:50','2014-10-13 10:56:50',1,5),
	(36,'Where do I find the tracking number?','<p>The tracking number will be provided by the postal or courier service you use. Normally a receipt is provided that clearly states the tracking number. If you are unsure then you can ask the assistant in your chosen drop off point.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:57:08','2014-10-13 10:57:08',1,0),
	(37,'When will I get paid?','<p>All sales will be paid 10-15 working days after the event. If you have multiple sales in a close period, someone from our accounting department will contact you to discuss preferable payment options. Please note that once we have made a payment it may take up to a maximum of 5 working days for the funds to clear in to your account.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:57:23','2014-10-13 10:57:23',1,0),
	(38,'I am a professional ticket agent; can I list tickets on your site?','<p>Yes! Here at Football Ticket Pad, we encourage professional ticket agents to list on our site. Contact our Customer Service department if you think you or your company has the credentials to upgrade your account to a Broker Account, which increases your market exposure limit; enables you to enroll in our Last Minute Sales Program (LMS) as well as being the first port of call for our corporate sales department.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:57:37','2014-10-13 10:57:37',1,0),
	(39,'I have a sale and no longer have the tickets.','<p>If you have a sale and no longer have the tickets, for whatever reason, you must contact are customer service team immediately via email. We take order fulfillment very seriously to protect our buyers as the &ldquo;Ticket Pad Guarantee&rdquo; insures all sales. Failure to supply will result in your account being fined &pound;25 plus the cost to replace the order with equivalent or better tickets. Your account may be suspended and all payments held.&nbsp;</p>\r\n',NULL,'2014-10-13','2014-10-13 10:57:55','2014-10-13 10:57:55',1,0),
	(40,'There is a problem with my sale.','<p>If you suspect that you will have a problem fulfilling an order you must contact Customer Services immediately to report the issue. We take order fulfillment very seriously to protect our buyers as the &ldquo;Ticket Pad Guarantee&rdquo; insures all sales. Failure to supply will result in your account being fined &pound;25 plus the cost to replace the order with equivalent or better tickets.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:58:09','2014-10-13 10:58:09',1,0),
	(41,'How can I improve the chance of selling my tickets?','<p>We have statistics that prove additional information improves your chance of selling tickets on our platform. This may mean adding block and row numbers to your listing.</p>\r\n\r\n<p>We have many sellers on Football Ticket Pad so you must ensure that your tickets are in line with the market price to give yourself a better chance of a sale.</p>\r\n',NULL,'2014-10-13','2014-10-13 10:58:23','2014-10-13 10:58:23',1,0);

/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fbf_faq_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fbf_faq_category`;

CREATE TABLE `fbf_faq_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fbf_faq_category` WRITE;
/*!40000 ALTER TABLE `fbf_faq_category` DISABLE KEYS */;

INSERT INTO `fbf_faq_category` (`id`, `category`, `created_at`, `updated_at`)
VALUES
	(1,'For Buyers','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'For Seller','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `fbf_faq_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fbf_faq_category_fbf_laravel_simple_faqs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fbf_faq_category_fbf_laravel_simple_faqs`;

CREATE TABLE `fbf_faq_category_fbf_laravel_simple_faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fbf_faq_category_id` int(11) NOT NULL,
  `fbf_laravel_simple_faqs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fbf_faq_category_fbf_laravel_simple_faqs` WRITE;
/*!40000 ALTER TABLE `fbf_faq_category_fbf_laravel_simple_faqs` DISABLE KEYS */;

INSERT INTO `fbf_faq_category_fbf_laravel_simple_faqs` (`id`, `fbf_faq_category_id`, `fbf_laravel_simple_faqs_id`)
VALUES
	(6,1,9),
	(7,2,10),
	(8,1,8),
	(9,1,11),
	(10,1,12),
	(11,1,13),
	(12,1,14),
	(13,1,15),
	(14,1,16),
	(15,1,17),
	(16,1,18),
	(17,1,19),
	(18,1,20),
	(19,1,21),
	(20,1,22),
	(21,1,23),
	(22,1,24),
	(23,1,25),
	(24,1,26),
	(25,1,27),
	(26,2,28),
	(27,2,29),
	(28,2,30),
	(29,2,31),
	(30,2,32),
	(31,2,33),
	(32,2,34),
	(33,2,35),
	(34,2,36),
	(35,2,37),
	(36,2,38),
	(37,2,39),
	(38,2,40),
	(39,2,41);

/*!40000 ALTER TABLE `fbf_faq_category_fbf_laravel_simple_faqs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fbf_laravel_simple_faqs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fbf_laravel_simple_faqs`;

CREATE TABLE `fbf_laravel_simple_faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('DRAFT','APPROVED') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `order` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fbf_laravel_simple_faqs_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table football_ticket
# ------------------------------------------------------------

DROP TABLE IF EXISTS `football_ticket`;

CREATE TABLE `football_ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('club','country','league','season','venue') COLLATE utf8_unicode_ci NOT NULL,
  `feature_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT '',
  `venue_image` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL,
  `order` tinyint(4) NOT NULL,
  `meta_title` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `meta_content` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `football_ticket` WRITE;
/*!40000 ALTER TABLE `football_ticket` DISABLE KEYS */;

INSERT INTO `football_ticket` (`id`, `title`, `short_description`, `content`, `slug`, `type`, `feature_image`, `venue_image`, `created_at`, `updated_at`, `is_published`, `featured`, `order`, `meta_title`, `meta_description`, `meta_content`)
VALUES
	(1,'Test-club','Test description','Test description','test-123','club',NULL,'','0000-00-00 00:00:00','2014-09-29 17:08:40',1,0,0,'','',''),
	(2,'United Kingdom','Test description','<p>United Kingdom</p>\r\n','united-kingdom','country','','','0000-00-00 00:00:00','2014-10-15 15:06:40',1,0,0,'','',''),
	(4,'WestHam','','<p>test league</p>\r\n','westham','club',NULL,'','2014-10-01 09:18:00','2014-10-01 10:54:26',1,0,0,'','',''),
	(7,'Premier League','','<p>Premier League</p>\r\n','premier-league','league',NULL,'','2014-10-01 09:42:44','2014-10-21 13:49:58',1,0,0,'','',''),
	(8,'2014','','<p>season twenty fourteen</p>\r\n','2014','season',NULL,'','2014-10-01 09:45:44','2014-10-15 19:57:29',1,0,0,'','',''),
	(10,'Manchester City','','<p>Manchester is better then Manchester United.</p>\r\n','manchester-city','club','/uploads/2014/07/07/top-level-user-interaction-164318.png','','2014-10-02 09:34:43','2014-10-07 14:16:00',1,0,0,'','',''),
	(11,'France','','<p>France</p>\r\n','france','country','','','2014-10-03 09:11:50','2014-10-15 15:06:24',1,0,0,'','',''),
	(12,'UEFA','','<p>UEFA</p>\r\n','uefa','league',NULL,'','2014-10-03 09:48:41','2014-10-15 19:57:03',1,0,0,'','',''),
	(13,'Manchester United','','<p>manchester-united</p>\r\n','manchester-united','club','/uploads/2014/10/08/-095624.jpg','/uploads/maps/man-u-map-210404.png','2014-10-08 09:57:02','2014-10-17 16:28:34',1,1,2,'','',''),
	(14,'Chelsea','','<p>Situated in the heart of affluent South West London it&#39;s not ironic that it was the huge influx of money that has brought such talent to a previous less dominant Chelsea squad. We offer Chelsea football tickets so you as a fan have the opportunity to see these greats week in week out. With Jose Mourinho now back at the helm we can guarantee that all Chelsea matches will have that element of spice and fighting til the death attitude that we have all been accustomed to when watching a Mourinho team! No longer does it have to be a hopeful thought!&nbsp; Buy Chelsea tickets through us today!</p>\r\n\r\n<p>Don&#39;t just limit yourself to Chelsea home tickets you&#39;ll be ecstatic to hear that Chelsea away tickets are also in our repertoire.&nbsp;</p>\r\n','chelsea','club','/uploads/2014/10/15/cfc-top-image-153355.jpg','/uploads/2014/10/15/chelsea-map-153413.png','2014-10-15 15:34:55','2014-10-20 09:47:11',1,1,1,'test chelsea','test chelsea description','test chelsea'),
	(15,'Arsenal','','<p>Arsenal are one of England&#39;s most successful Football Clubs and are the current holders of the FA Cup after beating Hull City at Wembley Stadium in 2014. In 2005 the Gunners moved from Highbury Stadium to the all new, ultra-modern, Emirates Stadium. They have finished in the Champions League places in the Premier League for seventeen consecutive seasons and are always in contention for the Premier league title. Buy your Arsenal football tickets from Football Ticket Pad today for all Arsenal football matches. Whether you require Arsenal football tickets, Arsenal hospitality tickets or Arsenal Executive tickets, Football Ticket Pad is the best way to ensure you get the tickets you order, guaranteed!&nbsp; But dont just limit yourself to Arsenal home tickets you&#39;ll be ecstatic to hear that Arsenal away tickets are also in our repertoire.</p>\r\n','arsenal','club','/uploads/teamimages/8-134654.jpg','/uploads/maps/arsenal-map-213157.png','2014-10-15 20:09:39','2014-10-16 21:32:19',1,1,1,'','',''),
	(16,'Aston Villa ','','<p>Villa park is for sure a fans favourite for not only those at home but those travelling away fans too. Unknown to a newer breed of premier league followers; it was not too many years ago that villa were a more prominent force on the silverware front. They are one of only 5 English teams to win the Uefa Champions League and are the fourth highest in major honours won by an English club. With this is mind and such history running deep with this club Aston Villa tickets are as popular as any we have to offer.&nbsp; The current Villa squad are a youthful team slowly progressing. The likes of Fabian Delph, Matthew Lowton and Andreas Wiemann all coming to fruition brings an air of optimism around Villa park, it could really be their year! You can see all these promising youngsters when you buy Aston Villa tickets with us!&nbsp; Manager Paul Lambert himself has a Champions League medal to his name. And hence after tasting success has a very driven nature and great work ethic which he transmits to his players. The fate of Villa is in his hands, can they stake their claim as being one of the strongest teams in England once again?! Purchase Aston Villa football tickets with Football Ticket Pad and be a part of Aston villa&#39;s present, future and whilst they hopefully add to their famous past!&nbsp;</p>\r\n','aston-villa','club','/uploads/teamimages/7-202514.jpg','/uploads/maps/astonvilla-map-212947.png','2014-10-15 20:25:34','2014-10-16 21:30:13',1,1,1,'','',''),
	(17,'Burnley','','<p>Burnley are one of the Premier League new boys and will be hoping to rustle a few feathers after earning their way into the top flight once again. One thing is certain is that the Clarets loyal fans will be cheering them every inch of the way. You too can be at the heart of what will undoubtedly be a rollercoaster season buy choosing to buy your Burnley football tickets here. With Turf Moor readying itself to play host to the cr&egrave;me of English football, now is the chance to secure Burnley tickets to see if this historic club can punch above their weight and successfully steer a course to survival. Entertainment is guaranteed, fighting spirit will be in abundance. Book your Burnley tickets with us today and cheer them home! But dont just limit yourself to Leicester City home tickets you&#39;ll be ecstatic to hear that Leicester City away tickets are also in our repertoire.</p>\r\n','burnley','club','/uploads/teamimages/4-203136.jpg','/uploads/maps/burnley-map-212846.png','2014-10-15 20:31:49','2014-10-16 21:29:05',1,1,1,'','',''),
	(18,'Crystal Palace','','<p>One of the football leagues Yo-Yo clubs, Crystal Palace recently earned their top flight status once again after triumphing over Watford in the playoff final at Wembley. They may play in the large shadow cast by their illustrious and wealthy neighbours, but Crystal Palace are no push over, with matches throwing up many twists and turns over the course of the season. Whether you&#39;re a seasoned Eagles fan, or just in London to catch a game, then why not spread your wings, make the trip over to Selhurst Park with Crystal Palace tickets bought from Football Ticket Pad. Due to their low capacity ground, Crystal Palace football tickets are often short in supply. Be sure to order swiftly to guarantee your seats at this popular footballing venue! But dont just limit yourself to Crystal Palace home tickets you&#39;ll be ecstatic to hear that Crystal Palace away tickets are also in our repertoire.</p>\r\n','crystal-palace','club','/uploads/teamimages/1-203549.jpg','/uploads/maps/crystalpalace-map-212533.png','2014-10-15 20:34:20','2014-10-16 21:26:35',1,1,1,'','',''),
	(19,'Everton','','<pre>\r\nEverton are one of the most avidly supported clubs in the north. However at the beginning of last season the merseyside faithful were all left wondering how the club would fare after the departure of long standing manager David Moyes. Robert Martinez was the man to take over the reins. In his opening season he superbly stamped his Spanish touch on the team. A new unseen style of play was born with Everton playing wonderful flowing football out from the back! This remarkably saw an even better finish than Moyes the pervious term!&nbsp;\r\n\r\nWe sell Everton tickets to give all those people out there the chance to see this newly reformed Everton team. Even if your have a caught one of last seasons thrilling games there&#39;s some unmissable ties once again that we can get you booked on!&nbsp;\r\n\r\nThis historic club are always pushing, always on the verge of upsetting one if the big boys pipping them to that highly coveted 4th spot. That same fight and desire will more than be reciprocated at Everton matches this season. This is more than enough reason we think to get yourself along too what will be an unquestionably raucous goodison park! Buy Everton football tickets through the Uks number 1 ticket broker!&nbsp;\r\n\r\nBut dont just limit yourself to Everton home tickets you&#39;ll be ecstatic to hear that Everton away tickets are also in our repertoire.</pre>\r\n','everton','club','/uploads/teamimages/24-203920.jpg','/uploads/maps/everton-map-212427.png','2014-10-15 20:39:40','2014-10-17 16:18:53',1,1,1,'','',''),
	(20,'Hull City','','<pre>\r\nHull city has one of the most modern stadiums of the current teams in the Barcalys Premier League. The KC stadium was built in 2002 and accommodates fans of its two tenants, Hull City A.F.C the city&#39;s footballing club along with rugby league club Hull Fc.&nbsp;\r\nHull tigers fans will be pleased to know they can buy hull tickets via Football Ticket Pad taking place in this state of the art new ground.&nbsp;\r\nHull city emerged from the depths of the lower leagues and in the not so distant past were competing at an almost grass roots level. It&#39;s a huge credit to everyone involved at the club that Hull City matches are being played in the Premier League!\r\n\r\nBut dont just limit yourself to Hull City home tickets you&#39;ll be ecstatic to hear that Hull city away tickets are also in our repertoire.\r\n</pre>\r\n','hull-city','club','/uploads/teamimages/23-204149.jpg','/uploads/maps/hull-map-212329.png','2014-10-15 20:43:54','2014-10-17 16:13:41',1,1,1,'','',''),
	(21,'Leicester City','','<pre>\r\nNewly promoted Leicester City are back competing in the top flight of English football again after a ten year absence. With much to prove, this will be a fascinating season to revel in the atmosphere of optimism at The Walkers Stadium as the Foxes pit their wits against the Premier Leagues best.\r\n\r\nAfter enjoying a successful Championship campaign, Leicester have demonstrated the hunger, fight and winning attitude necessary to play at the highest level. Witnessing this first hand and securing your Leicester tickets is easy. You&#39;re only a few clicks away.\r\n\r\nThere will be bumps in the road. It&#39;s never easy being the new team back up in the top flight. But by buying Leicester City football tickets from Football ticket pad you&#39;re guaranteed a great seat in the heart of the action.\r\n\r\nBut dont just limit yourself to Leicester City home tickets you&#39;ll be ecstatic to hear that Leicester City tickets are also in our repertoire.</pre>\r\n','leicester-city','club','/uploads/teamimages/21-205048.jpg','/uploads/maps/leicester-map-212205.png','2014-10-15 20:51:29','2014-10-17 16:11:51',1,1,1,'','',''),
	(22,'Liverpool','','<p>steves text</p>\r\n','liverpool','club','/uploads/teamimages/20-205513.jpg','/uploads/maps/liverpool-map-212110.png','2014-10-15 20:58:03','2014-10-17 16:10:35',1,1,1,'','',''),
	(23,'Manchester City ','','<pre>\r\nManchester City have perhaps the strongest squad in English Football, with an abundance of world class players such as Sergio Aguero, Yaya Toure and David Silva at their disposal. Since Sheikh Mansour purchased the club in 2008, City have spent a staggering &pound;1Billion in the transfer market and have the highest wage bill in world sport with each first team player taking home an average of &pound;102,000 a week!&nbsp;\r\n\r\nPurchase Manchester city football tickets and visit Manchester City&#39;s home ground, The Etihad Stadium. A state of the art, modern ground that is one of the finest places to watch a football match, boasting great views from all seats and excellent match day hospitality.\r\n\r\nFootball Ticket pad is the safest place to buy your Manchester City tickets, Manchester City hospitality tickets and Manchester City Executive tickets, guaranteed!&nbsp;\r\n\r\nBut dont just limit yourself to Manchester city home tickets you&#39;ll be ecstatic to hear that Manchester city away tickets are also in our repertoire.</pre>\r\n','manchester-city','club','/uploads/teamimages/19-210627.jpg','/uploads/maps/man-city-map-212030.png','2014-10-15 21:07:02','2014-10-17 16:09:53',1,1,1,'','',''),
	(24,'Newcastle','','<pre>\r\nUnknown to many, Newcastle United are in the 20 richest clubs in the world! Overall they have what could be deemed as a fairly successful history of four League Championship titles and six FA Cups as well as frequent appearances in European competitions.&nbsp;\r\n\r\nWe sell Newcastle football tickets so that every loyal fan has a chance to see the squads fight to bring back the glory days.&nbsp;One occasion not to be missed is Newcastle tickets to the Tyne and Wear derby, virtually the most hotly fought fixture in the Premier League calendar.\r\nYou will be hard pushed to find fans more passionate about their team than the Geordie following. This is indicated by the sheer number that loyally flock too Newcastle matches each week. Order your Newcastle united tickets today whilst stocks last!&nbsp;\r\n\r\nBut dont just limit yourself to Newcastle United home tickets you&#39;ll be ecstatic to hear that Newcastle United away tickets are also in our repertoire.</pre>\r\n','newcastle','club','/uploads/teamimages/17-211044.jpg','/uploads/maps/newcastle-map-211932.png','2014-10-15 21:11:41','2014-10-17 16:08:39',1,1,1,'','',''),
	(25,'Southampton','','<pre>\r\nIf you&#39;d like to visit a more intimate stadium full of loyal fans and view a very good footballing side you will without a doubt opt for the Southampton football tickets we have to offer. St Mary&#39;s in recent seasons has become something of a fortress. Any team would be foolish to not have an aspect of cautiousness in their approach when up and coming Southampton matches are on the cards.&nbsp;\r\n\r\nWhether your an avid Saints fan, or a neutral looking to catch a game on the lovely south coast, let us become your main provider of Southampton tickets!&nbsp;\r\n\r\nBut dont just limit yourself to Southampton home tickets you&#39;ll be ecstatic to hear that Southampton away tickets are also in our repertoire.</pre>\r\n','southampton','club','/uploads/teamimages/14-212149.jpg','/uploads/maps/southampton-map-211820.png','2014-10-15 21:22:16','2014-10-17 16:07:58',1,1,1,'','',''),
	(26,'Sunderland','','<pre>\r\nSunderland are a well supported club based up on the north east coast in close proximity to Newcastle. Last season was a hugely dramatic one for the club where Gus&#39; men pulled of the great escape. They survived the season by the very skin of their teeth! If you were fortunate to have Sunderland tickets to the incredible finale and witness their spectacular recovery, you will know doubt be eager to get to the first game this campaign!\r\n\r\nWhen purchasing Sunderland football tickets, you will be without doubt in for a treat. The unpredictable nature of this great club can see about an unlikely victory against the top teams or a bottom of the table thriller with both teams throwing the kitchen sink at the game!\r\n\r\nBuy Sunderland tickets to the Tyne and Wear derby for a truly unique footballing experience. Sunderland v Newcastle is one of England&#39;s oldest rivalries fuelled with heat and passion. Will Sunderland survive by the skin of their teeth once again?! What better way to find out than with any of our Sunderland match tickets! Order now for a great deal.&nbsp;\r\n\r\nBut dont just limit yourself to Sunderland home tickets you&#39;ll be ecstatic to hear that Sunderland away tickets are also in our repertoire.\r\n</pre>\r\n','sunderland','club','/uploads/teamimages/9-212510.jpg','/uploads/maps/sunderland-map-211724.png','2014-10-15 21:25:41','2014-10-17 15:57:10',1,1,1,'','',''),
	(27,'Stoke','','<pre>\r\nIn recent years Stoke City have established themselves as a middle of the table team, neither competing for Europe nor fighting for survival. Despite this Stoke matches at the Brittania do throw up a raucous atmosphere, so why not purchase Stoke tickets when they go &#39;punch to punch&#39; with the leagues top 6. Football ticket pad sells Stoke football tickets in every section of the Britannia. Buying from such a well established broker you will never experience a lack of choice again.&nbsp;\r\n\r\nBut dont just limit yourself to Stoke home tickets you&#39;ll be ecstatic to hear that Stoke away tickets are also in our repertoire.</pre>\r\n','stoke','club','/uploads/teamimages/13-212831.jpg','/uploads/maps/stoke-map-211633.png','2014-10-15 21:29:07','2014-10-17 15:56:16',1,1,1,'','',''),
	(28,'Swansea City','','<pre>\r\nSwansea were yet another club victim to the Premier Leagues managerial revolving doors with what seemed to be a very unjust sacking of Michael Laudrup. Albeit halfway through their campaign there was not too much disruption&nbsp;\r\n\r\nand hence for another year Swansea will be plying their trade in the Barcalys Premier League. We will once again be offering Swansea tickets to each and every single one of their games.&nbsp;\r\n\r\nYou probably haven&#39;t seen many people who offer Swansea football tickets. Their aren&#39;t so many in the market that can provide Swansea match tickets. Football ticket pad stands out from the rest and can organise any game at any time!&nbsp;\r\n\r\nSwansea matches are the only Premier League games that are hosted in Wales. So for a different country, unique vibe, wonderful welcoming people, make sure you catch one of 19 home games at the Liberty stadium!\r\n\r\nBut dont just limit yourself to Swansea home tickets you&#39;ll be ecstatic to hear that Swansea away tickets are also in our repertoire.</pre>\r\n','swansea-city','club','','/uploads/maps/swansea-map-211549.png','2014-10-15 23:08:20','2014-10-17 15:53:24',1,1,1,'','',''),
	(29,'Tottenham ','','<pre>\r\nTottenham Hotspur are one of London&#39;s great clubs with an extremely passionate fan base all across the World. Although Spurs have spent close to &pound;100m in last summers transfer market, following the record breaking sale of Gareth Bale to Real Madrid, they have somewhat underachieved in 2013/14.&nbsp;\r\n\r\nMauricio Pochettino&#39;s men will be putting in a Premier League campaign with the ambition to secure European football at White Hart Lane in the forthcoming season and we can secure your favourite tottenham hotspur tickets for you now!&nbsp;\r\n\r\nFootball Ticket Pad is the safest place to buy your Tottenham tickets, Tottenham hospitality tickets and Tottenham executive tickets, guaranteed.&nbsp;\r\n\r\nBut dont just limit yourself to Crystal Palace home tickets you&#39;ll be ecstatic to hear that Crystal Palace away tickets are also in our repertoire.</pre>\r\n','tottenham','club','/uploads/teamimages/12-231026.jpg','/uploads/maps/tottenham-map-211454.png','2014-10-15 23:12:25','2014-10-17 15:50:37',1,1,1,'','',''),
	(30,'West Brom','','<pre>\r\nWhat looked to be a turbulent last season for the baggies at the midway mark, they somehow managed to pull together and steer clear of relegation. Its certainly clear theres an element of unexpectedness about this team so don&#39;t think twice when ordering WBA football tickets. It&#39;s never an easy task when facing this tough midlands outfit which on numerous accounts makes West Brom matches as entertaining as any in the league! \r\n\r\nWest Brom tickets are perfect for the neutral! Being in the heart of Birmingham means you can leave the wife to the shopping in the famous bullring centre and take the boys onto a cracking game of football!\r\n\r\nBut dont just limit yourself to WBA home tickets you&#39;ll be ecstatic to hear that WBA away tickets are also in our repertoire.\r\n</pre>\r\n','west-brom','club','/uploads/teamimages/10-231443.jpg','/uploads/maps/westbrom-map-211025.png','2014-10-15 23:16:24','2014-10-17 15:43:28',1,1,1,'','',''),
	(31,'West Ham United','','<pre>\r\nHistory Runs deep a Westham united. Glancing back at their roots many of us are familiar with not only Westham greats but England heroes such as Bobby Moore, Geoff Hurst and Martin peters. These past era greats will have etched some marvellous memories in the minds of an older generation of hammers. However it&#39;s inevitable still to this day you will have a terrific time at West Ham matches with the current fresh crop of players in the team assembled largely by Big Sam. Take us up on one of our many Westham football tickets offers too join in the chorus of I&#39;m forever blowing bubbles. \r\n\r\nDespite not having quite the same aura about them as the three Big London clubs Upton Park has seen some memorable Saturday afternoons despite being somewhat underdogs in many fixtures. This is your chance to take advantage of some unbeatable prices and pick any of the Westham tickets we can accommodate.&nbsp;\r\n\r\nBut dont just limit yourself to West Ham home tickets you&#39;ll be ecstatic to hear that West Ham away tickets are also in our repertoire.</pre>\r\n','west-ham-united','club','/uploads/teamimages/22-231913.jpg','/uploads/maps/west-ham-map-210853.png','2014-10-15 23:21:04','2014-10-17 15:42:46',1,1,1,'','',''),
	(32,'Paris Saint Germain','','<pre>\r\nParis may be the city of romance but nothing surpasses the passion for football amongst the Parisians. PSG are a very well supported club with ambitions to compete with Europe&#39;s elite. Experience first hand the progression of this great club with fantastic deals on PSG matches. We are offering PSG tickets to each and every game at the Parc Des Princes this season. Secure your PSG football tickets with us early to take advantage of the best seats and prices!&nbsp;\r\n\r\nBut dont just limit yourself to PSG home tickets you&#39;ll be ecstatic to hear that PSG away tickets are also in our repertoire.</pre>\r\n','paris-saint-germain','club','/uploads/teamimages/16-232457.jpg','/uploads/maps/psg-map-210749.png','2014-10-15 23:25:56','2014-10-17 15:37:53',1,1,1,'','',''),
	(33,'Bayern Munich','','<p>They don&#39;t come any bigger than the German power house Bayern Munich. The most decorated team in Germany has had an illustrious history and hence Bayern Munich games are a must see! Our vast experience in the market means we can supply Bayern Munich football tickets to all matches! Not only that, we can go that one step further ny giving you the opportunity to pick specific seat locations for your Bayern Munich tickets due to such a vast inventory of stock we work with.&nbsp; But don&#39;t just limit yourself to Bayern Munich home tickets you&#39;ll be ecstatic to hear that Bayern Munich away tickets are also in our repertoire.&nbsp;</p>\r\n','bayern-munich','club','/uploads/teamimages/5-233034.jpg','/uploads/maps/bayern-map-210709.png','2014-10-15 23:31:35','2014-10-16 21:07:18',1,1,1,'','',''),
	(34,'Real Madrid','','<p>Real Madrid or &#39;The galactico&#39;s&#39; whichever way you choose to utter the words, they are a colossal club. Since its inception Real Madrid have been a hugely successful club. We permit you to be apart of that history offering the greatest range of Real Madrid football tickets you could imagine. Let Football Ticket Pad secure your dream seats. Real Madrid match tickets are not easy to come by, order fast to avoid disappointment! Real Madrid tickets sell the fastest of them all.&nbsp; But dont just limit yourself to Real Madrid home tickets you&#39;ll be ecstatic to hear that Real Madrid away tickets are also in our repertoire.</p>\r\n','real-madrid','club','/uploads/teamimages/15-234115.jpg','/uploads/maps/realmadrid-map-better-210615.png','2014-10-15 23:42:10','2014-10-17 15:35:56',1,1,1,'','',''),
	(35,'Borussia Dortmund','','<p>Being one of the most successful teams in Germans top division is no easy feat, yet Borussia Dortmund have a history glittered with triumphs. Such stature gives fans and neutrals alike great impetus to watch Dortmund games as this giant club take to the field.&nbsp; Whether you are more corporate and want great long side seats or Dortmund tickets situated in the &#39;yellow gelb&#39; we will always come up trumps for you! Dortmund matches are always rocking at westfalenstadion, it&#39;s a trip not to be missed! If you can&#39;t see listed what you are looking for then Football Ticket Pad will do our utmost to obtain the Dortmund football tickets you are seeking the most! But dont just limit yourself to Dortmund home tickets you&#39;ll be ecstatic to hear that Dortmund away tickets are also in our repertoire.</p>\r\n\r\n<p>&nbsp;</p>\r\n','borussia-dortmund','club','/uploads/teamimages/25-234504.jpg','/uploads/maps/dortmund-map-210440.png','2014-10-15 23:46:26','2014-10-17 15:35:05',1,1,1,'','',''),
	(36,'Manchester United','','<pre>\r\nManchester United are England&#39;s most successful club and have a global following as big as any sporting team. Manchester united football tickets have always been in high demand but we at Football Ticket Pad have such a great network of contacts that we can can offer you Man Utd tickets to every battle.&nbsp;\r\n\r\nIf you&#39;ve been to the stadium of dreams on a previous occasion and sat in the prestigious south stand or amongst the red army in the Stretford end and would like to again, this is more than possible with Football Ticket Pad ! We can offer you Man U tickets in any section of the crowd you desire.&nbsp;\r\n\r\nBut don&#39;t just limit yourself to Man United home tickets you&#39;ll be ecstatic to hear that Man United away tickets are also in our repertoire.&nbsp;\r\n</pre>\r\n','manchester-united','club','','/uploads/maps/man-u-map-210404.png','2014-10-16 11:02:58','2014-10-17 15:32:23',1,1,1,'','',''),
	(37,'Athletico Madrid','','<pre>\r\nFor longer than this club would like to remember, Athletico Madrid has lived in the shadows of their great rivals Real Madrid. However in recent times the pendulum has swung almost more in the direction of Athletico as they have put together a team of world beaters and are becoming a force to be reckoned with. Purchase Athletico Madrid tickets to follow the team in their conquest to over come their city neighbours! Take a look to the right hand side to see the wealth of Athletico Madrid matches we have to offer.&nbsp;\r\n\r\nOur service is second to none and with our 24 hour service team you can book Athletico Madrid football tickets around the clock. Don&#39;t opt for second best! Buy your tickets at Football Ticket Pad!&nbsp;\r\n\r\nBut dont just limit yourself to Athletico Madrid home tickets you&#39;ll be ecstatic to hear that Athletico Madrid away tickets are also in our repertoire.</pre>\r\n','athletico-madrid','club','/uploads/teamimages/6-111150.jpg','/uploads/maps/athletico-map-205959.png','2014-10-16 11:13:06','2014-10-17 15:30:48',1,1,1,'','',''),
	(38,'Germany','','<p>Bundesliga tickets</p>\r\n','germany','country','','','2014-10-16 20:22:14','2014-10-16 20:22:14',1,0,0,'','',''),
	(39,'Spain','','<p>La liga tickets</p>\r\n','spain','country','','','2014-10-16 20:22:43','2014-10-16 20:22:43',1,0,0,'','',''),
	(40,'Valencia','','<p>Down the years Valencia has had it&#39;s fair share of superstars and to follow monumental results. One of the most emphatic achievements being the reaching of back to back Champions league finals in 2000/2001.&nbsp; If you&#39;d like to be apart of Valencia&#39;s fight to bring back their heyday&#39;s greatest moments then we have all the Valencia football tickets you could wish for.&nbsp;Valencia matches at the Mestalla are a different but equally good experience to a trip to the Bernabeu. Their fans turn out in their droves to get behind their team and you can too with the purchase of our Valencia tickets. All that&#39;s required is to simply select one of our many options at the Mestalla. Don&#39;t wait a moment later, buy Valencia football tickets today and throw yourself in the heart of the action! But dont just limit yourself to Valencia home tickets you&#39;ll be ecstatic to hear that Valencia away tickets are also in our repertoire.</p>\r\n','valencia','club','/uploads/teamimages/11-203024.jpg','/uploads/maps/valenica-map-205737.png','2014-10-16 20:33:00','2014-10-20 09:46:10',1,1,1,'test data','meta description','test key word'),
	(41,'La Liga','','<p>Description of LaLiga</p>\r\n','la-liga','league','',NULL,'2014-10-20 08:02:46','2014-10-20 08:02:46',1,0,0,'','',''),
	(42,'Bundesliga','','<p>Bundesliga description</p>\r\n','bundesliga','league','',NULL,'2014-10-20 09:17:55','2014-10-20 09:17:55',1,0,0,'','',''),
	(43,'Ligue 1','','<p>Ligue 1 description</p>\r\n','ligue-1','league','',NULL,'2014-10-20 09:18:29','2014-10-21 11:50:33',1,0,0,'','',''),
	(44,'2013','','<p>test&nbsp;</p>\r\n','2013','season','',NULL,'2014-10-21 11:27:49','2014-10-21 11:27:49',1,0,0,'','','');

/*!40000 ALTER TABLE `football_ticket` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table football_ticket_club_tournaments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `football_ticket_club_tournaments`;

CREATE TABLE `football_ticket_club_tournaments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tournament_id` (`tournament_id`,`club_id`,`season_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `football_ticket_club_tournaments` WRITE;
/*!40000 ALTER TABLE `football_ticket_club_tournaments` DISABLE KEYS */;

INSERT INTO `football_ticket_club_tournaments` (`id`, `tournament_id`, `club_id`, `season_id`, `updated_at`, `created_at`)
VALUES
	(10,7,10,NULL,'2014-10-07 12:55:15','2014-10-07 12:55:15'),
	(11,7,13,NULL,'2014-10-15 11:14:19','2014-10-15 11:14:19'),
	(13,41,40,NULL,'2014-10-21 11:25:59','2014-10-21 11:25:59'),
	(14,12,40,NULL,'2014-10-21 11:28:12','2014-10-21 11:28:12'),
	(19,7,40,NULL,'2014-10-21 11:35:59','2014-10-21 11:35:59'),
	(20,7,40,44,'2014-10-21 11:39:08','2014-10-21 11:39:08'),
	(21,7,31,8,'2014-10-21 13:50:54','2014-10-21 13:50:54'),
	(22,7,14,8,'2014-10-21 14:00:54','2014-10-21 14:00:54');

/*!40000 ALTER TABLE `football_ticket_club_tournaments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table football_ticket_meta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `football_ticket_meta`;

CREATE TABLE `football_ticket_meta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `football_ticket_id` int(11) NOT NULL,
  `key` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `football_ticket_meta` WRITE;
/*!40000 ALTER TABLE `football_ticket_meta` DISABLE KEYS */;

INSERT INTO `football_ticket_meta` (`id`, `football_ticket_id`, `key`, `value`, `created_at`, `updated_at`)
VALUES
	(15,9,'country','11','2014-10-03 10:18:17','2014-10-03 10:42:00'),
	(16,10,'country','2','2014-10-03 10:41:39','2014-10-03 10:41:39'),
	(18,9,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"premier league\",\"seasonHTML\":\"2014\"}','2014-10-03 11:37:46','2014-10-03 11:37:46'),
	(26,10,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"premier league\",\"seasonHTML\":\"2014\"}','2014-10-07 12:55:15','2014-10-07 12:55:15'),
	(28,13,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"premier league\",\"seasonHTML\":\"2014\"}','2014-10-15 11:14:19','2014-10-15 11:14:19'),
	(73,12,'country','11','2014-10-15 19:57:03','2014-10-15 19:57:03'),
	(469,33,'club_logo','/uploads/bayern-munchen-logo-204453.png','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(470,33,'nickname','Der FCB ','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(471,33,'founded','1900','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(472,33,'rivals','Borussia Dortmund, 1860 Munich','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(473,33,'recorded_goal_scorer','Gerd Müller - 385','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(474,33,'record_signing','Mario Goetze - £31.5m','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(475,33,'country','38','2014-10-16 21:07:18','2014-10-16 21:07:18'),
	(574,18,'club_logo','/uploads/crystal-palace-fc-205047.png','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(575,18,'nickname','Eagles, Glaziers','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(576,18,'founded','1905','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(577,18,'rivals','Brighton','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(578,18,'recorded_goal_scorer','Peter Simpson- 165','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(579,18,'record_signing','Dwight Gale - £4.5m','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(580,18,'country','2','2014-10-16 21:26:35','2014-10-16 21:26:35'),
	(581,17,'club_logo','/uploads/burney-fc-hd-logo-204947.png','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(582,17,'nickname','The Clarets','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(583,17,'founded','1882','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(584,17,'rivals','Blackburn Rovers','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(585,17,'recorded_goal_scorer','George Beel - 188','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(586,17,'record_signing','Steven Fletcher - £3m','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(587,17,'country','2','2014-10-16 21:29:05','2014-10-16 21:29:05'),
	(588,16,'club_logo','/uploads/aston-villa-204815.png','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(589,16,'nickname','The Villans','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(590,16,'founded','1874','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(591,16,'rivals','Birmingham City / West Brom','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(592,16,'recorded_goal_scorer','Billy Walker - 244','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(593,16,'record_signing','Darren Bent - £18m','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(594,16,'country','2','2014-10-16 21:30:13','2014-10-16 21:30:13'),
	(595,15,'club_logo','/uploads/arsenal-204654.png','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(596,15,'nickname','The Gunners','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(597,15,'founded','1886','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(598,15,'rivals','Tottenham Hotspur','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(599,15,'recorded_goal_scorer','Thierry Henry (228)','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(600,15,'record_signing','Mezut Özil - £42.5m','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(601,15,'country','2','2014-10-16 21:32:19','2014-10-16 21:32:19'),
	(616,37,'club_logo','/uploads/logo/athletico-madrid-logo-153025.png','2014-10-17 15:30:48','2014-10-17 15:30:48'),
	(617,37,'nickname','Los Colchoneros (The Mattress Makers)','2014-10-17 15:30:48','2014-10-17 15:30:48'),
	(618,37,'founded','1903','2014-10-17 15:30:49','2014-10-17 15:30:49'),
	(619,37,'rivals','Real Madrid, Getafe','2014-10-17 15:30:49','2014-10-17 15:30:49'),
	(620,37,'recorded_goal_scorer','Luis Aragonés - 173','2014-10-17 15:30:49','2014-10-17 15:30:49'),
	(621,37,'record_signing','Falcao - £32m','2014-10-17 15:30:49','2014-10-17 15:30:49'),
	(622,37,'country','39','2014-10-17 15:30:49','2014-10-17 15:30:49'),
	(623,36,'club_logo','/uploads/logo/manchester-united-logo-153212.png','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(624,36,'nickname','The Red Devils','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(625,36,'founded','1878','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(626,36,'rivals','Man City, Liverpool ','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(627,36,'recorded_goal_scorer','Bobby Charlton - 249','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(628,36,'record_signing','Angel Di Maria - £59.7m','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(629,36,'country','2','2014-10-17 15:32:23','2014-10-17 15:32:23'),
	(630,35,'club_logo','/uploads/logo/borussia-dortmund-logo-153245.png','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(631,35,'nickname','BVB','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(632,35,'founded','1909','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(633,35,'rivals','Schalke, Borussia Mochengladbach','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(634,35,'recorded_goal_scorer','Manfred Burgsmuller - 135','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(635,35,'record_signing','Marcio Amoruso - £21.3m','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(636,35,'country','38','2014-10-17 15:35:05','2014-10-17 15:35:05'),
	(637,34,'club_logo','/uploads/logo/real-madrid-logo-153547.png','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(638,34,'nickname','Los Blancos','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(639,34,'founded','1902','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(640,34,'rivals','Atletico Madrid, Barcelona','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(641,34,'recorded_goal_scorer','Raúl - 323','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(642,34,'record_signing','Gareth Bale - £85m','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(643,34,'country','39','2014-10-17 15:35:56','2014-10-17 15:35:56'),
	(644,32,'club_logo','/uploads/logo/paris-saint-germain-logo-153745.png','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(645,32,'nickname','Les Rouge-et-Bleu (The Red and Blue)','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(646,32,'founded','1970','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(647,32,'rivals','Monaco','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(648,32,'recorded_goal_scorer','Pauleta - 109','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(649,32,'record_signing','Edinson Cavani - £53m','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(650,32,'country','11','2014-10-17 15:37:53','2014-10-17 15:37:53'),
	(651,31,'club_logo','/uploads/logo/west-ham-logo-154237.png','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(652,31,'nickname','The Hammers','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(653,31,'founded','1895','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(654,31,'rivals','Tottenham Hotspur, Millwall','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(655,31,'recorded_goal_scorer','Vic Watson - 326','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(656,31,'record_signing','Andy Carrol - £15m','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(657,31,'country','2','2014-10-17 15:42:46','2014-10-17 15:42:46'),
	(658,30,'club_logo','/uploads/logo/west-bromwich-albion-logo-154318.png','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(659,30,'nickname','The Baggies','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(660,30,'founded','1878','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(661,30,'rivals','Aston Villa, Birmingham, Wolves','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(662,30,'recorded_goal_scorer','Tony Brown -279','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(663,30,'record_signing','Brown Ideye - £10m','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(664,30,'country','2','2014-10-17 15:43:28','2014-10-17 15:43:28'),
	(665,29,'club_logo','/uploads/logo/tottenham-hotspur-logo-155027.png','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(666,29,'nickname','The Lillywhites','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(667,29,'founded','1882','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(668,29,'rivals','Arsenal','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(669,29,'recorded_goal_scorer','Jimmy Greaves - 266','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(670,29,'record_signing','Erik Manuel Lamela - £30m','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(671,29,'country','2','2014-10-17 15:50:37','2014-10-17 15:50:37'),
	(672,28,'club_logo','/uploads/logo/swansea-city-logo-155255.png','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(673,28,'nickname','The Jacks, The Swans','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(674,28,'founded','1912','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(675,28,'rivals','Cardiff City','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(676,28,'recorded_goal_scorer','Ivor Allchurch - 166 ','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(677,28,'record_signing','Wilfried Bony - 12m','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(678,28,'country','2','2014-10-17 15:53:24','2014-10-17 15:53:24'),
	(679,27,'club_logo','/uploads/logo/stoke-city-logo-155608.png','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(680,27,'nickname','The Potters','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(681,27,'founded','1863','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(682,27,'rivals','Port Vale','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(683,27,'recorded_goal_scorer','John Henry Ritchie-176','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(684,27,'record_signing','Peter Crouch - £10m','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(685,27,'country','2','2014-10-17 15:56:16','2014-10-17 15:56:16'),
	(686,26,'club_logo','/uploads/logo/sunderland-logo-155656.png','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(687,26,'nickname','The Black Cats','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(688,26,'founded','1879','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(689,26,'rivals','Newcastle','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(690,26,'recorded_goal_scorer','Bobby Gurney - 228','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(691,26,'record_signing','Steven Fletcher - £14m','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(692,26,'country','2','2014-10-17 15:57:10','2014-10-17 15:57:10'),
	(693,25,'club_logo','/uploads/logo/southampton-fc-logo-160748.png','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(694,25,'nickname','Saints','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(695,25,'founded','1885','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(696,25,'rivals','Portsmouth ','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(697,25,'recorded_goal_scorer','Mick Channon - 185','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(698,25,'record_signing','Pablo Daniel Osvaldo - £15m','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(699,25,'country','2','2014-10-17 16:07:58','2014-10-17 16:07:58'),
	(700,24,'club_logo','/uploads/logo/newcastle-united-logo-160829.png','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(701,24,'nickname','The Magpies','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(702,24,'founded','1892','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(703,24,'rivals','Sunderland ','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(704,24,'recorded_goal_scorer','Alan Shearer - 206','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(705,24,'record_signing','Michael Owen - £16m','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(706,24,'country','2','2014-10-17 16:08:39','2014-10-17 16:08:39'),
	(707,23,'club_logo','/uploads/logo/manchester-city-logo-160941.png','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(708,23,'nickname',' The Citizens, The Sky Blues','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(709,23,'founded','1892','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(710,23,'rivals','Man Utd, Everton','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(711,23,'recorded_goal_scorer','Eric Brook - 176','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(712,23,'record_signing','Sergio Agüero - 38m','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(713,23,'country','2','2014-10-17 16:09:53','2014-10-17 16:09:53'),
	(714,22,'club_logo','/uploads/logo/liverpool-logo-161022.png','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(715,22,'nickname','The Reds','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(716,22,'founded','1892','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(717,22,'rivals','Man Utd & Everton','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(718,22,'recorded_goal_scorer','Ian Rush - 346','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(719,22,'record_signing','Andy Carroll - 35m','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(720,22,'country','2','2014-10-17 16:10:35','2014-10-17 16:10:35'),
	(721,21,'club_logo','/uploads/logo/leicester-city-fc-hd-logo-161140.png','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(722,21,'nickname','The Foxes','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(723,21,'founded','1884','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(724,21,'rivals','Derby County','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(725,21,'recorded_goal_scorer','Arthur Chandler - 259','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(726,21,'record_signing',' Ade Akinbiyi - 5m','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(727,21,'country','2','2014-10-17 16:11:51','2014-10-17 16:11:51'),
	(728,20,'club_logo','/uploads/logo/hull-city-afc-hd-logo-161304.png','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(729,20,'nickname','The Tigers','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(730,20,'founded','1904','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(731,20,'rivals','Bradford, Leeds','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(732,20,'recorded_goal_scorer','Chris Chilton (193)','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(733,20,'record_signing','Shane Long & Nikica Jelavić - £6m','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(734,20,'country','2','2014-10-17 16:13:41','2014-10-17 16:13:41'),
	(735,19,'club_logo','/uploads/logo/everton-fc-logo-161555.png','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(736,19,'nickname','The Toffees','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(737,19,'founded','1878','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(738,19,'rivals','Liverpool','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(739,19,'recorded_goal_scorer',' Dixie Dean-383','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(740,19,'record_signing','Marouane Fellaini- 15m','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(741,19,'country','2','2014-10-17 16:18:53','2014-10-17 16:18:53'),
	(742,13,'club_logo','/uploads/2014/10/15/manutd-111914.png','2014-10-17 16:28:34','2014-10-17 16:28:34'),
	(743,13,'nickname','The red devils','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(744,13,'founded','1988','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(745,13,'rivals','Liverpool','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(746,13,'recorded_goal_scorer','Bobby Charlton','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(747,13,'record_signing','Ronaldo','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(748,13,'country','2','2014-10-17 16:28:35','2014-10-17 16:28:35'),
	(749,41,'country','39','2014-10-20 08:02:46','2014-10-20 08:02:46'),
	(750,41,'country','39','2014-10-20 08:02:46','2014-10-20 08:02:46'),
	(751,42,'country','38','2014-10-20 09:17:55','2014-10-20 09:17:55'),
	(752,42,'country','38','2014-10-20 09:17:55','2014-10-20 09:17:55'),
	(755,40,'club_logo','/uploads/logo/valencia-logo-090207.png','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(756,40,'nickname','Els Taronges (The Oranges)','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(757,40,'founded','1919','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(758,40,'rivals','Deportivo la Coruna','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(759,40,'recorded_goal_scorer','Mundo - 238','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(760,40,'record_signing','Joaquín - £25m','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(761,40,'country','39','2014-10-20 09:46:10','2014-10-20 09:46:10'),
	(762,14,'club_logo','/uploads/2014/10/15/logo-chelsea-153427.png','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(763,14,'nickname','The Blues / The Pensioners','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(764,14,'founded','1905','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(765,14,'rivals','Fulham / Tottenham / QPR','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(766,14,'recorded_goal_scorer','Frank Lampard - 211','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(767,14,'record_signing','Fernando Torres - £50m','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(768,14,'country','2','2014-10-20 09:47:11','2014-10-20 09:47:11'),
	(770,40,'tournament','{\"tournament\":\"41\",\"season\":\"8\",\"tournamentHTML\":\"La Liga\",\"seasonHTML\":\"2014\"}','2014-10-21 11:25:59','2014-10-21 11:25:59'),
	(771,40,'tournament','{\"tournament\":\"12\",\"season\":\"44\",\"tournamentHTML\":\"UEFA\",\"seasonHTML\":\"2013\"}','2014-10-21 11:28:12','2014-10-21 11:28:12'),
	(772,40,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"Premier League\",\"seasonHTML\":\"2014\"}','2014-10-21 11:35:59','2014-10-21 11:35:59'),
	(773,40,'tournament','{\"tournament\":\"7\",\"season\":\"44\",\"tournamentHTML\":\"Premier League\",\"seasonHTML\":\"2013\"}','2014-10-21 11:39:08','2014-10-21 11:39:08'),
	(776,43,'country','11','2014-10-21 11:50:33','2014-10-21 11:50:33'),
	(777,43,'season','8','2014-10-21 11:50:33','2014-10-21 11:50:33'),
	(778,7,'country','2','2014-10-21 13:49:58','2014-10-21 13:49:58'),
	(779,7,'season','8','2014-10-21 13:49:58','2014-10-21 13:49:58'),
	(780,31,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"Premier League\",\"seasonHTML\":\"2014\"}','2014-10-21 13:50:54','2014-10-21 13:50:54'),
	(781,14,'tournament','{\"tournament\":\"7\",\"season\":\"8\",\"tournamentHTML\":\"Premier League\",\"seasonHTML\":\"2014\"}','2014-10-21 14:00:54','2014-10-21 14:00:54');

/*!40000 ALTER TABLE `football_ticket_meta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table form_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `form_posts`;

CREATE TABLE `form_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `is_answered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `form_posts` WRITE;
/*!40000 ALTER TABLE `form_posts` DISABLE KEYS */;

INSERT INTO `form_posts` (`id`, `sender_name_surname`, `sender_email`, `sender_phone_number`, `subject`, `message`, `created_ip`, `is_answered`, `created_at`, `updated_at`)
VALUES
	(1,'test','fe@bondmed.co.uk','07415352423','test','this test message','',1,'2014-07-07 16:48:33','2014-07-07 16:50:14'),
	(2,'Fazle Elahee','felahee@gmail.com','9088888','','Test message','',0,'2014-10-15 11:00:05','2014-10-15 11:00:05'),
	(3,'Fazle Elahee','fe@bondmedia.co.uk','67666666','','Test message','',0,'2014-10-15 11:08:36','2014-10-15 11:08:36');

/*!40000 ALTER TABLE `form_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','{\"admin\":1}','2014-06-27 16:06:56','2014-06-27 16:06:56');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('full','medium','thumb') COLLATE utf8_unicode_ci NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id`, `file_name`, `extension`, `path`, `type`, `height`, `width`, `created_at`, `updated_at`)
VALUES
	(1,'football-ticket-pad-clarification-05-06-14-101711.docx','docx','/Users/bondmediamac/Documents/projects/bondcms/newcms/public/uploads/2014/07/03/03','full',0,0,'2014-07-03 10:17:11','2014-07-03 10:17:11'),
	(7,'screen-shot-2014-06-26-at-100819-105303.png','png','uploads/2014/07/03','full',0,0,'2014-07-03 10:53:03','2014-07-03 10:53:03'),
	(8,'screen-shot-2014-07-03-at-112750-2-105321.png','png','uploads/2014/07/03','full',0,0,'2014-07-03 10:53:21','2014-07-03 10:53:21'),
	(10,'screenshot-115953.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 11:59:53','2014-07-04 11:59:53'),
	(11,'screenshot-131428.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:14:28','2014-07-04 13:14:28'),
	(12,'screenshot-131545.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:15:45','2014-07-04 13:15:45'),
	(13,'screenshot-131721.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:17:21','2014-07-04 13:17:21'),
	(14,'screenshot-131854.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:18:54','2014-07-04 13:18:54'),
	(15,'screenshot-132111.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:21:11','2014-07-04 13:21:11'),
	(16,'screenshot-132751.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:27:51','2014-07-04 13:27:51'),
	(17,'screenshot-132901.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:29:01','2014-07-04 13:29:01'),
	(18,'screenshot-133113.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:31:13','2014-07-04 13:31:13'),
	(19,'screenshot-133601.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:36:01','2014-07-04 13:36:01'),
	(20,'screenshot-133824.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:38:24','2014-07-04 13:38:24'),
	(21,'screenshot-133911.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:39:11','2014-07-04 13:39:11'),
	(22,'screenshot-133943.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:39:43','2014-07-04 13:39:43'),
	(23,'screenshot-134043.png','png','uploads/2014/07/04','full',0,0,'2014-07-04 13:40:43','2014-07-04 13:40:43'),
	(28,'work-confirmation-165114.pdf','pdf','uploads/2014/07/04','full',0,0,'2014-07-04 16:51:14','2014-07-04 16:51:14'),
	(29,'application-form-amendments-v3-115654.docx','docx','uploads/2014/07/07','full',0,0,'2014-07-07 11:56:54','2014-07-07 11:56:54'),
	(30,'top-level-customer-broker-relation-152044.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 15:20:44','2014-07-07 15:20:44'),
	(31,'top-level-user-interaction-161515.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:15:15','2014-07-07 16:15:15'),
	(32,'top-level-ticket-availability-check-161515.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:15:15','2014-07-07 16:15:15'),
	(33,'top-level-ticket-search-list-161517.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:15:17','2014-07-07 16:15:17'),
	(34,'top-level-customer-broker-relation-161517.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:15:17','2014-07-07 16:15:17'),
	(35,'top-level-ticket-availability-check-164318.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:43:18','2014-07-07 16:43:18'),
	(36,'top-level-user-interaction-164318.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:43:18','2014-07-07 16:43:18'),
	(37,'top-level-customer-broker-relation-164318.png','png','uploads/2014/07/07','full',0,0,'2014-07-07 16:43:18','2014-07-07 16:43:18'),
	(38,'-095624.jpg','jpg','uploads/2014/10/08','full',0,0,'2014-10-08 09:56:24','2014-10-08 09:56:24'),
	(39,'stadiumpic-095654.png','png','uploads/2014/10/08','full',0,0,'2014-10-08 09:56:54','2014-10-08 09:56:54'),
	(40,'image009-134315.png','png','uploads/2014/10/09','full',0,0,'2014-10-09 13:43:15','2014-10-09 13:43:15'),
	(41,'image009-134845.png','png','uploads/2014/10/09','full',0,0,'2014-10-09 13:48:45','2014-10-09 13:48:45'),
	(42,'banner-robben-121853.jpg','jpg','uploads/2014/10/13','full',0,0,'2014-10-13 12:18:53','2014-10-13 12:18:53'),
	(43,'manutd-111914.png','png','uploads/2014/10/15','full',0,0,'2014-10-15 11:19:14','2014-10-15 11:19:14'),
	(44,'cfc-top-image-153355.jpg','jpg','uploads/2014/10/15','full',0,0,'2014-10-15 15:33:56','2014-10-15 15:33:56'),
	(45,'chelsea-map-153413.png','png','uploads/2014/10/15','full',0,0,'2014-10-15 15:34:13','2014-10-15 15:34:13'),
	(46,'logo-chelsea-153427.png','png','uploads/2014/10/15','full',0,0,'2014-10-15 15:34:27','2014-10-15 15:34:27'),
	(47,'78025470-diegocostagetty3-200038.jpg','jpg','uploads','full',0,0,'2014-10-15 20:00:38','2014-10-15 20:00:38'),
	(48,'78025709-mourinhowengergetty-200227.jpg','jpg','uploads','full',0,0,'2014-10-15 20:02:27','2014-10-15 20:02:27'),
	(49,'7-202514.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:25:14','2014-10-15 20:25:14'),
	(50,'4-203136.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:31:36','2014-10-15 20:31:36'),
	(51,'1-203549.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:35:49','2014-10-15 20:35:49'),
	(52,'24-203920.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:39:20','2014-10-15 20:39:20'),
	(53,'23-204149.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:41:49','2014-10-15 20:41:49'),
	(54,'21-205048.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:50:48','2014-10-15 20:50:48'),
	(55,'20-205513.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 20:55:13','2014-10-15 20:55:13'),
	(56,'19-210627.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 21:06:27','2014-10-15 21:06:27'),
	(57,'17-211044.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 21:10:44','2014-10-15 21:10:44'),
	(58,'14-212149.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 21:21:49','2014-10-15 21:21:49'),
	(59,'9-212510.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 21:25:10','2014-10-15 21:25:10'),
	(60,'13-212831.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 21:28:31','2014-10-15 21:28:31'),
	(61,'12-231026.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:10:26','2014-10-15 23:10:26'),
	(62,'10-231443.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:14:43','2014-10-15 23:14:43'),
	(63,'22-231913.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:19:13','2014-10-15 23:19:13'),
	(64,'16-232457.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:24:57','2014-10-15 23:24:57'),
	(65,'5-233034.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:30:34','2014-10-15 23:30:34'),
	(66,'15-234115.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:41:15','2014-10-15 23:41:15'),
	(67,'25-234504.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-15 23:45:04','2014-10-15 23:45:04'),
	(68,'18-105950.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-16 10:59:50','2014-10-16 10:59:50'),
	(69,'6-111150.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-16 11:11:50','2014-10-16 11:11:50'),
	(70,'8-134654.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-16 13:46:54','2014-10-16 13:46:54'),
	(71,'11-203024.jpg','jpg','uploads/teamimages','full',0,0,'2014-10-16 20:30:24','2014-10-16 20:30:24'),
	(72,'bayern-munchen-logo-204453.png','png','uploads','full',0,0,'2014-10-16 20:44:53','2014-10-16 20:44:53'),
	(73,'arsenal-204654.png','png','uploads','full',0,0,'2014-10-16 20:46:54','2014-10-16 20:46:54'),
	(74,'aston-villa-204815.png','png','uploads','full',0,0,'2014-10-16 20:48:15','2014-10-16 20:48:15'),
	(75,'burney-fc-hd-logo-204947.png','png','uploads','full',0,0,'2014-10-16 20:49:47','2014-10-16 20:49:47'),
	(76,'crystal-palace-fc-205047.png','png','uploads','full',0,0,'2014-10-16 20:50:47','2014-10-16 20:50:47'),
	(77,'valenica-map-205737.png','png','uploads/maps','full',0,0,'2014-10-16 20:57:37','2014-10-16 20:57:37'),
	(78,'athletico-map-205959.png','png','uploads/maps','full',0,0,'2014-10-16 20:59:59','2014-10-16 20:59:59'),
	(79,'man-u-map-210404.png','png','uploads/maps','full',0,0,'2014-10-16 21:04:04','2014-10-16 21:04:04'),
	(80,'dortmund-map-210440.png','png','uploads/maps','full',0,0,'2014-10-16 21:04:40','2014-10-16 21:04:40'),
	(81,'realmadrid-map-better-210615.png','png','uploads/maps','full',0,0,'2014-10-16 21:06:15','2014-10-16 21:06:15'),
	(82,'bayern-map-210709.png','png','uploads/maps','full',0,0,'2014-10-16 21:07:09','2014-10-16 21:07:09'),
	(83,'psg-map-210749.png','png','uploads/maps','full',0,0,'2014-10-16 21:07:49','2014-10-16 21:07:49'),
	(84,'west-ham-map-210853.png','png','uploads/maps','full',0,0,'2014-10-16 21:08:53','2014-10-16 21:08:53'),
	(85,'westbrom-map-211025.png','png','uploads/maps','full',0,0,'2014-10-16 21:10:25','2014-10-16 21:10:25'),
	(86,'tottenham-map-211454.png','png','uploads/maps','full',0,0,'2014-10-16 21:14:54','2014-10-16 21:14:54'),
	(87,'swansea-map-211549.png','png','uploads/maps','full',0,0,'2014-10-16 21:15:49','2014-10-16 21:15:49'),
	(88,'stoke-map-211633.png','png','uploads/maps','full',0,0,'2014-10-16 21:16:33','2014-10-16 21:16:33'),
	(89,'sunderland-map-211724.png','png','uploads/maps','full',0,0,'2014-10-16 21:17:24','2014-10-16 21:17:24'),
	(90,'southampton-map-211820.png','png','uploads/maps','full',0,0,'2014-10-16 21:18:20','2014-10-16 21:18:20'),
	(91,'newcastle-map-211932.png','png','uploads/maps','full',0,0,'2014-10-16 21:19:32','2014-10-16 21:19:32'),
	(92,'man-city-map-212030.png','png','uploads/maps','full',0,0,'2014-10-16 21:20:30','2014-10-16 21:20:30'),
	(93,'liverpool-map-212110.png','png','uploads/maps','full',0,0,'2014-10-16 21:21:10','2014-10-16 21:21:10'),
	(94,'leicester-map-212205.png','png','uploads/maps','full',0,0,'2014-10-16 21:22:05','2014-10-16 21:22:05'),
	(95,'hull-map-212329.png','png','uploads/maps','full',0,0,'2014-10-16 21:23:29','2014-10-16 21:23:29'),
	(96,'everton-map-212427.png','png','uploads/maps','full',0,0,'2014-10-16 21:24:27','2014-10-16 21:24:27'),
	(97,'crystalpalace-map-212533.png','png','uploads/maps','full',0,0,'2014-10-16 21:25:33','2014-10-16 21:25:33'),
	(98,'burnley-map-212846.png','png','uploads/maps','full',0,0,'2014-10-16 21:28:46','2014-10-16 21:28:46'),
	(99,'astonvilla-map-212947.png','png','uploads/maps','full',0,0,'2014-10-16 21:29:47','2014-10-16 21:29:47'),
	(100,'arsenal-map-213157.png','png','uploads/maps','full',0,0,'2014-10-16 21:31:57','2014-10-16 21:31:57'),
	(101,'valencia-logo-090207.png','png','uploads/logo','full',0,0,'2014-10-17 09:02:07','2014-10-17 09:02:07'),
	(102,'athletico-madrid-logo-153025.png','png','uploads/logo','full',0,0,'2014-10-17 15:30:25','2014-10-17 15:30:25'),
	(103,'manchester-united-logo-153212.png','png','uploads/logo','full',0,0,'2014-10-17 15:32:12','2014-10-17 15:32:12'),
	(104,'borussia-dortmund-logo-153245.png','png','uploads/logo','full',0,0,'2014-10-17 15:32:45','2014-10-17 15:32:45'),
	(105,'real-madrid-logo-153547.png','png','uploads/logo','full',0,0,'2014-10-17 15:35:47','2014-10-17 15:35:47'),
	(106,'paris-saint-germain-logo-153745.png','png','uploads/logo','full',0,0,'2014-10-17 15:37:45','2014-10-17 15:37:45'),
	(107,'west-ham-logo-154237.png','png','uploads/logo','full',0,0,'2014-10-17 15:42:37','2014-10-17 15:42:37'),
	(108,'west-bromwich-albion-logo-154318.png','png','uploads/logo','full',0,0,'2014-10-17 15:43:18','2014-10-17 15:43:18'),
	(109,'tottenham-map-154935.png','png','uploads/logo','full',0,0,'2014-10-17 15:49:35','2014-10-17 15:49:35'),
	(110,'tottenham-hotspur-logo-155027.png','png','uploads/logo','full',0,0,'2014-10-17 15:50:27','2014-10-17 15:50:27'),
	(111,'swansea-city-logo-155255.png','png','uploads/logo','full',0,0,'2014-10-17 15:52:55','2014-10-17 15:52:55'),
	(112,'stoke-city-logo-155608.png','png','uploads/logo','full',0,0,'2014-10-17 15:56:08','2014-10-17 15:56:08'),
	(113,'sunderland-logo-155656.png','png','uploads/logo','full',0,0,'2014-10-17 15:56:56','2014-10-17 15:56:56'),
	(114,'southampton-fc-logo-160748.png','png','uploads/logo','full',0,0,'2014-10-17 16:07:48','2014-10-17 16:07:48'),
	(115,'newcastle-united-logo-160829.png','png','uploads/logo','full',0,0,'2014-10-17 16:08:29','2014-10-17 16:08:29'),
	(116,'man-city-map-160922.png','png','uploads/logo','full',0,0,'2014-10-17 16:09:22','2014-10-17 16:09:22'),
	(117,'manchester-city-logo-160941.png','png','uploads/logo','full',0,0,'2014-10-17 16:09:41','2014-10-17 16:09:41'),
	(118,'liverpool-logo-161022.png','png','uploads/logo','full',0,0,'2014-10-17 16:10:22','2014-10-17 16:10:22'),
	(119,'leicester-city-fc-hd-logo-161140.png','png','uploads/logo','full',0,0,'2014-10-17 16:11:40','2014-10-17 16:11:40'),
	(120,'hull-city-afc-hd-logo-161304.png','png','uploads/logo','full',0,0,'2014-10-17 16:13:04','2014-10-17 16:13:04'),
	(121,'everton-fc-logo-161555.png','png','uploads/logo','full',0,0,'2014-10-17 16:15:55','2014-10-17 16:15:55');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `title`, `url`, `order`, `parent_id`, `type`, `option`, `is_published`, `created_at`, `updated_at`)
VALUES
	(2,'News','/news',1,0,'module','news',1,'2014-06-27 16:06:57','2014-10-14 11:41:45'),
	(11,'Contact Us','/contact-us',3,0,'module',NULL,1,'2014-08-26 12:40:05','2014-10-13 12:38:16'),
	(14,'About Us','/about',4,0,'module',NULL,1,'2014-09-09 14:56:58','2014-10-13 12:38:16'),
	(15,'Corporate','/corporate',5,0,'module',NULL,1,'2014-09-09 14:58:21','2014-10-13 12:38:16'),
	(16,'Faqs','/faq',2,0,'module',NULL,1,'2014-10-13 12:37:53','2014-10-13 12:38:16');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2012_12_06_225921_migration_cartalyst_sentry_install_users',1),
	('2012_12_06_225929_migration_cartalyst_sentry_install_groups',1),
	('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot',1),
	('2012_12_06_225988_migration_cartalyst_sentry_install_throttle',1),
	('2013_10_24_070153_create_articles_table',2),
	('2013_10_24_111453_create_pages_table',2),
	('2013_11_06_143600_create_photo_galleries_table',2),
	('2013_11_06_143700_create_photos_table',2),
	('2013_11_10_191159_create_form_posts_table',2),
	('2013_11_14_222615_create_tags_table',2),
	('2013_11_14_224042_create_articles_tags_table',2),
	('2013_11_22_085357_create_settings_table',2),
	('2013_11_27_110650_create_categories_table',2),
	('2013_11_29_083232_create_news_table',2),
	('2013_12_11_124855_create_sliders_table',2),
	('2014_01_13_204110_create_menus_table',2),
	('2014_07_01_143720_add_more_fields_on_page',3),
	('2014_07_02_155601_create_media_table',4),
	('2014_07_07_145824_add_type_in_slider',5),
	('2014_07_08_155713_create_cache_table',6),
	('2014_07_14_152151_create_pages_meta',7),
	('2014_07_21_141501_add_pulication_date',8),
	('2014_08_19_154551_slider_photo_field_added',9),
	('2014_08_20_105605_slider_photo_order_field_added',10),
	('2013_09_09_203257_create_fbf_laravel_simple_faqs_table',11),
	('2014_08_22_094405_faq_category',12),
	('2014_08_22_184443_create_session_table',13),
	('2014_08_26_015016_faq',14),
	('2014_08_26_122139_faq_order_field',15),
	('2014_08_22_184630_create_session_table',16),
	('2014_09_08_095109_events',16),
	('2014_09_09_143007_events_ticket_type',16),
	('2014_09_09_143318_events_form_of_ticket',16),
	('2014_09_10_165200_events_ticket_restrictions',16);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetime` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_date` datetime DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_content` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `parent_chain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `title`, `publication_date`, `content`, `created_at`, `updated_at`, `is_published`, `name`, `slug`, `meta_title`, `meta_content`, `meta_description`, `parent_id`, `parent_chain`)
VALUES
	(1,'About Us','0000-00-00 00:00:00','<h3>What is Football Ticket Pad?</h3>\r\n\r\n<p>We are an interactive online marketplace for fans to buy and sell tickets for football events all over the world. Our goal is to provide fans with an excellent choice of tickets at a fair market value, even if the event has long since sold out.</p>\r\n\r\n<h3>Peace of mind</h3>\r\n\r\n<p>Our approach to connecting buyers and sellers is unique because we can promise a 100% guarantee on all transactions at our marketplace. We aim to become a leading online ticket seller by providing a risk-free and secure environment for fans to buy or sell tickets. This is achieved by ensuring that tickets are in the buyer&#39;s possession at the time they are listed and by overseeing that their delivery is in good time prior to the event. We can even guarantee your seat!</p>\r\n\r\n<h3>Value</h3>\r\n\r\n<p>The tickets on our website are available from third party brokers as well as from official event sellers, which means there is a range of options for delivery and prices, so you can choose the route that works best for you.</p>\r\n','2014-06-27 16:06:57','2014-09-09 14:55:57',1,NULL,'about','',NULL,'',0,NULL),
	(16,'home','0000-00-00 00:00:00','<p>{{bm-block id=6}}</p>\r\n\r\n<p>Welcome to FootballTicketPad.com, the most specialized and fully committed Football Tickets website. It is the best ticket marketplace to buy football Tickets for popular football matches all over the world. You can buy your favourite football match/team tickets online through our secured and guaranteed online booking system.software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2014-08-11 17:24:19','2014-10-18 14:22:51',0,NULL,'home','Football Ticket Pad | Football Tickets | Premier League Tickets','Football Ticket Pad','Welcome to FootballTicketPad.com, the most specialized and fully committed Football Tickets website. It is the best ticket marketplace to buy football Tickets f',0,NULL),
	(19,'One column','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum ultricies sem a facilisis. Aenean in felis eget dui vehicula rutrum. Phasellus sagittis nunc quis elit fringilla, ut egestas libero tempus. Nam egestas convallis libero. Sed pellentesque, leo et lobortis tristique, ligula odio posuere mauris, ut ornare nunc urna nec eros. Morbi scelerisque nulla metus. Curabitur lacinia consectetur magna, nec semper sapien blandit ac. Proin congue sem eget quam varius, sed gravida elit laoreet. Nullam tincidunt quam imperdiet est consequat tincidunt. Quisque eu volutpat ligula. Donec eu euismod elit, id rutrum felis. Aliquam tincidunt, ipsum eu pretium consectetur, diam felis facilisis lorem, sed rhoncus felis nulla eget turpis. Morbi ligula sapien, consequat ut elit ac, malesuada fringilla nibh. Curabitur non eros id tellus auctor mollis. Nam id turpis auctor, feugiat nisl sodales, convallis lacus. Sed facilisis blandit pretium.</p>\r\n\r\n<p>Praesent commodo vel nibh a viverra. Mauris nec massa vestibulum, vehicula lacus et, tincidunt dui. Aliquam eget lorem iaculis odio facilisis fermentum ut et elit. In et lorem condimentum augue rutrum tristique et id ligula. Nulla vehicula eget lacus laoreet maximus. Vestibulum iaculis lectus in tincidunt tincidunt. Aliquam erat volutpat. Nam ipsum erat, tempus id massa sit amet, pharetra interdum quam. Aliquam lacinia lectus at diam ultricies porttitor vel vel leo.</p>\r\n\r\n<p>Duis pharetra, massa finibus pretium rhoncus, metus enim aliquet arcu, ut pretium erat ligula pellentesque purus. Cras ut risus sit amet sem egestas congue. Nunc pretium tortor sit amet pretium porttitor. Integer purus tellus, congue quis faucibus ut, sagittis eu nisl. Sed id feugiat est. Fusce egestas nulla ac lorem ultricies faucibus. Duis interdum lacus diam, eget varius risus lacinia sed. Aliquam tincidunt eros id eros commodo, non vulputate risus tincidunt. Sed eu felis diam. Ut sit amet aliquam nibh. In hac habitasse platea dictumst. Sed ultrices quam sed pretium dictum. Vestibulum tincidunt ipsum ac est pretium, ac posuere libero suscipit. Etiam porttitor tristique purus viverra laoreet. Integer mi justo, aliquam laoreet sapien nec, dignissim vehicula massa.</p>\r\n\r\n<p>Sed ac ipsum ullamcorper, egestas velit faucibus, convallis erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras imperdiet a ipsum sit amet finibus. Sed dui neque, facilisis sed finibus a, ultrices euismod tortor. Nam pellentesque neque id posuere varius. Aliquam suscipit suscipit cursus. Mauris ornare consectetur elit a efficitur. Vestibulum vel nisl id orci mattis vulputate viverra vel arcu. Duis eu tempor erat. Nam tincidunt tristique odio eu blandit. Aenean et leo vel ante semper mattis.</p>\r\n','2014-08-26 12:30:56','2014-08-26 12:30:56',1,NULL,'one-column','',NULL,'',0,NULL),
	(20,'Two Column left','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum ultricies sem a facilisis. Aenean in felis eget dui vehicula rutrum. Phasellus sagittis nunc quis elit fringilla, ut egestas libero tempus. Nam egestas convallis libero. Sed pellentesque, leo et lobortis tristique, ligula odio posuere mauris, ut ornare nunc urna nec eros. Morbi scelerisque nulla metus. Curabitur lacinia consectetur magna, nec semper sapien blandit ac. Proin congue sem eget quam varius, sed gravida elit laoreet. Nullam tincidunt quam imperdiet est consequat tincidunt. Quisque eu volutpat ligula. Donec eu euismod elit, id rutrum felis. Aliquam tincidunt, ipsum eu pretium consectetur, diam felis facilisis lorem, sed rhoncus felis nulla eget turpis. Morbi ligula sapien, consequat ut elit ac, malesuada fringilla nibh. Curabitur non eros id tellus auctor mollis. Nam id turpis auctor, feugiat nisl sodales, convallis lacus. Sed facilisis blandit pretium.</p>\r\n\r\n<p>Praesent commodo vel nibh a viverra. Mauris nec massa vestibulum, vehicula lacus et, tincidunt dui. Aliquam eget lorem iaculis odio facilisis fermentum ut et elit. In et lorem condimentum augue rutrum tristique et id ligula. Nulla vehicula eget lacus laoreet maximus. Vestibulum iaculis lectus in tincidunt tincidunt. Aliquam erat volutpat. Nam ipsum erat, tempus id massa sit amet, pharetra interdum quam. Aliquam lacinia lectus at diam ultricies porttitor vel vel leo.</p>\r\n\r\n<p>Duis pharetra, massa finibus pretium rhoncus, metus enim aliquet arcu, ut pretium erat ligula pellentesque purus. Cras ut risus sit amet sem egestas congue. Nunc pretium tortor sit amet pretium porttitor. Integer purus tellus, congue quis faucibus ut, sagittis eu nisl. Sed id feugiat est. Fusce egestas nulla ac lorem ultricies faucibus. Duis interdum lacus diam, eget varius risus lacinia sed. Aliquam tincidunt eros id eros commodo, non vulputate risus tincidunt. Sed eu felis diam. Ut sit amet aliquam nibh. In hac habitasse platea dictumst. Sed ultrices quam sed pretium dictum. Vestibulum tincidunt ipsum ac est pretium, ac posuere libero suscipit. Etiam porttitor tristique purus viverra laoreet. Integer mi justo, aliquam laoreet sapien nec, dignissim vehicula massa.</p>\r\n\r\n<p>Sed ac ipsum ullamcorper, egestas velit faucibus, convallis erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras imperdiet a ipsum sit amet finibus. Sed dui neque, facilisis sed finibus a, ultrices euismod tortor. Nam pellentesque neque id posuere varius. Aliquam suscipit suscipit cursus. Mauris ornare consectetur elit a efficitur. Vestibulum vel nisl id orci mattis vulputate viverra vel arcu. Duis eu tempor erat. Nam tincidunt tristique odio eu blandit. Aenean et leo vel ante semper mattis.</p>\r\n','2014-08-26 12:31:46','2014-08-26 12:31:46',1,NULL,'two-column-left','',NULL,'',0,NULL),
	(21,'FAQ','0000-00-00 00:00:00','<h2>For Buyers</h2>\r\n\r\n<p>{{bm-faq category=1}}</p>\r\n\r\n<h2>For Sellers</h2>\r\n\r\n<p>{{bm-faq category=2}}</p>\r\n','2014-08-26 12:32:31','2014-10-10 17:33:35',1,NULL,'faq','',NULL,'',0,NULL),
	(22,'Chelsea','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodoLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:32:58','2014-08-26 12:32:58',1,NULL,'chelsea','',NULL,'',0,NULL),
	(23,'My Account','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:33:28','2014-08-26 12:33:28',1,NULL,'my-account','',NULL,'',0,NULL),
	(24,'addresses','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:33:53','2014-08-26 12:33:53',0,NULL,'addresses','',NULL,'',0,NULL),
	(25,'purchases','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:34:09','2014-08-26 12:34:09',1,NULL,'purchases','',NULL,'',0,NULL),
	(26,'Sales','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:34:29','2014-08-26 12:34:29',1,NULL,'sales','',NULL,'',0,NULL),
	(27,'account information','0000-00-00 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est mauris, feugiat ac eros a, blandit ultricies nisl. Mauris maximus faucibus eros sed congue. Morbi non quam ut erat commodo consequat vitae eget libero. Etiam consectetur tellus non purus commodo</p>\r\n','2014-08-26 12:34:45','2014-08-26 12:42:50',1,NULL,'account-information','',NULL,'',0,NULL),
	(28,'Contact Us','0000-00-00 00:00:00','<p>Any questions you have don&#39;t hesitate to give us a call or<br />\r\nalternatively an email. One of our friendly members of staff will be on hand to swiftly answer any queries you may have.</p>\r\n','2014-08-26 12:35:51','2014-08-26 12:35:51',1,NULL,'contact-us','',NULL,'',0,NULL),
	(29,'Sell 1','0000-00-00 00:00:00','<p>Any questions you have don&#39;t hesitate to give us a call or<br />\r\nalternatively an email. One of our friendly members of staff will be on hand to swiftly answer any queries you may have.</p>\r\n','2014-08-26 12:36:39','2014-08-26 12:36:39',1,NULL,'sell-1','',NULL,'',0,NULL),
	(30,'sell 2','0000-00-00 00:00:00','<p>Any questions you have don&#39;t hesitate to give us a call or<br />\r\nalternatively an email. One of our friendly members of staff will be on hand to swiftly answer any queries you may have.</p>\r\n','2014-08-26 12:36:59','2014-08-26 12:36:59',1,NULL,'sell-2','',NULL,'',0,NULL),
	(31,'sell 3','0000-00-00 00:00:00','<p>Any questions you have don&#39;t hesitate to give us a call or<br />\r\nalternatively an email. One of our friendly members of staff will be on hand to swiftly answer any queries you may have.</p>\r\n','2014-08-26 12:37:19','2014-08-26 12:37:19',1,NULL,'sell-3','',NULL,'',0,NULL),
	(32,'search results for \"Manchester\"','0000-00-00 00:00:00','<p>x</p>\r\n','2014-08-26 12:37:43','2014-08-26 12:37:43',1,NULL,'search-results','',NULL,'',0,NULL),
	(33,'Corporate','0000-00-00 00:00:00','<p><strong>Book Football Hospitality tickets for all Football Hospitality football games online through our secure booking system.</strong><br />\r\n<br />\r\nAll football tickets for Football Hospitality are guaranteed and dispatched by our reliable partners Royal Mail and FedEx International. With our order guarantee you can buy Football Hospitality tickets with confidence so you can see all your favourite Football Hospitality players in live action!<br />\r\n<br />\r\nComplete the form and we will get back to you in 24 hours.</p>\r\n','2014-08-26 12:38:49','2014-09-09 14:58:00',1,NULL,'corporate','',NULL,'',0,NULL),
	(34,'Buy','0000-00-00 00:00:00','<p>x</p>\r\n','2014-08-26 15:44:55','2014-08-26 15:44:55',1,NULL,'buy','',NULL,'',0,NULL),
	(35,'registration','0000-00-00 00:00:00','<p>{{registration-form}}</p>\r\n','2014-08-26 17:05:45','2014-08-26 17:05:45',1,NULL,'registration','',NULL,'',0,NULL),
	(36,'login','0000-00-00 00:00:00','<p>xx</p>\r\n','2014-08-27 17:18:09','2014-08-27 17:18:09',1,NULL,'login','',NULL,'',0,NULL),
	(37,'Football Ticket Pad Privacy Policy','2014-09-10 15:16:00','<p>This privacy policy is effective as of 10th September 2014.</p>\r\n\r\n<p>Footballticketpad.com (&ldquo;Football ticket Pad&rdquo;, &rdquo;we&rdquo;, &rdquo;us&rdquo;, or &ldquo;our&rdquo;, &rdquo;the site&rdquo;) respects and protects the privacy of each individual who visits our www.footballticketpad.com website. This privacy policy outlines the way in which we use and disclose any form of personal information that you provide to us whilst using our site. Should we request any form of &ldquo;personal information&rdquo; by which you can be identified when using this website, then you can be guaranteed that it will be used in accordance with this privacy statement. Personal information includes information that identifies you or another individual personally, such as: name, address, email address, phone numbers and so forth.</p>\r\n\r\n<p><strong>Our use of your personal information</strong></p>\r\n\r\n<p>When using &ldquo;the site&rdquo; you may need to provide various forms of contact information (such as: name, company name, billing address, delivery address, contact numbers) and financial information (such as: credit card number, expiry date, issue number and security code). We use this information for fulfillment, customer service and billing purposes. If we have an issue processing an order, we will contact you on the information you provide us.</p>\r\n\r\n<p>Additionally, we use the information you or any other user of &ldquo;the site&rdquo; provides to us in the following ways:</p>\r\n\r\n<ul>\r\n	<li>To develop and enhance the services we offer to you or your company;</li>\r\n	<li>To enable you to use any services that we from time to time provide through the site;</li>\r\n	<li>For site administration purposes (including enabling us to respond to any feedback we receive from you)</li>\r\n	<li>To send you promotional information, newsletters and the like.</li>\r\n</ul>\r\n\r\n<p><strong>Security</strong></p>\r\n\r\n<p>When you enter sensitive information into our webs forms / fields we use the highest level of security to ensure it is secure with Secure Sockets Layer (SSL) 256-bit encryption protocol. The SSL protects all the information of our customers during the connection between your computer and our server. You will recognize that you are browsing in a secure environment if you see an &ldquo;s&rdquo; after the &ldquo;http&rdquo; at the beginning of the web address.</p>\r\n\r\n<p><strong>Cookies</strong><br />\r\nA cookie is a small text file which asks permission to be placed on your computer&#39;s hard drive. Cookies in no way give us access to your computer or any information about you, other than the data you choose to share with us. We use traffic log cookies to identify which pages are being used and browsed by visitors enabling us to overtime provide you with a better service. You can choose to accept or decline cookies in you internet options/settings. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>\r\n\r\n<p><strong>IP Addresses</strong><br />\r\nAn IP address is a number designated for your computer by your Internet service provider to provide access to the Internet. We may use your IP address to gather information on use. We study visitor - what pages were explored and the length of your visit. Analysis software is used to generate reports, which helps us to learn more about how we can improve your use of the website. This information is not used to develop a personal profile of you. The log files are regularly deleted.</p>\r\n\r\n<p><strong>Controlling your personal information</strong></p>\r\n\r\n<p>You may choose to restrict the collection or use of your personal information in the following ways:</p>\r\n\r\n<p>-Whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes;</p>\r\n\r\n<p>-If you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at security@footballticketpad.com</p>\r\n\r\n<p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law.</p>\r\n\r\n<p>You may request details of personal information, which we hold about you under the Data Protection Act 1998. If you would like a copy of the information held on you please write to security@footballticketpad.com</p>\r\n\r\n<p>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible, at the above address. We will promptly correct any information found to be incorrect.</p>\r\n\r\n<p><strong>Changes to this Privacy Policy</strong></p>\r\n\r\n<p>If we decide to change our Privacy Policy, we will post those changes to this Privacy Policy on our home page, and other places we deem appropriate so that you are aware of the changes.</p>\r\n\r\n<p>We reserve the right to modify this Privacy Policy at any time, so please review it frequently. If we make material changes to this policy, we will notify you here. If you have any queries about this Privacy Policy please email security@footballticketpad.com.</p>\r\n','2014-09-10 14:16:25','2014-09-10 14:16:40',1,NULL,'privacy-policy','',NULL,'',0,NULL),
	(38,'Terms & Conditions','2014-09-10 15:22:00','<p><strong>Welcome to the User Agreement for Borgholm Net LP (&quot;User Agreement&quot;, &ldquo;terms&rdquo;, &ldquo;terms and conditions&rdquo;)</strong>. Borgholm Net LP provides the services available at www.footballticketpad.com. (&quot;Borgholm Net LP&quot;, &quot;we&quot;, &quot;us&quot; or &quot;our&quot;), company number SL016732 whose registered office is at Suite 2, 78 Montgomery Street, Edinburgh, Scotland, EH7 5JA.</p>\r\n\r\n<p>This User agreement outlines the terms and conditions applicable to your use of our services available under the domain and sub-domain www.footballticketpad.com/ (&ldquo;the site&rdquo;). If you do not agree to our terms and conditions, you may not use or access our services.</p>\r\n\r\n<p>You must read, agree with and accept all of the terms and conditions contained in this User Agreement, which includes those terms and conditions expressly set out below and those incorporated by reference, before you may become a user of the Site. We strongly recommend that, as you read this User Agreement, you also access and read the information contained in the other pages and websites referred to in this document, as they contain further terms and conditions, which apply to you as a Borghlom Net LP. user. Please note: underlined words and phrases are click-through links to these pages and websites.</p>\r\n\r\n<p>By agreeing to this User Agreement, you also agree that your use of other Borgholm Net LP web sites will be governed by the user agreement posted on those other web sites.</p>\r\n\r\n<p>We may amend this User Agreement at any time by giving you notice (&quot;Notice&quot;) by posting the amended User Agreement on the Site. Any amended User Agreement will govern new user registrations from the date that it is posted on the Site. The amended User Agreement will bind existing users after the expiry of 30 days following the date of a Notice. No other amendment to this User Agreement will be effective.</p>\r\n\r\n<p>This User Agreement is effective on 10 February 2008 for new registering users and is otherwise effective on 4 February 2008 for all users registered prior to 10 February 2008.</p>\r\n\r\n<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Membership Eligibility.</strong></p>\r\n\r\n<p>Our services are not available to, and may not be used by, persons under the age of 18 years or to temporarily or indefinitely suspended Borgholm Net LP. members. If you are under 18 years old, you can use this service only in conjunction with and under the supervision of a parent or guardian. If you do not qualify, please do not use our services. If you are registering as a business entity, you represent that you have the authority to bind that entity to this User Agreement.</p>\r\n\r\n<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; User ID.</strong></p>\r\n\r\n<p>You must choose a User ID and password on completion of registration. You are responsible for all actions taken under that User ID and password and shall only use or utilise the Site using your own User ID and password. You must use every effort to keep your password safe and should not disclose it to any other person. You shall not transfer or sell your User ID to any other person. You shall also not permit, either directly or indirectly, any other person to utilise your User ID or password.</p>\r\n\r\n<p><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Borgholm Net LP is only a marketplace.</strong></p>\r\n\r\n<p>The Site acts as a marketplace, which allows registered users to offer, sell, and buy tickets, at any time, from anywhere, in a variety of price formats. We do not review listings provided by users and we never possess the items offered through the Site. As a result, we have no control over the quality, safety or legality of the items listed, the truth or accuracy of the listings, the ability of sellers to sell items or the ability of buyers to pay for items. Do not assume that the offer, sale, purchase, export or import of any item is valid and legal simply because it is listed on the Site. We are not responsible for ensuring that buyers and sellers actually complete a transaction. You accept sole responsibility for the legality of your actions under laws applying to you.</p>\r\n\r\n<p><strong>3.2 Identity verification.</strong> We use many techniques to verify the accuracy of the information our users provide to us when they register on the Site. However, because user verification on the Internet is difficult, Borgholm Net LP cannot and does not confirm the purported identity of users or the validity of the information which users post to the Site. We encourage you to communicate with potential trading partners using the tools available on the Site.</p>\r\n\r\n<p><strong>3.3 Liability. </strong>In the event that you have any right, claim or action against any other user arising from that user&#39;s use of the Site, you agree to pursue such right, claim or action independently of and without recourse to us, and you release Borgholm Net LP. (and our parent, subsidiaries, affiliates, officers, directors, agents and employees) from all claims, liability, damages, losses, costs and expenses, including legal fees, known and unknown, arising from or in any way connected with such right, claim or action.</p>\r\n\r\n<p><strong>3.4 Information Control.</strong> We do not control the information provided by other users, which is made available through the Site. You may find other user&#39;s information to be offensive, harmful, inaccurate, or deceptive. Please use caution, common sense, and practice safe trading when using the Site. Please note that there are also risks of dealing with underage persons or people acting under false pretenses. By using this Site, you agree to accept such risks and agree that Borgholm Net LP. is not responsible for the acts or omissions of users on the Site.</p>\r\n\r\n<p><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Buying.</strong></p>\r\n\r\n<p>As a buyer, you have a legal obligation to complete a transaction with a seller:</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if you purchase an item through one of our fixed price formats.</p>\r\n\r\n<p>&quot;We charge commission for buying items through our Site and when you buy an item you will have an opportunity to review these fees that you will be charged which will be set out clearly on the Confirmation of Purchase page which you will need to accept in order to complete the transaction. &quot;</p>\r\n\r\n<p><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Listing and Selling.</strong></p>\r\n\r\n<p><strong>5.1 Listing Description.</strong> If you are a seller, you must ensure that you are legally able to sell each item included in a listing on the Site, and that it is lawful to sell such item to UK residents or (if the buyer is resident overseas) that it is lawful to sell and export such item to a person resident in the buyer&#39;s jurisdiction. You must complete each section of the &ldquo;Ticket Registration Form&rdquo;. You are responsible for ensuring that you have the right to use all content in your listings and we have the right to host it on our servers.</p>\r\n\r\n<p><strong>5.2 No Cancellation.</strong> You acknowledge that we will commence supplying our services to you as soon as you have completed and submitted the &ldquo;Ticket Registration Form&rdquo; to us, and you can change or cancel listing 1 month prior to event from My Account. However you will not have right to change or cancel listing if there is any order against your listed tickets.</p>\r\n\r\n<p><strong>5.3 Fraud</strong> Without limiting any other remedies, we may suspend or terminate your account if we suspect that you have engaged or are about to engage in, or have been in any way involved in or linked to, fraudulent activity in connection with the Site.</p>\r\n\r\n<p><strong>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fees.</strong></p>\r\n\r\n<p>Joining Borgholm Net LP is free, although you will remain responsible for the costs of accessing our Site and communicating with our users. We charge fees for listing items for sale through our Site and when you list an item you have an opportunity to review and accept the fees that you will be charged which will be set out clearly in the &ldquo;Ticket Registration Form&rdquo;. We charge fees for buying items through our Site and when you buy an item you will have an opportunity to review the fees that you will be charged which will be set out clearly on the &ldquo;Confirmation of Purchase&rdquo; page which you will need to accept in order to complete the transaction. In the event we introduce a new service, the fees for that service are effective at the launch of the service.</p>\r\n\r\n<p>Unless otherwise stated, all fees are payable in Euros. Whether you are a business or not, value added tax and other taxes may apply to your transaction. Sellers and buyers will be responsible for paying all relevant fees associated with using our service and our Site and all applicable taxes. You agree that we may issue you with invoices in electronic format by email.</p>\r\n\r\n<p><strong>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Information.</strong></p>\r\n\r\n<p><strong>7.1 Definition&nbsp; </strong>&quot;Your Information&quot; is defined as any information you provide to us or other users in relation to the Borgholm Net LP service including the registration, listing (including, without limitation, any description of items listed) and any other content that you post within the Site. You are solely responsible for Your Information, and we act as a mere conduit for your online distribution and publication of Your Information.</p>\r\n\r\n<p><strong>7.2 Restrictions </strong>Your Information and your activities on our Site must not:</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; be false, inaccurate or misleading;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; be offensive or menacing, abusive, defamatory, or in breach of copyright, confidence, privacy or any other rights;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; infringe any third party&#39;s copyright, patent, trade mark, trade secret or other proprietary rights or rights of publicity or privacy;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; be fraudulent or involve the sale of counterfeit or stolen items;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; be in breach of any applicable laws or regulations (including, but not limited to, laws governing export control, consumer protection, unfair competition, anti-discrimination, false advertising);</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; be obscene, indecent or contain child pornography;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; create liability for us or cause us to lose (in whole or in part) the services of our ISPs or other suppliers;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; link directly or indirectly to or include descriptions of goods or services that: ( aa) are prohibited under this User Agreement; (bb) are identical to other items you have up for sale but are priced lower than your item&#39;s reserve; (cc) are concurrently listed for sale on a website other than Borgholm Net LP&#39;s (this does not prevent linking to or advertising an Borgholm Net LP. item from another website); or (dd) you do not have a right to link to or include;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; contain any computer viruses, macro viruses, trojan horses, worms or anything else designed to interfere with, interrupt or disrupt the normal operating procedures of a computer or to surreptitiously intercept, access without authority or expropriate any system, data or personal information;</p>\r\n\r\n<p>o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cause the Site to be interrupted, damaged, rendered less efficient or such that the effectiveness or functionality of the Site is in any way impaired.</p>\r\n\r\n<p>You must not list any item on the Site (or complete any transaction initiated using the Site) that, by paying to us the relevant fee, could cause us to violate any applicable law.</p>\r\n\r\n<p><strong>7.3 License</strong> To enable Tribal Sports S.L. to use Your Information, you grant us a non-exclusive, world-wide, perpetual, irrevocable, royalty-free, sub licensable (through multiple tiers) license to exercise the copyright, trade mark, publicity, and database rights you have in Your Information, in any media now known or not currently known. You also waive all moral rights you have in Your Information to the fullest extent permitted by law.</p>\r\n\r\n<p><strong>7.4 Your Use of Other Users&#39; Information.</strong> As a seller you have access to the User ID, email address and other contact information of the buyer and as a buyer you have access to the User ID, email address and other contact information of the seller.</p>\r\n\r\n<p>By accepting this User Agreement, you agree that, with respect to other users&#39; personally identifiable information that you obtain through the Site or through an Tribal Sports S.L.-related communication or Borgholm Net LP-facilitated transaction, you may only use such information for: (a) Borgholm Net LP-related communications that are not unsolicited commercial messages and relate to your genuine participation in a Brogholm Net LP-facilitated transaction, (b) using services offered through Borgholm Net LP, and (c) any other purpose that such user expressly agrees to after adequate disclosure of the purpose(s). In addition, you shall only use such information in accordance with applicable laws and regulations, including without limitation data protection and privacy laws. In all cases, you must give users an opportunity to remove themselves from your database and a chance to review what information you have collected about them. In addition, under no circumstances, except as defined in this Section, can you disclose personally identifiable information about another user to any third party without our consent and the consent of such other user after adequate disclosure. Note that law enforcement personnel and other rights holders are given different rights with respect to information they access.</p>\r\n\r\n<p>Borgholm Net LP and our users do not tolerate spam or unsolicited commercial communications. Therefore, without limiting the foregoing, you shall not add a Borgholm Net LP employee or a Borgholm Net LP user, even a user who has purchased an item from you, to your mail list (email or physical mail) without their express written consent after adequate disclosure. To report spam from other Borgholm Net LP users, please send an email to security@footballticketpad.com.</p>\r\n\r\n<p><strong>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Breach.</strong></p>\r\n\r\n<p>Without limiting our other remedies, we may limit your activity on the Site, immediately issue a warning, suspend or terminate your user registration or any of your item listings and refuse to provide our services to you without notice to you: (a) if you breach this User Agreement or the documents incorporated by reference; (b) if, despite our reasonable endeavors, we are unable to verify or authenticate any information you provide to us; or (c) if we believe that your actions may cause us financial loss or legal liability.</p>\r\n\r\n<p><strong>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Transfer of Data</strong></p>\r\n\r\n<p>We view protection of users&#39; privacy as a very important community principle. Borgholm Net LP will hold and transmit Your Information in a safe, confidential and secure environment. If you object to your Information being transferred or used please do not register.</p>\r\n\r\n<p><strong>10.&nbsp; &nbsp; No Warranty.</strong></p>\r\n\r\n<p><strong>We</strong> (and our parent, subsidiaries, affiliates, officers, directors, agents and employees)<strong> do not guarantee continuous, uninterrupted or secure access to our services, and operation of the Site may be interfered with by numerous factors outside of our control. Our website and our services are provided &quot;as is&quot; and as and when available, and to the extent permissible by law we exclude all implied warranties, conditions or other terms, whether implied by statute or otherwise, including without limitation any terms as to skill and care or timeliness of performance. </strong>Some jurisdictions do not allow the disclaimer of implied warranties, so the foregoing disclaimer may not apply to you.</p>\r\n\r\n<p><strong>11.&nbsp; Limitation of Liability.</strong></p>\r\n\r\n<p>Nothing in this User Agreement shall limit or exclude our liability for fraudulent misrepresentation by, or for death or personal injury resulting from our negligence or the negligence of, our agents or employees. Subject to the foregoing, <strong>we</strong> (including our parent, subsidiaries, affiliates, officers, directors, agents and employees) <strong>will not be liable for any economic losses (including, without limitation, loss of revenues, profits, contracts, business or anticipated savings), any loss of goodwill or reputation, or any special, indirect or consequential damages (however arising, including negligence) arising out of or in connection with this User Agreement.</strong> Some jurisdictions do not allow the exclusion of incidental or consequential damages, so the above exclusion may not apply to you.</p>\r\n\r\n<p>We (including our parent, subsidiaries, affiliates, officers, directors, agents and employees) also have no liability of any sort (including liability for negligence) for the acts or omissions of other providers of telecommunications services or for faults in or failures of their networks and equipment.</p>\r\n\r\n<p>Our liability to you or any third party, and the liability of our parent, subsidiaries, affiliates, officers, directors, agents and employees, in any circumstance is limited to the greater of (a) the total fees you have paid to us in relation to the listing or other service offered giving rise to liability, and (b) &pound;100.</p>\r\n\r\n<p><strong>12.&nbsp; Indemnity.</strong></p>\r\n\r\n<p>You agree to indemnify and hold us and (as applicable) our parent, subsidiaries, affiliates, officers, directors, agents, and employees, harmless from any claim or demand, including reasonable legal fees, made by any third party due to or arising out of your breach of this User Agreement (including the documents incorporated by reference), or your violation of any law or the rights of a third party.</p>\r\n\r\n<p><strong>13.&nbsp; Governing Law and Legal Compliance.</strong></p>\r\n\r\n<p>This User Agreement shall be governed by and construed in accordance with Spanish law and subject to the exclusive jurisdiction of the Spanish courts.</p>\r\n\r\n<p>Please note, that your country (and/or that of any user you deal with) may have laws, which apply to your transactions with other users regardless of what you agree with us (now) or with that user (later).</p>\r\n\r\n<p>The laws of your country may be different from Spanish law, including laws governing what can be legally offered, sold, exported, bought or imported and there may be additional legal requirements. You shall comply with all applicable domestic and international laws, statutes, ordinances and regulations regarding your use of our service and your listing, purchase and solicitation of offers to purchase and sale of items. There is no practical way for us to continually monitor the laws of every country, or each user transaction. Please do not assume that you are allowed to do what other users do, or that we are approving or validating any transaction, even if you have successfully made similar sales or purchases in the past.</p>\r\n\r\n<p><strong>14.&nbsp; Dispute Resolution.</strong></p>\r\n\r\n<p>Disputes between you and Borgholm Net LP regarding our services may be reported to security@footballticketpad.com We encourage you to report all disputes between users to your local law enforcement body.</p>\r\n\r\n<p><strong>15. Third Party Rights.</strong></p>\r\n\r\n<p>A person who is not a party to this User Agreement has no right under the Contracts (Rights of Third Parties) Act 1999 to enforce any term of this User Agreement but this does not affect any right or remedy of a third party specified in this User Agreement or which exists or is available apart from that Act.</p>\r\n\r\n<p><strong>16.&nbsp; General.</strong></p>\r\n\r\n<p>If any provision of this User Agreement is held to be invalid or unenforceable, such provision shall be struck out and the remaining provisions shall be enforceable. You agree that this User Agreement and all incorporated agreements may be automatically assigned by Borgholm Net LP in our sole discretion, to a third party in the event of a merger or acquisition or any other event. You and Borgholm Net LP are independent contractors, and no agency, partnership, joint venture, employee-employer or franchisor-franchisee relationship is intended or created by this User Agreement. Headings are for reference purposes only and in no way define, limit, construe or describe the scope or extent of such section. Our failure to act with respect to a breach by you or others does not waive our right to act with respect to subsequent or similar breaches. This User Agreement sets forth the entire understanding and agreement between us with respect to its subject matter. No oral explanation or oral information given by any party shall alter the interpretation of this User Agreement.</p>\r\n\r\n<p>This Agreement will prevail over any conditions of sale imposed by a seller and our Privacy Policy is incorporated in this User Agreement by reference. This policy may be amended, and we giving Notice may incorporate additional policies, from time to time. Any such changes will be effective after the expiry of 30 days following the date of a Notice.</p>\r\n\r\n<p>Sections 6 (Fees), 7 (Your Information), 11 (Limitation of Liability), 12 (Indemnity), 13 (Governing Law), 14 (Dispute Resolution) and 16 (Third Party Rights) shall survive any termination of this User Agreement.</p>\r\n\r\n<p>Borgholm Net LP will not offer a refund unless an event is cancelled and not rescheduled. We offer no refund in the there is changes in event date, event time, and venue change or weather conditions. <strong>ALL TICKETS PURCHASED ARE FINAL!</strong> Borgholm Net LP source tickets for sold out events, there will be occasions when the specific location of the ticket is not available, and on this rare occasion a <strong>CREDIT NOTE</strong> will be issued for the difference between the tickets purchased and tickets provided. We recommend that you book tickets after the TV companies confirm what dates fixtures will be played on. Borgholm Net LP will only offer refunds if the event is cancelled and not rescheduled. If you can no longer attend the rescheduled event then we will list the tickets for sale on our platform and try and sell the tickets on your behalf. In the event of a sale you will be subject to the selling fees outlined above.</p>\r\n\r\n<p><strong>17&nbsp;&nbsp;&nbsp; Delivery.</strong></p>\r\n\r\n<p>This section covers delivery methods and time scales. We guarantee that tickets will be delivered before kick off. In some cases tickets can be delivered on the day of the event. We use recorded delivery methods including: Royal Mail Special Delivery, UPS, DHL and private courier. Borgholm Net LP accepts no liability for the loss of tickets if the &ldquo;buyer&rdquo; provides incorrect delivery information. Borgholm Net LP accepts no liability if tickets are sent to a sorting office because the &ldquo;buyer&rdquo; did not sign for the tickets.</p>\r\n\r\n<p>If you have an additional question about this subject, please email us at security@footballticketpad.com.</p>\r\n\r\n<p>If you would like to ask a question on another subject, please email us at security@footballticketpad.com.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2014-09-10 14:22:05','2014-09-30 13:35:06',1,NULL,'terms-conditions','',NULL,'',0,NULL),
	(39,'Premiership','0000-00-00 00:00:00','<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2014-09-18 14:13:44','2014-09-18 14:13:44',1,NULL,'premiership','',NULL,'',0,NULL),
	(40,'Bundesliga','0000-00-00 00:00:00','<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2014-09-18 14:16:50','2014-09-18 14:16:50',1,NULL,'bundesliga','',NULL,'',0,NULL),
	(41,'La liga','0000-00-00 00:00:00','<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2014-09-18 14:17:17','2014-09-18 14:17:17',1,NULL,'la-liga','',NULL,'',0,NULL),
	(42,'Ligue','0000-00-00 00:00:00','<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2014-09-18 14:17:40','2014-09-18 14:17:40',1,NULL,'ligue','',NULL,'',0,NULL),
	(43,'checkout','2014-09-18 17:32:00','<p>sevawev</p>\r\n','2014-09-18 16:32:50','2014-09-18 16:32:50',1,NULL,'checkout','',NULL,'',0,NULL),
	(44,'Premier League Table 2014','2014-10-15 21:13:00','<iframe src=\"http://www.tablesleague.com/iframe?width=840&height=600&font_name=Tahoma&position=1&font_size=12&team_link=1&link_color=404040&games=1&wins=1&draws=1&lost=1&goals=1&goals_against=1&gd=1&points=1&next=1&form=1&font_size=12&font_color=000000&bg_color=FFFFFF&header_font_color=FFFFFF&header_bg_color=1fb9e4&bg_col=1fb9e4&font_color_col=FFFFFF&highlight=e3e3e3&hover=fff6bf&league_header=1&league=l_145&team=\" width=\"840\" height=600 frameborder=\"0\" scrolling=\"no\"></iframe>','2014-10-15 20:13:43','2014-10-15 20:20:07',1,NULL,'premier-league-table-2014','test',NULL,'ttttttt',0,NULL);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages_meta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages_meta`;

CREATE TABLE `pages_meta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pages_meta_page_id_meta_keyword_index` (`page_id`,`meta_keyword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages_meta` WRITE;
/*!40000 ALTER TABLE `pages_meta` DISABLE KEYS */;

INSERT INTO `pages_meta` (`id`, `page_id`, `meta_keyword`, `meta_content`, `created_at`, `updated_at`)
VALUES
	(2,1,'test','Test case 4','2014-07-16 09:30:38','2014-07-16 09:35:53'),
	(3,2,'test','Test case 3','2014-07-16 09:35:30','2014-07-16 09:35:30'),
	(4,8,'feature_image','/uploads/2014/07/07/top-level-user-interaction-164318.png','2014-07-22 10:48:23','2014-07-22 10:48:23'),
	(5,9,'feature_image','/uploads/2014/07/07/top-level-user-interaction-164318.png','2014-07-22 10:50:30','2014-08-20 18:37:50'),
	(6,9,'template','one-column','2014-07-22 10:50:30','2014-08-20 18:37:50'),
	(7,10,'feature_image','/uploads/2014/07/07/top-level-user-interaction-161515.png','2014-07-28 14:09:02','2014-08-06 11:55:25'),
	(8,10,'template','one-column','2014-07-28 14:09:02','2014-08-06 11:55:25'),
	(9,11,'feature_image','/uploads/dropzone/thumb_top_level_ticket_availability_check.png','2014-07-28 14:11:24','2014-07-28 14:11:24'),
	(10,11,'template','one-column','2014-07-28 14:11:24','2014-07-28 14:11:24'),
	(11,12,'feature_image','/uploads/2014/07/07/top-level-customer-broker-relation-152044.png','2014-07-28 14:40:16','2014-07-28 14:40:16'),
	(12,12,'template','one-column','2014-07-28 14:40:16','2014-07-28 14:40:16'),
	(13,13,'feature_image','/uploads/2014/07/07/top-level-ticket-search-list-161517.png','2014-07-28 14:43:47','2014-07-28 14:43:47'),
	(14,13,'template','one-column','2014-07-28 14:43:47','2014-07-28 14:43:47'),
	(15,14,'feature_image','','2014-07-30 15:12:10','2014-07-30 15:12:10'),
	(16,14,'template','one-column','2014-07-30 15:12:10','2014-07-30 15:12:10'),
	(17,5,'feature_image','','2014-07-30 15:17:35','2014-07-30 16:28:44'),
	(18,5,'template','two-column-left','2014-07-30 15:17:35','2014-07-30 16:28:44'),
	(19,15,'feature_image','/uploads/2014/07/07/top-level-customer-broker-relation-161517.png','2014-07-30 16:38:49','2014-07-30 16:38:49'),
	(20,15,'template','two-column-left','2014-07-30 16:38:49','2014-07-30 16:38:49'),
	(21,16,'feature_image','','2014-08-11 17:24:19','2014-10-18 14:22:51'),
	(22,16,'template','home','2014-08-11 17:24:19','2014-10-18 14:22:51'),
	(23,17,'feature_image','','2014-08-22 18:41:22','2014-08-22 18:58:27'),
	(24,17,'template','account','2014-08-22 18:41:22','2014-08-22 18:58:27'),
	(25,1,'feature_image','','2014-08-24 19:24:11','2014-09-09 14:55:57'),
	(26,1,'template','two-column-left','2014-08-24 19:24:11','2014-09-09 14:55:57'),
	(27,18,'feature_image','','2014-08-26 11:02:15','2014-08-26 11:02:15'),
	(28,18,'template','one-column','2014-08-26 11:02:15','2014-08-26 11:02:15'),
	(29,19,'feature_image','','2014-08-26 12:30:56','2014-08-26 12:30:56'),
	(30,19,'template','one-column','2014-08-26 12:30:56','2014-08-26 12:30:56'),
	(31,20,'feature_image','','2014-08-26 12:31:46','2014-08-26 12:31:46'),
	(32,20,'template','two-column-left','2014-08-26 12:31:46','2014-08-26 12:31:46'),
	(33,21,'feature_image','','2014-08-26 12:32:31','2014-10-10 17:33:35'),
	(34,21,'template','two-column-left','2014-08-26 12:32:31','2014-10-10 17:33:35'),
	(35,22,'feature_image','','2014-08-26 12:32:58','2014-08-26 12:32:58'),
	(36,22,'template','team','2014-08-26 12:32:58','2014-08-26 12:32:58'),
	(37,23,'feature_image','','2014-08-26 12:33:28','2014-08-26 12:33:28'),
	(38,23,'template','account','2014-08-26 12:33:28','2014-08-26 12:33:28'),
	(39,24,'feature_image','','2014-08-26 12:33:53','2014-08-26 12:33:53'),
	(40,24,'template','addresses','2014-08-26 12:33:53','2014-08-26 12:33:53'),
	(41,25,'feature_image','','2014-08-26 12:34:09','2014-08-26 12:34:09'),
	(42,25,'template','purchases','2014-08-26 12:34:09','2014-08-26 12:34:09'),
	(43,26,'feature_image','','2014-08-26 12:34:29','2014-08-26 12:34:29'),
	(44,26,'template','sales','2014-08-26 12:34:29','2014-08-26 12:34:29'),
	(45,27,'feature_image','','2014-08-26 12:34:45','2014-08-26 12:42:50'),
	(46,27,'template','account information','2014-08-26 12:34:45','2014-08-26 12:42:50'),
	(47,28,'feature_image','','2014-08-26 12:35:51','2014-08-26 12:35:51'),
	(48,28,'template','contact','2014-08-26 12:35:51','2014-08-26 12:35:51'),
	(49,29,'feature_image','','2014-08-26 12:36:39','2014-08-26 12:36:39'),
	(50,29,'template','sell1','2014-08-26 12:36:39','2014-08-26 12:36:39'),
	(51,30,'feature_image','','2014-08-26 12:36:59','2014-08-26 12:36:59'),
	(52,30,'template','sell2','2014-08-26 12:36:59','2014-08-26 12:36:59'),
	(53,31,'feature_image','','2014-08-26 12:37:19','2014-08-26 12:37:19'),
	(54,31,'template','sell3','2014-08-26 12:37:19','2014-08-26 12:37:19'),
	(55,32,'feature_image','','2014-08-26 12:37:43','2014-08-26 12:37:43'),
	(56,32,'template','search','2014-08-26 12:37:43','2014-08-26 12:37:43'),
	(57,33,'feature_image','','2014-08-26 12:38:49','2014-09-09 14:58:01'),
	(58,33,'template','corporate','2014-08-26 12:38:49','2014-09-09 14:58:01'),
	(59,34,'feature_image','','2014-08-26 15:44:55','2014-08-26 15:44:55'),
	(60,34,'template','buy','2014-08-26 15:44:55','2014-08-26 15:44:55'),
	(61,35,'feature_image','','2014-08-26 17:05:45','2014-08-26 17:05:45'),
	(62,35,'template','two-column-left','2014-08-26 17:05:45','2014-08-26 17:05:45'),
	(63,36,'feature_image','','2014-08-27 17:18:09','2014-08-27 17:18:09'),
	(64,36,'template','login','2014-08-27 17:18:09','2014-08-27 17:18:09'),
	(65,37,'feature_image','','2014-09-10 14:16:25','2014-09-10 14:16:40'),
	(66,37,'template','two-column-left','2014-09-10 14:16:25','2014-09-10 14:16:40'),
	(67,38,'feature_image','','2014-09-10 14:22:05','2014-09-30 13:35:06'),
	(68,38,'template','two-column-left','2014-09-10 14:22:05','2014-09-30 13:35:06'),
	(69,39,'feature_image','','2014-09-18 14:13:44','2014-09-18 14:13:44'),
	(70,39,'template','league','2014-09-18 14:13:44','2014-09-18 14:13:44'),
	(71,40,'feature_image','','2014-09-18 14:16:50','2014-09-18 14:16:50'),
	(72,40,'template','league','2014-09-18 14:16:50','2014-09-18 14:16:50'),
	(73,41,'feature_image','','2014-09-18 14:17:17','2014-09-18 14:17:17'),
	(74,41,'template','league','2014-09-18 14:17:17','2014-09-18 14:17:17'),
	(75,42,'feature_image','','2014-09-18 14:17:40','2014-09-18 14:17:40'),
	(76,42,'template','league','2014-09-18 14:17:40','2014-09-18 14:17:40'),
	(77,43,'feature_image','','2014-09-18 16:32:51','2014-09-18 16:32:51'),
	(78,43,'template','checkout','2014-09-18 16:32:51','2014-09-18 16:32:51'),
	(79,44,'feature_image','','2014-10-15 20:13:43','2014-10-15 20:20:07'),
	(80,44,'template','two-column-left','2014-10-15 20:13:43','2014-10-15 20:20:07');

/*!40000 ALTER TABLE `pages_meta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photo_galleries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photo_galleries`;

CREATE TABLE `photo_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `photo_galleries` WRITE;
/*!40000 ALTER TABLE `photo_galleries` DISABLE KEYS */;

INSERT INTO `photo_galleries` (`id`, `title`, `content`, `created_at`, `updated_at`, `is_published`)
VALUES
	(1,'Photo Gallery','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In scelerisque eget tellus et tempor. Nulla vel lectus aliquam, tempus massa ornare, fermentum tellus. Maecenas in enim sed libero ultrices tincidunt. Ut turpis ante, facilisis a fringilla rhoncus, ornare quis ipsum. Nullam erat ligula, imperdiet vel neque ac, facilisis tempor est. Morbi nec volutpat turpis. Quisque blandit justo ut diam ultrices, id lobortis nunc molestie. Donec a leo at enim pretium vehicula eu non lorem. Cras consequat, arcu nec facilisis hendrerit, metus lacus malesuada nibh, a consequat nulla est et est. In cursus, lorem eu vehicula rhoncus, justo quam bibendum eros, ut iaculis nisi nisl at velit. Aliquam massa massa, sodales et nunc vitae, ullamcorper egestas est. Mauris iaculis convallis libero, a scelerisque dolor ornare ut. Pellentesque blandit in eros ut interdum. Nulla luctus condimentum dignissim. Pellentesque nec consectetur erat, accumsan cursus urna.</p>\r\n','2014-06-27 16:06:57','2014-07-07 14:26:00',1),
	(2,'Photo Gallery Title','Photo Gallery Content','2014-06-27 16:09:22','2014-07-07 14:32:30',0),
	(3,'Photo Gallery Title','Photo Gallery Content','2014-06-27 17:06:04','2014-07-07 14:32:32',0),
	(4,'Photo Gallery Title','Photo Gallery Content','2014-07-07 14:19:55','2014-07-07 14:19:55',0),
	(5,'Photo Gallery Title','Photo Gallery Content','2014-07-07 14:20:00','2014-07-07 14:20:00',0),
	(6,'Photo Gallery Title','Photo Gallery Content','2014-07-07 14:27:13','2014-07-07 14:27:13',0),
	(7,'Photo Gallery Title','Photo Gallery Content','2014-07-07 14:31:12','2014-07-07 14:31:12',0),
	(8,'Photo Gallery Title','Photo Gallery Content','2014-07-07 16:43:58','2014-07-07 16:43:58',0),
	(9,'Photo Gallery Title','Photo Gallery Content','2014-07-29 15:56:18','2014-07-29 15:56:18',0),
	(10,'Photo Gallery Title','<p>Photo Gallery Content</p>\r\n','2014-07-30 09:44:12','2014-07-30 09:44:39',1);

/*!40000 ALTER TABLE `photo_galleries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `relationship_id` int(10) unsigned NOT NULL,
  `order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;

INSERT INTO `photos` (`id`, `file_name`, `title`, `description`, `url`, `path`, `file_size`, `type`, `relationship_id`, `order`)
VALUES
	(1,'top_level_ticket_availability_check.png','top_level_ticket_availability_check',NULL,NULL,'/uploads/dropzone/top_level_ticket_availability_check.png',31099,'PhotoGallery',1,NULL),
	(2,'top_level_ticket_availability_check.png','top_level_ticket_availability_check',NULL,NULL,'/uploads/dropzone/top_level_ticket_availability_check.png',31099,'PhotoGallery',10,NULL),
	(3,'top_level_user_interaction.png','top_level_user_interaction',NULL,NULL,'/uploads/dropzone/top_level_user_interaction.png',45314,'PhotoGallery',10,NULL),
	(4,'top_level_ticket_search_list.png','top_level_ticket_search_list',NULL,NULL,'/uploads/dropzone/top_level_ticket_search_list.png',23813,'PhotoGallery',10,NULL),
	(5,'top_level_customer_broker_relation.png','top_level_customer_broker_relation',NULL,NULL,'/uploads/dropzone/top_level_customer_broker_relation.png',30832,'PhotoGallery',10,NULL),
	(31,'53fc76a485aa8_1.jpg1.jpg','1',NULL,NULL,'/uploads/dropzone/53fc76a485aa8_1.jpg',508497,'Slider',3,NULL),
	(32,'53fc76a485f4a_2.jpg2.jpg','2',NULL,NULL,'/uploads/dropzone/53fc76a485f4a_2.jpg',578305,'Slider',3,NULL),
	(33,'53fc76a4c3bb0_3.jpg3.jpg','3','','http://footballticketspads.bonddemo.com/group/club/chelsea','/uploads/dropzone/53fc76a4c3bb0_3.jpg',338218,'Slider',3,'0'),
	(34,'53fc770b38fae_robben.jpgrobben.jpg','Bundesliga ','','#','/uploads/dropzone/53fc770b38fae_robben.jpg',57499,'Slider',6,'2'),
	(35,'53fc770b3941a_cavani.jpgcavani.jpg','Ligue 1','','#','/uploads/dropzone/53fc770b3941a_cavani.jpg',68193,'Slider',6,'4'),
	(36,'53fc770b65384_toure.jpgtoure.jpg','Premier league ','','/group/league/premier-league','/uploads/dropzone/53fc770b65384_toure.jpg',63153,'Slider',6,'0'),
	(37,'53fc77105969b_messi.jpgmessi.jpg','La liga ','','#','/uploads/dropzone/53fc77105969b_messi.jpg',59781,'Slider',6,'1');

/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `payload`, `last_activity`)
VALUES
	('739539b3abc06666fed39871f7dbf1eeebc91c4e','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSXFSN0k2NFJKR2pacE9WclNuank0endaR0hocDlOajg2MVk2V3BLeCI7czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE0OiJzaG9wcGluZ0NhcnRJZCI7aToxMjM7czo4OiJjdXN0b21lciI7YToxODp7czoxMDoid2Vic2l0ZV9pZCI7czoxOiIxIjtzOjk6ImVudGl0eV9pZCI7czoxOiIxIjtzOjE0OiJlbnRpdHlfdHlwZV9pZCI7czoxOiIxIjtzOjE2OiJhdHRyaWJ1dGVfc2V0X2lkIjtzOjE6IjAiO3M6NToiZW1haWwiO3M6MTg6ImZlQGJvbmRtZWRpYS5jby51ayI7czo4OiJncm91cF9pZCI7czoxOiIxIjtzOjEyOiJpbmNyZW1lbnRfaWQiO047czo4OiJzdG9yZV9pZCI7czoxOiIxIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjI1OiIyMDE0LTA1LTA4VDA5OjQyOjE5LTA3OjAwIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDE0LTA5LTA2IDE0OjU2OjI3IjtzOjk6ImlzX2FjdGl2ZSI7czoxOiIxIjtzOjI1OiJkaXNhYmxlX2F1dG9fZ3JvdXBfY2hhbmdlIjtzOjE6IjAiO3M6MTA6ImNyZWF0ZWRfaW4iO3M6MTg6IkRlZmF1bHQgU3RvcmUgVmlldyI7czo5OiJmaXJzdG5hbWUiO3M6NToiSmFtZXMiO3M6ODoibGFzdG5hbWUiO3M6NjoiQm9uZDA3IjtzOjEzOiJwYXNzd29yZF9oYXNoIjtzOjY1OiIyMzQxYjM4MGVkYjMwOGEzM2U1YzQ4MGVlZTVjMThkNjpJbWpYa2tGV2liRmpwOVZTVHI4MXlYcWNlSVdvZXRpMyI7czoxNToiZGVmYXVsdF9iaWxsaW5nIjtzOjI6IjEzIjtzOjE2OiJkZWZhdWx0X3NoaXBwaW5nIjtzOjI6IjE1Ijt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MTM5ODI3Nzc7czoxOiJjIjtpOjE0MTM5Njc0Mzk7czoxOiJsIjtzOjE6IjAiO319',1413982778);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ga_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `site_title`, `ga_code`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`)
VALUES
	(1,'Bond CMS','ga_code','meta_keywords','meta_description','0000-00-00 00:00:00','2014-07-07 15:41:28');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sliders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('slider','block') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;

INSERT INTO `sliders` (`id`, `title`, `created_at`, `updated_at`, `type`)
VALUES
	(2,'Slider','2014-08-19 10:28:50','2014-08-19 10:29:27','slider'),
	(3,'Slider','2014-08-19 11:13:43','2014-08-19 11:31:50','slider'),
	(4,'Slider','2014-08-21 10:26:10','2014-08-21 10:26:10',NULL),
	(5,'Slider','2014-08-21 10:26:20','2014-08-21 10:26:20',NULL),
	(6,'Home Page','2014-08-21 12:06:36','2014-08-21 12:07:20','block'),
	(7,'Block','2014-10-13 10:41:28','2014-10-13 10:41:28',NULL);

/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'PHP','php','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(2,'Laravel','laravel','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(3,'Mysql','mysql','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(4,'Oracle','oracle','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(5,'MongoDB','mongodb','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(6,'Redis','redis','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(7,'Memcache','memcache','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(8,'APC','apc','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(9,'JSON','json','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(10,'XML','xml','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(11,'Ajax','ajax','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(12,'HTML','html','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(13,'CSS','css','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(14,'Javascript','javascript','2014-06-27 16:06:57','2014-06-27 16:06:57');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table throttle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `throttle`;

CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`)
VALUES
	(1,1,'127.0.0.1',0,0,0,NULL,NULL,NULL),
	(2,1,'192.168.25.77',0,0,0,NULL,NULL,NULL),
	(3,1,'192.168.25.86',0,0,0,NULL,NULL,NULL),
	(4,1,'92.237.182.43',0,0,0,NULL,NULL,NULL),
	(5,1,'192.168.25.8',0,0,0,NULL,NULL,NULL),
	(6,3,'192.168.25.8',0,0,0,NULL,NULL,NULL),
	(7,4,'192.168.25.8',0,0,0,NULL,NULL,NULL),
	(8,3,'92.237.182.43',0,0,0,NULL,NULL,NULL),
	(9,4,'92.2.216.50',0,0,0,NULL,NULL,NULL),
	(10,4,'94.0.5.157',0,0,0,NULL,NULL,NULL),
	(11,4,'86.187.36.57',0,0,0,NULL,NULL,NULL),
	(12,3,'86.156.47.77',0,0,0,NULL,NULL,NULL);

/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`)
VALUES
	(1,'fe@bondmedia.co.uk','$2y$10$hhGe3MMZGwv3IfpjZGRELePyiwiBphchkioYyogwBZaHUAtuJk7Ii','{\"admin\":1}',1,NULL,NULL,'2014-10-21 08:34:07','$2y$10$6l0MLp0ljQPbeQxGEFDjMO534yC9pbFTvyzLqR9UZZ7MXo3fyXyFG',NULL,'Fazle','Elahee','2014-06-27 16:06:57','2014-10-21 08:34:07'),
	(2,'admin@admin.com','$2y$10$L5uQ2UUTrli3TGq632K0Xek1LHR/SOeQOzgJg.jBWpfAWWrnibNGW','{\"admin\":1}',1,NULL,NULL,NULL,NULL,NULL,'Admin','Admin','2014-06-27 16:06:57','2014-06-27 16:06:57'),
	(3,'am@bondmedia.co.uk','$2y$10$DRy/Ri78Uvz4FGEHX/qwN.qQpktSLmhrFURoIOQrwdXOW1PCMMec.',NULL,1,NULL,NULL,'2014-10-20 08:02:15','$2y$10$f5c1IyxdRUlDClazJcm8.OmUzRrZvt/HNWxHmJw/q5W6bLgL1eb8a',NULL,'Anthony','Mixides','2014-10-15 15:03:22','2014-10-20 08:02:15'),
	(4,'james@citytocityevents.com','$2y$10$XcQ9gj9itQZaB2iwYGp0EOss9OAEwFRhMfkT0AD0edsgY2c4aAgEW',NULL,1,NULL,NULL,'2014-10-20 08:31:40','$2y$10$EB7QlC.2EnlALJzYf/Q0o..y3.6rT/pAJEFXgDlZ0NC5MH1MoNEk6',NULL,'James','Thacker','2014-10-15 15:52:39','2014-10-20 08:31:40');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;

INSERT INTO `users_groups` (`user_id`, `group_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1);

/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
