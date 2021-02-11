<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
require 'classes/Estoque.php';
require 'classes/EstoqueDAO.php';

$estoqueDAO = new EstoqueDAO();
if(isset($_GET['pesquisa']) && $_GET['pesquisa'] != '') {
	$estoque = $estoqueDAO->listar($_GET['pesquisa']);
} else {
	$estoque = $estoqueDAO->listar();
}
$estoque = $estoqueDAO->listar();

 ?>
<div class="container">
	<div class="row">
	<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-success col-12 ">'.$_GET['msg'].'</div>';
	}
	?>
</div>

<div class="row" >

	<div class="col-6">
		<h2>Gerenciar produtos</h2>
	</div>
	<div class="col-4">
	<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
      	<i class="fas fa-search"></i>	
      </button>
      <a href="./vendas.php" class="btn btn-outline-warning my-2 my-sm-0">
      	<i class="fas fa-trash-alt"></i>
      </a>
    </form>
	</div>
	<div class="col-2">
		<a href="form_estoque.php" class="btn btn-success">Adicionar produto</a>
	</div>

</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped table-responsive-lg">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Produto</th>
				<th>Valor Unidade</th>
				<th>Quantidade</th>
				<th>Validade</th>
				<th>ValorTotal</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($estoque as $estoque_produto){ ?>
			<tr <?php if($estoque_produto->getQtd() < 3) {
					echo 'class="table-danger"';
				} else if($estoque_produto->getQtd() < 10) {
					echo 'class="table-warning"';
				} else if($estoque_produto->getQtd() > 10) {
					echo 'class="table-success"';
				}
				?>
			>
				<td><?= $estoque_produto->getId()?></td>
				<td><?= $estoque_produto->getNomeProduto()?></td>
				<td>R$  <?= $estoque_produto->getValorUn()?></td>
				<td><?= $estoque_produto->getQtd()?></td>
				<td><?= $estoque_produto->getValidade()?></td>
				<td><?= $estoque_produto->getValorTotal()?></td>
				<td>

					<a href="form_estoque.php?id=<?= $estoque_produto->getId() ?>" class="btn btn-warning" onclick="return confirm('Deseja realmente Editar este produto?')">
						<i class="fas fa-edit"></i>
					</a>
					<a href="controle_estoque.php?acao=deletar&id=<?= $estoque_produto->getId() ?>" class="btn btn-danger" title="excluir" onclick="return confirm('Deseja realmente excluir?')">
						<i class="fas fa-trash-alt"></i>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>
<?php include './layout/footer.php'; ?>