<?php
namespace Felipe\Biblioteca;

class Professor extends Usuario {
    private const MAX_LIVROS_IMPRESTADOS = 3;

    public function podePegarEmprestado() {
        return count($this->livrosEmprestados) < self::MAX_LIVROS_IMPRESTADOS;
    }
}
?>