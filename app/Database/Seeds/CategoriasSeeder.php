<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('categorias')->where('idcategoria >',0)->delete();
        
        $categorias=['Gastronomia','Farandula','Estilo de vida',
        'Humanidades','De todo', 'Tecnologia', 'Entretenimiento',
        'Belleza', 'Transporte','Esoterismo','Ciencia', 'Cine',
        'Talentos especiales','Sexo', 'Astrologia', 'Identidad',
        'Arte y Diseño', 'Politica y Sociedad','Nutricion','Musica',
        'Superacion', 'Religion','Moda', 'Juegos', 'Salud',
        'Turismo y viajes', 'Finanzas', 'Educacion','Deportes', 
        'Amor', 'Aventura','Entrenamiento','Opinion'];

        $imagen=['cat1.png','cat2.png','cat3.png','cat4.png','cat5.png',
        'cat1.png','cat2.png','cat3.png','cat4.png','cat5.png','cat1.png','cat2.png','cat3.png','cat4.png','cat5.png',
        'cat1.png','cat2.png','cat3.png','cat4.png','cat5.png','cat1.png','cat2.png','cat3.png','cat4.png','cat5.png','cat1.png','cat2.png','cat3.png'];

        for ($i=0; $i <count($categorias) ; $i++) { 
            $data = [
                'nombrecat' => $categorias[$i], 'mostradas'=>0,'imagen'=>$imagen[$i]
            ];
            $this->db->table('categorias')->insert($data);
        }
        
    }
}