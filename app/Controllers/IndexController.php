<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use App\Models\CategoriasModel;
use App\Models\InfluencerModel;
use App\Models\InfluencerCategoriaModel;

class IndexController extends BaseController
{
    public function index()
    {
        
        $influencer = new InfluencerModel();
        $misinfluencer= $influencer-> findAll();

        $categorias = new InfluencerCategoriaModel();
        $miscategorias = $categorias->findAll(); 

        $cat = new CategoriasModel();
        $miscat = $cat->findAll(); 

        $db      = \Config\Database::connect();

        $arregloMostrarMayorPorCategoria=[];
        $item=0;
        
        foreach ($miscategorias as $key => $cat) { 
           
        
            $builder = $db->table('influencers_redes');
            $builder->select('*');
            //$builder->selectMax('influencers_redes.cant_seguidores');
            $builder->where('categorias.mostradas', 1);
            $builder->groupStart()->where('influencers_categorias.idcategoria',$cat['idcategoria'] )->groupEnd();
            
            $builder->join('influencers', 'influencers_redes.idinfluencer = influencers.idinfluencer');
            $builder->join('redes_sociales', 'redes_sociales.idredes = influencers_redes.idredes');
            $builder->join('influencers_categorias', 'influencers_categorias.idinfluencer = influencers.idinfluencer');
            $builder->join('categorias', 'categorias.idcategoria = influencers_categorias.idcategoria');
            //$builder->orderBy('influencers_redes.cant_seguidores', 'DESC');
            $builder->distinct('idcategoria');
            //$builder->orderBy('categorias.nombrecat', 'DESC');
           
            $query = $builder->get();
            $informacion =$query->getResultArray();
            $mayor=0;
             
            if(count($informacion)>0){
                $item++;
                foreach ($informacion as $key => $m) {
                    if($m['cant_seguidores']>$mayor){
                        $mayor=$m['cant_seguidores'];
                        $arregloMostrarMayorPorCategoria[$item]=$m;
                    }
                }
            }
            

            
       }
        //var_dump($arregloMostrarMayorPorCategoria);

        $builder="";
        $builder = $db->table('influencers');
        //$builder->select('influencers_categorias.idinfluencer')->distinct();
        $builder->select(['influencers_categorias.idinfluencer','influencers.nombreinflu','influencers.alias','categorias.nombrecat','influencers.foto_perfil']);
        $builder->join('influencers_categorias', 'influencers_categorias.idinfluencer = influencers.idinfluencer');
        $builder->join('categorias', 'categorias.idcategoria = influencers_categorias.idcategoria');
        //$builder->orderBy('created_at', 'DESC');
        $q = $builder->get();
        $informacioncate =$q->getResultArray();

        $arregloPerfiles=[];
        
        for ($i=0; $i < count($informacioncate) ; $i++) {
            if(count($arregloPerfiles)>0) {
                $cont=0;
                for ($k=0; $k < count($arregloPerfiles); $k++) { 
                    if($arregloPerfiles[$k]['idinfluencer']==$informacioncate[$i]['idinfluencer']){
                        $cont++;
                    }
                }
                if($cont==0){
                    array_push($arregloPerfiles,$informacioncate[$i]);  
                }
            }else{
                array_push($arregloPerfiles,$informacioncate[$i]);
            }
            
        }


        //var_dump($informacioncate);
        $validacion = \Config\Services::validation();
        session();

        $noticias=new NoticiasModel();

        $misNoticias=$noticias->findAll();
        
        //var_dump($misNoticias);
        $data= ['mensaje'=>"",'validation'=>$validacion,'datos'=>$arregloPerfiles,
                'noticias'=>$misNoticias,'informacion'=>$arregloMostrarMayorPorCategoria,
            'categorias'=>$miscat];

        //var_dump($informacioncate);
        $this-> _loadDefaultView('Busca Influencer',$data,'index');

    }

    private function _loadDefaultView($title,$data,$view){

        
        $dataHeader =[
            'titulo' => $title,
            
        ];
        
       
        echo view("influencer/templates/headerindex",$dataHeader);
        echo view("influencer/influencers/$view",$data);
        echo view("influencer/templates/footerindex");
       

    }

    

    
}