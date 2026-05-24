-- database.sql

CREATE DATABASE zoulink;

USE zoulink;

CREATE TABLE links(
  id INT AUTO_INCREMENT PRIMARY KEY,
  long_url TEXT NOT NULL,
  short_code VARCHAR(50) NOT NULL UNIQUE
);