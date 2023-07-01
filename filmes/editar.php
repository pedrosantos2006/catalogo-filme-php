<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome_filme = "";
$sinopse = "";
$foto = "";
$link_compra = "";
$sql = "SELECT * FROM t_filmes WHERE id = $id";
$todos_os_filmes = mysqli_query($conexao, $sql);
while($um_filme = mysqli_fetch_assoc($todos_os_filmes)):
    $nome_filme = $um_filme["nome_filme"];
    $sinopse = $um_filme["sinopse"];
    $foto = $um_filme["foto"];
    $link_compra = $um_filme["link_compra"];
endwhile;
?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-4">Editar Filme <?php echo $id; ?></h1>
            <form method="post" action="atualizar.php">
                <div class="form-group">
                    <label for="nome_filme">Nome do Filme:</label>
                    <input type="text" class="form-control" id="nome_filme" name="nome" value="<?php echo $nome_filme; ?>">
                </div>
                <div class="form-group">
                    <label for="sinopse">Sinopse:</label>
                    <textarea class="form-control" id="sinopse" name="sinopse" rows="3"><?php echo $sinopse; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Poster:</label>
                    <input type="text" class="form-control" id="foto" name="foto" value="<?php echo $foto; ?>">
                </div>
                <div class="form-group">
                    <label for="link_compra">Comprar:</label>
                    <input type="text" class="form-control" id="link_compra" name="comprar" value="<?php echo $link_compra; ?>">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
