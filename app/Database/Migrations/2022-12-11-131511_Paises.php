<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paises extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idpais' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('idpais', true);
        $this->forge->createTable('paises');
    }

    public function down()
    {
        $this->forge->dropTable('paises');
    }
}
