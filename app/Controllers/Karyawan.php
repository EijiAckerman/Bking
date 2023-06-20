<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    public function index()
    {
         $karyawan = new KaryawanModel;
         $data['karyawan'] = $karyawan->orderBy('nama', 'asc')->paginate(10);
        //  $data['karyawan'] = $karyawan->paginate(10);
         $data['pager'] = $karyawan->pager;
         echo view('karyawan', $data);
    }
    
    public function show($id_karyawan){
        $karyawan = new KaryawanModel();
        $detail['show'] = $karyawan->find($id_karyawan);
        return view('show', $detail);
    }

    public function add(){
        
        return view('add');

    }
    
    public function create(){
        $karyawan = new KaryawanModel();

      $result = $karyawan->insert([
         'nama'=>$this->request->getPost("nama"),
         'jenis_kelamin'=>$this->request->getPost("jenis_kelamin"),
         'no_telp'=>$this->request->getPost("no_telp"),
         'tanggal_lahir'=>$this->request->getPost("tanggal_lahir"),
         'alamat'=>$this->request->getPost("alamat")
         
      ]);
        

    }

}