<?php
require_once __DIR__ . '/../model/categoriaModel.php';

class CategoriaController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nomeCategoria'];

            $model = new CategoriaModel();
            if ($model->inserir($nome)) {
                header('location: index.php?page=categoria&action=CategoriaForm');
            }
        }
    }

    public function listar()
    {
        $model = new CategoriaModel();
        $lista = $model->listar();
        include __DIR__ . '/../view/categorialista.php';
    }
}
?>
