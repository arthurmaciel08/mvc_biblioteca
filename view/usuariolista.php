<?php include 'view/include/cabecalho.php'; ?>

<h2>Lista de Usuários Cadastrados</h2>

<table class="tabela-relatorio">
    <thead class="cabecalho-tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cpf</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($lista)):
            foreach ($lista as $u): ?>
        <tr>
            <td class="celula-id">#<?= $u['id_usuario'] ?></td>
            <td class="celula-nome"><?= htmlspecialchars($u['nome_usuario']) ?></td>
            <td class="celula-email"><?= htmlspecialchars($u['email']) ?></td>
            <td class="celula-telefone"><?= htmlspecialchars($u['telefone']) ?></td> 
            <td class="celula-cpf"><?= htmlspecialchars($u['cpf']) ?></td> 
        </tr>
                <?php endforeach;
        endif; ?>
    </tbody>
</table>