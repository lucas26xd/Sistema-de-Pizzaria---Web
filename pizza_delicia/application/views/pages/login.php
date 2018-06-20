      <style>
        form {
          -ms-flex-align: center;
          align-items: center;
          padding-top: 400px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }
      </style>


<div class="container">

	<?php if ($this->session->flashdata('sessao-encerrada') == TRUE): ?>
		<div class="alert alert-info"><?= $this->session->flashdata('sessao-encerrada'); ?></div>
	<?php endif; ?>

	<?php if(!($this->session->has_userdata('usuario') && ($this->session->has_userdata('senha')))) { ?>

	<form action="<?=base_url('logar')?>" method="POST" class="form-signin">
    <div class="text-center mb-4">
      <img class="mb-4" src="<?=base_url('static/imagens/logo.png');?>" alt="Pizza Delícia" height="72">
      <h1 class="h3 mb-3 font-weight-normal"><?=$title?> - Pizza Delícia</h1>
    </div>
    <div class="form-label-group">
			<label>E-mail: </label><br>
			<input type="email" name="nome" class="form-control" required/>
		</div>
    <div class="form-label-group">
			<label>Senha: </label><br>
			<input type="password" name="senha" class="form-control" required/>
		</div>
		<div class="form-group">
			<input type="submit" value="Registrar" class="btn btn-success" />
		</div>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
	</form>
<?php } else { ?>
  <?php if($this->session->userdata('id') == '0'){ ?>
    <p>Usuário/Senha incorreto</p>
    <form action="<?=base_url('logar')?>" method="POST" class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="<?=base_url('static/imagens/logo.png');?>" alt="Pizza Delícia" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?=$title?> - Pizza Delícia</h1>
      </div>
      <div class="form-label-group">
  			<label>E-mail: </label><br>
  			<input type="email" name="nome" class="form-control" required/>
  		</div>
      <div class="form-label-group">
  			<label>Senha: </label><br>
  			<input type="password" name="senha" class="form-control" required/>
  		</div>
  		<div class="form-group">
  			<input type="submit" value="Registrar" class="btn btn-success" />
  		</div>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
  	</form>
  <?php } else{?>
    <p class="lead">Olá <strong><?=$this->session->userdata('usuario')?></strong>!</p>
        <p>
      Clique <a href="<?=base_url('encerrar-sessoes')?>">aqui</a> para encerrar.
     </p>
  <?php } ?>
<?php } ?>
</div>
