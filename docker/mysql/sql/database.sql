-- CREATE DATABASE IF NOT EXISTS prod_c eolibrosyousso;

-- USE prod_ceolibrosyousso;

CREATE TABLE user(
  id          VARCHAR(40) not null,
  role        enum('user', 'admin') not null,
  username    VARCHAR(255),
  name        VARCHAR(255),
  surname     VARCHAR(255),
  email       VARCHAR(255),
  password    VARCHAR(255),
  image       VARCHAR(255),
  created_at datetime,
  CONSTRAINT pk_user PRIMARY KEY(id)
 )ENGINE=InnoDb;