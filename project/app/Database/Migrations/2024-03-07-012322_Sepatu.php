<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sepatu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sepatu' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'TEXT',
                'constraint' => '50',
            ],
            'pilih' => [
                'type' => 'ENUM',
                'constraint' => ['satu','dua'],
            ],
        ]);
        $this->forge->addKey('id_sepatu', true);
        $this->forge->createTable('sepatu');
    }

    public function down()
    {
        $this->forge->dropTable('sepatu');
    }
}
