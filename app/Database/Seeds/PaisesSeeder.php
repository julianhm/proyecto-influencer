<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        //$this->db->table('paises')->where('idpais >',0)->delete();

        

        // Simple Queries
       // $this->db->query('INSERT INTO influencers (nombre, seudonimo) VALUES(:nombre:, :seudonimo:)', $data);

        // Using Query Builder
        $paises=['Colombia','Venezuela','Ecuador','México','Panamá'];

        for ($i=0; $i <count($paises) ; $i++) { 
            $data = [
                'nombre' => $paises[$i],
               
            ];
            $this->db->table('paises')->insert($data);
        }
        
    }
}