<?php
require_once __DIR__ . '/../model/usuarioModel.php';

class UsuarioController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nomeUsuario'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senha'];
            $cpf = $_POST['cpf'];

            $model = new UsuarioModel();
            if ($model->inserir($nome, $email, $telefone, $senha, $cpf)) {
                header('location: index.php?page=usuario&action=UsuarioForm');
            }
        }
    }

    public function listar()
    {
        $model = new UsuarioModel();
        $lista = $model->listar();
        include __DIR__ . '/../view/usuariolista.php';
    }
}
