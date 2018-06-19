	<?php if(count($pedidos) > 0) { ?>
		<form id="carrinho" method="post" action="" style="display: none" onsubmit="return verificaCompra(this);">
			<div class="table-responsive-sm">
				<table class="table table-sm">
					<caption>*Seus Pedidos*</caption>
					<tr class="table-success" >
						<th scope="col">Produto</th>
						<th scope="col">Tamanho</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Valor</th>
					</tr>
					<?php foreach ($pedidos as $pedido) { ?>
						<tr>
							<td><?=$pedido['nome']?></td>
							<td><select>
										<?php foreach ($pedido['tamanho'] as $t) { ?>
											<option value=<?="tam".$t?>><?=$t?></option>
										<?php } ?>
									</select>
							</td>
							<td><select>
										<option value="qtd0">0</option>
										<option value="qtdmeia">1/2</option>
										<?php for ($i=1; $i < 6; $i++) { ?>
											<option value=<?="qtd".$i?>><?=$i?></option>
										<?php } ?>
									</select></td>
							<td><input type="text" name=<?="valor".$pedido['nome']?> disabled></td>
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

			<div class="row justify-content-center">
			  <input type="submit" class="col" name="env" value="Cadastrar">
			  <input type="reset" class="col" name="limpar" value="Limpar">
      </div>
		</form>
	<?php } else { ?>
		<h1>Carrinho Vazio!</h1>
		<h3>Ir para <a class="link" href="<?=site_url('cardapio')?>">Cardápio</a></h3>
	<?php } ?>
