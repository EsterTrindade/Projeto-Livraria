<?php
    //Definir o Projeto = Especificar as pastas
    namespace Projeto\projetoLivraria\php; //Diretório (Onde está o arquivo).

    //Especifica qual classe eu vou utilizar
    use Projeto\projetoLivraria\php\Pessoa;

    class Pessoa{
        //Encapsular as variáveis
        //Declaração de variáveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        //instanciar = dar um valor inicial
        //Método Construtor (importante para instancias variaveis)

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){ //parametro-uma coisa que vem de fora
            $this->cpf = $cpf; 
            $this->nome = $nome; 
            $this->telefone = $telefone; 
            $this->endereco = $endereco; 

            //fazer referencia a uma variavel que existe, não precisa do "$" na variavel pois ele está no "this"

        }//Fim do método construtor

        //Métodos Gets e Sets - Acesso e Modificação
        public function getcpf():string{
 
            return $this->cpf;
        } // fim do metodo gets e sets -- retornar cpf
 
 
        // modificar cpf
        public function setcpf( string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do metodo modificar cpf

        public function getNome():string
        {
            return $this->nome;
        }//Fim do método consultarNome

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do método alterar nome

        public function getTelefone():string
        {
            return $this->telefone;
        }//Fim do método consultar Telefone

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do método alterar telefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//Fim do método consultar endereço

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do método alterar endereço

        public function imprimir():string
        {
            return "<br>CPF: ".$this->getCPF().
                    "<br>Nome: ".$this->getNome().
                    "<br>Telefone: ".$this->getTelefone().
                    "<br>Endereço: ".$this->getEndereco();
        }//Fim do imprimir

    }//Fim da Classe



?>