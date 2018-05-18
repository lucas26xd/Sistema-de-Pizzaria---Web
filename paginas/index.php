<!DOCTYPE html>
<html>
	<head>
		<title>Pizza Delicia</title>
		<meta charset="utf-8">
		<meta name="author" content="Lucas Santos e Ângela Magalhães">
	    <meta name="generator" content="Sublime">
	    <meta name="keywords" content="HTML, CSS, JQuery">
	    <meta name="description" content="Site para pedidos em uma pizzaria">
	    <link rel="shortcut icon" href="../imagens/pizza.ico" >
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/estilo.css">
	    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico|Sacramento|Satisfy|Parisienne" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<header>
				<h1 id="cabecalho">PizzaDelicia</h1>
			</header>
			<nav>
				<ul>
					<li><a href="./">Principal</a></li>
					<li><a href="./cardapio.html">Cardápio</a></li>
					<li><a href="./promocoes.html">Promoções</a></li>
					<li><a href="./pedido.html">Realizar Pedido</a></li>
					<li><a href="./sugestoes.html">Sugestões</a></li>
				</ul>
			</nav>
			
			<section>
			    <figure class="slider">
			        <img class="foto" src="../imagens/imgs/001.jpg">
			        <img class="foto" src="../imagens/imgs/002.jpg">
			        <img class="foto" src="../imagens/imgs/003.jpg">
			        <img class="foto" src="../imagens/imgs/004.jpg">
			        <img class="foto" src="../imagens/imgs/005.jpg">
					<img class="foto" src="../imagens/imgs/006.jpg">
			    </figure> 
			</section>

			<br><?php echo "Testando PHP:"?><br>
			<br><?php echo "O formulário gerado" . " às " . date('h:i:s'); ?><br>


			<img id="gif" src="../imagens/giphy.gif">

			<h3 class="al"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;"Nós da PizzaDelicia estamos muito felizes em lhe atender. Estamos no ramo de pizzaria a mais de 25 anos, sempre com a missão de satisfazer nossos clientes. Levando até você o prazer de saborear a mais deliciosa pizza do Ceará. Aqui você pode <a href="./pedido.html">Realizar Pedido</a>, ficar antenado no nosso <a href="./cardapio.html">Cardápio</a> e nossas <a href="./promocoes.html">Promoções</a>, além de sempre nos dar <a href="./sugestoes.html">Sugestões</a> de melhoria, para sempre crescer junto com você na arte de fazer pizza".</h3>
			
			<br><br><br><br>

			<h1 class="al" id="al">Ângela e Lucas</h1>

			<br><br><br><br>
			
			<footer>
			   	Atividade 2 de Tecnologias Web - Prof. Me. Joseph Soares Alcântara
			   	<address>
			    	<img class="imgs_peq" src="../imagens/mail.png" alt="E-mail:"><a href="mailto:atendimento@PizzaDelicia.com">atendimento@PizzaDelicia.com</a>
			    	<img class="imgs_peq" src="../imagens/wpp.png" alt="Wpp:"><a href="https://api.whatsapp.com/send?phone=88996695833" target="_blank">(88) 9-9669-5833</a>
			   	</address>
			   	<p><small>&copy; Todos os direitos reservados.</small></p>
		    </footer>
		</div>
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	    <script type="text/javascript" src="../js/code.js"></script>
	    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>
</html>