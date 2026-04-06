<?php include 'view/include/cabecalho.php'; ?>

<h2>Lista de Empréstimos Cadastrados</h2>

<table class="tabela-relatorio">
    <thead class="cabecalho-tabela">
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Livro</th>
            <th>Data Empréstimo</th>
            <th>Data Devolução</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($lista)):
            foreach ($lista as $e): ?>
        <tr>
            <td class="celula-id">#<?= $e['id_emprestimo'] ?></td>
            <td class="celula-nome"><?= htmlspecialchars($e['nome_usuario']) ?></td>
            <td><?= htmlspecialchars($e['titulo']) ?></td>
            <td><?= htmlspecialchars($e['data_emprestimo']) ?></td>
            <td><?= htmlspecialchars($e['data_devolucao']) ?></td>
            <td><?= htmlspecialchars($e['status']) ?></td>
        </tr>
                <?php endforeach;
        endif; ?>
    </tbody>
</table>
