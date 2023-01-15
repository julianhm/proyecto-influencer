<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Influencers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'nombreinflu' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],'alias' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],'correo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'foto_perfil' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => true,
            ],'video' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => true,
            ], 'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ], 'reputacion' => [
                'type' => 'INT',
                'null' => true,
            ], 'oferta' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => true,
            ], 'resenia' => [
                'type' => 'TEXT',
                'null' => true,
            ], 'password' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ], 'idciudad' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
            ], 'created_at'=>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],'updated_at'=>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],'deleted_at'=>[
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('idinfluencer', true);
        $this->forge->addForeignKey('idciudad', 'ciudades', 'idciudad', 'CASCADE', 'SET NULL');
        $this->forge->createTable('influencers');
    }

    public function down()
    {
        $this->forge->dropTable('influencers');
    }
}
