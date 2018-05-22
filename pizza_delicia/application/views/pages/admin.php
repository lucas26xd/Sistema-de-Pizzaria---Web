      <style>
        :root {
          --input-padding-x: .75rem;
          --input-padding-y: .75rem;
        }

        html,
        body {
          height: 100%;
        }

        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }      
      </style>

      <form class="form-signin">
        <div class="text-center mb-4">
          <img class="mb-4" src="<?=base_url('static/imagens/logo.png')?>" alt="Pizza Delícia" height="72">
          <h1 class="h3 mb-3 font-weight-normal"><?=$title?> - Pizza Delícia</h1>
        </div>

        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
          <label for="inputEmail">E-mail</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
          <label for="inputPassword">Senha</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar meus dados
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
      </form>
