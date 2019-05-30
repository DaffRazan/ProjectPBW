<body>
    <section class="colored-section">
        <div class="container-login2000">
            <div class="card text-white mb-3 mx-auto mt-5" style="max-width: 30rem; background-color:#3e2516; border-radius:20px; width: 30rem;">
                <div class="card-header text-center">PROFILE USER</div>
                <img class="card-img-top img-thumbnail mx-auto mt-4" style="width:200px; height:200px; border-radius:50%;" src=" <?= base_url('assets/img/profile/') . $user['image']; ?>" alt="default.jpg">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-xl-12">
                            <a class="btn btn-success" href="<?= base_url('user/editProfile'); ?>">Edit Profile</a>
                        </div>
                        <div class="col-xl-12 mt-3 ">
                            <a class="btn btn-danger" href="<?= base_url('user/changePassword'); ?>">Change Password</a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                    <h5 class="card-title text-warning">Id User: <?= $user['id']; ?></h5>
                    <span class="card-text">Full Name: </span>
                    <p class="text-warning card-text"><?= ucwords($user['fullname']); ?></p>
                    <span class="card-text">Username : <br> </span>
                    <p class="text-warning card-text"> <?= $user['username']; ?></p>
                    <span class="card-text">Email : <br> </span>
                    <p class="text-warning card-text"> <?= $user['email']; ?></p>
                    <p class="card-text text-white mt-3 float-right">Member since <?= date('d F Y', $user['date_created']); ?></p>
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