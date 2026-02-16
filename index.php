<?php
require_once 'vendor/autoload.php';

use Felipe\Biblioteca\Livro;
use Felipe\Biblioteca\Estante;
use Felipe\Biblioteca\Aluno;

// objeto estante
$estante = new Estante();

// objetos alunos
$aluno1 = new Aluno('Paulo');
$aluno2 = new Aluno('Roberto');

// objetos livros
$livro1 = new Livro('Chico Bento', 'Monteiro Lobato', true);
$livro2 = new Livro('Python', 'Guanabara', true);

// adicionando livros na estante
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);

// mostra a estante
echo "<pre>";
print_r($estante);
echo "<hr>";
?>