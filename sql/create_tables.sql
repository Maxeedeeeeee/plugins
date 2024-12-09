CREATE DATABASE PvpClubPlugins;

USE PvpClubPlugins;

CREATE TABLE plugins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    version_from VARCHAR(10) NOT NULL,
    version_to VARCHAR(10),
    java_version VARCHAR(20) NOT NULL,
    download_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

