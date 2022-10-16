<?php
class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;


    public function __construct($n, $i, $s)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getIdade()
    {
        return $this->idade;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
}
