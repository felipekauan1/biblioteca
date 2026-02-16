<?php
namespace Felipe\Biblioteca;

abstract class Usuario {
    protected string $nome;
    protected array $livrosEmprestados = [];
    
    // construtor
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    abstract function podePegarEmprestado();
    abstract function adicionarLivroEmprestado();
    abstract function removerLivroEmprestado();
    abstract function listarLivrosEmprestados();
}
?>