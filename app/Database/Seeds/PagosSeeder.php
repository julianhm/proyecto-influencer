<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PagosSeeder extends Seeder
{
    public function run()
    {
        
        $this->db->table('tipos_pagos')->where('idpago >',0)->delete();

        $pagos=['Canje por Producto','Dinero','Servicio',
        'Patrocinio'];

        for ($i=0; $i <count($pagos) ; $i++) { 
            $data = [
                'nombre' => $pagos[$i],
               
            ];
            $this->db->table('tipos_pagos')->insert($data);
        }
        
    }
}