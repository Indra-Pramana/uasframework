<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'Mahendra',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '081234555678',
                'email'         =>  'mahendra@gmail.com',
                'alamat'    =>  'Jl. Bedugul No. 1, Sidakarya',
                'created_at' => Time::now()
            ],
            [
                'nama'          =>  'Indra',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '08571234567',
                'email'         =>  'indra@gmail.com',
                'alamat'    =>  'Jl. Sedap Malam No. 77, Denpasar',
                'created_at' => Time::now()
            ],
            [
                'nama'          =>  'Mario',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '08122334455',
                'email'         =>  'mario@gmail.com',
                'alamat'    =>  'Jl. Bedugul No. 17, Sidakarya',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('siswa')->insertBatch($data);
    }
}
