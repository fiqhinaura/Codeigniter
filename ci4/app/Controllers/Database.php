<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Database extends BaseController
{
    public function index()
    {
            $forge = \Config\Database::forge();
    
            // Membuat tabel 'users'
            $fields = [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'username' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'email' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
            ];
            $forge->addField($fields);
            $forge->addKey('id', true);
            $forge->createTable('users');
    
            // Menambahkan kolom 'UMUR' ke tabel 'users'
            $forge->addColumn('users', [
                'umur' => [
                    'type' => 'VARCHAR',
                    'constraint' => 10,
                ]
            ]);
    
            // Mengubah tipe data kolom 'email' menjadi 'TEXT'
            $forge->modifyColumn('users', [
                'email' => [
                    'type' => 'TEXT',
                ]
            ]);
    
            // Menghapus kolom 'password' dari tabel 'users'
            $forge->dropColumn('users', 'password');
    
            // Menghapus tabel 'users'
            $forge->dropTable('users');
    }
}
