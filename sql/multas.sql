DROP DATABASE multas;
CREATE DATABASE multas;
USE multas;
CREATE TABLE administrador (
  user varchar(100) PRIMARY KEY,
  pass varchar(100)
);
CREATE TABLE  coche  (
  matricula  varchar(7) PRIMARY KEY,
  pass varchar(100) NOT NULL,
  propietario  varchar(200) NOT NULL
) ;

CREATE TABLE  multa (
   id_multa   int(11)  NOT NULL AUTO_INCREMENT,
   fecha  date NOT NULL,
   tipo_multa varchar(1) NOT NULL,
   pagada  boolean NOT NULL, 
   matricula  varchar(7) NOT NULL, 
   PRIMARY KEY (id_multa), 
   FOREIGN KEY (matricula) REFERENCES coche(matricula)  
) ;

INSERT INTO administrador VALUES ('admin', 'admin'); 
