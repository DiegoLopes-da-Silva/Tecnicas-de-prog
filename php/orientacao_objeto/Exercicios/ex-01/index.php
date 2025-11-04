<?php
require_once "cliente.class.php";
require_once "contratado.class.php";
require_once "decoracao.class.php";
require_once "festa.class.php";
require_once "pessoa.class.php";
require_once "telefone.class.php";

$cliente = new Pessoa("João da Silva");
$cliente->setTelefone(new Telefone(11, "99999-1234"));
$cliente->setTelefone(new Telefone(11, "98888-5678"));

$contratado = new Pessoa("Maria de Souza");
$contratado->setTelefone(new Telefone(11, "97777-4321"));

$decoracao1 = new Decoracao("Balões coloridos");
$decoracao2 = new Decoracao("Arranjos de flores");

$festa = new Festa("01/11/2025", "20/12/2025", 3500.00);
$festa->setDecoracoes([$decoracao1, $decoracao2]);

echo "<h2>Festa</h2>";
echo "<strong>Data do Contrato:</strong> {$festa->getDataContrato()}<br>";
echo "<strong>Data da Festa:</strong> {$festa->getDataFesta()}<br>";
echo "<strong>Valor:</strong> R$" . number_format($festa->getValor(), 2, ",", ".") . "<br><br>";

echo "<h3>Cliente</h3>";
echo "Nome: {$cliente->getNome()}<br>";
echo "Telefone(s):<br>";
foreach($cliente->getTelefones() as $tel) {
    echo "- (" . $tel->getDdd() . ") " . $tel->getNumero() . "<br>";
}


echo "<h3>Contratado</h3>";
echo "Nome: {$contratado->getNome()}<br>";
echo "Telefone(s):<br>";
foreach($cliente->getTelefones() as $tel) {
    echo "- (" . $tel->getDdd() . ") " . $tel->getNumero() . "<br>";
}


echo "<h3>Decorações da Festa</h3>";
foreach($festa->getDecoracoes() as $decor) {
    echo "• {$decor->getDescritivo()}<br>";
}
?>
