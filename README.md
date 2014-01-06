Exemplos PHP
============
Neste projeto estão alguns exemplos de pequenas aplicações PHP que usamos em sala de aula.  
A seguir elas são listadas em ordem de complexidade (da mais simples à mais complexa).

Algumas aplicações requerem o database 'prog_web' criado no MySQL.
Esse database pode ser gerado a partir do seguinte script:

```sql
CREATE DATABASE prog_web DEFAULT CHARSET utf8;

USE prog_web;

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

CREATE TABLE usuarios (
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50),
    login varchar(40) UNIQUE,
    senha varchar(40),
    perfil varchar(20)
) ENGINE=InnoDB;

INSERT INTO usuarios (id, nome, login, senha, perfil) VALUES
(1, 'Regis Pires Magalhães', 'regis', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(2, 'João Lopes Soares', 'joaolopes', '8cb2237d0679ca88db6464eac60da96345513964', 'user');
```

soma
-----
Recebe dois números e exibe sua soma.

login
-----
Login simples usando PHP. Usuário e senha definidos no código-fonte da aplicação. 
   
crud
-----
CRUD simples em PHP.

mvc1
-----
Aplicação MVC usando um mini-framework feito com a aplicação.

mvc2
-----
Evolução do mvc1.

hello-ci
-----
Hello World com CodeIgniter.

hello2-ci
-----
Evolução do hello-ci.

mvc-ci
-----
Aplicação CRUD MVC usando o CodeIgniter. A reescrita de URL deve estar habilitada no Servidor Web.

mvc-ci2
-----
Evolução de mvc-ci com formulário de busca e controller chamado 'bd' para executar Script de criação de tabela e povoamento do Banco de Dados. Para usar o controller bd, acesse: http://localhost/mvc-ci2/bd/

mvc-ci3
-----
Evolução de mvc-ci2 com paginação de pessoas.

mvc-ci4
-----
Evolução de mvc-ci3 com exibição de mensagens (flashdate) e login simples sem uso do banco de dados.
O controlador MY_Controller (application/core/MY_Controller.php) serve apenas para forçar a checagem de estar ou não logado. 
Se o usuário não estiver logado, ele redireciona o usuário para o fazer o login.
Os controladores que herdam de MY_Controller recebem automaticamente essa importante funcionalidade.

