      <div id="sucessopedido" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
				<h4 class="alert-heading">Sucesso!</h4>
				<p>Seu pedido foi realizado com Sucesso!
        <br>Em alguns minutos você irá ter a melhor sensação possível ao saborear a nossa pizza! Obrigado e bom apetite!</p>
				<hr>
				<p class="mb-0"><a class="alert-link" href="./">Página inicial</a></p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form method="post" style="display: none">
				<div class="form-row">
          <div class="col-sm">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome">
          </div>
          <div class="col-sm">
            <label for="end">Endereço:</label>
    				<input type="text" name="end" id="end" placeholder="Seu endereço de entrega">
          </div>
				</div>
        <div class="form-row">
          <div class="col-sm">
            <label for="troco">Troco para:</label>
    				<input type="text" name="troco" id="troco" placeholder="ex.: R$ 20,00">
          </div>
          <div class="col-sm">
            <label for="tel">Telefone:</label>
            <input type="text" name="tel"  id="tel" placeholder="(88) 99999-9999">
          </div>
        </div>
        <div class="form-row">
          <label for="pedido">Pedido:</label>
          <select name="cardapio" id="pedido">
            <option value="0" selected>Selecione seu Pedido...</option>
            <option value="1">Mussarela</option>
            <option value="2">Carne de Sol</option>
            <option value="3">Bacon</option>
            <option value="4">Portuguesa</option>
            <option value="5">4 Queijos</option>
            <option value="6">Marguerita</option>
            <option value="7">Cheddar</option>
            <option value="8">Calabresa</option>
            <option value="9">Frango c/ Catupiry</option>
            <option value="10">Mista</option>
            <option value="11">Camarão</option>
            <option value="12">Chocolate</option>
            <option value="13">Brigadeiro</option>
            <option value="14">Romeu e Julieta</option>
            <option value="15">Banana com Canela</option>
            <option value="16">Calzone de Mussarela</option>
            <option value="17">Calzone de Calabresa</option>
            <option value="18">Calzone de Carne de Sol</option>
          </select>
        </div>

				<br><br>
        <div class="row justify-content-center">
          <input type="submit" class="col" name="env" id="enviarpedido" value="Enviar">
          <input type="reset" class="col" name="limpar" value="Limpar">
        </div>
			</form>
