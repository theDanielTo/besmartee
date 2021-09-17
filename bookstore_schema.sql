CREATE TABLE `book` (
	`book_id` INT NOT NULL AUTO_INCREMENT,
	`title` varchar(255) NOT NULL,
	`author_id` INT NOT NULL,
	`categories` INT NOT NULL AUTO_INCREMENT,
	`published_date` DATE NOT NULL,
	`quantity` INT NOT NULL,
	`is_used` BOOLEAN NOT NULL,
	`price` varchar(255) NOT NULL,
	PRIMARY KEY (`book_id`)
);

CREATE TABLE `authors` (
	`book_id` INT NOT NULL AUTO_INCREMENT,
	`author_id` INT NOT NULL,
	PRIMARY KEY (`book_id`,`author_id`)
);

CREATE TABLE `author` (
	`author_id` INT NOT NULL UNIQUE,
	`name` varchar(255) NOT NULL
);

CREATE TABLE `orders` (
	`order_id` INT NOT NULL AUTO_INCREMENT,
	`book_id` INT NOT NULL,
	PRIMARY KEY (`order_id`)
);

CREATE TABLE `orderDetails` (
	`order_id` INT NOT NULL,
	`customer_id` INT NOT NULL,
	`total_cost` INT NOT NULL,
	`order_date` DATETIME NOT NULL,
	PRIMARY KEY (`order_id`)
);

CREATE TABLE `customer` (
	`customer_id` INT NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL
);

ALTER TABLE `authors` ADD CONSTRAINT `authors_fk0` FOREIGN KEY (`book_id`) REFERENCES `book`(`book_id`);

ALTER TABLE `authors` ADD CONSTRAINT `authors_fk1` FOREIGN KEY (`author_id`) REFERENCES `author`(`author_id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`book_id`) REFERENCES `book`(`book_id`);

ALTER TABLE `orderDetails` ADD CONSTRAINT `orderDetails_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`order_id`);

ALTER TABLE `orderDetails` ADD CONSTRAINT `orderDetails_fk1` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`customer_id`);







