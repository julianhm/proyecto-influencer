<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admistradores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idadministrador' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],'correo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'password' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],  
        ]);
        $this->forge->addKey('idadministrador', true);
        
        $this->forge->createTable('administradores');
    }

    public function down()
    {
        $this->forge->dropTable('administradores');
    }
}
