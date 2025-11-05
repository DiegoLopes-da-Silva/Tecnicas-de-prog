<?php 
require_once "pessoa.class.php";
require_once "cliente.class.php";
require_once "prestador.class.php";
require_once "agenda.class.php";
require_once "itens.class.php";
require_once "servico.class.php";

$servico = new Servico("Pintura", 100.00);
$servico2 = new Servico("Encanamento", 20.00);

$prestador = new Prestador("Pintura", array(), "Cleiton", "(14)99812-9815");
$prestador2 = new Prestador("Encanamento", array(), "O Brabão", "(14) 99132-6545");
//Ela fez esse ai maaaas não pega pra nós não sei porque
#$prestador = new Prestador(descritivo:"pintura predial", nome "João da Silva", celular: "(14) 999999999)

$agenda = new Agenda("05/11/2025", "19:30", "Ativo", $servico, null, $prestador);

$cliente = new Cliente("0880.738.673-92", "Maria da Silva", "(14) 997777798");

$agenda-> setItens("10:00", "Cancelado", $servico2, null, $prestador2);
echo "<h2>Agenda</h2>";
echo "Data: {$agenda->getData()}<br>";
echo "<h3>Cliente</h3>";
echo "Nome: {$agenda->getCliente()->getNome()} 
- Celular: {$agenda->getCliente()->getCelular()} 
- CPF: {$agenda->getCliente()->getCpf()}<br>";
echo "<h3>Itens da agenda</h3>";
foreach($agenda->getItens() as $itens)
    {
        echo "Horário: {$itens->getHorario()}<br>";
        echo "Serviço: {$itens->getServico()->getDescritivo()} - {$itens->getServico()->getPreco()} - {$itens->getServico()->getStatus()} <br>";
        echo "Prestador: {$itens->getPrestador()->getNome()} - {$itens->getPrestador()->getNome()} - {$itens->getPrestador()->getCelular()} - {$itens->getPrestador()->getEspecialidade()}";

    }

?>