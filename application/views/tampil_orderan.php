<body>
    <section class="colored-section">
        <div class="container-login1000">
            <div class="card text-white mb-3 mx-auto mt-5" style="max-width: 30rem; background-color:#3e2516; border-radius:20px;">
                <div class="card-header text-center">RESERVATION DATA</div>
                <img class="card-img-top img-thumbnail mx-auto mt-4" style="width:200px;height:200px; border-radius:50%;" src=" <?= base_url('assets/img/profile/') . $user['image']; ?>" alt="default.jpg">
                <div class="card-body">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Order <?= $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <h5 class="card-title text-warning">Id Order : <?= $order['id_order']; ?></h5>
                    <span class="card-text">Id User : </span>
                    <p class="text-warning card-text"><?= ucwords($order['id_user']); ?></p>
                    <span class="card-text">Food : <br> </span>
                    <p class="text-warning card-text"> <?= $order['food']; ?></p>
                    <span class="card-text">Drink : <br> </span>
                    <p class="text-warning card-text"> <?= $order['drink']; ?></p>
                    <span class="card-text">Total Pesanan + Seat : <br> </span>
                    <p class="text-warning card-text"> Rp. <?= $order['total']; ?></p>
                    <span class="card-text">Seat : <br> </span>
                    <p class="text-warning card-text"> <?php echo ($order['id_seat'] == 1) ? "Premium Seat" : "Normal Seat"; ?></p>
                    <span class="card-text">Tanggal & Waktu Order : <br> </span>
                    <p class="text-warning card-text"> <?= $order['waktu_order']; ?></p>
                    <span class="card-text">Status : <br> </span>
                    <p class="text-warning card-text"> <?php echo ($order['done'] == 0) ? "Pesanan belum disajikan" : "Pesanan sudah disajikan"; ?></p>
                    <p>Your reservation will be prepared by us immediately, hang tight and come to our restaurant in 10 minutes forward to enjoy your order menu.</p>
                    <p>You can track your menu status here at "Status" field</p>
                    <?php if ($order['done'] == 0) : ?>
                        <a href="<?= base_url('user/cancelOrder/'); ?><?= $order['id_order']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to cancel?');">Cancel Order</a>
                    <?php endif; ?>
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