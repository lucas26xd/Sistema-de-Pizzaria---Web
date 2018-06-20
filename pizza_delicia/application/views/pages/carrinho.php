	<?php if(count($pedidos) > 0) { ?>
		<form id="carrinho" method="post" action="" style="display: none" onsubmit="return verificaCompra(this);">
			<div class="table-responsive-sm">
				<table class="table table-sm">
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
							<td><select class="tamPedido">
										<?php foreach ($pedido['tamanho'] as $t) { ?>
											<option value=<?="tam".$t?>><?=$t?></option>
										<?php } ?>
									</select>
							</td>
							<td><select class="qtdPedido">
										<option value="qtd0">0</option>
										<option value="qtdmeia">1/2</option>
										<?php for ($i=1; $i < 6; $i++) { ?>
											<option value=<?="qtd".$i?> <?=($i == 1) ? 'selected' : ''?>><?=$i?></option>
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
			  <input type="submit" class="btn btn-success" name="env" value="Cadastrar">
			  <input type="reset" class="btn btn-danger" name="limpar" value="Limpar">
      </div>
		</form>
	<?php } else if($this->session->has_userdata('usuario') == 1) { ?>
		<h1>Carrinho Vazio!</h1>
		<h3>Ir para <a class="link" href="<?=site_url('cardapio')?>">Cardápio</a></h3>
	<?php } else { ?>
		<h1>Você não esta logado!</h1>
		<h3>Faça <a class="link" href="<?=site_url('login')?>">Login</a></h3>
<?php } ?>
