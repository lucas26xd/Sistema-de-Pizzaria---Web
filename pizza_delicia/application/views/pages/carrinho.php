	<?php if(count($pedidos) > 0) { ?>
		<form id="carrinho" method="post" action="" style="display: none" onsubmit="return verificaCompra(this);">
			<div class="table-responsive-sm">
				<table class="table table-sm table-striped table-bordered table-hover">
					<thead class="thead-dark">
						<tr>
							<th width="30%">Produto</th>
							<th width="1%">Tamanho</th>
							<th width="1%">Quantidade</th>
							<th width="6%">Valor</th>
						</tr>
					</thead>
					<?php foreach ($pedidos as $pedido) { ?>
						<tr id=<?=$pedido['id']?>>
							<td><?=$pedido['nome']?></td>
							<td>
                <select class="tamPedido">
									<?php foreach ($pedido['tamanho'] as $t) { ?>
										<option value=<?="tam".$t?> <?=$pedido['TAM'] == "tam".$t ? 'selected' : ''?>><?=$t?></option>
									<?php } ?>
								</select>
							</td>
							<td>
                <select class="qtdPedido">
									<option value="qtd0">0</option>
									<option value="qtdmeia" <?=$pedido['qtd'] == '0.5' ? 'selected' : ''?>>1/2</option>
									<?php for ($i=1; $i < 6; $i++) { ?>
                    <option value=<?="qtd".$i?> <?=$pedido['qtd'] == $i ? 'selected' : ''?>><?=$i?></option>
                  <?php } ?>
								</select>
							</td>
							<td><?="R$ ".number_format($pedido['valor'], 2, ',', '.')?></td>
						</tr>
					<?php } ?>

				</table>
			<br><br>

			<h3>Entrega:</h3>
			<?php foreach ($enderecos as $endereco) { ?>
				<input type="radio" name="endereco" value=<?=$endereco['num'].$endereco['cidade']?> checked> <?=$endereco['rua'].", ".$endereco['num'].", ".$endereco['bairro'].", ".$endereco['cidade']?><br>
			<?php } ?>

			<br><br>
			<div class="col-sm-3">
				<label for="troco">Troco para:</label>
				<input type="text" class="form-control" id="troco" name="troco" placeholder="R$ 20,00" required>
			</div>

			<div class="col-sm-3">
				<label for="total">Total:</label>
				<input type="text" class="form-control" id="total" name="total" disabled required>
			</div>

			<div class="form-group" align="center">
			  <input type="submit" class="btn btn-success my-2 my-sm-5 m-2 py-2 py-sm-2 p-5" name="env" value="Finalizar Compra">
      </div>
		</form>
    
	<?php } else if($this->session->has_userdata('usuario') && $this->session->userdata('id') != '0') { ?>
		<h1>Carrinho Vazio!</h1>
		<h3>Ir para <a class="link" href="<?=site_url('cardapio')?>">Cardápio</a></h3>
	<?php } else { ?>
		<h1>Você não esta logado!</h1>
		<h3>Faça <a class="link" href="<?=site_url('login')?>">Login</a></h3>
  <?php } ?>
