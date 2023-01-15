<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('marcas')->where('idmarca >',0)->delete();

        $marcas=['Cocacola','Flamingo','Caracol',
        'MouseStore','TecnoData'];

        for ($i=0; $i <count($marcas) ; $i++) { 
            $data = [
                'nombre' => $marcas[$i],'tipo'=>'publica',
                'idinfluencer'=>$i+1];
            $this->db->table('marcas')->insert($data);
        }
        
    }
}