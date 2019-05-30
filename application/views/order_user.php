<body>
    <section class="colored-section">
        <div class="container-login2000">
            <div class="container mt-5" style="background-color:#ffffff;"><br>
                <form action="<?= base_url('user/order'); ?>" method="post">
                    <h3 class="text-center mt-4">Make Your Order</h3><br>
                    <hr style="width: 50%;"><br>
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="id_order" class="col-sm-2 col-form-label">Id User</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="<?= $user['id']; ?>" id="id_order" name="id_order" readOnly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="food" class="col-sm-2 col-form-label">Food</label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select name="food" id="food" class="custom-select" required>
                                            <option value="">Select your food</option>
                                            <option value="Nasi Goreng Telur">Nasi Goreng Telur (10k)</option>
                                            <option value="Nasi Goreng Ayam">Nasi Goreng Ayam (13k)</option>
                                            <option value="Nasi Goreng Kampung">Nasi Goreng Kampung (20k)</option>
                                            <option value="Nasi Goreng Seafood">Nasi Goreng Seafood (25k)</option>
                                            <option value="Nasi Goreng Teriyaki">Nasi Goreng Teriyaki (25k) </option>
                                            <option value="Chicken Steak">Chicken Steak (20k) </option>
                                        </select>
                                    </div>
                                    <?= form_error('food', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="drink" class="col-sm-2 col-form-label">Drink</label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select name="drink" id="drink" class="custom-select" required>
                                            <option value="">Select your drink</option>
                                            <option value="Espresso">Espresso (8k)</option>
                                            <option value="Sanger Espresso">Sanger Espresso (10k)</option>
                                            <option value="Tea">Tea (6k)</option>
                                            <option value="Greentea">Greentea (10k)</option>
                                            <option value="Lychee Tea">Lychee Tea (12k)</option>
                                            <option value="Lemontea">Lemontea (12k) </option>
                                        </select>
                                    </div>
                                    <?= form_error('drink', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Seat</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="id_seat" id="id_seat" value="1" checked>
                                            <label class="form-check-label" for="premium_seat">
                                                Premium (15k)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="id_seat" id="id_seat" value="2">
                                            <label class="form-check-label" for="normal_seat">
                                                Normal (5k)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary float-right" onclick="return confirm('Are You Sure?');">Order</button>
                                </div>
                            </div>
                </form>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="jumbotron jumbotron-fluid m-0 p-3" style="font-family:montserrat;">
            <div class="container-fluid text-center">
                <p class="lead">©Solusikenyang <span class="text text-danger">
                        <?= date('Y'); ?></span> </p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>