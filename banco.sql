CREATE DATABASE pizzaria DEFAULT CHARACTER SET utf8 ;

CREATE TABLE pizzaria.cliente (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  telefone VARCHAR(16) NOT NULL,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  qtdPedidos INT NOT NULL,
  lastVisita DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id));

CREATE TABLE pizzaria.pedido (
  id INT NOT NULL AUTO_INCREMENT,
  clienteID INT NOT NULL,
  valor FLOAT NOT NULL,
  data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status ENUM('ENTREGUE', 'CANCELADO', 'FABRICAÇÃO') NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_pedido_cliente_idx (clienteID ASC),
  CONSTRAINT fk_pedido_cliente
    FOREIGN KEY (clienteID)
    REFERENCES pizzaria.cliente (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE pizzaria.endereco (
  id INT NOT NULL AUTO_INCREMENT,
  clienteID INT NOT NULL,
  rua VARCHAR(45) NOT NULL,
  num VARCHAR(5) NOT NULL,
  bairro VARCHAR(45) NOT NULL,
  cidade VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_endereco_cliente_idx (clienteID ASC),
  CONSTRAINT fk_endereco_cliente
    FOREIGN KEY (clienteID)
    REFERENCES pizzaria.cliente (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE pizzaria.produto (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  valor FLOAT NOT NULL,
  diponivel TINYINT(1) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE pizzaria.itensPedido (
  id INT NOT NULL AUTO_INCREMENT,
  pedidoID INT NOT NULL,
  prodID INT NOT NULL,
  qtd FLOAT NOT NULL,
  valor FLOAT NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_itensPedido_pedido_idx (pedidoID ASC),
  INDEX fk_itensPedido_prod_idx (prodID ASC),
  CONSTRAINT fk_itensPedido_pedido
    FOREIGN KEY (pedidoID)
    REFERENCES pizzaria.pedido (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_itensPedido_prod
    FOREIGN KEY (prodID)
    REFERENCES pizzaria.produto (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE pizzaria.sugestao (
  id INT NOT NULL,
  clienteID INT NOT NULL,
  msg TEXT(500) NOT NULL,
  data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY ('id'));

  CREATE USER 'admin'@'localhost' IDENTIFIED BY '4dm1n';
  GRANT ALL PRIVILEGES ON pizzaria.* TO 'admin'@'localhost';
  FLUSH PRIVILEGES;
