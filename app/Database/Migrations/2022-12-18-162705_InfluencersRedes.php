<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfluencersRedes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'idredes' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ],'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ],'user' => [
                'type'       => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],'cant_seguidores' => [
                'type'       => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
                
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('idredes', 'redes_sociales', 'idredes', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('influencers_redes');
    }

    public function down()
    {
        $this->forge->dropTable('influencers_redes');
    }
}
