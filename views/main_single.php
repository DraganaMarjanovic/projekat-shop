<main>

<div class="container">
        <h1 class="card-title mb-4 text-right text-primary"><?php echo htmlspecialchars($product['title']); ?></h1>
        <div class="row">
            <div class="col-7">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top"  alt="slika">
            </div>
            <div class="col-5">
            <p> <strong>Kategorija: <?php echo htmlspecialchars($product['category']); ?></strong> </p>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
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
                       
                    </div>
                    <button type="submit" class="btn btn-outline-success bg-warning">KUPI</button>
                </form>


                </div>
            </div>

        </div>


        <div class="d-flex justify-content-around m-5 ">
                    <a class="btn btn-secondary" href="./single-product.php?page=<?php echo htmlspecialchars(getPrevProductId($product['id'])); ?>">PRETHODNI</a>

                    <a class="btn btn-warning" href="./single-product.php?page=<?php echo htmlspecialchars(getNextProductId($product['id'])); ?>">SLEDECI</a>
                </div>
            </div>
        </div>


       
        <div class="row" style="margin:70px;">
            <?php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row ">
                    <div class='col-8 m-5'>
                        <span><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                        <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="300" height="300">
                        <a class="btn btn-outline-secondary" href="./single-product.php?page=<?php echo $singleRelated['id']; ?>" style="margin:10px;">Prikazi</a>

                    </div>

                </article>
            <?php } ?>
        </div>

    </div>

</main>