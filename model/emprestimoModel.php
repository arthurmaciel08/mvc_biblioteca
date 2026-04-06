<?php
require_once __DIR__ . '/../config/conexao.php';

class EmprestimoModel
{
    public function inserir(
        $data_emprestimo,
        $data_devolucao,
        $status_retorno,
        $id_livro,
        $id_usuario,
    ) {
        $sql =
            'insert into emprestimos (data_emprestimo, data_devolucao, status_retorno, id_livro, id_usuario) values (:dataE, :dataD, :statusR, :idL, :idU)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindParam(':dataE', $data_emprestimo);
        $stmt->bindParam(':dataD', $data_devolucao);
        $stmt->bindParam(':statusR', $status_retorno);
        $stmt->bindParam(':idL', $id_livro);
        $stmt->bindParam(':idU', $id_usuario);
        return $stmt->execute();
    }

    public function listar()
    {
        $sql = "select e.id_emprestimo, u.nome_usuario, l.titulo, e.data_emprestimo, e.data_devolucao,
                CASE e.status_retorno WHEN 1 THEN 'Pendente' ELSE 'Devolvido' END AS status
                from emprestimos e
                join usuarios u on e.id_usuario = u.id_usuario
                join livros l on e.id_livro = l.id_livro
                order by e.data_emprestimo desc";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
