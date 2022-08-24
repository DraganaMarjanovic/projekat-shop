<style>
form{
  margin:50px;
  border-radius:30px;
  background-image: url(./public/theme/img/sneg.jpeg);
 background-repeat: no-repeat;
  /* background-attachment: fixed;  */
  background-size: 100% 100%;
   opacity: 0.8;


}
label {
font-weight: bolder;
color:blue;
}


    </style>
<main>
<form action="contact-page.php" method="post">
<div class="mb-3" style="margin:60px;">
 
  <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Ime">
  <span class="text-danger"><?php if(!empty($systemErrors['name'])){echo  $systemErrors['name'];}  ?></span>
</div>

<div class="mb-3"  style="margin:60px;">

  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email">
  <span class="text-danger"><?php if(!empty($systemErrors['email'])){echo  $systemErrors['email'];}  ?></span>
</div>
<div class="mb-3"  style="margin:60px;">

  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar" name="message"></textarea>  
</div>

<button type="submit" class="btn btn-warning" style="margin:15px;" name="sub" value="yes">Potvrdi</button>
</form>
<h2 class="text-center"><?php echo $poruka;?> </h2>
</main>