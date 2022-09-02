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
                <img src="/fe-assets/assets/img/logo.png" alt="" class="img-fluid logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ms-auto justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdow">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program Studi <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">Manajemen</a></li>
                            <li><a class="dropdown-item" href="#">Akuntansi</a></li>
                            <li><a class="dropdown-item" href="#">Perbankan Syari'ah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item " href="#">Mahasiswa</a></li>
                            <li><a class="dropdown-item active" href="/pembayaran">Pembayaran Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="#">Perpustakaan</a></li>
                            <li><a class="dropdown-item" href="#">File Unduhan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="#">Sejarah FEB UNSIQ</a></li>

                            <li><a class="dropdown-item" href="#">Visi, Misi, Tujuan, Sasaran Dan strategi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="spmi.html">SPMI</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="content bg-light">
    <div class="container">
        <div class="content-wrapper pt-5 pb-5 prodi-body">
            <h4 class="prodi-title fw-bold">Pembayaran Mahasiswa </h4>
            <hr class="border border-2 border-dark">
            <h6 class="text-secondary fw-bold">Untuk konfirmasi pembayaran mohon pilih menu dibawah!</h6>

            <div class="layanan text pt-3">
                <div class="form-layanan-mahasiswa">
                    <div class="pilih-prodi d-flex d-inline-flex w-100 p-4">
                        <label for="prodi" class="w-50 fw-bold">Program Studi</label>
                        <select name="prodi" class="form-control w-50" id="prodi">
                            <option value=""> Pilih</option>
                            <option value="Akuntansi"> Akuntansi</option>
                            <option value="Perbankan Syariah"> Perbankan Syariah</option>
                            <option value="Manajemen"> Manajemen</option>
                        </select>

                    </div>
                    <div class="pilih-prodi d-flex d-inline-flex w-100 p-4">
                        <label for="semester" class="w-50 fw-bold">Semester</label>
                        <select name="semester" class="form-control w-50" id="semester">
                            <option value=""> Pilih</option>
                            <?php
                                for ($i=1; $i<15; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="pembayaran-untuk">
                        <h6>List Tagihan</h6>
                        <hr>
                        <div class="row" id="jenistagihan">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 pb-3">
                <div class="logo-footer pt-5 pb-3">
                    <img src="/fe-assets/img/logo-footer.png" alt="logo-footer" class="img-fluid">
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
<script>
    $(document).ready(function () {
        $.ajax({
            url: '<?= base_url()?>/pembayaran/getPembayaran',
            dataType: 'json',
            success:function (e) {
                if (e.d.length==0){
                    $("#jenistagihan").append('<div class="alert alert-secondary" role="alert">' +
                        'Data Tagihan Tidak ditemukan' +
                        '</div>')
                }
                for (i=0; i< e.d.length; i++){
                    $("#jenistagihan").append('' +
                        '<div class="col-md-4 col-sm-6 p-4">'+
                        '<a href="/pembayaran/tagihan/'+e.d[i].id_tagihan+'">'+
                        '<div class="pem-untuk p-4">'+
                        '<div class="row">'+
                        '<div class="col-5 d-flex align-items-center">'+
                        '<img src="/fe-assets/assets/img/wait.png" class="img-fluid m-auto w-50" alt="">'+
                        '</div>'+
                        '<div class="col-7 pem-text ps-4 pe-4">'+
                        '<h5 class="fw-bold m-auto">'+e.d[i].tagihan+'</h5>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</a>'+
                        '</div>')
                }
            }
        })
        $("#prodi").change(function (e){
            let prodi=$(this).val();
            let sem=$("#semester").val();
            $.ajax({
                url: '<?= base_url()?>/pembayaran/getPembayaran/fi',
                dataType: 'json',
                data:'prodi='+prodi+'&semester='+sem,
                type:'post',
                success:function (e) {
                    $("#jenistagihan").html('');
                    if (e.d.length==0){
                        $("#jenistagihan").append('<div class="col-12">' +
                            '<div class="alert alert-secondary" role="alert">' +
                            'Data Tagihan Tidak ditemukan' +
                            '</div></div>')
                    }
                    console.log(e.d)
                    for (i=0; i< e.d.length; i++){
                        $("#jenistagihan").append('' +
                            '<div class="col-md-4 col-sm-6 p-4">'+
                            '<a href="/pembayaran/tagihan/'+e.d[i].id_tagihan+'">'+
                            '<div class="pem-untuk p-4">'+
                            '<div class="row">'+
                            '<div class="col-5 d-flex align-items-center">'+
                            '<img src="/fe-assets/assets/img/wait.png" class="img-fluid m-auto w-50" alt="">'+
                            '</div>'+
                            '<div class="col-7 pem-text ps-4 pe-4">'+
                            '<h5 class="fw-bold m-auto">'+e.d[i].tagihan+'</h5>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '</a>'+
                            '</div>')
                    }
                }
            })
        });
        $("#semester").change(function (e){
            let prodi=$("#prodi").val();
            let sem=$(this).val();
            $.ajax({
                url: '<?= base_url()?>/pembayaran/getPembayaran/fi',
                dataType: 'json',
                data:'prodi='+prodi+'&semester='+sem,
                type:'post',
                success:function (e) {
                    $("#jenistagihan").html('');
                    if (e.d.length==0){
                        $("#jenistagihan").append('<div class="col-12">' +
                            '<div class="alert alert-secondary" role="alert">' +
                            'Data Tagihan Tidak ditemukan' +
                            '</div></div>')
                    }
                    console.log(e.d)
                    for (i=0; i< e.d.length; i++){
                        $("#jenistagihan").append('' +
                            '<div class="col-md-4 col-sm-6 p-4">'+
                            '<a href="/pembayaran/tagihan/'+e.d[i].id_tagihan+'">'+
                            '<div class="pem-untuk p-4">'+
                            '<div class="row">'+
                            '<div class="col-5 d-flex align-items-center">'+
                            '<img src="/fe-assets/assets/img/wait.png" class="img-fluid m-auto w-50" alt="">'+
                            '</div>'+
                            '<div class="col-7 pem-text ps-4 pe-4">'+
                            '<h5 class="fw-bold m-auto">'+e.d[i].tagihan+'</h5>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '</a>'+
                            '</div>')
                    }
                }
            })
        });

    })
</script>
</body>
</html>