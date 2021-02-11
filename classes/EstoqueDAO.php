<?php
require_once 'Model.php';
class EstoqueDAO extends Model
{
    public function __construct()
    {
    	parent::__construct();
        $this->tabela = 'estoque';
        $this->class  = 'Estoque';
    }

    public function insereEstoque(Estoque $estoque)
    {
    	$values = "null, 
    				'{$estoque->getNomeProduto()}',
    				'{$estoque->getValorUn()}', 
                    '{$estoque->getQtd()}',
                     null, 
                    '{$estoque->getValidade()}'";
                    
    	return $this->inserir($values);
    }

    public function listar($pesquisa = '')
    {
        if($pesquisa != '') {
            $sql = "SELECT * FROM {$this->tabela} 
                    WHERE nome like '%{$pesquisa}%'
                        OR descricao like '%{$pesquisa}%'
                        OR qtd like '%{$pesquisa}%'";
        } else {
            $sql = "SELECT * FROM {$this->tabela}";
        }
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function alteraEstoque(Estoque $estoque) 
    {
        $values = "nome_produto = '{$estoque->getNomeProduto()}',
                    valor_un = '{$estoque->getValorUn()}',
                    qtd = '{$estoque->getQtd()}',
                    validade = '{$estoque->getValidade()}'";
                    
        $this->alterar($estoque->getId(), $values);
    }

/*   

    public function filtrar($condicao = '')
    {
        $where = '';
        if($condicao != '') {
            $where = " WHERE {$condicao}";
        }
        $sql = "SELECT p.*, c.nome as nome_categoria FROM {$this->tabela} p
                LEFT JOIN categorias c ON p.categoria = c.id
                {$where}";
                //echo $sql; exit;
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }*/

}