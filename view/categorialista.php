<?php include 'view/include/cabecalho.php'; ?>

<h2>Lista de Categorias Cadastradas</h2>

<table class="tabela-relatorio">
    <thead class="cabecalho-tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($lista)):
            foreach ($lista as $c): ?>
        <tr>
            <td class="celula-id">#<?= $c['id_categoria'] ?></td>
            <td class="celula-nome"><?= htmlspecialchars($c['nome_categoria']) ?></td>
        </tr>
                <?php endforeach;
        endif; ?>
    </tbody>
</table>
