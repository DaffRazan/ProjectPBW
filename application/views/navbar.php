<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">


    <link rel="icon" href="<?= base_url('assets/icon/'); ?>favicon.ico">

    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-transparent shadow-lg" style="font-family: montserrat; font-size: 16px; font-weight:300; background-color:rgba(255,255,255,0.9);">
        <a href="#frontpage"> <img style="width:auto; height:70px; position:relative;" class="img-fluid ml-5" src="<?= base_url('assets/img/logo/logoNya.png'); ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color:#221c10"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav float-right mr-5">
                <a class="nav-item nav-link mr-4" style="color: #221c10; font-weight:500;" onMouseOver="this.style.color='#ffac06'" onMouseOut="this.style.color='#221c10'" href="#premium-seat"><i class="fas fa-couch"></i> Premium Seat</a>
                <a class="nav-item nav-link mr-4" style="color: #221c10; font-weight:500;" onMouseOver="this.style.color='#ffac06'" onMouseOut="this.style.color='#221c10'" href="#normal-seat"><i class="fas fa-chair"></i> Normal Seat</a>
                <a class="nav-item nav-link mr-4" style="color: #221c10; font-weight:500;" onMouseOver="this.style.color='#ffac06'" onMouseOut="this.style.color='#221c10'" href="#menu"><i class="far fa-list-alt"></i> Menu</a>
                <a class="nav-item nav-link" style="color: #221c10; font-weight:500;" onMouseOver="this.style.color='#ffac06'" onMouseOut="this.style.color='#221c10'" href="#about"><i class="fas fa-user-tie"></i> About Us</a>
            </div>
        </div>
    </nav>

</head>

</html>