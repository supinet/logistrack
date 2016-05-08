<?php
require_once ("cabecalho.php");
?>
<form action="processo-add.php" method="post">
	<div class="container-fluid">
		<?php include ("processo-form-base.php");?>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="template.html" class="btn btn-default">Cancelar</a>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</form>
<?php include ("rodape.php");?>