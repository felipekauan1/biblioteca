<?php
namespace Felipe\Biblioteca;

class Bibliotecario {
    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante) {
        // o livro tem que estar na estante
        // o livro tem que estar disponivel
        // o usuario tem que poder pegar emprestado

        if (!$livro->estaDisponivel()) {
            echo '<br>O livro não está disponivel<br>';
            return false;
        }

        if (!$estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>O livro não está na estante<br>';
            return false;
        }

        if (!$usuario->podePegarEmprestado()) {
            echo '<br>O usuário não pode pegar emprestado<br>';
            return false;
        }

        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        $livro->marcarComoEmprestado();
        echo '<br>Livro emprestado com sucesso<br>';

        return true;
    }

    public function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante) {
        // o livro tem que estar com o usuário
        // o livro tem que passar a estar disponivel
        // o livro tem que ser colocado na estante

        if ($livro->estaDisponivel()) {
            echo '<br>O livro não está emprestado<br>';
            return false;
        }

        if ($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>O livro já está na estante<br>';
            return false;
        }

        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();
        echo '<br>Livro devolvido com sucesso<br>';

        return true;
    }
}
?>