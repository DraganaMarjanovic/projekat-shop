<main>






<div>
        <h1 class="card-title mb-4 text-right text-primary"><?php echo htmlspecialchars($product['title']); ?></h1>
        <div class="row">
            <div class="col-7">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top"  alt="slika">
            </div>
            <div class="col-5">
          
                <form action="checkout-page.php" method="post">
                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cena:</span>
                        </div>
                        <input name="price" disabled type="text" class="form-control" value="<?php echo htmlspecialchars($product['price']); ?>" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">rsd</span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kolicina:</span>
                        </div>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity">
                        <div class="input-group-append">
                            <span class="input-group-text">QTY</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success bg-warning">KUPI</button>
                </form>


                </div>
            </div>

        </div>


    <!-- <div class="d-flex p-2 bd-highlight">

        <h1 class="card-title mb-4 text-right text-primary"><?php echo htmlspecialchars($product['title']); ?></h1>

        <div class="row">
            <div class="col-7">
                <p> <strong>Kategorija: <?php echo htmlspecialchars($product['category']); ?></strong> </p>
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="slika">
            </div>


        </div>

        <div class="col-5">


            <form action="checkout-page.php" method="post">
                <input hidden name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cena:</span>
                    </div>
                    <input name="price" disabled type="text" class="form-control" value="<?php echo htmlspecialchars($product['price']); ?>" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">rsd</span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kolicina:</span>
                    </div>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity">
                    <div class="input-group-append">
                        <span class="input-group-text">QTY</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success bg-warning">KUPI</button>
            </form>


        </div>




    </div> -->



    <h2 class="text-center "> Izaberite najkvaliteniju outdoor opremu i krenite u avanturu</h2>
<h4 class="text-center  bg-info" >Iz nase prodavnice na samo jedan klik do Vas</h4>

   

</main>