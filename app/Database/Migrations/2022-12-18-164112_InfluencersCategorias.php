<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfluencersCategorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'idcategoria' => [
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
        $this->forge->addForeignKey('idcategoria', 'categorias', 'idcategoria', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('influencers_categorias');
    }

    public function down()
    {
        $this->forge->dropTable('influencers_categorias');
    }
}
