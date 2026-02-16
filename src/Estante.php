<?php
namespace Felipe\Biblioteca;

class Estante {
    private array $livros = [];

    public function adicionarLivro(Livro $livro): void {
        $this->livros[] = $livro;
    }

    public function removerLivro(Livro $livro) {
        $this->livros = array_filter(
            $this->livros,

            function ($livroAtual) use ($livro) {
                if ($livroAtual === $livro) {
                    echo ' - Livro removido!';
                }
                echo '<br>';
                return $livroAtual !== $livro;
            }
        );
    }

    public function buscarLivroPorTitulo(string $titulo): ?Livro {
        foreach ($this->livros as $livro) {
            if (str_contains(strtolower($livro->getTitulo()), strtolower($titulo))) {
                return $livro;
                break;
            }
        }
        return null;
    }

    public function listarLivrosDisponiveis(string $titulo): array {
        return [];
    }
}
?>