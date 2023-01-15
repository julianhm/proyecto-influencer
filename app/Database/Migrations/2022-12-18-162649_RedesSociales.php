<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RedesSociales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idredes' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ], 'icono' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'activa' => [
                'type'       => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('idredes', true);
        
        $this->forge->createTable('redes_sociales');
    }

    public function down()
    {
        $this->forge->dropTable('redes_sociales');
    }
}
