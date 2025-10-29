<?php 

require_once "filme.class.php";
require_once "ator.class.php";
require_once "papel.class.php";

$filme = new Filme("Filme lendário");
$ator = new Ator("Charles do chapéu grande vulgo ator lendário");

$papel = new Papel("Papel feito pelo ator no filme", $filme, $ator);

echo "<pre>";
var_dump($papel);
echo "</pre>";

?>