<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TiposPagos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idpago' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idpago', true);
        
        $this->forge->createTable('tipos_pagos');
    }

    public function down()
    {
        $this->forge->dropTable('tipos_pagos');
    }
}
