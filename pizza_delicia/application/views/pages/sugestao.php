<?php if($deubom === 1) {?>
<div class="container-fluid">
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<h4 class="alert-heading">Sucesso!</h4>
		<p>
			 Obrigado pela sugestão!<br>Sempre lemos suas sugestões e tentamos seguir na medida do possível,
			 para melhor lhe atender.<br>Envie quantas sugestões quiser e quando achar necessário.
		</p>
		<hr>
		<p class="mb-0"><a class="alert-link" href="<?=site_url('principal')?>">Página inicial</a></p>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php } ?>

	<br>

	<h3 class="al" id="texto">
		&emsp;&emsp;Contamos com você para nos ajudar aumentar a cada dia a qualidade das
		nossas pizzas. Deixe um recadinho pra gente falando do que você gostou ou do que precisa ser melhorado.
		Ficaremos gratos em poder atendê-lo cada vez melhor!
	</h3>

	<br><br>

	<?php if(!$this->session->has_userdata('id') || $this->session->userdata('id') == 0){ ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<h4 class="alert-heading">Erro!</h4>
			<p>
				 Você precisa está logado!<br>Por uma questão de organização e autenticidade. Fique tranquilo, seus dados e sugestões são totalmente guardados em sigilo.
			</p>
			<hr>
			<p class="mb-0">Você pode <a class="alert-link" href="<?=site_url('login')?>">Fazer Login</a>! E depois mandar suas sugestões.</p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } else { ?>
		<form action="<?=site_url('sugestao/inserir_sugestao')?>" method="post" style="display: none">
			<label for="msg">Sua Sugestão:</label>
			<div class="row">
				<div class="col-12 col-md-8">

					<textarea name="msg" rows="10" cols="30" id="msg" placeholder="Deixe aqui sua sugestão... =)"></textarea>
					<input type="submit" name="b" value="Enviar">
				</div>
				<div class="col-6 col-md-3">
					<img id="gif2" class = "img-fluid" src="<?=base_url('static/imagens/source.gif')?>" >
					<br>
				</div>
			</div>
		</form>
	<?php } ?>

</div>
