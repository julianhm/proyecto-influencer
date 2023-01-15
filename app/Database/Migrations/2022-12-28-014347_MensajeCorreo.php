<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MensajeCorreo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'idinfluencer' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null' => true,
            ],'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'empresa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'correoremitente' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
                'null' => false,
            ], 'celularremitente' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ], 'cuerpo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
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
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('idinfluencer', 'influencers', 'idinfluencer', 'CASCADE', 'SET NULL');
        $this->forge->createTable('mensaje_correo');
    }

    public function down()
    {
        $this->forge->dropTable('mensaje_correo');
    }
}
