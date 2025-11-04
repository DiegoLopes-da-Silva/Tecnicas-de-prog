<?php
require_once "pessoa.class.php";
require_once "proprietario.class.php";
require_once "shopping.class.php";
require_once "loja.class.php";
require_once "condominio.class.php";

// Criando Proprietário
$proprietario = new Proprietario();
$proprietario->setNome("Carlos Almeida");
$proprietario->setCpf("581-394-123-50");

// Criando Shopping
$shopping = new Shopping();
$shopping->setNome("Shopping Central");
$shopping->setCnpj("71.471.073/0001-00");

// Criando Loja
$loja = new Loja();
$loja->setLotes(3);
$loja->setNumero("LJ-25");
$loja->setShopping($shopping);
$loja->setProprietario($proprietario);

// Criando Condomínio
$condominio = new Condominio();
$condominio->setDataGeracao("01/11/2025");
$condominio->setValor(1500.75);
$condominio->setDataPagamento("05/11/2025");
$condominio->setLoja($loja);

// Exibindo os dados
echo "<h2>Condomínio - Loja {$condominio->getLoja()->getNumero()}</h2>";
echo "Data de Geração: {$condominio->getDataGeracao()}<br>";
echo "Valor: R$ " . number_format($condominio->getValor(), 2, ',', '.') . "<br>";
echo "Data de Pagamento: {$condominio->getDataPagamento()}<br>";

echo "<h3>Informações da Loja:</h3>";
echo "Número: {$condominio->getLoja()->getNumero()}<br>";
echo "Lotes: {$condominio->getLoja()->getLotes()}<br>";

echo "<h3>Shopping:</h3>";
echo "Nome: {$condominio->getLoja()->getShopping()->getNome()}<br>";
echo "CNPJ: {$condominio->getLoja()->getShopping()->getCnpj()}<br>";

echo "<h3>Proprietário:</h3>";
echo "Nome: {$condominio->getLoja()->getProprietario()->getNome()}<br>";
echo "CPF: {$condominio->getLoja()->getProprietario()->getCpf()}<br>";
?>
