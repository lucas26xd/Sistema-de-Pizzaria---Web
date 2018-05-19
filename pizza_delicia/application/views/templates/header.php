<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ângela Magalhães, Lucas Santos, Tadeu Jerônimo, Kamila Farias e Hugo Sousa">
    <meta name="generator" content="Atom, Sublime e VS Code">
    <meta name="description" content="Site para pedidos em uma pizzaria">
    <meta name="keywords" content="HTML, JS, CSS, PHP, MySQL">

    <title><?=$title?> - Pizza Delícia</title>
    <link rel="shortcut icon" href="<?=base_url('static/imagens/pizza.ico')?>">

    <!-- Bootstrap CSS, FontAwesome Icons, Fonts, Custom Style -->
    <link rel="stylesheet" href="<?=base_url('static/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/css/fontawesome-all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/css/fonts.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/css/estilo.css')?>">
  </head>

	<body>
  
    <div class="container">
      <header>
        <h1 id="cabecalho">PizzaDelícia</h1>
      </header>
      <nav>
        <ul>        
          <li><a href="<?=site_url('principal')?>">Principal</a></li>
          <li><a href="<?=site_url('cardapio')?>">Cardápio</a></li>
          <li><a href="<?=site_url('promocao')?>">Promoções</a></li>
          <li><a href="<?=site_url('pedido')?>">Realizar Pedido</a></li>
          <li><a href="<?=site_url('sugestao')?>">Sugestões</a></li>
        </ul>
      </nav>

      <br>