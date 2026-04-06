<?php
require_once __DIR__ . '/../model/autorModel.php';

class AutorController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nomeAutor'];
            $nacionalidade = $_POST['nacionalidadeAutor'];

            $model = new autorModel();
            if ($model->inserir($nome, $nacionalidade)) {
                header('location: index.php?page=autor&action=AutorForm');
            }
        }
    }

    public function listar()
    {
        $model = new autorModel();
        $lista = $model->listar();
        include __DIR__ . '/../view/autorlista.php';
    }
}
?>
