<body>
    <section class="colored-section">
        <div class="container-login3000">
            <div class="row text-center" style="margin-top:-200px; color:#ffffff; text-shadow: 5px 0px 5px #000000;">
                <div class="col-lg-12">
                    <h3 class="mb-5">Welcome, <?= ucwords($user['fullname']); ?> </h3>
                    <img class="shadow-lg mb-5" style="width:200px;height:200px; border-radius:50%;border:5px solid white;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                    <br>
                </div>
            </div>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3 mb-3 text-center">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Orderan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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