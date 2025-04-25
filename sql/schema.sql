
DROP TABLE IF EXISTS classes;
DROP TABLE IF EXISTS exams;

CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    score DECIMAL(2,1) NOT NULL
);

CREATE TABLE exams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type ENUM('selección', 'pregunta y respuesta', 'completación') NOT NULL
);

INSERT INTO classes (name, score) VALUES 
('Vocabulario sobre Trabajo en Inglés', 5),
('Conversaciones de Trabajo en Inglés', 5),
('Inglés Básico: Saludos y Presentaciones', 4.5),
('Gramática Intermedia en Inglés', 4.8),
('Inglés Avanzado para Negocios', 5),
('Inglés para Viajes y Turismo', 4.7),
('Clases de Conversación Avanzada', 5);

INSERT INTO exams (name, type) VALUES 
('Trabajos y ocupaciones en Inglés', 'selección'),
('Examen Final de Gramática Básica', 'pregunta y respuesta'),
('Prueba de Comprensión Auditiva', 'selección'),
('Evaluación de Conversación Oral', 'completación'),
('Examen de Inglés para Negocios', 'selección'),
('Test de Vocabulario Turístico', 'pregunta y respuesta');
