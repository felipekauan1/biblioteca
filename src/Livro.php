<?php
namespace Felipe\Biblioteca;

class Livro {
    // atributos
    private string $titulo;
    private string $autor;
    private bool $disponivel;

    // construtor
    public function __construct(string $titulo, string $autor, bool $disponivel = false) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
    }

    // getters
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    // métodos
    public function marcarComoEmprestado(): void {
        $this->disponivel = false;
    }

    public function marcarComoDisponivel(): void {
        $this->disponivel = true;
    }

    public function estaDisponivel(): bool {
        return $this->disponivel;
    }
}

?>