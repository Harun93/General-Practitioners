
-- Dumping structure for table gp.appointments
CREATE TABLE IF NOT EXISTS `appointments` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `appdate` date NOT NULL,
  `userid` int(11) NOT NULL DEFAULT '0',
  `apptime` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table gp.appointments: ~0 rows (approximately)
DELETE FROM `appointments`;
INSERT INTO `appointments` (`appid`, `status`, `appdate`, `userid`, `apptime`) VALUES
	(1, '0', '2017-03-20', 0, '00:00:00'),
	(2, 'Cancalled', '2017-01-01', 15, '09:00:00'),
	(3, 'Cancalled', '2017-01-01', 15, '09:30:00'),
	(4, 'Confirmed', '2017-01-01', 15, '10:00:00'),
	(5, 'Confirmed', '2017-01-01', 15, '14:30:00');


-- Dumping structure for table gp.clinictiming
CREATE TABLE IF NOT EXISTS `clinictiming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(50) DEFAULT '0',
  `starttime` time DEFAULT '00:00:00',
  `endtime` time DEFAULT '00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table gp.clinictiming: ~8 rows (approximately)
DELETE FROM `clinictiming`;
INSERT INTO `clinictiming` (`id`, `day`, `starttime`, `endtime`) VALUES
	(1, 'Monday', '09:00:00', '17:00:00'),
	(2, 'Tuesday', '09:00:00', '17:00:00'),
	(3, 'Wednesday', '09:00:00', '17:00:00'),
	(4, 'Thursday', '09:00:00', '17:00:00'),
	(5, 'Friday', '09:00:00', '17:00:00'),
	(6, 'Saturday', '09:00:00', '12:00:00'),
	(7, 'Sunday', '09:00:00', '12:00:00'),
	(8, 'Bank Holiday', '09:00:00', '12:00:00');


-- Dumping structure for table gp.dynamicpages
CREATE TABLE IF NOT EXISTS `dynamicpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) DEFAULT NULL,
  `pageorder` varchar(500) DEFAULT NULL,
  `page` varchar(500) DEFAULT NULL,
  `pagetitle` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table gp.dynamicpages: ~8 rows (approximately)
DELETE FROM `dynamicpages`;
INSERT INTO `dynamicpages` (`id`, `paragraph`, `pageorder`, `page`, `pagetitle`) VALUES
	(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '1', 'home', 'What we do?'),
	(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'home', 'Who we are?'),
	(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'services', 'GP Appointment'),
	(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'services', 'Blood Tests'),
	(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'services', 'Vaccination'),
	(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'services', 'Advice'),
	(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'Consultation', 'Consultation 1'),
	(8, 'You can contact us on:\r\ninfo@gpsurgery.com\r\nPh: 012121212\r\nwww.gpsurgery.com', '2', 'contact', 'Contact Us'),
	(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'Consultation', 'Consultation 2'),
	(10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'Consultation', 'Consultation 3'),
	(11, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2', 'Consultation', 'Consultation 4');


-- Dumping structure for table gp.users
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `addressline1` varchar(200) DEFAULT NULL,
  `addressline2` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `postcode` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table gp.users: ~4 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`userid`, `username`, `firstname`, `lastname`, `role`, `password`, `addressline1`, `addressline2`, `phone`, `postcode`) VALUES
	(15, 'admin@gp.com', 'Admin', 'A', 'admin', 'admin', 'l', 'l', '012555555', 'Dublin 1'),
	(17, 'doctor@gp.com', 'Doctor', 'D', 'doctor', 'doctor', 'add1', 'add2', '012121212', 'Dublin 2'),
	(18, 'patient@gp.com', 'Patient', '1', 'patient', 'patient', 'u', 'u', '01256955', 'Dublin 3'),
	(19, 'patient2@gp.com', 'Patient', '2', 'patient', 'patient', 'u', 'u', '014569888', 'Dublin 4');
