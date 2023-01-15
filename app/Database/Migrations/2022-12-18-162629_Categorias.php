<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idcategoria' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombrecat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'mostradas' => [
                'type'           => 'INT',
                'constraint'     => 1,
                
            ], 'imagen' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idcategoria', true);
        
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable('categorias');
    }
}
