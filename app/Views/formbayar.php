<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing FEB</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
            <?php
            if (!empty($_SESSION['error'])){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Terjadi kesalahan Saat menyimpan data</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }?>
            <h6 class="text-secondary fw-bold">Untuk konfirmasi pembayaran mohon mengisi form dibawah!</h6>

            <div class="layanan text pt-3">
                <div class="form-layanan-mahasiswa">
                    <form action="<?=base_url()?>/pembayaran/save/<?=$id?>" enctype="multipart/form-data" method="post" class="form-l-mahasiswa  w-75">
                        <div class="form-group pt-3">
                            <label for="nama" class="fw-bold"> Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
                        </div>

                        <div class="form-group pt-3">
                            <label for="nim" class="fw-bold"> NIM</label>
                            <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" required>
                        </div>
                        <div class="form-group pt-3">
                            <label for="prodi" class="fw-bold">Pilih Prodi</label>
                            <select name="prodi" id="prodi" class="form-control" placeholder="s" required>
                                <option value="">Pilih Prodi</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Perbankan Syariah">Perbankan Syariah</option>
                            </select>

                        </div>
                        <div class="form-group pt-3">
                            <label for="semester" class="fw-bold">Pilih Prodi</label>
                            <select name="semester" id="semester" class="form-control" placeholder="s" required>
                                <option value="">Pilih Semester</option>
                                <?php
                                for ($i=1; $i<15; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                                ?>
                            </select>

                        </div>
                        <div class="form-group pt-3 mb-2">
                            <label for="" class="fw-bold">Bukti Pembayaran</label>

                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col w-full h-40 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <div class="btn btn-primary btn-sm ps-4 pe-4"> Pilih File</div>

                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            *format file JPG, JPEG, PNG, PDF maksimal 1 Mb</p>
                                    </div>
                                    <input type="file" name="kwitansi" id="infile" class="opacity-0"  required/>
                                </label>
                            </div>
                            <div class="toast mt-2" role="alert" id="toast" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <strong class="me-auto" id="filename">Bootstrap</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                             </div>
                        </div>
                        <span class="text-danger mb-2">*Pastikan semua data terisi dan benar!</span>
                        <button class="btn btn-md btn-primary w-100 mt-3" type="submit">KIRIM</button>
                    </form>
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
<script>
    $(document).ready(function (e){
        $('#infile').on('change',function(){
            //get the file name
            console.log('heh');
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $("#toast").addClass('show');
            $("#filename").html(fileName);
            // $(this).next('.custom-file-label').html(fileName);
        })
        $('#toast').on('hidden.bs.toast', function () {
            // do something...
            $("#infile").val('');
        })
    })
</script>
</body>
</html>