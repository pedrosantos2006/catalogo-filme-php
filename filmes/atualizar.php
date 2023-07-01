<?php
include "../includes/conexao.php";

$id = $_GET["id"];

$nome_filme = $_POST["nome_filme"];
$sinopse = $_POST["sinopse"];
$foto = $_POST["foto"];
$link_compra = $_POST["link_compra"];
$sql = "update t_filmes set nome_filme = '$nome_filme', sinopse = '$sinopse', foto = '$foto', link_compra = '$link_compra' where id = '$id'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location:selecionar.php");
?>