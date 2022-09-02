<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing FEB</title>
    <link rel="stylesheet" href="/fe-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fe-assets/css/style.css">
    <link rel="stylesheet" href="/fe-assets/node_modules/icofont/icofont.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body  id="top">

<header class="d-block">
    <div class="header-top-bar">
        <div class="container-fluid m-0 p-0">

            <div class="d-flex flex-row-reverse 0">
                <ul class="nav login-button">
                    <li class="nav-item">Login Mahasiswa </li>
                    <li class="nav-item">Login Dosen</li>
                </ul>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navigation shadow-sm" id="navbar">
        <div class="container d-flex align-items-end">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.png" alt="" class="img-fluid logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ms-auto justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program Studi <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="prodi.html#manajemen">Manajemen</a></li>
                            <li><a class="dropdown-item" href="prodi.html#akuntansi">Akuntansi</a></li>
                            <li><a class="dropdown-item" href="prodi.html#perbankansyariah">Perbankan Syari'ah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#">Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url()?>/pembayaran">Pembayaran Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="#">Perpustakaan</a></li>
                            <li><a class="dropdown-item" href="#">File Unduhan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="#">Sejarah FEB UNSIQ</a></li>

                            <li><a class="dropdown-item" href=#">Visi, Misi, Tujuan, Sasaran Dan strategi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">SPMI</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="c-1">
        <div class="row">
            <div class="col-12 p-0">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="carousel-overlay"></div>
                            <div class="carousel-title2">
                                <h1 class="t2">UNSIQ</h1>
                            </div>

                            <div class="h-auto left-carousel">
                            </div>
                            <div class="righborder-white">
                            </div>
                            <div class="righborder">
                            </div>
                            <div class="carousel-title">
                                <h1>FEB</h1>
                            </div>
                            <img src="/fe-assets/assets/img/unsiq wonosobo.jpg" class="d-block w-100" alt="...">

                            <div class="carousel-caption d-md-block">
                                <div class="label">
                                    <h5>Fakultas<br>
                                        Ekonomi dan Bisnis</h5>
                                    <!--                                <hr>-->
                                    <p>Universitas Sains Al-Quran Tahun 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="carousel-overlay"></div>
                            <div class="carousel-title2">
                                <h1 class="t2">UNSIQ</h1>
                            </div>

                            <div class="h-auto left-carousel">
                            </div>
                            <div class="righborder-white">
                            </div>
                            <div class="righborder">
                            </div>
                            <div class="carousel-title">
                                <h1>FEB</h1>
                            </div>
                            <img src="/fe-assets/assets/img/unsiq wonosobo.jpg" class="d-block w-100" alt="...">

                            <div class="carousel-caption d-md-block">
                                <div class="label">
                                    <h5>Fakultas<br>
                                        Ekonomi dan Bisnis</h5>
                                    <!--                                <hr>-->
                                    <p>Universitas Sains Al-Quran Tahun 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="carousel-overlay"></div>
                            <div class="carousel-title2">
                                <h1 class="t2">UNSIQ</h1>
                            </div>

                            <div class="h-auto left-carousel">
                            </div>
                            <div class="righborder-white">
                            </div>
                            <div class="righborder">
                            </div>
                            <div class="carousel-title">
                                <h1>FEB</h1>
                            </div>
                            <img src="/fe-assets/assets/img/unsiq wonosobo.jpg" class="d-block w-100" alt="...">

                            <div class="carousel-caption d-md-block">
                                <div class="label">
                                    <h5>Fakultas<br>
                                        Ekonomi dan Bisnis</h5>
                                    <!--                                <hr>-->
                                    <p>Universitas Sains Al-Quran Tahun 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="content pt-5">
    <section class="visi pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-content-center">
                    <img src="assets/img/r30.png" alt="" class="w-75 m-auto">
                </div>
                <div class="col-lg-6 right-side d-flex flex-column">
                    <h3>VISI</h3>
                    <p>Menjadi Fakultas Ekonomi dan Bisnis yang menjunjung nilai-nilai Islam dan unggul dibidang Kewirausahaan pada Tahun 2031.</p>
                    <a href="#" class="link-visi mt-auto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pengumuman pb-2">
        <div class="container">
            <div class="title d-flex pt-4">
                <h3 class="m-auto pe-3 fw-bold">Pengumuman</h3>
                <hr class="w-100 m-auto">
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="carouselPengumuman" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselPengumuman" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                            <li data-bs-target="#carouselPengumuman" data-bs-slide-to="1" aria-label="Slide 2"></li>
                            <li data-bs-target="#carouselPengumuman" data-bs-slide-to="2" aria-label="Slide 3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item p-5 active">
                                <div class="row">
                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>

                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-5">
                                <div class="row">
                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>

                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-5">
                                <div class="row">
                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>

                                    <div class="col-6 ps-4">
                                        <div class="pengumuman-item p-3">
                                            <p class="ps-3 m-auto">Seluruh Kegiatan di Fakultas Ekonomi dan Bisnis Universitas Sains dan Al-Qur’an akan dilakukan di rumah masing-masing (WFH) dari tanggal 29-31 Februari 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="berita mt-5">
        <div class="container">
            <div class="title d-flex pt-4">
                <h3 class="m-auto w-25 pe-3 fw-bold">Berita Terkini</h3>
                <hr class="w-100 m-auto">
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="carouselBerita" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselBerita" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                            <li data-bs-target="#carouselBerita" data-bs-slide-to="1" aria-label="Slide 2"></li>
                            <li data-bs-target="#carouselBerita" data-bs-slide-to="2" aria-label="Slide 3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item pt-2 pb-2 ps-5 pe-5  active">
                                <div class="row">
                                    <div class="col-6 pt-4 pb-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-6 p-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item pt-2 pb-2 ps-5 pe-5">
                                <div class="row">
                                    <div class="col-6 pt-4 pb-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-6 p-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item pt-2 pb-2 ps-5 pe-5">
                                <div class="row">
                                    <div class="col-6 pt-4 pb-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <div class="col-6 p-4">
                                        <div class="card-berita p-5">
                                            <div class="cb-img">
                                                <img src="assets/img/gambar2.png" class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="cb-title mt-3">
                                                <h6 class="fw-bold">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi  </h6>
                                            </div>
                                            <div class="cb-time mt-2">
                                                <span>22 September 2022</span>
                                            </div>
                                            <div class="cb-link">

                                            </div>
                                            <a href="#" class="link-dark">Selengkapnya</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="program mt-5">
        <div class="container">
            <div class="title d-flex pt-4">
                <h3 class="m-auto w-25 pe-3 fw-bold">Berita Terkini</h3>
                <hr class="w-100 m-auto">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-pk p-5">
                        <div class="pk-img">
                            <img src="/fe-assets/assets/img/gambar2.png" class="img-fluid" alt="">
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary w-100 p-2 fw-bold">Class Exlusive</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-pk p-5">
                        <div class="pk-img">
                            <img src="/fe-assets/assets/img/gambar2.png" class="img-fluid" alt="">
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary w-100 p-2 fw-bold">Class Karyawan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 pb-3">
                <div class="logo-footer pt-5 pb-3">
                    <img src="/fe-assets/assets/img/logo-footer.png" alt="logo-footer" class="img-fluid">
                </div>
                <hr class="w-50 f-logo">
                <h5 class="fw-bold">Fakultas Ekonomi dan Bisis</h5>
                <h6>Universitas Sains Al-Qur'an</h6>
                <h6>Jawa Tengah di Wonosobo</h6>
            </div>
            <div class="col-lg-3 p-5">
                <h6 class="fw-bold">Tentang Fakultas</h6>
                <ul class="list-unstyled link-footer">
                    <li><a href="#">Sejarah FEB UNSIQ</a></li>
                </ul>
            </div>
            <div class="col-lg-4 p-5">
                <div class="footer-contact">
                    <h6 class="fw-bold float-end">Kontak</h6>
                    <ul class="list-unstyled link-footer float-end">
                        <li class="text-end"><a href="#">Jl. KH. Hasyim Asy'ari Km. 03, Kalibeber, Kec. Mojotengah, Kab. Wonosobo, Jawa Tengah - 56351 </a></li>
                        <li class="text-end"><a href="#">Telp. : (0286) ****** </a></li>
                        <li class="text-end"><a href="#">Fax. : (0286) *******</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container pt-3 pb-3">
            <div class="d-flex justify-content-between">
                <span class="footer-copyright fw-lighter mt-auto mb-auto">Copyright All Right Reserved 2022, Faculty of Economics and Business, UNSIQ</span>
                <ul class="d-flex list-inline social-list mb-0">
                    <li>
                        <a href="#"><i class="icofont-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-facebook"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script></script>
<script src="/fe-assets/js/bootstrap.min.js"></script>
</body>
</html>