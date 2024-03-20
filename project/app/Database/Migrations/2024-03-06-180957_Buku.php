<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
	{
    $this->forge->addField([
        'id'          => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'judul'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '50'
        ],
        'tahun_terbit'      => [
            'type'           => 'DATE',
        ],
        'penerbit' => [
            'type'           => 'VARCHAR',
            'constraint'     => 50,
        ],
        'status'      => [
            'type'           => 'ENUM',
            'constraint'     => ['Terbit', 'Produksi'],
            'default'        => 'Terbit',
        ],
    'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
    ]);

    // Membuat primary key
    $this->forge->addKey('id', TRUE);

    // Membuat tabel news
    $this->forge->createTable('buku', TRUE);
}

//-------------------------------------------------------

public function down()
{
    // menghapus tabel news
    $this->forge->dropTable('buku');
}
}