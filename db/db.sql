CREATE DATABASE
IF NOT EXISTS judiciarycabinet

CREATE TABLE `judiciary cabinet`.`users`
( `id` INT
(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR
(255) NOT NULL , `email` VARCHAR
(255) NOT NULL , `password` VARCHAR
(255) NOT NULL , `type` VARCHAR
(255) NOT NULL , PRIMARY KEY
(`id`)) ENGINE = InnoDB;

CREATE TABLE `judiciary_cabinet`.`respondent`
( `id` INT
(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR
(255) NOT NULL , `case_no` VARCHAR
(255) NOT NULL , `occupation` VARCHAR
(255) NOT NULL , `medical` VARCHAR
(255) NOT NULL , `address` VARCHAR
(255) NOT NULL , `property` VARCHAR
(255) NOT NULL , `case_detail` VARCHAR
(255) NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY
(`id`)) ENGINE = InnoDB;

CREATE TABLE `judiciary_cabinet`.`appellant`
( `id` INT
(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR
(255) NOT NULL , `case_no` VARCHAR
(255) NOT NULL , `occupation` VARCHAR
(255) NOT NULL , `medical` VARCHAR
(255) NOT NULL , `address` VARCHAR
(255) NOT NULL , `property` VARCHAR
(255) NOT NULL , `case_detail` VARCHAR
(255) NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY
(`id`)) ENGINE = InnoDB;