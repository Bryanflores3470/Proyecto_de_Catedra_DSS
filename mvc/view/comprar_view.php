<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</head>
<div class="container">
    <h1 class="page-header text-center"><?php echo $cuponesmatriz['titulo']?></h1>
    <div class="card mb-3 mx-auto" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="data:image/png;base64,<?php echo base64_encode($cuponesmatriz['imagen'])?>" alt="esto no funciona" id="img" width="100%">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <p class="text-justify">Descripcion: <?php echo $cuponesmatriz['descripcion']?></p>
                    <p class="text-justify">Fecha final: <?php echo $cuponesmatriz['fecha_fin']?></p>
                    <p class="text-justify">Id emprresa: $<?php echo $cuponesmatriz['id_empresa']?></p>
                    <a href="../controller/mostrar_controller.php" class="btn button">Regrersar</a> 
                    <a href="controller/canjear_controller.php?operacion=comprar&oferta=<?php echo urlencode($cuponesmatriz['id_oferta']) ?>&cliente=1&estado=<?php echo urlencode($cuponesmatriz['estado']) ?>&fecha=<?php echo urlencode($cuponesmatriz['fecha_limite']) ?>" class="btn btn-primary">Comprar</a>

                </div>
            </div>
        </div>
    </div>
</div>