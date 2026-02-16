<?php
namespace Felipe\Biblioteca;

class Visitante extends Usuario {
    private const MAX_LIVROS_IMPRESTADOS = 0;

    public function podePegarEmprestado() {
        return false;
    }
}
?>