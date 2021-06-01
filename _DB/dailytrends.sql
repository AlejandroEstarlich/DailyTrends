CREATE DATABASE Feed CHARACTER SET utf8 COLLATE utf8_general_ci;

USE Feed;

CREATE TABLE news(
id int(255) auto_increment not null,
title varchar(255),
body text,
image varchar(255),
source varchar(255),
publisher varchar(255),
created_at datetime,
updated_at datetime,
CONSTRAINT pk_news PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE users(
id int(255) auto_increment not null,
name varchar(255),
email varchar(255),
password varchar(255),
role varchar(255),
remember_token varchar(255),
created_at datetime,
updated_at datetime,
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDB