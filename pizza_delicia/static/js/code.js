//var imagens = ["001.jpg", "002.jpg", "003.jpg", "004.jpg"];
//var imagematual = 0;
//function trocaimagem() {
	//imagematual = (imagematual + 1) % imagens.length;
	//document.querySelector('.slider img').src = "../imagens/imgs/"+imagens[imagematual];
//}
//setInterval(trocaimagem, 2500);

var m = "Mensagem";

$( document ).ready(function() {
	$("form, #gif, #gif3, .tabela").show(1000); //animação dos elementos

	$('#tel').mask('(00) 00000-0000'); //colocando máscara no campo de telefone
	$('#troco').mask('##0,00', {reverse: true}); // colocando máscara no campo de troco

	$('#troco').blur(function() {// colocando R$ na frente do valor do troco
		this.form.troco.value = (this.form.troco.value == "" ? "0,00" : this.form.troco.value);
		this.form.troco.value = (this.form.troco.value.includes(",00") ? this.form.troco.value : this.form.troco.value + ",00");
		this.form.troco.value = "R$ " + this.form.troco.value;
	});

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

	//ação dos botões de inserir e remover campos de endereço
	$("#addEnd").click(function(e) {
		e.preventDefault();
		var filhos = $("div.endereco").children().length;
		filhos++;
		$("div.endereco").append('<div><label for="rua'+ filhos + '">Rua ' + filhos + ':</label><input type="text" class="rua" ' +
		'name="rua' + filhos + '" id="rua' + filhos + '" placeholder="Sua rua de entrega ' + filhos + '">' +
		'<label for="num'+ filhos + '">Número ' + filhos + ':</label><input type="text" class="num" ' +
		'name="num' + filhos + '" id="num' + filhos + '" placeholder="ex.: 320">' +
		'<label for="bairro'+ filhos + '">Bairro ' + filhos + ':</label><input type="text" class="bairro" ' +
		'name="bairro' + filhos + '" id="bairro' + filhos + '" placeholder="Seu bairro">' +
		'<label for="cidade'+ filhos + '">Cidade ' + filhos + ':</label><input type="text" class="cidade" ' +
		'name="cidade' + filhos + '" id="cidade' + filhos + '" placeholder="Sua cidade"></div>');
		});

	$("#remEnd").click(function(e) {
			e.preventDefault();
			$("div.endereco").children().last().remove();
		});
});

function verificaCadastro(form) {
	if(validaCadastro(form)){
		return confirm("Você confirma seus dados?");
	}else{
		return false;
	}
}

function validaCadastro(form){
	if (form.nome.value.length > 0) {
		if (form.tel.value.length > 0) {
			if (validaEmail(form.email)) {
				if (form.senha.value.length > 7) {
					if (verificaEnderecos()) {
						return true;
					}else{
						alert(m);
					}
				}else{
					alert("Por favor, indique uma senha de 8 ou mais caracteres!");
					form.senha.focus();
				}
			}else{
				alert("Por favor, um email válido!");
				form.email.focus();
			}
		}else{
			alert("Por favor, informe seu telefone!");
			form.tel.focus();
		}
	}else{
		alert("Por favor, informe o seu nome!");
		form.nome.focus();
	}
	return false;
}

function verificaEnderecos() {
	var enderecos = $("div.endereco").children();
	if(enderecos.length == 0){
		$("#addEnd").focus();
		m = "Por favor, informe um endereco";
		return false;
	}
	$("#qtdEnd").val(enderecos.length+"");//add quant de endereços a serem cadastrados em um campo oculto, para ser tratado em php
	for (var i = 0; i < enderecos.length; i++) {
		var campos = enderecos.children();
		console.log(campos);
		for (var j = 1; j < campos.length; j+=2) {//pega só os campos, estão sempre numa posição impar do vetor, label depois campo
			if(campos[j].value.length == 0){
				campos[j].focus();
				m = "Por favor, informe o(a) " + campos[j-1].textContent; //retorna o nome do campo que está em branco (label)
				return false;
			}
		}
	}
	return true;
}

function validaEmail(campo) { //função que verifica se o email é válido
	usuario = campo.value.substring(0, campo.value.indexOf("@"));
	dominio = campo.value.substring(campo.value.indexOf("@")+ 1, campo.value.length);

	if ((usuario.length >= 1) &&
	    (dominio.length >= 3) &&
	    (usuario.search("@")== -1) &&
	    (dominio.search("@")== -1) &&
	    (usuario.search(" ")== -1) &&
	    (dominio.search(" ")== -1) &&
	    (dominio.search(".")!= -1) &&
	    (dominio.indexOf(".") >= 1)&&
	    (dominio.lastIndexOf(".") < dominio.length - 1)) {
		document.getElementById("email").style.color = "#000";
		return true;
	}else{
		document.getElementById("email").style.color = "#F00";
		return false;
	}
}

//----------------------CODIGO EM LIMBO----------------------
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
