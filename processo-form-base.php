<?php ?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2 class="page-header">
			<span class="glyphicon-plus"></span>Adicionar Processo
		</h2>
	</div>
	<div class="col-md-3"></div>
</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div id="panel-cliente" class="panel panel-primary">
			<div class="panel-heading">Dados do Cliente</div>
			<div class="panel-body">
				<div id="cliente" class="form-group">
					<label for="cliente">Nome/Razão Social Cliente</label> <select
						id="cliente" name="cliente" title="Selecione o cliente"
						class="form-control" required="true">
						<option>Selecione o cliente</option>
						<option value="1">SAMSUNG ELETRONICA DA AMAZONIA LTDA</option>
						<option value="2">MOTO HONDA DA AMAZONIA LTDA</option>
						<option value="3">YAMAHA DA AMAZONIA LTDA</option>
					</select>
				</div>
				<div id="transportador" class="form-group">
					<label for="transportador">Nome/Razão Social Transportador</label>
					<select id="transportador" type="text" class="form-control"
						title="Selecione o transportador" required="true">
						<option>Selecione o transportador</option>
						<option value="1">ARIPUANÃ TRANSPORTADORA LTDA</option>
						<option value="2">UNIÃO CASCAVEL LTDA</option>
						<option value="3">VARIG LOG LTDA</option>
					</select>
				</div>
				<div id="processo" class="form-group">
					<label for="processo">Código Processo</label> <input id="processo"
						type="text" class="form-control"
						placeholder="Digite o código do processo" required="true">
				</div>
				<div id="produto" class="form-group">
					<label for="produto">Produto</label> <select id="produto"
						class="form-control" title="Selecione o produto" required="true">
						<option>Selecione o produto</option>
						<option value="1">1248 - TELEVISOR EM CORES COM TELA DE CRISTAL
							LIQUIDO</option>
						<option value="2">2010 - MONITOR EM CORES COM TELA DE CRISTAL
							LIQUIDO</option>
						<option value="3">2314 - CELULAR GALAXY S6</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
