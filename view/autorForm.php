    <?php include 'view/include/cabecalho.php'; ?>
    
        <h2 class="titulo-pagina">Cadastro de Autor</h2>
        <div class="container-form">
        

    <form action="index.php?page=autor&action=salvar" method="post" class="form-biblioteca">
        <label for="nomeAutor" class="label-padrao">Nome do autor:</label>
        <input type="text" id="nomeAutor" name="nomeAutor" class="input-padrao" required>

        <label for="nacionalidadeAutor" class="label-padrao">Nacionalidade do autor:</label>
        <input type="text" id="nacionalidadeAutor" name="nacionalidadeAutor" class="input-padrao">

        <button type="submit" class="btn-gravar">Gravar Autor</button>
    </form>
    </div>

    <!-- Rodape opcional: incluir view/include/rodape.php quando existir. -->
