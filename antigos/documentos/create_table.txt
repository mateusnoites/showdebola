CREATE DATABASE showdebola;

USE showdebola;

CREATE TABLE genero (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL
);

CREATE TABLE jogo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  avaliacao INT NOT NULL,
  descricao VARCHAR(255),
  genero_id INT,
  FOREIGN KEY (genero_id) REFERENCES genero(id)
);
