<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Gerenciamento de Filmes</h1>

            <p>
                <a href="novo.php" class="btn btn-primary">Adicionar Filme</a>
            </p>

            <h2>Listagem de Filmes</h2>

            <div class="card-deck">
                <?php
                $sql = "SELECT * FROM t_filmes";
                $todos_os_filmes = mysqli_query($conexao, $sql);

                while ($um_filme = mysqli_fetch_assoc($todos_os_filmes)):
                ?>
                <div class="card mb-4">
                    <img src="<?php echo $um_filme['foto']; ?>" class="card-img-top" alt="Poster do Filme">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $um_filme['nome_filme']; ?></h5>
                        <p class="card-text"><?php echo $um_filme['sinopse']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="visualizar.php?id=<?php echo $um_filme['id']; ?>" class="btn btn-info" title="Ver Completo">Visualizar</a>
                        <a href="editar.php?id=<?php echo $um_filme['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="deletar.php?id=<?php echo $um_filme['id']; ?>" class="btn btn-danger" title="Excluir Filme">Excluir</a>
                    </div>
                </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>

        <div class="col-md-6">
                
            <p></p>
        </div>
    </div>
</div>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
