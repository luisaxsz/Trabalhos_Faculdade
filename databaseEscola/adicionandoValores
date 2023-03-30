SELECT * 
FROM aluno
WHERE idade <= 11
;
SELECT * 
FROM aluno
WHERE idade > 10 AND sexo = 'M'
;

SELECT * 
FROM aluno
WHERE idade between 10  AND 15
;

SELECT * 
FROM aluno
WHERE sexo  in ('F')
;

SELECT * 
FROM aluno
WHERE sexo  in ('M')
;

SELECT * FROM responsavel_financeiro; 


INSERT INTO aluno VALUES
 (111 , 'CLARA' , 12, 'F', 111, 'DOCA', 1 , 'UMARIZAL', '111'), 
 (222 , 'PAULO' , 13, 'M', 222, 'ALMIRANTE', 3 , 'MARCO','222'),
 (333 , 'JUNIO' , 14, 'M', 333, 'DUQUE', 4 , 'MARCO', '333' ),
 (444 , 'BARBARA' , 15, 'F', 444, 'ALCINDO', 5 , 'PEDREIRA', '444'),
 (555 , 'FERNANDA' , 16 , 'F', 555, 'CASTANHEIRA', 6 , 'ANANIDEUA', '555')
 ;
 
INSERT INTO responsavel_financeiro VALUES
 ('111' , 'JULIETA' , 'BANCARIA', 'TIA', 111, 'AA@AA' ), 
 ('222', 'ROBERTA', 'ADVOGADA', 'MÃE', 222, 'BB@BB'),
 ('333' , 'JULIO', 'MECANICO', 'TIO', 333, 'CC@CC'), 
 ('444' , 'PAULO', 'PROFESSOR', 'AVÔ', 444, 'DD@DD'),
 ( '555' , 'JULIA', 'CANTORA', 'PRIMA', 555, 'EE@EE')
 ;
 
 UPDATE aluno 
 SET idade=18
 WHERE matricula=111;
 
 ROLLBACK;
 
 SELECT * 
 FROM aluno 
 WHERE idade in (14,8,9,10);
