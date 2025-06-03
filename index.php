CREATE DATABASE php_dasar;

USE php_dasar;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100)
);

INSERT INTO users (nama, email) VALUES
('Ari', 'ari@example.com'),
('Budi', 'budi@example.com');
