<?php
    namespace Projeto\projetoLivraria\php;
    require_once("Pessoa.php");
    use Projeto\projetoLivraria\php\Funcionario;
    use Projeto\projetoLivraria\php\Pessoa;

    class Funcionario extends Pessoa{
        protected int $codigo;
        protected string $cargo;
        protected float $salario;
        protected string $setor;

        parent:: __construct(string $cpf, string $nome, string $telefone,string $endereco, int $codigo, string $cargo, float $salario, string $setor);
        {
            $this->codigo = $codigo;
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->setor = $setor;
        }//Fim do método construtor


        public function getCodigoFun():int
        {
            return $this->codigo;
        }//Fim do Get

        public function setCodigoFun(int $codigo):void
        {
            $this->codigo = $codigo;
        }//Fim do Set

        public function getNomeFun():string
        {
            return $this->nomeFuncionario;
        }//Fim do Get

        public function setNomeFun(string $nomeFuncionario):void
        {
            $this->nomeFuncionario = $nomeFuncionario;
        }//Fim do Set

        public function getCargoFun():string
        {
            return $this->cargo;
        }//Fim do Get

        public function setCargoFun(string $cargo):void
        {
            $this->cargo = $cargo;
        }//Fim do Set
    

        public function getSalarioFun():float
        {
            return $this->salario;
        }//Fim do Get

        public function setSalarioFun(float $salario):void
        {
            $this->salario = $salario;
        }//Fim do Set

        public function getSetorFun():string
        {
            return $this->setor;
        }//Fim do Get

        public function setSetorFun(string $setor):void
        {
            $this->setor = $setor;
        }//Fim do Set



        public function imprimir():string
        {
            parent::imprimir();
            return "<br><br> Código Funcionário: ".$this->getCodigoFun().
            "<br>Nome do Funcionário: ".$this->getNomeFun().
            "<br>Cargo: ".$this->getCargoFun().
            "<br>Salário: ".$this->getSalarioFun().
            "<br>Setor: ".$this->getSetorFun();
        }

    }

?>