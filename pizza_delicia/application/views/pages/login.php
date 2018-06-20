      <style>
        form {
          -ms-flex-align: center;
          align-items: center;
          padding-top: 400px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }
      </style>

      <form method="post" class="form-signin" action="<?=site_url('principal')?>">
        <div class="text-center mb-4">
          <img class="mb-4" src="<?=base_url('static/imagens/logo.png');?>" alt="Pizza Delícia" height="72">
          <h1 class="h3 mb-3 font-weight-normal"><?=$title?> - Pizza Delícia</h1>
        </div>

        <div class="form-label-group">
          <label for="login">E-mail:</label><br>
          <input type="email" id="login" class="form-control" placeholder="E-mail" required autofocus>
        </div>
          <br>
        <div class="form-label-group">
          <label for="senha">Senha:</label><br>
          <input type="password" id="senha" class="form-control" placeholder="Senha" required>
        </div>
          <br>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar meus dados
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
      </form>

      <div class="container">
	<div class="page-header">
		<h1>Trabalhando com sessões no CodeIgniter</h1>
	</div>
	<?php if ($this->session->flashdata('sessao-encerrada') == TRUE): ?>
		<div class="alert alert-info"><?= $this->session->flashdata('sessao-encerrada'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->tempdata('sessao-temporizada') == TRUE): ?>
		<div class="alert alert-warning">Você possui uma sessão temporizada que vai durar <?= $this->session->tempdata('sessao-temporizada'); ?> segundos.</div>
	<?php endif; ?>
	<?php if(!$this->session->has_userdata('usuario')){ ?>
	<p class="lead">
		Registre-se para prosseguir.
	</p>
	<p>
		<em>O registro é apenas na sessão, seus dados não serão armazenados em banco de dados.</em>
	</p>
	<form action="<?=base_url('logar')?>" method="POST">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required/>
		</div>
		<div class="form-group">
			<input type="submit" value="Registrar" class="btn btn-success" />
		</div>
	</form>
<?php } else{ ?>
<p class="lead">Olá <strong><?=$this->session->userdata('usuario')?></strong>!</p>
<p>Para encerrar sua sessão, clique <a href="<?=base_url('encerrar-sessao')?>">aqui</a>.</p>

<p>
	Clique <a href="<?=base_url('sessao-temporizada')?>">aqui</a> para criar uma sessão que vai durar apenas 10 segundos.
</p>

<p>
	Clique <a href="<?=base_url('encerrar-sessoes')?>">aqui</a> para encerrar todas as sessões.
</p>
<?php } ?>
</div>
