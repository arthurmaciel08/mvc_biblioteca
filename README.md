# MVC Biblioteca

Sistema de gerenciamento de biblioteca desenvolvido com o padrão arquitetural **MVC (Model-View-Controller)** em PHP.

## 📋 Descrição

Aplicação web para gerenciar uma biblioteca, permitindo o cadastro e controle de:
- **Livros**: Adicionar, editar, listar e remover livros
- **Autores**: Gerenciar informações dos autores
- **Categorias**: Organizar livros por categorias
- **Usuários**: Cadastro de usuários para consulta
- **Empréstimos**: Controlar empréstimos e devoluções de livros

## 🏗️ Estrutura do Projeto

```
mvc_biblioteca_consulta/
├── index.php                    # Arquivo principal de entrada
├── config/
│   └── conexao.php             # Configurações de conexão com banco de dados
├── controller/
│   ├── rotas.php               # Definição de rotas
│   ├── autorController.php      # Controlador de autores
│   ├── categoriaController.php  # Controlador de categorias
│   ├── emprestimoController.php # Controlador de empréstimos
│   ├── livroController.php      # Controlador de livros
│   └── usuarioController.php    # Controlador de usuários
├── model/
│   ├── autorModel.php           # Modelo de autores
│   ├── categoriaModel.php       # Modelo de categorias
│   ├── emprestimoModel.php      # Modelo de empréstimos
│   ├── livroModel.php           # Modelo de livros
│   └── usuarioModel.php         # Modelo de usuários
├── view/
│   ├── autorForm.php            # Formulário de autores
│   ├── autorlista.php           # Lista de autores
│   ├── categoriaForm.php        # Formulário de categorias
│   ├── categorialista.php       # Lista de categorias
│   ├── emprestimoform.php       # Formulário de empréstimos
│   ├── emprestimolista.php      # Lista de empréstimos
│   ├── livroform.php            # Formulário de livros
│   ├── livrolista.php           # Lista de livros
│   ├── usuarioform.php          # Formulário de usuários
│   ├── usuariolista.php         # Lista de usuários
│   └── include/
│       └── cabecalho.php        # Header comum das páginas
├── css/
│   └── estilo.css              # Estilos da aplicação
├── docs/
│   └── dbbiblioteca.sql        # Script SQL para criar banco de dados
└── README.md                    # Este arquivo
```

## 🚀 Como Executar

### Pré-requisitos
- PHP 7.0 ou superior
- MySQL 5.7 ou superior
- XAMPP (ou outro servidor local com PHP e MySQL)

### Configuração

1. **Clone o repositório**
```bash
git clone https://github.com/arthurmaciel08/mvc_biblioteca.git
```

2. **Copie para o diretório Web**
```bash
cp -r mvc_biblioteca c:/xampp/htdocs/
```

3. **Configure o banco de dados**
   - Abra o phpMyAdmin (http://localhost/phpmyadmin)
   - Crie um novo banco de dados chamado `biblioteca`
   - Importe o arquivo `docs/dbbiblioteca.sql`

4. **Configure a conexão**
   - Edite `config/conexao.php`
   - Ajuste as credenciais do banco de dados conforme necessário:
   ```php
   $host = 'localhost';
   $usuario = 'root';
   $senha = '';
   $banco = 'biblioteca';
   ```

5. **Acesse a aplicação**
   - Abra no navegador: `http://localhost/mvc_biblioteca_consulta/`

## 📚 Funcionalidades

### Autores
- ✅ Cadastrar novos autores
- ✅ Editar informações dos autores
- ✅ Listar todos os autores
- ✅ Remover autores

### Categorias
- ✅ Criar categorias de livros
- ✅ Editar categorias
- ✅ Visualizar lista de categorias
- ✅ Deletar categorias

### Livros
- ✅ Adicionar novos livros
- ✅ Associar livros a autores e categorias
- ✅ Editar informações de livros
- ✅ Listar todos os livros
- ✅ Remover livros

### Usuários
- ✅ Registrar novos usuários
- ✅ Editar perfil de usuários
- ✅ Listar usuários cadastrados
- ✅ Remover usuários

### Empréstimos
- ✅ Registrar empréstimos de livros
- ✅ Controlar datas de devolução
- ✅ Listar empréstimos ativos
- ✅ Registrar devoluções

## 🔧 Tecnologias Utilizadas

- **Backend**: PHP
- **Banco de Dados**: MySQL
- **Frontend**: HTML5, CSS3
- **Arquitetura**: MVC (Model-View-Controller)

## 📝 Padrão MVC

Este projeto segue a arquitetura MVC:

- **Model**: Camada de dados, responsável pela interação com o banco de dados
- **View**: Camada de apresentação, templates HTML para exibição dos dados
- **Controller**: Camada de lógica, processa requisições e coordena Model e View

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se livre para abrir issues e pull requests.

## 📄 Licença

Este projeto está sob a licença MIT.

## 👤 Autor

Arthur Maciel - [GitHub](https://github.com/arthurmaciel08)

---

**Desenvolvido com ❤️ para gerenciamento eficiente de bibliotecas**
