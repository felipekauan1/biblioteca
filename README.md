# 📚 Sistema de Gestão de Biblioteca - PHP Orientado a Objetos

Este repositório contém um sistema de gerenciamento de biblioteca desenvolvido para praticar conceitos avançados de **Programação Orientada a Objetos (POO)** em PHP, utilizando herança, classes abstratas, polimorfismo e namespaces.

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP 8+.
* **Gerenciador de Dependências:** Composer (Padrão PSR-4).
* **Arquitetura:** Programação Orientada a Objetos.

## 📋 Funcionalidades e Regras de Negócio

O sistema simula o fluxo real de uma biblioteca com regras específicas para cada tipo de usuário:

* **Hierarquia de Usuários:**
* **👨‍🏫 Professor:** Pode pegar até **3 livros** simultaneamente.
* **👨‍🎓 Aluno:** Pode pegar até **1 livro** por vez.
* **👤 Visitante:** Possui acesso, mas **não pode realizar empréstimos**.


* **Gestão de Acervo:** * Controle de disponibilidade de livros (Disponível/Emprestado).
* Organização de livros em estantes com busca por título.


* **Operações do Bibliotecário:** * Classe de serviço estática que valida todas as condições antes de processar um empréstimo ou devolução (ex: verificar se o livro está na estante ou se o usuário atingiu o limite).
* **Tratamento de Exceções:** O sistema utiliza `Exceptions` para impedir operações inválidas, garantindo a integridade dos dados.

## 📁 Estrutura de Arquivos Principal

* `src/Usuario.php`: Classe abstrata base com a lógica comum de empréstimos.
* `src/Bibliotecario.php`: Centraliza a lógica de negócio (Empréstimo/Devolução).
* `src/Estante.php`: Gerencia a coleção de objetos do tipo Livro.
* `src/Livro.php`: Define os atributos e estados de cada obra.
* `index.php`: Ponto de entrada que inicializa os objetos e demonstra o funcionamento.

## 🚀 Como Instalar e Rodar

1. **Clone o repositório:**

```bash
git clone https://github.com/felipekauan1/biblioteca.git

```

2. **Instale as dependências (Autoload):**
Certifique-se de ter o [Composer](https://getcomposer.org/) instalado e execute:

```bash
composer install

```

3. **Inicie o Servidor:**
Você pode usar o servidor embutido do PHP:

```bash
php -S localhost:8000

```

Acesse `http://localhost:8000/index.php` para ver a saída do sistema.