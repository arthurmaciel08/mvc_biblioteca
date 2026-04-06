<?php
require_once __DIR__ . '/../config/conexao.php';

class LivroModel
{
    public function inserir($titulo, $anoPublicacao, $id_autor, $id_categorias)
    {
        $sql =
            'insert into livros(titulo, ano_publicacao, id_autor, id_categoria) values (:titulo, :anoP, :id_autor, :id_cat)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':anoP', $anoPublicacao);
        $stmt->bindParam(':id_autor', $id_autor);
        $stmt->bindParam(':id_cat', $id_categorias);
        return $stmt->execute();
    }
    public function listar()
    {
        $sql = 'select * from livros';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
