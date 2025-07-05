<?php

$nome = $_POST["nome"];
$email = $_POST["email"];

include "conexao.php";
$sql = "insert into usuarios(nome, email) values('$nome' , ' $email')";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

echo "<p><a href= 'usuarios-listar.php'>voltar</a><?p> "

?>