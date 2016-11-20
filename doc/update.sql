ALTER TABLE `vpn_order` 
ADD COLUMN `time_type` ENUM('month', 'year') NOT NULL DEFAULT 'year' AFTER `user_id`;

ALTER TABLE `idea`.`user` 
ADD COLUMN `testcount` INT NOT NULL DEFAULT 0 AFTER `admin`;
