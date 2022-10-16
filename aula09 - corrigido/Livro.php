<?php
require_once 'publicacao.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($ti, $au, $totP, $le)
    {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($totP);
        $this->setLeitor($le);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }


    public function detalhes()
    {
        echo "<p>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor() . "</p>";
        echo "<p>Páginas: " . $this->getTotPaginas() . "</p>";
        echo "<p>Sendo lido por " . $this->leitor->getNome();
    }

    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }

    public function folhear($p)
    {
        if ($p > $this->getTotPaginas()) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($p);
        }
    }

    public function avancarPag()
    {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPag()
    {
        $this->setPagAtual($this->getPagAtual() - 1);
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    public function getAberto()
    {
        return $this->aberto;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }
}
