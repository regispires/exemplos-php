DROP TABLE IF EXISTS pessoas;

CREATE TABLE pessoas (
  id int PRIMARY KEY AUTO_INCREMENT,
  nome varchar(50),
  fone varchar(10),
  email varchar(100)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
    id int primary key auto_increment,
    nome varchar(50),
    login varchar(40) unique,
    senha varchar(40),
    perfil varchar(20)
) ENGINE=InnoDB;

INSERT INTO pessoas (nome, fone, email) VALUES
('João', '8832123456', 'joao@gmail.com'),
('Maria', '8845321234', 'maria@gmail.com'),
('José', '8812345678', 'jose@gmail.com');

INSERT INTO usuarios (nome, login, senha, perfil) VALUES
('Regis Pires Magalhães', 'regis', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
('João Lopes Soares', 'joaolopes', '8cb2237d0679ca88db6464eac60da96345513964', 'user');
