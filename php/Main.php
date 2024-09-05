<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoLivraria\php;
    //Colocar qual classe eu vou utilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Funcionario.php");
    require_once("Reserva.php");
    //Mostrar quem eu vou usar - Reforço
    use Projeto\projetoLivraria\php\Pessoa;
    use Projeto\projetoLivraria\php\Livro;
    use Projeto\projetoLivraria\php\Compra;
    use Projeto\projetoLivraria\php\Funcionario;
    use Projeto\projetoLivraria\php\Reserva;

    $pessoa1 = new Pessoa("121354686", "Claudio", "1195656956", "Avenida senador vergueiro <br>");

    echo $pessoa1->imprimir();

    $pessoa2 = new Pessoa("745656321", "Humberto", "1195646589", "Rua da paz  <br>");

    echo $pessoa2->imprimir();

    //-------------------------#### LIVRO ####-------------------------------

    $livro1 = new Livro(1234, "Romeu e julieta", "Shakespeare", 1, "29/02/1989", 100, 15, 1500);

    echo $livro1->imprimir();

    //----------------------------------------------

    $compra1 = new Compra(1896, "Romeu e Julieta", 1, 150);

    echo $compra1->imprimir();

    //------------------------------------------

    $funcionario1 = new Funcionario(123, "Leandro", "Gestor", 10000, "TI");

    echo $funcionario1->imprimir();

    //---------------------------------------------

    $reserva1 = new Reserva(321, "A culpa é das estrelas", "Mariana", 2);

    echo $reserva1->imprimir();



?>