<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>

<div class="container mt-4">
    <h1 class="mb-4">Adicionar Filme</h1>
    <p>Adicione um novo filme ao catálogo.</p>
    <form action="inserir.php" method="post">
        <div class="form-group">
            <label for="nome_filme">Nome do Filme:</label>
            <input type="text" class="form-control" id="nome_filme" name="nome_filme" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse:</label>
            <textarea class="form-control" id="sinopse" name="sinopse" rows="3" required maxlength="250"></textarea>
        </div>
        <div class="form-group">
            <label for="foto">Poster:</label>
            <input type="text" class="form-control" id="foto" name="foto" required maxlength="100">
        </div>
        <div class="form-group">
            <label for="link_compra">Comprar:</label>
            <input type="text" class="form-control" id="link_compra" name="link_compra" required maxlength="100">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php
include "../includes/rodape.php";
?>
