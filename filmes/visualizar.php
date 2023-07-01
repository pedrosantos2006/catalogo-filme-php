<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome_filme = "";
$foto = "";
$sinopse = "";
$link_compra = "";
$sql = "SELECT * FROM t_filmes WHERE id = $id";
$todos_os_filmes = mysqli_query($conexao, $sql);
while ($um_filme = mysqli_fetch_assoc($todos_os_filmes)):
    $nome_filme = $um_filme['nome_filme'];
    $foto = $um_filme['foto'];
    $sinopse = $um_filme['sinopse'];
    $link_compra = $um_filme['link_compra'];
endwhile;
?>

<div class="container mt-4">
    <h1>Descrição do Filme</h1>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $foto; ?>" class="img-fluid" alt="Poster do Filme">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nome_filme; ?></h5>
                    <p class="card-text"><?php echo $sinopse; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $link_compra; ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
