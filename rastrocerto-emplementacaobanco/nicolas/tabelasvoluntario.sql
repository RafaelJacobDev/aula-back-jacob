CREATE DATABASE sistema_voluntarios;
USE sistema_voluntarios;

CREATE TABLE voluntarios (
    id_voluntario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE
);


CREATE TABLE voluntario_dev (
    id_dev INT AUTO_INCREMENT PRIMARY KEY,
    id_voluntario INT,
    area_interesse VARCHAR(100) NOT NULL,
    
    FOREIGN KEY (id_voluntario) REFERENCES voluntarios(id_voluntario)
    ON DELETE CASCADE
);

CREATE TABLE voluntario_lar_temporario (
    id_lar INT AUTO_INCREMENT PRIMARY KEY,
    id_voluntario INT,
    disponibilidade VARCHAR(100),
    endereco VARCHAR(255),
    tipo_animal VARCHAR(100),

    FOREIGN KEY (id_voluntario) REFERENCES voluntarios(id_voluntario)
    ON DELETE CASCADE
);

CREATE TABLE voluntario_resgate (
    id_resgate INT AUTO_INCREMENT PRIMARY KEY,
    id_voluntario INT,
    area_atuacao VARCHAR(100),

    FOREIGN KEY (id_voluntario) REFERENCES voluntarios(id_voluntario)
    ON DELETE CASCADE
);
