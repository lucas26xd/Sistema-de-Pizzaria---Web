      <style>
        form {
          -ms-flex-align: center;
          align-items: center;
          padding-top: 400px;
          padding-bottom: 10px;
          background-color: #fff;
        }
      </style>


<div class="container">

	<?php if ($this->session->flashdata('sessao-encerrada') == TRUE): ?>
		<div class="alert alert-info"><?= $this->session->flashdata('sessao-encerrada'); ?></div>
	<?php endif; ?>

	<?php if(!($this->session->has_userdata('usuario') && ($this->session->has_userdata('senha')))) { ?>
    <form action="<?=base_url('logar')?>" method="POST" class="form-signin">
      <div class="text-center mb-4">
        <!--<img class="mb-4" src="<?=base_url('static/imagens/logo.png');?>" alt="Pizza Delícia" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal f" align="center">LOGIN:</h1>
      </div>
      <div class="form-label-group">
  			<label align="left">E-mail: </label><br><br>
        <div class="col-sm-10">
          <input type="email" name="nome" class="form-control" required/>
        </div>
  		</div>
      <div class="form-label-group">
  			<label align="left">Senha: </label><br><br>
        <div class="col-sm-10">
  			  <input type="password" name="senha" class="form-control" required/>
        </div>
  		</div>
  		<div class="form-group" align="center">
        <input type="submit" value="Entrar" class="btn btn-success my-2 my-sm-5 m-2 py-2 py-sm-2 p-5"/>
        <input type="button" value="Cadastrar" onclick="redirecionarCadastro();" class="btn btn-info my-2 my-sm-5 m-2 mt-0 py-2 py-sm-2 p-5"/>
      </div>
  	</form>
  <?php } else { ?>
    <?php if($this->session->userdata('id') == '0'){ ?>
      <p class="paragrafo">*Usuário/Senha incorreto</p>
      <form action="<?=base_url('logar')?>" method="POST" class="form-signin">
        <div class="text-center mb-4">
          <!--<img class="mb-4" src="<?=base_url('static/imagens/logo.png');?>" alt="Pizza Delícia" height="72">-->
          <h1 class="h3 mb-3 font-weight-normal f" align="center">LOGIN:</h1>
        </div>
        <div class="form-label-group">
    			<label align="left">E-mail: </label><br><br>
          <div class="col-sm-10">
            <input type="email" name="nome" class="form-control" required/>
          </div>
    		</div>
        <div class="form-label-group">
    			<label align="left">Senha: </label><br><br>
          <div class="col-sm-10">
    			  <input type="password" name="senha" class="form-control" required/>
          </div>
    		</div>
    		<div class="form-group" align="center">
          <input type="submit" value="Entrar" class="btn btn-success my-2 my-sm-5 m-2 py-2 py-sm-2 p-5"/>
          <input type="button" value="Cadastrar" onclick="redirecionarCadastro();" class="btn btn-info my-2 my-sm-5 m-2 mt-0 py-2 py-sm-2 p-5"/>
        </div>
    	</form>
    <?php } else{?>
      <p class="lead">Olá <strong><?=$this->session->userdata('usuario')?></strong>!</p>
          <p>
        Clique <a href="<?=base_url('encerrar-sessoes')?>">aqui</a> para encerrar.
       </p>
    <?php } ?>
<?php } ?>
</div>
