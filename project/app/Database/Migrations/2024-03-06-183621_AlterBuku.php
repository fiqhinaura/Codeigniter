<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterBuku extends Migration
{
    public function up()
    {
        $this->forge->addColumn('buku',
        [
			'kontrak VARCHAR(50)'
		]);
    }

    public function down()
    {
        $this->forge->dropColumn('buku', 'kontrak');
    }
}
