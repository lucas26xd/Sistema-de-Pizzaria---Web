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

  	<header>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">

        <div class="container">
          <a class="navbar-brand" href="<?=site_url('principal')?>" title="Pizza Delícia">
            <img class="d-inline-block align-top" src="<?=base_url('static/imagens/logo.png')?>" height="60" alt="Pizza Delícia">
            <!--<strong>Pizza Delícia</strong>-->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto navbar-brand">
              <!--<li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Principal')) echo 'active font-weight-bold'; ?>" href="<?=site_url('principal')?>">Principal</a>
              </li>-->
              <li class="nav-item">
                <div class="my-2 my-sm-0 m-4 border border-danger rounded">
                  <a class="nav-link <?php if (!strcmp($title,'Cardapio')) echo 'active font-weight-bold'; ?>" href="<?=site_url('cardapio')?>"><i class="fas fa-utensils"></i><strong> Cardápio</strong></a>
                </div>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Promocao')) echo 'active font-weight-bold'; ?>" href="<?=site_url('promocao')?>">Promoções</a>
              </li>-->
              <!--<li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Pedido')) echo 'active font-weight-bold'; ?>" href="<?=site_url('pedido')?>">Realizar Pedidos</a>
              </li>-->
              <li class="nav-item">
                <div class="my-2 my-sm-0 m-4 border border-danger rounded">
                  <a class="nav-link <?php if (!strcmp($title,'Sugestao')) echo 'active font-weight-bold'; ?>" href="<?=site_url('sugestao')?>"><i class="fas fa-comment-alt"></i><strong> Sugestões</strong></a>
                <div>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Cadastro')) echo 'active font-weight-bold'; ?>" href="<?=site_url('cadastro')?>">Cadastro</a>
              </li>-->
              <!--<li class="nav-item">
                <div class="my-2 my-sm-0 m-4 border border-danger rounded">
                  <a class="nav-link <?php if (!strcmp($title,'Cliente')) echo 'active font-weight-bold'; ?>" href="<?=site_url('cliente')?>"><strong>Cliente</strong></a>
                <div>
              </li>-->
              <li class="nav-item">
                <div class="my-2 my-sm-0 m-4 border border-danger rounded">
                  <a class="nav-link <?php if (!strcmp($title,'Admin')) echo 'active font-weight-bold'; ?>" href="<?=site_url('admin')?>"><i class="fas fa-lock"></i><strong> Admin</strong></a>
                <div>
              </li>              
            </ul>
          </div>
          <a class="btn btn-outline-dark my-2 my-sm-0 m-3" href="<?=site_url('carrinho')?>" role="button">
            <i class="fas fa-shopping-cart"></i> Carrinho</a>
            <?php if(!$this->session->has_userdata('id') || $this->session->userdata('id') == 0){ ?>
          <a class="btn btn-outline-success my-2 my-sm-0" href="<?=site_url('login')?>" role="button">
            <i class="fas fa-user-circle fa-lg"></i> Login</a>
        <?php } else { ?>
        <a class="btn btn-outline-primary my-2 my-sm-0" href="<?=site_url('login')?>" role="button">
          <i class="fas fa-user-circle fa-lg"></i> Logado</a>
        <?php } ?>
        </div>

      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
