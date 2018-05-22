			<div id="sucessosugestao" class="alert alert-info alert-dismissible fade show" role="alert" style="display: none;">
				<h4 class="alert-heading">Sucesso!</h4>
				<p>
           Obrigado pela sugestão!<br>Sempre lemos suas sugestões e tentamos seguir na medida do possível, 
           para melhor lhe atender.<br>Envie quantas sugestões quiser e quando achar necessário.
        </p>
				<hr>
				<p class="mb-0"><a class="alert-link" href="./">Página inicial</a></p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<br>

			<h3 id="texto">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contamos com você para nos ajudar aumentar a cada dia a qualidade das
        nossas pizzas. Deixe um recadinho pra gente falando do que você gostou ou do que precisa ser melhorado. 
        Ficaremos gratos em poder atendê-lo cada vez melhor!
      </h3>
      
			<br><br>

			<form action="./" method="post" style="display: none">
				<label for="msg">Sua Sugestão:</label>
				<img id="gif2" src="<?=base_url('static/imagens/source.gif')?>" >
				<br>
				<textarea name="message" rows="10" cols="30" id="msg" placeholder="Deixe aqui sua sugestão... =)"></textarea>
				<input type="submit" id="enviarsugestao" name="b" value="Enviar">
			</form>