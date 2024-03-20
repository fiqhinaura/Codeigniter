<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sepatu extends Seeder
{
    public function run()
    {
        $data = [
            'merk' => 'ardiles',
            'email'    => 'darth@theempire.com',
            'pilih'    => 'dua',
        ];
        $this->db->table('sepatu')->insert($data);
    }
}
