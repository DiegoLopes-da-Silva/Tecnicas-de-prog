<?php 
require_once "produto.class.php";
require_once "categoria.class.php";

$categoria1 = new Categoria(1, "Material Escolar");
$categoria2 = new Categoria(2, "Material de Escritório");
$produto1 = new Produto(1, "Caneta", 3.00, array($categoria1, $categoria2));

//mostrar os dados do produto1
echo "<h2>Produto - {$produto1->getNome()}</h2>";
echo "Preco R$" . number_format ($produto1->getPreco(),2,",",".");
echo "<h3>Categoria(s)</h3>";
foreach($produto1->getCategoria() as $dado) {
    echo "Descritivo: {$dado->getDescritivo()}<br>";
}

?>