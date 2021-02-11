<?php  


class Estoque 
{
	private $id;
	private $nome_produto;
	private $valor_un;
	private $qtd;
	private $valor_total;
	private $validade;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    /**
     * @param mixed $nome_produto
     *
     * @return self
     */
    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorUn()
    {
        return $this->valor_un;
    }

    /**
     * @param mixed $valor_un
     *
     * @return self
     */
    public function setValorUn($valor_un)
    {
        $this->valor_un = $valor_un;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd
     *
     * @return self
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    /**
     * @param mixed $valor_total
     *
     * @return self
     */
    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * @param mixed $validade
     *
     * @return self
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;

        return $this;
    }
}