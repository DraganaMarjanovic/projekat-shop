<main>



    <div class="d-flex p-2 bd-highlight">

        <div class="container">
            <div class="row">
                <div class="col-10 mb-5">
                    <form class="p-4" action="./register.php" method="post" style="border: solid black 2px; border-radius: 2%;">
                        <div class="form-group">
                            <label for="name">Ime</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <span class="text-danger"><?php if (!empty($systemErrors['name'])) {
                                                            echo  $systemErrors['name'];
                                                        }  ?></span>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Prezime</label>
                            <input type="text" class="form-control" id="last-name" name="last_name">
                            <span class="text-danger"><?php if (!empty($systemErrors['last_name'])) {
                                                            echo  $systemErrors['last_name'];
                                                        }  ?></span>
                        </div>
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
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="age">Godine</label>
                                    <input type="number" min="18" step="1" class="form-control" id="age" name="age">
                                    <span class="text-danger"><?php if (!empty($systemErrors['age'])) {
                                                                    echo  $systemErrors['age'];
                                                                }  ?></span>
                                </div>

                            </div>


                            <div>
                                <div class="form-group">
                                    <label for="pol">Pol</label>
                                    <input type="text" class="form-control" id="gender" name="gender">
                                    <span class="text-danger"><?php if (!empty($systemErrors['gender'])) {
                                                                    echo  $systemErrors['gender'];
                                                                }  ?></span>

                                </div>
                            </div>

                            <div class="form-check mb-5">
                                <input type="checkbox" name="rights" value="success" class="form-check-input" id="rights" <?php if ($rights == 'success') {
                                                                                                                                echo htmlspecialchars("Checked");
                                                                                                                            } ?>>
                                <label class="form-check-label" for="rights">Slazete li se sa pravilima?</label>
                                <?php if ($systemErrors['rights']) { ?>
                                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['rights']); ?></small>
                                <?php } ?>
                            </div>

                            <button type="submit" class="btn btn-success mt-5 mb-5" name="sub" value="yes">POTVRDI</button>

                        </div>


                </div>
                </form>
            </div>
            <h2><?php echo $poruka; ?> </h2>
        </div>
        <img src="./public/theme/img/reg.jpeg" height="510px" width="1450">
    </div>




</main>