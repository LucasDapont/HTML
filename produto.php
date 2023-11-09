<?php

class Produto{
    private $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    function imprimirAtributos(){
        $this->nome =$_POST["nome"];

        echo $this->getNome();
    }
}
?>