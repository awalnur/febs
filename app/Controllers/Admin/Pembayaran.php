<?php

namespace App\Controllers\Admin;

use Hermawan\DataTables\DataTable;

class Pembayaran extends AdminController
{
    function getPembayaran($id=null){
        $db = db_connect();
        $builder = $db->table('pembayaran')->select('nim, nama, prodi, semester,tgl, bukti_pembayaran')->where(['id_tagihan'=>$id]);

        return DataTable::of($builder)
            ->addNumbering() //it will return data output with numbering on first column
            ->toJson();
    }
    function tampil($id=null){
        $j=$this->db->table('tagihan');
        $j->where(['id_tagihan'=>$id]);
        $d['jenis']=$j->get()->getRow();
        $ds['title']=$d['jenis']->tagihan;
        $ids['id']=$id;
        echo view('admin/templates/header', $ds);
        echo view('admin/listpembayaran',$d);
        echo view('admin/templates/footer',$ids);
    }
}