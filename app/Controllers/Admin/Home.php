<?php
namespace App\Controllers\Admin;

class Home extends AdminController
{
  function index(){
    return redirect()->to(base_url().'/admin/tagihan');
  }
}