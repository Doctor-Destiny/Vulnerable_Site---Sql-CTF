-- MySQL script to create a test user table
CREATE DATABASE testsite;

USE testsite;

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  password VARCHAR(255)
);

INSERT INTO users (username, password) VALUES ('admin', 'admin123');
