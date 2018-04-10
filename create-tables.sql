CREATE TABLE galleryimages(
	id INT AUTO_INCREMENT,
	image VARCHAR(255) NOT NULL,
	name VARCHAR(255) NOT NULL,
	section_name VARCHAR(100) NOT NULL,
	caption VARCHAR(500),
	description TEXT(10000),
	price FLOAT(5, 2),
	in_stock BOOLEAN DEFAULT TRUE,
	PRIMARY KEY (id)
);

CREATE TABLE users(
	id INT AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(511) NOT NULL,
	PRIMARY KEY (id)
);

/* 
INSERT INTO galleryimages (image_path, item_name, caption, description, price, in_stock) VALUES (
	'C:/path.jpg', **required
	'example name', **required
	'example caption',
	'example description of item',
	'11.11'
);
*/

INSERT INTO galleryimages (image, name, section_name, caption, description, price, in_stock) VALUES ('', '', '', '', '', '', '');
