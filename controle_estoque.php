<?php 
require 'classes/Estoque.php';
require 'classes/EstoqueDAO.php';

$estoque = new Estoque();
$estoqueDAO = new EstoqueDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}
if ($acao == 'deletar') {
	deletar($estoqueDAO, $id);
	$msg = 'Deletado com Sucesso';
	header("Location: estoque.php?msg=$msg");

} else if($acao == 'cadastrar') {
	cadastrar($estoqueDAO, $estoque);
	$msg = 'Produto cadastrado com sucesso';
	
	header("Location: estoque.php?msg=$msg");
} else if ($acao == 'editar'){
	editar($estoqueDAO, $estoque, $id);
	$msg = 'Editado com Sucesso';
	header("Location: estoque.php?msg=$msg");
}

function cadastrar($estoqueDAO, $estoque){

	$estoque->setNomeProduto($_POST['nome_produto']);
	$estoque->setValorUn($_POST['valor_un']);
	$estoque->setQtd($_POST['qtd']);
	$estoque->setValidade($_POST['validade']);
	$estoqueDAO->insereestoque($estoque);
}
function deletar($estoqueDAO, $id){
	 $estoqueDAO->deletar($id);
}
function editar($estoqueDAO, $estoque, $id){

	$estoque->setId($_POST['id']);
	$estoque->setNomeProduto($_POST['nome_produto']);
	$estoque->setValorUn($_POST['valor_un']);
	$estoque->setQtd($_POST['qtd']);
	$estoque->setValidade($_POST['validade']);
	$estoqueDAO->alteraestoque($estoque);

}



