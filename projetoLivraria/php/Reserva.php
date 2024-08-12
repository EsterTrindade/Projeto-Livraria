<?php
    namespace Projeto\projetoLivraria\php;
    use Projeto\projetoLivraria\php\Reserva;

    class Reserva{
        private int $codigoRes;
        private string $tituloLivro;
        private string $pessoa;
        private int $quantidadeR;

        public function __construct(int $codigoRes, string $tituloLivro, string $pessoa, int $quantidadeR)
        {
            $this->codigoRes = $codigoRes;
            $this->tituloLivro = $tituloLivro;
            $this->pessoa = $pessoa;
            $this->quantidade = $quantidadeR;
        }//Fim do método construtor

        public function getCodigoReserva():int
        {
            return $this->codigoRes;
        }

        public function setCodigoReserva(int $codigoRes):void
        {
            $this->codigoRes = $codigoRes;
        }

        public function getTituloLivro():string
        {
            return $this->tituloLivro;
        }

        public function setTituloLivro(string $tituloLivro):void
        {
            $this->tituloLivro = $tituloLivro;
        }

        public function getPessoaReserva():string
        {
            return $this->pessoa;
        }

        public function setPessoaReserva(string $pessoa):void
        {
            $this->pessoa = $pessoa;
        }

        public function getQuantidadeReserva():int
        {
            return $this->quantidadeR;
        }

        public function setQuantidadeReserva(int $quantidadeR):void
        {
            $this->quantidadeR = $quantidadeR;
        }



        public function imprimir():string
        {
            return "<br><br> Código da Reserva: ".$this->getCodigoReserva().
            "<br>Nome do Livro: ".$this->getTituloLivro().
            "<br>Pessoa: ".$this->getPessoaReserva().
            "<br>Quantidade: ".$this->getQuantidadeReserva();
        }

    }


?>