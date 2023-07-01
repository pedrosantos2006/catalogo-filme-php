<?php
include "../includes/conexao.php";

$nome_filme = $_POST["nome_filme"];
$sinopse = $_POST["sinopse"];
$foto = $_POST["foto"];
$link_compra["link_compra"];
$sql = "insert into t_filmes(nome_filme, foto, sinopse, link_compra) values('$nome_filme', '$foto', '$sinopse', '$link_compra')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>