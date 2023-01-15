<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IdiomasInfluencers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'ididioma' => [
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
        $this->forge->addForeignKey('ididioma', 'idiomas', 'ididioma', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('idiomas_influencers');
    }

    public function down()
    {
        $this->forge->dropTable('idiomas_influencers');
    }
}
