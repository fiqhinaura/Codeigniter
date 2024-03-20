<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        	// membuat data
		$buku_data = [
			[
				'judul' => 'Laut',
				'tahun_terbit'  => '2019-08-23',
				'penerbit' => 'Dhaninjaya',
				'kontrak' => 'Penerbit'
			],
			[
				'judul' => 'Mariposa',
				'tahun_terbit'  => '2016-02-03',
				'penerbit' => 'Manayaka',
				'kontrak' => 'Penulis'
			],
			[
				'judul' => 'Bunga',
				'tahun_terbit'  => '2021-12-17',
				'penerbit' => 'Dhaninjaya',
				'kontrak' => 'Bersama'
			],
		];

		foreach($buku_data as $data){
			// insert semua data ke tabel
			$this->db->table('buku')->insert($data);
		}

    }
}
