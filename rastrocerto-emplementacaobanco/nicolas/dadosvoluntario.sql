INSERT INTO voluntarios (nome, email)
VALUES ('Nome Usuario', 'email@email.com');

SET @id_voluntario = LAST_INSERT_ID();

INSERT INTO voluntario_dev (id_voluntario, area_interesse)
VALUES (@id_voluntario, 'Front End');


INSERT INTO voluntarios (nome, email)
VALUES ('Nome Usuario', 'email@email.com');

SET @id_voluntario = LAST_INSERT_ID();

INSERT INTO voluntario_lar_temporario 
(id_voluntario, disponibilidade, endereco, tipo_animal)
VALUES 
(@id_voluntario, 'Manhã', 'Rua Exemplo 123', 'Cachorro');


INSERT INTO voluntarios (nome, email)
VALUES ('Nome Usuario', 'email@email.com');

SET @id_voluntario = LAST_INSERT_ID();

INSERT INTO voluntario_resgate (id_voluntario, area_atuacao)
VALUES (@id_voluntario, 'Resgate Urbano');
