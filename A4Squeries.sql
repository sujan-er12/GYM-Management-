

// users table 

CREATE TABLE `a4s_db`.`users` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `user_name` VARCHAR(255) NOT NULL ,  `user_email` VARCHAR(255) NOT NULL ,  `user_phone` BIGINT NOT NULL ,  `user_password` VARCHAR(255) NOT NULL ,  `timestamp` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sno`)) ENGINE = InnoDB;



// registered users

CREATE TABLE `a4s_db`.`registered_users` (`name` VARCHAR(255) NOT NULL ,  `email` VARCHAR(255) NOT NULL ,  `phone` BIGINT NOT NULL ,  `gender` VARCHAR(255) NOT NULL ,  `trainer` VARCHAR(255) NOT NULL ,  `feedback` VARCHAR(255) NOT NULL ,  `registered_id` INT NOT NULL AUTO_INCREMENT ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY  (`registered_id`)) ENGINE = InnoDB;

// add plan
ALTER TABLE `registered_users`  ADD `plan` VARCHAR(255) NOT NULL  AFTER `trainer`;

// insert registered users data 

INSERT INTO `registered_users` (`name`, `email`, `phone`, `gender`, `trainer`,`plan`, `feedback`, `date`) VALUES ('Joe', 'joe@gmail.com', '9876456789', 'Male', 'Hasan','2 Months', 'Good one', current_timestamp());

// payment table creation

CREATE TABLE `a4s_db`.`payment` ( `payment_id` INT NOT NULL AUTO_INCREMENT ,`customer_email` VARCHAR(255) NOT NULL ,`amount_paid` INT NOT NULL ,  `payment_mode` VARCHAR(255) NOT NULL ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY KEY  (`payment_id`)) ENGINE = InnoDB;

// payment mode table creation 

CREATE TABLE `a4s_db`.`payment_mode` ( `payment_mode_id` INT NOT NULL AUTO_INCREMENT ,  `payment_mode` VARCHAR(255) NOT NULL ,  `added_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY KEY  (`payment_mode_id`)) ENGINE = InnoDB;

// insert payment mode data 

 INSERT INTO `payment_mode` (`payment_mode`, `added_date`) VALUES ('Credit Card', current_timestamp());
 INSERT INTO `payment_mode` (`payment_mode`, `added_date`) VALUES ('Cash', current_timestamp());
 INSERT INTO `payment_mode` (`payment_mode`, `added_date`) VALUES ('Debit Card', current_timestamp());


// Trainer Table

CREATE TABLE `a4s_db`.`trainer` ( `trainer_id` INT NOT NULL AUTO_INCREMENT , `trainer_name` VARCHAR(255) NOT NULL , `trainer_email` VARCHAR(255) NOT NULL , `trainer_mobile` BIGINT NOT NULL, `trainer_rating` INT NOT NULL , PRIMARY KEY (`trainer_id`)) ENGINE = InnoDB;

// insert trainer data

INSERT INTO `trainer` (`trainer_name`, `trainer_email`, `trainer_mobile`,`trainer_rating`) VALUES ('Hasan', 'hasan@gmail.com', '9345678966',  '50000');

INSERT INTO `trainer` (`trainer_name`, `trainer_email`, `trainer_mobile`,`trainer_rating`) VALUES ('Rajan', 'rajan@gmail.com', '9535674563',  '70000');

INSERT INTO `trainer` (`trainer_name`, `trainer_email`, `trainer_mobile`,`trainer_rating`) VALUES ('Jayesh', 'jayesh@gmail.com', '8456217899',  '80000');


// Plan Table 

CREATE TABLE `a4s_db`.`plans` ( `plan_id` INT NOT NULL AUTO_INCREMENT ,  `plan_name` VARCHAR(255) NOT NULL ,  `plan_amount` INT(255) NOT NULL ,  `plan_duration` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`plan_id`)) ENGINE = InnoDB;

// insert plan data

INSERT INTO `plans` (`plan_name`, `plan_amount`, `plan_duration`) VALUES ('Chest', '2500', '6 months');

INSERT INTO `plans` (`plan_name`, `plan_amount`, `plan_duration`) VALUES ('Back And Abs', '3000', '1 Year');

INSERT INTO `plans` (`plan_name`, `plan_amount`, `plan_duration`) VALUES ('Arms(Biceps,triceps)', '2500', '8 Months');

// Equipment table

CREATE TABLE `a4s_db`.`equipments` (`equipment_id` INT NOT NULL AUTO_INCREMENT ,  `equipment_name` VARCHAR(255) NOT NULL , `equipment_units` INT(255) NOT NULL ,  `equipment_desc` VARCHAR(255) NOT NULL ,  PRIMARY KEY  (`equipment_id`)) ENGINE = InnoDB;

// insert equipment data

INSERT INTO `equipments` (`equipment_name`, `equipment_units`, `equipment_desc`) VALUES ('Bench Press', '5', 'A New Valuable Bench Press');

INSERT INTO `equipments` (`equipment_name`, `equipment_units`, `equipment_desc`) VALUES ('Calf Machine', '10', 'A New Valuable Calf Machine');

INSERT INTO `equipments` (`equipment_name`, `equipment_units`, `equipment_desc`) VALUES ('Treadmill', '15', 'A New Valuable Tread Mill');



// products

CREATE TABLE `a4s_db`.`products` ( `product_id` INT NOT NULL AUTO_INCREMENT ,  `product_name` VARCHAR(255) NOT NULL ,  `product_price` VARCHAR(255) NOT NULL,`product_desc`  VARCHAR(255) NOT NULL ,`purchased_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`product_id`)) ENGINE = InnoDB;

 // insert products data

INSERT INTO `products` (`product_name`,`product_price`,`product_desc`, `purchased_date`) VALUES ('Treadmill','8000','good treadmill', current_timestamp());

INSERT INTO `products` (`product_name`,`product_price`,`product_desc`, `purchased_date`) VALUES ('DumbBell','7000','good dumbbell', current_timestamp());

INSERT INTO `products` (`product_name`,`product_price`,`product_desc`, `purchased_date`) VALUES ('Barbell','10000','good barbell', current_timestamp());

// user queries table

 CREATE TABLE `a4s_db`.`user_queries` ( `user_query_id` INT NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(255) NOT NULL ,  `user_email` VARCHAR(255) NOT NULL ,  `user_phone` BIGINT NOT NULL ,  `user_query` LONGTEXT NOT NULL ,    PRIMARY KEY  (`user_query_id`)) ENGINE = InnoDB;

 // insert user queries data

 INSERT INTO `user_queries` (`user_name`, `user_email`, `user_phone`, `user_query`) VALUES ('Raj', 'raj@gmail.com', '9449494261', 'I want to join your team');
 