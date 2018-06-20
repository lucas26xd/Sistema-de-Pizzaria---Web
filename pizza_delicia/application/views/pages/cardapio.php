
		<?php if(count($produtos['P']) > 0) { ?>
			<h1 id="texto">Pizzas:</h1>
			<div class="table-responsive-sm">
				<table class="tabela">
					<tr>
						<th scope="col">Sabor</th>
						<th scope="col">Pequena</th>
						<th scope="col">Média</th>
						<th scope="col">Grande</th>
						<th scope="col">Família</th>
					</tr>
					<?php foreach ($produtos['P'] as $produto) { ?>
						<tr>
							<td><a href=<?=site_url('carrinho/cadastra_pedido/'.$produto['id'])?>> <?=$produto['nome']?> </a></td>
							<td><?='R$ ' . number_format($produto['valorPequena'], 2, ',', '.')?></td>
							<td><?='R$ ' . number_format($produto['valorMedia'], 2, ',', '.')?></td>
							<td><?='R$ ' . number_format($produto['valorGrande'], 2, ',', '.')?></td>
							<td><?='R$ ' . number_format($produto['valorFamilia'], 2, ',', '.')?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<br><br><br>
		<?php } ?>

		<?php if(count($produtos['D']) > 0) { ?>
			<h1 id="texto">Pizza Doce:</h1>
			<div class="table-responsive-sm">
				<table class ="tabela">
					<tr>
						<th scope="col">Sabor</th>
						<th scope="col">Pequena</th>
						<th scope="col">Média</th>
					</tr>
					<?php foreach ($produtos['D'] as $produto) { ?>
						<tr>
							<td><a href=<?=site_url('carrinho/cadastra_pedido/'.$produto['id'])?>> <?=$produto['nome']?> </a></td>
							<td><?='R$ ' . number_format($produto['valorPequena'], 2, ',', '.')?></td>
							<td><?='R$ ' . number_format($produto['valorMedia'], 2, ',', '.')?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<br><br><br>
		<?php } ?>

		<?php if(count($produtos['C']) > 0) { ?>
			<h1 id="texto">Calzones:</h1>
			<div class="table-responsive-sm">
				<table class="tabela">
					<tr>
						<th scope="col">Recheio</th>
						<th scope="col">Pequeno</th>
						<th scope="col">Médio</th>
					</tr>
					<?php foreach ($produtos['D'] as $produto) { ?>
						<tr>
							<td><a href=<?=site_url('carrinho/cadastra_pedido/'.$produto['id'])?>> <?=$produto['nome']?> </a></td>
							<td><?='R$ ' . number_format($produto['valorPequena'], 2, ',', '.')?></td>
							<td><?='R$ ' . number_format($produto['valorMedia'], 2, ',', '.')?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<br><br><br>
		<?php } ?>

		<?php if(count($produtos['O']) > 0) { ?>
			<h1 id="texto">Outros:</h1>
			<div class="centralizado">
				<table class="tabela">
					<tr>
						<th scope="col">Produto</th>
						<th scope="col">Valor</th>
					</tr>
					<?php foreach ($produtos['O'] as $produto) { ?>
						<tr>
							<td><?=$produto['nome']?></td>
							<td><?='R$ ' . number_format($produto['valorPequena'], 2, ',', '.')?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<br><br><br>
		<?php } ?>
