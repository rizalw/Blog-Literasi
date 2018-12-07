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
        <title>Homepage</title>
        <Style>
                img#tambah:hover{
                    opacity: 0.5;
                }
        </Style>
    </head>
    <body style="background-color:#b6e1fc">
        <!-- Start of upper navbar -->
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color:#6cc3f9" id="navbar">
            <a href="<?php echo base_url('homepage')?>"><img src="http:\\localhost:81\ciblog\media\foto.gif" alt="Lambang 23" width="50px" height="50px"></a>
            <a href="<?php echo base_url('homepage')?>" class="navbar-brand ml-3">Forum Literasi SMAN 23 Bandung</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Start if upper left navbar -->
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php echo base_url('category')?>">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
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
                </ul>
            </div>
        </nav>
        <div class="container" style=" margin-top: 5px;">
            <div class="row" style="margin-top:10px;">
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">   
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">                
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img src="http:\\localhost:81\ciblog\media\politik.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
                <div class="col-md-3 col-sm-6" style="">
                    <img id="tambah" src="http:\\localhost:81\ciblog\media\gambar-plus.jpg" alt="Politik" width="120px" height="160px" style="border: #87cefa solid 1px; margin-left:60px;">
                </div>
            </div>
            <nav aria-label="pagination example" style="margin-top: 40px;">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item "><a class="page-link" href="#">...</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <footer>
            <!-- Start of bottom navbar -->
            <nav class="navbar fixed-bottom navbar-light " style="background-color:#6cc3f9 ; padding: 0px; ">
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
        <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"> </script>
        <script src="<?php echo base_url("assets/js/jquerry-3.3.1.min.js") ?>"> </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
        <script src="<?php echo base_url("assets/js/mdb.min.js")?>"></script>
    </body>
</html>