<?php include 'view/include/cabecalho.php'; ?>

<h2>Lista de Livros Cadastrados</h2>

<table class="tabela-relatorio">
    <thead class="cabecalho-tabela">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Ano de Publicação</th>
            <th>ID Autor</th>
            <th>ID Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($lista)):
            foreach ($lista as $l): ?>
        <tr>
            <td class="celula-id">#<?= $l['id_livro'] ?></td>
            <td class="celula-nome"><?= htmlspecialchars($l['titulo']) ?></td>
            <td><?= htmlspecialchars($l['ano_publicacao']) ?></td>
            <td><?= htmlspecialchars($l['id_autor']) ?></td>
            <td><?= htmlspecialchars($l['id_categoria']) ?></td>
        </tr>
                <?php endforeach;
        endif; ?>
    </tbody>
</table>
