CREATE DATABASE studi_kasus_php_database_mysql_mariadb;

CREATE TABLE todolist
(
    id INT NOT NULL AUTO_INCREMENT,
    todo VARCHAR(511) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

SHOW TABLES;

DESC todolist;