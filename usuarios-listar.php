<?php
include "conexao.php";

echo "<h1>Listagem de usuarios</h1>";

$sql = "select * fron usuarios";

$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){

    echo $linha['nome'] . " - " . $linha['email'] . '<br>'; 
 }


 echo "<p><a href='usuarios-from.php' >Adicionar um novo usuario</a></p>";

?>