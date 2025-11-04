<?php
require_once "pessoa.class.php";
require_once "telefone.class.php";
require_once "chef.class.php";
require_once "avaliador.class.php";
require_once "receita.class.php";
require_once "avaliação.class.php";

$chef = new Chef("Confeitaria");
$chef->setNome("Jackã");

$telChef = new Telefone("11", "98435-1234");
$chef->setTelefone($telChef);

$receita1 = new Receita("Bolo de Chocolate", "Farinha, Ovos, Açúcar, Chocolate");
$chef->setReceita($receita1);

$avaliador = new Avaliador("515.717.919-42");
$avaliador->setNome("Fulano da Silva");

$telAvaliador = new Telefone("21", "99678-5542");
$avaliador->setTelefone($telAvaliador);

$avaliacao = new Avaliacao(9.5);
$avaliacao->setReceita($receita1);
$avaliacao->setAvaliador($avaliador);

echo "<h2> Avaliação da Receita</h2>";

echo "<strong>Receita:</strong> " . $avaliacao->getReceita()->getNome() . "<br>";
echo "<strong>Ingredientes:</strong> " . $avaliacao->getReceita()->getIngredientes() . "<br><br>";

echo "<strong>Chef:</strong> " . $chef->getNome() . "<br>";
echo "<strong>Especialidade:</strong> " . $chef->getEspecialidade() . "<br>";
foreach ($chef->getTelefones() as $t) {
    echo "<strong>Telefone do Chef:</strong> ({$t->getDdd()}) {$t->getNumero()}<br>";
}

echo "<br><strong>Avaliador:</strong> " . $avaliacao->getAvaliador()->getNome() . "<br>";
echo "<strong>CPF:</strong> " . $avaliacao->getAvaliador()->getCpf() . "<br>";
foreach ($avaliacao->getAvaliador()->getTelefones() as $t) {
    echo "<strong>Telefone do Avaliador:</strong> ({$t->getDdd()}) {$t->getNumero()}<br>";
}

echo "<br><strong>Nota da Avaliação:</strong> " . $avaliacao->getNota();
?>
