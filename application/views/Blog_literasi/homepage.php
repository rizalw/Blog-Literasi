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
                        <a class="nav-link active" href="<?php echo base_url('homepage')?>">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php echo base_url('category')?>">Kategori</a>
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
        <div class="container container-fluid mt-xl-80 mt-md-120   " style="background-color:#9dd7fb; margin-top: 80px;">
            <div class="row">
                <div class="col-md-4 col-sm-12" style="border: #87cefa solid 1px;">
                    <br>
                    <a href="<?php echo base_url('post_bahaya_junk_food')?>"><img src="http:\\localhost:81\ciblog\media\junkfood.jpg" alt="Foto Artikel" width="320px" height="180px" style="margin:1em 0 1em 0"></a>
                </div>
                <div class="col-md-8 col-sm-12" style="border: #87cefa solid 1px; border-left:0px;">
                    <br>
                    <h3><a href="<?php echo base_url('post_bahaya_junk_food')?>" style="text-decoration:none; color:black;">Dampak Buruk Junk Food Untuk Kesehatan Tubuh</a></h3>
                    <p><div class="lead">Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia.</div>Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. Tak hanya itu saja, makanan cepat saji juga memiliki cita rasa yang lezat ditambah lagi harganya yang terjangkau. <a href="<?php echo base_url('post_bahaya_junk_food')?>"class="text-muted">See more...</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12" style="border: #87cefa solid 1px;">
                    <br>
                    <a href="#"><img src="http:\\localhost:81\ciblog\media\pendidikan.jpg" alt="Foto Artikel" width="320px" height="180px"></a>
                </div>
                <div class="col-md-8 col-sm-12" style="border: #87cefa solid 1px; border-left:0px;">
                    <br>
                    <h3><a href="#" style="text-decoration:none; color:black;">Pengaruh Pendidikan Terhadap Kualitas Anak Pedalaman</a></h3>
                    <p><div class="lead">Bukan rahasia lagi bila anak-anak yang tinggal di daerah pedalaman sangat sulit mendapatkan kehidupan yang layak seperti anak-anak pada umumnya.</div>Mereka kesulitan mendapat air bersih, mengenyam pendidikan sesuai batas kelayakan pendidikan Indonesia dan sulit mengikuti perkembangan zaman. Tak hanya itu saja , mereka bahkan tidak mengenal alat komunikasi seperti telepon genggam. <a href="#"class="text-muted">See more...</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12" style="border: #87cefa solid 1px;">
                    <br>
                    <a><img src="http:\\localhost:81\ciblog\media\madu.jpg" alt="Foto Artikel" width="320px" height="180px"></a>
                </div>
                <div class="col-md-8 col-sm-12" style="border: #87cefa solid 1px; border-left:0px;">
                    <br>
                    <h3><a href="#" style="text-decoration:none; color:black;">Manfaat Madu Bagi Kesehatan</a></h3>
                    <p><div class="lead">Madu adalah hasil produksi dari hewan lebah yang kini telah dikenal lebih jauh karena khasiatnya bagi kesehatan yang melimpah.</div>Tak heran jika madu banyak digunakan untuk pengobatan berbagai macam penyakit. Adapun manfaat madu, yaitu: a. Manfaat madu untuk kesehatan kulit wajah Madu tak hanya dikenal sebagai pemanis alami, <a href="#"class="text-muted">See more...</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12" style="border: #87cefa solid 1px;">
                    <br>
                    <a href="#"><img src="http:\\localhost:81\ciblog\media\kebakaranhutan.jpg" alt="Foto Artikel" width="320px" height="180px"></a>
                </div>
                <div class="col-md-8 col-sm-12" style="border: #87cefa solid 1px; border-left:0px;">
                    <br>
                    <h3><a href="#" style="text-decoration:none; color:black;">Kebakaran Hutan di Indonesia</a></h3>
                    <p><div class="lead">Indonesia adalah suatu negara dengan iklim tropis yang terdiri dari ribuan pulau.</div>Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia). Mengenai faktor alam memang tak ada yang dapat disalahkan,<a href="#"class="text-muted">See more...</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12" style="border: #87cefa solid 1px;">
                    <br>
                    <a><img src="http:\\localhost:81\ciblog\media\banci.jpg" alt="Foto Artikel" width="320px" height="180px"></a>
                </div>
                <div class="col-md-8 col-sm-12" style="border: #87cefa solid 1px; border-left:0px;">
                    <br>
                    <h3><a href="#" style="text-decoration:none; color:black;">Fenomena Lelaki Tulen Berpenampilan Bagai Seorang Wanita</a></h3>
                    <p><div class="lead">Bagi Anda yang mengikuti perkembangan berita masa kini khususnya berita di kalangan selebriti pastinya sudah sering dibahas lelaki seperti wanita.</div>Secara lebih jelasnya, sesungguhnya mereka adalah seorang laki-laki yang entah mengapa bergaya bak seorang wanita. Mereka mengenakan baju atau pakaian yang identik dengan para perempuan bahkan hingga memakai make up cantik pula. <a href="#"class="text-muted">See more...</a></p>
                </div>
            </div>
            <br>
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