<?php
  if(@ $alterou){?>
    <div id="sucessopedido" class="alert alert-success alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Sucesso!</h4>
      <p>Alteração de Cadastro realizado com Sucesso!<br>Seja bem vindo a Pizza Delicia agora você pode realizar pedidos e saborear a melhor pizza da região!</p>
      <hr>
      <p class="mb-0"><a class="alert-link" href="<?=site_url('login')?>">Fazer Login</a></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>

  <p>Mude suas informações</p>
  <form id="cadastrarCliente" method="post" action="" style="display: none" onsubmit="return verificaCadastro(this);">
    <div class="form-row">
      <div class="col-sm-8">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
      </div>
    <div class="col-sm-4">
      <label for="tel">Telefone:</label>
      <input type="text" class="form-control" name="tel"  id="tel" placeholder="(88) 99999-9999" required>
    </div>
    </div>


    <br>
    <div class="form-row">
        <div class="col-sm-8">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="seuemail@email.com" onblur="validaEmail(this);" required>
        </div>
        <div class="col-sm">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" name="senha"  id="senha" required>
        </div>
    </div>


    <br><br>

    <div class="row justify-content-center">
      <input type="submit" value="Cadastrar">
      <input type="reset"  value="Limpar">
    </div>
    
  </form>
