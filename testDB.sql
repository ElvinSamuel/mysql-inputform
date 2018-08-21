/*
  Just a smaller version of the Authors DB.
*/

DROP TABLE IF EXISTS `testAuthors`;

CREATE TABLE `testAuthors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

INSERT INTO `testAuthors` VALUES ('1','Vincent','Lemke','rebekah52@example.com','2014-08-05','1989-10-03 10:46:20'),
('2','Anastasia','Swift','charley69@example.com','2000-11-22','1993-11-13 22:52:19'),
('3','Trenton','Wiza','velva.kessler@example.com','1979-12-14','2001-04-29 19:38:39'),
('4','Rachelle','Trantow','sabrina12@example.net','2001-12-31','1981-09-28 22:49:28'),
('5','Deron','Stoltenberg','ymann@example.com','2011-07-05','2006-11-27 08:30:39'),
('6','Dina','Reilly','koelpin.juston@example.com','1985-09-10','1983-03-29 08:26:02'),
('7','Maudie','Kutch','uhayes@example.org','2006-01-10','1980-05-25 02:06:56'),
('8','Jamir','Johnson','ledner.alisa@example.net','1985-01-22','1983-10-25 18:13:13'),
('9','Beth','Kiehn','zane.quigley@example.com','1979-10-04','2011-08-22 02:57:51'),
('10','Kobe','Okuneva','luettgen.rita@example.net','1994-03-03','1999-11-18 20:00:53'),
('11','Marielle','Greenfelder','duncan.dach@example.net','2007-07-28','2010-09-18 01:05:47'),
('12','Florida','Kunde','floy.macejkovic@example.com','2010-02-17','1980-11-05 21:07:48'),
('13','Lexie','O\'Reilly','kristian59@example.org','1979-10-03','1985-05-16 10:40:34'),
('14','Manuela','Williamson','schoen.valentin@example.org','2013-06-25','1981-11-23 16:08:01'),
('15','Anita','Collins','mstrosin@example.net','1980-07-07','1996-08-06 02:23:34'),
('16','Wilbert','Abernathy','o\'conner.marcus@example.net','1974-09-11','1991-08-12 17:55:35'),
('17','Sammy','Grady','adalberto92@example.org','1998-05-20','1981-06-13 00:54:36'),
('18','Jordan','Lakin','mitchell.anabelle@example.com','2003-05-16','1990-03-28 10:40:44'),
('19','Tess','West','mara.corwin@example.org','1973-09-28','1996-03-11 03:29:46'),
('20','Dominic','Rutherford','aliya09@example.net','2009-11-20','1970-07-18 01:04:04'),
('21','Zaria','Hammes','mante.eliane@example.com','1995-09-14','1984-07-23 12:57:54'),
('22','Verna','Kuvalis','sean.harris@example.net','1980-07-04','1995-02-27 20:18:43'),
('23','Bud','Schmidt','corwin.franz@example.net','2017-01-16','1997-08-16 01:38:11'),
('24','King','VonRueden','edd74@example.org','2018-01-18','2001-09-02 11:52:52'),
('25','Camylle','Emmerich','nicolas.kendra@example.net','2018-04-23','2012-09-20 16:16:33'),
('26','Madie','Wiza','humberto.wuckert@example.org','1989-02-26','2007-11-05 08:39:34'),
('27','Lula','Hamill','schoen.jeanette@example.net','2007-11-09','1998-10-18 15:02:11'),
('28','Kyleigh','Block','nora.dubuque@example.net','2016-01-06','2010-07-04 16:15:13'),
('29','Marie','Trantow','sheldon30@example.net','1993-07-15','1994-11-20 08:29:51');