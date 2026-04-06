<?php
include 'view/include/cabecalho.php'; ?>

    <h2 class="titulo-pagina">Cadastro  de LEITOR</h2>
    <div class="container-form">
        
        <form action="index.php?action=salvar" method="post" class="form-biblioteca">
            <label for="" class="label-padrao">Nome Completo:</label>
            <input type="text" name="nomeUsuario" class="input-padrao" required>

            <label for="" class="label-padrao">E-mail:</label>
            <input type="email" name="email" class="input-padrao" required>

            <label for="" class="label-padrao">Telefone:</label>
            <input type="text" name="telefone" class="input-padrao" required>

            <label for="" class="label-padrao">Senha:</label>
            <input type="password" name="senha" class="input-padrao" required>

            <label for="" class="label-padrao">CPF:</label>
            <input type="text" name="cpf" class="input-padrao" required>
        
            <button type="submit" class="btn-gravar">Gravar Leitor</button>
        </form>
    </div>
    
    <!-- Rodape opcional: incluir view/include/rodape.php quando existir. -->
