<?php 

require_once "autor.class.php";
require_once "emprestimo.class.php";
require_once "livro.class.php";
require_once "pessoa.class.php";

# $Fulano = new Pessoa("Fulano da Silva");

# $Ciclano = new Autor("Nordestino", "Ciclano de Souza");

# $CavernasEDragoes = new Livro("Caverna dos Mistérios", 1200, $Ciclano);

# $emprestimo = new Emprestimo("05 de Fevereiro", "25 de Dezembro", $CavernasEDragoes);

$Fulano = new Pessoa();
$Fulano -> setNome("Fulano");

$Ciclano = new Autor();
$Ciclano -> setNacionalidade("Nordestino", $Fulano);

$CavernasEDragoes = new Livro();
$CavernasEDragoes = setTitulo("caverna");
$CavernasEDragoes = setAno(1200);
$CavernasEDragoes = setAutor($Ciclano);

$emprestimo = new Emprestimo();
$emprestimo -> setDataEmprestimo("5 de fevereiro");
$emprestimo -> setDataDevolucao("25 de dezembro");
$emprestimo -> setLivro($CavernasEDragoes);

echo "<h2>Pessoa - Nome {$Fulano->getNome()}</h2><br>";
echo "<h2>Autor - Nacionalidade {$Ciclano->getNacionalidade()}</h2>";
echo "<h2>Autor - Nome {$Ciclano->getNome()}</h2> <br>";
echo "<h2>Livro - Titulo {$CavernasEDragoes->getTitulo()}</h2>";
echo "<h2>Livro - Ano {$CavernasEDragoes->getAno()}</h2>";
echo "<h2>Livro - Autor {$CavernasEDragoes->getAutor()->getNome()}</h2><br>";
echo "<h2>Emprestimo - DataEmprestimo {$emprestimo->getDataEmprestimo()}</h2>";
echo "<h2>Emprestimo - DataDevolucao {$emprestimo->getDataDevolucao()}</h2>";
echo "<h2>Emprestimo - Livro {$emprestimo->getLivro()}</h2>";
?>