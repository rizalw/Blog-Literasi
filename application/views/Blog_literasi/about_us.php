<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?> ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url ("assets/css/mdb.min.css") ?> ">
        <link rel="stylesheet" href="http:\\localhost:81\ciblog\application\views\style.css">
        <title>About Us</title>
    </head>
    <body style="background-color:#b6e1fc">
        <!-- Start of upper navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top"  style="background-color:#6cc3f9" id="navbar">
            <a href="<?php echo base_url('homepage')?>"><img src="http:\\localhost:81\ciblog\media\foto.gif" alt="Lambang 23" width="50px" height="50px"></a>
            <a href="<?php echo base_url('homepage')?>" class="navbar-brand ml-3">Forum Literasi SMAN 23 Bandung</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Start if upper left navbar -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('homepage')?>">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php echo base_url('category')?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tentang Kami</a>
                    </li>
            </div>
            <div>
                <!-- Start of right upper navbar -->
                <ul class="navbar-nav ml-auto">
                    <form class="navbar-form mr-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>   
                    </form>
                    <li class="nav-item">
                        <a href="nav-link">
                            <button type="submit" class="btn btn-default" style="border: #8a8a5c solid 1px;">Cari</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <div>
                                <img src="http://localhost:81/multimedia/images2.jpg" alt="foto profil" width="30px" height="30px" style="border-radius:15px; align:center; margin-left:auto; margin-right:auto">
                            </div>
                            <small style="color:black; text-decoration:none">Lihat Profil</small>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container container-fluid" style="background-color:#9dd7fb; margin-top: 80px;">
            <h1 class="my-4">Tentang Kami
                <small>Tim Website</small>
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="my-4">Tim Kami</h2>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:81/multimedia/images2.jpg" alt="">
                    <h3>David Ezer
                        <small>Back-end Programmer</small>
                    </h3>
                    <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:81/multimedia/images2.jpg" alt="">
                    <h3>Rizal Widyananda
                        <small>Front-end Programmer</small>
                    </h3>
                    <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:81/multimedia/images2.jpg" alt="">
                    <h3>Muhammad Fakhrul Kemal
                        <small>Creative Team Leader</small>
                    </h3>
                    <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:81/multimedia/images2.jpg" alt="">
                    <h3>Muhammad Fakhri 
                        <small>Creative Team Member</small>
                    </h3>
                    <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                </div>
            </div>
        </div>  
        <footer>
            <!-- Start of bottom navbar -->
            <nav class="navbar  navbar-light " style="background-color:#6cc3f9 ; padding: 0px; ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <p>&copy;Copyright 2018</p>
                    </li>
                </ul>  
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <p>SMAN 23 Bandung</p>
                    </li>
                </ul>
            </nav>
        </footer>
        <!-- Source  -->
        <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
        <script src="<?php echo base_url("assets/js/jquerry-3.3.1.min.js") ?>"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
        <script src="<?php echo base_url("assets/js/mdb.min.js")?>"></script>
    </body>
</html>