<main>

<form style="display:flex;" method="GET" action="products-page.php">
    
        <select  name="sort" class="form-select" aria-label="Default select example">
            
            <option <?php if($sort == "") { echo htmlspecialchars("Selected"); } ?> value="">Sortiranje po ceni</option>
                    <option <?php if($sort == ORDER_BY_PRICE_ASC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_ASC); ?>">Rastuca cena</option>
                    <option <?php if($sort == ORDER_BY_PRICE_DESC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_DESC); ?>">Opadajuca cena</option>

           
        </select>

        <input type="text" class="form-control" placeholder="pretraga" name="term" value="<?php echo htmlspecialchars($term); ?>">
                
        <button type="submit" class="btn btn-primary">TRAZI</button>
         
 </form>



 <div class="row m-5" >
    
  <?php foreach ($popular as $product) { ?>
    <div class="col-4">
      <h6><?php echo $product['title']; ?></h6>
      <p> <img src="<?php echo $product['img'] ?>"
          width="250" height="250" alt="crna"><span><strong> <?php echo $product['price'] ?>rsd</strong></span> </p>
         <a href="./single-product.php?page=<?php echo $product['id']; ?>" class="bg-warning" role="button">PRIKAZI</a></button>
    </div>

    <?php } ?>
    </div>





    <nav>
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="products-page.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="products-page.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>





</main>
