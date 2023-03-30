<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<?php include("V_menu.php"); ?>

<section class="container">
  

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($cuponesmatriz as $cupones) { ?>
      <div class="carousel-item active">
        <img src="data:image/png;base64,<?php echo base64_encode($cupones['imagen'])?>" class="d-block w-100" alt="..."  height="600px">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="card-title"><?php echo $cupones['titulo']?></h5>
          <p class="card-text"><?php echo $cupones['descripcion']?></p>
        </div>
      </div>
    <?php 
    }?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php foreach ($cuponesmatriz as $cupones) { ?>
    <div class="col">
      <div class="card">
        <img src="data:image/png;base64,<?php echo base64_encode($cupones['imagen'])?>" alt="esto no funciona" height="200px">
        <div class="card-body">
          <h5 class="card-title"><?php echo $cupones['titulo']?></h5>
          <p class="card-text"><?php echo $cupones['descripcion']?></p>
          <a href="controller/comprar_controller.php?operacion=verproducto&id=<?php echo urlencode($cupones['id_oferta']) ?>" class="btn btn-primary">Ver producto</a>

        </div>
      </div>
    </div>
  <?php } ?>
</div>

</section>

<?php include("V_footer.php"); ?>
