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
                    <h3><?= $title;?></h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Jenis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header border-bottom pb-1">
                    <h4 class="card-title">Form <?=$title?></h4>
                </div>
                <form action="#" id="form-tagihan">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenistagihan">Jenis Tagihan</label>
                                <?= (!empty($idt))?$idt:''; ?>
                                <input type="text" class="form-control" id="jtagihan" name="tagihan" placeholder="Jenis Tagihan" value="<?= (!empty($data->tagihan))?$data->tagihan:'';?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prodi">Prodi</label>
<!--                                <input type="text" class="form-control" id="basicInput" placeholder="Enter email">-->
                                <select name="prodi" id="prodi" class="form-control" required>
                                    <option value="">-- Pilih Prodi</option>
                                    <option value="Akuntansi" <?= (!empty($data->tagihan) && $data->prodi=='Akuntansi')?'Selected':'';?>>Akuntansi</option>
                                    <option value="Manajemen" <?= (!empty($data->tagihan) && $data->prodi=='Manajemen')?'Selected':'';?>>Manajemen</option>
                                    <option value="Perbankan Syariah" <?= (!empty($data->tagihan) && $data->prodi=='Perbankan Syariah')?'Selected':'';?>>Perbankan Syariah</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" id="semester" placeholder="Semester" name="semester"  value="<?= (!empty($data->semester))?$data->semester:'';?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="basicInput">Keterangan</label>
                                <textarea name="keterangan" id="ket" class="form-control"><?= (!empty($data->keterangan))?$data->keterangan:'';?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="waktu">Batas Waktu</label>
                                <input type="datetime-local" value="<?= (!empty($data->batas_waktu))? date("Y-m-d\TH:i", strtotime($data->batas_waktu)):'';?>" name="batas_waktu" class="form-control" id="batas_waktu">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>

                                <div class="form-check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input form-check-primary" <?= (!empty($data->status) && $data->status=='Active')? 'checked':'';?> name="status" id="status" value="Aktif">
                                        <label class="form-check-label" for="customColorCheck1">Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> &nbsp; Simpan</button>
                    <a class="btn" href="<?= base_url();?>/admin/tagihan "><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                </div>
                </form>
            </div>
        </section>

    </div>
