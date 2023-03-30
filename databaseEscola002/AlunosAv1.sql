SELECT * FROM mydb.aluno;

USE mydb;

INSERT INTO aluno VALUES 
(1 ,'João da Silva',9 , 'M', 'Rua A', 2014, 'Apto 1202', 1),
(2 ,'Belisa Viana',6 , 'F','Rua B', 222, 'Bloco 5',2),
(3 ,'Carlos dos Santos',9, 'M', 'Rua C', 74, 'Entre Rua x e Y ',3),
(4 ,'Ana Clara Moura',10,'F', 'Rua D', 25, 'n/a',4),
(5 ,'Bianca Rendeiro', 7, 'F', 'Rua E', 1420, 'Apto 10',5),
(6 ,'Daniel Viana',11, 'M', 'Rua F', 222, 'n/a',1),
(7 ,'Pedro Amaral', 12, 'M', 'Rua G', 33, 'Apto 28',2),
(8 ,'Carla Sousa', 5, 'F', 'Rua H', 44, 'Bloco F',3),
(9 ,'Fabiola Valeria',5, 'F', 'Rua I', 44, 'n/a',4),
(10 ,'Paulo Roberto',15, 'M', 'Rua J', 77, 'Bloco 1',5);

SELECT nome 
FROM aluno
WHERE idade >= 8 AND sexo = 'M';

SELECT mat,nome,rua,numero,complemento
FROM aluno
WHERE nome LIKE '_a%';

SELECT COUNT(sexo) FROM aluno;

SELECT aluno.nome, turma.descrição_turma 
FROM aluno 
JOIN turma 
ON aluno.turma_cod = turma.cod;

