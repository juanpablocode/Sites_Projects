# DROP DATABASE PokemonGo; # APAGAR BANCO

CREATE DATABASE AngularGames; # CRIAR BANCO

USE AngularGames; # PARA USAR O DB RECENCRIADO

# SHOW TABLES; # MOSTRA AS TABELAS

CREATE TABLE Alunos (
	aluno_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	aluno_name VARCHAR(40) NOT NULL,
    aluno_email VARCHAR(40) NOT NULL,
    aluno_points INT(4) NOT NULL
);

ALTER TABLE Alunos AUTO_INCREMENT=3509;

INSERT INTO Alunos VALUES(default,'juan pablo',50);

INSERT INTO Alunos VALUES(default,'Maria',100);
SELECT * FROM Alunos;
# DROP TABLES pokemon;  # USADO APENAS PARA APAGAR TABELAS
