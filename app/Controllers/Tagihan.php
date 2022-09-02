<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Tagihan extends BaseController
{
    function index(){
        echo "sa";
    }
    function getTagihan($status=null){
        $tagihan=$this->db->table('tagihan')->get()->getResult();
        echo json_encode($tagihan);
    }
}