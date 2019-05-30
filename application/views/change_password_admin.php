<body>
    <section class="colored-section">
        <div class="container-login4000">
            <div class="container shadow-lg" style="background-color:#ffffff;">
                <div class="row">
                    <div class="col-lg-6 mx-auto pt-5 pb-5">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('admin/changepassword'); ?>" method="post">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" name="current_password" id="current_password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password1">New Password</label>
                                <input type="password" class="form-control" name="new_password1" id="new_password1">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 6-20 characters long and must not contain spaces, special characters, or emoji.
                                </small>
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="new_password2">Confirm New Password</label>
                                <input type="password" class="form-control" name="new_password2" id="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Change</button>
                        </form>
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

    <script>
        //script popup name file gambar saat mau upload file
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>