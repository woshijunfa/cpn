ALTER TABLE `vpn_order` 
ADD COLUMN `time_type` ENUM('month', 'year') NOT NULL DEFAULT 'year' AFTER `user_id`;

