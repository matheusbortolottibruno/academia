<?php
include "cabecalho.php";
include "banner.php";
include "conexao.php";
?>
<div class="container">
    <h2 class="display-5">Aulas e treinos exclusivos!</h2>

    <div class="row mb-5">
        <?php
       

        $sql = "select * from academia  limit 4";
        $resultado = mysqli_query($conexao, $sql);

        // echo "<pre>";
        // print_r($resultado);
        // exit();
        while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="col-3 text-center mb-5">
                

            </div>
        <?php
        }
          mysqli_close($conexao);
        ?>
        
    </div>

    <div class="row mt-5">
        <div class="col-6">
            <img src="img/aulatreino1.webp" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Presos em uma armadilha mortal, uma equipe nada convencional de anti-heróis embarca em uma missão perigosa que os força a confrontar os cantos mais sombrios de suas vidas.</p>
            <a href="https://www.youtube.com/watch?v=MaLy0D2FTDc" class="btn btn-success btn-lg">SAIBA MAIS</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Superman embarca em uma jornada para reconciliar sua herança kryptoniana com sua criação humana.</p>
            <a href="https://www.youtube.com/watch?v=6HsfXtgcAE4" class="btn btn-success">SAIBA MAIS </a>
        </div>
        <div class="col-6">
            <img src="img/aulatreino2.webp" class="img-fluid">
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Precisa de ajuda? Clique aqui!
    </button>


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
<h6>telefone:(19)999-9999</h6>
<h6>E_MAIL:zeusacademia@gmaisl.com</h6>

