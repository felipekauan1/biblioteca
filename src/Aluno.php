<?php
namespace Felipe\Biblioteca;

class Aluno extends Usuario {
    private int $maximolivrosEmprestados = 1;

    public function podePegarEmprestado() {
        if (count($this->livrosEmprestados) < $this->maximolivrosEmprestados) {
            return true;
        }

        return false;
    }

}
?>