DROP DATABASE gestionalumnos;

CREATE DATABASE gestionalumnos;
USE gestionalumnos;

CREATE TABLE alumnos (
	id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50)
);

INSERT INTO alumnos (nombre) VALUES
	('Fernández, Pablo'),
    ('Rodríguez, Agustín'),
    ('Domínguez, Lucía'),
    ('Zapata, Emilia');
    
CREATE TABLE materias (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50)
);

INSERT INTO materias (nombre) VALUES
	('Matemática'),
    ('Lengua y literatura'),
    ('Biología'),
    ('Geografía'),
    ('Historia'),
    ('Ciudadanía'),
    ('Educación física'),
    ('Inglés');