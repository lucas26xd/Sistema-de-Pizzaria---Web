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
  </head>

	<body>

  	<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              <li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Home')) echo 'active font-weight-bold'; ?>" href="<?=site_url('admin/home')?>">Home</a>
              </li>
              <!--li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Pedidos')) echo 'active font-weight-bold'; ?>" href="<?=site_url('admin/pedidos')?>">Pedidos</a>
              </li-->
              <li class="nav-item dropdown <?php if (!strcmp($title,'Cliente') || !strcmp($title,'Produto')) echo 'active font-weight-bold'; ?>">
                <a class="nav-link dropdown-toggle " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="<?=base_url('admin/produtos')?>">Produtos</a>
                  <a class="dropdown-item" href="<?=base_url('admin/clientes')?>">Clientes</a>
                  <!--a class="dropdown-item" href="<?=base_url('#')?>">Endereços</a-->
                </div>
              </li>            
            </ul>
            
            <a class="btn btn-outline-info mr-1" href="https://github.com/lucas26xd/Projeto-Final-TecWeb" target="_blank" title="GitHub">
              <i class="fab fa-github fa-lg"></i>
            </a>
            <a class="btn btn-outline-success my-2 my-sm-0" href="<?=site_url('admin/logout')?>" role="button">
              <i class="fas fa-user-lock"></i> Logout
            </a>

          </div>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
