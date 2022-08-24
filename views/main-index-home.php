


<main>

  <div opacity .3s ease; id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="height:620px ;">

      <div class="carousel-item active h-100">
        <img src="./public/theme/img/dete2.jpeg" class="d-block w-100 " alt="slide">
        <div class="carousel-caption  d-md-block">
          <p class="fs-1">“ Nema lošeg vremena, samo ima loše garderobe. ” Švedska poslovica.</p>

        </div>
      </div>


      <div class="carousel-item h-100">
        <img src="./public/theme/img/trci.jpg" class="d-block w-100" alt="slide">
        <div class="carousel-caption  d-md-block">
          <p class="fs-1">“ Nema lošeg vremena, samo ima loše garderobe. ” Švedska poslovica.</p>
        </div>
      </div>



      <div class="carousel-item h-100">
        <img src="./public/theme/img/stena.jpeg" class="d-block w-100" alt="slide">
        <div class="carousel-caption  d-md-block">

          <p class="fs-1">“ Nema lošeg vremena, samo ima loše garderobe. ” Švedska poslovica.</p>
        </div>
      </div>



      <div class="carousel-item h-100">
        <img src="./public/theme/img/nela5.jpg" class="d-block w-100" alt="slide">
        <div class="carousel-caption  d-md-block">
          <p class="fs-1">“ Nema lošeg vremena, samo ima loše garderobe. ” Švedska poslovica.</p>
        </div>
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

    <div class="row m-5">
      <p class="bg-secondary">Najprodavaniji proizvodi</p>
      <?php foreach ($products as $product) { ?>
        <div class="col-4">
          <h6><?php echo $product['title']; ?></h6>
          <p> <img src="<?php echo $product['img'] ?>" width="250" height="250" alt="crna"><span><strong> <?php echo $product['price'] ?>rsd</strong></span> </p>
          <a href="./single-product.php?page=<?php echo $product['id']; ?>" class="bg-warning" role="button">PRIKAZI</a>
        </div>

      <?php } ?>
    </div>



    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="height:400px">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./public/theme/img/asolo.jpeg" class="d-block w-100" alt="slika"  >
      <div class="carousel-caption d-none d-md-block">
       <h5>OBUCA</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./public/theme/img/zena.webp" class="d-block w-100" alt="slika">
      <div class="carousel-caption d-none d-md-block">
        <h5>JAKNE</h5>
     
      </div>
    </div>
    <div class="carousel-item">
      <img src="./public/theme/img/treca.png" class="d-block w-100" alt="slika">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rancevi i stapovi</h5>
     
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




    <div class="row m-5">
      <p class="bg-secondary">Najgledaniji proizvodi</p>
      <?php foreach ($popular as $product) { ?>
        <div class="col-4">
          <h6><?php echo $product['title']; ?></h6>
          <p> <img src="<?php echo $product['img'] ?>" width="250" height="250" alt="crna"><span><strong> <?php echo $product['price'] ?>rsd</strong></span> </p>
          <a href="./single-product.php?page=<?php echo $product['id']; ?>" class="bg-warning" role="button">PRIKAZI</a>
        </div>

      <?php } ?>
    </div>








</main>