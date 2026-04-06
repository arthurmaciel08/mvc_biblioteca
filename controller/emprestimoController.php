<?php
require_once __DIR__ . '/../model/emprestimoModel.php';

class EmprestimoController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data_emprestimo = $_POST['DataEmprestimo'];
            $data_devolucao = $_POST['DataDevolucao'];
            $status_retorno = $_POST['status_retorno'];
            $id_livro = $_POST['id_livro'];
            $id_usuario = $_POST['id_usuario'];

            $model = new EmprestimoModel();
            if (
                $model->inserir(
                    $data_emprestimo,
                    $data_devolucao,
                    $status_retorno,
                    $id_livro,
                    $id_usuario,
                )
            ) {
                header('location: index.php?page=emprestimo&action=EmprestimoForm');
            }
        }
    }

    public function form()
    {
        require_once __DIR__ . '/../model/livroModel.php';
        require_once __DIR__ . '/../model/usuarioModel.php';

        $livroModel = new LivroModel();
        $usuarioModel = new UsuarioModel();

        $livros = $livroModel->listar();
        $usuarios = $usuarioModel->listar();

        include __DIR__ . '/../view/emprestimoform.php';
    }

    public function listar()
    {
        $model = new EmprestimoModel();
        $lista = $model->listar();
        include __DIR__ . '/../view/emprestimolista.php';
    }
}
?>
