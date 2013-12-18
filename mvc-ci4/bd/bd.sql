DROP TABLE IF EXISTS pessoas;

CREATE TABLE pessoas (
  id int PRIMARY KEY AUTO_INCREMENT,
  nome varchar(50),
  fone varchar(10),
  email varchar(100)
) ENGINE=InnoDB;

INSERT INTO pessoas (nome, fone, email) VALUES
('João', '8832123456', 'joao@gmail.com'),
('Maria', '8845321234', 'maria@gmail.com'),
('José', '8812345678', 'jose@gmail.com');