CREATE DATABASE pousadog;
USE pousadog;

CREATE TABLE messages
(
  name VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  message VARCHAR(500) NOT NULL
);