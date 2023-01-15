<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Marcas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idmarca' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ], 'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ],
        ]);
        $this->forge->addKey('idmarca', true);
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('marcas');
    }

    public function down()
    {
        $this->forge->dropTable('marcas');
    }
}
