<?php
include 'view/include/cabecalho.php'; ?>
   
        <h2 class="titulo-pagina">Cadastro  de Emprestimo</h2>
        <div class="container-form">
            
                <form action="index.php?page=emprestimo&action=salvar" method="post" class="form-biblioteca">
            <label for="" class="label-padrao">Data emprestimo:</label>
            <input type="text" name="DataEmprestimo" class="input-padrao" required>
            <label for="" class="label-padrao">Data Devolução:</label>
            <input type="text" name="DataDevolucao" class="input-padrao" required>
            <label for="" class="label-padrao">Status Retorno:</label>
            <select name="status_retorno">
                <option value="0">Não devolvido</option>
                <option value="1">Devolvido</option>
            </select>
            <select name="id_livro">
            <?php foreach ($livros as $livro): ?>
                <option value="<?= $livro['id_livro'] ?>">
                <?= $livro['titulo'] ?>
                </option>
            <?php endforeach; ?>
            </select>
            <select name="id_usuario">
            <?php foreach ($usuarios as $user): ?>
                <option value="<?= $user['id_usuario'] ?>">
                <?= $user['nome_usuario'] ?>
                </option>
            <?php endforeach; ?>
            </select>
            <button type="submit" class="btn-gravar">Gravar Emprestimo</button>
            
                </form>
        </div>
   
    
    
    <!-- Rodape opcional: incluir view/include/rodape.php quando existir. -->
