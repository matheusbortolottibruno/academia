<?php
include "cabecalho.php";
?>

<div class="container">

    <h2>Todos os filmes</h2>
    <div class="row">
         <?php
      include "conexao.php";

        $sql = "select * from filmes order by titulo asc";
        $resultado = mysqli_query($conexao, $sql);

        // echo "<pre>";
        // print_r($resultado);
        // exit();
        while($linha = mysqli_fetch_assoc($resultado)){
            ?>
        <div class="col-3 text-center mb-5">
            <div class="card">
                <img src="<?=$linha['foto']?>" class="img-fluid capa-filme">
                    <h3><?php echo mb_strimwidth($linha['titulo'], 0, 20, "...");?></h3>   
                    
                    <p class="card-text">⭐<?=$linha['avaliacao']?>/10</p>
                    <a href="umfilme.php?id=<?=$linha['id'];?>" class="btn btn-primary ">Veja detalhes</a>
                
            </div>
        </div>
         <?php
        }

        mysqli_close($conexao);


        ?>
         </div>
        
    </div>
</div>
<?php include "rodape.php"; ?>