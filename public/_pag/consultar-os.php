<?php include_once('../_includes/topo.php')?>

<script>
	$(document).ready(function(){
		var i=0;
		for(i=0;i<10;i++){
		$("#tabela-os ul ").append("<li>XXXXX</li>");
		};
	});
</script>
	<h2>Consulta de OS </h2>

<?php include_once('../_includes/menu-lateral.php')?>
	
	<section id="tabela-os">
		<div>	
			<ul>
				<li>OS ID</li>
				<li>OSDRP001</li>
		</div>
			</ul>
		<div>	
			<ul>
				<li>CLIENTE</li>
				<li>Smith</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>SERV. CONTR.</li>
				<li>Web Design</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>VALOR</li>
				<li>R$ XXXX,xx</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>DATA CONTRATO</li>
				<li>14/02/2018</li>
			</ul>
		</div>	
		<div>	
			<ul>
				<li>DATA ENTREGA</li>
				<li>14/03/2018</li>
			</ul>
		</div>
		<div>
			<ul>
				<li>BRIEFING</li>
				<li>link</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>COBRANÇA</li>
				<li>PAGO ENT.</li>
			</ul>
		</div>
		<div>	
			<ul>
				<li>AÇÃO</li>
				<li><a href="#">DET</a> / <a href="#">ALT</a> / <a href="#">DEL</a></li>
			</ul>
		</div>
	</section>
	
	<a href="#" class="botoes">Voltar</a>

<?php include_once('../_includes/rodape.php')?>