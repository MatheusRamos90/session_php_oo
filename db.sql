CREATE TABLE users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(15) NOT NULL,
  email VARCHAR(15) NOT NULL,
  password VARCHAR(100) NOT NULL
)DEFAULT CHARSET utf8;

SELECT * FROM users;

INSERT INTO users(name,email,password) VALUES('Administrator','admin@mail.com','123456');