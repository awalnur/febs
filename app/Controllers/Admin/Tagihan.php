<?php

namespace App\Controllers\Admin;

use mysql_xdevapi\Exception;
use \Hermawan\DataTables\DataTable;

class Tagihan extends AdminController
{
    function __construct()
    {
    }
    function index()
    {
        echo view('admin/templates/header');
        echo view('admin/tagihan');
        echo view('admin/templates/footer');
    }
    function form($type='input', $id=null)
    {
        if ($type=='input'){
            $d['title']="Tambah Jenis";
        }elseif ($type=='edit'){
            if (empty($id)){
                return redirect()->back();
            }
            $builder=$this->db->table('tagihan');
            $builder->where(['id_tagihan'=>$id]);
            $data=$builder->get()->getRow();
            $d['title']="Edit Tagihan";
            $d['data']=$data;
            $d['idt']='<input type="text" class="invisible" id="idtagihan" name="id_tagihan" placeholder="Jenis Tagihan" value="'.$data->id_tagihan.'" required>';

        }else{

            return redirect()->back();
        }

        echo view('admin/templates/header');
        echo view('admin/form', $d);
        echo view('admin/templates/footer');
    }
    function save($save='input', $id=null){
        $tagihan=$this->request->getPost('tagihan');
        $prodi=$this->request->getPost('prodi');
        $semester=$this->request->getPost('semester');
        $keterangan=$this->request->getPost('keterangan');
        $waktu=$this->request->getPost('batas_waktu');
        $status=$this->request->getPost('status');
        if (empty($status)){
            $sts='Inactive';
        }else{
            $sts='Active';
        }
        $array=['tagihan'=>$tagihan,
            'prodi'=>$prodi,
            'semester'=>$semester,
            'keterangan'=>$keterangan,
            'batas_waktu'=>$waktu,
            'status'=>$sts,
        ];
        $builder=$this->db->table('tagihan');

        if (!empty($save=='input')){
                $ins=$builder->insert($array);
                if (!$ins)
                {
                   $res['error']=1;
                   $res['message']=$ins;
                }else{
                    $res['success']=1;
                    $res['s']='save';
                }
        }else if(!empty($save=='update')){
            $ids=$this->request->getPost('id_tagihan');
            $builder->where('id_tagihan', $ids);
            $up=$builder->update($array);
            if (!$up){

                $res['error']=1;
            }else{

                $res['s']='edit';
                $res['success']=1;

            }
        }else{
            $res['error']=1;
        }
        echo json_encode($res);
    }
    function delete($id=null){
        $id2=$this->request->getPost('id');
//        $id2=2;
        if ($id2!=$id){
            $res['error']=1;
        }else if(empty($id2)){
            $res['error']=1;
        }else{
            $b=$this->db->table('tagihan');
            $c=$b->delete(['id_tagihan'=>$id2]);
            try {
                if ($c){
                    $res['success']=1;
                }else{
                    throw new Exception("Configuration file not found.");
                }
            }catch (Exception $e){
                $res['error']=1;
                $res['message']=$e->getMessage();
            }
        }
        echo json_encode($res);

    }
    function getTagihan(){
        $db = db_connect();
        $builder = $db->table('tagihan')->select('tagihan, prodi, semester, keterangan, id_tagihan');

        return DataTable::of($builder)
            ->addNumbering() //it will return data output with numbering on first column
            ->toJson();
    }
}