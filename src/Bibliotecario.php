<?php
namespace Felipe\Biblioteca;

class Bibliotecario {
    public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante) {
        // o livro tem que estar na estante
        // o livro tem que estar disponivel
        // o usuario tem que poder pegar emprestado

        if (!$livro->estaDisponivel()) {
            throw new \Exception('O livro não está disponivel');
        }

        if (!$estante->verificarLivro($livro)) {
            throw new \Exception('O livro não está na estante');
        }

        if (!$usuario->podePegarEmprestado()) {
            throw new \Exception('O usuário não pode pegar emprestado');
        }

        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        $livro->marcarComoEmprestado();

        return true;
    }

    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante) {
        // o livro tem que estar com o usuário
        // o livro tem que passar a estar disponivel
        // o livro tem que ser colocado na estante

        if ($livro->estaDisponivel()) {
            throw new \Exception('O livro não está emprestado');
        }

        if ($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            throw new \Exception('O livro já está na estante');
        }

        if (!in_array($livro, $usuario->listarLivrosEmprestados())) {
            throw new \Exception('O livro não está com o usuário');
        }

        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();

        return true;
    }
}
?>