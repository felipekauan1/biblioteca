<?php
namespace Felipe\Biblioteca;

use Exception;

abstract class Usuario {
    protected string $nome;
    protected array $livrosEmprestados = [];
    
    // construtor
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    // método abstrato
    abstract function podePegarEmprestado();
    
    // métodos
    public function adicionarLivroEmprestado(Livro $livro): void {
        if ($this->podePegarEmprestado()) {
            $this->livrosEmprestados[] = $livro;
        } else {
            throw new \Exception("O usuário não pode pegar livros emprestados!");
        }
        
    }

    public function removerLivroEmprestado(Livro $livro): void {
        $this->livrosEmprestados = array_filter(
            $this->livrosEmprestados,

            function ($livroAtual) use ($livro) {
                if ($livroAtual === $livro) {
                    throw new \Exception('Livro removido!');
                }
                return $livroAtual !== $livro;
            }
        );
    }

    public function listarLivrosEmprestados(): array {
        return $this->livrosEmprestados;
    }

}
?>