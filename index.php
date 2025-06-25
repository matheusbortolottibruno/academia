<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
   

    <div class="row mb-5">
        <?php
       include "conexao.php";

        $sql = "select * from filmes  limit 4";
        $resultado = mysqli_query($conexao, $sql);

        // echo "<pre>";
        // print_r($resultado);
        // exit();
        while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="col-3 text-center mb-5">
                <img src="<?=$linha['foto']?>" class="img-fluid capa-filme">
                <h3><?=$linha['titulo'];?></h3>
                <span>⭐ <?=$linha['avaliacao']?>/10</span>
            </div>
        <?php
        }
          mysqli_close($conexao);
        ?>
        
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda 🧠</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entre em contato através dos nossos canais de comunicação:</p>
                    <p>E-mail: Academia@zeus.com.br <br> Whatsapp: (11)99999-9999 <br><a href="contato.php">Formulário de contato</a> </p>
                </div>
            </div>
        </div>
    </div>

    

</div>
<?php include "rodape.php"; ?>