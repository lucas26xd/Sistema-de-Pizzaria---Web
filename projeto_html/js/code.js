//var imagens = ["001.jpg", "002.jpg", "003.jpg", "004.jpg"];
//var imagematual = 0;
//function trocaimagem() {
	//imagematual = (imagematual + 1) % imagens.length;
	//document.querySelector('.slider img').src = "../imagens/imgs/"+imagens[imagematual];
//}
//setInterval(trocaimagem, 2500);

$( document ).ready(function() {
	$("form, #gif, #gif3, .tabela").show(1000); //animação dos elementos

	$("input:text:eq(0):visible").focus(); //coloca foco no primeiro campo do formulário

	$("#enviarsugestao").click(function(btn){ //ação do botão de sugestões
		btn.preventDefault();
		$("html, body").animate({scrollTop:0}, "slow");
		$("#sucessosugestao").show("slow");
		this.form.msg.value = "";
	});

	$("#enviarpedido").click(function (btn) {//ação do botão de enviar pedido
		btn.preventDefault();
		if(enviaDados(this.form)){
			$("html, body").animate({scrollTop:0}, "slow");
			$("#sucessopedido").show("slow");
			for (var i = this.form.length - 4; i >= 0; i--) { //limpar os campos
				this.form[i].value = "";
			}
			this.form[this.form.length - 3].value = "0";
		}
	});
});

function verificaCampos(form) {
	if (form.nome.value.length > 0) {
		if (form.end.value.length > 0) {
			if (form.troco.value.length > 0) {
				if (form.tel.value.length > 0) {
					if (parseInt(form.pedido.value) > 0) {
						return true;
					}else{
						alert("Por favor, escolha o seu pedido!");
						form.pedido.focus();
					}
				}else{
					alert("Por favor, indique seu telefone!");
					form.tel.focus();
				}
			}else{
				alert("Por favor, informe o valor para troco!");
				form.troco.focus();
			}
		}else{
			alert("Por favor, informe seu endereço de entrega!");
			form.end.focus();
		}
	}else{
		alert("Por favor, informe o seu Nome!");
		form.nome.focus();
	}
	return false;
}

function enviaDados(form) {
	if(verificaCampos(form)){
		return confirm("Você confirma seu pedido?");
	}else{
		return false;
	}
}