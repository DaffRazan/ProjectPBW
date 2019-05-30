<body>
    <section class="colored-section">
        <div class="container-login5000">
            <h3 class="text-center mb-0 pb-0" style="color:#ffffff; text-shadow: 2px 0px 5px #000000;text-transform:uppercase; font-size: 40px;">TABEL ORDER BULAN <?= date('M'); ?></h3>
            <div class="container pb-3 pt-3 mt-0" style="background-color:#ffffff;">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Order</th>
                            <th scope="col">Id Seat</th>
                            <th scope="col">Food</th>
                            <th scope="col">Drink</th>
                            <th scope="col">Total + Seat</th>
                            <th scope="col">Id User</th>
                            <th scope="col">Waktu Order</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Akses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($order as $item) {
                            ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td> <?= $item['id_order']; ?></td>
                                <td> <?= $item['id_seat']; ?></td>
                                <td> <?= $item['food']; ?></td>
                                <td> <?= $item['drink']; ?></td>
                                <td> <?= $item['total']; ?></td>
                                <td> <?= $item['id_user']; ?></td>
                                <td> <?= $item['waktu_order']; ?></td>
                                <td> <?= $item['done']; ?></td>
                                <td> <a href="<?= base_url('admin/ubah/') . $item['id_order']; ?>" class="btn btn-warning">Done</a></td>
                            </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

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

    </section>
</body>