<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CiudadesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('ciudades')->where('idciudad >',0)->delete();

        

        // Simple Queries
       // $this->db->query('INSERT INTO influencers (nombre, seudonimo) VALUES(:nombre:, :seudonimo:)', $data);

        // Using Query Builder
        $ciudacolom=[
            'AMAZONAS',
            'ANTIOQUIA',
            'ARAUCA',
            'ARCHIPIELAGO DE SAN ANDRES',
            'ATLÁNTICO',
            'BOGOTÁ D.C.',
            'BOLIVAR',
            'BOYACÁ',
            'CALDAS',
            'CAQUETA',
            'CASANARE',
            'CAUCA',
            'CESAR',
            'CHOCO',
            'CORDOBA',
            'CUNDINAMARCA',
            'GUAINIA',
            'GUAVIARE',
            'HUILA',
            'LA GUAJIRA',
            'MAGDALENA',
            'META',
            'NARIÑO',
            'NORTE DE SANTANDER',
            'PUTUMAYO',
            'QUINDIO',
            'RISARALDA',
            'SANTANDER',
            'SUCRE',
            'TOLIMA',
            'VALLE DEL CAUCA',
            'VAUPES',
            'VICHADA',
            

        ];

        for ($i=1; $i <count($ciudacolom) ; $i++) { 
            
            $data = [
                'nombre' => $ciudacolom[$i],
                'idpais' => 1,    
            ];
            $this->db->table('ciudades')->insert($data);
        
    }

    $provivenezuela=[
        'Amazonas',
'Anzoátegui',
'Apure',
'Aragua',
'Barinas',
'Bolívar',
'Carabobo',
'Cojedes',
'Delta Amacuro',
'Distrito Capital',
'Falcón',
'Guárico',
'Lara',
'Mérida',
'Miranda',
'Monagas',
'Nueva Esparta',
'Portuguesa',
'Sucre',
'Táchira',
'Trujillo',
'Vargas',
'Yaracuy',
'Zulia',
'Dependencias Federales',


    ];

    for ($i=1; $i <count($provivenezuela) ; $i++) { 
            
        $data = [
            'nombre' => $provivenezuela[$i],
            'idpais' => 2,    
        ];
        $this->db->table('ciudades')->insert($data);
    
}

    $provinecuador=[
        'Azuay',
'Bolívar',
'Cañar',
'Carchi',
'Chimborazo',
'Cotopaxi',
'El Oro',
'Esmeraldas',
'Galápagos',
'Guayas',
'Imbabura',
'Loja',
'Los Ríos',
'Manabí',
'Morona-Santiago',
'Napo',
'Orellana',
'Pastaza',
'Pichincha',
'Santa Elena',
'Santo Domingo de los Tsáchilas',
'Sucumbíos',
'Tungurahua',
'Zamora-Chinchipe',


    ];

    for ($i=1; $i <count($provinecuador) ; $i++) { 
            
        $data = [
            'nombre' => $provinecuador[$i],
            'idpais' => 3,    
        ];
        $this->db->table('ciudades')->insert($data);
    
}

$ciudadesmexico=[
    'Aguascalientes',
    'Baja California',
    'Baja California Sur',
    'Campeche',
    'Chiapas',
    'Chihuahua',
    'Ciudad de México',
    'Coahuila',
    'Colima',
    'Durango',
    'Guanajuato',
    'Guerrero',
    'Hidalgo',
    'Jalisco',
    'México',
    'Michoacán',
    'Morelos',
    'Nayarit',
    'Nuevo León',
    'Oaxaca',
    'Puebla',
    'Querétaro',
    'Quintana Roo',
    'San Luis Potosí',
    'Sinaloa',
    'Sonora',
    'Tabasco',
    'Tamaulipas',
    'Tlaxcala',
    'Veracruz',
    'Yucatán',
    'Zacatecas',
    

];

for ($i=1; $i <count($ciudadesmexico) ; $i++) { 
            
    $data = [
        'nombre' => $ciudadesmexico[$i],
        'idpais' => 4,    
    ];
    $this->db->table('ciudades')->insert($data);

}

$ciudadpanama=[
    'BOCAS DEL TORO',
    'COCLÉ',
    'COLÓN',
    'CHIRIQUÍ',
    'DARIÉN',
    'HERRERA',
    'LOS SANTOS',
    'PANAMÁ',
    'PANAMÁ OESTE',
    'VERAGUAS',
    'COMARCA NGÄBE BUGLÉ',
    'COMARCA EMBERÁ-WOUNAAN',
    'COMARCA GUNA YALA',
    'COMARCA GUNA DE MADUGANDÍ',
    'COMARCA GUNA DE MADUGANDÍ',
      
    
];

for ($i=1; $i <count($ciudadpanama) ; $i++) { 
            
    $data = [
        'nombre' => $ciudadpanama[$i],
        'idpais' => 5,    
    ];
    $this->db->table('ciudades')->insert($data);

}
        
 }
}