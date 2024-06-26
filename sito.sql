CREATE DATABASE hw1;
USE hw1;

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
SELECT * FROM users;

-- Crea la tabella 'favorites'
CREATE TABLE IF NOT EXISTS favorites (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    album_id VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
SELECT * FROM favorites;