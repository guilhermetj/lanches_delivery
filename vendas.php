<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>

<div class="row" style="margin-top:40px">
	<div class="col-6">
		<h2>Gerenciar Vendas</h2>
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

</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped table-responsive-lg">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Código</th>
				<th>Data</th>
				<th>Forma Pagamento</th>
				<th>Status</th>
				<th>Cliente</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td>R$ </td>
				<td></td>
				<td></td>
				<td>
					<?= $venda->nome ?> <br>
					<small><?= $venda->email ?></small>
				</td>
				<td>
					<a class="btn btn-primary" href="#" id="pedidos" data-toggle="modal" data-target="#listaprodutos<?= $venda->getId(); ?>">
						<i class="fas fa-eye"></i>
					</a>
					<a href="controle_venda.php?acao=editar&id=<?= $venda->getId() ?>&status=Finalizada" class="btn btn-success" data-toggle="tooltip" title="Finalizar venda" onclick="return confirm('Deseja realmente finalizar?')">
						<i class="fas fa-thumbs-up"></i>
					</a>
					<a href="controle_venda.php?acao=editar&id=<?= $venda->getId() ?>&status=Pendente" class="btn btn-warning" data-toggle="tooltip" title="Venda pendente" onclick="return confirm('Deseja realmente marcar pendência?')">
						<i class="fas fa-thumbs-down"></i>
					</a>
					<a href="controle_venda.php?acao=deletar&id=<?= $venda->getId() ?>" onclick="return confirm('Deseja realmente excluir?')" class="btn btn-danger" data-toggle="tooltip" title="Excluir produto">
						<i class="fas fa-trash-alt"></i>
					</a>


					<div class="modal fade" id="listaprodutos<?= $venda->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="labelCompra" aria-hidden="true">
					        <div class="modal-dialog modal-lg" role="document">
					          <div class="modal-content">
					            <div class="modal-header">
					              <h5 class="modal-title" id="labelCompra">Lista de produtos</h5>
					              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					                <span aria-hidden="true">&times;</span>
					              </button>
					            </div>
					            <div class="modal-footer">
					              <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar janela</button>
					            </div>
					          </div>
					        </div>
					      </div>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<?php include './layout/footer.php'; ?>