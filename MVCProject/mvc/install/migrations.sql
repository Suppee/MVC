-- The migrations file exists so that everyone can run the script and get the same database
-- on their local machine.

DROP DATABASE IF EXISTS mvc;
CREATE DATABASE mvc;
USE mvc;

CREATE TABLE user (
    user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(126) UNIQUE NOT NULL,
    email VARCHAR(126) UNIQUE NOT NULL,
    password VARCHAR(126) NOT NULL
);

CREATE TABLE img (
    image_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(126) NOT NULL,
    title VARCHAR(40) NOT NULL,
    description VARCHAR(200),
    releasetime TIMESTAMP DEFAULT NOW(),
    image MEDIUMBLOB NOT NULL
);