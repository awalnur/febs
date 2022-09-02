<?php

namespace App\Controllers;

use Hermawan\DataTables\DataTable;

class Pembayaran extends BaseController
{
    function index(){
        echo view('pilihbayar');
    }
    function getPembayaran($fi=null){
        $builder=$this->db->table('tagihan');
        $p=$this->request->getPost('prodi');
        $s=$this->request->getPost('semester');
        $builder->where(['status'=>'Active']);

        if(!empty($fi)){
            if (!empty($p) && !empty($s)){
                $builder->where(['prodi'=>$p, 'semester'=>$s]);
                $data['d']=$builder->get()->getResult();
                $data['s']=1;
            }else if (!empty($p) && empty($s)){
                $builder->where(['prodi'=>$p]);
                $data['d']=$builder->get()->getResult();
                $data['s']=1;
            }else if (empty($p) && !empty($s)){
                $builder->where(['semester'=>$s]);
                $data['d']=$builder->get()->getResult();
                $data['s']=1;
            }else{
                $data['d']=$builder->get()->getResult();
                $data['s']=1;
            }
        }else{
            $data['d']=$builder->get()->getResult();
            $data['s']=1;
        }
        echo json_encode($data);
    }
    function formbayar($id=null){

        if (empty($id)){
            return redirect()->back();
        }
        $data['id']=$id;
        echo view("formbayar", $data);
    }
    function tagihan($id=null){
        $builder=$this->db->table('pembayaran');
        $builder2=$this->db->table('tagihan');
        if (empty($id)){
            return redirect()->back();
        }else{
            $builder->where(['id_tagihan'=>$id]);
            $builder2->where(['id_tagihan'=>$id]);
            $data['sbayar']=$builder->get()->getResult();
            $data['dtagihan']=$builder2->get()->getRow();
            $data['id']=$id;
            echo view('bayar2', $data);
        }
    }
    function save($id=null){
        $nim=$this->request->getPost('nim');
        $nama=$this->request->getPost('nama');
        $prodi=$this->request->getPost('prodi');
        $semester=$this->request->getPost('semester');

        if (!$this->validate([
            'kwitansi' => [
                'rules' => 'uploaded[kwitansi]|mime_in[kwitansi,image/jpg,image/jpeg,image/gif,image/png, application/pdf]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,pdf',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('kwitansi');
        $fileName = $dataBerkas->getRandomName();
        $a=[
            'id_tagihan'=>$id,
            'nim'=>$nim,
            'nama'=>$nama,
            'prodi'=>$prodi,
            'semester'=>$semester,
            'bukti_pembayaran'=>$fileName
            ];
        $builder=$this->db->table('pembayaran');
        $builder->insert($a);
        $dataBerkas->move('uploads/', $fileName);
        session()->setFlashdata('success', 'Konfirmasi Pembayaran berhasil terkirim');
        return redirect()->to(base_url('pembayaran/tagihan/'.$id));
    }
    function getPem($id=null){
        $db = db_connect();
        $builder = $db->table('pembayaran')->select('nama, bukti_pembayaran, prodi, semester,tgl')->where(['id_tagihan'=>$id]);

        return DataTable::of($builder)
            ->addNumbering() //it will return data output with numbering on first column
            ->toJson();
    }
}