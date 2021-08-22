CREATE DATABASE softblog;

USE softblog;

CREATE TABLE users(
    id int NOT NULL AUTO_INCREMENT,
    firstname varchar(200),
    lastname varchar(200),
    email varchar(200) NOT NULL UNIQUE,
    username varchar(100) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    avatar varchar(255),
    about text(500),
    status tinyint DEFAULT 1,
    created_at DATETIME NOT NULL,
    modified_at DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE roles(
  id int NOT NULL AUTO_INCREMENT,
  name varchar(200) NOT NULL UNIQUE,
  description varchar(255),
  created_at DATETIME NOT NULL,
  modified_at DATETIME,
  PRIMARY KEY (id)
);

CREATE TABLE role_users(
    user_id int,
    role_id int,
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(role_id) REFERENCES roles(id),
    PRIMARY KEY (user_id, role_id)
);

CREATE TABLE categories(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(200) NOT NULL UNIQUE,
    created_at DATETIME NOT NULL,
    modified_at DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE tags(
   id int NOT NULL AUTO_INCREMENT,
   name varchar(100) NOT NULL UNIQUE,
   created_at DATETIME NOT NULL,
   modified_at DATETIME,
   PRIMARY KEY (id)
);

CREATE TABLE posts(
    id int NOT NULL AUTO_INCREMENT,
    user_id int NOT NULL,
    title varchar(150) NOT NULL UNIQUE,
    slug varchar(150) NOT NULL,
    excerpt varchar(100) NOT NULL,
	body text NOT NULL,
	featured_image varchar(255),
    post_status tinyint DEFAULT 0,
    created_at DATETIME NOT NULL,
    modified_at DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE post_categories(
    post_id int,
    category_id int,
    FOREIGN KEY(post_id) REFERENCES posts(id),
    FOREIGN KEY(category_id) REFERENCES categories(id),
    PRIMARY KEY (post_id, category_id)
);

CREATE TABLE post_tags(
    post_id int,
    tag_id int,
    FOREIGN KEY(post_id) REFERENCES posts(id),
    FOREIGN KEY(tag_id) REFERENCES tags(id),
    PRIMARY KEY (post_id, tag_id)
);