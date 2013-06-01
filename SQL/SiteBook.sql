SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `availability` (
  `availability_id` varchar(36) Primary Key,
  `site_id` varchar(36) DEFAULT NULL,
  `start_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `booking` (
  `booking_id` varchar(36) NOT NULL,
  `availability_id` varchar(36) DEFAULT NULL,
  `customer_id` varchar(36) DEFAULT NULL,
  `payment_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  FOREIGN KEY (availability_id) REFERENCES availability(availability_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `customer` (
  `customer_id` varchar(36) NOT NULL,
  `customer_name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `customer_address` varchar(256) DEFAULT NULL,
  `customer_email` varchar(256) DEFAULT NULL,
  `customer_phone` varchar(256) DEFAULT NULL,
  `customer_password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `schedule` (
  `schedule_id` varchar(36) PRIMARY KEY,
  `site_id` varchar(36) DEFAULT NULL,
  `start_time` date DEFAULT NULL,
  `duration_minutes` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `site` (
  `site_id` char(36) NOT NULL,
  `site_name` varchar(256) DEFAULT NULL,
  `site_address` varchar(256) DEFAULT NULL,
  `site_description` text,
  `site_policies` text,
  `longitude` decimal(10,8) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
