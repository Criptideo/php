<?php
require_once ('cadastro.php');

//criar um objeto!
$Carlinhos = new Estudante(); //recolheu o nome de CLASSE

//atribuindo valores às variáveis
$Carlinhos->nome = "Carlinhos";
$Carlinhos->DataNascimento = "5-10-2003";
$Carlinhos->telefone = "(11) 98765-4321";
$Carlinhos->email = "Carlinhos@gmail.com";
//var_dump($Carlinhos)

echo "<div><strong>Dados de Cadastro</strong>";
$Carlinhos->funçaoCadastro();
echo "</div>"

?>
