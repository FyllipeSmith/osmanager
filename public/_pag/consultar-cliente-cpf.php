<?php include_once('../_includes/topo.php')?>

<script>
	$(document).ready(function(){
		var i=0;
		for(i=0;i<10;i++){
		$("#tabela-cliente-cpf ul ").append("<li>XXXXX</li>");
		};
	});
</script>
	<h2>Consulta de Clientes (Pessoa Física)</h2>

<?php include_once('../_includes/menu-lateral.php')?>
	
	<section id="tabela-cliente-cpf">
		<div>	
			<ul>
				<li>CLIENTE ID</li>
				<li>DROP001</li>
		</div>
			</ul>
		<div>	
			<ul>
				<li>NOME</li>
				<li>Smith</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>CPF</li>
				<li>xxx.xxx.xxx-xx</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>ENDEREÇO</li>
				<li>AV...</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>BAIRRO</li>
				<li>Urias...</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>CIDADE</li>
				<li>Goiânia</li>
			</ul>
		</div>
		<div>
			<ul>
				<li>UF</li>
				<li>GO</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>CEP</li>
				<li>74477000</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>TEL (DDD)</li>
				<li>62 3595-0000</li>
			</ul>
		</div>
		<div>
			<ul>
				<li>CEL(DDD)</li>
				<li>62 9205-0000</li>
			</ul>
		</div>
		<div>
			<ul>
				<li>EMAIL</li>
				<li>fylliped@drop...</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>SITUAÇÃO</li>
				<li>Ok</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>AÇÃO</li>
				<li><a href="#">ALT</a> / <a href="#">DEL</a></li>
			</ul>
		</div>
	</section>
	
	<a href="#" class="botoes">Voltar</a>

<?php include_once('../_includes/rodape.php')?>