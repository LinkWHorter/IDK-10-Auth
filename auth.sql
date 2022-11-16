CREATE DATABASE authbase;
GO
USE authbase;
GO

CREATE TABLE auth (
id int(25) NOT NULL AUTO_INCREMENT,
name varchar(50) NOT NULL,
login varchar(100) NOT NULL,
pass varchar(64) NOT NULL,
PRIMARY KEY (id)
);
GO
