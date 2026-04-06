<?php include 'view/include/cabecalho.php'; ?>

<h2>Lista de Autores Cadastrados</h2>

<table class="tabela-relatorio">
    <thead class="cabecalho-tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($lista)):
            foreach ($lista as $a): ?>
        <tr>
            <td class="celula-id">#<?= $a['id_autor'] ?></td>
            <td class="celula-nome"><?= htmlspecialchars($a['nome_autor']) ?></td>
            <td><?= htmlspecialchars($a['nacionalidade']) ?></td>
        </tr>
                <?php endforeach;
        endif; ?>
    </tbody>
</table>
