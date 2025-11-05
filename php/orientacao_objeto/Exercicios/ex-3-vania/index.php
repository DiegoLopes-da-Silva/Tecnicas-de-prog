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

$agenda-> setItens("10:00", "Cancelado", $servico2, null, $prestador2);
echo "<pre>";
var_dump($agenda);
echo "<pre>";

?>