<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>ETHOL REBORN</title>
  </head>
  <body>
    <!-- Navbar -->
    <section id="nav">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#"><span>ETHOL</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#banner">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Fitur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Kuisioner</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- Banner -->
    <section id="banner">
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4 class="title">Pelajari Sesuatu Yang baru <br>Setiap Hari di Mana Saja Kapan Saja</h4>
              <p>Kami menyediakan alat dukungan online untuk kesuksesan Anda dalam belajar. Anda dapat belajar dimana saja dan kapan saja dengan mengkases jutaan sumber daya kami, yang disediakan oleh para pengajar terbaik kami.</p>
              <a href="#pricing" class="btn btn-warning">Periksa Layanan Kami</a>
            </div>

            <div class="col-md-6">
              <img src="assets/img/tim.png" class="ban-img img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L120,202.7C240,213,480,235,720,229.3C960,224,1200,192,1320,176L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </section>
    
    <!-- Features -->
    <section id="features">
      <div class="container">
        <h2 class="text-center">Apa yang kami sediakan?</h2>
        <div class="row text-center">
          <div class="col-md-4 features">
            <img src="assets/img/work.png" class="img-fluid" alt="">
            <h4>Absensi Online</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum distinctio architecto enim fuga ipsam asperiores alias numquam, optio temporibus assumenda molestiae, molestias quis? Porro sunt, architecto adipisci quos eaque voluptatibus!</p>
          </div>
          <div class="col-md-4 features">
            <img src="assets/img/package.png" class="img-fluid" alt="">
            <h4>Nilai Per-semester</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum distinctio architecto enim fuga ipsam asperiores alias numquam, optio temporibus assumenda molestiae, molestias quis? Porro sunt, architecto adipisci quos eaque voluptatibus!</p>
          </div>
          <div class="col-md-4 features">
            <img src="assets/img/search.png" class="img-fluid" alt="">
            <h4>Pengumuman</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum distinctio architecto enim fuga ipsam asperiores alias numquam, optio temporibus assumenda molestiae, molestias quis? Porro sunt, architecto adipisci quos eaque voluptatibus!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Akademik -->
    <section id="pricing">
      <div class="container">
        <h2 class="text-center mb-3">Akademik</h2>
        <div class="row">
          <div class="col-md-6">
            <h4>Layanan Kami</h4>
            <ul>
              <li><span>Daftar Ulang</span><a href="form.php" class="btn btn-warning">Isi Form</a></li>
              <li><span>Nilai per-semester</span><a href="" class="btn btn-primary">Selengkapnya</a></li>
              <li><span>Absensi perkuliahan</span><a href="" class="btn btn-primary">Selengkapnya</a></li>
              <li><span>Jadwal Kuliah</span><a href="" class="btn btn-primary">Selengkapnya</a></li>
              <li><span>Melihat pengumuman</span><a href="" class="btn btn-primary">Selengkapnya</a></li>
              <li><span>Data Mahasiswa</span><a href="data.php" class="btn btn-warning">Lihat!</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="assets/img/why.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Kuisioner -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Kuisioner Kepuasan Layanan</h2>
        <div class="row contact">
          <div class="col-md-6">
            <img src="assets/img/contact.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-6">
            <form action="">
              <div class="form-group">
              <label for="exampleFormControlInput1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="alfarizi">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="alfarizi@gmail.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <br>
            </div>
            <button class="btn btn-primary w-100">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <p class="text-center">Copyright ETHOL Reborn 2021</p>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>