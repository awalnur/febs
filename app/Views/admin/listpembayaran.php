
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pembayaran Mahasiswa</h3>
                    <p class="text-subtitle text-muted">List Mahasiswa yang sudah bayar</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $jenis->tagihan;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex flex-row justify-content-start ">

                    <div class="button">
                        <a class="btn btn-secondary rounded-pill" href="<?= base_url()?>/admin/tagihan"><i class="fa fa-arrow-left"></i> Tambah</a>
                    </div>
                    <h5 class="fw-normal mt-auto ms-2">
                        Data Pembayaran Mahasiswa : <b><?= $jenis->tagihan; ?></b>
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="tablepembayaran">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th class="d-flex justify-content-end">Kwitansi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalkwitansi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>