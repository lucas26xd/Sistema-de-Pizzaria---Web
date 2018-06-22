CREATE DATABASE pizzaria DEFAULT CHARACTER SET utf8;
USE pizzaria;

DROP TABLE IF EXISTS sugestao;
DROP TABLE IF EXISTS endereco;
DROP TABLE IF EXISTS cliente;
DROP TABLE IF EXISTS produto;
DROP TABLE IF EXISTS itensPedido;
DROP TABLE IF EXISTS pedido;

CREATE TABLE cliente (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(45) NOT NULL,
  telefone varchar(16) NOT NULL,
  email varchar(45) NOT NULL,
  senha varchar(45) NOT NULL,
  qtdPedidos int(11) NOT NULL DEFAULT '0',
  lastVisita datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id));

INSERT INTO cliente
  VALUES (27,'Lucas Costa Santos','(88) 9966-4683','lucas26xd@hotmail.com','7c222fb2927d828af22f592134e8932480637c0d',0,'2018-05-20 22:26:44'),
         (28,'Ângela','(88) 99920-3298','angelam0952@gmail.com','a7d579ba76398070eae654c30ff153a4c273272a',0,'2018-05-20 22:34:41'),
         (30,'Tadeu Jerônimo','(88) 98765-4321','tadeus.jeronimo@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b',0,'2018-05-20 22:45:08');

CREATE TABLE endereco (
  id int(11) NOT NULL AUTO_INCREMENT,
  clienteID int(11) NOT NULL,
  rua varchar(45) NOT NULL,
  num varchar(5) NOT NULL DEFAULT 'S/N',
  bairro varchar(45) NOT NULL,
  cidade varchar(45) NOT NULL,
  PRIMARY KEY (id),
  KEY fk_endereco_cliente_idx (clienteID),
  CONSTRAINT fk_endereco_cliente
  FOREIGN KEY (clienteID)
  REFERENCES cliente (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

INSERT INTO endereco
  VALUES (4,27,'Rua 8 de janeiro, 106','106','brasilia','CRUZ'),
         (5,28,'Rua de teste 1','100','progresso','Hidrolândia'),
         (6,28,'Rua do arco','1024','centro','Sobral'),
         (8,30,'Rua Cel. Estanislau Frota','563','Centro','Sobral');

CREATE TABLE pedido (
  id int(11) NOT NULL AUTO_INCREMENT,
  clienteID int(11) NOT NULL,
  valor float NOT NULL DEFAULT '0',
  data datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status enum('ENTREGUE','CANCELADO','EM ANDAMENTO','NO CARRINHO') CHARACTER SET utf8 NOT NULL DEFAULT 'No CARRINHO',
  PRIMARY KEY (id),
  KEY fk_pedido_cliente_idx (clienteID),
  CONSTRAINT fk_pedido_cliente
  FOREIGN KEY (clienteID)
  REFERENCES cliente (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

INSERT INTO pedido
  VALUES (1,27,0,'2018-06-19 22:08:47','ENTREGUE'),
         (2,27,0,'2018-06-19 22:10:41','EM ANDAMENTO'),
         (3,28,0,'2018-06-19 22:10:44','NO CARRINHO');

CREATE TABLE produto (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(45) NOT NULL,
  valorPequena float NOT NULL DEFAULT '0',
  valorMedia float NOT NULL DEFAULT '0',
  valorGrande float NOT NULL DEFAULT '0',
  valorFamilia float NOT NULL DEFAULT '0',
  diponivel tinyint(1) NOT NULL DEFAULT '1',
  categoria enum('P','D','C','O') NOT NULL,
  PRIMARY KEY (id));

INSERT INTO produto
  VALUES (1,'Mussarela',10,12,20,22,1,'P'),
         (2,'Carne de Sol',12,14,24,28,1,'P'),
         (3,'Bacon',12,14,24,28,1,'P'),
         (4,'Portuguesa',10,14,20,22,1,'P'),
         (5,'4 Queijos',10,12,18,20,1,'P'),
         (6,'Marguerita',10,12,20,22,1,'P'),
         (7,'Calabresa',10,12,20,22,1,'P'),
         (8,'Frango c/ Catupiry',10,14,20,24,1,'P'),
         (9,'Mista',10,12,20,22,1,'P'),
         (10,'Cheddar',10,12,18,20,1,'P'),
         (11,'Camarão',15,17,25,32,1,'P'),
         (12,'Chocolate',10,12,0,0,1,'D'),
         (13,'Brigadeiro',10,12,0,0,1,'D'),
         (14,'Romeu e Julieta',10,12,0,0,1,'D'),
         (15,'Banana c/ Canela',10,12,0,0,1,'D'),
         (16,'Mussarela',6,10,0,0,1,'C'),
         (17,'Calabresa',6,10,0,0,1,'C'),
         (18,'Carne de Sol',6,10,0,0,1,'C');

CREATE TABLE itensPedido (
  id int(11) NOT NULL AUTO_INCREMENT,
  pedidoID int(11) NOT NULL,
  prodID int(11) NOT NULL,
  qtd float NOT NULL DEFAULT '0',
  valor float NOT NULL DEFAULT '0',
  PRIMARY KEY (id),
  KEY fk_itensPedido_pedido_idx (pedidoID),
  KEY fk_itensPedido_prod_idx (prodID),
  CONSTRAINT fk_itensPedido_pedido
  FOREIGN KEY (pedidoID)
  REFERENCES pedido (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT fk_itensPedido_prod
  FOREIGN KEY (prodID)
  REFERENCES produto (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

INSERT INTO itensPedido
  VALUES (1,3,2,1,0),(2,3,1,2,0);

CREATE TABLE sugestao (
  id int(11) NOT NULL AUTO_INCREMENT,
  clienteID int(11) NOT NULL,
  msg text COLLATE utf8_bin NOT NULL,
  data datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY fk_sugestao_cliente_idx (clienteID),
  CONSTRAINT fk_sugestao_cliente 
  FOREIGN KEY (clienteID)
  REFERENCES cliente (id)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION);

CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    login VARCHAR(45) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    lastVisita DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id));

INSERT INTO usuario (nome, login, senha)
  VALUES ('Administrador', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'); -- login: admin e senha: admin

CREATE USER 'admin'@'localhost' IDENTIFIED BY '4dm1n';
GRANT ALL PRIVILEGES ON pizzaria.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;
