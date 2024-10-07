<?php

class Estudante
{ //criação de uma classe
    public $nome;              //visibilidade pública
    public $telefone;
    public $email;
    public $DataNascimento;

    //método ou função que exerce uma ação
    public function funçaoCadastro(){
        echo "<br>Nome: ". $this->nome; //recuperando o valor atribuido
        echo "<br>Data de Nascimento: ". $this->DataNascimento;
        echo "<br>Contato: ". $this->telefone;
        echo "<br>E-mail: ". $this->email;
    } 
    
}
//para POO, nós criamos a classe como um arquivo isolado para poder manipulá-la, reusá-la e deletá-la.

?>
