</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header p-1 pe-2 ps-2">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                <h4 class="modal-title text-center w-100">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p><img src="" id="images-kwitansi" class="image w-100" alt="">.</p>
            </div>
            <div class="modal-footer">
                <div id="btn-downs"></div>
            </div>
        </div>

    </div>
</div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="<?= base_url();?>/assets/vendors/fontawesome/all.min.js">

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"?></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"?></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"?></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"?></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"?></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"?></script>
<!--<script src="--><?//= base_url();?><!--/assets/vendors/simple-datatables/simple-datatables.js"></script>-->

<script>
    // Simple Datatable
    $(document).ready(function() {
        let jenis=$("#tablejenis").DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?= base_url()?>/admin/tagihan/getTagihan',
            columnDefs: [
                {
                    targets: 5,
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm" id="view">lihat</button> &nbsp; <button class="btn btn-secondary btn-sm" id="edit">Edit</button>  &nbsp; <button class="btn btn-sm text-danger" id="hapusjenis">Hapus</button>',
                },
            ],
        });
        $('#tablejenis tbody').on('click', '#edit', function () {
            var data = jenis.row($(this).parents('tr')).data();
            window.location.href="<?= base_url()?>/admin/tagihan/form/edit/"+data[5];
        });
        $('#tablejenis tbody').on('click', '#view', function () {
            var data = jenis.row($(this).parents('tr')).data();
            window.location.href="<?= base_url()?>/admin/pembayaran/tampil/"+data[5];
        });
        $('#tablejenis tbody').on('click', '#hapusjenis', function () {
            var data = jenis.row($(this).parents('tr')).data();
            $.confirm({
                title: 'Peringatan!',
                content: 'Data pembayaran tersimpan akan ikut terhapus!',
                theme: 'bootstrap',

                buttons: {
                    confirm: {
                        btnClass: 'btn-red',
                        text:'Tetep Hapuss',
                        action:function () {
                            $.ajax({
                                url:'<?=base_url()?>/admin/tagihan/delete/'+data[5],
                                data:'id='+data[5],
                                dataType:'json',
                                type:'post',
                                success:function(e){
                                    if (e.success==1){
                                        $.alert({
                                            title: 'Informasi!',
                                            type:'yellow',
                                            content: 'Data berhasil terhapus!',
                                            }
                                        )
                                        jenis.ajax.reload();
                                    }else{

                                        $.alert({
                                                title: 'informasi!',
                                                type:'red',
                                                content: 'Terjadi kesalahan saat menghapus!',
                                            }
                                        )
                                    }
                                },error:function (){
                                    $.alert({
                                            title: 'informasi!',
                                            type:'red',
                                            content: 'Terjadi kesalahan saat menghapus!',
                                        }
                                    )
                                }
                            })
                        }
                    },
                    cancel:{
                        text:'Batalkan',
                        action:function () {
                        }

                    }
                    ,

                }
            });
        });
        $("#form-tagihan").submit(function(e){
            e.preventDefault();
            let datsa= $(this).serialize();
            let id=$("#idtagihan").val();
            var links='';
            if(id==''){
                links='';
            }else{
                links='update/'+id;
            }

            $.ajax({
                url:'<?= base_url()?>/admin/tagihan/save/'+links,
                type:'Post',
                data: datsa,
                dataType: 'Json',
                success:function (e){
                    if (e.success == 1){
                        if (e.s=='save'){
                            $.confirm({
                                title:'Info',
                                type:'green',
                                theme:'bootstrap',
                                content:'Data Berhasil Tersimpan, Tambah Data Baru',
                                buttons:{
                                    confirm:{
                                        text:'Ya, Tambah Baru',
                                        btnClass: 'btn-green',
                                        action:function () {

                                        }
                                    },
                                    cancel:{
                                        text: "kembali ke daftar",
                                        action:function () {
                                            window.location.href="<?=base_url()?>/admin/tagihan"
                                        }
                                    }
                                }

                            })
                        }else{
                            $.confirm({
                                title:'Info',
                                type:'green',
                                theme:'bootstrap',
                                content:'Edit Data Berhasil ',
                                buttons:{
                                    confirm:{
                                        text:'kembali',
                                        btnClass: 'btn-green',
                                        action:function () {

                                        }
                                    }
                                }

                            })
                        }

                    }else{
                        $.alert({
                            title:'Info',
                            content:'Terjadi Kesalahanan Saat Menyimpan'
                        })
                    }
                }
            })
        });

        let pembayaran=$("#tablepembayaran").DataTable({

            dom: 'Bfrtip',
            processing: true,
            serverSide: true,
            ordering: true,
            lengthChange: true,
            ajax: '<?= base_url()?>/admin/pembayaran/getPembayaran/<?= (!empty($id))?$id:'';?>',
            columnDefs: [
                {
                    targets: 5,
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm" id="view">lihat Kwitansi</button>',
                },
            ],
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]

        });
        $('#tablepembayaran tbody').on('click', '#view', function () {
            var data = pembayaran.row($(this).parents('tr')).data();
            // alert('')
            $("#images-kwitansi").attr('src', '<?=base_url('uploads')?>/'+data[6]);
            $("#btn-downs").html(
                '<a download="'+data[1]+'_BuktiBayar" href="/uploads/'+data[6]+'" class="btn btn-sm btn-primary">Download</a>'
            )
            $("#myModal").modal("show");
            console.log('ss')
        });
        $(".dt-button").addClass('btn btn-sm btn-primary')
    });

</script>

<script src="<?= base_url();?>/assets/js/main.js"></script>
</body>

</html>