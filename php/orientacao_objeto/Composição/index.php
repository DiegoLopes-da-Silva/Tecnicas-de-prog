<?php 
//Faz a composição do lado do todo

require_once "pessoa.class.php";
require_once "celular.class.php";

//Instânciando o objeto do todo (pessoa)
$pessoa1 = new Pessoa("Dieguin", 14, "993532321");

//Adiciona um segundo celular pro Dieguin
$pessoa1->setCelular(14, "998581352");

//Instânciando objeto da parte(celular)
$pessoa2 = new Pessoa("Altairo");

//Adiciona o celular do Altairo
$celular1 = new Celular(14, "991234567", $pessoa2);

echo "<pre>";
var_dump($pessoa1);
echo "</pre>";
echo "<pre>";
var_dump($celular1);
echo "</pre>";

//Pra usar os gets é igualzin ao outro (agregação)
?>