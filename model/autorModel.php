<?php
require_once __DIR__ . '/../config/conexao.php';
class autorModel
{
    public function inserir($nome, $nacionalidade)
    {
        $sql = 'insert into autores(NOME_AUTOR, NACIONALIDADE) values(:nome_autor, :nacionalidade)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindParam(':nome_autor', $nome);
        $stmt->bindParam(':nacionalidade', $nacionalidade);
        return $stmt->execute();
    }
    public function listar()
    {
        $sql = 'select * from autores';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
