<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfluencersPagos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'idpago' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ],'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ], 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('idpago', 'tipos_pagos', 'idpago', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('influencers_pagos');
    }

    public function down()
    {
        $this->forge->dropTable('influencers_pagos');
    }
}
