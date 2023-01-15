<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comentarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idcomentario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'titulo' => [
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
            ],'estrellas' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idcomentario', true);
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('comentarios');
    }

    public function down()
    {
        $this->forge->dropTable('comentarios');
    }
}
