DROP DATABASE IF EXISTS products;
CREATE DATABASE products;
USE products;

CREATE TABLE product (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(150),
  product_category VARCHAR(100),
  product_price DECIMAL(10,2)
);
