<main>



    <div class="d-flex p-2 bd-highlight">

        <div class="container">
            <div class="row">
                <div class="col-10 mb-5">
                    <form class="p-4" action="./login.php" method="post" style="border: solid black 2px; border-radius: 2%;">
                       
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email">
                            <span class="text-danger"><?php if (!empty($systemErrors['email'])) {
                                                            echo  $systemErrors['email'];
                                                        }  ?></span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">Lozinka</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <span class="text-danger"><?php if (!empty($systemErrors['password'])) {
                                                                    echo  $systemErrors['password'];
                                                                }  ?></span>
                                </div>
                            </div>
                           

                            <button type="submit" class="btn btn-success mt-5 mb-5" name="sub" value="yes">POTVRDI</button>
                            <span class="text-danger"><?php if (!empty($systemErrors['login'])) {
                                                                    echo  $systemErrors['login'];
                                                                }  ?></span>

                        </div>


                </div>
                </form>
            </div>
            
        </div>
        <img src="./public/theme/img/reg.jpeg" height="510px" width="1450">
    </div>




</main>