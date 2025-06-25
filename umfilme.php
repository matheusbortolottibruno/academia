<?php include "cabecalho.php";
// 1= recuperar informaçao do id
$id = $_GET["id"];
// 2= conecao com bd 
include "conexao.php";
// 3= preparar do mysql
 $sql = "select * from filmes where id = $id";
// 4= execucao do sql
  $resultado = mysqli_query($conexao, $sql);
// 5= definicao das variavel  
$titulo = "";
$historia = "";
$categoria = "";
$avaliaçao = "";
$foto = "";
// 6= laço com as informaçao dos filme
while($linha = mysqli_fetch_assoc($resultado)){
   $titulo = $linha["titulo"];
    $historia = $linha["historia"];
     $categoria = $linha["categoria"];
      $avaliacao = $linha["avaliacao"];
       $foto = $linha["foto"];
}
// 7= mostrar as informaçaoes na tela 


// 8= fechar as coneção com bd
     
     
?>
<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?=$foto?>" class="img-fluid"> 
   </div>

<div class="col">
    <h2 class="text-start"><?=$titulo?></h2>
    <p>⭐ <?=$avaliacao?>/10</p>
    <p><strong>Categoria:</strong> <?=$categoria?></p>
    <p><strong>História:</strong> <?=$historia?></p>

     </div>
    </div>
</div>
<?php include "rodape.php"; ?>


