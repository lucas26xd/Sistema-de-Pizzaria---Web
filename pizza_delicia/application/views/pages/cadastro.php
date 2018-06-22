		<?php
			if(@ $cadastrou){?>
				<div id="sucessopedido" class="alert alert-success alert-dismissible fade show" role="alert">
					<h4 class="alert-heading">Sucesso!</h4>
					<p>Cadastro realizado com Sucesso!<br>Seja bem vindo a Pizza Delicia agora você pode realizar pedidos e saborear a melhor pizza da região!</p>
					<hr>
					<p class="mb-0"><a class="alert-link" href="<?=site_url('login')?>">Fazer Login</a></p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } ?>

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

				<input type="hidden" name="qtdEnd" id="qtdEnd">
				<div class="endereco mt-4">
					<div class="border border-warning rounded p-4">
						<div class="form-row">
							<div class="col-sm-0.5">
							</div>
							<div class="col-sm">
								<label for="end">Endereço 1: </label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-sm-0.5"></div>
							<div class="col-sm-5">
								<label for="rua1">Rua 1:</label>
								<input type="text" class="form-control" name="rua1" id="rua1" placeholder="Sua rua de entrega 1" required>
							</div>
							<div class="col-sm-2">
                <label for="num1">Número 1:</label>
								<input type="text" class="form-control" name="num1" id="num1" placeholder="ex.: 320" required>
							</div>
							<div class="col-sm">
								<label for="bairro1">Bairro 1:</label>
								<input type="text" class="form-control" name="bairro1" id="bairro1" placeholder="Seu bairro" required>
							</div>
							<div class="col-sm">
								<label for="cidade1">Cidade 1:</label>
								<input type="text" class="form-control" name="cidade1" id="cidade1" placeholder="Sua cidade" required>
							</div>
							<div class="col-sm-0.5"></div>
						</div>
					</div>
				</div>

				<input id="addEnd" type="image" src="<?=base_url('static/imagens/addEnd.png')?>" alt="Adicionar" width="30" height="30">
				<input id="remEnd" type="image" src="<?=base_url('static/imagens/remEnd.png')?>" alt="Remover" width="30" height="30">
				<br>
				<div class="form-row mt-3">
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
				  <input type="submit" class="btn btn-success my-2 my-sm-5 m-2 py-2 py-sm-2 p-5" name="env" value="Cadastrar">
				  <input type="reset" class="btn btn-danger my-2 my-sm-5 m-2 py-2 py-sm-2 p-5" name="limpar" value="Limpar">
        </div>
			</form>
