<?php
$page = $_GET['page'] ?? 'usuario';
$action = $_GET['action'] ?? 'form';
switch ($page) {
    case 'usuario':
        require_once __DIR__ . '/usuarioController.php';
        $controller = new UsuarioController();
        switch ($action) {
            case 'UsuarioForm':
                include __DIR__ . '/../view/usuarioform.php';
                break;

            case 'salvar':
                $controller->salvar();
                break;

            case 'listar':
                $controller->listar();
                break;

            default:
                include __DIR__ . '/../view/usuarioform.php';
        }
        break;

    case 'autor':
        require_once __DIR__ . '/autorController.php';
        $controller = new AutorController();
        switch ($action) {
            case 'AutorForm':
                include __DIR__ . '/../view/autorForm.php';
                break;

            case 'salvar':
                $controller->salvar();
                break;

            case 'listar':
                $controller->listar();
                break;

            default:
                include __DIR__ . '/../view/autorForm.php';
        }
        break;

    case 'categoria':
        require_once __DIR__ . '/categoriaController.php';
        $controller = new CategoriaController();
        switch ($action) {
            case 'CategoriaForm':
                include __DIR__ . '/../view/categoriaForm.php';
                break;

            case 'salvar':
                $controller->salvar();
                break;

            case 'listar':
                $controller->listar();
                break;

            default:
                include __DIR__ . '/../view/categoriaForm.php';
        }
        break;

    case 'livro':
        require_once __DIR__ . '/livroController.php';
        $controller = new LivroController();
        switch ($action) {
            case 'LivroForm':
                $controller->form();
                break;

            case 'salvar':
                $controller->salvar();
                break;

            case 'listar':
                $controller->listar();
                break;

            default:
                include __DIR__ . '/../view/livroform.php';
        }
        break;

    case 'emprestimo':
        require_once __DIR__ . '/emprestimoController.php';
        $controller = new EmprestimoController();
        switch ($action) {
            case 'EmprestimoForm':
                $controller->form();
                break;

            case 'salvar':
                $controller->salvar();
                break;

            case 'listar':
                $controller->listar();
                break;

            default:
                include __DIR__ . '/../view/emprestimoform.php';
        }
        break;
}

?>
