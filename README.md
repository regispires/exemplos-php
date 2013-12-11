Exemplos PHP
============
Neste projetos estão alguns exemplos de pequenas aplicações PHP que usamos em sala de aula.  
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
