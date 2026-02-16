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
                    throw new \Exception('Livro removido da estante!');
                }
                echo '<br>';
                return $livroAtual !== $livro;
            }
        );
    }

    public function verificarLivro(Livro $livro): bool {
        return in_array($livro, $this->livros);
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

    public function listarLivrosDisponiveis(): array {
        return array_filter(
            $this->livros,
            function ($livroAtual) {
                return $livroAtual->estaDisponivel();
            }
        );
    }

}
?>