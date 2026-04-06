<?php
require_once __DIR__ . '/../model/LivroModel.php';

class LivroController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $anoPublicacao = $_POST['anoPublicacao'];
            $id_autor = $_POST['id_autor'];
            $id_categoria = $_POST['id_categoria'];

            $model = new LivroModel();
            if ($model->inserir($titulo, $anoPublicacao, $id_autor, $id_categoria)) {
                header('location: index.php?page=livro&action=LivroForm');
            }
        }
    }

    public function form()
    {
        require_once __DIR__ . '/../model/AutorModel.php';
        require_once __DIR__ . '/../model/CategoriaModel.php';

        $autorModel = new AutorModel();
        $categoriaModel = new CategoriaModel();

        $autores = $autorModel->listar();
        $categorias = $categoriaModel->listar();

        include __DIR__ . '/../view/livroForm.php';
    }
    public function listar()
    {
        $model = new LivroModel();
        $lista = $model->listar();
        include __DIR__ . '/../view/livrolista.php';
    }
}
?>
