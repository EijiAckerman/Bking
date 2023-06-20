<?php

namespace App\Controllers;

class Aji extends BaseController
{
    public function index()
    {
        $data=[
            'Nama' => 'Prasetya Aji Yudhistira', 
            'JK' => 'Laki-laki', 
            'Agama' => 'Islam', 
            'TTL' => 
            'Malang, 19 September 2003', 
            'Status' => 'Mahasiswa',
            'Alamat' => 'Jl. Sidodadi, Kebonagung, Kec. Pakisaji, Kota Malang.',
            'Nomer_HP' => '085748769301',
            'Email' => '211111023@mhs.stiki.ac.id',
            'SD' => 'SDN Gadang 3 Malang',
            'SMP' => 'SMPN 12 Malang',
            'SMK' => 'SMKN 1 Malang',
            'Kuliah' => 'Teknik Informatika di STIKI Malang (Semester 4)',
            'JV' => 'JAVA',
            'HTML' => 'HTML',
            'CSS' => 'CSS',
            'PHP' => 'PHP',
            'Pengalaman' => 'Pernah magang di Universitas Brawijaya Malang (Gedung Rektorat)'
        ];
        return view('welcome_message', $data,);
    }
}
