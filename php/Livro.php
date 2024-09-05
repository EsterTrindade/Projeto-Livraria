<?php
    //declarei o projeto
    namespace Projeto\projetoLivraria\php;
    //fiz a conexão
    use projeto\projetoLivraria\php\Pessoa;
    use projeto\projetoLivraria\php\livro;

class Livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private int $edicao;
        private string $dtLancamento;
        private int $quantidade;
        private float $precoUnitario;
        private float $total;

        public function __construct(int $isbn, string $titulo, string $autor, int $edicao, string $dtLancamento, int $quantidade, float $precoUnitario, float $total)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->edicao = $edicao;
        $this->dtLancamento = $dtLancamento;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->total = $total;

    }//Fim do construct

    public function getISBN():int
    {
        return $this->isbn;
    }//Fim do getISBN

    public function setISBN(int $isbn):void
    {
        $this->isbn = $isbn;
    }//Fim do setISBN

    public function getTitulo():string
    {
        return $this->titulo;
    }//Fim do get

    public function setTitulo(string $titulo):void
    {
        $this->titulo = $titulo;
    }//Fim do set

    public function getAutor():string
    {
        return $this->autor;
    }//Fim do get

    public function setAutor(string $autor):void
    {
        $this->autor = $autor;
    }//Fim do set

    public function getEdicao():int
    {
        return $this->edicao;
    }//Fim do get

    public function setEdicao(int $edicao):void
    {
        $this->edicao = $edicao;
    }//Fim do set

    public function getLancamento():string
    {
        return $this->dtLancamento;
    }//Fim do get

    public function setLancamento(string $dtLancamento):void
    {
        $this->dtLancamento = $dtLancamento;
    }//Fim do set

    public function getQuantidade():int
    {
        return $this->quantidade;
    }//Fim do get

    public function setQuantidade(int $quantidade):void
    {
        $this->quantidade = $quantidade;
    }//Fim do set

    public function getUnitario():float
    {
        return $this->precoUnitario;
    }//Fim do get

    public function setUnitario(float $precoUnitario):void
    {
        $this->precoUnitario = $precoUnitario;
    }//Fim do set

    public function getTotal():float
    {
        return $this->total;
    }//Fim do get

    public function setTotal(float $total):void
    {
        $this->total = $total;
    }//Fim do set


    //---------------------#### Calcular ####--------------------------

    public function calcularTotal():float
    {
        $this->setTotal($this->getUnitario() * $this->getQuantidade());
        $this->getTotal();

    }//Fim do método calcular


    public function imprimir():string
    {
        return "<br>ISBN: ".$this->getISBN().
                "<br>Título: ".$this->getTitulo().
                "<br>Autor: ".$this->getAutor().
                "<br>Edição: ".$this->getEdicao().
                "<br>Data de Lançamento: ".$this->getLancamento().
                "<br>Quantidade: ".$this->getQuantidade().
                "<br>Preço Unitário: R$".$this->getUnitario().
                "<br>Preço Total: R$".$this->getTotal();
    }//Fim do método imprimir

}

?>