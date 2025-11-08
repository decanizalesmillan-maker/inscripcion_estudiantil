CREATE DATABASE IF NOT EXISTS inscripcion_db;
USE inscripcion_db;

CREATE TABLE Estudiantes (
  id_estudiante INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL
);

CREATE TABLE Cursos (
  id_curso INT AUTO_INCREMENT PRIMARY KEY,
  nombre_del_curso VARCHAR(100) NOT NULL,
  descripcion TEXT,
  creditos INT NOT NULL
);

CREATE TABLE Inscripciones (
  id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
  id_estudiante INT NOT NULL,
  id_curso INT NOT NULL,
  fecha_inscripcion DATE NOT NULL,
  FOREIGN KEY (id_estudiante) REFERENCES Estudiantes(id_estudiante),
  FOREIGN KEY (id_curso) REFERENCES Cursos(id_curso)
);
