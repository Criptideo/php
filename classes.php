<?php

class Ash { // classe
    public $nome;
    public $idade;
    public function Conversa() { //metodo
        echo "meow meow meow <br>";
    }
    
}

$Oliver = new Ash(); //instanciar a classe
$Oliver->nome = "Oliver";
$Oliver->idade = 22;
$Oliver->Conversa();
echo $Oliver->nome; 
?>
