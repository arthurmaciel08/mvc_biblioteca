<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1 class="logo-title">MVC Biblioteca</h1>
            <nav class="nav-container">
                <a href="index.php" class="home-btn">Home</a>
                
                <div class="dropdown">
                    <button class="dropbtn">Cadastros</button>
                    <div class="dropdown-content">
                        <a href="index.php?page=usuario&action=UsuarioForm">Usuários</a>
                        <a href="index.php?page=autor&action=AutorForm">Autores</a>
                        <a href="index.php?page=categoria&action=CategoriaForm">Categorias</a>
                        <a href="index.php?page=livro&action=LivroForm">Livros</a>
                        <a href="index.php?page=emprestimo&action=EmprestimoForm">Empréstimos</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Consultas</button>
                    <div class="dropdown-content">
    <a href="index.php?page=usuario&action=listar">Lista de Usuários</a>
    <a href="index.php?page=autor&action=listar">Lista de Autores</a>
    <a href="index.php?page=categoria&action=listar">Lista de Categorias</a>
    <a href="index.php?page=livro&action=listar">Lista de Livros</a>
    <a href="index.php?page=emprestimo&action=listar">Lista de Empréstimos</a>
</div>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>
