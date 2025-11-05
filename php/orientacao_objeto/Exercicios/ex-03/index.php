<?php
require_once "pessoa.class.php";
require_once "cliente.class.php";
require_once "prestador.class.php";
require_once "servico.class.php";
require_once "itens.class.php";
require_once "agenda.class.php";

$cliente = new Cliente();
$cliente->setNome("João Silva");
$cliente->setCelular("(11) 98246-2561");
$cliente->setCpf("153.758.789-00");

$prestador = new Prestador();
$prestador->setNome("Carlos Souza");
$prestador->setCelular("(11) 99924-4674");
$prestador->setEspecialidade("Corte Masculino");

$servico1 = new Servico();
$servico1->setDescritivo("Corte de cabelo");
$servico1->setPreco(35.00);

$servico2 = new Servico();
$servico2->setDescritivo("Barba completa");
$servico2->setPreco(20.00);

$item1 = new Itens();
$item1->setHorario("10:00");
$item1->setStatus("Ativo");
$item1->setServico($servico1);

$item2 = new Itens();
$item2->setHorario("10:45");
$item2->setStatus("Ativo");
$item2->setServico($servico2);

$agenda = new Agenda();
$agenda->setData("04/11/2025");
$agenda->setCliente($cliente);
$agenda->setPrestador($prestador);
$agenda->setItens([$item1, $item2]);

echo "<h2>Agenda do Dia: " . $agenda->getData() . "</h2>";

echo "<h3>Cliente:</h3>";
echo "Nome: " . $agenda->getCliente()->getNome() . "<br>";
echo "Celular: " . $agenda->getCliente()->getCelular() . "<br>";
echo "CPF: " . $agenda->getCliente()->getCpf() . "<br>";

echo "<h3>Prestador:</h3>";
echo "Nome: " . $agenda->getPrestador()->getNome() . "<br>";
echo "Celular: " . $agenda->getPrestador()->getCelular() . "<br>";
echo "Especialidade: " . $agenda->getPrestador()->getEspecialidade() . "<br>";

echo "<h3>Itens da Agenda:</h3>";

foreach ($agenda->getItens() as $item) {
    echo "Horário: " . $item->getHorario() . "<br>";
    echo "Status: " . $item->getStatus() . "<br>";
    echo "Serviço: " . $item->getServico()->getDescritivo() . "<br>";
    echo "Preço: R$ " . number_format($item->getServico()->getPreco(), 2, ',', '.') . "<br><br>";
}
?>
