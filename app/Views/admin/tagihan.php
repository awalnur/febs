
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
                    <h3>Jenis Pembayaran</h3>
                    <p class="text-subtitle text-muted">List Jenis Tagihan Mahasiswa</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex flex-row justify-content-between">
                    List Jenis Tagihan
                    <div class="button">
                        <a class="btn btn-info" href="<?= base_url()?>/admin/tagihan/form"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="tablejenis">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tagihan</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Keterangan</th>
                            <th class="d-flex justify-content-end">Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </section>
    </div>
