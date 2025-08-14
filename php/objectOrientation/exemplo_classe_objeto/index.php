<?php
//require "usuario.php";
require_once "usuario.php";
//include "usuario.php";
//include_once "usuario.php";

//criando um objeto
$usuario1 = new Usuario("Altair", "doieoihe@gmail.com", "Senha123");
$usuario2 = new Usuario("Nome de Gente Legal ", "doieoiheA@gmail.com", "ASDFGHJKLC~~]");
$usuario3 = new Usuario(email:"sdasdasdsadsadsa@gmail.com", senha:"BomDeTerraria123", nome:"RogerinDoGrau");

echo "Nome: {$usuario1->getNome()}<br>";
echo "Email: {$usuario1->getEmail()}<br>";
echo "Senha: {$usuario1->getSenha()}<br>";

$usuario1->setNome("Altair Preto de Godoi");
echo "Nome: {$usuario1->getNome()}<br>";

//echo "<pre>";
//var_dump($usuario1);
//echo "</pre>";

//echo "<pre>";
//var_dump($usuario2);
//echo "</pre>";

//echo "<pre>";
//var_dump($usuario3);
//echo "</pre>";

//Anotações lendárias ntj -> 
//Padrões de projetos: 
//________________________________________________________
//|MVC (Model View Control) -> Arquitetural (Organização)|
//|Pastas -> Projetos (que contem as pastas) -> Views, controllers e models|
//|-------------------------------------------------------|
//|Models -> Armazena as classes de negócio (classes que pertencem ao contexto do software desenvolvido. Ex: Produto, Usuário, venda, etc...)|
//|Views -> Html, css, php, javascript, frameworks (É no geral a camada da apresentação / front)|
//|Controllers -> Controlador (Duh), cuida do endereçamento e trafego de execução (requisições), busca dados pra então apresentar.|
//|^Contém classes que só contem metodos e não atributos|
//|-----------------------------------------------------|
//|index.php (externo do arquivo das pastas, mas ainda dentro do projeto)|
//|_____________________________________________________|
?>