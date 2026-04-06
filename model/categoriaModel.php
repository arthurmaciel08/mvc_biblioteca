<?php
require_once __DIR__ . '/../config/conexao.php';
class CategoriaModel
{
    public function inserir($nome)
    {
        $sql = 'insert into categorias(nome_categoria) values(:nome_categoria)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindParam(':nome_categoria', $nome);
        return $stmt->execute();
    }

    public function listar()
    {
        $sql = 'select * from categorias';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
