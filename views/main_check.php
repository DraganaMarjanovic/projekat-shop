<main class="d-flex p-2 bd-highlight">

      
      
<div class="col-5">

    <form class="row g-3 m-1" action="./checkout-page.php" method="POST">
        <div class="col-12">
            <input type="text" class="form-control" name="name" placeholder="Ime">
            <span class="text-danger"><?php if(!empty($systemErrors['name'])){echo  $systemErrors['name'];}  ?></span>
        </div>
        <div class="col-12">
            <input type="text" class="form-control" name="last_name" placeholder="Prezime" >
            <span class="text-danger"><?php if(!empty($systemErrors['last_name'])){echo  $systemErrors['last_name'];}  ?></span>

        </div>
        <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Email" >
            <span class="text-danger"><?php if(!empty($systemErrors['email'])){echo  $systemErrors['email'];}  ?></span>

        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="city" placeholder="Grad" >
            <span class="text-danger"><?php if(!empty($systemErrors['city'])){echo  $systemErrors['city'];}  ?></span>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Telefon" >
            <span class="text-danger"><?php if(!empty($systemErrors['phone'])){echo  $systemErrors['phone'];}  ?></span>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="street" placeholder="Adresa">
            <span class="text-danger"><?php if(!empty($systemErrors['street'])){echo  $systemErrors['street'];}  ?></span>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="zip" placeholder="Postanski broj" >
            <span class="text-danger"><?php if(!empty($systemErrors['zip'])){echo  $systemErrors['zip'];}  ?></span>
        </div>
        <div class="mb-3">

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text"></textarea>
       


        <div class="form-check mb-5">
            <input type="checkbox" name="rights" value="success" class="form-check-input" id="rights" <?php if ($rights == 'success') {
                                                                                                            echo htmlspecialchars("Checked");
                                                                                                        } ?>>
            <label class="form-check-label" for="rights">Slazete li se sa pravilima?</label>
            <?php if ($systemErrors['rights']) { ?>
                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['rights']); ?></small>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary" name="buy" value="yes" >KUPI</button>
</div>

</form>

</div>
</div>
</div>



<div class="col-4">
<div class="card">
    <img class="card-img-top" src="<?php echo htmlspecialchars($product['img']); ?>">
    <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
            <p class="card-text">
                <div class="d-flex justify-content-between">
                    <h5 class="text-primary">Cena:</h5>
                    <h5 class="text-warning"><?php echo htmlspecialchars($product['price']); ?>rsd</h5>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="text-primary">Kolicina:</h5>
                    <h5 class="text-warning"><?php echo htmlspecialchars($quantity); ?></h5>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="text-primary">Cena za kolicinu:</h5>
                    <h5 class="text-warning"><?php echo htmlspecialchars($product['price'] * $quantity); ?> rsd</h5>
                </div>
                <hr class="mb-3">
                <div class="d-flex justify-content-between">
                    <h2 class="text-danger">TOTAL:</h2>
                    <h2 class="text-danger"><?php echo htmlspecialchars($product['price'] * $quantity); ?>rsd</h2>
                </div>
            </p>
    </div>
</div>
</div>

</main>