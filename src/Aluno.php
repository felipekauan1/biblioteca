<?php
namespace Felipe\Biblioteca;

class Aluno extends Usuario {
    private const MAX_LIVROS_IMPRESTADOS = 1;

    public function podePegarEmprestado() {
        return count($this->livrosEmprestados) < self::MAX_LIVROS_IMPRESTADOS;
    }
}
?>