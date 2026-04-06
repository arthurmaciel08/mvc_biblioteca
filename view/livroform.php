<?php
include 'view/include/cabecalho.php'; ?>

    <h2 class="titulo-pagina">Cadastro de Livros</h2>
    <div class="container-form">
        
        
        <form action="index.php?page=livro&action=salvar" method="post" class="form-biblioteca">
           <label for="titulo" class="label-padrao">Titulo do livro:</label>
           <input type="text" name="titulo" class="input-padrao" required>
        
           <label for="" class="label-padrao">Ano de publicação do livro:</label>
           <input type="text" name="anoPublicacao" class="input-padrao">
        <select name="id_autor">
        <?php foreach ($autores as $autor): ?>
            <option value="<?= $autor['id_autor'] ?>">
                <?= $autor['nome_autor'] ?>
            </option>
            <?php endforeach; ?>
        </select>
        <select name="id_categoria">
        <?php foreach ($categorias as $cat): ?>
            <option value="<?= $cat['id_categoria'] ?>">
                <?= $cat['nome_categoria'] ?>
            </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn-gravar">Gravar Livro</button>
        </form>
    </div>



<!-- Rodape opcional: incluir view/include/rodape.php quando existir. -->
