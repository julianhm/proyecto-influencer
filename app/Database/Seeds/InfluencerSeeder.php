<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InfluencerSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('influencers')->where('idinfluencer >',0)->delete();

        

        // Simple Queries
       // $this->db->query('INSERT INTO influencers (nombre, seudonimo) VALUES(:nombre:, :seudonimo:)', $data);

        // Using Query Builder

        for ($i=0; $i <10 ; $i++) { 
            $data = [
                'nombreinflu' => 'pedrito andres martinez'.$i,
                'alias'    => 'peter'.$i,
                'correo'    => 'peter'.$i.'@hotmail.com',
                'usuario'    => 'peter'.$i.'user',
                'password'    => '12345'.$i.'passw',
                'idciudad'    => rand(1, 124),
                'foto_perfil' => 'foto'.$i.'hhsa8as.jpg',
                'video' => 'video'.$i.'jhs77893.mp4',
                'reputacion' => rand(1,5),
                'resenia' => 'resenia reseniaresenia resenia reseniaresenia resenia',
                'oferta' => 'rebaja de 100 personas ',
            ];
            $this->db->table('influencers')->insert($data);
        }
        
    }
}