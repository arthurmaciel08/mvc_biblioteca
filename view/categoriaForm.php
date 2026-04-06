<?php
include 'view/include/cabecalho.php'; ?>

    <h2 class="titulo-pagina">Cadastro de Categoria</h2>
    <div class="container-form">
        
        
        <form action="index.php?page=categoria&action=salvar" method="post" class="form-biblioteca">
        <label for="nomeCategoria" class="label-padrao">Nome Categoria:</label>
                <input type="text" name="nomeCategoria" class="input-padrao" required>
        <button type="submit" class="btn-gravar">Gravar Categoria</button>
        </form>
    </div>


<!-- Rodape opcional: incluir view/include/rodape.php quando existir. -->
