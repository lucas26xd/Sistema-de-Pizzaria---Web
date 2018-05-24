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
