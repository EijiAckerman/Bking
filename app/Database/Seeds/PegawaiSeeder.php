<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'Kyokou',
                'jenis_kelamin' =>  'pria',
                'alamat'        =>  'Kyoto',
                
            ],
            [
                'nama'          =>  'Miyamura',
                'jenis_kelamin' =>  'pria',
                'alamat'        =>  'Tokyo',
                
            ]
        ];
        $this->db->table('pegawai')->insertBatch($data);
    }
}
