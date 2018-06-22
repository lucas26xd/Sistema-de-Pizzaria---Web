      <style>
        :root {
          --input-padding-x: .75rem;
          --input-padding-y: .75rem;
        }
        html, body {
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

      <form class="form-signin" method="post" action="<?= base_url('admin/logar') ?>">
        <div class="text-center mb-4">
          <a class="navbar-brand" href="<?=site_url('principal')?>" title="Pizza Delícia">
            <img class="mb-4" src="<?=base_url('static/imagens/logo.png')?>" alt="Pizza Delícia" height="72">
          </a>
          <h1 class="h3 mb-3 font-weight-normal"><?=$title?> - Pizza Delícia</h1>
        </div>

        <div class="form-label">
          <input type="text" name="login" class="form-control" placeholder="Usuário" required autofocus>
        </div>

        <div class="form-label">
          <input type="password" name="senha" class="mt-3 form-control" placeholder="Senha" required>
        </div>

        <!--div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar meus dados
          </label>
        </div-->
        
        <button class="mt-3 btn btn-lg btn-success btn-block" type="submit">Entrar</button>
        <?php if (isset($erro)): ?>
          <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
            <?= $erro; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
              
        <p class="mt-5 mb-3 text-muted text-center">&copy; <?=date('Y')?></p>
      </form>
