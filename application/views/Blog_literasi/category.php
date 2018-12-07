<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?> ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url ("assets/css/mdb.min.css") ?> ">
        <title>Category</title>
    </head>
    <body style="background-color:#b6e1fc">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#6cc3f9" id="navbar">
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
                        <a class="nav-link active" href="<?php echo base_url('category')?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('about_us')?>">Tentang Kami</a>
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
                        <a href="#">
                            <button type="submit" class="btn btn-default" style="border: #8a8a5c solid 1px;">Cari</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <img src="http://localhost:81/multimedia/images2.jpg" alt="foto profil" width="30px" height="30px" style="border-radius:15px">
                            <br>
                            <small style="color:black; text-decoration:none">Lihat Profil</small>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container container-fluid" style="margin-top: 80px;">
            <h1 class="display-4" style="text-align:center">Kategori</h1>
            <div class="row" style="margin-bottom:1em">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center;"><a href="#"><h4 style="text-decoration:none; color:black;">Politik</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#"; style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center; text-"><a href="#"><h4 style="text-decoration:none; color:black;">Ekonomi</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\ekonomi.jpg" alt="Ekonomi" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#" style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center; "><a href="#"><h4 style="text-decoration:none; color:black;">Sosial</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\sosial.jpg" alt="Sosial" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#" style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:1em">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center; "><a href="#"><h4 style="text-decoration:none; color:black;">Digital</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\digital.jpg" alt="Digital" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#" style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center; "><a href="#"><h4 style="text-decoration:none; color:black;">Agama</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\agama.jpg" alt="Agama" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#" style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background-color:#9dd7fb">
                        <div class="card-title" style="text-align:center; "><a href="#"><h4 style="text-decoration:none; color:black;">Sastra</h4></a></div>
                        <img src="http:\\localhost:81\ciblog\media\sastra.jpg" alt="Sastra" width="160px" height="120px" style="border: #87cefa solid 1px; margin-left: auto; margin-right: auto;">
                        <div class="card-body" style="text-align:center"><a href="#" style="text-decoration:none; color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iste!</a></div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <footer>
            <!-- Start of bottom navbar -->
            <nav class="navbar navbar-light " style="background-color:#6cc3f9 ; padding: 0px; ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <p>@Copyright 2018</p>
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
        <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
        <script src="<?php echo base_url("assets/js/jquerry-3.3.1.min.js")?>"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
        <script src="<?php echo base_url("assets/js/mdb.min.js")?>"></script>
    </body>
</html>