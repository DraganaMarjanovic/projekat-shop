<main>

<form style="display:flex;" method="GET" action="products-page.php">
    
        <select  name="sort" class="form-select" aria-label="Default select example">
            
            <option <?php if($sort == "") { echo htmlspecialchars("Selected"); } ?> value="">Sortiranje po ceni</option>
                    <option <?php if($sort == ORDER_BY_PRICE_ASC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_ASC); ?>">Rastuca cena</option>
                    <option <?php if($sort == ORDER_BY_PRICE_DESC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_DESC); ?>">Opadajuca cena</option>

           
        </select>

        <input type="text" class="form-control" placeholder="pretraga" name="term" value="<?php echo htmlspecialchars($term); ?>">
                
        <button type="submit" class="btn btn-outline-success bg-primary">TRAZI</button>
         
 </form>



  <div class="row m-5" >
  <?php foreach ($products as $key => $single) { ?>
    <div class="col-4">
      <h6><?php echo $single['title']; ?></h6>
      <p> <img src="<?php echo $single['img'] ?>"
          width="250" height="250" alt="crna"><span><strong> <?php echo $single['price'] ?>rsd</strong></span> </p>
   <a href="./single-product.php?page=<?php echo $single['id']; ?>" class="bg-warning" role="button">PRIKAZI</a></button>
   <a href="./shop.php?page=<?php echo $single['id']; ?>" class="bg-warning" role="button"><img src="./public/theme/img/korpa.jpg" width="40px" height="40px"></a>
    </div>
    
    <?php } ?>
    </div>
    



          
  










    <nav>
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="./pagin.php">2</a></li>
    <li class="page-item"><a class="page-link" href="./pagin.php">Next</a></li>
  </ul>
</nav>





</main>







