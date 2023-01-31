DROP DATABASE IF EXISTS marinha;

CREATE DATABASE marinha;
USE marinha;

ALTER DATABASE marinha DEFAULT
CHARACTER SET Utf8 COLLATE Utf8_general_ci;


CREATE TABLE enviarmail (
  idemail        int(11) AUTO_INCREMENT,
email       varchar(120) NOT NULL,

  PRIMARY KEY (idemail));


CREATE TABLE user (
  userid int(11) NOT NULL,
  username varchar(30) NOT NULL,
  password varchar(150) NOT NULL,
 
  access int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE user
  ADD PRIMARY KEY (userid);

ALTER TABLE user
  MODIFY userid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


INSERT INTO user (userid, username, password, access) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

CREATE TABLE questionario(
  idresposta int(11) AUTO_INCREMENT,
  genero varchar(9) NOT NULL,
  idade int(2) NOT NULL,
  escolaridade varchar(100) NOT NULL,
  primeiravisita varchar(3) NOT NULL,
  ultimavisita varchar(100) NOT NULL,
  fatoresvisita varchar(100) NOT NULL,
  razaovisita varchar(100) NOT NULL,
  PRIMARY KEY(idresposta)
 );