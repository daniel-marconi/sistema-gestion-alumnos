DROP DATABASE IF EXISTS educapp;

CREATE DATABASE educapp;
USE educapp;

CREATE TABLE cursos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(10)
);

CREATE TABLE alumnos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50),
    tipo_documento varchar(10),
    numero_documento varchar(10),
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
    primer_trimestre int,
    segundo_trimestre int,
    tercer_trimestre int
);





INSERT INTO cursos (nombre) VALUES
    ('1° A'),
    ('1° B');


INSERT INTO alumnos (nombre, tipo_documento, numero_documento, curso_id) VALUES
	('Fernández, Pablo', 'DNI', '40238795', 1),
    ('Rodríguez, Agustín', 'DNI', '39265845', 1),
    ('Domínguez, Lucía', 'DNI', '43254852', 1),
    ('Zapata, Emilia', 'DNI', '42012325', 1),
    ('Aranda, Lucía', 'DNI', '42358654', 2),
    ('Batista, Sabrina', 'DNI', '44658121', 2),
    ('Pérez, Rubén', 'DNI', '45245876', 2),
    ('Sánchez, Ignacio', 'DNI', '41254384', 2);


INSERT INTO materias (nombre) VALUES
	('Matemática'),
    ('Lengua y literatura'),
    ('Biología'),
    ('Geografía'),
    ('Historia'),
    ('Ciudadanía'),
    ('Educación física'),
    ('Inglés');
