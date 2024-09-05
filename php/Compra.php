<?php
    namespace Projeto\projetoLivraria\php;
    require_once("Cliente.php");
    require_once("Funcionario.php");
    require_once("Livro.php");
    
    use Projeto\projetoLivraria\php\Compra;
    use Projeto\projetoLivraria\php\Cliente;
    use Projeto\projetoLivraria\php\Funcionario;
    use Projeto\projetoLivraria\php\Livro;

    class Compra{
        private int $codigoCompra;
        private Livro $livro; //Objeto Livro
        private int $quantidadeCompra;
        private float $totalCompra;
        private Cliente $cliente;//Objeto Cliente
        private Funcionario $funcionario;//Objeto Funcionario

        public function __construct(
            int $codigoCompra,
            Livro $livro,
            int $quantidadeCompra,
            float $totalCompra,
            Cliente $cliente,
            Funcionario $funcionario)
        {
            $this->codigoCompra = $codigoCompra;
            $this->livro = $livro;
            $this->quantidadeCompra = $quantidadeCompra;
            $this->totalCompra = $totalCompra;
            $this->cliente = $cliente;
            $this->funcionario = $funcionario;

        }//Fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        } 

        
        public function imprimir():string
        {
            return "<br><br>Código do produto: ".$this->codigoCompra.
            "<br> Livro: ".$Livro->imprimir().
            "<br> Quantidade: ".$this->getQuantidade().
            "<br> Total: ".$this->getTotal().
            "<br> Cliente: ".$cliente->imprimir().
            "<br> Funcionário: ".$funcionario->imprimir();
        }
        
    }//Fim da Classe Compra



?>