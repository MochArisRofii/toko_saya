<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Toko Saya</title>

    <style type="text/css">
        .navbar-brand{
            font-family: 'Courgette', cursive;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fas fa-shopping-cart mr-2"></i></h3>
        <a class="navbar-brand font-weight-bold" href="#">Toko Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Checkout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Ketik disini.." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
        </div>
    </nav>
    <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
                <li class="list-group-item bg-warning"><i class="fas fa-list"></i>KATEGORI PRODUK</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Handphone</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Laptop</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Elektronik</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Aksesoris Hp</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Aksesoris Laptop</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i>Aksesoris Elektronik</li>
            </ul>
        </div>
        <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slinder/slider1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slinder/slider2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slinder/slider3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h4 class="text-center font-weight-bold m-4">Produk Terbaru</h4>
            <div class="row mx-auto">
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="images/produk/produk1.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Produk 1</h5>
                        <p class="card-text">Rp.111.111</p>
                        <a href="#" class="btn btn-danger">Beli</a>
                        <a href="#" class="btn btn-info">Detail</a>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="images/produk/produk2.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">Rp.111.111</p>
                        <a href="#" class="btn btn-danger">Beli</a>
                        <a href="#" class="btn btn-info">Detail</a>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="images/produk/produk3.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Produk 3</h5>
                        <p class="card-text">Rp.111.111</p>
                        <a href="#" class="btn btn-danger">Beli</a>
                        <a href="#" class="btn btn-info">Detail</a>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="images/produk/produk4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Produk 4</h5>
                        <p class="card-text">Rp.111.111</p>
                        <a href="#" class="btn btn-danger">Beli</a>
                        <a href="#" class="btn btn-info">Detail</a>
                    </div>
                </div>
                <div class="row mx-auto mt-5 mb-5">
                    <div class="card mr-2 ml-2" style="width: 16rem;">
                        <img src="images/produk/produk5.png" class="card-img-top" alt="...">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Produk 5</h5>
                            <p class="card-text">Rp.111.111</p>
                            <a href="#" class="btn btn-danger">Beli</a>
                            <a href="#" class="btn btn-info">Detail</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2" style="width: 16rem;">
                        <img src="images/produk/produk6.png" class="card-img-top" alt="...">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Produk 6</h5>
                            <p class="card-text">Rp.111.111</p>
                            <a href="#" class="btn btn-danger">Beli</a>
                            <a href="#" class="btn btn-info">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white p-5">
        <div class="row">
            <div class="col-md-3">
                <h5>LAYANAN PELANGGAN</h5>
                <ul>
                    <li>Pusat Bantuan</li>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                    <li>Cara Pengembalian</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>TENTANG KAMI</h5>
                <P>Kami Adalah Toko Online Terpercaya....</P>
            </div>
            <div class="col-md-3">
            <h5>MITRA KERJASAMA</h5>
            <ul>
                <li>Gojek</li>
                <li>Grab</li>
                <li>Maxim</li>
            </ul>
            </div>
            <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
                <li>08993673900</li>
                <li>20222220@siswa.smkn9malang.sch.id</li>
            </ul>
            </div>
        </div>
    </footer>
    <div class="copyright text-center font-weight-bold p-2 bg-warning">
        <p>Moch Aris Rofii <i class="far fa-copyright"></i>296317 By: SMKN9MALANG</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>