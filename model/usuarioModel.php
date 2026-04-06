<?php
require_once __DIR__ . '/../config/conexao.php';

class UsuarioModel
{
    public function inserir($nome, $email, $telefone, $senha, $cpf)
    {
        $sql =
            'insert into usuarios(nome_usuario, email, telefone, senha, cpf) values (:nome, :email, :telefone, :senha, :cpf)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':cpf', $cpf);
        return $stmt->execute();
    }
    public function listar()
    {
        $sql = "select id_usuario, nome_usuario, email, telefone, cpf from usuarios
        order by nome_usuario asc";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
