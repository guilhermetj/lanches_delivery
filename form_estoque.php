<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
	require 'classes/Estoque.php'; 
	require 'classes/EstoqueDAO.php';
	$estoque = new Estoque();

	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$estoqueDAO = new EstoqueDAO();
		$estoque = $estoqueDAO->get($id);
	}
 ?>
<div class="row" style="margin-top:40px">
	<div class="col-6 offset-3">
		<h2>Cadastrar produto</h2>
	</div>
</div>
<div class="row">
	<div class="col-6 offset-3">
		<p>&nbsp;</p>
		<form action="controle_estoque.php?acao=<?=($estoque->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
			<div class="row">
				<div class="col-3">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" class="form-control" name="id" id="id" value="<?=($estoque->getId() != '' ? $estoque->getId() : '')?>" readonly>
					</div>
				</div>
				<div class="col-9">
					<div class="form-group">
						<label for="nome_produto">Nome do Produto</label>
						<input type="text" class="form-control" name="nome_produto" id="nome_produto" required value="<?= ($estoque->getNomeProduto() != '' ? $estoque->getNomeProduto() : '') ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">	
					<div class="form-group">
						<label for="valor_un">Valor da unidade</label>
						<input type="text" class="form-control" name="valor_un" id="valor_un" value="<?= ($estoque->getValorUn() != '' ? $estoque->getValorUn() : '') ?>">
					</div>
				</div>
				<div class="col-3">	
					<div class="form-group">
						<label for="qtd">Quantidade</label>
						<input type="text" class="form-control" name="qtd" id="qtd" value="<?= ($estoque->getQtd() != '' ? $estoque->getQtd() : '') ?>">
					</div>
				</div>
				<div class="col-5">	
					<div class="form-group">
						<label for="validade">Data de validade</label>
						<input type="date" class="form-control" name="validade" id="validade" value="<?= ($estoque->getValidade() != '' ? $estoque->getValidade() : '') ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success w-100">Salvar</button>
			</div>
		</form>
	</div>
</div>

<?php include './layout/footer.php'; ?>
