<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Noticias extends Migration
{
  
    public function up(){

        $this->forge->addField([
            'idnoticia' => [
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
            ],'url_foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '5000',
                'null' => true,
                
            ],
        ]);
        $this->forge->addKey('idnoticia', true);
        
        $this->forge->createTable('noticias');
    }

public function down()
{
    $this->forge->dropTable('noticias');
}
}
