DROP DATABASE educapp;

CREATE DATABASE educapp;
USE educapp;

CREATE TABLE cursos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(10)
);

CREATE TABLE alumnos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50),
    curso_id int
);

CREATE TABLE materias (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50)
);

CREATE TABLE notas (
    id int PRIMARY KEY AUTO_INCREMENT,
    alumno_id int,
    materia_id int,
    trimestre int,
    valor int
);


CREATE TABLE inasistencias (
    id int PRIMARY KEY AUTO_INCREMENT,
    alumno_id int,
    fecha date
);





INSERT INTO cursos (nombre) VALUES
    ('1° A'),
    ('1° B');


INSERT INTO alumnos (nombre, curso_id) VALUES
	('Fernández, Pablo', 1),
    ('Rodríguez, Agustín', 1),
    ('Domínguez, Lucía', 1),
    ('Zapata, Emilia', 1),
    ('Aranda, Lucía', 2),
    ('Batista, Sabrina', 2),
    ('Pérez, Rubén', 2),
    ('Sánchez, Ignacio', 2);


INSERT INTO materias (nombre) VALUES
	('Matemática'),
    ('Lengua y literatura'),
    ('Biología'),
    ('Geografía'),
    ('Historia'),
    ('Ciudadanía'),
    ('Educación física'),
    ('Inglés');
