<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Idiomas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ididioma' => [
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
        $this->forge->addKey('ididioma', true);
        
        $this->forge->createTable('idiomas');
    }

    public function down()
    {
        $this->forge->dropTable('idiomas');
    }
}
