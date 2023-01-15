<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galerias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idfoto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'url' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'=> true
                
            ],
        ]);
        $this->forge->addKey('idfoto', true);
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('galerias');
    }

    public function down()
    {
        $this->forge->dropTable('galerias');
    }
}
