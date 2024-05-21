CREATE TABLE tarefa(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    descricao VARCHAR(255),
    duracao DOUBLE DEFAULT 0.0
); 

