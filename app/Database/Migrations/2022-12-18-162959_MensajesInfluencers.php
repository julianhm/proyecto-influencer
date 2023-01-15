<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MensajesInfluencers extends Migration
{
    public function up(){

        $this->forge->addField([
            'idmensaje' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'empresa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'cuerpo' => [
                'type'       => 'VARCHAR',
                'constraint' => '5000',
                'null' => false,
            ],'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
            ],'valoracion' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idmensaje', true);
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('mensajes_influences');
    }

public function down()
{
    $this->forge->dropTable('mensajes_influences');
}
}
