<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IdiomasSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('idiomas')->where('ididioma >',0)->delete();
        
        $idiomas=['Español','Ingles','Frances',
        'Italiano','Mandarín'];

        for ($i=0; $i <count($idiomas) ; $i++) { 
            $data = [
                'nombre' => $idiomas[$i],
               
            ];
            $this->db->table('idiomas')->insert($data);
        }
        
    }
}