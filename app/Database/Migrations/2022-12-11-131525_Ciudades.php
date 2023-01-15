<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ciudades extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idciudad' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 'idpais' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idciudad', true);
        $this->forge->addForeignKey('idpais', 'paises', 'idpais', 'CASCADE', 'SET NULL');
        $this->forge->createTable('ciudades');
    }

    public function down()
    {
        $this->forge->dropTable('ciudades');
    }
}
