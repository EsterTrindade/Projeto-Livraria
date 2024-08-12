<?php
    namespace Projeto\projetoLivraria\php;
    use Projeto\projetoLivraria\php\Cliente;
    use Projeto\projetoLivraria\php\Pessoa;

    require_once("Pessoa.php")//Pq vc citou a classe pessoa

    //extends = processo de herança

    class Cliente extends Pessoa{
        protected int $codigoCliente;
        protected float $totalCompra;
        
        function __construct(int $codigo, string $cpf, string $nome, string $telefone, string $endereco, float $totalCompra)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco); //referente

            $this->codigo = $codigo;
            $this->totalCompra = $total;
            
        }//Fim do método Construtor

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
            parent::imprimir();
            return "<br>Código:".$this->codigo.
            "<br>Total de Compras: ".$this->totalCompra;
        }

    }//Fim da classe cliente


?>